-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 08:47 PM
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
-- Database: `maaslanden`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_variables`
--

CREATE TABLE `game_variables` (
  `id` int(8) NOT NULL,
  `kind` varchar(16) NOT NULL,
  `variable` varchar(16) NOT NULL,
  `game_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_variables`
--

INSERT INTO `game_variables` (`id`, `kind`, `variable`, `game_id`) VALUES
(1, 'city', 'village', 1),
(2, 'city', 'village', 1),
(3, 'city', 'village', 1),
(4, 'city', 'village', 1),
(5, 'city', 'village', 1),
(6, 'city', 'town', 1),
(7, 'city', 'town', 1),
(8, 'city', 'town', 1),
(9, 'city', 'town', 1),
(10, 'city', 'city', 1),
(11, 'city', 'city', 1),
(12, 'city', 'city', 1),
(14, 'industry', 'fishing', 1),
(15, 'industry', 'nuclear', 1),
(16, 'industry', 'farming', 1),
(17, 'industry', 'tourism', 1),
(18, 'industry', 'forest', 1),
(19, 'industry', 'mining', 1),
(20, 'city_name', 'Amsterdam', 1),
(21, 'city_name', 'Utrecht', 1),
(22, 'city_name', 'Den Haag', 1),
(23, 'city_name', 'Rotterdam', 1),
(24, 'city_name', 'Nijmegen', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_variables`
--
ALTER TABLE `game_variables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game_variables`
--
ALTER TABLE `game_variables`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
