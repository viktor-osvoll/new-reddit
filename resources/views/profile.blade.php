@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/headshots/avatar/{{ $user->avatar}}" style="width:150px; height: 150px; float: left; border-radius: 50%; margin-right:25px;">
            <h2> {{ $user->name }}'s Profile </h2>
            {{-- <form action="{{ route('profileupdate') }}" method="POST" enctype="multipart/form-data">
              <label>Update Profile Image</label><br>
              
              <div class="input-group">
                <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" value="{{ $avatar->image }}" required>
                <label class="custom-file-label">Choose file</label>
                </div>
            </div><br><br>
            <input type="submit" name="submit" class="btn btn-primary pull-right">
            </form> --}}
        </div>
    </div>
</div>

@endsection