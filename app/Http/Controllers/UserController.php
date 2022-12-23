<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Order;
use App\Models\Cart;

class UserController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::latest()->paginate(5);

        return view('admin.users.userList', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        $users = User::where('id', $user->id)->get();
        $orders = Order::join('order_items','order_items.order_id','=','orders.id')
        ->where('orders.user_id', $user->id)
        ->groupBy('orders.id')->get(['orders.*',DB::raw('count(order_items.id) as items')]);
        $amount = Order::select(DB::raw('sum(total) as amount'))
            ->where('user_id', $user->id)
            ->first();
        $total = Order::select(DB::raw('count(id) as total'))
            ->where('user_id', $user->id)
            ->first();
        $complete = Order::select(DB::raw('count(id) as complete'))
            ->where('user_id', $user->id)
            ->where('status', 'Completed')
            ->first();
        $pending = Order::select(DB::raw('count(id) as pending'))
            ->where('user_id', $user->id)
            ->where('status', 'Pending')
            ->first();
        $cart = Cart::select(DB::raw('count(quantity) as cart'))
            ->where('user_id', $user->id)
            ->first();
        return view('admin.users.show', compact('users', 'orders', 'total', 'amount', 'complete', 'pending', 'cart',));
    }
}
