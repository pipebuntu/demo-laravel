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

Route::get('/','HomeController@start');

Route::get('/logout','HomeController@logout');

Route::post('/login','HomeController@login');

Route::get('crypt', function()
{
	return Hash::make('demo');
});
