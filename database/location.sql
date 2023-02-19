-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3308
-- Généré le : mar. 07 juin 2022 à 18:53
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `location`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `tele` int(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `tele`, `city`, `email`, `password`) VALUES
(1, 'ensa', 'data', 610883239, 'Berrechid', 'ensab@gmail.com', 'admin'),
(14, 'Fikri', 'Oussama', 657876565, 'Rabat', 'fikri.ensa@uhp.ac.ma', '123'),
(18, 'hamza', 'boukhrisse', 657876565, 'casa', 'hamza@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idres` int(11) NOT NULL,
  `pickuplocation` varchar(20) NOT NULL,
  `dropofflocation` varchar(20) NOT NULL,
  `pickupdate` varchar(20) NOT NULL,
  `dropoffdate` varchar(20) NOT NULL,
  `pickuptime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`idres`, `pickuplocation`, `dropofflocation`, `pickupdate`, `dropoffdate`, `pickuptime`) VALUES
(1, 'CASA', 'Fes', 'May 25, 2022', 'May 26, 2022', '06:05 PM'),
(2, 'CASA', 'Rabat', 'May 25, 2022', 'May 28, 2022', '06:10 PM'),
(3, 'Settat', 'Casa', 'May 16, 2022', 'May 31, 2022', '08:05 AM'),
(4, 'Rabat', 'Settat', 'May 25, 2022', 'May 26, 2022', '06:38 PM');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `matricule` varchar(40) NOT NULL,
  `module` varchar(30) NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `prix` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`matricule`, `module`, `couleur`, `prix`) VALUES
('A10B10', 'Audi Q5', 'Bleu', 700),
('A11B11', 'Kia Sportage', 'Rouge', 600),
('A12B12', 'Hyundai Verna', 'White', 400),
('A13B13', 'Kia Seltos', 'Bleu', 600),
('A14B14', 'Chevrolet Spin', 'White', 900),
('A1B1', 'Ferrari F8 Tributo', 'Jaune', 6500),
('A2B2', 'Ferrari Portofino', 'Rouge', 7500),
('A3B3', 'Ferrari Roma', 'Gris', 4000),
('A4B4', 'Ferrari 812', 'White', 7000),
('A5B5', 'Ferrari SF90 Stradale', 'Black', 6000),
('A6B6', 'Lamborghini Urus', 'Gris', 5500),
('A7B7', 'SL Roadster', 'Bleu', 550),
('A8B8', 'Nissan Magnite', 'White', 650),
('A9B9', '2016 Ford Focus ST', 'Orange', 450);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idres`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
