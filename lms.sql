-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 12:01 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(255) NOT NULL,
  `rad1` varchar(50) NOT NULL,
  `rad2` varchar(50) NOT NULL,
  `rad3` varchar(50) NOT NULL,
  `rad4` varchar(50) NOT NULL,
  `rad5` varchar(50) NOT NULL,
  `rad6` varchar(50) NOT NULL,
  `rad7` varchar(50) NOT NULL,
  `rad8` varchar(50) NOT NULL,
  `rad9` varchar(50) NOT NULL,
  `rad10` varchar(50) NOT NULL,
  `rad11` varchar(50) NOT NULL,
  `rad12` varchar(50) NOT NULL,
  `rad13` varchar(50) NOT NULL,
  `rad14` varchar(50) NOT NULL,
  `rad15` varchar(50) NOT NULL,
  `rad16` varchar(50) NOT NULL,
  `rad17` varchar(50) NOT NULL,
  `rad18` varchar(50) NOT NULL,
  `rad19` varchar(50) NOT NULL,
  `rad20` varchar(50) NOT NULL,
  `total` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `user_fk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` text NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `department`, `password`) VALUES
(76, 'faith', 'aruwa', 'faruwa@linkageassurance.com', 'kitchen', 'eed8cdc400dfd4ec85dff70a170066b7'),
(77, 'dami', 'bakare', 'dbakare@linkageassurance.com', 'kitchen', '980ac217c6b51e7dc41040bec1edfec8'),
(80, 'matthew', 'Okoroafor', 'mokoroafor@linkageassurance.com', 'kitchen', '9aee390f19345028f03bb16c588550e1'),
(81, 'Samuel', 'Ogogo', 'sogogo@linkageassurance.com', 'kitchen', 'af15d5fdacd5fdfea300e88a8e253e82'),
(83, 'Dami', 'Oyatokun', 'doyatokun@linkageassurance.com', 'IT', '980ac217c6b51e7dc41040bec1edfec8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`),
  ADD KEY `user_fk` (`user_fk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `grade_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
