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

Route::get('/page1/{id?}', [
	'as' => 'page1',
	'uses' => 'Page1Controller@p1'
]);

Route::post('/addquote', [
	'as' => 'addquote',
	'uses' => 'Page1Controller@p1_addquote'
]);

Route::get('/page2', 'Page2Controller@p2');
Route::post('/page2postp2', 'Page2Controller@postp2');

Route::get('page3', array('uses'=>'Page3ControllerHome@getIndex'));
Route::controller('page3/adminCategories', 'Page3Controller');
Route::controller('page3/products', 'Page3ControllerProduct');
Route::controller('home', 'Page3ControllerHome');
Route::controller('users', 'UsersController');

Route::get('newaccount', array(
	'as'=>'newaccount',
	'uses'=>'UsersController@postNewaccount'
));
Route::post('createaccount', array(
	'as'=>'createaccount',
	'uses'=>'UsersController@postCreate'
));



Route::get('signin', array(
	'as'=>'signin',
	'uses'=>'UsersController@getSignin'
));
Route::post('postsignin', array(
	'as'=>'postsignin',
	'uses'=>'UsersController@postSignin'
));
Route::get('page3signout', array(
	'as'=>'signout',
	'uses'=>'UsersController@getSignout'
));




Route::post('/page3/page3loggedin', function() {
	return view('page3.page3loggedin');
});


Route::get('register', array(
	'as'=>'register1',
	'uses'=>'Auth\AuthController@getRegister'
));

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::controllers([
	'password' => 'Auth\PasswordController'
]);


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

Route::get('/page5', array('uses' => 'Page5Controller@p5_1'));
Route::get('/page5_2', [
	'as' => 'page5_2',
	'uses' => 'Page5Controller@p5_2'
]);

Route::get('/newPost', [
	'as' => 'newPost',
	'uses' => 'Page6Controller@p6_newPost'
]);

Route::post('/newPost', [
	'as' => 'createPost',
	'uses' => 'Page6Controller@p6_createPost'
]);

Route::get('/viewPost/{id}', [
	'as' => 'viewPost',
	'uses' => 'Page6Controller@p6_viewPost'
]);

Route::get('/page6', [
	'as' => 'blog',
	'uses' => 'Page6Controller@p6_blog'
]);