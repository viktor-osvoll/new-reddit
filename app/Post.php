<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = ['title', 'email', 'category_id', 'user_id','image'];

    public function category() {
        return $this->belongsTo('App\Subreddit', 'category_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function addComment($body) {
        
        Comment::create([
            'body' => $body,
            'post_id' => $this->id,
            'user_id' => $this->user_id
        ]);
    }
}
