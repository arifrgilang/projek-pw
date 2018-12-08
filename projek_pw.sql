-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 08, 2018 at 10:04 PM
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('rz', 'argil');

-- --------------------------------------------------------

--
-- Table structure for table `harga_kertas`
--

CREATE TABLE `harga_kertas` (
  `hargaKertas` int(11) DEFAULT NULL,
  `kodeJenis` varchar(30) DEFAULT NULL,
  `kodeUkuran` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga_kertas`
--

INSERT INTO `harga_kertas` (`hargaKertas`, `kodeJenis`, `kodeUkuran`) VALUES
(60, 'jk_hvs', 'uk_a5'),
(80, 'jk_hssd', 'uk_a5'),
(110, 'jk_hvs', 'uk_a4'),
(150, 'jk_hssd', 'uk_a4'),
(60, 'jk_hvs', 'uk_b5'),
(80, 'jk_hssd', 'uk_b5'),
(110, 'jk_hvs', 'uk_b4'),
(150, 'jk_hssd', 'uk_b4');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_cover`
--

CREATE TABLE `jenis_cover` (
  `kodeCover` varchar(30) NOT NULL DEFAULT '',
  `jenisCover` varchar(255) DEFAULT NULL,
  `hargaCover` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_cover`
--

INSERT INTO `jenis_cover` (`kodeCover`, `jenisCover`, `hargaCover`) VALUES
('cov_01', 'Soft Cover', 5000),
('cov_02', 'Hard Cover', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kertas`
--

CREATE TABLE `jenis_kertas` (
  `kodeJenis` varchar(30) NOT NULL DEFAULT '',
  `namaJenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kertas`
--

INSERT INTO `jenis_kertas` (`kodeJenis`, `namaJenis`) VALUES
('jk_hssd', 'HSSD'),
('jk_hvs', 'HVS');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `kodeKurir` varchar(30) NOT NULL DEFAULT '',
  `namaKurir` varchar(255) DEFAULT NULL,
  `biayaKurir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`kodeKurir`, `namaKurir`, `biayaKurir`) VALUES
('k01', 'JNE', 8000),
('k02', 'Go-jek', 5000),
('k03', 'J&T', 6000),
('k04', 'Tiki', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `kodePesanan` int(11) NOT NULL,
  `namaPemesan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `notelp` varchar(30) NOT NULL,
  `linkBuktiBayar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`kodePesanan`, `namaPemesan`, `alamat`, `notelp`, `linkBuktiBayar`) VALUES
(2, 'Arif Rhizky Gilang', 'Jl Cibeunying Kolot No40\r\nKecamatan Coblong Kelurahan Sadang Serang', '083821666100', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `kodePesanan` varchar(30) NOT NULL,
  `kodeCover` varchar(30) NOT NULL,
  `kodeJenis` varchar(30) NOT NULL,
  `kodeUkuran` varchar(30) NOT NULL,
  `kodeKurir` varchar(30) NOT NULL,
  `jumlahHalaman` int(11) NOT NULL,
  `hargaTotal` int(11) NOT NULL,
  `statusPesanan` varchar(255) NOT NULL,
  `link_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `kodePesanan`, `kodeCover`, `kodeJenis`, `kodeUkuran`, `kodeKurir`, `jumlahHalaman`, `hargaTotal`, `statusPesanan`, `link_file`) VALUES
(2, '2', 'cov_01', 'jk_hvs', 'uk_a4', 'k02', 200, 32000, 'waitlist', 'arifrgilang.me');

-- --------------------------------------------------------

--
-- Table structure for table `ukuran_kertas`
--

CREATE TABLE `ukuran_kertas` (
  `kodeUkuran` varchar(30) NOT NULL DEFAULT '',
  `namaUkuran` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ukuran_kertas`
--

INSERT INTO `ukuran_kertas` (`kodeUkuran`, `namaUkuran`) VALUES
('uk_a4', 'A4'),
('uk_a5', 'A5'),
('uk_b4', 'B4'),
('uk_b5', 'B5');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukuran_kertas`
--
ALTER TABLE `ukuran_kertas`
  ADD PRIMARY KEY (`kodeUkuran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `kodePesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `harga_kertas`
--
ALTER TABLE `harga_kertas`
  ADD CONSTRAINT `harga_kertas_ibfk_1` FOREIGN KEY (`kodeJenis`) REFERENCES `jenis_kertas` (`kodeJenis`),
  ADD CONSTRAINT `harga_kertas_ibfk_2` FOREIGN KEY (`kodeUkuran`) REFERENCES `ukuran_kertas` (`kodeUkuran`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
