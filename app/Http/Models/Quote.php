<?php

namespace interactiontigerspace\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model {
//in the view: {{ $q->created_at->diffForHumans() }} Carbon from Eloquent ko
    
	protected $table = 'quotes4';
	protected $fillable = array('name', 'from', 'quotes');
	
}
