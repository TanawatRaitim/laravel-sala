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

Route::get('/route1',function(){
	return 'Route1!!!';	
});

Route::get('/route2','RouteController@getIndex');

Route::get('books',function(){
	$books = Book::all();
	return View::make('books')->with('books',$books);
});

Route::get('/provinces',array(
	'as'=>'province',
	'uses'=>'ProvinceController@getProvinces'
	
));

Route::get('/show-province/{id}',array(
	'as'=>'show-province',
	'uses'=>'ProvinceController@showProvince'
))->before('big');


/**
 * Route Model Binding
 * 
 */

 //Binding a Parameter to a model
 
 Route::model('book_id', 'Book');
 
 
 //next
 //Define a route that contains a {book_id} parameter
 
 Route::get('find-book/{book_id}', function(Book $book_id){
 	
	//
	
 });
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
