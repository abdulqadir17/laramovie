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

	Route::group(['prefix' => 'admin'], function(){

		Route::post('category', 'AdminCategoryController@store');
		Route::get('category/create', 'AdminCategoryController@create');
		Route::get('category', 'AdminCategoryController@index');

		Route::resource('person', 'AdminPersonController');
		Route::post('person/{person}/status', [
				'as' =>	'admin.person.status',
				'uses' =>	'AdminPersonController@status'
		]);

		Route::resource('movie', 'AdminMovieController');
		Route::post('person/{movie}/status', [
				'as' =>	'admin.movie.status',
				'uses' =>	'AdminMovieController@status'
		]);
	});


Route::get('/', function()
{
	return View::make('hello');
});
