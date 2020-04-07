@extends('layouts.app')

@section('content')
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
                    <hr>
      <ul class="list-group">
    @foreach ($post->comments as $comment)

      <li class="list-group-item" style="font-size: 40px; text-align: center;">
        <strong>
          {{ $comment->created_at->diffForHumans() }}
        </strong>
        {{ $comment->body }}
      </li>
        
    @endforeach
      </ul>
<div class="container">
      <div class="card">
        <div class="card-block">
        <form action="/posts/{{ $post->id }}/comments" method="POST">
          {{ csrf_field() }}
            <div class="form-group">
              <textarea name="body" cols="30" rows="10" class="form-control" placeholder="Say something...">
                
              </textarea>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Add comment</button>
            </div>
            </div>
          </form>
        </div>
      </div>
</div>
   
    @endsection