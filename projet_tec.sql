-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 24 mai 2023 à 14:05
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet tec`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int NOT NULL,
  `email_admin` varchar(5) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `date_creation` date NOT NULL,
  `est_valide` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idcategorie` int NOT NULL,
  `nomcategorie` varchar(50) NOT NULL,
  PRIMARY KEY (`idcategorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id_likes` int NOT NULL,
  `id_oeuvre` int NOT NULL,
  `id_utilisateur` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `expediteur` varchar(100) DEFAULT NULL,
  `destinataire` varchar(100) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `méssages`
--

DROP TABLE IF EXISTS `méssages`;
CREATE TABLE IF NOT EXISTS `méssages` (
  `id_messages` int NOT NULL,
  `id_destinateur` int NOT NULL,
  `id_destinataire` int NOT NULL,
  `id_contenu` int NOT NULL,
  `id_date_envoi` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `oeuvres`
--

DROP TABLE IF EXISTS `oeuvres`;
CREATE TABLE IF NOT EXISTS `oeuvres` (
  `id_oeuvre` int NOT NULL,
  `id_categorie` int NOT NULL,
  `nom_oeuvre` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `likes` char(5) NOT NULL,
  PRIMARY KEY (`id_oeuvre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`email`, `password`) VALUES
('123456@gmail.com', '$2y$10$kKlqkwG8P2umFrjVD..cN.Zqns/cbZNr9vLOnyunzXGSu0e5ySLqq'),
('987654321@gmail.com', '$2y$10$JWpryzNPPVTV1yNkmdnkN.6XfCxVnIWVpnRPPZE9ZMuaCYOqSqBHK'),
('izac@gmail.com', '$2y$10$L00jgCHAppnB37rJ3tBzVurGB/XtbMFzkKE3l7jHGJFTAP7s9hwfi'),
('julie@gmail.com', '$2y$10$Q/NTq2JmYwSAMLuQ/nE/yu72eKhPrEBmGVzVHsGXp6fe0uHUWkImu'),
('pernella@gmail.com', 'azerty2000'),
('samuel@gmail.com', '$2y$10$Enb5AVhifY4ZHX.ndBPeLO9beTOm.T1nmSxHov.gZK2ucM7TeoW6y'),
('youngambicious@gmail.com', '$2y$10$eIdIVAcrGUynZTAJhaTyW.8w3a91gHahyBt1DeEnD4gqi4Tv0nAKW');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID utilisateur` int NOT NULL,
  `Email Adress` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `est administrateur` tinyint(1) NOT NULL,
  `est valide` tinyint(1) NOT NULL,
  `Avatar` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Adresse postale` varchar(50) NOT NULL,
  PRIMARY KEY (`ID utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

DROP TABLE IF EXISTS `visite`;
CREATE TABLE IF NOT EXISTS `visite` (
  `id_visite` int NOT NULL,
  `id_utilisateur` int NOT NULL,
  `date_visite` date NOT NULL,
  PRIMARY KEY (`id_visite`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
