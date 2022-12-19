<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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


//Route::resource('products', ProductController::class);
Route::controller(ProductController::class)->group(function(){

    Route::get('products', 'index')->name('products.index');

    Route::post('products', 'store')->name('products.store');

    Route::get('products/create', 'create')->name('products.create');

    Route::get('products/{product}', 'show')->name('products.show');

    Route::put('products/{product}', 'update')->name('products.update');

    Route::delete('products/{product}', 'destroy')->name('products.destroy');

    Route::get('products/{product}/edit', 'edit')->name('products.edit');

    Route::post('products/{product}/delete', 'delete')->name('products.delete');

    Route::get('products','grid')->name('products.grid');

    Route::get('products/{product}', 'detail')->name('products.detail');
});

Route::controller(CartController::class)->group(function(){

    Route::get('cart', 'index')->name('cart.index');

    Route::post('cart', 'store')->name('cart.store');

    Route::get('cart/create', 'create')->name('cart.create');

    Route::get('cart/{product}', 'show')->name('cart.show');

    Route::put('cart/{product}', 'update')->name('cart.update');

    Route::delete('cart/{product}', 'destroy')->name('cart.destroy');

    Route::get('cart/{product}/edit', 'edit')->name('cart.edit');

    Route::post('cart/{product}/delete', 'delete')->name('cart.delete');

    Route::get('cart','grid')->name('cart.grid');

    Route::get('cart/{product}', 'detail')->name('cart.detail');
});