<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Subreddit;
use App\Post;

class SubredditController extends Controller
{

    public function index() {
        
        $subreddits = Subreddit::latest()->get();

        return view('subreddits.index', [
            'subreddits' => $subreddits,
        ]);
    }

    public function store() {


        $subreddit = new Subreddit();   

        $subreddit->title = request('title');
        $subreddit->name = request('name');
        $post->subreddit_id = request('subreddit_id');
    

        $subreddit->save();

        return redirect('/subreddits');
        
       /*  $subreddit = New Subreddit;
        $subreddit->title = $request->title;
        $subreddit->save();
        
        return redirect()->route('/subreddits'); */
    }

    public function create() {
        return view('subreddits.create');
    }

    public function show($id){
       /*  $subreddit = Post::latest()->get(); */
       $subreddits = Post::where('subreddit_id', $id)->get();
       $id = $id;
    
        return view('subreddits.show', ['subreddits' => $subreddits]);
    }
    









    /* public function index() {

        $subreddits = Subreddit::latest()->get();

        return view('subreddits.index', [
            'subreddits' => $subreddits,
        ]);
    }

    public function show($id){
        $subreddit = Subreddit::findOrFail($id);

        return view('subreddits.show', ['subreddit' => $subreddit]);
    }

    public function create() {
        return view('subreddits.create');
    }

    public function store() {
        $subreddit = new Subreddit();

        $subreddit->title = request('title');
        $subreddit->name = request('name');

        $subreddit->save();

        return redirect('/subreddits');
    } */
}