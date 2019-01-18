<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.user');
});

Route::get('/admin/user', 'UserController@index');
Route::get('/admin/user/new', 'UserController@getForm');
Route::post('/admin/user/new', 'UserController@save');
Route::get('/admin/user/edit/{id}', 'UserController@getForm');
Route::post('/admin/user/edit/{id}', 'UserController@save');
