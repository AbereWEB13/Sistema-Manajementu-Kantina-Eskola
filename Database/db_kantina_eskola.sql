-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2025 at 07:24 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kantina_eskola`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_costumer`
--

CREATE TABLE `tbl_costumer` (
  `id_costumer` int NOT NULL,
  `naran` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `seksu` enum('Mane','Feto') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `numeru_telemovel` int DEFAULT NULL,
  `enderesu` varchar(19) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_costumer`
--

INSERT INTO `tbl_costumer` (`id_costumer`, `naran`, `seksu`, `numeru_telemovel`, `enderesu`, `email`, `image`) VALUES
(4, 'Ana Martins', 'Feto', 77234504, 'Kuluhun', 'ana@example.com', '1764069159_55a23fde6f815b047137.jpg'),
(5, 'Carlos Pinto', 'Mane', 77234505, 'Fatuhada', 'carlos@example.com', '1764069202_ecf77e61eb325ef87be0.jpg'),
(6, 'Helena Soares', 'Feto', 77234506, 'Ermera, Gleno', 'helena@example.com', '1764069248_52b51a4b78fee3becb2f.jpg'),
(7, 'Mateus Araujo', 'Mane', 77234507, 'Liquiça, Bazartete', 'mateus@example.com', '1764069327_765d8c4732205de1c261.jpg'),
(8, 'Rosa Fernandes', 'Feto', 77234508, 'Caicoli', 'rosa@example.com', '1764069460_f008d60b7e5530ce49d4.jpg'),
(9, 'Paulo Correia', 'Mane', 77234509, 'Viqueque, Uato-Lari', 'paulo@example.com', '1764069504_ef0dd97e64489ba65173.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fatin`
--

CREATE TABLE `tbl_fatin` (
  `id_fatin` int NOT NULL,
  `kode_fatin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `naran_fatin` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `oras_loke` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `oras_taka` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fatin`
--

INSERT INTO `tbl_fatin` (`id_fatin`, `kode_fatin`, `naran_fatin`, `oras_loke`, `oras_taka`, `image`) VALUES
(19, 'FTN001', 'Kantina 1', '07:00', '18:30', '1765949717_03a9e38b42ccfc220d44.webp'),
(20, 'FTN002', 'Kantina 2', '06:30', '17:37', '1765949888_04922728933e675b3470.webp'),
(21, 'FTN003', 'Kantina 3', '06:30', '17:30', '1765949925_c2416c9cbdfb8345036f.webp'),
(22, 'FTN004', 'Kantina 4', '06:30', '17:30', '1765949969_0cda299df260613eaa30.webp'),
(23, 'FTN005', 'Kantina 5', '06:30', '17:30', '1765950191_baf85201ab98b3dbaafa.jpg'),
(24, 'FTN006', 'Kantina 6', '06:30', '17:30', '1765950217_ad441c280774926e2044.jpg'),
(25, 'FTN007', 'Kantina 7', '06:30', '17:30', '1765950244_f952fbf405107fd33136.jpg'),
(26, 'FTN008', 'Kantina 8', '07:00', '18:00', '1765950276_82399a4dcaaf11807ab5.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategoria`
--

CREATE TABLE `tbl_kategoria` (
  `id_kategoria` int NOT NULL,
  `naran_kategoria` enum('Makanan','Minuman') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskrisaun` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kategoria`
--

INSERT INTO `tbl_kategoria` (`id_kategoria`, `naran_kategoria`, `deskrisaun`) VALUES
(7, 'Makanan', 'Hahan'),
(12, 'Minuman', 'Bebidas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontraktu`
--

CREATE TABLE `tbl_kontraktu` (
  `id_kontraktu` int NOT NULL,
  `id_costumer` int DEFAULT NULL,
  `id_fatin` int DEFAULT NULL,
  `data_hahu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_remata` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `total_osan` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kontraktu`
--

INSERT INTO `tbl_kontraktu` (`id_kontraktu`, `id_costumer`, `id_fatin`, `data_hahu`, `data_remata`, `total_osan`) VALUES
(11, 7, 19, '2025-12-17', '2026-01-16', '4000.00'),
(12, 5, 20, '2025-12-30', '2026-02-24', '500.00'),
(13, 6, 21, '2025-12-25', '2026-03-30', '700.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int NOT NULL,
  `id_costumer` int DEFAULT NULL,
  `id_produtu` int DEFAULT NULL,
  `presu` decimal(10,2) DEFAULT NULL,
  `kuantidade` int DEFAULT NULL,
  `total_presu` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_costumer`, `id_produtu`, `presu`, `kuantidade`, `total_presu`) VALUES
(17, 4, 19, '0.50', 1, NULL),
(18, 5, 20, '0.50', 1, NULL),
(19, 6, 22, '0.25', 5, NULL),
(20, 7, 20, '0.50', 2, NULL),
(21, 8, 24, '0.50', 2, NULL),
(22, 4, 24, '0.50', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pagamentu`
--

CREATE TABLE `tbl_pagamentu` (
  `id_pagamentu` int NOT NULL,
  `id_costumer` int DEFAULT NULL,
  `osan` decimal(10,2) DEFAULT NULL,
  `data_pagamentu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `estatutu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_atualiza` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pagamentu`
--

INSERT INTO `tbl_pagamentu` (`id_pagamentu`, `id_costumer`, `osan`, `data_pagamentu`, `estatutu`, `data_atualiza`) VALUES
(13, 4, '500.00', '2025-12-17', 'Selu Kompletu', '2026-01-17'),
(14, 5, '500.00', '2025-12-23', 'Selu La Kompletu', '2026-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produtu`
--

CREATE TABLE `tbl_produtu` (
  `id_produtu` int NOT NULL,
  `naran_produtu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_kategoria` int DEFAULT NULL,
  `presu` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_produtu`
--

INSERT INTO `tbl_produtu` (`id_produtu`, `naran_produtu`, `id_kategoria`, `presu`) VALUES
(19, 'Burger', 7, '0.50'),
(20, 'Pop-Ice Drink', 12, '0.50'),
(21, 'Es-Teh', 12, '0.25'),
(22, 'Goregan', 7, '0.25'),
(23, 'Nasi Bungkus', 7, '0.50'),
(24, 'Nasi Kuning', 7, '0.50'),
(25, 'Aqua', 12, '0.25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` int NOT NULL,
  `naran_role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int NOT NULL,
  `naran_kompletu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_role` int DEFAULT NULL,
  `ativu` enum('Sim','Lae') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_costumer`
--
ALTER TABLE `tbl_costumer`
  ADD PRIMARY KEY (`id_costumer`);

--
-- Indexes for table `tbl_fatin`
--
ALTER TABLE `tbl_fatin`
  ADD PRIMARY KEY (`id_fatin`);

--
-- Indexes for table `tbl_kategoria`
--
ALTER TABLE `tbl_kategoria`
  ADD PRIMARY KEY (`id_kategoria`);

--
-- Indexes for table `tbl_kontraktu`
--
ALTER TABLE `tbl_kontraktu`
  ADD PRIMARY KEY (`id_kontraktu`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tbl_pagamentu`
--
ALTER TABLE `tbl_pagamentu`
  ADD PRIMARY KEY (`id_pagamentu`);

--
-- Indexes for table `tbl_produtu`
--
ALTER TABLE `tbl_produtu`
  ADD PRIMARY KEY (`id_produtu`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_costumer`
--
ALTER TABLE `tbl_costumer`
  MODIFY `id_costumer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_fatin`
--
ALTER TABLE `tbl_fatin`
  MODIFY `id_fatin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_kategoria`
--
ALTER TABLE `tbl_kategoria`
  MODIFY `id_kategoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_kontraktu`
--
ALTER TABLE `tbl_kontraktu`
  MODIFY `id_kontraktu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_pagamentu`
--
ALTER TABLE `tbl_pagamentu`
  MODIFY `id_pagamentu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_produtu`
--
ALTER TABLE `tbl_produtu`
  MODIFY `id_produtu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
