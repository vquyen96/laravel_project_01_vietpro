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

Route::get('/','FrontendController@getHome');
Route::get('detail/{id}/{slug}.html','FrontendController@getDetail');
Route::get('category/{id}/{slug}.html','FrontendController@getCate');
Route::group(['prefix'=>'cart'], function(){
	Route::get('add/{id}','CartController@getAddCart');
	Route::get('show','CartController@getShowCart');
	Route::get('delete/{id}','CartController@getDeleteCart');
	Route::get('update','CartController@getUpdateCart');
	Route::post('show','CartController@postComplete');
});

Route::get('complete','CartController@getComplete');

Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');
	});
	Route::get('logout','HomeController@getLogout');
	Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){
		Route::get('home','HomeController@getHome');
		Route::group(['prefix'=>'account'], function(){
			Route::get('/','AccountController@getList');
			Route::get('add','AccountController@getAdd');
			Route::post('add','AccountController@postAdd');
			Route::get('edit/{id}','AccountController@getEdit');
			Route::post('edit/{id}','AccountController@postEdit');
		});
		Route::group(['prefix'=>'category'], function(){
			Route::get('/','CategoryController@getList');
			Route::post('/','CategoryController@postAdd');
			Route::get('edit/{id}','CategoryController@getEdit');
			Route::post('edit/{id}','CategoryController@postEdit');
			Route::get('delete/{id}','CategoryController@getDelete');
		});
		Route::group(['prefix'=>'product'], function(){
			Route::get('/','ProductController@getList');
			Route::get('add','ProductController@getAdd');
			Route::post('add','ProductController@postAdd');
			Route::get('edit/{id}','ProductController@getEdit');
			Route::post('edit/{id}','ProductController@postEdit');
			Route::get('delete/{id}','ProductController@getDelete');
		});
	});
});

