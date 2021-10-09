-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Okt 2021 pada 09.44
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinerja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `name`, `nip`, `password`) VALUES
(1, 'Admin Ombudsman', '137', '40a68abe0e6fdde9731556ec538fce65');

-- --------------------------------------------------------

--
-- Struktur dari tabel `izin`
--

CREATE TABLE `izin` (
  `id` int(12) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `nip` varchar(35) NOT NULL,
  `penjelasan` text NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_kinerja`
--

CREATE TABLE `laporan_kinerja` (
  `id` int(12) NOT NULL,
  `content` text NOT NULL,
  `tanggal` varchar(17) NOT NULL,
  `keterangan` varchar(28) NOT NULL,
  `nip` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id` int(12) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `nip` varchar(35) NOT NULL,
  `waktu` int(11) NOT NULL,
  `keterangan` varchar(12) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id`, `nama`, `nip`, `waktu`, `keterangan`, `file`) VALUES
(1, 'Muhammad burhan', '199203092017023001', 1633678207, 'Telat', 'WIN_20210805_07_54_42_Pro.jpg'),
(2, 'Muhammad burhan', '199203092017023001', 1633678246, 'Telat', 'WhatsApp_Image_2021-10-01_at_09_55_30.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `nip` varchar(35) NOT NULL,
  `name` varchar(45) NOT NULL,
  `bidang` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`nip`, `name`, `bidang`, `foto`, `password`) VALUES
('1907051008', 'Berli Mega Antika', 'Bidan Pencegahan', 'WhatsApp_Image_2021-10-01_at_09_55_30.jpeg', 'cd34f589fb25dd5d09de72df0dd83949'),
('1907051020', 'Muhammad Arif', 'Bidang Verifikasi Laporan', 'IMG-20190128-WA00161.jpg', '202cb962ac59075b964b07152d234b70'),
('1907051039', 'Maria Olivia Lestiyaningrum', 'Bidang Verifikasi Laporan', 'via1.jpeg', 'e5aef89fdd6afdd63e0114c852b0f74c'),
('199203092017023001', 'Muhammad burhan', 'Pencegahan', 'default.png', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_kinerja`
--
ALTER TABLE `laporan_kinerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `izin`
--
ALTER TABLE `izin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporan_kinerja`
--
ALTER TABLE `laporan_kinerja`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `laporan_kinerja`
--
ALTER TABLE `laporan_kinerja`
  ADD CONSTRAINT `laporan_kinerja_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `users` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
