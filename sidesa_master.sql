-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2022 at 05:11 AM
-- Server version: 10.5.4-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidesa_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(25) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gambar` text NOT NULL,
  `last_login` date DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `fullname`, `username`, `password`, `gambar`, `last_login`) VALUES
(3, 'Mimin', 'admin', '$2y$10$2TNd8g0sfvpLKYGBscV9KeJfcEjgYMVnVcp/.KJgsxs4RyxbsfguS', '1.jpg', '2022-04-23'),
(6, 'IBNU', 'ibnu', '$2y$10$5W8tPq2HzF0rY8U9wAFY..0DV0iu73eIePuyweCbsHb7BInjTCfNu', 'pp.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

DROP TABLE IF EXISTS `aspirasi`;
CREATE TABLE IF NOT EXISTS `aspirasi` (
  `id_aspirasi` int(11) NOT NULL AUTO_INCREMENT,
  `NIK` varchar(16) NOT NULL,
  `isi_aspirasi` text NOT NULL,
  `tgl_kirim` date NOT NULL,
  PRIMARY KEY (`id_aspirasi`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aspirasi`
--

INSERT INTO `aspirasi` (`id_aspirasi`, `NIK`, `isi_aspirasi`, `tgl_kirim`) VALUES
(1, '1111111111111111', 'asdasdjasdjalsdjas', '2022-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `jdl_berita` varchar(200) NOT NULL,
  `isi_berita` text NOT NULL,
  `thumbnail_berita` text NOT NULL,
  `jenis_berita` varchar(25) NOT NULL,
  `tgl_upload` date NOT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `jdl_berita`, `isi_berita`, `thumbnail_berita`, `jenis_berita`, `tgl_upload`, `id_admin`) VALUES
(1, 'Contoh Berita EDIT', '<p>Contoh isi berita .....</p>', 'course2-img.jpg', 'pengumuman', '2022-04-18', 3),
(2, 'test berita', '<p>Test Berita ........</p>', 'gallery-img12.jpg', 'pengumuman', '2022-04-17', 3),
(3, 'test test judul berita', 'Test TEst ISI BERITA', 'course3-img.jpg', 'pengumuman', '2022-04-17', 3),
(4, 'Test Judul Berita', '<ul><li>Test Isi Berita</li><li>Test Isi Berita</li><li>Test Isi Berita</li><li>Test Isi Berita</li><li>Test Isi Berita</li></ul>', 'events.jpg', 'pengumuman', '2022-04-18', 3),
(5, 'test test judul berita', '<ol><li>TEST JUDUL BERITA</li><li>TEST JUDUL BERITA</li><li>TEST JUDUL BERITA</li></ol><hr><ol><li>TEST JUDUL BERITA</li></ol>', 'travel-img.jpg', 'pengumuman', '2022-04-18', 3);

-- --------------------------------------------------------

--
-- Table structure for table `detail_keluarga`
--

DROP TABLE IF EXISTS `detail_keluarga`;
CREATE TABLE IF NOT EXISTS `detail_keluarga` (
  `id_detail_keluarga` int(11) NOT NULL AUTO_INCREMENT,
  `id_keluarga` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `status_perkawinan` varchar(25) NOT NULL,
  `status_hubungan_dalam_keluarga` varchar(25) NOT NULL,
  `kewarganegaraan` varchar(3) NOT NULL,
  `dokumen_imigrasi` varchar(50) NOT NULL,
  `nama_bapak` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  PRIMARY KEY (`id_detail_keluarga`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

DROP TABLE IF EXISTS `dusun`;
CREATE TABLE IF NOT EXISTS `dusun` (
  `id_dusun` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dusun` varchar(30) NOT NULL,
  `nik_kepala_dusun` varchar(16) NOT NULL,
  `nama_kepala_dusun` varchar(50) NOT NULL,
  `rw` int(3) NOT NULL,
  `rt` int(3) NOT NULL,
  PRIMARY KEY (`id_dusun`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

DROP TABLE IF EXISTS `keluarga`;
CREATE TABLE IF NOT EXISTS `keluarga` (
  `id_keluarga` int(11) NOT NULL AUTO_INCREMENT,
  `no_kk` varchar(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` varchar(2) NOT NULL,
  `rw` varchar(2) NOT NULL,
  `desa_kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kabupaten_kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `tanggal_dikeluarkan` date NOT NULL,
  PRIMARY KEY (`id_keluarga`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keunggulan_desa`
--

DROP TABLE IF EXISTS `keunggulan_desa`;
CREATE TABLE IF NOT EXISTS `keunggulan_desa` (
  `id_keunggulan` int(5) NOT NULL AUTO_INCREMENT,
  `judul_keunggulan` varchar(30) NOT NULL,
  `isi_keunggulan` text NOT NULL,
  `gambar` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `jenis_keunggulan` varchar(30) NOT NULL,
  `id_admin` int(5) NOT NULL,
  PRIMARY KEY (`id_keunggulan`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keunggulan_desa`
--

INSERT INTO `keunggulan_desa` (`id_keunggulan`, `judul_keunggulan`, `isi_keunggulan`, `gambar`, `tgl_upload`, `jenis_keunggulan`, `id_admin`) VALUES
(1, 'Test Edit Judul', '<p><font color=\"#ff0000\" style=\"background-color: rgb(255, 156, 0);\">CONTOH</font> <b>ISI</b> <u>KEUNGGULAN</u></p>', 'WhatsApp Image 2021-11-17 at 21.37.07.jpeg', '2022-04-11', 'pertanian', 3),
(3, 'Test Judul', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br></p>', 'course1-img.jpg', '2022-04-19', 'pertanian', 3);

-- --------------------------------------------------------

--
-- Table structure for table `log_surat`
--

DROP TABLE IF EXISTS `log_surat`;
CREATE TABLE IF NOT EXISTS `log_surat` (
  `id_log_surat` int(11) NOT NULL AUTO_INCREMENT,
  `id_surat` int(11) NOT NULL,
  `no_surat` int(3) UNSIGNED ZEROFILL NOT NULL,
  `nik_penduduk` varchar(16) NOT NULL,
  `status_pengambilan` varchar(25) NOT NULL DEFAULT 'Belum Diambil',
  PRIMARY KEY (`id_log_surat`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_surat`
--

INSERT INTO `log_surat` (`id_log_surat`, `id_surat`, `no_surat`, `nik_penduduk`, `status_pengambilan`) VALUES
(1, 1, 001, '1111111111111111', 'Sudah Diambil');

-- --------------------------------------------------------

--
-- Table structure for table `pemerintah_desa`
--

DROP TABLE IF EXISTS `pemerintah_desa`;
CREATE TABLE IF NOT EXISTS `pemerintah_desa` (
  `id_pemerintah_desa` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_upload` date DEFAULT NULL,
  `isi_pemerintah_desa` text DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pemerintah_desa`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemerintah_desa`
--

INSERT INTO `pemerintah_desa` (`id_pemerintah_desa`, `tgl_upload`, `isi_pemerintah_desa`, `id_admin`) VALUES
(1, '2022-04-17', '<p>Halaman ini berisi struktur Pemerintahan Desa</p>', 3);

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

DROP TABLE IF EXISTS `penduduk`;
CREATE TABLE IF NOT EXISTS `penduduk` (
  `id_penduduk` int(11) NOT NULL AUTO_INCREMENT,
  `NIK` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `goldar` varchar(3) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `status_pernikahan` varchar(25) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(3) NOT NULL,
  `no_kk` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id_penduduk`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `NIK`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `goldar`, `alamat`, `rt`, `rw`, `dusun`, `agama`, `status_pernikahan`, `pekerjaan`, `kewarganegaraan`, `no_kk`) VALUES
(1, '1111111111111111', 'Mimin', 'Ujung Pandang', '1999-03-11', 'Laki-laki', 'B+', 'Test', '003', '004', '', 'Islam', 'Kawin', 'BELUM/TIDAK BEKERJA', 'WNI', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peta_desa`
--

DROP TABLE IF EXISTS `peta_desa`;
CREATE TABLE IF NOT EXISTS `peta_desa` (
  `id_peta` int(5) NOT NULL AUTO_INCREMENT,
  `keterangan` text DEFAULT NULL,
  `url` longtext DEFAULT NULL,
  PRIMARY KEY (`id_peta`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peta_desa`
--

INSERT INTO `peta_desa` (`id_peta`, `keterangan`, `url`) VALUES
(1, 'Peta Desa Nggele', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7975.839859995145!2d124.36849818370428!3d-1.767547322711609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d82987b0ac8699f%3A0xc337d3c98dbf17b!2sKantor%20Desa%20Nggele!5e0!3m2!1sid!2sid!4v1649136666584!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `profile_desa`
--

DROP TABLE IF EXISTS `profile_desa`;
CREATE TABLE IF NOT EXISTS `profile_desa` (
  `id_profile` int(5) NOT NULL AUTO_INCREMENT,
  `tgl_upload` date DEFAULT NULL,
  `isi_profile` text DEFAULT NULL,
  `kontak` varchar(50) DEFAULT NULL,
  `alamat_kantor` varchar(100) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `id_admin` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_profile`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_desa`
--

INSERT INTO `profile_desa` (`id_profile`, `tgl_upload`, `isi_profile`, `kontak`, `alamat_kantor`, `gambar`, `email`, `id_admin`) VALUES
(1, '2022-04-17', '<p><span style=\"font-family: &quot;Mercury SSm A&quot;, &quot;Mercury SSm B&quot;, Georgia, Times, &quot;Times New Roman&quot;, &quot;Microsoft YaHei New&quot;, &quot;Microsoft Yahei&quot;, ????, ??, SimSun, STXihei, ????, serif; font-size: 26px;\"><font color=\"#000000\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</font></span><br></p>', '08123456789', 'Jl Muslimah Desa Nggele', '800px-LOGO_KABUPATEN_PULAU_TALIABU.png', 'desanggele0@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_desa`
--

DROP TABLE IF EXISTS `sejarah_desa`;
CREATE TABLE IF NOT EXISTS `sejarah_desa` (
  `id_sejarah` int(5) NOT NULL AUTO_INCREMENT,
  `tgl_upload` date DEFAULT NULL,
  `isi_sejarah` text DEFAULT NULL,
  `id_admin` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_sejarah`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sejarah_desa`
--

INSERT INTO `sejarah_desa` (`id_sejarah`, `tgl_upload`, `isi_sejarah`, `id_admin`) VALUES
(1, '2022-04-10', '<p><span style=\"background-color: rgb(0, 255, 0);\">test</span> <b>edit</b></p>', 3);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` text NOT NULL,
  `tgl_upload` date NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar`, `tgl_upload`) VALUES
(7, 'page-banner3.jpg', '2022-04-17'),
(6, 'page-banner2.jpg', '2022-04-17'),
(5, 'page-banner.jpg', '2022-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

DROP TABLE IF EXISTS `surat`;
CREATE TABLE IF NOT EXISTS `surat` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `kode_surat` varchar(50) NOT NULL,
  `nama_surat` varchar(50) NOT NULL,
  `file_temp_surat` text NOT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `kode_surat`, `nama_surat`, `file_temp_surat`) VALUES
(1, '01', 'Surat Keterangan Tidak Mampu', 'template-surat-ket-tidak-mampu.rtf');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

DROP TABLE IF EXISTS `visi_misi`;
CREATE TABLE IF NOT EXISTS `visi_misi` (
  `id_visi_misi` int(5) NOT NULL AUTO_INCREMENT,
  `tgl_upload` date DEFAULT NULL,
  `isi_visi_misi` text DEFAULT NULL,
  `id_admin` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_visi_misi`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id_visi_misi`, `tgl_upload`, `isi_visi_misi`, `id_admin`) VALUES
(1, '2022-04-19', '<p>Halaman ini berisi Visi &amp; Misi Desa</p>', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
