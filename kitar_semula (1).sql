-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 11:49 PM
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
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nokp` varchar(20) NOT NULL,
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

INSERT INTO `pengguna` (`id`, `nokp`, `nama`, `katalaluan`, `email`, `avatar`, `point`) VALUES
(403, '', 'cicakgoreng', 'maskmerah', 'abcdefg@mail.com', NULL, 0.00),
(404, '', 'admin', 'admin', 'abcdgefghi@mail.com', NULL, 0.00),
(405, '', 'admin', 'admin', 'abcdgefghi@mail.com', NULL, 0.00),
(406, '', 'admin', 'admin', 'abcdgefghi@mail.com', NULL, 0.00),
(407, '', 'asdasd', 'asdad', 'asdasd@adsasda.cccc', NULL, 0.00),
(408, '', 'asdasd', 'asda', 'asd@aeasd', NULL, 0.00),
(409, '', 'asd', 'asd', 'asd@aeasd', NULL, 0.00),
(410, '', '1231', '12313', '1213123@awes', NULL, 0.00),
(411, '', '24rwe', '235235', '2313@4w', NULL, 0.00),
(412, '', '1414', 'wqe2', '12314@qwe', NULL, 0.00),
(413, '', '3123123', 'awe2', '123123@adasd', NULL, 0.00),
(414, '', '3123123', '14125', '123123@adasd', NULL, 0.00),
(415, '', '123', '123', '123123@adasd', NULL, 0.00),
(416, '', 'asdasd', '124', '123123@adasd', NULL, 0.00),
(417, '', 'johm', '2134', '123@as', NULL, 0.00),
(418, '', 'asdasd', 'asdsa', '124@sfdf', NULL, 0.00),
(419, '', '1', '1', '1@1', NULL, 0.00),
(420, '', '123', '124', '123123@adasd', NULL, 0.00),
(421, '', '123', '124', '123123@adasd', NULL, 0.00),
(422, '', '123', '124', '123123@adasd', NULL, 0.00),
(423, '', '123', '124', '123123@adasd', NULL, 0.00),
(424, '', '123', '124', '123123@adasd', NULL, 0.00),
(425, '', '123', '124', '123123@adasd', NULL, 0.00),
(426, '', '123', '124', '123123@adasd', NULL, 0.00),
(427, '', '123', '124', '123123@adasd', NULL, 0.00),
(428, '', '123', '124', '123123@adasd', NULL, 0.00),
(429, '', '123', '124', '123123@adasd', NULL, 0.00),
(430, '', '123', '124', '123123@adasd', 'http://localhost/../assets/img/avatar/02b63978b804190edbfd605a024d69708687c089.png', 0.00),
(431, '', '123', '123', '123123@adasd', 'http://localhost/assets/img/logo.png', 0.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
