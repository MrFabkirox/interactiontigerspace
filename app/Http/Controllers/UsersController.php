<?php

namespace interactiontigerspace\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use interactiontigerspace\Http\Requests;
use interactiontigerspace\Http\Controllers\Controller;
use interactiontigerspace\Http\Models\User;

use Auth;
use Redirect;
use Input;
                            //not used ! AuthController used instead
class UsersController extends Controller {

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    public function __construct() {
        $this->middleware('guest',['except' => 'getLogout']);
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

    public function postNewaccount() {
        return view('users.newaccount');
    }

    public function postCreate() {

        $user = new User;
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->password = Input::get('password');
        $user->save();

        return Redirect::to('page3')
            ->with('message', 'Thank you for creatin an account, now sign in');
    }

    public function getSignin() {
        return view('users/signin');
    }

    public function postSignin() {
        Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')));

            return Redirect::to('/page3')->with('message', 'thanks signin in');
    }

    public function getSignout() {
        Auth::logout();
        return Redirect::to('users.signin')->with('message', 'you ve signed out');
    }
}
