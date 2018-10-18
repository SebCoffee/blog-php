-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 16 Octobre 2018 à 10:12
-- Version du serveur :  5.7.23-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-1+ubuntu18.04.1+deb.sury.org+1

/*SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";*/
/*SET time_zone = "+00:00";*/


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  'blog'
--
/*CREATE DATABASE IF NOT EXISTS 'blog' DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE 'blog';

--
-- Utilisateur : 'blog_access'
--

--CREATE USER 'blog_access'@'localhost' IDENTIFIED BY 'blog_password';
--GRANT ALL PRIVILEGES ON * . * TO 'blog_access'@'localhost';
--FLUSH PRIVILEGES;*/
-- --------------------------------------------------------

--
-- Structure de la table 'contact'
--

CREATE TABLE 'contact' (
  'id' int(11) NOT NULL,
  'subject' varchar(255) COLLATE utf8_bin NOT NULL,
  'email' varchar(255) COLLATE utf8_bin NOT NULL,
  'message' text COLLATE utf8_bin NOT NULL,
  'creation_date' datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table 'contact'
--

INSERT INTO 'contact' ('id', 'subject', 'email', 'message', 'creation_date') VALUES
(5, 'subject 1', 'email@email.com', 'message 1', '2018-10-10 17:48:41'),
(6, 'sujet 2', 'email@email.com', 'message 2', '2018-10-10 17:49:46'),
(7, 'je suis toto', 'toto@domain.fr', 'bonjour, je m\'appelle toto et je trouve votre blog super!', '2018-10-12 16:33:42'),
(8, 'c\'est de nouveau moi', 'toto@domain.fr', 'quoi de neuf?', '2018-10-15 09:03:04');

-- --------------------------------------------------------

--
-- Structure de la table 'post'
--

CREATE TABLE 'post' (
  'id' int(11) NOT NULL,
  'title' varchar(255) COLLATE utf8_bin DEFAULT NULL,
  'content' text COLLATE utf8_bin,
  'creation_date' datetime NOT NULL,
  'edition_date' datetime NOT NULL,
  'author' varchar(255) COLLATE utf8_bin NOT NULL,
  'status' varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table 'post'
--

INSERT INTO 'post' ('id', 'title', 'content', 'creation_date', 'edition_date', 'author', 'status') VALUES
(1, 'lorem ipsum ... 4', '\r\n\r\nDum apud Persas, ut supra narravimus, perfidia regis motus agitat insperatos, et in eois tractibus bella rediviva consurgunt, anno sexto decimo et eo diutius post Nepotiani exitium, saeviens per urbem aeternam urebat cuncta Bellona, ex primordiis minimis ad clades excita luctuosas, quas obliterasset utinam iuge silentium! ne forte paria quandoque temptentur, plus exemplis generalibus nocitura quam delictis.\r\n\r\nPrincipium autem unde latius se funditabat, emersit ex negotio tali. Chilo ex vicario et coniux eius Maxima nomine, questi apud Olybrium ea tempestate urbi praefectum, vitamque suam venenis petitam adseverantes inpetrarunt ut hi, quos suspectati sunt, ilico rapti conpingerentur in vincula, organarius Sericus et Asbolius palaestrita et aruspex Campensis.\r\n\r\nSuperatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.\r\n', '2018-10-13 00:00:00', '2018-10-13 00:00:00', 'sebcoffee', 'draft'),
(2, 'lorem ipsum ... 1', '\r\n\r\nDum apud Persas, ut supra narravimus, perfidia regis motus agitat insperatos, et in eois tractibus bella rediviva consurgunt, anno sexto decimo et eo diutius post Nepotiani exitium, saeviens per urbem aeternam urebat cuncta Bellona, ex primordiis minimis ad clades excita luctuosas, quas obliterasset utinam iuge silentium! ne forte paria quandoque temptentur, plus exemplis generalibus nocitura quam delictis.\r\n\r\nPrincipium autem unde latius se funditabat, emersit ex negotio tali. Chilo ex vicario et coniux eius Maxima nomine, questi apud Olybrium ea tempestate urbi praefectum, vitamque suam venenis petitam adseverantes inpetrarunt ut hi, quos suspectati sunt, ilico rapti conpingerentur in vincula, organarius Sericus et Asbolius palaestrita et aruspex Campensis.\r\n\r\nSuperatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.\r\n', '2018-10-13 00:00:00', '2018-10-13 00:00:00', 'sebcoffee', 'draft'),
(3, 'lorem ipsum ... 2', '\r\n\r\nDum apud Persas, ut supra narravimus, perfidia regis motus agitat insperatos, et in eois tractibus bella rediviva consurgunt, anno sexto decimo et eo diutius post Nepotiani exitium, saeviens per urbem aeternam urebat cuncta Bellona, ex primordiis minimis ad clades excita luctuosas, quas obliterasset utinam iuge silentium! ne forte paria quandoque temptentur, plus exemplis generalibus nocitura quam delictis.\r\n\r\nPrincipium autem unde latius se funditabat, emersit ex negotio tali. Chilo ex vicario et coniux eius Maxima nomine, questi apud Olybrium ea tempestate urbi praefectum, vitamque suam venenis petitam adseverantes inpetrarunt ut hi, quos suspectati sunt, ilico rapti conpingerentur in vincula, organarius Sericus et Asbolius palaestrita et aruspex Campensis.\r\n\r\nSuperatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.\r\n', '2018-10-13 00:00:00', '2018-10-13 00:00:00', 'sebcoffee', 'draft'),
(4, 'lorem ipsum ... 3', '\r\n\r\nDum apud Persas, ut supra narravimus, perfidia regis motus agitat insperatos, et in eois tractibus bella rediviva consurgunt, anno sexto decimo et eo diutius post Nepotiani exitium, saeviens per urbem aeternam urebat cuncta Bellona, ex primordiis minimis ad clades excita luctuosas, quas obliterasset utinam iuge silentium! ne forte paria quandoque temptentur, plus exemplis generalibus nocitura quam delictis.\r\n\r\nPrincipium autem unde latius se funditabat, emersit ex negotio tali. Chilo ex vicario et coniux eius Maxima nomine, questi apud Olybrium ea tempestate urbi praefectum, vitamque suam venenis petitam adseverantes inpetrarunt ut hi, quos suspectati sunt, ilico rapti conpingerentur in vincula, organarius Sericus et Asbolius palaestrita et aruspex Campensis.\r\n\r\nSuperatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.\r\n', '2018-10-13 00:00:00', '2018-10-13 00:00:00', 'sebcoffee', 'draft'),
(6, 'mon nouvel article', 'est-il visible ?', '2018-10-13 16:21:56', '2018-10-13 16:21:56', 'sebcoffee', 'published');

-- --------------------------------------------------------

--
-- Structure de la table 'user'
--

CREATE TABLE 'user' (
  'id' int(11) NOT NULL,
  'pseudo' varchar(255) COLLATE utf8_bin NOT NULL,
  'password' text COLLATE utf8_bin NOT NULL,
  'email' varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table 'user'
--

INSERT INTO 'user' ('id', 'pseudo', 'password', 'email') VALUES
(4, 'sebcoffee', '$2y$10$QnCP5d7mqr4SKQbhqNOzMe/JFEN0Jq7tIZfu0BMlsc1XkGDCDdgne', 'contact@sebcoffee.net'),
(6, 'sebastien', '$2y$10$FUVl6mPhB.uhGFig9utS5OqKuvhvhSq1LZ9Rfh3bIeUQ4bzTsLC/y', 'contact1@sebcoffee.net'),
(7, 'sebastienN', '$2y$10$3FipqDnK4KpMBGrMspLPIOf5QAlP.DFXCs5b6DXl9gu4xEiBmTf1G', 'contact2@sebcoffee.net');

--
-- Index pour les tables exportées
--

--
-- Index pour la table 'contact'
--
ALTER TABLE 'contact'
  ADD PRIMARY KEY ('id');

--
-- Index pour la table 'post'
--
ALTER TABLE 'post'
  ADD PRIMARY KEY ('id'),
  ADD KEY 'author' ('author');

--
-- Index pour la table 'user'
--
ALTER TABLE 'user'
  ADD PRIMARY KEY ('id'),
  ADD UNIQUE KEY 'pseudo' ('pseudo'),
  ADD UNIQUE KEY 'email' ('email');

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table 'contact'
--
ALTER TABLE 'contact'
  MODIFY 'id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table 'post'
--
ALTER TABLE 'post'
  MODIFY 'id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table 'user'
--
ALTER TABLE 'user'
  MODIFY 'id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table 'post'
--
ALTER TABLE 'post'
  ADD CONSTRAINT 'post_ibfk_1' FOREIGN KEY ('author') REFERENCES 'user' ('pseudo') ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
