-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 10 sep. 2021 à 20:49
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_haircut`
--

-- --------------------------------------------------------

--
-- Structure de la table `haircut_man`
--

CREATE TABLE `haircut_man` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `haircut_man`
--

INSERT INTO `haircut_man` (`id`, `name`, `price`) VALUES
(1, 'Couper', '3000 XPF'),
(2, 'Coupe + Couleur', '5000 XPF'),
(7, 'Barbe', '2000 XPF');

-- --------------------------------------------------------

--
-- Structure de la table `haircut_women`
--

CREATE TABLE `haircut_women` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `haircut_women`
--

INSERT INTO `haircut_women` (`id`, `name`, `price`) VALUES
(1, 'Coupe', '5000 XPF'),
(2, 'Coloration', '4500 XPF'),
(3, 'Forfait mariage', '15000 XPF');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `haircut_man`
--
ALTER TABLE `haircut_man`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `haircut_women`
--
ALTER TABLE `haircut_women`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `haircut_man`
--
ALTER TABLE `haircut_man`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `haircut_women`
--
ALTER TABLE `haircut_women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
