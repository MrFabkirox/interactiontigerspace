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

    protected $tag;

    public function __construct(FlatTagRepository $tag) {
        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->tag = $tag;

        \View::composer(['page4.page4', 'admin'], function($view) {
            $view->with('authorTags', $this->tag->getAllAuthors());
        });
    }

	public $restful = true;

	public function p4() {

		$authors = DB::table('authors')->get();
		DB::disconnect('authors');
		
		return view('page4.page4')
			->with('title', 'Some db stuff')
			->with('authors', $authors);
	}

	public function viewuser($id) {

		$author = DB::table('authors')->find($id);//return an object
		DB::disconnect('authors');

		return view('page4.page4view')
			->with('author', $author);
	}

	public function newuser() {
		return view('page4.page4new');
	}

	public function createuser(Page4Request $r) {
		$validation = authors::validate(Input::all());

		if($validation->fails()) {
			return Redirect::route('page4')
				->withErrors($validation->errors()->all())
            	->with('message', 'The author has not been created');
		} else {
			DB::table('authors')->insertGetId(array(
				'name' => Input::get('name'),
				'bio' => Input::get('bio')
			));

			$authors = DB::table('authors')->get();

		return Redirect::route('page4')
			->with('authors', $authors)
            ->with('message', 'The author has been created');
		}
	}

	public function editauthor($id) {

		$author = DB::table('authors')->find($id);//return an object
		DB::disconnect('authors');

		return view('page4.page4edit')
			->with('author', $author);

	}

	public function updateauthor() {
		$id = Input::get('id');
		$authornew = DB::table('authors')->find($id);//return an object

		$validation = authors::validate(Input::all());

		if($validation->fails()) {
			return Redirect::route('page4')
                ->with('message', 'The author has not been updated')
				->withErrors($validation->errors()->all());
		} else {
			//$authornew = DB::update('update authors set name = ?', ['john']);
			DB::table('authors')
				->where('id',$id)
				->update([
					'name' => Input::get('name'),
					'bio' => Input::get('bio')
					]);

		$authors = DB::table('authors')->get();

		return Redirect::route('page4')
			->with('authors', $authors)
            ->with('message', 'The author has been updated');
		}
	}

	public function deleteauthor($id) {

		DB::table('authors')->where('id', $id)->delete();

		$authors = DB::table('authors')->get();
		DB::disconnect('authors');

		return Redirect::route('page4')
			->with('authors', $authors)
            ->with('message', 'The author has been deleted');

	}
}