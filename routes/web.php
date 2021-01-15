<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/works', 'HomeController@works')->name('works');
Route::get('/work/{id}', 'HomeController@work')->name('work');
Route::get('/newses', 'HomeController@newses')->name('newses');
Route::get('/news/{id}', 'HomeController@news')->name('news');


