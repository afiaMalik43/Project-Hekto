<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id;
        $carts = Cart::latest()->join('products', 'products.id', '=', 'carts.product_id')
                    ->where('carts.user_id',$id)
              		->get(['products.*', 'carts.quantity','carts.id']);
        return view('cart', compact('carts'));
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
            'product_id' => 'required',
            'user_id' => 'required',
        ]);

        $input = $request->all();

        cart::create($input);

        return redirect()->route('cart')
            ->with('success', 'cart created successfully.');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request)
    {
        //
        $request->quantity=$request->quantity;
        DB::table('carts')
        ->where('id', $request->id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('quantity' => $request->quantity));  // update the record in the DB.
        session()->flash('success', "Cart Item updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id=$request->id;
        $cart = Cart::find($id);
        $cart->delete();
        session()->flash('success', 'Product removed successfully');
    }

    public function clear()
    {
        //
        $id = Auth::user()->id;
        Cart::where('user_id',$id)->delete();
        return redirect()->route('cart')
        ->with('success', 'cart cleared successfully.');
    }

    public function open()
    {
        //
        $id = Auth::user()->id;
        $carts = Cart::latest()->join('products', 'products.id', '=', 'carts.product_id')
                    ->where('carts.user_id',$id)
              		->get(['products.*', 'carts.quantity','carts.id']);
        return view('order_form', compact('carts'));
    }
}
