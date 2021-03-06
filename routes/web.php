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
    return view('auth.login');
})->middleware('guest');


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::post('currency/add','CurrencyController@store');
Route::get('currency/get','CurrencyController@index');
Route::post('exchange/add','ExchangeController@store');
Route::post('exchange/calculate','ExchangeController@calculate');


