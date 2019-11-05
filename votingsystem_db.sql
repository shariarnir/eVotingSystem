-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 07:05 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingsystem_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `id_request_tbl`
--

CREATE TABLE IF NOT EXISTS `id_request_tbl` (
  `id` int(11) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `user_department` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `id_request_tbl`
--

INSERT INTO `id_request_tbl` (`id`, `user_email`, `user_department`) VALUES
(1, 'shariar5532@gmail.com', 'cse'),
(12, 'shamim@gmail.com', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `users_db`
--

CREATE TABLE IF NOT EXISTS `users_db` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_gender` varchar(100) NOT NULL,
  `user_department` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_db`
--

INSERT INTO `users_db` (`user_id`, `user_name`, `user_email`, `user_gender`, `user_department`, `user_password`) VALUES
(8, 'Md. Shariar Hossain', 'shariar5532@gmail.com', 'Male', 'cse', '12345678'),
(9, 'shamim shuvo', 'shamim@gmail.com', 'Male', 'cse', '12345678'),
(10, 'Ahmed Rafi', 'rafi@gmail.com', 'Male', 'eee', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `id_request_tbl`
--
ALTER TABLE `id_request_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_db`
--
ALTER TABLE `users_db`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `id_request_tbl`
--
ALTER TABLE `id_request_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users_db`
--
ALTER TABLE `users_db`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
