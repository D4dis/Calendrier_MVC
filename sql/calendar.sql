-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 13 nov. 2024 à 16:16
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `calendar`
--

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `d_id` int(11) NOT NULL,
  `d_numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL,
  `m_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`m_id`, `m_content`) VALUES
(1, 'Bonjour comment ça va ?'),
(2, 'Bien et vous ?');

-- --------------------------------------------------------

--
-- Structure de la table `suivi`
--

CREATE TABLE `suivi` (
  `s_id` int(11) NOT NULL,
  `s_heure_debut` datetime DEFAULT NULL,
  `s_status` tinyint(1) DEFAULT NULL,
  `s_heure_fin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `suivi`
--

INSERT INTO `suivi` (`s_id`, `s_heure_debut`, `s_status`, `s_heure_fin`) VALUES
(1, '2024-10-28 09:00:00', 1, '2024-10-28 12:15:00'),
(2, '2024-10-28 13:00:00', 0, '2024-10-28 16:45:00'),
(5, '2024-10-29 08:57:32', 1, '2024-10-29 12:05:00'),
(6, '2024-10-29 12:51:08', 0, '2024-10-29 16:46:10'),
(12, '2024-10-30 09:00:00', 1, '2024-10-30 12:00:00'),
(14, '2024-10-30 12:45:00', 0, '2024-10-30 16:45:00'),
(16, '2024-10-31 08:55:00', 1, '2024-10-31 12:30:00'),
(17, '2024-10-31 13:16:15', 0, '2024-10-31 16:45:00'),
(19, '2024-11-04 08:52:00', 1, '2024-11-04 12:01:42'),
(20, '2024-11-04 12:48:08', 0, '2024-11-04 16:44:31'),
(21, '2024-11-05 08:58:55', 1, '2024-11-05 12:07:45'),
(22, '2024-11-05 12:45:30', 0, '2024-11-05 16:45:21'),
(23, '2024-11-06 08:51:51', 1, '2024-11-06 12:12:08'),
(24, '2024-11-06 12:54:27', 0, '2024-11-06 16:35:00'),
(25, '2024-11-07 08:57:54', 1, '2024-11-07 12:00:05'),
(26, '2024-11-07 12:48:28', 0, '2024-11-07 16:42:02'),
(27, '2024-11-12 08:54:55', 1, '2024-11-12 12:00:07'),
(28, '2024-11-12 12:45:10', 0, '2024-11-12 16:40:00'),
(29, '2024-11-13 08:55:40', 1, '2024-11-13 11:59:19'),
(30, '2024-11-13 12:44:31', 0, '2024-11-13 16:39:00');

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE `taches` (
  `t_id` int(11) NOT NULL,
  `t_nom` varchar(255) DEFAULT NULL,
  `t_jour_debut` varchar(10) DEFAULT NULL,
  `t_heure_debut` time DEFAULT NULL,
  `t_heure_fin` time DEFAULT NULL,
  `t_jour_fin` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `u_id` int(11) NOT NULL,
  `u_nom` varchar(255) NOT NULL,
  `u_prenom` varchar(255) NOT NULL,
  `u_departement` int(11) NOT NULL,
  `u_derniere_connexion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`d_id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Index pour la table `suivi`
--
ALTER TABLE `suivi`
  ADD PRIMARY KEY (`s_id`);

--
-- Index pour la table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`t_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `suivi`
--
ALTER TABLE `suivi`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
