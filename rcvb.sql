-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 20 jan. 2022 à 15:56
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
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `idActu` int(3) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) DEFAULT NULL,
  `texte` text,
  `datePublication` datetime DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idActu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `nationalite` varchar(30) COLLATE utf8_bin NOT NULL,
  `numSS` char(15) COLLATE utf8_bin NOT NULL,
  `idP` int(5) DEFAULT NULL,
  `idCat` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `idAutorisation` int(4) NOT NULL,
  `idPC` int(4) DEFAULT NULL,
  `idCharte` int(4) DEFAULT NULL,
  `idMT` int(3) DEFAULT NULL,
  PRIMARY KEY (`idAdh`),
  KEY `fk_idParent` (`idP`),
  KEY `idCat` (`idCat`),
  KEY `idAutorisation` (`idAutorisation`),
  KEY `idPC` (`idPC`),
  KEY `idCharte` (`idCharte`),
  KEY `idMT` (`idMT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `autorisation`
--

DROP TABLE IF EXISTS `autorisation`;
CREATE TABLE IF NOT EXISTS `autorisation` (
  `idAutorisation` int(4) NOT NULL AUTO_INCREMENT,
  `Particiapation` tinyint(1) DEFAULT NULL,
  `encadrer` tinyint(1) DEFAULT NULL,
  `CNILFRR` tinyint(1) DEFAULT NULL,
  `sortie` tinyint(1) DEFAULT NULL,
  `signature` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idAutorisation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `lieu` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`idCharte`)
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
  `telephone` char(10) COLLATE utf8_bin DEFAULT NULL,
  `idEntrainement` int(2) DEFAULT NULL,
  `mdp` varchar(128) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idEntrn`),
  KEY `idEntrainement` (`idEntrainement`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(7, 'Louis', 'Fabrice', '', '0609647753', NULL, '0');

-- --------------------------------------------------------

--
-- Structure de la table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `idManager` int(2) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(40) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(128) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `telPortable` char(14) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idManager`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `manager`
--

INSERT INTO `manager` (`idManager`, `nom`, `prenom`, `mdp`, `mail`, `telPortable`) VALUES
(1, 'Guirassy', 'Fatou', '0000', 'fg@hotmail.com', '0678987899'),
(2, 'theveu', 'ronan', '7343ee13f38e6228eafc531156fddce9', 'ronantheveu@gmail.com', '0651633085'),
(3, 'dqzd', 'zqdqdz', 'aaaa', 'dqd@gmail.com', '05 02 03 06 05'),
(4, 'dzqd', 'dqzd', '1b86355f13a7f0b90c8b6053c0254399994dfbb3843e08d603e292ca13b8f672ed5e58791c10f3e36daec9699cc2fbdc88b4fe116efa7fce016938b787043818', 'dq@gmail.com', '05 02 03 06 06'),
(5, 'da', 'daad', '6c89030400dbcd6561f8e03c8ccbeff4d8150988e635af53a581622da3223e37a64abb3f26a1cff7f0014c32e4ca615e76534fb53830e54c67603b892124c8d1', 'aa@gmail.com', '05 04 05 06 06'),
(6, 'dqd', 'qddqd', '5e3b118f9e6917361f4a1e222becdf0ba765ba94447ee0065776a596007156bc0e570e6446e6bdf68e33fa182915dd36a155162b29a0f5a40feca462a5985fdd', 'qq@gmail.com', '05 04 02 01 01');

-- --------------------------------------------------------

--
-- Structure de la table `medecintraitant`
--

DROP TABLE IF EXISTS `medecintraitant`;
CREATE TABLE IF NOT EXISTS `medecintraitant` (
  `idMT` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `tel` char(14) DEFAULT NULL,
  PRIMARY KEY (`idMT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mere`
--

DROP TABLE IF EXISTS `mere`;
CREATE TABLE IF NOT EXISTS `mere` (
  `idMere` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `mdp` varchar(128) DEFAULT NULL,
  `profession` varchar(30) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `ville` varchar(40) DEFAULT NULL,
  `cp` char(5) DEFAULT NULL,
  `telPortable` char(14) DEFAULT NULL,
  `telDomicile` char(14) DEFAULT NULL,
  `entreprise` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idMere`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Structure de la table `partenaire`
--

DROP TABLE IF EXISTS `partenaire`;
CREATE TABLE IF NOT EXISTS `partenaire` (
  `idPartenaire` int(2) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idPartenaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pere`
--

DROP TABLE IF EXISTS `pere`;
CREATE TABLE IF NOT EXISTS `pere` (
  `idParent` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(40) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(80) COLLATE utf8_bin NOT NULL,
  `profession` varchar(40) COLLATE utf8_bin NOT NULL,
  `ville` varchar(30) COLLATE utf8_bin NOT NULL,
  `cp` char(5) COLLATE utf8_bin NOT NULL,
  `telPortable` char(14) COLLATE utf8_bin NOT NULL,
  `telDomicile` char(14) COLLATE utf8_bin NOT NULL,
  `mail` char(255) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(128) COLLATE utf8_bin NOT NULL,
  `entreprise` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idParent`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `pere`
--

INSERT INTO `pere` (`idParent`, `nom`, `prenom`, `adresse`, `profession`, `ville`, `cp`, `telPortable`, `telDomicile`, `mail`, `mdp`, `entreprise`) VALUES
(1, 'guirassy', 'fgbgfb', 'dxfgsfgh', 'trsghsrtg', 'ertsr', '75007', '0745434555', '', 'fagsn@jnn.fr', '', NULL),
(2, 'cvgvh', 'bis', 'jugvfc', 'ratp', 'paris', '94500', '0745434566', '', 'mnhbvg@jhb.fr', '', NULL),
(3, 'cvgvh', 'bis', 'jugvfc', 'ratp', 'paris', '94500', '0745434566', '', 'mnhbvg@jhb.fr', '', NULL),
(4, 'hjdvc', 'sdfszge', '65 Boulevard Victor', 'bgcf', 'Paris 15e Arrondissement', '75015', '0790909090', '', 'jzshg@htmail.com', '', NULL),
(5, 'hgfc', 'jmbhv', 'jhv hv', 'nbsdc', 'paris', '75009', '0702983899', '', 'sad@jhsd.fr', '', NULL),
(6, 'hgfc', 'jmbhv', 'jhv hv', 'nbsdc', 'paris', '75009', '0702983899', '', 'sad@jhsd.fr', '', NULL),
(7, 'hgfc', 'jmbhv', 'jhv hv', 'nbsdc', 'paris', '75009', '0702983899', '8687876', 'sad@jhsd.fr', '', NULL),
(8, '', '', '', '', '', '', '', '', '', '', NULL),
(9, 'dqzdqz', 'dqzdqq', 'dqd', 'sff', 'dzqad', '45455', '04 05 02 06 03', '04 02 06 08 09', 'dqsdq@gmail.com', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `personnecontact`
--

DROP TABLE IF EXISTS `personnecontact`;
CREATE TABLE IF NOT EXISTS `personnecontact` (
  `idPC` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `qualité` varchar(30) DEFAULT NULL,
  `telPortable` char(14) DEFAULT NULL,
  `telDomicile` char(14) DEFAULT NULL,
  PRIMARY KEY (`idPC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`idTerrain`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `terrains`
--

INSERT INTO `terrains` (`idTerrain`, `nomTerrain`, `ville`, `cp`, `adresse`) VALUES
(1, 'Stade Guy Boniface - Villejuif', '', '', ''),
(2, 'Stade de L\'Hayette - L\'Haÿ les Roses', '', '', ''),
(3, 'Stade Evelyne Gérard', '', '', ''),
(4, 'Stade Alfan Port Talbot', '', '', ''),
(5, 'Pelouse Parc des Hautes Bruyères', '', '', '');

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
  ADD CONSTRAINT `fk_idParent` FOREIGN KEY (`idP`) REFERENCES `pere` (`idParent`);

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
