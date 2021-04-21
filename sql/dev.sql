-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 19 avr. 2021 à 18:16
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rgpd`
--

-- --------------------------------------------------------

--
-- Structure de la table `api_key`
--

DROP TABLE IF EXISTS `api_key`;
CREATE TABLE IF NOT EXISTS `api_key` (
  `client_id` int(11) NOT NULL COMMENT 'ID du client',
  `client_key` varchar(255) NOT NULL COMMENT 'API key du client',
  `script_path` varchar(255) NOT NULL,
  `client_script_1` varchar(255) DEFAULT NULL,
  `client_script_2` varchar(255) DEFAULT NULL,
  `client_script_3` varchar(255) DEFAULT NULL,
  `client_script_4` varchar(255) DEFAULT NULL,
  `last_modification` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `api_key`
--

INSERT INTO `api_key` (`client_id`, `client_key`, `script_path`, `client_script_1`, `client_script_2`, `client_script_3`, `client_script_4`, `last_modification`) VALUES
(45, 'gwsymVIxOxnP8XCZ4UFE%2BCssV0Zm5mRwF5WvARCVfi0%3D', 'https://localhost/Cloud_Project/src/js/user_script/pop-up-rgpd-test2.js', NULL, NULL, NULL, NULL, NULL),
(46, '15En%2Be%2Bm5jpirQP59Zzk3VKzdTSQyOK1UlGNtw%2B6iRs%3D', 'https://localhost/Cloud_Project/src/js/user_script/pop-up-rgpd-test3.js', NULL, NULL, NULL, NULL, '2021-04-19');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `entreprise` varchar(255) DEFAULT NULL COMMENT 'Nom entreprise',
  `ip_adress` varchar(30) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `creation_date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL COMMENT 'Compte utilisateur actif (bool)',
  `is_client` tinyint(1) NOT NULL COMMENT 'Compte utilisateur ayant payé',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `password`, `entreprise`, `ip_adress`, `email`, `creation_date`, `is_active`, `is_client`) VALUES
(2, 'toto', 'toto', '1', 'gravity@yopmail.com', '2021-04-11', 1, 1),
(5, '$2y$10$oQznNX4oc86oS1v5QIxZuejVxMzz3Tnd.yLcbYvmOVSuZfYjlBDVe', 'sony', '::1', 'test@gmail.com', '2021-04-19', 1, 0),
(31, '$2y$10$0EOeyd8Nmh5muXOw9LVT6e/oq//t7CGXErFxRaIjLYvGJiau8yFGG', 'apple', '::1', 'apple@gmail.com', '2021-04-19', 1, 0),
(33, '$2y$10$9GVrI9sqSETlt9Jj6msIleWKqwq1Pwq3DYYcmEazYlHIae7VEor7q', 'microsoft', '::1', 'xbox@gmail.com', '2021-04-19', 1, 0),
(34, '$2y$10$EVSsoe8z/nZu3E0l.4Ksb.DHvlXFAUCd5DyJIE96dU0KrY3aJI492', 'goal', '::1', 'goal@gmail.com', '2021-04-19', 1, 0),
(42, '$2y$10$.l/4UW41IwJ9s7NTCFXHwerxeKeND49ct70Jc85Kq1uFWvaIYdHuy', 'javascript', '::1', 'script@gmail.com', '2021-04-19', 1, 0),
(44, '$2y$10$OcZOybDCSOvFvLsMjwHANu.5A667Pldwb2DgkWFSV.DlZm7Yg6DRy', 'test2', '::1', 'script2@gmail.com', '2021-04-19', 1, 0),
(45, '$2y$10$K3l6UhX4LQCNfwZp3mgYy.PDxBF0rZj0Lz9os9Y4P7JL3qwwR58uy', 'test2', '::1', 'tata@gmail.com', '2021-04-19', 1, 0),
(46, '$2y$10$karsCVnV5PZj7r1C0TmKteFFCae7ElWnuMJRqIYatJsmgOCe1.6EK', 'test3', '::1', 'toto@gmail.com', '2021-04-19', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users_client`
--

DROP TABLE IF EXISTS `users_client`;
CREATE TABLE IF NOT EXISTS `users_client` (
  `client_id` int(11) NOT NULL COMMENT 'ID du client',
  `ip_adress` varchar(50) NOT NULL COMMENT 'Adress_ip visiteur',
  `user_choice_1` tinyint(1) NOT NULL,
  `user_choice_2` tinyint(1) NOT NULL,
  `user_choice_3` tinyint(1) NOT NULL,
  `user_choice_4` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users_client`
--

INSERT INTO `users_client` (`client_id`, `ip_adress`, `user_choice_1`, `user_choice_2`, `user_choice_3`, `user_choice_4`) VALUES
(2, '172.195.25.12', 1, 0, 1, 0),
(3, '172.195.25.12', 0, 1, 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
