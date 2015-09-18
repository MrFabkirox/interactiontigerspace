<?php

namespace interactiontigerspace\Http\Controllers;

	class HomeController extends Controller {

		public function index() {

			return view('home');
    		//return view('page3');
		}
	}