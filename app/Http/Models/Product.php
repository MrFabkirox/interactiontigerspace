<?php

namespace interactiontigerspace\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = array('category_id', 'title', 'description', 'price', 'availability', 'image');
    public static $rules = array('name' => 'required|min:3');

    public static $rules = array(
	    'category_id' => 'required|integer',
	    'title' => 'required|min:3',
	    'description' => 'required|min:3',
	    'price' => 'required|numeric',
	    'availability' => 'integer',
	    'image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif'
	);

	public function category() {
		return $this->belongsTo('Category');
	}

}
