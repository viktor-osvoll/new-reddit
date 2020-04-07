@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div class="links">
                        <a href="/posts">- Front Page</a> <br />
                        <a href="/posts/create">- Create a New Post</a> <br />
                        <a href="/subreddits">- Subreddits</a> <br />
                        <a href="/subreddits/create">- Create a Subreddit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
