@extends('layouts.app')

@section('content')
<div class="wrapper create-post">
    <h1 style="text-align: center; margin-top: 5%;">Create a New Post</h1>
    <form action="/posts" method="POST" enctype="multipart/form-data" style="width: 80%; margin-left: 10%;">
        @csrf
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="title" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="form-group">
          <label for="subreddit">Subreddit:</label>
          <select class="form-control" id="subreddit">
            <option>Gaming</option>
            <option>Animals</option>
            <option>Cars</option>
            <option>Food</option>
            <option>Coding</option>
          </select>
        </div>
        <div class="form-group">
          <label for="content">Content:</label>
          <textarea class="form-control" id="content" rows="6" placeholder="What is this post about?"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <button type="submit" name="submit" class="btn btn-primary"> Post </button>
      </form>
</div>
@endsection