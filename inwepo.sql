-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2020 pada 18.54
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inwepo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftar`
--

CREATE TABLE `tb_pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pendaftar`
--

INSERT INTO `tb_pendaftar` (`id_pendaftar`, `nama`, `email`, `password`, `status`) VALUES
(2, 'test', 'ruwucucak@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(3, 'testj', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_user` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npm` varchar(8) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `level` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_user`, `username`, `password`, `nama`, `npm`, `kelas`, `jurusan`, `level`, `status`) VALUES
(1, 'aditya.rizky', 'aditya', 'Aditya Rizky', '50413251', '3IA01', 'Psikologi', 1, 1),
(2, 'yunan.helmi.al.anbarry', 'yunan', 'Yunan Helmi Al Anbarry', '59413587', '3IA01', 'Teknik Informatika', 1, 1),
(3, 'admin', 'admin', 'Admin Inwepo', '12345678', '3IA01', 'Sastra Inggris', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
