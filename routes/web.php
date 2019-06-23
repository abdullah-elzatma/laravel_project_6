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
    return view('base_layout/master_layout');
});

Route::get('create','FController@create');

Route::post('create',['as'=>'store','uses'=>'FController@store']);

Route::get('index','FController@index');


Route::get('update','FController@edit');