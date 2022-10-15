<?php

use Illuminate\Support\Facades\Route;

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


//index controller
Route::get('/', 'App\Http\Controllers\IndexController@index');
Route::get('/about','App\Http\Controllers\IndexController@about');
Route::get('contact', 'App\Http\Controllers\IndexController@contact');


//shop controller
Route::get('/shop', 'App\Http\Controllers\ShopController@shop');


//blog

Route::get('/blog','App\Http\Controllers\BlogController@blog');


//cart
Route::get('/cart', 'App\Http\Controllers\CartController@cart');
Route::get('/wishlist','App\Http\Controllers\CartController@wishlist');

