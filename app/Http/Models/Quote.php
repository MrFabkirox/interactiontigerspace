<?php

namespace interactiontigerspace\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model {
//in the view: {{ $q->created_at->diffForHumans() }} Carbon from Eloquent ko
    
	protected $table = 'interaction_quotes';
	protected $fillable = array('name', 'origin', 'quotes');
	
}
