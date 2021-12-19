<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pendaftaran Vaksinasi Pertama</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>No. KTP</th>
                                        <th>No. HP</th>
                                        <th>No. Whatsapp</th>
                                        <th>Jadwal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($pvaksin1 as $pv1) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $pv1['nama']; ?></td>
                                            <td><?= $pv1['noktp']; ?></td>
                                            <td><?= $pv1['nohp']; ?></td>
                                            <td><?= $pv1['nowhatsapp']; ?></td>
                                            <td><?= $pv1['jadwal']; ?></td>
                                            <td>
                                                <a href="" class="badge badge-primary" data-toggle="modal" data-target="#jadwalModal">
                                                    <i class="nav-icon fas fa-fw fa-calendar-alt"></i>&nbsp; Tentukan Jadwal</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<!-- Modal -->
<div class="modal fade" id="jadwalModal" tabindex="-1" aria-labelledby="jadwalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jadwalModalLabel">Tentukan Jadwal Vaksinasi</h5>
            </div>
            <form action="">
                <div class="modal-body">
                
                    <div class="col">
                        <div class="form-group">
                            <label>Nama</label>
                            <div class="input-group">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="#" value="<?= set_value('nama') ?>">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Jadwal</label>
                            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" />
                                <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>