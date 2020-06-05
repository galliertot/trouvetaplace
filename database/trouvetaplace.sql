-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 05 Juin 2020 à 14:32
-- Version du serveur :  5.6.20-log
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `trouvetaplace`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE IF NOT EXISTS `groupe` (
`groupe_id` int(5) NOT NULL,
  `groupe_type` varchar(10) NOT NULL,
  `groupe_annee` varchar(10) NOT NULL,
  `groupe_section` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `groupe`
--

INSERT INTO `groupe` (`groupe_id`, `groupe_type`, `groupe_annee`, `groupe_section`) VALUES
(1, 'Promotion', '1A', 'Informatique'),
(2, 'Promotion', '1A', 'Information-Communication'),
(3, 'Promotion', '1A', 'Réseaux et télécommunication');

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`student_id` int(5) NOT NULL,
  `student_nom` varchar(50) NOT NULL,
  `student_prenom` varchar(50) NOT NULL,
  `student_email` varchar(100) DEFAULT NULL,
  `student_section` varchar(50) NOT NULL,
  `student_annee` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `student`
--

INSERT INTO `student` (`student_id`, `student_nom`, `student_prenom`, `student_email`, `student_section`, `student_annee`) VALUES
(2, 'aze', 'aze', 'aze', 'Informatique', 'Licence'),
(3, 'aze', 'az', 'aze', 'Réseaux et télécommunication', '2A'),
(4, 'aze', 'az', 'aze', 'Réseaux et télécommunication', '2A'),
(5, 'zfsdf', 'sdsd', 'azeazrt', 'Informatique', '1A'),
(6, 'aga', 'gaz', 'azrarz', 'Information-Communication', 'Licence');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(5) NOT NULL,
  `email_user` varchar(32) NOT NULL,
  `nom_user` varchar(32) NOT NULL,
  `prenom_user` varchar(32) NOT NULL,
  `password_user` text NOT NULL,
  `role_user` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `email_user`, `nom_user`, `prenom_user`, `password_user`, `role_user`) VALUES
(5, '21801521@etu.unicaen.fr', 'Gallier', 'Thomas', '$2y$10$ym1WA9dYT.xNVpWQNTYC7u54t', 2),
(6, 'aze@aze.fr', 'aze', 'aze', '$2y$10$qV6rHAVzeCqj1cO1QdCdVeeUm', 2),
(7, 'aze@aze.fr', 'aze', 'aze', '$2y$10$eUwlshei3Be7k.BE9xb44enoF46mMoM42FsXhbw5.61Qy.Q/6qa6S', 2),
(8, 'azeaze@aze.fr', 'aze', 'aze', '$2y$10$ZCBqMgxM67jM0qdwNe6mKuxLLw5u0D1a97zhRReCy2MHzRLNilkBu', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
`id_role` int(11) NOT NULL,
  `nom_role` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `user_role`
--

INSERT INTO `user_role` (`id_role`, `nom_role`) VALUES
(1, 'Etudiant'),
(2, 'Enseignant'),
(3, 'Responsable Module'),
(4, 'Administrateur');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
 ADD PRIMARY KEY (`groupe_id`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`student_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `user_role`
--
ALTER TABLE `user_role`
 ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
MODIFY `groupe_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
MODIFY `student_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `user_role`
--
ALTER TABLE `user_role`
MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
