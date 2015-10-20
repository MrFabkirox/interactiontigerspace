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

        $post = DB::table('interaction_posts')->insertGetId(array(
            'title' => Input::get('title'),
            'content' => Input::get('content'),
            'updated_at' => 'now',
            'created_at' => 'now'
        ));

        return Redirect::route('blog');
    }

    public function p6_viewPost($id) {

        $quote = DB::table('interaction_posts')->find($id);

        return view("page6.p6_view")
            ->with('postz', $post);
    }

    public function p6_blog() {

        $post = DB::table('interaction_posts')->get();

        return view('page6.p6_blog')
            ->with('postz', $post);
    }

}
