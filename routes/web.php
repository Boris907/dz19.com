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

Route::get('/','ProductsController@index');
Route::get('/products','ProductsController@index');
Route::get('/products/{product}','ProductsController@show');
Route::get('/add_products','ProductsController@create');
Route::post('/products','ProductsController@store');

Route::get('/orders','OrdersController@index');
Route::get('/orders/new','OrdersController@create');
Route::post('/orders','OrdersController@store');

Route::get('/pages','PagesController@index');

