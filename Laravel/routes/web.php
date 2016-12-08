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

use App\Verein;
use Illuminate\Http\Request;

/**
* Display Start site
*/
Route::get('/', 'HelloController@showView');

/**
* Display About site
*/
Route::get('/about', 'AboutController@showView');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/confirm', 'HomeController@confirm');

Route::get('/list', 'HomeController@list');

Route::post('/deny', 'HomeController@deny');

Route::get('/vereinreg', 'VereinRegController@index');

Route::post('/vereinreg','VereinRegController@newVerein');

Route::get('/terminreg', 'TerminRegController@index');

Route::post('/terminreg','TerminRegController@newTermin');


