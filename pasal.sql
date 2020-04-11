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
-- Table structure for table `pasal`
--

CREATE TABLE `pasal` (
  `id_pasal` varchar(20) NOT NULL,
  `pasal` varchar(50) NOT NULL,
  `isi_pasal` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasal`
--

INSERT INTO `pasal` (`id_pasal`, `pasal`, `isi_pasal`) VALUES
('P1', 'pasal 363(Curanmor)', 'Barangsiapa mengambil barang sesuatu, yang seluruhnya atau sebagian kepunyaan orang lain, dengan maksud untuk dimiliki secara melawan hukum, diancam karena pencurian, dengan pidana penjara paling lama lima tahun atau denda paling banyak enam puluh rupiah.'),
('P2', 'pasal 338(Pembunuhan)', 'Barangsiapa dengan sengaja merampas nyawa orang lain, diancam karena pembunuhan dengan pidana penjara paling lama lima belas tahun.'),
('P3', 'pasal 340(pembunuhan berencana)', 'Barang siapa sengaja dan dengan rencana lebih dahulu merampas nyawa orang lain, diancam dengan pidana mati atau pidana penjara seumur hidup atau selama waktu tertentu, paling lama 20 tahun'),
('P4', 'pasal 339(pembunuhan disertai tindakan pidana)', 'Pembunuhan yang diikuti, disertai atau didahului oleh suatu perbuatan pidana, yang dilakukan dengan maksud untuk mempersiapkan atau mempermudah pelaksanaannya, atau untuk melepaskan diri sendiri maupun peserta lainnya dari pidana dalam hal tertangkap tangan, ataupun untuk memastikan penguasaan barang yang diperolehnya secara melawan hukum, diancam dengan pidana penjara seumur hidup atau selama waktu tertentu, paling lama dua puluh tahun.'),
('P5', 'pasal 372(penggelapan)', 'Barang siapa dengan sengaja dan melawan hukum memiliki barang sesuatu yang seluruhnya atau sebagian adalah kepunyaan orang lain, tetapi yang ada dalam kekuasaannya bukan karena kejahatan diancam karena penggelapan, dengan pidana penjara paling lama empat tahun atau pidana denda paling banyak sembilan ratus rupiah'),
('P6', 'pasal 362(pencurian)', 'Barangsiapa mengambil barang sesuatu, yang seluruhnya atau sebagian kepunyaan orang lain, dengan maksud untuk dimiliki secara melawan hukum, diancam karena pencurian, dengan pidana penjara paling lama lima tahun atau denda paling banyak enam puluh rupiah'),
('P8', 'pasal 341(pembunuhan anak)', 'Seorang ibu yang karena takut akan ketahuan melahirkan anak pada saat anak dilahirkan atau tidak lama kemudian, dengan sengaja merampas nyawa anaknya, diancam karena membunuh anak sendiri, dengan pidana penjara paling lama tujuh tahun.'),
('P9', 'pasal 346(aborsi)', 'Seorang wanita yang sengaja menggugurkan atau mematikan kandungannya atau menyuruh orang lain untuk itu, diancam dengan pidana penjara paling lama empat tahun.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasal`
--
ALTER TABLE `pasal`
  ADD PRIMARY KEY (`id_pasal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
