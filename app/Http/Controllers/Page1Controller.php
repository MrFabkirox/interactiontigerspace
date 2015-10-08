<?php

namespace interactiontigerspace\Http\Controllers;

use interactiontigerspace\Http\Requests\Page1Request;
use interactiontigerspace\Http\Models\Quote;

use DB;
use Input;

class Page1Controller extends Controller {

	public $restful = true;

	public function p1() {

		$quote = DB::table('quotes4')->get();//return an object
		DB::disconnect('quotes4');

		return view('page1.page1')
			->with('quote', $quote);

	}

	public function p1_addquote(Page1Request $r) {

		DB::table('quotes4')->insertGetId(array(
			'name' => Input::get('name'),
			'origin' => Input::get('from'),
			'quote' => Input::get('quote'),
			'updated_at' => 'now',
			'created_at' => 'now',


		));

		$quotes = DB::table('quotes4')->get();
		DB::disconnect('quotes4');

		return view('page1.page1')
			->with('quote', $quotes);
	}

	public function viewquote($id) {

		$quote = DB::table('quotes4')->find($id);//return an object
		DB::disconnect('quotes4');

		return view('page1.page1')
			->with('quote', $quote);

	}
}