<?php

// /var/www/html/laravel3/app/Http/Controllers/Page5Controller.php

namespace interactiontigerspace\Http\Controllers;


class Page5Controller extends Controller {

	public $restful = true;

	public function p5_1() {

		//instead of View::make() in L5 you can call view() as a function
		$view = view('page5.page5', array('name' => 'fabrice'))
			->with('age' , '33') ;
		$view->location = 'Paris';
		$view['specialty'] = 'php';

		return $view;
	}

	public function p5_2() {

		return view('page5.page5_2', [
			'valeur1' => 'value1',
			'valeur2' => 'value2'
		]);
	}

}