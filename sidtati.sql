-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2018 at 07:43 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
('admin', 'ea', 'eaaa', '1998-02-12', 'ea@gmail.com', 'eaeaea', '1234121'),
('admino', 'ea', 'pbmesa', '1998-05-30', 'sholahul30051998@gmail.com', 'eaaa', '1231'),
('awa', 'uvuwuwe', 'eaea', '1998-01-01', 'e@gmail.com', 'ea', 'ea'),
('awww', 'easss', 'eaj', '1998-02-12', 'ea@gmail.com', 'ea', '121'),
('bebek', 'ea', 'dimanaaja', '1998-12-12', 'ea@gmail.com', 'ea', '12121'),
('ipu', 'ea', 'ea', '1998-05-20', 'ea@gmail.com', 'ea', '121212'),
('kirito', 'ea', 'ea', '1998-01-12', 'ea@gmail.com', 'ea', '112'),
('miaw', 'miaw12', 'palembang', '2999-03-12', 'ea@gmail.com', 'miaw', '092121'),
('newnew', 'ea', 'prabumulih', '1998-01-12', 'ea@gmail.com', 'ea', '12121'),
('njay', 'ea', 'eaa', '1998-12-12', 'ea@gmail.com', 'eea', '422'),
('tes1', 'eaa', 'ea', '1998-05-12', 'ea@gmail.com', 'ea', '121');

-- --------------------------------------------------------

--
-- Table structure for table `dokumenta`
--

CREATE TABLE `dokumenta` (
  `id` int(11) NOT NULL,
  `publish_date` date NOT NULL,
  `nimmhs` varchar(20) DEFAULT NULL,
  `nppa` varchar(20) DEFAULT NULL,
  `judulta` varchar(50) NOT NULL,
  `abstrak` text,
  `path` varchar(20) NOT NULL,
  `verifikasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumenta`
--

INSERT INTO `dokumenta` (`id`, `publish_date`, `nimmhs`, `nppa`, `judulta`, `abstrak`, `path`, `verifikasi`) VALUES
(1, '2018-06-24', '1221', '2', 'Aku dan dia saling suka', 'Perancangan Alat Lampu Lalu Lintas Berbasis MikrokontrolerPerancangan Alat Lampu Lalu Lintas Berbasis MikrokontrolerPerancangan Alat Lampu Lalu Lintas Berbasis MikrokontrolerPerancangan Alat Lampu Lalu Lintas Berbasis MikrokontrolerPerancangan Alat Lampu Lalu Lintas Berbasis MikrokontrolerPerancangan Alat Lampu Lalu Lintas Berbasis MikrokontrolerPerancangan Alat Lampu Lalu Lintas Berbasis Mikrokontroler', '', 0),
(2, '2018-06-24', '12111', '2', 'Tapi sayangnya dia juga suka orang lain', 'apalah arti aku menunggu bila kamu tak cinta lagi,apalah arti aku menunggu bila kamu tak cinta lagi,apalah arti aku menunggu bila kamu tak cinta lagi,apalah arti aku menunggu bila kamu tak cinta lagi,apalah arti aku menunggu bila kamu tak cinta lagi,apalah arti aku menunggu bila kamu tak cinta lagi,', '\r\n', 1),
(9, '2018-06-24', '12111', '03', 'kaur', 'kaur', 'kaur2013.pdf', 0),
(10, '2018-06-24', '12111', '03', 'sadasd', 'ssssssssssssss', '10088_Petunjuk_TA_20', 0),
(11, '2018-06-24', '12111', '3', 'sssssssss', 'ssssssssssssss', 'P15370_11_ROL_Model_', 0),
(12, '2018-06-24', '12111', '12', 'eesssss', 'asdasdas', 'IJCSI-8-3-1-543-549.', 0),
(13, '2018-06-24', '12111', '12', 'eesssss', 'asdasdas', '9783319096438-c2.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
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
('12', 'farhan', '2', 'palembang', '2018-06-05', 'dosen pengampu', 'Laki-Laki', 'Shemale ea', 'farhan123@gmail.com', '08127328851'),
('2', 'agusti kurniawan', 'ea', 'bangka', '1998-05-30', 'dosen pengampu', 'Laki-Laki', 'Prabumulih', 'agusti123@gmail.com', '08127328551'),
('3', 'sf', '1', 'ea', '1998-05-30', 'ea', 'Laki-Laki', 'ea', 'ea@gmail.com', '121');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nppa` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
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
('09021181520125', '12', 'sholahul fajri', '30mei1998', 2001, 'palembang', '1998-05-30', 'Laki-Laki', 'sholahul30051998@gmail.com', '08127328851', 'Inderalaya', 'JL. M. Yamin No. 282\r\n'),
('1', '2', 'Kirito ', '2', 2015, 'palembang', '1998-05-30', 'Laki-Laki', 'sholahul30051998@gmail.com', '082281036974', 'inderalaya', 'ea'),
('12111', '03', 'kirito', 'bebek', 1999, 'angsa', '1998-01-12', 'Laki-Laki', 'sholahulfajri30@gmail.com', '1211', 'Inderalaya', ''),
('1221', '03', 'fajri', '31121', 2001, 'prabumulih', '1998-02-21', 'Perempuan', 'ea@gmail.com', '1211', 'Inderalaya', 'dada');

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
-- Indexes for table `dokumenta`
--
ALTER TABLE `dokumenta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nimmhs` (`nimmhs`),
  ADD KEY `nppa` (`nppa`);

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
-- AUTO_INCREMENT for table `dokumenta`
--
ALTER TABLE `dokumenta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumenta`
--
ALTER TABLE `dokumenta`
  ADD CONSTRAINT `dokumenta_ibfk_1` FOREIGN KEY (`nimmhs`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dokumenta_ibfk_2` FOREIGN KEY (`nppa`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`nppa`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
