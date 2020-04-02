@extends('layouts.app')

@section('content')
   {{-- <div class="wrapper post-details">
   <p class="productname">Type - {{ $post->title }}</p>
   <p class="description">Base - {{ $post->content }}</p>
   <img src="{{ asset('uploads/post/' . $post->image) }}" style="width: 60%;" alt="Image"> --}}
   <div class="card" style="width: 45rem; margin-left: 25%; box-shadow: 3px 6px 12px black;">
    <img src="{{ asset('uploads/post/' . $post->image) }}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title" style="font-size: 40px;">{{ $post->title }}</h5>
    <p class="card-text" style="font-size: 25px;">{{ $post->content }}</p>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary">Delete</button>
    </form>
        <a href="/editimage/{{ $post->id }}" class="btn btn-secondary" style="margin-top: 1%;">Edit</a>
    </div>
  </div>
   
    @endsection