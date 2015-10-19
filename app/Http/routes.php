<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

	// Route::get('/',function(){
	// return view('about.contact');
	// });


	//Route::get('contact	',['as' => 'contact', 'uses' => 'UserController@create']);
	// Route::post('contact', 
 //   					['as' => 'contact_store', 'uses' => 'UserController@store']);


 //Route::get('contact','UserController@create');

	// Route::get('about/login',function(){
	// 	return view('about.login');
	// });


	// Route::get('signup',function(){
	// 	return view('about.signup');
	// });

	// Route::post('login', function(){
	// 	$first_name = Input::get('first_name');
	// 	$email = Input::get('$email');
	// 	return view('about.login')->with('first_name',$first_name);
	// });

	 // Route::get('signup',['as'=>'signup', 'uses' => 'loginController@signup'], function(){
	 // 	return view('about.signup');
	 // });
	//Route::get('author/signup',array('as'=>'new_signup', 'uses'=>'loginController@signup'))
	 
	// Route::post('signup/login',array('uses'=>'loginController@post'));
	Route::get('signup',array('uses'=>'SignupController@create'));
	Route::post('signup',array('uses'=>'SignupController@store'));
	Route::get('about/login',array('uses'=>'SignupController@login'));
	Route::post('about/login',array('uses'=>'SignupController@postlogin'));
	Route::get('dashboard',array('uses'=>'SignupController@getDashboard'));
	Route::get('dashboard/logout',array('uses'=>'SignupController@getLogout'));
	Route::get('dashboard/delete/{id}',array('uses'=>'SignupController@delete'));
	Route::get('dashboard/edit/{id}',array('uses'=>'SignupController@edit'));
	Route::post('dashboard/update/{id}',array('as'=>'dashboard/update','uses'=>'SignupController@update'));
	Route::get('dashboard/changepassword/{id}',array('uses'=>'SignupController@changePassword'));
	Route::post('dashboard/passwordUpdate/{id}',array('as'=>'dashboard/passwordUpdate','uses'=>'SignupController@passwordUpdate'));

	//Route::post('signup',array('uses'=>'SignupController@login'));

	Route::get('dashboard/home',array('uses'=>'SiteController@home'));
	Route::get('dashboard/about',array('uses'=>'SiteController@about'));


	


