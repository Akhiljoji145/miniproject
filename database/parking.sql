-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 12:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `ad_name`, `ad_password`) VALUES
(1, 'admin', 'maliyil123'),
(2, 'joji', 'maliyil@123');

-- --------------------------------------------------------

--
-- Table structure for table `lots`
--

CREATE TABLE `lots` (
  `lot_id` int(11) NOT NULL,
  `lot_code` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lot_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lots`
--

INSERT INTO `lots` (`lot_id`, `lot_code`, `user_id`, `lot_status`) VALUES
(5, 'AS0001', 0, 'OUT');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tran_id` int(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_no` varchar(50) NOT NULL,
  `receipt_no` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date_of_trans` date NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tran_id`, `user_id`, `vehicle_no`, `receipt_no`, `time`, `date_of_trans`, `amount`) VALUES
(1, 9, 'KL-05-W-8697', '', '06:43:00', '2022-11-19', 200),
(2, 2, 'KL-05-AD-8657', '', '06:31:00', '2022-11-21', 200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `age`, `email`, `password`) VALUES
(1, 'akhil', 19, 'akhil@123', 'akhil'),
(2, 'jerry', 19, 'jerry@gmail.com', 'jerry'),
(6, 'akhil udayan', 19, 'akhiludayan@123', 'akhil@123'),
(8, 'Joji', 41, 'jojimaliyil@gmail.com', 'maliyil123'),
(9, 'akhil joji', 18, 'akhiljoji145@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehi_id` int(11) NOT NULL,
  `vehi_name` varchar(50) DEFAULT NULL,
  `vehi_type` varchar(50) DEFAULT NULL,
  `vehi_no` varchar(50) DEFAULT NULL,
  `lot_no` varchar(50) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `time_arr` time DEFAULT NULL,
  `date_arr` date DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehi_id`, `vehi_name`, `vehi_type`, `vehi_no`, `lot_no`, `user_id`, `contact_no`, `time_arr`, `date_arr`, `status`) VALUES
(4, 'honda shine', 'twowheeler', 'KL-05-W-8697', 'AS0001', 9, '947343468', '06:40:00', '2022-11-19', 'OUT'),
(5, 'maruti 800', 'fourwheeler', 'KL-05-AD-8697', 'AS0001', 2, '9656743468', '06:22:00', '2022-11-21', 'OUT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `lots`
--
ALTER TABLE `lots`
  ADD PRIMARY KEY (`lot_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tran_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehi_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lots`
--
ALTER TABLE `lots`
  MODIFY `lot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tran_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
