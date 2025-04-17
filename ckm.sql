-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2025 at 01:09 PM
-- Server version: 8.4.3
-- PHP Version: 8.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ckm`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tipe` enum('pemasukan','pengeluaran') NOT NULL,
  `jumlah` decimal(12,2) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `tanggal`, `kategori`, `tipe`, `jumlah`, `deskripsi`) VALUES
(1, '2025-04-01', 'Beasiswa', 'pemasukan', 1500000.00, 'Pencairan beasiswa semester genap'),
(2, '2025-04-03', 'Makan', 'pengeluaran', 25000.00, 'Makan siang di kantin'),
(3, '2025-04-04', 'Transportasi', 'pengeluaran', 10000.00, 'Naik angkot ke kampus'),
(4, '2025-04-05', 'Freelance', 'pemasukan', 500000.00, 'Bayaran proyek desain logo'),
(5, '2025-04-06', 'Hiburan', 'pengeluaran', 75000.00, 'Nonton bioskop bersama teman'),
(6, '2025-04-07', 'Belanja', 'pengeluaran', 120000.00, 'Beli buku dan alat tulis'),
(7, '2025-04-08', 'Orang Tua', 'pemasukan', 1000000.00, 'Uang kiriman dari orang tua'),
(8, '2025-04-09', 'Internet', 'pengeluaran', 50000.00, 'Bayar paket data bulanan'),
(9, '2025-04-10', 'Donasi', 'pengeluaran', 20000.00, 'Donasi ke acara sosial'),
(10, '2025-04-11', 'Penjualan Barang', 'pemasukan', 300000.00, 'Jual buku bekas online'),
(11, '2025-01-05', 'Orang Tua', 'pemasukan', 1000000.00, 'Uang saku awal bulan dari orang tua'),
(12, '2025-01-07', 'Makan', 'pengeluaran', 20000.00, 'Sarapan pagi'),
(13, '2025-01-15', 'Internet', 'pengeluaran', 50000.00, 'Bayar Wi-Fi kosan'),
(14, '2025-02-03', 'Freelance', 'pemasukan', 800000.00, 'Bayaran desain UI/UX'),
(15, '2025-02-06', 'Transportasi', 'pengeluaran', 15000.00, 'Ojek online ke kampus'),
(16, '2025-02-20', 'Belanja', 'pengeluaran', 90000.00, 'Beli jaket baru'),
(17, '2025-03-01', 'Beasiswa', 'pemasukan', 1500000.00, 'Beasiswa prestasi akademik'),
(18, '2025-03-04', 'Makan', 'pengeluaran', 25000.00, 'Makan siang luar kampus'),
(19, '2025-03-10', 'Hiburan', 'pengeluaran', 60000.00, 'Nonton konser mini di kampus'),
(20, '2025-03-21', 'Penjualan Barang', 'pemasukan', 400000.00, 'Jual sepatu bekas'),
(21, '2025-04-02', 'Orang Tua', 'pemasukan', 1000000.00, 'Uang bulanan'),
(22, '2025-04-05', 'Transportasi', 'pengeluaran', 20000.00, 'Naik bis ke kota'),
(23, '2025-04-12', 'Donasi', 'pengeluaran', 30000.00, 'Donasi kegiatan sosial'),
(24, '2025-04-15', 'Freelance', 'pemasukan', 600000.00, 'Bayaran edit video'),
(25, '2025-04-18', 'Makan', 'pengeluaran', 18000.00, 'Beli roti dan kopi'),
(26, '2025-01-05', 'Orang Tua', 'pemasukan', 1000000.00, 'Uang saku awal bulan dari orang tua'),
(27, '2025-01-08', 'Makanan', 'pengeluaran', 25000.00, 'Sarapan di kantin'),
(28, '2025-01-10', 'Transportasi', 'pengeluaran', 15000.00, 'Naik angkot ke kampus'),
(29, '2025-01-15', 'Freelance', 'pemasukan', 300000.00, 'Bayaran desain logo'),
(30, '2025-01-18', 'Hiburan', 'pengeluaran', 50000.00, 'Nonton bioskop'),
(31, '2025-01-25', 'Kesehatan', 'pengeluaran', 75000.00, 'Beli obat flu'),
(32, '2025-02-01', 'Orang Tua', 'pemasukan', 1000000.00, 'Uang saku awal bulan dari orang tua'),
(33, '2025-02-03', 'Makanan', 'pengeluaran', 30000.00, 'Makan siang di luar'),
(34, '2025-02-07', 'Transportasi', 'pengeluaran', 20000.00, 'Isi saldo e-wallet'),
(35, '2025-02-12', 'Hadiah', 'pengeluaran', 100000.00, 'Beli kado untuk teman'),
(36, '2025-02-14', 'Freelance', 'pemasukan', 400000.00, 'Bayaran artikel blog'),
(37, '2025-02-20', 'Internet', 'pengeluaran', 120000.00, 'Bayar Wi-Fi bulanan'),
(38, '2025-03-01', 'Orang Tua', 'pemasukan', 1000000.00, 'Uang saku awal bulan dari orang tua'),
(39, '2025-03-05', 'Makanan', 'pengeluaran', 28000.00, 'Ngopi di kafe'),
(40, '2025-03-08', 'Transportasi', 'pengeluaran', 18000.00, 'Naik ojek online'),
(41, '2025-03-11', 'Freelance', 'pemasukan', 500000.00, 'Bayaran proyek web'),
(42, '2025-03-15', 'Belanja', 'pengeluaran', 150000.00, 'Beli baju dan perlengkapan mandi'),
(43, '2025-03-22', 'Hiburan', 'pengeluaran', 60000.00, 'Langganan Spotify dan Netflix');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
