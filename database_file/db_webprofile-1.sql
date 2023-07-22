-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2020 at 02:00 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.3.20-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `gambar` text COLLATE utf8mb4_unicode_ci,
  `pembuat` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_geografis`
--

CREATE TABLE `data_geografis` (
  `id` int(11) NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT '0',
  `sumber` varchar(200) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `bentuk` varchar(100) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_geografis`
--

INSERT INTO `data_geografis` (`id`, `kode`, `jumlah`, `sumber`, `tahun`, `bentuk`, `tanggal`) VALUES
(1, 2, 100, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(2, 3, 101, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(3, 4, 102, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(4, 5, 103, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(5, 6, 104, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(6, 7, 105, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(7, 8, 106, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(8, 9, 107, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(9, 10, 108, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(10, 11, 109, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(11, 12, 110, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(12, 13, 111, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(13, 14, 112, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(14, 15, 113, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(15, 16, 114, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(16, 17, 115, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(17, 18, 116, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(18, 19, 117, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(19, 20, 118, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(20, 21, 119, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(21, 22, 120, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(22, 23, 121, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(23, 24, 122, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(24, 25, 123, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(25, 26, 124, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(26, 27, 125, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(27, 28, 126, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(28, 29, 127, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(29, 30, 128, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(30, 31, 129, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(31, 32, 130, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(32, 33, 131, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(33, 34, 132, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(34, 35, 133, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(35, 36, 134, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(36, 37, 135, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(37, 38, 136, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(38, 39, 137, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(39, 40, 138, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(40, 41, 139, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(41, 42, 140, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(42, 43, 141, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(43, 44, 142, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(44, 45, 143, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(45, 46, 144, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(46, 47, 145, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(47, 48, 146, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(48, 49, 147, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(49, 50, 148, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(50, 51, 149, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(51, 52, 150, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(52, 53, 151, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(53, 54, 152, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(54, 55, 153, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(55, 56, 154, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(56, 57, 155, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(57, 58, 156, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(58, 59, 157, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(59, 60, 158, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(60, 61, 159, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(61, 62, 160, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(62, 63, 161, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(63, 64, 162, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(64, 65, 163, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(65, 66, 164, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(66, 67, 165, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(67, 68, 166, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(68, 69, 167, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(69, 70, 168, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(70, 71, 169, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(71, 72, 170, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(72, 73, 171, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(73, 74, 172, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(74, 75, 173, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(75, 76, 174, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(76, 77, 175, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(77, 78, 176, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(78, 79, 177, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(79, 80, 178, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(80, 81, 179, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(81, 82, 180, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(82, 83, 181, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(83, 84, 182, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(84, 85, 183, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(85, 86, 184, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(86, 87, 185, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(87, 88, 186, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(88, 89, 187, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(89, 90, 188, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(90, 91, 189, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(91, 92, 190, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(92, 93, 191, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(93, 94, 192, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(94, 95, 193, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(95, 96, 194, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(96, 97, 195, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(97, 98, 196, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(98, 99, 197, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(99, 100, 198, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(100, 101, 199, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(101, 102, 200, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(102, 103, 201, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(103, 104, 202, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(104, 105, 203, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(105, 106, 204, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(106, 107, 205, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(107, 108, 206, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(108, 109, 207, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(109, 110, 208, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(110, 111, 209, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(111, 112, 210, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(112, 113, 211, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(113, 114, 212, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(114, 115, 213, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(115, 116, 214, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(116, 117, 215, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(117, 118, 216, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(118, 119, 217, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(119, 120, 218, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(120, 121, 219, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(121, 122, 220, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(122, 123, 221, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(123, 124, 222, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(124, 125, 223, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(125, 126, 224, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(126, 127, 225, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(127, 128, 226, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(128, 129, 227, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(129, 130, 228, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(130, 131, 229, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(131, 132, 230, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(132, 133, 231, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(133, 134, 232, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(134, 135, 233, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(135, 136, 234, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(136, 137, 235, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(137, 138, 236, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(138, 139, 237, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(139, 140, 238, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(140, 141, 239, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(141, 142, 240, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(142, 143, 241, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(143, 144, 242, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(144, 145, 243, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(145, 146, 244, 'youtube', '2020', 'orang', '2020-11-12 14:45:54'),
(291, 2, 1, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(292, 3, 2, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(293, 4, 3, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(294, 5, 4, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(295, 6, 5, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(296, 7, 6, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(297, 8, 7, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(298, 9, 8, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(299, 10, 9, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(300, 11, 10, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(301, 12, 11, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(302, 13, 12, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(303, 14, 13, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(304, 15, 14, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(305, 16, 15, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(306, 17, 16, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(307, 18, 17, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(308, 19, 18, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(309, 20, 19, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(310, 21, 20, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(311, 22, 21, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(312, 23, 22, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(313, 24, 23, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(314, 25, 24, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(315, 26, 25, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(316, 27, 26, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(317, 28, 27, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(318, 29, 28, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(319, 30, 29, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(320, 31, 30, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(321, 32, 31, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(322, 33, 32, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(323, 34, 33, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(324, 35, 34, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(325, 36, 35, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(326, 37, 36, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(327, 38, 37, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(328, 39, 38, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(329, 40, 39, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(330, 41, 40, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(331, 42, 41, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(332, 43, 42, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(333, 44, 43, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(334, 45, 44, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(335, 46, 45, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(336, 47, 46, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(337, 48, 47, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(338, 49, 48, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(339, 50, 49, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(340, 51, 50, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(341, 52, 51, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(342, 53, 52, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(343, 54, 53, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(344, 55, 54, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(345, 56, 55, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(346, 57, 56, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(347, 58, 57, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(348, 59, 58, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(349, 60, 59, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(350, 61, 60, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(351, 62, 61, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(352, 63, 62, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(353, 64, 63, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(354, 65, 64, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(355, 66, 65, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(356, 67, 66, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(357, 68, 67, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(358, 69, 68, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(359, 70, 69, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(360, 71, 70, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(361, 72, 71, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(362, 73, 72, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(363, 74, 73, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(364, 75, 74, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(365, 76, 75, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(366, 77, 76, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(367, 78, 77, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(368, 79, 78, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(369, 80, 79, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(370, 81, 80, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(371, 82, 81, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(372, 83, 82, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(373, 84, 83, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(374, 85, 84, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(375, 86, 85, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(376, 87, 86, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(377, 88, 87, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(378, 89, 88, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(379, 90, 89, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(380, 91, 90, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(381, 92, 91, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(382, 93, 92, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(383, 94, 93, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(384, 95, 94, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(385, 96, 95, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(386, 97, 96, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(387, 98, 97, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(388, 99, 98, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(389, 100, 99, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(390, 101, 100, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(391, 102, 101, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(392, 103, 102, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(393, 104, 103, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(394, 105, 104, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(395, 106, 105, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(396, 107, 106, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(397, 108, 107, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(398, 109, 108, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(399, 110, 109, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(400, 111, 110, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(401, 112, 111, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(402, 113, 112, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(403, 114, 113, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(404, 115, 114, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(405, 116, 115, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(406, 117, 116, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(407, 118, 117, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(408, 119, 118, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(409, 120, 119, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(410, 121, 120, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(411, 122, 121, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(412, 123, 122, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(413, 124, 123, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(414, 125, 124, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(415, 126, 125, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(416, 127, 126, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(417, 128, 127, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(418, 129, 128, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(419, 130, 129, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(420, 131, 130, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(421, 132, 131, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(422, 133, 132, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(423, 134, 133, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(424, 135, 134, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(425, 136, 135, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(426, 137, 136, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(427, 138, 137, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(428, 139, 138, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(429, 140, 139, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(430, 141, 140, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(431, 142, 141, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(432, 143, 142, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(433, 144, 143, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(434, 145, 144, 'fb', '2021', 'orang', '2020-11-13 00:29:38'),
(435, 146, 145, 'fb', '2021', 'orang', '2020-11-13 00:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'dfg', '1604751072-template import CI 2.png', '2020-11-07 05:11:12', NULL),
(2, 'asdfasdf', '1604751107-ot - piutang.png', '2020-11-07 05:11:47', NULL),
(3, 'sdf', '1604751252-template import CI 2.png', '2020-11-07 05:14:12', NULL),
(4, 'sdf', '1604751289-ceystalhorizon.png', '2020-11-07 05:14:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bentuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id`, `nama`, `slug`, `bentuk`) VALUES
(1, 'contoh halaman', 'contoh-halaman', 'Majemuk');

-- --------------------------------------------------------

--
-- Table structure for table `input_geografis`
--

CREATE TABLE `input_geografis` (
  `id` int(11) NOT NULL,
  `header_satu` text,
  `header_dua` text,
  `input` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_geografis`
--

INSERT INTO `input_geografis` (`id`, `header_satu`, `header_dua`, `input`) VALUES
(2, 'Geografis', 'Luas Wilayah', 'Luas Darat'),
(3, 'Geografis', 'Luas Wilayah', 'Luas Laut'),
(4, 'Geografis', 'Letak Geografis', 'Lintang Utara'),
(5, 'Geografis', 'Letak Geografis', 'Bujur Timur'),
(6, 'Geografis', 'Letak Geografis', 'Lintang Selatan'),
(7, 'Geografis', 'Letak Geografis', 'Bujur Barat'),
(8, 'Geografis', 'Batas Wilayah', 'Sebelah Utara'),
(9, 'Geografis', 'Batas Wilayah', 'Sebelah Timur'),
(10, 'Geografis', 'Batas Wilayah', 'Sebelah Selatan'),
(11, 'Geografis', 'Batas Wilayah', 'Sebelah Barat'),
(12, 'Geografis', 'Klimatologi', 'Curah Hujan Rata-Rata'),
(13, 'Geografis', 'Klimatologi', 'Jumlah Hari Hujan '),
(14, 'Geografis', 'Klimatologi', 'Temperature'),
(15, 'Geografis', 'Klimatologi', 'Tingkat Kelembapan'),
(16, 'Kewilayahan', 'Kecamatan dan Kabupaten/Kota', 'Jumlah Luas Kecamatan#Wangi-Wangi'),
(17, 'Kewilayahan', 'Kecamatan dan Kabupaten/Kota', 'Jumlah Luas Kecamatan#Wangi-Wangi Selatan'),
(18, 'Kewilayahan', 'Kecamatan dan Kabupaten/Kota', 'Jumlah Luas Kecamatan#Kaledupa'),
(19, 'Kewilayahan', 'Kecamatan dan Kabupaten/Kota', 'Jumlah Luas Kecamatan#Kaledupa Selatan'),
(20, 'Kewilayahan', 'Kecamatan dan Kabupaten/Kota', 'Jumlah Luas Kecamatan#Tomia'),
(21, 'Kewilayahan', 'Kecamatan dan Kabupaten/Kota', 'Jumlah Luas Kecamatan#Tomia Timur'),
(22, 'Kewilayahan', 'Kecamatan dan Kabupaten/Kota', 'Jumlah Luas Kecamatan#Binongko'),
(23, 'Kewilayahan', 'Kecamatan dan Kabupaten/Kota', 'Jumlah Luas Kecamatan#Togo Binongko'),
(24, 'Kewilayahan', 'Kecamatan dan Kabupaten/Kota', 'Jumlah Luas Kabupaten'),
(25, 'Kewilayahan', 'Kecamatan dan Kabupaten/Kota', 'Jumlah Luas Kota'),
(26, 'Kewilayahan', 'Batas Wilayah Desa/Kelurahan', 'Jumlah Desa Memiliki Batas Wilayah'),
(27, 'Kewilayahan', 'Batas Wilayah Desa/Kelurahan', 'Jumlah Desa Belum Memiliki Batas Wilayah'),
(28, 'Kewilayahan', 'Batas Wilayah Desa/Kelurahan', 'Jumlah Kelurahan Memiliki Batas Wilayah'),
(29, 'Kewilayahan', 'Batas Wilayah Desa/Kelurahan', 'Jumlah Kelurahan Belum Memiliki Batas Wilayah'),
(30, 'Kewilayahan', 'Zona Laut', 'Laut Teritorial'),
(31, 'Kewilayahan', 'Zona Laut', 'Zona Ekonomi Eksklusif'),
(32, 'Kewilayahan', 'Zona Laut', 'Laut Landasan Kontinen'),
(33, 'Kewilayahan', 'Panjang Garis Pantai', 'Panjang Garis Pantai'),
(34, 'Topografi', 'Luas Lahan Berdasarkan Kelas Lereng ', 'Datar (0-2 Derajat)'),
(35, 'Topografi', 'Luas Lahan Berdasarkan Kelas Lereng ', 'Bergelombang (2-15 Derajat)'),
(36, 'Topografi', 'Luas Lahan Berdasarkan Kelas Lereng ', 'Curam (15-40 Derajat)'),
(37, 'Topografi', 'Luas Lahan Berdasarkan Kelas Lereng ', 'Sangat curam (>40 Derajat'),
(38, 'Topografi', 'Ketinggian di atas Permukaan Laut', 'Ketinggian di atas Permukaan Laut'),
(39, 'Luas Lahan', 'Luas Lahan Hutan', 'Hutan Produksi Tetap'),
(40, 'Luas Lahan', 'Luas Lahan Hutan', 'Hutan Produksi Terbatas'),
(41, 'Luas Lahan', 'Luas Lahan Hutan', 'Hutan yang Dapat Dikonversi'),
(42, 'Luas Lahan', 'Luas Lahan Hutan', 'Hutan Bakau'),
(43, 'Luas Lahan', 'Jumlah Lahan Persawahan', 'Sawah Irigasi'),
(44, 'Luas Lahan', 'Jumlah Lahan Persawahan', 'Sawah Tadah Hujan/Non Irigasi'),
(45, 'Luas Lahan', 'Jumlah Lahan Persawahan', 'Sawah Pasang Surut'),
(46, 'Luas Lahan', 'Jumlah Lahan Persawahan', 'Sawah Lainnya'),
(47, 'Luas Lahan', 'Jumlah Lahan Kering', 'Rawa-Rawa'),
(48, 'Luas Lahan', 'Jumlah Lahan Kering', 'Ladang (Tegalan)'),
(49, 'Luas Lahan', 'Jumlah Lahan Kering', 'Perkebunan'),
(50, 'Luas Lahan', 'Jumlah Lahan Kering', 'Usaha Lain'),
(51, 'Luas Lahan', 'Jumlah Lahan Kering', 'Belum / Tidak Diusahakan'),
(52, 'Luas Lahan', 'Lahan Pertambangan', 'Lahan Pertambangan'),
(53, 'Luas Lahan', 'Danau/Telaga Alam', 'Danau/Telaga Alam'),
(54, 'Luas Lahan', 'Waduk (Buatan)', 'Waduk (Buatan)'),
(55, 'Luas Lahan', 'Kolam Air Tawar', 'Kolam Air Tawar'),
(56, 'Luas Lahan', 'Tambak Ikan', 'Tambak Ikan'),
(57, 'Luas Lahan', 'Padang Rumput Alam', 'Padang Rumput Alam'),
(58, 'Luas Lahan', 'Tanah Tandus/Tanah Rusak (Tdk Diusahakan)', 'Tanah Tandus/Tanah Rusak (Tdk Diusahakan)'),
(59, 'Luas Lahan', 'Tanah Terlantar', 'Tanah Terlantar'),
(60, 'Luas Lahan', 'Luas Penggunaan Lahan Bukan Sawah', 'Kolam/Empang/Tambak'),
(61, 'Luas Lahan', 'Luas Penggunaan Lahan Bukan Sawah', 'Danau/Telaga Alam'),
(62, 'Luas Lahan', 'Luas Penggunaan Lahan Bukan Sawah', 'Ladang/Tegalan/Kebun/Padang Rumput'),
(63, 'Luas Lahan', 'Luas Penggunaan Lahan Bukan Sawah', 'Kebun Campuran'),
(64, 'Luas Lahan', 'Luas Penggunaan Lahan Bukan Sawah', 'Perkebunan'),
(65, 'Luas Lahan', 'Luas Penggunaan Lahan Bukan Sawah', 'Hutan'),
(66, 'Luas Lahan', 'Luas Penggunaan Lahan Bukan Sawah', 'Perumahan dan Permukiman'),
(67, 'Luas Lahan', 'Luas Penggunaan Lahan Bukan Sawah', 'Industri'),
(68, 'Luas Lahan', 'Luas Penggunaan Lahan Bukan Sawah', 'Bangunan Lainnya/Perkantoran'),
(69, 'Luas Lahan', 'Luas Penggunaan Lahan Bukan Sawah', 'Non Sawah Sementara yang Tidak Diusahakan'),
(70, 'Luas Lahan', 'Luas Penggunaan Lahan Bukan Sawah', 'Waduk (Buatan)'),
(71, 'Luas Lahan', 'Luas Penggunaan Lahan Bukan Sawah', 'Lainnya'),
(72, 'Luas Lahan', 'Luas Perubahan Penggunaan Lahan Sawah', 'Menjadi Lahan Pertanian Bukan Sawah'),
(73, 'Luas Lahan', 'Luas Perubahan Penggunaan Lahan Sawah', 'Menjadi Perumahan'),
(74, 'Luas Lahan', 'Luas Perubahan Penggunaan Lahan Sawah', 'Menjadi Industri'),
(75, 'Luas Lahan', 'Luas Perubahan Penggunaan Lahan Sawah', 'Menjadi Perusahaan/Perkantoran'),
(76, 'Luas Lahan', 'Luas Perubahan Penggunaan Lahan Sawah', 'Menjadi Lahan Pertanian Bukan Sawah'),
(77, 'Luas Lahan', 'Luas Perubahan Penggunaan Lahan Sawah', 'Menjadi Lahan Lainnya'),
(78, 'Luas Lahan', 'Luas Perubahan Penggunaan Lahan Hutan', 'Hutan Menjadi Lahan Sawah '),
(79, 'Luas Lahan', 'Luas Perubahan Penggunaan Lahan Hutan', 'Hutan Menjadi Perumahan'),
(80, 'Luas Lahan', 'Luas Perubahan Penggunaan Lahan Hutan', 'Hutan Menjadi Lahan Industri'),
(81, 'Luas Lahan', 'Luas Perubahan Penggunaan Lahan Hutan', 'Hutan Menjadi Perusahaan/Perkantoran'),
(82, 'Luas Lahan', 'Luas Perubahan Penggunaan Lahan Hutan', 'Hutan Menjadi Lahan Bukan Sawah'),
(83, 'Luas Lahan', 'Luas Perubahan Penggunaan Lahan Hutan', 'Hutan Menjadi Lahan Lainnya'),
(84, 'Luas Lahan', 'Penggunaan Lahan (Land Use) per Sektor', 'Pertanian'),
(85, 'Luas Lahan', 'Penggunaan Lahan (Land Use) per Sektor', 'Pertambangan dan Penggalian'),
(86, 'Luas Lahan', 'Penggunaan Lahan (Land Use) per Sektor', 'Industri Pengolahan'),
(87, 'Luas Lahan', 'Penggunaan Lahan (Land Use) per Sektor', 'Listrik, Air dan Air Bersih'),
(88, 'Luas Lahan', 'Penggunaan Lahan (Land Use) per Sektor', 'Bangunan'),
(89, 'Luas Lahan', 'Penggunaan Lahan (Land Use) per Sektor', 'Perdagangan'),
(90, 'Luas Lahan', 'Penggunaan Lahan (Land Use) per Sektor', 'Pengangkutan dan Komunikasi'),
(91, 'Luas Lahan', 'Penggunaan Lahan (Land Use) per Sektor', 'Keuangan'),
(92, 'Luas Lahan', 'Penggunaan Lahan (Land Use) per Sektor', 'Jasa-Jasa'),
(93, 'Keadaan Iklim Rata-Rata', 'Suhu', 'Suhu Terendah'),
(94, 'Keadaan Iklim Rata-Rata', 'Suhu', 'Suhu Tertinggi'),
(95, 'Keadaan Iklim Rata-Rata', 'Kelembaban Udara', 'Kelembaban Udara Terendah'),
(96, 'Keadaan Iklim Rata-Rata', 'Kelembaban Udara', 'Kelembaban Udara Tertinggi'),
(97, 'Keadaan Iklim Rata-Rata', 'Curah Hujan', 'Curah Hujan Terendah'),
(98, 'Keadaan Iklim Rata-Rata', 'Curah Hujan', 'Curah Hujan Tertinggi'),
(99, 'Keadaan Iklim Rata-Rata', 'Kecepatan Angin', 'Kecepatan Angin Terendah'),
(100, 'Keadaan Iklim Rata-Rata', 'Kecepatan Angin', 'Kecepatan Angin Tertinggi'),
(101, 'Jumlah Pulau', 'Pulau Berpenghuni', 'Jumlah Penduduk'),
(102, 'Jumlah Pulau', 'Pulau Berpenghuni', 'Jumlah KK'),
(103, 'Jumlah Pulau', 'Pulau Berpenghuni', 'Luas Daratan Pulau Berpenghuni'),
(104, 'Jumlah Pulau', 'Pulau Berpenghuni', 'Luas Lahan Produktif Pulau Berpenghuni'),
(105, 'Jumlah Pulau', 'Pulau Berpenghuni', 'Luas Lahan Budidaya Pulau Berpenghuni'),
(106, 'Jumlah Pulau', 'Pulau Berpenghuni', 'Jumlah Mercusuar'),
(107, 'Jumlah Pulau', 'Pulau Berpenghuni Tidak Tetap', 'Jumlah Penduduk Singgah'),
(108, 'Jumlah Pulau', 'Pulau Berpenghuni Tidak Tetap', 'Luas Daratan Pulau Berpenghuni Tidak Tetap'),
(109, 'Jumlah Pulau', 'Pulau Berpenghuni Tidak Tetap', 'Luas Lahan Produktif Pulau Berpenghuni Tidak Tetap'),
(110, 'Jumlah Pulau', 'Pulau Berpenghuni Tidak Tetap', 'Luas Lahan Budidaya Pulau Berpenghuni Tidak Tetap'),
(111, 'Jumlah Pulau', 'Pulau Berpenghuni Tidak Tetap', 'Jumlah Mercusuar'),
(112, 'Jumlah Pulau', 'Pulau Tidak Berpenghuni', 'Pulau Tidak Berpenghuni'),
(113, 'Jumlah Pulau', 'Pulau Bernama', 'Jumlah Penduduk'),
(114, 'Jumlah Pulau', 'Pulau Bernama', 'Jumlah KK'),
(115, 'Jumlah Pulau', 'Pulau Bernama', 'Luas Daratan Pulau Bernama'),
(116, 'Jumlah Pulau', 'Pulau Bernama', 'Luas Lahan Produktif Pulau Bernama'),
(117, 'Jumlah Pulau', 'Pulau Bernama', 'Luas Lahan Budidaya Pulau Bernama'),
(118, 'Jumlah Pulau', 'Pulau Bernama', 'Jumlah Mercusuar'),
(119, 'Jumlah Pulau', 'Pulau Tidak Bernama', 'Jumlah Penduduk'),
(120, 'Jumlah Pulau', 'Pulau Tidak Bernama', 'Jumlah KK'),
(121, 'Jumlah Pulau', 'Pulau Tidak Bernama', 'Luas Daratan Pulau Bernama'),
(122, 'Jumlah Pulau', 'Pulau Tidak Bernama', 'Luas Lahan Produktif Pulau Bernama'),
(123, 'Jumlah Pulau', 'Pulau Tidak Bernama', 'Luas Lahan Budidaya Pulau Bernama'),
(124, 'Jumlah Pulau', 'Pulau Tidak Bernama', 'Jumlah Mercusuar'),
(125, 'Jumlah Pulau', 'Pulau-Pulau Kecil (Luas di bawah 100 km2)', 'Jumlah Penduduk'),
(126, 'Jumlah Pulau', 'Pulau-Pulau Kecil (Luas di bawah 100 km2)', 'Jumlah KK'),
(127, 'Jumlah Pulau', 'Pulau-Pulau Kecil (Luas di bawah 100 km2)', 'Luas Daratan Pulau - Pulau Kecil'),
(128, 'Jumlah Pulau', 'Pulau-Pulau Kecil (Luas di bawah 100 km2)', 'Luas Lahan Produktif Pulau - Pulau Kecil'),
(129, 'Jumlah Pulau', 'Pulau-Pulau Kecil (Luas di bawah 100 km2)', 'Luas Lahan Budidaya Pulau - Pulau Kecil'),
(130, 'Jumlah Pulau', 'Pulau-Pulau Kecil (Luas di bawah 100 km2)', 'Jumlah Mercusuar'),
(131, 'Jumlah Pulau', 'Pulau terluar/perbatasan dengan negara lain', 'Jumlah Penduduk'),
(132, 'Jumlah Pulau', 'Pulau terluar/perbatasan dengan negara lain', 'Jumlah KK'),
(133, 'Jumlah Pulau', 'Pulau terluar/perbatasan dengan negara lain', 'Luas Daratan Pulau Berpenghuni'),
(134, 'Jumlah Pulau', 'Pulau terluar/perbatasan dengan negara lain', 'Luas Lahan Produktif Pulau terluar'),
(135, 'Jumlah Pulau', 'Pulau terluar/perbatasan dengan negara lain', 'Luas Lahan Budidaya Pulau terluar'),
(136, 'Jumlah Pulau', 'Pulau terluar/perbatasan dengan negara lain', 'Jumlah Mercusuar'),
(137, 'Jumlah Gunung', 'Aktif', 'Aktif'),
(138, 'Jumlah Gunung', 'Non Aktif', 'Non Aktif'),
(139, 'Jumlah Gunung', 'Vulkanik', 'Vulkanik'),
(140, 'Panjang Perbatasan Darat dengan Negara Lain', 'Papua - Papua Nugini', 'Papua - Papua Nugini'),
(141, 'Panjang Perbatasan Darat dengan Negara Lain', 'Kalimantan-Malaysia', 'Kalimantan-Malaysia'),
(142, 'Panjang Perbatasan Darat dengan Negara Lain', 'NTT-Timor Leste', 'NTT-Timor Leste'),
(143, 'Fisiografi Lahan', 'Luas Area Pegunungan', 'Luas Area Pegunungan'),
(144, 'Fisiografi Lahan', 'Luas Area Berbukit-Bukit', 'Luas Area Berbukit-Bukit'),
(145, 'Fisiografi Lahan', 'Luas Area Dataran', 'Luas Area Dataran'),
(146, 'Fisiografi Lahan', 'Luas Area Pesisir', 'Luas Area Pesisir');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_artikel`
--

CREATE TABLE `kategori_artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `komen_artikel`
--

CREATE TABLE `komen_artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_artikel` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konten_halaman`
--

CREATE TABLE `konten_halaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_halaman` int(11) DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `gambar` text COLLATE utf8mb4_unicode_ci,
  `pembuat` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `halaman_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `halaman_id`, `status`) VALUES
(1, 'data profil', NULL, 'Parent');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_08_034719_create_menu_table', 1),
(5, '2020_06_08_035501_create_submenu_table', 1),
(6, '2020_06_08_035803_create_halaman_table', 1),
(7, '2020_06_08_040210_create_konten_halaman_table', 1),
(8, '2020_06_29_010825_create_artikel_table', 1),
(9, '2020_06_29_011252_create_kategori_artikel_table', 1),
(10, '2020_06_29_014952_create_komen_artikel_table', 1),
(11, '2020_06_29_120837_create_slider_table', 1),
(12, '2020_06_29_120952_create_web_setting_table', 1),
(13, '2020_11_05_095222_create_galeri_table', 1);

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
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `nama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `link_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `judul`, `isi`, `link`, `link_text`, `gambar`, `status`) VALUES
(1, NULL, NULL, NULL, NULL, '1604751027-template import CI 1.png', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `id_halaman` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `telp`, `level`, `gambar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'deva', 'deva', 'satriosuklun@gmail.com', NULL, 'Admin', NULL, NULL, '$2y$10$m2RzU7G61c8GE1M/vZJ8jekJ0UGYnapRP8TE18NXqCEly5Xg5Myhu', NULL, '2020-11-07 05:08:04', '2020-11-07 05:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `singkatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `moto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp_satu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp_dua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `favicon` text COLLATE utf8mb4_unicode_ci,
  `link_fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_ig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_geografis`
--
ALTER TABLE `data_geografis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_geografis`
--
ALTER TABLE `input_geografis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen_artikel`
--
ALTER TABLE `komen_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten_halaman`
--
ALTER TABLE `konten_halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
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
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_geografis`
--
ALTER TABLE `data_geografis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=436;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `input_geografis`
--
ALTER TABLE `input_geografis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `komen_artikel`
--
ALTER TABLE `komen_artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `konten_halaman`
--
ALTER TABLE `konten_halaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
