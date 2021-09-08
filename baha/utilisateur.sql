-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 08 sep. 2021 à 15:08
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `date` date NOT NULL,
  `numero` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `date`, `numero`, `email`, `password`) VALUES
(2, 'moetaz', 'doghmanjnd', '2021-09-24', 55334409, 'moetaz.doghman@eprit.tn', 'moetaz'),
(3, 'ahmed', 'doghman', '2021-09-24', 55334409, 'moetaz.doghman@eprit.tn', 'moetaz'),
(4, 'ahmed', 'doghman', '2021-09-24', 55334409, 'moetaz.doghman@eprit.tn', 'moetaz'),
(5, 'ahmed', 'doghman', '2021-09-24', 55334409, 'moetaz.doghman@eprit.tn', 'dagdeeg'),
(6, 'moetaz', 'doghman', '2021-09-24', 55334409, 'doghman.moetaz@gmail.com', 'admin'),
(7, 'moetaz', 'doghman', '2021-09-24', 55334409, 'moetaz.doghman@eprit.tn', 'moetaz'),
(8, 'd kj ', ' jjjf', '2021-09-24', 55334409, 'admin@esprit.toktok', 'admin'),
(9, 'moetaz', 'doghman', '2021-09-24', 55334409, 'admin@esprit.tn', 'admin'),
(10, 'hnjk', 'y', '2021-09-24', 12345678, 'doghman.moetaz@gmail.tn', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
