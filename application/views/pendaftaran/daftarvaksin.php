<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('/vendor/adminlte/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= base_url('/vendor/adminlte/plugins/daterangepicker/daterangepicker.css') ?>">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= base_url('/vendor/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= base_url('/vendor/adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') ?>">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('/vendor/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('/vendor/adminlte/plugins/select2/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/vendor/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?= base_url('/vendor/adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') ?>">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="<?= base_url('/vendor/adminlte/plugins/bs-stepper/css/bs-stepper.min.css') ?>">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="<?= base_url('/vendor/adminlte/plugins/dropzone/min/dropzone.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('/vendor/adminlte/dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">



        <!-- Content Wrapper. Contains page content -->
        <div class="container mt-2 mb-2">
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container">
                        <div class="row mb-2">
                            <div class="col text-center">
                                <h1 class="m-0">Pendaftaran Vaksin Pertama</h1>
                            </div><!-- /.col -->

                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container ">


                        <form class="pendaftaran" method="post" action="<?= base_url('pendaftaran/daftarvaksin'); ?>">
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">No. KTP</label>
                                    <input type="text" class="form-control" id="noktp" name="noktp" value="<?= set_value('noktp') ?>">
                                    <?= form_error('noktp', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="col">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama') ?>">
                                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">No. HP</label>
                                    <input type="text" class="form-control" id="nohp" name="nohp" value="<?= set_value('nohp') ?>">
                                    <?= form_error('nohp', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="col">
                                    <label class="form-label">No. Whatsapp</label>
                                    <input type="text" class="form-control" id="nowhatsapp" name="nowhatsapp" value="<?= set_value('nowhatsapp') ?>">
                                    <?= form_error('nowhatsapp', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= set_value('alamat') ?>">
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= set_value('pekerjaan') ?>">
                                    <?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="col">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"
                                        id="tgl" name="tgl" value="<?= set_value('tgl') ?>">
                                        <?= form_error('tgl', '<small class="text-danger">', '</small>'); ?>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    <!-- <input type="text" class="form-control" id="tgl" name="tgl" value="#">
                                    # -->
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Daftar</button>
                        </form>
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer text-center fixed-bottom">
            <strong>Copyright &copy; Sistem Pendaftaran Vaksinasi || UAS RPLBO, 2021</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url('/vendor/adminlte/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('/vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
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
    <!-- AdminLTE App -->
    <script src="<?= base_url('/vendor/adminlte/dist/js/adminlte.min.js') ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('/vendor/adminlte/dist/js/demo.js') ?>"></script>
    <script>
        $(function() {
            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });
        })
    </script>
</body>

</html>