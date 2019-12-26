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

Route::group([
	'namespace' => 'Backend',
	'prefix' => 'admin'
], function (){
	Route::get('/dashboard', 'DashboardController@index')->name('backend.dashboard');
	Route::group(['prefix' => 'products'], function(){
		Route::get('/', 'ProductController@index')->name('backend.product.index');
		Route::get('/create', 'ProductController@create')->name('backend.product.create');
	});
	 //Quản lý người dùng
	Route::group(['prefix' => 'users'], function(){
		Route::get('/', 'UserController@index')->name('backend.user.index');
		Route::get('/create', 'UserController@create')->name('backend.user.create');
	});
});
