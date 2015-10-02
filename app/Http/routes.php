<?php

/*
|--------------------------------------------------------------------------
| Application Routes 				Interaction Tiger Space
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'as' => 'home',
	'uses' => 'HomeController@index'
]);

Route::get('/page1', array('uses' => 'Page1Controller@p1'));

Route::get('/page2', 'Page2Controller@p2');
Route::post('/page2postp2', 'Page2Controller@postp2');

Route::get('/page3', function () {
    return view('page3');
});

Route::get('/page4', [
	'as' => 'page4',
	'uses' => 'Page4Controller@p4'
]);

Route::get('/page4view/{id}', [
	'as' => 'user',
	'uses' => 'Page4Controller@viewuser'
]);

Route::get('/page4new', [
	'as' => 'newuser',
	'uses' => 'Page4Controller@newuser'
]);

Route::post('/page4create', [
	'uses' => 'Page4Controller@createuser'
]);

Route::get('/page4edit/{id}', [
	'as' => 'editauthor',
	'uses' => 'Page4Controller@editauthor'
]);

Route::post('/page4update/{id}', [
	'as' => 'updateauthor',
	'uses' => 'Page4Controller@updateauthor'
]);

Route::get('/page4delete/{id}', [
	'as' => 'deleteauthor',
	'uses' => 'Page4Controller@deleteauthor'
]);