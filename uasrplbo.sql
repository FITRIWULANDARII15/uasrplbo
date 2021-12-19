-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2021 pada 06.17
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasrplbo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`, `date_created`) VALUES
(3, 'Fitri Wulandari', 'fitri@gmail.com', '$2y$10$LkhHinjdL9WQOsij2RL5mu4QyjpIrYGy4k1PouZCvNv3MiSzh6X5u', 1638437889);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_vaksin1`
--

CREATE TABLE `pendaftaran_vaksin1` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tgl` varchar(128) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `nowhatsapp` varchar(13) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `jadwal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran_vaksin1`
--

INSERT INTO `pendaftaran_vaksin1` (`id`, `nama`, `tgl`, `nohp`, `nowhatsapp`, `noktp`, `alamat`, `pekerjaan`, `jadwal`) VALUES
(6, 'Fitri Wulandari', '01/15/2001', '085278203811', '085278203811', '1407031208000007', 'Jl. Tuanku Tambusai, Sintong Pusaka', 'Mahasiswi', 1639301512),
(14, 'Nabila', '10/24/2000', '081234567890', '081234567890', '1407031006000007', 'Jl. Imam Bonjol', 'Mahasiswi', 1639301574),
(15, 'Zuko', '03/04/1999', '081234567890', '081234567890', '1423330909980007', 'Jl. Rajawali', 'Mahasiswa', 1639302209),
(16, 'Abdul', '05/09/2001', '081234567890', '081234567890', '1234567890123456', 'Jl. Putri Hijau', 'Mahasiswa', 1639369570);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_vaksin2`
--

CREATE TABLE `pendaftaran_vaksin2` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tgl` varchar(128) NOT NULL,
  `nohp` varchar(128) NOT NULL,
  `noktp` varchar(128) NOT NULL,
  `nowhatsapp` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `jenisvaksin` varchar(128) NOT NULL,
  `jadwal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran_vaksin2`
--

INSERT INTO `pendaftaran_vaksin2` (`id`, `nama`, `tgl`, `nohp`, `noktp`, `nowhatsapp`, `alamat`, `pekerjaan`, `jenisvaksin`, `jadwal`) VALUES
(1, 'Budi', '09/02/1998', '081234567890', '1234567890123456', '081234567890', 'Jl. Diponegoro', 'Mahasiswa', 'Sinovac', 1639301931);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran_vaksin1`
--
ALTER TABLE `pendaftaran_vaksin1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran_vaksin2`
--
ALTER TABLE `pendaftaran_vaksin2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_vaksin1`
--
ALTER TABLE `pendaftaran_vaksin1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_vaksin2`
--
ALTER TABLE `pendaftaran_vaksin2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
