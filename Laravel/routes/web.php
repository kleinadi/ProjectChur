<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Task;
use Illuminate\Http\Request;

/**
* Display Start site
*/
Route::get('/', 'HomeController@showView');

/**
* Display About site
*/
Route::get('/about', 'AboutController@showView');


/**
* Display login site
*/
Route::get('/login', 'LoginController@showView');

/**
* Display vereinregistrieren site
*/
Route::get('/vereinregistrieren', 'VereinRegistrierenController@showView');


/**
* Display mitgliedregistrieren site
*/
Route::get('/mitgliedregistrieren', 'MitgliedRegistrierenController@showView');

Auth::routes();

Route::get('/home', 'HomeController@index');
