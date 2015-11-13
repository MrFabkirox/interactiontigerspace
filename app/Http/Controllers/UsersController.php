<?php

namespace interactiontigerspace\Http\Controllers;

use Illuminate\Http\Request;

use interactiontigerspace\Http\Requests;
use interactiontigerspace\Http\Controllers\Controller;
use interactiontigerspace\Http\Models\User;

use Auth;
use Redirect;
use Input;

class UsersController extends Controller {

    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

    public function postNewaccount() {
        return view('users.newaccount');
    }

    public function postCreate() {

        $user = new User;
        $user->firstname = Input::get('firstname');
        $user->lastname = Input::get('lastname');
        $user->email = Input::get('email');
        $user->password = Input::get('password');
        $user->telephone = Input::get('telephone');
        $user->save();

        return Redirect::to('page3')
            ->with('message', 'Thank you for creatin an account, now sign in');
    }

    public function getSignin() {
        return view('users/signin');
    }

    public function postSignin() {
        if(Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
            return Redirect::to('/')->with('message', 'thanks signin in');
        }

        return Redirect::to('users.signin')->with('message', 'email/pwd incorrect');
    }

    public function getSignout() {
        Auth::logout();
        return Redirect::to('users.signin')->with('message', 'you ve signed out');
    }
}
