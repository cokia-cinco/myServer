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
    return view('user');
});
Route::get('/List','User\UsersController@show');
Route::get('/delete','User\UsersController@del');
Route::get('/edit','User\UsersController@edit');
Route::get('/detail','User\UsersController@detail');
Route::get('/doEdit','User\UsersController@doEdit');
Route::get('/add','User\UsersController@add');
Route::get('/doAdd','User\UsersController@doAdd');
