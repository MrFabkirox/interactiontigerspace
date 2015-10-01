<?php

// /var/www/html/laravel3/app/Http/Controllers/Page4Controller.php

namespace interactiontigerspace\Http\Controllers;

use interactiontigerspace\Http\Requests\Page4Request;
use interactiontigerspace\Http\Models\authors;

use DB;
use HTML;
use Input;
use Redirect;
use Recruit;

class Page4Controller extends Controller {

	public $restful = true;

	public function p4() {

		$authors = DB::table('authors')->get();
		DB::disconnect('authors');
		
		return view('page4')
			->with('title', 'Some db stuff')
			->with('authors', $authors);
	}

	public function viewuser($id) {

		$author = DB::table('authors')->find($id);//return an object
		DB::disconnect('authors');

		return view('page4view')
			->with('author', $author);
	}

	public function newuser() {
		return view('page4new');
	}

	public function createuser() {
		$validation = authors::validate(Input::all());

		if($validation->fails()) {
			return Redirect::to_route('newuser')->with_errors($validation)
				->with_input();
		} else {
			//authors::create(array(
			//	'name' =>Input::get('name')
			//));
			DB::table('authors')->insertGetId(array(
				'name' => Input::get('name'),
				'bio' => Input::get('bio')
			));

		$authors = DB::table('authors')->get();

		return view('page4')
			->with('authors', $authors);
		}
	}

	public function editauthor($id) {

		$author = DB::table('authors')->find($id);//return an object
		DB::disconnect('authors');

		return view('page4edit')
			->with('author', $author);

	}

	public function updateauthor($id) {
		//$id = Input::get('id');
		$authornew = DB::table('authors')->find($id);//return an object

		$validation = authors::validate(Input::all());

		if($validation->fails()) {
			return Redirect::to_route('newuser')->with_errors($validation)
				->with_input();
		} else {
			$authornew = DB::update('update authors set name = ?', ['john']);
			

			DB::disconnect('authors');

		return view('page4')
			->with('authors', $authors);
		}
	}

	public function deleteauthor($id) {

		DB::table('authors')->where('id', $id)->delete();

		$authors = DB::table('authors')->get();
		DB::disconnect('authors');

		return view('page4')
			->with('authors', $authors);

	}
}

