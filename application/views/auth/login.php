<div class="login-box">

    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <div class="login-logo">
                <a href="#"><b>Login Admin</b></a>
            </div>
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('admin') ?>" method="post">

                <!-- /.Email -->
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <!-- /.Password-->
                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <!-- /.Tombol Login -->
                <div class="row">
                    <!-- /.col -->
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <hr>
            <div class="text text-center">
                <!-- <p class="">
                    <a href="<?= base_url('auth/daftaradmin') ?>">Registrasi</a>
                </p> -->
                <p class="">
                    <a href="<?= base_url('auth') ?>">Halaman Awal</a>
                </p>
            </div>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->