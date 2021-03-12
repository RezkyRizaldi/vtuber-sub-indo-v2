-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 02:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vtuber_sub_indo`
--

-- --------------------------------------------------------

--
-- Table structure for table `affiliations`
--

CREATE TABLE `affiliations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `affiliations`
--

INSERT INTO `affiliations` (`id`, `name`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Hololive', 'aff_51cc0de3cd3f470dde0af15b1e98bd9a.png', 'Hololive Production (ホロライブプロダクション Hororaibu Purodakushon), or simply known as hololive (ホロライブ), is a Virtual Idol agency consisting of Virtual YouTubers supported and created by Cover Corp', '2021-03-07 08:47:03', '2021-03-07 08:47:03'),
(2, 'Nijisanji', 'aff_4f40a65ccd7f18da38914685623ed36c.png', 'Nijisanji (にじさんじ) is a group of mostly 2D-only Virtual YouTubers who are also known as \"Virtual Livers\" (バーチャルライバー Baacharu Raibaa) when posting on sites outside of YouTube, such as NicoNico Douga and Bilibili. The term Liver, coined by mixing Japanese and English, is a heteronym for calling Nijisanji\'s streamers.', '2021-03-08 06:25:07', '2021-03-08 06:25:07'),
(3, 'MAHA5', 'aff_7562a264713b39746951d4731bb93ee1.png', 'MAHA5 or MAHAPANCA is a VTuber agency from Indonesia. Their goal is to connect Indonesia with Japan though anime and otaku culture while having fun together.', '2021-03-08 06:29:20', '2021-03-08 06:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `affiliations_talent`
--

CREATE TABLE `affiliations_talent` (
  `id` int(10) UNSIGNED NOT NULL,
  `affiliation_id` int(11) NOT NULL,
  `talent_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `affiliations_talent`
--

INSERT INTO `affiliations_talent` (`id`, `affiliation_id`, `talent_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(2, 1, 2, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(3, 1, 3, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(4, 1, 4, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(5, 1, 5, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(6, 1, 6, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(7, 1, 7, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(8, 1, 8, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(9, 1, 9, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(10, 1, 10, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(11, 1, 11, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(12, 1, 12, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(13, 1, 13, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(14, 1, 14, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(15, 1, 15, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(16, 1, 16, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(17, 1, 17, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(18, 1, 18, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(19, 1, 19, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(20, 1, 20, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(21, 1, 21, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(22, 1, 22, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(23, 1, 23, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(24, 1, 24, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(25, 1, 25, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(26, 1, 26, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(27, 1, 27, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(28, 1, 28, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(29, 1, 29, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(30, 1, 30, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(31, 1, 31, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(32, 1, 32, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(33, 1, 33, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(34, 1, 34, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(35, 1, 35, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(36, 1, 36, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(37, 1, 37, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(38, 1, 38, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(39, 1, 39, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(40, 1, 40, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(41, 1, 41, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(42, 1, 42, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(43, 1, 43, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(44, 1, 44, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(45, 1, 45, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(46, 1, 46, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(47, 1, 47, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(48, 1, 48, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(49, 1, 49, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(50, 1, 50, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(51, 1, 51, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(52, 1, 52, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(53, 1, 53, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(54, 1, 54, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(55, 1, 55, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(56, 1, 56, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(57, 1, 57, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(58, 1, 58, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(59, 1, 59, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(60, 1, 60, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(61, 1, 61, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(62, 1, 62, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(63, 1, 63, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(64, 1, 64, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(65, 1, 65, '2021-03-07 15:47:03', '2021-03-07 15:47:03'),
(66, 1, 66, '2021-03-07 15:47:03', '2021-03-07 15:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `gens`
--

CREATE TABLE `gens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('hololive','holostars','staff','Nijisanji','VirtuaReal','MAHA5') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gens`
--

INSERT INTO `gens` (`id`, `gen`, `type`, `branch`, `created_at`, `updated_at`) VALUES
(1, '0', 'hololive', 'Japan', '2021-03-06 11:19:25', '2021-03-06 11:19:25'),
(2, '1', 'hololive', 'Japan', '2021-03-06 11:19:37', '2021-03-06 11:19:37'),
(3, '2', 'hololive', 'Japan', '2021-03-06 11:19:42', '2021-03-06 11:19:42'),
(4, 'Gamers', 'hololive', 'Japan', '2021-03-06 11:19:46', '2021-03-06 11:19:46'),
(5, '3', 'hololive', 'Japan', '2021-03-06 11:19:51', '2021-03-06 11:19:51'),
(6, '4', 'hololive', 'Japan', '2021-03-06 11:19:55', '2021-03-06 11:19:55'),
(7, '5', 'hololive', 'Japan', '2021-03-06 11:19:58', '2021-03-06 11:19:58'),
(8, 'INoNaKa MUSIC', 'hololive', 'Japan', '2021-03-06 11:20:12', '2021-03-06 11:20:12'),
(9, '1', 'hololive', 'Indonesia', '2021-03-06 11:20:23', '2021-03-06 11:20:23'),
(10, '2', 'hololive', 'Indonesia', '2021-03-06 11:20:27', '2021-03-06 11:20:27'),
(11, '1', 'hololive', 'English', '2021-03-06 11:20:44', '2021-03-06 11:20:44'),
(12, '1', 'hololive', 'China', '2021-03-06 11:20:49', '2021-03-06 11:20:49'),
(13, '2', 'hololive', 'China', '2021-03-06 11:21:53', '2021-03-06 11:21:53'),
(14, '1', 'holostars', 'Japan', '2021-03-06 11:22:10', '2021-03-06 11:22:10'),
(15, '2', 'holostars', 'Japan', '2021-03-06 11:22:38', '2021-03-06 11:22:38'),
(16, '3', 'holostars', 'Japan', '2021-03-06 11:22:47', '2021-03-06 11:22:47'),
(17, NULL, 'staff', NULL, '2021-03-06 11:23:10', '2021-03-06 11:23:10'),
(18, '1', 'Nijisanji', 'Japan', '2021-03-11 05:43:58', '2021-03-11 05:43:58'),
(19, '2', 'Nijisanji', 'Japan', '2021-03-11 05:53:16', '2021-03-11 05:53:16'),
(20, 'Gamers', 'Nijisanji', 'Japan', '2021-03-11 05:54:33', '2021-03-11 05:54:33'),
(21, 'SEEDs', 'Nijisanji', 'Japan', '2021-03-11 05:55:03', '2021-03-11 05:55:03'),
(22, 'VOIZ', 'Nijisanji', 'Japan', '2021-03-11 05:56:37', '2021-03-11 05:56:37'),
(23, '2019', 'Nijisanji', 'Japan', '2021-03-11 05:56:47', '2021-03-11 05:56:47'),
(24, '2020', 'Nijisanji', 'Japan', '2021-03-11 05:56:59', '2021-03-11 05:56:59'),
(25, 'NetWORKS', 'Nijisanji', 'Japan', '2021-03-11 05:57:30', '2021-03-11 05:57:30'),
(26, '1', 'Nijisanji', 'Indonesia', '2021-03-11 05:58:25', '2021-03-11 05:58:25'),
(27, '2', 'Nijisanji', 'Indonesia', '2021-03-11 05:59:31', '2021-03-11 05:59:31'),
(28, '3', 'Nijisanji', 'Indonesia', '2021-03-11 05:59:44', '2021-03-11 05:59:44'),
(29, '4', 'Nijisanji', 'Indonesia', '2021-03-11 05:59:53', '2021-03-11 05:59:53'),
(30, '5', 'Nijisanji', 'Indonesia', '2021-03-11 06:00:01', '2021-03-11 06:00:01'),
(31, NULL, 'Nijisanji', 'India', '2021-03-11 06:01:29', '2021-03-11 06:01:29'),
(32, '1', 'Nijisanji', 'Korea', '2021-03-11 06:01:59', '2021-03-11 06:01:59'),
(33, '1.5', 'Nijisanji', 'Korea', '2021-03-11 06:02:12', '2021-03-11 06:02:12'),
(34, '2', 'Nijisanji', 'Korea', '2021-03-11 06:02:35', '2021-03-11 06:02:35'),
(35, '3', 'Nijisanji', 'Korea', '2021-03-11 06:02:42', '2021-03-11 06:02:42'),
(36, '4', 'Nijisanji', 'Korea', '2021-03-11 06:02:48', '2021-03-11 06:02:48'),
(37, '1', 'VirtuaReal', 'China', '2021-03-11 06:03:35', '2021-03-11 06:03:35'),
(38, '2', 'VirtuaReal', 'China', '2021-03-11 06:04:06', '2021-03-11 06:04:06'),
(39, '3', 'VirtuaReal', 'China', '2021-03-11 06:04:12', '2021-03-11 06:04:12'),
(40, '4', 'VirtuaReal', 'China', '2021-03-11 06:04:19', '2021-03-11 06:04:19'),
(41, '5', 'VirtuaReal', 'China', '2021-03-11 06:04:25', '2021-03-11 06:04:25'),
(42, '6', 'VirtuaReal', 'China', '2021-03-11 06:04:32', '2021-03-11 06:04:32'),
(43, '7', 'VirtuaReal', 'China', '2021-03-11 06:04:41', '2021-03-11 06:04:41'),
(44, '8', 'VirtuaReal', 'China', '2021-03-11 06:04:47', '2021-03-11 06:04:47'),
(45, '9', 'VirtuaReal', 'China', '2021-03-11 06:04:52', '2021-03-11 06:04:52'),
(46, '10', 'VirtuaReal', 'China', '2021-03-11 06:05:00', '2021-03-11 06:05:00'),
(47, '11', 'VirtuaReal', 'China', '2021-03-11 06:05:06', '2021-03-11 06:05:06'),
(48, '12', 'VirtuaReal', 'China', '2021-03-11 06:05:13', '2021-03-11 06:05:13'),
(49, '1', 'MAHA5', 'Indonesia', '2021-03-11 06:05:35', '2021-03-11 06:05:35'),
(50, '2', 'MAHA5', 'Indonesia', '2021-03-11 06:05:41', '2021-03-11 06:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `gen_talent`
--

CREATE TABLE `gen_talent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `talent_id` bigint(20) NOT NULL,
  `gen_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gen_talent`
--

INSERT INTO `gen_talent` (`id`, `talent_id`, `gen_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-03-06 11:24:22', '2021-03-06 11:24:22'),
(2, 2, 1, '2021-03-06 11:25:50', '2021-03-06 11:25:50'),
(3, 3, 1, '2021-03-06 11:27:16', '2021-03-06 11:27:16'),
(4, 4, 1, '2021-03-06 11:28:37', '2021-03-06 11:28:37'),
(5, 5, 2, '2021-03-06 11:51:44', '2021-03-06 11:51:44'),
(6, 6, 2, '2021-03-06 11:52:44', '2021-03-06 11:52:44'),
(7, 7, 2, '2021-03-06 11:53:42', '2021-03-06 11:53:42'),
(8, 8, 2, '2021-03-06 11:54:24', '2021-03-06 11:54:24'),
(9, 9, 2, '2021-03-06 11:55:03', '2021-03-06 11:55:03'),
(10, 10, 2, '2021-03-06 11:55:40', '2021-03-06 11:55:40'),
(11, 11, 3, '2021-03-06 12:02:33', '2021-03-06 12:02:33'),
(12, 12, 3, '2021-03-06 12:03:13', '2021-03-06 12:03:13'),
(13, 13, 3, '2021-03-06 12:03:41', '2021-03-06 12:03:41'),
(14, 14, 3, '2021-03-06 12:04:10', '2021-03-06 12:04:10'),
(15, 15, 3, '2021-03-06 12:04:45', '2021-03-06 12:04:45'),
(16, 16, 4, '2021-03-06 12:05:22', '2021-03-06 12:05:22'),
(17, 17, 4, '2021-03-06 12:05:52', '2021-03-06 12:05:52'),
(18, 18, 4, '2021-03-06 12:06:24', '2021-03-06 12:06:24'),
(19, 19, 5, '2021-03-06 12:06:51', '2021-03-06 12:06:51'),
(20, 20, 5, '2021-03-06 12:07:30', '2021-03-06 12:07:30'),
(21, 21, 5, '2021-03-06 12:07:58', '2021-03-06 12:07:58'),
(22, 22, 5, '2021-03-06 12:08:32', '2021-03-06 12:08:32'),
(23, 23, 5, '2021-03-06 12:09:10', '2021-03-06 12:09:10'),
(24, 24, 6, '2021-03-06 12:09:39', '2021-03-06 12:09:39'),
(25, 25, 6, '2021-03-06 12:10:11', '2021-03-06 12:10:11'),
(26, 26, 6, '2021-03-06 12:10:49', '2021-03-06 12:10:49'),
(27, 27, 6, '2021-03-06 12:11:32', '2021-03-06 12:11:32'),
(28, 28, 6, '2021-03-06 12:12:25', '2021-03-06 12:12:25'),
(29, 29, 7, '2021-03-06 12:13:00', '2021-03-06 12:13:00'),
(30, 30, 7, '2021-03-06 12:13:32', '2021-03-06 12:13:32'),
(31, 31, 7, '2021-03-06 12:14:04', '2021-03-06 12:14:04'),
(32, 32, 7, '2021-03-06 12:14:36', '2021-03-06 12:14:36'),
(33, 33, 7, '2021-03-06 12:15:07', '2021-03-06 12:15:07'),
(34, 34, 8, '2021-03-06 12:15:48', '2021-03-06 12:15:48'),
(35, 35, 9, '2021-03-06 12:16:51', '2021-03-06 12:16:51'),
(36, 36, 9, '2021-03-06 12:17:30', '2021-03-06 12:17:30'),
(37, 37, 9, '2021-03-06 12:18:04', '2021-03-06 12:18:04'),
(38, 38, 10, '2021-03-06 12:18:35', '2021-03-06 12:18:35'),
(39, 39, 10, '2021-03-06 12:19:01', '2021-03-06 12:19:01'),
(40, 40, 10, '2021-03-06 12:19:26', '2021-03-06 12:19:26'),
(41, 41, 11, '2021-03-06 12:20:17', '2021-03-06 12:20:17'),
(42, 42, 11, '2021-03-06 12:20:43', '2021-03-06 12:20:43'),
(43, 43, 11, '2021-03-06 12:21:18', '2021-03-06 12:21:18'),
(44, 44, 11, '2021-03-06 12:21:59', '2021-03-06 12:21:59'),
(45, 45, 11, '2021-03-06 12:22:35', '2021-03-06 12:22:35'),
(46, 46, 12, '2021-03-06 12:23:07', '2021-03-06 12:23:07'),
(47, 47, 12, '2021-03-06 12:23:37', '2021-03-06 12:23:37'),
(48, 48, 12, '2021-03-06 12:24:04', '2021-03-06 12:24:04'),
(49, 49, 13, '2021-03-06 12:24:33', '2021-03-06 12:24:33'),
(50, 50, 13, '2021-03-06 12:25:06', '2021-03-06 12:25:06'),
(51, 51, 13, '2021-03-06 12:25:56', '2021-03-06 12:25:56'),
(52, 52, 14, '2021-03-06 12:26:58', '2021-03-06 12:26:58'),
(53, 53, 14, '2021-03-06 12:27:37', '2021-03-06 12:27:37'),
(54, 54, 14, '2021-03-06 12:28:00', '2021-03-06 12:28:00'),
(55, 55, 14, '2021-03-06 12:28:29', '2021-03-06 12:28:29'),
(56, 56, 14, '2021-03-06 12:28:54', '2021-03-06 12:28:54'),
(57, 57, 14, '2021-03-06 12:29:18', '2021-03-06 12:29:18'),
(58, 58, 15, '2021-03-06 12:29:51', '2021-03-06 12:29:51'),
(59, 59, 15, '2021-03-06 12:30:17', '2021-03-06 12:30:17'),
(60, 60, 15, '2021-03-06 12:30:51', '2021-03-06 12:30:51'),
(61, 61, 16, '2021-03-06 12:31:41', '2021-03-06 12:31:41'),
(62, 62, 16, '2021-03-06 12:32:07', '2021-03-06 12:32:07'),
(63, 63, 16, '2021-03-06 12:32:35', '2021-03-06 12:32:35'),
(64, 64, 17, '2021-03-06 12:35:52', '2021-03-06 12:35:52'),
(65, 65, 17, '2021-03-06 12:37:52', '2021-03-06 12:37:52'),
(66, 66, 17, '2021-03-06 12:39:58', '2021-03-06 12:39:58'),
(67, 67, 18, '2021-03-11 06:13:47', '2021-03-11 06:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_03_06_161130_create_affiliations_table', 1),
(4, '2021_03_06_161217_create_talents_table', 1),
(5, '2021_03_06_172311_create_gens_table', 1),
(6, '2021_03_06_172655_create_gen_talents_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `talent`
--

CREATE TABLE `talent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `talent`
--

INSERT INTO `talent` (`id`, `name`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Tokino Sora', 'tlnt_9dc5e041136280c4b040d77c059daff1.png', 'Tokino Sora (ときのそら, 時乃そら, 時乃空, Lit. Sky of Time) is a female Japanese Virtual YouTuber and the founder member of hololive. While she debuted alone way before generations were established, she is currently part of \"hololive 0th gen\" alongside fellow solo debutants: Roboco, Sakura Miko, Hoshimachi Suisei and AZKi.', '2021-03-06 11:24:22', '2021-03-06 11:24:22'),
(2, 'Roboco', 'tlnt_e106c50f5663707b1944c856912f9edd.png', 'Roboco (ロボ子, Robo-ko, lit. Robogirl) also known as \"Roboco-san\" is a female Japanese virtual YouTuber and the second member ever of hololive. While she debuted alone way before generations were established, she is currently part of \"hololive 0th gen\" alongside fellow solo debutants: Tokino Sora, Sakura Miko, Hoshimachi Suisei and AZKi.', '2021-03-06 11:25:50', '2021-03-06 11:25:50'),
(3, 'Sakura Miko', 'tlnt_a4440d1cac5ab1d8b2187ac1ce32c637.png', 'Sakura Miko (さくらみこ, Kanji: 桜巫女, Hanzi:樱巫女) is a female Japanese Virtual YouTuber and a member of hololive. While debuting alone outside of a generation and working directly under Cover Corp. before being transfered to hololive, she is currently part of \"hololive 0th gen\" alongside fellow solo debutants: Tokino Sora, Roboco, Hoshimachi Suisei and AZKi.', '2021-03-06 11:27:16', '2021-03-06 11:27:16'),
(4, 'Hoshimachi Suisei', 'tlnt_73937a9889e8db019ae3b665d51fc206.png', 'Hoshimachi Suisei (星街すいせい) is a female Japanese Virtual YouTuber associated with hololive. While originally an independent VTuber who eventually was recruited into hololive, she is currently part of \"hololive 0th gen\" alongside fellow solo debutants: Tokino Sora, Roboco, Sakura Miko and AZKi.', '2021-03-06 11:28:37', '2021-03-06 11:28:37'),
(5, 'Yozora Mel', 'tlnt_85c1dfa96c29cb30885646864c745cf0.png', 'Yozora Mel (夜空メル) is a female Japanese Virtual YouTuber associated with hololive, as part of its first generation of VTubers alongside Aki Rosenthal, Natsuiro Matsuri, Shirakami Fubuki, and Akai Haato.', '2021-03-06 11:51:44', '2021-03-06 11:51:44'),
(6, 'Shirakami Fubuki', 'tlnt_2d0a5dd2a4145fdb0d76140d70d3a948.png', 'Shirakami Fubuki (白上フブキ) is a female Japanese Virtual Youtuber associated with hololive, as part of its first generation of VTubers alongside Yozora Mel, Aki Rosenthal, Natsuiro Matsuri, and Akai Haato. She is also part of a unit inside hololive called hololive Gamers (ホロライブゲーマーズ) alongside Ookami Mio, Nekomata Okayu, and Inugami Korone.', '2021-03-06 11:52:44', '2021-03-06 11:52:44'),
(7, 'Natsuiro Matsuri', 'tlnt_da49cb01be396dc39c940b5be9283d8e.png', 'Natsuiro Matsuri (夏色まつり) is a female Japanese Virtual YouTuber associated with hololive, as part of its first generation of VTubers alongside Yozora Mel, Aki Rosenthal, Shirakami Fubuki, and Akai Haato.', '2021-03-06 11:53:42', '2021-03-06 11:53:42'),
(8, 'Aki Rosenthal', 'tlnt_fe53cc66f7c0d6850237261a45f94e85.png', 'Aki Rosenthal (アキ・ローゼンタール) is a female Japanese Virtual YouTuber associated with hololive, as part of its first generation of VTubers alongside Yozora Mel, Natsuiro Matsuri, Shirakami Fubuki, and Akai Haato.', '2021-03-06 11:54:24', '2021-03-06 11:54:24'),
(9, 'Akai Haato', 'tlnt_c03ed553c7595936533943022bb4a6b5.png', 'Akai Haato (赤井はあと), also known by her Haachama (はあちゃま) personality, is a female Japanese Virtual YouTuber associated with hololive, as part of its first generation of VTubers alongside Yozora Mel, Aki Rosenthal, Natsuiro Matsuri, and Shirakami Fubuki.', '2021-03-06 11:55:03', '2021-03-06 11:55:03'),
(10, 'Hitomi Chris', 'tlnt_1f6ad9bb7d14a43d8c71a5aacf707188.png', 'Hitomi Chris (人見クリス) was a female Japanese Virtual YouTuber and formerly a member of hololive.', '2021-03-06 11:55:40', '2021-03-06 11:55:40'),
(11, 'Minato Aqua', 'tlnt_94792759a4c800884b68d5bcb7be96da.png', 'Minato Aqua (湊あくあ) is a female Japanese Virtual YouTuber associated with hololive, as part of its second generation of VTubers alongside Murasaki Shion, Nakiri Ayame, Yuzuki Choco, and Oozora Subaru.', '2021-03-06 12:02:33', '2021-03-06 12:02:33'),
(12, 'Murasaki Shion', 'tlnt_c85eb45e0adcf3abe162aac488a7275f.png', 'Murasaki Shion (紫咲シオン) is a female Japanese Virtual YouTuber associated with hololive, as part of its second generation of VTubers alongside Minato Aqua, Nakiri Ayame, Yuzuki Choco, and Oozora Subaru.', '2021-03-06 12:03:13', '2021-03-06 12:03:13'),
(13, 'Nakiri Ayame', 'tlnt_d1f7a6526c5a4c444d8216cadea7a387.png', 'Nakiri Ayame (百鬼あやめ) is a female Japanese Virtual YouTuber associated with hololive, as part of its second generation of VTubers alongside Minato Aqua, Murasaki Shion, Yuzuki Choco, and Oozora Subaru.', '2021-03-06 12:03:41', '2021-03-06 12:03:41'),
(14, 'Yuzuki Choco', 'tlnt_002a40b23389d461db4ea2beed6f8442.png', 'Yuzuki Choco (癒月ちょこ) is a female Japanese Virtual YouTuber associated with hololive, as part of its second generation of VTubers alongside Minato Aqua, Murasaki Shion, Nakiri Ayame, and Oozora Subaru.', '2021-03-06 12:04:10', '2021-03-06 12:04:10'),
(15, 'Oozora Subaru', 'tlnt_3bb0f5f5ad458baa57860fe78f432ac1.png', 'Oozora Subaru (大空スバル) is a female Japanese Virtual YouTuber associated with hololive, as part of its second generation of VTubers alongside Minato Aqua, Murasaki Shion, Nakiri Ayame, and Yuzuki Choco.', '2021-03-06 12:04:45', '2021-03-06 12:04:45'),
(16, 'Ookami Mio', 'tlnt_6292e0671114ec061b8ded9bd596dde3.png', 'Ookami Mio (大神ミオ) is a female Japanese Virtual YouTuber associated with hololive, as part of a group of VTubers inside called as hololive Gamers (ホロライブゲーマーズ) alongside Shirakami Fubuki, Nekomata Okayu, and Inugami Korone.', '2021-03-06 12:05:22', '2021-03-06 12:05:22'),
(17, 'Nekomata Okayu', 'tlnt_ecadce1573abe2e10035c529c1a6187b.png', 'Nekomata Okayu (猫又おかゆ) is a female Japanese Virtual YouTuber associated with hololive, as part of a group of VTubers inside called as hololive Gamers (ホロライブゲーマーズ) alongside Shirakami Fubuki, Ookami Mio, and Inugami Korone.', '2021-03-06 12:05:52', '2021-03-06 12:05:52'),
(18, 'Inugami Korone', 'tlnt_527b14945545a0efeb8381b0ed91d3a2.png', 'Inugami Korone (戌神ころね) is a female Japanese Virtual YouTuber associated with hololive, and is a member of the subgroup hololive Gamers (ホロライブゲーマーズ) alongside Shirakami Fubuki, Ookami Mio, and Nekomata Okayu.', '2021-03-06 12:06:24', '2021-03-06 12:06:24'),
(19, 'Usada Pekora', 'tlnt_f5cdc15f0c12d3b050bec567ca4e9c34.png', 'Usada Pekora (兎田ぺこら) is a female Japanese Virtual YouTuber associated with hololive, as part of its third generation of VTubers under the name of \"hololive Fantasy\" (ホロライブファンタジー) alongside Uruha Rushia, Shiranui Flare, Shirogane Noel, and Houshou Marine.', '2021-03-06 12:06:51', '2021-03-06 12:06:51'),
(20, 'Uruha Rushia', 'tlnt_5d8112ff2e3fdb0fda915dee02638240.png', 'Uruha Rushia (潤羽るしあ) is a female Japanese Virtual YouTuber associated with hololive, as part of its third generation of VTubers under the name of \"hololive Fantasy\" (ホロライブファンタジー) alongside Usada Pekora, Shiranui Flare, Shirogane Noel, and Houshou Marine.', '2021-03-06 12:07:30', '2021-03-06 12:07:30'),
(21, 'Shiranui Flare', 'tlnt_23ba0a9440f40f9126732e1bd374dcae.png', 'Shiranui Flare (不知火フレア) is a female Japanese Virtual YouTuber associated with hololive, as part of its third generation of VTubers under the name of \"hololive Fantasy\" (ホロライブファンタジー) alongside Usada Pekora, Uruha Rushia, Shirogane Noel, and Houshou Marine.', '2021-03-06 12:07:58', '2021-03-06 12:07:58'),
(22, 'Shirogane Noel', 'tlnt_2e996893d2e4acc6cec1ddcd57be1819.png', 'Shirogane Noel (白銀ノエル) is a female Japanese Virtual YouTuber associated with hololive, as part of its third generation of VTubers under the name of \"hololive Fantasy\" (ホロライブファンタジー) alongside Usada Pekora, Uruha Rushia, Shiranui Flare, and Houshou Marine.', '2021-03-06 12:08:32', '2021-03-06 12:08:32'),
(23, 'Hoshou Marine', 'tlnt_56e2e817bfe8b417c44064cb8e23e3c4.png', 'Houshou Marine (宝鐘マリン) is a female Japanese Virtual YouTuber associated with hololive, as part of its third generation of VTubers under the name of \"hololive Fantasy\" (ホロライブファンタジー) alongside Usada Pekora, Uruha Rushia, Shiranui Flare, and Shirogane Noel.', '2021-03-06 12:09:10', '2021-03-06 12:09:10'),
(24, 'Amane Kanata', 'tlnt_4d5625fbf84a281634930ed7d2198a6c.png', 'Amane Kanata (天音かなた) is a female Japanese Virtual YouTuber associated with hololive, as part of its fourth generation of VTubers alongside Tsunomaki Watame, Tokoyami Towa, Kiryu Coco and Himemori Luna.', '2021-03-06 12:09:39', '2021-03-06 12:09:39'),
(25, 'Kiryu Coco', 'tlnt_c451af3eeff79d1e3a8c10d1f31a10bf.png', 'Kiryu Coco (桐生ココ) is a female Japanese Virtual YouTuber associated with hololive, as part of its fourth generation of VTubers alongside Tsunomaki Watame, Tokoyami Towa, Amane Kanata and Himemori Luna.', '2021-03-06 12:10:11', '2021-03-06 12:10:11'),
(26, 'Tsunomaki Watame', 'tlnt_d94ed59f68093b3ca600b1c00aaface9.png', 'Tsunomaki Watame (角巻わため) is a female Japanese Virtual YouTuber associated with hololive, as part of its fourth generation of VTubers alongside Tokoyami Towa, Kiryu Coco, Amane Kanata and Himemori Luna.', '2021-03-06 12:10:49', '2021-03-06 12:10:49'),
(27, 'Tokoyami Towa', 'tlnt_d248ff23293aba479438dd9d7e9e2fd7.png', 'Tokoyami Towa (常闇トワ) is a female Japanese Virtual YouTuber associated with hololive, as part of its fourth generation of VTubers alongside Tsunomaki Watame, Kiryu Coco, Amane Kanata and Himemori Luna.', '2021-03-06 12:11:32', '2021-03-06 12:11:32'),
(28, 'Himemori Luna', 'tlnt_b068c1595bf5841594e53d8fd4c8f875.png', 'Himemori Luna (姫森ルーナ) is a female Japanese Virtual YouTuber associated with hololive, as part of its fourth generation of VTubers alongside Tsunomaki Watame, Tokoyami Towa, Kiryu Coco and Amane Kanata.', '2021-03-06 12:12:25', '2021-03-06 12:12:25'),
(29, 'Yukihana Lamy', 'tlnt_3d2c2339d366311f0a731eb589164909.png', 'Yukihana Lamy (雪花ラミィ) is a female Japanese Virtual YouTuber associated with hololive, as part of its fifth generation of VTubers alongside Momosuzu Nene, Shishiro Botan, Mano Aloe and Omaru Polka.', '2021-03-06 12:13:00', '2021-03-06 12:13:00'),
(30, 'Momosuzu Nene', 'tlnt_10bced36f65312c180b66a288ab84398.png', 'Momosuzu Nene (桃鈴ねね) is a female Japanese Virtual YouTuber associated with hololive, as part of its fifth generation of VTubers alongside Yukihana Lamy, Shishiro Botan, Mano Aloe and Omaru Polka.', '2021-03-06 12:13:32', '2021-03-06 12:13:32'),
(31, 'Shishiro Botan', 'tlnt_5ab70e906e83b97b2002385477e08426.png', 'Shishiro Botan (獅白ぼたん) is a female Japanese Virtual YouTuber associated with hololive, as part of its fifth generation of VTubers alongside Yukihana Lamy, Momosuzu Nene, Mano Aloe, and Omaru Polka.', '2021-03-06 12:14:04', '2021-03-06 12:14:04'),
(32, 'Omaru Polka', 'tlnt_f9524ccc66e3612f11d358339e50caf5.png', 'Omaru Polka (尾丸ポルカ) is a female Japanese Virtual YouTuber associated with hololive, as part of its fifth generation of VTubers alongside Yukihana Lamy, Momosuzu Nene, Shishiro Botan and Mano Aloe.', '2021-03-06 12:14:36', '2021-03-06 12:14:36'),
(33, 'Mano Aloe', 'tlnt_4e8cfd68ebfea97cba08ee813d06206a.png', 'Mano Aloe (魔乃アロエ, Mano Aroe) was a female Japanese Virtual YouTuber associated with hololive, as part of its fifth generation of VTubers alongside Yukihana Lamy, Momosuzu Nene, Shishiro Botan and Omaru Polka.', '2021-03-06 12:15:07', '2021-03-06 12:15:07'),
(34, 'AZKi', 'tlnt_ee595c19ed66b260f55c9d456b20d4e2.png', 'Virtual Diva AZKi better known simply as AZKi is a female Japanese Virtual YouTuber and singer. Her concept was conceived by hololive\'s parent company: COVER Corporation and her design and videos are produced by Composition Inc. While she debuted alone, she is currently part of \"hololive 0th gen\" alongside fellow solo debutants: Tokino Sora, Roboco, Sakura Miko and Hoshimachi Suisei.', '2021-03-06 12:15:48', '2021-03-06 12:15:48'),
(35, 'Ayunda Risu', 'tlnt_04725fabf6042bddf992bdf80c524f3e.png', 'Ayunda Risu (アユンダ・リス) is a female Indonesian Virtual YouTuber associated with hololive, as part of its Indonesian (ID) branch first generation of VTubers alongside Airani Iofifteen and Moona Hoshinova.', '2021-03-06 12:16:51', '2021-03-06 12:16:51'),
(36, 'Moona Hoshinova', 'tlnt_c9e8c29879d50a6c7a1aa149876d60fb.png', 'Moona Hoshinova (ムーナ・ホシノヴァ) is a female Indonesian Virtual YouTuber associated with hololive, as part of its Indonesian (ID) branch first generation of VTubers alongside Airani Iofifteen and Ayunda Risu.', '2021-03-06 12:17:30', '2021-03-06 12:17:30'),
(37, 'Airani Iofifteen', 'tlnt_5678fd69ff7e40c9ad04abe64fab5e8a.png', 'Airani Iofifteen (アイラニ・イオフィフティーン) is a female Indonesian Virtual YouTuber associated with hololive, as part of its Indonesian (ID) branch first generation of VTubers alongside Moona Hoshinova and Ayunda Risu.', '2021-03-06 12:18:04', '2021-03-06 12:18:04'),
(38, 'Kureiji Ollie', 'tlnt_2d1ffbdddaa485a085fabbd7f0cc1e32.png', 'Kureiji Ollie is a female Indonesian Virtual YouTuber associated with hololive, as part of its Indonesian (ID) branch second generation of VTubers alongside Anya Melfissa and Pavolia Reine.', '2021-03-06 12:18:35', '2021-03-06 12:18:35'),
(39, 'Anya Melfissa', 'tlnt_f002c811e5b4e2d9d621178ea73c4505.png', 'Anya Melfissa is a female Indonesian Virtual YouTuber associated with hololive, as part of its Indonesian (ID) branch second generation of VTubers alongside Kureiji Ollie and Pavolia Reine.', '2021-03-06 12:19:01', '2021-03-06 12:19:01'),
(40, 'Pavolia Reine', 'tlnt_79bbd9cd3bd36a297d31b3d7a40419ff.png', 'Pavolia Reine is a female Indonesian Virtual YouTuber associated with hololive, as part of its Indonesian (ID) branch second generation of VTubers alongside Kureiji Ollie and Anya Melfissa.', '2021-03-06 12:19:26', '2021-03-06 12:19:26'),
(41, 'Mori Calliope', 'tlnt_7b578ad24e9728cab3c117e83b253f62.png', 'Mori Calliope is an English Virtual YouTuber associated with hololive, as part of its English (EN) branch first generation of Vtubers alongside Ninomae Ina\'nis, Takanashi Kiara, Watson Amelia, and Gawr Gura.', '2021-03-06 12:20:17', '2021-03-06 12:20:17'),
(42, 'Takanashi Kiara', 'tlnt_cf1fda2cd8d823fc55f7da5c25b7ac43.png', 'Takanashi Kiara is an English Virtual YouTuber associated with hololive, as part of its English (EN) branch first generation of Vtubers alongside Ninomae Ina\'nis, Watson Amelia, Mori Calliope, and Gawr Gura.', '2021-03-06 12:20:43', '2021-03-06 12:20:43'),
(43, 'Ninomae Ina\'nis', 'tlnt_744f9db44fddac781ed33f990ee30f35.png', 'Ninomae Ina\'nis is an English Virtual YouTuber associated with hololive, as part of its English (EN) branch first generation of Vtubers alongside Takanashi Kiara, Watson Amelia, Mori Calliope, and Gawr Gura.', '2021-03-06 12:21:18', '2021-03-06 12:21:18'),
(44, 'Gawr Gura', 'tlnt_c96612641a8a92685731e6271d70aea7.png', 'Gawr Gura is an English Virtual YouTuber associated with hololive, as part of its English (EN) branch first generation of VTubers alongside Ninomae Ina\'nis, Takanashi Kiara, Watson Amelia, and Mori Calliope.', '2021-03-06 12:21:59', '2021-03-06 12:21:59'),
(45, 'Watson Amelia', 'tlnt_a26056e763baef56df57aff785e12a33.png', 'Watson Amelia is an English Virtual YouTuber associated with hololive, as part of its English (EN) branch first generation of VTubers alongside Ninomae Ina\'nis, Takanashi Kiara, Mori Calliope, and Gawr Gura.', '2021-03-06 12:22:35', '2021-03-06 12:22:35'),
(46, 'Yogiri', 'tlnt_113c241c3288c33ba2dfe3e7fce9603a.png', 'Yogiri (夜霧, lit. Night fog) was a female Chinese VTuber associated with hololive, as part of its Chinese (CN) branch first generation of VUP (Virtual UP, since content creators in bilibili are normally nicknamed \"UP\" or \" UP Master\") alongside Civia and Spade Echo.', '2021-03-06 12:23:07', '2021-03-06 12:23:07'),
(47, 'Civia', 'tlnt_70c6f6a1e08fe219cc1e6b0a9bc4f395.png', 'Civia (希薇娅) was a female Chinese VTuber associated with hololive, as part of its Chinese (CN) branch first generation of VUP (Virtual UP, since content creators in bilibili are normally nicknamed \"UP\" or \"UP Master\") alongside Yogiri and Spade Echo.', '2021-03-06 12:23:37', '2021-03-06 12:23:37'),
(48, 'Spade Echo', 'tlnt_8a175d8167cb5539496eb0e953b640ac.png', 'Spade Echo (黑桃影) was a female Chinese VTuber associated with hololive, as part of its Chinese (CN) branch first generation of VUP (Virtual UP, since content creators in bilibili are normally nicknamed \"UP\" or \"UP Master\") alongside Yogiri and Civia.', '2021-03-06 12:24:04', '2021-03-06 12:24:04'),
(49, 'Doris', 'tlnt_5de188c6cd8d626ad6d16d127153883e.png', 'Doris (朵莉丝) was a female Chinese VTuber associated with hololive, as part of its Chinese (CN) branch second generation of VUP (Virtual UP, since content creators in Bilibili are normally nicknamed \"UP\" or \"UP Master\") alongside Artia and Rosalyn.', '2021-03-06 12:24:33', '2021-03-06 12:24:33'),
(50, 'Rosalyn', 'tlnt_f22fc0991c4e92e1701dd50689814fa5.png', 'Rosalyn (罗莎琳) was a female Chinese VTuber associated with hololive, as part of its Chinese (CN) branch second generation of VUP (Virtual UP, since content creators in Bilibili are normally nicknamed \"UP\" or \"UP Master\") alongside Doris and Artia.', '2021-03-06 12:25:06', '2021-03-06 12:25:06'),
(51, 'Artia', 'tlnt_f38db0d02d1359906eda0b0ee7442f95.png', 'Artia (阿媂娅) was a female Chinese VTuber associated with hololive as part of its Chinese (CN) branch second generation of VUP (Virtual UP, since content creators in bilibili are normally nicknamed \"UP\" or \"UP Master\") alongside Doris and Rosalyn.', '2021-03-06 12:25:56', '2021-03-06 12:25:56'),
(52, 'Hanasaki Miyabi', 'tlnt_09055bfa0597189bfe0f82676ce62ad9.png', 'Hanasaki Miyabi (花咲みやび) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its first generation, alongside (formerly) Kagami Kira, Kanade Izuru, (formerly) Yakushiji Suzaku, Arurandeisu and Rikka.', '2021-03-06 12:26:58', '2021-03-06 12:26:58'),
(53, 'Kanade Izuru', 'tlnt_bcb5fa9fb77fff654cbe4188c15a240d.png', 'Kanade Izuru (奏手イヅル) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its first generation, alongside Hanasaki Miyabi, (formerly) Kagami Kira, Arurandeisu, (formerly) Yakushiji Suzaku and Rikka.', '2021-03-06 12:27:37', '2021-03-06 12:27:37'),
(54, 'Arurandeisu', 'tlnt_da8432283a9e84b4de200a6bf3cf109a.png', 'Arurandeisu (アルランディス) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its first generation, alongside Hanasaki Miyabi, (formerly) Kagami Kira, Kanade Izuru (formerly) Yakushiji Suzaku and Rikka.', '2021-03-06 12:28:00', '2021-03-06 12:28:00'),
(55, 'Rikka', 'tlnt_faf87a96376cf4ad7d2f6f40f98d1f13.png', 'Rikka (律可) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its first generation, alongside Hanasaki Miyabi, (formerly) Kagami Kira, Kanade Izuru, Arurandeisu, and (formerly) Yakushiji Suzaku.', '2021-03-06 12:28:29', '2021-03-06 12:28:29'),
(56, 'Kagami Kira', 'tlnt_53a8bf695a46441dd5ca5a7f6b64d1dc.png', 'Kagami Kira (鏡見キラ) was a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its first generation, alongside Hanasaki Miyabi, Kanade Izuru, (formerly) Yakushiji Suzaku, Arurandeisu, and Rikka.', '2021-03-06 12:28:54', '2021-03-06 12:28:54'),
(57, 'Yakushiji Suzaku', 'tlnt_073109b0bfa3f39177dbcc8c114b5fa3.png', 'Yakushiji Suzaku (薬師寺朱雀) was a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He was a member of its first generation, alongside Kagami Kira, Arurandeisu, Kanade Izuru, Hanasaki Miyabi and Rikka.', '2021-03-06 12:29:18', '2021-03-06 12:29:18'),
(58, 'Astel Leda', 'tlnt_5242f2b8b7d81d604b96fee276434864.png', 'Astel Leda (アステル・レダ) is a male Japanese Virtual YouTuber hololive\'s branch Holostars. He is a member of its second generation, also known as \"SunTempo\" alongside Kishido Temma and Yukoku Roberu.', '2021-03-06 12:29:51', '2021-03-06 12:29:51'),
(59, 'Kishido Temma', 'tlnt_97a1ee7af0e015bf4542f25a865a6429.png', 'Kishido Temma (岸堂天真) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its second generation, also known as \"SunTempo\" alongside Astel Leda and Yukoku Roberu.', '2021-03-06 12:30:17', '2021-03-06 12:30:17'),
(60, 'Yukoku Roberu', 'tlnt_6c2db897178101c7383f94685cc90c65.png', 'Yukoku Roberu (夕刻ロベル) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its second generation, also known as \"SunTempo\" alongside Astel Leda and Kishido Temma.', '2021-03-06 12:30:51', '2021-03-06 12:30:51'),
(61, 'Kageyama Shien', 'tlnt_e2908d7212aaf461b01e7a5fbabea8ae.png', 'Kageyama Shien (影山シエン) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its third generation alongside Aragami Oga, which was previously known as \"TriNero\" (トライネロ) prior to Tsukishita Kaoru\'s retirement. Shien and Oga then became known as \"MaFia\" (魔フィア).', '2021-03-06 12:31:41', '2021-03-06 12:31:41'),
(62, 'Aragami Oga', 'tlnt_92b9f40c7111426bd230192fb9988e9e.png', 'Aragami Oga (荒咬オウガ) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its third generation alongside Kageyama Shien, which was previously known as \"TriNero\" (トライネロ) prior to Tsukishita Kaoru\'s retirement. Oga and Shien then became known as \"MaFia\" (魔フィア).', '2021-03-06 12:32:07', '2021-03-06 12:32:07'),
(63, 'Tsukishita Kaoru', 'tlnt_6768b194a06f88580e0630e4f8c451d6.png', 'Tsukishita Kaoru (月下カオル) was a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He was a member of its third generation, also known as \"TriNero\" (トライネロ) alongside Kageyama Shien and Aragami Oga.', '2021-03-06 12:32:35', '2021-03-06 12:32:35'),
(64, 'A-chan', 'tlnt_fa2d7ae99c685e966298ed0cad0e908e.png', 'VTuber office, person behind the scenes of Hololive (sometimes DJ).', '2021-03-06 12:35:52', '2021-03-06 12:35:52'),
(65, 'Daidou Shinove', 'tlnt_04b1d27a44644dd90ece284d3ffa90ab.png', 'Cover Co., Ltd. Male VTuber group \"Holostars\" manager and collaboration window.', '2021-03-06 12:37:52', '2021-03-06 12:37:52'),
(66, 'EnMa', 'tlnt_7a1dabd4d683b85f46f395ae8603a8cd.png', 'HoloEN\'s Manager. A necromancer from the Demonic-Realm Academy who is not good at communicating with people.', '2021-03-06 12:39:58', '2021-03-06 12:39:58'),
(67, 'Tsukino Mito', 'tlnt_2490744f943df29762f70622fadd8408.png', 'Tsukino Mito (月ノ美兎) is a female Japanese Virtual YouTuber, a well-dressed and well-spoken 16-year-old high school \"iinchou\" (委員長, class president). She is a member of (and currently the most popular in number of subscribers) the Nijisanji group. She is in the \"JK gumi\" (high school girl gang) along with Shizuka Rin and Higuchi Kaede.', '2021-03-11 06:13:47', '2021-03-11 06:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiliations`
--
ALTER TABLE `affiliations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affiliations_talent`
--
ALTER TABLE `affiliations_talent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gens`
--
ALTER TABLE `gens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gen_talent`
--
ALTER TABLE `gen_talent`
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
-- Indexes for table `talent`
--
ALTER TABLE `talent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affiliations`
--
ALTER TABLE `affiliations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `affiliations_talent`
--
ALTER TABLE `affiliations_talent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `gens`
--
ALTER TABLE `gens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `gen_talent`
--
ALTER TABLE `gen_talent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `talent`
--
ALTER TABLE `talent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
