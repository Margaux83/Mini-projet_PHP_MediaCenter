-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 16 jan. 2019 à 18:11
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mini_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Reference` varchar(4) NOT NULL,
  `Categorie` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Reference` (`Reference`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`ID`, `Reference`, `Categorie`) VALUES
(21, '3333', 'Humour'),
(14, '2963', 'Action'),
(23, '7777', 'Humour'),
(22, '5555', 'Humour'),
(19, '1111', 'Dramatique'),
(20, '2222', 'Action');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Commentaires` text COLLATE utf8_bin NOT NULL,
  `Email` varchar(40) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Email` (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `ID` smallint(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Titre` varchar(20) NOT NULL,
  `Duree` time NOT NULL,
  `Resume` text NOT NULL,
  `Realisateur` varchar(20) NOT NULL,
  `Ref` varchar(4) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `Ref` (`Ref`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`ID`, `Titre`, `Duree`, `Resume`, `Realisateur`, `Ref`, `Image`) VALUES
(7, 'Le Petit Nicolas', '01:30:00', 'Nicolas mène une existence paisible. Il a des parents qui l\'aiment, une bande de chouettes copains avec lesquels il s\'amuse bien, et il n\'a pas du tout envie que cela change... Mais un jour, Nicolas surprend une conversation entre ses parents qui lui laisse penser que sa mère est enceinte. Il panique alors et imagine le pire : bientôt un petit frère sera là, qui prendra tellement de place que ses parents ne s\'occuperont plus de lui, et qu\'ils finiront même par l\'abandonner dans la forêt comme le Petit Poucet...', 'Laurent Tirard', '3333', 'draft.jpg'),
(4, 'Aquaman', '02:24:00', 'Les origines d’un héros malgré lui, dont le destin est d’unir deux mondes opposés, la terre et la mer. Cette histoire épique est celle d’un homme ordinaire destiné à devenir le roi des Sept Mers.', 'James Wan', '2963', '2738771.jpg'),
(5, 'Border', '01:48:00', 'Tina, douanière à l’efficacité redoutable, est connue pour son odorat extraordinaire. C\'est presque comme si elle pouvait flairer la culpabilité d’un individu. Mais quand Vore, un homme d\'apparence suspecte, passe devant elle, ses capacités sont mises à l\'épreuve pour la première fois. Tina sait que Vore cache quelque chose, mais n’arrive pas à identifier quoi. Pire encore, elle ressent une étrange attirance pour lui... ', 'Ali Abbasi', '1111', '46567905822_ee62df2ac1_z.jpg'),
(6, 'Men in black', '01:38:00', 'Chargés de protéger la Terre de toute infraction extraterrestre et de réguler l\'immigration intergalactique sur notre planète, les Men in black ou MIB opèrent dans le plus grand secret. Vêtus de costumes sombres et équipés des toutes dernières technologies, ils passent inaperçus aux yeux des humains dont ils effacent régulièrement la mémoire récente : la présence d\'aliens sur notre sol doit rester secrète. Récemment séparé de son vieux partenaire, retourné à la vie civile sans aucun souvenir de sa vie d\'homme en noir, K, le plus expérimenté des agents du MIB décide de former J, un jeune policier. Ensemble, ils vont affronter une nouvelle menace : Edgar le cafard', 'Barry Sonnenfeld', '2222', 'Men_in_Black.jpg'),
(8, 'Les Tuches', '01:35:00', 'A Bouzolles, tout le monde connaît la famille Tuche. Jeff, Cathy et leurs trois enfants vivent du système D. Respectueuse de la philosophie Tuche, « l’homme n’est pas fait pour travailler », toute la famille s’emploie à être heureuse malgré le cruel manque de revenus. Leurs vies étaient toutes tracées. Ils seraient toujours pauvres, mais heureux. Mais un bouleversement va mettre en péril ce fragile équilibre. Les Tuche vont devenir riches, très riches. 100 millions d’euros gagnés à « L’Euroloterie » vont tout changer. Quitte à changer de vie, autant changer de lieu. Quoi de plus logique pour les Tuche que d’aller vivre à Monaco, là où Cathy a toujours rêvé d’habiter. Ils devront se faire accepter, s’intégrer dans leur nouvelle patrie, changer leurs habitudes sans changer leurs sentiments. La partie n’est pas gagnée pour cette famille qui a comme adage « Tuche pour un, Un pour Tuche ». ', 'Olivier Baroux', '5555', 'lestuchesaffiche.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Tel` int(11) NOT NULL,
  `Code` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mot_de_passe` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Email` (`Email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`ID`, `Nom`, `Prenom`, `Tel`, `Code`, `Email`, `Mot_de_passe`) VALUES
(1, 'Jean', 'Charles', 645987421, 93600, 'jcharles@gmail.com', 'testab92'),
(2, 'David', 'Jules', 654896214, 93600, 'djuju@gmail.com', 'testab93'),
(3, 'Margaux', 'Hébert', 754896214, 75000, 'admin@admin.com', 'dmin'),
(4, 'Julie', 'Rock', 645893214, 93240, 'juju@gmail.com', 'testab84');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
