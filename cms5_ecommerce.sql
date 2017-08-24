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
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_hour` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reservation_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about`
--

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` VALUES (1,'THE FIRST WEST SUMATRAN AND JAPANESE FUSION RESTAURANT','West Sumatra\'s dining scene is well-known for its spiciness and the richness of its ingredients. It is served from simple \'kaki lima\' food stalls to some famous franchised restaurants across the country.\n                    West Sumatran food has becoming the Nation\'s favorite. Yet, the country has been lacking in innovative cuisine that is based on these authentic traditional recipes. Until now.\n                    Suntiang Restaurant is the first to combine authentic West Sumatran recipes in a Japanese style. It is reflected in our extensive menus, from Ayam Pop Roll to Otak Tempura Balado.\n                    Suntiang Restaurant brings West Sumatran cuisine to a new level, serving more than 50 different types of fusion menu. Our favorites are; Edamame Balado, Beef Rinds Miso Soup, Rendang Roll, Gulai Ramen, Rendang Tamago Bowl, Sizzling Beef Tongue with Green Chilli and Asam Pade Sauce. For the dessert, we bring an old recipe from our grandmothers, Laman Katan Sarikayo.\n                    Our dedicated chef with years of experience in Japanese restaurants. He combines his skill in Japanese food with hundred years recipes from our grandmothers, creating a feast to your taste buds.','Monday-Sunday: 10:00 - 22:00 WIB','Suntiang Grand Indonesia, 021-2358044\n                    Suntiang Setiabudi One, 021-5257393\n                    Suntiang Catering, 021-5260 777 / 082311999426','For interviews/photos, contact','info@suntiang.com / Mobile: (62)812 9326 0002 (Mr.Dono)','2017-08-24 01:27:15','2017-08-24 01:27:15');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `additional_product_pivots` VALUES (1,1,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,1,2,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(3,1,3,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(4,2,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(5,2,2,'2017-08-24 01:27:14','2017-08-24 01:27:14');
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
  `session_id` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `carts` VALUES (1,'123456','2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,'7891011','2017-08-24 01:27:14','2017-08-24 01:27:14'),(3,'12131415','2017-08-24 01:27:14','2017-08-24 01:27:14'),(4,'16171819','2017-08-24 01:27:14','2017-08-24 01:27:14'),(5,'2021222324','2017-08-24 01:27:14','2017-08-24 01:27:14'),(6,'2526272829','2017-08-24 01:27:14','2017-08-24 01:27:14'),(7,'3031323334','2017-08-24 01:27:14','2017-08-24 01:27:14'),(8,'3536373839','2017-08-24 01:27:14','2017-08-24 01:27:14');
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
INSERT INTO `carts_product_pivots` VALUES (1,1,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,1,2,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(3,1,3,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(4,2,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(5,2,2,'2017-08-24 01:27:14','2017-08-24 01:27:14');
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
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `categories` VALUES (1,'Daily Meal','utama',0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,'Catering','utama',0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(3,'Sayuran','isi',1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(4,'Protein','isi',2,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(5,'Appetizier','jenis',3,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(6,'Soup','jenis',4,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(7,'Salad','jenis',0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(8,'Maincorse','jenis',0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(9,'Condiment','jenis',0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(10,'Dessert','jenis',0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(11,'Sunda','region',0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(12,'Jawa','region',0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(13,'Sumatra','region',0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(14,'Italia','region',0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(15,'Eropa','region',0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(16,'Asia','region',0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(17,'Arab','region',0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(18,'Karbohidrat','isi',0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(19,'Lauk','isi',0,'2017-08-24 01:27:14','2017-08-24 01:27:14');
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
INSERT INTO `category_item_pivots` VALUES (1,1,1,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(2,2,2,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(3,3,3,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(4,4,4,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(5,5,19,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(6,6,18,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(7,7,1,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(8,8,2,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(9,9,3,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(10,10,4,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(11,11,5,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(12,12,6,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(13,13,1,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(14,14,2,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(15,15,3,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(16,16,4,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(17,17,5,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(18,18,6,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(19,19,1,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(20,20,2,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(21,21,3,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(22,22,4,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(23,23,5,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(24,24,6,'2017-08-24 01:27:15','2017-08-24 01:27:15');
/*!40000 ALTER TABLE `category_item_pivots` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_info`
--

DROP TABLE IF EXISTS `contact_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_info`
--

LOCK TABLES `contact_info` WRITE;
/*!40000 ALTER TABLE `contact_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_message`
--

DROP TABLE IF EXISTS `contact_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_blocked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_message`
--

LOCK TABLES `contact_message` WRITE;
/*!40000 ALTER TABLE `contact_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupon`
--

DROP TABLE IF EXISTS `coupon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coupon` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `order_min` int(11) NOT NULL,
  `order_max` int(11) NOT NULL,
  `redeem_max` int(11) NOT NULL,
  `user_max` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `presentage` int(11) NOT NULL,
  `is_free_shipping` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupon`
--

LOCK TABLES `coupon` WRITE;
/*!40000 ALTER TABLE `coupon` DISABLE KEYS */;
/*!40000 ALTER TABLE `coupon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupon_item_pivot`
--

DROP TABLE IF EXISTS `coupon_item_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coupon_item_pivot` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `coupon_id` int(10) unsigned NOT NULL,
  `item_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `coupon_item_pivot_coupon_id_index` (`coupon_id`),
  KEY `coupon_item_pivot_item_id_index` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupon_item_pivot`
--

LOCK TABLES `coupon_item_pivot` WRITE;
/*!40000 ALTER TABLE `coupon_item_pivot` DISABLE KEYS */;
/*!40000 ALTER TABLE `coupon_item_pivot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `couriers`
--

DROP TABLE IF EXISTS `couriers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `couriers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `couriers` VALUES (1,'Jono','jono.jpg','62344434733','jono@gmail.com','2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,'Juki','juki.jpg','62344884733','juki@gmail.com','2017-08-24 01:27:14','2017-08-24 01:27:14'),(3,'Jane','jane.jpg','62344374633','jane@gmail.com','2017-08-24 01:27:14','2017-08-24 01:27:14');
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
  `delivery_receiver` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_receiver_phone` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `deliveries` VALUES (1,1,1,123456,1,1,'dann abarmov','627383930993','jl jali-jali jogjakarta','2017-03-23','2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,2,1,123456,1,2,'dann abarmov','627383930993','jl jali-jali jogjakarta','2017-03-23','2017-08-24 01:27:14','2017-08-24 01:27:14'),(3,3,1,123456,1,1,'dann abarmov','627383930993','jl jali-jali jogjakarta','2017-03-23','2017-08-24 01:27:14','2017-08-24 01:27:14');
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
INSERT INTO `delivery_trackings` VALUES (1,1,1,1,0,1,'Position position','Additional note','2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,1,1,1,1,1,'Position position','Additional note','2017-08-24 01:27:14','2017-08-24 01:27:14'),(3,1,1,1,2,1,'Position position','Additional note','2017-08-24 01:27:14','2017-08-24 01:27:14');
/*!40000 ALTER TABLE `delivery_trackings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `desclaimer`
--

DROP TABLE IF EXISTS `desclaimer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `desclaimer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `desclaimer`
--

LOCK TABLES `desclaimer` WRITE;
/*!40000 ALTER TABLE `desclaimer` DISABLE KEYS */;
INSERT INTO `desclaimer` VALUES (1,'Hyperlink','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',1,1,NULL,NULL),(2,'Schedule Appointment','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',2,1,NULL,NULL),(3,'Select Product','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',3,1,NULL,NULL),(4,'Select your customization option','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',4,1,NULL,NULL),(5,'Add to Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',5,1,NULL,NULL),(6,'My Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',6,1,NULL,NULL);
/*!40000 ALTER TABLE `desclaimer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `question` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (1,1,'How to make a sandwich','I don\'t know neither',1,NULL,NULL),(2,1,'How to make a sandwich','I don\'t know neither',1,NULL,NULL),(3,2,'How to make a sandwich','I don\'t know neither',1,NULL,NULL),(4,2,'How to make a sandwich','I don\'t know neither',1,NULL,NULL),(5,3,'How to make a sandwich','I don\'t know neither',1,NULL,NULL),(6,3,'How to make a sandwich','I don\'t know neither',1,NULL,NULL);
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq_category`
--

DROP TABLE IF EXISTS `faq_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq_category`
--

LOCK TABLES `faq_category` WRITE;
/*!40000 ALTER TABLE `faq_category` DISABLE KEYS */;
INSERT INTO `faq_category` VALUES (1,'General Question','Nope is just general',1,NULL,NULL),(2,'Product','Nope is just product',1,NULL,NULL),(3,'Ordering','Nope is just order',1,NULL,NULL);
/*!40000 ALTER TABLE `faq_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `howtoorder`
--

DROP TABLE IF EXISTS `howtoorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `howtoorder` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `step` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `howtoorder`
--

LOCK TABLES `howtoorder` WRITE;
/*!40000 ALTER TABLE `howtoorder` DISABLE KEYS */;
INSERT INTO `howtoorder` VALUES (1,1,'Sign In/ Sign up','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',1,1,NULL,NULL),(2,1,'Schedule Appointment','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',2,1,NULL,NULL),(3,1,'Select Product','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',3,1,NULL,NULL),(4,1,'Select your customization option','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',4,1,NULL,NULL),(5,1,'Add to Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',5,1,NULL,NULL),(6,1,'My Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',6,1,NULL,NULL);
/*!40000 ALTER TABLE `howtoorder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `howtoorder_category`
--

DROP TABLE IF EXISTS `howtoorder_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `howtoorder_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `howtoorder_category`
--

LOCK TABLES `howtoorder_category` WRITE;
/*!40000 ALTER TABLE `howtoorder_category` DISABLE KEYS */;
INSERT INTO `howtoorder_category` VALUES (1,'Daily meal','Nope is just general',1,NULL,NULL),(2,'Catering','Nope is just product',1,NULL,NULL);
/*!40000 ALTER TABLE `howtoorder_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_images`
--

DROP TABLE IF EXISTS `item_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `item_images` VALUES (1,'food.png',1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,'food.png',2,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(3,'food.png',3,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(4,'food.png',4,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(5,'food.png',5,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(6,'food.png',6,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(7,'food.png',7,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(8,'food.png',8,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(9,'food.png',9,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(10,'food.png',10,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(11,'food.png',11,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(12,'food.png',12,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(13,'food.png',13,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(14,'food.png',14,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(15,'food.png',15,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(16,'food.png',16,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(17,'food.png',17,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(18,'food.png',18,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(19,'food.png',19,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(20,'food.png',20,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(21,'food.png',21,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(22,'food.png',22,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(23,'food.png',23,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(24,'food.png',24,'2017-08-24 01:27:14','2017-08-24 01:27:14');
/*!40000 ALTER TABLE `item_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_pivot`
--

DROP TABLE IF EXISTS `item_pivot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_pivot` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL,
  `child_id` int(10) unsigned NOT NULL,
  `type` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `item_pivot_parent_id_index` (`parent_id`),
  KEY `item_pivot_child_id_index` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_pivot`
--

LOCK TABLES `item_pivot` WRITE;
/*!40000 ALTER TABLE `item_pivot` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_pivot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `convertion` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daily_price` int(11) DEFAULT NULL,
  `condiment_price` int(11) DEFAULT NULL,
  `catering_price_50` int(11) DEFAULT NULL,
  `catering_price_75` int(11) DEFAULT NULL,
  `catering_price_100` int(11) DEFAULT NULL,
  `is_stall` tinyint(1) DEFAULT NULL,
  `is_condiment` tinyint(1) DEFAULT NULL,
  `is_drink` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
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
INSERT INTO `items` VALUES (1,'Lorem ipsum dolor sit ametqw','package',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,1,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,'Consectetur adipiscing eliter','package',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,1,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(3,'Fusce nec risus non ligula auctorqa','package',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,1,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(4,'Lorem ipsum dolor sit amet3','package',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,1,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(5,'Consectetur adipiscing elit3','package',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,1,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(6,'Fusce nec risus non ligula auctor3','package',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,1,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(7,'Lorem ipsum dolor sit amet4','package',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,1,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(8,'Consectetur adipiscing elitera','package',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(9,'Fusce nec risus non ligula auctorwqx','item',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(10,'Lorem ipsum dolor sit ametty','item',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(11,'Consectetur adipiscing elithg','item',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(12,'Fusce nec risus non ligula auctorjh','item',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(13,'Lorem ipsum dolor sit ametdf','item',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(14,'Consectetur adipiscing elitjhj','item',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(15,'Fusce nec risus non ligula auctorjnc','item',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(16,'Lorem ipsum dolor sit ametlp','item',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(17,'Consectetur adipiscing elituy','item',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(18,'Fusce nec risus non ligula auctoryh','item',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(19,'Lorem ipsum dolor sit ametmn','item',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(20,'Consectetur adipiscing elitvg','item',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(21,'Fusce nec risus non ligula auctortr','item',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(22,'Lorem ipsum dolor sit ametdf','item',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(23,'Consectetur adipiscing elithd','item',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(24,'Fusce nec risus non ligula auctorcv','item',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-08-24 01:27:14','2017-08-24 01:27:14');
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
  `queue` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_number` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_card_number` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_card_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
INSERT INTO `members` VALUES (1,2,'Juki Suprime','juki@gmail.com','6283793839','03928290202','Juki Suprime','Bank BNI','02233433','Juki Suprime','1998-02-23',1,'Jala kolang-kolang',122,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,3,'Juki Suprime','juki168@gmail.com','6283793839','03928290202','Juki Suprime','Bank BNI','02233433','Juki Suprime','1998-02-23',1,'Jala kolang-kolang',122,1,'2017-08-24 01:27:14','2017-08-24 01:27:14');
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
  `migration` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2617 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (2573,'2014_10_12_000000_create_users_table',1),(2574,'2017_02_28_024723_create_posts_table',1),(2575,'2017_02_28_043845_create_tags_table',1),(2576,'2017_02_28_043932_create_post_tag_pivot',1),(2577,'2017_02_28_090033_restructure_post_table',1),(2578,'2017_03_03_031532_create_jobs_table',1),(2579,'2017_03_03_065305_create_items_table',1),(2580,'2017_03_08_020505_categories',1),(2581,'2017_03_08_023143_entrust_setup_tables',1),(2582,'2017_03_09_043303_create_member_table',1),(2583,'2017_03_09_063047_create_orders_table',1),(2584,'2017_03_09_071313_create_payments_table',1),(2585,'2017_03_09_073249_create_deliveries_table',1),(2586,'2017_03_09_074453_create_order_details_table',1),(2587,'2017_03_10_021532_create_slider_table',1),(2588,'2017_03_10_041235_create_promotions_table',1),(2589,'2017_03_10_042621_create_cart_product_pivot_table',1),(2590,'2017_03_10_042621_create_carts_table',1),(2591,'2017_03_10_043217_create_delivery_trackings_table',1),(2592,'2017_03_10_043505_create_shipping_cost_table',1),(2593,'2017_03_10_074712_create_additonal_product_pivot_table',1),(2594,'2017_03_13_023247_create_sessions_table',1),(2595,'2017_03_14_022036_create_item_images_table',1),(2596,'2017_03_22_092606_couriers_table',1),(2597,'2017_03_25_045756_create_pages_table',1),(2598,'2017_03_25_045810_create_page_fields_table',1),(2599,'2017_03_25_050154_create_page_images_table',1),(2600,'2017_04_11_033556_create_category_item_pivot',1),(2601,'2017_08_21_070649_table_about',1),(2602,'2017_08_22_031821_faq_category',1),(2603,'2017_08_22_031827_faq',1),(2604,'2017_08_22_042638_promo',1),(2605,'2017_08_22_061930_howtoorder_category',1),(2606,'2017_08_22_061945_howtoorder',1),(2607,'2017_08_22_073325_payment_confirmation',1),(2608,'2017_08_22_074217_contact_info',1),(2609,'2017_08_22_074224_contact_message',1),(2610,'2017_08_22_075559_subsriber',1),(2611,'2017_08_22_080111_desclaimer',1),(2612,'2017_08_22_080322_privacy',1),(2613,'2017_08_22_080449_term',1),(2614,'2017_08_23_022347_coupon',1),(2615,'2017_08_23_043731_item_pivot',1),(2616,'2017_08_23_065836_coupen_item_pivot',1);
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
INSERT INTO `order_details` VALUES (1,1,1,200,20000,0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,2,1,10,30000,0,'2017-08-24 01:27:14','2017-08-24 01:27:14');
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
INSERT INTO `orders` VALUES (1,1,1,1,20000,0,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,1,2,2,26000,0,'2017-08-24 01:27:14','2017-08-24 01:27:14');
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
  `field_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `page_fields` VALUES (1,1,'phone','6289373838',1,1,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(2,1,'email','contact@me.com',2,1,'2017-08-24 01:27:15','2017-08-24 01:27:15');
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
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `page_images` VALUES (1,1,'image1.jpg','2017-08-24 01:27:15','2017-08-24 01:27:15'),(2,1,'image2.jpg','2017-08-24 01:27:15','2017-08-24 01:27:15');
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
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `pages` VALUES (1,'About Us','about-us',1,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(2,'FAQ','faq',1,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(3,'How To Order','how-to-order',1,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(4,'Contact Us','contact-us',1,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(5,'Desclaimer','desclaimer',1,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(6,'Privacy','privacy',1,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(7,'Term Of Use','privacy-policy',1,'2017-08-24 01:27:15','2017-08-24 01:27:15');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_confirmation`
--

DROP TABLE IF EXISTS `payment_confirmation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_confirmation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) NOT NULL,
  `total_payment` int(11) NOT NULL,
  `image_notice` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_confirmation`
--

LOCK TABLES `payment_confirmation` WRITE;
/*!40000 ALTER TABLE `payment_confirmation` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_confirmation` ENABLE KEYS */;
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
INSERT INTO `payments` VALUES (1,1,26000,1,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,2,26000,1,1,'2017-08-24 01:27:14','2017-08-24 01:27:14'),(3,3,26000,1,1,'2017-08-24 01:27:14','2017-08-24 01:27:14');
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
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(71,1),(72,1),(73,1),(74,1),(75,1),(76,1),(77,1),(78,1),(79,1),(80,1),(81,1),(82,1),(83,1),(84,1),(85,1),(86,1),(87,1),(88,1),(89,1),(90,1),(91,1),(92,1),(93,1),(94,1),(95,1),(96,1),(97,1),(98,1),(99,1),(100,1),(101,1),(102,1),(103,1),(104,1),(105,1),(106,1),(107,1),(108,1),(109,1),(1,2),(2,2),(3,2),(4,2),(5,2),(9,2),(10,2),(11,2),(12,2),(1,3),(2,3);
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
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'role-list','Display Role Listing','See only Listing Of Role','2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,'role-create','Create Role','Create New Role','2017-08-24 01:27:14','2017-08-24 01:27:14'),(3,'role-edit','Edit Role','Edit Role','2017-08-24 01:27:14','2017-08-24 01:27:14'),(4,'role-delete','Delete Role','Delete Role','2017-08-24 01:27:14','2017-08-24 01:27:14'),(5,'items-list','Display Item Listing','See only Listing Of Item','2017-08-24 01:27:14','2017-08-24 01:27:14'),(6,'items-create','Create Item','Create New Item','2017-08-24 01:27:14','2017-08-24 01:27:14'),(7,'items-edit','Edit Item','Edit Item','2017-08-24 01:27:14','2017-08-24 01:27:14'),(8,'items-delete','Delete Item','Delete Item','2017-08-24 01:27:14','2017-08-24 01:27:14'),(9,'carts-list','Display carts Listing','See only Listing Of Item','2017-08-24 01:27:14','2017-08-24 01:27:14'),(10,'carts-create','Create carts','Create New carts','2017-08-24 01:27:14','2017-08-24 01:27:14'),(11,'carts-edit','Edit carts','Edit carts','2017-08-24 01:27:14','2017-08-24 01:27:14'),(12,'carts-delete','Delete carts','Delete carts','2017-08-24 01:27:14','2017-08-24 01:27:14'),(13,'categories-list','Display categories Listing','See only Listing Of Item','2017-08-24 01:27:14','2017-08-24 01:27:14'),(14,'categories-create','Create categories','Create New categories','2017-08-24 01:27:14','2017-08-24 01:27:14'),(15,'categories-edit','Edit categories','Edit categories','2017-08-24 01:27:14','2017-08-24 01:27:14'),(16,'categories-delete','Delete categories','Delete categories','2017-08-24 01:27:14','2017-08-24 01:27:14'),(17,'couriers-list','Display couriers Listing','See only Listing Of couriers','2017-08-24 01:27:14','2017-08-24 01:27:14'),(18,'couriers-create','Create couriers','Create New couriers','2017-08-24 01:27:14','2017-08-24 01:27:14'),(19,'couriers-edit','Edit couriers','Edit couriers','2017-08-24 01:27:14','2017-08-24 01:27:14'),(20,'couriers-delete','Delete couriers','Delete couriers','2017-08-24 01:27:14','2017-08-24 01:27:14'),(21,'deliveries-list','Display deliveries Listing','See only Listing Of deliveries','2017-08-24 01:27:14','2017-08-24 01:27:14'),(22,'deliveries-create','Create deliveries','Create New deliveries','2017-08-24 01:27:14','2017-08-24 01:27:14'),(23,'deliveries-edit','Edit deliveries','Edit deliveries','2017-08-24 01:27:14','2017-08-24 01:27:14'),(24,'deliveries-delete','Delete deliveries','Delete deliveries','2017-08-24 01:27:14','2017-08-24 01:27:14'),(25,'delivery_trackings-list','Display delivery_trackings Listing','See only Listing Of delivery_trackings','2017-08-24 01:27:14','2017-08-24 01:27:14'),(26,'delivery_trackings-create','Create delivery_trackings','Create New delivery_trackings','2017-08-24 01:27:14','2017-08-24 01:27:14'),(27,'delivery_trackings-edit','Edit delivery_trackings','Edit delivery_trackings','2017-08-24 01:27:14','2017-08-24 01:27:14'),(28,'delivery_trackings-delete','Delete delivery_trackings','Delete delivery_trackings','2017-08-24 01:27:14','2017-08-24 01:27:14'),(29,'item_images-list','Display item_images Listing','See only Listing Of item_images','2017-08-24 01:27:14','2017-08-24 01:27:14'),(30,'item_images-create','Create item_images','Create New item_images','2017-08-24 01:27:14','2017-08-24 01:27:14'),(31,'item_images-edit','Edit item_images','Edit item_images','2017-08-24 01:27:14','2017-08-24 01:27:14'),(32,'item_images-delete','Delete item_images','Delete item_images','2017-08-24 01:27:14','2017-08-24 01:27:14'),(33,'members-list','Display members Listing','See only Listing Of members','2017-08-24 01:27:14','2017-08-24 01:27:14'),(34,'members-create','Create members','Create New members','2017-08-24 01:27:14','2017-08-24 01:27:14'),(35,'members-edit','Edit members','Edit members','2017-08-24 01:27:14','2017-08-24 01:27:14'),(36,'members-delete','Delete members','Delete members','2017-08-24 01:27:14','2017-08-24 01:27:14'),(37,'order_details-list','Display order_details Listing','See only Listing Of order_details','2017-08-24 01:27:14','2017-08-24 01:27:14'),(38,'order_details-create','Create order_details','Create New order_details','2017-08-24 01:27:14','2017-08-24 01:27:14'),(39,'order_details-edit','Edit order_details','Edit order_details','2017-08-24 01:27:14','2017-08-24 01:27:14'),(40,'order_details-delete','Delete order_details','Delete order_details','2017-08-24 01:27:14','2017-08-24 01:27:14'),(41,'orders-list','Display orders Listing','See only Listing Of orders','2017-08-24 01:27:14','2017-08-24 01:27:14'),(42,'orders-create','Create orders','Create New orders','2017-08-24 01:27:14','2017-08-24 01:27:14'),(43,'orders-edit','Edit orders','Edit orders','2017-08-24 01:27:14','2017-08-24 01:27:14'),(44,'orders-delete','Delete orders','Delete orders','2017-08-24 01:27:14','2017-08-24 01:27:14'),(45,'page_fields-list','Display page_fields Listing','See only Listing Of page_fields','2017-08-24 01:27:14','2017-08-24 01:27:14'),(46,'page_fields-create','Create page_fields','Create New page_fields','2017-08-24 01:27:14','2017-08-24 01:27:14'),(47,'page_fields-edit','Edit page_fields','Edit page_fields','2017-08-24 01:27:14','2017-08-24 01:27:14'),(48,'page_fields-delete','Delete page_fields','Delete page_fields','2017-08-24 01:27:14','2017-08-24 01:27:14'),(49,'page_images-list','Display page_images Listing','See only Listing Of page_images','2017-08-24 01:27:14','2017-08-24 01:27:14'),(50,'page_images-create','Create page_images','Create New page_images','2017-08-24 01:27:14','2017-08-24 01:27:14'),(51,'page_images-edit','Edit page_images','Edit page_images','2017-08-24 01:27:14','2017-08-24 01:27:14'),(52,'page_images-delete','Delete page_images','Delete page_images','2017-08-24 01:27:14','2017-08-24 01:27:14'),(53,'pages-list','Display pages Listing','See only Listing Of pages','2017-08-24 01:27:14','2017-08-24 01:27:14'),(54,'pages-create','Create pages','Create New pages','2017-08-24 01:27:14','2017-08-24 01:27:14'),(55,'pages-edit','Edit pages','Edit pages','2017-08-24 01:27:14','2017-08-24 01:27:14'),(56,'pages-delete','Delete pages','Delete pages','2017-08-24 01:27:14','2017-08-24 01:27:14'),(57,'payments-list','Display payments Listing','See only Listing Of payments','2017-08-24 01:27:14','2017-08-24 01:27:14'),(58,'payments-create','Create payments','Create New payments','2017-08-24 01:27:14','2017-08-24 01:27:14'),(59,'payments-edit','Edit payments','Edit payments','2017-08-24 01:27:14','2017-08-24 01:27:14'),(60,'payments-delete','Delete payments','Delete payments','2017-08-24 01:27:14','2017-08-24 01:27:14'),(61,'permissions-list','Display permissions Listing','See only Listing Of permissions','2017-08-24 01:27:14','2017-08-24 01:27:14'),(62,'permissions-create','Create permissions','Create New permissions','2017-08-24 01:27:14','2017-08-24 01:27:14'),(63,'permissions-edit','Edit permissions','Edit permissions','2017-08-24 01:27:14','2017-08-24 01:27:14'),(64,'permissions-delete','Delete permissions','Delete permissions','2017-08-24 01:27:14','2017-08-24 01:27:14'),(65,'product_images-list','Display product_images Listing','See only Listing Of product_images','2017-08-24 01:27:14','2017-08-24 01:27:14'),(66,'product_images-create','Create product_images','Create New product_images','2017-08-24 01:27:14','2017-08-24 01:27:14'),(67,'product_images-edit','Edit product_images','Edit product_images','2017-08-24 01:27:14','2017-08-24 01:27:14'),(68,'product_images-delete','Delete product_images','Delete product_images','2017-08-24 01:27:14','2017-08-24 01:27:14'),(69,'products-list','Display products Listing','See only Listing Of products','2017-08-24 01:27:14','2017-08-24 01:27:14'),(70,'products-create','Create products','Create New products','2017-08-24 01:27:14','2017-08-24 01:27:14'),(71,'products-edit','Edit products','Edit products','2017-08-24 01:27:14','2017-08-24 01:27:14'),(72,'products-delete','Delete products','Delete products','2017-08-24 01:27:14','2017-08-24 01:27:14'),(73,'promotions-list','Display promotions Listing','See only Listing Of promotions','2017-08-24 01:27:14','2017-08-24 01:27:14'),(74,'promotions-create','Create promotions','Create New promotions','2017-08-24 01:27:14','2017-08-24 01:27:14'),(75,'promotions-edit','Edit promotions','Edit promotions','2017-08-24 01:27:14','2017-08-24 01:27:14'),(76,'promotions-delete','Delete promotions','Delete promotions','2017-08-24 01:27:14','2017-08-24 01:27:14'),(77,'sessions-list','Display sessions Listing','See only Listing Of sessions','2017-08-24 01:27:14','2017-08-24 01:27:14'),(78,'sessions-create','Create sessions','Create New sessions','2017-08-24 01:27:14','2017-08-24 01:27:14'),(79,'sessions-edit','Edit sessions','Edit sessions','2017-08-24 01:27:14','2017-08-24 01:27:14'),(80,'sessions-delete','Delete sessions','Delete sessions','2017-08-24 01:27:14','2017-08-24 01:27:14'),(81,'shipping_costs-list','Display shipping_costs Listing','See only Listing Of shipping_costs','2017-08-24 01:27:14','2017-08-24 01:27:14'),(82,'shipping_costs-create','Create shipping_costs','Create New shipping_costs','2017-08-24 01:27:14','2017-08-24 01:27:14'),(83,'shipping_costs-edit','Edit shipping_costs','Edit shipping_costs','2017-08-24 01:27:14','2017-08-24 01:27:14'),(84,'shipping_costs-delete','Delete shipping_costs','Delete shipping_costs','2017-08-24 01:27:14','2017-08-24 01:27:14'),(85,'sliders-list','Display sliders Listing','See only Listing Of sliders','2017-08-24 01:27:14','2017-08-24 01:27:14'),(86,'sliders-create','Create sliders','Create New sliders','2017-08-24 01:27:14','2017-08-24 01:27:14'),(87,'sliders-edit','Edit sliders','Edit sliders','2017-08-24 01:27:14','2017-08-24 01:27:14'),(88,'sliders-delete','Delete sliders','Delete sliders','2017-08-24 01:27:14','2017-08-24 01:27:14'),(89,'tag-list','Display tag Listing','See only Listing Of tag','2017-08-24 01:27:14','2017-08-24 01:27:14'),(90,'tag-create','Create tag','Create New tag','2017-08-24 01:27:14','2017-08-24 01:27:14'),(91,'tag-edit','Edit tag','Edit tag','2017-08-24 01:27:14','2017-08-24 01:27:14'),(92,'tag-delete','Delete tag','Delete tag','2017-08-24 01:27:14','2017-08-24 01:27:14'),(93,'upload-list','Display tag upload-list','See only upload-list Of tag','2017-08-24 01:27:14','2017-08-24 01:27:14'),(94,'upload-file','Create upload-file','Create New upload-file','2017-08-24 01:27:14','2017-08-24 01:27:14'),(95,'upload-folder','create upload-folder','create upload-folder','2017-08-24 01:27:14','2017-08-24 01:27:14'),(96,'upload-deleteFolder','Delete upload-deleteFolder','Delete upload-deleteFolder','2017-08-24 01:27:14','2017-08-24 01:27:14'),(97,'upload-deleteFile','Delete upload-deleteFile','Delete upload-deleteFile','2017-08-24 01:27:14','2017-08-24 01:27:14'),(98,'post-list','Display post Listing','See only Listing Of post','2017-08-24 01:27:14','2017-08-24 01:27:14'),(99,'post-create','Create post','Create New post','2017-08-24 01:27:14','2017-08-24 01:27:14'),(100,'post-edit','Edit post','Edit post','2017-08-24 01:27:14','2017-08-24 01:27:14'),(101,'post-delete','Delete post','Delete post','2017-08-24 01:27:14','2017-08-24 01:27:14'),(102,'users-list','Display users Listing','See only Listing Of users','2017-08-24 01:27:14','2017-08-24 01:27:14'),(103,'users-create','Create users','Create New users','2017-08-24 01:27:14','2017-08-24 01:27:14'),(104,'users-edit','Edit users','Edit users','2017-08-24 01:27:14','2017-08-24 01:27:14'),(105,'users-delete','Delete users','Delete users','2017-08-24 01:27:14','2017-08-24 01:27:14'),(106,'package-list','Display package Listing','See only Listing Of package','2017-08-24 01:27:14','2017-08-24 01:27:14'),(107,'package-create','Create package','Create New package','2017-08-24 01:27:14','2017-08-24 01:27:14'),(108,'package-edit','Edit package','Edit package','2017-08-24 01:27:14','2017-08-24 01:27:14'),(109,'package-delete','Delete package','Delete package','2017-08-24 01:27:14','2017-08-24 01:27:14');
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
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_raw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `posts` VALUES (1,'quo-labore-ut-fuga-adipisci-laudantium','Quo labore ut fuga adipisci laudantium.','Vel aut dolores qui ipsa qui.','Odio quibusdam molestiae at omnis voluptatem. Dignissimos quas illo et dolor et. Accusamus sapiente itaque voluptatibus voluptatem nostrum. Adipisci et ipsam aut ratione necessitatibus. Ut aut pariatur est ducimus eligendi.\n\nEst maxime est rerum est facilis alias. Necessitatibus aliquid enim velit sit enim qui. Suscipit voluptatem at perferendis est qui cum tenetur cum.\n\nEt non omnis sequi sequi nihil debitis sint. Voluptas eligendi labore natus saepe saepe mollitia. Temporibus qui quis iste quos. Sit est harum saepe hic fuga tempore nihil.\n\nNeque accusamus et labore pariatur sunt perferendis repudiandae. Dignissimos voluptas debitis unde qui magni cum est et. Reprehenderit et minima consequatur voluptas.\n\nVoluptatem a aperiam neque tenetur numquam sed. Non est ducimus aut molestiae. Quos est harum dolorem qui animi minus dolorum odio. Necessitatibus quia beatae fugit harum ut rerum.','Odio quibusdam molestiae at omnis voluptatem. Dignissimos quas illo et dolor et. Accusamus sapiente itaque voluptatibus voluptatem nostrum. Adipisci et ipsam aut ratione necessitatibus. Ut aut pariatur est ducimus eligendi.\n\nEst maxime est rerum est facilis alias. Necessitatibus aliquid enim velit sit enim qui. Suscipit voluptatem at perferendis est qui cum tenetur cum.\n\nEt non omnis sequi sequi nihil debitis sint. Voluptas eligendi labore natus saepe saepe mollitia. Temporibus qui quis iste quos. Sit est harum saepe hic fuga tempore nihil.\n\nNeque accusamus et labore pariatur sunt perferendis repudiandae. Dignissimos voluptas debitis unde qui magni cum est et. Reprehenderit et minima consequatur voluptas.\n\nVoluptatem a aperiam neque tenetur numquam sed. Non est ducimus aut molestiae. Quos est harum dolorem qui animi minus dolorum odio. Necessitatibus quia beatae fugit harum ut rerum.','Corporis id doloribus sed.','Non alias.',0,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-07-25 05:54:13'),(2,'enim-natus-reiciendis-dignissimos-excepturi','Enim natus reiciendis dignissimos excepturi.','Qui cupiditate ut inventore architecto voluptatem.','Cum provident dolores et est recusandae cum sit. Dolore veniam delectus quae nulla incidunt. Explicabo fuga ipsam incidunt aliquam laboriosam. Non perspiciatis quia maiores velit libero iure natus.\n\nOfficiis eligendi dolorum porro. Eveniet et consequatur rerum quam. Dolor autem sunt amet cupiditate assumenda nobis id aut.\n\nNumquam omnis earum officia rerum nihil nihil ab molestias. Labore facere nesciunt rerum sint sed et quia. Distinctio corrupti incidunt ullam ipsa amet ipsum.\n\nAt est tempora qui odio aut aperiam at. Qui ab deserunt magni aut omnis mollitia. Quis minus iure cupiditate possimus et.\n\nQuis possimus rem labore aliquid. Optio in amet necessitatibus fuga voluptatem. Pariatur recusandae occaecati magnam repudiandae et.','Cum provident dolores et est recusandae cum sit. Dolore veniam delectus quae nulla incidunt. Explicabo fuga ipsam incidunt aliquam laboriosam. Non perspiciatis quia maiores velit libero iure natus.\n\nOfficiis eligendi dolorum porro. Eveniet et consequatur rerum quam. Dolor autem sunt amet cupiditate assumenda nobis id aut.\n\nNumquam omnis earum officia rerum nihil nihil ab molestias. Labore facere nesciunt rerum sint sed et quia. Distinctio corrupti incidunt ullam ipsa amet ipsum.\n\nAt est tempora qui odio aut aperiam at. Qui ab deserunt magni aut omnis mollitia. Quis minus iure cupiditate possimus et.\n\nQuis possimus rem labore aliquid. Optio in amet necessitatibus fuga voluptatem. Pariatur recusandae occaecati magnam repudiandae et.','Architecto et qui autem a maxime.','Minus accusamus mollitia asperiores impedit.',5,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-07-30 14:01:37'),(3,'minima-earum-adipisci-ea','Minima earum adipisci ea.','Aut quisquam debitis velit nulla tempore nihil.','Et consequuntur veniam quia iusto quisquam. Mollitia dolores quis aut aperiam velit et non sed. Quae vero quod autem labore. At harum aspernatur explicabo earum qui.\n\nQui quo et qui assumenda. Cumque possimus minima repellendus excepturi. Sit tempora ut a quidem quaerat quia tempore. Sapiente modi est possimus quia aspernatur officia cupiditate id.\n\nIpsa ut enim velit officiis nihil non tenetur. A sed molestias explicabo commodi dolores rerum. Ea impedit maiores non voluptatem voluptate aut.\n\nNumquam beatae esse quod et consequatur aut a delectus. A architecto sit sequi non id non quis dolor. Ut id tempore quo doloremque dolores veniam vel. Pariatur maiores assumenda vel.\n\nAutem ad incidunt saepe labore est est unde. Esse asperiores eos quibusdam incidunt tenetur dignissimos. Sit quia similique eligendi voluptatum ut.','Et consequuntur veniam quia iusto quisquam. Mollitia dolores quis aut aperiam velit et non sed. Quae vero quod autem labore. At harum aspernatur explicabo earum qui.\n\nQui quo et qui assumenda. Cumque possimus minima repellendus excepturi. Sit tempora ut a quidem quaerat quia tempore. Sapiente modi est possimus quia aspernatur officia cupiditate id.\n\nIpsa ut enim velit officiis nihil non tenetur. A sed molestias explicabo commodi dolores rerum. Ea impedit maiores non voluptatem voluptate aut.\n\nNumquam beatae esse quod et consequatur aut a delectus. A architecto sit sequi non id non quis dolor. Ut id tempore quo doloremque dolores veniam vel. Pariatur maiores assumenda vel.\n\nAutem ad incidunt saepe labore est est unde. Esse asperiores eos quibusdam incidunt tenetur dignissimos. Sit quia similique eligendi voluptatum ut.','Et vitae ex veniam ea aut deleniti.','Inventore earum accusantium a inventore ut quia aspernatur.',4,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-07-26 19:39:25'),(4,'nihil-ut-aut-accusamus','Nihil ut aut accusamus.','Distinctio dolores et et sed sed sint.','Odio aut rerum sed odit. Corporis in quo nulla id est. Eaque voluptatum saepe cupiditate beatae officiis accusantium beatae ratione.\n\nAut labore illum rem officia aliquid. Cum illo ut inventore architecto.\n\nMollitia quas qui sit veniam sunt recusandae. Vero quae fugit dignissimos sapiente dolores dignissimos.\n\nQuia illo fuga dolore cum. Dolore voluptatem voluptas perspiciatis enim. Minus sed laborum ea cum.\n\nEst suscipit fugiat ut. Non adipisci tempora ut totam fugiat. Sint reprehenderit quibusdam et. Doloribus aut laboriosam placeat tempore enim.\n\nQuia aliquam nesciunt ut consequuntur nulla explicabo. Adipisci numquam qui laudantium beatae et id aperiam. Dolores harum error et ut. Quasi sint ut officiis unde ut. Alias facere incidunt perspiciatis aut.','Odio aut rerum sed odit. Corporis in quo nulla id est. Eaque voluptatum saepe cupiditate beatae officiis accusantium beatae ratione.\n\nAut labore illum rem officia aliquid. Cum illo ut inventore architecto.\n\nMollitia quas qui sit veniam sunt recusandae. Vero quae fugit dignissimos sapiente dolores dignissimos.\n\nQuia illo fuga dolore cum. Dolore voluptatem voluptas perspiciatis enim. Minus sed laborum ea cum.\n\nEst suscipit fugiat ut. Non adipisci tempora ut totam fugiat. Sint reprehenderit quibusdam et. Doloribus aut laboriosam placeat tempore enim.\n\nQuia aliquam nesciunt ut consequuntur nulla explicabo. Adipisci numquam qui laudantium beatae et id aperiam. Dolores harum error et ut. Quasi sint ut officiis unde ut. Alias facere incidunt perspiciatis aut.','Inventore nihil quasi ab atque ipsa.','Et est quia aut repellendus qui officia modi tempore voluptas tenetur pariatur ea.',9,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-08-16 17:16:53'),(5,'beatae-est-quo-pariatur-accusantium-quos-quaerat-aperiam','Beatae est quo pariatur accusantium quos quaerat aperiam.','Porro cupiditate cumque est quaerat tempora.','Qui quisquam qui cum inventore. Sequi nostrum sint rerum debitis. Labore eos accusamus libero pariatur quia quos non harum.\n\nVel fuga nisi tempore labore quae. Praesentium sed ullam consequatur voluptas illo nostrum ratione ad. Culpa pariatur voluptatem vero est sed excepturi molestiae. Voluptas explicabo voluptatum odio aspernatur non.\n\nSit tempore et qui. Totam velit similique tempora minus sed pariatur. Iste placeat modi expedita ut cumque adipisci aliquam.\n\nConsectetur deleniti non odio distinctio. Et consequuntur maiores alias. Architecto velit voluptas eius hic. Tempora enim odit placeat minima ex.','Qui quisquam qui cum inventore. Sequi nostrum sint rerum debitis. Labore eos accusamus libero pariatur quia quos non harum.\n\nVel fuga nisi tempore labore quae. Praesentium sed ullam consequatur voluptas illo nostrum ratione ad. Culpa pariatur voluptatem vero est sed excepturi molestiae. Voluptas explicabo voluptatum odio aspernatur non.\n\nSit tempore et qui. Totam velit similique tempora minus sed pariatur. Iste placeat modi expedita ut cumque adipisci aliquam.\n\nConsectetur deleniti non odio distinctio. Et consequuntur maiores alias. Architecto velit voluptas eius hic. Tempora enim odit placeat minima ex.','Fugit incidunt laudantium eligendi culpa eum vel officia sunt tenetur.','Voluptatem nostrum consequatur molestiae accusantium aut ut.',3,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-08-14 04:21:04'),(6,'praesentium-quis-odit-nisi-inventore-error-voluptates-quidem-aut','Praesentium quis odit nisi inventore error voluptates quidem aut.','Laudantium maxime velit debitis dolor.','Facere provident sequi soluta laudantium aut quod et quam. Voluptas consequatur et et. Fugit deleniti sed qui et ut. Sint fugit aut sequi dicta sint aspernatur.\n\nRerum iusto et quos optio aut. Ducimus fugit fuga molestiae omnis explicabo. Adipisci ad cumque sapiente et ea itaque nisi nihil.\n\nEt laboriosam minima odio ratione voluptates aliquam. Vel aspernatur soluta placeat maxime perspiciatis neque blanditiis. Dignissimos officia vitae magnam ea.\n\nNulla provident ut animi nihil dolor. Porro ipsum et ut repellendus ad. Autem mollitia non expedita harum non. Cum sit blanditiis debitis optio.\n\nRecusandae dolorem molestiae quas debitis magnam. Et magni magni aliquam fugiat doloribus maiores veritatis quae. Ut consequatur perferendis dolor quibusdam voluptas aut et.\n\nNam dignissimos hic pariatur sunt. Dolores nihil veniam sint illo quasi architecto. Incidunt natus eos nulla excepturi.','Facere provident sequi soluta laudantium aut quod et quam. Voluptas consequatur et et. Fugit deleniti sed qui et ut. Sint fugit aut sequi dicta sint aspernatur.\n\nRerum iusto et quos optio aut. Ducimus fugit fuga molestiae omnis explicabo. Adipisci ad cumque sapiente et ea itaque nisi nihil.\n\nEt laboriosam minima odio ratione voluptates aliquam. Vel aspernatur soluta placeat maxime perspiciatis neque blanditiis. Dignissimos officia vitae magnam ea.\n\nNulla provident ut animi nihil dolor. Porro ipsum et ut repellendus ad. Autem mollitia non expedita harum non. Cum sit blanditiis debitis optio.\n\nRecusandae dolorem molestiae quas debitis magnam. Et magni magni aliquam fugiat doloribus maiores veritatis quae. Ut consequatur perferendis dolor quibusdam voluptas aut et.\n\nNam dignissimos hic pariatur sunt. Dolores nihil veniam sint illo quasi architecto. Incidunt natus eos nulla excepturi.','Architecto porro velit facere voluptatum et architecto ad.','Velit recusandae debitis tenetur non recusandae quo et reiciendis sint consequuntur ea reprehenderit.',9,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-07-28 16:52:19'),(7,'sed-quo-et-ea-ad-repellat-eos-quaerat','Sed quo et ea ad repellat eos quaerat.','Ducimus voluptatem autem soluta consequatur rem quia vero magnam magnam.','Aliquam voluptatem culpa ut provident magnam. Quaerat est cum voluptas qui. Doloribus veritatis laboriosam ratione vel magnam doloribus in.\n\nDoloremque est dicta voluptates quaerat. Ut sit quod pariatur ut. Explicabo est illo qui qui.\n\nIn ducimus eum omnis voluptatum ipsum natus et odio. Placeat magni ipsa maxime magnam ea. Non saepe in mollitia cupiditate. Numquam voluptatum totam neque aut unde tenetur.\n\nPossimus vero cumque nisi velit et eos amet doloribus. Quia non cum ad minus qui eaque. Optio atque quasi velit quos a sint id. Error voluptatem sed corporis suscipit consequuntur recusandae. Voluptatem quia nemo ipsum laudantium harum culpa voluptatem.\n\nUt dolore et aliquam quia. Voluptates ratione id est ipsam. Ut a qui rerum et voluptatem ipsum sit reiciendis.','Aliquam voluptatem culpa ut provident magnam. Quaerat est cum voluptas qui. Doloribus veritatis laboriosam ratione vel magnam doloribus in.\n\nDoloremque est dicta voluptates quaerat. Ut sit quod pariatur ut. Explicabo est illo qui qui.\n\nIn ducimus eum omnis voluptatum ipsum natus et odio. Placeat magni ipsa maxime magnam ea. Non saepe in mollitia cupiditate. Numquam voluptatum totam neque aut unde tenetur.\n\nPossimus vero cumque nisi velit et eos amet doloribus. Quia non cum ad minus qui eaque. Optio atque quasi velit quos a sint id. Error voluptatem sed corporis suscipit consequuntur recusandae. Voluptatem quia nemo ipsum laudantium harum culpa voluptatem.\n\nUt dolore et aliquam quia. Voluptates ratione id est ipsam. Ut a qui rerum et voluptatem ipsum sit reiciendis.','Magnam quidem id voluptatem et repudiandae.','Quia unde consequuntur id nobis eos numquam.',9,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-08-17 23:31:05'),(8,'molestiae-quia-laboriosam-odio-doloremque-omnis-qui-reiciendis-officiis','Molestiae quia laboriosam odio doloremque omnis qui reiciendis officiis.','Nesciunt voluptas aut consequatur vel eius.','Beatae deleniti quae eligendi dolores. Sint culpa velit vero officiis officia quo. At facilis et ut.\n\nOmnis molestiae distinctio tenetur omnis neque minus. Molestiae doloribus ut est ipsam ut odio. Facilis iure nostrum eius ut facere consequatur qui.\n\nDeleniti et et dolore eius voluptas. Modi tempora ad omnis nesciunt laboriosam officiis iusto. Cumque id perferendis molestiae aut perspiciatis accusamus animi ipsum. Sequi non officiis enim quia autem ipsa consequatur in.\n\nLabore omnis omnis quas corrupti. Quia repudiandae omnis eaque ipsum dolores veritatis deleniti. Rerum blanditiis et qui quibusdam et magni. Qui qui inventore aliquam nemo.\n\nPraesentium sit deserunt iusto et qui repellat temporibus. Alias blanditiis dolore omnis voluptatem accusamus rerum. Autem officiis eligendi et corporis sunt vero. Tempora sit nostrum in.\n\nAut laudantium facere aperiam nisi omnis sit. Est voluptas doloribus distinctio aut est. Sed eveniet nesciunt eligendi.','Beatae deleniti quae eligendi dolores. Sint culpa velit vero officiis officia quo. At facilis et ut.\n\nOmnis molestiae distinctio tenetur omnis neque minus. Molestiae doloribus ut est ipsam ut odio. Facilis iure nostrum eius ut facere consequatur qui.\n\nDeleniti et et dolore eius voluptas. Modi tempora ad omnis nesciunt laboriosam officiis iusto. Cumque id perferendis molestiae aut perspiciatis accusamus animi ipsum. Sequi non officiis enim quia autem ipsa consequatur in.\n\nLabore omnis omnis quas corrupti. Quia repudiandae omnis eaque ipsum dolores veritatis deleniti. Rerum blanditiis et qui quibusdam et magni. Qui qui inventore aliquam nemo.\n\nPraesentium sit deserunt iusto et qui repellat temporibus. Alias blanditiis dolore omnis voluptatem accusamus rerum. Autem officiis eligendi et corporis sunt vero. Tempora sit nostrum in.\n\nAut laudantium facere aperiam nisi omnis sit. Est voluptas doloribus distinctio aut est. Sed eveniet nesciunt eligendi.','Doloremque rerum assumenda.','Nisi sed repellat nobis similique nemo vitae.',2,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-08-08 00:24:55'),(9,'tenetur-ullam-culpa-at','Tenetur ullam culpa at.','Facilis aut animi tempora.','Doloribus dolorem provident vero consectetur dolores. Minus ipsam corrupti deserunt iure ad animi porro eos. Voluptas et expedita voluptas ut omnis suscipit. Sit et et voluptas quis.\n\nQuis adipisci alias labore similique tempore autem. Ut occaecati eum velit aut molestiae sed beatae at. Culpa repellat est voluptatem molestiae. Vel ea rerum illum nam.\n\nNumquam dignissimos iste illo aperiam aliquam aut aut dolor. Corporis consequuntur esse iure. Aut nostrum consequatur nulla. Pariatur repudiandae et dolorum repellendus molestias quisquam porro.','Doloribus dolorem provident vero consectetur dolores. Minus ipsam corrupti deserunt iure ad animi porro eos. Voluptas et expedita voluptas ut omnis suscipit. Sit et et voluptas quis.\n\nQuis adipisci alias labore similique tempore autem. Ut occaecati eum velit aut molestiae sed beatae at. Culpa repellat est voluptatem molestiae. Vel ea rerum illum nam.\n\nNumquam dignissimos iste illo aperiam aliquam aut aut dolor. Corporis consequuntur esse iure. Aut nostrum consequatur nulla. Pariatur repudiandae et dolorum repellendus molestias quisquam porro.','Modi libero omnis molestiae est dolorem enim quod error quaerat beatae rerum beatae voluptatem.','Omnis cupiditate reprehenderit eum perspiciatis explicabo ut expedita.',9,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-08-23 03:58:10'),(10,'deserunt-consequatur-facere-odit-blanditiis-nihil-autem-itaque','Deserunt consequatur facere odit blanditiis nihil autem itaque.','Sint tempore et laudantium quo dolor.','Eaque omnis fugiat est expedita nostrum sed voluptate. Facilis adipisci nam eveniet assumenda.\n\nNisi non dolorem minus deserunt facere aspernatur. Voluptatem nulla provident aperiam dicta aperiam atque non. Praesentium aperiam aperiam sed consectetur sint aut hic ut.\n\nLabore voluptatibus ut dolores. Quibusdam facilis molestiae ullam ullam accusamus dolores pariatur qui.\n\nTempora tempora eligendi maxime impedit. Ab ab animi blanditiis asperiores quos omnis. Nulla doloremque ea sunt velit voluptatem dicta.\n\nMinus eos dolorem voluptas modi. Sed architecto qui beatae iste provident tempora et inventore. Incidunt repellat commodi quia beatae repellat quam corrupti non. Laboriosam modi nemo molestiae possimus reprehenderit et ipsa molestias.\n\nOccaecati facere non perspiciatis ut quo. Aliquam animi voluptas neque et dolores. Doloribus cum et sint.','Eaque omnis fugiat est expedita nostrum sed voluptate. Facilis adipisci nam eveniet assumenda.\n\nNisi non dolorem minus deserunt facere aspernatur. Voluptatem nulla provident aperiam dicta aperiam atque non. Praesentium aperiam aperiam sed consectetur sint aut hic ut.\n\nLabore voluptatibus ut dolores. Quibusdam facilis molestiae ullam ullam accusamus dolores pariatur qui.\n\nTempora tempora eligendi maxime impedit. Ab ab animi blanditiis asperiores quos omnis. Nulla doloremque ea sunt velit voluptatem dicta.\n\nMinus eos dolorem voluptas modi. Sed architecto qui beatae iste provident tempora et inventore. Incidunt repellat commodi quia beatae repellat quam corrupti non. Laboriosam modi nemo molestiae possimus reprehenderit et ipsa molestias.\n\nOccaecati facere non perspiciatis ut quo. Aliquam animi voluptas neque et dolores. Doloribus cum et sint.','Autem dolores tempora.','Nisi ea sit veniam quasi amet.',8,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-07-31 00:35:03'),(11,'a-tenetur-et-consequatur-nisi-non-reprehenderit-fugit-dolore-dolorum-itaque-quidem','A tenetur et consequatur nisi non reprehenderit fugit dolore dolorum itaque quidem.','Natus error qui recusandae.','Laudantium error quia et saepe ut dolor illo aspernatur. Ut neque nulla ut nesciunt voluptas.\n\nPossimus sapiente nostrum harum culpa atque autem. Quaerat fuga praesentium facilis magni. Laudantium ut enim et quis aut quas.\n\nOfficia molestias porro aut veniam. Velit iusto sunt quos voluptatem perferendis omnis. Id placeat iste vitae perspiciatis maiores. Qui soluta quis veritatis. Eum quis dolorum error dignissimos aliquid in est.','Laudantium error quia et saepe ut dolor illo aspernatur. Ut neque nulla ut nesciunt voluptas.\n\nPossimus sapiente nostrum harum culpa atque autem. Quaerat fuga praesentium facilis magni. Laudantium ut enim et quis aut quas.\n\nOfficia molestias porro aut veniam. Velit iusto sunt quos voluptatem perferendis omnis. Id placeat iste vitae perspiciatis maiores. Qui soluta quis veritatis. Eum quis dolorum error dignissimos aliquid in est.','Vitae in ratione dolores exercitationem qui illo voluptas.','Et deserunt qui et beatae blanditiis numquam voluptatem qui consequatur aut.',5,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-07-25 01:01:09'),(12,'unde-qui-libero-non-ut-sunt','Unde qui libero non ut sunt.','Et similique culpa quos.','Dolor nulla veniam suscipit unde quam. Repudiandae ut reprehenderit voluptate perspiciatis libero. Et atque saepe quis vero.\n\nUt quia corrupti magnam. Adipisci pariatur consequuntur dolorem quos adipisci. Numquam vel consequatur eaque mollitia unde nihil nihil aut.\n\nQui adipisci blanditiis sapiente expedita possimus id voluptatibus. Temporibus soluta non cum et omnis esse voluptas rerum. Aut rerum occaecati voluptatem.\n\nVelit assumenda perspiciatis et veniam. Cumque et sed ad qui nam ratione maxime. Dolorem suscipit est sint numquam.','Dolor nulla veniam suscipit unde quam. Repudiandae ut reprehenderit voluptate perspiciatis libero. Et atque saepe quis vero.\n\nUt quia corrupti magnam. Adipisci pariatur consequuntur dolorem quos adipisci. Numquam vel consequatur eaque mollitia unde nihil nihil aut.\n\nQui adipisci blanditiis sapiente expedita possimus id voluptatibus. Temporibus soluta non cum et omnis esse voluptas rerum. Aut rerum occaecati voluptatem.\n\nVelit assumenda perspiciatis et veniam. Cumque et sed ad qui nam ratione maxime. Dolorem suscipit est sint numquam.','Et eius numquam molestias labore voluptas.','Provident expedita distinctio doloremque et expedita quos omnis optio.',6,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-08-21 09:15:29'),(13,'qui-iusto-voluptas-voluptas-sed-iusto-doloribus-fugiat','Qui iusto voluptas voluptas sed iusto doloribus fugiat.','Dolorem qui aut assumenda laudantium est.','Quia similique praesentium nihil. Dolores cupiditate quos qui ab a quos vero. Accusamus voluptate quod sunt iste doloribus natus sed ut.\n\nArchitecto dolor voluptatem sit voluptas voluptates perferendis dolorem. Similique qui pariatur unde accusamus voluptatem hic. Id ut quia voluptatem repudiandae. Accusamus nulla ducimus dolor reprehenderit natus fugiat.\n\nUt voluptatibus saepe quasi doloremque doloremque et. Architecto enim sint qui ut expedita amet. Dolorum autem soluta aut aliquid reprehenderit odio odio. Recusandae temporibus necessitatibus sunt optio accusamus ea.\n\nImpedit et accusamus quia iusto et eaque. Libero aspernatur sunt facere sint accusamus dignissimos quam. Eaque iure consequuntur ab non et aperiam. Quis numquam reprehenderit qui nemo neque ipsam similique.','Quia similique praesentium nihil. Dolores cupiditate quos qui ab a quos vero. Accusamus voluptate quod sunt iste doloribus natus sed ut.\n\nArchitecto dolor voluptatem sit voluptas voluptates perferendis dolorem. Similique qui pariatur unde accusamus voluptatem hic. Id ut quia voluptatem repudiandae. Accusamus nulla ducimus dolor reprehenderit natus fugiat.\n\nUt voluptatibus saepe quasi doloremque doloremque et. Architecto enim sint qui ut expedita amet. Dolorum autem soluta aut aliquid reprehenderit odio odio. Recusandae temporibus necessitatibus sunt optio accusamus ea.\n\nImpedit et accusamus quia iusto et eaque. Libero aspernatur sunt facere sint accusamus dignissimos quam. Eaque iure consequuntur ab non et aperiam. Quis numquam reprehenderit qui nemo neque ipsam similique.','Quam eos sit sunt enim assumenda molestiae.','Sint sit velit.',7,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-08-09 03:41:43'),(14,'aut-quia-voluptate-quia-molestias-esse-qui','Aut quia voluptate quia molestias esse qui.','Vero ipsum ut minus quam nulla.','Molestiae possimus provident et quas dolores. Sint alias odio repellat adipisci quibusdam ullam. Tempora pariatur voluptas enim est sint impedit. Sit aut placeat est distinctio omnis quia.\n\nAlias qui autem et doloribus repellendus atque eius. Debitis reprehenderit magni reprehenderit rerum voluptas voluptas saepe est. Beatae distinctio dignissimos magni modi provident autem. Magni quaerat sit quia qui sit.\n\nDebitis alias nihil sit minus cupiditate architecto sunt. Omnis quaerat sed eligendi blanditiis. Quo quisquam est quibusdam sint ullam. Qui voluptatem distinctio voluptas consequatur. Adipisci corporis pariatur quis fuga sit.\n\nEt commodi incidunt optio aut debitis distinctio quos vitae. Aliquam quis ab quos consequatur doloribus laudantium minima. Velit quam eum ipsa doloribus.','Molestiae possimus provident et quas dolores. Sint alias odio repellat adipisci quibusdam ullam. Tempora pariatur voluptas enim est sint impedit. Sit aut placeat est distinctio omnis quia.\n\nAlias qui autem et doloribus repellendus atque eius. Debitis reprehenderit magni reprehenderit rerum voluptas voluptas saepe est. Beatae distinctio dignissimos magni modi provident autem. Magni quaerat sit quia qui sit.\n\nDebitis alias nihil sit minus cupiditate architecto sunt. Omnis quaerat sed eligendi blanditiis. Quo quisquam est quibusdam sint ullam. Qui voluptatem distinctio voluptas consequatur. Adipisci corporis pariatur quis fuga sit.\n\nEt commodi incidunt optio aut debitis distinctio quos vitae. Aliquam quis ab quos consequatur doloribus laudantium minima. Velit quam eum ipsa doloribus.','Voluptatem est suscipit earum sapiente repellendus autem atque et iure eius dolore amet tempore.','Voluptatem totam vel voluptatem.',0,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-08-15 18:53:01'),(15,'dolorum-assumenda-recusandae','Dolorum assumenda recusandae.','At ipsam reprehenderit.','Ut dolorum quia debitis et. Nulla nisi ut officiis. Accusantium quis molestias nemo eum nulla in officiis.\n\nRerum qui dolore qui similique laborum natus. Esse necessitatibus alias occaecati aut. Facere et et aut amet doloribus eos. Dolor voluptatum eveniet consequatur officia nostrum.\n\nQuasi autem aut aliquam non vel esse. Qui tempore voluptate ipsa. Magni accusantium minus molestias expedita rem et. Exercitationem mollitia dicta corporis quae aut et.\n\nEt unde sunt at. In temporibus et iusto magni deserunt est ad. Rem fugit minus sint ratione distinctio.','Ut dolorum quia debitis et. Nulla nisi ut officiis. Accusantium quis molestias nemo eum nulla in officiis.\n\nRerum qui dolore qui similique laborum natus. Esse necessitatibus alias occaecati aut. Facere et et aut amet doloribus eos. Dolor voluptatum eveniet consequatur officia nostrum.\n\nQuasi autem aut aliquam non vel esse. Qui tempore voluptate ipsa. Magni accusantium minus molestias expedita rem et. Exercitationem mollitia dicta corporis quae aut et.\n\nEt unde sunt at. In temporibus et iusto magni deserunt est ad. Rem fugit minus sint ratione distinctio.','Ea dignissimos sit qui sint voluptas.','Et voluptates et non doloremque sit totam.',8,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-08-17 09:46:08'),(16,'quos-quis-ut-sit','Quos quis ut sit.','Et nisi natus adipisci et voluptatem sit voluptas.','Voluptas autem enim eveniet quia ipsa vero velit. Consequatur ut autem unde exercitationem sint ipsa. Et suscipit id aliquam iste culpa fuga explicabo.\n\nAutem error rerum nostrum magni et magni nobis. Laboriosam sed minus laudantium autem. Aut error sapiente eaque eos quam libero.\n\nTotam commodi culpa blanditiis laborum exercitationem. Eveniet nihil rerum rerum aut recusandae sint ut eos. Similique et ab fugit omnis velit. Rerum enim quod quaerat accusamus sunt facilis libero.','Voluptas autem enim eveniet quia ipsa vero velit. Consequatur ut autem unde exercitationem sint ipsa. Et suscipit id aliquam iste culpa fuga explicabo.\n\nAutem error rerum nostrum magni et magni nobis. Laboriosam sed minus laudantium autem. Aut error sapiente eaque eos quam libero.\n\nTotam commodi culpa blanditiis laborum exercitationem. Eveniet nihil rerum rerum aut recusandae sint ut eos. Similique et ab fugit omnis velit. Rerum enim quod quaerat accusamus sunt facilis libero.','Ipsa similique aspernatur facere eos quas.','Vel dolore voluptatem ipsum debitis neque.',0,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-08-13 13:01:38'),(17,'sit-rem-suscipit-non-voluptates-voluptatem-voluptas-sed-eaque-delectus-voluptas-in-velit-sint-neque','Sit rem suscipit non voluptates voluptatem voluptas sed eaque delectus voluptas in velit sint neque.','Omnis aliquam autem quas modi aut a placeat.','Earum nulla voluptatem sed molestiae id ratione. Asperiores et iusto nihil hic. Optio beatae explicabo aspernatur dolorem quis sed.\n\nRepellendus tenetur cum possimus sit. Nobis dolores repudiandae velit enim. Omnis sunt minus repellat tempora.\n\nMaiores veritatis aspernatur porro fugiat. Sed est quas maxime suscipit corrupti.\n\nSoluta repellendus qui sunt illo harum aut. Itaque incidunt illo qui perferendis sapiente enim voluptas. Et placeat veritatis accusamus repellat. Provident possimus molestiae laborum est.','Earum nulla voluptatem sed molestiae id ratione. Asperiores et iusto nihil hic. Optio beatae explicabo aspernatur dolorem quis sed.\n\nRepellendus tenetur cum possimus sit. Nobis dolores repudiandae velit enim. Omnis sunt minus repellat tempora.\n\nMaiores veritatis aspernatur porro fugiat. Sed est quas maxime suscipit corrupti.\n\nSoluta repellendus qui sunt illo harum aut. Itaque incidunt illo qui perferendis sapiente enim voluptas. Et placeat veritatis accusamus repellat. Provident possimus molestiae laborum est.','A corrupti dicta dolor iure magni consequatur et fugiat amet.','Molestiae quia aut expedita.',0,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-07-28 22:52:22'),(18,'vitae-fuga-quo-praesentium-sunt-voluptatem-hic-excepturi-quis-voluptatem','Vitae fuga quo praesentium sunt voluptatem hic excepturi quis voluptatem.','Quo saepe dolor corrupti deleniti rerum et.','Laudantium facilis officiis itaque voluptatem ab. Qui labore aliquam et non qui dolore. Aliquid ipsam ea deserunt pariatur totam. Distinctio quia quis aliquid ut officia. Quidem sunt autem nesciunt voluptatem aut ab perspiciatis.\n\nPariatur id suscipit numquam optio reiciendis error. Quas qui occaecati quod iusto unde a neque. Quia aperiam dignissimos quas et. Odit iure dolor laudantium non similique.\n\nAut vitae autem aperiam quo suscipit nihil deleniti. Consectetur consequatur neque tenetur. Sequi ut sed deserunt.\n\nVero recusandae voluptas eaque repellendus. Vitae repellendus laborum eos. Et eos cum reprehenderit omnis consectetur consequuntur.\n\nReiciendis quos aliquid quisquam porro. Quo et provident officiis officiis. Voluptatem totam nam laudantium debitis.\n\nEst dolorem assumenda molestias et. Suscipit quasi dolorem consequatur. Consequuntur est corrupti porro suscipit. Repellat non nam consectetur in quod perspiciatis.','Laudantium facilis officiis itaque voluptatem ab. Qui labore aliquam et non qui dolore. Aliquid ipsam ea deserunt pariatur totam. Distinctio quia quis aliquid ut officia. Quidem sunt autem nesciunt voluptatem aut ab perspiciatis.\n\nPariatur id suscipit numquam optio reiciendis error. Quas qui occaecati quod iusto unde a neque. Quia aperiam dignissimos quas et. Odit iure dolor laudantium non similique.\n\nAut vitae autem aperiam quo suscipit nihil deleniti. Consectetur consequatur neque tenetur. Sequi ut sed deserunt.\n\nVero recusandae voluptas eaque repellendus. Vitae repellendus laborum eos. Et eos cum reprehenderit omnis consectetur consequuntur.\n\nReiciendis quos aliquid quisquam porro. Quo et provident officiis officiis. Voluptatem totam nam laudantium debitis.\n\nEst dolorem assumenda molestias et. Suscipit quasi dolorem consequatur. Consequuntur est corrupti porro suscipit. Repellat non nam consectetur in quod perspiciatis.','Quae aut enim amet.','Possimus fuga dolor fugiat est recusandae.',2,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-08-04 23:59:18'),(19,'unde-ad-ut','Unde ad ut.','Ut dolore at dolorem cupiditate.','Voluptatibus id totam necessitatibus. A facere maxime laudantium placeat fugiat. Sit magni laudantium soluta qui aspernatur aut. Suscipit nesciunt voluptatum modi earum animi.\n\nUt qui sit quae. Quod libero quo magni neque enim dolores enim quisquam. Rem optio doloribus saepe est ipsa sapiente accusantium nostrum.\n\nHarum error et praesentium velit et repudiandae velit. Ex vitae et et sit enim. Non aut laborum dolores dolore qui. Nihil iure dolor eligendi eius incidunt mollitia officia. Voluptatem magni voluptatum similique qui eos libero.\n\nSed delectus molestiae debitis ut pariatur sit reprehenderit. Dolorum sint molestiae sint cum accusantium assumenda. Sint aspernatur aut quae ratione neque et repudiandae. Sapiente omnis dolores blanditiis.','Voluptatibus id totam necessitatibus. A facere maxime laudantium placeat fugiat. Sit magni laudantium soluta qui aspernatur aut. Suscipit nesciunt voluptatum modi earum animi.\n\nUt qui sit quae. Quod libero quo magni neque enim dolores enim quisquam. Rem optio doloribus saepe est ipsa sapiente accusantium nostrum.\n\nHarum error et praesentium velit et repudiandae velit. Ex vitae et et sit enim. Non aut laborum dolores dolore qui. Nihil iure dolor eligendi eius incidunt mollitia officia. Voluptatem magni voluptatum similique qui eos libero.\n\nSed delectus molestiae debitis ut pariatur sit reprehenderit. Dolorum sint molestiae sint cum accusantium assumenda. Sint aspernatur aut quae ratione neque et repudiandae. Sapiente omnis dolores blanditiis.','Possimus voluptas mollitia aut non delectus est.','Aut error aspernatur doloremque delectus id nostrum praesentium harum.',3,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-08-22 16:26:41'),(20,'tempore-magnam-voluptatem-nihil','Tempore magnam voluptatem nihil.','Voluptatem libero praesentium aut vero eum accusamus.','Quos soluta iure adipisci non. In quasi rerum quo magnam. Delectus provident eos omnis velit. Quia et voluptatum aut atque eligendi.\n\nDoloribus non beatae ex vel laudantium magni iure. Dolore dolores unde alias ea dolor vitae. Pariatur rerum vel beatae alias vel et.\n\nQuibusdam amet laborum incidunt. Sed nemo sed et earum amet voluptatem.','Quos soluta iure adipisci non. In quasi rerum quo magnam. Delectus provident eos omnis velit. Quia et voluptatum aut atque eligendi.\n\nDoloribus non beatae ex vel laudantium magni iure. Dolore dolores unde alias ea dolor vitae. Pariatur rerum vel beatae alias vel et.\n\nQuibusdam amet laborum incidunt. Sed nemo sed et earum amet voluptatem.','Quam et distinctio voluptatem et molestiae nulla aut.','Quia quidem dolore et facere sunt delectus.',3,'2017-08-24 01:27:15','2017-08-24 01:27:15','2017-08-06 16:37:52');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privacy`
--

DROP TABLE IF EXISTS `privacy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privacy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privacy`
--

LOCK TABLES `privacy` WRITE;
/*!40000 ALTER TABLE `privacy` DISABLE KEYS */;
INSERT INTO `privacy` VALUES (1,'Hyperlink','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',1,1,NULL,NULL),(2,'Schedule Appointment','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',2,1,NULL,NULL),(3,'Select Product','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',3,1,NULL,NULL),(4,'Select your customization option','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',4,1,NULL,NULL),(5,'Add to Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',5,1,NULL,NULL),(6,'My Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',6,1,NULL,NULL);
/*!40000 ALTER TABLE `privacy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promo`
--

DROP TABLE IF EXISTS `promo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promo`
--

LOCK TABLES `promo` WRITE;
/*!40000 ALTER TABLE `promo` DISABLE KEYS */;
INSERT INTO `promo` VALUES (1,'promo.jpg','Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.\n                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.',1,NULL,NULL),(2,'promo.jpg','Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.\n                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.',1,NULL,NULL),(3,'promo.jpg','Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.\n                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.',1,NULL,NULL),(4,'promo.jpg','Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.\n                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.',1,NULL,NULL);
/*!40000 ALTER TABLE `promo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotions`
--

DROP TABLE IF EXISTS `promotions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `promotions` VALUES (1,'Promotions 1','2017-08-24 01:27:15','2017-08-24 01:27:15'),(2,'Promotions 2','2017-08-24 01:27:15','2017-08-24 01:27:15'),(3,'Promotions 3','2017-08-24 01:27:15','2017-08-24 01:27:15');
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
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
INSERT INTO `roles` VALUES (1,'super-user','Super User','Fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis','2017-08-24 01:27:14','2017-08-24 01:27:14'),(2,'user-level-1','User Level 1','Nullam lacinia sem neque, dignissim euismod odio facilisis non','2017-08-24 01:27:14','2017-08-24 01:27:14'),(3,'user-level-2','User Level 2','Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna','2017-08-24 01:27:14','2017-08-24 01:27:14');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `sessions` VALUES ('ury7373899rruejejfifmrj',1,'192.168.1.12','web-kit','ury7373899rruejejfifmrj','2017-03-12 07:20:11','2017-08-24 01:27:15','2017-08-24 01:27:15'),('ury7373899rruewe334ifmrj',1,'192.168.1.12','web-kit','ury7373899rruejejfifmrj','2017-03-12 07:20:11','2017-08-24 01:27:15','2017-08-24 01:27:15');
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
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `shipping_costs` VALUES (1,'Cost 1',1000,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(2,'Cost 2',2000,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(3,'Cost 3',4000,'2017-08-24 01:27:15','2017-08-24 01:27:15');
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
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `sliders` VALUES (1,'Sliders 1','2017-08-24 01:27:15','2017-08-24 01:27:15'),(2,'Sliders 2','2017-08-24 01:27:15','2017-08-24 01:27:15'),(3,'Sliders 3','2017-08-24 01:27:15','2017-08-24 01:27:15');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriber`
--

DROP TABLE IF EXISTS `subscriber`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriber` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriber`
--

LOCK TABLES `subscriber` WRITE;
/*!40000 ALTER TABLE `subscriber` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriber` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `tags` VALUES (1,'Tag 1','Tag 1 Title','Tag 1 subtitle','Tag 1 meta description',0,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(2,'Tag 2','Tag 2 Title','Tag 2 subtitle','Tag 2 meta description',0,'2017-08-24 01:27:15','2017-08-24 01:27:15'),(3,'Tag 3','Tag 3 Title','Tag 3 subtitle','Tag 3 meta description',0,'2017-08-24 01:27:15','2017-08-24 01:27:15');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `term`
--

DROP TABLE IF EXISTS `term`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `term` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `term`
--

LOCK TABLES `term` WRITE;
/*!40000 ALTER TABLE `term` DISABLE KEYS */;
INSERT INTO `term` VALUES (1,'Hyperlink','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',1,1,NULL,NULL),(2,'Schedule Appointment','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',2,1,NULL,NULL),(3,'Select Product','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',3,1,NULL,NULL),(4,'Select your customization option','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',4,1,NULL,NULL),(5,'Add to Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',5,1,NULL,NULL),(6,'My Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',6,1,NULL,NULL);
/*!40000 ALTER TABLE `term` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `users` VALUES (1,'Admin','admin@admin.com','$2y$10$11aAJaB7ed0I1QUlLqnBoeDW9WC42mR.1YqqEnui79ExmbiJw0tQC','Su8a0uA1tm','2017-08-24 01:27:15','2017-08-24 01:27:15'),(2,'Front','front@admin.com','$2y$10$1zuUBp3fVIWsi2I1CSd8COD1tisdRRjsjI44aGmtUacA5PtE0D/yi','i75mieUrtp','2017-08-24 01:27:15','2017-08-24 01:27:15');
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

-- Dump completed on 2017-08-24 15:29:11
