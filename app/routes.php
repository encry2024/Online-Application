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

Route::get('login', function() {
	return View::make('login');
});

Route::get('ErrorPage', function() {
	return View::make('ErrorPage');
});

Route::get('register', function() {
	return View::make('registerUser');
});

Route::get('Mainpage', function() {
	$applicant = Applicant::paginate(1);

	if (Request::ajax()) 
	{ return Response::json(View::make('applicants', array('applicants' => $applicant))->render()); }

	return View::make('Mainpage', array('applicants' => $applicant));
});


Route::group(array('before' => 'auth'), function() {
    Route::get('Applicant/{applicant_id}/Profile', 'UserController@getApplicantInfo');

    Route::post('{id}/Update', 'UserController@updateApplicantInfo');
});


Route::get('confirmRegistration/{id}', 'ApplicantController@getInfo');




#################################################################################




#POSTS
Route::post('authenticate', function() {
	$login = User::validateLogin(Input::all());
	return $login;
});

Route::post('registeruser', 'UserController@registerUser');

Route::post('register', 'ApplicantController@registerApplicant');

Route::post('Applicant/{id}/Update', 'ApplicantController@updateApplicant');