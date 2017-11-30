-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2016 at 05:40 AM
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
('Barishal', 'Barishal', 'Barishal sadar', '1234', '25', '22', '30', '7.5', '2016-12-04 17:21:34'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '0', '28.00', '58.00', '16.06', '2016-12-06 22:19:50'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '0', '28.00', '58.0016', '02', '2016-12-06 22:21:37'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '0', '28.00', '58.00', '16.01', '2016-12-06 22:22:05'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '0', '28.00', '58.00', '16.00', '2016-12-06 22:23:13'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '0', '28.00', '58.00', '15.96', '2016-12-06 22:23:59'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '28.00', '58.00', '15.97', '', '2016-12-06 22:24:47'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '0', '28.00', '58.0015', '97', '2016-12-06 22:25:58'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '', '', '', '', '2016-12-06 22:30:25'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '', '', '', '', '2016-12-06 22:33:45'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '0', '28.00', '57.00', '15.87', '2016-12-06 22:55:05'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '', '', '', '', '2016-12-07 04:07:38'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '', '', '', '', '2016-12-07 04:10:24'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '', '', '', '', '2016-12-07 04:10:28'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '', '', '', '', '2016-12-07 04:10:33'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '0', '27.0054', '00', '', '2016-12-07 04:12:27'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '0', '26.00', '55.00', '15.45', '2016-12-07 04:12:42'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '027.00', '54.00', '16.07', '', '2016-12-07 04:13:16'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '', '', '', '', '2016-12-07 04:14:14'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '', '', '', '', '2016-12-07 04:18:03'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '', '', '', '', '2016-12-07 04:22:56'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '28.00', '51.00', '15.64', '', '2016-12-07 04:28:56'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '', '', '', '', '2016-12-07 04:29:55'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '', '', '', '', '2016-12-07 04:29:56'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '0', '28.0051', '0015.61', '', '2016-12-07 04:31:11'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '0', '51.00', '15.63', '', '2016-12-07 04:32:02'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '', '', '', '', '2016-12-07 04:49:30'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '', '', '', '', '2016-12-07 04:49:32'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '', '', '', '', '2016-12-07 04:49:33'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '028.00', '49.00', '15.37', '', '2016-12-07 04:51:09'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '0', '28.00', '49.00', '', '2016-12-07 04:52:32'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '27.00', '15.80', '', '', '2016-12-07 05:43:39'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '29.00', '57.00', '', '', '2016-12-07 05:45:27'),
('Barishal', 'Barishal', 'Barishal sadar', '1234', '1', '49.00', '15.94', '', '2016-12-07 05:52:48');

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
(2, 'Rezwana anjum Nibir', '1234', '12372', '1', '1', 'mirpur', 'a/b,c/d.e.f -1216', '1235-d6', 'samasama', NULL, '2016-11-25 10:29:09', '2016-11-25 10:29:09'),
(3, 'rifat apu', 'rifat _apu', '3efefr23', '1', '1', '34243', 'jnjngeirier', '2334234', '1234', NULL, '2016-11-25 10:39:26', '2016-11-25 10:39:26'),
(4, 'rifat Islam', 'rifat  Islam', 'jijbkhbk', '1', '1', 'yigyt8', 'ouijhsbyvyuyvy7672y4h4b', 'k287364782', 'gutibaj', NULL, '2016-11-28 05:50:03', '2016-12-06 16:48:07'),
(5, 'ektbd', 'hdbi', 'tdkehd', 'Chitagong', 'Shylet', 'ejtndu508e', '45ht85u', 'cno4u5h98', 'djh', NULL, '2016-11-28 05:54:09', '2016-11-28 05:54:09'),
(6, 'hghghghghghgghh', 'frfrfr', 'wdqe', '1', '1', '4234', 'wdcedf', '32423', '1213', NULL, '2016-12-06 12:48:50', '2016-12-06 12:48:50'),
(7, 'Rezwan Anjum Nibir', 'Rezwan Anjum Nibir', '0173719995', '1', '1', 'Barishal sadar', 'Barishal sadar', '1234', '12345678', NULL, '2016-12-06 16:48:59', '2016-12-06 16:48:59'),
(8, 'tamim', 'Tamim', '9821083708', '1', '1', 'jndiu joeo', 'jhf jyei ruio', '87989', '343', NULL, '2016-12-06 16:50:05', '2016-12-06 16:50:05'),
(9, 'reza e rabbi', 'Reza', '380297983', '1', '1', 'ej9wuehnfl', 'u8938,28389', '343', '09809', NULL, '2016-12-06 16:50:32', '2016-12-06 16:50:32');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
