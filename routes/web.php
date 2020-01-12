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
	'prefix' => 'admin',
	'middleware' => 'auth'
], function (){
	Route::get('/dashboard', 'DashboardController@index')->name('backend.dashboard');
	Route::group(['prefix' => 'products'], function(){
		Route::get('/', 'ProductController@index')->name('backend.product.index');
		Route::get('/create', 'ProductController@create')->name('backend.product.create');
		Route::post('/', 'ProductController@store')->name('backend.product.store');
		Route::get('showImages/{id}','ProductController@showImages');
	});
	 //Quản lý người dùng
	Route::group(['prefix' => 'users'], function(){
		Route::get('/', 'UserController@index')->name('backend.user.index');
		Route::get('/create', 'UserController@create')->name('backend.user.create');
		Route::get('/test', 'UserController@test');
		Route::get('showProducts/{id}','ProductController@showProducts');
	});
	Route::group(['prefix' => 'categories'], function(){
		
		Route::get('showProducts/{id}','CategoryController@showProducts');
	});
	Route::group(['prefix' => 'order'], function(){
		
		Route::get('showProducts/{id}','OrderController@showProducts');
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('profile', function () {
//     //
// })->middleware('auth');
