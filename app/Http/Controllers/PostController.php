<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index() {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        Post::create($request->all());
        return redirect('/');
    }

    public function show(Post $post) {
        return view('show', compact('post'));
    }

}
