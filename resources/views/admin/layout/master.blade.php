<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')
  <body>
    @include('admin.layout.nav')
    @include('admin.layout.error')
    @yield('content')
    @include('admin.layout.footer')
  </body>

</html>
