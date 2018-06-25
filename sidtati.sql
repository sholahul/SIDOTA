-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 06:33 AM
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
('admin', 'ea', 'Prabumulih', '1998-05-30', 'sholahul30051998@gmail.com', 'Prabumulih', '082281036974'),
('admin2', 'ea', 'palembang', '1998-01-01', 'farhan123@gmail.com', 'Palembang', '08127328851');

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
(15, '2018-06-25', '09021181520125', '1671140201820005', 'Kombinasi Teknik Steganografi Discret Cosine Trans', 'There are many problems to be solved in the framework of the information protection. A special place among them is the task of the hidden data, called steganography task. Secure communication can be accomplished in various ways. The common feature of these methods is that the information is embedded in some object, called a container. As the information currently in most cases is transmitted digitally, one of the most rapidly developing areas of steganography is digital steganography. In this direction, as the object for embedding used a computer file. Most of the steganography methods are used images as containers. Overall, the goal of steganography, which is, the problem of hidden data transmission, and opposite it the task of steganalysis, that is, the detecting hidden information transfer task, are one of the main problems in information security, so their solution is relevant in our days.', '09021181520125.pdf', 0),
(16, '2018-06-25', '09021281419050', '196602202006041001', 'Pengaruh Singular Value Decomposition Terhadap Met', 'Dokumen yang mengandung banyak atribut atau dimensi dapat menjadi\r\nhambatan dalam proses clustering. Kebanyakan algoritma clustering baik dalam\r\nmenangani data berdimensi rendah, sehingga untuk menemukan cluster dari objek\r\ndata berdimensi tinggi adalah sebuah tantangan karena data berdimensi tinggi\r\ncenderung memiliki noise, sparse, dan bersifat skew. Dalam data mining, reduksi\r\ndimensi dapat dilakukan untuk meningkatkan akurasi hasil clustering data\r\nberdimensi tinggi. Untuk itu, Penelitian ini mengkombinasikan Singular Value\r\nDecomposition (SVD) untuk mereduksi dimensi dan melihat pengaruhnya\r\nterhadap akurasi hasil clustering metode k-means, k-medoids, dan fuzzy c-means.\r\nPenelitian menunjukkan bahwa kombinasi SVD dan k-means dan k-meodids\r\nmeningkatkan hasil akurasi sebesar 10-11 % dibandingkan dengan clustering\r\ntanpa reduksi dimensi. Waktu komputasi proses clustering menjadi lebih cepat.\r\nNamun, sebaliknya kombinasi SVD dan fuzzy c-means menunjukkan hasil\r\nakurasi clustering yang lebih buruk dibandingkan dengan clustering tanpa reduksi\r\ndimensi.', '09021281419050.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(30) NOT NULL,
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
('1671140201820005', 'Rusdi Efendi,M.Kom', '123456', 'palembang', '1998-01-01', 'Tenaga Pengajar', 'laki-laki', 'Palembang', 'rusdiefendi8@gmail.com', '0'),
('196602202006041001', 'Drs. Megah Mulya, M.T.', '123456', 'palembang', '1968-02-01', 'Lektor', 'laki-laki', 'Palembang', 'megahmulya@yahoo.cm', '081274080838'),
('197706012009121004	', 'Rifkie Primartha, S.T., M.T.', '123456', 'palembang', '1998-01-01', 'Asisten Ahli', 'laki-laki', 'Palembang', 'rikie_p@yahoo.com', '08127374611'),
('198505102015041002', 'Danny Matthew Saputra,S.T., M.Sc.', '123456', 'palembang', '1968-02-01', 'Tenaga Pengajar', 'laki-laki', 'Palembang', 'dany.saputra@gmail.com', '082307000175'),
('198908062015042002', 'Anggina Primanita,S.Kom.,M.IT', '123456', 'palembang', '1968-02-01', 'Tenaga Pengajar', 'Perempuan', 'Palembang', 'angginaprimanita@gmail.com', '08156970755');

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
('09021181520015	', '1671140201820005', 'Muhammad Farhan Evirzal', '123456', 2015, 'palembang', '1998-05-30', 'laki-laki', 'farhanevirzal15@gmail.com', '081379318078', 'inderalaya', 'Palembang\r\n'),
('09021181520125', '196602202006041001', 'Sholahul Fajri', '123456', 2015, 'Prabumulih', '1998-05-30', 'laki-laki', 'sholahul30051998@gmail.com', '082281036974', 'inderalaya', 'Prabumulih'),
('09021281419041', '198908062015042002', 'Indri Dwi Ayu', '123', 2014, 'palembang', '1998-05-30', 'Perempuan', 'indriayu23@gmail.com', '08222222222', 'inderalaya', 'Palembang\r\n'),
('09021281419050', '196602202006041001', 'M Ryan Fadholi', '123456', 2014, 'palembang', '1998-05-30', 'laki-laki', 'Ryanfadholi22@gmail.com', '0822222222', 'inderalaya', 'Palembang'),
('09021281520117', '198908062015042002', 'Agusti Kurniawan', '123456', 2015, 'Bangka Belitung', '1998-05-30', 'laki-laki', 'agusti123@gmail.com', '081278900533', 'inderalaya', 'Bangka Belitung ');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
