-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 01:21 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pasar1`
--

-- --------------------------------------------------------

--
-- Table structure for table `komoditi`
--

CREATE TABLE IF NOT EXISTS `komoditi` (
`id_catat` int(11) NOT NULL,
  `id_pasar` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `beras` int(11) NOT NULL DEFAULT '0',
  `teh` int(11) NOT NULL DEFAULT '0',
  `gula` int(11) NOT NULL DEFAULT '0',
  `kopi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE IF NOT EXISTS `pasar` (
`id_pasar` int(11) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `nama_pasar` varchar(30) NOT NULL,
  `telp` varchar(20) NOT NULL DEFAULT '-',
  `alamat` text NOT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasar`
--

INSERT INTO `pasar` (`id_pasar`, `lat`, `lng`, `nama_pasar`, `telp`, `alamat`, `gambar`) VALUES
(1, 0, 0, 'Pasar Kliwon', '0', '-', ''),
(2, 0, 0, 'Pasar Bitingan', '', 'Desa Ploso', ''),
(3, 0, 0, 'Pasar Jember', '', 'Desa Purwosari', ''),
(4, 0, 0, 'Pasar Wergu', '', 'Desa Wergu', ''),
(5, 0, 0, 'Pasar Taman Bojana', '', 'Desa Barongan', ''),
(6, 0, 0, 'Pasar Barongan', '', 'Desa Barongan', ''),
(7, 0, 0, 'Pasar Jekulo', '', 'Desa Jekulo', ''),
(8, 0, 0, 'Pasar Ngablak', '', 'Desa Tanjung Rejo', ''),
(9, 0, 0, 'Pasar Karang Bener', '', 'Desa Karang Bener', ''),
(10, 0, 0, 'Pasar Brayung', '', 'Desa Mejobo', ''),
(11, 0, 0, 'Pasar Doro', '', 'desa jepang', ''),
(12, 0, 0, 'Pasar Prapat', '', 'desa mejobo', ''),
(13, 0, 0, 'Pasar Ploso', '', 'desa ploso', ''),
(14, 0, 0, 'Pasar Langgar Dalem', '', 'desa langgar dalem', ''),
(15, 0, 0, 'Pasar Mijen', '', 'desa mijen', ''),
(16, 0, 0, 'Pasar Kedung Dowo', '', 'desa kedung dowo', ''),
(17, 0, 0, 'Pasar Ngemplak', '', 'jln Kudus Purwodadi', ''),
(18, 0, 0, 'Pasar Wates', '', 'jln Kudus Purwodadi', ''),
(19, 0, 0, 'Pasar Undaan Kidul', '', 'desa undaan kidul', ''),
(20, 0, 0, 'Pasar Kalirejo', '', 'desa kalirejo', ''),
(21, 0, 0, 'Pasar Piji', '', 'jln Kudus Colo', ''),
(22, 0, 0, 'Pasar Besito', '', 'desa besito', ''),
(23, 0, 0, 'Pasar Jurang', '', 'desa jurang', '');

-- --------------------------------------------------------

--
-- Table structure for table `retribusi`
--

CREATE TABLE IF NOT EXISTS `retribusi` (
`id_retribusi` int(11) NOT NULL,
  `id_pasar` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pendapatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE IF NOT EXISTS `toko` (
`id_toko` int(11) NOT NULL,
  `id_pasar` int(11) NOT NULL,
  `id_usaha` int(11) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `nama_p` varchar(50) NOT NULL,
  `gambar` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `id_pasar`, `id_usaha`, `nama_toko`, `nama_p`, `gambar`) VALUES
(1, 1, 15, 'Merdeka Maju Jaya', 'Wahyu Amin', '');

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE IF NOT EXISTS `usaha` (
`id_usaha` int(11) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`id_usaha`, `jenis_usaha`) VALUES
(1, 'Kelontong'),
(2, 'Buah-buahan'),
(3, 'Sembako'),
(4, 'Warung Makan'),
(5, 'Gerabah'),
(6, 'Aksesoris'),
(7, 'Kaca Mata'),
(8, 'Sepatu/Sandal'),
(9, 'Lain-lain'),
(10, 'Obat Pertanian'),
(11, 'Obat Kesehatan'),
(12, 'Perlengkapan Kecantikan'),
(13, 'Tambal Ban'),
(14, 'Emas'),
(15, 'Pakaian atau Sandang'),
(16, 'Tas'),
(17, 'Bumbu Dapur'),
(18, 'Sayuran'),
(19, 'Kain'),
(20, 'Plastik'),
(21, 'Roti / Snack / Jajan'),
(22, 'Konveksi'),
(23, 'Gilingan'),
(24, 'Bahan Bangunan'),
(25, 'Elektronik'),
(26, 'Ikan-ikan'),
(27, 'Daging'),
(28, 'Alat Listrik'),
(29, 'Konter HP'),
(30, 'Bunga / Kembang'),
(31, 'Cucian Motor Mobil'),
(32, 'Bank / Per Bank-an'),
(33, 'Cucian Lowndry Pakaian');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `id_pasar` int(11) NOT NULL,
  `nama_u` varchar(32) NOT NULL,
  `telp` varchar(20) NOT NULL DEFAULT '-',
  `alamat` text NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_pasar`, `nama_u`, `telp`, `alamat`, `foto`) VALUES
(1, 6, 'Wahyu', '00833244498', 'purwodadi', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komoditi`
--
ALTER TABLE `komoditi`
 ADD PRIMARY KEY (`id_catat`), ADD KEY `id_pasar` (`id_pasar`);

--
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
 ADD PRIMARY KEY (`id_pasar`);

--
-- Indexes for table `retribusi`
--
ALTER TABLE `retribusi`
 ADD PRIMARY KEY (`id_retribusi`), ADD UNIQUE KEY `id_pasar` (`id_pasar`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
 ADD PRIMARY KEY (`id_toko`), ADD KEY `id_pasar` (`id_pasar`), ADD KEY `id_usaha` (`id_usaha`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
 ADD PRIMARY KEY (`id_usaha`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD KEY `id_pasar` (`id_pasar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komoditi`
--
ALTER TABLE `komoditi`
MODIFY `id_catat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pasar`
--
ALTER TABLE `pasar`
MODIFY `id_pasar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `retribusi`
--
ALTER TABLE `retribusi`
MODIFY `id_retribusi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
MODIFY `id_usaha` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `komoditi`
--
ALTER TABLE `komoditi`
ADD CONSTRAINT `komoditi_ibfk_1` FOREIGN KEY (`id_pasar`) REFERENCES `pasar` (`id_pasar`);

--
-- Constraints for table `retribusi`
--
ALTER TABLE `retribusi`
ADD CONSTRAINT `retribusi_ibfk_1` FOREIGN KEY (`id_pasar`) REFERENCES `pasar` (`id_pasar`);

--
-- Constraints for table `toko`
--
ALTER TABLE `toko`
ADD CONSTRAINT `toko_ibfk_1` FOREIGN KEY (`id_pasar`) REFERENCES `pasar` (`id_pasar`),
ADD CONSTRAINT `toko_ibfk_2` FOREIGN KEY (`id_usaha`) REFERENCES `usaha` (`id_usaha`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_pasar`) REFERENCES `pasar` (`id_pasar`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
