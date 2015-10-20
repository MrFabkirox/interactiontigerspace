<?php

namespace interactiontigerspace\Http\Controllers;

use Illuminate\Http\Request;
use interactiontigerspace\Http\Requests;
use interactiontigerspace\Http\Controllers\Controller;
use interactiontigerspace\Http\Models\Post5;

use Input;
use Redirect;
use DB;

class Page6Controller extends Controller {

    public function p6_newPost() {

        return view('page6.p6_new');
    }

    public function p6_createPost(Request $request) {

        $post = DB::table('posts5')->insertGetId(array(
            'name' => Input::get('name'),
            'bio' => Input::get('bio'),
            'updated_at' => 'now',
            'created_at' => 'now'
        ));

        return Redirect::route('blog');
    }

    public function p6_viewPost($id) {

        $quote = DB::table('quotes4')->find($id);

        return view("page6.p6_view")
            ->with('postz', $post);
    }

    public function p6_blog() {

        $post = DB::table('posts5')->get();

        return view('page6.p6_blog')
            ->with('postz', $post);
    }

}
