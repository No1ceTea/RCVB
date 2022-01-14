-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 11 jan. 2022 à 15:44
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

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
  `telPortable` char(10) COLLATE utf8_bin DEFAULT NULL,
  `telDomicile` char(10) COLLATE utf8_bin DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `nationalite` varchar(30) COLLATE utf8_bin NOT NULL,
  `numSS` char(15) COLLATE utf8_bin NOT NULL,
  `idP` int(5) NOT NULL,
  `pieceIdentite` longblob NOT NULL,
  `photo` blob NOT NULL,
  `idCat` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idAdh`),
  KEY `fk_idParent` (`idP`),
  KEY `idCat` (`idCat`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `adherents`
--

INSERT INTO `adherents` (`idAdh`, `nom`, `prenom`, `dateNaiss`, `lieuNaiss`, `adresse`, `ville`, `cp`, `telPortable`, `telDomicile`, `mail`, `nationalite`, `numSS`, `idP`, `pieceIdentite`, `photo`, `idCat`) VALUES
(12, 'nhvnhvmbmb', 'jhvnhv', '2000-09-09', 'Paris 11', 'nbv sfv', 'Paris 15e Arrondissement', '75015', '0643908745', '0982736455', 'hgdf@gmail.com', 'francaise', '12345678901234', 4, '', '', NULL),
(13, 'fatou', 'guirassy', '2009-09-08', 'paris 11', '65 boulevard victor', 'paris', '75015', '0709090909', '', 'fcdgd@gouj.fr', 'francaise', '121234567890123', 5, '', '', NULL),
(14, 'fatou', 'guirassy', '2009-09-08', 'paris 11', '65 boulevard victor', 'paris', '75015', '0709090909', '', 'fcdgd@gouj.fr', 'francaise', '121234567890123', 6, '', '', NULL),
(15, 'fatou', 'guirassy', '2009-09-08', 'paris 11', '65 boulevard victor', 'paris', '75015', '0709090909', '', 'fcdgd@gouj.fr', 'francaise', '121234567890123', 7, '', '', NULL);

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
-- Structure de la table `dirigeant`
--

DROP TABLE IF EXISTS `dirigeant`;
CREATE TABLE IF NOT EXISTS `dirigeant` (
  `idDirigeant` int(2) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(35) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(35) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `telPortable` char(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idDirigeant`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `dirigeant`
--

INSERT INTO `dirigeant` (`idDirigeant`, `nom`, `prenom`, `login`, `mdp`, `mail`, `telPortable`) VALUES
(1, 'Guirassy', 'Fatou', 'fguira', '0000', 'fg@hotmail.com', '0678987899');

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
  PRIMARY KEY (`idEntrainement`),
  KEY `fk_terrains` (`idTerrain`),
  KEY `fk_categories` (`idCat`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `entrainements`
--

INSERT INTO `entrainements` (`idEntrainement`, `jours`, `debut`, `fin`, `idTerrain`, `idCat`) VALUES
(1, 'Mercredi', '15h00', '16h15', 1, 'U6'),
(2, 'Mercredi', '15h00', '16h30', 1, 'U8'),
(3, 'Mercredi', '16h00', '17h30', 1, 'U10'),
(4, 'Mercredi', '17h00', '18h30', 1, 'U12'),
(5, 'Mercredi', '18h00', '19h30', 2, 'U14'),
(6, 'Vendredi', '18h00', '19h30', 1, 'U14'),
(7, 'Mardi', '19h00', '20h30', 1, 'U16'),
(8, 'Vendredi', '18h00', '20h00', 4, 'U16'),
(9, 'Mercredi', '19h00', '20h30', 1, 'U18'),
(10, 'Vendredi', '19h30', '21h00', 4, 'U18'),
(11, 'Mardi', '20h00', '22h00', 1, 'U20'),
(12, 'Jeudi', '20h00', '22h00', 2, 'U20'),
(13, 'Mardi', '19h00', '20h30', 1, 'U19'),
(14, 'Vendredi', '19h00', '20h30', 4, 'U19'),
(15, 'Mercredi', '19h00', '20h30', 1, 'U20F'),
(16, 'Mercredi', '19h30', '21h00', 4, 'U20F'),
(17, 'Samedi', '10h00', '12h00', 2, 'RA'),
(18, 'Lundi', '19h15', '20h00', 1, 'RL'),
(19, 'Mardi', '11h45', '12h45', 5, 'RC'),
(20, 'Samedi', '10h00', '11h00', 2, 'RC');

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
  `telephone` char(10) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idEntrn`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `entraineurs`
--

INSERT INTO `entraineurs` (`idEntrn`, `nom`, `prenom`, `mail`, `telephone`) VALUES
(1, 'Leroux', 'Julian', 'julianleroux94@hotmail.fr', '0671084257'),
(2, 'Le Guillou', 'Loic', '', '0618556106'),
(3, ' Lefranc', 'Anthony', 'antho_94800@hotmail.fr', '0668130287'),
(4, 'Boukeroui', 'Yanis', 'boukeroui.yanis@gmail.com', '0677616963'),
(5, 'Forstmann', 'Nicolas', 'nico.forstmann@hotmail.fr', '0635337747'),
(6, 'Reby', 'Fabrice', '', '0630084489'),
(7, 'Louis', 'Fabrice', '', '0609647753');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `idMessage` int(11) NOT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`idMessage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `parents`
--

DROP TABLE IF EXISTS `parents`;
CREATE TABLE IF NOT EXISTS `parents` (
  `idParent` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(40) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(80) COLLATE utf8_bin NOT NULL,
  `profession` varchar(40) COLLATE utf8_bin NOT NULL,
  `ville` varchar(30) COLLATE utf8_bin NOT NULL,
  `cp` char(5) COLLATE utf8_bin NOT NULL,
  `telPor` char(10) COLLATE utf8_bin NOT NULL,
  `telDom` char(10) COLLATE utf8_bin NOT NULL,
  `mail` char(255) COLLATE utf8_bin NOT NULL,
  `lienParente` varchar(15) COLLATE utf8_bin NOT NULL,
  `pieceIdentiteP` longblob NOT NULL,
  PRIMARY KEY (`idParent`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `parents`
--

INSERT INTO `parents` (`idParent`, `nom`, `prenom`, `adresse`, `profession`, `ville`, `cp`, `telPor`, `telDom`, `mail`, `lienParente`, `pieceIdentiteP`) VALUES
(1, 'guirassy', 'fgbgfb', 'dxfgsfgh', 'trsghsrtg', 'ertsr', '75007', '0745434555', '', 'fagsn@jnn.fr', '', ''),
(2, 'cvgvh', 'bis', 'jugvfc', 'ratp', 'paris', '94500', '0745434566', '', 'mnhbvg@jhb.fr', 'mere', ''),
(3, 'cvgvh', 'bis', 'jugvfc', 'ratp', 'paris', '94500', '0745434566', '', 'mnhbvg@jhb.fr', 'pere', ''),
(4, 'hjdvc', 'sdfszge', '65 Boulevard Victor', 'bgcf', 'Paris 15e Arrondissement', '75015', '0790909090', '', 'jzshg@htmail.com', 'soeur', ''),
(5, 'hgfc', 'jmbhv', 'jhv hv', 'nbsdc', 'paris', '75009', '0702983899', '', 'sad@jhsd.fr', 'frere', ''),
(6, 'hgfc', 'jmbhv', 'jhv hv', 'nbsdc', 'paris', '75009', '0702983899', '', 'sad@jhsd.fr', 'bpere', ''),
(7, 'hgfc', 'jmbhv', 'jhv hv', 'nbsdc', 'paris', '75009', '0702983899', '8687876', 'sad@jhsd.fr', 'bpere', ''),
(8, '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
CREATE TABLE IF NOT EXISTS `responsable` (
  `idResp` int(2) NOT NULL,
  `nom` varchar(40) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(40) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `telephone` char(10) COLLATE utf8_bin DEFAULT NULL,
  `poste` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idResp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `responsable`
--

INSERT INTO `responsable` (`idResp`, `nom`, `prenom`, `mail`, `telephone`, `poste`) VALUES
(1, 'Zellner', 'Sylvie', 'sylvief94800@hotmail.fr', '0637590313', ''),
(2, 'Lefranc', 'Anthony', 'lefranc.anthony94@gmail.com', '0661981067', ''),
(3, 'Guglielminetti', 'Sophie', 'guglielminetti.sophie@neuf.fr', '', ''),
(4, 'Corneille', 'Aurelie', 'aurelie94800@hotmail.com', '', ''),
(5, 'Lucas', 'Elisabeth', 'bbth94550@hotmail.com', '0761621503', '');

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
  `transport` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idTerrain`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `terrains`
--

INSERT INTO `terrains` (`idTerrain`, `nomTerrain`, `ville`, `cp`, `adresse`, `transport`) VALUES
(1, 'Stade Guy Boniface - Villejuif', '', '', '', ''),
(2, 'Stade de L\'Hayette - L\'Haÿ les Roses', '', '', '', ''),
(3, 'Stade Evelyne Gérard', '', '', '', ''),
(4, 'Stade Alfan Port Talbot', '', '', '', ''),
(5, 'Pelouse Parc des Hautes Bruyères', '', '', '', '');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adherents`
--
ALTER TABLE `adherents`
  ADD CONSTRAINT `adherents_ibfk_1` FOREIGN KEY (`idCat`) REFERENCES `categorie` (`idCat`),
  ADD CONSTRAINT `fk_idParent` FOREIGN KEY (`idP`) REFERENCES `parents` (`idParent`);

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
  ADD CONSTRAINT `fk_categories` FOREIGN KEY (`idCat`) REFERENCES `categorie` (`idCat`),
  ADD CONSTRAINT `fk_terrain` FOREIGN KEY (`idTerrain`) REFERENCES `terrains` (`idTerrain`),
  ADD CONSTRAINT `fk_terrains` FOREIGN KEY (`idTerrain`) REFERENCES `terrains` (`idTerrain`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
