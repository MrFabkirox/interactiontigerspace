<?php

namespace interactiontigerspace\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = array('category_id', 'title', 'description', 'price', 'availability', 'image');
    public static $rules = array('name' => 'required|min:3');

    
	public function category() {
		return $this->belongsTo('Category');
	}

}
