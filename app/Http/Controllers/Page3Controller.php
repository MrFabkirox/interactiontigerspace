<?php

namespace interactiontigerspace\Http\Controllers;

use Illuminate\Http\Request;
use interactiontigerspace\Http\Requests;
use interactiontigerspace\Http\Controllers\Controller;
use interactiontigerspace\Http\Models\Category;

use Input;
use Redirect;

class Page3Controller extends Controller
{
    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

    public function getIndex() {
        return view('page3.page3')
            ->with('categories', Category::all());
    }

    public function postCreate() {
        //$validator = Validator::make(Input::all(), Category::$rules);

        //if($validator->passes()) {
            $category = new Category;
            $category->name = Input::get('name');
            $category->save();

            return Redirect::to('page3/adminCategories/')
                ->with('message', 'category Created');
        //}
    }

    public function postDestroy() {

        $category = Category::find(Input::get('id'));
        $category->delete();

        return Redirect::to('page3/adminCategories/')
            ->with('message', 'category Deleted');
        
    }
}
