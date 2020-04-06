@extends('layouts.app')

@section('content')
<div class="container">
@foreach ($subreddits as $item => $value)    
<div class="card col-mb-4" style="width: 18rem; box-shadow: 3px 6px 12px; margin: 4%;">
{{-- <a href="/posts/{{ $post->id }}"><img src="img/monkey.jpg" class="card-img-top" alt="img"></a> --}}
    <div class="card-body">
      <h5 class="card-title">{{ $value->title }}</h5>
    <a href="/subreddits/{{ $value->id }}">Visit this Subreddit->{{ $value->name }}</a>
    <p> {{ $value->create_at }} </p>
    </div>

  </div>
</div>
@endforeach
@endsection