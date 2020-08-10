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
-- Table structure for table `ingredientTypes`
--

DROP TABLE IF EXISTS `recipeTypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recipeTypes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `types` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredientTypes`
--

LOCK TABLES `recipeTypes` WRITE;
/*!40000 ALTER TABLE `ingredientTypes` DISABLE KEYS */;
INSERT INTO `recipeTypes` VALUES (16,'Vegetable pizza','Vegetable','2020-04-18 07:16:24','2020-04-18 07:16:24'),(17,'Vegetable pizza','Fruit','2020-04-18 07:16:39','2020-04-18 07:16:39'),(18,'Vegetable pizza','Eggs','2020-04-18 07:17:18','2020-04-18 07:17:18'),(20,'Vegetarian pizza','mushroom','2020-04-18 07:19:53','2020-04-18 07:19:53'),(21,'Vegetarian pizza','fruit','2020-04-18 07:20:17','2020-04-18 07:20:17'),(22,'Vegetarian pizza','cheese','2020-04-18 07:20:50','2020-04-18 07:20:50'),(23,'Beef pizza','pork','2020-04-18 07:21:53','2020-04-18 07:21:53'),(24,'Beef pizza','Beef','2020-04-18 07:22:12','2020-04-18 07:22:12'),(25,'Beef pizza','Chicken','2020-04-18 07:23:23','2020-04-18 07:23:23'),(26,'Beef pizza','fish','2020-04-18 07:23:54','2020-04-18 07:23:54'),(27,'Beef pizza','shrimp','2020-04-18 07:24:27','2020-04-18 07:24:27'),(28,'Beef pizza','cuttle','2020-04-18 07:25:07','2020-04-18 07:25:07');
/*!40000 ALTER TABLE `ingredientTypes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-20 13:08:06
