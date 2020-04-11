-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 03:54 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkepolisiann`
--

-- --------------------------------------------------------

--
-- Table structure for table `kejahatan`
--

CREATE TABLE `kejahatan` (
  `id_kejahatan` varchar(20) NOT NULL,
  `Id_jeniskejahatan` varchar(20) NOT NULL,
  `nama_kejahatan` varchar(30) DEFAULT NULL,
  `keterangan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kejahatan`
--

INSERT INTO `kejahatan` (`id_kejahatan`, `Id_jeniskejahatan`, `nama_kejahatan`, `keterangan`) VALUES
('k1', 'jk1', 'curanmor', 'pencurian sepeda motor'),
('k2', 'jk1', 'pencurian', 'pencurian'),
('k3', 'jk1', 'pembunuhan berencana', 'pembunuhan yang dilakukan dengan pencernaan'),
('k4', 'jk1', 'pembunuhan disertai tindak pid', 'pembunuhan yang terjadi ketika telah melakuka'),
('k5', 'jk1', 'curas', 'pencurian disertai kekerasan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kejahatan`
--
ALTER TABLE `kejahatan`
  ADD PRIMARY KEY (`id_kejahatan`),
  ADD KEY `id_jeniskejahatan_idx` (`Id_jeniskejahatan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kejahatan`
--
ALTER TABLE `kejahatan`
  ADD CONSTRAINT `id_jeniskejahatan` FOREIGN KEY (`Id_jeniskejahatan`) REFERENCES `jenis_kejahatan` (`id_jeniskejahatan`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
