-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 08:33 PM
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
-- Database: `data123`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `sno` int(11) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `gimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`sno`, `gname`, `gimg`) VALUES
(1, 'Gallery ID 1', 'img-644968d0b73306.54046006.jpg'),
(2, 'Gallery ID 2', 'img-644968ec14f362.05431826.jpg'),
(3, 'Gallery ID 3', 'img-644968fd2e1b89.95296598.jpg'),
(4, 'Gallery ID 4', 'img-64496910102b81.42675247.jpg'),
(5, 'Gallery ID 5', 'img-6449692b09bf48.61709487.jpg'),
(6, 'Gallery ID 6', 'img-6449693cd744e2.43125970.jpg'),
(7, 'Gallery ID 7', 'img-64496955724884.48346069.jpg'),
(8, 'Gallery ID 8', 'img-64496965997677.82767458.jpg'),
(9, 'Gallery ID 9', 'img-6449697818c038.80996064.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
