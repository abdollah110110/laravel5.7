<?php

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function(){
	return view('site.home');
})->name('home');

Route::get( '/articles', 'ArticleController@index' )->name('articles');

Route::get( '/articles/latest', 'ArticleController@latest')->name('articles.latest');

Route::get( '/articles/userarticles/{user}', 'ArticleController@userArticles')->name('userarticles');

Route::get( '/articles/show/{article}', 'ArticleController@show')->name('article.show');

Route::post( '/article/comment/{article}', 'CommentController@store')->name('comment.store');

Route::get( '/articles/create', 'ArticleController@create' )->name('article.create');

Route::post('/articles/store', 'ArticleController@store')->name('article.store');

Route::get( '/articles/update/{article}', 'ArticleController@update')->name('article.update');

Route::get( '/articles/delete/{article}', 'ArticleController@delete')->name('article.delete');

Route::get( '/user', 'UserController@username' )->name('username');

Route::get( '/user/show/{name}', 'UserController@show' )->name('user.show');

