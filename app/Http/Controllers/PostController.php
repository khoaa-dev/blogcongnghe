<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id) {
        $post = Post::where('id', $id)->first();

        return view('posts.detail')->with('post', $post);
    }
}
