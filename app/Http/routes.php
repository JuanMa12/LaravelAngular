<?php

Route::get('/', function () {return view('index');});
Route::get('/usersList', function () {return view('index1');});
Route::get('/login', function () {return view('login');});
Route::post('/auth', 'LoginController@index');

Route::get('/products/{id?}', 'ProductController@index');
Route::post('/products', 'ProductController@store');
Route::post('/products/{id}', 'ProductController@update');
Route::delete('/products/{id}', 'ProductController@destroy');

Route::get('/users/{id?}', 'UserController@index');
Route::post('/users', 'ProductController@store');


