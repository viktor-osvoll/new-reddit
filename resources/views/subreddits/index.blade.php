@extends('layouts.app')
@section('content')

  <h1 style="font-size: 50px; text-align: center;">Subreddits<hr></h1>
  <div class="container">
    
@foreach ($subreddits as $item => $value)  
<div class="col-md-6 mx-auto">
<div class="card">
  <div class="card-body">
  <h5 class="card-title">{{$value->title}}</h5>
    <hr>
  <p class="card-text">{{$value->name}}</p>
  <a href="/subreddits/{{$value->id}}" class="card-link">- View {{$value->title}} Subreddit</a>
  </div>
</div>
</div>
<br>

@endforeach
    </div>
</div>
@endsection