-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 12:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `isi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pembuat` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `slug`, `id_kategori`, `isi`, `gambar`, `pembuat`, `created_at`, `updated_at`) VALUES
(1, 'Style trendi 2020', 'style-trendi-2020', 1, '<p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '1605511985-Pulau Runduma (1332 px x 694 px).jpg', 2, '2020-11-15 23:17:30', '2020-11-16 00:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `id_kategori`, `judul`, `slug`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 3, '48 Tahanan Bareskrim Positif Corona, 8 di Antaranya Bergejala', '48-tahanan-bareskrim-positif-corona,-8-di-antaranya-bergejala', '<p style=\"margin-top: 16px; margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif;\">\"Sesuai laporan Kapusdokkes Polri, hasil swab dari 170 tahanan Bareskrim, yang terkonfirmasi COVID-19 sebanyak 48 orang. 8 Orang dengan gejala batuk, demam, pusing, flu dan 40 orang tanpa gejala,\" kata Karo Penmas Divisi Humas <a href=\"https://www.detik.com/tag/polri\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(33, 64, 154); transition: all 0.3s ease-in-out 0s;\">Polri</a>, Brigjen Awi Setiyono melalui keterangannya, Senin (16/11/2020)</p><p style=\"margin-bottom: 16px; font-family: Helvetica, Helvetica-FF, Arial, Tahoma, sans-serif;\">Awi menuturkan, kedelapan orang tersebut saat ini telah mendapat perawatan di RS Polri Kramatjati, Jakarta Timur. Sementara, 40 orang tanpa gelaja (OTG) diisolasi dan dipisahkan dari tahanan lain yang sehat.</p>', '1605510711-karopenmas-divis-humas-polri-brigjen-awi-setiyono_169.jpeg', '2020-11-15 23:00:11', '2020-11-16 00:11:51'),
(2, 2, 'Hari ini gisel ulang tahun yang ke 30 tahun , jebolan idol ini semakin cantik', 'hari-ini-gisel-ulang-tahun-yang-ke-30-tahun-,-jebolan-idol-ini-semakin-cantik', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '1605510759-gisel-ulang-tahun-30.jpg', '2020-11-15 23:22:21', '2020-11-16 00:25:05'),
(3, 1, 'Cara membuat badan sixpack dalam seminggu', 'cara-membuat-badan-sixpack-dalam-seminggu', 'lore ipsum lore ipsum ore ipsum ore ipsum ore ipsum ore ipsum ore ipsum ore ipsum ore ipsum ore ipsum ore ipsum ore ipsum ore ipsum ore ipsum ore ipsum ore ipsum ', '1605510768-membuat-perut-sixpack.jpg', '2020-11-15 23:45:20', '2020-11-16 00:12:48'),
(7, 3, 'CEO Jouska Bantah Bakal Kabur ke Australia', 'ceo-jouska-bantah-bakal-kabur-ke-australia', '<p>asdsad</p>', '1605511592-aakar-abyasa-fidzuno-3_169.jpeg', '2020-11-16 00:26:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_energi_sumberdaya`
--

CREATE TABLE `data_energi_sumberdaya` (
  `id` int(11) NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `bentuk` varchar(100) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `sumber` varchar(100) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_geografis`
--

CREATE TABLE `data_geografis` (
  `id` int(11) NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT 0,
  `sumber` varchar(200) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `bentuk` varchar(100) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_geografis`
--

INSERT INTO `data_geografis` (`id`, `kode`, `jumlah`, `sumber`, `tahun`, `bentuk`, `tanggal`) VALUES
(1, 2, 100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(2, 3, 200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(3, 4, 300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(4, 5, 400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(5, 6, 500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(6, 7, 600, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(7, 8, 700, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(8, 9, 800, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(9, 10, 900, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(10, 11, 1000, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(11, 12, 1100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(12, 13, 1200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(13, 14, 1300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(14, 15, 1400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(15, 16, 1500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(16, 17, 1600, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(17, 18, 1700, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(18, 19, 1800, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(19, 20, 1900, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(20, 21, 2000, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(21, 22, 2100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(22, 23, 2200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(23, 24, 2300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(24, 25, 2400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(25, 26, 2500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(26, 27, 2600, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(27, 28, 2700, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(28, 29, 2800, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(29, 30, 2900, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(30, 31, 3000, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(31, 32, 3100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(32, 33, 3200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(33, 34, 3300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(34, 35, 3400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(35, 36, 3500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(36, 37, 3600, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(37, 38, 3700, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(38, 39, 3800, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(39, 40, 3900, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(40, 41, 4000, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(41, 42, 4100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(42, 43, 4200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(43, 44, 4300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(44, 45, 4400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(45, 46, 4500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(46, 47, 4600, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(47, 48, 4700, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(48, 49, 4800, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(49, 50, 4900, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(50, 51, 5000, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(51, 52, 5100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(52, 53, 5200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(53, 54, 5300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(54, 55, 5400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(55, 56, 5500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(56, 57, 5600, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(57, 58, 5700, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(58, 59, 5800, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(59, 60, 5900, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(60, 61, 6000, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(61, 62, 6100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(62, 63, 6200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(63, 64, 6300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(64, 65, 6400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(65, 66, 6500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(66, 67, 6600, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(67, 68, 6700, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(68, 69, 6800, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(69, 70, 6900, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(70, 71, 7000, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(71, 72, 7100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(72, 73, 7200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(73, 74, 7300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(74, 75, 7400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(75, 76, 7500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(76, 77, 7600, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(77, 78, 7700, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(78, 79, 7800, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(79, 80, 7900, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(80, 81, 8000, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(81, 82, 8100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(82, 83, 8200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(83, 84, 8300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(84, 85, 8400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(85, 86, 8500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(86, 87, 8600, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(87, 88, 8700, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(88, 89, 8800, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(89, 90, 8900, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(90, 91, 9000, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(91, 92, 9100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(92, 93, 9200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(93, 94, 9300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(94, 95, 9400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(95, 96, 9500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(96, 97, 9600, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(97, 98, 9700, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(98, 99, 9800, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(99, 100, 9900, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(100, 101, 10000, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(101, 102, 10100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(102, 103, 10200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(103, 104, 10300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(104, 105, 10400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(105, 106, 10500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(106, 107, 10600, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(107, 108, 10700, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(108, 109, 10800, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(109, 110, 10900, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(110, 111, 11000, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(111, 112, 11100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(112, 113, 11200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(113, 114, 11300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(114, 115, 11400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(115, 116, 11500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(116, 117, 11600, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(117, 118, 11700, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(118, 119, 11800, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(119, 120, 11900, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(120, 121, 12000, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(121, 122, 12100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(122, 123, 12200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(123, 124, 12300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(124, 125, 12400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(125, 126, 12500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(126, 127, 12600, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(127, 128, 12700, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(128, 129, 12800, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(129, 130, 12900, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(130, 131, 13000, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(131, 132, 13100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(132, 133, 13200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(133, 134, 13300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(134, 135, 13400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(135, 136, 13500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(136, 137, 13600, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(137, 138, 13700, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(138, 139, 13800, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(139, 140, 13900, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(140, 141, 14000, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(141, 142, 14100, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(142, 143, 14200, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(143, 144, 14300, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(144, 145, 14400, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26'),
(145, 146, 14500, 'Youtube', '2020', 'Pcs', '2020-11-16 01:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `data_indikator_data_strategis`
--

CREATE TABLE `data_indikator_data_strategis` (
  `id` int(11) NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `sumber` varchar(200) DEFAULT NULL,
  `bentuk` varchar(100) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_kehutanan`
--

CREATE TABLE `data_kehutanan` (
  `id` int(11) NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `bentuk` varchar(100) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `sumber` varchar(100) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kehutanan`
--

INSERT INTO `data_kehutanan` (`id`, `kode`, `bentuk`, `tahun`, `jumlah`, `sumber`, `tanggal`) VALUES
(52, 1, 'kardus', '2020', 100, 'WA', '2020-11-15 09:16:17'),
(53, 2, 'kardus', '2020', 200, 'WA', '2020-11-15 09:16:17'),
(54, 3, 'kardus', '2020', 300, 'WA', '2020-11-15 09:16:17'),
(55, 4, 'kardus', '2020', 400, 'WA', '2020-11-15 09:16:17'),
(56, 5, 'kardus', '2020', 500, 'WA', '2020-11-15 09:16:17'),
(57, 6, 'kardus', '2020', 600, 'WA', '2020-11-15 09:16:17'),
(58, 7, 'kardus', '2020', 700, 'WA', '2020-11-15 09:16:17'),
(59, 8, 'kardus', '2020', 800, 'WA', '2020-11-15 09:16:17'),
(60, 9, 'kardus', '2020', 900, 'WA', '2020-11-15 09:16:17'),
(61, 10, 'kardus', '2020', 1000, 'WA', '2020-11-15 09:16:17'),
(62, 11, 'kardus', '2020', 1100, 'WA', '2020-11-15 09:16:17'),
(63, 12, 'kardus', '2020', 1200, 'WA', '2020-11-15 09:16:17'),
(64, 13, 'kardus', '2020', 1300, 'WA', '2020-11-15 09:16:17'),
(65, 14, 'kardus', '2020', 1400, 'WA', '2020-11-15 09:16:17'),
(66, 15, 'kardus', '2020', 1500, 'WA', '2020-11-15 09:16:17'),
(67, 16, 'kardus', '2020', 1600, 'WA', '2020-11-15 09:16:17'),
(68, 17, 'kardus', '2020', 1700, 'WA', '2020-11-15 09:16:17'),
(69, 18, 'kardus', '2020', 1800, 'WA', '2020-11-15 09:16:17'),
(70, 19, 'kardus', '2020', 1900, 'WA', '2020-11-15 09:16:17'),
(71, 20, 'kardus', '2020', 2000, 'WA', '2020-11-15 09:16:17'),
(72, 21, 'kardus', '2020', 2100, 'WA', '2020-11-15 09:16:17'),
(73, 22, 'kardus', '2020', 2200, 'WA', '2020-11-15 09:16:17'),
(74, 23, 'kardus', '2020', 2300, 'WA', '2020-11-15 09:16:17'),
(75, 24, 'kardus', '2020', 2400, 'WA', '2020-11-15 09:16:17'),
(76, 25, 'kardus', '2020', 2500, 'WA', '2020-11-15 09:16:17'),
(77, 26, 'kardus', '2020', 2600, 'WA', '2020-11-15 09:16:17'),
(78, 27, 'kardus', '2020', 2700, 'WA', '2020-11-15 09:16:17'),
(79, 28, 'kardus', '2020', 2800, 'WA', '2020-11-15 09:16:17'),
(80, 29, 'kardus', '2020', 2900, 'WA', '2020-11-15 09:16:17'),
(81, 30, 'kardus', '2020', 3000, 'WA', '2020-11-15 09:16:17'),
(82, 31, 'kardus', '2020', 3100, 'WA', '2020-11-15 09:16:17'),
(83, 32, 'kardus', '2020', 3200, 'WA', '2020-11-15 09:16:17'),
(84, 33, 'kardus', '2020', 3300, 'WA', '2020-11-15 09:16:17'),
(85, 34, 'kardus', '2020', 3400, 'WA', '2020-11-15 09:16:17'),
(86, 35, 'kardus', '2020', 3500, 'WA', '2020-11-15 09:16:17'),
(87, 36, 'kardus', '2020', 3600, 'WA', '2020-11-15 09:16:17'),
(88, 37, 'kardus', '2020', 3700, 'WA', '2020-11-15 09:16:17'),
(89, 38, 'kardus', '2020', 3800, 'WA', '2020-11-15 09:16:17'),
(90, 39, 'kardus', '2020', 3900, 'WA', '2020-11-15 09:16:17'),
(91, 40, 'kardus', '2020', 4000, 'WA', '2020-11-15 09:16:17'),
(92, 41, 'kardus', '2020', 4100, 'WA', '2020-11-15 09:16:17'),
(93, 42, 'kardus', '2020', 4200, 'WA', '2020-11-15 09:16:17'),
(94, 43, 'kardus', '2020', 4300, 'WA', '2020-11-15 09:16:17'),
(95, 44, 'kardus', '2020', 4400, 'WA', '2020-11-15 09:16:17'),
(96, 45, 'kardus', '2020', 4500, 'WA', '2020-11-15 09:16:17'),
(97, 46, 'kardus', '2020', 4600, 'WA', '2020-11-15 09:16:17'),
(98, 47, 'kardus', '2020', 4700, 'WA', '2020-11-15 09:16:17'),
(99, 48, 'kardus', '2020', 4800, 'WA', '2020-11-15 09:16:17'),
(100, 49, 'kardus', '2020', 4900, 'WA', '2020-11-15 09:16:17'),
(101, 50, 'kardus', '2020', 5000, 'WA', '2020-11-15 09:16:17'),
(102, 51, 'kardus', '2020', 5100, 'WA', '2020-11-15 09:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `data_pajak_retribusi_daerah`
--

CREATE TABLE `data_pajak_retribusi_daerah` (
  `id` int(11) NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `sumber` varchar(100) DEFAULT NULL,
  `bentuk` varchar(100) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pariwisata`
--

CREATE TABLE `data_pariwisata` (
  `id` int(11) NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `sumber` varchar(100) DEFAULT NULL,
  `bentuk` varchar(100) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pertanian`
--

CREATE TABLE `data_pertanian` (
  `id` int(11) NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `bentuk` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `sumber` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_program_unggulan`
--

CREATE TABLE `data_program_unggulan` (
  `id` int(11) NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `sumber` varchar(100) DEFAULT NULL,
  `bentuk` varchar(100) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(6, 'puncak kalingga', '1605511951-Puncak Kahianga (1332 px x 694 px).jpg', '2020-11-16 00:32:31', NULL),
(9, 'pantai onemoba', '1605512016-Pantai Onemobaa (1332 px x 694 px).jpg', '2020-11-16 00:33:36', '2020-11-16 00:33:47'),
(10, 'pantai onemelangka', '1605512454-Pantai One Melangka (1332 px x 694 px).png', '2020-11-16 00:40:54', NULL),
(11, 'pulau drawa', '1605512474-Pulau Darawa (1332 px x 694 px).jpg', '2020-11-16 00:41:14', NULL);

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
-- Table structure for table `input_energi_sumberdaya`
--

CREATE TABLE `input_energi_sumberdaya` (
  `id` int(11) NOT NULL,
  `header_satu` text DEFAULT NULL,
  `header_dua` text DEFAULT NULL,
  `header_tiga` text DEFAULT NULL,
  `input` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_energi_sumberdaya`
--

INSERT INTO `input_energi_sumberdaya` (`id`, `header_satu`, `header_dua`, `header_tiga`, `input`) VALUES
(1, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Minyak Mentah', 'Total Produksi'),
(2, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Minyak Mentah', 'Realisasi Lifting'),
(3, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Minyak Mentah', 'BUMN'),
(4, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Minyak Mentah', 'Jumlah Kilang'),
(5, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Minyak Mentah', 'Jumlah Produksi'),
(6, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Minyak Mentah', 'BUMD'),
(7, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Minyak Mentah', 'Jumlah Kilang'),
(8, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Minyak Mentah', 'Jumlah Produksi'),
(9, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Minyak Mentah', 'PMA#Jumlah Kilang'),
(10, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Minyak Mentah', 'PMA#jumlah Produksi'),
(11, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Gas Alam', 'Total Produksi'),
(12, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Gas Alam', 'Realisasi Lifting'),
(13, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Gas Alam', 'BUMN#Jumlah Kilang'),
(14, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Gas Alam', 'BUMN#jumlah Produksi'),
(15, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Gas Alam', 'BUMD#Jumlah Kilang'),
(16, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Gas Alam', 'BUMD#jumlah Produksi'),
(17, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Gas Alam', 'PMA#Jumlah Kilang'),
(18, 'Pertambangan', 'Minyak Bumi dan Gas Alam', 'Gas Alam', 'PMA#jumlah Produksi'),
(19, 'Pertambangan', 'Mineral', 'Batubara', 'Produksi'),
(20, 'Pertambangan', 'Mineral', 'Batubara', 'Jumlah Perusahaan'),
(21, 'Pertambangan', 'Mineral', 'Timah', 'Produksi'),
(22, 'Pertambangan', 'Mineral', 'Timah', 'Jumlah Perusahaan'),
(23, 'Pertambangan', 'Mineral', 'Besi/Baja', 'Produksi'),
(24, 'Pertambangan', 'Mineral', 'Besi/Baja', 'Jumlah Perusahaan'),
(25, 'Pertambangan', 'Mineral', 'Tembaga', 'Produksi'),
(26, 'Pertambangan', 'Mineral', 'Tembaga', 'Jumlah Perusahaan'),
(27, 'Pertambangan', 'Mineral', 'Biji Nikel', 'Produksi'),
(28, 'Pertambangan', 'Mineral', 'Biji Nikel', 'Jumlah Perusahaan'),
(29, 'Pertambangan', 'Mineral', 'Emas', 'Produksi'),
(30, 'Pertambangan', 'Mineral', 'Emas', 'Jumlah Perusahaan'),
(31, 'Pertambangan', 'Mineral', 'Perak', 'Produksi'),
(32, 'Pertambangan', 'Mineral', 'Perak', 'Jumlah Perusahaan'),
(33, 'Pertambangan', 'Mineral', 'Gamping', 'Produksi Gamping'),
(34, 'Pertambangan', 'Mineral', 'Gamping', 'Produksi Kapur'),
(35, 'Pertambangan', 'Mineral', 'Gamping', 'Jumlah Perusahaan'),
(36, 'Pertambangan', 'Mineral', 'Andesit', 'Produksi'),
(37, 'Pertambangan', 'Mineral', 'Andesit', 'Jumlah Perusahaan'),
(38, 'Pertambangan', 'Mineral', 'Marmer', 'Produksi'),
(39, 'Pertambangan', 'Mineral', 'Marmer', 'Jumlah Perusahaan'),
(40, 'Pertambangan', 'Mineral', 'Granit', 'Produksi'),
(41, 'Pertambangan', 'Mineral', 'Granit', 'Jumlah Perusahaan'),
(42, 'Pertambangan', 'Mineral', 'Basalt', 'Produksi'),
(43, 'Pertambangan', 'Mineral', 'Basalt', 'Jumlah Perusahaan'),
(44, 'Pertambangan', 'Mineral', 'Aspal', 'Produksi'),
(45, 'Pertambangan', 'Mineral', 'Aspal', 'Jumlah Perusahaan'),
(46, 'Pertambangan', 'Mineral', 'Pasir', 'Produksi'),
(47, 'Pertambangan', 'Mineral', 'Pasir', 'Jumlah Perusahaan'),
(48, 'Pertambangan', 'Mineral', 'Batu Split', 'Produksi'),
(49, 'Pertambangan', 'Mineral', 'Batu Split', 'Jumlah Perusahaan'),
(50, 'Energi', 'Sumber Energi Listrik', 'PLTA', 'Jumlah'),
(51, 'Energi', 'Sumber Energi Listrik', 'PLTA', 'Kapasitas'),
(52, 'Energi', 'Sumber Energi Listrik', 'PLTA', 'Cakupan Wilayah'),
(53, 'Energi', 'Sumber Energi Listrik', 'PLTG', 'Jumlah'),
(54, 'Energi', 'Sumber Energi Listrik', 'PLTG', 'Kapasitas'),
(55, 'Energi', 'Sumber Energi Listrik', 'PLTG', 'Cakupan Wilayah'),
(56, 'Energi', 'Sumber Energi Listrik', 'PLTU', 'Jumlah'),
(57, 'Energi', 'Sumber Energi Listrik', 'PLTU', 'Kapasitas'),
(58, 'Energi', 'Sumber Energi Listrik', 'PLTU', 'Cakupan Wilayah'),
(59, 'Energi', 'Sumber Energi Listrik', 'PLTD', 'Jumlah'),
(60, 'Energi', 'Sumber Energi Listrik', 'PLTD', 'Kapasitas'),
(61, 'Energi', 'Sumber Energi Listrik', 'PLTD', 'Cakupan Wilayah'),
(62, 'Energi', 'Sumber Energi Listrik', 'PLTS', 'Jumlah'),
(63, 'Energi', 'Sumber Energi Listrik', 'PLTS', 'Kapasitas'),
(64, 'Energi', 'Sumber Energi Listrik', 'PLTS', 'Cakupan Wilayah'),
(65, 'Energi', 'Sumber Energi Listrik', 'PLTMH', 'Jumlah'),
(66, 'Energi', 'Sumber Energi Listrik', 'PLTMH', 'Kapasitas'),
(67, 'Energi', 'Sumber Energi Listrik', 'PLTMH', 'Cakupan Wilayah'),
(68, 'Energi', 'Sumber Energi Listrik', 'PLTP', 'Jumlah'),
(69, 'Energi', 'Sumber Energi Listrik', 'PLTP', 'Kapasitas'),
(70, 'Energi', 'Sumber Energi Listrik', 'PLTP', 'Cakupan Wilayah'),
(71, 'Energi', 'Jangkauan Pelayanan Energi Listrik', 'Jumlah Keluarga Yang Menggunakan Listrik (PLN)', 'Jumlah Keluarga Yang Menggunakan Listrik (PLN)'),
(72, 'Energi', 'Jangkauan Pelayanan Energi Listrik', 'Jumlah Keluarga Yang Menggunakan Listrik Non PLN', 'Jumlah Keluarga Yang Menggunakan Listrik Non PLN'),
(73, 'Energi', 'Jangkauan Pelayanan Energi Listrik', 'Jumlah Keluarga Yang Belum Menggunakan Listrik', 'Jumlah Keluarga Yang Belum Menggunakan Listrik'),
(74, 'Energi', 'Jangkauan Pelayanan Energi Listrik', 'Jumlah Rumah Tangga Yang Menggunakan Listrik (PLN)', 'Rumah Tangga dengan daya 450 watt'),
(75, 'Energi', 'Jangkauan Pelayanan Energi Listrik', 'Jumlah Rumah Tangga Yang Menggunakan Listrik (PLN)', 'Rumah Tangga dengan daya 900 watt'),
(76, 'Energi', 'Jangkauan Pelayanan Energi Listrik', 'Jumlah Rumah Tangga Yang Menggunakan Listrik (PLN)', 'Rumah Tangga dengan daya 1300 wat'),
(77, 'Energi', 'Jangkauan Pelayanan Energi Listrik', 'Jumlah Rumah Tangga Yang Menggunakan Listrik (PLN)', 'Rumah Tangga dengan daya 2200 wat'),
(78, 'Energi', 'Jangkauan Pelayanan Energi Listrik', 'Jumlah Rumah Tangga Yang Menggunakan Listrik (PLN)', 'Rumah Tangga dengan daya >2200 watt'),
(79, 'Energi', 'Total Jumlah Rumah Tangga Pengguna Listrik', 'Total Jumlah Rumah Tangga Pengguna Listrik', 'Total Jumlah Rumah Tangga Pengguna Listrik'),
(80, 'Energi', 'Jumlah Seluruh Rumah Tangga', 'Jumlah Seluruh Rumah Tangga', 'Jumlah Seluruh Rumah Tangga'),
(81, 'Energi', 'Daya Listrik Terpasang', 'Daya Listrik Terpasang', 'Daya Listrik Terpasang'),
(82, 'Energi', 'Jumlah Kebutuhan Listrik', 'Jumlah Kebutuhan Listrik', 'Jumlah Kebutuhan Listrik'),
(83, 'Energi', 'Sarana Pelayanan Bahan Bakar', 'SPBU', 'SPBU'),
(84, 'Energi', 'Sarana Pelayanan Bahan Bakar', 'Depo/Agen Minyak Tanah', 'Depo/Agen Minyak Tanah'),
(85, 'Energi', 'Sarana Pelayanan Bahan Bakar', 'UPPDN Pertamina', 'UPPDN Pertamina'),
(86, 'Energi', 'Sarana Pelayanan Bahan Bakar', 'Agen LPG', 'Agen LPG'),
(87, 'Energi', 'Konsumsi Bahan Bakar per Kapita per Hari', 'Bensin', 'Bensin'),
(88, 'Energi', 'Konsumsi Bahan Bakar per Kapita per Hari', 'Minyak Tanah', 'Minyak Tanah'),
(89, 'Energi', 'Konsumsi Bahan Bakar per Kapita per Hari', 'Solar', 'Solar'),
(90, 'Energi', 'Konsumsi Bahan Bakar per Kapita per Hari', 'BBG', 'BBG'),
(91, 'Energi', 'Konsumsi Bahan Bakar per Kapita per Hari', 'Elpiji', 'Elpiji'),
(92, 'Persentase Pertambangan tanpa izin', 'Luas Penambangan Liar yang ditertibkan', 'Luas Penambangan Liar yang ditertibkan', 'Luas Penambangan Liar yang ditertibkan'),
(93, 'Persentase Pertambangan tanpa izin', 'Luas area penambangan yang liar ', 'Luas area penambangan yang liar ', 'Luas area penambangan yang liar ');

-- --------------------------------------------------------

--
-- Table structure for table `input_geografis`
--

CREATE TABLE `input_geografis` (
  `id` int(11) NOT NULL,
  `header_satu` text DEFAULT NULL,
  `header_dua` text DEFAULT NULL,
  `input` text DEFAULT NULL
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
-- Table structure for table `input_indikator_data_strategis`
--

CREATE TABLE `input_indikator_data_strategis` (
  `id` int(11) NOT NULL,
  `header_satu` text DEFAULT NULL,
  `header_dua` text DEFAULT NULL,
  `input` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_indikator_data_strategis`
--

INSERT INTO `input_indikator_data_strategis` (`id`, `header_satu`, `header_dua`, `input`) VALUES
(1, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Pertanian, Kehutanan dan Perikanan'),
(2, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Pertambangan & Penggalian'),
(3, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Industri Pengolahan'),
(4, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Pengadaan Listrik dan Gas'),
(5, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Pengadaan Air, Pengelolaan Sampah, Limbah dan Daur Ulang'),
(6, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Konstruksi'),
(7, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Perdagangan Besar Dan Eceran, Reparasi Mobil Dan Sepeda Motor'),
(8, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Transportasi Dan Pergudangan'),
(9, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Penyediaan Akomodasi Dan Makan Minum'),
(10, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Informasi dan Komunikasi'),
(11, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Jasa Keuangan Dan Asuransi'),
(12, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Real Estate'),
(13, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Jasa Perusahaan'),
(14, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Administrasi Pemerintahan, Pertahanan Dan Jaminan Sosial Wajib'),
(15, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Pendidikan'),
(16, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Kesehatan Dan Kegiatan Sosial'),
(17, 'PDRB', 'PDRB Atas Harga Berlaku Menurut Lapangan Usaha', 'PDRB Jasa Lainnya'),
(18, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Pertanian, Kehutanan dan Perikanan'),
(19, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Pertambangan & Penggalian'),
(20, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Industri Pengolahan'),
(21, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Pengadaan Listrik dan Gas'),
(22, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Pengadaan Air, Pengelolaan Sampah, Limbah dan Daur Ulang'),
(23, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Konstruksi'),
(24, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Perdagangan Besar Dan Eceran, Reparasi Mobil Dan Sepeda Motor'),
(25, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Transportasi Dan Pergudangan'),
(26, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Penyediaan Akomodasi Dan Makan Minum'),
(27, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Informasi dan Komunikasi'),
(28, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Jasa Keuangan Dan Asuransi'),
(29, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Real Estate'),
(30, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Jasa Perusahaan'),
(31, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Administrasi Pemerintahan, Pertahanan Dan Jaminan Sosial Wajib'),
(32, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Pendidikan'),
(33, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Pendidikan'),
(34, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Kesehatan Dan Kegiatan Sosial'),
(35, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB Jasa Lainnya'),
(36, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'Produk Domestik Bruto'),
(37, 'PDRB', 'PDRB Atas Harga Konstan Menurut Lapangan Usaha', 'PDRB dari sektor pertanian dan Perkebunan'),
(38, 'Jumlah PDRB', 'Jumlah PDRB', 'Jumlah PDRB'),
(39, 'Kontribusi PDRB dari sektor kehutanan', 'Kontribusi PDRB dari sektor kehutanan', 'Kontribusi PDRB dari sektor kehutanan'),
(40, 'Kontribusi PDRB dari sektor pertambangan', 'Kontribusi PDRB dari sektor pertambangan', 'Kontribusi PDRB dari sektor pertambangan'),
(41, 'Kontribusi PDRB dari sektor pariwisata', 'Kontribusi PDRB dari sektor pariwisata', 'Kontribusi PDRB dari sektor pariwisata'),
(42, 'Kontribusi PDRB dari sektor kelautan dan perikanan', 'Kontribusi PDRB dari sektor kelautan dan perikanan', 'Kontribusi PDRB dari sektor kelautan dan perikanan'),
(43, 'Kontribusi PDRB dari sektor perdagangan', 'Kontribusi PDRB dari sektor perdagangan', 'Kontribusi PDRB dari sektor perdagangan'),
(44, 'Kontribusi PDRB dari sektor industri', 'Kontribusi PDRB dari sektor industri', 'Kontribusi PDRB dari sektor industri'),
(45, 'Kontribusi PDRB dari sektor jasa industri rumah tangga', 'Kontribusi PDRB dari sektor jasa industri rumah tangga', 'Kontribusi PDRB dari sektor jasa industri rumah tangga'),
(46, 'Kontribusi PDRB sektor industri', 'Kontribusi PDRB sektor industri', 'Kontribusi PDRB sektor industri'),
(47, 'Kontribusi PDRB dari sektor pertanian/perkebunan', 'Kontribusi PDRB dari sektor pertanian/perkebunan', 'Kontribusi PDRB dari sektor pertanian/perkebunan'),
(48, 'Kontribusi PDRB dari sektor perkebunan', 'Kontribusi PDRB dari sektor perkebunan', 'Kontribusi PDRB dari sektor perkebunan'),
(49, 'Laju Pertumbuhan Ekonomi Daerah (Kabupaten,Kota Dan Provinsi)', 'Laju Pertumbuhan Ekonomi Daerah (Kabupaten,Kota Dan Provinsi)', 'Laju Pertumbuhan Ekonomi Daerah (Kabupaten,Kota Dan Provinsi)'),
(50, 'Laju Inflasi', 'Laju Inflasi', 'Laju Inflasi'),
(51, 'Indeks Gini', 'Indeks Gini', 'Indeks Gini'),
(52, 'IPM', 'IPM', 'IPM'),
(53, 'Jumlah Penduduk ', 'Jumlah Penduduk ', 'Jumlah Penduduk '),
(54, 'Pertumbuhan Penduduk', 'Pertumbuhan Penduduk', 'Pertumbuhan Penduduk'),
(55, 'Kepadatan Penduduk', 'Kepadatan Penduduk', 'Kepadatan Penduduk'),
(56, 'Sex ratio', 'Sex ratio', 'Sex ratio'),
(57, 'Dependency Ratio', 'Dependency Ratio', 'Dependency Ratio'),
(58, 'Penduduk Usia Kerja', 'Penduduk Usia Kerja', 'Penduduk Usia Kerja'),
(59, 'Angkatan Kerja', 'Angkatan Kerja', 'Angkatan Kerja'),
(60, 'Pengangguran', 'Pengangguran', 'Pengangguran'),
(61, 'Tingkat Partisipasi Angk. Kerja', 'Tingkat Partisipasi Angk. Kerja', 'Tingkat Partisipasi Angk. Kerja'),
(62, 'Tingkat  Kesempatan Kerja', 'Tingkat  Kesempatan Kerja', 'Tingkat  Kesempatan Kerja'),
(63, 'Tingkat Pengangguran Terbuka', 'Tingkat Pengangguran Terbuka', 'Tingkat Pengangguran Terbuka'),
(64, 'Garis Kemiskinan', 'Garis Kemiskinan', 'Garis Kemiskinan'),
(65, 'Penduduk Miskin', 'Penduduk Miskin', 'Penduduk Miskin'),
(66, 'Tingkat Kemiskinan', 'Tingkat Kemiskinan', 'Tingkat Kemiskinan'),
(67, 'Indeks Kedalaman Kemiskinan (P1)', 'Indeks Kedalaman Kemiskinan (P1)', 'Indeks Kedalaman Kemiskinan (P1)'),
(68, 'Indeks Keparahan Kemiskinan (P2)', 'Indeks Keparahan Kemiskinan (P2)', 'Indeks Keparahan Kemiskinan (P2)'),
(69, 'Indeks Pembangunan Manusia', 'Indeks Pembangunan Manusia', 'Indeks Pembangunan Manusia'),
(70, 'Angka Harapan Hidup', 'Angka Harapan Hidup', 'Angka Harapan Hidup'),
(71, 'Rata-rata Harapan Lama Sekolah', 'Rata-rata Harapan Lama Sekolah', 'Rata-rata Harapan Lama Sekolah'),
(72, 'Rata-Rata Lama Sekolah', 'Rata-Rata Lama Sekolah', 'Rata-Rata Lama Sekolah'),
(73, 'Pengeluaran per Kapita di Sesuaikan', 'Pengeluaran per Kapita di Sesuaikan', 'Pengeluaran per Kapita di Sesuaikan'),
(74, 'PDRB ADH Berlaku', 'PDRB ADH Berlaku', 'PDRB ADH Berlaku'),
(75, 'PDRB ADH Konstan', 'PDRB ADH Konstan', 'PDRB ADH Konstan'),
(76, 'PDRB per Kapita ADHB', 'PDRB per Kapita ADHB', 'PDRB per Kapita ADHB'),
(77, 'PDRB per Kapita ADHK', 'PDRB per Kapita ADHK', 'PDRB per Kapita ADHK'),
(78, 'Pertumbuhan Ekonomi', 'Pertumbuhan Ekonomi', 'Pertumbuhan Ekonomi'),
(79, 'Indeks Implisit PDRB', 'Indeks Implisit PDRB', 'Indeks Implisit PDRB'),
(80, 'Inflasi (kota Baubau)', 'Inflasi (kota Baubau)', 'Inflasi (kota Baubau)'),
(81, 'NTP (Desember di Provinsi Sultra)', 'NTP (Desember di Provinsi Sultra)', 'NTP (Desember di Provinsi Sultra)'),
(82, 'Pengeluaran Konsumsi sebulan Perkapita (makanan)', 'Pengeluaran Konsumsi sebulan Perkapita (makanan)', 'Pengeluaran Konsumsi sebulan Perkapita (makanan)'),
(83, 'Pengeluaran Konsumsi sebulan Perkapita (non-makanan)', 'Pengeluaran Konsumsi sebulan Perkapita (non-makanan)', 'Pengeluaran Konsumsi sebulan Perkapita (non-makanan)'),
(84, 'Total Pengeluaran Rumah Tangga', 'Total Pengeluaran Rumah Tangga', 'Total Pengeluaran Rumah Tangga'),
(85, 'Jumlah Rumah Tangga', 'Jumlah Rumah Tangga', 'Jumlah Rumah Tangga'),
(86, 'Jumlah Pinjaman di Bank Umum', 'Jumlah Pinjaman di Bank Umum', 'Jumlah Pinjaman di Bank Umum'),
(87, 'Dana Pihak Ketiga di Bank Umum', 'Dana Pihak Ketiga di Bank Umum', 'Dana Pihak Ketiga di Bank Umum');

-- --------------------------------------------------------

--
-- Table structure for table `input_kehutanan`
--

CREATE TABLE `input_kehutanan` (
  `id` int(11) NOT NULL,
  `header_satu` text DEFAULT NULL,
  `header_dua` text DEFAULT NULL,
  `input` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_kehutanan`
--

INSERT INTO `input_kehutanan` (`id`, `header_satu`, `header_dua`, `input`) VALUES
(1, 'Kehutanan', 'Hasil Hutan Non HPH', 'Kayu Bulat'),
(2, 'Kehutanan', 'Hasil Hutan Non HPH', 'Kayu Gergajian'),
(3, 'Kehutanan', 'Hasil Hutan Non HPH', 'Kayu Olahan'),
(4, 'Kehutanan', 'Hasil Hutan Ikutan', 'Rotan'),
(5, 'Kehutanan', 'Hasil Hutan Ikutan', 'Gaharu'),
(6, 'Kehutanan', 'Hasil Hutan Ikutan', 'Getah Jeluntung'),
(7, 'Kehutanan', 'Hasil Hutan Ikutan', 'Gando Rukem'),
(8, 'Kehutanan', 'Hasil Hutan Ikutan', 'Kemiri'),
(9, 'Kehutanan', 'Hasil Hutan Ikutan', 'Kenari'),
(10, 'Kehutanan', 'Hasil Hutan Ikutan', 'Kemenyan'),
(11, 'Kehutanan', 'Hasil Hutan Ikutan', 'Asam'),
(12, 'Kehutanan', 'Hasil Hutan Ikutan', 'Minyak Lawang'),
(13, 'Kehutanan', 'Hasil Hutan Ikutan', 'Kulit Kayu Medang Keladi'),
(14, 'Kehutanan', 'Hasil Hutan Ikutan', 'Bambu'),
(15, 'Kehutanan', 'Hasil Hutan Ikutan', 'Sarang Burung Walet'),
(16, 'Kehutanan', 'Hasil Hutan Ikutan', 'Madu'),
(17, 'Kehutanan', 'Hasil Hutan Ikutan', 'Sagu'),
(18, 'Kehutanan', 'Hasil Hutan Ikutan', 'Nipah/Nira Gula'),
(19, 'Kehutanan', 'Hasil Hutan Ikutan', 'Ijuk'),
(20, 'Kehutanan', 'Hasil Hutan Ikutan', 'Kemedangan'),
(21, 'Kehutanan', 'Hasil Hutan Ikutan', 'Biga'),
(22, 'Kehutanan', 'Hasil Hutan Ikutan', 'Kayu Manis'),
(23, 'Kehutanan', 'Hasil Hutan Ikutan', 'Kayu Putih'),
(24, 'Kehutanan', 'Luas Lahan Reboisasi', 'Target'),
(25, 'Kehutanan', 'Luas Lahan Reboisasi', 'Realisasi'),
(26, 'Kehutanan', 'Luas Lahan Penghijauan', 'Pembuatan Baru'),
(27, 'Kehutanan', 'Luas Lahan Penghijauan', 'Pemeliharaan'),
(28, 'Kehutanan', 'Industri Pengolahan Hasil Hutan', 'Industri Pengolahan Hasil Hutan'),
(29, 'Kehutanan', 'Luas Lahan Yang Dapat Dikembangkan Untuk Hutan Produksi', 'Terbatas'),
(30, 'Kehutanan', 'Luas Lahan Yang Dapat Dikembangkan Untuk Hutan Produksi', 'Tetap'),
(31, 'Kehutanan', 'Luas Lahan Yang Dapat Dikembangkan Untuk Hutan Produksi', 'Dapat Dikonversi'),
(32, 'Kehutanan', 'Luas Land Use (Penggunaan Lahan) Lainnya Di Luar Hutan Negara', 'Luas Land Use (Penggunaan Lahan) Lainnya Di Luar Hutan Negara'),
(33, 'Kelompok Sumber Daya Sosial', 'Perkumpulan Petani Pemakai Air', 'Perkumpulan Petani Pemakai Air'),
(34, 'Kelompok Sumber Daya Sosial', 'Kelompok Tani', 'Kelompok Tani'),
(35, 'Kelompok Sumber Daya Sosial', 'Kontak Tani Nelayan Andalan', 'Kontak Tani Nelayan Andalan'),
(36, 'Kelompok Sumber Daya Sosial', 'Karang Taruna', 'Karang Taruna'),
(37, 'Kelompok Sumber Daya Sosial', 'Lembaga Penyuluh Pertanian', 'Lembaga Penyuluh Pertanian'),
(38, 'Kelompok Sumber Daya Sosial', 'Kelompok Usaha Ternak', 'Kelompok Usaha Ternak'),
(39, 'Kelompok Sumber Daya Sosial', 'Kelompok Nelayan', 'Kelompok Nelayan'),
(40, 'Kelompok Sumber Daya Sosial', 'Jumlah kelompok petani yang mendapat bantuan Pemda', 'Jumlah kelompok petani yang mendapat bantuan Pemda'),
(41, 'Kelompok Sumber Daya Sosial', 'Jumlah kelompok nelayan yang mendapat bantuan Pemda', 'Jumlah kelompok nelayan yang mendapat bantuan Pemda'),
(42, 'Jumlah Produksi Padi atau Bahan Pangan Utama Lokal Hasil Kelompok Petani', 'Jumlah Produksi Padi atau Bahan Pangan Utama Lokal Hasil Kelompok Petani', 'Jumlah Produksi Padi atau Bahan Pangan Utama Lokal Hasil Kelompok Petani'),
(43, 'Jumlah Produksi Ikan Hasil Kelompok Nelayan', 'Jumlah Produksi Ikan Hasil Kelompok Nelayan', 'Jumlah Produksi Ikan Hasil Kelompok Nelayan'),
(44, 'Rata-rata Jumlah Ketersediaan Pangan Utama per Tahun', 'Rata-rata Jumlah Ketersediaan Pangan Utama per Tahun', 'Rata-rata Jumlah Ketersediaan Pangan Utama per Tahun'),
(45, 'Luas Areal Tanaman Padi atau Bahan Pangan Utama Di Daerah', 'Luas Areal Tanaman Padi atau Bahan Pangan Utama Di Daerah', 'Luas Areal Tanaman Padi atau Bahan Pangan Utama Di Daerah'),
(46, 'Indikator kinerja', 'Luas hutan dan lahan kritis yang direhabilitasi', 'Luas hutan dan lahan kritis yang direhabilitasi'),
(47, 'Indikator kinerja', 'Luas total hutan dan lahan kritis', 'Luas total hutan dan lahan kritis'),
(48, 'Indikator kinerja', 'Luas Kerusakan Kawasan Hutan', 'Luas Kerusakan Kawasan Hutan'),
(49, 'Indikator kinerja', 'Luas Kawasan Hutan', 'Luas Kawasan Hutan'),
(50, 'Indikator kinerja', 'Luas kawasan lindung', 'Luas kawasan lindung'),
(51, 'Indikator kinerja', 'Total luas Kawasan Hutan', 'Total luas Kawasan Hutan');

-- --------------------------------------------------------

--
-- Table structure for table `input_pajak_retribusi_daerah`
--

CREATE TABLE `input_pajak_retribusi_daerah` (
  `id` int(11) NOT NULL,
  `header_satu` text DEFAULT NULL,
  `input` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_pajak_retribusi_daerah`
--

INSERT INTO `input_pajak_retribusi_daerah` (`id`, `header_satu`, `input`) VALUES
(1, 'Retribusi Jasa Umum', 'Retribusi Pelayanan Kesehatan'),
(2, 'Retribusi Jasa Umum', 'Retribusi Pelayanan Pemakaman dan Pengabuan mayat'),
(3, 'Retribusi Jasa Umum', 'Retribusi Pelayanan Parkir di Tepi Jalan Umum'),
(4, 'Retribusi Jasa Umum', 'Retribusi Pelayanan Pasar '),
(5, 'Retribusi Jasa Umum', 'Retribusi Pengujian Kendaraan Bermotor'),
(6, 'Retribusi Jasa Umum', 'Retribusi Penyediaan dan/penyedotan kakus'),
(7, 'Retribusi Jasa Umum', 'Retribusi Pengelola limbah cair'),
(8, 'Retribusi Jasa Umum', 'Retribusi Pelayanan Tera/Tera Ulang'),
(9, 'Retribusi Jasa Umum', 'Retribusi Pelayanan Pendidikan'),
(10, 'Retribusi Jasa Umum', 'Retribusi Pengendalian Menara Telekomunikasi'),
(11, 'Retribusi Jasa Usaha', 'Retribusi Pemakaian Kekayaan Daerah'),
(12, 'Retribusi Jasa Usaha', 'Retribusi Pasar Grosir '),
(13, 'Retribusi Jasa Usaha', 'Retribusi Tempat Pelelangan'),
(14, 'Retribusi Jasa Usaha', 'Retribusi Terminal'),
(15, 'Retribusi Jasa Usaha', 'Retribusi Tempat Khusus Parkir'),
(16, 'Retribusi Jasa Usaha', 'Retribusi Tempat Penginapan/Pesanggrahan/Villa'),
(17, 'Retribusi Jasa Usaha', 'Retribusi Rumah Potong Hewan '),
(18, 'Retribusi Jasa Usaha', 'Retribusi Pelayanan Kepelabuhanan'),
(19, 'Retribusi Jasa Usaha', 'Retribusi Tempat Rekreasi dan Olahraga'),
(20, 'Retribusi Jasa Usaha', 'Retribusi Penyeberangan di Air'),
(21, 'Retribusi Jasa Usaha', 'Retribusi Penjualan Produksi Usaha Daerah'),
(22, 'Retribusi Perizinan Tertentu', 'Retribusi Izin Mendirikan Bangunan (IMB)'),
(23, 'Retribusi Perizinan Tertentu', 'Retribusi Izin Tempat Penjualan Minuman Beralkohol'),
(24, 'Retribusi Perizinan Tertentu', 'Retribusi Izin Gangguan (HO) Badan '),
(25, 'Retribusi Perizinan Tertentu', 'Retribusi Izin Gangguan (HO) Pribadi'),
(26, 'Retribusi Perizinan Tertentu', 'Retribusi Izin Trayek'),
(27, 'Retribusi Perizinan Tertentu', 'Retribusi Izin Usaha Perikanan '),
(28, 'Jumlah Retribusi Yang Dikeluarkan', 'Jumlah Retribusi Yang Dikeluarkan'),
(29, 'Jumlah Retribusi Yang  Mendukung Iklim Investasi', 'Jumlah Retribusi Yang  Mendukung Iklim Investasi'),
(30, 'Pajak', 'Pajak Hotel'),
(31, 'Pajak', 'Pajak Restoran'),
(32, 'Pajak', 'Pajak Hiburan'),
(33, 'Pajak', 'Pajak Reklame'),
(34, 'Pajak', 'Pajak Penerangan Jalan'),
(35, 'Pajak', 'Pajak Mineral Bukan Logam dan Batuan'),
(36, 'Pajak', 'Pajak Parkir'),
(37, 'Pajak', 'Pajak Air Tanah'),
(38, 'Pajak', 'Pajak Sarang Burung Walet'),
(39, 'Pajak', 'Pajak Bumi dan Bangunan Perdesaan dan Perkotaan (PBB-P2)'),
(40, 'Pajak', 'Bea Perolehan Hak Atas Tanah dan Bangunan (BPHTP)'),
(41, 'Jumlah Pajak Yang Dikeluarkan', 'Jumlah Pajak Yang Dikeluarkan'),
(42, 'Jumlah Insetif Pajak Yang Mendukung Iklim Investasi', 'Jumlah Insetif Pajak Yang Mendukung Iklim Investasi');

-- --------------------------------------------------------

--
-- Table structure for table `input_pariwisata`
--

CREATE TABLE `input_pariwisata` (
  `id` int(11) NOT NULL,
  `header_satu` text DEFAULT NULL,
  `header_dua` text DEFAULT NULL,
  `input` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_pariwisata`
--

INSERT INTO `input_pariwisata` (`id`, `header_satu`, `header_dua`, `input`) VALUES
(1, 'Jumlah Obyek Wisata', 'Objek Wisata Budaya', 'Objek Wisata Budaya'),
(2, 'Jumlah Obyek Wisata', 'Objek Wisata Bahari', 'Objek Wisata Bahari'),
(3, 'Jumlah Obyek Wisata', 'Objek Wisata Cagar Alam', 'Objek Wisata Cagar Alam'),
(4, 'Jumlah Obyek Wisata', 'Objek Wisata Pertanian', 'Objek Wisata Pertanian'),
(5, 'Jumlah Obyek Wisata', 'Objek Wisata Buru', 'Objek Wisata Buru'),
(6, 'Jumlah Obyek Wisata', 'Objek Wisata Alam', 'Objek Wisata Alam'),
(7, 'Jumlah Obyek Wisata', 'Objek Wisata Sejarah', 'Objek Wisata Sejarah'),
(8, 'Jumlah Obyek Wisata', 'Objek Wisata Religi', 'Objek Wisata Religi'),
(9, 'Jumlah Obyek Wisata', 'Objek Wisata Pendidikan', 'Objek Wisata Pendidikan'),
(10, 'Jumlah Obyek Wisata', 'Objek Wisata Kuliner', 'Objek Wisata Kuliner'),
(11, 'Jumlah Obyek Wisata', 'Objek Wisata Belanja', 'Objek Wisata Belanja'),
(12, 'Jumlah Obyek Wisata', 'Objek Wisata Buatan', 'Objek Wisata Buatan'),
(13, 'Jumlah Kunjungan Wisatawan', 'Wisatawan Domestik', 'Wisatawan Domestik'),
(14, 'Jumlah Kunjungan Wisatawan', 'Wisatawan Mancanegara', 'Wisatawan Mancanegara'),
(15, 'Kunjungan Wisatawan Per Objek Wisata', 'Objek Wisata Budaya Domestik', 'Objek Wisata Budaya Domestik'),
(16, 'Kunjungan Wisatawan Per Objek Wisata', 'Objek Wisata Budaya Mancanegara', 'Objek Wisata Budaya Mancanegara'),
(17, 'Objek Wisata Bahari', 'Objek Wisata Bahari Domestik', 'Objek Wisata Bahari Domestik'),
(18, 'Objek Wisata Cagar Alam', 'Objek Wisata Cagar Alam Mancanegara', 'Objek Wisata Cagar Alam Mancanegara'),
(19, 'Objek Wisata Cagar Alam', 'Objek Wisata Cagar Alam Domestik', 'Objek Wisata Cagar Alam Domestik'),
(20, 'Objek Wisata Pertanian', 'Objek Wisata Pertanian Mancanegara', 'Objek Wisata Pertanian Mancanegara'),
(21, 'Objek Wisata Pertanian', 'Objek Wisata Pertanian Domestik', 'Objek Wisata Pertanian Domestik'),
(22, 'Objek Wisata Buru', 'Objek Wisata Buru Mancanegara', 'Objek Wisata Buru Mancanegara'),
(23, 'Objek Wisata Buru', 'Objek Wisata Buru Domestik', 'Objek Wisata Buru Domestik'),
(24, 'Objek Wisata Alam', 'Objek Wisata Alam Domestik', 'Objek Wisata Alam Domestik'),
(25, 'Objek Wisata Alam', 'Objek Wisata Alam Mancanegara', 'Objek Wisata Alam Mancanegara'),
(26, 'Objek Wisata Sejarah', 'Objek Wisata Sejarah Domestik', 'Objek Wisata Sejarah Domestik'),
(27, 'Objek Wisata Sejarah', 'Objek Wisata Sejarah Mancanegara', 'Objek Wisata Sejarah Mancanegara'),
(28, 'Objek Wisata Religi', 'Objek Wisata Religi Domestik', 'Objek Wisata Religi Domestik'),
(29, 'Objek Wisata Religi', 'Objek Wisata Religi Mancanegara', 'Objek Wisata Religi Mancanegara'),
(30, 'Objek Wisata Pendidikan', 'Objek Wisata Pendidikan Domestik', 'Objek Wisata Pendidikan Domestik'),
(31, 'Objek Wisata Pendidikan', 'Objek Wisata Pendidikan Mancanegara', 'Objek Wisata Pendidikan Mancanegara'),
(32, 'Objek Wisata Kuliner', 'Objek Wisata Kuliner Domestik', 'Objek Wisata Kuliner Domestik'),
(33, 'Objek Wisata Kuliner', 'Objek Wisata Kuliner Mancanegara', 'Objek Wisata Kuliner Mancanegara'),
(34, 'Objek Wisata Belanja', 'Objek Wisata Belanja Domestik', 'Objek Wisata Belanja Domestik'),
(35, 'Objek Wisata Belanja', 'Objek Wisata Belanja Mancanegara', 'Objek Wisata Belanja Mancanegara'),
(36, 'Objek Wisata Buatan', 'Objek Wisata Buatan Domestik', 'Objek Wisata Buatan Domestik'),
(37, 'Objek Wisata Buatan', 'Objek Wisata Buatan Mancanegara', 'Objek Wisata Buatan Mancanegara'),
(38, 'Lama Kunjungan Wisatawan', 'Lama Kunjungan Wisatawan Domestik', 'Lama Kunjungan Wisatawan Domestik'),
(39, 'Lama Kunjungan Wisatawan', 'Lama Kunjungan Wisatawan Mancanegara', 'Lama Kunjungan Wisatawan Mancanegara'),
(40, 'Jenis Penginapan', 'Jumlah Hotel Bintang Lima', 'Jumlah Kamar'),
(41, 'Jenis Penginapan', 'Jumlah Hotel Bintang Lima', 'Jumlah Tempat Tidur'),
(42, 'Jenis Penginapan', 'Jumlah Hotel Bintang Empat', 'Jumlah Kamar'),
(43, 'Jenis Penginapan', 'Jumlah Hotel Bintang Empat', 'Jumlah Tempat Tidur'),
(44, 'Jenis Penginapan', 'Jumlah Hotel Bintang Tiga', 'Jumlah Kamar'),
(45, 'Jenis Penginapan', 'Jumlah Hotel Bintang Tiga', 'Jumlah Tempat Tidur'),
(46, 'Jenis Penginapan', 'Jumlah Hotel Bintang Dua', 'Jumlah Kamar'),
(47, 'Jenis Penginapan', 'Jumlah Hotel Bintang Dua', 'Jumlah Tempat Tidur'),
(48, 'Jenis Penginapan', 'Jumlah Hotel Bintang Satu', 'Jumlah Kamar'),
(49, 'Jenis Penginapan', 'Jumlah Hotel Bintang Satu', 'Jumlah Tempat Tidur'),
(50, 'Jenis Penginapan', 'Jumlah Hotel Melati', 'Jumlah Kamar'),
(51, 'Jenis Penginapan', 'Jumlah Hotel Melati', 'Jumlah Tempat Tidur'),
(52, 'Penginapan Lainnya', 'Jumlah Motel', 'Jumlah Motel'),
(53, 'Penginapan Lainnya', 'Jumlah Motel', 'Jumlah Kamar'),
(54, 'Penginapan Lainnya', 'Jumlah Motel', 'Jumlah Tempat Tidur'),
(55, 'Penginapan Lainnya', 'Jumlah Wisma Tamu', 'Jumlah Wisma Tamu'),
(56, 'Penginapan Lainnya', 'Jumlah Wisma Tamu', 'Jumlah Kamar'),
(57, 'Penginapan Lainnya', 'Jumlah Wisma Tamu', 'Jumlah Tempat Tidur'),
(58, 'Penginapan Lainnya', 'Jumlah Kondotel', 'Jumlah Kondotel'),
(59, 'Penginapan Lainnya', 'Jumlah Kondotel', 'Jumlah Kamar'),
(60, 'Penginapan Lainnya', 'Jumlah Kondotel', 'Jumlah Tempat Tidur'),
(61, 'Penginapan Lainnya', 'Jumlah Sanitarium/Sanatorium', 'Jumlah Sanitarium/Sanatorium'),
(62, 'Penginapan Lainnya', 'Jumlah Sanitarium/Sanatorium', 'Jumlah Kamar'),
(63, 'Penginapan Lainnya', 'Jumlah Sanitarium/Sanatorium', 'Jumlah Tempat Tidur'),
(64, 'Penginapan Lainnya', 'Jumlah Bungalow', 'Jumlah Bungalow'),
(65, 'Penginapan Lainnya', 'Jumlah Bungalow', 'Jumlah Kamar'),
(66, 'Penginapan Lainnya', 'Jumlah Bungalow', 'Jumlah Tempat Tidur'),
(67, 'Penginapan Lainnya', 'Jumlah Mess', 'Jumlah Mess'),
(68, 'Penginapan Lainnya', 'Jumlah Mess', 'Jumlah Kamar'),
(69, 'Penginapan Lainnya', 'Jumlah Mess', 'Jumlah Tempat Tidur'),
(70, 'Penginapan Lainnya', 'Jumlah Home Stay', 'Jumlah Home Stay'),
(71, 'Penginapan Lainnya', 'Jumlah Home Stay', 'Jumlah Kamar'),
(72, 'Penginapan Lainnya', 'Jumlah Home Stay', 'Jumlah Tempat Tidur'),
(73, 'Penginapan Lainnya', 'Jumlah Hostel/Asrama', 'Jumlah Hostel/Asrama'),
(74, 'Penginapan Lainnya', 'Jumlah Hostel/Asrama', 'Jumlah Kamar'),
(75, 'Penginapan Lainnya', 'Jumlah Hostel/Asrama', 'Jumlah Tempat Tidur'),
(76, 'Penginapan Lainnya', 'Jumlah Guest House', 'Jumlah Guest House'),
(77, 'Penginapan Lainnya', 'Jumlah Guest House', 'Jumlah Kamar'),
(78, 'Penginapan Lainnya', 'Jumlah Guest House', 'Jumlah Tempat Tidur'),
(79, 'Biro Wisata Dan Agen Perjalanan Wisata', 'Jumlah Biro Wisata', 'Jumlah Biro Wisata'),
(80, 'Biro Wisata Dan Agen Perjalanan Wisata', 'Jumlah Agen Perjalanan Wisata', 'Jumlah Agen Perjalanan Wisata'),
(81, 'Jumlah Pemandu Wisata', 'Bersertifikat', 'Bersertifikat'),
(82, 'Jumlah Pemandu Wisata', 'Tidak Bersertifikat', 'Tidak Bersertifikat'),
(83, 'Jenis Usaha Jasa Makanan/Minuman', 'Jumlah Restoran', 'Jumlah Restoran'),
(84, 'Jenis Usaha Jasa Makanan/Minuman', 'Jumlah Cafetaria/Cafe', 'Jumlah Cafetaria/Cafe'),
(85, 'Jenis Usaha Jasa Makanan/Minuman', 'Jumlah Kantin', 'Jumlah Kantin'),
(86, 'Jenis Usaha Jasa Makanan/Minuman', 'Jumlah Coffee Shop', 'Jumlah Coffee Shop'),
(87, 'Jenis Usaha Jasa Makanan/Minuman', 'Jumlah Pub/Bar', 'Jumlah Pub/Bar'),
(88, 'Jenis Usaha Jasa Makanan/Minuman', 'Jumlah Warung/Kedai Makan', 'Jumlah Warung/Kedai Makan'),
(89, 'Kategori Restoran Berdasarkan Jenis Makanan Yang Disediakan', 'Makanan Khas Wakatobi', 'Makanan Khas Wakatobi'),
(90, 'Kategori Restoran Berdasarkan Jenis Makanan Yang Disediakan', 'American Food', 'American Food'),
(91, 'Kategori Restoran Berdasarkan Jenis Makanan Yang Disediakan', 'Chinnese Food', 'Chinnese Food'),
(92, 'Kategori Restoran Berdasarkan Jenis Makanan Yang Disediakan', 'European Food', 'European Food'),
(93, 'Kategori Restoran Berdasarkan Jenis Makanan Yang Disediakan', 'Indian Food', 'Indian Food'),
(94, 'Kategori Restoran Berdasarkan Jenis Makanan Yang Disediakan', 'Indonesian Food', 'Indonesian Food'),
(95, 'Kategori Restoran Berdasarkan Jenis Makanan Yang Disediakan', 'International Food', 'International Food'),
(96, 'Kategori Restoran Berdasarkan Jenis Makanan Yang Disediakan', 'Italian Food', 'Italian Food'),
(97, 'Kategori Restoran Berdasarkan Jenis Makanan Yang Disediakan', 'Japanese Food', 'Japanese Food'),
(98, 'Kategori Restoran Berdasarkan Jenis Makanan Yang Disediakan', 'Middle Eastern Food', 'Middle Eastern Food'),
(99, 'Kategori Restoran Berdasarkan Jenis Makanan Yang Disediakan', 'Sea Food', 'Sea Food'),
(100, 'Kategori Restoran Berdasarkan Jenis Makanan Yang Disediakan', 'Thai Food', 'Thai Food'),
(101, 'Kategori Restoran Berdasarkan Jenis Makanan Yang Disediakan', 'Vegetarian Food', 'Vegetarian Food'),
(102, 'Pusat Penjualan Cenderamata', 'Penjualan Cenderamata', 'Toko Cenderamata'),
(103, 'Pusat Penjualan Cenderamata', 'Penjualan Cenderamata', 'Pedagang Cenderamata Non Toko'),
(104, 'Penerimaan Daerah Dari Pariwisata', 'Penerimaan Dari Pajak', 'Penerimaan Dari Pajak'),
(105, 'Penerimaan Daerah Dari Pariwisata', 'Penerimaan Dari Restribusi', 'Penerimaan Dari Restribusi'),
(106, 'Jumlah Capaian Kinerja Kunjungan Wisata se- Kabupaten dan Kota', 'Jumlah Capaian Kinerja Kunjungan Wisata se- Kabupaten dan Kota', 'Jumlah Capaian Kinerja Kunjungan Wisata se- Kabupaten dan Kota'),
(107, 'Jumlah Kunjungan Wisata yang direncanakan se-Kabupaten dan Kota', 'Jumlah Kunjungan Wisata yang direncanakan se-Kabupaten dan Kota', 'Jumlah Kunjungan Wisata yang direncanakan se-Kabupaten dan Kota'),
(108, 'Rata - Rata Kunjungan Wisata Dalam Satu Tahun', 'Rata - Rata Kunjungan Wisata Dalam Satu Tahun', 'Rata - Rata Kunjungan Wisata Dalam Satu Tahun'),
(109, 'PAD Sektor Pariwisata', 'PAD Sektor Pariwisata', 'PAD Sektor Pariwisata'),
(110, 'Total PAD ', 'Total PAD ', 'Total PAD ');

-- --------------------------------------------------------

--
-- Table structure for table `input_perindustrian`
--

CREATE TABLE `input_perindustrian` (
  `id` int(11) NOT NULL,
  `header_satu` text DEFAULT NULL,
  `header_dua` text DEFAULT NULL,
  `header_tiga` text DEFAULT NULL,
  `input` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `input_perindustrian`
--

INSERT INTO `input_perindustrian` (`id`, `header_satu`, `header_dua`, `header_tiga`, `input`) VALUES
(1, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Permanen#Wangi-wangi'),
(2, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Permanen#Wangi-wangi Selatan'),
(3, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Permanen#Kaledupa'),
(4, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Permanen#Kaledupa selatan'),
(5, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Permanen#Tomia'),
(6, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Permanen#Tomia Timur'),
(7, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Permanen#Binongko'),
(8, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Permanen# Togo Binongko'),
(9, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Semi Permanen#Wangi-wangi'),
(10, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Semi Permanen#Wangi-wangi Selatan'),
(11, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Semi Permanen#Kaledupa'),
(12, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Semi Permanen#Kaledupa selatan'),
(13, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Semi Permanen#Tomia'),
(14, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Semi Permanen#Tomia Timur'),
(15, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Semi Permanen#Binongko'),
(16, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Bangunan Semi Permanen# Togo Binongko'),
(17, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Tanpa Bangunan/Tenda#Wangi-wangi'),
(18, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Tanpa Bangunan/Tenda#Wangi-wangi Selatan'),
(19, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Tanpa Bangunan/Tenda#Kaledupa'),
(20, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Tanpa Bangunan/Tenda#Kaledupa selatan'),
(21, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Tanpa Bangunan/Tenda#Tomia'),
(22, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Tanpa Bangunan/Tenda#Tomia Timur'),
(23, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Tanpa Bangunan/Tenda#Binongko'),
(24, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Jumlah Dikelola Pemerintah', 'Jumlah Tanpa Bangunan/Tenda# Togo Binongko'),
(25, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Permanen#Wangi-wangi'),
(26, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Permanen#Wangi-wangi Selatan'),
(27, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Permanen#Kaledupa'),
(28, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Permanen#Kaledupa selatan'),
(29, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Permanen#Tomia'),
(30, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Permanen#Tomia Timur'),
(31, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Permanen#Binongko'),
(32, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Permanen# Togo Binongko'),
(33, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Semi Permanen#Wangi-wangi'),
(34, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Semi Permanen#Wangi-wangi Selatan'),
(35, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Semi Permanen#Kaledupa'),
(36, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Semi Permanen#Kaledupa selatan'),
(37, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Semi Permanen#Tomia'),
(38, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Semi Permanen#Tomia Timur'),
(39, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Semi Permanen#Binongko'),
(40, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Bangunan Semi Permanen# Togo Binongko'),
(41, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Tanpa Bangunan/Tenda#Wangi-wangi'),
(42, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Tanpa Bangunan/Tenda#Wangi-wangi Selatan'),
(43, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Tanpa Bangunan/Tenda#Kaledupa'),
(44, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Tanpa Bangunan/Tenda#Kaledupa selatan'),
(45, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Tanpa Bangunan/Tenda#Tomia'),
(46, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Tanpa Bangunan/Tenda#Tomia Timur'),
(47, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Tanpa Bangunan/Tenda#Binongko'),
(48, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Swasta', 'Jumlah Tanpa Bangunan/Tenda# Togo Binongko'),
(49, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Permanen#Wangi-wangi'),
(50, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Permanen#Wangi-wangi Selatan'),
(51, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Permanen#Kaledupa'),
(52, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Permanen#Kaledupa selatan'),
(53, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Permanen#Tomia'),
(54, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Permanen#Tomia Timur'),
(55, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Permanen#Binongko'),
(56, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Permanen# Togo Binongko'),
(57, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Semi Permanen#Wangi-wangi'),
(58, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Semi Permanen#Wangi-wangi Selatan'),
(59, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Semi Permanen#Kaledupa'),
(60, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Semi Permanen#Kaledupa selatan'),
(61, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Semi Permanen#Tomia'),
(62, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Semi Permanen#Tomia Timur'),
(63, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Semi Permanen#Binongko'),
(64, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Bangunan Semi Permanen# Togo Binongko'),
(65, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Tanpa Bangunan/Tenda#Wangi-wangi'),
(66, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Tanpa Bangunan/Tenda#Wangi-wangi Selatan'),
(67, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Tanpa Bangunan/Tenda#Kaledupa'),
(68, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Tanpa Bangunan/Tenda#Kaledupa selatan'),
(69, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Tanpa Bangunan/Tenda#Tomia'),
(70, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Tanpa Bangunan/Tenda#Tomia Timur'),
(71, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Tanpa Bangunan/Tenda#Binongko'),
(72, 'Sarana Perdagangan', ' Jumlah Pasar Tradisional', 'Dikelola Masyarakat', 'Jumlah Tanpa Bangunan/Tenda# Togo Binongko'),
(73, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Swalayan/Supermarket/Toserba', 'Wangi-wangi'),
(74, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Swalayan/Supermarket/Toserba', 'Wangi-wangi Selatan'),
(75, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Swalayan/Supermarket/Toserba', 'Kaledupa'),
(76, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Swalayan/Supermarket/Toserba', 'Kaledupa selatan'),
(77, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Swalayan/Supermarket/Toserba', 'Tomia'),
(78, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Swalayan/Supermarket/Toserba', 'Tomia Timur'),
(79, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Swalayan/Supermarket/Toserba', 'Binongko'),
(80, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Swalayan/Supermarket/Toserba', 'Togo Binongko'),
(81, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Minimarket', 'Wangi-wangi'),
(82, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Minimarket', 'Wangi-wangi Selatan'),
(83, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Minimarket', 'Kaledupa'),
(84, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Minimarket', 'Kaledupa selatan'),
(85, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Minimarket', 'Tomia'),
(86, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Minimarket', 'Tomia Timur'),
(87, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Minimarket', 'Binongko'),
(88, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Minimarket', 'Togo Binongko'),
(89, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Perkulakan/Grosir', 'Wangi-wangi'),
(90, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Perkulakan/Grosir', 'Wangi-wangi Selatan'),
(91, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Perkulakan/Grosir', 'Kaledupa'),
(92, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Perkulakan/Grosir', 'Kaledupa selatan'),
(93, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Perkulakan/Grosir', 'Tomia'),
(94, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Perkulakan/Grosir', 'Tomia Timur'),
(95, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Perkulakan/Grosir', 'Binongko'),
(96, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Pasar Perkulakan/Grosir', 'Togo Binongko'),
(97, 'Sarana Perdagangan', 'Jumlah Pasar Modern', ' Pertokoan', 'Wangi-wangi'),
(98, 'Sarana Perdagangan', 'Jumlah Pasar Modern', ' Pertokoan', 'Wangi-wangi Selatan'),
(99, 'Sarana Perdagangan', 'Jumlah Pasar Modern', ' Pertokoan', 'Kaledupa'),
(100, 'Sarana Perdagangan', 'Jumlah Pasar Modern', ' Pertokoan', 'Kaledupa selatan'),
(101, 'Sarana Perdagangan', 'Jumlah Pasar Modern', ' Pertokoan', 'Tomia'),
(102, 'Sarana Perdagangan', 'Jumlah Pasar Modern', ' Pertokoan', 'Tomia Timur'),
(103, 'Sarana Perdagangan', 'Jumlah Pasar Modern', ' Pertokoan', 'Binongko'),
(104, 'Sarana Perdagangan', 'Jumlah Pasar Modern', ' Pertokoan', 'Togo Binongko'),
(105, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Jumlah Rumah Potong Hewan', 'Rumah Potong Hewan Sapi dan Sejenisnya'),
(106, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Jumlah Rumah Potong Hewan', 'Rumah Potong Hewan Babi dan Sejenisnya'),
(107, 'Sarana Perdagangan', 'Jumlah Pasar Modern', 'Jumlah Rumah Potong Hewan', 'Rumah Potong Hewan Unggas dan Sejenisnya'),
(108, 'Ekspor', 'Volume Ekspor Menurut Komoditi', 'Volume Eksport Komoditi Hasil Pertanian', 'Volume Eksport Komoditi Hasil Pertanian'),
(109, 'Ekspor', 'Volume Ekspor Menurut Komoditi', 'Volume Eksport Komoditi Hasil Perkebunan', 'Volume Eksport Komoditi Hasil Perkebunan'),
(110, 'Ekspor', 'Volume Ekspor Menurut Komoditi', 'Volume Eksport Komoditi Hasil Peternakan', 'Volume Eksport Komoditi Hasil Peternakan'),
(111, 'Ekspor', 'Volume Ekspor Menurut Komoditi', 'Volume Eksport Komoditi Hasil Perikanan', 'Volume Eksport Komoditi Hasil Perikanan'),
(112, 'Ekspor', 'Volume Ekspor Menurut Komoditi', 'Volume Eksport Komoditi Hasil Hutan', 'Volume Eksport Komoditi Hasil Hutan'),
(113, 'Ekspor', 'Volume Ekspor Menurut Komoditi', 'Volume Eksport Komoditi Hasil Tambang', 'Volume Eksport Komoditi Hasil Tambang'),
(114, 'Ekspor', 'Volume Ekspor Menurut Komoditi', 'Volume Eksport Komoditi Hasil Industri', 'Volume Eksport Komoditi Hasil Industri'),
(115, 'Ekspor', 'Nilai Ekspor Menurut Komoditi', ' Nilai Eksport Komoditi Hasil Pertanian', 'Volume Eksport Komoditi Hasil Pertanian'),
(116, 'Ekspor', 'Nilai Ekspor Menurut Komoditi', 'Nilai Eksport Komoditi Hasil Perkebunan', 'Volume Eksport Komoditi Hasil Perkebunan'),
(117, 'Ekspor', 'Nilai Ekspor Menurut Komoditi', 'Nilai Eksport Komoditi Hasil Peternakan', 'Volume Eksport Komoditi Hasil Peternakan'),
(118, 'Ekspor', 'Nilai Ekspor Menurut Komoditi', 'Nilai Eksport Komoditi Hasil Perikanan dan Kelau', 'Volume Eksport Komoditi Hasil Perikanan'),
(119, 'Ekspor', 'Nilai Ekspor Menurut Komoditi', 'Nilai Eksport Komoditi Hasil Hutan', 'Volume Eksport Komoditi Hasil Hutan'),
(120, 'Ekspor', 'Nilai Ekspor Menurut Komoditi', 'Nilai Eksport Komoditi Hasil Tambang', 'Volume Eksport Komoditi Hasil Tambang'),
(121, 'Ekspor', 'Nilai Ekspor Menurut Komoditi', 'Nilai Eksport Komoditi Hasil Industri', 'Volume Eksport Komoditi Hasil Industri'),
(122, 'Ekspor', 'Jumlah Nilai Free On Board (FOB) Komoditi', 'Nilai FOB Komoditi Hasil Pertanian', 'Nilai FOB Komoditi Hasil Pertanian'),
(123, 'Ekspor', 'Jumlah Nilai Free On Board (FOB) Komoditi', 'Nilai FOB Komoditi Hasil Perkebunan', 'Nilai FOB Komoditi Hasil Perkebunan'),
(124, 'Ekspor', 'Jumlah Nilai Free On Board (FOB) Komoditi', 'Nilai FOB Komoditi Hasil Peternakan', 'Nilai FOB Komoditi Hasil Peternakan'),
(125, 'Ekspor', 'Jumlah Nilai Free On Board (FOB) Komoditi', 'Nilai FOB Komoditi Hasil Perikanan dan Kelautan', 'Nilai FOB Komoditi Hasil Perikanan dan Kelautan'),
(126, 'Ekspor', 'Jumlah Nilai Free On Board (FOB) Komoditi', 'Nilai FOB Komoditi Hasil Hutan', 'Nilai FOB Komoditi Hasil Hutan'),
(127, 'Ekspor', 'Jumlah Nilai Free On Board (FOB) Komoditi', 'Nilai FOB Komoditi Hasil Tambang', 'Nilai FOB Komoditi Hasil Tambang'),
(128, 'Ekspor', 'Jumlah Nilai Free On Board (FOB) Komoditi', 'Nilai FOB Komoditi Hasil Industri', 'Nilai FOB Komoditi Hasil Industri'),
(129, 'Ekspor', 'Nilai Eksport Berdasarkan Negara Tujuan', 'Nilai Eksport Ke Negara Amerika', 'Nilai Eksport Ke Negara Amerika'),
(130, 'Ekspor', 'Nilai Eksport Berdasarkan Negara Tujuan', 'Nilai Eksport Ke Negara-Negara Amerika Latin', 'Nilai Eksport Ke Negara-Negara Amerika Latin'),
(131, 'Ekspor', 'Nilai Eksport Berdasarkan Negara Tujuan', 'Nilai Eksport Ke Negara-Negara Eropa', 'Nilai Eksport Ke Negara-Negara Eropa'),
(132, 'Ekspor', 'Nilai Eksport Berdasarkan Negara Tujuan', 'Nilai Eksport Ke Negara-Negara Afrika', 'Nilai Eksport Ke Negara-Negara Afrika'),
(133, 'Ekspor', 'Nilai Eksport Berdasarkan Negara Tujuan', 'Nilai Eksport Ke Negara-Negara Asia Barat', 'Nilai Eksport Ke Negara-Negara Asia Barat'),
(134, 'Ekspor', 'Nilai Eksport Berdasarkan Negara Tujuan', 'Nilai Eksport Ke Negara-Negara Asia Timur', 'Nilai Eksport Ke Negara-Negara Asia Timur'),
(135, 'Ekspor', 'Nilai Eksport Berdasarkan Negara Tujuan', 'Nilai Eksport Ke Negara-Negara Asia Tenggara', 'Nilai Eksport Ke Negara-Negara Asia Tenggara'),
(136, 'Ekspor', 'Nilai Eksport Berdasarkan Negara Tujuan', 'Nilai Eksport Ke Negara-Negara Asia Selatan', 'Nilai Eksport Ke Negara-Negara Asia Selatan'),
(137, 'Ekspor', 'Nilai Eksport Berdasarkan Negara Tujuan', 'Nilai Eksport Ke Negara-Negara Asia Tengah', 'Nilai Eksport Ke Negara-Negara Asia Tengah'),
(138, 'Ekspor', 'Nilai Eksport Berdasarkan Negara Tujuan', 'Nilai Eksport Ke Negara Australia Dan New Zeal', 'Nilai Eksport Ke Negara Australia Dan New Zeal'),
(139, 'Ekspor', 'Jumlah Nilai Free On Board (FOB) Negara Tujuan', 'Jumlah Nilai Free On Board (FOB) Negara Tujuan', 'Jumlah Nilai Free On Board (FOB) Negara Tujuan'),
(140, ' Import', 'Nilai Import Negara Asal', 'Nilai Import Ke Negara Amerika', 'Nilai Import Ke Negara Amerika'),
(141, ' Import', 'Nilai Import Negara Asal', 'Nilai Import Ke Negara-Negara Amerika Latin', 'Nilai Import Ke Negara-Negara Amerika Latin'),
(142, ' Import', 'Nilai Import Negara Asal', 'Nilai Import Ke Negara-Negara Eropa', 'Nilai Import Ke Negara-Negara Eropa'),
(143, ' Import', 'Nilai Import Negara Asal', 'Nilai Import Ke Negara-Negara Afrika', 'Nilai Import Ke Negara-Negara Afrika'),
(144, ' Import', 'Nilai Import Negara Asal', 'Nilai Import Ke Negara-Negara Asia Barat', 'Nilai Import Ke Negara-Negara Asia Barat'),
(145, ' Import', 'Nilai Import Negara Asal', 'Nilai Import Ke Negara-Negara Asia Timur', 'Nilai Import Ke Negara-Negara Asia Timur'),
(146, ' Import', 'Nilai Import Negara Asal', 'Nilai Import Ke Negara-Negara Asia Tenggara', 'Nilai Import Ke Negara-Negara Asia Tenggara'),
(147, ' Import', 'Nilai Import Negara Asal', 'Nilai Import Ke Negara-Negara Asia Selatan', 'Nilai Import Ke Negara-Negara Asia Selatan'),
(148, ' Import', 'Nilai Import Negara Asal', 'Nilai Import Ke Negara-Negara Asia Tengah', 'Nilai Import Ke Negara-Negara Asia Tengah'),
(149, ' Import', 'Nilai Import Negara Asal', 'Nilai Import Ke Negara Australia dan New Zeala', 'Nilai Import Ke Negara Australia dan New Zeala'),
(150, ' Import', 'Jumlah Nilai Cost Insurence Freight (CIF) Negara Asal', 'Jumlah Nilai Cost Insurence Freight (CIF) Negara Asal', 'Jumlah Nilai Cost Insurence Freight (CIF) Negara Asal'),
(151, 'Nilai Ekspor Bersih', 'Nilai Total Ekspor', 'Nilai Total Ekspor', 'Nilai Total Ekspor'),
(152, 'Nilai Ekspor Bersih', 'Nilai Total Impor', 'Nilai Total Impor', 'Nilai Total Impor'),
(153, 'Jumlah kelompok pedagang/usaha informal yang mendapatkan bantuan binaan pemda', 'Jumlah kelompok pedagang/usaha informal yang mendapatkan bantuan binaan pemda', 'Jumlah kelompok pedagang/usaha informal yang mendapatkan bantuan binaan pemda', 'Jumlah kelompok pedagang/usaha informal yang mendapatkan bantuan binaan pemda'),
(154, 'Jumlah kelompok pedagang/usaha informal', 'Jumlah kelompok pedagang/usaha informal', 'Jumlah kelompok pedagang/usaha informal', 'Jumlah kelompok pedagang/usaha informal');

-- --------------------------------------------------------

--
-- Table structure for table `input_pertanian`
--

CREATE TABLE `input_pertanian` (
  `id` int(11) NOT NULL,
  `header_satu` text DEFAULT NULL,
  `header_dua` text DEFAULT NULL,
  `input` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_pertanian`
--

INSERT INTO `input_pertanian` (`id`, `header_satu`, `header_dua`, `input`) VALUES
(1, 'Pertanian', 'Padi Sawah', 'Luas Tanam'),
(2, 'Pertanian', 'Padi Sawah', 'Luas Panen'),
(3, 'Pertanian', 'Padi Sawah', 'Produksi Gabah'),
(4, 'Pertanian', 'Padi Sawah', 'Produksi Beras'),
(5, 'Pertanian', 'Padi Sawah', 'Produktivitas'),
(6, 'Pertanian', 'Padi Sawah', 'Jumlah Konsumsi Beras'),
(7, 'Pertanian', 'Padi Ladang', 'Luas Tanam'),
(8, 'Pertanian', 'Padi Ladang', 'Luas Panen'),
(9, 'Pertanian', 'Padi Ladang', 'Produksi Gabah'),
(10, 'Pertanian', 'Padi Ladang', 'Produksi Beras'),
(11, 'Pertanian', 'Padi Ladang', 'Produktivitas'),
(12, 'Pertanian', 'Padi Ladang', 'Jumlah Konsumsi Beras'),
(13, 'Pertanian', 'Jagung', 'Luas Tanam'),
(14, 'Pertanian', 'Jagung', 'Luas Panen'),
(15, 'Pertanian', 'Jagung', 'Produksi'),
(16, 'Pertanian', 'Jagung', 'Produktivitas'),
(17, 'Pertanian', 'Jagung', 'Jumlah Konsumsi'),
(18, 'Pertanian', 'Kacang Kedelai', 'Luas Tanam'),
(19, 'Pertanian', 'Kacang Kedelai', 'Luas Panen'),
(20, 'Pertanian', 'Kacang Kedelai', 'Produksi'),
(21, 'Pertanian', 'Kacang Kedelai', 'Produktivitas'),
(22, 'Pertanian', 'Kacang Kedelai', 'Jumlah Konsumsi'),
(23, 'Pertanian', 'Kacang Hijau', 'Luas Tanam'),
(24, 'Pertanian', 'Kacang Hijau', 'Luas Panen'),
(25, 'Pertanian', 'Kacang Hijau', 'Produksi'),
(26, 'Pertanian', 'Kacang Hijau', 'Produktivitas'),
(27, 'Pertanian', 'Kacang Hijau', 'Jumlah Konsumsi'),
(28, 'Pertanian', 'Kacang Tanah', 'Luas Tanam'),
(29, 'Pertanian', 'Kacang Tanah', 'Luas Panen'),
(30, 'Pertanian', 'Kacang Tanah', 'Produksi'),
(31, 'Pertanian', 'Kacang Tanah', 'Produktivitas'),
(32, 'Pertanian', 'Kacang Tanah', 'Jumlah Konsumsi'),
(33, 'Pertanian', 'Ubi Kayu', 'Luas Tanam'),
(34, 'Pertanian', 'Ubi Kayu', 'Luas Panen'),
(35, 'Pertanian', 'Ubi Kayu', 'Produksi'),
(36, 'Pertanian', 'Ubi Kayu', 'Produktivitas'),
(37, 'Pertanian', 'Ubi Kayu', 'Jumlah Konsumsi'),
(38, 'Pertanian', 'Ubi Jalar', 'Luas Tanam'),
(39, 'Pertanian', 'Ubi Jalar', 'Luas Panen'),
(40, 'Pertanian', 'Ubi Jalar', 'Produksi'),
(41, 'Pertanian', 'Ubi Jalar', 'Produktivitas'),
(42, 'Pertanian', 'Ubi Jalar', 'Jumlah Konsumsi'),
(43, 'Pertanian', 'Luas Lahan Pertanian', 'Lahan Basah'),
(44, 'Pertanian', 'Luas Lahan Pertanian', 'Lahan Kering'),
(45, 'Pertanian', 'Luas Lahan Pertanian', 'Lahan Dataran Tinggi'),
(46, 'Pertanian', 'Jenis Irigasi Sawah', 'Teknis'),
(47, 'Pertanian', 'Jenis Irigasi Sawah', 'Setengah Teknis'),
(48, 'Pertanian', 'Jenis Irigasi Sawah', 'Sederhana'),
(49, 'Pertanian', 'Jenis Irigasi Sawah', 'Pengairan Desa / Non PU'),
(50, 'Pertanian', 'Jenis Irigasi Sawah', 'Tadah Hujan'),
(51, 'Pertanian', 'Jenis Irigasi Sawah', 'Lebak/Polder dan lainnya'),
(52, 'Pertanian', 'Industri Pengolahan Hasil Pertanian', 'Jumlah Perusahaan'),
(53, 'Pertanian', 'Industri Pengolahan Hasil Pertanian', 'Omset Produksi'),
(54, 'Hortikultura', 'Mangga', 'Luas Areal'),
(55, 'Hortikultura', 'Mangga', 'Jumlah Produksi'),
(56, 'Hortikultura', 'Mangga', 'Jumlah Konsumsi'),
(57, 'Hortikultura', 'Mangga', 'Produktivitas perLuas'),
(58, 'Hortikultura', 'Jeruk', 'Luas Areal'),
(59, 'Hortikultura', 'Jeruk', 'Jumlah Produksi'),
(60, 'Hortikultura', 'Jeruk', 'Jumlah Konsumsi'),
(61, 'Hortikultura', 'Jeruk', 'Produktivitas perLuas'),
(62, 'Hortikultura', 'Pepaya', 'Luas Areal'),
(63, 'Hortikultura', 'Pepaya', 'Jumlah Produksi'),
(64, 'Hortikultura', 'Pepaya', 'Jumlah Konsumsi'),
(65, 'Hortikultura', 'Pepaya', 'Produktivitas perLuas'),
(66, 'Hortikultura', 'Pisang', 'Luas Areal'),
(67, 'Hortikultura', 'Pisang', 'Jumlah Produksi'),
(68, 'Hortikultura', 'Pisang', 'Jumlah Konsumsi'),
(69, 'Hortikultura', 'Pisang', 'Produktivitas perLuas'),
(70, 'Hortikultura', 'Nanas', 'Luas Areal'),
(71, 'Hortikultura', 'Nanas', 'Jumlah Produksi'),
(72, 'Hortikultura', 'Nanas', 'Jumlah Konsumsi'),
(73, 'Hortikultura', 'Nanas', 'Produktivitas perLuas'),
(74, 'Hortikultura', 'Durian', 'Luas Areal'),
(75, 'Hortikultura', 'Durian', 'Jumlah Produksi'),
(76, 'Hortikultura', 'Durian', 'Jumlah Konsumsi'),
(77, 'Hortikultura', 'Durian', 'Produktivitas perLuas'),
(78, 'Hortikultura', 'Manggis', 'Luas Areal'),
(79, 'Hortikultura', 'Manggis', 'Jumlah Produksi'),
(80, 'Hortikultura', 'Manggis', 'Jumlah Konsumsi'),
(81, 'Hortikultura', 'Manggis', 'Produktivitas perLuas'),
(82, 'Hortikultura', 'Melon', 'Luas Areal'),
(83, 'Hortikultura', 'Melon', 'Jumlah Produksi'),
(84, 'Hortikultura', 'Melon', 'Jumlah Konsumsi'),
(85, 'Hortikultura', 'Melon', 'Produktivitas perLuas'),
(86, 'Hortikultura', 'Alpukat', 'Luas Areal'),
(87, 'Hortikultura', 'Alpukat', 'Jumlah Produksi'),
(88, 'Hortikultura', 'Alpukat', 'Jumlah Konsumsi'),
(89, 'Hortikultura', 'Alpukat', 'Produktivitas perLuas'),
(90, 'Hortikultura', 'Buah Naga', 'Luas Areal'),
(91, 'Hortikultura', 'Buah Naga', 'Jumlah Produksi'),
(92, 'Hortikultura', 'Buah Naga', 'Jumlah Konsumsi'),
(93, 'Hortikultura', 'Buah Naga', 'Produktivitas perLuas'),
(94, 'Hortikultura', 'Belimbing', 'Luas Areal'),
(95, 'Hortikultura', 'Belimbing', 'Jumlah Produksi'),
(96, 'Hortikultura', 'Belimbing', 'Jumlah Konsumsi'),
(97, 'Hortikultura', 'Belimbing', 'Produktivitas perLuas'),
(98, 'Hortikultura', 'Dukuh/Langsat', 'Luas Areal'),
(99, 'Hortikultura', 'Dukuh/Langsat', 'Jumlah Produksi'),
(100, 'Hortikultura', 'Dukuh/Langsat', 'Jumlah Konsumsi'),
(101, 'Hortikultura', 'Dukuh/Langsat', 'Produktivitas perLuas'),
(102, 'Hortikultura', 'Jambu Biji', 'Luas Areal'),
(103, 'Hortikultura', 'Jambu Biji', 'Jumlah Produksi'),
(104, 'Hortikultura', 'Jambu Biji', 'Jumlah Konsumsi'),
(105, 'Hortikultura', 'Jambu Biji', 'Produktivitas perLuas'),
(106, 'Hortikultura', 'Jambu Air', 'Luas Areal'),
(107, 'Hortikultura', 'Jambu Air', 'Jumlah Produksi'),
(108, 'Hortikultura', 'Jambu Air', 'Jumlah Konsumsi'),
(109, 'Hortikultura', 'Jambu Air', 'Produktivitas perLuas'),
(110, 'Hortikultura', 'Nangka/Cempedak', 'Luas Areal'),
(111, 'Hortikultura', 'Nangka/Cempedak', 'Jumlah Produksi'),
(112, 'Hortikultura', 'Nangka/Cempedak', 'Jumlah Konsumsi'),
(113, 'Hortikultura', 'Nangka/Cempedak', 'Produktivitas perLuas'),
(114, 'Hortikultura', 'Salak', 'Luas Areal'),
(115, 'Hortikultura', 'Salak', 'Jumlah Produksi'),
(116, 'Hortikultura', 'Salak', 'Jumlah Konsumsi'),
(117, 'Hortikultura', 'Salak', 'Produktivitas perLuas'),
(118, 'Hortikultura', 'Rambutan', 'Luas Areal'),
(119, 'Hortikultura', 'Rambutan', 'Jumlah Produksi'),
(120, 'Hortikultura', 'Rambutan', 'Jumlah Konsumsi'),
(121, 'Hortikultura', 'Rambutan', 'Produktivitas perLuas'),
(122, 'Hortikultura', 'Sawo', 'Luas Areal'),
(123, 'Hortikultura', 'Sawo', 'Jumlah Produksi'),
(124, 'Hortikultura', 'Sawo', 'Jumlah Konsumsi'),
(125, 'Hortikultura', 'Sawo', 'Produktivitas perLuas'),
(126, 'Hortikultura', 'Sirsak', 'Luas Areal'),
(127, 'Hortikultura', 'Sirsak', 'Jumlah Produksi'),
(128, 'Hortikultura', 'Sirsak', 'Jumlah Konsumsi'),
(129, 'Hortikultura', 'Sirsak', 'Produktivitas perLuas'),
(130, 'Hortikultura', 'Markisa', 'Luas Areal'),
(131, 'Hortikultura', 'Markisa', 'Jumlah Produksi'),
(132, 'Hortikultura', 'Markisa', 'Jumlah Konsumsi'),
(133, 'Hortikultura', 'Markisa', 'Produktivitas perLuas'),
(134, 'Hortikultura', 'Sukun', 'Luas Areal'),
(135, 'Hortikultura', 'Sukun', 'Jumlah Produksi'),
(136, 'Hortikultura', 'Sukun', 'Jumlah Konsumsi'),
(137, 'Hortikultura', 'Sukun', 'Produktivitas perLuas'),
(138, 'Hortikultura', 'Melinjo', 'Luas Areal'),
(139, 'Hortikultura', 'Melinjo', 'Jumlah Produksi'),
(140, 'Hortikultura', 'Melinjo', 'Jumlah Konsumsi'),
(141, 'Hortikultura', 'Melinjo', 'Produktivitas perLuas'),
(142, 'Hortikultura', 'Bawang Merah', 'Luas Areal'),
(143, 'Hortikultura', 'Bawang Merah', 'Jumlah Produksi'),
(144, 'Hortikultura', 'Bawang Merah', 'Jumlah Konsumsi'),
(145, 'Hortikultura', 'Kentang', 'Luas Areal'),
(146, 'Hortikultura', 'Kentang', 'Jumlah Produksi'),
(147, 'Hortikultura', 'Kentang', 'Jumlah Konsumsi'),
(148, 'Hortikultura', 'Kubis', 'Luas Areal'),
(149, 'Hortikultura', 'Kubis', 'Jumlah Produksi'),
(150, 'Hortikultura', 'Kubis', 'Jumlah Konsumsi'),
(151, 'Hortikultura', 'Cabai', 'Luas Areal'),
(152, 'Hortikultura', 'Cabai', 'Jumlah Produksi'),
(153, 'Hortikultura', 'Cabai', 'Jumlah Konsumsi'),
(154, 'Hortikultura', 'Petsai/Sawi', 'Luas Areal'),
(155, 'Hortikultura', 'Petsai/Sawi', 'Jumlah Produksi'),
(156, 'Hortikultura', 'Petsai/Sawi', 'Jumlah Konsumsi'),
(157, 'Hortikultura', 'Wortel', 'Luas Areal'),
(158, 'Hortikultura', 'Wortel', 'Jumlah Produksi'),
(159, 'Hortikultura', 'Wortel', 'Jumlah Konsumsi'),
(160, 'Hortikultura', 'Bawang Putih', 'Luas Areal'),
(161, 'Hortikultura', 'Bawang Putih', 'Jumlah Produksi'),
(162, 'Hortikultura', 'Bawang Putih', 'Jumlah Konsumsi'),
(163, 'Hortikultura', 'Daun Bawang', 'Luas Areal'),
(164, 'Hortikultura', 'Daun Bawang', 'Jumlah Produksi'),
(165, 'Hortikultura', 'Daun Bawang', 'Jumlah Konsumsi'),
(166, 'Hortikultura', 'Kembang Kol', 'Luas Areal'),
(167, 'Hortikultura', 'Kembang Kol', 'Jumlah Produksi'),
(168, 'Hortikultura', 'Kembang Kol', 'Jumlah Konsumsi'),
(169, 'Hortikultura', 'Lobak', 'Luas Areal'),
(170, 'Hortikultura', 'Lobak', 'Jumlah Produksi'),
(171, 'Hortikultura', 'Lobak', 'Jumlah Konsumsi'),
(172, 'Hortikultura', 'Kacang Merah', 'Luas Areal'),
(173, 'Hortikultura', 'Kacang Merah', 'Jumlah Produksi'),
(174, 'Hortikultura', 'Kacang Merah', 'Jumlah Konsumsi'),
(175, 'Hortikultura', 'Kacang Panjang', 'Luas Areal'),
(176, 'Hortikultura', 'Kacang Panjang', 'Jumlah Produksi'),
(177, 'Hortikultura', 'Kacang Panjang', 'Jumlah Konsumsi'),
(178, 'Hortikultura', 'Semangka', 'Luas Areal'),
(179, 'Hortikultura', 'Semangka', 'Jumlah Produksi'),
(180, 'Hortikultura', 'Semangka', 'Jumlah Konsumsi'),
(181, 'Hortikultura', 'Tomat', 'Luas Areal'),
(182, 'Hortikultura', 'Tomat', 'Jumlah Produksi'),
(183, 'Hortikultura', 'Tomat', 'Jumlah Konsumsi'),
(184, 'Hortikultura', 'Terung', 'Luas Areal'),
(185, 'Hortikultura', 'Terung', 'Jumlah Produksi'),
(186, 'Hortikultura', 'Terung', 'Jumlah Konsumsi'),
(187, 'Hortikultura', 'Buncis', 'Luas Areal'),
(188, 'Hortikultura', 'Buncis', 'Jumlah Produksi'),
(189, 'Hortikultura', 'Buncis', 'Jumlah Konsumsi'),
(190, 'Hortikultura', 'Ketimun', 'Luas Areal'),
(191, 'Hortikultura', 'Ketimun', 'Jumlah Produksi'),
(192, 'Hortikultura', 'Ketimun', 'Jumlah Konsumsi'),
(193, 'Hortikultura', 'Labu Siam', 'Luas Areal'),
(194, 'Hortikultura', 'Labu Siam', 'Jumlah Produksi'),
(195, 'Hortikultura', 'Labu Siam', 'Jumlah Konsumsi'),
(196, 'Hortikultura', 'Kangkung', 'Luas Areal'),
(197, 'Hortikultura', 'Kangkung', 'Jumlah Produksi'),
(198, 'Hortikultura', 'Kangkung', 'Jumlah Konsumsi'),
(199, 'Hortikultura', 'Bayam', 'Luas Areal'),
(200, 'Hortikultura', 'Bayam', 'Jumlah Produksi'),
(201, 'Hortikultura', 'Bayam', 'Jumlah Konsumsi'),
(202, 'Hortikultura', 'Jahe', 'Luas Areal'),
(203, 'Hortikultura', 'Jahe', 'Jumlah Produksi'),
(204, 'Hortikultura', 'Jahe', 'Jumlah Konsumsi'),
(205, 'Hortikultura', 'Laos/Lengkuas', 'Luas Areal'),
(206, 'Hortikultura', 'Laos/Lengkuas', 'Jumlah Produksi'),
(207, 'Hortikultura', 'Laos/Lengkuas', 'Jumlah Konsumsi'),
(208, 'Hortikultura', 'Kencur', 'Luas Areal'),
(209, 'Hortikultura', 'Kencur', 'Jumlah Produksi'),
(210, 'Hortikultura', 'Kencur', 'Jumlah Konsumsi'),
(211, 'Hortikultura', 'Kunyit', 'Luas Areal'),
(212, 'Hortikultura', 'Kunyit', 'Jumlah Produksi'),
(213, 'Hortikultura', 'Kunyit', 'Jumlah Konsumsi'),
(214, 'Hortikultura', 'Serai', 'Luas Areal'),
(215, 'Hortikultura', 'Serai', 'Jumlah Produksi'),
(216, 'Hortikultura', 'Serai', 'Jumlah Konsumsi'),
(217, 'Hortikultura', 'Blewah', 'Luas Areal'),
(218, 'Hortikultura', 'Blewah', 'Jumlah Produksi'),
(219, 'Hortikultura', 'Blewah', 'Jumlah Konsumsi'),
(220, 'Hortikultura', 'Petai', 'Luas Areal'),
(221, 'Hortikultura', 'Petai', 'Jumlah Produksi'),
(222, 'Hortikultura', 'Petai', 'Jumlah Konsumsi'),
(223, 'Hortikultura', 'Jengkol', 'Luas Areal'),
(224, 'Hortikultura', 'Jengkol', 'Jumlah Produksi'),
(225, 'Hortikultura', 'Jengkol', 'Jumlah Konsumsi'),
(226, 'Hortikultura', 'Bawang Daun', 'Luas Areal'),
(227, 'Hortikultura', 'Bawang Daun', 'Jumlah Produksi'),
(228, 'Hortikultura', 'Bawang Daun', 'Jumlah Konsumsi'),
(229, 'Hortikultura', 'Cabe', 'Luas Areal'),
(230, 'Hortikultura', 'Cabe', 'Jumlah Produksi'),
(231, 'Hortikultura', 'Cabe', 'Jumlah Konsumsi'),
(232, 'Hortikultura', 'Jamur', 'Luas Areal'),
(233, 'Hortikultura', 'Jamur', 'Jumlah Produksi'),
(234, 'Hortikultura', 'Jamur', 'Jumlah Konsumsi'),
(235, 'Perkebunan', 'Karet', 'Luas Areal'),
(236, 'Perkebunan', 'Karet', 'Luas Tanam'),
(237, 'Perkebunan', 'Karet', 'Jumlah Produksi'),
(238, 'Perkebunan', 'Karet', 'Jumlah Konsumsi'),
(239, 'Perkebunan', 'Teh', 'Luas Areal'),
(240, 'Perkebunan', 'Teh', 'Luas Tanam'),
(241, 'Perkebunan', 'Teh', 'Jumlah Produksi'),
(242, 'Perkebunan', 'Teh', 'Jumlah Konsumsi'),
(243, 'Perkebunan', 'Kopi', 'Luas Areal'),
(244, 'Perkebunan', 'Kopi', 'Luas Tanam'),
(245, 'Perkebunan', 'Kopi', 'Jumlah Produksi'),
(246, 'Perkebunan', 'Kopi', 'Jumlah Konsumsi'),
(247, 'Perkebunan', 'Sawit', 'Luas Areal'),
(248, 'Perkebunan', 'Sawit', 'Luas Tanam'),
(249, 'Perkebunan', 'Sawit', 'Jumlah Produksi'),
(250, 'Perkebunan', 'Sawit', 'Jumlah Konsumsi'),
(251, 'Perkebunan', 'Tembakau', 'Luas Areal'),
(252, 'Perkebunan', 'Tembakau', 'Luas Tanam'),
(253, 'Perkebunan', 'Tembakau', 'Jumlah Produksi'),
(254, 'Perkebunan', 'Tembakau', 'Jumlah Konsumsi'),
(255, 'Perkebunan', 'Kakao', 'Luas Areal'),
(256, 'Perkebunan', 'Kakao', 'Luas Tanam'),
(257, 'Perkebunan', 'Kakao', 'Jumlah Produksi'),
(258, 'Perkebunan', 'Kakao', 'Jumlah Konsumsi'),
(259, 'Perkebunan', 'Lada', 'Luas Areal'),
(260, 'Perkebunan', 'Lada', 'Luas Tanam'),
(261, 'Perkebunan', 'Lada', 'Jumlah Produksi'),
(262, 'Perkebunan', 'Lada', 'Jumlah Konsumsi'),
(263, 'Perkebunan', 'Vanili', 'Luas Areal'),
(264, 'Perkebunan', 'Vanili', 'Luas Tanam'),
(265, 'Perkebunan', 'Vanili', 'Jumlah Produksi'),
(266, 'Perkebunan', 'Vanili', 'Jumlah Konsumsi'),
(267, 'Perkebunan', 'Tebu', 'Luas Areal'),
(268, 'Perkebunan', 'Tebu', 'Luas Tanam'),
(269, 'Perkebunan', 'Tebu', 'Jumlah Produksi'),
(270, 'Perkebunan', 'Tebu', 'Jumlah Konsumsi'),
(271, 'Perkebunan', 'Kelapa', 'Luas Areal'),
(272, 'Perkebunan', 'Kelapa', 'Luas Tanam'),
(273, 'Perkebunan', 'Kelapa', 'Jumlah Produksi'),
(274, 'Perkebunan', 'Kelapa', 'Jumlah Konsumsi'),
(275, 'Perkebunan', 'Kelapa Sawit', 'Luas Areal'),
(276, 'Perkebunan', 'Kelapa Sawit', 'Luas Tanam'),
(277, 'Perkebunan', 'Kelapa Sawit', 'Jumlah Produksi'),
(278, 'Perkebunan', 'Kelapa Sawit', 'Jumlah Konsumsi'),
(279, 'Perkebunan', 'Pala', 'Luas Areal'),
(280, 'Perkebunan', 'Pala', 'Luas Tanam'),
(281, 'Perkebunan', 'Pala', 'Jumlah Produksi'),
(282, 'Perkebunan', 'Pala', 'Jumlah Konsumsi'),
(283, 'Perkebunan', 'Kelapa Dalam', 'Luas Areal'),
(284, 'Perkebunan', 'Kelapa Dalam', 'Luas Tanam'),
(285, 'Perkebunan', 'Kelapa Dalam', 'Jumlah Produksi'),
(286, 'Perkebunan', 'Kelapa Dalam', 'Jumlah Konsumsi'),
(287, 'Perkebunan', 'Cengkeh', 'Luas Areal'),
(288, 'Perkebunan', 'Cengkeh', 'Luas Tanam'),
(289, 'Perkebunan', 'Cengkeh', 'Jumlah Produksi'),
(290, 'Perkebunan', 'Cengkeh', 'Jumlah Konsumsi'),
(291, 'Perkebunan', 'Kina', 'Luas Areal'),
(292, 'Perkebunan', 'Kina', 'Luas Tanam'),
(293, 'Perkebunan', 'Kina', 'Jumlah Produksi'),
(294, 'Perkebunan', 'Kina', 'Jumlah Konsumsi'),
(295, 'Perkebunan', 'Jambu Mete', 'Luas Areal'),
(296, 'Perkebunan', 'Jambu Mete', 'Luas Tanam'),
(297, 'Perkebunan', 'Jambu Mete', 'Jumlah Produksi'),
(298, 'Perkebunan', 'Jambu Mete', 'Jumlah Konsumsi'),
(299, 'Perkebunan', 'Kapuk', 'Luas Areal'),
(300, 'Perkebunan', 'Kapuk', 'Luas Tanam'),
(301, 'Perkebunan', 'Kapuk', 'Jumlah Produksi'),
(302, 'Perkebunan', 'Kapuk', 'Jumlah Konsumsi'),
(303, 'Perkebunan', 'Aren', 'Luas Areal'),
(304, 'Perkebunan', 'Aren', 'Luas Tanam'),
(305, 'Perkebunan', 'Aren', 'Jumlah Produksi'),
(306, 'Perkebunan', 'Aren', 'Jumlah Konsumsi'),
(307, 'Perkebunan', 'Pandan', 'Luas Areal'),
(308, 'Perkebunan', 'Pandan', 'Luas Tanam'),
(309, 'Perkebunan', 'Pandan', 'Jumlah Produksi'),
(310, 'Perkebunan', 'Pandan', 'Jumlah Konsumsi'),
(311, 'Perkebunan', 'Kapolaga', 'Luas Areal'),
(312, 'Perkebunan', 'Kapolaga', 'Luas Tanam'),
(313, 'Perkebunan', 'Kapolaga', 'Jumlah Produksi'),
(314, 'Perkebunan', 'Kapolaga', 'Jumlah Konsumsi'),
(315, 'Perkebunan', 'Industri Pengolahan Hasil Perkebunan', 'Jumlah Industri Pengolahan'),
(316, 'Jumlah Produksi Komoditas Perkebunan/ton', 'Jumlah Produksi Komoditas Perkebunan/ton', 'Jumlah Produksi Komoditas Perkebunan/ton'),
(317, 'Jumlah Kontribusi Perkebunan', 'Jumlah Kontribusi Perkebunan', 'Jumlah Kontribusi Perkebunan'),
(318, 'Jumlah Produksi Bahan Pangan Utama Lokal Hasill Kelompok Petani (ton) Per Tahun', 'Jumlah Produksi Bahan Pangan Utama Lokal Hasill Kelompok Petani (ton) Per Tahun', 'Jumlah Produksi Bahan Pangan Utama Lokal Hasill Kelompok Petani (ton) Per Tahun'),
(319, 'Jumlah Produksi Bahan Pangan Utama di Daerah (ton) Per Tahun', 'Jumlah Produksi Bahan Pangan Utama di Daerah (ton) Per Tahun', 'Jumlah Produksi Bahan Pangan Utama di Daerah (ton) Per Tahun'),
(320, 'Indeks Yang Diterima Petani', 'Indeks Yang Diterima Petani', 'Indeks Yang Diterima Petani'),
(321, 'Indeks Yang Dibayar Petani', 'Indeks Yang Dibayar Petani', 'Indeks Yang Dibayar Petani'),
(322, 'Jumlah Produksi Bahan Pangan Utama Lokal Lainnya  (ton) Per Tahun', 'Jumlah Produksi Bahan Pangan Utama Lokal Lainnya  (ton) Per Tahun', 'Jumlah Produksi Bahan Pangan Utama Lokal Lainnya  (ton) Per Tahun'),
(323, 'Luas Areal Tanaman pangan utama lokal lainnya (ha)', 'Luas Areal Tanaman pangan utama lokal lainnya (ha)', 'Luas Areal Tanaman pangan utama lokal lainnya (ha)'),
(324, 'Jumlah kelompok petani yang mendapatkan bantuan pemda', 'Jumlah kelompok petani yang mendapatkan bantuan pemda', 'Jumlah kelompok petani yang mendapatkan bantuan pemda'),
(325, 'Jumlah kelompok tani', 'Jumlah kelompok tani', 'Jumlah kelompok tani'),
(326, 'Peternakan', 'Ternak Sapi Potong', 'Jumlah Populasi'),
(327, 'Peternakan', 'Ternak Sapi Potong', 'Jumlah Pemotongan per Tahun'),
(328, 'Peternakan', 'Ternak Sapi Potong', 'Laju Pertumbuhan Populasi per Tahun'),
(329, 'Peternakan', 'Ternak Sapi Potong', 'Rata-Rata Kepemilikan per KK'),
(330, 'Peternakan', 'Ternak Sapi Perah', 'Jumlah Populasi'),
(331, 'Peternakan', 'Ternak Sapi Perah', 'Jumlah Pemotongan per Tahun'),
(332, 'Peternakan', 'Ternak Sapi Perah', 'Laju Pertumbuhan Populasi per Tahun'),
(333, 'Peternakan', 'Ternak Sapi Perah', 'Rata-Rata Kepemilikan per KK'),
(334, 'Peternakan', 'Ternak Sapi Perah', 'Rata-Rata Produktivitas per Ekor per Hari'),
(335, 'Peternakan', 'Ternak Kecil', 'Jumlah Populasi Kambing'),
(336, 'Peternakan', 'Ternak Kecil', 'Jumlah Populasi Domba'),
(337, 'Peternakan', 'Ternak Kecil', 'Jumlah Populasi Babi'),
(338, 'Peternakan', 'Ternak Kecil', 'Jumlah Populasi Kerbau'),
(339, 'Peternakan', 'Ternak Kecil', 'Jumlah Populasi Kuda'),
(340, 'Peternakan', 'Ternak Kecil', 'Jumlah Populasi Rusa'),
(341, 'Peternakan', 'Ternak Kecil', 'Jumlah Populasi Kelinci'),
(342, 'Peternakan', 'Ternak Kecil', 'Jumlah Populasi Lainnya'),
(343, 'Peternakan', 'Unggas', 'Ayam Petelur#Jumlah Ayam Buras'),
(344, 'Peternakan', 'Unggas', 'Ayam Petelur#Jumlah'),
(345, 'Peternakan', 'Unggas', 'Ayam Petelur#Jumlah Produksi Telur'),
(346, 'Peternakan', 'Unggas', 'Ayam Petelur#Jumlah Peternak'),
(347, 'Peternakan', 'Unggas', 'Ayam Petelur#Rata-Rata Kepemilikan per Peternak'),
(348, 'Peternakan', 'Unggas', 'Ayam Pedaging#Jumlah'),
(349, 'Peternakan', 'Unggas', 'Ayam Pedaging#Jumlah Peternak'),
(350, 'Peternakan', 'Unggas', 'Ayam Pedaging#Jumlah Produksi'),
(351, 'Peternakan', 'Unggas', 'Ayam Pedaging#Rata-Rata Kepemilikan per Peternak'),
(352, 'Peternakan', 'Unggas', 'Itik#Jumlah Populasi'),
(353, 'Peternakan', 'Unggas', 'Itik#Jumlah Peternak'),
(354, 'Peternakan', 'Unggas', 'Itik#Jumlah Produksi'),
(355, 'Peternakan', 'Unggas', 'Itik#Rata-Rata Kepemilikan per Peternak'),
(356, 'Peternakan', 'Unggas', 'Jenis Lainnya#Jumlah Populasi Itik manila'),
(357, 'Peternakan', 'Unggas', 'Jenis Lainnya#Jumlah Populasi Angsa'),
(358, 'Peternakan', 'Unggas', 'Jenis Lainnya#Jumlah Populasi Burung Dara'),
(359, 'Peternakan', 'Unggas', 'Jenis Lainnya#Jumlah Populasi Burung Puyuh'),
(360, 'Peternakan', 'Industri Peternakan', 'Jumlah Perusahaan Pembibitan Ayam'),
(361, 'Peternakan', 'Industri Peternakan', 'Jumlah Perusahaan Penggemukan Sapi Potong'),
(362, 'Peternakan', 'Industri Peternakan', 'Jumlah Pabrik Pakan Ternak'),
(363, 'Peternakan', 'Industri Peternakan', 'Jumlah Industri Pengolah Susu (IPS)'),
(364, 'Peternakan', 'Jumlah Koperasi Peternakan', 'Jumlah Koperasi Peternakan'),
(365, 'Peternakan', 'Jumlah Rumah Potong Hewan (RPH)', 'Jumlah Rumah Potong Hewan (RPH)');

-- --------------------------------------------------------

--
-- Table structure for table `input_program_unggulan`
--

CREATE TABLE `input_program_unggulan` (
  `id` int(11) NOT NULL,
  `header_satu` text DEFAULT NULL,
  `input` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_program_unggulan`
--

INSERT INTO `input_program_unggulan` (`id`, `header_satu`, `input`) VALUES
(1, 'Pendidikan Bersinar', 'BSM Sekolah Dasar'),
(2, 'Pendidikan Bersinar', 'BSM Sekolah Menengah Pertama'),
(3, 'Pendidikan Bersinar', 'Beasiswa S2'),
(4, 'Pendidikan Bersinar', 'Beasiswa S1'),
(5, 'Pendidikan Bersinar', 'Beasiswa Kedokteran'),
(6, 'Pendidikan Bersinar', 'Beasiswa MoU'),
(7, 'Kesehatan Bersinar', 'Dokter Umum RSUD'),
(8, 'Kesehatan Bersinar', 'Dokter Spesial RSUD'),
(9, 'Kesehatan Bersinar', 'Dokter Gigi RSUD'),
(10, 'Kesehatan Bersinar', 'Penerima PBI APBN'),
(11, 'Kesehatan Bersinar', 'Penerima PBI APBD'),
(12, 'UMKM Bersinar', 'Izin UMKM'),
(13, 'UMKM Bersinar', 'KUR Tanpa Bunga'),
(14, 'Perikanan Bersinar', 'Kartu Nelayan (orang)'),
(15, 'Perikanan Bersinar', 'Asuransi Nelayan (orang)'),
(16, 'Perikanan Bersinar', 'Bantuan Sapras Nelayan (Kelompok)'),
(17, 'Perikanan Bersinar', 'Bantuan Sapras Budidaya (Kelompok'),
(18, 'Perikanan Bersinar', 'Bantuan Sapras Pengolahan Ikan (Kelompok)'),
(19, 'Wakatobi Religius', 'Umroh Gratis'),
(20, 'Wakatobi Religius', 'Fasilitas Penerbangan Jemaah Haji'),
(21, 'Wakatobi Religius', 'Bantuan Mesjid'),
(22, 'Wakatobi Religius', 'Bantuan TPQ'),
(23, 'Wakatobi Religius', 'Bantuan Majelis Taklim'),
(24, 'Sosial Bersinar', 'Bantuan Lansia'),
(25, 'Sosial Bersinar', 'Bantuan Penyandang Disabilitas'),
(26, 'Sosial Bersinar', 'Bantuan Modal Bagi KUBE masyarakat miskin'),
(27, 'Sosial Bersinar', 'Bantuan Kesejahteraan Keluarga Veteran'),
(28, 'Sosial Bersinar', 'Bantuan Kesejahteraan Keluarga Veteran'),
(29, 'Sosial Bersinar', 'Penerima PKH');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_artikel`
--

CREATE TABLE `kategori_artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_artikel`
--

INSERT INTO `kategori_artikel` (`id`, `nama`, `status`, `slug`, `updated_at`) VALUES
(1, 'lifestyle', 'Aktif', 'lifestyle', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id`, `nama`, `slug`, `status`) VALUES
(1, 'olahraga', 'olahraga', 'Aktif'),
(2, 'gaya hidup', 'gaya-hidup', 'Aktif'),
(3, 'keshatan', 'keshatan', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `komen_artikel`
--

CREATE TABLE `komen_artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_artikel` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `isi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `isi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `judul`, `isi`, `link`, `link_text`, `gambar`, `status`) VALUES
(2, 'benteng liya', 'benteng', 'beenteng', 'benteng liya', '1605512067-Benteng Liya Togo (1332 px x 694 px).jpg', 'Aktif'),
(3, 'pantai lakota', 'pantai lakota', 'pantai lakota', 'pantai lakota', '1605512091-Pantai Lakota (1332 px x 694 px).jpg', 'Aktif'),
(4, 'danau sombano', 'danau sombano', 'danau sombano', 'danau sombano', '1605512114-Danau Sombano (1332 px x 694 px).jpg', 'Aktif');

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
  `gambar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'deva', 'deva', 'satriosuklun@gmail.com', NULL, 'Admin', NULL, NULL, '$2y$10$m2RzU7G61c8GE1M/vZJ8jekJ0UGYnapRP8TE18NXqCEly5Xg5Myhu', NULL, '2020-11-07 05:08:04', '2020-11-07 05:08:04'),
(2, 'admin', 'admin', 'admin@admin.com', '20938409238092', 'Super Admin', '1605491479-avatar5.png', NULL, '$2y$10$4HMV5YEBVqID9kBOp6vaoew4KnNtjcAiJGo3/25vc8vo1cZnyI7m.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `singkatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp_satu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp_dua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_energi_sumberdaya`
--
ALTER TABLE `data_energi_sumberdaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_geografis`
--
ALTER TABLE `data_geografis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_indikator_data_strategis`
--
ALTER TABLE `data_indikator_data_strategis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kehutanan`
--
ALTER TABLE `data_kehutanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pajak_retribusi_daerah`
--
ALTER TABLE `data_pajak_retribusi_daerah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pariwisata`
--
ALTER TABLE `data_pariwisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pertanian`
--
ALTER TABLE `data_pertanian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_program_unggulan`
--
ALTER TABLE `data_program_unggulan`
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
-- Indexes for table `input_energi_sumberdaya`
--
ALTER TABLE `input_energi_sumberdaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_geografis`
--
ALTER TABLE `input_geografis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_indikator_data_strategis`
--
ALTER TABLE `input_indikator_data_strategis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_kehutanan`
--
ALTER TABLE `input_kehutanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_pajak_retribusi_daerah`
--
ALTER TABLE `input_pajak_retribusi_daerah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_pariwisata`
--
ALTER TABLE `input_pariwisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_perindustrian`
--
ALTER TABLE `input_perindustrian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_pertanian`
--
ALTER TABLE `input_pertanian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_program_unggulan`
--
ALTER TABLE `input_program_unggulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_energi_sumberdaya`
--
ALTER TABLE `data_energi_sumberdaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_geografis`
--
ALTER TABLE `data_geografis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `data_indikator_data_strategis`
--
ALTER TABLE `data_indikator_data_strategis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_kehutanan`
--
ALTER TABLE `data_kehutanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `data_pajak_retribusi_daerah`
--
ALTER TABLE `data_pajak_retribusi_daerah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_pariwisata`
--
ALTER TABLE `data_pariwisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_pertanian`
--
ALTER TABLE `data_pertanian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_program_unggulan`
--
ALTER TABLE `data_program_unggulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `input_energi_sumberdaya`
--
ALTER TABLE `input_energi_sumberdaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `input_geografis`
--
ALTER TABLE `input_geografis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `input_indikator_data_strategis`
--
ALTER TABLE `input_indikator_data_strategis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `input_kehutanan`
--
ALTER TABLE `input_kehutanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `input_pajak_retribusi_daerah`
--
ALTER TABLE `input_pajak_retribusi_daerah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `input_pariwisata`
--
ALTER TABLE `input_pariwisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `input_perindustrian`
--
ALTER TABLE `input_perindustrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `input_pertanian`
--
ALTER TABLE `input_pertanian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;

--
-- AUTO_INCREMENT for table `input_program_unggulan`
--
ALTER TABLE `input_program_unggulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
