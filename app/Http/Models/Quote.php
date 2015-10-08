<?php

namespace interactiontigerspace\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model {
    
	protected $table = 'quotes4';
	protected $fillable = array('name', 'from', 'quotes');
	
}
