-- MySQL dump 10.13  Distrib 8.0.18, for macos10.14 (x86_64)
--
-- Host: localhost    Database: pizza_60
-- ------------------------------------------------------
-- Server version	5.7.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pizza`
--

DROP TABLE IF EXISTS `pizza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pizza` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `chef` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pizza`
--

LOCK TABLES `pizza` WRITE;
/*!40000 ALTER TABLE `pizza` DISABLE KEYS */;
INSERT INTO `pizza` VALUES (3,'Vegetable pizza','<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>\r\n\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>','<ul>\r\n	<li>Banana</li>\r\n	<li>Onion</li>\r\n	<li>Egg</li>\r\n	<li>Cheese</li>\r\n	<li>Cherry</li>\r\n</ul>\r\n\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>',2.90,'Vanessa','30mins','uploads/pizza/reJ2_pizza-4.jpg',1,'2020-04-19 02:13:35','2020-04-19 02:13:35'),(4,'Fruit Pizza','<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>\r\n\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>','<ul>\r\n	<li>Apple</li>\r\n	<li>Grapefruit</li>\r\n	<li>Grape</li>\r\n	<li>cheese</li>\r\n	<li>Eggs</li>\r\n</ul>\r\n\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>',2.90,'Clay','30 mins','uploads/pizza/qjNo_pizza-7.jpg',1,'2020-04-19 02:15:24','2020-04-19 02:15:24'),(7,'Meat Pizza','<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>\r\n\r\n<div>&nbsp;</div>','<ul>\r\n	<li>Beef</li>\r\n	<li>Cabbage</li>\r\n	<li>Cheese</li>\r\n	<li>Onion</li>\r\n	<li>Corn</li>\r\n</ul>',2.90,'Clay','30 mins','uploads/pizza/DKBt_pizza-3.jpg',1,'2020-04-19 02:17:05','2020-04-19 02:17:05'),(8,'Beef Pizza','<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>\r\n\r\n<div>&nbsp;</div>','<ul>\r\n	<li>Beef</li>\r\n	<li>Cabbage</li>\r\n	<li>Cheese</li>\r\n	<li>Onion</li>\r\n	<li>Corn</li>\r\n</ul>',2.90,'Clay','30 mins','uploads/pizza/MiBO_pizza-1.jpg',1,'2020-04-19 02:17:24','2020-04-19 02:17:24'),(10,'mushroom Pizza','<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>\r\n\r\n<div>&nbsp;</div>','<ul>\r\n	<li>Beef</li>\r\n	<li>Cabbage</li>\r\n	<li>Cheese</li>\r\n	<li>Onion</li>\r\n	<li>Corn</li>\r\n</ul>',2.90,'Clay','30 mins','uploads/pizza/oVs0_pizza-5.jpg',1,'2020-04-19 02:18:02','2020-04-19 02:18:02'),(12,'Eggs Pizza','<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>\r\n\r\n<div>&nbsp;</div>','<ul>\r\n	<li>Beef</li>\r\n	<li>Cabbage</li>\r\n	<li>Cheese</li>\r\n	<li>Onion</li>\r\n	<li>Corn</li>\r\n</ul>',2.90,'Clay','30 mins','uploads/pizza/avCg_pizza-8.jpg',1,'2020-04-19 02:19:38','2020-04-19 02:19:38');
/*!40000 ALTER TABLE `pizza` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-20 13:08:04
