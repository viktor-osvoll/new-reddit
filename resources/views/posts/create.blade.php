@extends('layouts.app')

@section('content')
<div class="wrapper create-post">
    <h1 style="text-align: center; margin-top: 5%;">Create a New Post</h1>
<form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data" style="width: 80%; margin-left: 10%;">
     {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="title" class="form-control" id="title" name="title" placeholder="Title">
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
          <textarea class="form-control" id="content" name="content" rows="6" placeholder="What is this post about?"></textarea>
        </div>
        <div class="form-group">
            <div class="custom-file">   
            <label for="image">Example file input</label>
            <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-primary"> Post </button>
      </form>
</div>
@endsection