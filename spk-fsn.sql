-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2022 pada 04.07
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-fsn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(125) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(15) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_keluar`
--

CREATE TABLE `produk_keluar` (
  `id_prod_keluar` int(11) NOT NULL,
  `id_prod_masuk` int(11) NOT NULL,
  `tgl_keluar` varchar(10) NOT NULL,
  `qty_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_masuk`
--

CREATE TABLE `produk_masuk` (
  `id_prod_masuk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` varchar(10) NOT NULL,
  `tgl_masuk` varchar(10) NOT NULL,
  `qty_masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `variabel_item`
--

CREATE TABLE `variabel_item` (
  `id_variabel` int(11) NOT NULL,
  `id_produk` varchar(10) NOT NULL,
  `periode` varchar(15) NOT NULL,
  `pers_awal` varchar(10) NOT NULL,
  `penerimaan` varchar(10) NOT NULL,
  `pengeluaran` varchar(10) NOT NULL,
  `pers_akhir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `produk_keluar`
--
ALTER TABLE `produk_keluar`
  ADD PRIMARY KEY (`id_prod_keluar`);

--
-- Indeks untuk tabel `produk_masuk`
--
ALTER TABLE `produk_masuk`
  ADD PRIMARY KEY (`id_prod_masuk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `variabel_item`
--
ALTER TABLE `variabel_item`
  ADD PRIMARY KEY (`id_variabel`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk_keluar`
--
ALTER TABLE `produk_keluar`
  MODIFY `id_prod_keluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk_masuk`
--
ALTER TABLE `produk_masuk`
  MODIFY `id_prod_masuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `variabel_item`
--
ALTER TABLE `variabel_item`
  MODIFY `id_variabel` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
