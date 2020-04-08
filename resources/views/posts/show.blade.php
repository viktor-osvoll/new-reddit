@extends('layouts.app')

@section('content')
<div class="col-md-6 mx-auto">
   <div class="card" style="box-shadow: 3px 6px 12px black;">
    <img src="{{ asset('uploads/post/' . $post->image) }}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title" style="font-size: 40px;">{{ $post->title }}</h5>
    <p class="card-text" style="font-size: 25px;">{{ $post->content }}</p>  
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
      
        {{-- @if ($post->user->name == $users->name)
        hej
        @else
            fjk
        @endif --}}
        
        @method('DELETE')
        <button class="btn btn-primary">Delete</button>
    </form>
        <a href="/editimage/{{ $post->id }}" class="btn btn-secondary" style="margin-top: 1%;">Edit</a>
    </div>
  </div>
</div>
</div>
                    <hr>
                    <h1 style="text-align: center;">Comments:</h1>
    @foreach ($post->comments as $comment)
      <div class="col-md-6 mx-auto" style="border-bottom: 1px dotted #acadac">
            <div class="media">
              <img src="#" alt="" class="mr-3">
              <div class="media-body">
              <h5 class="mt-0"><b>{{$comment->user->name}}</b> - {{$comment->created_at->diffForHumans()}}</h5>
              {{$comment->body}}
              </div>
            </div>
      </div>
      <br>
                  

      {{-- <h1 style="font-size: 50px;">{{ $comment->user->name }}</h1>
      <li class="list-group-item" style="font-size: 40px; text-align: center;">
        <strong>
          {{ $comment->created_at->diffForHumans() }}
        </strong>
        {{ $comment->body }}
      </li> --}}
        
    @endforeach
            <br><br>
        <form action="/posts/{{ $post->id }}/comments" method="POST" style="margin-left: 15%; margin-right: 15%;">
          {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Write a comment:</label>
              <textarea name="body" rows="3" id="exampleFormControlTextarea1" class="form-control" placeholder="Say something..."></textarea>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Add comment</button>
            </div>
          </form>
   
    @endsection