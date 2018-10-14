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

Route::get('/', function () {
    return view('shop.index');
});

Route::get('/cart', 'Shop\ShopController@cart');
Route::get('/checkout', 'Shop\ShopController@checkout');
Route::get('/contact', 'Shop\ShopController@contact');
Route::get('/product-detail', 'Shop\ShopController@productDetail');
Route::get('/products', 'Shop\ShopController@products');
Route::get('/register', 'Shop\ShopController@products');


