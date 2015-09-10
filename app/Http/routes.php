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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page1', array('uses' => 'Page1Controller@p1'));

Route::get('/page2', 'Page2Controller@p2');
Route::post('/page2', 'Page2Controller@postp2');

Route::get('/page3', function () {
    return view('page3');
});

Route::get('/page4', function () {
    return view('page4');
});

Route::get('/formcontroller/', 'FormController@showForm');
Route::post('/formcontroller/', 'FormController@postForm');
