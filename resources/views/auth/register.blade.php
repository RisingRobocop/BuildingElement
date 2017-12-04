<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrazione</title>
  </head>
  <body>
    <form class="" action="/register" method="post">
      {{ csrf_field() }}
      user<input type="text" name="name" value="">
      password<input type="password" name="password" value="">
      <input type="submit" name="" value="confirm">
    </form>
  </body>
</html>
