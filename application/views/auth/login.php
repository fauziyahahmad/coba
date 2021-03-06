<main class="bg-light vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-body">
                    <form method="POST" action="">
                        <h1>Login</h1>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="pl-3 text-danger">', '</small>'); ?>
                            <?= $this->session->flashdata('message'); ?>
                            <?php $this->session->unset_userdata('message'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                            <?= form_error('password', '<small class="pl-3 text-danger">', '</small>'); ?>
                            <?= $this->session->flashdata('message2'); ?>
                            <?php $this->session->unset_userdata('message2'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </form>

                    <small>Belum punya akun? <a href="<?= base_url('auth/'); ?>register" class="font-weight-bold">Daftar</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>