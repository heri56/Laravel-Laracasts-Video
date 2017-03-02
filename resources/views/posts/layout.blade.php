@extends('index')

@section('content')
  <div class="row">

    <div class="col-sm-8 blog-main">
@foreach ($posts as $post)
@include('posts.post')
@endforeach
@endsection
