-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2017 at 09:29 AM
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

CREATE DATABASE `app-homeweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `app-homeweb`;

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `numero_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`id`, `mail`, `mdp`, `numero_admin`) VALUES
(1, 'antoine.deleuze@isep.fr', 'b68b7c777f8a984e275582af6a660128', '244THG'),
(2, '', '', '746GEV'),
(3, '', '', '875STJ');

-- --------------------------------------------------------

--
-- Table structure for table `capteur`
--

CREATE TABLE IF NOT EXISTS `capteur` (
  `id` int(255) NOT NULL,
  `numero_capteur` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `etat` int(10) NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_client` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `capteur`
--

INSERT INTO `capteur` (`id`, `numero_capteur`, `etat`, `type`, `id_client`) VALUES
(1, 'A1B2C3D4E5', 0, 'ELEC', '14');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL,
  `data` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `numero_capteur` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `domisep_infos`
--

CREATE TABLE IF NOT EXISTS `domisep_infos` (
  `id` int(11) NOT NULL,
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `domisep_infos`
--

INSERT INTO `domisep_infos` (`id`, `nom`, `contenu`) VALUES
(1, 'cgu', 'coucou'),
(2, 'mentions', ''),
(3, 'mail', 'domisep@isep.fr');

-- --------------------------------------------------------

--
-- Table structure for table `domisep_messagerie`
--

CREATE TABLE IF NOT EXISTS `domisep_messagerie` (
  `id` int(11) NOT NULL,
  `mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `objet` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `demande` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `domisep_messagerie`
--

INSERT INTO `domisep_messagerie` (`id`, `mail`, `objet`, `demande`) VALUES
(1, 'noe.faure@isep.fr', 'zegzgzga', 'eegzhhhzy\r\n'),
(2, 'noe.faure@isep.fr', 'gethrayja', 'nsty,ejeu\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `domisep_probleme`
--

CREATE TABLE IF NOT EXISTS `domisep_probleme` (
  `id` int(11) NOT NULL,
  `capteur` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `probleme` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `domisep_probleme`
--

INSERT INTO `domisep_probleme` (`id`, `capteur`, `probleme`, `id_user`) VALUES
(1, '54353453453', '0', '1'),
(0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `eau`
--

CREATE TABLE IF NOT EXISTS `eau` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `consomation` int(11) NOT NULL,
  `prix_eau` float NOT NULL DEFAULT '3.1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `Nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `tel` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `mail`, `mdp`, `Nom`, `prenom`, `adresse`, `tel`) VALUES
(1, 'noe.faure@isep.fr', 'b68b7c777f8a984e275582af6a660128', '0', '', '', ''),
(2, 'maxime.breviere@isep.fr', 'b68b7c777f8a984e275582af6a660128', '0', '', '', '');

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
-- Indexes for table `pieces`
--
ALTER TABLE `pieces`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
