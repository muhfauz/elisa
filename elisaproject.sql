-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 12:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elisaproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `kd_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(40) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(200) NOT NULL,
  `gambar_admin` varchar(30) NOT NULL,
  `alamat_admin` varchar(100) NOT NULL,
  `nohp_admin` varchar(14) NOT NULL,
  `status_admin` enum('admin','kasir','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`kd_admin`, `nama_admin`, `username_admin`, `password_admin`, `gambar_admin`, `alamat_admin`, `nohp_admin`, `status_admin`) VALUES
('ADM001', 'adasfasdfadsfasdf', 'ADM001', 'e10adc3949ba59abbe56e057f20f883e', 'adm_1657406829.png', 'Suro', '085742906467', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asal`
--

CREATE TABLE `tbl_asal` (
  `kd_asal` varchar(10) NOT NULL,
  `nama_asal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_asal`
--

INSERT INTO `tbl_asal` (`kd_asal`, `nama_asal`) VALUES
('ASL001', 'APBDes'),
('ASL002', 'Program Pamsimas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `kd_berita` varchar(10) NOT NULL,
  `kd_beritaen` varchar(50) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(20) NOT NULL,
  `kd_admin` varchar(10) NOT NULL,
  `tgl_berita` date NOT NULL,
  `kd_kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`kd_berita`, `kd_beritaen`, `judul_berita`, `isi_berita`, `gambar_berita`, `kd_admin`, `tgl_berita`, `kd_kategori`) VALUES
('BER007', '8e75a9761a8d30caf2f3d1b9d57b7bea', 'Pembangunan Kamar Mandi dan toilet santri', '<p>Telah selesai pembangunan Toilet beserta kamar mandi untuk santri laki-laki. Pembangunan kurang lebih dilakukan selama satu bulan lebih</p>\r\n', 'adm_1641480529.jpg', 'ADM001', '2022-01-06', 'KAT001'),
('BER008', '6e0a8f953e2f8f519275aa7d0442641f', 'Usaha AL-Iktifa', 'Al-Iktifa adalah tempat usaha yang melayani pusat grosir sembako yang dimiliki pondok pesantren Az-zuhriyyah. Pusat grosir menyediakan kebutuhan sembako seperti beras, minyak dan kebutuhan sembako lainya. Kegiatan ini melibatkan santri pondok secara langsung dengan tetap diawasi dan siarahkan pengurus pondok\r\n', 'adm_1641480570.jpg', 'ADM001', '2022-01-06', 'KAT001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bidang`
--

CREATE TABLE `tbl_bidang` (
  `kd_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(50) NOT NULL,
  `nama_bidangx` varchar(50) NOT NULL,
  `css_bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bidang`
--

INSERT INTO `tbl_bidang` (`kd_bidang`, `nama_bidang`, `nama_bidangx`, `css_bidang`) VALUES
(1, 'Akuntansi', 'akuntansi', 'flaticon-accounting'),
(2, 'Pendidikan', 'pendidikan', 'flaticon-graduation-cap'),
(3, 'Otomotif', 'otomotif', 'flaticon-wrench-and-screwdriver-in-cross'),
(4, 'Bisnis', 'bisnis', 'flaticon-consultation'),
(5, 'Kesehatan', 'kesehatan', 'flaticon-heart'),
(6, 'Teknologi Informasi dan Agency', 'teknolog-informasi-dan-agency', 'flaticon-computer'),
(7, 'Engineering', 'engineering', 'flaticon-worker'),
(8, 'Hukum', 'hukum', 'flaticon-auction');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hrd`
--

CREATE TABLE `tbl_hrd` (
  `kd_hrd` varchar(10) NOT NULL,
  `nama_hrd` varchar(30) NOT NULL,
  `alamat_hrd` varchar(50) NOT NULL,
  `username_hrd` varchar(20) NOT NULL,
  `nohp_hrd` varchar(15) NOT NULL,
  `password_hrd` varchar(50) NOT NULL,
  `gambar_hrd` varchar(20) NOT NULL,
  `status_hrd` enum('aktif','tidak_aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hrd`
--

INSERT INTO `tbl_hrd` (`kd_hrd`, `nama_hrd`, `alamat_hrd`, `username_hrd`, `nohp_hrd`, `password_hrd`, `gambar_hrd`, `status_hrd`) VALUES
('HRD001', 'Siska', 'Purwokerto', 'HRD001', '085700487612', 'e10adc3949ba59abbe56e057f20f883e', 'hrd.png', 'tidak_aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_judul`
--

CREATE TABLE `tbl_judul` (
  `kd_judul` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `oleh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_judul`
--

INSERT INTO `tbl_judul` (`kd_judul`, `judul`, `oleh`) VALUES
(1, 'SIREKAN', 'Desa Suro Kalibagor Banyumas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kd_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `ket_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kd_kategori`, `nama_kategori`, `ket_kategori`) VALUES
('KAT001', 'B', 'Baik'),
('KAT002', 'RR', 'Rusak Ringan'),
('KAT003', 'RB', 'Rusak Berat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kegiatan`
--

CREATE TABLE `tbl_kegiatan` (
  `kd_kegiatan` varchar(10) NOT NULL,
  `hari_kegiatan` varchar(10) NOT NULL,
  `jam_kegiatan` varchar(10) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `keterangan_kegiatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`kd_kegiatan`, `hari_kegiatan`, `jam_kegiatan`, `nama_kegiatan`, `keterangan_kegiatan`) VALUES
('KEG001', 'senin', '04.30  ', 'Sholat Subuh Berjamaah', 'Ngaji Kitab dan Tadarus'),
('KEG002', 'Senin', '07.00 ', 'sekolah (yang tidak sekolah mengaji)', 'mengaji sampai 10.00'),
('KEG003', 'Senin', '11.54', 'Sholat dzuhur', 'Mengaji sampai 14.00'),
('KEG004', 'Senin', '15.00', 'Sholat Ashar', 'Kegiatan TPQ'),
('KEG005', 'senin', '18.00', 'Sholat Magrib', 'Kegiatan Madin'),
('KEG006', 'senin', '19.20', 'Sholat Isya', 'mengaji kitab sampai 21.00'),
('KEG007', 'selasa', '04.30  ', 'Sholat Subuh Berjamaah', 'Ngaji Kitab dan Tadarus'),
('KEG008', 'selasa', '07.00 ', 'sekolah (yang tidak sekolah mengaji)', 'mengaji sampai 10.00'),
('KEG009', 'selasa', '11.54', 'Sholat dzuhur', 'Mengaji sampai 14.00'),
('KEG010', 'selasa', '15.00', 'Sholat Ashar', 'Kegiatan TPQ'),
('KEG011', 'selasa', '18.00', 'Sholat Magrib', 'Kegiatan Madin'),
('KEG012', 'selasa', '19.20', 'Sholat Isya', 'mengaji kitab sampai 21.00'),
('KEG013', 'rabu', '04.30  ', 'Sholat Subuh Berjamaah', 'Ngaji Kitab dan Tadarus'),
('KEG014', 'rabu', '07.00 - 13', 'sekolah (yang tidak sekolah mengaji)', 'mengaji sampai 10.00'),
('KEG015', 'rabu', '11.54', 'Sholat dzuhur', 'Mengaji sampai 14.00'),
('KEG016', 'rabu', '15.00', 'Sholat Ashar', 'Kegiatan TPQ'),
('KEG017', 'rabu', '18.00', 'Sholat Magrib', 'Kegiatan Madin'),
('KEG018', 'rabu', '19.20', 'Sholat Isya', 'Mengaji Kitab'),
('KEG019', 'kamis', '04.30  ', 'Sholat Subuh Berjamaah', 'Ngaji Kitab dan Tadarus'),
('KEG020', 'kamis', '07.00 - 13', 'sekolah (yang tidak sekolah mengaji)', 'mengaji sampai 10.00'),
('KEG021', 'kamis', '11.54', 'Sholat dzuhur', 'Mengaji sampai 14.00'),
('KEG022', 'kamis', '15.00', 'Sholat Ashar', 'Kegiatan TPQ'),
('KEG023', 'senin', '18.00', 'Sholat Magrib', 'Kegiatan Madin'),
('KEG024', 'kamis', '19.20', 'Sholat Isya', 'Mengaji Kitab'),
('KEG025', 'jumat', '04.30  ', 'Sholat Subuh Berjamaah', 'Ngaji Kitab dan Tadarus'),
('KEG026', 'jumat', '08.00 ', 'kebersihan bagi yang tidak sekolah', ' '),
('KEG027', 'jumat', '15.00', 'Sholat Ashar', 'Kegiatan TPQ LIBUR'),
('KEG028', 'jumat', '18.00', 'Sholat Magrib', 'Kegiatan Madin'),
('KEG029', 'jumat', '19.20', 'Sholat Isya', 'Mengaji Kitab'),
('KEG030', 'sabtu', '04.30  ', 'Sholat Subuh Berjamaah', 'Ngaji Kitab dan Tadarus'),
('KEG031', 'sabtu', '07.00 ', 'sekolah (yang tidak sekolah mengaji)', 'mengaji sampai 10.00'),
('KEG032', 'sabtu', '11.54', 'Sholat dzuhur', 'Mengaji sampai 14.00'),
('KEG033', 'sabtu', '15.00', 'Sholat Ashar', 'Kegiatan TPQ'),
('KEG034', 'sabtu', '18.00', 'Sholat Magrib', 'Kegiatan Madin'),
('KEG035', 'sabtu', '19.20', 'Sholat Isya', 'Mengaji Kitab'),
('KEG036', 'ahad', '04.30  ', 'Sholat Subuh Berjamaah', 'Ngaji Kitab dan Tadarus'),
('KEG037', 'ahad', '08.00 ', 'Mengaji sampai 10.00', ' diperbolahkan pulang'),
('KEG038', 'ahad', '11.54', 'Sholat dzuhur', 'Mengaji sampai 14.00'),
('KEG039', 'ahad', '15.00', 'Sholat Ashar', 'Kegiatan TPQ'),
('KEG040', 'senin', '18.00', 'Sholat Magrib', 'Kegiatan Madin'),
('KEG041', 'ahad', '19.20', 'Sholat Isya', 'Mengaji Kitab');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `kd_logo` int(11) NOT NULL,
  `nama_logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`kd_logo`, `nama_logo`) VALUES
(1, 'gambar1595851792.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lowongan`
--

CREATE TABLE `tbl_lowongan` (
  `kd_lowongan` varchar(11) NOT NULL,
  `nama_lowongan` varchar(50) NOT NULL,
  `detail_lowongan` text NOT NULL,
  `tgl_post` datetime NOT NULL,
  `tgl_tutup` date NOT NULL,
  `gambar_lowongan` varchar(50) NOT NULL,
  `kd_admin` varchar(10) NOT NULL,
  `kd_lowonganen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lowongan`
--

INSERT INTO `tbl_lowongan` (`kd_lowongan`, `nama_lowongan`, `detail_lowongan`, `tgl_post`, `tgl_tutup`, `gambar_lowongan`, `kd_admin`, `kd_lowonganen`) VALUES
('BER003', 'Lowongan Admin', '<h3>Lowongan Admin</h3>\r\n\r\n<p><strong>Kualifikasi :</strong></p>\r\n\r\n<ul>\r\n	<li>Wanita, usia max 23 tahun</li>\r\n	<li>Lulusan SMK Favorit/Negeri [Jurusan Akuntansi]</li>\r\n	<li>Jujur dan bertanggung jawab</li>\r\n	<li>Teliti, disiplin dan bisa bekerj sama</li>\r\n	<li>Domisili Purwokerto dan sekitarnya</li>\r\n</ul>\r\n\r\n<p><strong>Persyaratan :</strong><br />\r\n1. Surat Lamaran<br />\r\n2. FC Ijazah terakhir/surat keterangan lulus<br />\r\n3. FC SKHU<br />\r\n4. Fc. KTP dan KK<br />\r\n5. Pas Photo 4x6 berwarna 1 lembar<br />\r\n6. FC Sertifikat vaksin 1 dan vaksin 2<br />\r\n7. Curriculum vitae(CV)</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-07-13 00:00:00', '2022-07-30', 'adm_1657597439.png', 'ADM001', '5ade11bf56fb42658825e2897ea39944'),
('LOW002', 'Lowongan sales', '<p>akkakak kakak akakka aka akakka</p>\r\n', '2022-07-13 00:00:00', '2022-07-30', 'adm_1657323795.jpg', 'ADM001', '5ade11bf56fb42658825e2897ea39944');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelamar`
--

CREATE TABLE `tbl_pelamar` (
  `kd_pelamar` varchar(10) NOT NULL,
  `nama_pelamar` varchar(30) NOT NULL,
  `tempatlahir_pelamar` varchar(30) NOT NULL,
  `tgllahir_pelamar` date NOT NULL,
  `jk_pelamar` enum('L','P') NOT NULL,
  `nohp_pelamar` varchar(15) NOT NULL,
  `alamat_pelamar` varchar(50) NOT NULL,
  `username_pelamar` varchar(20) NOT NULL,
  `password_pelamar` varchar(50) NOT NULL,
  `gambar_pelamar` varchar(30) NOT NULL,
  `tglregister_pelamar` date NOT NULL,
  `pendidikan_pelamar` enum('sma','d3','s1','s2') NOT NULL,
  `agama_pelamar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pelamar`
--

INSERT INTO `tbl_pelamar` (`kd_pelamar`, `nama_pelamar`, `tempatlahir_pelamar`, `tgllahir_pelamar`, `jk_pelamar`, `nohp_pelamar`, `alamat_pelamar`, `username_pelamar`, `password_pelamar`, `gambar_pelamar`, `tglregister_pelamar`, `pendidikan_pelamar`, `agama_pelamar`) VALUES
('PEL001', 'Sutrisno', 'Banyumas', '2000-07-07', 'L', '082135644333', 'Purwokerto', 'PEL001', 'e10adc3949ba59abbe56e057f20f883e', 'adm_1657701637.png', '2022-07-05', 'd3', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `kd_pendaftaran` varchar(10) NOT NULL,
  `nama_pendaftaran` varchar(30) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `tgl_penutupan` date NOT NULL,
  `tgl_seleksi` date NOT NULL,
  `tgl_pengumuman` date NOT NULL,
  `besar_biaya` varchar(30) NOT NULL,
  `status_pendaftaran` enum('buka','tutup') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`kd_pendaftaran`, `nama_pendaftaran`, `tgl_pendaftaran`, `tgl_penutupan`, `tgl_seleksi`, `tgl_pengumuman`, `besar_biaya`, `status_pendaftaran`) VALUES
('DAF001', 'Periode jANUARI', '2022-01-06', '2022-03-10', '2022-03-18', '2022-03-21', '150.000', 'buka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perusahaan`
--

CREATE TABLE `tbl_perusahaan` (
  `kd_perush` int(11) NOT NULL,
  `nama_perush` varchar(200) NOT NULL,
  `alamat_perush` varchar(200) NOT NULL,
  `tentang_perush` text NOT NULL,
  `telepon_perush` varchar(100) NOT NULL,
  `email_perush` varchar(400) NOT NULL,
  `logob_perush` varchar(30) NOT NULL,
  `logok_perush` varchar(30) NOT NULL,
  `logo_depan` varchar(100) NOT NULL,
  `kd_pos` varchar(10) NOT NULL,
  `kab_perush` varchar(50) NOT NULL,
  `prop_perush` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_perusahaan`
--

INSERT INTO `tbl_perusahaan` (`kd_perush`, `nama_perush`, `alamat_perush`, `tentang_perush`, `telepon_perush`, `email_perush`, `logob_perush`, `logok_perush`, `logo_depan`, `kd_pos`, `kab_perush`, `prop_perush`) VALUES
(1, 'Desa Rempoah', 'Jl.Siliwangi, Desa Suro Kecamatan Kalibagor Banyumas. ', 'ererererer', '085742906467', 'azzuhriyyahsuro@gmail.com', 'gambar1639611256.png', 'gambar1639612064.png', 'logodepan1639612646.png', '53444', 'purbalingga', 'Jawa Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `kd_profile` varchar(10) NOT NULL,
  `nama_profile` varchar(30) NOT NULL,
  `ket_profile` text NOT NULL,
  `foto_profile` varchar(20) NOT NULL,
  `kd_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`kd_profile`, `nama_profile`, `ket_profile`, `foto_profile`, `kd_admin`) VALUES
('PROF001', 'Kyai NGIZUDIN', '<p>kaka kaka akka k jkjkerea</p>\r\n\r\n<ol>\r\n	<li>ererer</li>\r\n	<li>ererere</li>\r\n	<li>erererewr</li>\r\n	<li>ererer</li>\r\n	<li>ererer</li>\r\n</ol>\r\n', 'adm_1641479776.png', 'ADM001'),
('PROF003', 'USWATUN KHASANAH', 'Ustadzah', 'adm_1641479930.jpg', 'ADM001'),
('PROF004', 'MUHAMMAD BAHAUL UMAM', 'Ustadz', 'adm_1641480038.png', 'ADM001'),
('PROF005', 'SIHABUDDIN  ', 'Ustadz', 'adm_1641480116.png', ''),
('PROF006', 'MASRURROH ', 'Ustadzah', 'adm_1641480174.jpg', ''),
('PROF007', 'AMIN SOBRI', 'Ustadz', 'adm_1641480196.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_santri`
--

CREATE TABLE `tbl_santri` (
  `kd_santri` varchar(20) NOT NULL,
  `nama_santri` varchar(30) NOT NULL,
  `jk_santri` varchar(10) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `anak_ke` int(10) NOT NULL,
  `jumlah_saudara` int(10) NOT NULL,
  `alamat_santri` varchar(100) NOT NULL,
  `nama_orangtua` varchar(50) NOT NULL,
  `pekerjaan_orangtua` varchar(50) NOT NULL,
  `agama_orangtua` varchar(30) NOT NULL,
  `nama_wali` varchar(30) NOT NULL,
  `pekerjaan_wali` varchar(30) NOT NULL,
  `agama_wali` varchar(10) NOT NULL,
  `alamat_wali` varchar(10) NOT NULL,
  `status_santri` enum('daftar','selesai') NOT NULL,
  `password_santri` varchar(50) NOT NULL,
  `kk_santri` varchar(100) NOT NULL,
  `akte_santri` varchar(100) NOT NULL,
  `status_daftar` varchar(10) NOT NULL,
  `foto_santri` varchar(30) NOT NULL,
  `alasan_terima` varchar(100) NOT NULL,
  `tgl_diterima` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_santri`
--

INSERT INTO `tbl_santri` (`kd_santri`, `nama_santri`, `jk_santri`, `tempat_lahir`, `tgl_lahir`, `anak_ke`, `jumlah_saudara`, `alamat_santri`, `nama_orangtua`, `pekerjaan_orangtua`, `agama_orangtua`, `nama_wali`, `pekerjaan_wali`, `agama_wali`, `alamat_wali`, `status_santri`, `password_santri`, `kk_santri`, `akte_santri`, `status_daftar`, `foto_santri`, `alasan_terima`, `tgl_diterima`) VALUES
('PENDAFTAR001', 'Sudirman', 'Pria', 'Banyumas', '2021-12-17', 9, 10, '  Purwokerto, jalan jendral soedriman 10 \r\n', 'Imam', 'Petani', '', '-', '-', '', '-', 'selesai', 'e10adc3949ba59abbe56e057f20f883e', '', 'aaa.pdf', 'ditolak', 'foto_santri.jpg', '', '2021-12-17'),
('PENDAFTAR002', 'aaa', 'Pria', 'Banyumas', '2021-12-17', 10, 9, ' erererer er erer', 'erere erer e', 'ererer', '', 'rererer', 'ererer', '', 'erere ere ', 'selesai', 'e10adc3949ba59abbe56e057f20f883e', 'kksantri1639714712.jpeg', 'aktesantri1639713875.jpg', 'diterima', 'fotosantri1639712968.png', '', '2021-12-19'),
('PENDAFTAR003', 'Sutrisno', 'Pria', 'Banyumas', '2021-12-15', 1, 2, 'Desa Dawuhan wetan RT 03/01 Kec. Kedungbanteng Banyumas', 'ererererer', '34343', '', '3434', '3434', '', '34344', 'selesai', 'e10adc3949ba59abbe56e057f20f883e', 'kksantri1639901199.jpg', 'aktesantri1639901156.png', 'ditolak', 'fotosantri1639901120.jpg', '', '2021-12-19'),
('PENDAFTAR004', 'asal daftar', 'Wanita', 'assfaf', '2021-12-13', 10, 10, 'Desa Dawuhan wetan RT 03/01 Kec. Kedungbanteng Banyumas', 'ererer', 'reerer', '', 'erere', 'ererer', '', 'erererer', 'daftar', 'fcea920f7412b5da7be0cf42b8c93759', 'kksantri1640570132.jpg', 'aktesantri1640570144.jpg', 'lengkap', 'fotosantri1640570098.jpg', '', '0000-00-00'),
('PENDAFTAR005', 'SLAMET', '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', 'daftar', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', 'foto_santri.jpg', '', '0000-00-00'),
('PENDAFTAR006', 'Ttttyyyyy', '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', 'daftar', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', 'foto_santri.jpg', '', '0000-00-00'),
('PENDAFTAR007', 'SLAMET', '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', 'daftar', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', 'foto_santri.jpg', '', '0000-00-00'),
('PENDAFTAR008', 'walim', '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', 'daftar', 'a3c42e6ec622048d3eeb687ee26d2f73', '', '', '', 'foto_santri.jpg', '', '0000-00-00'),
('PENDAFTAR009', 'walim walim', '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', 'daftar', '894624193fc0a198e999f905e9f48ef1', '', '', '', 'foto_santri.jpg', '', '0000-00-00'),
('PENDAFTAR010', 'slamet riyadi', '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', 'daftar', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', 'foto_santri.jpg', '', '0000-00-00'),
('PENDAFTAR011', 'Sutrisno', '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', 'daftar', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', 'foto_santri.jpg', '', '0000-00-00'),
('PENDAFTAR012', 'Sutrisno OK', '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', 'daftar', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', 'foto_santri.jpg', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sejarah`
--

CREATE TABLE `tbl_sejarah` (
  `kd_sejarah` int(11) NOT NULL,
  `judul_sejarah` varchar(30) NOT NULL,
  `isi_sejarah` text NOT NULL,
  `gambar_sejarah` varchar(30) NOT NULL,
  `judul_gambar` varchar(20) NOT NULL,
  `kd_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sejarah`
--

INSERT INTO `tbl_sejarah` (`kd_sejarah`, `judul_sejarah`, `isi_sejarah`, `gambar_sejarah`, `judul_gambar`, `kd_admin`) VALUES
(1, 'Sejarah Pesentren', '<p>Sejarah berdirinya pondok Az-Zuhriyyah diawali dari ada seorang kyai yg bernama &nbsp;Abah seikh saiful anwar zuhdi rosyid, beliau berasal dari sokarajamempunyai sebuah keingininan untuk mengenang/napak tilas kakeknya yang dahulu pada massa penjajahan belanda pernah singgah di desa Suro. Selain itu Beliau juga ingin mewujudkan harapan masyarakat desa suro yaitu adanya pondo pesantren suatu saat nanti di desa suro akan dijadikan &nbsp;sebagai tempat menimba ilmu dan juga sebagai penjaga aqidah warga desa Suro dari upaya kristenisasi yang sedang gencar gencarnya saat itu, ternyata harapa warga suro sejalan dengang kenginan abah saiful anwar yang ingin napak tilas dengan membuat sesuatu yang bisa dikenang sepanjang masa,yaitu membangun pondok pesantren dan alhamdulillah dengan dibantu oleh santri santri beliau, pada tahun 2004 dimulailah peletakan batu pertama pembangunan masjid sekaligus asrama santri pondok yg nantinya diberi nama azuhriyyah, pembangunan berlangsung sampai &nbsp;pada tahun 2005. Kemudian pada bulan agustus 2005 di resmikanlah pondok azuhriyyah yang masih aktif sampai sekarang</p>\r\n', 'sejarah_1641305491.jpg', 'sejarah pesantren', 'ADM001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seleksi`
--

CREATE TABLE `tbl_seleksi` (
  `kd_seleksi` varchar(10) NOT NULL,
  `tgl_seleksi` date NOT NULL,
  `kd_pelamar` varchar(10) NOT NULL,
  `kd_lowongan` varchar(10) NOT NULL,
  `surat_lamaran` varchar(50) NOT NULL,
  `form_cv` varchar(10) NOT NULL,
  `fc_ktp` varchar(10) NOT NULL,
  `fc_kk` varchar(30) NOT NULL,
  `fc_sim` varchar(10) NOT NULL,
  `fc_ijazah` varchar(10) NOT NULL,
  `fc_skck` varchar(10) NOT NULL,
  `fc_suratketdokter` varchar(10) NOT NULL,
  `fc_vaksin2` varchar(10) NOT NULL,
  `fc_swab` varchar(10) NOT NULL,
  `fc_sertifikat` varchar(20) NOT NULL,
  `data_psikotes` varchar(20) NOT NULL,
  `kd_admin` varchar(20) NOT NULL,
  `ket_admin` enum('belum','tolak','terima') NOT NULL,
  `alasan_admin` varchar(30) NOT NULL,
  `tglseleksi_admin` date NOT NULL,
  `kd_hrd` varchar(20) NOT NULL,
  `ket_hrd` enum('belum','terima','tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_seleksi`
--

INSERT INTO `tbl_seleksi` (`kd_seleksi`, `tgl_seleksi`, `kd_pelamar`, `kd_lowongan`, `surat_lamaran`, `form_cv`, `fc_ktp`, `fc_kk`, `fc_sim`, `fc_ijazah`, `fc_skck`, `fc_suratketdokter`, `fc_vaksin2`, `fc_swab`, `fc_sertifikat`, `data_psikotes`, `kd_admin`, `ket_admin`, `alasan_admin`, `tglseleksi_admin`, `kd_hrd`, `ket_hrd`) VALUES
('SEL001', '2022-07-13', 'PEL001', 'BER003', 'suratlamaran_1657791961.png', 'cv_1657793', '', '', '', '', '', '', '', '', '', 'psikotest.pdf', '', 'belum', '', '0000-00-00', '', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `kd_slider` int(11) NOT NULL,
  `atas_slider` varchar(30) NOT NULL,
  `tengah_slider` varchar(20) NOT NULL,
  `bawah_slider` varchar(20) NOT NULL,
  `gambar_slider` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`kd_slider`, `atas_slider`, `tengah_slider`, `bawah_slider`, `gambar_slider`) VALUES
(1, 'AZZUHRIYYAH SURO', 'Tempat ', 'SANTRI BERKUALITAS', 'foto_slider_1641306253.jpg'),
(2, 'PERCAYAKAN MASA DEPAN', 'ANAK ', 'BERSAMA KAMI', 'foto_slider_1641306355.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_struktur`
--

CREATE TABLE `tbl_struktur` (
  `kd_struktur` int(11) NOT NULL,
  `judul_struktur` varchar(30) NOT NULL,
  `gambar_struktur` varchar(30) NOT NULL,
  `ket_struktur` varchar(50) NOT NULL,
  `kd_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_struktur`
--

INSERT INTO `tbl_struktur` (`kd_struktur`, `judul_struktur`, `gambar_struktur`, `ket_struktur`, `kd_admin`) VALUES
(1, 'Struktur Organisasi', 'adm_1641289019.jpg', '<p>Struktur Organisasi Ponpes Azzuhriyah Suro</p>\r', 'ADM001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tatacara`
--

CREATE TABLE `tbl_tatacara` (
  `kd_tatacara` int(5) NOT NULL,
  `judul_tatacara` varchar(30) NOT NULL,
  `isi_tatacara` text NOT NULL,
  `gambar_tatacara` varchar(20) NOT NULL,
  `kd_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tatacara`
--

INSERT INTO `tbl_tatacara` (`kd_tatacara`, `judul_tatacara`, `isi_tatacara`, `gambar_tatacara`, `kd_admin`) VALUES
(1, 'Tata Cara Pendaftaran', '<p>Tata Cara Mendaftar Santri sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li>343434</li>\r\n	<li>dffdfdfda</li>\r\n	<li>dfdfdfdf</li>\r\n	<li>dfdfdfdf</li>\r\n	<li>dfdfdfdf</li>\r\n	<li>dfdfdfdf</li>\r\n	<li>dfdfdfdfd</li>\r\n	<li>dfdfdf</li>\r\n	<li>dfdfdf</li>\r\n</ol>\r\n\r\n<p>Demikian tata cara pendaftarannya</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'adm_1643263665.png', 'ADM001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tentang`
--

CREATE TABLE `tbl_tentang` (
  `kd_tentang` int(5) NOT NULL,
  `judul_tentang` varchar(30) NOT NULL,
  `isi_tentang` text NOT NULL,
  `gambar_tentang` varchar(20) NOT NULL,
  `kd_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tentang`
--

INSERT INTO `tbl_tentang` (`kd_tentang`, `judul_tentang`, `isi_tentang`, `gambar_tentang`, `kd_admin`) VALUES
(1, 'Tentang Kami', '<p><strong>. Prosedur Pendaftaran :</strong> Mendatangi Kantor Pondok Pesantren Mengisi Biodata Santri Mengisi Surat Pernyataan Kesanggupan Menjadi Santri dan Mentaati peraturan tertulis/non tertulis Pondok Pesantren Membayar Biaya Administrasi Pendaftaran Sowan Ndalem Proses penempatan kamar dipandu oleh pengurus</p>\r\n\r\n<h2><strong>dflsafdaf ldsf aslfas faslfda f</strong></h2>\r\n\r\n<p><strong>dfdfdfdf df fd fdf ere ere er</strong></p>\r\n\r\n<p><strong>ererer ere e ere er ere </strong></p>\r\n\r\n<p><strong>erer er erer er</strong></p>\r\n', 'adm_1638173424.png', 'ADM001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `kd_type` varchar(10) NOT NULL,
  `nama_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visimisi`
--

CREATE TABLE `tbl_visimisi` (
  `kd_visimisi` int(11) NOT NULL,
  `judul_visimisi` varchar(30) NOT NULL,
  `isi_visimisi` text NOT NULL,
  `kd_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visimisi`
--

INSERT INTO `tbl_visimisi` (`kd_visimisi`, `judul_visimisi`, `isi_visimisi`, `kd_admin`) VALUES
(1, 'Visi Misi Kami', '<h2><strong>Visi&nbsp;</strong></h2>\r\n\r\n<ul>\r\n	<li>Membentuk pribadi luhur yang jujur berdasarkan ahlakul karimah dan nilai-nilai keagamaan.&nbsp;</li>\r\n	<li>Membentuk insan yang berilmu tinggi dan berwawasan luas</li>\r\n	<li>Mengembangkan potensi generasi muda islam menjadi insan berpendidikan</li>\r\n</ul>\r\n\r\n<h1><strong>Misi&nbsp;</strong></h1>\r\n\r\n<ul>\r\n	<li>Mengembangkan poensi intelegensi dan religi untuk membentuk intelektual muslim yang unggul dalam menciptakan, mengembangkan, serta memanfaatkan ilmu pengetahuan dan teknologi dengan dijiwai oleh ahlakul karimah sebagai wujud pengabdian kepada Allah SWT dan Rasulullah SAW</li>\r\n	<li>Mengembangkan kepribadian Rasulullah SAW dalam pendidikan sebagai proses terbentuknya cendekiawan muslim yang shidiq, amanah, fathonah, dan tabligh.</li>\r\n	<li>Memandu filosofi islam dan ilmu pengetahuan modern untuk daya nalar berpikir kritis, kreatif, dan inovatif terhadap perkembangan zaman.</li>\r\n	<li>Membangun kemakmuran umat melalui kemampuan penguasaan ilmu pengetahuan .</li>\r\n	<li>Pemandu generasi penerus untuk meraih kesempatan berkarya dan menepatkan diri dalam membangun kehidupan masyarakat dengan toleransi peduli dan berbudi luhur.</li>\r\n</ul>\r\n', 'ADM001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `tbl_asal`
--
ALTER TABLE `tbl_asal`
  ADD PRIMARY KEY (`kd_asal`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`kd_berita`);

--
-- Indexes for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  ADD PRIMARY KEY (`kd_bidang`);

--
-- Indexes for table `tbl_hrd`
--
ALTER TABLE `tbl_hrd`
  ADD PRIMARY KEY (`kd_hrd`);

--
-- Indexes for table `tbl_judul`
--
ALTER TABLE `tbl_judul`
  ADD PRIMARY KEY (`kd_judul`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`kd_kegiatan`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`kd_logo`);

--
-- Indexes for table `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  ADD PRIMARY KEY (`kd_lowongan`);

--
-- Indexes for table `tbl_pelamar`
--
ALTER TABLE `tbl_pelamar`
  ADD PRIMARY KEY (`kd_pelamar`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`kd_pendaftaran`);

--
-- Indexes for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
  ADD PRIMARY KEY (`kd_perush`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`kd_profile`);

--
-- Indexes for table `tbl_santri`
--
ALTER TABLE `tbl_santri`
  ADD PRIMARY KEY (`kd_santri`);

--
-- Indexes for table `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  ADD PRIMARY KEY (`kd_sejarah`);

--
-- Indexes for table `tbl_seleksi`
--
ALTER TABLE `tbl_seleksi`
  ADD PRIMARY KEY (`kd_seleksi`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`kd_slider`);

--
-- Indexes for table `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  ADD PRIMARY KEY (`kd_struktur`);

--
-- Indexes for table `tbl_tatacara`
--
ALTER TABLE `tbl_tatacara`
  ADD PRIMARY KEY (`kd_tatacara`);

--
-- Indexes for table `tbl_tentang`
--
ALTER TABLE `tbl_tentang`
  ADD PRIMARY KEY (`kd_tentang`);

--
-- Indexes for table `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  ADD PRIMARY KEY (`kd_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  MODIFY `kd_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_judul`
--
ALTER TABLE `tbl_judul`
  MODIFY `kd_judul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `kd_logo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
  MODIFY `kd_perush` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  MODIFY `kd_sejarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `kd_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  MODIFY `kd_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_tatacara`
--
ALTER TABLE `tbl_tatacara`
  MODIFY `kd_tatacara` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_tentang`
--
ALTER TABLE `tbl_tentang`
  MODIFY `kd_tentang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  MODIFY `kd_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
