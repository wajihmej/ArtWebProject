-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 05 oct. 2021 à 13:24
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_art`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `prix_total` float NOT NULL,
  `quatite` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`id`, `id_prod`, `id_utilisateur`, `prix_total`, `quatite`, `type`) VALUES
(34, 7, 13, 200, 1, 'tableaux'),
(35, 6, 13, 44, 1, 'cadeaux'),
(36, 9, 13, 92, 4, 'tableaux'),
(37, 10, 13, 2031, 3, 'tableaux'),
(38, 5, 13, 238, 7, 'cadeaux'),
(40, 7, 13, 800, 4, 'tableaux'),
(41, 5, 13, 34, 1, 'cadeaux'),
(42, 9, 13, 23, 1, 'tableaux'),
(43, 11, 13, 66, 1, 'tableaux'),
(44, 9, 14, 23, 1, 'tableaux');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mdp` varchar(3000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tel` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `dernier_acc` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `email`, `mdp`, `tel`, `image`, `dernier_acc`) VALUES
(20, 'Wajihhh', 'wajih.mejri@esprit.tn', '$2y$10$uYSTANhpojuST3btquditOy1DMdF.WqnKnAgQuBwslY3iOUVsuU0.', 20332985, './assets/images/admin/164493888_284973556490314_220761501831044655_n.jpg', '2021-08-20 00:51:08');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(5) NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  `id_client` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `description`, `date`, `id_client`) VALUES
(2, 'FEAF', 'EFAF', '2021-04-25 15:39:36', 10),
(3, 'fea', 'eafef', '2021-04-25 16:00:58', 10),
(4, 'ttt', 'gffgcgb', '2021-05-02 16:32:16', 10),
(7, 'efaf', 'eafeaf', '2021-05-02 23:32:39', 10),
(8, 'fea', 'feafeaf', '2021-05-09 04:34:24', 11),
(9, 'FEA', 'feaffeaf', '2021-05-11 05:59:39', 13);

-- --------------------------------------------------------

--
-- Structure de la table `cadeaux`
--

CREATE TABLE `cadeaux` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `cadeaux`
--

INSERT INTO `cadeaux` (`id`, `id_utilisateur`, `nom`, `prix`, `image`) VALUES
(5, 11, 'ff', 34, './images/produit/Ooredoo.svg.png'),
(6, 13, 'aaa', 44, './images/produit/cap6.PNG'),
(7, 13, 'fea', 333, './images/produit/cap5.PNG'),
(8, 13, 'FFEAF', 88, './images/produit/164891437_108227558026342_5473483835988880961_n.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mdp` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sexe` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_nais` date DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `mdp`, `tel`, `adresse`, `sexe`, `date_nais`, `image`) VALUES
(11, 'WAJ', 'MEJ', 'wajihfidodido@gmail.com', '$2y$10$2NCwik9wI3guRLrlxY0FEesp497RJM40vnbsFNAZzyugub9bYr9R6', 20332985, '6 RUE KAMEROUN', 'Homme', '2021-04-15', './images/client/164493888_284973556490314_220761501831044655_n.jpg'),
(13, 'Mejri', 'Wajih', 'wajih.mejri@esprit.tn', '$2y$10$A/xXuPy2SHnK/5INqLCFKepy8L1O5InsZwW93FMA/zQWsf7/vuEDm', 20332999, '11 rue Côte d\'Ivoire', 'Homme', '2021-05-11', './images/client/cap5.PNG'),
(14, 'fea', 'khedhira', 'wajihfidodido@gmail.com', '$2y$10$H8GY6ehwTHvwo9mYbL0v2OjM.g1iPOb3A6nOUwAASdcFZ9XPVyLgG', 20332985, '6 RUE KAMEROUN', 'Homme', '2021-05-27', './images/client/164493888_284973556490314_220761501831044655_n.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(5) NOT NULL,
  `commentaire` text COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  `id_client` int(5) NOT NULL,
  `id_article` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `commentaire`, `date`, `id_client`, `id_article`) VALUES
(5, 'fae', '2021-05-01 13:49:14', 11, 2),
(8, 'AAA', '2021-05-09 04:54:55', 13, 8),
(9, 'fea', '2021-05-09 06:30:25', 13, 8),
(10, 'fea', '2021-05-09 06:30:48', 11, 8),
(11, 'fea', '2021-05-11 06:00:42', 13, 9);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(5) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `lieu` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `informations` text COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `nom`, `lieu`, `date_debut`, `date_fin`, `informations`, `image`) VALUES
(1, 'Mejri', 'efaf', '2021-04-11', '2021-05-02', 'aaaaa', 'assets/images/164493888_284973556490314_220761501831044655_n.jpg'),
(3, 'event', 'Tunis', '2021-04-14', '2021-04-22', 'gEEGA', 'assets/images/169444833_452211479393974_8954895084569846866_n.jpg'),
(4, 'fea', 'efa', '2021-05-25', '2021-05-21', 'faeef', 'assets/images/Ooredoo.svg.png');

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `id` int(11) NOT NULL,
  `idc` int(11) NOT NULL,
  `nom` varchar(20) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(20) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(20) COLLATE utf8_bin NOT NULL,
  `tel` varchar(20) COLLATE utf8_bin NOT NULL,
  `emplacement` varchar(20) COLLATE utf8_bin NOT NULL,
  `code_post` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`id`, `idc`, `nom`, `prenom`, `adresse`, `tel`, `emplacement`, `code_post`) VALUES
(1, 30, 'khedhira', 'fea', '6 RUE KAMEROUN', '20332985', 'Ariana', '2011'),
(2, 31, 'Wajih', 'fea', '11 rue Côte d\'Ivoire', '20332985', 'Bizerte', '2011'),
(3, 32, 'wajih', 'Mejri', '6 RUE KAMEROUN', '20332985', 'Ariana', '2011'),
(4, 33, 'wajih', 'Mejri', '6 RUE KAMEROUN', '20332985', 'Ariana', '2011'),
(5, 34, 'khedhira', 'fea', '6 RUE KAMEROUN', '20332985', 'Ariana', '2011'),
(6, 35, 'Wajih', 'Mejri', '6 RUE KAMEROUN', '20332985', 'Ariana', '2011'),
(7, 36, 'Mejri', 'Wajih', '11 rue Côte d\'Ivoire', '20332999', 'Jendouba', '4444'),
(8, 37, 'Mejri', 'Wajih', '11 rue Côte d\'Ivoire', '20332999', 'Jendouba', '4444'),
(9, 38, 'Mejri', 'Wajih', '11 rue Côte d\'Ivoire', '20332999', 'Jendouba', '4444'),
(11, 40, 'Mejri', 'Wajih', '11 rue Côte d\'Ivoire', '20332999', 'Gabès', '4444'),
(12, 41, 'khedhira', 'fea', '6 RUE KAMEROUN', '20332985', 'Ariana', '2011'),
(13, 42, 'Mejri', 'Wajih', '11 rue Côte d\'Ivoire', '20332999', 'Ariana', '2011'),
(14, 43, 'Mejri', 'Wajih', '11 rue Côte d\'Ivoire', '20332999', 'Ariana', '2011'),
(15, 44, 'fea', 'khedhira', '6 RUE KAMEROUN', '20332985', 'Kasserine', '3334');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `id_utilisateur` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_prod` int(11) NOT NULL,
  `quatite` int(11) NOT NULL,
  `prix_total` float NOT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `id_utilisateur`, `id_prod`, `quatite`, `prix_total`, `type`) VALUES
(55, 'eehxTYR9/lG0E', 7, 2, 400, 'tableaux'),
(56, 'eehxTYR9/lG0E', 12, 1, 45, 'tableaux');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(5) NOT NULL,
  `date_promotion` date NOT NULL,
  `reduction` int(5) NOT NULL,
  `id_event` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `date_promotion`, `reduction`, `id_event`) VALUES
(1, '2021-04-27', 20, 1),
(3, '2021-05-05', 23, 3);

-- --------------------------------------------------------

--
-- Structure de la table `tableaux`
--

CREATE TABLE `tableaux` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `informations` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `tableaux`
--

INSERT INTO `tableaux` (`id`, `id_utilisateur`, `nom`, `prix`, `image`, `informations`) VALUES
(7, 11, 'aaa', 200, './images/produit/vikings.PNG', 'vrf,gg'),
(9, 13, 'aaa', 23, './images/produit/one piece.PNG', 'FFFFEAF'),
(10, 13, 'tablea', 677, './images/produit/mong.PNG', 'FEAFAEFAEF'),
(11, 13, 'tablea', 66, './images/produit/164923889_108227594693005_1096540870930625260_n.jpg', 'FAFEAEFA'),
(12, 13, 'tab', 45, './images/produit/121339414_154309196347774_7172498675736769510_o.jpg', 'EFACEAF');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cadeaux`
--
ALTER TABLE `cadeaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_article` (`id_article`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`);

--
-- Index pour la table `tableaux`
--
ALTER TABLE `tableaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achat`
--
ALTER TABLE `achat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `cadeaux`
--
ALTER TABLE `cadeaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tableaux`
--
ALTER TABLE `tableaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `achat_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `client` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `cadeaux`
--
ALTER TABLE `cadeaux`
  ADD CONSTRAINT `cadeaux_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `client` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `tableaux`
--
ALTER TABLE `tableaux`
  ADD CONSTRAINT `tableaux_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `client` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
