-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jun 2022 pada 09.54
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rempoah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jalan`
--

CREATE TABLE `tbl_jalan` (
  `kd_jalan` varchar(10) NOT NULL,
  `nama_jalan` varchar(10) NOT NULL,
  `kd_barang` varchar(10) NOT NULL,
  `nup_jalan` varchar(10) NOT NULL,
  `ukuran_jalan` varchar(10) NOT NULL,
  `tahun_perolehanjalan` varchar(4) NOT NULL,
  `kd_type` varchar(10) NOT NULL,
  `kd_asal` varchar(10) NOT NULL,
  `gambar_jalan` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
