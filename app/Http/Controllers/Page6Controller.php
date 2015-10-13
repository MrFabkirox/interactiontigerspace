<?php

namespace interactiontigerspace\Http\Controllers;

use Illuminate\Http\Request;
use interactiontigerspace\Http\Requests;
use interactiontigerspace\Http\Controllers\Controller;
use interactiontigerspace\Http\Models\Post;

use Input;
use Redirect;

class Page6Controller extends Controller {

    public function p6_newPost() {

        return view('page6.p6_new');
    }

    public function p6_createPost(Request $request) {

        $post = new Post();
        $post->title = Input::get('title');
        $post->content = nl2br(Input::get('content'));
        $post->save();

        return Redirect::route('viewPost', array('id' =>$post->id));
    }

    public function p6_viewPost($id) {

        $post = Post::findOrFail($id);
        return view("page6.p6_view")

            ->with('postz', $post);
    }

    public function p6_blog() {

        $post = Post::all();

        return view('page6.p6_blog')
            ->with('postz', $post);
    }

}
