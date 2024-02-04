-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2022 at 11:12 AM
-- Server version: 5.7.40-log
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `select`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

DROP TABLE IF EXISTS `customer_registration`;
CREATE TABLE IF NOT EXISTS `customer_registration` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `reg_number` int(100) NOT NULL,
  `customer_type` varchar(100) NOT NULL,
  `payment Type` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `nic` varchar(100) NOT NULL,
  `your_specialities` text NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  PRIMARY KEY (`reg_number`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`id`, `name`, `contact_no`, `email`, `gender`, `reg_number`, `customer_type`, `payment Type`, `address`, `nic`, `your_specialities`, `user_name`, `password`) VALUES
(35, 'Ganeshi Umayangana', '0769859699', 'ganeshiumayangana@gmail.com', 'Female', 15669, ' Foriegn Customer', 'Card Payment', 'Galle', ' 200064500089', ' Cool drinks', 'Ganeshi', 15669),
(37, 'Nadeesha', '0758967855', 'nadeesha@gmail.com', 'Female', 15888, ' Foriegn Customer', 'Card Payment', 'Pitigala', ' 200486966332', ' Beverages ', 'Nadee', 15888);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviewdb`
--

DROP TABLE IF EXISTS `reviewdb`;
CREATE TABLE IF NOT EXISTS `reviewdb` (
  `name` varchar(45) NOT NULL,
  `comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewdb`
--

INSERT INTO `reviewdb` (`name`, `comment`) VALUES
('Ganeshi Umayangana', 'This shop has a good service');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
