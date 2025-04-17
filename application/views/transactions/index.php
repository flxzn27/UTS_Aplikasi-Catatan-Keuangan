<body class="bg-light">
<div class="container mt-5">
    <h3 class="mb-4" style="color: #333333;">Daftar Transaksi</h3>

    <!-- Form Filter -->
    <form method="GET" action="<?= base_url('transactions') ?>" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <select name="bulan" class="form-control">
                    <option value="">Pilih Bulan</option>
                    <option value="01" <?= isset($_GET['bulan']) && $_GET['bulan'] == '01' ? 'selected' : '' ?>>Januari</option>
                    <option value="02" <?= isset($_GET['bulan']) && $_GET['bulan'] == '02' ? 'selected' : '' ?>>Februari</option>
                    <option value="03" <?= isset($_GET['bulan']) && $_GET['bulan'] == '03' ? 'selected' : '' ?>>Maret</option>
                    <option value="04" <?= isset($_GET['bulan']) && $_GET['bulan'] == '04' ? 'selected' : '' ?>>April</option>
                    <option value="05" <?= isset($_GET['bulan']) && $_GET['bulan'] == '05' ? 'selected' : '' ?>>Mei</option>
                    <option value="06" <?= isset($_GET['bulan']) && $_GET['bulan'] == '06' ? 'selected' : '' ?>>Juni</option>
                    <option value="07" <?= isset($_GET['bulan']) && $_GET['bulan'] == '07' ? 'selected' : '' ?>>Juli</option>
                    <option value="08" <?= isset($_GET['bulan']) && $_GET['bulan'] == '08' ? 'selected' : '' ?>>Agustus</option>
                    <option value="09" <?= isset($_GET['bulan']) && $_GET['bulan'] == '09' ? 'selected' : '' ?>>September</option>
                    <option value="10" <?= isset($_GET['bulan']) && $_GET['bulan'] == '10' ? 'selected' : '' ?>>Oktober</option>
                    <option value="11" <?= isset($_GET['bulan']) && $_GET['bulan'] == '11' ? 'selected' : '' ?>>November</option>
                    <option value="12" <?= isset($_GET['bulan']) && $_GET['bulan'] == '12' ? 'selected' : '' ?>>Desember</option>
                </select>
            </div>
            <!-- Button Filter -->
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-block" style="background-color: #2C3333;">Filter</button>
            </div>
        </div>
    </form>

    <a href="<?= base_url('transactions/add') ?>" class="btn btn-success mb-3" style="background-color: #2C3333;">+ Tambah Transaksi</a>

    <table class="table table-bordered table-striped" style="border-color: #B0BEC5;">
        <thead class="table-success" style="background-color: #F4F4F4;">
            <tr>
                <th>Tanggal</th>
                <th>Kategori</th>
                <th>Jenis</th>
                <th>Jumlah</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $bulan_filter = isset($_GET['bulan']) ? $_GET['bulan'] : '';
            $no = 1;

            foreach ($transactions as $t): 
                if ($bulan_filter && date('m', strtotime($t['tanggal'])) != $bulan_filter) {
                    continue;
                }
            ?>
                <tr>
                    <td><?= date('d-m-Y', strtotime($t['tanggal'])) ?></td>
                    <td><?= $t['kategori'] ?></td>
                    <td>
                        <span class="badge" style="background-color: <?= $t['tipe'] === 'pemasukan' ? '#618264' : '#F2EDD7' ?>; color: <?= $t['tipe'] === 'pengeluaran' ? 'black' : 'white' ?>">
                            <?= ucfirst($t['tipe']) ?>
                        </span>
                    </td>
                    <td>Rp <?= number_format($t['jumlah'], 0, ',', '.') ?></td>
                    <td><?= $t['deskripsi'] ?></td>
                    <td>
                        <a href="<?= base_url('transactions/edit/' . $t['id']) ?>" class="btn btn-sm" style="background-color: #388E3C; color: white;">Edit</a>
                        <a href="<?= base_url('transactions/delete/' . $t['id']) ?>" class="btn btn-sm" style="background-color: #E57373; color: white;"
                        onclick="return confirm('Yakin ingin menghapus transaksi ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
