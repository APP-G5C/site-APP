-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 06 déc. 2019 à 21:17
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
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `ID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `Réponse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`ID`, `Question`, `Réponse`) VALUES
(1, 'Comment faire pour créer un compte ?', 'Pour créer votre compte, veuillez suivre les instructions de la FAQ pour la question \"Comment faire pour créer un compte ?\". Si vous n\'arrivez toujours pas a créer votre compte, tant pis'),
(2, 'Comment vous contacter ?', 'pour nous contacter vous pouvez utilisez la boite mail intégrer au site, pour cela appuyez simplement sur le bouton correspondant.'),
(3, 'Comment fonctionne les tests ?', 'Nos appareils sont disponibles uniquement pour les ayant-droit, ceux-ci utilisent des capteurs et dispositifs permettant d\'effectuer les tests. Les résultats sont ensuite directement transmis sur ce site web'),
(4, 'Comment récupérer mes scores ?', 'Pour récuperer vos scores veuillez allez dans l\'onglet \"score\" de votre profil qui se trouve quelque part sur le site'),
(5, 'Comment supprimer mon compte ?', 'Vous ne pouvez pas.'),
(6, 'Où doit on effectuer les tests ?', 'Dans un institut spécialisé tel qu\'une auto-école, un hopital etc.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
