-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 07:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitar_semula`
--
CREATE DATABASE IF NOT EXISTS `kitar_semula` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kitar_semula`;

-- --------------------------------------------------------

--
-- Table structure for table `item_kitar_semula`
--

DROP TABLE IF EXISTS `item_kitar_semula`;
CREATE TABLE IF NOT EXISTS `item_kitar_semula` (
  `idItem` varchar(20) NOT NULL,
  `namaItem` varchar(200) NOT NULL,
  `hargaPerKiloItem` double(10,2) NOT NULL DEFAULT 0.00,
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_kitar_semula`
--

INSERT INTO `item_kitar_semula` (`idItem`, `namaItem`, `hargaPerKiloItem`) VALUES
('A00001', 'Minyak Masak Terpakai', 49.48),
('B00001', 'Kertas Lama', 69.33),
('B00002', 'Surat Khabar Lama', 63.21),
('C00001', 'Plastik Terpakai', 84.34),
('D00001', 'Besi Buruk', 1.04);

-- --------------------------------------------------------

--
-- Table structure for table `log_pengguna`
--

DROP TABLE IF EXISTS `log_pengguna`;
CREATE TABLE IF NOT EXISTS `log_pengguna` (
  `id` varchar(255) NOT NULL,
  `idPengguna` int(20) NOT NULL,
  `aktiviti` text NOT NULL,
  `tarikh_aktiviti` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idPengguna` (`idPengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_pengguna`
--

INSERT INTO `log_pengguna` (`id`, `idPengguna`, `aktiviti`, `tarikh_aktiviti`) VALUES
('5c67516d51bfe4b07630d0cfb59b5f', 403, 'cicakgoreng telah menjual Besi Buruk seberat 2 kg dan menerima 2.08 point', '2020-08-11'),
('681271b4762628eef7a28ac39ea1bf', 403, 'cicakgoreng telah menjual Besi Buruk seberat 1 kg dan menerima 1.04 point', '2020-08-11'),
('7a84600cf45c0402073d4c46cf781d', 403, 'cicakgoreng telah menjual Plastik Terpakai seberat 2 kg dan menerima 168.68 point', '2020-08-11'),
('907b98ec22cae7f3a1a792c39e09c2', 403, 'cicakgoreng telah menjual Minyak Masak Terpakai seberat 99999999999999 kg dan menerima 4.948E+15 point', '2020-08-11'),
('e4eff6375c61444d28353c9d917069', 403, 'cicakgoreng telah menjual Plastik Terpakai seberat 12 kg dan menerima 1012.08 point', '2020-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nokp` varchar(20) NOT NULL,
  `status` enum('admin','pengguna') NOT NULL DEFAULT 'pengguna',
  `nama` varchar(255) NOT NULL,
  `katalaluan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` text DEFAULT NULL,
  `point` double(10,2) DEFAULT 0.00,
  PRIMARY KEY (`id`,`nokp`)
) ENGINE=InnoDB AUTO_INCREMENT=432 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nokp`, `status`, `nama`, `katalaluan`, `email`, `avatar`, `point`) VALUES
(403, '', 'admin', 'cicakgoreng', 'maskmerah', 'abcdefg@mail.com', NULL, 99999999.99),
(404, '', 'pengguna', 'admin', 'admin', 'abcdgefghi@mail.com', NULL, 0.00),
(405, '', 'pengguna', 'admin', 'admin', 'abcdgefghi@mail.com', NULL, 0.00),
(406, '', 'pengguna', 'admin', 'admin', 'abcdgefghi@mail.com', NULL, 0.00),
(407, '', 'pengguna', 'asdasd', 'asdad', 'asdasd@adsasda.cccc', NULL, 0.00),
(408, '', 'pengguna', 'asdasd', 'asda', 'asd@aeasd', NULL, 0.00),
(409, '', 'pengguna', 'asd', 'asd', 'asd@aeasd', NULL, 0.00),
(410, '', 'pengguna', '1231', '12313', '1213123@awes', NULL, 0.00),
(411, '', 'pengguna', '24rwe', '235235', '2313@4w', NULL, 0.00),
(412, '', 'pengguna', '1414', 'wqe2', '12314@qwe', NULL, 0.00),
(413, '', 'pengguna', '3123123', 'awe2', '123123@adasd', NULL, 0.00),
(414, '', 'pengguna', '3123123', '14125', '123123@adasd', NULL, 0.00),
(415, '', 'pengguna', '123', '123', '123123@adasd', NULL, 0.00),
(416, '', 'pengguna', 'asdasd', '124', '123123@adasd', NULL, 0.00),
(417, '', 'pengguna', 'johm', '2134', '123@as', NULL, 0.00),
(418, '', 'pengguna', 'asdasd', 'asdsa', '124@sfdf', NULL, 0.00),
(419, '', 'pengguna', '1', '1', '1@1', NULL, 0.00),
(420, '', 'pengguna', '123', '124', '123123@adasd', NULL, 0.00),
(421, '', 'pengguna', '123', '124', '123123@adasd', NULL, 0.00),
(422, '', 'pengguna', '123', '124', '123123@adasd', NULL, 0.00),
(423, '', 'pengguna', '123', '124', '123123@adasd', NULL, 0.00),
(424, '', 'pengguna', '123', '124', '123123@adasd', NULL, 0.00),
(425, '', 'pengguna', '123', '124', '123123@adasd', NULL, 0.00),
(426, '', 'pengguna', '123', '124', '123123@adasd', NULL, 0.00),
(427, '', 'pengguna', '123', '124', '123123@adasd', NULL, 0.00),
(428, '', 'pengguna', '123', '124', '123123@adasd', NULL, 0.00),
(429, '', 'pengguna', '123', '124', '123123@adasd', NULL, 0.00),
(430, '', 'pengguna', '123', '124', '123123@adasd', 'http://localhost/../assets/img/avatar/02b63978b804190edbfd605a024d69708687c089.png', 0.00),
(431, '', 'pengguna', '123', '123', '123123@adasd', 'http://localhost/assets/img/logo.png', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

DROP TABLE IF EXISTS `penjualan`;
CREATE TABLE IF NOT EXISTS `penjualan` (
  `id` varchar(32) NOT NULL,
  `idPengguna` int(20) NOT NULL,
  `idItem` varchar(32) NOT NULL,
  `berat` double(10,2) NOT NULL,
  `totalpoint` double(10,2) NOT NULL,
  `bukti` text DEFAULT NULL,
  `tarikh` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idPengguna` (`idPengguna`),
  KEY `idItem` (`idItem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `idPengguna`, `idItem`, `berat`, `totalpoint`, `bukti`, `tarikh`) VALUES
('28534a59a87c51b24b91cb5cbb047f', 403, 'C00001', 2.00, 168.68, 'http://localhost//assets/img/bukti/c330fab609ab22dc6495b406589cb24c31d041cae75f3bd280ddd82cff2835a5.jpg', '2020-08-11'),
('6d870378ebd6586f453abb97272caa', 403, 'A00001', 99999999.99, 99999999.99, 'http://localhost//assets/img/bukti/37d3e448e34206b81d52041cd20582fb79aed8d6aaef5f18e5ae3688ccbcb680.png', '2020-08-11'),
('71940c40694b1f12e7ffc4f3d1ff04', 403, 'D00001', 1.00, 1.04, 'http://localhost//assets/img/bukti/68fa81aa24bcecf492d04a621850ba14c9b173eba9ffbd4c4eaeb1539644ab89.jpg', '2020-08-11'),
('993e5c846b7f9f7d757d5d8b5c3413', 403, 'C00001', 12.00, 1012.08, 'http://localhost//assets/img/bukti/3cccc2470b5aed1b309f13606765dc11869012205c9271493e6059bd5bba6d03.png', '2020-08-11'),
('f1e9bc3e98425baad7693d55b5c43e', 403, 'D00001', 2.00, 2.08, 'http://localhost//assets/img/bukti/692815a48f8c9fa4753de401b7e1e45b676be888d9c15f578cf1a85c0b395a26.jpg', '2020-08-11');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_pengguna`
--
ALTER TABLE `log_pengguna`
  ADD CONSTRAINT `log_pengguna_ibfk_1` FOREIGN KEY (`idPengguna`) REFERENCES `pengguna` (`id`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`idPengguna`) REFERENCES `pengguna` (`id`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`idItem`) REFERENCES `item_kitar_semula` (`idItem`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
