@extends('layouts.app')

@section('content')       
    <div class="container">
@foreach($posts as $post)
  <!-- Page Heading -->
  <h1 class="my-4" style="font-size: 60px;">{{ $post->title}}<br>
  <small style="font-size: 20px;">{{ $post->user->name }} - {{ $post->created_at->diffForHumans() }}</small>
  </h1>
<div class="row">
  <!-- Project One -->
    <div class="col-md-7">
      <a href="/posts/{{ $post->id }}">
        <img style="width: 80%;" class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('uploads/post/' . $post->image) }}">
      </a>
    </div>
    <div class="col-md-5">
      <p style="font-size: 30px;"> {{ $post->content }} </p>
    </div>
  </div><br>
                <hr>
@endforeach
      
    </div>
@endsection

{{-- <div class="card col-lg-6" style="width: 18rem; box-shadow: 3px 6px 12px;">
<a href="/posts/{{ $post->id }}">
    <img src="{{ asset('uploads/post/' . $post->image) }}" style="width: 100%;" alt="Image"></a>
    <div class="card-body">
      <h5 class="card-title">{{ $post->title }}</h5>
      <p class="card-text"> {{ $post->content }} </p>
      <h4 style="font-size: 15px;"> {{ $post->created_at }} </h4>
    </div>
  </div> --}}