<!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script> &diams; <a href="https://www.undip.ac.id/">UNDIP</a>.</strong> 
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>

        <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
      <!-- /.control-sidebar -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>

@include('sweetalert::alert')

@stack('scripts')
</body>
</html>
