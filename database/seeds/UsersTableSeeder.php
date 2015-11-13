<?php

use Illuminate\Database\Seeder;
use \interactiontigerspace\app\User;

class UsersTableSeeder extends Seeder {

	public function run() {
		$user = new User;
		$user->firstname = 'Fab';
		$user->lastname = 'Kirox';
		$user->email = 'toto@gmail.com';
		$user->password = 'pwd';
		$user->telephone = '1234567890';
		$user->admin = 1;
		$user->save();
	}
}