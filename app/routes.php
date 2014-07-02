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

/**
 * home page
 */
Route::get('/', function()
{
	// return View::make('hello');
	return 'Welcome to laravel-sala-project';
});


/**
 * test function page
 */
Route::get('/test',array(
	'as'=>'test-function',
	'uses'=>'TestController@testFunction'
));

/**
 * test db page
 */
Route::get('/test-db',array(
	'as'=>'test-db',
	'uses'=>'TestController@testDatabase'
));


/**
 * 
 */
Route::get('/route1',function(){
	return 'Route1!!!';	
});


/**
 * 
 */
Route::get('/route2','RouteController@getIndex');


/**
 * show books
 */
Route::get('books',function(){
	$books = Book::all();
	return View::make('books')->with('books',$books);
});


//show all province
Route::get('/provinces',array(
	'as'=>'provinces',
	'uses'=>'ProvinceController@getProvinces'
	
));


//show specific province
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
	echo '<pre>';
	print_r($book_id);
	echo '</pre>';
	
 });
 
 
/**
 * Form input province
 */
Route::get('province/create',array(
	'as'=>'province-create-get',
	'uses'=>'ProvinceController@getProvinceCreate'
));


/**
 * Save province to database
 */
Route::post('province/create',array(
 	'as'=>'province-create-post',
 	'uses'=>'ProvinceController@postProvinceCreate'
));


Route::get('/relation', array(
	'as'=>'relation',
	'uses'=>'TestController@getRelation'
));

