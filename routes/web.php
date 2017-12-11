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
Route::group(['middleware' => ['grouphome']], function () {
	Route::get('/', 'HomeController@index')->name('home');
});

Route::get('/login','AuthController@index')->name('login');
Route::post('/login','AuthController@login')->middleware('login');
Route::get('/logout','AuthController@logout')->name('logout');

Route::get('/register','AuthController@register_index')->name('register');
Route::post('/register','AuthController@register');