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
    return view('pages.home');
});

Route::get('/logout', function () {
    return view('pages.home');
});

Route::get('/login', function () {
    return view('pages.home');
});

Route::Resource('account', 'AccountController');

Route::Resource('account.school', 'AccountSchoolController');

Route::Resource('account.students', 'AccountStudentsController');

Route::Resource('student', 'AccountStudentsController');

Route::Resource('tournament', 'AccountTournamentController');
