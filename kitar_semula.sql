-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 03:24 PM
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
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(20) NOT NULL,
  `nokp` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `katalaluan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `point` double(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nokp`, `nama`, `katalaluan`, `email`, `point`) VALUES
(403, '', 'cicakgoreng', 'maskmerah', 'abcdefg@mail.com', 0.00),
(404, '', 'admin', 'admin', 'abcdgefghi@mail.com', 0.00),
(405, '', 'admin', 'admin', 'abcdgefghi@mail.com', 0.00),
(406, '', 'admin', 'admin', 'abcdgefghi@mail.com', 0.00),
(407, '', 'asdasd', 'asdad', 'asdasd@adsasda.cccc', 0.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`,`nokp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=408;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
