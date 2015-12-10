<?php

namespace interactiontigerspace\Http\Controllers;

use interactiontigerspace\Http\Models\Category;
use interactiontigerspace\Http\Models\Product;
use interactiontigerspace\Http\Models\authors;

class FlatTagRepository {

	public function getAllProducts() {

            $products = Product::all();

		return $products;

	}

	public function getAllCategories() {

			$categories = Category::all();

		return $categories;

	}

	public function getAllAuthors() {

			$authors = authors::all();

		return $authors;

	}

}
