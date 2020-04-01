<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        $posts = Post::latest()->get();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show(){
        $post = Post::findOrFail($id);

        return view('posts.show', ['posts' => $posts]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        $post = new Post();

        $post->title = request('title');
        $post->content = request('content');

        $post->save();

        return redirect('/')->with('mssg', 'Thanks for ordering');
    }
}
