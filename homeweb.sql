-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Ven 16 Décembre 2016 à 10:04
-- Version du serveur :  5.6.33
-- Version de PHP :  7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `homeweb`
--

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
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`id`, `nom`, `prenom`, `adresse`, `mail`, `anniversaire`, `tel`, `mdp`) VALUES
(1, 'a', 'a', 'a', 'a@a', '2016-12-08', 1, '1');

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
-- Index pour la table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`Identifiant`),
  ADD UNIQUE KEY `Identifiant` (`Identifiant`);

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
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;