<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Application</title>
    <meta name='viewport' content='width=device-width,initial-scale=1, maximum-scale=1'/>
    {{HTML::style('bootstrap/bootstrap.min.css')}}
  </head>
  <body>
    <div class="container">
      @yield('content')
      {{HTML::script('bootstrap/js/bootstrap.min.js')}}
      {{HTML::script('bootstrap/js/bootstrap.bootstrap.js')}}
    </div>

  </body>

  @yield('footer')
</html>
