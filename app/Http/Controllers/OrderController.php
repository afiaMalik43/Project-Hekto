<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::latest()->paginate(5);

        return view('admin.orders.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'email' => 'required',
            'address' => 'required',
        ]);
        $id = Auth::user()->id;
        $query = Cart::select(DB::raw('sum(quantity * products.discount_price) as total'))
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->where('carts.user_id', $id)
            ->first();
        $sub_total = $query->total;
        $total = $sub_total + 200;
        $request->request->add(['sub_total' => $sub_total]); //add request
        $request->request->add(['shipping' => '200']); //add request
        $request->request->add(['total' => $total]); //add request
        $request->request->add(['user_id' => $id]); //add request
        $order_id = Order::create($request->all())->id;
        /*
        *
        * Order has been created
        * Now add move cart items to Order items
        * And then delete them from Cart Table
        */
        $carts = Cart::join('products', 'products.id', '=', 'carts.product_id')
            ->where('carts.user_id', $id)
            ->get(['products.id as product_id', 'carts.quantity', 'products.discount_price as price'])
            ->toArray();
        foreach ($carts as $cartItem) {
            # code...
            $cartItem=Arr::add($cartItem, 'order_id', $order_id);
            OrderItem::create($cartItem);
        }
        Cart::where('user_id', $id)->delete();
        return redirect()->route('orders.complete')
            ->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
        $orderItem = OrderItem::join('products', 'products.id', '=', 'order_items.product_id')
        ->where('order_id',$order->id)
        ->get(['products.name', 'products.image', 'products.detail' , 'order_items.quantity','order_items.price','order_items.created_at']);
        $orders = Order::where('id', $order->id)->get();
        return view('admin.orders.show', compact('orderItem','orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
        return view('orders.edit', compact('order'));
    }

    /**
     * Show the order completion page.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function complete()
    {
        //
        return view('order_complete');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        error_log('I was here');
        DB::table('orders')
        ->where('id', $request->id)  
        ->update(array('status' => $request->status));  // update the record in the DB.
        session()->flash('success', "Order Status updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
        $order->delete();

        return redirect()->route('orders.index')
            ->with('success', 'Order deleted successfully');
    }
}
