<!DOCTYPE html>
<html>
<head>
    <title>Login - Catatan Keuangan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3 class="text-center mb-4">Login</h3>

            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
            <?php endif; ?>

            <?= form_open('auth/login'); ?>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?= set_value('email') ?>">
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            <?= form_close(); ?>

            <div class="text-center mt-3">
                <a href="<?= base_url('auth/register') ?>">Belum punya akun? Daftar</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
