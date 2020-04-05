-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2020 pada 19.07
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkepolisian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpenduduk`
--

CREATE TABLE `detailpenduduk` (
  `nik` varchar(20) NOT NULL,
  `no_lapkejadian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detailpenduduk`
--

INSERT INTO `detailpenduduk` (`nik`, `no_lapkejadian`) VALUES
('155115', ' 1'),
('4324c', ' 44444'),
('4324c1', ' 444441'),
('4324c13', ' 4444413'),
('1483290137', ' 8908920'),
('6666473', ' 8908920'),
('777383', ' 8908920'),
('78978', ' 8908920'),
('9090', ' 898989'),
('2189', ' 980789'),
('21891', ' 980789'),
('8', ' 980789'),
('9230122', ' 980789'),
('ewq ew', ' 980789'),
('13756721836', ' K001'),
('1375679756', ' K001'),
('13782937822', ' K002'),
('137892371', ' K002'),
('13750000001', ' K003'),
('13752819331', ' K003'),
('137511111111', ' K004'),
('137511111112', ' K005'),
('13752828287', ' K005'),
('13756666667', ' K005'),
('1375829137', ' K005'),
('13757272722', ' K006'),
('137590999', ' K006'),
('13759829301', ' K006'),
('1378934823', ' K006'),
('78291', ' y32u1i');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailstatus`
--

CREATE TABLE `detailstatus` (
  `id_detail` int(11) NOT NULL,
  `id_status` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `kali-ke` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detailstatus`
--

INSERT INTO `detailstatus` (`id_detail`, `id_status`, `nik`, `kali-ke`) VALUES
(1, 'S01', '137892371', '6'),
(2, 'S01', '00000', '2'),
(3, 'S01', '11', '11'),
(4, 'S03', '2', ''),
(5, 'S01', '121', '21'),
(6, 'S01', '3', '3'),
(7, 'S01', '9090', '2'),
(8, 'S01', '4324c', '4'),
(9, 'S01', '4324c1', '411'),
(10, 'S01', '4324c13', '4113'),
(11, 'S01', '9230122', '09218'),
(12, 'S03', 'ewq ew', ''),
(13, 'S01', '8', '28'),
(14, 'S01', '2189', '1289'),
(15, 'S01', '21891', '12891'),
(16, 'S01', '', ''),
(17, 'S01', '1483290137', '1'),
(18, 'S01', '78978', '1'),
(19, 'S01', '777383', '9'),
(20, 'S03', '6666473', '980'),
(21, 'S01', '13759829301', '1'),
(22, 'S03', '137590999', '1'),
(23, 'S03', '1378934823', '9'),
(24, 'S01', '13757272722', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_kejahatan`
--

CREATE TABLE `detail_kejahatan` (
  `id_kejahatan` varchar(20) NOT NULL,
  `no_lapkejadian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pasal`
--

CREATE TABLE `detail_pasal` (
  `id_pasal` varchar(20) NOT NULL,
  `id_kejahatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penyidik`
--

CREATE TABLE `detail_penyidik` (
  `nrp` varchar(20) NOT NULL,
  `no_lapkejadian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_penyidik`
--

INSERT INTO `detail_penyidik` (`nrp`, `no_lapkejadian`) VALUES
('80083192', ' 1'),
('80083192', ' K002'),
('80083192', ' K005'),
('80083192', ' K006');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kejahatan`
--

CREATE TABLE `jenis_kejahatan` (
  `id_jeniskejahatan` varchar(20) NOT NULL,
  `jenis_kejahatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` varchar(11) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `polygon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kejahatan`
--

CREATE TABLE `kejahatan` (
  `id_kejahatan` varchar(20) NOT NULL,
  `id_jeniskejahatan` varchar(20) NOT NULL,
  `nama_kejahatan` varchar(30) NOT NULL,
  `ketarangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `no_lapkejadian` varchar(11) NOT NULL,
  `tempat_kejadian` text NOT NULL,
  `tgl_kejadian` date NOT NULL,
  `penanganan` text NOT NULL,
  `status_kejadian` text NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`no_lapkejadian`, `tempat_kejadian`, `tgl_kejadian`, `penanganan`, `status_kejadian`, `latitude`, `longitude`) VALUES
(' ', '', '0000-00-00', '', '', '', ''),
(' 1', '', '0000-00-00', '', 'Please Select', '', ''),
(' 44444 ', '', '0000-00-00', '', 'Please Select', '', ''),
(' 444441 ', '', '0000-00-00', '', 'Please Select', '', ''),
(' 4444413 ', '', '0000-00-00', '', 'Please Select', '', ''),
(' 8908920', '', '0000-00-00', '', 'Please Select', '', ''),
(' 898989 ', '', '2020-04-17', '', 'Please Select', '', ''),
(' 980789', '', '0000-00-00', '', 'Please Select', '', ''),
(' K001', 'Padang', '2020-03-22', 'Belum ada', 'Kasus On Progress', '-0.9479292541203994', '100.40427812886011'),
(' K002', 'Padang', '2020-03-17', '-', 'Kasus On Progress', '-0.9775520946244709', '100.40205527696169'),
(' K003', 'Pdg', '2020-03-19', 'Belum ada', 'Kasus On Progress', '-0.9466838545514248', '100.41675945655805'),
(' K004', 'Pdg', '2020-03-28', 'Belum ada', 'Kasus On Progress', '-0.9492184116634965', '100.4139158394549'),
(' K005', 'Pdg', '2020-03-28', 'Belum ada', 'Kasus On Progress', '-0.9492184116634965', '100.4139158394549'),
(' K006', '', '0000-00-00', '', 'Please Select', '', ''),
(' y32u1i', '', '0000-00-00', '', 'Please Select', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasal`
--

CREATE TABLE `pasal` (
  `id_pasal` varchar(20) NOT NULL,
  `pasal` varchar(50) NOT NULL,
  `isi_pasal` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(39) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(11) NOT NULL,
  `notlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `ttl`, `alamat`, `jk`, `notlp`) VALUES
('', '', '0000-00-00', '', 'Laki-laki', ''),
('00000', '00000', '0000-00-00', '', 'Laki-laki', ''),
('11', '111', '0000-00-00', '', 'Laki-laki', ''),
('121', '212121', '0000-00-00', '', 'Laki-laki', ''),
('13750000001', 'Dina', '1998-01-01', 'Pdg', 'Perempuan', '0837829137'),
('137511111111', 'Roy', '2000-03-28', 'Pdg', 'Laki-laki', '0837821321'),
('137511111112', 'Roby', '2000-03-28', 'Pdg', 'Laki-laki', '0837821321'),
('13752819331', 'Linda', '1999-03-04', 'Pdg', 'Perempuan', '086767676767'),
('13752828287', 'Pou', '1999-03-11', 'Pdg', 'Laki-laki', '083672831'),
('13756666667', 'Tigor', '1999-03-20', 'Pdg', 'Laki-laki', '0837821321'),
('13756721836', 'Rudi', '2000-03-22', 'Padang', 'Laki-laki', '08328921837'),
('1375679756', 'Lili', '2020-12-23', 'Padang', 'Perempuan', '08328921837'),
('13757272722', 'Dioijsak', '0000-00-00', '', 'Laki-laki', ''),
('1375829137', 'Son', '1999-01-13', 'Pdg', 'Laki-laki', '081278947300'),
('137590999', 'Sooomaas', '0000-00-00', '', 'Laki-laki', ''),
('13759829301', 'Kol', '0000-00-00', '', 'Laki-laki', ''),
('13782937822', 'Boni', '2000-03-31', 'Padang', 'Laki-laki', '0833728913'),
('137892371', 'lolo', '2000-03-12', 'Padang', 'Laki-laki', '0837821321'),
('1378934823', 'Poli', '0000-00-00', '', 'Laki-laki', ''),
('1483290137', 'Roni', '0000-00-00', '', 'Laki-laki', ''),
('155115', '1111111', '0000-00-00', '', 'Laki-laki', ''),
('2', '1', '0000-00-00', '', 'Laki-laki', ''),
('21', '21', '0000-00-00', '', 'Laki-laki', ''),
('2189', '2891281', '0000-00-00', '', 'Laki-laki', ''),
('21891', '28912811', '0000-00-00', '', 'Laki-laki', ''),
('3', '33', '0000-00-00', '', 'Laki-laki', ''),
('32', '32', '0000-00-00', '', 'Laki-laki', ''),
('4324c', '4', '0000-00-00', '', 'Laki-laki', ''),
('4324c1', '41', '0000-00-00', '', 'Laki-laki', ''),
('4324c13', '413', '0000-00-00', '', 'Laki-laki', ''),
('6666473', '838293', '0000-00-00', '', 'Laki-laki', ''),
('777383', '', '0000-00-00', '', 'Laki-laki', ''),
('78291', '2u3i1o', '0000-00-00', '', 'Laki-laki', ''),
('78978', 'jikg', '0000-00-00', '', 'Laki-laki', ''),
('8', '8', '0000-00-00', '', 'Laki-laki', ''),
('9090', 'yuyu', '0000-00-00', '', 'Laki-laki', ''),
('9230122', '890890', '0000-00-00', '', 'Laki-laki', ''),
('ewq ew', '', '0000-00-00', '', 'Laki-laki', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugaskepolisian`
--

CREATE TABLE `petugaskepolisian` (
  `nrp` varchar(20) NOT NULL,
  `nama` varchar(39) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugaskepolisian`
--

INSERT INTO `petugaskepolisian` (`nrp`, `nama`, `jabatan`) VALUES
('', '', 'Please Select'),
('80083192', 'Joni', 'Penyelidik'),
('80989089', 'rui', 'Penyidik pembantu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_penduduk`
--

CREATE TABLE `status_penduduk` (
  `id_status` varchar(20) NOT NULL,
  `status_dlmlap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_penduduk`
--

INSERT INTO `status_penduduk` (`id_status`, `status_dlmlap`) VALUES
('S01', 'Pelapor'),
('S02', 'Terlapor'),
('S03', 'Saksi'),
('S04', 'Pelaku');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detailpenduduk`
--
ALTER TABLE `detailpenduduk`
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `no_lapkejadian` (`no_lapkejadian`) USING BTREE;

--
-- Indeks untuk tabel `detailstatus`
--
ALTER TABLE `detailstatus`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `detail_kejahatan`
--
ALTER TABLE `detail_kejahatan`
  ADD UNIQUE KEY `id_kejahatan` (`id_kejahatan`,`no_lapkejadian`),
  ADD KEY `no_lapkejadian` (`no_lapkejadian`);

--
-- Indeks untuk tabel `detail_pasal`
--
ALTER TABLE `detail_pasal`
  ADD UNIQUE KEY `id_pasal` (`id_pasal`,`id_kejahatan`),
  ADD KEY `id_kejahatan` (`id_kejahatan`);

--
-- Indeks untuk tabel `detail_penyidik`
--
ALTER TABLE `detail_penyidik`
  ADD UNIQUE KEY `nrp` (`nrp`,`no_lapkejadian`),
  ADD KEY `no_lapkejadian` (`no_lapkejadian`);

--
-- Indeks untuk tabel `jenis_kejahatan`
--
ALTER TABLE `jenis_kejahatan`
  ADD PRIMARY KEY (`id_jeniskejahatan`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `kejahatan`
--
ALTER TABLE `kejahatan`
  ADD PRIMARY KEY (`id_kejahatan`),
  ADD UNIQUE KEY `id_jeniskejahatan` (`id_jeniskejahatan`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`no_lapkejadian`);

--
-- Indeks untuk tabel `pasal`
--
ALTER TABLE `pasal`
  ADD PRIMARY KEY (`id_pasal`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `petugaskepolisian`
--
ALTER TABLE `petugaskepolisian`
  ADD PRIMARY KEY (`nrp`);

--
-- Indeks untuk tabel `status_penduduk`
--
ALTER TABLE `status_penduduk`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detailstatus`
--
ALTER TABLE `detailstatus`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detailpenduduk`
--
ALTER TABLE `detailpenduduk`
  ADD CONSTRAINT `detailpenduduk_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `detailpenduduk_ibfk_2` FOREIGN KEY (`no_lapkejadian`) REFERENCES `laporan` (`no_lapkejadian`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `detail_kejahatan`
--
ALTER TABLE `detail_kejahatan`
  ADD CONSTRAINT `detail_kejahatan_ibfk_1` FOREIGN KEY (`no_lapkejadian`) REFERENCES `laporan` (`no_lapkejadian`),
  ADD CONSTRAINT `detail_kejahatan_ibfk_2` FOREIGN KEY (`id_kejahatan`) REFERENCES `kejahatan` (`id_kejahatan`);

--
-- Ketidakleluasaan untuk tabel `detail_pasal`
--
ALTER TABLE `detail_pasal`
  ADD CONSTRAINT `detail_pasal_ibfk_1` FOREIGN KEY (`id_pasal`) REFERENCES `pasal` (`id_pasal`),
  ADD CONSTRAINT `detail_pasal_ibfk_2` FOREIGN KEY (`id_kejahatan`) REFERENCES `kejahatan` (`id_kejahatan`);

--
-- Ketidakleluasaan untuk tabel `detail_penyidik`
--
ALTER TABLE `detail_penyidik`
  ADD CONSTRAINT `detail_penyidik_ibfk_1` FOREIGN KEY (`no_lapkejadian`) REFERENCES `laporan` (`no_lapkejadian`),
  ADD CONSTRAINT `detail_penyidik_ibfk_2` FOREIGN KEY (`nrp`) REFERENCES `petugaskepolisian` (`nrp`);

--
-- Ketidakleluasaan untuk tabel `jenis_kejahatan`
--
ALTER TABLE `jenis_kejahatan`
  ADD CONSTRAINT `jenis_kejahatan_ibfk_1` FOREIGN KEY (`id_jeniskejahatan`) REFERENCES `kejahatan` (`id_jeniskejahatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
