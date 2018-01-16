-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 23 déc. 2017 à 16:19
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `archiveloiret`
--

-- --------------------------------------------------------

--
-- Structure de la table `iconographies`
--

CREATE TABLE `iconographies` (
  `id_iconographie` int(100) NOT NULL,
  `id_article` varchar(100) NOT NULL,
  `nom_iconographie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `iconographies`
--

INSERT INTO `iconographies` (`id_iconographie`, `id_article`, `nom_iconographie`) VALUES
(1, '1 ', 'Paysage urbain'),
(2, '2 ', 'Paysage urbain'),
(3, '3 ', 'Architecture religieuse'),
(4, '4 ', 'Architecture d\'activite intellectuelle'),
(5, '5 ', 'Environnement'),
(6, '6 ', 'Environnement'),
(7, '7 ', 'Architecture religieuse'),
(8, '8 bis', 'Architecture religieuse'),
(9, '9 ', 'Architecture religieuse'),
(10, '10 ', 'Architecture religieuse'),
(11, '11 ', 'Environnement'),
(12, '12 ', 'Environnement'),
(13, '13 ', 'Paysage urbain'),
(14, '14 ', 'Paysage urbain'),
(15, '15 ', 'Paysage urbain'),
(16, '16 ', 'Paysage urbain');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `iconographies`
--
ALTER TABLE `iconographies`
  ADD PRIMARY KEY (`id_iconographie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
