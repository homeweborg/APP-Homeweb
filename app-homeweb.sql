-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Sam 14 Janvier 2017 à 19:35
-- Version du serveur :  5.5.49-log
-- Version de PHP :  7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `app-homeweb`
--

CREATE DATABASE `app-homeweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `app-homeweb`;

-- --------------------------------------------------------

-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Lun 23 Janvier 2017 à 14:18
-- Version du serveur :  5.6.33
-- Version de PHP :  7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `app-homeweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `numero_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `mail`, `mdp`, `numero_admin`) VALUES
(1, 'antoine.deleuze@isep.fr', 'b68b7c777f8a984e275582af6a660128', '244THG'),
(2, '', '', '746GEV'),
(3, '', '', '875STJ');

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `id` int(255) NOT NULL,
  `numero_capteur` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `etat` int(10) NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_client` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `capteur`
--

INSERT INTO `capteur` (`id`, `numero_capteur`, `etat`, `type`, `id_client`) VALUES
(1, 'A1B2C3D4E5', 0, 'ELEC', '');

-- --------------------------------------------------------

--
-- Structure de la table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `data` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `numero_capteur` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `domisep`
--

CREATE TABLE `domisep` (
  `id` int(11) NOT NULL,
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `domisep`
--

INSERT INTO `domisep` (`id`, `nom`, `contenu`) VALUES
(1, 'cgu', ''),
(2, 'mentions', ''),
(3, 'mail', '');

-- --------------------------------------------------------

--
-- Structure de la table `eau`
--

CREATE TABLE `eau` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `consomation` int(11) NOT NULL,
  `prix_eau` float NOT NULL DEFAULT '3.1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `eau`
--

INSERT INTO `eau` (`id`, `etat`, `consomation`, `prix_eau`) VALUES
(1, 0, 14, 3.4);

-- --------------------------------------------------------

--
-- Structure de la table `elec`
--

CREATE TABLE `elec` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `consomation` int(11) NOT NULL,
  `prix_elec` float NOT NULL DEFAULT '0.5691'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `elec`
--

INSERT INTO `elec` (`id`, `etat`, `consomation`, `prix_elec`) VALUES
(1, 0, 375, 0.5691);

-- --------------------------------------------------------

--
-- Structure de la table `gaz`
--

CREATE TABLE `gaz` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `consomation` int(11) NOT NULL,
  `prix_gaz` float NOT NULL DEFAULT '9.5'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `gaz`
--

INSERT INTO `gaz` (`id`, `etat`, `consomation`, `prix_gaz`) VALUES
(1, 1, 10, 10);

-- --------------------------------------------------------

--
-- Structure de la table `maintenance`
--

CREATE TABLE `maintenance` (
  `Nom` text NOT NULL,
  `Prénom` text NOT NULL,
  `Identifiant` int(10) NOT NULL,
  `Mot de passe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pieces`
--

CREATE TABLE `pieces` (
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
-- Contenu de la table `pieces`
--

INSERT INTO `pieces` (`id`, `id_Utilisateur`, `Nom`, `presence_temp`, `presence_lum`, `temperature`, `lumiere`, `etat_temp`, `numero_capteur_t`, `control_tech_t`, `control_tech_l`, `numero_capteur_l`, `consigne_temp`) VALUES
(1, 1, 'Salon', 1, 1, 21, 0, 1, 'HBVGFT678IJT6', '2017-01-02', '2017-01-02', 'VBU765TYU876Y', 21),
(2, 1, 'Salle de bain', 1, 1, 22, 1, 0, 'LKJHY6789OKJY', '2017-01-09', '2017-01-17', 'HGFRT87TGHUR8', 22),
(3, 1, 'Chambre parentale', 1, 1, 23, 1, 1, 'OIUYT78OK987Y', '2017-01-15', '2017-01-16', 'H654R54T55YGYU', 23),
(4, 1, 'Chambre des enfants', 1, 1, 24, 1, 2, 'PIHBGYUJNUYU', '2017-01-10', '2017-01-08', '9JU76TGT6UHG77', 20),
(5, 1, 'Cuisine', 1, 1, 25, 0, 3, 'GT4567UGFR679', '2017-01-01', '2017-01-09', 'JI876YHBHY78767', 25);

-- --------------------------------------------------------

--
-- Structure de la table `porte`
--

CREATE TABLE `porte` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `porte`
--

INSERT INTO `porte` (`id`, `etat`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `problemes`
--

CREATE TABLE `problemes` (
  `id` int(11) NOT NULL,
  `probleme` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `numero_capteur` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `etat_general` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `mail`, `mdp`, `etat_general`) VALUES
(1, 'noe.faure@isep.fr', 'b68b7c777f8a984e275582af6a660128', 0),
(12, '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(13, '', 'd41d8cd98f00b204e9800998ecf8427e', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `domisep`
--
ALTER TABLE `domisep`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `eau`
--
ALTER TABLE `eau`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `elec`
--
ALTER TABLE `elec`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gaz`
--
ALTER TABLE `gaz`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`Identifiant`),
  ADD UNIQUE KEY `Identifiant` (`Identifiant`);

--
-- Index pour la table `pieces`
--
ALTER TABLE `pieces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `porte`
--
ALTER TABLE `porte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `problemes`
--
ALTER TABLE `problemes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `domisep`
--
ALTER TABLE `domisep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `eau`
--
ALTER TABLE `eau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `elec`
--
ALTER TABLE `elec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `gaz`
--
ALTER TABLE `gaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `pieces`
--
ALTER TABLE `pieces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `porte`
--
ALTER TABLE `porte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `problemes`
--
ALTER TABLE `problemes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;