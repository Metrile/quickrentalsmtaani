-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 12:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `gmailaccount` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `firstname`, `lastname`, `phonenumber`, `gmailaccount`, `password`, `confirmpassword`) VALUES
(22, 'Metrile ', 'john', 754676450, 'otise@gmail.com', '963', '963'),
(23, 'herman', 'j', 786543212, 'herman@gmail.com', '123456', '123456'),
(24, 'Metrile ', 'Awuor', 754676456, 'aawuormetrile@gmail.com', '547613', '547613'),
(25, 'Metrile ', 'Awuor', 754676450, 'aawuormetrile@gmail.com', '547613', '547613'),
(26, 'Metrile ', '', 0, '', '', ''),
(27, 'george', 'bobo', 765432098, 'gb@gmail.com', '', '5432'),
(28, 'georger', 'bobos', 765432092, 'gbs@gmail.com', '', '54321'),
(29, 'georger', 'bobos', 765432092, 'gbs@gmail.com', '', '547613'),
(30, 'alphonce', 'odhiambo', 1122334455, 'alo@gmail.com', '', '3434'),
(31, 'Metrile ', 'Awuor', 765432098, 'aawuormetrile@gmail.com', '', '547613'),
(32, 'Metrile ', 'Awuor', 786543212, 'long@gmail.com', '', '7410'),
(33, 'Metrile ', 'Awuor', 765432098, 'aawuormetrile@gmail.com', '', '547613'),
(34, 'Metrile ', 'Awuor', 786543212, 'aawuormetrile@gmail.com', '', '547613'),
(35, 'Metrile ', 'Awuor', 754676450, 'aawuormetrile@gmail.com', '', '547613'),
(36, 'Metrile ', 'Awuor', 786543212, 'aawuormetrile@gmail.com', '', '547613');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
