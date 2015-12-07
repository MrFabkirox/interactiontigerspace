<?php

namespace interactiontigerspace\Http\Controllers;

use interactiontigerspace\Http\Models\Category;
use interactiontigerspace\Http\Models\Product;

class FlatTagRepository {

	public function getAll() {

            $products = Product::all();

		return $products;

	}

	public function getAll2() {

			$category = Category::all();

		return $category;

	}

}
