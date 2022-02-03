-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Feb 2022 pada 02.49
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_staff_ups`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'estaffups', 'pancasakti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `id` int(11) NOT NULL,
  `gelar_awal` varchar(55) NOT NULL,
  `gelar_akhir` varchar(55) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `nipy` varchar(55) NOT NULL,
  `nidn` varchar(55) NOT NULL,
  `unitkerja` varchar(255) NOT NULL,
  `pekerjaan` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `jafung` varchar(55) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_daftar`
--

INSERT INTO `tb_daftar` (`id`, `gelar_awal`, `gelar_akhir`, `nama`, `nipy`, `nidn`, `unitkerja`, `pekerjaan`, `email`, `jafung`, `pendidikan`, `jabatan`, `nohp`, `deskripsi`, `foto`) VALUES
(36, '', 'S.Kom', 'Bambang Sugiarto', '29351461999', '', 'Fakultas Teknik dan Ilmu Komputer', 'Tenaga Kependidikan', 'bambangsugiarto2427@gmail.com', 'Tidak Ada', 'S1', 'Tidak Ada', '087837151915', 'Halo Guys !!!', 'img100.jpg'),
(37, '', '', 'Restu Saputra', '12345678', '', 'Fakultas Teknik dan Ilmu Komputer', 'Tenaga Non-Kependidikan', 'restu@gmail.com', 'Tidak Ada', 'SMP', 'Tidak Ada', '085866670250', 'Hallo Bro !!', 'LenovoWallPaper.jpg'),
(38, 'Dr', 'MT', 'Agus Wibowo', '101212121900', '3434345', 'Fakultas Teknik dan Ilmu Komputer', 'Tenaga Pendidik', 'aguswibowo@gmail.com', 'Doktor', 'S3', 'Dekan', '087812121212', 'Halo Bosku !!', 'img105.jpg'),
(39, 'Prof', 'MH', 'abcdef', '232323', '343434', 'Fakultas Teknik dan Ilmu Komputer', 'Tenaga Pendidik', 'imawan@gmail.com', 'Profesor', 'S3', 'Dekan', '087837152915', 'Halo Bandung', 'img100.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
