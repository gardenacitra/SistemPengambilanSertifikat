-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2022 pada 06.27
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistemlab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `nim` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `periode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_peserta`
--

INSERT INTO `tb_peserta` (`nim`, `nama`, `jurusan`, `no_telepon`, `email`, `periode`) VALUES
(52419567, 'Gardena', 'Informatika', '082122302092', 'gardenacitra32@gmail.com', '56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta_cisco`
--

CREATE TABLE `tb_peserta_cisco` (
  `nim` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `periode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_peserta_cisco`
--

INSERT INTO `tb_peserta_cisco` (`nim`, `nama`, `jurusan`, `no_telepon`, `email`, `periode`) VALUES
(12345678, 'Yeremia', 'SIB', '0812345678', 'yeremia@gmail.com', '57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sertifikat_cisco`
--

CREATE TABLE `tb_sertifikat_cisco` (
  `nim` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ketersediaan` enum('Tersedia','Belum Tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sertifikat_cisco`
--

INSERT INTO `tb_sertifikat_cisco` (`nim`, `nama`, `ketersediaan`) VALUES
(52418456, 'Yoga', 'Belum Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sertifikat_sap`
--

CREATE TABLE `tb_sertifikat_sap` (
  `nim` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ketersediaan` enum('Tersedia','Belum Tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sertifikat_sap`
--

INSERT INTO `tb_sertifikat_sap` (`nim`, `nama`, `ketersediaan`) VALUES
(52419567, 'Gardena', 'Belum Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin 1', 'admin1', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tb_peserta_cisco`
--
ALTER TABLE `tb_peserta_cisco`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tb_sertifikat_cisco`
--
ALTER TABLE `tb_sertifikat_cisco`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tb_sertifikat_sap`
--
ALTER TABLE `tb_sertifikat_sap`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
