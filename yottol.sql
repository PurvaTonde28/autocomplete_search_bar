-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 01:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yottol`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city` text NOT NULL,
  `state_union` text NOT NULL,
  `population` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `state_union`, `population`) VALUES
(1, 'Mumbai\r\n', 'Maharashtra\r\n', '1,24,42,373\r\n'),
(2, 'Delhi\r\n', 'Delhi\r\n', '1,10,07,835\r\n'),
(3, 'Bangalore\r\n', 'Karnataka\r\n', '84,25,970\r\n'),
(4, 'Hyderabad\r\n', 'Telangana\r\n', '68,09,970\r\n'),
(5, 'Pune\r\n', 'Maharashtra\r\n', '31,15,431\r\n'),
(6, 'Kanpur\r\n', 'Uttar Pradesh\r\n', '27,67,031\r\n'),
(7, 'Kota[6]\r\n', 'Rajasthan\r\n', '10,01,694\r\n'),
(8, 'Kochi\r\n', 'Kerala', '6,02,046\r\n'),
(9, 'Malegaon\r\n', 'Maharashtra\r\n', '4,71,312\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
