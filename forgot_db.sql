-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 08:16 PM
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
-- Database: `forgot_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `code` varchar(5) NOT NULL,
  `expire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `email`, `code`, `expire`) VALUES
(1, 'Staff.member008@gmail.com', '', 0),
(3, 'Staff.member008@gmail.com', '84520', 1681972112),
(4, 'Staff.member008@gmail.com', '56136', 1681972159),
(5, 'Staff.member008@gmail.com', '20577', 1681972256),
(6, 'Staff.member008@gmail.com', '20842', 1681972439),
(7, 'Staff.member008@gmail.com', '10731', 1682403660),
(8, 'Staff.member008@gmail.com', '53525', 1682604211),
(9, 'Staff.member008@gmail.com', '26954', 1682604971),
(10, 'Staff.member008@gmail.com', '98395', 1682607247),
(11, 'Staff.member008@gmail.com', '52303', 1682607403),
(12, 'Staff.member008@gmail.com', '30839', 1682607434),
(13, 'Staff.member008@gmail.com', '57259', 1682607786),
(14, 'Staff.member008@gmail.com', '77287', 1682607834),
(15, 'Staff.member008@gmail.com', '71269', 1682607902),
(16, 'Staff.member008@gmail.com', '41372', 1682607989),
(17, 'Staff.member008@gmail.com', '86072', 1682608072),
(18, 'Staff.member008@gmail.com', '62404', 1682608409),
(19, 'Staff.member008@gmail.com', '40924', 1682608875),
(20, 'Staff.member008@gmail.com', '12729', 1682609116),
(21, 'Staff.member008@gmail.com', '25586', 1682610363),
(22, 'Staff.member008@gmail.com', '44960', 1682610968),
(23, 'Staff.member008@gmail.com', '64977', 1682616521);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `date`) VALUES
(1, 'Staff.member008@gmail.com', 'TA12ta12', '2023-04-20 08:26:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
