@extends('layouts.app')

@section('content')
   <div class="wrapper post-details">
   <p class="productname">Type - {{ $post->title }}</p>
   <p class="description">Base - {{ $post->content }}</p>
   <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
</form>
    @endsection