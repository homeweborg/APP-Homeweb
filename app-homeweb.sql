-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2017 at 08:02 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app-homeweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `numero_admin` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`id`, `mail`, `mdp`, `numero_admin`) VALUES
(1, 'domisep@isep.fr', 'b68b7c777f8a984e275582af6a660128', '244THG'),
(2, '', '', '746GEV'),
(3, '', '', '875STJ');

-- --------------------------------------------------------

--
-- Table structure for table `capteur`
--

CREATE TABLE IF NOT EXISTS `capteur` (
  `id` int(255) NOT NULL,
  `numero_capteur` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_data` int(100) NOT NULL,
  `id_client` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `capteur`
--

INSERT INTO `capteur` (`id`, `numero_capteur`, `id_data`, `id_client`) VALUES
(1, 'HBVGFT678IJT6', 0, '1'),
(2, 'VBU765TYU876Y', 0, '1'),
(3, 'LKJHY6789OKJY', 0, '1'),
(4, 'HGFRT87TGHUR8', 0, '1'),
(5, 'OIUYT78OK987Y', 0, '1'),
(6, 'H654R54T55YGYU', 0, '1'),
(7, 'PIHBGYUJNUYU', 0, '1'),
(8, '9JU76TGT6UHG77', 0, '1'),
(9, 'GT4567UGFR679', 0, '1'),
(10, 'JI876YHBHY78767', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL,
  `type_trame` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero_objet` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type_requete` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type_capteur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero_capteur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valeur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero_trame` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `checksum` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_recep` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_capteur` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `type_trame`, `numero_objet`, `type_requete`, `type_capteur`, `numero_capteur`, `valeur`, `numero_trame`, `checksum`, `date_recep`, `id_capteur`) VALUES
(1, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(2, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(3, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(4, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(5, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(6, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(7, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(8, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(9, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(10, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(11, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(12, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(13, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(14, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(15, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(16, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(17, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(18, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(19, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(20, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(21, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(22, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(23, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(24, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(25, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(26, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(27, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(28, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(29, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(30, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(31, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(32, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(33, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(34, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(35, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(36, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(37, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(38, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(39, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(40, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(41, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(42, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(43, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(44, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(45, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(46, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(47, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(48, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(49, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(50, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(51, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(52, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(53, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(54, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(55, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(56, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(57, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(58, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(59, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(60, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(61, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(62, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(63, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(64, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(65, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(66, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(67, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(68, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(69, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(70, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(71, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(72, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(73, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(74, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(75, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(76, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(77, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(78, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(79, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(80, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(81, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(82, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(83, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(84, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(85, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(86, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(87, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(88, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(89, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(90, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(91, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(92, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(93, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(94, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(95, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(96, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(97, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(98, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(99, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(100, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(101, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(102, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(103, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(104, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(105, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(106, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(107, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(108, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(109, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(110, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(111, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(112, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(113, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(114, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(115, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(116, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(117, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(118, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(119, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(120, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(121, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(122, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(123, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(124, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(125, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(126, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(127, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(128, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(129, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(130, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(131, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(132, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(133, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(134, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(135, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(136, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(137, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(138, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(139, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(140, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(141, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(142, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(143, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(144, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(145, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(146, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(147, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(148, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(149, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(150, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(151, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(152, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(153, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(154, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(155, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(156, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(157, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(158, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(159, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(160, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(161, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(162, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(163, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(164, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(165, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(166, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(167, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(168, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(169, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(170, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(171, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(172, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(173, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(174, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(175, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(176, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(177, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(178, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(179, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(180, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(181, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(182, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(183, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(184, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(185, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(186, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(187, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(188, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(189, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(190, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', ''),
(191, '1', '0002', '1', '4', '01', '0048', '0124', '00', '2017-01-02 12:34:56', '');

-- --------------------------------------------------------

--
-- Table structure for table `domisep_infos`
--

CREATE TABLE IF NOT EXISTS `domisep_infos` (
  `id` int(11) NOT NULL,
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `domisep_infos`
--

INSERT INTO `domisep_infos` (`id`, `nom`, `contenu`) VALUES
(1, 'tel', '01 02 03 04 05'),
(2, 'mentions', 'Vos mentions lÃ©gales :\r\n<h2>Informations lÃ©gales</h2>\r\n<h3>1. PrÃ©sentation du site.</h3>\r\n<p>En vertu de l''article 6 de la loi nÂ° 2004-575 du 21 juin 2004 pour la confiance dans l''Ã©conomie numÃ©rique, il est prÃ©cisÃ© aux utilisateurs du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> l''identitÃ© des diffÃ©rents intervenants dans le cadre de sa rÃ©alisation et de son suivi :</p>\r\n<p><strong>PropriÃ©taire</strong> : Domisep â€“ 87976789087334738 â€“ 1 rue aux fleurs, 75000 Paris<br />\r\n<strong>CrÃ©ateur</strong>  : <a href="www.isep.com">ISEP</a><br />\r\n<strong>Responsable publication</strong> : isep â€“ www.isep.fr<br />\r\nLe responsable publication est une personne physique ou une personne morale.<br />\r\n<strong>Webmaster</strong> : Maxime Breviere â€“ www.maxime@isep.fr<br />\r\n<strong>HÃ©bergeur</strong> : hÃ©bergeur â€“ www.hebergeur.com<br />\r\nCrÃ©dits : les mentions lÃ©gales ont Ã©tÃ© gÃ©nÃ©rÃ©es et offertes par Subdelirium <a target="_blank" href="http://www.subdelirium.com/generateur-de-mentions-legales/" alt="rÃ©daction des mentions lÃ©gales">GÃ©nÃ©rateur de mentions lÃ©gales</a></p>\r\n\r\n<h3>2. Conditions gÃ©nÃ©rales dâ€™utilisation du site et des services proposÃ©s.</h3>\r\n<p>Lâ€™utilisation du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> implique lâ€™acceptation pleine et entiÃ¨re des conditions gÃ©nÃ©rales dâ€™utilisation ci-aprÃ¨s dÃ©crites. Ces conditions dâ€™utilisation sont susceptibles dâ€™Ãªtre modifiÃ©es ou complÃ©tÃ©es Ã  tout moment, les utilisateurs du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> sont donc invitÃ©s Ã  les consulter de maniÃ¨re rÃ©guliÃ¨re.</p>\r\n<p>Ce site est normalement accessible Ã  tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut Ãªtre toutefois dÃ©cidÃ©e par Domisep, qui sâ€™efforcera alors de communiquer prÃ©alablement aux utilisateurs les dates et heures de lâ€™intervention.</p>\r\n<p>Le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> est mis Ã  jour rÃ©guliÃ¨rement par isep. De la mÃªme faÃ§on, les mentions lÃ©gales peuvent Ãªtre modifiÃ©es Ã  tout moment : elles sâ€™imposent nÃ©anmoins Ã  lâ€™utilisateur qui est invitÃ© Ã  sâ€™y rÃ©fÃ©rer le plus souvent possible afin dâ€™en prendre connaissance.</p>\r\n<h3>3. Description des services fournis.</h3>\r\n<p>Le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> a pour objet de fournir une information concernant lâ€™ensemble des activitÃ©s de la sociÃ©tÃ©.</p>\r\n<p>Domisep sâ€™efforce de fournir sur le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> des informations aussi prÃ©cises que possible. Toutefois, il ne pourra Ãªtre tenue responsable des omissions, des inexactitudes et des carences dans la mise Ã  jour, quâ€™elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>\r\n<p>Tous les informations indiquÃ©es sur le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> sont donnÃ©es Ã  titre indicatif, et sont susceptibles dâ€™Ã©voluer. Par ailleurs, les renseignements figurant sur le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> ne sont pas exhaustifs. Ils sont donnÃ©s sous rÃ©serve de modifications ayant Ã©tÃ© apportÃ©es depuis leur mise en ligne.</p>\r\n<h3>4. Limitations contractuelles sur les donnÃ©es techniques.</h3>\r\n<p>Le site utilise la technologie JavaScript.</p>\r\n<p>Le site Internet ne pourra Ãªtre tenu responsable de dommages matÃ©riels liÃ©s Ã  lâ€™utilisation du site. De plus, lâ€™utilisateur du site sâ€™engage Ã  accÃ©der au site en utilisant un matÃ©riel rÃ©cent, ne contenant pas de virus et avec un navigateur de derniÃ¨re gÃ©nÃ©ration mis-Ã -jour</p>\r\n<h3>5. PropriÃ©tÃ© intellectuelle et contrefaÃ§ons.</h3>\r\n<p>Domisep est propriÃ©taire des droits de propriÃ©tÃ© intellectuelle ou dÃ©tient les droits dâ€™usage sur tous les Ã©lÃ©ments accessibles sur le site, notamment les textes, images, graphismes, logo, icÃ´nes, sons, logiciels.</p>\r\n<p>Toute reproduction, reprÃ©sentation, modification, publication, adaptation de tout ou partie des Ã©lÃ©ments du site, quel que soit le moyen ou le procÃ©dÃ© utilisÃ©, est interdite, sauf autorisation Ã©crite prÃ©alable de : Domisep.</p>\r\n<p>Toute exploitation non autorisÃ©e du site ou de lâ€™un quelconque des Ã©lÃ©ments quâ€™il contient sera considÃ©rÃ©e comme constitutive dâ€™une contrefaÃ§on et poursuivie conformÃ©ment aux dispositions des articles L.335-2 et suivants du Code de PropriÃ©tÃ© Intellectuelle.</p>\r\n<h3>6. Limitations de responsabilitÃ©.</h3>\r\n<p>Domisep ne pourra Ãªtre tenue responsable des dommages directs et indirects causÃ©s au matÃ©riel de lâ€™utilisateur, lors de lâ€™accÃ¨s au site www.homeweb.fr, et rÃ©sultant soit de lâ€™utilisation dâ€™un matÃ©riel ne rÃ©pondant pas aux spÃ©cifications indiquÃ©es au point 4, soit de lâ€™apparition dâ€™un bug ou dâ€™une incompatibilitÃ©.</p>\r\n<p>Domisep ne pourra Ã©galement Ãªtre tenue responsable des dommages indirects (tels par exemple quâ€™une perte de marchÃ© ou perte dâ€™une chance) consÃ©cutifs Ã  lâ€™utilisation du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a>.</p>\r\n<p>Des espaces interactifs (possibilitÃ© de poser des questions dans lâ€™espace contact) sont Ã  la disposition des utilisateurs. Domisep se rÃ©serve le droit de supprimer, sans mise en demeure prÃ©alable, tout contenu dÃ©posÃ© dans cet espace qui contreviendrait Ã  la lÃ©gislation applicable en France, en particulier aux dispositions relatives Ã  la protection des donnÃ©es. Le cas Ã©chÃ©ant, Domisep se rÃ©serve Ã©galement la possibilitÃ© de mettre en cause la responsabilitÃ© civile et/ou pÃ©nale de lâ€™utilisateur, notamment en cas de message Ã  caractÃ¨re raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisÃ© (texte, photographieâ€¦).</p>\r\n<h3>7. Gestion des donnÃ©es personnelles.</h3>\r\n<p>En France, les donnÃ©es personnelles sont notamment protÃ©gÃ©es par la loi nÂ° 78-87 du 6 janvier 1978, la loi nÂ° 2004-801 du 6 aoÃ»t 2004, l''article L. 226-13 du Code pÃ©nal et la Directive EuropÃ©enne du 24 octobre 1995.</p>\r\n<p>A l''occasion de l''utilisation du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a>, peuvent Ãªtres recueillies : l''URL des liens par l''intermÃ©diaire desquels l''utilisateur a accÃ©dÃ© au site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a>, le fournisseur d''accÃ¨s de l''utilisateur, l''adresse de protocole Internet (IP) de l''utilisateur.</p>\r\n<p> En tout Ã©tat de cause Domisep ne collecte des informations personnelles relatives Ã  l''utilisateur que pour le besoin de certains services proposÃ©s par le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a>. L''utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu''il procÃ¨de par lui-mÃªme Ã  leur saisie. Il est alors prÃ©cisÃ© Ã  l''utilisateur du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> lâ€™obligation ou non de fournir ces informations.</p>\r\n<p>ConformÃ©ment aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative Ã  lâ€™informatique, aux fichiers et aux libertÃ©s, tout utilisateur dispose dâ€™un droit dâ€™accÃ¨s, de rectification et dâ€™opposition aux donnÃ©es personnelles le concernant, en effectuant sa demande Ã©crite et signÃ©e, accompagnÃ©e dâ€™une copie du titre dâ€™identitÃ© avec signature du titulaire de la piÃ¨ce, en prÃ©cisant lâ€™adresse Ã  laquelle la rÃ©ponse doit Ãªtre envoyÃ©e.</p>\r\n<p>Aucune information personnelle de l''utilisateur du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> n''est publiÃ©e Ã  l''insu de l''utilisateur, Ã©changÃ©e, transfÃ©rÃ©e, cÃ©dÃ©e ou vendue sur un support quelconque Ã  des tiers. Seule l''hypothÃ¨se du rachat de Domisep et de ses droits permettrait la transmission des dites informations Ã  l''Ã©ventuel acquÃ©reur qui serait Ã  son tour tenu de la mÃªme obligation de conservation et de modification des donnÃ©es vis Ã  vis de l''utilisateur du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a>.</p>\r\n<p>Le site n''est pas dÃ©clarÃ© Ã  la CNIL car il ne recueille pas d''informations personnelles. .</p>\r\n<p>Les bases de donnÃ©es sont protÃ©gÃ©es par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative Ã  la protection juridique des bases de donnÃ©es.</p>\r\n<h3>8. Liens hypertextes et cookies.</h3>\r\n<p>Le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> contient un certain nombre de liens hypertextes vers dâ€™autres sites, mis en place avec lâ€™autorisation de Domisep. Cependant, Domisep nâ€™a pas la possibilitÃ© de vÃ©rifier le contenu des sites ainsi visitÃ©s, et nâ€™assumera en consÃ©quence aucune responsabilitÃ© de ce fait.</p>\r\n<p>La navigation sur le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> est susceptible de provoquer lâ€™installation de cookie(s) sur lâ€™ordinateur de lâ€™utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas lâ€™identification de lâ€™utilisateur, mais qui enregistre des informations relatives Ã  la navigation dâ€™un ordinateur sur un site. Les donnÃ©es ainsi obtenues visent Ã  faciliter la navigation ultÃ©rieure sur le site, et ont Ã©galement vocation Ã  permettre diverses mesures de frÃ©quentation.</p>\r\n<p>Le refus dâ€™installation dâ€™un cookie peut entraÃ®ner lâ€™impossibilitÃ© dâ€™accÃ©der Ã  certains services. Lâ€™utilisateur peut toutefois configurer son ordinateur de la maniÃ¨re suivante, pour refuser lâ€™installation des cookies :</p>\r\n<p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur ConfidentialitÃ© et choisissez Bloquer tous les cookies. Validez sur Ok.</p>\r\n<p>Sous Firefox : en haut de la fenÃªtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l''onglet Options. Cliquer sur l''onglet Vie privÃ©e.\r\n ParamÃ©trez les RÃ¨gles de conservation sur :  utiliser les paramÃ¨tres personnalisÃ©s pour l''historique. Enfin dÃ©cochez-la pour  dÃ©sactiver les cookies.</p>\r\n<p>Sous Safari : Cliquez en haut Ã  droite du navigateur sur le pictogramme de menu (symbolisÃ© par un rouage). SÃ©lectionnez ParamÃ¨tres. Cliquez sur Afficher les paramÃ¨tres avancÃ©s. Dans la section "ConfidentialitÃ©", cliquez sur ParamÃ¨tres de contenu. Dans la section "Cookies", vous pouvez bloquer les cookies.</p>\r\n<p>Sous Chrome : Cliquez en haut Ã  droite du navigateur sur le pictogramme de menu (symbolisÃ© par trois lignes horizontales). SÃ©lectionnez ParamÃ¨tres. Cliquez sur Afficher les paramÃ¨tres avancÃ©s. Dans la section "ConfidentialitÃ©", cliquez sur prÃ©fÃ©rences.  Dans l''onglet "ConfidentialitÃ©", vous pouvez bloquer les cookies.</p>\r\n\r\n<h3>9. Droit applicable et attribution de juridiction.</h3>\r\n<p>Tout litige en relation avec lâ€™utilisation du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> est soumis au droit franÃ§ais. Il est fait attribution exclusive de juridiction aux tribunaux compÃ©tents de Paris.</p>\r\n<h3>10. Les principales lois concernÃ©es.</h3>\r\n<p>Loi nÂ° 78-17 du 6 janvier 1978, notamment modifiÃ©e par la loi nÂ° 2004-801 du 6 aoÃ»t 2004 relative Ã  l''informatique, aux fichiers et aux libertÃ©s.</p>\r\n<p> Loi nÂ° 2004-575 du 21 juin 2004 pour la confiance dans l''Ã©conomie numÃ©rique.</p>\r\n<h3>11. Lexique.</h3>\r\n<p>Utilisateur : Internaute se connectant, utilisant le site susnommÃ©.</p>\r\n<p>Informations personnelles : Â« les informations qui permettent, sous quelque forme que ce soit, directement ou non, l''identification des personnes physiques auxquelles elles s''appliquent Â» (article 4 de la loi nÂ° 78-17 du 6 janvier 1978).</p>'),
(3, 'mail', 'homeweb@isep.fr');

-- --------------------------------------------------------

--
-- Table structure for table `domisep_messagerie`
--

CREATE TABLE IF NOT EXISTS `domisep_messagerie` (
  `id` int(11) NOT NULL,
  `mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `objet` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `demande` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `domisep_messagerie`
--

INSERT INTO `domisep_messagerie` (`id`, `mail`, `objet`, `demande`) VALUES
(4, 'noe.faure@isep.fr', 'Mot de passe oubliÃ©', 'J''ai oubliÃ© mon mot de passe...');

-- --------------------------------------------------------

--
-- Table structure for table `domisep_probleme`
--

CREATE TABLE IF NOT EXISTS `domisep_probleme` (
  `id` int(11) NOT NULL,
  `capteur` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `objet` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `probleme` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `domisep_probleme`
--

INSERT INTO `domisep_probleme` (`id`, `capteur`, `objet`, `probleme`, `id_user`) VALUES
(1, '54353453453', '', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `eau`
--

CREATE TABLE IF NOT EXISTS `eau` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `consomation` int(11) NOT NULL,
  `prix_eau` float NOT NULL DEFAULT '3.1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eau`
--

INSERT INTO `eau` (`id`, `etat`, `consomation`, `prix_eau`) VALUES
(1, 0, 14, 3.2);

-- --------------------------------------------------------

--
-- Table structure for table `elec`
--

CREATE TABLE IF NOT EXISTS `elec` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `consomation` int(11) NOT NULL,
  `prix_elec` float NOT NULL DEFAULT '0.5691'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `elec`
--

INSERT INTO `elec` (`id`, `etat`, `consomation`, `prix_elec`) VALUES
(1, 0, 375, 0.3);

-- --------------------------------------------------------

--
-- Table structure for table `gaz`
--

CREATE TABLE IF NOT EXISTS `gaz` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `consomation` int(11) NOT NULL,
  `prix_gaz` float NOT NULL DEFAULT '9.5'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gaz`
--

INSERT INTO `gaz` (`id`, `etat`, `consomation`, `prix_gaz`) VALUES
(1, 0, 10, 8.7);

-- --------------------------------------------------------

--
-- Table structure for table `pieces`
--

CREATE TABLE IF NOT EXISTS `pieces` (
  `id` int(11) NOT NULL,
  `id_Utilisateur` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `presence_temp` int(11) NOT NULL,
  `presence_lum` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  `lumiere` int(11) NOT NULL,
  `etat_temp` int(11) NOT NULL,
  `numero_capteur_t` varchar(250) NOT NULL,
  `control_tech_t` date NOT NULL,
  `control_tech_l` date NOT NULL,
  `numero_capteur_l` varchar(250) NOT NULL,
  `consigne_temp` int(11) NOT NULL DEFAULT '25'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pieces`
--

INSERT INTO `pieces` (`id`, `id_Utilisateur`, `Nom`, `presence_temp`, `presence_lum`, `temperature`, `lumiere`, `etat_temp`, `numero_capteur_t`, `control_tech_t`, `control_tech_l`, `numero_capteur_l`, `consigne_temp`) VALUES
(1, 1, 'Salon', 1, 1, 21, 0, 1, 'HBVGFT678IJT6', '2017-01-02', '2017-01-02', 'VBU765TYU876Y', 21),
(2, 1, 'Salle de bain', 1, 1, 22, 1, 0, 'LKJHY6789OKJY', '2017-01-09', '2017-01-17', 'HGFRT87TGHUR8', 22),
(3, 1, 'Chambre parentale', 1, 1, 23, 1, 1, 'OIUYT78OK987Y', '2017-01-15', '2017-01-16', 'H654R54T55YGYU', 23),
(4, 1, 'Chambre des enfants', 1, 1, 24, 1, 2, 'PIHBGYUJNUYU', '2017-01-10', '2017-01-08', '9JU76TGT6UHG77', 20),
(5, 1, 'Cuisine', 1, 1, 25, 0, 3, 'GT4567UGFR679', '2017-01-01', '2017-01-09', 'JI876YHBHY78767', 25);

-- --------------------------------------------------------

--
-- Table structure for table `porte`
--

CREATE TABLE IF NOT EXISTS `porte` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `porte`
--

INSERT INTO `porte` (`id`, `etat`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `tel` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `mail`, `mdp`, `nom`, `prenom`, `adresse`, `tel`) VALUES
(1, 'noe.faure@isep.fr', 'b68b7c777f8a984e275582af6a660128', 'Faure', 'NoÃ©', '28 rue Notre Dame des champs', '06 66 67 68 69'),
(2, 'maxime.breviere@isep.fr', 'b68b7c777f8a984e275582af6a660128', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domisep_infos`
--
ALTER TABLE `domisep_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domisep_messagerie`
--
ALTER TABLE `domisep_messagerie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domisep_probleme`
--
ALTER TABLE `domisep_probleme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eau`
--
ALTER TABLE `eau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elec`
--
ALTER TABLE `elec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaz`
--
ALTER TABLE `gaz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pieces`
--
ALTER TABLE `pieces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porte`
--
ALTER TABLE `porte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=192;
--
-- AUTO_INCREMENT for table `domisep_infos`
--
ALTER TABLE `domisep_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `domisep_messagerie`
--
ALTER TABLE `domisep_messagerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `domisep_probleme`
--
ALTER TABLE `domisep_probleme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `eau`
--
ALTER TABLE `eau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `elec`
--
ALTER TABLE `elec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gaz`
--
ALTER TABLE `gaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pieces`
--
ALTER TABLE `pieces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `porte`
--
ALTER TABLE `porte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
