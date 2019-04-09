<?php

Route::get('/', 'MainController@index')->name('home');
Route::get('/show', 'MainController@show')->name('show');
