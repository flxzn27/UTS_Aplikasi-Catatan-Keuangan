<!DOCTYPE html>
<html>
<head>
    <title>Register - Catatan Keuangan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3 class="text-center mb-4">Daftar Akun</h3>

            <?= form_open('auth/register'); ?>
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= set_value('nama') ?>">
                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                </div>
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
                <div class="mb-3">
                    <label>Konfirmasi Password</label>
                    <input type="password" name="password_confirm" class="form-control">
                    <?= form_error('password_confirm', '<small class="text-danger">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-success w-100">Register</button>
            <?= form_close(); ?>

            <div class="text-center mt-3">
                <a href="<?= base_url('auth') ?>">Sudah punya akun? Login</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
