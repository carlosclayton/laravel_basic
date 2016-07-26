<?php

namespace Basic\Http\Controllers;

use Basic\Post;
use Illuminate\Http\Request;
use Basic\Http\Requests;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
