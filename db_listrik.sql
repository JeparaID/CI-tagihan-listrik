-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2017 at 04:16 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_listrik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_user` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_user`, `password`, `nama`) VALUES
('admin', 'admin', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `nomor_meter` char(15) NOT NULL,
  `id_laporan` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `balas` text,
  `id_user` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_laporan`
--

INSERT INTO `tb_laporan` (`nomor_meter`, `id_laporan`, `komentar`, `balas`, `id_user`) VALUES
('08763842420', 3, 'adasd', 'ad', NULL),
('079865948123', 4, 'senang', 'iyaa', NULL),
('079865948123', 5, 'adasd', NULL, NULL),
('079865948123', 6, 'senang', 'terima kasih', NULL),
('079865948123', 7, 'kurang memuaskan', 'iya akan kami benahi', NULL),
('1', 8, 'maslah rusak llistrik', 'ya kami kesana', NULL),
('079865948123', 9, 'adasd', 'oke', NULL),
('079865948123', 10, 'senang', NULL, NULL),
('079865948123', 11, 'sangat handal', 'thanks', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `nomor_meter` char(15) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telepon` char(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`nomor_meter`, `id_pelanggan`, `username`, `password`, `nama`, `alamat`, `email`, `no_telepon`) VALUES
('098767895432', 9, 'hamdan', 'tauvicky', 'hamdan', 'kpr taman sari madiun', 'hamdan@yahoo.com', '089123456723'),
('897698769888', 8, 'admin', 'admin', 'BUDI', 'ghananana', 'aghnafikrunafuddin@yahoo.com', '08998943719'),
('079865948123', 7, 'aghna', 'admin', 'agna', '', 'mail@yahoo.com', '08998943719');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tagihan`
--

CREATE TABLE `tb_tagihan` (
  `nomor_meter` char(15) NOT NULL,
  `id_tagihan` int(11) NOT NULL,
  `tahun` char(11) NOT NULL,
  `januari` char(20) NOT NULL,
  `februari` char(20) NOT NULL,
  `maret` char(20) NOT NULL,
  `april` char(20) NOT NULL,
  `mei` char(20) NOT NULL,
  `juni` char(20) NOT NULL,
  `juli` char(20) NOT NULL,
  `agustus` char(20) NOT NULL,
  `september` char(20) NOT NULL,
  `oktober` char(20) NOT NULL,
  `november` char(20) NOT NULL,
  `desember` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tagihan`
--

INSERT INTO `tb_tagihan` (`nomor_meter`, `id_tagihan`, `tahun`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`) VALUES
('897698769888', 3, '2018', '100000', '100000', '100000', '120000', '150000', '140000', '110000', '130000', '140000', '160000', '150000', '120000'),
('079865948123', 2, '2015', '100000', '100000', '100000', '100000', '100000', '100000', '100000', '100000', '100000', '100000', '100000', '90000'),
('098767895432', 4, '2017', '100000', '80000', '80000', '90000', '100000', '90000', '80000', '100000', '100000', '110000', '100000', '100000'),
('079865948123', 5, '2016', '100000', '100000', '100000', '90000', '100000', '140000', '80000', '130000', '100000', '110000', '100000', '120000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pelanggan`,`nomor_meter`);

--
-- Indexes for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
