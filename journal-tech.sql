-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 25 sep. 2021 à 20:07
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `journal-tech`
--

-- --------------------------------------------------------

--
-- Structure de la table `artcile`
--

DROP TABLE IF EXISTS `artcile`;
CREATE TABLE IF NOT EXISTS `artcile` (
  `num_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `description` longtext NOT NULL,
  `date` date NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`num_article`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `artcile`
--

INSERT INTO `artcile` (`num_article`, `titre`, `image`, `description`, `date`, `auteur`, `id_categorie`) VALUES
(1, 'test', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/1200px-CSS3_logo_and_wordmark.svg.png', 'vdvklsijvdnkjsdklvnlsdhvl', '2021-07-06', 'fdsfsdfsf', 1),
(2, 'ouk ouk', 'https://i.stack.imgur.com/QZZOe.png', 'vsdkbvhjbsdhbvlkvd oijdviuhvujsdçcvà)s<v_çfzre tvqduihfuivzyegjoss ', '2021-07-19', 'sf<v', 2),
(3, 'ongala', 'https://www.yogihosting.com/wp-content/uploads/2017/12/jquery-fadein-fadeout.jpg', 'vckjvisdiovjoisdjivjosd  àisdàivjàsd s_yvjoifu_çuwd', '2021-07-04', 'qdvssv', 3),
(4, 'cousin', 'https://s.france24.com/media/display/c3d8bee2-0fd1-11e9-877a-005056bff430/w:1280/p:4x3/e7d6dbbbc5026e23e9a14efd0b43230d.jpg', 'ouk ouk c,kqhvihdsvhihsdufhuifsd', '2021-05-04', 'jdcuigsdvusd', 3);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `num_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(11) NOT NULL,
  PRIMARY KEY (`num_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`num_categorie`, `nom_categorie`) VALUES
(1, 'CSS'),
(2, 'JS'),
(3, 'PHP');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `artcile`
--
ALTER TABLE `artcile`
  ADD CONSTRAINT `id_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`num_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
