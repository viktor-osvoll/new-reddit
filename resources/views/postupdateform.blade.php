<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="jumbotron">
            <h1>Edit Your Post:</h1>
        <form action="/updateimage/{{ $posts->id }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
        <input type="hidden" name="id" id="id" value="{{ $posts->id }}">

        <div class="form-group">
            <label>Title:</label>
        <input type="text" name="title" class="form-control" value="{{ $posts->title }}" placeholder="Title">
        </div>
        <select name="category_id" class="form-control">
            <?php $selectedvalue = $posts->category_id ?>
            @foreach ($subreddits as $item => $value)
          <option value="{{$value->id}}" {{ $selectedvalue == $value['id'] ? 'selected="selected"' : '' }}>{{$value->title}}</option>
            @endforeach
          </select>
        <div class="form-group">
            <label>Content:</label>
        <input type="text" name="content" class="form-control" value="{{ $posts->content }}" placeholder="Content">
        </div>
        <label>Image:</label>
        <div class="input-group">
            <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" value="{{ $posts->image }}">
            <label class="custom-file-label">Choose file</label>
            </div>
        </div>
        <br>
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Update</button>
        </form>
        </div>
    </div>

</body>
</html>