
<div class="container mt-5">

    <h2 class="mb-4">Selamat datang, 👋</h2>

    <div class="row text-white">
        <div class="col-md-4 mb-3">
            <div class="card" style="background-color: #618264;">
                <div class="card-body">
                    <h5 class="card-title">Total Pemasukan</h5>
                    <p class="card-text fs-4">Rp <?= number_format($total_pemasukan, 0, ',', '.'); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="background-color: #F2EDD7;">
                <div class="card-body">
                    <h5 class="card-title">Total Pengeluaran</h5>
                    <p class="card-text fs-4">Rp <?= number_format($total_pengeluaran, 0, ',', '.'); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card" style="background-color: #2C3333;">
                <div class="card-body">
                    <h5 class="card-title text-white">Saldo Saat Ini</h5>
                    <p class="card-text fs-4 text-white">Rp <?= number_format($total_saldo, 0, ',', '.'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Grafik Tren Bulanan</h5>
            <canvas id="transaksiChart" height="100"></canvas>
        </div>
    </div>

    
]


</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
    usort($transaksi_bulanan, function($a, $b) {
        return $a->bulan - $b->bulan;
    });
?>

<script>

    const ctx = document.getElementById('transaksiChart').getContext('2d');
    const transaksiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php foreach ($transaksi_bulanan as $bulan): ?>
                    "<?= date('F', mktime(0, 0, 0, $bulan->bulan, 10)) ?>",
                <?php endforeach; ?>
            ],
            datasets: [
                {
                    label: 'Pemasukan',
                    data: [
                        <?php foreach ($transaksi_bulanan as $bulan): ?>
                            <?= $bulan->total_pemasukan ?>,
                        <?php endforeach; ?>
                    ],
                    backgroundColor: 'rgba(97, 130, 100, 0.7)'
                },
                {
                    label: 'Pengeluaran',
                    data: [
                        <?php foreach ($transaksi_bulanan as $bulan): ?>
                            <?= $bulan->total_pengeluaran ?>,
                        <?php endforeach; ?>
                    ],
                    backgroundColor: 'rgba(242, 237, 215, 0.7)'
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return 'Rp ' + value.toLocaleString('id-ID');
                        }
                    }
                }
            }
        }
    });
</script>