<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@index')->name('users.all')->middleware('auth');
Route::get('/user/edit/{user}', 'UserController@edit')->name('user.edit')->middleware('auth');
Route::patch('/user/update/{user}', 'UserController@update')->name('user.update')->middleware('auth');
Route::get('/user/delete/{user}', 'UserController@delete')->name('user.delete')->middleware('auth');
