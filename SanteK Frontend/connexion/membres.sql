-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 13 déc. 2020 à 14:52
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dmc`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `sexe` varchar(10) COLLATE utf8mb4_bin NOT NULL DEFAULT 'F / H',
  `taille` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `date_naissance` date NOT NULL,
  `mdp` text COLLATE utf8mb4_bin NOT NULL,
  `telephone` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `sexe`, `taille`, `poids`, `adresse`, `mail`, `date_naissance`, `mdp`, `telephone`) VALUES
(3, 'fse', 'awe', 'F', 170, 52, '4 villa meridienne', 'sara.oztas@gmail.fr', '2020-12-17', 'Max', 778975),
(5, 'KADARDAR', 'LIlia', 'M', 152, 54, '4 villa meridienne', 'liliaka@gmail.com', '2020-12-09', '$2y$10$jqHRNBKGtnV9mIM07zff7uqBrek7EbYBQqkLEP6fhh0Ymoqwh6LQa', 40894894),
(6, 'iÃ¨-ifrtyf', 'ghfkhgf', 'M', 152, 156, '4 villa meridienne', 'max@gmail.com', '2020-12-08', '$2y$10$8TNue693VbFxSRt0Vj5NVeaQzBghqbO4lf/UKyrLpcr74i2enoZGK', 541651),
(7, 'ahmed', 'moez', 'M', 152, 147, 'dxfyhfhj', 'max@gmail.com', '2020-12-17', '$2y$10$ARX7aJFQRX./23xpaAnQG.1ACYQU2684n5UI88m.fRoZxb0TDtefO', 778975),
(8, 'rhfg', 'dfg', 'M', 177, 172, 'fdgdg', 'fgjgd@gmail.com', '2020-12-10', '$2y$10$/5mbz3CbQs1looHW2JOZjOewDHiitBSB5ZOkT/UQP2tsvdq.9W7vi', 24178965);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
