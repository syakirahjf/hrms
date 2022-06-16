
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HRMS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />

</head>
<body class="hold-transition sidebar-mini layout-fixed">

<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

    {{--Right navbar links --}}
     {{-- login dropdown menu --}}
     <div id="app" style="float:right;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
        {{-- end dropdown menu--}}
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HRMS Suite</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/admin/home" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/departmentList" class="nav-link">
                      <i class="nav-icon fas fa-copy"></i>
                      <p>Departments</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                      <i class="nav-icon fas fa-users"></i>
                      <p>
                        Employee
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/addemployee" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Add Employee</p>
                            </a>
                          </li>
                        <li class="nav-item">
                            <a href="/employeeList" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>All</p>
                            </a>
                          </li>
                      <li class="nav-item">
                        <a href="/empMarketing" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Marketing</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/empFinance" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Finance</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/empOM" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Operation Management</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/empHR" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Human Resource</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/empIT" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Information Technology</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <li class="nav-item">
                    <a href="/employeeAttendance" class="nav-link">
                      <i class="nav-icon fas fa-file-alt"></i>
                      <p>Employee Attendance</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/showAppList" class="nav-link">
                      <i class="nav-icon fas fa-file-alt"></i>
                      <p>Manage Leaves</p>
                    </a>
                </li>
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <div class="content-wrapper">
        @include('layouts.messages')
        @yield('content')
    </div>

</div>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2022 <a href="#">HRMS Suite</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
{{-- <!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script> --}}
</body>
</html>
