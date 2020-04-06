@extends('layouts.app')

@section('content')       
<div class="wrapper post-index" style="text-align: center; margin-top: 5%;">
    <div class="container">
        <div class="row">
@foreach($posts as $post)
<div class="card col-mb-4" style="width: 18rem; box-shadow: 3px 6px 12px; margin: 4%;">
{{-- <a href="/posts/{{ $post->id }}"><img src="img/monkey.jpg" class="card-img-top" alt="img"></a> --}}
<a href="/posts/{{ $post->id }}">
    <img src="{{ asset('uploads/post/' . $post->image) }}" style="width: 100%;" alt="Image"></a>
    <div class="card-body">
      <h5 class="card-title">{{ $post->title }}</h5>
      <p class="card-text"> {{ $post->content }} </p>
      <h4 style="font-size: 15px;"> {{ $post->created_at }} </h4>
      {{-- <p> #{{ $post->title }} </p> --}}
    </div>
  </div>
@endforeach
        </div>
    </div>
</div>
@endsection