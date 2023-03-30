-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 04:23 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuel`
--

-- --------------------------------------------------------

--
-- Table structure for table `coin`
--

CREATE TABLE `coin` (
  `coin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `coin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE `fuel` (
  `fid` int(11) NOT NULL,
  `date` date NOT NULL,
  `fuel_type` varchar(12) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`fid`, `date`, `fuel_type`, `price`) VALUES
(4, '2022-11-04', 'Petrol', 6565),
(5, '2022-11-04', 'Diesel', 845),
(6, '2022-11-04', 'CNG', 585),
(7, '2022-11-04', 'Petrol', 234),
(8, '2022-11-04', 'Diesel', 522),
(9, '2022-11-04', 'CNG', 258),
(10, '2022-11-04', 'Petrol', 522),
(11, '2022-11-04', 'Petrol', 1),
(12, '2022-11-05', 'Diesel', 234),
(13, '2022-11-05', 'Petrol', 100),
(14, '2022-11-05', 'Diesel', 789),
(15, '2022-11-06', 'Petrol', 106),
(16, '2022-11-06', 'Diesel', 98),
(18, '2022-11-06', 'CNG', 75),
(19, '2022-11-07', 'Petrol', 100),
(20, '2022-11-07', 'Diesel', 90),
(21, '2022-11-07', 'CNG', 79),
(22, '2022-11-11', 'Diesel', 78),
(23, '2022-11-15', 'Petrol', 120),
(24, '2022-11-15', 'Diesel', 90),
(25, '2022-11-15', 'CNG', 78),
(26, '2022-11-16', 'Petrol', 100),
(27, '2022-11-16', 'Diesel', 89),
(28, '2022-11-16', 'CNG', 88),
(29, '2022-11-16', 'Petrol', -50000),
(30, '2022-11-16', 'Petrol', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passwd` varchar(30) NOT NULL,
  `usertype` int(11) NOT NULL,
  `statuss` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `username`, `passwd`, `usertype`, `statuss`) VALUES
(1, 'admin', '1234', 0, 1),
(75, 'alxrji', '12345', 1, 1),
(76, 'aln', '123456', 1, 1),
(77, 'alan', '1234', 2, 1),
(78, 'alex', '12345', 2, 1),
(79, 'nayara', '12345', 2, 1),
(80, 'dev', '1234', 1, 1),
(81, 'alx', 'nayara', 2, 1),
(82, 'essar', 'essar', 2, 1),
(83, 'dhamu', '1234', 2, 1),
(84, 'ABC123', 'ABC123', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `user_id` int(20) NOT NULL,
  `log_id` int(23) NOT NULL,
  `fname` varchar(23) NOT NULL,
  `lname` varchar(23) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(23) NOT NULL,
  `addresss` varchar(23) NOT NULL,
  `place` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`user_id`, `log_id`, `fname`, `lname`, `email`, `phone`, `addresss`, `place`) VALUES
(14, 81, 'nayara', 'fuels', 'nayarafuels@gmail.com', 6905073560, 'nayara fuels kottayam', 'Kottayam'),
(15, 82, 'essar', 'fuels', 'essarfuels@gmail.com', 6282983345, 'essarfuels pala', 'pala'),
(16, 83, 'bbkj', 'bjbk', 'a..le..xre.ji777@gma.com', 6282983345, 'asdfghjkuytrety', 'kottayam'),
(17, 84, 'george', 'DDFFF', 'ASD@BD.CO', 8000000000, '@##@@', 'D!@');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `addresss` varchar(30) NOT NULL,
  `place` char(30) NOT NULL,
  `coin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `log_id`, `fname`, `lname`, `email`, `phone`, `addresss`, `place`, `coin`) VALUES
(11, 78, 'Alex', 'Reji', 'alexreji777@gmail.co', 6282983345, 'Kurisummoottil house', 'Idukki', 0),
(12, 76, 'Alan', 'Shijo', 'alanshijo@gmail.com', 9747254577, 'Thekkel', 'Paika', 0),
(13, 80, 'dev', 'das', 'alexreji777@gmail.co', 6282983345, 'thekkel', 'vdcasxs', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coin`
--
ALTER TABLE `coin`
  ADD PRIMARY KEY (`coin_id`);

--
-- Indexes for table `fuel`
--
ALTER TABLE `fuel`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `renter`
--
ALTER TABLE `renter`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `foreign key` (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coin`
--
ALTER TABLE `coin`
  MODIFY `coin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fuel`
--
ALTER TABLE `fuel`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
