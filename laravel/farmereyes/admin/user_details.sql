-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2016 at 10:34 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soil`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `name` text NOT NULL,
  `number` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `hr_date` date NOT NULL,
  `zone` text NOT NULL,
  `division` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`name`, `number`, `address`, `email`, `hr_date`, `zone`, `division`, `pass`) VALUES
('Tamim Ibn Aman', '+881829260190', 'Kuril, Dhaka', 'tamim@gmail.com', '2016-09-07', 'Kuril', 'Dhaka', 'tamim'),
('Rezwan Anjum Nibir', '+8801726726272', 'Mirpur,Dhaka', 'nibir@gmail.com', '2016-09-09', 'Mirpur', 'Dhaka', 'nibir'),
('Rifat Monzur', '+8801274037957', 'Mirpur 6, DHaka', 'rifat@gmail.com', '2016-09-07', 'Mirpur', 'Dhaka', 'rifat'),
('Shakil Ahmed', '+8801274343957', 'Wari, DHaka', 'shakil@gmail.com', '2016-09-09', 'Wari', 'Dhaka', 'shakil');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
