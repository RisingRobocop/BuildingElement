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
            <a class="navbar-brand" href="#">Dashboard</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
              <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                </a>
              </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="">
                               Account
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
                <a href="#">
                                Home
                            </a>
              </li>

            </ul>
          </nav>
          <p class="copyright pull-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
          </p>
        </div>
      </footer>

    </div>
  </div>

  <!--   Core JS Files   -->

  <script src="{{ URL::asset('admin/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
  <script src="{{ URL::asset('admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="{{ URL::asset('admin/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>




  <!--  Notifications Plugin    -->
  <script src="{{ URL::asset('admin/js/bootstrap-notify.js')}}"></script>
  @yield('scripts')





</body>



</html>
