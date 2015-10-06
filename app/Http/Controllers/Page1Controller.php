<?php

// /var/www/html/laravel3/app/Http/Controllers/Page1Controller.php

namespace interactiontigerspace\Http\Controllers;


class Page1Controller extends Controller {

	public $restful = true;

	public function p1() {

		//instead of View::make() in L5 you can call view() as a function
		$view = view('page1.page1', array('name' => 'fabrice'))
			->with('age' , '33') ;
		$view->location = 'Paris';
		$view['specialty'] = 'php';

		return $view;
	}

	public function p1_2() {

		return view('page1.page1_2', [
			'valeur1' => 'value1',
			'valeur2' => 'value2'
		]);
	}

}