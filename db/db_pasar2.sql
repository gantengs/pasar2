-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 06:55 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pasar2`
--

-- --------------------------------------------------------

--
-- Table structure for table `harga_komoditi`
--

CREATE TABLE IF NOT EXISTS `harga_komoditi` (
  `id_catat` int(11) NOT NULL,
  `id_pasar` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `beras` int(11) NOT NULL DEFAULT '0',
  `teh` int(11) NOT NULL DEFAULT '0',
  `gula` int(11) NOT NULL DEFAULT '0',
  `kopi` int(11) NOT NULL DEFAULT '0',
  `cabai` varchar(50) DEFAULT NULL,
  `Minyak` varchar(50) DEFAULT NULL,
  `Telur` varchar(50) DEFAULT NULL,
  `Daging` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga_komoditi`
--

INSERT INTO `harga_komoditi` (`id_catat`, `id_pasar`, `tgl`, `beras`, `teh`, `gula`, `kopi`, `cabai`, `Minyak`, `Telur`, `Daging`) VALUES
(1, 3, '2018-03-07', 12000, 2000, 4500, 7000, NULL, NULL, NULL, NULL),
(2, 7, '2018-03-07', 90000, 12000, 8000, 12000, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_komoditi`
--

CREATE TABLE IF NOT EXISTS `jenis_komoditi` (
  `id_komoditi` int(11) NOT NULL,
  `komoditi` varchar(50) NOT NULL,
  `satuan` varchar(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_komoditi`
--

INSERT INTO `jenis_komoditi` (`id_komoditi`, `komoditi`, `satuan`, `gambar`) VALUES
(10, 'Cabai', 'kg', '44213-cabe merah keriting.jpg');

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
  `id_toko` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retribusi`
--

INSERT INTO `retribusi` (`id_retribusi`, `id_toko`, `tanggal`, `jumlah`) VALUES
(2, 1, '2018-03-08', '19000'),
(3, 1, '2018-03-10', '10000');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `id_pasar`, `id_usaha`, `nama_toko`, `nama_p`, `gambar`) VALUES
(1, 1, 15, 'Merdeka Maju Jaya', 'Wahyu Amin', ''),
(5, 6, 6, 'hsdjfgsduo', 'jhsoidfosid', '84949-cabe merah keriting.jpg');

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
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `nama_u` varchar(32) NOT NULL,
  `telp` varchar(20) NOT NULL DEFAULT '-',
  `alamat` text NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_pasar`, `email`, `password`, `level`, `nama_u`, `telp`, `alamat`, `foto`) VALUES
(1, 6, 'toni@gmail.com', '1', 'admin', 'Wahyu', '00833244498', 'purwodadi', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga_komoditi`
--
ALTER TABLE `harga_komoditi`
  ADD PRIMARY KEY (`id_catat`),
  ADD KEY `id_pasar` (`id_pasar`);

--
-- Indexes for table `jenis_komoditi`
--
ALTER TABLE `jenis_komoditi`
  ADD PRIMARY KEY (`id_komoditi`);

--
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id_pasar`);

--
-- Indexes for table `retribusi`
--
ALTER TABLE `retribusi`
  ADD PRIMARY KEY (`id_retribusi`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`),
  ADD KEY `id_pasar` (`id_pasar`),
  ADD KEY `id_usaha` (`id_usaha`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id_usaha`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_pasar` (`id_pasar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harga_komoditi`
--
ALTER TABLE `harga_komoditi`
  MODIFY `id_catat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenis_komoditi`
--
ALTER TABLE `jenis_komoditi`
  MODIFY `id_komoditi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pasar`
--
ALTER TABLE `pasar`
  MODIFY `id_pasar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `retribusi`
--
ALTER TABLE `retribusi`
  MODIFY `id_retribusi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
-- Constraints for table `harga_komoditi`
--
ALTER TABLE `harga_komoditi`
  ADD CONSTRAINT `harga_komoditi_ibfk_1` FOREIGN KEY (`id_pasar`) REFERENCES `pasar` (`id_pasar`);

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
