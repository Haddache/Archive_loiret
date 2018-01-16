-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 23 déc. 2017 à 16:20
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
-- Structure de la table `cliches`
--

CREATE TABLE `cliches` (
  `id_cliche` varchar(100) NOT NULL,
  `taille` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cliches`
--

INSERT INTO `cliches` (`id_cliche`, `taille`) VALUES
('1', '10x16'),
('10', '10x16'),
('11', '10x17'),
('12', '10x18'),
('13', '10x19'),
('14', '10x20'),
('15', '10x21'),
('16', '10x22'),
('2', '10x17'),
('3', '10x18'),
('4', '10x10'),
('5', '10x11'),
('6', '10x12'),
('7', '10x13'),
('8', '10x14'),
('9', '10x15');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cliches`
--
ALTER TABLE `cliches`
  ADD PRIMARY KEY (`id_cliche`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
