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

//Route::controller(Controller::detect()); // This is for detecting if there is a wrong controller, it will throw a 404 error.
Route::get('/', function ()
{
	return View::make('home.index');
});