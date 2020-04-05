<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = ['title', 'email', 'category_id','image'];

    public function category() {
        return $this->belongsTo('App\Subreddit', 'category_id');
    }
}
