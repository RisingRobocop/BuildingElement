<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>login</title>



      <link rel="stylesheet" href="{{ URL::asset('css/login.css')}}">


</head>

<body>

  <div class="login-page">
  <div class="form">
    <form class="login-form" action="/login" method="post">
      {{ csrf_field() }}
      <input type="text" name="user" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <input type="submit" class="button" value="login">
    </form>
  </div>
</div>




</body>

</html>
