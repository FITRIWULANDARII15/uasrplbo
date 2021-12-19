<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>Registrasi</b></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Daftar Akun Admin</p>

            <form class="admin" method="post" action="<?= base_url('auth/daftaradmin'); ?>">
                <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <hr>
            <a href="<?= base_url('auth/login') ?>" class="text-center">Sudah punya akun? Silahkan Login</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->