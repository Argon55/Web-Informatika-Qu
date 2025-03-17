-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2024 pada 17.55
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilihan_pts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `namalengkap`, `username`, `password`, `email`, `sekolah`, `alamat`, `status`) VALUES
(1, 'Argon Widodo', 'argon55', '$2y$10$r6x21voeQbXh6REJj39Ox.Gv0tFQlRXCI3HTOLM6BZyFE2Zb5NQwO', '', '', '', 0),
(2, 'Sutino Pebriansah', 'pebri123', '$2y$10$n6swZe51qVHGGwsECKmB.eOp3IZU.5iOzx8z8JFswCmZbY086CTG.', '', '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `universitas`
--

CREATE TABLE `universitas` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `akreditasi` varchar(50) NOT NULL,
  `beasiswa` varchar(50) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  `fasilitas` varchar(50) NOT NULL,
  `c1` int(1) NOT NULL,
  `c2` int(1) NOT NULL,
  `c3` int(1) NOT NULL,
  `c4` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `universitas`
--

INSERT INTO `universitas` (`id`, `nama`, `akreditasi`, `beasiswa`, `biaya`, `fasilitas`, `c1`, `c2`, `c3`, `c4`) VALUES
(1, 'Universitas Ahmad Dahlan', 'Unggul/A', '14', '13500000', 'Lengkap', 5, 4, 2, 3),
(2, 'Universitas Atma Ata Yogyakarta', 'Baik Sekali/B', '9', '8500000', 'Lengkap', 3, 3, 4, 3),
(3, 'Universitas Amikom Yogyakarta', 'Baik Sekali/B', '4', '13500000', 'Sangat Lengkap', 3, 1, 2, 5),
(4, 'Universitas Atma Jaya Yogyakarta', 'Unggul/A', '11', '20012500', 'Lengkap', 5, 3, 1, 3),
(5, 'Universitas Islam Indonesia', 'Unggul/A', '7', '19500000', 'Lengkap', 5, 2, 1, 3),
(6, 'Universitas Janabadra', 'Baik Sekali/B', '5', '7750000', 'Lengkap', 3, 1, 4, 3),
(7, 'Universitas Jenderal Achmad Yani Yogyakarta', 'Baik/C', '6', '10515000', 'Lengkap', 1, 2, 3, 3),
(8, 'Universitas Kristen Duta Wacana', 'Baik Sekali/B', '13', '9900000', 'Lengkap', 3, 4, 4, 3),
(9, 'Universitas Mercu Buana Yogyakarta', 'Baik Sekali/B', '5', '5745000', 'Sangat Lengkap', 3, 1, 5, 5),
(10, 'Universitas Muhammadiyah Yogyakarta', 'Unggul/A', '11', '14860000', 'Sangat Lengkap', 5, 3, 2, 5),
(11, 'Universitas PGRI Yogyakarta', 'Baik Sekali/B', '9', '7100000', 'Lengkap', 3, 3, 4, 3),
(12, 'Universitas Respati Yogyakarta', 'Baik Sekali/B', '4', '6750000', 'Lengkap', 3, 1, 5, 3),
(13, 'Universitas Sanata Dharma', 'Baik Sekali/B', '25', '27885000', 'Lengkap', 3, 5, 1, 3),
(14, 'Universitas Sarjanawiyata Tamansiswa', 'Baik/C', '5', '6150000', 'Cukup/Standart', 1, 1, 5, 1),
(15, 'Universitas Teknologi Yogyakarta', 'Unggul/A', '4', '11550000', 'Lengkap', 5, 1, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
