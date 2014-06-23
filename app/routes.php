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
	return View::make('hello');
});

Route::get('/test',array(
	'as'=>'test-function',
	'uses'=>'TestController@testFunction'
));

Route::get('/test-db',array(
	'as'=>'test-db',
	'uses'=>'TestController@testDatabase'
));
