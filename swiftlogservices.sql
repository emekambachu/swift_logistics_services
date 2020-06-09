-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2020 at 09:55 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swiftlogservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_04_16_003704_create_parcels_table', 1),
(4, '2020_04_16_003816_create_shipments_table', 1),
(5, '2020_05_24_160542_create_shipment_histories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

DROP TABLE IF EXISTS `parcels`;
CREATE TABLE IF NOT EXISTS `parcels` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parcel_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `name`, `parcel_number`, `weight`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 11', 'CBLOG-8067', '4', 'White Iphone 11 pack', '2020-05-24 16:39:28', '2020-05-24 16:39:28'),
(2, 'Washing Machine', 'CBLOG-7705', '30', 'White LG Washing Machine', '2020-05-24 22:34:16', '2020-05-24 22:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

DROP TABLE IF EXISTS `shipments`;
CREATE TABLE IF NOT EXISTS `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parcel_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `tracking_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shipments_parcel_id_index` (`parcel_id`),
  KEY `shipments_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipments`
--

INSERT INTO `shipments` (`id`, `parcel_id`, `user_id`, `tracking_id`, `origin`, `destination`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'CBLOG-TRACK225669', 'United States', 'Nigeria', 1, '2020-05-24 17:32:04', '2020-05-24 17:32:04'),
(2, 1, 1, 'SLINK-TRACK316204', 'India', 'Nigeria', 1, '2020-05-24 23:00:02', '2020-05-24 23:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `shipment_histories`
--

DROP TABLE IF EXISTS `shipment_histories`;
CREATE TABLE IF NOT EXISTS `shipment_histories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `shipment_id` int(10) UNSIGNED NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shipment_histories_shipment_id_index` (`shipment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipment_histories`
--

INSERT INTO `shipment_histories` (`id`, `shipment_id`, `location`, `status`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Madagascar', 'Descriptions and shit and stuff', 1, '2020-05-24 18:57:03', '2020-05-24 20:22:59'),
(2, 1, 'Malasia', 'Dropshiping ok', 1, '2020-05-24 20:26:29', '2020-05-24 20:28:35'),
(3, 1, 'Zambia', 'Getting Clarification from custooms', 1, '2020-05-24 22:58:17', '2020-05-24 22:58:17'),
(4, 2, 'Kualar', 'Loading Package at docks', 1, '2020-05-24 23:11:24', '2020-05-24 23:11:24'),
(5, 1, 'Madagascar', 'Status', 1, '2020-06-09 19:51:54', '2020-06-09 19:51:54'),
(6, 1, 'Madagascar', 'hfefhpw\'bp', 1, '2020-06-09 19:53:21', '2020-06-09 19:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `country`, `state`, `address`, `is_active`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dexter Neutron', 'dex@email.com', '+2348062201831', NULL, 'Argentina', 'Corrientes', 'address', 1, NULL, NULL, '2020-05-24 16:06:31', '2020-05-24 16:06:31'),
(7, 'Dex Neutron', 'dexneu@email.com', '111111111111111', NULL, 'Algeria', 'Batna', 'Address and stuff', 1, NULL, NULL, '2020-06-09 19:34:25', '2020-06-09 19:34:25'),
(6, 'Dexxxxxxxxx', 'dexxxxxx@email.com', '111111111111111', NULL, 'Anguilla', 'Anguilla', 'Address and stuff', 1, NULL, NULL, '2020-06-09 19:33:28', '2020-06-09 19:33:28'),
(5, 'Dexter Neutron', 'dexxx@email.com', '111111111111', NULL, 'Angola', 'Cuando Cubango', 'Address', 1, NULL, NULL, '2020-06-09 19:32:23', '2020-06-09 19:32:23'),
(8, 'Draper Richards Kaplan Foundation', 'emeka@nourishingafrica.com', '111111111111111', NULL, 'Algeria', 'Ain Defla', 'Address and stuff', 1, NULL, NULL, '2020-06-09 19:35:17', '2020-06-09 19:35:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
