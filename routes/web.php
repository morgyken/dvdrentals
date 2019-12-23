<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/moviezone', 'HomeController@moviezone')->name('moviezone');
Route::get('/techzone', 'HomeController@techzone')->name('techzone');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/join', 'HomeController@join')->name('join');

//$this->middleware('auth');

// Authentication Routes...
Route::get('login', 'HomeController@showLoginForm')->name('login');
Route::post('login', 'HomeController@login');
Route::post('logout', 'HomeController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'HomeController@showRegistrationForm')->name('register');
Route::post('register', 'HomeController@register');


