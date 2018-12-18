-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 02:35 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaringan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jaringan`
--

CREATE TABLE `tb_jaringan` (
  `id_jaringan` int(3) NOT NULL,
  `nama_jaringan` varchar(32) NOT NULL,
  `id_printer` int(5) NOT NULL,
  `id_switch` int(3) NOT NULL,
  `id_pc` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jaringan`
--

INSERT INTO `tb_jaringan` (`id_jaringan`, `nama_jaringan`, `id_printer`, `id_switch`, `id_pc`, `id_lokasi`) VALUES
(2, 'Jaringan 1', 7, 2, 1, 2),
(3, 'Jaringan1', 0, 3, 3, 2),
(4, 'Jaringan1', 0, 2, 4, 2),
(5, 'Jaringan1', 8, 2, 5, 2),
(6, 'Jaringan1', 7, 11, 7, 2),
(8, 'Jaringan2', 8, 3, 8, 3),
(9, 'Jaringan2', 7, 7, 9, 3),
(10, 'Jaringan2', 0, 2, 10, 3),
(11, 'Jaringan2', 0, 5, 11, 2),
(13, 'Jaringan2', 11, 11, 12, 3),
(14, 'Jaringan3', 13, 8, 13, 4),
(15, 'Jaringan3', 14, 7, 15, 4),
(16, 'Jaringan3', 13, 2, 14, 4),
(17, 'Jaringan3', 17, 8, 16, 4),
(18, 'Jaringan3', 0, 2, 17, 4),
(19, 'Jaringan4', 0, 2, 21, 6),
(20, 'Jaringan4', 15, 10, 18, 5),
(21, 'Jaringan4', 17, 2, 20, 5),
(22, 'Jaringan4', 0, 5, 22, 5),
(23, 'Jaringan4', 13, 12, 19, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(2) NOT NULL,
  `nama_lokasi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
(2, 'Klinik Umum'),
(3, 'Radiologi'),
(4, 'BPJS'),
(5, 'Dokter Gigi'),
(6, 'Rawat Inap A'),
(7, 'Rawat Inap B'),
(8, 'Rawat Inap C'),
(9, 'Klinik Umum'),
(10, 'IGD'),
(11, 'Klinik Anak'),
(12, 'Laboratorium');

-- --------------------------------------------------------

--
-- Table structure for table `tb_manager`
--

CREATE TABLE `tb_manager` (
  `nama_manager` varchar(32) NOT NULL,
  `nik` varchar(32) NOT NULL,
  `umur` int(2) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `email` varchar(32) NOT NULL,
  `foto` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_manager`
--

INSERT INTO `tb_manager` (`nama_manager`, `nik`, `umur`, `jenis_kelamin`, `no_telpon`, `email`, `foto`, `id`) VALUES
('Andi Hoerudin', '065115114', 21, 'Laki-Laki', '089638889862', 'andihoerudin24@gmail.com', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_note`
--

CREATE TABLE `tb_note` (
  `id` int(1) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_note`
--

INSERT INTO `tb_note` (`id`, `note`) VALUES
(1, 'menu untuk menulis catatan admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pc`
--

CREATE TABLE `tb_pc` (
  `no_urut` int(3) NOT NULL,
  `no_pc` varchar(5) DEFAULT NULL,
  `nama_pc` varchar(32) NOT NULL,
  `ip_add` varchar(15) NOT NULL,
  `merk` varchar(32) DEFAULT NULL,
  `os` varchar(20) NOT NULL,
  `cpu` varchar(32) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `hdd` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pc`
--

INSERT INTO `tb_pc` (`no_urut`, `no_pc`, `nama_pc`, `ip_add`, `merk`, `os`, `cpu`, `ram`, `hdd`) VALUES
(1, 'PC1', 'RumahSakit-PC', '192.168.2.211', 'Acer', 'Win 7', 'Intel Core I5', '2048', '1000'),
(3, 'PC2', 'Angga', '192.168.2.10', 'Asus', 'Windows 10', 'Intel core I9', '8000', '1000'),
(4, 'PC3', 'Tes', '192.168.224', 'lenovo', 'Linux', 'Core I7', '512', '2000'),
(5, 'PC4', 'Afer', '192.168.2.212', 'Lenovo', 'Win7', 'Core I9', '2048', '500'),
(7, 'PC5', 'PC5', '192.168.2.123', 'Axioo', 'Win 7', 'Pentium 4', '1012', '500'),
(8, 'PC6', 'Coba', '192.168.2.111', 'Plus1', 'Win XP', 'Intel Celeron', '2048', '500'),
(9, 'PC7', 'Komando', '192.168.1.2', 'HP', 'Win 8', 'AMD E2', '2048', '1000'),
(10, 'PC8', 'PC8', '192.168.1.17', 'Lenovo', 'Win 8', 'AMD A4', '4000', '500'),
(11, 'PC9', 'Admin', '192.168.1.3', 'HP', 'Win 10', 'Core I7', '4000', '1000'),
(12, 'PC10', 'Agus PC', '192.168.1.9', 'Acer', 'Win Xp', 'Pentium Dual', '1012', '250'),
(13, 'PC11', 'Kasir', '192.168.2.2', 'Lenovo', 'Win XP', 'Intel Celeron', '1012', '250'),
(14, 'PC13', 'Dell PC', '192.168.2.99', 'Dell', 'WIn 10', 'Core I5', '4096', '500'),
(15, 'PC12', 'Hello', '192.168.2.3', 'Asus', 'Win 8.1', 'Intel Celeron', '2048', '500'),
(16, 'PC14', 'Toshiba', '192.168.2.17', 'Toshiba', 'Win 7', 'AMD E2', '4096', '500'),
(17, 'PC15', 'PC Acc', '192.168.2.4', 'Lenovo', 'Win 8', 'Core I3', '4096', '500'),
(18, 'PC16', 'Agung PC', '192.168.2.5', 'Win 10', 'Linux', 'Core I3', '2048', '500'),
(19, 'PC17', 'Administrasi PC', '192.168.2.6', 'Asus', 'Win 10', 'Core I7', '8000', '1000'),
(20, 'PC 18', 'Bidan', '192.168.2.21', 'Acer', 'Win 8', 'Core I3', '2048', '250'),
(21, 'PC19', 'Boarding', '192.168.2.210', 'Dell', 'Win 8', 'Core I5', '2048', '250'),
(22, 'PC20', 'Axioo-PC', '192.168.2.34', 'Axioo', 'Win 7', 'Intel Celeron', '2048', '500'),
(23, 'PC X0', 'tes pc', '192.168.2.23', 'Asus', 'Win 8', 'Core I5', '2', '500');

-- --------------------------------------------------------

--
-- Table structure for table `tb_printer`
--

CREATE TABLE `tb_printer` (
  `id_printer` int(5) NOT NULL,
  `nama_printer` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_printer`
--

INSERT INTO `tb_printer` (`id_printer`, `nama_printer`, `status`) VALUES
(0, 'none', 'none'),
(7, 'HP Deskjet 2135', 'sewa'),
(8, 'HP Epson', 'milik-sendiri'),
(10, 'Epson LX310', 'milik-sendiri'),
(11, 'Epson LS', 'sewa'),
(12, 'Epson L120', 'milik-sendiri'),
(13, 'Epson L310', 'sewa'),
(14, 'Epson L220', 'milik-sendiri'),
(15, 'Epson LX50', 'milik-sendiri'),
(16, 'Epson L805', 'sewa'),
(17, 'Epson M200', 'milik-sendiri'),
(18, 'HP LaserJet 102', 'milik-sendiri'),
(19, 'HP DeskJet 1112', 'milik-sendiri'),
(20, 'HP OfficeJet 71', 'sewa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_switch`
--

CREATE TABLE `tb_switch` (
  `id_switch` int(3) NOT NULL,
  `nama_switch` varchar(32) NOT NULL,
  `jumlah_port` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_switch`
--

INSERT INTO `tb_switch` (`id_switch`, `nama_switch`, `jumlah_port`) VALUES
(2, 'none', 0),
(3, 'TP-Link X21', 12),
(4, 'D-Link', 12),
(5, 'D-Link X51', 12),
(6, 'TP-Link', 8),
(7, 'D-Link XYZ', 12),
(8, 'D-Link 1234', 24),
(9, 'TP Link 9000', 24),
(10, 'Cisco 8600', 24),
(11, 'Mikrotik 21', 24),
(12, 'Cisco 7000', 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jaringan`
--
ALTER TABLE `tb_jaringan`
  ADD PRIMARY KEY (`id_jaringan`),
  ADD KEY `id_printer` (`id_printer`),
  ADD KEY `id_switch` (`id_switch`),
  ADD KEY `id_pc` (`id_pc`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_manager`
--
ALTER TABLE `tb_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_note`
--
ALTER TABLE `tb_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pc`
--
ALTER TABLE `tb_pc`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `tb_printer`
--
ALTER TABLE `tb_printer`
  ADD PRIMARY KEY (`id_printer`);

--
-- Indexes for table `tb_switch`
--
ALTER TABLE `tb_switch`
  ADD PRIMARY KEY (`id_switch`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jaringan`
--
ALTER TABLE `tb_jaringan`
  MODIFY `id_jaringan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_manager`
--
ALTER TABLE `tb_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pc`
--
ALTER TABLE `tb_pc`
  MODIFY `no_urut` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_printer`
--
ALTER TABLE `tb_printer`
  MODIFY `id_printer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_switch`
--
ALTER TABLE `tb_switch`
  MODIFY `id_switch` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_jaringan`
--
ALTER TABLE `tb_jaringan`
  ADD CONSTRAINT `tb_jaringan_ibfk_3` FOREIGN KEY (`id_pc`) REFERENCES `tb_pc` (`no_urut`),
  ADD CONSTRAINT `tb_jaringan_ibfk_4` FOREIGN KEY (`id_lokasi`) REFERENCES `tb_lokasi` (`id_lokasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
