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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=420 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (384,'2014_10_12_000000_create_users_table',1),(385,'2014_10_12_100000_create_password_resets_table',1),(386,'2020_03_28_135446_create_header_table',1),(387,'2020_03_28_140655_create_header_about_table',1),(388,'2020_03_28_141604_create_header_service_table',1),(389,'2020_03_28_141653_create_header_blog_table',1),(390,'2020_03_28_141849_create_header_contact_table',1),(391,'2020_03_28_142009_create_address_table',1),(392,'2020_03_28_142100_create_activities_table',1),(393,'2020_03_28_142138_create_pizza_table',1),(394,'2020_03_28_142503_create_drink_table',1),(395,'2020_03_28_142549_create_buggers_table',1),(396,'2020_03_28_142639_create_fasta_table',1),(397,'2020_03_28_142943_create_chef_table',1),(398,'2020_03_28_143019_create_menu_table',1),(399,'2020_03_28_143417_create_menu_pricing_table',1),(400,'2020_03_28_143503_create_services_table',1),(401,'2020_03_28_143559_create_num_services_table',1),(402,'2020_03_28_143707_create_blog_table',1),(403,'2020_03_28_143754_create_numblog_table',1),(404,'2020_03_28_143834_create_contact_info_table',1),(405,'2020_03_28_144011_create_comment_table',1),(406,'2020_03_28_144108_create_order_table',1),(407,'2020_03_29_063115_create_image_table',1),(408,'2020_03_29_063204_create_order_details_table',1),(409,'2020_03_29_065820_create_status_table',1),(410,'2020_03_29_070938_create_product_details_table',1),(411,'2020_03_31_135710_create_header_menu_table',1),(412,'2020_04_09_091310_create_beef_pizza_table',1),(413,'2020_04_09_092917_create_vegetarian_pizza_table',1),(414,'2020_04_09_093120_create_vegetable_pizza_table',1),(415,'2020_04_09_141705_create_transaction_table',1),(416,'2020_04_13_022341_create_pizza_recipes_table',1),(417,'2020_04_13_022452_create_recipes_table',1),(418,'2020_04_17_080844_create_recipe_types_table',1),(419,'2020_04_18_081756_create_custom_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-20 13:08:03
