-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 16 déc. 2021 à 23:15
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `user_id` int NOT NULL,
  `chapo` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `createdAt`, `user_id`, `chapo`, `link`) VALUES
(1, 'Voici mon premier article', 'Mon super blog est en construction.', '2019-03-15 08:10:24', 0, NULL, NULL),
(2, 'Un deuxième article', 'Je continue à ajouter du contenu sur mon blog.', '2019-03-16 13:27:38', 0, NULL, NULL),
(3, 'Mon troisième article', 'Mon blog est génial !!!', '2019-03-16 14:45:57', 0, NULL, NULL),
(4, 'bebekoala', 'lorem ipsum', '2021-10-20 00:32:31', 3, 'voici le chapo', NULL),
(24, 'bv', 'f b', '2021-10-25 01:59:42', 3, 'bv', 'ffve'),
(25, 'mon titre', 'mon contenu', '2021-10-25 02:05:23', 3, 'mon chapo', 'www.openclassrooms.com'),
(26, 'monnouveau post', 'leocntenu', '2021-10-25 21:54:44', 3, 'lechapo', 'www.openclassrooms.com'),
(28, 'de', 'coucou tout le monde!!', '2021-10-29 19:53:51', 9, 'de', '[url]'),
(29, 'lhistoire de choubidou', 'voici le contenu', '2021-11-05 23:02:39', 24, 'voici le resume', '[url]'),
(31, 'La reine des neiges', 'elsa a une soeur se prenommant anna', '2021-11-11 13:20:19', 24, 'c\'est l\'histoire d\'elsa', NULL),
(32, 'Emma la souris', 'emma est une petite souris qui aime la mongolfiere', '2021-11-11 13:24:06', 24, 'c\'est l\'histoire d\'une souris', NULL),
(33, 'Princesse raiponce', 'une jolie princesse avec sa robe violette et ses beaux et longs cheveux blonds', '2021-11-11 13:27:00', 24, '', NULL),
(34, 'Princesse raiponce', 'une jolie princesse avec sa robe violette et ses beaux et longs cheveux blonds', '2021-11-15 12:14:41', 24, '', NULL),
(35, 'Princesse raiponce', 'une jolie princesse avec sa robe violette et ses beaux et longs cheveux blonds', '2021-11-15 12:29:29', 24, 'c\'est le chapo', NULL),
(36, 'coucou', 'coucou', '2021-12-13 12:54:47', 24, 'coucou', NULL),
(37, 'essai', 'essaie token article', '2021-12-13 13:23:27', 24, 'essai', NULL),
(38, 'essai2', 'essai2', '2021-12-13 13:24:29', 24, 'essai2', NULL),
(39, 'essai3', 'essai3', '2021-12-13 14:06:47', 24, 'ESSAI3', NULL),
(40, 'essai4', 'essai4', '2021-12-13 14:07:37', 24, 'essai4', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `flag` tinyint(1) NOT NULL,
  `article_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_article_id` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `pseudo`, `content`, `createdAt`, `flag`, `article_id`) VALUES
(1, 'Jean', 'Génial, hâte de voir ce que ça donne !', '2019-03-16 21:02:24', 3, 1),
(2, 'Nina', 'Trop cool ! depuis le temps', '2019-03-17 17:34:35', 3, 1),
(3, 'Rodrigo', 'Great ! ', '2019-03-17 17:42:04', 3, 1),
(4, 'Hélène', 'je suis heureuse de découvrir un super site ! Continuez comme ça ', '2019-03-18 12:08:37', 3, 2),
(5, 'Moussa', 'Un peu déçu par le contenu pour le moment...', '2019-03-18 03:09:02', 3, 2),
(6, 'Barbara', 'pressée de voir la suite', '2019-03-18 10:05:58', 3, 2),
(7, 'Guillaume', 'Je viens ici pour troller !', '2019-03-19 21:08:44', 3, 3),
(8, 'Aurore', 'Enfin un blog tranquille, où on ne nous casse pas les pieds !', '2019-03-19 21:09:27', 0, 3),
(9, 'Jordane', 'Je suis vendéen ! Amateur de mojettes !', '2019-03-20 10:10:11', 3, 3),
(10, 'mimi', 'lorem ipsum lorem ipsum', '2021-10-20 00:34:04', 3, 4),
(11, 'mimibis', 'voici mon commentaire', '2021-10-20 14:36:05', 3, 4),
(13, 'mimimoi', 'cest mon commentaire', '2021-11-08 01:25:16', 3, 28),
(14, 'mimimoi', 'coucou', '2021-11-08 12:05:42', 3, 28),
(15, 'etmoi', 'coucou', '2021-11-08 12:06:05', 3, 28),
(16, 'mimimoi', 'hello', '2021-11-08 12:14:00', 3, 28),
(17, 'choubidou', 'dede', '2021-11-08 12:51:29', 3, 28),
(18, 'minnie', 'coucou vous', '2021-11-08 12:52:20', 3, 28),
(19, 'allistair', 'bebe koala la plus gentille', '2021-11-08 12:53:14', 0, 28),
(20, 'admin', 'cest moi l\'admin', '2021-11-08 12:53:57', 0, 28),
(21, 'mimimoi', 'coucou', '2021-11-08 13:10:53', 3, 29),
(22, 'mimimoi', 'zrv', '2021-11-08 13:16:04', 3, 29),
(23, 'allistair', 'hjknj', '2021-11-08 13:35:38', 0, 29),
(24, 'minnie', 'YOU', '2021-11-08 13:45:50', 3, 29),
(25, 'admin', 'vkjb', '2021-11-08 13:50:46', 3, 29),
(26, 'mimimoi', 'vx bx', '2021-11-08 14:23:04', 3, 29),
(27, 'mimimoi', 'cdqv', '2021-11-08 14:24:34', 3, 29),
(28, 'vqd', 'vdv', '2021-11-08 14:26:16', 3, 29),
(29, 'fea', 'dceafa', '2021-11-08 14:31:58', 3, 29),
(30, 'fqe', 'cef', '2021-11-08 14:33:17', 3, 29),
(31, 'mimimoi', 'h(', '2021-11-08 14:38:10', 3, 29),
(32, 'mimimoi', 'vzbzf', '2021-11-08 14:39:57', 3, 29),
(33, 'choubidou', 'youpi ca marche !!!!!', '2021-11-08 14:40:17', 3, 29),
(34, 'mimimoi', 'youhou', '2021-11-08 14:54:06', 3, 29),
(35, 'mimimoi', 'cac', '2021-11-08 14:56:40', 3, 29),
(36, 'mimimoi', 'cac', '2021-11-08 14:57:26', 3, 29),
(37, 'mimimoi', 'YOUHOU§§§§§', '2021-11-08 15:13:49', 3, 29),
(38, 'Mialy', 'Bonjour', '2021-11-09 10:30:07', 3, 29),
(39, 'cestmoi', 'hello', '2021-11-11 13:03:54', 3, 29),
(40, 'Mialy', 'rebonjour', '2021-11-12 09:58:16', 3, 33),
(41, 'Mialy', 'recoucou', '2021-11-12 09:59:14', 3, 33),
(43, 'lk', 'ghk', '2021-11-12 10:37:18', 3, 32),
(44, 'hklzehnkfz', 'cezjcklz', '2021-11-12 11:28:23', 3, 31),
(45, 'ca', 'c adc', '2021-11-12 13:51:15', 0, 33),
(46, 'vzv', 'vz', '2021-11-12 14:00:47', 3, 33),
(47, 'dscds', 'cdscd', '2021-11-12 14:02:30', 3, 31),
(48, 'vvev', 'vrev', '2021-11-12 14:04:43', 3, 33),
(49, 'xsax', 'xasx', '2021-11-12 14:06:05', 3, 32),
(50, 'czevz', 'vzfvzf', '2021-11-12 14:17:13', 3, 33),
(51, 'czc', 'czdcz', '2021-11-12 14:41:52', 3, 33),
(52, 'czcacdfgzeafaef', 'hhhhhhhhhhhhhhhh', '2021-11-12 14:42:44', 3, 33),
(53, 'cdzcd', 'cadcdc', '2021-11-12 14:51:20', 0, 33),
(54, 'ncvvvvvvvvvvvvvvvvvv', 'rrrrrrrrrrrrrrrrrrrrr', '2021-11-12 14:52:26', 3, 33),
(55, 'fref', 'vd vfeve', '2021-11-12 14:53:59', 3, 32),
(56, 'coucou', 'hhdielhklhk', '2021-11-12 15:08:38', 3, 33),
(57, 'cd', 'vfsdv', '2021-11-14 19:25:27', 0, 33),
(58, 'gbsgb', 'bsgbb', '2021-11-14 19:31:35', 3, 33),
(59, 'vczdvz', 'cdzcdzvz', '2021-11-14 19:45:13', 3, 33),
(60, ',utj,tu,ktu', ', thj,tu,', '2021-11-14 19:49:39', 0, 33),
(61, 'hk;k', ';kh:kh', '2021-11-14 19:59:13', 3, 32),
(62, 'xsqxc', 'cdqcdq', '2021-11-14 20:03:15', 3, 33),
(63, 'cdzcz', 'cd zc dzvffgzzzzzzzzzzzzzzzzzzzz', '2021-11-14 20:04:38', 0, 33),
(64, 'cdzc', 'cdzczd', '2021-11-14 20:10:23', 0, 33),
(65, 'gbnrn', 'ngrbrg', '2021-11-14 20:12:39', 3, 33),
(66, 'vrv', 'zvz', '2021-11-14 20:13:25', 3, 33),
(67, 'xcsc', 'sxac', '2021-11-14 20:27:06', 3, 33),
(68, 'czczdc', 'xzc', '2021-11-14 20:28:05', 3, 33),
(69, 'bfbg', 'bgfbdb', '2021-11-14 20:32:16', 0, 33),
(70, 'vfzbbbbbbbbbbbbbb', 'c zdfv', '2021-11-14 20:39:27', 3, 33),
(71, 'gbgbdggg', 'fgb', '2021-11-14 20:41:30', 3, 33),
(72, 'xsza', 'xsax', '2021-11-14 20:42:44', 3, 33),
(73, 'cdzcv', 'cvdzvz', '2021-11-14 20:48:01', 3, 33),
(74, 'eeeeeeeeeeeeeeeeeeeee', 'xace', '2021-11-14 20:53:35', 3, 33),
(75, 'gkk:j', ':km!mkg', '2021-11-14 20:54:31', 3, 33),
(76, 'vzdv', 'vsdvd', '2021-11-14 21:03:56', 3, 33),
(77, 'vdzvhh', 'nhhhhhhhhhhhhhhhhhh', '2021-11-14 21:05:55', 3, 33),
(78, 'fffffffffffffffff', 'ffffffffffffffffffffff', '2021-11-14 23:19:46', 3, 33),
(79, 'choubidou', 'vf efvefv', '2021-11-15 10:03:23', 3, 33),
(80, 'choubidou', 'vfvsf f', '2021-11-15 10:13:32', 3, 33),
(81, 'VOTRE PSEUDO :   choubidou', 'YOUUUUUUUUUUUUUUUHOUUUUUUUUUUUUU', '2021-11-15 10:43:09', 3, 33),
(82, 'choubidou', 'xsaxaxasx', '2021-11-15 11:01:18', 3, 33),
(83, 'choubidou', 'cdzczvzvz', '2021-11-15 11:15:06', 3, 33),
(84, 'choubidou', 'kiy', '2021-11-15 12:03:26', 3, 33),
(86, 'choubidou', 'yehe', '2021-11-15 13:41:07', 3, 35),
(87, 'choubidou', 'hellooooooooooooooooooo', '2021-11-15 14:23:05', 3, 35),
(88, 'choubidou', 'hellllllllllllo coucou', '2021-11-15 14:23:52', 3, 35),
(89, 'choubidou', 'vtgtgfg', '2021-11-15 14:24:40', 3, 35),
(90, 'choubidou', 'yeeeeeeeeeeeeeeeeeeeeeee', '2021-11-15 14:29:24', 3, 35),
(91, 'choubidou', 'houhou', '2021-11-15 14:33:03', 3, 35),
(92, 'choubidou', 'alors!!!!!!!!!!!!!!!!!', '2021-11-15 14:39:01', 3, 35),
(93, 'choubidou', 'tttttttttttttttttttttttttttttttttt', '2021-11-15 14:46:35', 3, 35),
(94, 'choubidou', 'ggggggggggggggggggggguuuuuuuuuuuuuuuuuuuuuu', '2021-11-15 14:50:07', 3, 35),
(95, 'choubidou', 'vfevsv', '2021-11-15 15:23:02', 3, 35),
(96, 'choubidou', 'bonjour lundi', '2021-11-15 15:30:24', 3, 35),
(97, 'choubidou', 'sxdceaxc', '2021-11-15 15:38:54', 3, 35),
(98, 'choubidou', 'etetetetetet', '2021-11-15 15:46:19', 3, 35),
(99, 'choubidou', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrr', '2021-11-15 15:47:16', 3, 35),
(100, 'choubidou', 'yaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-11-15 15:48:33', 3, 35),
(101, 'choubidou', 'xxxxxxxxxxxxxxxxxxxxxx', '2021-11-15 15:57:03', 3, 35),
(102, 'choubidou', 'xxxxxxxxxxxxxsaaaaaaaaaaaaaaaaaaaaaaaa', '2021-11-15 17:38:02', 3, 35),
(103, 'choubidou', 'yyyyyyyyyyyyyyyyyy', '2021-11-15 17:43:30', 3, 35),
(104, 'choubidou', 'demo flag', '2021-11-17 19:22:02', 3, 35),
(105, 'choubidou', 'demo troisieme', '2021-11-17 19:35:58', 3, 35),
(106, 'choubidou', 'demo 4', '2021-11-17 19:42:58', 3, 35),
(107, 'choubidou', 'demo5', '2021-11-17 19:46:43', 3, 35),
(108, 'choubidou', 'demo6', '2021-11-17 19:56:22', 3, 35),
(109, 'choubidou', 'demo7', '2021-11-17 20:22:56', 3, 35),
(110, 'choubidou', 'DEMO8', '2021-11-17 20:24:15', 3, 35),
(111, 'choubidou', 'DEMO9', '2021-11-17 20:24:52', 3, 35),
(112, 'choubidou', 'demooooooooooo', '2021-11-17 20:25:24', 3, 35),
(113, 'choubidou', 'demoooooomttttttttttttttt', '2021-11-17 20:25:44', 3, 35),
(114, 'choubidou', 'demo9', '2021-11-18 10:03:26', 3, 35),
(115, 'choubidou', 'demo10', '2021-11-18 10:03:38', 3, 35),
(116, 'choubidou', 'rrrrrrrrooooooooooooooooeeeeeeeeeeeeeee', '2021-11-18 11:47:47', 3, 35),
(117, 'choubidou', 'salut princesse reponse', '2021-11-18 12:19:18', 3, 35),
(118, 'coucou', 'coucou', '2021-11-18 12:45:27', 3, 35),
(119, 'choubidou', 'CHOUBIDOUBIDOUBIDOU', '2021-11-18 12:59:21', 3, 35),
(120, 'choubidou', 'olalalala', '2021-11-18 13:01:25', 3, 35),
(121, 'choubidou', 'pppppppppppppppppp', '2021-11-18 13:03:34', 3, 35),
(122, 'choubidou', 'alors!!!!', '2021-11-18 13:06:15', 3, 35),
(123, 'choubidou', 'ca marche ??', '2021-11-18 13:08:49', 3, 35),
(124, 'choubidou', 'pppppppppppppppppppffffffffffffffffffffff', '2021-11-18 13:21:29', 3, 35),
(125, 'choubidou', 'bhbn', '2021-11-18 13:27:58', 3, 35),
(126, 'choubidou', 'ttttttttttttttttttttttttttttttttt', '2021-11-18 14:04:16', 3, 35),
(127, 'choubidou', 'ppppppppppppppppp', '2021-11-18 14:15:59', 3, 35),
(128, 'choubidou', 'uuuuuuuuuuuuuuuuuuuu', '2021-11-18 14:17:37', 0, 35),
(129, 'choubidou', 'ouuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuyyyyyyyyyyyyyyyyyg', '2021-11-18 14:18:45', 0, 35),
(130, 'choubidou', 'gjkkjhbjb', '2021-11-18 14:19:39', 3, 35),
(131, 'choubidou', 'jknj', '2021-11-18 14:20:28', 0, 35),
(132, 'choubidou', 'cdzczc', '2021-11-18 14:21:05', 0, 35),
(133, 'choubidou', 'salut !!!', '2021-11-18 14:34:01', 0, 35),
(134, 'choubidou', 'salut !!!', '2021-11-18 15:05:50', 0, 35),
(135, 'choubidou', 'bonjouuuuuuuuuuuuuuuuur', '2021-11-18 15:07:37', 0, 35),
(136, 'choubidou', 'wouhouuuuuuuuuuuuuuuu you', '2021-11-18 15:25:27', 0, 35),
(137, 'choubidou', 'recoucou cest moi', '2021-11-18 15:30:44', 0, 35),
(138, 'choubidou', 'coucou cesr encore moi', '2021-11-18 16:13:04', 0, 35),
(139, 'choubidou', 'helo hello', '2021-11-18 16:23:25', 0, 35),
(140, 'choubidou', 'rrrrreebbbbbbbbbbbbbbonsoir', '2021-11-18 16:30:01', 0, 35),
(141, 'choubidou', 'pourvu que ca marche', '2021-11-18 16:53:54', 0, 35),
(142, 'choubidou', 'recoucou !!', '2021-12-03 11:59:56', 0, 35),
(143, 'choubidou', 'encore recoucou', '2021-12-03 12:08:54', 0, 35),
(144, 'choubidou', 'allo', '2021-12-03 12:27:02', 0, 35),
(145, 'choubidou', 'allo allo', '2021-12-03 12:31:55', 0, 35),
(146, 'choubidou', 'allo cest encore moi', '2021-12-03 13:14:09', 0, 35),
(147, 'choubidou', 'mmmmmmmmmmmmmmmmmm', '2021-12-03 14:44:07', 0, 35),
(148, 'choubidou', 'zdczc', '2021-12-03 15:01:07', 0, 35);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `role_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `password`, `createdAt`, `role_id`) VALUES
(4, 'admin', '$2y$10$vxSMvrAV0BCSL4a4pIoE9OYCmheKWG1nLQZV3OjuHzBBQyBCySC.G', '2021-10-19 23:40:36', 2),
(7, 'petitededenou2', '$2y$10$lH4M5YzxIU.e6rg.S/m9yOyxE8pK.1y1/H3kHaUBsvAoPy9sE6uS.', '2021-10-22 12:50:53', 1),
(9, 'mimimoi', '$2y$10$Y3YY6DKVFN3t8Dz.TqL6meFhsxZhWqE.Q.HOZ5WRh./0.RIdXX6Jm', '2021-10-29 19:45:24', 2),
(10, 'COUCOU', '$2y$10$JPJSWWyDzf.ywKCi/vYzuO6Y/lKHhGg2V9H3kTOldD1qFORUHEF.a', '2021-11-02 02:28:50', 1),
(11, 'etmoi', '$2y$10$oomWppL8z7eSKbZUUfqVfOcHe4o4CAs/EjEMYOt7jMdOqqP/roTYC', '2021-11-02 23:34:26', 1),
(12, 'hello', '$2y$10$ZnzTWSkCj5F0B2UJ8KaGXOYLhjmEEDbHVrNlJXwU3/KSYP9OZdn4u', '2021-11-02 23:45:56', 1),
(13, 'winnie', '$2y$10$PWgZYKt4U/2Km6sMQJquUuKIoRrK882HGPby9mh13UuqitjhRKF.W', '2021-11-02 23:47:59', 2),
(14, 'minnie', '$2y$10$EQbSLcjg.k6XFSst4J.UMePlzjqIcmCuiJ26azZ33oKMegjwqv5GK', '2021-11-02 23:49:02', 1),
(16, 'mimimoi', '$2y$10$Id8VUeQf7Xfv3szFeWzrO.GiDOGmPiUozq/BI/t3V/Zycr9C7kzZG', '2021-11-03 00:10:20', 1),
(17, 'minnie', '$2y$10$EQbSLcjg.k6XFSst4J.UMePlzjqIcmCuiJ26azZ33oKMegjwqv5GK', '2021-11-03 00:11:04', 1),
(18, 'nounouche', '$2y$10$cvVI5svCuorxvMhiS.sS4.CXqAVOTtY5LqQvIt.bf1XINjvJNrCku', '2021-11-03 00:11:41', 1),
(19, 'allistair', 'mignon', '2021-11-03 00:12:26', 2),
(21, 'daisy', '$2y$10$z1aRH2qxOxlq3j.sfuu.DeL8EgYUJYgK7tB7Ezdza1D0uFyU1yJBS', '2021-11-03 00:14:01', 1),
(22, 'donald', '$2y$10$3I7yWJ1HJbkXdvNd1Ti3fOCCuL5KDVUiJazz0/N.04c0UwzgWmMqS', '2021-11-03 00:15:04', 1),
(24, 'choubidou', '$2y$10$zIixpXYLhXWdJd4eQxDakOOe1TeLexRIkY3ftscrRhV6zRI1rRIo2', '2021-11-05 22:58:38', 2),
(25, 'emma', 'mignon', '2021-11-09 19:47:10', 2),
(26, 'cestmoi', '$2y$10$c9gr4LGWCGxHnRk0t/.UkOyK5p6FTSiqtxxGPpX9w.pNTNGKKogUO', '2021-11-09 19:50:13', 2),
(27, 'peppa', '$2y$10$ouFS.lx/Cn5zpJAd9HSa2.dnRmZGTQy33iWkWb7NrHYPI2lnWmclm', '2021-11-09 19:52:33', 2),
(28, 'mignon', 'mignon', '2021-11-25 09:56:27', 1),
(29, 'bouriquet', '$2y$10$piBRo1Q3FPcclGDU5ZKaVerNHeHX6ITXysKZdheM0jLY/.KP56aE6', '2021-11-25 12:34:20', 1),
(30, 'porcinet', '$2y$10$RxYG80.mldzxBFv9auVcyuJ3zDtmmaclTSpxMRg0DbN3LJ4w4mice', '2021-11-25 13:38:17', 1),
(31, 'charlotteauxfraises', '$2y$10$qpK8Z9YmepANC6kBsNBUWOd5Oc7XZo02y0hibg.n4UzWJCk5qvVt2', '2021-12-13 14:11:06', 1),
(32, 'essai', '$2y$10$EvQeKYguVuByV7xXq8IVZeOeL0eO.2sCuCekBvX6TMVb1peT4xQCC', '2021-12-13 15:30:39', 1),
(33, 'essai', '$2y$10$ht6zvrKCxtzhTk0Sfg5Rq.l1CdVc0DoE6Urc9YraVmtAur/.H2h5G', '2021-12-13 15:42:22', 1),
(34, 'essai6', '$2y$10$XjaimxVGh9TRag5YCePboeFCeiXhoVrN29xBu/C62COzARy0jrj5m', '2021-12-13 16:00:38', 2),
(35, 'essai10', '$2y$10$GpyS0WkA3DrgVC5ToqvB8evaw50VcW.pqNjoGD04DX1j6x9NfaLES', '2021-12-13 16:05:04', 1),
(36, 'petitedede', '$2y$10$qLupsL1DVmCUaA9YsNyyQuM7U0DmJ9TPWmykGzbEg8.WdbXO5Lvfq', '2021-12-16 14:07:42', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_article_id` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
