<?php

Route::get('/', function(){
    return view('site.index');
})->name('home');

Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
