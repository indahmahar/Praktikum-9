-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 02:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesertadidik`
--

CREATE TABLE `pesertadidik` (
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` varchar(100) NOT NULL,
  `nisn` int(30) NOT NULL,
  `nik` int(30) NOT NULL,
  `tempatlahir` varchar(40) NOT NULL,
  `tanggallahir` date NOT NULL,
  `noregis` int(30) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kwn` varchar(20) NOT NULL,
  `khusus` varchar(40) NOT NULL,
  `alamatjalan` varchar(50) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `namadusun` varchar(40) NOT NULL,
  `namakelurahan` varchar(40) NOT NULL,
  `namakecamatan` varchar(40) NOT NULL,
  `kodepos` int(10) NOT NULL,
  `lintang` varchar(40) NOT NULL,
  `bujur` varchar(40) NOT NULL,
  `ttinggal` varchar(50) NOT NULL,
  `mtrans` varchar(20) NOT NULL,
  `nokks` int(30) NOT NULL,
  `anak` varchar(10) NOT NULL,
  `penerima` varchar(5) NOT NULL,
  `nokps` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesertadidik`
--

INSERT INTO `pesertadidik` (`nama`, `jeniskelamin`, `nisn`, `nik`, `tempatlahir`, `tanggallahir`, `noregis`, `agama`, `kwn`, `khusus`, `alamatjalan`, `rt`, `rw`, `namadusun`, `namakelurahan`, `namakecamatan`, `kodepos`, `lintang`, `bujur`, `ttinggal`, `mtrans`, `nokks`, `anak`, `penerima`, `nokps`) VALUES
('Indah Maharani', 'Perempuan', 1234567, 35151702, 'Jember', '2001-03-03', 1321313, 'islam', 'Indonesia', 'Tidak', 'jl.tambak cemandi', '07', '02', 'Gisik Kidul', 'Tambak Cemandi', 'Sedati', 61253, 'Selatan', 'Barat', 'Rumah ortu', 'Motor', 1, '1', 'Tidak', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
