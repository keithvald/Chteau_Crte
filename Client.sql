-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 04 mars 2021 à 15:13
-- Version du serveur :  8.0.23-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ChateauCarte`
--

-- --------------------------------------------------------

--
-- Structure de la table `Client`
--

CREATE TABLE `Client` (
  `id` int NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pseudo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `motdepasse` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `token` varchar(64) NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Client`
--

INSERT INTO `Client` (`id`, `nom`, `pseudo`, `mail`, `motdepasse`, `token`, `date_inscription`) VALUES
(33, 'p', 'p', 'rooti@g.fr', '$2y$10$6KI/Vl2uUBfQZBUa0ZWnyeHsTyl0tF2t/.gSqnsw4PfbjX8BDqAM.', '', '2021-03-03 14:05:22'),
(34, 's', 's', 'nissa@gm.fr', '$2y$10$Bd/w.y88YGbGfPEszUYPHOqXSJx..lP/Kyylkk9jFnqgpATGvP3DW', '', '2021-03-03 14:18:11'),
(40, 'ani', 'ani', 'root@g.fr', '$2y$10$1umnA3evHmnkQ5KB9ptvZOROmpzFrqiRFHs975uicH03tNmwnTE02', '', '2021-03-03 15:16:11'),
(42, 'anisa', 'anissa', 'anissa@maisl.fr', '$2y$10$kXG8ImyNaYx2Ny1f9mkj4.6cv9/rdld3eu8IXm/kt6TNnJxyYt/E.', '', '2021-03-03 15:19:19'),
(43, 'anissa', 'Keithvald', 'anissa@gmail.fr', '$2y$10$ZSyf0O9/pOb3u7juu83H8uwkB7ohCi53feDd/tV7uacemY8yZmfc2', '', '2021-03-04 12:16:50'),
(45, 'anissa', 'anissaanissa', 'anissa@g.fr', '$2y$10$7tSjeQgZ5UHVL7tbHCz44.yWpNWpYaxEm6E6dxPEo3WiApMVD8thW', '', '2021-03-04 14:01:21'),
(46, 'keith', 'keith', 'anissafabrepro@gmail.com', '$2y$12$S/WKojCpHo0cRWCmH0zlo.JKPilwiJ7NGyE3TzYCeZsPjN1fncsJ.', 'cf0d29cf6f834cce28df18a956e75b942c408bd8c7e5e572', '2021-03-04 14:58:40');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Client`
--
ALTER TABLE `Client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
