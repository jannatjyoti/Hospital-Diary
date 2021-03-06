<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <title>@yield('title')</title>
  <base href="{{ \URL::to('/') }}">

  <script src="{{ asset('code.jquery.com/jquery-2.1.3.min.js') }}"></script>
  <script src="{{ asset('unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>
  <link rel="stylesheet" href="http://t4t5.github.io/sweetalert/dist/sweetalert.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ url('/') }}" class="nav-link">User Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      {{-- <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form> --}}

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <!-- logout option -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="{{ route('auth.admin_logout') }}">
            <span class="badge badge-success">Logout</span>
          </a>
        </li>
        <!-- logout option end -->

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="admin/dashboard" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Hospital Diary</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="hospital_name">
            <p style="padding: 5px" class="text-success"> {{ $LoggedUserInfo['admin_name'] }} </p>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="admin/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item menu-close">
              <a href="{{ url('admin/service') }}" class="nav-link">
                <i class="nav-icon fas fa-concierge-bell"></i>
                <p>
                  Service Management
                  {{-- <i class="right fas fa-angle-left"></i> --}}
                </p>
              </a>
              {{-- <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('admin/service/create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Service</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('admin/service') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Service List</p>
                  </a>
                </li>

              </ul> --}}
            </li>
            <li class="nav-item menu-close">
              <a href="{{url('admin/serviceDetail/create')}}" class="nav-link">
                <i class="nav-icon fas fa-concierge-bell"></i>
                <p>
                  Service Details
                  {{-- <i class="right fas fa-angle-left"></i> --}}
                </p>
              </a>
              {{-- <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('admin/serviceDetail/create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Service Detail</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('admin/serviceDetail') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Service Detail List</p>
                  </a>
                </li>

              </ul> --}}
            </li>

            <li class="nav-item menu-close">
              <a href="{{url('admin/doctor')}}" class="nav-link ">
                <!-- <i class="nav-icon fas fa-concierge-bell"></i> -->
                <i class="nav-icon fa fa-user-md" aria-hidden="true"></i>
                <p> Doctor Management</p>
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </a>
              {{-- <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('admin/doctor/create')}}" class="nav-link">
                    <!-- <a href="add_doctor" class="nav-link"> -->
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Doctor</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('admin/doctor')}}" class="nav-link">
                    <!-- <a href="add_doctor" class="nav-link"> -->
                    <i class="far fa-circle nav-icon"></i>
                    <p>Doctor List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Available Doctor</p>
                  </a>
                </li>
              </ul> --}}
            </li>
            {{-- <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                  Settings
                </p>
              </a>
            </li> --}}
            <li class="nav-item">
              <a href="{{ route('update_profile') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Update Hospital Info
                </p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users-cog"></i>
                <p>
                  Staff Management
                </p>
              </a>
            </li> --}}

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="container">
        <div class="col-8" style="margin-left: 10%">
          @include('fn.partials.message')
        </div>
      </div>

      @yield('content')

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a href="http://adminlte.io">Hospital Diary</a>.</strong>
      All rights reserved.
      {{-- <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.0-rc.5
      </div> --}}
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)

      function readURL(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
        $('#view_img').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
        }
      }
        
        $("#image").change(function(){
        readURL(this);
        $("#view_img_div").removeAttr('hidden');
        });
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>


  @stack('page-js')
</body>

</html>