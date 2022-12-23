<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StripePaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::controller(ProductController::class)->group(function(){

    Route::get('products', 'index')->name('products.index');

    Route::post('products', 'store')->name('products.store');

    Route::get('products/create', 'create')->name('products.create');

    Route::get('products/{product}', 'show')->name('products.show');

    Route::put('products/{product}', 'update')->name('products.update');

    Route::delete('products/{product}', 'destroy')->name('products.destroy');

    Route::get('products/{product}/edit', 'edit')->name('products.edit');

    Route::post('products/{product}/delete', 'delete')->name('products.delete');

    Route::get('home/products','grid')->name('products.grid');

    Route::get('home/products/{product}', 'detail')->name('products.detail');
});

Route::controller(CartController::class)->group(function(){

    Route::get('cart', 'index')->name('cart');

    Route::post('cart', 'store')->name('cart.store');

    Route::patch('cart/add', 'update')->name('cart.update');

    Route::delete('remove-from-cart/id', 'destroy')->name('cart.destroy');

    Route::delete('cart/clear', 'clear')->name('cart.clear');
    
    Route::get('order', 'open')->name('orders.create');
});

Route::controller(OrderController::class)->group(function(){

    Route::get('orders', 'index')->name('orders.index');

    Route::get('orders/complete', 'complete')->name('orders.complete');

    Route::post('orders', 'store')->name('orders.store');

    Route::get('orders/{order}', 'show')->name('orders.show');

    Route::patch('orders/add', 'update')->name('orders.update');

    Route::delete('orders', 'destroy')->name('orders.destroy');

    Route::get('orders/{order}/edit', 'edit')->name('orders.edit');

    Route::post('orders/{order}/delete', 'delete')->name('orders.delete');

});

Route::controller(UserController::class)->group(function(){

    Route::get('users', 'index')->name('users.index');

    Route::get('users/{user}', 'show')->name('users.show');

    Route::delete('users', 'destroy')->name('users.destroy');

    Route::get('users/{user}/edit', 'edit')->name('users.edit');

    Route::post('users/{user}/delete', 'delete')->name('users.delete');

});

Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});