<?php
Auth::routes();

Route::get('/', function(){
	return view('site.home');
})->name('home');

Route::get('/users', 'UserController@index')->name('users');

Route::get( '/articles', 'ArticleController@index' )->name('articles');

Route::get( '/articles/latest', 'ArticleController@latest')->name('articles.latest');

Route::get( '/articles/userarticles/{user}', 'ArticleController@userArticles')->name('userarticles');

Route::get( '/articles/tagarticles/{tag}', 'ArticleController@tagArticles')->name('tagarticles');

Route::get( '/articles/show/{article}', 'ArticleController@show')->name('article.show');

Route::post( '/article/comment/{article}', 'CommentController@store')->name('comment.store')->middleware('auth');

Route::get( '/articles/create', 'ArticleController@create' )->name('article.create')->middleware('auth');

Route::post('/articles/store', 'ArticleController@store')->name('article.store')->middleware('auth');

Route::get( '/articles/edit/{article}', 'ArticleController@edit')->name('article.edit')->middleware('auth');

Route::patch( '/articles/update/{article}', 'ArticleController@update')->name('article.update')->middleware('auth');

Route::get( '/articles/delete/{article}', 'ArticleController@delete')->name('article.delete')->middleware('auth');

Route::get( '/user', 'UserController@username' )->name('username')->middleware('auth');

Route::get( '/user/show/{name}', 'UserController@show' )->name('user.show')->middleware('auth');





