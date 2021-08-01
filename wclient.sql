-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 10:13 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wclient`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile_photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `user`, `pass`, `email`, `profile_photo`) VALUES
(2, 'Darshan', 'e10adc3949ba59abbe56e057f20f883e', '1darshank@gmail.com', NULL),
(3, 'Vinay', 'e10adc3949ba59abbe56e057f20f883e', 'vinay@123.com', NULL),
(4, 'Dhruv Parikh', 'e10adc3949ba59abbe56e057f20f883e', 'dhruv@123.com', NULL),
(5, 'Parth', 'e10adc3949ba59abbe56e057f20f883e', 'parth@test.com', NULL),
(6, 'test', 'e10adc3949ba59abbe56e057f20f883e', 'test@test.com', NULL),
(7, 'Parth Chauhan', 'e10adc3949ba59abbe56e057f20f883e', 'parth@123.com', NULL),
(8, 'Kirtan Nayee', 'e10adc3949ba59abbe56e057f20f883e', '2kirtan@gmail.com', NULL),
(9, 'Parth Patel', 'e10adc3949ba59abbe56e057f20f883e', 'parth@1234.com', NULL),
(15, 'Vinay Patel', 'e10adc3949ba59abbe56e057f20f883e', 'patevina@kean.edu', NULL),
(16, 'Dhruv Patel', 'fcea920f7412b5da7be0cf42b8c93759', 'pateldh@asdf.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
