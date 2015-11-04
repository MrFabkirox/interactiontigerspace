<?php

namespace interactiontigerspace\Http\Controllers;

use interactiontigerspace\Http\Requests\Page1Request;
use interactiontigerspace\Http\Models\Quote;

use DB;
use Input;

class Page1Controller extends Controller {

	public $restful = true;

	public function p1() {

		$quote = DB::table('interaction_quotes')->get();//return an object
		DB::disconnect('interaction_quotes');

		return view('page1.page1')
			->with('quote', $quote);

	}

	public function p1_addquote(Page1Request $r) {

		DB::table('interaction_quotes')->insertGetId(array(
			'name' => Input::get('name'),
			'origin' => Input::get('from'),
			'quote' => Input::get('quote'),
			'updated_at' => 'now',
			'created_at' => 'now',


		));

		$quotes = DB::table('interaction_quotes')->get();
		DB::disconnect('interaction_quotes');

		return view('page1.page1')
			->with('quote', $quotes);
	}

	public function viewquote($id) {

		$quote = DB::table('interaction_quotes')->find($id);//return an object
		DB::disconnect('interaction_quotes');

		return view('page1.page1')
			->with('quote', $quote);

	}
}