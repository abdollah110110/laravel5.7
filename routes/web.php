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
	return view('master');
})->name('home');

Route::get( '/articles', 'ArticleController@index' )->name('articles');

Route::get( '/articles/latest', 'ArticleController@latest')->name('articles.latest');

Route::get( '/articles/show/{articleSlug}', 'ArticleController@show')->name('article.show');

Route::get( '/articles/create', 'ArticleController@create' )->name('article.create');

Route::get( '/articles/update/{article}', 'ArticleController@update')->name('article.update');

Route::get( '/articles/delete/{article}', 'ArticleController@delete')->name('article.delete');

Route::get( '/user', 'UserController@username' )->name('username');

Route::get( '/user/show/{name}', 'UserController@show' )->name('user.show');

