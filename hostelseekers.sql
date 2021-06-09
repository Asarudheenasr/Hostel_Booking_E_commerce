-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 10:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostelseekers`
--

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hostel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedcapacity` int(11) NOT NULL,
  `ac` tinyint(1) NOT NULL,
  `food` tinyint(1) NOT NULL,
  `men` tinyint(1) NOT NULL,
  `woman` tinyint(1) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `shelf` tinyint(1) NOT NULL,
  `parking` tinyint(1) NOT NULL,
  `kitchen` tinyint(1) NOT NULL,
  `laundry` tinyint(1) NOT NULL,
  `fee` int(11) NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`id`, `created_at`, `updated_at`, `hostel_name`, `district`, `city`, `address`, `bedcapacity`, `ac`, `food`, `men`, `woman`, `wifi`, `shelf`, `parking`, `kitchen`, `laundry`, `fee`, `mobile`, `description`) VALUES
(21, '2020-03-10 01:19:13', '2020-03-10 01:19:13', 'malabar hostel', 'Eranakulam', 'kaloor', 'Pottakuzhi Junction, Near to pottakuzhi chruch, Kaloor, ernakulam - 682017 (Map)', 10, 0, 1, 0, 1, 1, 1, 0, 0, 1, 45000, '9798465674', ''),
(22, '2020-03-10 01:25:41', '2020-03-10 01:25:41', 'youth man\'s hostel', 'calicut', 'calicut city', 'East Nadakavu, Calicut City, Kozhikode - 673004, Near Old Salkara Hostel (Map)', 30, 0, 1, 1, 0, 0, 1, 1, 0, 1, 3800, '9098443322', ''),
(23, '2020-03-11 00:07:10', '2020-03-11 00:07:10', 'Design Ashram', 'calicut', 'west hill', 'YMCA Cross road, YMCA Cross Road, Calicut - 673001', 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 6000, '8085237513', 'A 100 year-old courtyard residence - previously home to a Gujarathi family with origins in the migration of traders (after Ghazni\'s conquest) from Gujarat to Kozhikode who set down roots in Kozhikode,');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hostel_id` bigint(20) NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `hostel_id`, `images`) VALUES
(6, 19, '1583821546.jpeg'),
(7, 19, '1583821546.jpeg'),
(8, 19, '1583821546.jpeg'),
(9, 20, '1583822274.jpeg'),
(10, 20, '1583822274.jpeg'),
(11, 21, '1583822953.jpeg'),
(12, 21, '1583822953.jpeg'),
(13, 22, '1583823341.jpeg'),
(14, 22, '1583823341.jpeg'),
(15, 23, '1583905031.jpeg'),
(16, 23, '1583905031.jpeg'),
(17, 23, '1583905031.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_24_050623_addnewtousers', 2),
(4, '2020_02_27_044635_create_hostels_table', 3),
(5, '2020_03_02_064031_newcontent', 4),
(7, '2020_03_05_073211_create_images_table', 5),
(8, '2020_03_11_050101_description', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `mobile`, `age`, `marital_status`, `occupation`, `proimage`, `type`) VALUES
(2, 'asarudheen', 'asarudheenasr@gmail.com', NULL, '$2y$10$Yw5sZpalVkBg9I0BWNNLe.3FYCnZ2uRTO61at1uQLYM.XnnBbJ8MW', NULL, NULL, NULL, '9605019871', 23, 'single', 'engineer', '', 'admin'),
(3, 'asr', 'asr@gmail.com', NULL, '$2y$10$Yw5sZpalVkBg9I0BWNNLe.3FYCnZ2uRTO61at1uQLYM.XnnBbJ8MW', NULL, '2020-02-25 12:28:50', '2020-02-25 12:28:50', '8848237513', 24, 'single', 'student', 'C:\\xampp\\tmp\\php74FA.tmp', 'user'),
(7, 'steve', 'steve@gmail.com', NULL, '$2y$10$JT62XriHU8L.QiKE5bVP/ueRF/n27C/syJWvuQ3vSuGHyTO2hh/mO', NULL, '2020-02-25 23:56:51', '2020-02-25 23:56:51', '9878987891', 23, 'single', 'svd', '1582694811.jpeg', 'user'),
(8, 'krishna', 'krishna@kozhi.com', NULL, '$2y$10$APR7BsCNbfNUNL4J98NbeezF.0yK83g6MaOviyqjWuNWz1soepH8e', NULL, '2020-03-07 00:45:34', '2020-03-07 00:45:34', '9050987645', 24, 'married', 'vn', '1583561734.jpeg', 'user'),
(10, 'admin', 'admin@gmail.com', NULL, '$2y$10$UZreGFUSJZUNimk9jicuYuUlfdtNUN/rB5.cLyoUGhaRrFb1iRQNm', NULL, '2020-03-07 12:00:07', '2020-03-07 12:00:07', '1234567890', 25, 'single', 'admin', '1583602207.jpeg', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
