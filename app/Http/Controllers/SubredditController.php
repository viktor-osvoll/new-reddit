<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Subreddit;

class SubredditController extends Controller
{

    









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