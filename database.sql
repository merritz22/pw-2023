-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour store
DROP DATABASE IF EXISTS `store`;
CREATE DATABASE IF NOT EXISTS `store` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `store`;

-- Listage de la structure de la table store. categorie
DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Listage des données de la table store.categorie : ~0 rows (environ)
DELETE FROM `categorie`;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` (`id`, `nom`) VALUES
	(1, 'all'),
	(2, 'fem'),
	(3, 'men');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

-- Listage de la structure de la table store. chaussures
DROP TABLE IF EXISTS `chaussures`;
CREATE TABLE IF NOT EXISTS `chaussures` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_categorie` bigint(20) unsigned NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  KEY `primaire` (`id`),
  KEY `unique` (`image`),
  KEY `FK_chaussures_categorie` (`id_categorie`),
  CONSTRAINT `FK_chaussures_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Listage des données de la table store.chaussures : ~0 rows (environ)
DELETE FROM `chaussures`;
/*!40000 ALTER TABLE `chaussures` DISABLE KEYS */;
INSERT INTO `chaussures` (`id`, `id_categorie`, `nom`, `prix`, `description`, `image`) VALUES
	(1, 1, 'nike', 15050, 'Lorem ipsum dolor sit amet consectetur adipis', 'n-1.jpg'),
	(2, 1, 'nike', 15050, 'Lorem ipsum dolor sit amet consectetur adipis', 'n-2.jpg'),
	(3, 1, 'nike', 15050, 'Lorem ipsum dolor sit amet consectetur adipis', 'n-3.jpg'),
	(4, 1, 'nike', 15050, 'Lorem ipsum dolor sit met consectetur adipis', 'n-4.jpg'),
	(5, 1, 'nike', 15050, 'Lorem ipsum dolor sit amet consectetur adipis', 'n-5.jpg'),
	(6, 1, 'nike', 15050, 'Lorem ipsum dolor sit amet consectetur adipis', 'n-6.jpg'),
	(7, 1, 'nike', 15050, 'Lorem ipsum dolor sit amet consectetur adipis', 'n-7.jpg'),
	(8, 1, 'nike', 15050, 'Lorem ipsum dolor sit amet consectetur adipis', 'n-8.jpg'),
	(9, 1, 'nike', 15050, 'Lorem ipsum dolor sit amet consectetur adipis', 'n-9.jpg'),
	(10, 1, 'nike', 15050, 'Lorem ipsum dolor sit amet consectetur adipis', 'n-10.jpg'),
	(11, 1, 'nike', 15050, 'Lorem ipsum dolor sit amet consectetur adipis', 'n-11.jpg'),
	(13, 3, 'gangster', 50500, 'elrjrvkru ruhgruggh r  h krhkg r_rgregreigh', 'm-1.jpg'),
	(14, 3, 'gangster', 50500, 'elrjrvkru ruhgruggh r  h krhkg r_rgregreigh', 'm-2.jpg'),
	(15, 3, 'gangster', 50500, 'elrjrvkru ruhgruggh r  h krhkg r_rgregreigh', 'm-3.jpg'),
	(16, 3, 'gangster', 50500, 'elrjrvkru ruhgruggh r  h krhkg r_rgregreigh', 'm-4.jpg'),
	(17, 3, 'gangster', 50500, 'elrjrvkru ruhgruggh r  h krhkg r_rgregreigh', 'm-5.jpg'),
	(18, 3, 'gangster', 50500, 'elrjrvkru ruhgruggh r  h krhkg r_rgregreigh', 'm-6.jpg'),
	(19, 3, 'gangster', 50500, 'elrjrvkru ruhgruggh r  h krhkg r_rgregreigh', 'm-7.jpg'),
	(20, 3, 'gangster', 50500, 'elrjrvkru ruhgruggh r  h krhkg r_rgregreigh', 'm-8.jpg'),
	(21, 3, 'gangster', 50500, 'elrjrvkru ruhgruggh r  h krhkg r_rgregreigh', 'm-9.jpg'),
	(22, 3, 'gangster', 50500, 'elrjrvkru ruhgruggh r  h krhkg r_rgregreigh', 'm-10.jpg'),
	(23, 3, 'gangster', 50500, 'elrjrvkru ruhgruggh r  h krhkg r_rgregreigh', 'm-11.jpg'),
	(24, 2, 'easy-b', 25000, 'eljugk hgg efkhfh e oeifre hfrerei', 'f-1.jpg'),
	(25, 2, 'easy-b', 25000, 'eljugk hgg efkhfh e oeifre hfrerei', 'f-2.jpg'),
	(26, 2, 'easy-b', 25000, 'eljugk hgg efkhfh e oeifre hfrerei', 'f-3.jpg'),
	(27, 2, 'easy-b', 25000, 'eljugk hgg efkhfh e oeifre hfrerei', 'f-4.jpg'),
	(28, 2, 'easy-b', 25000, 'eljugk hgg efkhfh e oeifre hfrerei', 'f-5.jpg'),
	(29, 2, 'easy-b', 25000, 'eljugk hgg efkhfh e oeifre hfrerei', 'f-6.jpg'),
	(30, 2, 'easy-b', 25000, 'eljugk hgg efkhfh e oeifre hfrerei', 'f-7.jpg'),
	(31, 2, 'easy-b', 25000, 'eljugk hgg efkhfh e oeifre hfrerei', 'f-8.jpg');
/*!40000 ALTER TABLE `chaussures` ENABLE KEYS */;

-- Listage de la structure de la table store. client
DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_compte` bigint(20) unsigned NOT NULL,
  `nom` varchar(50) NOT NULL DEFAULT '',
  `prenom` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL,
  `age` int(10) unsigned NOT NULL,
  `icone` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(1000) NOT NULL DEFAULT '',
  KEY `id` (`id`),
  KEY `Index 2` (`id_compte`,`email`),
  CONSTRAINT `id_compte` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table store.client : ~0 rows (environ)
DELETE FROM `client`;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` (`id`, `id_compte`, `nom`, `prenom`, `email`, `age`, `icone`, `description`) VALUES
	(1, 1, 'MeKA', '', 'ng@gmail.com', 21, '', 'j\'aime coder.');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

-- Listage de la structure de la table store. compte
DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table store.compte : ~0 rows (environ)
DELETE FROM `compte`;
/*!40000 ALTER TABLE `compte` DISABLE KEYS */;
INSERT INTO `compte` (`id`, `email`, `password`) VALUES
	(1, 'ng@gmail.com', 'ng12345');
/*!40000 ALTER TABLE `compte` ENABLE KEYS */;

-- Listage de la structure de la table store. paniers
DROP TABLE IF EXISTS `paniers`;
CREATE TABLE IF NOT EXISTS `paniers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_client` bigint(20) unsigned NOT NULL,
  `id_produit` bigint(20) unsigned NOT NULL,
  `qte` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `panier_id` (`id`),
  KEY `id_client_panier` (`id_client`),
  KEY `id_produit_panier` (`id_produit`),
  CONSTRAINT `id_client_panier` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_produit_panier` FOREIGN KEY (`id_produit`) REFERENCES `chaussures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table store.paniers : ~0 rows (environ)
DELETE FROM `paniers`;
/*!40000 ALTER TABLE `paniers` DISABLE KEYS */;
INSERT INTO `paniers` (`id`, `id_client`, `id_produit`, `qte`) VALUES
	(1, 1, 1, 2);
/*!40000 ALTER TABLE `paniers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
