<?php

namespace interactiontigerspace\Http\Controllers;

use Illuminate\Http\Request;

use interactiontigerspace\Http\Requests;
use interactiontigerspace\Http\Controllers\Controller;

use interactiontigerspace\Http\Controllers\FlatTagRepository;

class AdminController extends Controller {

    protected $tag;

    public function __construct(FlatTagRepository $tag) {
        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->tag = $tag;

        \View::composer(['page3.products.index', 'admin'], function($view) {
            $view->with('productTags', $this->tag->getAllProducts())
                ->with('categoryTags', $this->tag->getAllCategories())
                ->with('authorTags', $this->tag->getAllAuthors());
        });
    }

    public function getIndex() {

        return view('admin');
    }
}
