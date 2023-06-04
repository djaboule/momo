-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 05 Juin 2023 à 00:55
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `liste_participant`
--

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE IF NOT EXISTS `participant` (
  `IdPart` int(11) NOT NULL AUTO_INCREMENT,
  `NomPart` text NOT NULL,
  `PrenomPart` text NOT NULL,
  `TelPart` int(12) NOT NULL,
  `EmailPart` varchar(20) NOT NULL,
  PRIMARY KEY (`IdPart`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Contenu de la table `participant`
--

INSERT INTO `participant` (`IdPart`, `NomPart`, `PrenomPart`, `TelPart`, `EmailPart`) VALUES
(30, 'DOUM', 'ismael', 1023456, 'kone@gmail.com'),
(32, 'kone', 'ismael', 1023456, 'doum@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
