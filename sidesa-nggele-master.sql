-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 01, 2022 at 06:35 AM
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
-- Database: `sidesa-nggele-master`
--

-- --------------------------------------------------------

--
-- Table structure for table `keunggulan_desa`
--

DROP TABLE IF EXISTS `keunggulan_desa`;
CREATE TABLE IF NOT EXISTS `keunggulan_desa` (
  `id_keunggulan` int(5) NOT NULL AUTO_INCREMENT,
  `judul_keunggulan` varchar(30) NOT NULL,
  `isi_keunggulan` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `jenis_keunggulan` varchar(30) NOT NULL,
  `id_admin` int(5) NOT NULL,
  PRIMARY KEY (`id_keunggulan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peta_desa`
--

DROP TABLE IF EXISTS `peta_desa`;
CREATE TABLE IF NOT EXISTS `peta_desa` (
  `id_peta` int(5) NOT NULL AUTO_INCREMENT,
  `keterangan` text NOT NULL,
  `polygon` longtext NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  PRIMARY KEY (`id_peta`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile_desa`
--

DROP TABLE IF EXISTS `profile_desa`;
CREATE TABLE IF NOT EXISTS `profile_desa` (
  `id_profile` int(5) NOT NULL AUTO_INCREMENT,
  `tgl_upload` date NOT NULL,
  `isi_profile` text NOT NULL,
  `id_admin` int(5) NOT NULL,
  PRIMARY KEY (`id_profile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_desa`
--

DROP TABLE IF EXISTS `sejarah_desa`;
CREATE TABLE IF NOT EXISTS `sejarah_desa` (
  `id_sejarah` int(5) NOT NULL AUTO_INCREMENT,
  `tgl_upload` date NOT NULL,
  `isi_sejarah` text NOT NULL,
  `id_admin` int(5) NOT NULL,
  PRIMARY KEY (`id_sejarah`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

DROP TABLE IF EXISTS `visi_misi`;
CREATE TABLE IF NOT EXISTS `visi_misi` (
  `id_visi_misi` int(5) NOT NULL AUTO_INCREMENT,
  `tgl_upload` date NOT NULL,
  `isi_visi_misi` text NOT NULL,
  `id_admin` int(5) NOT NULL,
  PRIMARY KEY (`id_visi_misi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
