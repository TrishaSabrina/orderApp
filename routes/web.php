<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;


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
    return view('welcome');
});


//Route::get('products/create', 'App\Http\Controllers\ProductController@create');
Route::resource('products', 'App\Http\Controllers\ProductController');

Route::get('orders/create', 'App\Http\Controllers\OrderController@create');
Route::resource('orders', 'App\Http\Controllers\OrderController');

Route::post('index', 'App\Http\Controllers\ProductController@index');



