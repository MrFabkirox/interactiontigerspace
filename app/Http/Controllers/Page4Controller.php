<?php

// /var/www/html/laravel3/app/Http/Controllers/Page4Controller.php

namespace interactiontigerspace\Http\Controllers;

use interactiontigerspace\Http\Requests\Page4Request;
use interactiontigerspace\Http\Models\authors;

use DB;
use HTML;
use Input;
use Redirect;
use stdClass;

class Page4Controller extends Controller {

	public $restful = true;

	public function p4() {

		$authors = DB::table('authors')->get();
		DB::disconnect('authors');

		//return $users;

		/*$users = DB::table('user1')->where('name', '!=', 'fab')->get();
		return $users;*/

		//$users = DB::table('user1')->find(1);//return an object
		//dd($users); // die(var_dump($users)};
		//return $users->name;

		//return view('page4', ['usr'=> $users]);

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
			authors::create(array(
				'name' =>Input::get('name')
			));
		}
	}

	public function editauthor($id) {

		$author = DB::table('authors')->find($id);//return an object
		DB::disconnect('authors');

		return view('page4edit')
			->with('author', $author);

	}

	public function updateauthor() {
		$id = Input::get('id');
		$author = DB::table('authors')->find($id);//return an object
		DB::disconnect('authors');

		$validation = authors::validate(Input::all());

		if($validation->fails()) {
			return Redirect::to_route('newuser')->with_errors($validation)
				->with_input();
		} else {
			//authors::update($id, array(
				$author->name = Input::get('name');
				$author->bio = Input::get('bio');
				$author->save();
			//));

			return Redirect::to_route('page4');
		}
	}
}

