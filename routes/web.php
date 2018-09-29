<?php

Route::get('/', function(){
    return view('site.index');
})->name('home');

//Categories Routes
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
Route::post('categories/store', 'CategoryController@store')->name('categories.store');
Route::get('categories/{category}/show', 'CategoryController@show')->name('categories.show');
Route::delete('categories/destroy/{category}', 'CategoryController@destroy')->name('categories.destroy');
Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit');
Route::put('categories/{category}/update', 'CategoryController@update')->name('categories.update');

//Articles Routes
Route::get('/articles', 'ArticleController@index')->name('articles');
Route::get('/articles/create', 'ArticleController@create')->name('articles.create');
Route::post('/articles/store', 'ArticleController@store')->name('articles.store');
Route::get('articles/{article}/show', 'ArticleController@show')->name('articles.show');
Route::delete('articles/destroy/{article}', 'ArticleController@destroy')->name('articles.destroy');
Route::get('articles/{article}/edit', 'ArticleController@edit')->name('articles.edit');
Route::put('articles/{article}/update', 'ArticleController@update')->name('articles.update');