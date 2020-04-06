@extends('layouts.app')

@section('content')
<div class="container">
<form action="/subreddits" method="POST">
    @csrf
<div class="form-group">
    <label for="title">Title:</label>
    <input type="title" class="form-control" id="title" name="title" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control" id="name" name="name" placeholder="Name">
  </div>
  <button type="submit" name="submit" class="btn btn-primary"> Create </button>
</form>
</div>
@endsection