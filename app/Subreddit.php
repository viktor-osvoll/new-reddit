<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subreddit extends Model
{
    public $fillable = ['title'];
    protected $table = "subreddits";
}
