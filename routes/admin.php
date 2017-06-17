<?php


Route::group(['middlewa	re'=>'admin_guest'],function(){

	Route::get('admin/register',[
		'as' => 'admin.register',
		'uses' => 'Admin\RegisterController@showRegistrationForm'
		]);

	Route::post('admin/register',[
		'as' => 'admin.register',
		'uses' => 'Admin\RegisterController@register'
		]);

	Route::get('admin/login',[
		'as'=>'admin.login',
		'uses' =>'Admin\LoginController@showLoginForm'
		]);

	Route::post('admin/login',[
		'as'=>'admin.login',
		'uses' =>'Admin\LoginController@login'
		]);

	// reset routes

	
	Route::get('admin/password/reset',[
		'as'=>'admin.resetPassword',
		'uses' =>'Admin\ResetPasswordController@showLinkRequestForm'
		]);

	
	Route::post('admin/password/email',[
		'as'=>'admin.emailPassword',
		'uses' =>'Admin\ResetPasswordController@sendResetLinkEmail'
		]);
	
	Route::get('admin/password/reset/{token}',[
		'as'=>'admin.reset.show',
		'uses' =>'Admin\ResetPasswordController@showResetForm'
		]);

	
	Route::post('admin/password/reset',[
		'as'=>'admin.reset',
		'uses' =>'Admin\ResetPasswordController@reset'
		]);

});

Route::group(['middleware'=>'admin_auth'],function(){

	
	Route::post('admin/logout',[
		'as'=>'admin.logout',
		'uses' =>'Admin\LoginController@logout'
		]);

	Route::get('admin/home', function(){
  	return view('admin.home');	
	});
});






