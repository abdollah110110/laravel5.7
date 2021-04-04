<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@index')->name('users.all')->middleware('auth');
Route::get('/user/show/{user}', 'UserController@show')->name('user.show')->middleware('auth');
Route::get('/user/edit/{user}', 'UserController@edit')->name('user.edit')->middleware('auth');
Route::patch('/user/update/{user}', 'UserController@update')->name('user.update')->middleware('auth');
Route::get('/user/delete/{user}', 'UserController@destroy')->name('user.destroy')->middleware('auth');


Route::resource('category', 'CategoryController');
Route::delete('/categories/delete','CategoryController@severalDelete')->name('several.delete')->middleware('auth');
