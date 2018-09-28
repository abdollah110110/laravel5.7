<?php

Route::get('/', function(){
    return view('site.index');
})->name('home');

Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
Route::post('categories/store', 'CategoryController@store')->name('categories.store');
Route::get('categories/{category}/show', 'CategoryController@show')->name('categories.show');
Route::delete('categories/destroy/{category}', 'CategoryController@destroy')->name('categories.destroy');
Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit');
Route::put('categories/{category}/update', 'CategoryController@update')->name('categories.update');
