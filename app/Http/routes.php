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


/**
 * Route for customer page
 */

Route::get('/', [
    'as' => 'index',
    'uses' => 'CustomerController@index'
]);

Route::get('new', [
    'as' => 'new',
    'uses' => 'CustomerController@store'
]);

Route::get('report/{id}', [
	'as' => 'report',
	'uses' => 'CustomerController@viewReport'
]);

Route::get('show/{id}', [
	'as' => 'show',
	'uses' => 'CustomerController@show'
]);

Route::post('update/{id}', [
	'as' => 'update',
	'uses' => 'CustomerController@update'
]);

Route::post('email/{id}', [
	'as' => 'email',
	'uses' => 'CustomerController@email'
]);

Route::post('/search', [
	'as' => 'search',
	'uses' => 'CustomerController@search'
]);

Route::get('/drag-drop', function () {
    return view('drag_and_drop.example');
});

Route::post('dad', [
    'as' => 'dad',
    'uses' => 'CustomerController@imageUpload'
]);
