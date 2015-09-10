<?php

// /var/www/html/laravel3/app/Http/Controllers

namespace interactiontigerspace\Http\Controllers;


use interactiontigerspace\Http\Requests\NameRequest;

class FormController extends Controller

{

	public function showForm()
	{

		//instead of View::make() in L5 you can call view() as a function
		return view('form');
	}

	public function postForm(NameRequest $request)
	{

		/*old valitator to do now in /var/www/html/laravel3/app/Http/Requests
		dd(Input::all());

		$rules = ['name' => 'required | min:3 |  max:6'];
		$validator = new \Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return redirect()->back()->withInput()->withErrors($validator);}*/

		echo 'your name is: '.\Input::get('name');
	}
}