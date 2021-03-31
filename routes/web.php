<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@index')->name('users.all')->middleware('auth');
Route::get('/user/edit', 'UserController@index')->name('user.edit')->middleware('auth');
Route::get('/user/delete', 'UserController@index')->name('user.delete')->middleware('auth');
