-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 08:35 PM
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
-- Table structure for table `add_address`
--

CREATE TABLE `add_address` (
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `pincode` bigint(20) NOT NULL,
  `states` varchar(255) NOT NULL,
  `house` varchar(255) NOT NULL,
  `roadname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_address`
--

INSERT INTO `add_address` (`email`, `fullname`, `mobile`, `gender`, `pincode`, `states`, `house`, `roadname`) VALUES
('veeramallavamsi72@gmail.com', 'vamsi v', 8247252286, '', 533297, 'Andhra pradesh', 'D-No.: 4-79/1', 'maridamma temple back street');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
