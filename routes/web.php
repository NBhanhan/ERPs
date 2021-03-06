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
    return view('welcome');
});
Route::get('/home', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('/create', 'SupplierController@create')->name('create');
//Route::get('/suppliers/search', 'SupplierController@search');
//Route::patch('/supplier/{supplier}', 'SupplierController@update');
//Route::delete('/supplier/{supplier}', 'SupplierController@destory');
