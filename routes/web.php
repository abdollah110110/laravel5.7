<?php

Route::get('/', function(){
	return view('layouts.master');
})->name('home');
