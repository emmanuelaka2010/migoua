<?php

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


Route::get('/', 'PageController@index')->name('index');
Route::get('/category', 'PageController@category')->name('category');
Route::get('/product', 'PageController@product')->name('product');
Route::get('/cart', 'CartController@cart')->name('cart');
Route::get('/cart/delete/{id}', 'CartController@cart_delete')->name('cart.delete');
Route::get('checkout', 'CheckoutController@index')->name('checkout');
Route::get('search', 'SearchProductController@search')->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/cart/add', 'CartController@add_to_cart')->name('cart.add');
Route::get('/login_1', function() {
    $title_login = 'Login';
    return view('login')->with('title', $title_login);
});

Route::get('/register_1', function() {
    $title_register = 'Register';
    return view('register')->with('title', $title_register);
})->name('register_1');
