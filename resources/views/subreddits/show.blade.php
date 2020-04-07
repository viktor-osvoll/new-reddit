@extends('layouts.app')

@section('content')

{{-- 
{{$bajs}} --}}

<div class="container">
  <div class="row">

@foreach ($subreddits as $subreddit)

<div class="card col-mb-4" style="width: 18rem; box-shadow: 3px 6px 12px; margin: 4%;">
  <a href="/posts/{{ $subreddit->id }}">
      <img src="{{ asset('uploads/post/' . $subreddit->image) }}" style="width: 100%;" alt="Image"></a>
      <div class="card-body">
        <h5 class="card-title">{{ $subreddit->title }}</h5>
        <p class="card-text"> {{ $subreddit->content }} </p>
        <h4 style="font-size: 15px;"> {{ $subreddit->created_at }} </h4>
        <p> #{{ $subreddit->subreddit_id }} </p>
        
      </div>
    </div>
 {{-- <div class="card" style="width: 45rem; margin-left: 25%; box-shadow: 3px 6px 12px black;">
  <div class="card-body">
  <h5 class="card-title" style="font-size: 40px;">{{ $subreddit->title }}</h5>
  <p class="card-text" style="font-size: 25px;">{{ $subreddit->content }}</p>
 
  </div>
</div>   --}} 
        @endforeach 
  </div>
</div>  
    @endsection