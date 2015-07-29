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

Route::get('/', function()
{
	$title = "Welcome to Afta";
	return View::make('landing')
	->with('title',$title);
});

Route::get('home/{lang}', 'HomeController@language');
Route::get('home', 'HomeController@showHome');
