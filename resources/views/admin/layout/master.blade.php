<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')

<body>
  <div class="wrapper">
    @include('admin.layout.sidebar')
    <div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            <a class="navbar-brand" href="{{url('admin')}}">Dashboard</a>
          </div>
          <div class="collapse navbar-collapse">


            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="{{url('logout')}}">
                              Logout
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>


      <footer class="footer">
        <div class="container-fluid">
          <nav class="pull-left">
            <ul>
              <li>
                <a href="{{url('/')}}">
                                Home
                            </a>
              </li>

            </ul>
          </nav>
          <p class="copyright pull-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>   © Building Element - Via Pian Scairolo 11, CH - 6915 Pambio Noranco - Switzerland . designed by ASborsoniWorldWide
          </p>
        </div>
      </footer>

    </div>
  </div>
  @yield('popups')

  <!--   Core JS Files   -->

  <script src="{{ URL::asset('admin-themes/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
  <script src="{{ URL::asset('admin-themes/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="{{ URL::asset('admin-themes/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>




  <!--  Notifications Plugin    -->
  <script src="{{ URL::asset('admin-themes/js/bootstrap-notify.js')}}"></script>
  @yield('scripts')





</body>



</html>
