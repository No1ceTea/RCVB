-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 17, 2021 at 05:53 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `rugby`
--

-- --------------------------------------------------------

--
-- Table structure for table `adherents`
--

CREATE TABLE `adherents` (
  `idAdh` int(4) NOT NULL,
  `nom` char(20) COLLATE utf8_bin NOT NULL,
  `prenom` char(40) COLLATE utf8_bin NOT NULL,
  `dateNaiss` date NOT NULL,
  `lieuNaiss` char(30) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(80) COLLATE utf8_bin NOT NULL,
  `ville` varchar(30) COLLATE utf8_bin NOT NULL,
  `cp` char(5) COLLATE utf8_bin NOT NULL,
  `telPortable` char(10) COLLATE utf8_bin DEFAULT NULL,
  `telDomicile` char(10) COLLATE utf8_bin DEFAULT NULL,
  `mail` char(80) COLLATE utf8_bin DEFAULT NULL,
  `nationalite` char(20) COLLATE utf8_bin NOT NULL,
  `numSS` char(15) COLLATE utf8_bin NOT NULL,
  `idP` int(11) NOT NULL,
  `pieceIdentite` longblob NOT NULL,
  `photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adherents`
--

INSERT INTO `adherents` (`idAdh`, `nom`, `prenom`, `dateNaiss`, `lieuNaiss`, `adresse`, `ville`, `cp`, `telPortable`, `telDomicile`, `mail`, `nationalite`, `numSS`, `idP`, `pieceIdentite`, `photo`) VALUES
(12, 'nhvnhvmbmb', 'jhvnhv', '2000-09-09', 'Paris 11', 'nbv sfv', 'Paris 15e Arrondissement', '75015', '0643908745', '0982736455', 'hgdf@gmail.com', 'francaise', '12345678901234', 4, '', ''),
(13, 'fatou', 'guirassy', '2009-09-08', 'paris 11', '65 boulevard victor', 'paris', '75015', '0709090909', '', 'fcdgd@gouj.fr', 'francaise', '121234567890123', 5, '', ''),
(14, 'fatou', 'guirassy', '2009-09-08', 'paris 11', '65 boulevard victor', 'paris', '75015', '0709090909', '', 'fcdgd@gouj.fr', 'francaise', '121234567890123', 6, '', ''),
(15, 'fatou', 'guirassy', '2009-09-08', 'paris 11', '65 boulevard victor', 'paris', '75015', '0709090909', '', 'fcdgd@gouj.fr', 'francaise', '121234567890123', 7, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `numCat` char(5) COLLATE utf8_bin NOT NULL,
  `nomCat` char(20) COLLATE utf8_bin NOT NULL,
  `idResp` int(2) DEFAULT NULL,
  `idEntrn` int(2) DEFAULT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`numCat`, `nomCat`, `idResp`, `idEntrn`, `prix`) VALUES
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
-- Table structure for table `dirigeant`
--

CREATE TABLE `dirigeant` (
  `idDirigeant` int(11) NOT NULL,
  `nom` char(35) COLLATE utf8_bin NOT NULL,
  `prenom` char(55) COLLATE utf8_bin NOT NULL,
  `login` char(35) COLLATE utf8_bin NOT NULL,
  `mdp` char(35) COLLATE utf8_bin NOT NULL,
  `mail` char(45) COLLATE utf8_bin NOT NULL,
  `telPortable` char(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `dirigeant`
--

INSERT INTO `dirigeant` (`idDirigeant`, `nom`, `prenom`, `login`, `mdp`, `mail`, `telPortable`) VALUES
(1, 'Guirassy', 'Fatou', 'fguira', '0000', 'fg@hotmail.com', '0678987899');

-- --------------------------------------------------------

--
-- Table structure for table `entrainements`
--

CREATE TABLE `entrainements` (
  `idEntrainement` int(2) NOT NULL,
  `jours` char(20) COLLATE utf8_bin NOT NULL,
  `debut` char(5) COLLATE utf8_bin NOT NULL,
  `fin` char(5) COLLATE utf8_bin NOT NULL,
  `idTerrain` int(2) NOT NULL,
  `idCat` char(5) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `entrainements`
--

INSERT INTO `entrainements` (`idEntrainement`, `jours`, `debut`, `fin`, `idTerrain`, `idCat`) VALUES
(1, 'Mercredi', '15h', '16h15', 1, 'U6'),
(2, 'Mercredi', '15h', '16h30', 1, 'U8'),
(3, 'Mercredi', '16h', '17h30', 1, 'U10'),
(4, 'Mercredi', '17h', '18h30', 1, 'U12'),
(5, 'Mercredi', '18h', '19h30', 2, 'U14'),
(6, 'Vendredi', '18h', '19h30', 1, 'U14'),
(7, 'Mardi', '19h', '20h30', 1, 'U16'),
(8, 'Vendredi', '18h', '20h', 4, 'U16'),
(9, 'Mercredi', '19h', '20h30', 1, 'U18'),
(10, 'Vendredi', '19h30', '21h', 4, 'U18'),
(11, 'Mardi', '20h', '22h', 1, 'U20'),
(12, 'Jeudi', '20h', '22h', 2, 'U20'),
(13, 'Mardi', '19h', '20h30', 1, 'U19'),
(14, 'Vendredi', '19h', '20h30', 4, 'U19'),
(15, 'Mercredi', '19h', '20h30', 1, 'U20F'),
(16, 'Mercredi', '19h30', '21h', 4, 'U20F'),
(17, 'Samedi', '10h', '12h', 2, 'RA'),
(18, 'Lundi', '19h15', '20h', 1, 'RL'),
(19, 'Mardi', '11h45', '12h45', 5, 'RC'),
(20, 'Samedi', '10h', '11h', 2, 'RC');

-- --------------------------------------------------------

--
-- Table structure for table `entraineurs`
--

CREATE TABLE `entraineurs` (
  `idEntrn` int(2) NOT NULL,
  `nom` char(20) COLLATE utf8_bin NOT NULL,
  `prenom` char(40) COLLATE utf8_bin NOT NULL,
  `mail` char(80) COLLATE utf8_bin DEFAULT NULL,
  `telephone` char(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `entraineurs`
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
-- Table structure for table `inscrits`
--

CREATE TABLE `inscrits` (
  `idInscrit` int(2) NOT NULL,
  `idAdh` int(2) NOT NULL,
  `idCat` char(5) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `idParent` int(5) NOT NULL,
  `nom` char(30) COLLATE utf8_bin NOT NULL,
  `prenom` char(30) COLLATE utf8_bin NOT NULL,
  `adresse` char(80) COLLATE utf8_bin NOT NULL,
  `profession` char(30) COLLATE utf8_bin NOT NULL,
  `ville` char(30) COLLATE utf8_bin NOT NULL,
  `cp` char(15) COLLATE utf8_bin NOT NULL,
  `telPor` char(15) COLLATE utf8_bin NOT NULL,
  `telDom` char(15) COLLATE utf8_bin NOT NULL,
  `mail` char(55) COLLATE utf8_bin NOT NULL,
  `lienParente` char(20) COLLATE utf8_bin NOT NULL,
  `pieceIdentiteP` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`idParent`, `nom`, `prenom`, `adresse`, `profession`, `ville`, `cp`, `telPor`, `telDom`, `mail`, `lienParente`, `pieceIdentiteP`) VALUES
(1, 'guirassy', 'fgbgfb', 'dxfgsfgh', 'trsghsrtg', 'ertsr', '75007', '0745434555', '', 'fagsn@jnn.fr', '', ''),
(2, 'cvgvh', 'bis', 'jugvfc', 'ratp', 'paris', '94500', '07454345667', '', 'mnhbvg@jhb.fr', 'mere', ''),
(3, 'cvgvh', 'bis', 'jugvfc', 'ratp', 'paris', '94500', '07454345667', '', 'mnhbvg@jhb.fr', 'pere', ''),
(4, 'hjdvc', 'sdfszge', '65 Boulevard Victor', 'bgcf', 'Paris 15e Arrondissement', '75015', '0790909090', '', 'jzshg@htmail.com', 'soeur', ''),
(5, 'hgfc', 'jmbhv', 'jhv hv', 'nbsdc', 'paris', '75009', '0702983899', '', 'sad@jhsd.fr', 'frere', ''),
(6, 'hgfc', 'jmbhv', 'jhv hv', 'nbsdc', 'paris', '75009', '0702983899', '', 'sad@jhsd.fr', 'bpere', ''),
(7, 'hgfc', 'jmbhv', 'jhv hv', 'nbsdc', 'paris', '75009', '0702983899', '8687876', 'sad@jhsd.fr', 'bpere', ''),
(8, '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `responsable`
--

CREATE TABLE `responsable` (
  `idResp` int(2) NOT NULL,
  `nom` char(20) COLLATE utf8_bin NOT NULL,
  `prenom` char(40) COLLATE utf8_bin NOT NULL,
  `mail` char(80) COLLATE utf8_bin NOT NULL,
  `telephone` char(15) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `responsable`
--

INSERT INTO `responsable` (`idResp`, `nom`, `prenom`, `mail`, `telephone`) VALUES
(1, 'Zellner', 'Sylvie', 'sylvief94800@hotmail.fr', '0637590313'),
(2, 'Lefranc', 'Anthony', 'lefranc.anthony94@gmail.com', '0661981067'),
(3, 'Guglielminetti', 'Sophie', 'guglielminetti.sophie@neuf.fr', ''),
(4, 'Corneille', 'Aurelie', 'aurelie94800@hotmail.com', ''),
(5, 'Lucas', 'Elisabeth', 'bbth94550@hotmail.com', '0761621503');

-- --------------------------------------------------------

--
-- Table structure for table `terrains`
--

CREATE TABLE `terrains` (
  `idTerrain` int(2) NOT NULL,
  `nomTerrain` char(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `terrains`
--

INSERT INTO `terrains` (`idTerrain`, `nomTerrain`) VALUES
(1, 'Stade Guy Boniface - Villejuif'),
(2, 'Stade de L\'Hayette - L\'Haÿ les Roses'),
(3, 'Stade Evelyne Gérard'),
(4, 'Stade Alfan Port Talbot'),
(5, 'Pelouse Parc des Hautes Bruyères');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adherents`
--
ALTER TABLE `adherents`
  ADD PRIMARY KEY (`idAdh`),
  ADD KEY `fk_idParent` (`idP`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`numCat`),
  ADD KEY `fk_responsable` (`idResp`),
  ADD KEY `fk_entraineur` (`idEntrn`);

--
-- Indexes for table `dirigeant`
--
ALTER TABLE `dirigeant`
  ADD PRIMARY KEY (`idDirigeant`);

--
-- Indexes for table `entrainements`
--
ALTER TABLE `entrainements`
  ADD PRIMARY KEY (`idEntrainement`),
  ADD KEY `fk_terrains` (`idTerrain`),
  ADD KEY `fk_categories` (`idCat`);

--
-- Indexes for table `entraineurs`
--
ALTER TABLE `entraineurs`
  ADD PRIMARY KEY (`idEntrn`);

--
-- Indexes for table `inscrits`
--
ALTER TABLE `inscrits`
  ADD PRIMARY KEY (`idInscrit`,`idAdh`,`idCat`),
  ADD KEY `fk_idAdh` (`idAdh`),
  ADD KEY `fk_idCat` (`idCat`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`idParent`);

--
-- Indexes for table `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`idResp`);

--
-- Indexes for table `terrains`
--
ALTER TABLE `terrains`
  ADD PRIMARY KEY (`idTerrain`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adherents`
--
ALTER TABLE `adherents`
  MODIFY `idAdh` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dirigeant`
--
ALTER TABLE `dirigeant`
  MODIFY `idDirigeant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `entrainements`
--
ALTER TABLE `entrainements`
  MODIFY `idEntrainement` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `entraineurs`
--
ALTER TABLE `entraineurs`
  MODIFY `idEntrn` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inscrits`
--
ALTER TABLE `inscrits`
  MODIFY `idInscrit` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `idParent` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `terrains`
--
ALTER TABLE `terrains`
  MODIFY `idTerrain` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adherents`
--
ALTER TABLE `adherents`
  ADD CONSTRAINT `fk_idParent` FOREIGN KEY (`idP`) REFERENCES `parents` (`idParent`);

--
-- Constraints for table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `fk_entraineur` FOREIGN KEY (`idEntrn`) REFERENCES `entraineurs` (`idEntrn`),
  ADD CONSTRAINT `fk_responsable` FOREIGN KEY (`idResp`) REFERENCES `responsable` (`idResp`);

--
-- Constraints for table `entrainements`
--
ALTER TABLE `entrainements`
  ADD CONSTRAINT `fk_categories` FOREIGN KEY (`idCat`) REFERENCES `categorie` (`numCat`),
  ADD CONSTRAINT `fk_terrain` FOREIGN KEY (`idTerrain`) REFERENCES `terrains` (`idTerrain`),
  ADD CONSTRAINT `fk_terrains` FOREIGN KEY (`idTerrain`) REFERENCES `terrains` (`idTerrain`);

--
-- Constraints for table `inscrits`
--
ALTER TABLE `inscrits`
  ADD CONSTRAINT `fk_idAdh` FOREIGN KEY (`idAdh`) REFERENCES `adherents` (`idAdh`),
  ADD CONSTRAINT `fk_idCat` FOREIGN KEY (`idCat`) REFERENCES `categorie` (`numCat`);
