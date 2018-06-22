-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 02:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidtati`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `tempat_lahir`, `tanggal_lahir`, `email`, `alamat`, `nohp`) VALUES
('admin', 'ea', 'ea', '1998-02-12', 'ea@gmail.com', 'eaea', '1234121'),
('admino', 'ea', 'pbmesa', '1998-05-30', 'sholahul30051998@gmail.com', 'eaaa', '1231'),
('awa', 'uvuwuwe', 'eaea', '1998-01-01', 'e@gmail.com', 'ea', 'ea'),
('bebek', 'ea', 'dimanaaja', '1998-12-12', 'ea@gmail.com', 'ea', '12121'),
('kirito', 'ea', 'ea', '1998-01-12', 'ea@gmail.com', 'ea', '112'),
('miaw', 'miaw12', 'palembang', '2999-03-12', 'ea@gmail.com', 'miaw', '092121'),
('newnew', 'ea', 'prabumulih', '1998-01-12', 'ea@gmail.com', 'ea', '12121'),
('tes1', 'eaa', 'ea', '1998-05-12', 'ea@gmail.com', 'ea', '121');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentta`
--

CREATE TABLE `dokumentta` (
  `id` int(11) NOT NULL,
  `nimmhs` varchar(20) NOT NULL,
  `nippa1` varchar(20) NOT NULL,
  `nippa2` varchar(20) NOT NULL,
  `judulta` varchar(50) NOT NULL,
  `abstrak` text NOT NULL,
  `data` longblob NOT NULL,
  `verifikasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `password`, `tempat_lahir`, `tanggal_lahir`, `jabatan`, `jenis_kelamin`, `alamat`, `email`, `nohp`) VALUES
('03', 'apajadeh', '31211', 'jambi', '1999-02-02', 'Lektor Kepala', 'Laki-Laki', 'Apaajadeh', 'ea@gmail.com', '31121'),
('1', 'farhan', '123456', 'palembang', '2018-06-05', 'dosen pengampu', 'Laki-Laki', 'Palembang', 'farhan123@gmail.com', '08127328851'),
('2', 'agusti', 'ea', 'bangka', '1998-05-30', 'dosen pengampu', 'Laki-Laki', 'Prabumulih', 'agusti123@gmail.com', 'ea');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nppa` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `lokasi_kampus` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nppa`, `nama`, `password`, `angkatan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `email`, `nohp`, `lokasi_kampus`, `alamat`) VALUES
('09021181520125', '1', 'sholahul fajri', '30mei1998', 2015, 'palembang', '1998-05-30', 'laki-laki', 'sholahul30051998@gmail.com', '08127328851', 'inderalaya', 'JL. M. Yamin No. 282\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `dokumentta`
--
ALTER TABLE `dokumentta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nimmhs` (`nimmhs`),
  ADD KEY `nippa1` (`nippa1`),
  ADD KEY `nippa2` (`nippa2`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `nppa` (`nppa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumentta`
--
ALTER TABLE `dokumentta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumentta`
--
ALTER TABLE `dokumentta`
  ADD CONSTRAINT `dokumentta_ibfk_1` FOREIGN KEY (`nimmhs`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dokumentta_ibfk_2` FOREIGN KEY (`nippa1`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dokumentta_ibfk_3` FOREIGN KEY (`nippa2`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`nppa`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
