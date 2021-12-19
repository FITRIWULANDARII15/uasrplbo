<footer class="main-footer text-center">
    <strong>Copyright &copy; Sistem Pendaftaran Vaksinasi || UAS RPLBO, 2021</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('/vendor/adminlte/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('/vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('/vendor/adminlte/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('/vendor/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('/vendor/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('/vendor/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('/vendor/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('/vendor/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('/vendor/adminlte/plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('/vendor/adminlte/plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('/vendor/adminlte/plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('/vendor/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('/vendor/adminlte/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('/vendor/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('/vendor/adminlte/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('/vendor/adminlte/dist/js/demo.js') ?>"></script>

<!-- Select2 -->
<script src="<?= base_url('/vendor/adminlte/plugins/select2/js/select2.full.min.js') ?>"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('/vendor/adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') ?>"></script>
<!-- InputMask -->
<script src="<?= base_url('/vendor/adminlte/plugins/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('/vendor/adminlte/plugins/inputmask/jquery.inputmask.min.js') ?>"></script>
<!-- date-range-picker -->
<script src="<?= base_url('/vendor/adminlte/plugins/daterangepicker/daterangepicker.js') ?>"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('/vendor/adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('/vendor/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('/vendor/adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>"></script>
<!-- BS-Stepper -->
<script src="<?= base_url('/vendor/adminlte/plugins/bs-stepper/js/bs-stepper.min.js') ?>"></script>
<!-- dropzonejs -->
<script src="<?= base_url('/vendor/adminlte/plugins/dropzone/min/dropzone.min.js') ?>"></script>

<script>
    $(function() {
        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
    })
    //Date and time picker
    $('#reservationdatetime').datetimepicker({
        icons: {
            time: 'far fa-clock'
        }
    });
</script>
<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["print"]
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
</body>

</html>