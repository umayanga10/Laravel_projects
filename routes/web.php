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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'RegisterController@create')->name('create');
Route::post('/store', 'RegisterController@store')->name('store');
Route::get('/home', 'RegisterController@show')->name('home');

Route::get('/showimage/{id}', 'RegisterController@display');
Route::get('/edit/{id}', 'RegisterController@edit');
Route::put('/update/{id}', 'RegisterController@update');
Route::get('/delete/{id}', 'RegisterController@delete');

