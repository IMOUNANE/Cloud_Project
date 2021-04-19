-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 17 avr. 2021 à 19:07
-- Version du serveur :  8.0.23-0ubuntu0.20.04.1
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;


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

CREATE TABLE `api_key` (
  `client_id` int NOT NULL COMMENT 'ID du client',
  `client_key` varchar(255) NOT NULL COMMENT 'API key du client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `api_key`
--

INSERT INTO `api_key` (`client_id`, `client_key`) VALUES
(2, 'toto'),
(3, 'tata');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `password` varchar(255) NOT NULL,
  `entreprise` varchar(255) DEFAULT NULL COMMENT 'Nom entreprise',
  `ip_adress` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `creation_date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL COMMENT 'Compte utilisateur actif (bool)',
  `is_client` tinyint(1) NOT NULL COMMENT 'Compte utilisateur ayant payé'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `password`, `entreprise`, `ip_adress`, `email`, `creation_date`, `is_active`, `is_client`) VALUES
(2, 'toto', 'toto', '1', 'gravity@yopmail.com', '2021-04-11', 1, 1),
(3, '$2y$10$uq.rA3C.eTO71rwsU1wVWeK09SGRVS3TMf1FXC3Ext/yjJNMtfPiG', NULL, '::1', 'gravity.neo@gmail.com', '2021-04-11', 1, 1),
(4, '$2y$10$3L8KGy3REWUZ53F5mJyrLuCyisC06ZNBNfZytAv12l9QNCNyETCZe', 'tata', '::1', 'gravity.ne@gmail.com', '2021-04-11', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users_client`
--

CREATE TABLE `users_client` (
  `client_id` int NOT NULL COMMENT 'ID du client',
  `ip_adress` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Adress_ip visiteur',
  `user_choice_1` tinyint(1) NOT NULL,
  `user_choice_2` tinyint(1) NOT NULL,
  `user_choice_3` tinyint(1) NOT NULL,
  `user_choice_4` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users_client`
--

INSERT INTO `users_client` (`client_id`, `ip_adress`, `user_choice_1`, `user_choice_2`, `user_choice_3`, `user_choice_4`) VALUES
(2, '172.195.25.12', 1, 0, 1, 0),
(3, '172.195.25.12', 0, 1, 0, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
