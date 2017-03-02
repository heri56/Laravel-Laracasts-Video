<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'My Web')</title>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"></scripts>
     <script src="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"></script>
     @yield('styles')
       @yield('head')
   </head>
   <body>
       @section('header')
       @show

       @yield('content')


       @section('footer')
       @show

     <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <script src="assets/js/app.js"></script>
     @yield('scripts')
   </body>
   </html>
