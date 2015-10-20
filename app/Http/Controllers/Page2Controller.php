<?php

// /var/www/html/laravel3/app/Http/Controllers

namespace interactiontigerspace\Http\Controllers;

use interactiontigerspace\Http\Requests\Page2Request;

use Input;

class Page2Controller extends Controller

{

	public function p2() {

		//instead of View::make() in L5 you can call view() as a function
		return view('page2.page2');
	}

	public function postp2() {

		$stuff = Input::get('name');
		return view('page2.page2back')
			->with('stuff', $stuff);

	}

}