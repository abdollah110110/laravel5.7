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

Route::get( '/articles', function() {
	$articles = \App\Article::latest()->get();
	return view( 'articles', compact( 'articles' ) );
} );

Route::get( '/articles/latest', function() {
	$articles = \App\Article::lastArticles();
	return view( 'articles', compact( 'articles' ) );
} );

Route::get( '/articles/save', function() {
	\App\Article::create( [
		'user_id' => 4,
		'title' => 'Placeat sit laborum est voluptatem',
		'body' => 'Iure modi perferendis alias dolorum vitae repellendus blanditiis. Nesciunt mollitia veritatis quo illo ut. Ad rerum ab perferendis.',
	] );

	$articles = \App\Article::lastArticles();
	return view( 'articles', compact( 'articles' ) );
} );

Route::get( '/articles/update/{id}', function($id) {
	$article = \App\Article::find( $id );

	$article->update( [
		'title' => 'Title Updated ' . rand(),
	] );

	$articles = \App\Article::lastArticles();
	return view( 'articles', compact( 'articles' ) );
} );

Route::get( '/articles/delete/{id}', function($id) {
	$article = \App\Article::find( $id );

	$article->delete();

	$articles = \App\Article::lastArticles();
	return view( 'articles', compact( 'articles' ) );
} );

Route::get( '/', function () {
	$users = \App\User::all();
	$names = \App\User::pluck( 'name' );
	return view( 'users', compact( 'names', 'users' ) );
} );

Route::get( '/{name}', function($name) {
	$user = \App\User::where( 'name', $name )->first();
	return view( 'show', compact( 'user' ) );
} );

Route:: get( '/post', function() {
	return 'Post';
} );

Route:: get( '/post/{id}', function($id) {
	return 'Post/' . $id;
} );
