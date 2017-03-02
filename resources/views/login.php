<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel PHP</title>
  </head>
  <body>
    <form action="login" method="post">
      <input type="hidden" name="_Token" value="{{ csrf_token() }}">
      Username:
      <input type="text" name="username"><br>
      Password:
      <input type="password" name="password">
      <input type="submit" value="Login">
    </form>

  </body>
</html>
