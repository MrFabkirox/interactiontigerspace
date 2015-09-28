<?php

	// /var/www/html/interactiontigerspace/app/Http/Models/authors.php


namespace interactiontigerspace\Http\Models;

use Validator;

use Eloquent;

	class authors extends Eloquent {

		//public static $table = 'user1';
		protected $fillable = array('name');

		public static $rules = array(
			'name'=>'required | min:2'
		);

		public static function validate($data) {
			return Validator::make($data, static::$rules);
		}

	}