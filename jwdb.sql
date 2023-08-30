-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2023 pada 12.30
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_tiket`
--

CREATE TABLE `pesan_tiket` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_identitas` varchar(16) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `tempat_wisata` varchar(50) DEFAULT NULL,
  `tanggal_kunjungan` date DEFAULT NULL,
  `pengunjung_dewasa` int(5) DEFAULT NULL,
  `pengunjung_anak` int(5) DEFAULT NULL,
  `harga_tiket` decimal(10,2) DEFAULT NULL,
  `total_bayar` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan_tiket`
--

INSERT INTO `pesan_tiket` (`id`, `nama_lengkap`, `no_identitas`, `no_hp`, `tempat_wisata`, `tanggal_kunjungan`, `pengunjung_dewasa`, `pengunjung_anak`, `harga_tiket`, `total_bayar`) VALUES
(9, 'Nadia Syachrani', '0123456789123456', '012345678900', 'Keraton Kasepuhan', '2023-08-01', 2, 2, '10000.00', '30000.00'),
(10, 'Zaskia Ashari', '9876543210987654', '089876543210', 'Gua Sunyaragi', '2023-07-31', 2, 2, '20000.00', '60000.00'),
(11, 'Aida Amelina', '1122334455667788', '080123456789', 'Waterland Ade Irma Suryani', '2023-07-24', 1, 1, '30000.00', '45000.00'),
(12, 'BISMILLAH', '9999999999999999', '111111111111', 'Keraton Kasepuhan', '2023-07-23', 1, 2, '10000.00', '20000.00'),
(13, 'TEST', '1111111111111111', '111111111111', 'Keraton Kasepuhan', '2023-07-30', 3, 3, '10000.00', '45000.00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesan_tiket`
--
ALTER TABLE `pesan_tiket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesan_tiket`
--
ALTER TABLE `pesan_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
