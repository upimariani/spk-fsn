-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2022 pada 11.27
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

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `gambar`) VALUES
('NPEfJ', 'Nitori', 'Enjoy the richness of a real Japanese House.', '10000000', 'Décoration_chevron___apportez_de_la_géométrie_-_Clem_ATC.png'),
('Qg24e', 'Chair', 'wood, textures and dark colours', '2000000', 'The_best_of_Habitare_–_wood,_textures_and_dark_colours___Design_Stories.jpg'),
('r9Jlj', 'Woddy', 'Woody Desk By Paqué Dudley Mawalla', '3000000', 'Woody_Desk_By_Paqué_Dudley_Mawalla.jpg'),
('WZgv2', 'Sofas Broken White', 'Sofas by Endriks', '10000000', 'Sofas.jpg');

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

--
-- Dumping data untuk tabel `produk_keluar`
--

INSERT INTO `produk_keluar` (`id_prod_keluar`, `id_prod_masuk`, `tgl_keluar`, `qty_keluar`) VALUES
(1, 1, '2022-05-28', 15),
(2, 1, '2022-05-29', 5),
(3, 5, '2022-05-31', 25),
(4, 5, '2022-05-25', 12),
(5, 5, '2022-06-02', 5);

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

--
-- Dumping data untuk tabel `produk_masuk`
--

INSERT INTO `produk_masuk` (`id_prod_masuk`, `id_user`, `id_produk`, `tgl_masuk`, `qty_masuk`) VALUES
(1, 1, 'NPEfJ', '2022-05-25', 0),
(2, 1, 'NPEfJ', '2022-05-28', 30),
(3, 1, 'NPEfJ', '2022-05-28', 50),
(4, 1, 'Qg24e', '2022-05-19', 30),
(5, 1, 'r9Jlj', '2022-05-19', 8),
(6, 1, 'r9Jlj', '2022-05-21', 80),
(7, 1, 'WZgv2', '2022-05-27', 58);

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

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_hp`, `username`, `password`, `level_user`) VALUES
(1, 'Rafi', 'Kuningan, Jawa Barat', '085156727368', 'admin', 'admin', 1),
(2, 'Pemilik', 'Ciawigebang, Kuningan', '085156727388', 'pemilik', 'pemilik', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `variabel_item`
--

CREATE TABLE `variabel_item` (
  `id_variabel` int(11) NOT NULL,
  `id_produk` varchar(10) NOT NULL,
  `periode` varchar(15) NOT NULL,
  `pers_awal` varchar(10) NOT NULL DEFAULT '0',
  `penerimaan` varchar(10) NOT NULL DEFAULT '0',
  `pengeluaran` varchar(10) NOT NULL DEFAULT '0',
  `pers_akhir` varchar(10) NOT NULL DEFAULT '0',
  `status` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `variabel_item`
--

INSERT INTO `variabel_item` (`id_variabel`, `id_produk`, `periode`, `pers_awal`, `penerimaan`, `pengeluaran`, `pers_akhir`, `status`) VALUES
(1, 'NPEfJ', '2021-12-01', '259', '68', '78', '249', 'fast'),
(2, 'NPEfJ', '2022-01-01', '249', '59', '63', '245', 'fast'),
(3, 'NPEfJ', '2022-02-01', '245', '110', '45', '310', 'slow'),
(4, 'NPEfJ', '2022-03-01', '310', '114', '78', '346', 'slow'),
(5, 'NPEfJ', '2022-04-01', '346', '98', '59', '385', 'slow'),
(6, 'WZgv2', '2021-12-01', '385', '78', '87', '376', 'slow'),
(7, 'WZgv2', '2022-01-01', '376', '89', '86', '379', 'slow'),
(8, 'WZgv2', '2022-02-01', '379', '100', '50', '429', 'slow'),
(9, 'WZgv2', '2022-03-01', '429', '104', '110', '423', 'fast'),
(10, 'WZgv2', '2022-04-01', '423', '79', '150', '352', 'fast');

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
  MODIFY `id_prod_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk_masuk`
--
ALTER TABLE `produk_masuk`
  MODIFY `id_prod_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `variabel_item`
--
ALTER TABLE `variabel_item`
  MODIFY `id_variabel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
