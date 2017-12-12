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
	Route::get('/listbuku', 'BuyController@index')->name('listbuku');
	Route::post('/listbuku','BuyController@buy_buku');

	Route::get('/request', 'RequestController@index')->name('listrequest');
	Route::post('/request','RequestController@sell_buku');
	Route::get('/request/add','RequestController@add_request');
	Route::post('/request/add','RequestController@save_add_request');

	Route::get('/sell', 'SellController@index')->name('listselling');
	Route::post('/sell','SellController@buy_buku');
	Route::get('/sell/add','SellController@add_selling');
	Route::post('/sell/add','SellController@save_add_selling');
});

Route::get('/login','AuthController@index')->name('login');
Route::post('/login','AuthController@login')->middleware('login');
Route::get('/logout','AuthController@logout')->name('logout');

Route::get('/register','AuthController@register_index')->name('register');
Route::post('/register','AuthController@register');

Route::group(['middleware' => ['adminhome']], function () {
	Route::get('/admin', 'AdminController@index')->name('homeAdmin');
	Route::get('/admin/add','AdminController@add_buku_index')->name('addbuku');
	Route::post('/admin/add','AdminController@add_buku');
	Route::get('/admin/listbuku','AdminController@list_buku')->name('listbukuAdmin');
});

Route::get('/admin/login','AdminController@login_index')->name('loginAdmin');
Route::post('/admin/login','AdminController@login')->middleware('loginAdmin');
Route::get('/admin/logout','AdminController@logout')->name('logoutAdmin');