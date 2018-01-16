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
-- Structure de la table `personnes`
--

CREATE TABLE `personnes` (
  `id_personne` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description_personne` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id_personne`, `nom`, `description_personne`) VALUES
(1, 'GASTELLIER, Rene Georges ', 'medecin, maire de Montargis, depute du Loiret'),
(2, 'VAUBLANC, A. Vienot de ', 'maire de Montargis'),
(3, 'GIRODET-TRIOSON, Anne Louis ', 'peintre'),
(4, 'MeRIMe, Prosper ', 'homme de lettres'),
(5, 'DESFRICHES, Thomas-Aignan ', 'dessinateur, artiste-peintre'),
(6, 'RAVAULT, Ange Desire ', 'peintre d\'histoire'),
(7, 'PERRIER, Alexandre Jacques ', 'depute et maire de Montargis'),
(8, 'SAUVARD ', 'maire de Montargis');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id_personne`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
