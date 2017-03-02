@extends('posts.index')

@section('content')

  <div class="col-sm-8 blog-main">
    <h1>Publish</h1>

    <hr>

    <form method="post" action="/posts">
      {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="Title" name="title">
  </div>
  <div class="form-group">
    <label for="body">Body:</label>
    <textarea name="body" id="body" rows="8" cols="80" class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Publsih</button>
</form>

@endsection
