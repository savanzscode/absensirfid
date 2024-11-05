<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- DATA TABLES -->
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets_admin/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets_admin/css/components.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <!-- Add additional navbar items here if needed -->
        </ul>
      </nav>

      <!-- SIDE BAR -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">RFID Absensi</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SBY</a>
          </div>

          <ul class="sidebar-menu">
            <li class="menu-header">Master Admin</li>
            <li><a class="nav-link" href="{{ url('/admin') }}"><i class="fa fa-user-shield" aria-hidden="true"></i> <span>Data Admin</span></a></li>

            <li class="menu-header">Master Karyawan</li>
            <li><a class="nav-link" href="{{ url('/karyawan') }}"><i class="fa fa-users" aria-hidden="true"></i> <span>Data Karyawan</span></a></li>

            <li class="menu-header">Rekap Absensi</li>
            <li><a class="nav-link" href="{{ url('/absensi') }}"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <span>Data Absensi</span></a></li>

            <li class="menu-header">RFID</li>
            <li><a class="nav-link" href="{{ url('/scan') }}"><i class="fa fa-barcode" aria-hidden="true"></i><span>Presensi</span></a></li>
          </ul>
        </aside>
      </div>
    </div>
  </div>




      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('judul_halaman')</h1>
          </div>
          	@yield('isi')
          <div class="section-body">
          </div>
        </section>
      </div>



  @include('sweetalert::alert')
{{-- @include('layout.footer') --}}



<footer class="main-footer">
    <div class="footer-left">
      Copyright &copy; 2024 <div class="bullet"></div>Development By <a href="https://github.com/savanzscode">Cristian Michael Halim</a>
    </div>

  </footer>
  </div>
  </div>


    <!-- General JS Scripts -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></script>
    <script src="assets_admin/js/scripts.js"></script>
    <script src="assets_admin/js/custom.js"></script>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{url('/assets_admin/js/stisla.js')}}"></script>



  <!-- DATA TABLES -->
  <script src="assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="assets_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="assets_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- Template JS File -->
  <script src="{{url('/assets_admin/js/scripts.js')}}"></script>
  <script src="{{url('/assets_admin/js/custom.js')}}"></script>
  <script>
      $(function() {
          $("#example1").DataTable({
              "responsive": true,
              "autoWidth": false,
          });
          $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
          });
      });
  </script>
  <!-- Page Specific JS File -->
  </body>
  </html>

