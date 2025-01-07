-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 10:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek_titik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_costumer`
--

CREATE TABLE `tbl_costumer` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_costumer`
--

INSERT INTO `tbl_costumer` (`id`, `nama`, `alamat`, `email`, `password`) VALUES
(1, 'Syaban', 'Gorontalo', 'Syaban@gmail.com', '$2y$10$FFDMz1YakybLl0n9gFi4u.JQSycPfxcd4CS3fHit/pFRypyODQR4i'),
(2, 'Bankai', NULL, 'Bankai@gmail.com', '$2y$10$v21C/zolAdgOb0oqcKBcLOw5ft5PhP94PxOnbDzCNZNRNdS/.tH8W'),
(3, 'Baru', NULL, 'BaruJadi@gmail.com', '$2y$10$UPkqRi0TW0yOf7R6u6NbcOKVPSAnBT/QKRWO.iGNOfFd/ZTf2.qSO'),
(4, 'wasd', NULL, 'awe@gmail.com', '$2y$10$dVOvnU/sjsje4xf0W/CW1.bk/eFU7KDvFBRvkSOWB8BknFvq9.uAq'),
(5, 'Huwa', NULL, 'Humahum@gmail.com', '$2y$10$6iWOB6Y2kJVPdPRgKGx7j.JgXlqYJ4pA6k8LCcksinNi7V3XyVTFO'),
(6, 'naruto', NULL, 'naruto@gmailcom', '$2y$10$uh.QnByZ/odZeltU7ltHKuXfZ.OjIuR/CRVvBq2KQX.eE4bH1RNK.'),
(7, 'Akifah', NULL, 'Akifah@gmail.com', '$2y$10$lrbs3PINB6/LAlfsbEvFMeornb9c3ZHruEIFG8o5/.YFY8VaJKtR6'),
(8, 'Baru', NULL, 'Baru@gmail.com', '$2y$10$AhhGFdOrR37cWJuuCOFz4O4G.yki2LVxX18lcXpamNUKMeAwzySC2'),
(9, 'Cek Error', NULL, 'PascaEror@gmail.com', '$2y$10$jCKQOBMxn3iygn4TD.Cfj.JRAGGNYrMqxrzKuGi7WrvemsJ/GAu5S'),
(10, 'agen', NULL, 'agen@gmail.com', '$2y$10$UE5c0HVOIBihWiCkM3qsy.iZz5ag/xWcJs3yocbcRcaA1JKI2G8.y'),
(11, 'login', NULL, 'lagi@gmail.com', '$2y$10$0VyYy7VT1BMfiSp0O805oupf1uMxmrbogHd9lO5cS5mcfFDNsPngK'),
(12, '135', NULL, '135@gmail.com', '$2y$10$3jwxUR.gMu4OFsCXGsMDJeREJ5nBl.2gQwrLBMluGTqkzpslkli/a'),
(13, '123', NULL, '123@gmail.com', '$2y$10$3Q3LNhix5A36a4JarGkepuX2l5LzrJhzbwql39j0XUZwI1./MaB6i'),
(14, '165', NULL, '165@gmail.com', '$2y$10$Gl5D2ARM9U5VYv5Oni34duoiWJEVioPtfEUa48GNEIQY3oEwQbbQi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `spesialisasi` varchar(50) DEFAULT NULL,
  `kontak` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id`, `nama`, `spesialisasi`, `kontak`) VALUES
(1, 'Dr. Andi', 'Kardiologi', '081234567890'),
(2, 'Dr. Budi', 'Neurologi', '081234567891'),
(3, 'Dr. Citra', 'Dermatologi', '081234567892'),
(4, 'Dr. Dedi', 'Pediatri', '081234567893');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(100) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_obat`
--

INSERT INTO `tbl_obat` (`id`, `nama_obat`, `jenis`, `harga`, `stok`) VALUES
(1, 'Paracetamol', 'Analgesik', 5000.00, 100),
(2, 'Amoxicillin', 'Antibiotik', 10000.00, 50),
(3, 'Cetirizine', 'Antihistamin', 7000.00, 75),
(4, 'Omeprazole', 'Antasida', 8000.00, 60),
(5, 'Metformin', 'Antidiabetik', 12000.00, 40),
(6, 'Salbutamol', 'Bronkodilator', 15000.00, 30),
(7, 'Ibuprofen', 'Anti Inflamasi', 9000.00, 80),
(8, 'Simvastatin', 'Antikolesterol', 11000.00, 45),
(9, 'Diazepam', 'Anxiolytic', 13000.00, 35),
(10, 'Prednisone', 'Kortikosteroid', 14000.00, 25);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `id_obat` int(11) DEFAULT NULL,
  `id_costumer` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total_harga` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `id_obat`, `id_costumer`, `jumlah`, `total_harga`) VALUES
(5, 1, 1, 1, 5000.00),
(6, 2, 1, 2, 20000.00),
(7, 8, 1, 4, 44000.00),
(8, 7, 1, 1, 9000.00),
(15, 9, 1, 3, 39000.00),
(16, 2, 1, 1, 10000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resep`
--

CREATE TABLE `tbl_resep` (
  `id` int(11) NOT NULL,
  `id_costumer` int(11) DEFAULT NULL,
  `file_resep` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_costumer`
--
ALTER TABLE `tbl_costumer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_costumer` (`id_costumer`);

--
-- Indexes for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_costumer` (`id_costumer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_costumer`
--
ALTER TABLE `tbl_costumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `tbl_obat` (`id`),
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`id_costumer`) REFERENCES `tbl_costumer` (`id`);

--
-- Constraints for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
  ADD CONSTRAINT `tbl_resep_ibfk_1` FOREIGN KEY (`id_costumer`) REFERENCES `tbl_costumer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
