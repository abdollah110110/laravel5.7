<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//Route::post('/register/create', 'RegisterController@register')->name('register.create');
