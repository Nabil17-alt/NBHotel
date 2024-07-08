-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 08:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nbhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_nb`
--

CREATE TABLE `admin_nb` (
  `id_nb` int(11) NOT NULL,
  `nama_nb` varchar(255) NOT NULL,
  `email_nb` varchar(255) NOT NULL,
  `kata_sandi_nb` varchar(255) NOT NULL,
  `no_hp_nb` varchar(15) DEFAULT NULL,
  `tanggal_lahir_nb` date DEFAULT NULL,
  `alamat_nb` text DEFAULT NULL,
  `dibuat_nb` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_nb`
--

INSERT INTO `admin_nb` (`id_nb`, `nama_nb`, `email_nb`, `kata_sandi_nb`, `no_hp_nb`, `tanggal_lahir_nb`, `alamat_nb`, `dibuat_nb`) VALUES
(1, 'Nabil', 'realmuhammadnabil@gmail.com', 'nabil123', '082286923525', '2004-06-17', 'Pekanbaru', '2024-07-07 13:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `customer_nb`
--

CREATE TABLE `customer_nb` (
  `id_nb` int(11) NOT NULL,
  `nama_nb` varchar(100) NOT NULL,
  `email_nb` varchar(100) NOT NULL,
  `tipekamar_nb` varchar(50) NOT NULL,
  `checkin_nb` date DEFAULT NULL,
  `checkout_nb` date DEFAULT NULL,
  `created_at_nb` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_nb`
--

INSERT INTO `customer_nb` (`id_nb`, `nama_nb`, `email_nb`, `tipekamar_nb`, `checkin_nb`, `checkout_nb`, `created_at_nb`) VALUES
(1, 'Nabil', 'Nabil@gmail.com', 'Kamar Deluxe', '2024-07-08', '2024-07-10', '2024-07-08 16:24:02'),
(2, 'Farlyan', 'amu@gmail.com', 'Kamar Keluarga', '2024-07-08', '2024-07-11', '2024-07-08 16:51:59'),
(3, 'Rusdil', 'eter@gmail.com', 'Kamar Standar', '2024-07-08', '2024-07-12', '2024-07-08 16:52:57'),
(7, 'Reza', 'reza@gmail.com', 'Kamar Standar', '2024-07-09', '2024-07-19', '2024-07-08 17:06:32'),
(8, 'Agung', 'agung@gmail.com', 'Kamar Keluarga', '2024-07-09', '2024-07-11', '2024-07-08 17:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `test_nb`
--

CREATE TABLE `test_nb` (
  `id_nb` int(11) NOT NULL,
  `nomor_kamar` varchar(50) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `tipe_kamar` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_nb`
--

INSERT INTO `test_nb` (`id_nb`, `nomor_kamar`, `harga`, `tipe_kamar`, `gambar`) VALUES
(2, 'No kamar 4', 1200000.00, 'Kamar Deluxe', 'assets/images/kamardeluxe.jpg'),
(3, 'No Kamar 8', 800000.00, 'Kamar Keluarga', 'assets/images/kamarkeluarga.jpg'),
(4, 'No Kamar 12', 400000.00, 'Kamar Standar', 'assets/images/kamarstandar.jpg'),
(5, 'No kamar 4', 1200000.00, 'Kamar Deluxe', 'assets/images/kamardeluxe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_nb`
--

CREATE TABLE `transaksi_nb` (
  `id_nb` int(11) NOT NULL,
  `customer_id_nb` int(11) DEFAULT NULL,
  `tipekamar_nb` varchar(255) DEFAULT NULL,
  `lamamenginap_nb` int(11) DEFAULT NULL,
  `biaya_nb` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_nb`
--

INSERT INTO `transaksi_nb` (`id_nb`, `customer_id_nb`, `tipekamar_nb`, `lamamenginap_nb`, `biaya_nb`) VALUES
(7, 2, 'Kamar Keluarga', 3, 2400000),
(8, 3, 'Kamar Standar', 4, 1600000),
(12, 7, 'Kamar Standar', 10, 4000000),
(13, 8, 'Kamar Keluarga', 2, 1600000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_nb`
--
ALTER TABLE `admin_nb`
  ADD PRIMARY KEY (`id_nb`),
  ADD UNIQUE KEY `email_nb` (`email_nb`);

--
-- Indexes for table `customer_nb`
--
ALTER TABLE `customer_nb`
  ADD PRIMARY KEY (`id_nb`);

--
-- Indexes for table `test_nb`
--
ALTER TABLE `test_nb`
  ADD PRIMARY KEY (`id_nb`);

--
-- Indexes for table `transaksi_nb`
--
ALTER TABLE `transaksi_nb`
  ADD PRIMARY KEY (`id_nb`),
  ADD KEY `customer_id_nb` (`customer_id_nb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_nb`
--
ALTER TABLE `admin_nb`
  MODIFY `id_nb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_nb`
--
ALTER TABLE `customer_nb`
  MODIFY `id_nb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test_nb`
--
ALTER TABLE `test_nb`
  MODIFY `id_nb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi_nb`
--
ALTER TABLE `transaksi_nb`
  MODIFY `id_nb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi_nb`
--
ALTER TABLE `transaksi_nb`
  ADD CONSTRAINT `transaksi_nb_ibfk_1` FOREIGN KEY (`customer_id_nb`) REFERENCES `customer_nb` (`id_nb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
