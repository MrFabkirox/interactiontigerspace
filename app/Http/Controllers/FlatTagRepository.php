<?php

namespace interactiontigerspace\Http\Controllers;

use interactiontigerspace\Http\Models\Category;
use interactiontigerspace\Http\Models\Product;

class FlatTagRepository {

	public function getAll() {


        
            $products = Product::all();

		return $products;

	}

}
