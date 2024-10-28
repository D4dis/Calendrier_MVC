-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 28 oct. 2024 à 21:08
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
(1, '2024-10-28 09:00:00', 1, '2024-10-28 12:18:33'),
(2, '2024-10-28 13:09:49', 0, '2024-10-28 16:39:22');

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

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`t_id`, `t_nom`, `t_jour_debut`, `t_heure_debut`, `t_heure_fin`, `t_jour_fin`) VALUES
(1, 'Week-end', '05', '00:00:00', '24:00:00', '06'),
(2, 'Week-end', '12', '00:00:00', '24:00:00', '13'),
(3, 'Week-end', '19', '00:00:00', '24:00:00', '20'),
(4, 'Week-end', '26', '00:00:00', '24:00:00', '27'),
(5, 'Entrée en stage', '23', '09:00:00', '17:00:00', '23');

--
-- Index pour les tables déchargées
--

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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `suivi`
--
ALTER TABLE `suivi`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
