 <footer class="main-footer">
     <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
     All rights reserved.
     <div class="float-right d-none d-sm-inline-block">
         <b>Version</b> 3.2.0
     </div>
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="../assets/adminlte/plugins/jquery/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="../assets/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
     $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
 <script src="../assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- ChartJS -->
 <script src="../assets/adminlte/plugins/chart.js/Chart.min.js"></script>
 <!-- Sparkline -->
 <script src="../assets/adminlte/plugins/sparklines/sparkline.js"></script>
 <!-- JQVMap -->
 <script src="../assets/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
 <script src="../assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
 <!-- jQuery Knob Chart -->
 <script src="../assets/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="../assets/adminlte/plugins/moment/moment.min.js"></script>
 <script src="../assets/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="../assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 <!-- Summernote -->
 <script src="../assets/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="../assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="../assets/adminlte/dist/js/adminlte.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="../assets/adminlte/dist/js/demo.js"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="../assets/adminlte/dist/js/pages/dashboard.js"></script>
 <!-- DataTables  & Plugins -->
 <script src="../assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="../assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="../assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="../assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="../assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
 <script src="../assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
 <script src="../assets/adminlte/plugins/jszip/jszip.min.js"></script>
 <script src="../assets/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
 <script src="../assets/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
 <script src="../assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
 <script src="../assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
 <script src="../assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
 <!-- Page specific script -->
 <script>
     $(function() {
         $("#example1").DataTable({
             "responsive": true,
             "lengthChange": false,
             "autoWidth": false,
             "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
         }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
 <script>
     $(document).on("click", "#tombolEditAlternative", function() {
         let ida = $(this).data('ida');
         let kda = $(this).data('kda');
         let alternative = $(this).data('alternative');
         $(".modal-body #id_alternative").val(ida);
         $(".modal-body #kode_alternative").val(kda);
         $(".modal-body #alternative").val(alternative);
     });
 </script>
 <script>
     $(document).on("click", "#tombolEditKriteria", function() {
         let idk = $(this).data('idk');
         let kdk = $(this).data('kdk');
         let kriteria = $(this).data('kriteria');
         let bobot = $(this).data('bobot');
         let status = $(this).data('status');
         $(".modal-body #id_kriteria").val(idk);
         $(".modal-body #kode_kriteria").val(kdk);
         $(".modal-body #kriteria").val(kriteria);
         $(".modal-body #bobot").val(bobot);
         $(".modal-body #status").val(status);
     });
 </script>

 <script>
     $(document).on("click", "#tombolEditPembobotan", function() {
         let idb = $(this).data('idb');
         let ida = $(this).data('ida');
         let idk = $(this).data('idk');
         let nilai = $(this).data('nilai');
         $(".modal-body #id_bobot").val(idb);
         $(".modal-body #id_alternative").val(ida);
         $(".modal-body #id_kriteria").val(idk);
         $(".modal-body #nilai").val(nilai);
     });
 </script>
 </body>

 </html>