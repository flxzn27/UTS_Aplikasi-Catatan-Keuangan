<div class="container mt-5">
    <h3 class="mb-4">Edit Transaksi</h3>

    <!-- Perbaiki URL form open dengan menambahkan '/' di antara 'edit' dan id transaksi -->
    <?= form_open('transactions/edit/' . $transaction->id); ?>

    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" value="<?= set_value('tanggal', $transaction->tanggal) ?>">
        <?= form_error('tanggal', '<small class="text-danger">', '</small>') ?>
    </div>

    <div class="mb-3">
        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control" value="<?= set_value('kategori', $transaction->kategori) ?>">
        <?= form_error('kategori', '<small class="text-danger">', '</small>') ?>
    </div>

    <div class="mb-3">
        <label>Jenis</label>
        <select name="tipe" class="form-control">
            <option value="pemasukan" <?= set_select('tipe', 'pemasukan', $transaction->tipe == 'pemasukan') ?>>Pemasukan</option>
            <option value="pengeluaran" <?= set_select('tipe', 'pengeluaran', $transaction->tipe == 'pengeluaran') ?>>Pengeluaran</option>
        </select>
        <?= form_error('tipe', '<small class="text-danger">', '</small>') ?>
    </div>

    <div class="mb-3">
        <label>Jumlah</label>
        <input type="number" name="jumlah" class="form-control" value="<?= set_value('jumlah', $transaction->jumlah) ?>">
        <?= form_error('jumlah', '<small class="text-danger">', '</small>') ?>
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control"><?= set_value('deskripsi', $transaction->deskripsi) ?></textarea>
        <?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
    </div>

    <button type="submit" class="btn btn-primary" style="background-color: #2C3333;">Update</button>
    <a href="<?= base_url('transactions') ?>" class="btn btn-secondary">Kembali</a>

    <?= form_close(); ?>
</div>
