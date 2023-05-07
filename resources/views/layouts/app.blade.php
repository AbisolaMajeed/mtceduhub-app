<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/all.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/icheck-bootstrap.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.css') }}">


  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/tempusdominus-bootstrap-4.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/jqvmap.css')}}">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/OverlayScrollbars.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/summernote-bs4.css')}}">
</head>

        @yield('content')
        
        @if(!Request::is('login'))
          <!-- /.content-wrapper -->
          <footer class="main-footer">
              <strong>Copyright &copy; 2014-{{date('Y')}}</strong>
              </div>
          </footer>
        @endif

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('assets/admin/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/admin/js/jquery.dataTables.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
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
    
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/datatables-select/js/select.bootstrap4.js')}}"></script>
<script src="{{asset('assets/datatables-responsive/js/dataTables.responsive.js')}}"></script>
<script src="{{asset('assets/datatables-responsive/js/responsive.bootstrap4.js')}}"></script>
<script src="{{asset('assets/datatables-buttons/js/dataTables.buttons.js')}}"></script>
<script src="{{asset('assets/datatables-buttons/js/buttons.bootstrap4.js')}}"></script>
<script src="{{asset('assets/jszip/jszip.js')}}"></script>
<script src="{{asset('assets/pdfmake/pdfmake.js')}}"></script>
<script src="{{asset('assets/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/datatables-buttons/js/buttons.html5.js')}}"></script>
<script src="{{asset('assets/datatables-buttons/js/buttons.print.js')}}"></script>
<script src="{{asset('assets/datatables-buttons/js/buttons.colVis.js')}}"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('assets/admin/js/tempusdominus-bootstrap-4.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('assets/admin/js/summernote-bs4.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('assets/admin/js/jquery.overlayScrollbars.js')}}"></script>

    <script src="{{ asset('assets/admin/js/adminlte.min.js') }}"></script>

    {{-- <script>
        $(function () {
          $("#applicant").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#applicant_wrapper .col-md-6:eq(0)');
          
          $('#applicant2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script> --}}
</body>
</html>

