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
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recipes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `recipeTypes_id` bigint(20) unsigned NOT NULL,
  `nameOfRecipes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `decription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipes`
--

LOCK TABLES `recipes` WRITE;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` VALUES (20,16,'Cabbage','<p>Xa lach tuoi tron</p>',2.90,'2020-04-18 07:25:57','2020-04-18 07:25:57'),(22,16,'cauliflower','<p>Sup lo luoc</p>',2.90,'2020-04-18 07:30:55','2020-04-18 07:30:55'),(23,16,'eggplant','<p>ca tim luoc</p>',2.90,'2020-04-18 07:31:26','2020-04-18 07:31:26'),(24,16,'pinach','<p>Rau tuoi</p>',2.90,'2020-04-18 07:31:48','2020-04-18 07:31:48'),(25,16,'broccoli','<p>Bong cai xanh luoc</p>',2.80,'2020-04-18 07:32:16','2020-04-18 07:32:16'),(26,16,'lettuce','<p>Rau diep ca&nbsp;</p>',1.00,'2020-04-18 07:33:02','2020-04-18 07:33:02'),(28,16,'horseradish','<p>rau cai</p>',5.00,'2020-04-18 07:33:45','2020-04-18 07:33:45'),(30,16,'radish','<p>cu cai</p>',2.90,'2020-04-18 07:34:48','2020-04-18 07:34:48'),(31,16,'kohlrabi','<p>Xu hao</p>\r\n\r\n<p>&nbsp;</p>',1.00,'2020-04-18 07:35:14','2020-04-18 07:35:14'),(32,17,'Potato','<p>khoai tay</p>\r\n\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>',1.00,'2020-04-18 07:36:10','2020-04-18 07:36:10'),(33,17,'peas','<p>Dau ha Lan</p>\r\n\r\n<div>&nbsp;</div>',2.90,'2020-04-18 07:36:44','2020-04-18 07:36:44'),(34,17,'corn','<p>Dau ha Lan</p>\r\n\r\n<div>&nbsp;</div>',5.00,'2020-04-18 07:37:08','2020-04-18 07:37:08'),(35,17,'tomato','<p>Ca chua</p>\r\n\r\n<div>&nbsp;</div>',5.00,'2020-04-18 07:37:32','2020-04-18 07:37:32'),(36,17,'marrow','<p>Bi xanh</p>\r\n\r\n<div>&nbsp;</div>',5.00,'2020-04-18 07:37:51','2020-04-18 07:37:51'),(37,17,'sweet potato','<p>Khoai lang</p>\r\n\r\n<div>&nbsp;</div>',2.90,'2020-04-18 07:38:15','2020-04-18 07:38:15'),(38,17,'cassava root','<p>Khoai mi</p>\r\n\r\n<div>&nbsp;</div>',2.80,'2020-04-18 07:38:33','2020-04-18 07:38:33'),(39,17,'wintermelon','<p>Bi dao</p>\r\n\r\n<div>&nbsp;</div>',2.80,'2020-04-18 07:38:48','2020-04-18 07:38:48'),(40,17,'lotus root','<p>Cu sen</p>\r\n\r\n<div>&nbsp;</div>',2.90,'2020-04-18 07:39:05','2020-04-18 07:39:05'),(41,17,'string bean','<p>ddau dua</p>\r\n\r\n<div>&nbsp;</div>',2.10,'2020-04-18 07:39:33','2020-04-18 07:39:33'),(42,17,'okra/ lady’s fingers','<p>Dau bap</p>\r\n\r\n<div>&nbsp;</div>',2.10,'2020-04-18 07:39:55','2020-04-18 07:39:55'),(43,17,'avocado','<p>bo</p>\r\n\r\n<div>&nbsp;</div>',2.90,'2020-04-18 07:40:32','2020-04-18 07:40:32'),(44,17,'apple','<p>bo</p>\r\n\r\n<div>&nbsp;</div>',2.10,'2020-04-18 07:45:20','2020-04-18 07:45:20'),(45,17,'Orange','<p>bo</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:45:33','2020-04-18 07:45:33'),(46,17,'Banana','<p>bo</p>\r\n\r\n<div>&nbsp;</div>',2.90,'2020-04-18 07:45:46','2020-04-18 07:45:46'),(47,17,'Grape','<p>bo</p>\r\n\r\n<div>&nbsp;</div>',2.10,'2020-04-18 07:45:58','2020-04-18 07:45:58'),(48,17,'grapefruit','<p>bo</p>\r\n\r\n<div>&nbsp;</div>',2.10,'2020-04-18 07:46:11','2020-04-18 07:46:11'),(49,17,'mango','<p>bo</p>\r\n\r\n<div>&nbsp;</div>',2.90,'2020-04-18 07:46:23','2020-04-18 07:46:23'),(50,17,'pineapple','<p>bo</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:46:34','2020-04-18 07:46:34'),(51,17,'jackfruit','<p>bo</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:46:56','2020-04-18 07:46:56'),(52,17,'dừa','<p>bo</p>\r\n\r\n<div>&nbsp;</div>',NULL,'2020-04-18 07:47:11','2020-04-18 07:47:11'),(53,17,'guava','<p>bo</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:47:24','2020-04-18 07:47:24'),(54,18,'Chicken','<p>trung ga</p>\r\n\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>',9.00,'2020-04-18 07:48:12','2020-04-18 07:48:12'),(55,18,'fish','<p>trung ca</p>\r\n\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>',2.90,'2020-04-18 07:48:58','2020-04-18 07:48:58'),(56,18,'ngong','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:49:07','2020-04-18 07:49:07'),(57,20,'Nam meo','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',9.00,'2020-04-18 07:50:47','2020-04-18 07:50:47'),(58,20,'Nam rom','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:53:23','2020-04-18 07:53:23'),(59,20,'Nam dong tien','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',2.90,'2020-04-18 07:53:30','2020-04-18 07:53:30'),(60,20,'Nam dong co','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',9.00,'2020-04-18 07:53:35','2020-04-18 07:53:35'),(61,21,'Apple','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',9.00,'2020-04-18 07:53:58','2020-04-18 07:53:58'),(62,21,'orange','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:54:16','2020-04-18 07:54:16'),(63,21,'kiwi','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:54:25','2020-04-18 07:54:25'),(64,21,'banana','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:54:33','2020-04-18 07:54:33'),(65,21,'watermelon','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',9.00,'2020-04-18 07:54:44','2020-04-18 07:54:44'),(66,21,'2. green apple','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',2.90,'2020-04-18 07:55:17','2020-04-18 07:55:17'),(67,21,'peach','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',9.00,'2020-04-18 07:55:27','2020-04-18 07:55:27'),(68,21,'peach','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:55:38','2020-04-18 07:55:38'),(69,21,'strawberry','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:55:56','2020-04-18 07:55:56'),(70,21,'1pineapple','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:56:06','2020-04-18 07:56:06'),(71,21,'starfruit','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:56:20','2020-04-18 07:56:20'),(72,21,'dragon fruit','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:56:31','2020-04-18 07:56:31'),(73,22,'Cheese','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',2.90,'2020-04-18 07:56:41','2020-04-18 07:56:41'),(74,22,'Cheese','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',2.90,'2020-04-18 07:57:27','2020-04-18 07:57:27'),(75,23,'pork','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',2.90,'2020-04-18 07:57:46','2020-04-18 07:57:46'),(76,24,'pork','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',2.90,'2020-04-18 07:57:58','2020-04-18 07:57:58'),(77,25,'pork','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',9.00,'2020-04-18 07:58:03','2020-04-18 07:58:03'),(78,25,'Chicken','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',4.00,'2020-04-18 07:58:18','2020-04-18 07:58:18'),(79,26,'fish','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',9.00,'2020-04-18 07:58:26','2020-04-18 07:58:26'),(80,27,'shrimp','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',9.00,'2020-04-18 07:58:38','2020-04-18 07:58:38'),(81,28,'cuttle','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',2.90,'2020-04-18 07:58:47','2020-04-18 07:58:47'),(82,20,'nam dong co','<p>trung ca</p>\r\n\r\n<div>&nbsp;</div>',2.90,'2020-04-18 07:59:47','2020-04-18 07:59:47'),(83,16,'Grapefruit','<p>buoi</p>\r\n\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>',2.90,'2020-04-19 00:48:17','2020-04-19 00:48:17');
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-20 13:08:08
