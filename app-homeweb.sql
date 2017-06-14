-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Lun 06 Février 2017 à 23:32
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
(1, 'domisep@isep.fr', 'b68b7c777f8a984e275582af6a660128', '244THG'),
(2, '', '', '746GEV'),
(3, '', '', '875STJ');

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `id` int(255) NOT NULL,
  `numero_capteur` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_data` int(100) NOT NULL,
  `id_client` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `capteur`
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
(10, 'JI876YHBHY78767', 0, '1'),
(11, 'AAAAAAAAAA', 0, ''),
(12, 'BBBBBBBBBB', 0, ''),
(14, 'CCCCCCCCCC', 0, ''),
(15, 'DDDDDDDDDD', 0, ''),
(16, 'EEEEEEEEEE', 0, ''),
(17, 'FFFFFFFFFF', 0, ''),
(18, 'GGGGGGGGGG', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `data`
--

CREATE TABLE `data` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- Structure de la table `domisep_infos`
--

CREATE TABLE `domisep_infos` (
  `id` int(11) NOT NULL,
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `domisep_infos`
--

INSERT INTO `domisep_infos` (`id`, `nom`, `contenu`) VALUES
(1, 'tel', '01 02 03 04 05'),
(2, 'mentions', 'Vos mentions légales :\r\n<h2>Informations légales</h2>\r\n<h3>1. Présentation du site.</h3>\r\n<p>En vertu de l\'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l\'économie numérique, il est précisé aux utilisateurs du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> l\'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>\r\n<p><strong>Propriétaire</strong> : Domisep – 87976789087334738 – 1 rue aux fleurs, 75000 Paris<br />\r\n<strong>Créateur</strong>  : <a href="www.isep.com">ISEP</a><br />\r\n<strong>Responsable publication</strong> : isep – www.isep.fr<br />\r\nLe responsable publication est une personne physique ou une personne morale.<br />\r\n<strong>Webmaster</strong> : Maxime Breviere – www.maxime@isep.fr<br />\r\n<strong>Hébergeur</strong> : hébergeur – www.hebergeur.com<br />\r\nCrédits : les mentions légales ont été générées et offertes par Subdelirium <a target="_blank" href="http://www.subdelirium.com/generateur-de-mentions-legales/" alt="rédaction des mentions légales">Générateur de mentions légales</a></p>\r\n\r\n<h3>2. Conditions générales d’utilisation du site et des services proposés.</h3>\r\n<p>L’utilisation du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> sont donc invités à les consulter de manière régulière.</p>\r\n<p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par Domisep, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>\r\n<p>Le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> est mis à jour régulièrement par isep. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>\r\n<h3>3. Description des services fournis.</h3>\r\n<p>Le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>\r\n<p>Domisep s’efforce de fournir sur le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>\r\n<p>Tous les informations indiquées sur le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>\r\n<h3>4. Limitations contractuelles sur les données techniques.</h3>\r\n<p>Le site utilise la technologie JavaScript.</p>\r\n<p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>\r\n<h3>5. Propriété intellectuelle et contrefaçons.</h3>\r\n<p>Domisep est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>\r\n<p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : Domisep.</p>\r\n<p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>\r\n<h3>6. Limitations de responsabilité.</h3>\r\n<p>Domisep ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site www.homeweb.fr, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>\r\n<p>Domisep ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a>.</p>\r\n<p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. Domisep se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, Domisep se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>\r\n<h3>7. Gestion des données personnelles.</h3>\r\n<p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l\'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>\r\n<p>A l\'occasion de l\'utilisation du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a>, peuvent êtres recueillies : l\'URL des liens par l\'intermédiaire desquels l\'utilisateur a accédé au site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a>, le fournisseur d\'accès de l\'utilisateur, l\'adresse de protocole Internet (IP) de l\'utilisateur.</p>\r\n<p> En tout état de cause Domisep ne collecte des informations personnelles relatives à l\'utilisateur que pour le besoin de certains services proposés par le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a>. L\'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu\'il procède par lui-même à leur saisie. Il est alors précisé à l\'utilisateur du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> l’obligation ou non de fournir ces informations.</p>\r\n<p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>\r\n<p>Aucune information personnelle de l\'utilisateur du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> n\'est publiée à l\'insu de l\'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l\'hypothèse du rachat de Domisep et de ses droits permettrait la transmission des dites informations à l\'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l\'utilisateur du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a>.</p>\r\n<p>Le site n\'est pas déclaré à la CNIL car il ne recueille pas d\'informations personnelles. .</p>\r\n<p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>\r\n<h3>8. Liens hypertextes et cookies.</h3>\r\n<p>Le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de Domisep. Cependant, Domisep n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>\r\n<p>La navigation sur le site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>\r\n<p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>\r\n<p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</p>\r\n<p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l\'onglet Options. Cliquer sur l\'onglet Vie privée.\r\n Paramétrez les Règles de conservation sur :  utiliser les paramètres personnalisés pour l\'historique. Enfin décochez-la pour  désactiver les cookies.</p>\r\n<p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur Paramètres de contenu. Dans la section "Cookies", vous pouvez bloquer les cookies.</p>\r\n<p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur préférences.  Dans l\'onglet "Confidentialité", vous pouvez bloquer les cookies.</p>\r\n\r\n<h3>9. Droit applicable et attribution de juridiction.</h3>\r\n<p>Tout litige en relation avec l’utilisation du site <a href="http://www.homeweb.fr/" title="Domisep - www.homeweb.fr">www.homeweb.fr</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>\r\n<h3>10. Les principales lois concernées.</h3>\r\n<p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l\'informatique, aux fichiers et aux libertés.</p>\r\n<p> Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l\'économie numérique.</p>\r\n<h3>11. Lexique.</h3>\r\n<p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>\r\n<p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l\'identification des personnes physiques auxquelles elles s\'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>'),
(3, 'mail', 'homeweb@isep.fr');

-- --------------------------------------------------------

--
-- Structure de la table `domisep_messagerie`
--

CREATE TABLE `domisep_messagerie` (
  `id` int(11) NOT NULL,
  `mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `objet` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `demande` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `domisep_messagerie`
--

INSERT INTO `domisep_messagerie` (`id`, `mail`, `objet`, `demande`) VALUES
(4, 'noe.faure@isep.fr', 'Mot de passe oublié', 'J\'ai oublié mon mot de passe...');

-- --------------------------------------------------------

--
-- Structure de la table `domisep_probleme`
--

CREATE TABLE `domisep_probleme` (
  `id` int(11) NOT NULL,
  `capteur` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `objet` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `probleme` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `eau`
--

CREATE TABLE `eau` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `consomation` int(11) NOT NULL,
  `prix_eau` float NOT NULL DEFAULT '3.1',
  `numero_effecteur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `eau`
--

INSERT INTO `eau` (`id`, `etat`, `consomation`, `prix_eau`, `numero_effecteur`) VALUES
(1, 1, 14, 3.2, 'NJKUYTRFVBNJ');

-- --------------------------------------------------------

--
-- Structure de la table `elec`
--

CREATE TABLE `elec` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `consomation` int(11) NOT NULL,
  `prix_elec` float NOT NULL DEFAULT '0.5691',
  `numero_effecteur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `elec`
--

INSERT INTO `elec` (`id`, `etat`, `consomation`, `prix_elec`, `numero_effecteur`) VALUES
(1, 0, 375, 0.3, 'IUYTFVBJKLUHB');

-- --------------------------------------------------------

--
-- Structure de la table `gaz`
--

CREATE TABLE `gaz` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `consomation` int(11) NOT NULL,
  `prix_gaz` float NOT NULL DEFAULT '9.5',
  `numero_effecteur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `gaz`
--

INSERT INTO `gaz` (`id`, `etat`, `consomation`, `prix_gaz`, `numero_effecteur`) VALUES
(1, 0, 10, 8.7, 'JGFDRTYHJNB');

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
(3, 1, 'Chambre parentale', 1, 1, 23, 1, 1, 'OIUYT78OK987Y', '2017-01-15', '2017-01-16', 'H654R54T55YGYU', 23),
(4, 1, 'Chambre des enfants', 1, 1, 24, 1, 2, 'PIHBGYUJNUYU', '2017-01-10', '2017-01-08', '9JU76TGT6UHG77', 20),
(5, 1, 'Cuisine', 1, 1, 25, 0, 3, 'GT4567UGFR679', '2017-01-01', '2017-01-09', 'JI876YHBHY78767', 25);

-- --------------------------------------------------------

--
-- Structure de la table `porte`
--

CREATE TABLE `porte` (
  `id` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `numero_effecteur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `porte`
--

INSERT INTO `porte` (`id`, `etat`, `numero_effecteur`) VALUES
(1, 0, 'FGHJHGTRTHBH');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `mail`, `mdp`, `nom`, `prenom`, `adresse`, `tel`) VALUES
(1, 'noe.faure@isep.fr', 'b68b7c777f8a984e275582af6a660128', 'Faure', 'Noé', '28 rue Notre Dame des champs', '06 66 67 68 69');

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
-- Index pour la table `domisep_infos`
--
ALTER TABLE `domisep_infos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `domisep_messagerie`
--
ALTER TABLE `domisep_messagerie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `domisep_probleme`
--
ALTER TABLE `domisep_probleme`
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;
--
-- AUTO_INCREMENT pour la table `domisep_infos`
--
ALTER TABLE `domisep_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `domisep_messagerie`
--
ALTER TABLE `domisep_messagerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `domisep_probleme`
--
ALTER TABLE `domisep_probleme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `eau`
--
ALTER TABLE `eau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `elec`
--
ALTER TABLE `elec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `gaz`
--
ALTER TABLE `gaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `pieces`
--
ALTER TABLE `pieces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `porte`
--
ALTER TABLE `porte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;