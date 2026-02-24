-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2026 at 05:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom_12rpl2_rhayi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_aspirasi`
--

CREATE TABLE `tb_aspirasi` (
  `id_pelaporan` int(11) NOT NULL,
  `nis` varchar(225) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `lokasi` varchar(225) NOT NULL,
  `ket` varchar(225) NOT NULL,
  `status` enum('menunggu','proses','selesai') NOT NULL DEFAULT 'menunggu',
  `feedback` varchar(225) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_aspirasi`
--

INSERT INTO `tb_aspirasi` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `ket`, `status`, `feedback`, `tanggal`) VALUES
(31, '1234', 2, 'kantin', 'Kotor banget, tolong bersihin', 'menunggu', NULL, '2026-02-22'),
(32, '1234', 1, 'lab rpl', 'Pc eror', 'menunggu', NULL, '2026-02-22'),
(33, '1234', 1, 'lab rpl', 'bocor', 'menunggu', NULL, '2026-02-22'),
(34, '1234', 1, 'rpl 2', 'bangku kurang', 'menunggu', NULL, '2026-02-23'),
(35, '1234', 3, 'parkiran', 'helm saya r=hilang', 'menunggu', NULL, '2026-03-23'),
(36, '1234', 1, 'bkk', 'Kurang bangku', 'menunggu', NULL, '2026-02-23'),
(37, '1234', 1, 'wc', 'Kaca pecah', 'menunggu', NULL, '2026-02-23'),
(38, '1234', 2, 'Bkk', 'Kotor', 'menunggu', NULL, '2026-02-24'),
(39, '1234', 1, 'Mesjid', 'Kipas rusak', 'menunggu', NULL, '2026-02-24'),
(40, '1234', 1, 'Mesjid', 'Mic rusak', 'menunggu', NULL, '2026-02-24'),
(41, '1234', 1, 'Lab rpl', 'Mouse rusak', 'menunggu', NULL, '2026-02-24'),
(42, '1234', 1, 'Taman', 'Bunga patah', 'menunggu', NULL, '2026-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `ket_kategori` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `ket_kategori`) VALUES
(1, 'LAB RPL'),
(2, 'Kebersihan'),
(3, 'Keamanan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` enum('siswa','admin') NOT NULL DEFAULT 'siswa',
  `nis` varchar(225) NOT NULL,
  `kelas` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `role`, `nis`, `kelas`) VALUES
(123, 'rhayi', '1234', 'siswa', '1234', 'RPL 2'),
(321, 'admin', '321123', 'admin', '1432', 'RPL 2'),
(1234, 'azzahra', '321123', 'siswa', '12345', 'RPL 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aspirasi`
--
ALTER TABLE `tb_aspirasi`
  ADD PRIMARY KEY (`id_pelaporan`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aspirasi`
--
ALTER TABLE `tb_aspirasi`
  MODIFY `id_pelaporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_aspirasi`
--
ALTER TABLE `tb_aspirasi`
  ADD CONSTRAINT `tb_aspirasi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_aspirasi_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `tb_user` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
