<?php

namespace interactiontigerspace\Http\Controllers;

use Illuminate\Http\Request;
use interactiontigerspace\Http\Requests;
use interactiontigerspace\Http\Controllers\Controller;
use interactiontigerspace\Http\Models\Category;
use interactiontigerspace\Http\Models\Product;
use interactiontigerspace\app\libs\Availability;

use Input;
use Redirect;
use Validator;
use Image;
use File;

use interactiontigerspace\Http\Controllers\FlatTagRepository;

class Page3ControllerProduct extends Controller {

    protected $tag;

    public function __construct(FlatTagRepository $tag) {
        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->tag = $tag;

        \View::composer(['page3.products.index', 'admin'], function($view) {
            $view->with('tags', $this->tag->getAll());
        });
    }

    public function getIndex() {
        $categories = array();

        foreach(Category::all() as $category) {
            $categories[$category->id] = $category->name;
        }

        return view('page3.products.index')
            ->with('categories', $categories);
    }


    public function postCreate() {
        $validator = Validator::make(Input::all(), Product::$rules);

        //if($validator->passes()) {
            $product = new Product;
            $product->category_id = Input::get('category_id');
            $product->title = Input::get('title');
            $product->description = Input::get('description');
            $product->price = Input::get('price');

            $image = Input::file('image');
            $filename = date('Y-m-d-H:i:s')."-".$image->getClientOriginalName();
            $path = base_path('public/img/products/'.$filename);
            Image::make($image->getRealPath())->resize(468, 249)->save($path);
            $product->image = 'img/products/'.$filename;
            $product->save();

            return Redirect::to('page3/products/')
                ->with('message', 'Product Created');
    }

    public function postDestroy() {

        $prod = Product::find(Input::get('id'));
        File::delete('public/'.$prod->image);
        $prod->delete();

        return Redirect::to('page3/products/')
            ->with('message', 'Product Deleted');
        
    }

    public function postToggleAvailability() {
        $product = Product::find(Input::get('id'));

        if($product) {
            $product->availability = Input::get('availability');
            $product->save();
            return Redirection::to('page3/products/index')->with('message', 'Product Updated');
        }

        return Redirection::to('page3/products/index')->with('message', 'Invalid Product');
    }
}
