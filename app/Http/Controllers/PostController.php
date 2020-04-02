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

    public function show($id){
        $post = Post::findOrFail($id);

        return view('posts.show', ['post' => $post]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $post = new Post();

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->image = $request->input('image');

        if($request->hasFile('image')) {
            $file = $request->file('image');
             $extension = $file->getClientOriginalExtension();
             $filename = time() . '.' . $extension;
             $file->move('uploads/post/', $filename);
             $post->image = $filename;
        }else {
            return $request;
            $post->image = '';
        }

        $post->save();

        return redirect('/posts');

    }

    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts');
    }
}
