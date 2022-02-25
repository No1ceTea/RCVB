-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 17 fév. 2022 à 16:02
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rcvb`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `idActu` int(3) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `texte` text CHARACTER SET latin1,
  `datePublication` datetime DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idActu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `adherents`
--

DROP TABLE IF EXISTS `adherents`;
CREATE TABLE IF NOT EXISTS `adherents` (
  `idAdh` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(40) COLLATE utf8_bin NOT NULL,
  `dateNaiss` date NOT NULL,
  `lieuNaiss` varchar(40) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(80) COLLATE utf8_bin NOT NULL,
  `ville` varchar(40) COLLATE utf8_bin NOT NULL,
  `cp` char(5) COLLATE utf8_bin NOT NULL,
  `telPortable` char(14) COLLATE utf8_bin NOT NULL,
  `telDomicile` char(14) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mdp` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `nationalite` varchar(30) COLLATE utf8_bin NOT NULL,
  `numSS` char(15) COLLATE utf8_bin NOT NULL,
  `reglement` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `idPere` int(4) DEFAULT NULL,
  `idMere` int(4) DEFAULT NULL,
  `idPC` int(4) DEFAULT NULL,
  `idCat` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `idAutorisation` int(4) DEFAULT NULL,
  `idMT` int(3) DEFAULT NULL,
  `idCharte` int(4) DEFAULT NULL,
  `idSoin` int(4) DEFAULT NULL,
  PRIMARY KEY (`idAdh`),
  KEY `idPere` (`idPere`),
  KEY `idCat` (`idCat`),
  KEY `idAutorisation` (`idAutorisation`),
  KEY `idPC` (`idPC`),
  KEY `idCharte` (`idCharte`),
  KEY `idMT` (`idMT`),
  KEY `idMere` (`idMere`),
  KEY `idSoin` (`idSoin`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `adherents`
--

INSERT INTO `adherents` (`idAdh`, `nom`, `prenom`, `dateNaiss`, `lieuNaiss`, `adresse`, `ville`, `cp`, `telPortable`, `telDomicile`, `mail`, `mdp`, `nationalite`, `numSS`, `reglement`, `idPere`, `idMere`, `idPC`, `idCat`, `idAutorisation`, `idMT`, `idCharte`, `idSoin`) VALUES
(4, 'dqd', 'qzdqd', '2022-01-11', 'dqdq', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'rhui@gmail.com', '6edd370a9c436148013d12e5f7778ce8a2d36b64071d360ae580a05605f38f396ef189006d65da4e319541f3a6344a96caf359843e37976ec92dd9c0f88b899e', 'dqdq', '121212121212121', 'valide', NULL, NULL, 4, NULL, 4, 4, 4, 0),
(5, 'aaa', 'aaa', '2021-12-28', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'rhui@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$NkRTd3lFcGU4L1VUSjZTOQ$VxeRzv3a4m0NjCz0px6ief/grFxfxZkjkVgVf5DZCUo', 'dqdq', '121212121212121', 'en cours', NULL, NULL, 5, NULL, 5, 5, 5, 0),
(6, 'aaa', 'aaa', '2021-12-28', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'rhui@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$WDJ0R3cySGlTV0ljLndxTQ$nCjgz73bvqQW4gPGjQ4faX4mxeq3aJozLA0/U2liIpo', 'dqdq', '121212121212121', 'en cours', NULL, NULL, 6, NULL, 6, 6, 6, 0),
(7, 'aaa', 'aaa', '2021-12-28', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'rhui@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$YTZNNFpsSXI4dnBzU0dzYw$PoGmb9yeCvR2g10VFh4F0TSi5GMQJVgKk2u0b4rWtK4', 'dqdq', '121212121212121', 'non', NULL, NULL, 7, NULL, 7, 7, 7, 0),
(8, 'aaa', 'aaa', '2021-12-28', 'qzd', '', '', '', '', '', 'aaa@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$OWd0Y0M1WUJPMzM5aDhPeA$rhk6b401H3yE5fWCYZAF1sclSBGQdzVWJgAlFgZ/z8c', '', '121212121212121', '', NULL, NULL, 8, NULL, 8, 8, 8, 0),
(9, 'aaa', 'aaa', '2021-12-28', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'rhui@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$cVJtM2NDS3U5SXpXUWRWVQ$haqdRl+vRCql75bDJMYDGAwL7Lkz4XY4CJKBxYOXBmY', 'dqdq', '121212121212121', 'enCours', NULL, NULL, 9, NULL, 9, 9, 9, 0),
(10, 'aaa', 'aaa', '2021-12-28', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'rhui@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$dW5lblRSeUZGSzRzYng5ag$2oXCBMisnBd9b7GgwTw3N+YgRNXtoScSAKOyyTKB3Lc', 'dqdq', '121212121212121', '', NULL, NULL, 10, NULL, 10, 10, 10, 0),
(11, 'bbb', 'bbb', '2021-12-28', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'bbb@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$YmVFYjlGOHlWMWRHamhIbQ$/HpKCtDIDrhZ8h9tGjSJK/+K9dlBGONM5YsKlbYVmB4', 'dqdq', '121212121212121', 'enCours', NULL, NULL, 11, NULL, 11, 11, 11, 0),
(12, 'ccc', 'ccc', '2021-12-28', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'ccc@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$NjNmQjdPN3BPVTdYSTd6Mg$yfhtQlXJzGhD7jTJqz6kJpdvcy7F6oCEaRpd7U8g9/w', 'dqdq', '121212121212121', '', NULL, NULL, 12, NULL, 12, 12, 12, 0),
(13, 'ddd', 'ddd', '2021-12-28', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'ddd@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$RXRyZXNrS3RZdzMwZVR3Vw$VLpvBuYCNth6L8NGb/l7B+rWBFQSymidr8StWog8YSo', 'dqdq', '121212121212121', '', NULL, NULL, 13, NULL, 13, 13, 13, 0),
(14, 'eee', 'eee', '2021-12-28', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'eee@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$M1FBQVhURUZ0RC5GWlA2MA$bHilTnlPyaOyWc3Nl8Lxsbsy2avXNRlJxRGsQzdwtFs', 'dqdq', '121212121212121', '', NULL, NULL, 14, NULL, 14, 14, 14, 0),
(15, 'eee', 'eee', '2021-12-28', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'eee@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$bk5CbU1SR1Mzdm9nOEJxVQ$uB+BxYpxfoUXjCXnSHeElbbK0cv18l44wql0h3+fC7I', 'dqdq', '121212121212121', '', NULL, NULL, 15, NULL, 15, 15, 15, 0),
(16, 'fff', 'fff', '2021-12-28', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 02', 'fff@gmail.com', '$2y$10$zmojq.1fZeo5k3yIr5YLt.JCM5zdUzWU6ZIRV/8Ymfzata1Hgevhm', 'dqdq', '121212121212121', '', NULL, NULL, 16, 'U8', 16, 16, 16, 0),
(17, 'dqdgg', 'dqdgg', '2021-12-29', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'ggg@gmail.com', '$2y$10$5ELw5kA5cpEKTzC4NGQ/P.5AsOfcoh.mW885oXUymp3uh9Kl99FdK', 'dqdq', '121212121212121', '', NULL, NULL, 30, NULL, 30, 30, 30, 0),
(18, 'dqdgg', 'qzdqd', '2021-12-29', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'ggg@gmail.com', '$2y$10$6HfSBpMQbLIAjJj4nmyxeu.RY688DOc393sFXpNNuR5T3Ulf4OvNe', 'dqdq', '121212121212121', '', NULL, NULL, 31, NULL, 31, 31, 31, 0),
(19, 'hhh', 'hhh', '2022-02-05', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'hhh@gmail.com', '$2y$10$Bk4ZDdiJhXpET7vu4FSLm.q1ZYPVxACE0/2GU0ayA9Rvvzt/FhPRS', 'dqdq', '121212121212121', '', NULL, NULL, 32, 'RC', 32, 32, 32, 0),
(20, 'dqd', 'qzdqd', '2022-02-03', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'dqzd@gmail.com', '$2y$10$NWsxtjOBshQ6jNJn5W8yV.TLFXu016MTI4uKGC2cUlikkXgmCyYkG', 'dqdq', '121212121212121', '', NULL, NULL, 33, NULL, 33, 33, 33, 0),
(21, 'dqd', 'qzdqd', '2022-02-03', 'qzd', 'qzdd', 'qzdqz', '55555', '05 05 05 05 05', '06 06 03 02 01', 'dqzd@gmail.com', '$2y$10$0usuk5aBI1/UQR78krYlU.IBkU40Hp0Dgmpan5d5FbSafpkWcBXke', 'dqdq', '121212121212121', '', NULL, NULL, 34, NULL, 34, 34, 34, 0),
(22, 'nnn', 'nnn', '2022-02-01', 'nnn', 'nnn', 'nnn', '44444', '05 05 05 05 05', '06 06 03 02 01', 'nnn@gmail.com', '$2y$10$B9.NbvezqHJmlbCTKboW1ewU4wGHqiQ760r4.SXeWy/cCjSjZQWiO', 'nnn', '121212121212121', '', NULL, NULL, 35, NULL, 35, 35, 35, 0),
(23, 'aaa', 'aaa', '2022-02-01', 'aaa', 'aaa', 'aaa', '55555', '05 05 05 05 05', '06 06 03 02 01', 'aaa@gmail.com', '$2y$10$eycDoTM8oLswd080KEUmXOD40sZR1fCguu0xads4ozh/ydqNO/A06', 'aaa', '121212121212121', '', NULL, NULL, 36, NULL, 37, 36, 35, 0),
(24, 'aaa', 'aaa', '2022-02-01', 'aaa', 'aaa', 'aaa', '55555', '05 05 05 05 05', '06 06 03 02 01', 'aaa@gmail.com', '$2y$10$Ui8CViBjiYyg4tZWQKH24umZK4lg3f/M0Ys/aNSIu1DjWUWBQ6My2', 'aaa', '121212121212121', '', NULL, NULL, 37, NULL, 38, 37, 36, 0),
(25, 'aaa', 'aaa', '2022-02-10', 'aaa', 'aaa', 'aaa', '11111', '05 05 05 05 05', '06 06 03 02 01', 'aaa@gmail.com', '$2y$10$mOBUJwUBvMtlQ.Xd1HOIIeiVpBklWJuZZLlO/ytpA.5Br9uR/SOX.', 'aaa', '121212121212121', '', NULL, NULL, 38, NULL, 39, 38, 37, 0),
(26, 'aaa', 'aaa', '2022-02-10', 'aaa', 'aaa', 'aaa', '11111', '05 05 05 05 05', '06 06 03 02 01', 'aaa@gmail.com', '$2y$10$vE5FX1Pk7UoIQgJSA3I0EOV74Hv.xWjrL5cktvdmYnV/7ZDXoxIcm', 'aaa', '121212121212121', '', NULL, NULL, 39, NULL, 40, 39, 38, 0),
(27, 'aaa', 'aaa', '2022-02-03', 'aaa', 'aaa', 'aaa', '11111', '05 05 05 05 05', '06 06 03 02 01', 'aaa@gmail.com', '$2y$10$c4zs7rJcjWBLLBiGXZUlp.TfN0lK2ZTxx3FvXU0KOhgBsFLkajVSe', 'aaa', '121212121212121', '', NULL, NULL, 40, NULL, 41, 40, 39, 0),
(28, 'aaa', 'aaa', '2022-02-03', 'aaa', 'aaa', 'aaa', '11111', '05 05 05 05 05', '06 06 03 02 01', 'aaa@gmail.com', '$2y$10$mv893yG8CJWGAsXWZPham.x2NUex39ySHsrD/.TT5jutG7KCZEXhS', 'aaa', '121212121212121', '', NULL, NULL, 41, NULL, 42, 41, 40, 0),
(29, 'aaa', 'aaa', '2022-02-05', 'aaa', 'aaa', 'aaa', '11111', '05 05 05 05 05', '06 06 03 02 01', 'aaa@gmail.com', '$2y$10$/5OvxyYkNvSFltHU9f295e.1vcAUiSBRiDdCdGC4dl8EV9.PaMih2', 'aaa', '121212121212121', '', NULL, NULL, 42, NULL, 43, 42, 41, 0),
(39, 'ggg', 'ggg', '2004-01-29', 'ggg', 'ggg', 'ggg', '55555', '05 05 05 05 05', '06 06 03 02 01', 'ggg@gmail.com', '$2y$10$S2ZHoBs9bODcI.KS5MALtuTFFxV3Qg3Bbv/kdI9U3dA9zjHaV0/nu', 'dqdq', '121212121212121', NULL, NULL, NULL, 56, NULL, 57, 56, 55, 49),
(40, 'hhh', 'hhh', '2017-02-01', 'hhh', 'hhh', 'hhh', '55555', '05 05 05 05 05', '06 06 03 02 01', NULL, NULL, 'hhh', '121212121212121', NULL, 4, 4, 57, NULL, 58, 57, 56, 50),
(41, 'hhh', 'hhh', '2017-02-01', 'hhh', 'hhh', 'hhh', '55555', '05 05 05 05 05', '06 06 03 02 01', NULL, NULL, 'hhh', '121212121212121', NULL, 5, 5, 58, NULL, 59, 58, 57, 51),
(42, 'hhh', 'hhh', '2017-02-01', 'hhh', 'hhh', 'hhh', '55555', '05 05 05 05 05', '06 06 03 02 01', NULL, NULL, 'hhh', '121212121212121', NULL, 6, 6, 59, NULL, 60, 59, 58, 52),
(43, 'hhh', 'hhh', '2017-02-01', 'hhh', 'hhh', 'hhh', '55555', '05 05 05 05 05', '06 06 03 02 01', NULL, NULL, 'hhh', '121212121212121', NULL, 7, 7, 60, NULL, 61, 60, 59, 53),
(44, 'hhh', 'hhh', '2017-02-01', 'hhh', 'hhh', 'hhh', '55555', '05 05 05 05 05', '06 06 03 02 01', NULL, NULL, 'hhh', '121212121212121', NULL, 8, 8, 61, NULL, 62, 61, 60, 54),
(45, 'hhh', 'hhh', '2017-02-01', 'hhh', 'hhh', 'hhh', '55555', '05 05 05 05 05', '06 06 03 02 01', NULL, NULL, 'hhh', '121212121212121', NULL, 9, 9, 62, NULL, 63, 62, 61, 55),
(46, 'hhh', 'hhh', '2017-02-01', 'hhh', 'hhh', 'hhh', '55555', '05 05 05 05 05', '06 06 03 02 01', NULL, NULL, 'hhh', '121212121212121', NULL, 10, 10, 63, NULL, 64, 63, 62, 56),
(47, 'xxx', 'xxx', '2004-01-28', 'xxx', 'xxxx', 'xxx', '44444', '05 05 05 05 05', '06 06 03 02 01', 'xxx@gmail.com', '$2y$10$tGg6TQkkZi.KzOvWgqsa5uMSLy6J5OnLQVvrdrG.MPq.UvOymLDkW', 'xxx', '121212121212121', NULL, NULL, NULL, 64, NULL, 65, 64, 63, 57),
(48, 'www', 'www', '2017-02-08', 'www', 'www', 'www', '11111', '05 05 05 05 05', '06 06 03 02 01', NULL, NULL, 'www', '121212121212121', NULL, 11, 11, 65, NULL, 66, 65, 64, 58);

-- --------------------------------------------------------

--
-- Structure de la table `autorisation`
--

DROP TABLE IF EXISTS `autorisation`;
CREATE TABLE IF NOT EXISTS `autorisation` (
  `idAutorisation` int(4) NOT NULL AUTO_INCREMENT,
  `participation` tinyint(1) NOT NULL,
  `encadrer` tinyint(1) NOT NULL,
  `CNILFRR` tinyint(1) NOT NULL,
  `sortie` tinyint(1) NOT NULL,
  `image` tinyint(1) NOT NULL,
  PRIMARY KEY (`idAutorisation`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `autorisation`
--

INSERT INTO `autorisation` (`idAutorisation`, `participation`, `encadrer`, `CNILFRR`, `sortie`, `image`) VALUES
(1, 1, 1, 1, 1, 0),
(2, 1, 1, 1, 1, 0),
(3, 1, 1, 1, 1, 0),
(4, 1, 1, 1, 1, 1),
(5, 1, 1, 0, 1, 0),
(6, 1, 1, 0, 1, 0),
(7, 1, 1, 0, 1, 0),
(8, 1, 1, 0, 1, 0),
(9, 1, 1, 0, 1, 0),
(10, 1, 1, 0, 1, 0),
(11, 1, 1, 0, 1, 0),
(12, 1, 1, 0, 1, 0),
(13, 1, 1, 0, 1, 0),
(14, 1, 1, 0, 1, 0),
(15, 1, 1, 0, 1, 0),
(16, 1, 1, 0, 1, 0),
(17, 1, 1, 1, 1, 1),
(18, 1, 1, 1, 1, 1),
(19, 1, 1, 1, 1, 1),
(20, 1, 1, 1, 1, 1),
(21, 1, 1, 1, 1, 1),
(22, 1, 1, 1, 1, 1),
(23, 1, 1, 1, 1, 1),
(24, 1, 1, 1, 1, 1),
(25, 1, 1, 1, 1, 1),
(26, 1, 1, 1, 1, 1),
(27, 1, 1, 1, 1, 1),
(28, 1, 1, 1, 1, 1),
(29, 1, 1, 1, 1, 1),
(30, 1, 1, 1, 1, 1),
(31, 1, 1, 1, 1, 1),
(32, 1, 1, 0, 0, 0),
(33, 1, 1, 1, 1, 1),
(34, 1, 1, 1, 1, 1),
(35, 1, 1, 1, 1, 1),
(36, 1, 1, 0, 1, 1),
(37, 1, 1, 0, 1, 1),
(38, 1, 1, 0, 1, 1),
(39, 1, 1, 1, 1, 1),
(40, 1, 1, 1, 1, 1),
(41, 1, 1, 1, 1, 1),
(42, 1, 1, 1, 1, 1),
(43, 1, 1, 1, 1, 1),
(44, 1, 1, 1, 1, 1),
(45, 1, 1, 1, 1, 1),
(46, 1, 1, 1, 1, 1),
(47, 1, 1, 1, 1, 1),
(48, 1, 1, 1, 1, 1),
(49, 1, 1, 1, 1, 1),
(50, 1, 1, 1, 1, 1),
(51, 1, 1, 1, 1, 1),
(52, 1, 1, 1, 1, 1),
(53, 1, 1, 1, 1, 1),
(54, 1, 1, 1, 1, 1),
(55, 1, 1, 1, 1, 1),
(56, 1, 1, 1, 1, 1),
(57, 1, 1, 1, 1, 1),
(58, 0, 1, 0, 1, 1),
(59, 0, 1, 0, 1, 1),
(60, 0, 1, 0, 1, 1),
(61, 0, 1, 0, 1, 1),
(62, 0, 1, 0, 1, 1),
(63, 0, 1, 0, 1, 1),
(64, 0, 1, 0, 1, 1),
(65, 1, 0, 1, 0, 1),
(66, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCat` varchar(4) COLLATE utf8_bin NOT NULL,
  `nomCat` varchar(20) COLLATE utf8_bin NOT NULL,
  `idResp` int(2) DEFAULT NULL,
  `idEntrn` int(2) DEFAULT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`idCat`),
  KEY `fk_responsable` (`idResp`),
  KEY `fk_entraineur` (`idEntrn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCat`, `nomCat`, `idResp`, `idEntrn`, `prix`) VALUES
('RA', 'rugby adapte', NULL, NULL, 0),
('RC', 'rugby cancer', NULL, NULL, 0),
('RL', 'rugby loisir', NULL, NULL, 150),
('U10', 'poussins', NULL, 3, 200),
('U12', 'benjamains', NULL, 4, 200),
('U14', 'minimes', 5, 5, 200),
('U16', 'cadets', 3, 6, 200),
('U18', 'cadettes', 2, 3, 150),
('U19', 'juniors', NULL, NULL, 200),
('U20', 'seniorMas', 1, 7, 260),
('U20F', 'seniorFem', NULL, NULL, 260),
('U6', 'lutins', NULL, 1, 200),
('U8', 'mini poussins', NULL, 2, 200);

-- --------------------------------------------------------

--
-- Structure de la table `charte`
--

DROP TABLE IF EXISTS `charte`;
CREATE TABLE IF NOT EXISTS `charte` (
  `idCharte` int(4) NOT NULL AUTO_INCREMENT,
  `lieu` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`idCharte`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `charte`
--

INSERT INTO `charte` (`idCharte`, `lieu`, `date`) VALUES
(1, 'qzd', '2022-01-06 00:00:00'),
(2, 'qzd', '2022-01-06 00:00:00'),
(3, 'qzd', '2022-01-06 00:00:00'),
(4, 'qzd', '2021-12-29 00:00:00'),
(5, 'qzd', '2022-01-06 00:00:00'),
(6, 'qzd', '2022-01-06 00:00:00'),
(7, 'qzd', '2022-01-06 00:00:00'),
(8, 'qzd', '2022-01-06 00:00:00'),
(9, 'qzd', '2022-01-06 00:00:00'),
(10, 'qzd', '2022-01-06 00:00:00'),
(11, 'qzd', '2022-01-06 00:00:00'),
(12, 'qzd', '2022-01-06 00:00:00'),
(13, 'qzd', '2022-01-06 00:00:00'),
(14, 'qzd', '2022-01-06 00:00:00'),
(15, 'qzd', '2022-01-06 00:00:00'),
(16, 'qzd', '2022-01-06 00:00:00'),
(17, NULL, '2022-01-05 00:00:00'),
(18, NULL, '2022-01-05 00:00:00'),
(19, NULL, '2022-01-05 00:00:00'),
(20, NULL, '2022-01-05 00:00:00'),
(21, NULL, '2022-01-05 00:00:00'),
(22, NULL, '2022-01-05 00:00:00'),
(23, NULL, '2022-01-05 00:00:00'),
(24, NULL, '2022-01-05 00:00:00'),
(25, NULL, '2021-12-30 00:00:00'),
(26, NULL, '2021-12-30 00:00:00'),
(27, NULL, '2021-12-30 00:00:00'),
(28, NULL, '2021-12-30 00:00:00'),
(29, NULL, '2021-12-30 00:00:00'),
(30, 'qzd', '2021-12-30 00:00:00'),
(31, 'qzd', '2021-12-30 00:00:00'),
(32, 'qzd', '2022-02-05 00:00:00'),
(33, 'qzd', '2022-01-11 00:00:00'),
(34, 'qzd', '2022-01-11 00:00:00'),
(35, 'nnn', '2022-01-31 00:00:00'),
(36, 'aaa', '2015-02-22 00:00:00'),
(37, 'aaa', '2015-02-22 00:00:00'),
(38, 'aaa', '2022-02-15 00:00:00'),
(39, 'aaa', '2022-02-15 00:00:00'),
(40, 'aaa', '2022-02-15 00:00:00'),
(41, 'aaa', '2022-02-15 00:00:00'),
(42, 'ggg', '2022-02-17 00:00:00'),
(43, 'ggg', '2022-02-17 00:00:00'),
(44, 'ggg', '2022-02-17 00:00:00'),
(45, 'ggg', '2022-02-17 00:00:00'),
(46, 'ggg', '2022-02-17 00:00:00'),
(47, 'ggg', '2022-02-17 00:00:00'),
(48, 'ggg', '2022-02-17 00:00:00'),
(49, 'ggg', '2022-02-17 00:00:00'),
(50, 'ggg', '2022-02-17 00:00:00'),
(51, 'ggg', '2022-02-17 00:00:00'),
(52, 'ggg', '2022-02-17 00:00:00'),
(53, 'ggg', '2022-02-17 00:00:00'),
(54, 'ggg', '2022-02-17 00:00:00'),
(55, 'ggg', '2022-02-17 00:00:00'),
(56, 'hhh', '2022-02-17 00:00:00'),
(57, 'hhh', '2022-02-17 00:00:00'),
(58, 'hhh', '2022-02-17 00:00:00'),
(59, 'hhh', '2022-02-17 00:00:00'),
(60, 'hhh', '2022-02-17 00:00:00'),
(61, 'hhh', '2022-02-17 00:00:00'),
(62, 'hhh', '2022-02-17 00:00:00'),
(63, 'xxx', '2022-02-17 00:00:00'),
(64, 'www', '2022-02-17 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `competition`
--

DROP TABLE IF EXISTS `competition`;
CREATE TABLE IF NOT EXISTS `competition` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `lieu` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `heure` datetime DEFAULT NULL,
  `idCat` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idCat` (`idCat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `entrainements`
--

DROP TABLE IF EXISTS `entrainements`;
CREATE TABLE IF NOT EXISTS `entrainements` (
  `idEntrainement` int(2) NOT NULL AUTO_INCREMENT,
  `jours` varchar(20) COLLATE utf8_bin NOT NULL,
  `debut` char(5) COLLATE utf8_bin NOT NULL,
  `fin` char(5) COLLATE utf8_bin NOT NULL,
  `idTerrain` int(2) NOT NULL,
  `idCat` varchar(5) COLLATE utf8_bin NOT NULL,
  `idEntrn` int(2) DEFAULT NULL,
  PRIMARY KEY (`idEntrainement`),
  KEY `fk_terrains` (`idTerrain`),
  KEY `fk_categories` (`idCat`),
  KEY `idEntrn` (`idEntrn`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `entrainements`
--

INSERT INTO `entrainements` (`idEntrainement`, `jours`, `debut`, `fin`, `idTerrain`, `idCat`, `idEntrn`) VALUES
(1, 'Mercredi', '15h00', '16h15', 1, 'U6', NULL),
(2, 'Mercredi', '15h00', '16h30', 1, 'U8', NULL),
(3, 'Mercredi', '16h00', '17h30', 1, 'U10', NULL),
(4, 'Mercredi', '17h00', '18h30', 1, 'U12', NULL),
(5, 'Mercredi', '18h00', '19h30', 2, 'U14', NULL),
(6, 'Vendredi', '18h00', '19h30', 1, 'U14', NULL),
(7, 'Mardi', '19h00', '20h30', 1, 'U16', NULL),
(8, 'Vendredi', '18h00', '20h00', 4, 'U16', NULL),
(9, 'Mercredi', '19h00', '20h30', 1, 'U18', NULL),
(10, 'Vendredi', '19h30', '21h00', 4, 'U18', NULL),
(11, 'Mardi', '20h00', '22h00', 1, 'U20', NULL),
(12, 'Jeudi', '20h00', '22h00', 2, 'U20', NULL),
(13, 'Mardi', '19h00', '20h30', 1, 'U19', NULL),
(14, 'Vendredi', '19h00', '20h30', 4, 'U19', NULL),
(15, 'Mercredi', '19h00', '20h30', 1, 'U20F', NULL),
(16, 'Mercredi', '19h30', '21h00', 4, 'U20F', NULL),
(17, 'Samedi', '10h00', '12h00', 2, 'RA', NULL),
(18, 'Lundi', '19h15', '20h00', 1, 'RL', NULL),
(19, 'Mardi', '11h45', '12h45', 5, 'RC', NULL),
(20, 'Samedi', '10h00', '11h00', 2, 'RC', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `entraineurs`
--

DROP TABLE IF EXISTS `entraineurs`;
CREATE TABLE IF NOT EXISTS `entraineurs` (
  `idEntrn` int(2) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(40) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `telephone` char(14) COLLATE utf8_bin DEFAULT NULL,
  `idEntrainement` int(2) DEFAULT NULL,
  `mdp` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idEntrn`),
  KEY `idEntrainement` (`idEntrainement`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `entraineurs`
--

INSERT INTO `entraineurs` (`idEntrn`, `nom`, `prenom`, `mail`, `telephone`, `idEntrainement`, `mdp`) VALUES
(1, 'Leroux', 'Julian', 'julianleroux94@hotmail.fr', '0671084257', NULL, '0'),
(2, 'Le Guillou', 'Loic', '', '0618556106', NULL, '0'),
(3, ' Lefranc', 'Anthony', 'antho_94800@hotmail.fr', '0668130287', NULL, '0'),
(4, 'Boukeroui', 'Yanis', 'boukeroui.yanis@gmail.com', '0677616963', NULL, '0'),
(5, 'Forstmann', 'Nicolas', 'nico.forstmann@hotmail.fr', '0635337747', NULL, '0'),
(6, 'Reby', 'Fabrice', '', '0630084489', NULL, '0'),
(7, 'Louis', 'Fabrice', '', '0609647753', NULL, '0'),
(8, 'aaa', 'aaa', 'aaa@gmail.com', '04 04 04 04 04', NULL, '$2y$10$2q8l69PuTWpZ7rapQyH7YeF00Cn4QmDxqc3krq1onBLZFWE7i1ulS');

-- --------------------------------------------------------

--
-- Structure de la table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `idManager` int(2) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(40) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(255) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `telPortable` char(14) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idManager`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `manager`
--

INSERT INTO `manager` (`idManager`, `nom`, `prenom`, `mdp`, `mail`, `telPortable`) VALUES
(1, 'Guirassy', 'Fatou', '0000', 'fg@hotmail.com', '0678987899'),
(2, 'theveu', 'ronan', '$2y$10$1YGCJBi2L.mSq02mCH2ACO8hPuhgMnhliyRBDHEdgERpTGKE9Mg8u', 'ronan@gmail.com', '06 06 05 04 01');

-- --------------------------------------------------------

--
-- Structure de la table `medecintraitant`
--

DROP TABLE IF EXISTS `medecintraitant`;
CREATE TABLE IF NOT EXISTS `medecintraitant` (
  `idMT` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `prenom` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `adresse` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `tel` char(14) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idMT`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `medecintraitant`
--

INSERT INTO `medecintraitant` (`idMT`, `nom`, `prenom`, `adresse`, `tel`) VALUES
(1, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(2, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(3, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(4, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(5, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(6, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(7, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(8, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(9, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(10, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(11, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(12, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(13, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(14, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(15, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(16, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(17, NULL, NULL, NULL, '01 02 05 06 06'),
(18, NULL, NULL, NULL, '01 02 05 06 06'),
(19, NULL, NULL, NULL, '01 02 05 06 06'),
(20, NULL, NULL, NULL, '01 02 05 06 06'),
(21, NULL, NULL, NULL, '01 02 05 06 06'),
(22, NULL, NULL, NULL, '01 02 05 06 06'),
(23, NULL, NULL, NULL, '01 02 05 06 06'),
(24, NULL, NULL, NULL, '01 02 05 06 06'),
(25, NULL, NULL, NULL, '01 02 05 06 06'),
(26, NULL, NULL, NULL, '01 02 05 06 06'),
(27, NULL, NULL, NULL, '01 02 05 06 06'),
(28, NULL, NULL, NULL, '01 02 05 06 06'),
(29, NULL, NULL, NULL, '01 02 05 06 06'),
(30, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(31, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(32, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(33, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(34, 'dzqd', 'qzdqzd', 'qzdd', '01 02 05 06 06'),
(35, 'nnn', 'nnn', 'nnn', '01 02 05 06 06'),
(36, 'aaa', 'aaa', 'aaa', '01 02 05 06 06'),
(37, 'aaa', 'aaa', 'aaa', '01 02 05 06 06'),
(38, 'aaa', 'aaa', 'aaa', '01 02 05 06 06'),
(39, 'aaa', 'aaa', 'aaa', '01 02 05 06 06'),
(40, 'aaa', 'aaa', 'aaa', '01 02 05 06 06'),
(41, 'aaa', 'aaa', 'aaa', '01 02 05 06 06'),
(42, 'aaa', 'aaa', 'aaa', '01 02 05 06 06'),
(43, 'ggg', 'ggg', 'ggg', '01 02 05 06 06'),
(44, 'ggg', 'ggg', 'ggg', '01 02 05 06 06'),
(45, 'ggg', 'ggg', 'ggg', '01 02 05 06 06'),
(46, 'ggg', 'ggg', 'ggg', '01 02 05 06 06'),
(47, 'ggg', 'ggg', 'ggg', '01 02 05 06 06'),
(48, 'ggg', 'ggg', 'ggg', '01 02 05 06 06'),
(49, 'ggg', 'ggg', 'ggg', '01 02 05 06 06'),
(50, 'ggg', 'ggg', 'ggg', '01 02 05 06 06'),
(51, 'ggg', 'ggg', 'ggg', '01 02 05 06 06'),
(52, 'ggg', 'ggg', 'ggg', '01 02 05 06 06'),
(53, 'ggg', 'ggg', 'ggg', '01 02 05 06 06'),
(54, 'ggg', 'ggg', 'ggg', '01 02 05 06 06'),
(55, 'ggg', 'ggg', 'ggg', '01 02 05 06 06'),
(56, 'ggg', 'ggg', 'ggg', '01 02 05 06 06'),
(57, 'hhh', 'hhh', 'hhh', '01 02 05 06 06'),
(58, 'hhh', 'hhh', 'hhh', '01 02 05 06 06'),
(59, 'hhh', 'hhh', 'hhh', '01 02 05 06 06'),
(60, 'hhh', 'hhh', 'hhh', '01 02 05 06 06'),
(61, 'hhh', 'hhh', 'hhh', '01 02 05 06 06'),
(62, 'hhh', 'hhh', 'hhh', '01 02 05 06 06'),
(63, 'hhh', 'hhh', 'hhh', '01 02 05 06 06'),
(64, 'xxx', 'xxx', 'xxx', '01 02 05 06 06'),
(65, 'www', 'www', 'www', '01 02 05 06 06');

-- --------------------------------------------------------

--
-- Structure de la table `mere`
--

DROP TABLE IF EXISTS `mere`;
CREATE TABLE IF NOT EXISTS `mere` (
  `idMere` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `prenom` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `mail` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `mdp` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `profession` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `adresse` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `ville` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `cp` char(5) CHARACTER SET latin1 DEFAULT NULL,
  `telPortable` char(14) CHARACTER SET latin1 DEFAULT NULL,
  `telDomicile` char(14) CHARACTER SET latin1 DEFAULT NULL,
  `entreprise` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idMere`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `mere`
--

INSERT INTO `mere` (`idMere`, `nom`, `prenom`, `mail`, `mdp`, `profession`, `adresse`, `ville`, `cp`, `telPortable`, `telDomicile`, `entreprise`) VALUES
(1, 'sed', 'zfz', 'dqzd@gmail.com', '3faa723542eb35450093333e0ab19d3a167bf211a0a928f5cb860a0f48f05bb99e2b0793a270d4b0f20526a8786b1bc778ddcb3abedf41742db57d4c0f46f0b3', 'sffe', 'zfzfz', 'zdz', '47777', '05 04 01 02 01', '01 01 01 02 03', 'zfzf'),
(2, 'sed', 'zfz', 'dqzd@gmail.com', '3faa723542eb35450093333e0ab19d3a167bf211a0a928f5cb860a0f48f05bb99e2b0793a270d4b0f20526a8786b1bc778ddcb3abedf41742db57d4c0f46f0b3', 'sffe', 'zfzfz', 'zdz', '47777', '05 04 01 02 01', '01 01 01 02 03', 'zfzf'),
(3, 'sed', 'zfz', 'dqzd@gmail.com', 'd6f644b19812e97b5d871658d6d3400ecd4787faeb9b8990c1e7608288664be77257104a58d033bcf1a0e0945ff06468ebe53e2dff36e248424c7273117dac09', 'sffe', 'zfzfz', 'zdz', '47777', '05 04 01 02 01', '01 01 01 02 03', 'zfzf'),
(4, 'hhh', 'hhh', 'dqzd@gmail.com', '$2y$10$29kfG6TCiNc7kwAl2eyItOJGrSrN.nPsqG33m.Q4cvaKmfW6olOHi', 'sffe', 'hhh', 'hhh', '22222', '05 04 01 02 01', '01 01 01 02 03', 'hhh'),
(5, 'hhh', 'hhh', 'dqzd@gmail.com', '$2y$10$PZ5vTasbmfLTM9rbrGn46.jmaYGseSx8k0YnTW4LjM17ymUXG3bNa', 'sffe', 'hhh', 'hhh', '22222', '05 04 01 02 01', '01 01 01 02 03', 'hhh'),
(6, 'hhh', 'hhh', 'dqzd@gmail.com', '$2y$10$J.go4WtDGEyqCAZINxy58e0az37sBVrvLU5TLh.zHvaaGqoAqgyYO', 'sffe', 'hhh', 'hhh', '22222', '05 04 01 02 01', '01 01 01 02 03', 'hhh'),
(7, 'hhh', 'hhh', 'dqzd@gmail.com', '$2y$10$ezkzBMmRO.T1VM/Sh5dNu.SbJ3BV6wZ5ZtXlSPPyULwhoDwrBWDii', 'sffe', 'hhh', 'hhh', '22222', '05 04 01 02 01', '01 01 01 02 03', 'hhh'),
(8, 'hhh', 'hhh', 'dqzd@gmail.com', '$2y$10$MamOhmvhbT6VKX0yMwIIkuBlk3TLaDuRrIMsveFbPD4mmzeJluEw.', 'sffe', 'hhh', 'hhh', '22222', '05 04 01 02 01', '01 01 01 02 03', 'hhh'),
(9, 'hhh', 'hhh', 'dqzd@gmail.com', '$2y$10$ZFBkst3z4cBHhFdCU94BYeWXvZAnyO1vLHgLFfm9nhi03H4HizSny', 'sffe', 'hhh', 'hhh', '22222', '05 04 01 02 01', '01 01 01 02 03', 'hhh'),
(10, 'hhh', 'hhh', 'dqzd@gmail.com', '$2y$10$1VvflsQLrYzdMhyqBIS5WubGLaqnhiWmjFefVcQ17IYcg0e.loUQO', 'sffe', 'hhh', 'hhh', '22222', '05 04 01 02 01', '01 01 01 02 03', 'hhh'),
(11, 'www', 'www', 'dqzd@gmail.com', '$2y$10$P3EfXG6e0jlcEPDzXPkUrOGZLqOoFXA7e4W0WW7z4.pzBkepkQ5be', 'www', 'www', 'www', '55555', '05 04 01 02 01', '01 01 01 02 03', 'www');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `idMessage` int(11) NOT NULL,
  `nom` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `prenom` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `mail` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `message` text CHARACTER SET latin1,
  PRIMARY KEY (`idMessage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

DROP TABLE IF EXISTS `partenaire`;
CREATE TABLE IF NOT EXISTS `partenaire` (
  `idPartenaire` int(2) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idPartenaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `pere`
--

DROP TABLE IF EXISTS `pere`;
CREATE TABLE IF NOT EXISTS `pere` (
  `idPere` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(40) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(80) COLLATE utf8_bin NOT NULL,
  `profession` varchar(40) COLLATE utf8_bin NOT NULL,
  `ville` varchar(30) COLLATE utf8_bin NOT NULL,
  `cp` char(5) COLLATE utf8_bin NOT NULL,
  `telPortable` char(14) COLLATE utf8_bin NOT NULL,
  `telDomicile` char(14) COLLATE utf8_bin NOT NULL,
  `mail` char(255) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(255) COLLATE utf8_bin NOT NULL,
  `entreprise` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idPere`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `pere`
--

INSERT INTO `pere` (`idPere`, `nom`, `prenom`, `adresse`, `profession`, `ville`, `cp`, `telPortable`, `telDomicile`, `mail`, `mdp`, `entreprise`) VALUES
(1, 'sef', 'esfs', 'qzdd', 'sfsf', 'qzd', '44444', '02 02 03 06 04', '01 05 04 08 09', 'fsfesf@gmail.com', '3863862886e379c0b09122262d21f465169e087c917e2e98e2e561e1b4ad6cf757297c61ec8e0f6c912538df37f4fe948960dc6ee17ff4fc71413a076cb48c5f', 'qzdq'),
(2, 'sef', 'esfs', 'qzdd', 'sfsf', 'qzd', '44444', '02 02 03 06 04', '01 05 04 08 09', 'fsfesf@gmail.com', '3863862886e379c0b09122262d21f465169e087c917e2e98e2e561e1b4ad6cf757297c61ec8e0f6c912538df37f4fe948960dc6ee17ff4fc71413a076cb48c5f', 'qzdq'),
(3, 'sef', 'esfs', 'qzdd', 'sfsf', 'qzd', '44444', '02 02 03 06 04', '01 05 04 08 09', 'fsfesf@gmail.com', 'f6c5600ed1dbdcfdf829081f5417dccbbd2b9288e0b427e65c8cf67e274b69009cd142475e15304f599f429f260a661b5df4de26746459a3cef7f32006e5d1c1', 'qzdq'),
(4, 'sef', 'esfs', 'zfzfz', 'hhh', 'hhh', '66666', '02 02 03 06 04', '01 05 04 08 09', 'hhh@gmail.com', '$2y$10$.9dFREhMx90knr2G3qLPGe9E0AwTN7.cdHVKgzGYs9J4ZGWH7PF0O', 'hhhh'),
(5, 'sef', 'esfs', 'zfzfz', 'hhh', 'hhh', '66666', '02 02 03 06 04', '01 05 04 08 09', 'hhh@gmail.com', '$2y$10$vy3lREO2YNI6iS.o7BbvQugIgwXIzIpAXQ1Nt1NqzPrDiQ3wturlK', 'hhhh'),
(6, 'sef', 'esfs', 'zfzfz', 'hhh', 'hhh', '66666', '02 02 03 06 04', '01 05 04 08 09', 'hhh@gmail.com', '$2y$10$4PBIQYuVvPK6bhzAx0VWXOBeZeUxE4EI9X6K.BHX9Js59wpqRBDpu', 'hhhh'),
(7, 'sef', 'esfs', 'zfzfz', 'hhh', 'hhh', '66666', '02 02 03 06 04', '01 05 04 08 09', 'hhh@gmail.com', '$2y$10$mIHJw0hV7woPoluDjME.pOT.FJPMlrO7r0g9XLOdJ300x.z2kfAiW', 'hhhh'),
(8, 'sef', 'esfs', 'zfzfz', 'hhh', 'hhh', '66666', '02 02 03 06 04', '01 05 04 08 09', 'hhh@gmail.com', '$2y$10$6Z7pYmIt8hcacyz5Uoj72uBB0gucvm5Yr0Eg5N.GN8PT0qvDCDwG2', 'hhhh'),
(9, 'sef', 'esfs', 'zfzfz', 'hhh', 'hhh', '66666', '02 02 03 06 04', '01 05 04 08 09', 'hhh@gmail.com', '$2y$10$JSSegrHu2WIHcdeNgamo3.acr.owWODnAbQTM.MGGTqPpz9FGUFwS', 'hhhh'),
(10, 'sef', 'esfs', 'zfzfz', 'hhh', 'hhh', '66666', '02 02 03 06 04', '01 05 04 08 09', 'hhh@gmail.com', '$2y$10$M8spCQlnlLX02UQq4OYdi.miiaB/I6MWbUQTMrDcTwUgQ50MEfS6S', 'hhhh'),
(11, 'www', 'www', 'www', 'hhh', 'www', '88888', '02 02 03 06 04', '01 05 04 08 09', 'www@gmail.com', '$2y$10$Yve5XCb8mJsrdAMgz3B6.eXJx/m5LCW4gjElfroJJNR8u1aLQ0Du2', 'hhhh');

-- --------------------------------------------------------

--
-- Structure de la table `personnecontact`
--

DROP TABLE IF EXISTS `personnecontact`;
CREATE TABLE IF NOT EXISTS `personnecontact` (
  `idPC` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `prenom` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `qualite` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `telPortable` char(14) CHARACTER SET latin1 DEFAULT NULL,
  `telDomicile` char(14) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idPC`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `personnecontact`
--

INSERT INTO `personnecontact` (`idPC`, `nom`, `prenom`, `qualite`, `telPortable`, `telDomicile`) VALUES
(1, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(2, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(3, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(4, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(5, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(6, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(7, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(8, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(9, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(10, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(11, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(12, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(13, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(14, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(15, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(16, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(17, NULL, NULL, NULL, '01 01 02 02 02', '01 05 80 96 08'),
(18, NULL, NULL, NULL, '01 01 02 02 02', '01 05 80 96 08'),
(19, NULL, NULL, NULL, '01 01 02 02 02', '01 05 80 96 08'),
(20, NULL, NULL, NULL, '01 01 02 02 02', '01 05 80 96 08'),
(21, NULL, NULL, NULL, '01 01 02 02 02', '01 05 80 96 08'),
(22, NULL, NULL, NULL, '01 01 02 02 02', '01 05 80 96 08'),
(23, NULL, NULL, NULL, '01 01 02 02 02', '01 05 80 96 08'),
(24, NULL, NULL, NULL, '01 01 02 02 02', '01 05 80 96 08'),
(25, NULL, NULL, NULL, '01 01 02 02 02', '01 05 80 96 08'),
(26, NULL, NULL, NULL, '01 01 02 02 02', '01 05 80 96 08'),
(27, NULL, NULL, NULL, '01 01 02 02 02', '01 05 80 96 08'),
(28, NULL, NULL, NULL, '01 01 02 02 02', '01 05 80 96 08'),
(29, NULL, NULL, NULL, '01 01 02 02 02', '01 05 80 96 08'),
(30, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(31, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(32, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(33, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(34, 'qzdq', 'dzqdqdqzdq', 'qzdq', '01 01 02 02 02', '01 05 80 96 08'),
(35, 'nnn', 'nnn', 'nnn', '01 01 02 02 02', '01 05 80 96 08'),
(36, 'aaa', 'aaa', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(37, 'aaa', 'aaa', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(38, 'aaa', 'aaa', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(39, 'aaa', 'aaa', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(40, 'aaa', 'aaa', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(41, 'aaa', 'aaa', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(42, 'aaa', 'aaa', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(43, 'ggg', 'ggg', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(44, 'ggg', 'ggg', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(45, 'ggg', 'ggg', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(46, 'ggg', 'ggg', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(47, 'ggg', 'ggg', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(48, 'ggg', 'ggg', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(49, 'ggg', 'ggg', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(50, 'ggg', 'ggg', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(51, 'ggg', 'ggg', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(52, 'ggg', 'ggg', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(53, 'ggg', 'ggg', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(54, 'ggg', 'ggg', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(55, 'ggg', 'ggg', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(56, 'ggg', 'ggg', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(57, 'hhh', 'hhh', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(58, 'hhh', 'hhh', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(59, 'hhh', 'hhh', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(60, 'hhh', 'hhh', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(61, 'hhh', 'hhh', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(62, 'hhh', 'hhh', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(63, 'hhh', 'hhh', 'adherent', '01 01 02 02 02', '01 05 80 96 08'),
(64, 'xxx', 'xxx', 'manager', '01 01 02 02 02', '01 05 80 96 08'),
(65, 'www', 'www', 'adherent', '01 01 02 02 02', '01 05 80 96 08');

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
CREATE TABLE IF NOT EXISTS `responsable` (
  `idResp` int(2) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(40) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `telephone` char(14) COLLATE utf8_bin DEFAULT NULL,
  `poste` varchar(30) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idResp`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `responsable`
--

INSERT INTO `responsable` (`idResp`, `nom`, `prenom`, `mail`, `telephone`, `poste`, `mdp`) VALUES
(1, 'Zellner', 'Sylvie', 'sylvief94800@hotmail.fr', '0637590313', '', ''),
(2, 'Lefranc', 'Anthony', 'lefranc.anthony94@gmail.com', '0661981067', '', ''),
(3, 'Guglielminetti', 'Sophie', 'guglielminetti.sophie@neuf.fr', '', '', ''),
(4, 'Corneille', 'Aurelie', 'aurelie94800@hotmail.com', '', '', ''),
(5, 'Lucas', 'Elisabeth', 'bbth94550@hotmail.com', '0761621503', '', ''),
(6, 'zzz', 'zzz', 'zzz@gmail.com', '04 04 04 04 04', 'zzz', '$2y$10$KeJGjgRQrSzQzDBuTA3V4e0aR9VD33mso48htGW7x4cw7BoDW3xAW');

-- --------------------------------------------------------

--
-- Structure de la table `soin`
--

DROP TABLE IF EXISTS `soin`;
CREATE TABLE IF NOT EXISTS `soin` (
  `idSoin` int(4) NOT NULL AUTO_INCREMENT,
  `lieuSoin` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `dateSoin` date DEFAULT NULL,
  `qualite` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `prenom` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `nom` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idSoin`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `soin`
--

INSERT INTO `soin` (`idSoin`, `lieuSoin`, `dateSoin`, `qualite`, `prenom`, `nom`) VALUES
(44, 'ggg', '2022-02-17', NULL, NULL, NULL),
(45, 'ggg', '2022-02-17', NULL, NULL, NULL),
(46, 'ggg', '2022-02-17', NULL, NULL, NULL),
(47, 'ggg', '2022-02-17', NULL, NULL, NULL),
(48, 'ggg', '2022-02-17', NULL, NULL, NULL),
(49, 'ggg', '2022-02-17', NULL, NULL, NULL),
(50, 'hhh', '2022-02-17', NULL, NULL, NULL),
(51, 'hhh', '2022-02-17', NULL, NULL, NULL),
(52, 'hhh', '2022-02-17', NULL, NULL, NULL),
(53, 'hhh', '2022-02-17', NULL, NULL, NULL),
(54, 'hhh', '2022-02-17', NULL, NULL, NULL),
(55, 'hhh', '2022-02-17', NULL, NULL, NULL),
(56, 'hhh', '2022-02-17', NULL, NULL, NULL),
(57, 'xxx', '2022-02-17', NULL, NULL, NULL),
(58, 'www', '2022-02-17', 'adherent', 'www', 'www');

-- --------------------------------------------------------

--
-- Structure de la table `terrains`
--

DROP TABLE IF EXISTS `terrains`;
CREATE TABLE IF NOT EXISTS `terrains` (
  `idTerrain` int(2) NOT NULL AUTO_INCREMENT,
  `nomTerrain` char(50) COLLATE utf8_bin NOT NULL,
  `ville` varchar(30) COLLATE utf8_bin NOT NULL,
  `cp` char(5) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(80) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idTerrain`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `terrains`
--

INSERT INTO `terrains` (`idTerrain`, `nomTerrain`, `ville`, `cp`, `adresse`) VALUES
(1, 'Stade Guy Boniface - Villejuif', '', '', ''),
(2, 'Stade de L\'Hayette - L\'HaÃ¿ les Roses', '', '', ''),
(3, 'Stade Evelyne GÃ©rard', '', '', ''),
(4, 'Stade Alfan Port Talbot', '', '', ''),
(5, 'Pelouse Parc des Hautes BruyÃ¨res', '', '', '');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adherents`
--
ALTER TABLE `adherents`
  ADD CONSTRAINT `adherents_ibfk_1` FOREIGN KEY (`idCat`) REFERENCES `categorie` (`idCat`),
  ADD CONSTRAINT `adherents_ibfk_2` FOREIGN KEY (`idAutorisation`) REFERENCES `autorisation` (`idAutorisation`),
  ADD CONSTRAINT `adherents_ibfk_3` FOREIGN KEY (`idPC`) REFERENCES `personnecontact` (`idPC`),
  ADD CONSTRAINT `adherents_ibfk_4` FOREIGN KEY (`idCharte`) REFERENCES `charte` (`idCharte`),
  ADD CONSTRAINT `adherents_ibfk_5` FOREIGN KEY (`idMT`) REFERENCES `medecintraitant` (`idMT`),
  ADD CONSTRAINT `adherents_ibfk_6` FOREIGN KEY (`idMere`) REFERENCES `mere` (`idMere`),
  ADD CONSTRAINT `adherents_ibfk_7` FOREIGN KEY (`idPere`) REFERENCES `pere` (`idPere`),
  ADD CONSTRAINT `adherents_ibfk_8` FOREIGN KEY (`idSoin`) REFERENCES `soin` (`idSoin`);

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `fk_entraineur` FOREIGN KEY (`idEntrn`) REFERENCES `entraineurs` (`idEntrn`),
  ADD CONSTRAINT `fk_responsable` FOREIGN KEY (`idResp`) REFERENCES `responsable` (`idResp`);

--
-- Contraintes pour la table `entrainements`
--
ALTER TABLE `entrainements`
  ADD CONSTRAINT `entrainements_ibfk_1` FOREIGN KEY (`idEntrn`) REFERENCES `entraineurs` (`idEntrn`),
  ADD CONSTRAINT `fk_categories` FOREIGN KEY (`idCat`) REFERENCES `categorie` (`idCat`),
  ADD CONSTRAINT `fk_terrain` FOREIGN KEY (`idTerrain`) REFERENCES `terrains` (`idTerrain`),
  ADD CONSTRAINT `fk_terrains` FOREIGN KEY (`idTerrain`) REFERENCES `terrains` (`idTerrain`);

--
-- Contraintes pour la table `entraineurs`
--
ALTER TABLE `entraineurs`
  ADD CONSTRAINT `entraineurs_ibfk_1` FOREIGN KEY (`idEntrainement`) REFERENCES `entrainements` (`idEntrainement`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
