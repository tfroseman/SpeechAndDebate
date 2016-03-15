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


/* Index */
Route::get('/', function () {
    return view('pages.home');
});

/* Login Index GET & POST */
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

/* Logout */
Route::get('auth/logout', 'Auth\AuthController@getLogout');

/* Register Index GET & POST */
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


/* Account */
Route::get('account', 'AccountController@index');
Route::put('account', 'AccountController@update');

/* */
Route::Resource('school', 'AccountSchoolController');

/**/
Route::Resource('students', 'AccountStudentsController');

Route::Resource('tournament', 'AccountTournamentController');


