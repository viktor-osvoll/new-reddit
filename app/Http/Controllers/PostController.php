<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Subreddit;
use App\Post;
use App\User;

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

        $subreddit = Subreddit::all();
        return view('posts.create', ['subreddit' => $subreddit]);
    }

    public function store(Request $request) {
        $post = new Post();

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->subreddit_id = $request->input('subreddit_id');
        $post->user_id = auth()->id();
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
    /*     $subreddits = Post::where('subreddit_id', $id)->get(); */
        /* $user_id = Auth::user();
        $post = Post::where('user_id', $id)->get();
        $post->delete(); */

        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts');
    }

    public function edit($id) {
        $posts = Post::find($id);
        $subreddits = Subreddit::all();
        
        return view('postupdateform', ['subreddits' => $subreddits])->with('posts', $posts);
    }

    public function update(Request $request ,$id) {
        $posts = Post::find($id);

        $posts->title = $request->input('title');
        $posts->content = $request->input('content');
        $posts->image = $request->input('image');

        if($request->hasFile('image')) {
            $file = $request->file('image');
             $extension = $file->getClientOriginalExtension();
             $filename = time() . '.' . $extension;
             $file->move('uploads/post/', $filename);
             $posts->image = $filename;
        }

        $posts->save();

        return redirect('/posts')->with('posts', $posts);
    }

    public function search(Request $request) {
        $search = $request->get('search');
        $posts = DB::table('posts')->where('title', 'like', '%'.$search.'%')->paginate(5);
        
        return view('posts.index', ['posts' => $posts]);
    }
}
