@extends('layouts.app')

@section('content')
   <div class="card" style="width: 45rem; margin-left: 25%; box-shadow: 3px 6px 12px black;">
    <div class="card-body">
    <h5 class="card-title" style="font-size: 40px;">{{ $subreddit->title }}</h5>
    <p class="card-text" style="font-size: 25px;">{{ $subreddit->name }}</p>
    </div>
  </div>
   
    @endsection