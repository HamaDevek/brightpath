<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth', 'as' => 'dashboard.'], function () {
    Route::get('/auth', 'AuthController@index')->name('auth');
    Route::put('/auth', 'AuthController@update')->name('auth.update');
    Route::post('/auth', 'AuthController@password')->name('auth.password');
    // Route::get('/index', 'DashboardController@index')->name('index');
    Route::get('/data/{type}', 'ArticleController@getData')->name('data');
    Route::get('/data/edit/{id}', 'ArticleController@getRecoard')->name('edit');
    Route::put('/data/edit/{id}', 'ArticleController@updateRecoard')->name('update');
    Route::delete('/data/delete/{id}', 'ArticleController@deleteRecoard')->name('delete');
    Route::get('/data/state/{id}', 'ArticleController@changeState')->name('state');
    Route::get('/new/{type}', 'ArticleController@newArticle')->name('new');
    Route::post('/new/{type}', 'ArticleController@addArticle')->name('insert');
    Route::put('/image/{id}', 'ArticleController@addImage')->name('addImage');
    Route::delete('/image/delete/{id}', 'ArticleController@deleteImage')->name('deleteImage');
    Route::get('/article/{id}', 'ArticleController@article')->name('article');
    Route::put('/article/{id}', 'ArticleController@updateArticle')->name('updatearticle');
});
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
