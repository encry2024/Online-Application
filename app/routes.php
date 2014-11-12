<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




#GET
Route::get('/', function() {
	return View::make('index');
});

Route::get('/registration', function() {
	return View::make('registration');
});

Route::get('confirmRegistration/{id?}', 'ApplicantController@getInfo');







#POSTS
Route::post('authenticate', function() {
	$login = User::validateLogin(Input::all());
	return $login;
});

Route::post('register', 'ApplicantController@registerApplicant');

Route::post('Applicant/{id}/Update', 'ApplicantController@updateApplicant');