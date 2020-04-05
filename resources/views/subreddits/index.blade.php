@extends('layouts.app')

@section('content')
@foreach($subreddits as $subreddit)
<div class="card col-mb-4" style="width: 18rem; box-shadow: 3px 6px 12px; margin: 4%;">
{{-- <a href="/posts/{{ $post->id }}"><img src="img/monkey.jpg" class="card-img-top" alt="img"></a> --}}
    <div class="card-body">
      <h5 class="card-title">{{ $subreddit->title }}</h5>
    <a href="/subreddits/{{ $subreddit->id }}">{{ $subreddit->name }}</a>
    </div>

  </div>
@endforeach
@endsection