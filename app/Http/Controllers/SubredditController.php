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
    

        $subreddit->save();

        return redirect('/subreddits');
    
    }

    public function create() {
        return view('subreddits.create');
    }

    public function show($id, Request $request){
        /* $bajs = new Subreddit();
        $bajs->title = request('title'); 
        
       $bajs = Subreddit::all(); 
        $bajs->title = $request->input('title'); */

       
       $subreddits = Post::where('subreddit_id', $id)->get();
       $id = $id;

        return view('subreddits.show', ['subreddits' => $subreddits /* 'bajs' => $bajs */]);
    }
}