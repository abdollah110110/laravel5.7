<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/show', 'HomeController@show')->name('show');

Route::group(
    [
        'namespace' => 'Auth', 
        'prefix' => 'auth'
    ],
    function(){
        // Registration Routes...
        Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'RegisterController@register')->name('register.post');
   }
);

