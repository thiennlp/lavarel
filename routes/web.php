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

/*
* Page User
*/

Route::get('/user', 'UserController@index')->name('user');
Route::get('/user/edit/{id}', 'UserController@getForm');
Route::post('/user/edit/{id}', 'UserController@save');