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

Route::get('/home',[

	'as' => 'user.home',
	// 'uses' =>  'User\HomeController@index',
	'uses' =>  'User\UserController@index',
	]);
Route::get('/user/profile',[
	'as' => 'user.profile',
	'uses' => 'User\UserController@profile',
	]);
Route::resource('user','User\UserController',['as'=>'user']);

