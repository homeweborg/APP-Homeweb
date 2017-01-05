-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Jeu 05 Janvier 2017 à 09:57
-- Version du serveur :  5.6.33
-- Version de PHP :  7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `homeweb`
--

CREATE DATABASE `app-homeweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `app-homeweb`;

-- --------------------------------------------------------

--
-- Structure de la table `eau`
--

CREATE TABLE `eau` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `consomation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `eau`
--

INSERT INTO `eau` (`id`, `etat`, `consomation`) VALUES
(1, 1, 14);

-- --------------------------------------------------------

--
-- Structure de la table `elec`
--

CREATE TABLE `elec` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `consomation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `elec`
--

INSERT INTO `elec` (`id`, `etat`, `consomation`) VALUES
(1, 0, 375);

-- --------------------------------------------------------

--
-- Structure de la table `gaz`
--

CREATE TABLE `gaz` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `consomation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `gaz`
--

INSERT INTO `gaz` (`id`, `etat`, `consomation`) VALUES
(1, 0, 10);

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
-- Structure de la table `Pieces`
--

CREATE TABLE `Pieces` (
  `id` int(11) NOT NULL,
  `id_Utilisateur` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `presence_temp` int(11) NOT NULL,
  `presence_lum` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  `lumiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Pieces`
--

INSERT INTO `Pieces` (`id`, `id_Utilisateur`, `Nom`, `presence_temp`, `presence_lum`, `temperature`, `lumiere`) VALUES
(1, 1, 'Salon', 1, 1, 21, 0),
(2, 1, 'Salle de bain', 1, 1, 22, 0),
(3, 1, 'Chambre parentale', 1, 1, 23, 0),
(4, 1, 'Chambre des enfants', 1, 1, 24, 0),
(5, 1, 'Cuisine', 1, 1, 25, 0),
(6, 1, 'Garage', 0, 0, -1, -1);

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
-- Structure de la table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` text NOT NULL,
  `mail` varchar(255) NOT NULL,
  `anniversaire` date NOT NULL,
  `tel` int(20) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `Numero_Homeweb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`id`, `nom`, `prenom`, `adresse`, `mail`, `anniversaire`, `tel`, `mdp`, `Numero_Homeweb`) VALUES
(1, 'a', 'a', 'a', 'a@a', '2016-12-08', 1, '426c2f688f30daeeaa9bcfe5f29f5569', 2017),
(2, 'Faure', 'Noe', '6 place de la république', 'noefaure@orange.fr', '2001-08-24', 1, '1', 0);

-- --------------------------------------------------------

--
-- Structure de la table `webmaster`
--

CREATE TABLE `webmaster` (
  `Nom` text NOT NULL,
  `Prénom` text NOT NULL,
  `Identifiant` int(10) NOT NULL,
  `Mot de passe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

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
-- Index pour la table `Pieces`
--
ALTER TABLE `Pieces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `porte`
--
ALTER TABLE `porte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `webmaster`
--
ALTER TABLE `webmaster`
  ADD PRIMARY KEY (`Identifiant`),
  ADD UNIQUE KEY `Identifiant` (`Identifiant`);

--
-- AUTO_INCREMENT pour les tables exportées
--

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
-- AUTO_INCREMENT pour la table `Pieces`
--
ALTER TABLE `Pieces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `porte`
--
ALTER TABLE `porte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;