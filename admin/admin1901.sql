-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2019 at 02:27 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin1901`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm_role`
--

CREATE TABLE `adm_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm_role`
--

INSERT INTO `adm_role` (`role_id`, `role_name`) VALUES
(2, 'Admin'),
(3, 'Author'),
(4, 'Editor'),
(5, 'Subscriber'),
(1, 'Superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `adm_user`
--

CREATE TABLE `adm_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_username` varchar(20) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_pic` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm_user`
--

INSERT INTO `adm_user` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_username`, `user_password`, `user_pic`, `role_id`) VALUES
(1, 'Dipto Ahamed', '0198213232', 'dipto@dwsdsd.sds', 'dipto', '6512bd43d9caa6e02c990b0a82652dca', 'user_1551705730_31106422.png', 1),
(2, 'Sujon ahamed', '0198213232', 'sujon@gmail.com', 'sujon', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'user_1551705758_635781403.png', 3),
(3, 'Ariful Islam', '018821324432', 'arif@gmail.com', 'arif', '6512bd43d9caa6e02c990b0a82652dca', 'user_1551705785_48131165.png', 4),
(4, 'Milton Mondol', '01782137232', 'milton@yahoo.com', 'milton', '6512bd43d9caa6e02c990b0a82652dca', 'user_1551705844_601180634.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm_role`
--
ALTER TABLE `adm_role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `adm_user`
--
ALTER TABLE `adm_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm_role`
--
ALTER TABLE `adm_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `adm_user`
--
ALTER TABLE `adm_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adm_user`
--
ALTER TABLE `adm_user`
  ADD CONSTRAINT `adm_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `adm_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
