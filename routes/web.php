<?php

Route::group(
    [
//        'namespace' => '',
//        'prefix' => '',
        'middleware' => ['checkAdmin', 'auth'],
    ],
    function(){
        //Categories Routes
        Route::get('/categories', 'CategoryController@index')->name('categories');
        Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
        Route::post('/categories/store', 'CategoryController@store')->name('categories.store');
        Route::get('/categories/{category}/show', 'CategoryController@show')->name('categories.show');
        Route::delete('/categories/destroy/{category}', 'CategoryController@destroy')->name('categories.destroy');
        Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('categories.edit');
        Route::put('/categories/{category}/update', 'CategoryController@update')->name('categories.update');

        //Articles Routes
        Route::get('/articles', 'ArticleController@index')->name('articles');
        Route::get('/articles/create', 'ArticleController@create')->name('articles.create');
        Route::post('/articles/store', 'ArticleController@store')->name('articles.store');
        Route::delete('/articles/destroy/{article}', 'ArticleController@destroy')->name('articles.destroy');
        Route::get('/articles/{article}/edit', 'ArticleController@edit')->name('articles.edit');
        Route::put('/articles/{article}/update', 'ArticleController@update')->name('articles.update');
    }
);

// Category selected route
Route::get('/articles/category/{category}', 'ArticleController@selected')->name('category.selected');

// Articles show Route
Route::get('/articles/{article}/show', 'ArticleController@show')->name('articles.show');

// Home routes
Route::get('/slot-view', function(){
    return view('site.slot-view');
});
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home/activation/{token}', 'HomeController@activation')->name('activation');


Route::group(
    [
        'namespace' => 'Auth', 
        'prefix' => 'auth'
    ],
    function(){
        // Registration Routes...
        Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'RegisterController@register')->name('register.post');


        // Login-Logout Routes...
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login')->name('login.post');
        Route::post('/logout', 'LoginController@logout')->name('logout');


        // Password Reset Routes...
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    }
);


