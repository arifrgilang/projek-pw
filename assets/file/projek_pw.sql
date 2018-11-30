-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2018 at 12:48 PM
-- Server version: 10.0.36-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.2.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `harga_kertas`
--

CREATE TABLE `harga_kertas` (
  `hargaKertas` int(11) DEFAULT NULL,
  `kodeJenis` varchar(30) DEFAULT NULL,
  `kodeUkuran` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_cover`
--

CREATE TABLE `jenis_cover` (
  `kodeCover` varchar(30) NOT NULL DEFAULT '',
  `jenisCover` varchar(255) DEFAULT NULL,
  `hargaCover` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kertas`
--

CREATE TABLE `jenis_kertas` (
  `kodeJenis` varchar(30) NOT NULL DEFAULT '',
  `namaJenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `kodeKurir` varchar(30) NOT NULL DEFAULT '',
  `namaKurir` varchar(255) DEFAULT NULL,
  `biayaKurir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `kodePesanan` varchar(30) NOT NULL DEFAULT '',
  `namaPemesan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `linkBuktiBayar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `kodePesanan` varchar(30) DEFAULT NULL,
  `kodeCover` varchar(30) DEFAULT NULL,
  `kodeJenis` varchar(30) DEFAULT NULL,
  `kodeUkuran` varchar(30) DEFAULT NULL,
  `kodeKurir` varchar(30) DEFAULT NULL,
  `jumlahHalaman` int(11) DEFAULT NULL,
  `hargaTotal` int(11) DEFAULT NULL,
  `statusPesanan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ukuran_kertas`
--

CREATE TABLE `ukuran_kertas` (
  `kodeUkuran` varchar(30) NOT NULL DEFAULT '',
  `namaUkuran` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga_kertas`
--
ALTER TABLE `harga_kertas`
  ADD KEY `kodeJenis` (`kodeJenis`),
  ADD KEY `kodeUkuran` (`kodeUkuran`);

--
-- Indexes for table `jenis_cover`
--
ALTER TABLE `jenis_cover`
  ADD PRIMARY KEY (`kodeCover`);

--
-- Indexes for table `jenis_kertas`
--
ALTER TABLE `jenis_kertas`
  ADD PRIMARY KEY (`kodeJenis`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`kodeKurir`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`kodePesanan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD KEY `kodePesanan` (`kodePesanan`),
  ADD KEY `kodeCover` (`kodeCover`),
  ADD KEY `kodeJenis` (`kodeJenis`),
  ADD KEY `kodeUkuran` (`kodeUkuran`),
  ADD KEY `kodeKurir` (`kodeKurir`);

--
-- Indexes for table `ukuran_kertas`
--
ALTER TABLE `ukuran_kertas`
  ADD PRIMARY KEY (`kodeUkuran`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `harga_kertas`
--
ALTER TABLE `harga_kertas`
  ADD CONSTRAINT `harga_kertas_ibfk_1` FOREIGN KEY (`kodeJenis`) REFERENCES `jenis_kertas` (`kodeJenis`),
  ADD CONSTRAINT `harga_kertas_ibfk_2` FOREIGN KEY (`kodeUkuran`) REFERENCES `ukuran_kertas` (`kodeUkuran`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`kodePesanan`) REFERENCES `pemesan` (`kodePesanan`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`kodeCover`) REFERENCES `jenis_cover` (`kodeCover`),
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`kodeJenis`) REFERENCES `jenis_kertas` (`kodeJenis`),
  ADD CONSTRAINT `pesanan_ibfk_4` FOREIGN KEY (`kodeUkuran`) REFERENCES `ukuran_kertas` (`kodeUkuran`),
  ADD CONSTRAINT `pesanan_ibfk_5` FOREIGN KEY (`kodeKurir`) REFERENCES `kurir` (`kodeKurir`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
