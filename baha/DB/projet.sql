-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 09 sep. 2021 à 13:47
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

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
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `total` double NOT NULL,
  `produits` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `prenom`, `nom`, `adresse`, `email`, `tel`, `total`, `produits`) VALUES
(13, 'Skander', 'Zouaoui', 'Bizerte', 'mohamedskander.zouaoui@outlook.com', '01', 480, '+ Robe gris * 2 + Floral Jackquard Pullover * 3 '),
(15, 'Skander', 'Zouaoui', 'Bizerte', 'mohamedskander.zouaoui@outlook.com', '0122', 400, '+ Robe gris * 2 + Floral Jackquard Pullover * 2 '),
(50, 'Skander', 'Zouaoui', 'Tunis', 'mohamedskander.zouaoui@outlook.com', '0123123123', 1732, '+ Robe gris * 1 + Zara Jacket * 1 + Robe Pull and Bear * 1 + Chemise Zara * 1 + Blazer Zara * 1 + T-shirt Celio * 1 + Robe Bershka * 1 '),
(51, 'Moetez', 'Doghman', 'Bizerte', 'moetez.doghman@esprit.tn', '0123123123', 1732, '+ Robe gris * 1 + Zara Jacket * 1 + Robe Pull and Bear * 1 + Chemise Zara * 1 + Blazer Zara * 1 + T-shirt Celio * 1 + Robe Bershka * 1 '),
(52, 'Moetez', 'Doghman', 'Bizerte', 'moetez.doghman@esprit.tn', '0123123123', 1732, '+ Robe gris * 1 + Zara Jacket * 1 + Robe Pull and Bear * 1 + Chemise Zara * 1 + Blazer Zara * 1 + T-shirt Celio * 1 + Robe Bershka * 1 '),
(53, 'Moetez', 'Doghman', 'Mounastir', 'moetez.doghman@esprit.tn', '0123123123', 1732, '+ Robe gris * 1 + Zara Jacket * 1 + Robe Pull and Bear * 1 + Chemise Zara * 1 + Blazer Zara * 1 + T-shirt Celio * 1 + Robe Bershka * 1 '),
(54, 'Moetez', 'Doghman', 'Beja', 'moetez.doghman@esprit.tn', '0123123123', 1732, '+ Robe gris * 1 + Zara Jacket * 1 + Robe Pull and Bear * 1 + Chemise Zara * 1 + Blazer Zara * 1 + T-shirt Celio * 1 + Robe Bershka * 1 '),
(55, 'Moetez', 'Doghman', 'Mounastir', 'moetez.doghman@esprit.tn', '0123123123', 1732, '+ Robe gris * 1 + Zara Jacket * 1 + Robe Pull and Bear * 1 + Chemise Zara * 1 + Blazer Zara * 1 + T-shirt Celio * 1 + Robe Bershka * 1 '),
(56, 'Moetez', 'Doghman', 'Mounastir', 'moetez.doghman@esprit.tn', '0123123123', 1732, '+ Robe gris * 1 + Zara Jacket * 1 + Robe Pull and Bear * 1 + Chemise Zara * 1 + Blazer Zara * 1 + T-shirt Celio * 1 + Robe Bershka * 1 '),
(57, 'Moetez', 'Doghman', 'Mounastir', 'moetez.doghman@esprit.tn', '0123123123', 1732, '+ Robe gris * 1 + Zara Jacket * 1 + Robe Pull and Bear * 1 + Chemise Zara * 1 + Blazer Zara * 1 + T-shirt Celio * 1 + Robe Bershka * 1 '),
(58, 'Moetez', 'Doghman', 'Mounastir', 'moetez.doghman@esprit.tn', '0123123123', 1732, '+ Robe gris * 1 + Zara Jacket * 1 + Robe Pull and Bear * 1 + Chemise Zara * 1 + Blazer Zara * 1 + T-shirt Celio * 1 + Robe Bershka * 1 '),
(59, 'Moetez', 'Doghman', 'Mounastir', 'moetez.doghman@esprit.tn', '0123123123', 1732, '+ Robe gris * 1 + Zara Jacket * 1 + Robe Pull and Bear * 1 + Chemise Zara * 1 + Blazer Zara * 1 + T-shirt Celio * 1 + Robe Bershka * 1 '),
(60, 'Moetez', 'Doghman', 'Mounastir', 'moetez.doghman@esprit.tn', '0123123123', 1732, '+ Robe gris * 1 + Zara Jacket * 1 + Robe Pull and Bear * 1 + Chemise Zara * 1 + Blazer Zara * 1 + T-shirt Celio * 1 + Robe Bershka * 1 '),
(61, 'Moetez', 'Doghman', 'Mounastir', 'moetez.doghman@esprit.tn', '0123123123', 1732, '+ Robe gris * 1 + Zara Jacket * 1 + Robe Pull and Bear * 1 + Chemise Zara * 1 + Blazer Zara * 1 + T-shirt Celio * 1 + Robe Bershka * 1 '),
(62, 'Moetez', 'Doghman', 'Mounastir', 'moetez.doghman@esprit.tn', '0123123123', 1732, '+ Robe gris * 1 + Zara Jacket * 1 + Robe Pull and Bear * 1 + Chemise Zara * 1 + Blazer Zara * 1 + T-shirt Celio * 1 + Robe Bershka * 1 '),
(63, 'Moetez', 'Doghman', 'Mounastir', 'moetez.doghman@esprit.tn', '0123123123', 1732, '+ Robe gris * 1 + Zara Jacket * 1 + Robe Pull and Bear * 1 + Chemise Zara * 1 + Blazer Zara * 1 + T-shirt Celio * 1 + Robe Bershka * 1 ');

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
(10, 'hnjk', 'y', '2021-09-24', 12345678, 'doghman.moetaz@gmail.tn', 'admin'),
(11, 'Zouaoui', 'Skander', '2021-09-24', 55203244, 'mohamedskander.zouaoui@outlook.com', 'skander');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
