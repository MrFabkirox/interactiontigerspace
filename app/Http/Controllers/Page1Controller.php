<?php

// /var/www/html/laravel3/app/Http/Controllers

namespace interactiontigerspace\Http\Controllers;


class Page1Controller extends Controller

{

	public function p1()
	{

		//instead of View::make() in L5 you can call view() as a function
		return view('page1');
	}

}