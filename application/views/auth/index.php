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
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('/vendor/adminlte/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('/vendor/adminlte/dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-dark navbar-dark">
            <div class="container">
                <a href="<?= base_url() ?>" class="navbar-brand">
                    <img src="<?= base_url('/vendor/adminlte/dist/img/spv.jpg') ?>" alt="SPV" class="brand-image img-circle elevation-3" style="opacity: .8">

                </a>


                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a href="<?= base_url('auth/login') ?>" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="container mt-2 mb-2">
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container">
                        <div class="row mb-2">
                            <div class="col text-center">
                                <h1 class="m-0">Pendaftaran Vaksinasi</h1>
                            </div><!-- /.col -->

                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container ">

                    <?= $this->session->flashdata('message'); ?>
                        <div class="row">
                        
                            <div class="col mt-2">
                            <div class="card text-center">
                                    <h5 class="card-header text-center text-primary">Pendaftaran <b>Vaksin Pertama</b></h5>
                                    <div class="card-body">
                                        <a href="<?= base_url('pendaftaran')?>" class="btn btn-block btn-primary">Daftar</a>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col mt-2">
                                <div class="card text-center">
                                    <h5 class="card-header text-center text-success">Pendaftaran <b>Vaksin Kedua</b></h5>
                                    <div class="card-body">
                                        <a href="<?= base_url('pendaftaran/daftarvaksin2')?>" class="btn btn-block btn-success">Daftar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-2">
                            <div class="card text-center">
                                    <h5 class="card-header text-center">Cek Jadwal Vaksin</h5>
                                    <div class="card-body">
                                        <a href="#" class="btn btn-block btn-secondary">Cek Jadwal</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
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
    <!-- AdminLTE App -->
    <script src="<?= base_url('/vendor/adminlte/dist/js/adminlte.min.js') ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('/vendor/adminlte/dist/js/demo.js') ?> "></script>
</body>

</html>