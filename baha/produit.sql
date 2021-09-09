-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 09 sep. 2021 à 11:59
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
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `categorie` varchar(150) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  `prix` double NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `categorie`, `nom`, `description`, `prix`, `image`) VALUES
(20, 'Homme', 'Zara Jacket', 'Disponible en plusieurs tailles', 250, 'about-2.jpg'),
(21, 'Homme', 'Chemise Zara', 'Disponible en plusieurs tailles', 300, 'person_4.jpg'),
(22, 'Homme', 'Blazer Zara', 'Disponible en plusieurs tailles\r\nCouleur Noir', 500, 'person_1.jpg'),
(23, 'Homme', 'Blazer Zara', 'Disponible en plusieurs tailles\r\nCouleurs Gris', 550, 'person_2.jpg'),
(24, 'Homme', 'Jacket Pull and Bear ', 'Disponible en plusieurs tailles et couleurs ', 180, 'bg_4.jpg'),
(25, 'Homme', 'T-shirt Celio', 'Disponible en plusieurs tailles ', 22, 'product-8.jpg'),
(26, 'Femme', 'Robe Zara', 'Robe Rouge , Disponible en plusieurs tailles ', 455, 'product-6.jpg'),
(27, 'Femme', 'Robe Pull and Bear', 'Robe Orangé , Disponible en plusieurs tailles	', 300, 'product-5.jpg'),
(28, 'Femme', 'Robe Zara', 'Disponible en plusieurs tailles ', 250, 'product-3.jpg'),
(29, 'Femme', 'Robe Bershka', 'Disponible en plusieurs tailles ', 240, 'product-2.jpg'),
(30, 'Femme', 'T-shirt Bershka', 'Disponible en plusieurs tailles ', 25, 'about-1.jpg'),
(31, 'Femme', 'Chemise Zara', 'Disponible en plusieurs tailles ', 170, 'product-4.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
