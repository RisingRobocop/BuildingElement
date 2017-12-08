@include('home.includes.head')
  <div class="">
    <form class="" action="login" method="post">
      {{ csrf_field() }}
      <input type="text" name="user" value="">
      <input type="password" name="password" value="">
      <input type="submit" name="" value="login">
      <input type="checkbox" name="remember" value="TRUE"> remember
    </form>
  </div>
