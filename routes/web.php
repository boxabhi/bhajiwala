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
use Illuminate\Support\Facades\Route; 
Route::get('/', function () {
    return view('website.index');
});


Route::get('/stock', function () {
    return view('website.stock');
});



Route::resource('/serve','TransactionController');
Route::post('/serve','TransactionController@store')->name('transaction.store');

Route::post('/create/Vegetable','VegController@store');
Route::post('/update/Vegetable','VegController@update');
Route::post('/create/Restraunt','RestrauntController@store');

Route::resource('restraunt', 'RestrauntController');



Route::resource('product', 'VegController');

