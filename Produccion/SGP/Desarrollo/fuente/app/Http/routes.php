<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group([], function(){
	Route::get('/', ['uses' => 'LandingController@index', 'as' => 'landing.index']);
	Route::get('/about', ['uses' => 'LandingController@about', 'as' => 'landing.about']);
	Route::get('/projects', ['uses' => 'LandingController@projects', 'as' => 'landing.projects']);

	Route::group(['prefix' => 'services'], function(){
		Route::get('/systems', ['uses' => 'LandingController@systems', 'as' => 'landing.services.systems']);
		Route::get('/erp', ['uses' => 'LandingController@erp', 'as' => 'landing.services.erp']);
		Route::get('/app', ['uses' => 'LandingController@app', 'as' => 'landing.app']);
	});

});