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

/**
 * Display login and register site
 */


Auth::routes();

/**
 * Display home site
 */

Route::get('/home', 'HomeController@index');

Route::get('/confirm/{eventId}', 'HomeController@confirm');

Route::get('/liste/{eventId}', 'HomeController@liste');

Route::get('/deny/{eventId}', 'HomeController@deny');

/**
 * Display vereinreg site
 */

Route::get('/vereinreg', 'VereinRegController@index');

Route::post('/vereinreg','VereinRegController@newVerein');

/**
 * Display terminreg site
 */

Route::get('/terminreg', 'TerminRegController@index');

Route::post('/terminreg','TerminRegController@newTermin');


