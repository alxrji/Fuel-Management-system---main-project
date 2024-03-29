-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 08:26 AM
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
  `price` varchar(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`fid`, `date`, `fuel_type`, `price`, `stock`) VALUES
(44, '2023-03-09', 'Petrol', '100', 270),
(45, '2023-03-09', 'Diesel', '99', 490),
(46, '2023-03-09', 'CNG', '89', 500),
(47, '2023-03-08', 'Petrol', '88', 270),
(48, '2023-03-07', 'Petrol', '90', 270),
(49, '2023-03-06', 'Petrol', '98', 270),
(50, '2023-03-05', 'Petrol', '100', 270),
(51, '2023-03-04', 'Petrol', '95', 270),
(52, '2023-03-03', 'Petrol', '92', 270),
(53, '2023-03-09', 'CNG', '80', 500),
(54, '2023-03-08', 'CNG', '88', 500),
(55, '2023-03-07', 'CNG', '85', 500),
(56, '2023-03-05', 'CNG', '82', 500),
(57, '2023-03-04', 'CNG', '79', 500),
(58, '2023-03-03', 'CNG', '88', 500),
(59, '2023-03-09', 'Diesel', '98', 490),
(60, '2023-03-08', 'Diesel', '88', 490),
(61, '2023-03-06', 'Diesel', '75', 490),
(62, '2023-03-05', 'Diesel', '89', 490),
(63, '2023-03-06', 'Diesel', '90', 490),
(64, '2023-03-04', 'Diesel', '98', 490),
(65, '2023-03-10', 'Petrol', '150', 274),
(66, '2023-03-10', 'Diesel', '200', 490),
(67, '2023-03-10', 'CNG', '89', 500),
(68, '2023-03-10', 'Petrol', '100', 374),
(69, '2023-03-14', 'Petrol', '106', 274),
(70, '2023-03-14', 'Diesel', '90', 490),
(71, '2023-03-14', 'CNG', '78', 500),
(72, '2023-03-15', 'Petrol', '109', 284),
(73, '2023-03-15', 'Diesel', '97', 490),
(74, '2023-03-15', 'CNG', '74', 500),
(75, '2023-03-16', 'Petrol', '112', 284),
(76, '2023-03-16', 'Diesel', '95', 490),
(77, '2023-03-16', 'CNG', '87', 500),
(78, '2023-03-23', 'Petrol', '120', 309),
(79, '2023-03-23', 'Diesel', '98', 500),
(80, '2023-03-23', 'CNG', '87', 500),
(81, '2023-03-27', 'Petrol', '130', 309),
(82, '2023-03-27', 'Diesel', '95', 500),
(83, '2023-03-27', 'CNG', '79', 500),
(84, '2023-03-30', 'Petrol', '103', 559),
(85, '2023-03-30', 'Diesel', '98', 750),
(86, '2023-03-30', 'CNG', '65', 1000),
(87, '2023-03-31', 'Petrol', '125', 1059),
(88, '2023-03-31', 'Diesel', '81', 1250),
(89, '2023-03-31', 'CNG', '78', 1500),
(90, '2023-04-02', 'Petrol', '110', 1559),
(91, '2023-04-02', 'Diesel', '98', 1346),
(92, '2023-04-02', 'CNG', '78', 2000),
(93, '2023-04-03', 'Petrol', '128', 2059),
(94, '2023-04-03', 'Diesel', '100', 1846),
(95, '2023-04-03', 'CNG', '78', 2100);

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
(1, 'admin', 'admin', 0, 1),
(2, 'alxrji', 'Qwerty@123', 2, 1),
(3, 'alnsh', '1234', 2, 1),
(4, 'adfr', '1234', 2, 1),
(13, 'georgejacob393', '35823814', 3, 1),
(14, 'ABilahari139', 'cAaJhQQC', 3, 1),
(16, '327', '4DOzVXpr', 3, 1),
(17, '317', 'y0DBGrrd', 3, 1),
(19, '64444465646545601', 'sjkQgdnS', 3, 1),
(20, '64444465646545794', 'EeL8WMRB', 3, 1),
(21, '64444465646545932', 'DyLrF3mR', 3, 1),
(22, '64444465646545310', 'ByzqgqKB', 3, 1),
(23, 'antonsebastian284', 'BIFdoMRL', 3, 1),
(24, 'antonsebastian124', '1CDt05cS', 3, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `user_id` int(250) NOT NULL,
  `log_id` int(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `phone` bigint(250) NOT NULL DEFAULT 0,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`user_id`, `log_id`, `fname`, `lname`, `phone`, `email`) VALUES
(9, 13, 'george', 'jacob', 6238681837, 'jacobgeorge@gmail.com'),
(10, 14, 'A', 'Bilahari', 9745286448, 'yadu598@gmail.com'),
(19, 23, 'anton', 'sebastian', 9898989898, 'alexreji777@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `Invoice` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `user_id`, `fuel`, `quantity`, `price`, `date`, `Invoice`) VALUES
(40, 1, 'Petrol', 5, '500', '2023-03-02', 1),
(41, 1, 'Petrol', 12, '1440', '2023-03-03', 1),
(42, 1, 'Petrol', 10, '1220', '2023-03-09', 1),
(43, 1, 'Petrol', 1, '122', '2023-03-09', 1),
(44, 1, 'Petrol', 2, '244', '2023-03-09', 1),
(45, 1, 'Petrol', 3, '366', '2023-03-09', 1),
(46, 1, 'Petrol', 2, '244', '2023-03-09', 1),
(47, 1, 'Diesel', 10, '1000', '2023-03-09', 1),
(48, 1, 'Petrol', 2, '244', '2023-03-09', 1),
(49, 1, 'Petrol', 2, '200', '2023-03-09', 1),
(50, 1, 'Petrol', 2, '200', '2023-03-09', 1),
(51, 1, 'Petrol', 10, '1060', '2023-03-14', 1),
(52, 1, 'Petrol', 25, '2800', '2023-03-16', 1),
(53, 1, 'Diesel', 10, '950', '2023-03-16', 1),
(55, 1, 'Petrol', 111, '11433', '2023-03-30', 1),
(56, 2, 'Petrol', 1, '125', '2023-03-31', 1),
(57, 2, 'Petrol', 55, '6050', '2023-04-02', 0),
(58, 2, 'Petrol', 12, '1536', '2023-04-03', 0),
(59, 2, 'Petrol', 12, '1536', '2023-04-03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `addresss` varchar(30) NOT NULL,
  `place` char(30) NOT NULL,
  `coin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `log_id`, `fname`, `lname`, `email`, `phone`, `addresss`, `place`, `coin`) VALUES
(1, 2, ' alex', 'Reji', 'alexreji777@gmail.com', 6282983345, 'qsdfgn', 'Idukki', 1740),
(2, 3, 'Alan', 'Shijo', 'alnshijo343@gmail.co', 9865452245, 'kurisummoottil', 'Idukki', 800),
(3, 4, 'Athul', 'vk', 'atulvk123@gmail.com', 9658452257, 'Abhi Home', 'kott', 0);

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
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

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
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
