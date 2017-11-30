-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2016 at 06:22 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agm`
--

-- --------------------------------------------------------

--
-- Table structure for table `kitsensor`
--

CREATE TABLE `kitsensor` (
  `division` text NOT NULL,
  `district` text NOT NULL,
  `user_zone` text NOT NULL,
  `kit_no` text NOT NULL,
  `moi` varchar(20) NOT NULL,
  `hum` varchar(20) NOT NULL,
  `temp` varchar(20) NOT NULL,
  `ph` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kitsensor`
--

INSERT INTO `kitsensor` (`division`, `district`, `user_zone`, `kit_no`, `moi`, `hum`, `temp`, `ph`, `created_at`) VALUES
('Barishal', 'Barishal', 'Barishal sadar', '1234', '20', '34', '29', '7.3', '2016-12-04 17:18:00'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '20', '34', '29', '7.3', '2016-12-04 17:18:13'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '33', '32', '31', '7.6', '2016-12-04 17:19:07'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '33', '32', '31', '7.6', '2016-12-04 17:19:18'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '28', '25', '31', '7.1', '2016-12-04 17:20:45'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '40', '38', '34', '7.6', '2016-12-04 17:20:45'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '28', '25', '31', '7.1', '2016-12-04 17:20:49'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '40', '38', '34', '7.6', '2016-12-04 17:20:49'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '25', '22', '30', '7.5', '2016-12-04 17:21:30'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '25', '22', '30', '7.5', '2016-12-04 17:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `division` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_zone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kit_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_id`, `phone_no`, `division`, `district`, `user_zone`, `present_address`, `kit_number`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sama', 'sofjdsf', '1293', '1', '1', 'sofjds', 'sodfjds', 'sdfodjsf', 'sfjdosf', NULL, '2016-11-25 10:08:20', '2016-11-25 10:08:20'),
(2, 'Rezwana anjum Nibir', '1234', '12372', '1', '1', 'mirpur', 'a/b,c/d.e.f -1216', '1235-d6', 'samasama', NULL, '2016-11-25 10:29:09', '2016-11-25 10:29:09'),
(3, 'rifat apu', 'rifat _apu', '3efefr23', '1', '1', '34243', 'jnjngeirier', '2334234', '1234', NULL, '2016-11-25 10:39:26', '2016-11-25 10:39:26'),
(4, 'rifat bal', 'rifat  bal', 'jijbkhbk', '1', '1', 'yigyt8', 'ouijhsbyvyuyvy7672y4h4b', 'k287364782', 'gutibaj', NULL, '2016-11-28 05:50:03', '2016-11-28 05:50:03'),
(5, 'ektbd', 'hdbi', 'tdkehd', 'Chitagong', 'Shylet', 'ejtndu508e', '45ht85u', 'cno4u5h98', 'djh', NULL, '2016-11-28 05:54:09', '2016-11-28 05:54:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_id_unique` (`user_id`),
  ADD UNIQUE KEY `users_phone_no_unique` (`phone_no`),
  ADD UNIQUE KEY `users_kit_number_unique` (`kit_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
