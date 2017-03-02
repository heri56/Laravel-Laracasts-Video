<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($tasks as $tasked)
    <li>
    <a href="/tasks/{{$tasked->id}}">
    {{$tasked->body}}
  </a>
    </li>
    @endforeach

  </body>
</html>
