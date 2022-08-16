<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-danger">
    <!-- Control sidebar content goes here -->
    <div class="py-5">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer"><br><br>
    <!-- To the right -->
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021-2022 <a href="https://senegal.simplon.co/">Simplon.co Senegal</a>.</strong> All rights reserved.
  </footer>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset ('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset  ('dist/js/adminlte.min.js') }}"></script>
@yield('scripts')