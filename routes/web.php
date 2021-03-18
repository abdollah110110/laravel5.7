<?php

use Illuminate\Support\Facades\DB;

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

Route::get( '/', function () {
	$names = DB::table( 'users' )->pluck('name');
	return view( 'home', compact( 'names' ) );
} );

Route:: get( '/post', function() {
	return 'Post';
} );

Route:: get( '/post/{id}', function($id) {
	return 'Post/' . $id;
} );
