-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: cms5_ecommerce
-- ------------------------------------------------------
-- Server version	5.7.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `additional_product_pivots`
--

DROP TABLE IF EXISTS `additional_product_pivots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `additional_product_pivots` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `additional_product_pivots_item_id_index` (`item_id`),
  KEY `additional_product_pivots_product_id_index` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `additional_product_pivots`
--

LOCK TABLES `additional_product_pivots` WRITE;
/*!40000 ALTER TABLE `additional_product_pivots` DISABLE KEYS */;
INSERT INTO `additional_product_pivots` VALUES (1,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,1,2,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(3,1,3,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(4,2,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(5,2,2,'2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `additional_product_pivots` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `session_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts`
--

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
INSERT INTO `carts` VALUES (1,'123456','2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,'7891011','2017-08-16 09:35:17','2017-08-16 09:35:17'),(3,'12131415','2017-08-16 09:35:17','2017-08-16 09:35:17'),(4,'16171819','2017-08-16 09:35:17','2017-08-16 09:35:17'),(5,'2021222324','2017-08-16 09:35:17','2017-08-16 09:35:17'),(6,'2526272829','2017-08-16 09:35:17','2017-08-16 09:35:17'),(7,'3031323334','2017-08-16 09:35:17','2017-08-16 09:35:17'),(8,'3536373839','2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carts_product_pivots`
--

DROP TABLE IF EXISTS `carts_product_pivots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carts_product_pivots` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` int(10) unsigned NOT NULL,
  `cart_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_product_pivots_item_id_index` (`item_id`),
  KEY `carts_product_pivots_cart_id_index` (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts_product_pivots`
--

LOCK TABLES `carts_product_pivots` WRITE;
/*!40000 ALTER TABLE `carts_product_pivots` DISABLE KEYS */;
INSERT INTO `carts_product_pivots` VALUES (1,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,1,2,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(3,1,3,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(4,2,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(5,2,2,'2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `carts_product_pivots` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Daily Meal','utama',0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,'Catering','utama',0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(3,'Sayuran','isi',1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(4,'Protein','isi',2,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(5,'Appetizier','jenis',3,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(6,'Soup','jenis',4,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(7,'Salad','jenis',0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(8,'Maincorse','jenis',0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(9,'Condiment','jenis',0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(10,'Dessert','jenis',0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(11,'Sunda','region',0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(12,'Jawa','region',0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(13,'Sumatra','region',0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(14,'Italia','region',0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(15,'Eropa','region',0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(16,'Asia','region',0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(17,'Arab','region',0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(18,'Karbohidrat','isi',0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(19,'Lauk','isi',0,'2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_item_pivots`
--

DROP TABLE IF EXISTS `category_item_pivots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_item_pivots` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` int(10) unsigned NOT NULL,
  `categories_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_item_pivots_item_id_index` (`item_id`),
  KEY `category_item_pivots_categories_id_index` (`categories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_item_pivots`
--

LOCK TABLES `category_item_pivots` WRITE;
/*!40000 ALTER TABLE `category_item_pivots` DISABLE KEYS */;
INSERT INTO `category_item_pivots` VALUES (1,1,1,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(2,2,2,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(3,3,3,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(4,4,4,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(5,5,19,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(6,6,18,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(7,7,1,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(8,8,2,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(9,9,3,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(10,10,4,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(11,11,5,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(12,12,6,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(13,13,1,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(14,14,2,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(15,15,3,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(16,16,4,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(17,17,5,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(18,18,6,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(19,19,1,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(20,20,2,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(21,21,3,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(22,22,4,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(23,23,5,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(24,24,6,'2017-08-16 09:35:18','2017-08-16 09:35:18');
/*!40000 ALTER TABLE `category_item_pivots` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_product_pivots`
--

DROP TABLE IF EXISTS `category_product_pivots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_product_pivots` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_product_pivots_category_id_index` (`category_id`),
  KEY `category_product_pivots_product_id_index` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_product_pivots`
--

LOCK TABLES `category_product_pivots` WRITE;
/*!40000 ALTER TABLE `category_product_pivots` DISABLE KEYS */;
INSERT INTO `category_product_pivots` VALUES (1,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,1,2,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(3,1,3,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(4,2,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(5,2,2,'2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `category_product_pivots` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `couriers`
--

DROP TABLE IF EXISTS `couriers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `couriers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `couriers_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `couriers`
--

LOCK TABLES `couriers` WRITE;
/*!40000 ALTER TABLE `couriers` DISABLE KEYS */;
INSERT INTO `couriers` VALUES (1,'Jono','jono.jpg','62344434733','jono@gmail.com','2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,'Juki','juki.jpg','62344884733','juki@gmail.com','2017-08-16 09:35:17','2017-08-16 09:35:17'),(3,'Jane','jane.jpg','62344374633','jane@gmail.com','2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `couriers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deliveries`
--

DROP TABLE IF EXISTS `deliveries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deliveries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `delivery_status` tinyint(4) NOT NULL,
  `delivery_time` tinyint(4) NOT NULL,
  `delivery_receiver` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_receiver_phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deliveries`
--

LOCK TABLES `deliveries` WRITE;
/*!40000 ALTER TABLE `deliveries` DISABLE KEYS */;
INSERT INTO `deliveries` VALUES (1,1,1,123456,1,1,'dann abarmov','627383930993','jl jali-jali jogjakarta','2017-03-23','2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,2,1,123456,1,2,'dann abarmov','627383930993','jl jali-jali jogjakarta','2017-03-23','2017-08-16 09:35:17','2017-08-16 09:35:17'),(3,3,1,123456,1,1,'dann abarmov','627383930993','jl jali-jali jogjakarta','2017-03-23','2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `deliveries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `delivery_trackings`
--

DROP TABLE IF EXISTS `delivery_trackings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `delivery_trackings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL,
  `refference_id` int(11) DEFAULT NULL,
  `tracking_status` int(11) NOT NULL,
  `current_position` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `delivery_trackings`
--

LOCK TABLES `delivery_trackings` WRITE;
/*!40000 ALTER TABLE `delivery_trackings` DISABLE KEYS */;
INSERT INTO `delivery_trackings` VALUES (1,1,1,1,0,1,'Position position','Additional note','2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,1,1,1,1,1,'Position position','Additional note','2017-08-16 09:35:17','2017-08-16 09:35:17'),(3,1,1,1,2,1,'Position position','Additional note','2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `delivery_trackings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_images`
--

DROP TABLE IF EXISTS `item_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_images`
--

LOCK TABLES `item_images` WRITE;
/*!40000 ALTER TABLE `item_images` DISABLE KEYS */;
INSERT INTO `item_images` VALUES (1,'food.png',1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,'food.png',2,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(3,'food.png',3,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(4,'food.png',4,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(5,'food.png',5,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(6,'food.png',6,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(7,'food.png',7,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(8,'food.png',8,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(9,'food.png',9,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(10,'food.png',10,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(11,'food.png',11,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(12,'food.png',12,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(13,'food.png',13,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(14,'food.png',14,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(15,'food.png',15,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(16,'food.png',16,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(17,'food.png',17,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(18,'food.png',18,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(19,'food.png',19,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(20,'food.png',20,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(21,'food.png',21,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(22,'food.png',22,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(23,'food.png',23,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(24,'food.png',24,'2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `item_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'Lorem ipsum dolor sit amet',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,'Consectetur adipiscing elit',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(3,'Fusce nec risus non ligula auctor',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(4,'Lorem ipsum dolor sit amet',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(5,'Consectetur adipiscing elit',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(6,'Fusce nec risus non ligula auctor',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(7,'Lorem ipsum dolor sit amet',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(8,'Consectetur adipiscing elit',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(9,'Fusce nec risus non ligula auctor',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(10,'Lorem ipsum dolor sit amet',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(11,'Consectetur adipiscing elit',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(12,'Fusce nec risus non ligula auctor',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(13,'Lorem ipsum dolor sit amet',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(14,'Consectetur adipiscing elit',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(15,'Fusce nec risus non ligula auctor',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(16,'Lorem ipsum dolor sit amet',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(17,'Consectetur adipiscing elit',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(18,'Fusce nec risus non ligula auctor',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(19,'Lorem ipsum dolor sit amet',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(20,'Consectetur adipiscing elit',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(21,'Fusce nec risus non ligula auctor',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(22,'Lorem ipsum dolor sit amet',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(23,'Consectetur adipiscing elit',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(24,'Fusce nec risus non ligula auctor',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',12000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_number` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_card_number` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_card_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date NOT NULL,
  `sex` tinyint(4) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `members_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,2,'Juki Suprime','juki@gmail.com','6283793839','03928290202','Juki Suprime','Bank BNI','02233433','Juki Suprime','1998-02-23',1,'Jala kolang-kolang',122,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,3,'Juki Suprime','juki168@gmail.com','6283793839','03928290202','Juki Suprime','Bank BNI','02233433','Juki Suprime','1998-02-23',1,'Jala kolang-kolang',122,1,'2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=602 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (571,'2014_10_12_000000_create_users_table',1),(572,'2017_02_28_024723_create_posts_table',1),(573,'2017_02_28_043845_create_tags_table',1),(574,'2017_02_28_043932_create_post_tag_pivot',1),(575,'2017_02_28_090033_restructure_post_table',1),(576,'2017_03_03_031532_create_jobs_table',1),(577,'2017_03_03_065305_create_items_table',1),(578,'2017_03_08_020505_categories',1),(579,'2017_03_08_023143_entrust_setup_tables',1),(580,'2017_03_09_043303_create_member_table',1),(581,'2017_03_09_063047_create_orders_table',1),(582,'2017_03_09_071313_create_payments_table',1),(583,'2017_03_09_073249_create_deliveries_table',1),(584,'2017_03_09_074453_create_order_details_table',1),(585,'2017_03_10_021532_create_slider_table',1),(586,'2017_03_10_041235_create_promotions_table',1),(587,'2017_03_10_041443_create_products_table',1),(588,'2017_03_10_041741_create_category_product_pivot_table',1),(589,'2017_03_10_041937_create_product_images_table',1),(590,'2017_03_10_042621_create_cart_product_pivot_table',1),(591,'2017_03_10_042621_create_carts_table',1),(592,'2017_03_10_043217_create_delivery_trackings_table',1),(593,'2017_03_10_043505_create_shipping_cost_table',1),(594,'2017_03_10_074712_create_additonal_product_pivot_table',1),(595,'2017_03_13_023247_create_sessions_table',1),(596,'2017_03_14_022036_create_item_images_table',1),(597,'2017_03_22_092606_couriers_table',1),(598,'2017_03_25_045756_create_pages_table',1),(599,'2017_03_25_045810_create_page_fields_table',1),(600,'2017_03_25_050154_create_page_images_table',1),(601,'2017_04_11_033556_create_category_item_pivot',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `is_canceled` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` VALUES (1,1,1,200,20000,0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,2,1,10,30000,0,'2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `is_canceled` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,1,1,20000,0,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,1,2,2,26000,0,'2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_fields`
--

DROP TABLE IF EXISTS `page_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `field_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_content` text COLLATE utf8mb4_unicode_ci,
  `field_order` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_fields`
--

LOCK TABLES `page_fields` WRITE;
/*!40000 ALTER TABLE `page_fields` DISABLE KEYS */;
INSERT INTO `page_fields` VALUES (1,1,'phone','6289373838',1,1,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(2,1,'email','contact@me.com',2,1,'2017-08-16 09:35:18','2017-08-16 09:35:18');
/*!40000 ALTER TABLE `page_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_images`
--

DROP TABLE IF EXISTS `page_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_images_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_images`
--

LOCK TABLES `page_images` WRITE;
/*!40000 ALTER TABLE `page_images` DISABLE KEYS */;
INSERT INTO `page_images` VALUES (1,1,'image1.jpg','2017-08-16 09:35:18','2017-08-16 09:35:18'),(2,1,'image2.jpg','2017-08-16 09:35:18','2017-08-16 09:35:18');
/*!40000 ALTER TABLE `page_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'About Us','about-us',1,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(2,'FAQ','faq',1,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(3,'How To Order','how-to-order',1,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(4,'Contact Us','contact-us',1,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(5,'Desclaimer','desclaimer',1,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(6,'Privacy','privacy',1,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(7,'Term Of Use','privacy-policy',1,'2017-08-16 09:35:18','2017-08-16 09:35:18');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_method` tinyint(4) NOT NULL,
  `payment_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,1,26000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,2,26000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17'),(3,3,26000,1,1,'2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(71,1),(72,1),(73,1),(74,1),(75,1),(76,1),(77,1),(78,1),(79,1),(80,1),(81,1),(82,1),(83,1),(84,1),(85,1),(86,1),(87,1),(88,1),(89,1),(90,1),(91,1),(92,1),(93,1),(94,1),(95,1),(96,1),(97,1),(98,1),(99,1),(100,1),(101,1),(102,1),(103,1),(104,1),(105,1),(1,2),(2,2),(3,2),(4,2),(5,2),(9,2),(10,2),(11,2),(12,2),(1,3),(2,3);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'role-list','Display Role Listing','See only Listing Of Role','2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,'role-create','Create Role','Create New Role','2017-08-16 09:35:17','2017-08-16 09:35:17'),(3,'role-edit','Edit Role','Edit Role','2017-08-16 09:35:17','2017-08-16 09:35:17'),(4,'role-delete','Delete Role','Delete Role','2017-08-16 09:35:17','2017-08-16 09:35:17'),(5,'items-list','Display Item Listing','See only Listing Of Item','2017-08-16 09:35:17','2017-08-16 09:35:17'),(6,'items-create','Create Item','Create New Item','2017-08-16 09:35:17','2017-08-16 09:35:17'),(7,'items-edit','Edit Item','Edit Item','2017-08-16 09:35:17','2017-08-16 09:35:17'),(8,'items-delete','Delete Item','Delete Item','2017-08-16 09:35:17','2017-08-16 09:35:17'),(9,'carts-list','Display carts Listing','See only Listing Of Item','2017-08-16 09:35:17','2017-08-16 09:35:17'),(10,'carts-create','Create carts','Create New carts','2017-08-16 09:35:17','2017-08-16 09:35:17'),(11,'carts-edit','Edit carts','Edit carts','2017-08-16 09:35:17','2017-08-16 09:35:17'),(12,'carts-delete','Delete carts','Delete carts','2017-08-16 09:35:17','2017-08-16 09:35:17'),(13,'categories-list','Display categories Listing','See only Listing Of Item','2017-08-16 09:35:17','2017-08-16 09:35:17'),(14,'categories-create','Create categories','Create New categories','2017-08-16 09:35:17','2017-08-16 09:35:17'),(15,'categories-edit','Edit categories','Edit categories','2017-08-16 09:35:17','2017-08-16 09:35:17'),(16,'categories-delete','Delete categories','Delete categories','2017-08-16 09:35:17','2017-08-16 09:35:17'),(17,'couriers-list','Display couriers Listing','See only Listing Of couriers','2017-08-16 09:35:17','2017-08-16 09:35:17'),(18,'couriers-create','Create couriers','Create New couriers','2017-08-16 09:35:17','2017-08-16 09:35:17'),(19,'couriers-edit','Edit couriers','Edit couriers','2017-08-16 09:35:17','2017-08-16 09:35:17'),(20,'couriers-delete','Delete couriers','Delete couriers','2017-08-16 09:35:17','2017-08-16 09:35:17'),(21,'deliveries-list','Display deliveries Listing','See only Listing Of deliveries','2017-08-16 09:35:17','2017-08-16 09:35:17'),(22,'deliveries-create','Create deliveries','Create New deliveries','2017-08-16 09:35:17','2017-08-16 09:35:17'),(23,'deliveries-edit','Edit deliveries','Edit deliveries','2017-08-16 09:35:17','2017-08-16 09:35:17'),(24,'deliveries-delete','Delete deliveries','Delete deliveries','2017-08-16 09:35:17','2017-08-16 09:35:17'),(25,'delivery_trackings-list','Display delivery_trackings Listing','See only Listing Of delivery_trackings','2017-08-16 09:35:17','2017-08-16 09:35:17'),(26,'delivery_trackings-create','Create delivery_trackings','Create New delivery_trackings','2017-08-16 09:35:17','2017-08-16 09:35:17'),(27,'delivery_trackings-edit','Edit delivery_trackings','Edit delivery_trackings','2017-08-16 09:35:17','2017-08-16 09:35:17'),(28,'delivery_trackings-delete','Delete delivery_trackings','Delete delivery_trackings','2017-08-16 09:35:17','2017-08-16 09:35:17'),(29,'item_images-list','Display item_images Listing','See only Listing Of item_images','2017-08-16 09:35:17','2017-08-16 09:35:17'),(30,'item_images-create','Create item_images','Create New item_images','2017-08-16 09:35:17','2017-08-16 09:35:17'),(31,'item_images-edit','Edit item_images','Edit item_images','2017-08-16 09:35:17','2017-08-16 09:35:17'),(32,'item_images-delete','Delete item_images','Delete item_images','2017-08-16 09:35:17','2017-08-16 09:35:17'),(33,'members-list','Display members Listing','See only Listing Of members','2017-08-16 09:35:17','2017-08-16 09:35:17'),(34,'members-create','Create members','Create New members','2017-08-16 09:35:17','2017-08-16 09:35:17'),(35,'members-edit','Edit members','Edit members','2017-08-16 09:35:17','2017-08-16 09:35:17'),(36,'members-delete','Delete members','Delete members','2017-08-16 09:35:17','2017-08-16 09:35:17'),(37,'order_details-list','Display order_details Listing','See only Listing Of order_details','2017-08-16 09:35:17','2017-08-16 09:35:17'),(38,'order_details-create','Create order_details','Create New order_details','2017-08-16 09:35:17','2017-08-16 09:35:17'),(39,'order_details-edit','Edit order_details','Edit order_details','2017-08-16 09:35:17','2017-08-16 09:35:17'),(40,'order_details-delete','Delete order_details','Delete order_details','2017-08-16 09:35:17','2017-08-16 09:35:17'),(41,'orders-list','Display orders Listing','See only Listing Of orders','2017-08-16 09:35:17','2017-08-16 09:35:17'),(42,'orders-create','Create orders','Create New orders','2017-08-16 09:35:17','2017-08-16 09:35:17'),(43,'orders-edit','Edit orders','Edit orders','2017-08-16 09:35:17','2017-08-16 09:35:17'),(44,'orders-delete','Delete orders','Delete orders','2017-08-16 09:35:17','2017-08-16 09:35:17'),(45,'page_fields-list','Display page_fields Listing','See only Listing Of page_fields','2017-08-16 09:35:17','2017-08-16 09:35:17'),(46,'page_fields-create','Create page_fields','Create New page_fields','2017-08-16 09:35:17','2017-08-16 09:35:17'),(47,'page_fields-edit','Edit page_fields','Edit page_fields','2017-08-16 09:35:17','2017-08-16 09:35:17'),(48,'page_fields-delete','Delete page_fields','Delete page_fields','2017-08-16 09:35:17','2017-08-16 09:35:17'),(49,'page_images-list','Display page_images Listing','See only Listing Of page_images','2017-08-16 09:35:17','2017-08-16 09:35:17'),(50,'page_images-create','Create page_images','Create New page_images','2017-08-16 09:35:17','2017-08-16 09:35:17'),(51,'page_images-edit','Edit page_images','Edit page_images','2017-08-16 09:35:17','2017-08-16 09:35:17'),(52,'page_images-delete','Delete page_images','Delete page_images','2017-08-16 09:35:17','2017-08-16 09:35:17'),(53,'pages-list','Display pages Listing','See only Listing Of pages','2017-08-16 09:35:17','2017-08-16 09:35:17'),(54,'pages-create','Create pages','Create New pages','2017-08-16 09:35:17','2017-08-16 09:35:17'),(55,'pages-edit','Edit pages','Edit pages','2017-08-16 09:35:17','2017-08-16 09:35:17'),(56,'pages-delete','Delete pages','Delete pages','2017-08-16 09:35:17','2017-08-16 09:35:17'),(57,'payments-list','Display payments Listing','See only Listing Of payments','2017-08-16 09:35:17','2017-08-16 09:35:17'),(58,'payments-create','Create payments','Create New payments','2017-08-16 09:35:17','2017-08-16 09:35:17'),(59,'payments-edit','Edit payments','Edit payments','2017-08-16 09:35:17','2017-08-16 09:35:17'),(60,'payments-delete','Delete payments','Delete payments','2017-08-16 09:35:17','2017-08-16 09:35:17'),(61,'permissions-list','Display permissions Listing','See only Listing Of permissions','2017-08-16 09:35:17','2017-08-16 09:35:17'),(62,'permissions-create','Create permissions','Create New permissions','2017-08-16 09:35:17','2017-08-16 09:35:17'),(63,'permissions-edit','Edit permissions','Edit permissions','2017-08-16 09:35:17','2017-08-16 09:35:17'),(64,'permissions-delete','Delete permissions','Delete permissions','2017-08-16 09:35:17','2017-08-16 09:35:17'),(65,'product_images-list','Display product_images Listing','See only Listing Of product_images','2017-08-16 09:35:17','2017-08-16 09:35:17'),(66,'product_images-create','Create product_images','Create New product_images','2017-08-16 09:35:17','2017-08-16 09:35:17'),(67,'product_images-edit','Edit product_images','Edit product_images','2017-08-16 09:35:17','2017-08-16 09:35:17'),(68,'product_images-delete','Delete product_images','Delete product_images','2017-08-16 09:35:17','2017-08-16 09:35:17'),(69,'products-list','Display products Listing','See only Listing Of products','2017-08-16 09:35:17','2017-08-16 09:35:17'),(70,'products-create','Create products','Create New products','2017-08-16 09:35:17','2017-08-16 09:35:17'),(71,'products-edit','Edit products','Edit products','2017-08-16 09:35:17','2017-08-16 09:35:17'),(72,'products-delete','Delete products','Delete products','2017-08-16 09:35:17','2017-08-16 09:35:17'),(73,'promotions-list','Display promotions Listing','See only Listing Of promotions','2017-08-16 09:35:17','2017-08-16 09:35:17'),(74,'promotions-create','Create promotions','Create New promotions','2017-08-16 09:35:17','2017-08-16 09:35:17'),(75,'promotions-edit','Edit promotions','Edit promotions','2017-08-16 09:35:17','2017-08-16 09:35:17'),(76,'promotions-delete','Delete promotions','Delete promotions','2017-08-16 09:35:17','2017-08-16 09:35:17'),(77,'sessions-list','Display sessions Listing','See only Listing Of sessions','2017-08-16 09:35:17','2017-08-16 09:35:17'),(78,'sessions-create','Create sessions','Create New sessions','2017-08-16 09:35:17','2017-08-16 09:35:17'),(79,'sessions-edit','Edit sessions','Edit sessions','2017-08-16 09:35:17','2017-08-16 09:35:17'),(80,'sessions-delete','Delete sessions','Delete sessions','2017-08-16 09:35:17','2017-08-16 09:35:17'),(81,'shipping_costs-list','Display shipping_costs Listing','See only Listing Of shipping_costs','2017-08-16 09:35:17','2017-08-16 09:35:17'),(82,'shipping_costs-create','Create shipping_costs','Create New shipping_costs','2017-08-16 09:35:17','2017-08-16 09:35:17'),(83,'shipping_costs-edit','Edit shipping_costs','Edit shipping_costs','2017-08-16 09:35:17','2017-08-16 09:35:17'),(84,'shipping_costs-delete','Delete shipping_costs','Delete shipping_costs','2017-08-16 09:35:17','2017-08-16 09:35:17'),(85,'sliders-list','Display sliders Listing','See only Listing Of sliders','2017-08-16 09:35:17','2017-08-16 09:35:17'),(86,'sliders-create','Create sliders','Create New sliders','2017-08-16 09:35:17','2017-08-16 09:35:17'),(87,'sliders-edit','Edit sliders','Edit sliders','2017-08-16 09:35:17','2017-08-16 09:35:17'),(88,'sliders-delete','Delete sliders','Delete sliders','2017-08-16 09:35:17','2017-08-16 09:35:17'),(89,'tag-list','Display tag Listing','See only Listing Of tag','2017-08-16 09:35:17','2017-08-16 09:35:17'),(90,'tag-create','Create tag','Create New tag','2017-08-16 09:35:17','2017-08-16 09:35:17'),(91,'tag-edit','Edit tag','Edit tag','2017-08-16 09:35:17','2017-08-16 09:35:17'),(92,'tag-delete','Delete tag','Delete tag','2017-08-16 09:35:17','2017-08-16 09:35:17'),(93,'upload-list','Display tag upload-list','See only upload-list Of tag','2017-08-16 09:35:17','2017-08-16 09:35:17'),(94,'upload-file','Create upload-file','Create New upload-file','2017-08-16 09:35:17','2017-08-16 09:35:17'),(95,'upload-folder','create upload-folder','create upload-folder','2017-08-16 09:35:17','2017-08-16 09:35:17'),(96,'upload-deleteFolder','Delete upload-deleteFolder','Delete upload-deleteFolder','2017-08-16 09:35:17','2017-08-16 09:35:17'),(97,'upload-deleteFile','Delete upload-deleteFile','Delete upload-deleteFile','2017-08-16 09:35:17','2017-08-16 09:35:17'),(98,'post-list','Display post Listing','See only Listing Of post','2017-08-16 09:35:17','2017-08-16 09:35:17'),(99,'post-create','Create post','Create New post','2017-08-16 09:35:17','2017-08-16 09:35:17'),(100,'post-edit','Edit post','Edit post','2017-08-16 09:35:17','2017-08-16 09:35:17'),(101,'post-delete','Delete post','Delete post','2017-08-16 09:35:17','2017-08-16 09:35:17'),(102,'users-list','Display users Listing','See only Listing Of users','2017-08-16 09:35:17','2017-08-16 09:35:17'),(103,'users-create','Create users','Create New users','2017-08-16 09:35:17','2017-08-16 09:35:17'),(104,'users-edit','Edit users','Edit users','2017-08-16 09:35:17','2017-08-16 09:35:17'),(105,'users-delete','Delete users','Delete users','2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tag_pivot`
--

DROP TABLE IF EXISTS `post_tag_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_tag_pivot` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_tag_pivot_post_id_index` (`post_id`),
  KEY `post_tag_pivot_tag_id_index` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tag_pivot`
--

LOCK TABLES `post_tag_pivot` WRITE;
/*!40000 ALTER TABLE `post_tag_pivot` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_tag_pivot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_raw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_draft` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'consequatur-est-cum-omnis-vel-omnis-alias-non','Consequatur est cum omnis vel omnis alias non.','Molestiae tempore eveniet.','Dolore suscipit molestiae non ipsa. Et quia dolorem corrupti rem. Modi est et omnis sit enim.\n\nSunt aperiam ipsam dolorem officiis odit. Ea ut dolores est veniam distinctio quidem earum culpa. Consectetur blanditiis veritatis aut aliquid. Quas ut minus recusandae.\n\nDignissimos minus ad nihil tempore dolorum magnam iste temporibus. Sequi repellat est voluptas sint voluptas. Recusandae cupiditate adipisci voluptas libero et optio et eum. Sint voluptas quae corporis perferendis nobis.','Dolore suscipit molestiae non ipsa. Et quia dolorem corrupti rem. Modi est et omnis sit enim.\n\nSunt aperiam ipsam dolorem officiis odit. Ea ut dolores est veniam distinctio quidem earum culpa. Consectetur blanditiis veritatis aut aliquid. Quas ut minus recusandae.\n\nDignissimos minus ad nihil tempore dolorum magnam iste temporibus. Sequi repellat est voluptas sint voluptas. Recusandae cupiditate adipisci voluptas libero et optio et eum. Sint voluptas quae corporis perferendis nobis.','Corporis veniam aperiam est molestias ut voluptate soluta ut est nemo nisi nihil.','Molestiae in sunt deserunt enim.',8,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-08-01 12:35:23'),(2,'corporis-sunt-aut-est-a-quod','Corporis sunt aut est a quod.','Voluptas perferendis nihil et facere itaque voluptatem officiis est consequuntur qui.','Magni expedita corrupti sequi quia. Quia earum rerum dolorem voluptas consequatur magnam molestiae. Nulla quis reiciendis dolor architecto porro. Est ut mollitia sed omnis.\n\nAt neque dolorum quidem beatae harum ea. Odio nulla quidem id in fugit. Dolore velit dicta quisquam amet molestiae.\n\nQui ab sit tempora. Aut aperiam quia natus consequatur modi. Ut ut placeat aut quod cupiditate quo voluptas laboriosam. Et quibusdam nam quod.\n\nAutem cum voluptatem accusamus doloribus. Voluptas sit nihil vel et facere rerum officia.\n\nProvident consequatur veritatis tempore quis. Aut maiores consequuntur eum. Quis accusamus quibusdam non perferendis minus. Rerum qui esse id ut et ea cupiditate.','Magni expedita corrupti sequi quia. Quia earum rerum dolorem voluptas consequatur magnam molestiae. Nulla quis reiciendis dolor architecto porro. Est ut mollitia sed omnis.\n\nAt neque dolorum quidem beatae harum ea. Odio nulla quidem id in fugit. Dolore velit dicta quisquam amet molestiae.\n\nQui ab sit tempora. Aut aperiam quia natus consequatur modi. Ut ut placeat aut quod cupiditate quo voluptas laboriosam. Et quibusdam nam quod.\n\nAutem cum voluptatem accusamus doloribus. Voluptas sit nihil vel et facere rerum officia.\n\nProvident consequatur veritatis tempore quis. Aut maiores consequuntur eum. Quis accusamus quibusdam non perferendis minus. Rerum qui esse id ut et ea cupiditate.','Asperiores et ullam tempore voluptatibus.','Ipsam laborum qui rerum vitae.',1,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-08-15 11:46:45'),(3,'quasi-aliquid-ipsam-officiis-adipisci-eius-magni-inventore-perspiciatis-cumque','Quasi aliquid ipsam officiis adipisci eius magni inventore perspiciatis cumque.','Pariatur mollitia animi quia eos est debitis pariatur alias incidunt maxime maiores tenetur.','Neque nam et quo quibusdam. Qui aliquid totam eveniet maiores id consequatur molestiae quia. Pariatur incidunt repellat ducimus.\n\nMinus voluptate asperiores voluptatem aut. Tenetur dolorem aut provident aut voluptates rerum sed dolor. Eos id quis explicabo totam voluptas dolorem a. Non laudantium ut ut non consectetur fugit.\n\nQui voluptate accusamus velit accusamus. Autem nam explicabo omnis.','Neque nam et quo quibusdam. Qui aliquid totam eveniet maiores id consequatur molestiae quia. Pariatur incidunt repellat ducimus.\n\nMinus voluptate asperiores voluptatem aut. Tenetur dolorem aut provident aut voluptates rerum sed dolor. Eos id quis explicabo totam voluptas dolorem a. Non laudantium ut ut non consectetur fugit.\n\nQui voluptate accusamus velit accusamus. Autem nam explicabo omnis.','Tempora rerum at autem ex perferendis natus nobis qui blanditiis quo.','Quasi magnam aliquid non.',5,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-08-13 10:12:30'),(4,'amet-sequi-eveniet-molestiae-inventore-reprehenderit-earum-quia','Amet sequi eveniet molestiae inventore reprehenderit earum quia.','Non dolorum ut ut culpa iste sapiente expedita.','Perspiciatis eum aliquid quibusdam non iusto. Sit aliquam atque numquam sapiente est. Laboriosam voluptas voluptatem dolor voluptas corrupti delectus. Quia et consectetur ut nihil quisquam optio repudiandae. Nulla odio sed sunt veniam esse porro.\n\nRerum quod eos nulla tenetur odio. Est saepe nobis sed rerum consequatur qui. Laudantium et reprehenderit reiciendis ipsa est rem. Ipsam autem totam provident. Ut asperiores qui vel velit eos et excepturi voluptas.\n\nAlias ratione aut et et porro eum. Quasi omnis commodi ullam neque. Velit velit qui et voluptatibus delectus omnis. Rem porro reprehenderit consequuntur est voluptatem.\n\nAut libero nam quisquam necessitatibus. Occaecati vel laborum a culpa velit sit. Sapiente et quisquam facere corrupti et culpa. Fugiat aut molestias repellendus possimus sapiente omnis molestiae.\n\nEum quod possimus dolorum ut voluptate laboriosam cupiditate. Explicabo quia totam excepturi sit ipsum. Perspiciatis deleniti et vero quasi voluptate voluptatibus perferendis. Eum ad assumenda dolorem exercitationem.\n\nAd dolorem a blanditiis ullam. Quo sequi cum libero a velit consequatur.','Perspiciatis eum aliquid quibusdam non iusto. Sit aliquam atque numquam sapiente est. Laboriosam voluptas voluptatem dolor voluptas corrupti delectus. Quia et consectetur ut nihil quisquam optio repudiandae. Nulla odio sed sunt veniam esse porro.\n\nRerum quod eos nulla tenetur odio. Est saepe nobis sed rerum consequatur qui. Laudantium et reprehenderit reiciendis ipsa est rem. Ipsam autem totam provident. Ut asperiores qui vel velit eos et excepturi voluptas.\n\nAlias ratione aut et et porro eum. Quasi omnis commodi ullam neque. Velit velit qui et voluptatibus delectus omnis. Rem porro reprehenderit consequuntur est voluptatem.\n\nAut libero nam quisquam necessitatibus. Occaecati vel laborum a culpa velit sit. Sapiente et quisquam facere corrupti et culpa. Fugiat aut molestias repellendus possimus sapiente omnis molestiae.\n\nEum quod possimus dolorum ut voluptate laboriosam cupiditate. Explicabo quia totam excepturi sit ipsum. Perspiciatis deleniti et vero quasi voluptate voluptatibus perferendis. Eum ad assumenda dolorem exercitationem.\n\nAd dolorem a blanditiis ullam. Quo sequi cum libero a velit consequatur.','Ullam non delectus consequatur quis odit corrupti.','Atque a possimus et pariatur et natus reprehenderit.',1,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-08-07 14:38:35'),(5,'non-voluptatem-eaque-et-ut-modi-placeat','Non voluptatem eaque et ut modi placeat.','Tempora porro placeat aperiam facilis non modi necessitatibus id.','Dolor laboriosam odit et natus quo sed error in. Enim cumque repudiandae laborum voluptas voluptas quas id. Et sit voluptatem odit excepturi quia. Fugit necessitatibus velit rerum quas sed voluptates. Blanditiis et ea qui temporibus quia aut et.\n\nSequi non sit fugit odio repellendus. Qui distinctio ab qui nihil. Possimus distinctio et ut reprehenderit consequatur id.\n\nCulpa molestias eaque beatae eius. Aut asperiores eum sint fugit officia aut. Voluptates veniam consequuntur et expedita ea laborum eum.\n\nFuga aut nulla rerum aut nam. Et atque est aliquam. Omnis omnis aut cupiditate veritatis.\n\nQuis in et et. Ab enim at qui dolores placeat consequatur. Quisquam consequatur ipsa libero expedita et ut sed.\n\nDelectus vero adipisci facilis culpa modi ex iure. Perferendis eligendi rerum nemo rerum hic ut. Voluptas aperiam quibusdam vero vero et. Reprehenderit consequatur eos omnis quia culpa eos dolores.','Dolor laboriosam odit et natus quo sed error in. Enim cumque repudiandae laborum voluptas voluptas quas id. Et sit voluptatem odit excepturi quia. Fugit necessitatibus velit rerum quas sed voluptates. Blanditiis et ea qui temporibus quia aut et.\n\nSequi non sit fugit odio repellendus. Qui distinctio ab qui nihil. Possimus distinctio et ut reprehenderit consequatur id.\n\nCulpa molestias eaque beatae eius. Aut asperiores eum sint fugit officia aut. Voluptates veniam consequuntur et expedita ea laborum eum.\n\nFuga aut nulla rerum aut nam. Et atque est aliquam. Omnis omnis aut cupiditate veritatis.\n\nQuis in et et. Ab enim at qui dolores placeat consequatur. Quisquam consequatur ipsa libero expedita et ut sed.\n\nDelectus vero adipisci facilis culpa modi ex iure. Perferendis eligendi rerum nemo rerum hic ut. Voluptas aperiam quibusdam vero vero et. Reprehenderit consequatur eos omnis quia culpa eos dolores.','Cupiditate cumque culpa explicabo ut amet.','A et veniam accusantium.',9,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-07-17 08:31:17'),(6,'pariatur-alias-ut-aliquid-ipsum-ullam-est-voluptas','Pariatur alias ut aliquid ipsum ullam est voluptas.','Est dolores pariatur ratione quas ut facilis laboriosam.','Maxime est numquam non laborum incidunt. Error aut quia omnis occaecati et sit porro autem.\n\nAsperiores modi qui est laborum eveniet et dolorum. Beatae odit non necessitatibus et quaerat modi eius. Quia aut iste necessitatibus id sequi sed ad. Aut quisquam eveniet dolorem laboriosam.\n\nDolorum et incidunt adipisci qui recusandae quia. Nobis commodi ipsa rerum cum doloribus. Error explicabo magnam non assumenda est quia.\n\nVelit odio sunt voluptatem perspiciatis officia vitae. Et rem ut magni laudantium deserunt. Temporibus voluptates libero eveniet sit dignissimos. Exercitationem quaerat sunt necessitatibus tempora nihil numquam nobis. Et consequatur aut voluptatem tempora dolorem id.\n\nId modi ea optio culpa commodi possimus. Nisi fugiat ut consequatur pariatur at porro ducimus est. Aspernatur repellat nesciunt nobis. Voluptate voluptas nam sit totam asperiores. Voluptatibus eum voluptatem dolorem explicabo sit.\n\nIste non sit numquam dicta enim. Vel nisi quis quod dolores est. Consequatur quod voluptatem nihil quo provident. Praesentium magnam quia soluta incidunt.','Maxime est numquam non laborum incidunt. Error aut quia omnis occaecati et sit porro autem.\n\nAsperiores modi qui est laborum eveniet et dolorum. Beatae odit non necessitatibus et quaerat modi eius. Quia aut iste necessitatibus id sequi sed ad. Aut quisquam eveniet dolorem laboriosam.\n\nDolorum et incidunt adipisci qui recusandae quia. Nobis commodi ipsa rerum cum doloribus. Error explicabo magnam non assumenda est quia.\n\nVelit odio sunt voluptatem perspiciatis officia vitae. Et rem ut magni laudantium deserunt. Temporibus voluptates libero eveniet sit dignissimos. Exercitationem quaerat sunt necessitatibus tempora nihil numquam nobis. Et consequatur aut voluptatem tempora dolorem id.\n\nId modi ea optio culpa commodi possimus. Nisi fugiat ut consequatur pariatur at porro ducimus est. Aspernatur repellat nesciunt nobis. Voluptate voluptas nam sit totam asperiores. Voluptatibus eum voluptatem dolorem explicabo sit.\n\nIste non sit numquam dicta enim. Vel nisi quis quod dolores est. Consequatur quod voluptatem nihil quo provident. Praesentium magnam quia soluta incidunt.','Enim et nobis non in facilis labore.','Recusandae est pariatur eius fugit libero reprehenderit ut commodi.',5,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-07-20 01:37:23'),(7,'amet-nobis-odio-magni-voluptatibus-rerum-libero-ab-tempora','Amet nobis odio magni voluptatibus rerum libero ab tempora.','Ullam voluptatum consequatur necessitatibus.','Fugiat ab ad est perferendis soluta incidunt ut deleniti. Similique aut iusto quam qui quisquam nobis. Cumque et soluta sit esse.\n\nQuia unde quisquam aut cum qui. Dolores porro voluptas non temporibus ut architecto suscipit. Maxime eveniet odio consequuntur aspernatur velit facilis. Sit voluptatem hic quo illo qui temporibus.\n\nNemo nesciunt expedita nisi culpa facilis. Labore eos optio sit quia voluptatem iste. Earum sed laborum molestiae ipsum sint amet libero vel. Quas similique eligendi quia ratione aut at facere.','Fugiat ab ad est perferendis soluta incidunt ut deleniti. Similique aut iusto quam qui quisquam nobis. Cumque et soluta sit esse.\n\nQuia unde quisquam aut cum qui. Dolores porro voluptas non temporibus ut architecto suscipit. Maxime eveniet odio consequuntur aspernatur velit facilis. Sit voluptatem hic quo illo qui temporibus.\n\nNemo nesciunt expedita nisi culpa facilis. Labore eos optio sit quia voluptatem iste. Earum sed laborum molestiae ipsum sint amet libero vel. Quas similique eligendi quia ratione aut at facere.','Itaque veritatis quia qui.','Qui sint qui autem accusamus dolor placeat.',9,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-07-27 18:47:31'),(8,'beatae-tenetur-est-sit','Beatae tenetur est sit.','Numquam autem tenetur aut et.','Non hic non vel. Aut a impedit reprehenderit non harum modi. Rem a id nihil autem id.\n\nEst molestiae repudiandae rerum corporis. Debitis optio soluta ea nihil ab velit. Neque assumenda blanditiis deserunt amet maiores mollitia quam. Rerum voluptatum totam assumenda laborum minima deserunt numquam dolore.\n\nDoloremque voluptas similique corporis eaque odit. Et fugiat officia et tempore assumenda. Aliquid quos maiores ex velit excepturi. Blanditiis quaerat aut quae aut.','Non hic non vel. Aut a impedit reprehenderit non harum modi. Rem a id nihil autem id.\n\nEst molestiae repudiandae rerum corporis. Debitis optio soluta ea nihil ab velit. Neque assumenda blanditiis deserunt amet maiores mollitia quam. Rerum voluptatum totam assumenda laborum minima deserunt numquam dolore.\n\nDoloremque voluptas similique corporis eaque odit. Et fugiat officia et tempore assumenda. Aliquid quos maiores ex velit excepturi. Blanditiis quaerat aut quae aut.','Occaecati voluptates et.','Dolor enim architecto mollitia.',1,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-08-11 10:26:31'),(9,'rerum-incidunt-error-perferendis-qui-velit-laudantium-nesciunt','Rerum incidunt error perferendis qui velit laudantium nesciunt.','Sed quae deserunt consectetur repellat.','Quia voluptatibus quibusdam et nam non architecto non. Distinctio quod ratione ipsum numquam sed. Fuga iure omnis pariatur dolorem qui commodi.\n\nNisi consequatur blanditiis commodi minus. Libero dicta quis et illo eum labore. Atque ad ut corporis odit quibusdam est.\n\nEa excepturi et et numquam eos aut minus. Aut eius qui maxime quibusdam ratione perspiciatis quasi. Magni suscipit natus harum nemo saepe. Neque veritatis in quisquam tenetur officiis.\n\nAut consequatur cum quam ut quas libero et. Fugit velit dolores maxime. Eaque fugit rerum mollitia ea beatae. Quis est cupiditate voluptas alias repellendus voluptas enim.\n\nRepellendus consequatur eum rerum et qui ipsa officia quis. Ut facere nesciunt sapiente placeat rerum perspiciatis quia. Dolor cupiditate hic harum eaque nisi quia. Consequatur nisi et autem facilis aut dolores deserunt.\n\nDistinctio aut aut fugiat ut optio id ullam. Tempore sapiente quis quia et. Ratione eum voluptatem commodi ut repellendus. Aspernatur tempora rerum autem neque ut labore deserunt.','Quia voluptatibus quibusdam et nam non architecto non. Distinctio quod ratione ipsum numquam sed. Fuga iure omnis pariatur dolorem qui commodi.\n\nNisi consequatur blanditiis commodi minus. Libero dicta quis et illo eum labore. Atque ad ut corporis odit quibusdam est.\n\nEa excepturi et et numquam eos aut minus. Aut eius qui maxime quibusdam ratione perspiciatis quasi. Magni suscipit natus harum nemo saepe. Neque veritatis in quisquam tenetur officiis.\n\nAut consequatur cum quam ut quas libero et. Fugit velit dolores maxime. Eaque fugit rerum mollitia ea beatae. Quis est cupiditate voluptas alias repellendus voluptas enim.\n\nRepellendus consequatur eum rerum et qui ipsa officia quis. Ut facere nesciunt sapiente placeat rerum perspiciatis quia. Dolor cupiditate hic harum eaque nisi quia. Consequatur nisi et autem facilis aut dolores deserunt.\n\nDistinctio aut aut fugiat ut optio id ullam. Tempore sapiente quis quia et. Ratione eum voluptatem commodi ut repellendus. Aspernatur tempora rerum autem neque ut labore deserunt.','Sunt laboriosam dolores ex ut aut tenetur.','Id optio eaque est inventore dolores culpa voluptate debitis odit temporibus incidunt.',3,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-08-15 22:31:11'),(10,'suscipit-consequuntur-animi-assumenda-facilis-omnis-sapiente-voluptates-quia-ut-asperiores','Suscipit consequuntur animi assumenda facilis omnis sapiente voluptates quia ut asperiores.','Laudantium amet illum nihil architecto qui quaerat veritatis minima.','Aspernatur quos iusto aut quasi. Consectetur eligendi in assumenda ullam optio id voluptatem.\n\nImpedit sed consequatur assumenda sapiente dolor. Est accusantium repudiandae officiis dolore pariatur voluptas.\n\nCorrupti aut officiis quidem quia culpa. Non iure aut inventore. Reprehenderit quia quae voluptas minus vero vel iusto. Illum dolor repellendus autem omnis dolores deserunt qui.\n\nRepellat maiores aut praesentium sed non dolor quo architecto. Dolorem est expedita et et. Laborum error voluptates dolor. Occaecati nesciunt architecto dolorum in et voluptatibus illo nulla.','Aspernatur quos iusto aut quasi. Consectetur eligendi in assumenda ullam optio id voluptatem.\n\nImpedit sed consequatur assumenda sapiente dolor. Est accusantium repudiandae officiis dolore pariatur voluptas.\n\nCorrupti aut officiis quidem quia culpa. Non iure aut inventore. Reprehenderit quia quae voluptas minus vero vel iusto. Illum dolor repellendus autem omnis dolores deserunt qui.\n\nRepellat maiores aut praesentium sed non dolor quo architecto. Dolorem est expedita et et. Laborum error voluptates dolor. Occaecati nesciunt architecto dolorum in et voluptatibus illo nulla.','Nulla officia voluptas aspernatur laudantium quia.','Delectus consequatur corrupti repellendus veniam fugit omnis.',9,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-07-16 17:57:09'),(11,'omnis-explicabo-vitae-natus-molestias-aut-maxime-voluptas','Omnis explicabo vitae natus molestias aut maxime voluptas.','Est autem fuga possimus dolorum.','Autem error dolore sit quo ut. Magnam labore qui in molestiae iste. Dicta ducimus velit ea accusantium et eum amet.\n\nNemo perferendis repellat eius laboriosam. Enim quia aliquam facilis. Eos quaerat cupiditate neque a.\n\nAut asperiores maxime quod voluptatem officia iste iste. Omnis nulla nam possimus quam. Fuga aliquid error est corporis repellendus itaque eum.','Autem error dolore sit quo ut. Magnam labore qui in molestiae iste. Dicta ducimus velit ea accusantium et eum amet.\n\nNemo perferendis repellat eius laboriosam. Enim quia aliquam facilis. Eos quaerat cupiditate neque a.\n\nAut asperiores maxime quod voluptatem officia iste iste. Omnis nulla nam possimus quam. Fuga aliquid error est corporis repellendus itaque eum.','Nobis molestiae non nulla officiis beatae.','Temporibus eum eius atque excepturi suscipit veniam laborum.',5,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-08-05 23:59:37'),(12,'dignissimos-architecto-voluptas-autem-sed-et','Dignissimos architecto voluptas autem sed et.','Velit est explicabo nisi corporis voluptatem.','Ut assumenda aliquam sunt incidunt. Recusandae autem sunt ut vero sapiente rerum. Neque assumenda maiores unde magni.\n\nEt quisquam in illum ipsa vitae. Porro est quis earum unde sint consequatur. Quas impedit tenetur aliquid ut cumque.\n\nEst animi dolores consequuntur consequatur nesciunt nostrum necessitatibus quisquam. Dolores est non cumque ad ut. Voluptatibus voluptatum quae voluptatem et. Nam doloremque voluptas nulla.','Ut assumenda aliquam sunt incidunt. Recusandae autem sunt ut vero sapiente rerum. Neque assumenda maiores unde magni.\n\nEt quisquam in illum ipsa vitae. Porro est quis earum unde sint consequatur. Quas impedit tenetur aliquid ut cumque.\n\nEst animi dolores consequuntur consequatur nesciunt nostrum necessitatibus quisquam. Dolores est non cumque ad ut. Voluptatibus voluptatum quae voluptatem et. Nam doloremque voluptas nulla.','Sunt sint nihil quis iste rerum consequatur.','Quam odio dolor quia qui nam laudantium laudantium aut sit possimus soluta.',4,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-08-01 23:28:55'),(13,'et-odio-consectetur-vero-quibusdam-eos-distinctio','Et odio consectetur vero quibusdam eos distinctio.','Distinctio reprehenderit enim consequuntur quia enim facere.','Consequatur dolor explicabo consequuntur esse omnis. Quisquam mollitia cupiditate ex et est. Ut labore libero fugit velit. Et et eos voluptas recusandae inventore quae.\n\nDeserunt magni ut asperiores voluptatem illum rerum. Necessitatibus commodi hic ratione voluptates nostrum et ut dicta.\n\nSunt impedit aut quos quidem dolore quia. Odit enim omnis aut voluptas accusamus totam. Itaque temporibus autem numquam explicabo inventore magni. Et a qui itaque excepturi qui rerum.\n\nEx quos distinctio aut eos provident. Possimus recusandae est sit quia aut est commodi suscipit. Iure sed qui quia odio qui.\n\nNulla enim est et earum maiores. Eveniet ullam nemo est dicta iusto repudiandae. Eveniet et modi sed.\n\nIusto laborum autem accusantium minus consectetur doloremque quia. Quis quo blanditiis animi sunt aliquid nihil laboriosam. Natus sit autem quo beatae quasi aliquam.','Consequatur dolor explicabo consequuntur esse omnis. Quisquam mollitia cupiditate ex et est. Ut labore libero fugit velit. Et et eos voluptas recusandae inventore quae.\n\nDeserunt magni ut asperiores voluptatem illum rerum. Necessitatibus commodi hic ratione voluptates nostrum et ut dicta.\n\nSunt impedit aut quos quidem dolore quia. Odit enim omnis aut voluptas accusamus totam. Itaque temporibus autem numquam explicabo inventore magni. Et a qui itaque excepturi qui rerum.\n\nEx quos distinctio aut eos provident. Possimus recusandae est sit quia aut est commodi suscipit. Iure sed qui quia odio qui.\n\nNulla enim est et earum maiores. Eveniet ullam nemo est dicta iusto repudiandae. Eveniet et modi sed.\n\nIusto laborum autem accusantium minus consectetur doloremque quia. Quis quo blanditiis animi sunt aliquid nihil laboriosam. Natus sit autem quo beatae quasi aliquam.','Est placeat assumenda illum voluptas.','Necessitatibus praesentium eos est accusantium asperiores.',6,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-07-31 02:12:04'),(14,'illum-voluptatibus-quam','Illum voluptatibus quam.','Autem itaque accusamus quasi molestiae ex.','Aut et rerum quibusdam praesentium cupiditate vitae beatae quia. Soluta modi omnis aut qui ea in eveniet. Beatae aut ipsa eligendi maxime aspernatur. Deserunt reiciendis nam impedit ut ex assumenda eos voluptates.\n\nRecusandae omnis et ut aut reiciendis et dolore. Quas ut ex qui vero suscipit ut. Enim veniam perferendis minima.\n\nEst perferendis sit repellendus maiores qui. Quisquam dicta perspiciatis ut quibusdam totam illum. Corporis enim rerum architecto officiis. Deserunt assumenda sint enim explicabo voluptatibus animi porro. Ratione culpa dolorum laudantium eligendi soluta nihil quia.\n\nDolor aut ut ipsam molestiae qui praesentium minus. Repellendus est enim voluptas nesciunt placeat odio commodi. Deleniti quidem at optio eos. Omnis quia aut rerum ea quam consequatur ad.\n\nRepudiandae delectus vel optio qui. Perferendis nostrum sint officiis consequatur. Quia maiores voluptas pariatur atque sapiente. Pariatur occaecati corporis unde aut dolorem non aspernatur.','Aut et rerum quibusdam praesentium cupiditate vitae beatae quia. Soluta modi omnis aut qui ea in eveniet. Beatae aut ipsa eligendi maxime aspernatur. Deserunt reiciendis nam impedit ut ex assumenda eos voluptates.\n\nRecusandae omnis et ut aut reiciendis et dolore. Quas ut ex qui vero suscipit ut. Enim veniam perferendis minima.\n\nEst perferendis sit repellendus maiores qui. Quisquam dicta perspiciatis ut quibusdam totam illum. Corporis enim rerum architecto officiis. Deserunt assumenda sint enim explicabo voluptatibus animi porro. Ratione culpa dolorum laudantium eligendi soluta nihil quia.\n\nDolor aut ut ipsam molestiae qui praesentium minus. Repellendus est enim voluptas nesciunt placeat odio commodi. Deleniti quidem at optio eos. Omnis quia aut rerum ea quam consequatur ad.\n\nRepudiandae delectus vel optio qui. Perferendis nostrum sint officiis consequatur. Quia maiores voluptas pariatur atque sapiente. Pariatur occaecati corporis unde aut dolorem non aspernatur.','Dolores suscipit tempore provident non.','A possimus iure recusandae.',4,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-07-28 06:34:08'),(15,'eveniet-accusantium-quia-aut-sit-sit-aut','Eveniet accusantium quia aut sit sit aut.','Tempore laudantium voluptas dolores optio modi quo libero omnis quam nihil aut debitis.','Modi voluptate alias dolore mollitia et exercitationem aut. Ut suscipit et nihil consequatur pariatur. Non cumque in quod ex occaecati. Qui odit impedit esse dicta.\n\nSint atque mollitia repellat sequi distinctio ullam. Impedit est illum qui iste et eveniet. Nemo qui tempore non reprehenderit omnis sit et. Totam rerum tenetur aut atque odit.\n\nQui blanditiis voluptas iusto neque. Ut quisquam velit aperiam nisi occaecati odio dignissimos provident. Magni est et est incidunt.\n\nReprehenderit minima incidunt eum provident. Rerum voluptatibus voluptatum veniam id et minima eos voluptates. Molestias assumenda magni odio velit sit odit sequi. Accusantium nostrum aut iste delectus dolor quasi.\n\nVoluptas est praesentium quibusdam beatae. Qui magni eius voluptas sequi est amet doloremque. Perspiciatis omnis natus aperiam quo maiores deserunt. Labore eum incidunt quidem praesentium repellendus ea vel.\n\nCulpa rem voluptate voluptatem ipsa doloribus ipsam quo. Ducimus ab odio voluptatem enim rerum aliquam aut error. Libero quas voluptas exercitationem. Dolorum voluptas sed ratione molestiae ut porro tempore perspiciatis.','Modi voluptate alias dolore mollitia et exercitationem aut. Ut suscipit et nihil consequatur pariatur. Non cumque in quod ex occaecati. Qui odit impedit esse dicta.\n\nSint atque mollitia repellat sequi distinctio ullam. Impedit est illum qui iste et eveniet. Nemo qui tempore non reprehenderit omnis sit et. Totam rerum tenetur aut atque odit.\n\nQui blanditiis voluptas iusto neque. Ut quisquam velit aperiam nisi occaecati odio dignissimos provident. Magni est et est incidunt.\n\nReprehenderit minima incidunt eum provident. Rerum voluptatibus voluptatum veniam id et minima eos voluptates. Molestias assumenda magni odio velit sit odit sequi. Accusantium nostrum aut iste delectus dolor quasi.\n\nVoluptas est praesentium quibusdam beatae. Qui magni eius voluptas sequi est amet doloremque. Perspiciatis omnis natus aperiam quo maiores deserunt. Labore eum incidunt quidem praesentium repellendus ea vel.\n\nCulpa rem voluptate voluptatem ipsa doloribus ipsam quo. Ducimus ab odio voluptatem enim rerum aliquam aut error. Libero quas voluptas exercitationem. Dolorum voluptas sed ratione molestiae ut porro tempore perspiciatis.','Quas et laboriosam labore pariatur.','Perferendis similique molestiae qui asperiores distinctio officia vel mollitia non.',5,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-08-05 18:28:00'),(16,'incidunt-quisquam-excepturi-quia-vel-harum','Incidunt quisquam excepturi quia vel harum.','Itaque aperiam minus beatae ut ducimus sed.','Repellat deserunt voluptatem molestiae totam provident eligendi molestiae adipisci. Vel qui ipsa perspiciatis delectus sit iure minus voluptatem. Eius fuga error animi recusandae incidunt quis. Et voluptatem iusto iusto porro.\n\nUt iure similique deserunt est fugit. Quis voluptatum aut saepe quaerat aut. Et sed sed nemo fugit maiores. Ducimus voluptatem impedit alias quasi.\n\nDolorem est dolor accusamus error maxime animi. Magnam optio quo laborum itaque aperiam. Non eum quo corrupti quo.\n\nNulla exercitationem laboriosam aliquid nam eligendi. Reprehenderit voluptatem optio totam porro accusantium iusto consequatur ut. Iste facere vitae nostrum molestiae ut doloribus eos. Natus nam sit ad laboriosam ut nam.\n\nEos sit molestiae quod est atque occaecati quia nam. Voluptas voluptas repellat placeat voluptatum. Molestias nostrum officia rem accusamus. Quis dolorem dolor voluptatibus qui aut corporis. Eaque ipsa ut ut ipsa omnis.','Repellat deserunt voluptatem molestiae totam provident eligendi molestiae adipisci. Vel qui ipsa perspiciatis delectus sit iure minus voluptatem. Eius fuga error animi recusandae incidunt quis. Et voluptatem iusto iusto porro.\n\nUt iure similique deserunt est fugit. Quis voluptatum aut saepe quaerat aut. Et sed sed nemo fugit maiores. Ducimus voluptatem impedit alias quasi.\n\nDolorem est dolor accusamus error maxime animi. Magnam optio quo laborum itaque aperiam. Non eum quo corrupti quo.\n\nNulla exercitationem laboriosam aliquid nam eligendi. Reprehenderit voluptatem optio totam porro accusantium iusto consequatur ut. Iste facere vitae nostrum molestiae ut doloribus eos. Natus nam sit ad laboriosam ut nam.\n\nEos sit molestiae quod est atque occaecati quia nam. Voluptas voluptas repellat placeat voluptatum. Molestias nostrum officia rem accusamus. Quis dolorem dolor voluptatibus qui aut corporis. Eaque ipsa ut ut ipsa omnis.','Vitae totam vero enim velit dolorem rem dolor.','Reprehenderit autem ut enim ea.',3,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-08-10 21:25:42'),(17,'cumque-nisi-id-porro-blanditiis-sed-rem-deleniti-eius-beatae','Cumque nisi id porro blanditiis sed rem deleniti eius beatae.','Totam iusto velit rerum.','Possimus magnam temporibus ea aut enim ad. Et libero eius aut vero unde sed. Voluptas expedita ea voluptatem repellat quod.\n\nQuis molestiae non error. Accusamus quibusdam cum sit et voluptatem temporibus ratione. Eos atque omnis facere repellendus ea. Optio molestiae natus architecto eligendi est.\n\nQuo sequi ea iure amet. Voluptas perferendis eligendi deserunt similique et tenetur. Labore minus eos rerum dolorem id officia eum.\n\nMolestias optio dolore ut ad sequi cumque similique. Quaerat in excepturi asperiores impedit eaque et. Soluta et unde quia dolorum.','Possimus magnam temporibus ea aut enim ad. Et libero eius aut vero unde sed. Voluptas expedita ea voluptatem repellat quod.\n\nQuis molestiae non error. Accusamus quibusdam cum sit et voluptatem temporibus ratione. Eos atque omnis facere repellendus ea. Optio molestiae natus architecto eligendi est.\n\nQuo sequi ea iure amet. Voluptas perferendis eligendi deserunt similique et tenetur. Labore minus eos rerum dolorem id officia eum.\n\nMolestias optio dolore ut ad sequi cumque similique. Quaerat in excepturi asperiores impedit eaque et. Soluta et unde quia dolorum.','Ex aut et nesciunt voluptates sunt mollitia recusandae.','Non soluta dicta consequatur aliquid et sequi est omnis distinctio sapiente dignissimos.',9,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-08-15 19:53:42'),(18,'dicta-in-dolorem-aut-voluptatem-enim','Dicta in dolorem aut voluptatem enim.','Sapiente molestiae ut id est tempore ad et deleniti minima et.','Necessitatibus totam id optio. Voluptatem in accusamus sapiente qui perferendis sequi voluptates laboriosam. Earum laudantium ipsa reprehenderit tempore dolor id voluptatem.\n\nIusto necessitatibus doloremque porro voluptatum facere. Amet omnis eum nisi consequatur recusandae at recusandae. Eos maxime consectetur cupiditate iusto adipisci accusamus. Rem officiis nulla dolorem ullam modi.\n\nOfficia nihil sed deserunt qui doloribus quia. Maxime quisquam aut veniam ex. Omnis ipsum odit perspiciatis doloremque hic qui et. Corporis dolor modi error dolor unde.','Necessitatibus totam id optio. Voluptatem in accusamus sapiente qui perferendis sequi voluptates laboriosam. Earum laudantium ipsa reprehenderit tempore dolor id voluptatem.\n\nIusto necessitatibus doloremque porro voluptatum facere. Amet omnis eum nisi consequatur recusandae at recusandae. Eos maxime consectetur cupiditate iusto adipisci accusamus. Rem officiis nulla dolorem ullam modi.\n\nOfficia nihil sed deserunt qui doloribus quia. Maxime quisquam aut veniam ex. Omnis ipsum odit perspiciatis doloremque hic qui et. Corporis dolor modi error dolor unde.','Placeat ad voluptas unde error ipsum alias blanditiis.','Dolores quia cumque est et in nihil.',3,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-08-02 02:21:25'),(19,'ex-perferendis-dicta-amet-consequatur-perspiciatis-dolores-ad-est-animi-quo-possimus','Ex perferendis dicta amet consequatur perspiciatis dolores ad est animi quo possimus.','Natus dolore quod consequatur qui.','Consequuntur et ea est veniam numquam expedita. Voluptatem rerum ut illo odio perferendis voluptatibus. Dolores ut quae temporibus quas. Ut sed iure asperiores et enim nulla.\n\nAt molestiae autem dicta culpa animi. Explicabo consectetur porro cum sint quasi sunt voluptatem molestias. Voluptatibus et ipsa quod inventore.\n\nIn asperiores eaque tenetur voluptatem ut. Repellendus alias aliquam quia consequatur. Consequatur qui et consequatur.','Consequuntur et ea est veniam numquam expedita. Voluptatem rerum ut illo odio perferendis voluptatibus. Dolores ut quae temporibus quas. Ut sed iure asperiores et enim nulla.\n\nAt molestiae autem dicta culpa animi. Explicabo consectetur porro cum sint quasi sunt voluptatem molestias. Voluptatibus et ipsa quod inventore.\n\nIn asperiores eaque tenetur voluptatem ut. Repellendus alias aliquam quia consequatur. Consequatur qui et consequatur.','Deleniti numquam nobis minus aut reprehenderit officiis aliquid qui assumenda vero voluptatem.','Praesentium et et id.',7,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-07-31 05:36:27'),(20,'aut-commodi-laborum-eos-numquam','Aut commodi laborum eos numquam.','Consequuntur doloremque dicta reprehenderit quo nobis eius beatae.','Necessitatibus quis reprehenderit sunt consequatur ratione. Inventore sed ipsum eveniet saepe ut assumenda nihil. Et assumenda fugit sint nihil qui neque est. Qui ut similique repellat neque quo et.\n\nQui at sunt non enim doloremque. Fugiat asperiores eum aspernatur fuga fugiat ea. Similique molestiae excepturi sed. Voluptate atque rem mollitia nihil.\n\nNihil tempora doloribus provident eaque magni dolore consectetur. Eius sit repudiandae inventore quidem. Voluptatum sed expedita laboriosam fugiat qui aliquam odit esse. Magni animi est voluptatibus unde beatae sint.','Necessitatibus quis reprehenderit sunt consequatur ratione. Inventore sed ipsum eveniet saepe ut assumenda nihil. Et assumenda fugit sint nihil qui neque est. Qui ut similique repellat neque quo et.\n\nQui at sunt non enim doloremque. Fugiat asperiores eum aspernatur fuga fugiat ea. Similique molestiae excepturi sed. Voluptate atque rem mollitia nihil.\n\nNihil tempora doloribus provident eaque magni dolore consectetur. Eius sit repudiandae inventore quidem. Voluptatum sed expedita laboriosam fugiat qui aliquam odit esse. Magni animi est voluptatibus unde beatae sint.','Illum et vero voluptas non corrupti repellat sint autem.','Odit qui tempora facere dolores id magni quasi ea corrupti est.',2,'2017-08-16 09:35:18','2017-08-16 09:35:18','2017-07-24 00:16:31');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (1,1,'amet.jpg','2017-08-16 09:35:18','2017-08-16 09:35:18'),(2,1,'risus.jpg','2017-08-16 09:35:18','2017-08-16 09:35:18'),(3,2,'ligula.jpg','2017-08-16 09:35:18','2017-08-16 09:35:18');
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `is_special` tinyint(1) NOT NULL,
  `day` int(11) NOT NULL,
  `available_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Lorem ipsum dolor sit amet','Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',12000,1,1,'2017-10-26','2017-08-16 09:35:18','2017-08-16 09:35:18'),(2,'Consectetur adipiscing elit','Nullam lacinia sem neque, dignissim euismod odio facilisis non',12000,1,1,'2017-10-26','2017-08-16 09:35:18','2017-08-16 09:35:18'),(3,'Fusce nec risus non ligula auctor','Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',12000,1,1,'2017-10-26','2017-08-16 09:35:18','2017-08-16 09:35:18');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotions`
--

DROP TABLE IF EXISTS `promotions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotions`
--

LOCK TABLES `promotions` WRITE;
/*!40000 ALTER TABLE `promotions` DISABLE KEYS */;
INSERT INTO `promotions` VALUES (1,'Promotions 1','2017-08-16 09:35:18','2017-08-16 09:35:18'),(2,'Promotions 2','2017-08-16 09:35:18','2017-08-16 09:35:18'),(3,'Promotions 3','2017-08-16 09:35:18','2017-08-16 09:35:18');
/*!40000 ALTER TABLE `promotions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,1),(1,2),(1,3),(2,3);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'super-user','Super User','Fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis','2017-08-16 09:35:17','2017-08-16 09:35:17'),(2,'user-level-1','User Level 1','Nullam lacinia sem neque, dignissim euismod odio facilisis non','2017-08-16 09:35:17','2017-08-16 09:35:17'),(3,'user-level-2','User Level 2','Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna','2017-08-16 09:35:17','2017-08-16 09:35:17');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('ury7373899rruejejfifmrj',1,'192.168.1.12','web-kit','ury7373899rruejejfifmrj','2017-03-12 07:20:11','2017-08-16 09:35:18','2017-08-16 09:35:18'),('ury7373899rruewe334ifmrj',1,'192.168.1.12','web-kit','ury7373899rruejejfifmrj','2017-03-12 07:20:11','2017-08-16 09:35:18','2017-08-16 09:35:18');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shipping_costs`
--

DROP TABLE IF EXISTS `shipping_costs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shipping_costs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fare` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shipping_costs`
--

LOCK TABLES `shipping_costs` WRITE;
/*!40000 ALTER TABLE `shipping_costs` DISABLE KEYS */;
INSERT INTO `shipping_costs` VALUES (1,'Cost 1',1000,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(2,'Cost 2',2000,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(3,'Cost 3',4000,'2017-08-16 09:35:18','2017-08-16 09:35:18');
/*!40000 ALTER TABLE `shipping_costs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,'Sliders 1','2017-08-16 09:35:18','2017-08-16 09:35:18'),(2,'Sliders 2','2017-08-16 09:35:18','2017-08-16 09:35:18'),(3,'Sliders 3','2017-08-16 09:35:18','2017-08-16 09:35:18');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reverse_direction` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_tag_unique` (`tag`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Tag 1','Tag 1 Title','Tag 1 subtitle','Tag 1 meta description',0,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(2,'Tag 2','Tag 2 Title','Tag 2 subtitle','Tag 2 meta description',0,'2017-08-16 09:35:18','2017-08-16 09:35:18'),(3,'Tag 3','Tag 3 Title','Tag 3 subtitle','Tag 3 meta description',0,'2017-08-16 09:35:18','2017-08-16 09:35:18');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@imajikudev.com','$2y$10$FKSFh3vlgWTCoTlbTtEU6.htE51VE2HnQNanJb27LQaY1wmlb3GbC','yYSKkMCoU4','2017-08-16 09:35:18','2017-08-16 09:35:18'),(2,'Front','front@imajikudev.com','$2y$10$Vgrs68oF5p/E2Jbg8cr6i.dEfRU2dLbTkplqmzAfMuIe7JN/XLnAi','7DSHABb2ht','2017-08-16 09:35:18','2017-08-16 09:35:18');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-16 23:38:34
