-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 05:00 PM
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
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(15) NOT NULL,
  `card_number` int(30) NOT NULL,
  `expiry` int(15) NOT NULL,
  `cvv` int(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `card_number`, `expiry`, `cvv`, `email`) VALUES
(1, 0, 0, 0, ''),
(2, 0, 0, 0, ''),
(6, 0, 0, 0, ''),
(9, 34556677, 3345, 456, 'matffghhu@gmail.com'),
(10, 4253637, 2001, 123, 'mshj@gmail.com'),
(11, 23345666, 2345, 567, 'mathu@gmail.com'),
(12, 23345666, 2345, 567, 'mathu@gmail.com'),
(13, 244566, 2345, 234, 'dtffyugyu@gmail.com'),
(14, 244566, 2345, 234, 'dtffyugyu@gmail.com'),
(15, 425267383, 2001, 356, 'mathue@gmail.com'),
(16, 352616717, 2001, 432, 'dghdjdjd@gmail.com'),
(17, 352616717, 2001, 432, 'dghdj2jd@gmail.com'),
(18, 2147483647, 234, 123, 'mathusary@gmail.com'),
(19, 2147483647, 234, 123, 'mathusary@gmail.com'),
(20, 2147483647, 1222, 456, 'dgdghe@gmail.com'),
(21, 2147483647, 4432, 234, 'mathusageopi@icloud.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
