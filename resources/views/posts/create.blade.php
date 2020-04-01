@extends('layouts.app')

@section('content')
<div class="wrapper create-post">
    <h1 style="text-align: center; margin-top: 5%;">Create a New Post</h1>
    <form action="/posts" method="POST" style="text-align: center;">
        @csrf
        <label for="title">Title:</label> <br />
        <input type="text" name="title" id="title"> <br />
        <label for="content">Content:</label><br />
        <input type="text" name="content" id="content"><br />
        <label for="subreddits" style="margin-top: 2%;">Subreddits:</label>
        <select name="subreddit" id="subreddit">
            <option value="animals">Animals</option>
            <option value="vechiles">Vechiles</option>
            <option value="properties">Properties</option>
            <option value="electronics">Electronics</option>
            <option value="garden">Garden</option>
        </select><br />
        <input type="submit" value="Publish" style="margin-top: 1%;">

    </form>
</div>
@endsection