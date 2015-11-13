<?php

namespace interactiontigerspace\Http\Controllers;

use Illuminate\Http\Request;

use interactiontigerspace\Http\Requests;
use interactiontigerspace\Http\Controllers\Controller;
use interactiontigerspace\Http\Models\Product;
use interactiontigerspace\Http\Models\User;

use Availability;


class Page3ControllerHome extends Controller
{

    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

    public function getIndex() {
        return view('page3.home.index')
            ->with('products', Product::take(4)->orderBy('created_at', 'DESC')->get())
            ->with('usr', User::all());
    }

    public function getView($id) {
        return view('page3.home.view')->with('product', Product::find($id));
    }
}
