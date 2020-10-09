-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2020 pada 13.11
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menufix`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'makanan'),
(2, 'minuman'),
(3, 'snack'),
(4, 'dessert');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meja`
--

CREATE TABLE `meja` (
  `id_meja` int(11) NOT NULL,
  `no_meja` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `meja`
--

INSERT INTO `meja` (`id_meja`, `no_meja`, `password`) VALUES
(1, '08', '0808'),
(2, '01', '0101'),
(3, '05', '0505'),
(4, '02', '0202'),
(5, '03', '0303'),
(7, '10', '1010'),
(8, '04', '0404'),
(9, '06', '0606'),
(10, '07', '0707'),
(11, '11', '1111'),
(12, '12', '1212'),
(13, '09', '0909');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(3) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `foto_menu` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `deskripsi_menu` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga_menu`, `foto_menu`, `id_kategori`, `deskripsi_menu`) VALUES
(1, 'Fetucine Green', 28000, 'fetucinegreen.JPG', 1, 'Fetuccine Green with tomato'),
(35, 'Greentea', 25000, 'greentea.JPG', 2, '			\r\n					\r\nHot Greentea'),
(39, 'Juice Alpukat', 20000, 'jusalpukat.JPG', 2, 'Jus Alpukat Susu'),
(41, 'Nasi Goreng', 30000, 'nasgor.JPG', 1, 'Ini adalah nasi goreng'),
(42, 'Chicken Steak', 30000, 'chickensteak3.JPG', 1, 'Ini adalah chicken steak'),
(43, 'Kwetiaw Goreng', 25000, 'kwetiawgoreng.JPG', 1, 'Ini adalah kweiaw goreng'),
(44, 'Pisang Cokelat', 20000, 'pisangcoklat.JPG', 3, 'Ini adalah pisang Cokelat'),
(46, 'Ice cream', 25000, 'icecream2.JPG', 4, 'Ini adalah dessert'),
(47, 'Pop corn caramel', 25000, 'popcornkaramel.JPG', 4, 'Ini adalah pop corn caramel'),
(48, 'Neapolitan', 20000, 'neapolitan.JPG', 4, 'Ini adalah neapolitan'),
(50, 'Sosis Bakar Mayo', 18000, 'sosis bakar.jpg', 3, 'Sosis Bakar Mayonaise'),
(52, 'Ice cream', 15000, 'icecream2.JPG', 4, 'Ice Cream 3 scoop'),
(53, 'Nasi Ebi', 35000, 'nasiebi.JPG', 1, 'Nasi Ebi with saus teriyaki'),
(54, 'Pancake', 25000, 'pancake.JPG', 0, 'panccake cokelat'),
(55, 'Thai Tea', 15000, 'thaitea.JPG', 2, 'Thai Tea'),
(56, 'Mie Goreng', 20000, 'migoreng.JPG', 1, 'Mie Goreng kecap manis'),
(57, 'Burger', 15000, 'burger.JPG', 1, 'Beef Burger'),
(58, 'Chocolate Orange', 15000, 'chocolateorangemasiatos.JPG', 2, 'Chocolate With Orange'),
(59, 'Red Velvet', 19000, 'redvelvet.JPG', 2, 'Red Velvet'),
(60, 'Steak Potato', 24000, 'steakPotato.JPG', 1, 'Steak With Potato'),
(61, 'Pancake Coklat', 20000, 'pancake cokelat.JPG', 4, 'Pancake Cokelat'),
(62, 'Roti Bakar', 15000, 'rotbak.JPG', 3, 'Roti Bakar Cokelat'),
(63, 'Roti Bakar Cokelat Keju', 17000, 'roti bakar cokju.jpg', 3, 'Roti Bakar Cokelat Keju '),
(64, 'Pisang Goreng', 8000, 'pisang goreng.jpg', 3, ' Pisang Goreng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(3) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `id_meja` int(3) NOT NULL,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `total_belanja` int(11) NOT NULL,
  `status_pembayaran` varchar(25) NOT NULL DEFAULT 'Belum Bayar'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pemesanan`, `id_meja`, `tanggal`, `total_belanja`, `status_pembayaran`) VALUES
(48, 1921415, 1, '2020-02-09 02:15:30', 110000, 'Lunas'),
(49, 9921448, 9, '2020-02-09 02:48:06', 90000, 'Lunas'),
(50, 2921520, 2, '2020-02-09 03:20:45', 140000, 'Lunas'),
(51, 5921541, 5, '2020-02-09 03:41:53', 45000, 'Lunas'),
(53, 7922114, 7, '2020-02-09 09:14:09', 58000, 'Lunas'),
(54, 2922118, 2, '2020-02-09 09:18:12', 106000, 'Lunas'),
(56, 8102608, 8, '2020-02-10 06:08:40', 70000, 'Lunas'),
(57, 8102608, 8, '2020-02-10 06:08:59', 100000, 'Lunas'),
(58, 5102652, 5, '2020-02-10 06:52:13', 70000, 'pending'),
(59, 21021101, 2, '2020-02-10 11:01:55', 68000, 'pending'),
(60, 41021601, 4, '2020-02-10 04:01:37', 30000, 'pending'),
(61, 71021732, 7, '2020-02-10 05:32:29', 70000, 'pending'),
(62, 91021737, 9, '2020-02-10 05:37:10', 340000, 'pending'),
(63, 111021749, 11, '2020-02-10 05:49:25', 175000, 'pending'),
(64, 121021753, 12, '2020-02-10 05:53:51', 398000, 'Lunas'),
(65, 81121822, 8, '2020-02-11 06:22:48', 55000, 'pending'),
(66, 71121847, 7, '2020-02-11 06:47:20', 15000, 'pending'),
(67, 51121938, 5, '2020-02-11 07:38:04', 74000, 'pending'),
(68, 11122914, 11, '2020-02-12 09:14:40', 87000, 'pending'),
(69, 91221340, 9, '2020-02-12 01:40:53', 28000, 'pending'),
(70, 91221526, 9, '2020-02-12 03:26:32', 105000, 'pending'),
(71, 11221533, 1, '2020-02-12 03:33:33', 78000, 'Lunas'),
(72, 51221536, 5, '2020-02-12 03:36:15', 60000, 'Lunas'),
(73, 31221552, 3, '2020-02-12 03:52:35', 125000, 'Lunas'),
(74, 5132322, 5, '2020-02-13 03:22:07', 117000, 'pending'),
(75, 2132325, 2, '2020-02-13 03:25:41', 139000, 'pending'),
(76, 41321408, 4, '2020-02-13 02:08:21', 90000, 'pending'),
(77, 91321847, 9, '2020-02-13 06:47:34', 111000, 'pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(3) NOT NULL,
  `id_meja` int(3) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_belanja` int(11) NOT NULL,
  `status_pembelian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_meja`, `id_pemesanan`, `tanggal`, `total_belanja`, `status_pembelian`) VALUES
(1, 9, 91221340, '2020-02-12 01:40:53', 28000, 'pending'),
(2, 9, 91221526, '2020-02-12 03:26:32', 105000, 'Lunas'),
(3, 1, 11221533, '2020-02-12 03:33:33', 78000, 'Lunas'),
(4, 5, 51221536, '2020-02-12 03:36:15', 60000, 'Lunas'),
(5, 3, 31221552, '2020-02-12 03:52:35', 125000, 'Lunas'),
(6, 2, 21221617, '2020-02-12 04:17:34', 280000, 'pending'),
(7, 3, 31222137, '2020-02-12 09:37:00', 45000, 'pending'),
(8, 5, 5132322, '2020-02-13 03:22:07', 117000, 'pending'),
(9, 2, 2132325, '2020-02-13 03:25:41', 139000, 'pending'),
(10, 4, 41321408, '2020-02-13 02:08:21', 90000, 'pending'),
(11, 9, 91321847, '2020-02-13 06:47:34', 111000, 'pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_meja` int(3) NOT NULL,
  `no_order` varchar(30) NOT NULL,
  `tanggal_pemesanan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_pemesanan` enum('Disiapkan','Selesai','','') NOT NULL DEFAULT 'Disiapkan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_meja`, `no_order`, `tanggal_pemesanan`, `status_pemesanan`) VALUES
(5, 4, '6', '2020-02-06 07:23:11', 'Disiapkan'),
(825121944, 8, '', '2019-12-24 17:00:00', 'Selesai'),
(827121509, 8, '', '2019-12-26 17:00:00', 'Selesai'),
(1123121308, 11, '', '2019-12-22 17:00:00', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_menu`
--

CREATE TABLE `pemesanan_menu` (
  `Id_pemesanan_menu` int(3) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `id_menu` int(3) NOT NULL,
  `tanggal_pemesanan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama_menu` varchar(25) NOT NULL,
  `harga` int(5) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `subharga` int(6) NOT NULL,
  `status` varchar(30) NOT NULL,
  `no_meja` int(3) NOT NULL,
  `total_pemesanan` int(3) NOT NULL,
  `status_pemesanan` enum('Disiapkan','Selesai','','') DEFAULT 'Disiapkan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan_menu`
--

INSERT INTO `pemesanan_menu` (`Id_pemesanan_menu`, `id_pemesanan`, `id_menu`, `tanggal_pemesanan`, `nama_menu`, `harga`, `jumlah`, `subharga`, `status`, `no_meja`, `total_pemesanan`, `status_pemesanan`) VALUES
(57, 623121256, 40, '2019-12-23 00:00:00', 'Milkshake', 30000, 1, 30000, '', 6, 30000, 'Selesai'),
(58, 623121256, 40, '2019-12-23 00:00:00', 'Milkshake', 30000, 1, 30000, '', 6, 30000, 'Selesai'),
(59, 623121256, 42, '2019-12-23 00:00:00', 'Chicken Steak', 30000, 1, 30000, '', 6, 60000, 'Selesai'),
(60, 623121257, 40, '2019-12-23 00:00:00', 'Milkshake', 30000, 2, 60000, '', 6, 60000, 'Selesai'),
(61, 623121257, 42, '2019-12-23 00:00:00', 'Chicken Steak', 30000, 1, 30000, '', 6, 90000, 'Selesai'),
(62, 1123121258, 39, '2019-12-23 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 11, 20000, 'Selesai'),
(63, 1123121258, 41, '2019-12-23 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 11, 50000, 'Selesai'),
(64, 1123121258, 44, '2019-12-23 00:00:00', 'Pisang Cokelat', 20000, 1, 20000, '', 11, 70000, 'Selesai'),
(65, 1123121259, 39, '2019-12-23 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 11, 20000, 'Selesai'),
(67, 1123121259, 44, '2019-12-23 00:00:00', 'Pisang Cokelat', 20000, 1, 20000, '', 11, 70000, 'Selesai'),
(68, 1123121259, 42, '2019-12-23 00:00:00', 'Chicken Steak', 30000, 1, 30000, '', 11, 100000, 'Selesai'),
(69, 1123121308, 39, '2019-12-23 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 11, 20000, 'Selesai'),
(70, 1123121308, 41, '2019-12-23 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 11, 50000, 'Selesai'),
(71, 1123121308, 44, '2019-12-23 00:00:00', 'Pisang Cokelat', 20000, 2, 40000, '', 11, 90000, 'Selesai'),
(72, 1123121308, 42, '2019-12-23 00:00:00', 'Chicken Steak', 30000, 1, 30000, '', 11, 120000, 'Selesai'),
(73, 223121311, 40, '2019-12-23 00:00:00', 'Milkshake', 30000, 1, 30000, '', 2, 30000, 'Selesai'),
(74, 223121311, 36, '2019-12-23 00:00:00', 'fettucine', 35000, 1, 35000, '', 2, 65000, 'Selesai'),
(75, 124121348, 40, '2019-12-24 00:00:00', 'Milkshake', 30000, 1, 30000, '', 1, 30000, 'Selesai'),
(76, 124121348, 36, '2019-12-24 00:00:00', 'fettucine', 35000, 1, 35000, '', 1, 35000, 'Selesai'),
(77, 825121944, 39, '2019-12-25 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 8, 20000, 'Selesai'),
(78, 827121509, 41, '2019-12-27 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Selesai'),
(79, 827121509, 35, '2019-12-27 00:00:00', 'Greentea', 25000, 1, 25000, '', 8, 55000, 'Selesai'),
(80, 83112851, 46, '2019-12-31 00:00:00', 'Ice cream', 25000, 1, 25000, '', 8, 25000, 'Selesai'),
(81, 83112851, 41, '2019-12-31 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 55000, 'Selesai'),
(82, 83112925, 41, '2019-12-31 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Selesai'),
(83, 8111248, 40, '2020-01-01 00:00:00', 'Milkshake', 30000, 1, 30000, '', 8, 30000, 'Selesai'),
(84, 8212009, 41, '2020-01-02 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Selesai'),
(86, 8212027, 48, '2020-01-02 00:00:00', 'Neapolitan', 20000, 1, 20000, '', 8, 50000, 'Selesai'),
(90, 8212034, 41, '2020-01-02 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Selesai'),
(91, 8212034, 48, '2020-01-02 00:00:00', 'Neapolitan', 20000, 1, 20000, '', 8, 50000, 'Selesai'),
(92, 8212034, 52, '2020-01-02 00:00:00', 'Ice cream', 15000, 1, 15000, '', 8, 65000, 'Selesai'),
(93, 8212034, 43, '2020-01-02 00:00:00', 'Kwetiaw Goreng', 25000, 1, 25000, '', 8, 90000, 'Selesai'),
(94, 8212051, 40, '2020-01-02 00:00:00', 'Milkshake', 30000, 1, 30000, '', 8, 30000, 'Selesai'),
(95, 8212051, 48, '2020-01-02 00:00:00', 'Neapolitan', 20000, 1, 20000, '', 8, 50000, 'Selesai'),
(96, 7312155, 42, '2020-01-03 00:00:00', 'Chicken Steak', 30000, 1, 30000, '', 7, 30000, 'Selesai'),
(97, 7312155, 36, '2020-01-03 00:00:00', 'fettucine', 35000, 1, 35000, '', 7, 65000, 'Disiapkan'),
(98, 0, 39, '2020-01-05 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 1, 20000, 'Disiapkan'),
(99, 0, 36, '2020-01-05 00:00:00', 'fettucine', 35000, 1, 35000, '', 1, 55000, 'Disiapkan'),
(100, 1512153, 39, '2020-01-05 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 1, 20000, 'Disiapkan'),
(101, 1512153, 36, '2020-01-05 00:00:00', 'fettucine', 35000, 1, 35000, '', 1, 55000, 'Disiapkan'),
(102, 891701, 41, '2020-01-09 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Disiapkan'),
(104, 191744, 39, '2020-01-09 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 1, 20000, 'Disiapkan'),
(105, 891745, 41, '2020-01-09 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Disiapkan'),
(106, 81011547, 35, '2020-01-10 00:00:00', 'Greentea', 25000, 1, 25000, '', 8, 25000, 'Disiapkan'),
(107, 81012105, 35, '2020-01-10 00:00:00', 'Greentea', 25000, 1, 25000, '', 8, 25000, 'Disiapkan'),
(108, 81511724, 39, '2020-01-15 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 8, 20000, 'Selesai'),
(109, 81911144, 41, '2020-01-19 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Selesai'),
(110, 81911155, 48, '2020-01-19 00:00:00', 'Neapolitan', 20000, 1, 20000, '', 8, 20000, 'Disiapkan'),
(111, 81911155, 36, '2020-01-19 00:00:00', 'fettucine', 35000, 1, 35000, '', 8, 55000, 'Disiapkan'),
(112, 82311635, 0, '2020-01-23 00:00:00', 'Nachos', 25000, 3, 75000, '', 8, 75000, 'Disiapkan'),
(113, 82311635, 51, '2020-01-23 00:00:00', 'Nachos', 20000, 1, 20000, '', 8, 95000, 'Disiapkan'),
(114, 82311635, 52, '2020-01-23 00:00:00', 'Ice cream', 15000, 1, 15000, '', 8, 110000, 'Disiapkan'),
(115, 8271919, 41, '2020-01-27 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Disiapkan'),
(116, 6271945, 41, '2020-01-27 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 6, 30000, 'Disiapkan'),
(117, 5271948, 40, '2020-01-27 00:00:00', 'Milkshake', 30000, 1, 30000, '', 5, 30000, 'Disiapkan'),
(118, 5271949, 40, '2020-01-27 00:00:00', 'Milkshake', 30000, 1, 30000, '', 5, 30000, 'Disiapkan'),
(119, 5271950, 40, '2020-01-27 00:00:00', 'Milkshake', 30000, 1, 30000, '', 5, 30000, 'Disiapkan'),
(120, 5271951, 40, '2020-01-27 00:00:00', 'Milkshake', 30000, 1, 30000, '', 5, 30000, 'Disiapkan'),
(121, 5271952, 40, '2020-01-27 00:00:00', 'Milkshake', 30000, 1, 30000, '', 5, 30000, 'Disiapkan'),
(122, 5271954, 40, '2020-01-27 00:00:00', 'Milkshake', 30000, 1, 30000, '', 5, 30000, 'Disiapkan'),
(123, 5271957, 40, '2020-01-27 00:00:00', 'Milkshake', 30000, 1, 30000, '', 5, 30000, 'Disiapkan'),
(124, 5271959, 40, '2020-01-27 00:00:00', 'Milkshake', 30000, 1, 30000, '', 5, 30000, 'Selesai'),
(125, 52711000, 40, '2020-01-27 00:00:00', 'Milkshake', 30000, 1, 30000, '', 5, 30000, 'Selesai'),
(126, 8321357, 41, '2020-02-03 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Disiapkan'),
(127, 8321410, 41, '2020-02-03 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Disiapkan'),
(128, 8321410, 52, '2020-02-03 00:00:00', 'Ice cream', 15000, 1, 15000, '', 8, 45000, 'Disiapkan'),
(129, 7422053, 41, '2020-02-04 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 7, 30000, 'Selesai'),
(130, 7422055, 41, '2020-02-04 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 7, 30000, 'Disiapkan'),
(131, 7422055, 50, '2020-02-04 00:00:00', 'Sosis Bakar Mayo', 18000, 1, 18000, '', 7, 48000, 'Disiapkan'),
(132, 8422138, 39, '2020-02-04 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 8, 20000, 'Selesai'),
(133, 8422138, 35, '2020-02-04 00:00:00', 'Greentea', 25000, 1, 25000, '', 8, 45000, 'Selesai'),
(134, 8521402, 0, '2020-02-05 00:00:00', 'Fetucine Green', 28000, 1, 28000, '', 8, 28000, 'Disiapkan'),
(135, 162824, 41, '2020-02-06 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 1, 30000, 'Disiapkan'),
(136, 1062825, 41, '2020-02-06 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 10, 30000, 'Disiapkan'),
(137, 1062825, 43, '2020-02-06 00:00:00', 'Kwetiaw Goreng', 25000, 1, 25000, '', 10, 55000, 'Disiapkan'),
(139, 8621304, 39, '2020-02-06 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 8, 20000, 'Disiapkan'),
(140, 1621321, 41, '2020-02-06 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 1, 30000, 'Selesai'),
(141, 7621325, 1, '2020-02-06 00:00:00', 'Fetucine Green', 28000, 1, 28000, '', 7, 28000, 'Disiapkan'),
(142, 5621357, 39, '2020-02-06 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 5, 20000, 'Selesai'),
(143, 8621401, 44, '2020-02-06 00:00:00', 'Pisang Cokelat', 20000, 1, 20000, '', 8, 20000, 'Selesai'),
(144, 8621411, 41, '2020-02-06 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Selesai'),
(145, 8621428, 44, '2020-02-06 00:00:00', 'Pisang Cokelat', 20000, 1, 20000, '', 8, 20000, 'Disiapkan'),
(146, 8621428, 41, '2020-02-06 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 50000, 'Disiapkan'),
(147, 8621434, 44, '2020-02-06 00:00:00', 'Pisang Cokelat', 20000, 1, 20000, '', 8, 20000, 'Selesai'),
(148, 8621434, 47, '2020-02-06 00:00:00', 'Pop corn caramel', 25000, 1, 25000, '', 8, 45000, 'Selesai'),
(149, 8621434, 39, '2020-02-06 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 8, 65000, 'Selesai'),
(150, 8721809, 41, '2020-02-07 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Selesai'),
(151, 8822119, 41, '2020-02-08 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Selesai'),
(152, 8822121, 39, '2020-02-08 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 8, 20000, 'Disiapkan'),
(153, 8822122, 1, '2020-02-08 00:00:00', 'Fetucine Green', 28000, 1, 28000, '', 8, 28000, 'Disiapkan'),
(154, 8822129, 39, '2020-02-08 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 8, 20000, 'Disiapkan'),
(155, 5822132, 47, '2020-02-08 00:00:00', 'Pop corn caramel', 25000, 1, 25000, '', 5, 25000, 'Disiapkan'),
(156, 8822133, 55, '2020-02-08 00:00:00', 'Thai Tea', 15000, 1, 15000, '', 8, 15000, 'Disiapkan'),
(157, 8822138, 44, '2020-02-08 00:00:00', 'Pisang Cokelat', 20000, 1, 20000, '', 8, 20000, 'Disiapkan'),
(158, 7822143, 1, '2020-02-08 00:00:00', 'Fetucine Green', 28000, 1, 28000, '', 7, 28000, 'Disiapkan'),
(159, 6822145, 41, '2020-02-08 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 6, 30000, 'Disiapkan'),
(160, 3822147, 55, '2020-02-08 00:00:00', 'Thai Tea', 15000, 1, 15000, '', 3, 15000, 'Disiapkan'),
(161, 8822150, 39, '2020-02-08 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 8, 20000, 'Disiapkan'),
(162, 8822151, 36, '2020-02-08 00:00:00', 'fettucine', 35000, 1, 35000, '', 8, 35000, 'Disiapkan'),
(163, 8822153, 46, '2020-02-08 00:00:00', 'Ice cream', 25000, 1, 25000, '', 8, 25000, 'Disiapkan'),
(164, 8822201, 1, '2020-02-08 00:00:00', 'Fetucine Green', 28000, 1, 28000, '', 8, 28000, 'Disiapkan'),
(165, 8822310, 41, '2020-02-08 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Disiapkan'),
(166, 8822311, 39, '2020-02-08 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 8, 20000, 'Disiapkan'),
(167, 8822327, 42, '2020-02-08 00:00:00', 'Chicken Steak', 30000, 1, 30000, '', 8, 30000, 'Disiapkan'),
(168, 892717, 41, '2020-02-09 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 8, 30000, 'Disiapkan'),
(169, 892717, 44, '2020-02-09 00:00:00', 'Pisang Cokelat', 20000, 1, 20000, '', 8, 50000, 'Disiapkan'),
(170, 892717, 35, '2020-02-09 00:00:00', 'Greentea', 25000, 1, 25000, '', 8, 75000, 'Disiapkan'),
(171, 692731, 53, '2020-02-09 00:00:00', 'Nasi Ebi', 35000, 1, 35000, '', 6, 35000, 'Disiapkan'),
(172, 692731, 55, '2020-02-09 00:00:00', 'Thai Tea', 15000, 1, 15000, '', 6, 50000, 'Disiapkan'),
(173, 692745, 41, '2020-02-09 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 6, 30000, 'Disiapkan'),
(174, 692745, 36, '2020-02-09 00:00:00', 'fettucine', 35000, 1, 35000, '', 6, 65000, 'Disiapkan'),
(175, 8921401, 1, '2020-02-09 00:00:00', 'Fetucine Green', 28000, 2, 56000, '', 8, 56000, 'Disiapkan'),
(176, 7921410, 55, '2020-02-09 00:00:00', 'Thai Tea', 15000, 1, 15000, '', 7, 15000, 'Disiapkan'),
(177, 7921410, 44, '2020-02-09 00:00:00', 'Pisang Cokelat', 20000, 1, 20000, '', 7, 35000, 'Disiapkan'),
(178, 3921413, 47, '2020-02-09 00:00:00', 'Pop corn caramel', 25000, 3, 75000, '', 3, 75000, 'Disiapkan'),
(179, 3921413, 42, '2020-02-09 00:00:00', 'Chicken Steak', 30000, 1, 30000, '', 3, 105000, 'Disiapkan'),
(180, 3921413, 55, '2020-02-09 00:00:00', 'Thai Tea', 15000, 1, 15000, '', 3, 120000, 'Disiapkan'),
(181, 3921413, 35, '2020-02-09 00:00:00', 'Greentea', 25000, 1, 25000, '', 3, 145000, 'Disiapkan'),
(182, 3921413, 41, '2020-02-09 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 3, 175000, 'Disiapkan'),
(183, 3921413, 36, '2020-02-09 00:00:00', 'fettucine', 35000, 1, 35000, '', 3, 210000, 'Disiapkan'),
(184, 1921415, 53, '2020-02-09 00:00:00', 'Nasi Ebi', 35000, 1, 35000, '', 1, 35000, 'Disiapkan'),
(185, 1921415, 48, '2020-02-09 00:00:00', 'Neapolitan', 20000, 2, 40000, '', 1, 75000, 'Disiapkan'),
(186, 1921415, 55, '2020-02-09 00:00:00', 'Thai Tea', 15000, 1, 15000, '', 1, 90000, 'Disiapkan'),
(187, 1921415, 39, '2020-02-09 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 1, 110000, 'Disiapkan'),
(188, 9921448, 41, '2020-02-09 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 9, 30000, 'Disiapkan'),
(189, 9921448, 39, '2020-02-09 00:00:00', 'Juice Alpukat', 20000, 3, 60000, '', 9, 90000, 'Disiapkan'),
(190, 2921520, 1, '2020-02-09 00:00:00', 'Fetucine Green', 28000, 5, 140000, '', 2, 140000, 'Disiapkan'),
(191, 5921541, 39, '2020-02-09 00:00:00', 'Juice Alpukat', 20000, 1, 20000, '', 5, 20000, 'Disiapkan'),
(192, 5921541, 43, '2020-02-09 00:00:00', 'Kwetiaw Goreng', 25000, 1, 25000, '', 5, 45000, 'Disiapkan'),
(193, 4921543, 55, '2020-02-09 00:00:00', 'Thai Tea', 15000, 2, 30000, '', 4, 30000, 'Disiapkan'),
(194, 4921543, 41, '2020-02-09 00:00:00', 'Nasi Goreng', 30000, 1, 30000, '', 4, 60000, 'Disiapkan'),
(195, 4921543, 36, '2020-02-09 00:00:00', 'fettucine', 35000, 1, 35000, '', 4, 95000, 'Disiapkan'),
(196, 7922114, 55, '2020-02-09 00:00:00', 'Thai Tea', 15000, 1, 15000, '', 7, 15000, 'Disiapkan'),
(197, 7922114, 50, '2020-02-09 00:00:00', 'Sosis Bakar Mayo', 18000, 1, 18000, '', 7, 33000, 'Disiapkan'),
(198, 7922114, 46, '2020-02-09 00:00:00', 'Ice cream', 25000, 1, 25000, '', 7, 58000, 'Disiapkan'),
(199, 2922118, 50, '2020-02-09 00:00:00', 'Sosis Bakar Mayo', 18000, 1, 18000, '', 2, 18000, 'Disiapkan'),
(200, 2922118, 46, '2020-02-09 00:00:00', 'Ice cream', 25000, 1, 25000, '', 2, 43000, 'Disiapkan'),
(201, 2922118, 36, '2020-02-09 00:00:00', 'fettucine', 35000, 1, 35000, '', 2, 78000, 'Disiapkan'),
(202, 2922118, 1, '2020-02-09 00:00:00', 'Fetucine Green', 28000, 1, 28000, '', 2, 106000, 'Disiapkan'),
(203, 8922129, 55, '2020-02-09 00:00:00', 'Thai Tea', 15000, 1, 15000, '', 8, 15000, 'Disiapkan'),
(204, 8102608, 43, '2020-02-10 06:08:40', 'Kwetiaw Goreng', 25000, 2, 50000, '', 8, 50000, 'Disiapkan'),
(205, 8102608, 39, '2020-02-10 06:08:40', 'Juice Alpukat', 20000, 1, 20000, '', 8, 70000, 'Selesai'),
(206, 8102608, 43, '2020-02-10 06:08:59', 'Kwetiaw Goreng', 25000, 2, 50000, '', 8, 50000, 'Selesai'),
(207, 8102608, 39, '2020-02-10 06:08:59', 'Juice Alpukat', 20000, 1, 20000, '', 8, 70000, 'Selesai'),
(208, 8102608, 41, '2020-02-10 06:08:59', 'Nasi Goreng', 30000, 1, 30000, '', 8, 100000, 'Selesai'),
(209, 5102652, 36, '2020-02-10 06:52:13', 'fettucine', 35000, 1, 35000, '', 5, 35000, 'Disiapkan'),
(210, 5102652, 48, '2020-02-10 06:52:13', 'Neapolitan', 20000, 1, 20000, '', 5, 55000, 'Disiapkan'),
(211, 5102652, 55, '2020-02-10 06:52:13', 'Thai Tea', 15000, 1, 15000, '', 5, 70000, 'Disiapkan'),
(212, 21021101, 1, '2020-02-10 11:01:55', 'Fetucine Green', 28000, 1, 28000, '', 2, 28000, 'Disiapkan'),
(213, 21021101, 44, '2020-02-10 11:01:55', 'Pisang Cokelat', 20000, 2, 40000, '', 2, 68000, 'Disiapkan'),
(214, 41021601, 52, '2020-02-10 04:01:37', 'Ice cream', 15000, 2, 30000, '', 4, 30000, 'Disiapkan'),
(215, 71021732, 55, '2020-02-10 05:32:29', 'Thai Tea', 15000, 1, 15000, '', 7, 15000, 'Disiapkan'),
(216, 71021732, 47, '2020-02-10 05:32:29', 'Pop corn caramel', 25000, 1, 25000, '', 7, 40000, 'Disiapkan'),
(217, 71021732, 41, '2020-02-10 05:32:29', 'Nasi Goreng', 30000, 1, 30000, '', 7, 70000, 'Selesai'),
(218, 91021737, 36, '2020-02-10 05:37:10', 'fettucine', 35000, 1, 35000, '', 9, 35000, 'Disiapkan'),
(219, 91021737, 1, '2020-02-10 05:37:10', 'Fetucine Green', 28000, 10, 280000, '', 9, 315000, 'Disiapkan'),
(220, 91021737, 46, '2020-02-10 05:37:10', 'Ice cream', 25000, 1, 25000, '', 9, 340000, 'Disiapkan'),
(221, 111021749, 57, '2020-02-10 05:49:25', 'Burger', 15000, 1, 15000, '', 11, 15000, 'Disiapkan'),
(222, 111021749, 44, '2020-02-10 05:49:25', 'Pisang Cokelat', 20000, 3, 60000, '', 11, 75000, 'Disiapkan'),
(223, 111021749, 35, '2020-02-10 05:49:25', 'Greentea', 25000, 4, 100000, '', 11, 175000, 'Disiapkan'),
(224, 121021753, 48, '2020-02-10 05:53:51', 'Neapolitan', 20000, 4, 80000, '', 12, 80000, 'Disiapkan'),
(225, 121021753, 36, '2020-02-10 05:53:51', 'fettucine', 35000, 1, 35000, '', 12, 115000, 'Disiapkan'),
(226, 121021753, 56, '2020-02-10 05:53:51', 'Mie Goreng', 20000, 1, 20000, '', 12, 135000, 'Disiapkan'),
(227, 121021753, 35, '2020-02-10 05:53:51', 'Greentea', 25000, 1, 25000, '', 12, 160000, 'Disiapkan'),
(228, 121021753, 52, '2020-02-10 05:53:51', 'Ice cream', 15000, 1, 15000, '', 12, 175000, 'Disiapkan'),
(229, 121021753, 47, '2020-02-10 05:53:51', 'Pop corn caramel', 25000, 1, 25000, '', 12, 200000, 'Disiapkan'),
(230, 121021753, 60, '2020-02-10 05:53:51', 'Steak Potato', 24000, 2, 48000, '', 12, 248000, 'Disiapkan'),
(231, 121021753, 53, '2020-02-10 05:53:51', 'Nasi Ebi', 35000, 3, 105000, '', 12, 353000, 'Disiapkan'),
(232, 121021753, 55, '2020-02-10 05:53:51', 'Thai Tea', 15000, 3, 45000, '', 12, 398000, 'Selesai'),
(233, 81121822, 57, '2020-02-11 06:22:48', 'Burger', 15000, 1, 15000, '', 8, 15000, 'Disiapkan'),
(234, 81121822, 44, '2020-02-11 06:22:48', 'Pisang Cokelat', 20000, 2, 40000, '', 8, 55000, 'Disiapkan'),
(235, 91121845, 1, '2020-02-11 06:45:47', 'Fetucine Green', 28000, 1, 28000, '', 9, 28000, 'Disiapkan'),
(236, 71121847, 57, '2020-02-11 06:47:20', 'Burger', 15000, 1, 15000, '', 7, 15000, 'Selesai'),
(237, 51121938, 41, '2020-02-11 07:38:04', 'Nasi Goreng', 30000, 1, 30000, '', 5, 30000, 'Selesai'),
(238, 51121938, 59, '2020-02-11 07:38:04', 'Red Velvet', 19000, 1, 19000, '', 5, 49000, 'Selesai'),
(239, 51121938, 46, '2020-02-11 07:38:04', 'Ice cream', 25000, 1, 25000, '', 5, 74000, 'Selesai'),
(240, 11122914, 1, '2020-02-12 09:14:40', 'Fetucine Green', 28000, 1, 28000, '', 11, 28000, 'Selesai'),
(241, 11122914, 59, '2020-02-12 09:14:40', 'Red Velvet', 19000, 1, 19000, '', 11, 47000, 'Selesai'),
(242, 11122914, 46, '2020-02-12 09:14:40', 'Ice cream', 25000, 1, 25000, '', 11, 72000, 'Selesai'),
(243, 11122914, 55, '2020-02-12 09:14:40', 'Thai Tea', 15000, 1, 15000, '', 11, 87000, 'Selesai'),
(244, 7122927, 53, '2020-02-12 09:27:35', 'Nasi Ebi', 35000, 1, 35000, '', 7, 35000, 'Selesai'),
(245, 7122927, 59, '2020-02-12 09:27:35', 'Red Velvet', 19000, 1, 19000, '', 7, 54000, 'Selesai'),
(246, 7122927, 52, '2020-02-12 09:27:35', 'Ice cream', 15000, 1, 15000, '', 7, 69000, 'Selesai'),
(247, 91221340, 1, '2020-02-12 01:40:53', 'Fetucine Green', 28000, 1, 28000, '', 9, 28000, 'Disiapkan'),
(248, 91221526, 42, '2020-02-12 03:26:32', 'Chicken Steak', 30000, 1, 30000, '', 9, 30000, 'Disiapkan'),
(249, 91221526, 35, '2020-02-12 03:26:32', 'Greentea', 25000, 3, 75000, '', 9, 105000, 'Disiapkan'),
(250, 11221533, 56, '2020-02-12 03:33:33', 'Mie Goreng', 20000, 2, 40000, '', 1, 40000, 'Disiapkan'),
(251, 11221533, 59, '2020-02-12 03:33:33', 'Red Velvet', 19000, 2, 38000, '', 1, 78000, 'Disiapkan'),
(252, 51221536, 48, '2020-02-12 03:36:15', 'Neapolitan', 20000, 3, 60000, '', 5, 60000, 'Disiapkan'),
(253, 31221552, 58, '2020-02-12 03:52:35', 'Chocolate Orange', 15000, 1, 15000, '', 3, 15000, 'Disiapkan'),
(254, 31221552, 44, '2020-02-12 03:52:35', 'Pisang Cokelat', 20000, 1, 20000, '', 3, 35000, 'Disiapkan'),
(255, 31221552, 41, '2020-02-12 03:52:35', 'Nasi Goreng', 30000, 3, 90000, '', 3, 125000, 'Selesai'),
(256, 21221617, 43, '2020-02-12 04:17:34', 'Kwetiaw Goreng', 25000, 1, 25000, '', 2, 25000, 'Disiapkan'),
(257, 21221617, 56, '2020-02-12 04:17:34', 'Mie Goreng', 20000, 1, 20000, '', 2, 45000, 'Disiapkan'),
(258, 21221617, 57, '2020-02-12 04:17:34', 'Burger', 15000, 1, 15000, '', 2, 60000, 'Disiapkan'),
(259, 21221617, 1, '2020-02-12 04:17:34', 'Fetucine Green', 28000, 1, 28000, '', 2, 88000, 'Disiapkan'),
(260, 21221617, 46, '2020-02-12 04:17:34', 'Ice cream', 25000, 2, 50000, '', 2, 138000, 'Disiapkan'),
(261, 21221617, 59, '2020-02-12 04:17:34', 'Red Velvet', 19000, 1, 19000, '', 2, 157000, 'Disiapkan'),
(262, 21221617, 44, '2020-02-12 04:17:34', 'Pisang Cokelat', 20000, 1, 20000, '', 2, 177000, 'Selesai'),
(263, 21221617, 61, '2020-02-12 04:17:34', 'Pancake Coklat', 20000, 1, 20000, '', 2, 197000, 'Disiapkan'),
(264, 21221617, 55, '2020-02-12 04:17:34', 'Thai Tea', 15000, 3, 45000, '', 2, 242000, 'Disiapkan'),
(265, 21221617, 64, '2020-02-12 04:17:34', 'Pisang Goreng', 8000, 1, 8000, '', 2, 250000, 'Disiapkan'),
(266, 21221617, 42, '2020-02-12 04:17:34', 'Chicken Steak', 30000, 1, 30000, '', 2, 280000, 'Disiapkan'),
(267, 31222137, 55, '2020-02-12 09:37:00', 'Thai Tea', 15000, 3, 45000, '', 3, 45000, 'Disiapkan'),
(268, 5132322, 35, '2020-02-13 03:22:07', 'Greentea', 25000, 2, 50000, '', 5, 50000, 'Disiapkan'),
(269, 5132322, 59, '2020-02-13 03:22:07', 'Red Velvet', 19000, 1, 19000, '', 5, 69000, 'Disiapkan'),
(270, 5132322, 44, '2020-02-13 03:22:07', 'Pisang Cokelat', 20000, 1, 20000, '', 5, 89000, 'Disiapkan'),
(271, 5132322, 64, '2020-02-13 03:22:07', 'Pisang Goreng', 8000, 1, 8000, '', 5, 97000, 'Disiapkan'),
(272, 5132322, 61, '2020-02-13 03:22:07', 'Pancake Coklat', 20000, 1, 20000, '', 5, 117000, 'Disiapkan'),
(273, 2132325, 60, '2020-02-13 03:25:41', 'Steak Potato', 24000, 1, 24000, '', 2, 24000, 'Disiapkan'),
(274, 2132325, 53, '2020-02-13 03:25:41', 'Nasi Ebi', 35000, 1, 35000, '', 2, 59000, 'Disiapkan'),
(275, 2132325, 44, '2020-02-13 03:25:41', 'Pisang Cokelat', 20000, 4, 80000, '', 2, 139000, 'Disiapkan'),
(276, 41321408, 58, '2020-02-13 02:08:21', 'Chocolate Orange', 15000, 6, 90000, '', 4, 90000, 'Disiapkan'),
(277, 91321847, 53, '2020-02-13 06:47:34', 'Nasi Ebi', 35000, 1, 35000, '', 9, 35000, 'Disiapkan'),
(278, 91321847, 58, '2020-02-13 06:47:34', 'Chocolate Orange', 15000, 1, 15000, '', 9, 50000, 'Disiapkan'),
(279, 91321847, 47, '2020-02-13 06:47:34', 'Pop corn caramel', 25000, 1, 25000, '', 9, 75000, 'Disiapkan'),
(280, 91321847, 50, '2020-02-13 06:47:34', 'Sosis Bakar Mayo', 18000, 2, 36000, '', 9, 111000, 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'El Rumi', 'chef', 'chef', 'chef'),
(2, 'Al Ghazali', 'kasir', 'kasir', 'kasir'),
(3, 'kiki', 'admin', 'admin', 'admin'),
(4, '01', '01', '01', '01'),
(5, '02', '02', '02', '02'),
(6, '02', '02', '02', '02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `pemesanan_menu`
--
ALTER TABLE `pemesanan_menu`
  ADD PRIMARY KEY (`Id_pemesanan_menu`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `meja`
--
ALTER TABLE `meja`
  MODIFY `id_meja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1123121309;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_menu`
--
ALTER TABLE `pemesanan_menu`
  MODIFY `Id_pemesanan_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
