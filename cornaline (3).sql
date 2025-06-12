-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 11 juin 2025 à 19:29
-- Version du serveur : 8.4.3
-- Version de PHP : 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cornaline`
--

-- --------------------------------------------------------

--
-- Structure de la table `bieres`
--

CREATE TABLE `bieres` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `gout` varchar(30) NOT NULL,
  `alcool` decimal(3,1) NOT NULL DEFAULT '7.9',
  `prix` decimal(5,2) NOT NULL DEFAULT '29.99',
  `description` text,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `bieres`
--

INSERT INTO `bieres` (`id`, `nom`, `gout`, `alcool`, `prix`, `description`, `image_url`) VALUES
(1, 'Cornaline Blonde', 'blonde', 7.9, 29.99, 'Une bière légère et rafraîchissante.', NULL),
(2, 'Cornaline Brune', 'brune', 7.9, 29.99, 'Une bière au goût intense et profond.', NULL),
(3, 'Cornaline Ambrée', 'ambrée', 7.9, 29.99, 'Une bière équilibrée avec des notes caramélisées.', NULL),
(4, 'Cornaline Blanche', 'blanche', 7.9, 29.99, 'Une bière douce aux arômes subtils.', NULL),
(5, 'Cornaline Pamplemousse', 'pamplemousse', 7.9, 29.99, 'Une bière fruitée et acidulée.', NULL),
(6, 'Cornaline Ananas', 'ananas', 7.9, 29.99, 'Une bière exotique aux notes sucrées.', NULL),
(7, 'Cornaline Vanille', 'vanille', 7.9, 29.99, 'Une bière gourmande aux arômes vanillés.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `description` text,
  `photo_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `role`, `description`, `photo_url`) VALUES
(1, 'MACHET Adrien', 'Génie Biologique', 'Chef de projet du Génie Biologique, mise en bouteille, analyse de la densité, du pH, et de la teneur en alcool', NULL),
(2, 'MERHAB Maissa', 'Génie Biologique', 'Choix des arômes, sélectionner les levures, malts et houblons,  analyse de la densité, du pH, et de la teneur en alcool', NULL),
(3, 'VERNIS Thibault', 'Génie Biologique', 'Préparation du moût, suivi de la fermentation,  analyse de la densité, du pH, et de la teneur en alcool', NULL),
(4, 'COMBEAU Adam', 'MMI', 'Chef de projet des MMI, graphiste, monteur vidéo', NULL),
(5, 'GRAZIANO Lauryn', 'MMI', 'Graphiste, chargé de communication', NULL),
(6, 'MAINGUY Eloise', 'MMI', 'Graphiste, community manageur', NULL),
(7, 'PEINY	Loic', 'MMI', 'Graphiste, monteur vidéo, développeur', NULL),
(8, 'THEBAULT Nathan', 'MMI', 'Graphiste, développeur', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bieres`
--
ALTER TABLE `bieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bieres`
--
ALTER TABLE `bieres`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
