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
  `title` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_hour` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reservation_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `about` VALUES (1,'THE FIRST WEST SUMATRAN AND JAPANESE FUSION RESTAURANT','West Sumatra\'s dining scene is well-known for its spiciness and the richness of its ingredients. It is served from simple \'kaki lima\' food stalls to some famous franchised restaurants across the country.\n                    West Sumatran food has becoming the Nation\'s favorite. Yet, the country has been lacking in innovative cuisine that is based on these authentic traditional recipes. Until now.\n                    Suntiang Restaurant is the first to combine authentic West Sumatran recipes in a Japanese style. It is reflected in our extensive menus, from Ayam Pop Roll to Otak Tempura Balado.\n                    Suntiang Restaurant brings West Sumatran cuisine to a new level, serving more than 50 different types of fusion menu. Our favorites are; Edamame Balado, Beef Rinds Miso Soup, Rendang Roll, Gulai Ramen, Rendang Tamago Bowl, Sizzling Beef Tongue with Green Chilli and Asam Pade Sauce. For the dessert, we bring an old recipe from our grandmothers, Laman Katan Sarikayo.\n                    Our dedicated chef with years of experience in Japanese restaurants. He combines his skill in Japanese food with hundred years recipes from our grandmothers, creating a feast to your taste buds.','Monday-Sunday: 10:00 - 22:00 WIB','Suntiang Grand Indonesia, 021-2358044\n                    Suntiang Setiabudi One, 021-5257393\n                    Suntiang Catering, 021-5260 777 / 082311999426','For interviews/photos, contact','info@suntiang.com / Mobile: (62)812 9326 0002 (Mr.Dono)','2017-09-05 18:15:22','2017-09-05 18:15:22');
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
INSERT INTO `additional_product_pivots` VALUES (1,1,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,1,2,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(3,1,3,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(4,2,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(5,2,2,'2017-09-05 18:15:21','2017-09-05 18:15:21');
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
  `session_id` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `carts` VALUES (1,'123456','2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,'7891011','2017-09-05 18:15:21','2017-09-05 18:15:21'),(3,'12131415','2017-09-05 18:15:21','2017-09-05 18:15:21'),(4,'16171819','2017-09-05 18:15:21','2017-09-05 18:15:21'),(5,'2021222324','2017-09-05 18:15:21','2017-09-05 18:15:21'),(6,'2526272829','2017-09-05 18:15:21','2017-09-05 18:15:21'),(7,'3031323334','2017-09-05 18:15:21','2017-09-05 18:15:21'),(8,'3536373839','2017-09-05 18:15:21','2017-09-05 18:15:21');
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
INSERT INTO `carts_product_pivots` VALUES (1,1,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,1,2,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(3,1,3,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(4,2,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(5,2,2,'2017-09-05 18:15:21','2017-09-05 18:15:21');
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
  `name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `categories` VALUES (3,'Sayuran','isi',1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(4,'Protein','isi',2,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(5,'Appetizier','jenis',3,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(6,'Soup','jenis',4,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(7,'Salad','jenis',0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(8,'Maincorse','jenis',0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(9,'Condiment','jenis',0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(10,'Dessert','jenis',0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(11,'Sunda','region',0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(12,'Jawa','region',0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(13,'Sumatra','region',0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(14,'Italia','region',0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(15,'Eropa','region',0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(16,'Asia','region',0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(17,'Arab','region',0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(18,'Karbohidrat','isi',0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(19,'Lauk','isi',0,'2017-09-05 18:15:21','2017-09-05 18:15:21');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_hows`
--

DROP TABLE IF EXISTS `category_hows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_hows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_hows`
--

LOCK TABLES `category_hows` WRITE;
/*!40000 ALTER TABLE `category_hows` DISABLE KEYS */;
INSERT INTO `category_hows` VALUES (1,'Daily meal','Nope is just general',1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,'Catering','Nope is just product',1,'2017-09-05 18:15:22','2017-09-05 18:15:22');
/*!40000 ALTER TABLE `category_hows` ENABLE KEYS */;
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
INSERT INTO `category_item_pivots` VALUES (1,1,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,2,2,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(3,3,3,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(4,4,4,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(5,5,19,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(6,6,18,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(7,7,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(8,8,2,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(9,9,3,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(10,10,4,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(11,11,5,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(12,12,6,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(13,13,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(14,14,2,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(15,15,3,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(16,16,4,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(17,17,5,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(18,18,6,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(19,19,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(20,20,2,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(21,21,3,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(22,22,4,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(23,23,5,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(24,24,6,'2017-09-05 18:15:22','2017-09-05 18:15:22');
/*!40000 ALTER TABLE `category_item_pivots` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_infos`
--

DROP TABLE IF EXISTS `contact_infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_infos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_infos`
--

LOCK TABLES `contact_infos` WRITE;
/*!40000 ALTER TABLE `contact_infos` DISABLE KEYS */;
INSERT INTO `contact_infos` VALUES (1,'Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.\n                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.','0867676666',1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,'Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.\n                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.','08778888666',1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(3,'Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.\n                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.','0889899886',1,'2017-09-05 18:15:22','2017-09-05 18:15:22');
/*!40000 ALTER TABLE `contact_infos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_blocked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_messages`
--

LOCK TABLES `contact_messages` WRITE;
/*!40000 ALTER TABLE `contact_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_messages` ENABLE KEYS */;
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
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coupons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Dumping data for table `coupons`
--

LOCK TABLES `coupons` WRITE;
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;
/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `couriers`
--

DROP TABLE IF EXISTS `couriers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `couriers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `couriers` VALUES (1,'Jono','jono.jpg','62344434733','jono@gmail.com','2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,'Juki','juki.jpg','62344884733','juki@gmail.com','2017-09-05 18:15:21','2017-09-05 18:15:21'),(3,'Jane','jane.jpg','62344374633','jane@gmail.com','2017-09-05 18:15:21','2017-09-05 18:15:21');
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
  `delivery_receiver` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_receiver_phone` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_address` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `deliveries` VALUES (1,1,1,123456,1,1,'dann abarmov','627383930993','jl jali-jali jogjakarta','2017-03-23','2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,2,1,123456,1,2,'dann abarmov','627383930993','jl jali-jali jogjakarta','2017-03-23','2017-09-05 18:15:21','2017-09-05 18:15:21'),(3,3,1,123456,1,1,'dann abarmov','627383930993','jl jali-jali jogjakarta','2017-03-23','2017-09-05 18:15:21','2017-09-05 18:15:21');
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
INSERT INTO `delivery_trackings` VALUES (1,1,1,1,0,1,'Position position','Additional note','2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,1,1,1,1,1,'Position position','Additional note','2017-09-05 18:15:21','2017-09-05 18:15:21'),(3,1,1,1,2,1,'Position position','Additional note','2017-09-05 18:15:21','2017-09-05 18:15:21');
/*!40000 ALTER TABLE `delivery_trackings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disclaimers`
--

DROP TABLE IF EXISTS `disclaimers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disclaimers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disclaimers`
--

LOCK TABLES `disclaimers` WRITE;
/*!40000 ALTER TABLE `disclaimers` DISABLE KEYS */;
INSERT INTO `disclaimers` VALUES (1,'Hyperlink','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',1,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,'Schedule Appointment','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',2,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(3,'Select Product','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',3,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(4,'Select your customization option','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',4,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(5,'Add to Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',5,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(6,'My Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',6,1,'2017-09-05 18:15:22','2017-09-05 18:15:22');
/*!40000 ALTER TABLE `disclaimers` ENABLE KEYS */;
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
  `question` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `faq_categories`
--

DROP TABLE IF EXISTS `faq_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq_categories`
--

LOCK TABLES `faq_categories` WRITE;
/*!40000 ALTER TABLE `faq_categories` DISABLE KEYS */;
INSERT INTO `faq_categories` VALUES (1,'General Question','Nope is just general',1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,'Product','Nope is just product',1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(3,'Ordering','Nope is just order',1,'2017-09-05 18:15:22','2017-09-05 18:15:22');
/*!40000 ALTER TABLE `faq_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `how_to_orders`
--

DROP TABLE IF EXISTS `how_to_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `how_to_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `step` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `how_to_orders`
--

LOCK TABLES `how_to_orders` WRITE;
/*!40000 ALTER TABLE `how_to_orders` DISABLE KEYS */;
INSERT INTO `how_to_orders` VALUES (1,1,'Sign In/ Sign up','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',1,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,1,'Schedule Appointment','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',2,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(3,1,'Select Product','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',3,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(4,1,'Select your customization option','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',4,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(5,1,'Add to Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',5,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(6,1,'My Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',6,1,'2017-09-05 18:15:22','2017-09-05 18:15:22');
/*!40000 ALTER TABLE `how_to_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_images`
--

DROP TABLE IF EXISTS `item_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `item_images` VALUES (1,'food.png',1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,'food.png',2,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(3,'food.png',3,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(4,'food.png',4,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(5,'food.png',5,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(6,'food.png',6,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(7,'food.png',7,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(8,'food.png',8,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(9,'food.png',9,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(10,'food.png',10,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(11,'food.png',11,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(12,'food.png',12,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(13,'food.png',13,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(14,'food.png',14,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(15,'food.png',15,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(16,'food.png',16,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(17,'food.png',17,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(18,'food.png',18,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(19,'food.png',19,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(20,'food.png',20,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(21,'food.png',21,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(22,'food.png',22,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(23,'food.png',23,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(24,'food.png',24,'2017-09-05 18:15:21','2017-09-05 18:15:21');
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
  `type` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `convertion` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
INSERT INTO `items` VALUES (1,'Lorem ipsum dolor sit ametqw','package',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,1,NULL,0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,'Consectetur adipiscing eliter','package',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,1,NULL,0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(3,'Fusce nec risus non ligula auctorqa','package',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,1,NULL,0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(4,'Lorem ipsum dolor sit amet3','package',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,1,NULL,0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(5,'Consectetur adipiscing elit3','package',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,1,NULL,0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(6,'Fusce nec risus non ligula auctor3','package',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,1,NULL,0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(7,'Lorem ipsum dolor sit amet4','package',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,1,NULL,0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(8,'Consectetur adipiscing elitera','package',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(9,'Fusce nec risus non ligula auctorwqx','item',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(10,'Lorem ipsum dolor sit ametty','item',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(11,'Consectetur adipiscing elithg','item',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(12,'Fusce nec risus non ligula auctorjh','item',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(13,'Lorem ipsum dolor sit ametdf','item',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(14,'Consectetur adipiscing elitjhj','item',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(15,'Fusce nec risus non ligula auctorjnc','item',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(16,'Lorem ipsum dolor sit ametlp','item',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(17,'Consectetur adipiscing elituy','item',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(18,'Fusce nec risus non ligula auctoryh','item',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(19,'Lorem ipsum dolor sit ametmn','item',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(20,'Consectetur adipiscing elitvg','item',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(21,'Fusce nec risus non ligula auctortr','item',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(22,'Lorem ipsum dolor sit ametdf','item',NULL,'Morbi blandit, neque eget fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(23,'Consectetur adipiscing elithd','item',NULL,'Nullam lacinia sem neque, dignissim euismod odio facilisis non',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(24,'Fusce nec risus non ligula auctorcv','item',NULL,'Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna',NULL,12000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2017-09-05 18:15:21','2017-09-05 18:15:21');
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
  `queue` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_number` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_name` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_card_number` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_card_name` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
INSERT INTO `members` VALUES (1,2,'Juki Suprime','juki@gmail.com','6283793839','03928290202','Juki Suprime','Bank BNI','02233433','Juki Suprime','1998-02-23',1,'Jala kolang-kolang',122,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,3,'Juki Suprime','juki168@gmail.com','6283793839','03928290202','Juki Suprime','Bank BNI','02233433','Juki Suprime','1998-02-23',1,'Jala kolang-kolang',122,1,'2017-09-05 18:15:21','2017-09-05 18:15:21');
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
  `migration` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4534 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (4490,'2014_10_12_000000_create_users_table',1),(4491,'2017_02_28_024723_create_posts_table',1),(4492,'2017_02_28_043845_create_tags_table',1),(4493,'2017_02_28_043932_create_post_tag_pivot',1),(4494,'2017_02_28_090033_restructure_post_table',1),(4495,'2017_03_03_031532_create_jobs_table',1),(4496,'2017_03_03_065305_create_items_table',1),(4497,'2017_03_08_020505_categories',1),(4498,'2017_03_08_023143_entrust_setup_tables',1),(4499,'2017_03_09_043303_create_member_table',1),(4500,'2017_03_09_063047_create_orders_table',1),(4501,'2017_03_09_071313_create_payments_table',1),(4502,'2017_03_09_073249_create_deliveries_table',1),(4503,'2017_03_09_074453_create_order_details_table',1),(4504,'2017_03_10_021532_create_slider_table',1),(4505,'2017_03_10_042621_create_cart_product_pivot_table',1),(4506,'2017_03_10_042621_create_carts_table',1),(4507,'2017_03_10_043217_create_delivery_trackings_table',1),(4508,'2017_03_10_043505_create_shipping_cost_table',1),(4509,'2017_03_10_074712_create_additonal_product_pivot_table',1),(4510,'2017_03_13_023247_create_sessions_table',1),(4511,'2017_03_14_022036_create_item_images_table',1),(4512,'2017_03_22_092606_couriers_table',1),(4513,'2017_03_25_045756_create_pages_table',1),(4514,'2017_03_25_045810_create_page_fields_table',1),(4515,'2017_03_25_050154_create_page_images_table',1),(4516,'2017_04_11_033556_create_category_item_pivot',1),(4517,'2017_08_21_070649_table_about',1),(4518,'2017_08_22_031821_faq_category',1),(4519,'2017_08_22_031827_faq',1),(4520,'2017_08_22_042638_promo',1),(4521,'2017_08_22_061930_howtoorder_category',1),(4522,'2017_08_22_061945_howtoorder',1),(4523,'2017_08_22_073325_payment_confirmation',1),(4524,'2017_08_22_074217_contact_info',1),(4525,'2017_08_22_074224_contact_message',1),(4526,'2017_08_22_075559_subsriber',1),(4527,'2017_08_22_080111_desclaimer',1),(4528,'2017_08_22_080322_privacy',1),(4529,'2017_08_22_080449_term',1),(4530,'2017_08_23_022347_coupon',1),(4531,'2017_08_23_043731_item_pivot',1),(4532,'2017_08_23_065836_coupen_item_pivot',1),(4533,'2017_09_04_070615_selected_categories',1);
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
INSERT INTO `order_details` VALUES (1,1,1,200,20000,0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,2,1,10,30000,0,'2017-09-05 18:15:21','2017-09-05 18:15:21');
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
INSERT INTO `orders` VALUES (1,1,1,1,20000,0,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,1,2,2,26000,0,'2017-09-05 18:15:21','2017-09-05 18:15:21');
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
  `field_name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `page_fields` VALUES (1,1,'phone','6289373838',1,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,1,'email','contact@me.com',2,1,'2017-09-05 18:15:22','2017-09-05 18:15:22');
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
  `name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `page_images` VALUES (1,1,'image1.jpg','2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,1,'image2.jpg','2017-09-05 18:15:22','2017-09-05 18:15:22');
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
  `name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `pages` VALUES (1,'About Us','about-us',1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,'FAQ','faq',1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(3,'How To Order','how-to-order',1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(4,'Contact Us','contact-us',1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(5,'Desclaimer','desclaimer',1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(6,'Privacy','privacy',1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(7,'Term Of Use','privacy-policy',1,'2017-09-05 18:15:22','2017-09-05 18:15:22');
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
  `image_notice` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `payments` VALUES (1,1,26000,1,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,2,26000,1,1,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(3,3,26000,1,1,'2017-09-05 18:15:21','2017-09-05 18:15:21');
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
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(71,1),(72,1),(73,1),(74,1),(75,1),(76,1),(77,1),(78,1),(79,1),(80,1),(81,1),(82,1),(83,1),(84,1),(85,1),(86,1),(87,1),(88,1),(89,1),(90,1),(91,1),(92,1),(93,1),(94,1),(95,1),(96,1),(97,1),(98,1),(99,1),(100,1),(101,1),(102,1),(103,1),(104,1),(105,1),(106,1),(107,1),(108,1),(109,1),(110,1),(111,1),(112,1),(113,1),(114,1),(115,1),(116,1),(117,1),(118,1),(119,1),(120,1),(121,1),(122,1),(123,1),(124,1),(125,1),(126,1),(127,1),(128,1),(129,1),(130,1),(131,1),(132,1),(133,1),(134,1),(135,1),(136,1),(137,1),(138,1),(139,1),(140,1),(141,1),(142,1),(143,1),(144,1),(145,1),(146,1),(147,1),(148,1),(149,1),(150,1),(151,1),(152,1),(153,1),(154,1),(155,1),(156,1),(157,1),(158,1),(159,1),(160,1),(161,1),(162,1),(163,1),(164,1),(165,1),(166,1),(167,1),(168,1),(169,1),(170,1),(171,1),(172,1),(1,2),(2,2),(3,2),(4,2),(5,2),(9,2),(10,2),(11,2),(12,2),(1,3),(2,3);
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
  `name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'role-list','Display Role Listing','See only Listing Of Role','2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,'role-create','Create Role','Create New Role','2017-09-05 18:15:21','2017-09-05 18:15:21'),(3,'role-edit','Edit Role','Edit Role','2017-09-05 18:15:21','2017-09-05 18:15:21'),(4,'role-delete','Delete Role','Delete Role','2017-09-05 18:15:21','2017-09-05 18:15:21'),(5,'items-list','Display Item Listing','See only Listing Of Item','2017-09-05 18:15:21','2017-09-05 18:15:21'),(6,'items-create','Create Item','Create New Item','2017-09-05 18:15:21','2017-09-05 18:15:21'),(7,'items-edit','Edit Item','Edit Item','2017-09-05 18:15:21','2017-09-05 18:15:21'),(8,'items-delete','Delete Item','Delete Item','2017-09-05 18:15:21','2017-09-05 18:15:21'),(9,'carts-list','Display carts Listing','See only Listing Of Item','2017-09-05 18:15:21','2017-09-05 18:15:21'),(10,'carts-create','Create carts','Create New carts','2017-09-05 18:15:21','2017-09-05 18:15:21'),(11,'carts-edit','Edit carts','Edit carts','2017-09-05 18:15:21','2017-09-05 18:15:21'),(12,'carts-delete','Delete carts','Delete carts','2017-09-05 18:15:21','2017-09-05 18:15:21'),(13,'categories-list','Display categories Listing','See only Listing Of Item','2017-09-05 18:15:21','2017-09-05 18:15:21'),(14,'categories-create','Create categories','Create New categories','2017-09-05 18:15:21','2017-09-05 18:15:21'),(15,'categories-edit','Edit categories','Edit categories','2017-09-05 18:15:21','2017-09-05 18:15:21'),(16,'categories-delete','Delete categories','Delete categories','2017-09-05 18:15:21','2017-09-05 18:15:21'),(17,'couriers-list','Display couriers Listing','See only Listing Of couriers','2017-09-05 18:15:21','2017-09-05 18:15:21'),(18,'couriers-create','Create couriers','Create New couriers','2017-09-05 18:15:21','2017-09-05 18:15:21'),(19,'couriers-edit','Edit couriers','Edit couriers','2017-09-05 18:15:21','2017-09-05 18:15:21'),(20,'couriers-delete','Delete couriers','Delete couriers','2017-09-05 18:15:21','2017-09-05 18:15:21'),(21,'deliveries-list','Display deliveries Listing','See only Listing Of deliveries','2017-09-05 18:15:21','2017-09-05 18:15:21'),(22,'deliveries-create','Create deliveries','Create New deliveries','2017-09-05 18:15:21','2017-09-05 18:15:21'),(23,'deliveries-edit','Edit deliveries','Edit deliveries','2017-09-05 18:15:21','2017-09-05 18:15:21'),(24,'deliveries-delete','Delete deliveries','Delete deliveries','2017-09-05 18:15:21','2017-09-05 18:15:21'),(25,'delivery_trackings-list','Display delivery_trackings Listing','See only Listing Of delivery_trackings','2017-09-05 18:15:21','2017-09-05 18:15:21'),(26,'delivery_trackings-create','Create delivery_trackings','Create New delivery_trackings','2017-09-05 18:15:21','2017-09-05 18:15:21'),(27,'delivery_trackings-edit','Edit delivery_trackings','Edit delivery_trackings','2017-09-05 18:15:21','2017-09-05 18:15:21'),(28,'delivery_trackings-delete','Delete delivery_trackings','Delete delivery_trackings','2017-09-05 18:15:21','2017-09-05 18:15:21'),(29,'item_images-list','Display item_images Listing','See only Listing Of item_images','2017-09-05 18:15:21','2017-09-05 18:15:21'),(30,'item_images-create','Create item_images','Create New item_images','2017-09-05 18:15:21','2017-09-05 18:15:21'),(31,'item_images-edit','Edit item_images','Edit item_images','2017-09-05 18:15:21','2017-09-05 18:15:21'),(32,'item_images-delete','Delete item_images','Delete item_images','2017-09-05 18:15:21','2017-09-05 18:15:21'),(33,'members-list','Display members Listing','See only Listing Of members','2017-09-05 18:15:21','2017-09-05 18:15:21'),(34,'members-create','Create members','Create New members','2017-09-05 18:15:21','2017-09-05 18:15:21'),(35,'members-edit','Edit members','Edit members','2017-09-05 18:15:21','2017-09-05 18:15:21'),(36,'members-delete','Delete members','Delete members','2017-09-05 18:15:21','2017-09-05 18:15:21'),(37,'order_details-list','Display order_details Listing','See only Listing Of order_details','2017-09-05 18:15:21','2017-09-05 18:15:21'),(38,'order_details-create','Create order_details','Create New order_details','2017-09-05 18:15:21','2017-09-05 18:15:21'),(39,'order_details-edit','Edit order_details','Edit order_details','2017-09-05 18:15:21','2017-09-05 18:15:21'),(40,'order_details-delete','Delete order_details','Delete order_details','2017-09-05 18:15:21','2017-09-05 18:15:21'),(41,'orders-list','Display orders Listing','See only Listing Of orders','2017-09-05 18:15:21','2017-09-05 18:15:21'),(42,'orders-create','Create orders','Create New orders','2017-09-05 18:15:21','2017-09-05 18:15:21'),(43,'orders-edit','Edit orders','Edit orders','2017-09-05 18:15:21','2017-09-05 18:15:21'),(44,'orders-delete','Delete orders','Delete orders','2017-09-05 18:15:21','2017-09-05 18:15:21'),(45,'page_fields-list','Display page_fields Listing','See only Listing Of page_fields','2017-09-05 18:15:21','2017-09-05 18:15:21'),(46,'page_fields-create','Create page_fields','Create New page_fields','2017-09-05 18:15:21','2017-09-05 18:15:21'),(47,'page_fields-edit','Edit page_fields','Edit page_fields','2017-09-05 18:15:21','2017-09-05 18:15:21'),(48,'page_fields-delete','Delete page_fields','Delete page_fields','2017-09-05 18:15:21','2017-09-05 18:15:21'),(49,'page_images-list','Display page_images Listing','See only Listing Of page_images','2017-09-05 18:15:21','2017-09-05 18:15:21'),(50,'page_images-create','Create page_images','Create New page_images','2017-09-05 18:15:21','2017-09-05 18:15:21'),(51,'page_images-edit','Edit page_images','Edit page_images','2017-09-05 18:15:21','2017-09-05 18:15:21'),(52,'page_images-delete','Delete page_images','Delete page_images','2017-09-05 18:15:21','2017-09-05 18:15:21'),(53,'pages-list','Display pages Listing','See only Listing Of pages','2017-09-05 18:15:21','2017-09-05 18:15:21'),(54,'pages-create','Create pages','Create New pages','2017-09-05 18:15:21','2017-09-05 18:15:21'),(55,'pages-edit','Edit pages','Edit pages','2017-09-05 18:15:21','2017-09-05 18:15:21'),(56,'pages-delete','Delete pages','Delete pages','2017-09-05 18:15:21','2017-09-05 18:15:21'),(57,'payments-list','Display payments Listing','See only Listing Of payments','2017-09-05 18:15:21','2017-09-05 18:15:21'),(58,'payments-create','Create payments','Create New payments','2017-09-05 18:15:21','2017-09-05 18:15:21'),(59,'payments-edit','Edit payments','Edit payments','2017-09-05 18:15:21','2017-09-05 18:15:21'),(60,'payments-delete','Delete payments','Delete payments','2017-09-05 18:15:21','2017-09-05 18:15:21'),(61,'permissions-list','Display permissions Listing','See only Listing Of permissions','2017-09-05 18:15:21','2017-09-05 18:15:21'),(62,'permissions-create','Create permissions','Create New permissions','2017-09-05 18:15:22','2017-09-05 18:15:22'),(63,'permissions-edit','Edit permissions','Edit permissions','2017-09-05 18:15:22','2017-09-05 18:15:22'),(64,'permissions-delete','Delete permissions','Delete permissions','2017-09-05 18:15:22','2017-09-05 18:15:22'),(65,'product_images-list','Display product_images Listing','See only Listing Of product_images','2017-09-05 18:15:22','2017-09-05 18:15:22'),(66,'product_images-create','Create product_images','Create New product_images','2017-09-05 18:15:22','2017-09-05 18:15:22'),(67,'product_images-edit','Edit product_images','Edit product_images','2017-09-05 18:15:22','2017-09-05 18:15:22'),(68,'product_images-delete','Delete product_images','Delete product_images','2017-09-05 18:15:22','2017-09-05 18:15:22'),(69,'products-list','Display products Listing','See only Listing Of products','2017-09-05 18:15:22','2017-09-05 18:15:22'),(70,'products-create','Create products','Create New products','2017-09-05 18:15:22','2017-09-05 18:15:22'),(71,'products-edit','Edit products','Edit products','2017-09-05 18:15:22','2017-09-05 18:15:22'),(72,'products-delete','Delete products','Delete products','2017-09-05 18:15:22','2017-09-05 18:15:22'),(73,'promotions-list','Display promotions Listing','See only Listing Of promotions','2017-09-05 18:15:22','2017-09-05 18:15:22'),(74,'promotions-create','Create promotions','Create New promotions','2017-09-05 18:15:22','2017-09-05 18:15:22'),(75,'promotions-edit','Edit promotions','Edit promotions','2017-09-05 18:15:22','2017-09-05 18:15:22'),(76,'promotions-delete','Delete promotions','Delete promotions','2017-09-05 18:15:22','2017-09-05 18:15:22'),(77,'sessions-list','Display sessions Listing','See only Listing Of sessions','2017-09-05 18:15:22','2017-09-05 18:15:22'),(78,'sessions-create','Create sessions','Create New sessions','2017-09-05 18:15:22','2017-09-05 18:15:22'),(79,'sessions-edit','Edit sessions','Edit sessions','2017-09-05 18:15:22','2017-09-05 18:15:22'),(80,'sessions-delete','Delete sessions','Delete sessions','2017-09-05 18:15:22','2017-09-05 18:15:22'),(81,'shipping_costs-list','Display shipping_costs Listing','See only Listing Of shipping_costs','2017-09-05 18:15:22','2017-09-05 18:15:22'),(82,'shipping_costs-create','Create shipping_costs','Create New shipping_costs','2017-09-05 18:15:22','2017-09-05 18:15:22'),(83,'shipping_costs-edit','Edit shipping_costs','Edit shipping_costs','2017-09-05 18:15:22','2017-09-05 18:15:22'),(84,'shipping_costs-delete','Delete shipping_costs','Delete shipping_costs','2017-09-05 18:15:22','2017-09-05 18:15:22'),(85,'sliders-list','Display sliders Listing','See only Listing Of sliders','2017-09-05 18:15:22','2017-09-05 18:15:22'),(86,'sliders-create','Create sliders','Create New sliders','2017-09-05 18:15:22','2017-09-05 18:15:22'),(87,'sliders-edit','Edit sliders','Edit sliders','2017-09-05 18:15:22','2017-09-05 18:15:22'),(88,'sliders-delete','Delete sliders','Delete sliders','2017-09-05 18:15:22','2017-09-05 18:15:22'),(89,'tag-list','Display tag Listing','See only Listing Of tag','2017-09-05 18:15:22','2017-09-05 18:15:22'),(90,'tag-create','Create tag','Create New tag','2017-09-05 18:15:22','2017-09-05 18:15:22'),(91,'tag-edit','Edit tag','Edit tag','2017-09-05 18:15:22','2017-09-05 18:15:22'),(92,'tag-delete','Delete tag','Delete tag','2017-09-05 18:15:22','2017-09-05 18:15:22'),(93,'upload-list','Display tag upload-list','See only upload-list Of tag','2017-09-05 18:15:22','2017-09-05 18:15:22'),(94,'upload-file','Create upload-file','Create New upload-file','2017-09-05 18:15:22','2017-09-05 18:15:22'),(95,'upload-folder','create upload-folder','create upload-folder','2017-09-05 18:15:22','2017-09-05 18:15:22'),(96,'upload-deleteFolder','Delete upload-deleteFolder','Delete upload-deleteFolder','2017-09-05 18:15:22','2017-09-05 18:15:22'),(97,'upload-deleteFile','Delete upload-deleteFile','Delete upload-deleteFile','2017-09-05 18:15:22','2017-09-05 18:15:22'),(98,'post-list','Display post Listing','See only Listing Of post','2017-09-05 18:15:22','2017-09-05 18:15:22'),(99,'post-create','Create post','Create New post','2017-09-05 18:15:22','2017-09-05 18:15:22'),(100,'post-edit','Edit post','Edit post','2017-09-05 18:15:22','2017-09-05 18:15:22'),(101,'post-delete','Delete post','Delete post','2017-09-05 18:15:22','2017-09-05 18:15:22'),(102,'users-list','Display users Listing','See only Listing Of users','2017-09-05 18:15:22','2017-09-05 18:15:22'),(103,'users-create','Create users','Create New users','2017-09-05 18:15:22','2017-09-05 18:15:22'),(104,'users-edit','Edit users','Edit users','2017-09-05 18:15:22','2017-09-05 18:15:22'),(105,'users-delete','Delete users','Delete users','2017-09-05 18:15:22','2017-09-05 18:15:22'),(106,'package-list','Display package Listing','See only Listing Of package','2017-09-05 18:15:22','2017-09-05 18:15:22'),(107,'package-create','Create package','Create New package','2017-09-05 18:15:22','2017-09-05 18:15:22'),(108,'package-edit','Edit package','Edit package','2017-09-05 18:15:22','2017-09-05 18:15:22'),(109,'package-delete','Delete package','Delete package','2017-09-05 18:15:22','2017-09-05 18:15:22'),(110,'about-list','Display about Listing','See only Listing Of package','2017-09-05 18:15:22','2017-09-05 18:15:22'),(111,'about-edit','about edit','about edit','2017-09-05 18:15:22','2017-09-05 18:15:22'),(112,'about-update','about update','about update','2017-09-05 18:15:22','2017-09-05 18:15:22'),(113,'faq-list','FAQ list','FAQ list','2017-09-05 18:15:22','2017-09-05 18:15:22'),(114,'faq-edit','FAQ Edit','FAQ Edit','2017-09-05 18:15:22','2017-09-05 18:15:22'),(115,'faq-update','FAQ Update','FAQ Update','2017-09-05 18:15:22','2017-09-05 18:15:22'),(116,'faq-create','FAQ create','FAQ create','2017-09-05 18:15:22','2017-09-05 18:15:22'),(117,'faq-store','FAQ store','FAQ store','2017-09-05 18:15:22','2017-09-05 18:15:22'),(118,'faq-delete','FAQ delete','FAQ delete','2017-09-05 18:15:22','2017-09-05 18:15:22'),(119,'faq_category-list','Display faq_category Listing','See only Listing Of faq_category','2017-09-05 18:15:22','2017-09-05 18:15:22'),(120,'faq_category-create','Create faq_category','Create New faq_category','2017-09-05 18:15:22','2017-09-05 18:15:22'),(121,'faq_category-edit','Edit faq_category','Edit faq_category','2017-09-05 18:15:22','2017-09-05 18:15:22'),(122,'faq_category-delete','Delete faq_category','Delete faq_category','2017-09-05 18:15:22','2017-09-05 18:15:22'),(123,'promo-list','Display promo Listing','See only Listing Of promo','2017-09-05 18:15:22','2017-09-05 18:15:22'),(124,'promo-create','Create promo','Create New promo','2017-09-05 18:15:22','2017-09-05 18:15:22'),(125,'promo-edit','Edit promo','Edit promo','2017-09-05 18:15:22','2017-09-05 18:15:22'),(126,'promo-delete','Delete promo','Delete promo','2017-09-05 18:15:22','2017-09-05 18:15:22'),(127,'how_to_order-list','Display how_to_order Listing','See only Listing Of how_to_order','2017-09-05 18:15:22','2017-09-05 18:15:22'),(128,'how_to_order-create','Create how_to_order','Create New how_to_order','2017-09-05 18:15:22','2017-09-05 18:15:22'),(129,'how_to_order-edit','Edit how_to_order','Edit how_to_order','2017-09-05 18:15:22','2017-09-05 18:15:22'),(130,'how_to_order-delete','Delete how_to_order','Delete how_to_order','2017-09-05 18:15:22','2017-09-05 18:15:22'),(131,'contact_info-list','Display contact_info Listing','See only Listing Of contact_info','2017-09-05 18:15:22','2017-09-05 18:15:22'),(132,'contact_info-create','Create contact_info','Create New contact_info','2017-09-05 18:15:22','2017-09-05 18:15:22'),(133,'contact_info-edit','Edit contact_info','Edit contact_info','2017-09-05 18:15:22','2017-09-05 18:15:22'),(134,'contact_info-delete','Delete contact_info','Delete contact_info','2017-09-05 18:15:22','2017-09-05 18:15:22'),(135,'contact_message-list','Display contact_message Listing','See only Listing Of contact_message','2017-09-05 18:15:22','2017-09-05 18:15:22'),(136,'contact_message-edit','Edit contact_message','Edit contact_message','2017-09-05 18:15:22','2017-09-05 18:15:22'),(137,'contact_message-delete','Delete contact_message','Delete contact_message','2017-09-05 18:15:22','2017-09-05 18:15:22'),(138,'disclaimer-list','Display disclaimer Listing','See only Listing Of disclaimer','2017-09-05 18:15:22','2017-09-05 18:15:22'),(139,'disclaimer-create','Create disclaimer','Create New disclaimer','2017-09-05 18:15:22','2017-09-05 18:15:22'),(140,'disclaimer-edit','Edit disclaimer','Edit disclaimer','2017-09-05 18:15:22','2017-09-05 18:15:22'),(141,'disclaimer-delete','Delete disclaimer','Delete disclaimer','2017-09-05 18:15:22','2017-09-05 18:15:22'),(142,'term-list','Display term Listing','See only Listing Of term','2017-09-05 18:15:22','2017-09-05 18:15:22'),(143,'term-create','Create term','Create New term','2017-09-05 18:15:22','2017-09-05 18:15:22'),(144,'term-edit','Edit term','Edit term','2017-09-05 18:15:22','2017-09-05 18:15:22'),(145,'term-delete','Delete term','Delete term','2017-09-05 18:15:22','2017-09-05 18:15:22'),(146,'privacy-list','Display privacy Listing','See only Listing Of privacy','2017-09-05 18:15:22','2017-09-05 18:15:22'),(147,'privacy-create','Create privacy','Create New privacy','2017-09-05 18:15:22','2017-09-05 18:15:22'),(148,'privacy-edit','Edit privacy','Edit privacy','2017-09-05 18:15:22','2017-09-05 18:15:22'),(149,'privacy-delete','Delete privacy','Delete privacy','2017-09-05 18:15:22','2017-09-05 18:15:22'),(150,'coupon-list','Display coupon Listing','See only Listing Of coupon','2017-09-05 18:15:22','2017-09-05 18:15:22'),(151,'coupon-create','Create coupon','Create New coupon','2017-09-05 18:15:22','2017-09-05 18:15:22'),(152,'coupon-edit','Edit coupon','Edit coupon','2017-09-05 18:15:22','2017-09-05 18:15:22'),(153,'coupon-delete','Delete coupon','Delete coupon','2017-09-05 18:15:22','2017-09-05 18:15:22'),(154,'contact_message-create','Create contact_message','Create contact_message','2017-09-05 18:15:22','2017-09-05 18:15:22'),(155,'approve-list','Approvement List','Approvement List','2017-09-05 18:15:22','2017-09-05 18:15:22'),(156,'approve-update','Approve Item','Approve Item','2017-09-05 18:15:22','2017-09-05 18:15:22'),(157,'region-list','Display region Listing','See only Listing Of region','2017-09-05 18:15:22','2017-09-05 18:15:22'),(158,'region-create','Create region','Create New region','2017-09-05 18:15:22','2017-09-05 18:15:22'),(159,'region-edit','Edit region','Edit region','2017-09-05 18:15:22','2017-09-05 18:15:22'),(160,'region-delete','Delete region','Delete region','2017-09-05 18:15:22','2017-09-05 18:15:22'),(161,'selected_category-list','Display selected_category Listing','See only Listing Of selected_category','2017-09-05 18:15:22','2017-09-05 18:15:22'),(162,'selected_category-create','Create selected_category','Create New selected_category','2017-09-05 18:15:22','2017-09-05 18:15:22'),(163,'selected_category-edit','Edit selected_category','Edit selected_category','2017-09-05 18:15:22','2017-09-05 18:15:22'),(164,'selected_category-delete','Delete selected_category','Delete selected_category','2017-09-05 18:15:22','2017-09-05 18:15:22'),(165,'categoryhow-list','Display categoryhow Listing','See only Listing Of categoryhow','2017-09-05 18:15:22','2017-09-05 18:15:22'),(166,'categoryhow-create','Create categoryhow','Create New categoryhow','2017-09-05 18:15:22','2017-09-05 18:15:22'),(167,'categoryhow-edit','Edit categoryhow','Edit categoryhow','2017-09-05 18:15:22','2017-09-05 18:15:22'),(168,'categoryhow-delete','Delete categoryhow','Delete categoryhow','2017-09-05 18:15:22','2017-09-05 18:15:22'),(169,'subscriber-list','Display subscriber Listing','See only Listing Of subscriber','2017-09-05 18:15:22','2017-09-05 18:15:22'),(170,'subscriber-create','Create subscriber','Create New subscriber','2017-09-05 18:15:22','2017-09-05 18:15:22'),(171,'subscriber-edit','Edit subscriber','Edit subscriber','2017-09-05 18:15:22','2017-09-05 18:15:22'),(172,'subscriber-delete','Delete subscriber','Delete subscriber','2017-09-05 18:15:22','2017-09-05 18:15:22');
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
  `slug` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_raw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_html` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_image` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `posts` VALUES (1,'natus-quo-aut-voluptatem','Natus quo aut voluptatem.','Esse natus iure quo modi voluptatibus iusto est itaque accusantium.','Explicabo magni sed possimus quo sunt fugit. Aliquam ut atque amet. Quisquam enim quas harum facere eos velit est. Qui omnis expedita mollitia officiis est sed ducimus.\n\nLibero dignissimos voluptas labore labore ut ut. Odio cumque rem libero dolores qui sunt. Veritatis repellat repudiandae eum eos nostrum et. Sapiente animi esse recusandae aut.\n\nPerferendis deleniti aut voluptates est pariatur placeat. Enim assumenda facere quis ex et. Quae rerum quae cumque maiores impedit. Provident nobis ut iure.\n\nQuia voluptatem itaque ducimus iure ad. Laborum illum quo quos in aliquid. Veritatis velit facilis odio et. Assumenda doloremque vitae ea.','Explicabo magni sed possimus quo sunt fugit. Aliquam ut atque amet. Quisquam enim quas harum facere eos velit est. Qui omnis expedita mollitia officiis est sed ducimus.\n\nLibero dignissimos voluptas labore labore ut ut. Odio cumque rem libero dolores qui sunt. Veritatis repellat repudiandae eum eos nostrum et. Sapiente animi esse recusandae aut.\n\nPerferendis deleniti aut voluptates est pariatur placeat. Enim assumenda facere quis ex et. Quae rerum quae cumque maiores impedit. Provident nobis ut iure.\n\nQuia voluptatem itaque ducimus iure ad. Laborum illum quo quos in aliquid. Veritatis velit facilis odio et. Assumenda doloremque vitae ea.','Eaque aspernatur architecto ut odio.','Dolorem eum ab quo.',0,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-28 19:04:15'),(2,'consectetur-ipsum-eum-officia-reiciendis-ut-esse-necessitatibus-quibusdam-nobis-incidunt','Consectetur ipsum eum officia reiciendis ut esse necessitatibus quibusdam nobis incidunt.','Minus nesciunt omnis ut accusamus rerum.','Ut aliquid et nisi corporis. Quo ratione dolor aperiam est vel. Expedita eum dolorum ut nobis. Dolore eos laboriosam neque asperiores voluptatibus. Consequatur qui nihil deleniti dolor at voluptatem ea expedita.\n\nQuas accusamus eos quaerat quia modi voluptas quia consequatur. Incidunt nesciunt sed in voluptatum voluptatibus nobis. In assumenda ducimus unde. Ut voluptatibus quisquam voluptates aut atque neque. Optio tenetur eveniet sit voluptas ut.\n\nVoluptates voluptate nesciunt rerum qui. Ut natus ullam molestias minima. Voluptatibus ipsam ut magni non expedita.','Ut aliquid et nisi corporis. Quo ratione dolor aperiam est vel. Expedita eum dolorum ut nobis. Dolore eos laboriosam neque asperiores voluptatibus. Consequatur qui nihil deleniti dolor at voluptatem ea expedita.\n\nQuas accusamus eos quaerat quia modi voluptas quia consequatur. Incidunt nesciunt sed in voluptatum voluptatibus nobis. In assumenda ducimus unde. Ut voluptatibus quisquam voluptates aut atque neque. Optio tenetur eveniet sit voluptas ut.\n\nVoluptates voluptate nesciunt rerum qui. Ut natus ullam molestias minima. Voluptatibus ipsam ut magni non expedita.','Tempore ullam ex dolores adipisci pariatur enim neque temporibus quod animi eum dolore ut.','Cumque voluptatem distinctio modi.',1,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-24 13:20:23'),(3,'esse-deserunt-eum-saepe-ut-non-enim','Esse deserunt eum saepe ut non enim.','Iure quis sequi voluptas quisquam repellat ipsum sit consequatur iure.','Quia sit suscipit nemo natus dolores modi sed. Sequi expedita assumenda aliquid recusandae. Dolores illo reiciendis adipisci totam consequatur rerum.\n\nProvident qui quia vitae minima. Excepturi itaque aliquam eos accusamus voluptates repudiandae aut itaque. Vitae fuga et officiis fuga incidunt amet voluptatem. Et id itaque ducimus maxime.\n\nExcepturi tenetur inventore id dolorem et temporibus iure. Possimus maxime quidem nemo culpa dolorem harum. Et corrupti a sapiente voluptates modi sint. Neque aut voluptas autem quas quia dolorem.\n\nEa voluptatem architecto voluptas rerum consectetur odit hic. Dolor odio veniam voluptas sapiente.\n\nIllum aliquid sit voluptas voluptates quia ullam expedita ex. Nostrum optio ut at porro. Alias impedit voluptatem laboriosam distinctio voluptatem voluptas sequi. Deleniti aperiam magni velit odio dolor aliquid.\n\nEnim at accusamus est animi eligendi accusamus ut. Accusamus omnis recusandae delectus beatae nisi. Voluptatibus et saepe totam necessitatibus ad aut eum impedit.','Quia sit suscipit nemo natus dolores modi sed. Sequi expedita assumenda aliquid recusandae. Dolores illo reiciendis adipisci totam consequatur rerum.\n\nProvident qui quia vitae minima. Excepturi itaque aliquam eos accusamus voluptates repudiandae aut itaque. Vitae fuga et officiis fuga incidunt amet voluptatem. Et id itaque ducimus maxime.\n\nExcepturi tenetur inventore id dolorem et temporibus iure. Possimus maxime quidem nemo culpa dolorem harum. Et corrupti a sapiente voluptates modi sint. Neque aut voluptas autem quas quia dolorem.\n\nEa voluptatem architecto voluptas rerum consectetur odit hic. Dolor odio veniam voluptas sapiente.\n\nIllum aliquid sit voluptas voluptates quia ullam expedita ex. Nostrum optio ut at porro. Alias impedit voluptatem laboriosam distinctio voluptatem voluptas sequi. Deleniti aperiam magni velit odio dolor aliquid.\n\nEnim at accusamus est animi eligendi accusamus ut. Accusamus omnis recusandae delectus beatae nisi. Voluptatibus et saepe totam necessitatibus ad aut eum impedit.','Voluptas voluptas amet non.','Sit repudiandae veniam quae neque tenetur laudantium optio cumque.',9,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-21 15:03:05'),(4,'aut-aut','Aut aut.','Culpa iusto deleniti sint doloribus molestias pariatur nam.','Tempore ratione ut dolorem qui facilis non. Qui quia voluptates non. Quis tempora eveniet suscipit vel dignissimos laboriosam id numquam. Sunt atque nesciunt dolorem eaque.\n\nCommodi dicta illo similique velit nemo aut. Aut culpa repellendus sapiente voluptatem perferendis fugiat quis. Voluptas eos doloremque et beatae vel eum.\n\nVoluptatem molestias hic iure et alias labore. Porro commodi odit at aut. Quos voluptate suscipit voluptatum cupiditate voluptas.\n\nAutem pariatur nisi tenetur reiciendis eius cupiditate. Laudantium repellendus et tempora aut repellendus. Reiciendis repellendus assumenda rerum sint voluptatem et quia.\n\nUt illum expedita perspiciatis qui eos iusto qui. Vitae provident at ipsa non quod asperiores. Est autem sunt fugiat velit numquam. Sint voluptates aut accusantium veritatis est.','Tempore ratione ut dolorem qui facilis non. Qui quia voluptates non. Quis tempora eveniet suscipit vel dignissimos laboriosam id numquam. Sunt atque nesciunt dolorem eaque.\n\nCommodi dicta illo similique velit nemo aut. Aut culpa repellendus sapiente voluptatem perferendis fugiat quis. Voluptas eos doloremque et beatae vel eum.\n\nVoluptatem molestias hic iure et alias labore. Porro commodi odit at aut. Quos voluptate suscipit voluptatum cupiditate voluptas.\n\nAutem pariatur nisi tenetur reiciendis eius cupiditate. Laudantium repellendus et tempora aut repellendus. Reiciendis repellendus assumenda rerum sint voluptatem et quia.\n\nUt illum expedita perspiciatis qui eos iusto qui. Vitae provident at ipsa non quod asperiores. Est autem sunt fugiat velit numquam. Sint voluptates aut accusantium veritatis est.','Veritatis commodi cum ratione vitae voluptates a quae.','Officiis eveniet.',3,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-07 04:04:02'),(5,'magni-voluptatem-eos-qui-beatae-necessitatibus-earum-eum-pariatur-voluptates-maxime-ex-blanditiis','Magni voluptatem eos qui beatae necessitatibus earum eum pariatur voluptates maxime ex blanditiis.','Sapiente et quia odio saepe aliquam id est a est eos nisi.','Quae ea similique laborum sunt dolorem. Maiores est excepturi nulla quis labore laudantium quia qui. Ab ea ducimus labore molestiae. Voluptas saepe id accusamus corporis rerum est suscipit voluptatum.\n\nMolestiae numquam est explicabo in qui earum ipsam laboriosam. Est harum aut quae nam nam dolor quos. Aut quas nobis voluptatem delectus aut dolore.\n\nLaboriosam quaerat animi similique culpa repudiandae animi ut totam. Est iusto exercitationem non deserunt. Voluptatum dolorem beatae ut voluptatem et.\n\nVel error odit accusantium ut ut provident voluptatem. Expedita minima rerum magni labore odio eum quos. Recusandae ipsa maxime ex et accusantium provident quam.\n\nEt explicabo et ut et animi ut. Sed cumque veritatis tenetur sed. Asperiores eligendi porro neque qui.\n\nAperiam possimus eos officiis illum iste. Iste vitae ab aperiam id. Vitae unde rem molestias facilis totam. Omnis atque dignissimos ea sint.','Quae ea similique laborum sunt dolorem. Maiores est excepturi nulla quis labore laudantium quia qui. Ab ea ducimus labore molestiae. Voluptas saepe id accusamus corporis rerum est suscipit voluptatum.\n\nMolestiae numquam est explicabo in qui earum ipsam laboriosam. Est harum aut quae nam nam dolor quos. Aut quas nobis voluptatem delectus aut dolore.\n\nLaboriosam quaerat animi similique culpa repudiandae animi ut totam. Est iusto exercitationem non deserunt. Voluptatum dolorem beatae ut voluptatem et.\n\nVel error odit accusantium ut ut provident voluptatem. Expedita minima rerum magni labore odio eum quos. Recusandae ipsa maxime ex et accusantium provident quam.\n\nEt explicabo et ut et animi ut. Sed cumque veritatis tenetur sed. Asperiores eligendi porro neque qui.\n\nAperiam possimus eos officiis illum iste. Iste vitae ab aperiam id. Vitae unde rem molestias facilis totam. Omnis atque dignissimos ea sint.','Eos quis exercitationem laboriosam aut.','Sint fuga fugiat saepe distinctio qui.',1,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-31 18:18:12'),(6,'illum-omnis-ratione-repellendus-aspernatur-deserunt-voluptatem','Illum omnis ratione repellendus aspernatur deserunt voluptatem.','Dolor ipsum voluptas laboriosam voluptatem consequatur.','Amet sint reprehenderit illo numquam. Enim in modi odit. Quod fugiat a rerum. Saepe sed excepturi ullam dolorem praesentium commodi.\n\nNulla vel expedita reiciendis a non nisi. Labore quis repudiandae et illum beatae et veniam. Eos temporibus aut animi tempora praesentium natus.\n\nQuia itaque consequatur molestias ea consequuntur ratione. Et laboriosam itaque quaerat molestiae tenetur. Eum consequatur eius praesentium voluptatem ut doloremque cumque. Blanditiis et et nihil consequatur qui aliquam.','Amet sint reprehenderit illo numquam. Enim in modi odit. Quod fugiat a rerum. Saepe sed excepturi ullam dolorem praesentium commodi.\n\nNulla vel expedita reiciendis a non nisi. Labore quis repudiandae et illum beatae et veniam. Eos temporibus aut animi tempora praesentium natus.\n\nQuia itaque consequatur molestias ea consequuntur ratione. Et laboriosam itaque quaerat molestiae tenetur. Eum consequatur eius praesentium voluptatem ut doloremque cumque. Blanditiis et et nihil consequatur qui aliquam.','Doloribus qui error consequatur quibusdam voluptas.','Sapiente libero est sit nobis et iure harum nihil et.',1,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-13 02:47:36'),(7,'id-consequatur-et-ducimus-voluptatem-neque-et-et-vel-culpa-suscipit-illo','Id consequatur et ducimus voluptatem neque et et vel culpa suscipit illo.','Ut ut quo cupiditate atque repellendus ex laudantium.','Aut enim repudiandae aliquam adipisci. Voluptas eos est eum quis.\n\nRecusandae sed repellendus perferendis in. Et odio ratione porro voluptatem et nobis. Dolor omnis quia facilis eum vel ducimus. Et unde voluptas ut nemo. Asperiores praesentium facere reiciendis autem.\n\nQuia facere tempore quas quia occaecati. Vero dicta dolor dolor voluptatem et doloribus. Ut qui neque eaque.','Aut enim repudiandae aliquam adipisci. Voluptas eos est eum quis.\n\nRecusandae sed repellendus perferendis in. Et odio ratione porro voluptatem et nobis. Dolor omnis quia facilis eum vel ducimus. Et unde voluptas ut nemo. Asperiores praesentium facere reiciendis autem.\n\nQuia facere tempore quas quia occaecati. Vero dicta dolor dolor voluptatem et doloribus. Ut qui neque eaque.','Dolorem nam dolores itaque expedita molestiae est omnis voluptate maxime.','Nostrum repudiandae et debitis ut similique rerum.',3,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-17 19:27:22'),(8,'officia-sed-accusantium-est','Officia sed accusantium est.','Atque corrupti reprehenderit minima et et distinctio rerum.','Quisquam id consectetur eius. Voluptatem nesciunt vero quibusdam. Nihil dicta soluta officiis laborum optio quam.\n\nVero aspernatur qui vel delectus ut. Et beatae sint natus veritatis et qui odio. Doloremque cumque quam molestias dignissimos sit autem maiores. Autem voluptates explicabo dolores quia et excepturi.\n\nAnimi quisquam iusto voluptatem quas sit. Quod reiciendis id omnis qui nam. Sit eligendi aliquam deserunt eos id. Distinctio dolores et perferendis eos non et aut illo.','Quisquam id consectetur eius. Voluptatem nesciunt vero quibusdam. Nihil dicta soluta officiis laborum optio quam.\n\nVero aspernatur qui vel delectus ut. Et beatae sint natus veritatis et qui odio. Doloremque cumque quam molestias dignissimos sit autem maiores. Autem voluptates explicabo dolores quia et excepturi.\n\nAnimi quisquam iusto voluptatem quas sit. Quod reiciendis id omnis qui nam. Sit eligendi aliquam deserunt eos id. Distinctio dolores et perferendis eos non et aut illo.','Et ea ut id cupiditate quo atque et velit eaque.','Aut sit ea ratione totam nemo nam laboriosam autem.',1,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-13 05:56:20'),(9,'eos-et-et-dicta','Eos et et dicta.','Nihil sapiente repellendus aliquid.','Voluptatibus cupiditate maxime corporis cumque illo facilis. Nihil est adipisci et sequi voluptatem quo molestias maxime. Hic a rerum soluta et.\n\nPariatur sint aliquid in doloribus id sit. Vel at iusto est sapiente sed. Fugiat id et repudiandae ipsum numquam non dolorum.\n\nQuod tenetur libero voluptatem ullam quam. A aperiam ipsum modi dolor voluptatum consequatur.\n\nRerum velit qui consequatur suscipit alias deleniti quia. Aliquam non eius et ullam voluptatibus aperiam rerum. Impedit hic explicabo iure. Iusto velit delectus atque quo vero suscipit minus.\n\nEa doloribus exercitationem repellendus aut fuga. Culpa velit inventore voluptas soluta suscipit iusto. Atque aliquid culpa provident.\n\nQui dolor repellat sit modi sunt modi saepe. Hic ipsam consequuntur ab earum possimus. Ipsa qui modi ea est autem. Optio adipisci necessitatibus rerum officiis modi nulla.','Voluptatibus cupiditate maxime corporis cumque illo facilis. Nihil est adipisci et sequi voluptatem quo molestias maxime. Hic a rerum soluta et.\n\nPariatur sint aliquid in doloribus id sit. Vel at iusto est sapiente sed. Fugiat id et repudiandae ipsum numquam non dolorum.\n\nQuod tenetur libero voluptatem ullam quam. A aperiam ipsum modi dolor voluptatum consequatur.\n\nRerum velit qui consequatur suscipit alias deleniti quia. Aliquam non eius et ullam voluptatibus aperiam rerum. Impedit hic explicabo iure. Iusto velit delectus atque quo vero suscipit minus.\n\nEa doloribus exercitationem repellendus aut fuga. Culpa velit inventore voluptas soluta suscipit iusto. Atque aliquid culpa provident.\n\nQui dolor repellat sit modi sunt modi saepe. Hic ipsam consequuntur ab earum possimus. Ipsa qui modi ea est autem. Optio adipisci necessitatibus rerum officiis modi nulla.','Neque hic et et molestiae.','Illo sit quos dolorem tenetur quas omnis pariatur.',4,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-09-08 01:59:05'),(10,'in-delectus-dolore-sit-sapiente','In delectus dolore sit sapiente.','Similique et distinctio recusandae qui voluptas et et.','Sit impedit enim harum occaecati. Voluptate qui expedita magni sit tempora. Ad cupiditate quisquam voluptas suscipit sapiente repudiandae.\n\nMagnam et quisquam tempore aut. Dicta consectetur aut veniam quod. Quibusdam dolorem quas vero ut dolores.\n\nEx aut rerum amet odio. Cumque dolores est vitae et velit qui est. Voluptate qui officiis debitis dolorem nisi vel aut.\n\nOmnis nam inventore ex quisquam. Et aliquid sit et iure numquam perspiciatis. Non molestiae minima ad blanditiis vitae accusamus. Suscipit non enim et sint et nemo possimus.','Sit impedit enim harum occaecati. Voluptate qui expedita magni sit tempora. Ad cupiditate quisquam voluptas suscipit sapiente repudiandae.\n\nMagnam et quisquam tempore aut. Dicta consectetur aut veniam quod. Quibusdam dolorem quas vero ut dolores.\n\nEx aut rerum amet odio. Cumque dolores est vitae et velit qui est. Voluptate qui officiis debitis dolorem nisi vel aut.\n\nOmnis nam inventore ex quisquam. Et aliquid sit et iure numquam perspiciatis. Non molestiae minima ad blanditiis vitae accusamus. Suscipit non enim et sint et nemo possimus.','Consequatur et illo possimus corporis maiores consequatur velit aut aut voluptates necessitatibus eos.','Ipsa ducimus vel odio quibusdam nihil.',7,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-31 11:32:28'),(11,'quisquam-sed-rerum-rem-eum-nulla-ut-nesciunt-et-sit','Quisquam sed rerum rem eum nulla ut nesciunt et sit.','Corporis possimus atque quos.','Occaecati id aut libero architecto quam. Voluptatem sed labore dolor quis enim eos. Ut minima dolorum esse autem sit est.\n\nDignissimos aut impedit magnam earum dolor quis labore. Sit eligendi magnam culpa. Ut ut neque non ut. Rem accusamus veritatis quas blanditiis corrupti quam consequatur.\n\nFacilis omnis quia magni ut et. Et omnis aut magnam voluptatem veritatis nam voluptatem laudantium. Consequatur deserunt libero illo qui ipsa. Provident qui aut autem iusto doloribus quas.\n\nEius laborum facilis ducimus harum. Optio eos ex recusandae laborum quod.\n\nIn aperiam recusandae natus. Ipsa illum esse in sed cum eum aut. Eos at facilis impedit velit nulla. Sed ut repellendus eos doloremque corporis.','Occaecati id aut libero architecto quam. Voluptatem sed labore dolor quis enim eos. Ut minima dolorum esse autem sit est.\n\nDignissimos aut impedit magnam earum dolor quis labore. Sit eligendi magnam culpa. Ut ut neque non ut. Rem accusamus veritatis quas blanditiis corrupti quam consequatur.\n\nFacilis omnis quia magni ut et. Et omnis aut magnam voluptatem veritatis nam voluptatem laudantium. Consequatur deserunt libero illo qui ipsa. Provident qui aut autem iusto doloribus quas.\n\nEius laborum facilis ducimus harum. Optio eos ex recusandae laborum quod.\n\nIn aperiam recusandae natus. Ipsa illum esse in sed cum eum aut. Eos at facilis impedit velit nulla. Sed ut repellendus eos doloremque corporis.','Incidunt velit aliquam porro et at et assumenda iure voluptate ratione dolores.','Similique dolores eius est voluptatem maxime.',8,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-09-02 22:10:08'),(12,'magnam-qui-harum-vitae-eaque-sunt-omnis-perferendis-ea','Magnam qui harum vitae eaque sunt omnis perferendis ea.','Aliquid suscipit dolor cumque ullam.','Quos qui ab omnis. Earum minus rerum rerum. At eveniet accusamus veniam repellendus facere aut.\n\nAut repellendus maxime accusantium distinctio impedit. Nobis eum at ut est impedit odit. Itaque veritatis aut quidem quia labore enim ea officiis. Mollitia consequatur sit eum sunt reiciendis omnis. Eum id sed accusamus.\n\nReprehenderit perferendis iure distinctio eveniet beatae voluptatem iusto optio. Commodi tempore esse ex quod. Neque aut iusto tempora enim maxime porro nostrum. In enim qui magni omnis minus omnis.\n\nVeritatis quas doloremque adipisci voluptate eaque sed. Eum optio eligendi est et natus. Nihil laborum ducimus rerum sapiente nesciunt praesentium.\n\nDoloribus id inventore molestias libero id omnis. Animi assumenda ullam unde molestiae quasi et quia. Qui aliquid aliquid tempore qui consectetur consequatur ipsa quia. At cumque quibusdam minus est nulla sint. Velit deserunt fugiat voluptatem culpa non.\n\nExercitationem odit sapiente laboriosam. Asperiores qui magni et. Est possimus quis sint labore sed eligendi. Et aspernatur libero et consequuntur at voluptas. Fugit id quia omnis error et.','Quos qui ab omnis. Earum minus rerum rerum. At eveniet accusamus veniam repellendus facere aut.\n\nAut repellendus maxime accusantium distinctio impedit. Nobis eum at ut est impedit odit. Itaque veritatis aut quidem quia labore enim ea officiis. Mollitia consequatur sit eum sunt reiciendis omnis. Eum id sed accusamus.\n\nReprehenderit perferendis iure distinctio eveniet beatae voluptatem iusto optio. Commodi tempore esse ex quod. Neque aut iusto tempora enim maxime porro nostrum. In enim qui magni omnis minus omnis.\n\nVeritatis quas doloremque adipisci voluptate eaque sed. Eum optio eligendi est et natus. Nihil laborum ducimus rerum sapiente nesciunt praesentium.\n\nDoloribus id inventore molestias libero id omnis. Animi assumenda ullam unde molestiae quasi et quia. Qui aliquid aliquid tempore qui consectetur consequatur ipsa quia. At cumque quibusdam minus est nulla sint. Velit deserunt fugiat voluptatem culpa non.\n\nExercitationem odit sapiente laboriosam. Asperiores qui magni et. Est possimus quis sint labore sed eligendi. Et aspernatur libero et consequuntur at voluptas. Fugit id quia omnis error et.','Aliquid ipsa facilis ut.','Nostrum eos et aut.',6,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-17 12:07:07'),(13,'aut-in-voluptas-quaerat-harum-necessitatibus-nihil','Aut in voluptas quaerat harum necessitatibus nihil.','Vel accusamus tempore commodi possimus possimus sunt doloremque ut autem provident.','Consectetur enim inventore ducimus qui libero. Ea aperiam sed porro consequuntur id vero voluptas. Dolor eum ipsum suscipit officia voluptatem fugiat distinctio iusto. Consequatur consequatur sit ipsam odio alias unde.\n\nInventore enim nostrum error odit nobis eligendi. Temporibus similique adipisci cum sit. Dolor quia quia nisi iste autem aut at. Et aut veniam totam et nihil error.\n\nMaxime veritatis quod quidem laboriosam. Modi quae iure qui. Qui nemo rerum eum.\n\nPerspiciatis sed harum voluptates natus accusantium minima dolorem nobis. Non dolorem quisquam neque ut eius in. Autem tempora accusantium odit velit quod sed. Eum quasi pariatur dolorem at vel laboriosam accusamus. Quis odio vero aut sint.\n\nEt sed veritatis quia dolorum labore. Et beatae pariatur voluptates ut quia et. Odio ut ea est iure fugit.\n\nAut non incidunt ea quia esse culpa nesciunt. Non consequuntur non nulla suscipit. Veniam a quia est eaque quis sit enim vel. Qui quisquam saepe et rerum in animi. Magni natus minus aut blanditiis eveniet.','Consectetur enim inventore ducimus qui libero. Ea aperiam sed porro consequuntur id vero voluptas. Dolor eum ipsum suscipit officia voluptatem fugiat distinctio iusto. Consequatur consequatur sit ipsam odio alias unde.\n\nInventore enim nostrum error odit nobis eligendi. Temporibus similique adipisci cum sit. Dolor quia quia nisi iste autem aut at. Et aut veniam totam et nihil error.\n\nMaxime veritatis quod quidem laboriosam. Modi quae iure qui. Qui nemo rerum eum.\n\nPerspiciatis sed harum voluptates natus accusantium minima dolorem nobis. Non dolorem quisquam neque ut eius in. Autem tempora accusantium odit velit quod sed. Eum quasi pariatur dolorem at vel laboriosam accusamus. Quis odio vero aut sint.\n\nEt sed veritatis quia dolorum labore. Et beatae pariatur voluptates ut quia et. Odio ut ea est iure fugit.\n\nAut non incidunt ea quia esse culpa nesciunt. Non consequuntur non nulla suscipit. Veniam a quia est eaque quis sit enim vel. Qui quisquam saepe et rerum in animi. Magni natus minus aut blanditiis eveniet.','Fugit sint eveniet explicabo qui earum temporibus.','Id ad veritatis doloribus velit rerum.',1,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-18 23:04:54'),(14,'consequatur-vero-facere-sequi-sit','Consequatur vero facere sequi sit.','Odio dolorem aut accusantium necessitatibus suscipit perspiciatis atque.','Porro et quia qui eligendi rem assumenda. Laboriosam qui dolor ipsum qui atque. Est ratione voluptatem laboriosam deserunt rem quaerat quos. Mollitia et et qui nulla odit non debitis.\n\nVoluptas similique explicabo magnam ut. Hic enim nihil sequi velit atque. Ipsam assumenda nostrum explicabo nisi placeat non. Doloremque minus blanditiis et nobis a similique possimus quo.\n\nEnim consequuntur et dolorem ut sit exercitationem unde. Rerum aut non qui reprehenderit nam.\n\nInventore sit fugiat vitae error molestiae. Esse ex eum perferendis culpa deserunt in. Quae voluptatem aut ipsam fuga aliquid. Qui iure cupiditate voluptate pariatur.','Porro et quia qui eligendi rem assumenda. Laboriosam qui dolor ipsum qui atque. Est ratione voluptatem laboriosam deserunt rem quaerat quos. Mollitia et et qui nulla odit non debitis.\n\nVoluptas similique explicabo magnam ut. Hic enim nihil sequi velit atque. Ipsam assumenda nostrum explicabo nisi placeat non. Doloremque minus blanditiis et nobis a similique possimus quo.\n\nEnim consequuntur et dolorem ut sit exercitationem unde. Rerum aut non qui reprehenderit nam.\n\nInventore sit fugiat vitae error molestiae. Esse ex eum perferendis culpa deserunt in. Quae voluptatem aut ipsam fuga aliquid. Qui iure cupiditate voluptate pariatur.','Eum facilis consequatur doloribus in molestias vel autem.','Sit quo ea repellat architecto sapiente aliquid quas quis id.',6,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-19 01:38:49'),(15,'beatae-quis-necessitatibus-et-quasi-fugiat-blanditiis-in','Beatae quis necessitatibus et quasi fugiat blanditiis in.','Id molestiae impedit blanditiis.','Voluptatum voluptas molestiae eum voluptatibus. Quisquam sit labore repellendus facere porro et consequuntur. Ea et enim sit eius debitis perferendis quas voluptas. Est molestiae expedita odio itaque quia.\n\nVeniam sit quaerat ducimus ea laboriosam eaque. Cumque et quos eum consequatur. Quo ea sed cum rerum voluptates nam deserunt autem. Blanditiis id ut accusamus officia veritatis eos ut.\n\nInventore labore earum sed occaecati sapiente voluptatem ut. Necessitatibus cupiditate aut sunt est. Qui nesciunt nobis vel officia voluptatem aut.\n\nEst consectetur quas officia iusto qui at illum. Earum voluptatem repellendus sit vel consequuntur ut magnam. Doloribus et aut repellat incidunt corporis omnis. Harum tempora beatae dolor.','Voluptatum voluptas molestiae eum voluptatibus. Quisquam sit labore repellendus facere porro et consequuntur. Ea et enim sit eius debitis perferendis quas voluptas. Est molestiae expedita odio itaque quia.\n\nVeniam sit quaerat ducimus ea laboriosam eaque. Cumque et quos eum consequatur. Quo ea sed cum rerum voluptates nam deserunt autem. Blanditiis id ut accusamus officia veritatis eos ut.\n\nInventore labore earum sed occaecati sapiente voluptatem ut. Necessitatibus cupiditate aut sunt est. Qui nesciunt nobis vel officia voluptatem aut.\n\nEst consectetur quas officia iusto qui at illum. Earum voluptatem repellendus sit vel consequuntur ut magnam. Doloribus et aut repellat incidunt corporis omnis. Harum tempora beatae dolor.','Suscipit eveniet sit non suscipit aut rem.','Aut atque aut quo rerum consequatur nobis.',0,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-20 23:48:40'),(16,'odit-consequatur-impedit-sit-pariatur-a-non-voluptatum','Odit consequatur impedit sit pariatur a non voluptatum.','Non quibusdam repellat et laudantium officia et enim.','Impedit nihil est facere ratione fugit perspiciatis. Sapiente natus nihil facilis alias. Eos quis est repellendus sequi sint aut hic. Alias accusamus sapiente quod modi fugit et.\n\nEt harum temporibus officia voluptas pariatur officia mollitia consequatur. Vel aut quia quam itaque molestiae sequi delectus sit. Necessitatibus placeat commodi ut ea esse perferendis ipsa omnis. Ex explicabo iusto mollitia nam esse possimus.\n\nSit et beatae et sed. Rerum sunt amet vero mollitia fuga quis labore. Ut non provident neque qui quae libero. Error id id nobis quia.\n\nDicta ut consequatur officia odio ut. Animi est dolores voluptatibus corporis. Aut sunt quam molestias adipisci expedita numquam. Iure dignissimos facere incidunt unde.\n\nAut cumque numquam omnis qui et. Quo aut incidunt quia et neque tenetur. Modi soluta quidem porro quaerat.\n\nIure optio eos debitis deleniti possimus. A quia ea vitae sequi.','Impedit nihil est facere ratione fugit perspiciatis. Sapiente natus nihil facilis alias. Eos quis est repellendus sequi sint aut hic. Alias accusamus sapiente quod modi fugit et.\n\nEt harum temporibus officia voluptas pariatur officia mollitia consequatur. Vel aut quia quam itaque molestiae sequi delectus sit. Necessitatibus placeat commodi ut ea esse perferendis ipsa omnis. Ex explicabo iusto mollitia nam esse possimus.\n\nSit et beatae et sed. Rerum sunt amet vero mollitia fuga quis labore. Ut non provident neque qui quae libero. Error id id nobis quia.\n\nDicta ut consequatur officia odio ut. Animi est dolores voluptatibus corporis. Aut sunt quam molestias adipisci expedita numquam. Iure dignissimos facere incidunt unde.\n\nAut cumque numquam omnis qui et. Quo aut incidunt quia et neque tenetur. Modi soluta quidem porro quaerat.\n\nIure optio eos debitis deleniti possimus. A quia ea vitae sequi.','Delectus est repellendus aut blanditiis qui.','Ad aut sint aperiam cumque qui.',2,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-14 17:26:16'),(17,'alias-officiis-eos-architecto-maxime-qui-necessitatibus-voluptas-commodi-eligendi-ab-voluptatem','Alias officiis eos architecto maxime qui necessitatibus voluptas commodi eligendi ab voluptatem.','Necessitatibus aspernatur et voluptates voluptate praesentium quisquam velit aut.','Nulla cumque et dignissimos quia corrupti corrupti adipisci. Autem molestias sunt placeat facilis perferendis similique. Saepe dolores voluptatem possimus omnis. Nobis qui quod debitis cumque ut consequatur.\n\nEt qui suscipit occaecati et voluptate. Qui vel fuga ut numquam at. Qui adipisci neque aperiam provident. Enim porro quibusdam quia quia.\n\nModi ex quas soluta molestiae. Quis consequatur tempora impedit porro esse. Iste cum beatae aperiam dolor aut quo harum.\n\nIpsam nostrum commodi dolor qui et blanditiis. Quasi deserunt et quia fugit. Et nostrum sit autem deserunt.\n\nQui odit cupiditate quam eius dolores et. Voluptatem cupiditate harum voluptatem placeat. Voluptatem sed cupiditate dolorem. Quibusdam soluta molestias velit tenetur ea consectetur nihil minima.','Nulla cumque et dignissimos quia corrupti corrupti adipisci. Autem molestias sunt placeat facilis perferendis similique. Saepe dolores voluptatem possimus omnis. Nobis qui quod debitis cumque ut consequatur.\n\nEt qui suscipit occaecati et voluptate. Qui vel fuga ut numquam at. Qui adipisci neque aperiam provident. Enim porro quibusdam quia quia.\n\nModi ex quas soluta molestiae. Quis consequatur tempora impedit porro esse. Iste cum beatae aperiam dolor aut quo harum.\n\nIpsam nostrum commodi dolor qui et blanditiis. Quasi deserunt et quia fugit. Et nostrum sit autem deserunt.\n\nQui odit cupiditate quam eius dolores et. Voluptatem cupiditate harum voluptatem placeat. Voluptatem sed cupiditate dolorem. Quibusdam soluta molestias velit tenetur ea consectetur nihil minima.','Delectus ut enim eaque consequatur in officiis.','Aliquam aut.',4,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-09-01 09:18:07'),(18,'eligendi-quibusdam-voluptas-mollitia-velit-adipisci-voluptate','Eligendi quibusdam voluptas mollitia velit adipisci voluptate.','Sed nesciunt cumque quae sunt explicabo.','Quas aperiam officia dolorem minus eum. Ex neque quidem maxime aut id et quod. Illo praesentium eveniet vel.\n\nIpsum aspernatur dolorem distinctio expedita molestias sed maiores consectetur. Recusandae sapiente harum facilis enim. Beatae eos aspernatur hic. Voluptas cum repellat ex culpa.\n\nEst eaque praesentium assumenda autem. Labore sequi numquam nam fuga corporis est. Libero vel nisi et sit.\n\nVelit quisquam quae qui error. Dicta ex nulla molestias qui reprehenderit. Est rerum dolores sed enim.','Quas aperiam officia dolorem minus eum. Ex neque quidem maxime aut id et quod. Illo praesentium eveniet vel.\n\nIpsum aspernatur dolorem distinctio expedita molestias sed maiores consectetur. Recusandae sapiente harum facilis enim. Beatae eos aspernatur hic. Voluptas cum repellat ex culpa.\n\nEst eaque praesentium assumenda autem. Labore sequi numquam nam fuga corporis est. Libero vel nisi et sit.\n\nVelit quisquam quae qui error. Dicta ex nulla molestias qui reprehenderit. Est rerum dolores sed enim.','Exercitationem voluptatum culpa dolores reprehenderit.','Amet dolor dolorum in.',5,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-06 12:08:34'),(19,'facilis-voluptatibus-dignissimos-odit','Facilis voluptatibus dignissimos odit.','Ut aut id.','Non quis odit delectus officiis. Eum adipisci ex saepe quia. Omnis quo nam id soluta provident. Nam eum et ut aut dolor dolore eos. Aliquam et ut voluptas incidunt nam qui accusantium.\n\nDistinctio aut id quae necessitatibus suscipit non fugit aut. Dolor mollitia ea fugit ipsa ipsam iure. Aut illum voluptates nesciunt temporibus et.\n\nEst id ad officiis tempora. Quos ea optio quasi voluptatem laboriosam voluptatem. Et atque voluptates iste laborum velit atque molestias vel. Aut laudantium et quaerat vel ad.','Non quis odit delectus officiis. Eum adipisci ex saepe quia. Omnis quo nam id soluta provident. Nam eum et ut aut dolor dolore eos. Aliquam et ut voluptas incidunt nam qui accusantium.\n\nDistinctio aut id quae necessitatibus suscipit non fugit aut. Dolor mollitia ea fugit ipsa ipsam iure. Aut illum voluptates nesciunt temporibus et.\n\nEst id ad officiis tempora. Quos ea optio quasi voluptatem laboriosam voluptatem. Et atque voluptates iste laborum velit atque molestias vel. Aut laudantium et quaerat vel ad.','Quam nihil expedita enim iste eum rerum.','Nulla error quis est ad et culpa.',1,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-09-06 05:37:25'),(20,'eos-perspiciatis-nostrum-eligendi','Eos perspiciatis nostrum eligendi.','Doloremque nihil rerum facilis consectetur.','Molestiae totam repellendus autem optio ut id voluptates dolorum. Voluptates nulla enim consequatur velit. Ut amet alias sint iure facere.\n\nEst est mollitia eos sed aperiam et odit. Necessitatibus eligendi rerum ex velit sint. Ducimus assumenda quaerat est tempore nihil consequatur facere est.\n\nDucimus atque mollitia eum vitae unde debitis. Nam tempore dolorem et est. Ipsam doloribus dolore eveniet asperiores est.','Molestiae totam repellendus autem optio ut id voluptates dolorum. Voluptates nulla enim consequatur velit. Ut amet alias sint iure facere.\n\nEst est mollitia eos sed aperiam et odit. Necessitatibus eligendi rerum ex velit sint. Ducimus assumenda quaerat est tempore nihil consequatur facere est.\n\nDucimus atque mollitia eum vitae unde debitis. Nam tempore dolorem et est. Ipsam doloribus dolore eveniet asperiores est.','Unde minima doloribus dolorem at.','Culpa dolor adipisci et quibusdam iure aut asperiores aut aut dicta.',8,'2017-09-05 18:15:22','2017-09-05 18:15:22','2017-08-13 23:42:27');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privacies`
--

DROP TABLE IF EXISTS `privacies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privacies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privacies`
--

LOCK TABLES `privacies` WRITE;
/*!40000 ALTER TABLE `privacies` DISABLE KEYS */;
INSERT INTO `privacies` VALUES (1,'Hyperlink','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',1,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,'Schedule Appointment','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',2,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(3,'Select Product','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',3,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(4,'Select your customization option','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',4,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(5,'Add to Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',5,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(6,'My Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',6,1,'2017-09-05 18:15:22','2017-09-05 18:15:22');
/*!40000 ALTER TABLE `privacies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promos`
--

DROP TABLE IF EXISTS `promos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promos`
--

LOCK TABLES `promos` WRITE;
/*!40000 ALTER TABLE `promos` DISABLE KEYS */;
INSERT INTO `promos` VALUES (1,'promo.jpg','Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.\n                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.',1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,'promo.jpg','Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.\n                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.',1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(3,'promo.jpg','Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.\n                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.',1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(4,'promo.jpg','Habemus fuisset nec id. Mel nihil eripuit tacimates ei, usu eros percipit repudiandae ad.\n                    Te nec probo viderer, ut cum indoctum consetetur adipiscing.',1,'2017-09-05 18:15:22','2017-09-05 18:15:22');
/*!40000 ALTER TABLE `promos` ENABLE KEYS */;
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
  `name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
INSERT INTO `roles` VALUES (1,'super-user','Super User','Fermentum tempus,\n                    ante nisi pretium orci, at iaculis justo arcu id nulla.\n                    Duis varius ultrices mollis','2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,'user-level-1','User Level 1','Nullam lacinia sem neque, dignissim euismod odio facilisis non','2017-09-05 18:15:21','2017-09-05 18:15:21'),(3,'user-level-2','User Level 2','Pellentesque sagittis, ligula quis tincidunt mattis,\n                    neque justo vehicula velit, a elementum eros metus sit amet magna','2017-09-05 18:15:21','2017-09-05 18:15:21');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `selected_categories`
--

DROP TABLE IF EXISTS `selected_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `selected_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `note` varchar(175) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `selected_categories`
--

LOCK TABLES `selected_categories` WRITE;
/*!40000 ALTER TABLE `selected_categories` DISABLE KEYS */;
INSERT INTO `selected_categories` VALUES (1,1,NULL,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(2,2,NULL,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(3,3,NULL,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(4,4,NULL,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(5,5,NULL,'2017-09-05 18:15:21','2017-09-05 18:15:21'),(6,6,NULL,'2017-09-05 18:15:21','2017-09-05 18:15:21');
/*!40000 ALTER TABLE `selected_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `sessions` VALUES ('ury7373899rruejejfifmrj',1,'192.168.1.12','web-kit','ury7373899rruejejfifmrj','2017-03-12 07:20:11','2017-09-05 18:15:22','2017-09-05 18:15:22'),('ury7373899rruewe334ifmrj',1,'192.168.1.12','web-kit','ury7373899rruejejfifmrj','2017-03-12 07:20:11','2017-09-05 18:15:22','2017-09-05 18:15:22');
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
  `name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `shipping_costs` VALUES (1,'Cost 1',1000,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,'Cost 2',2000,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(3,'Cost 3',4000,'2017-09-05 18:15:22','2017-09-05 18:15:22');
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
  `title` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,'Sliders 1','72b53272328fb90e4975940a63b00d37.jpeg','2017-09-05 18:15:22','2017-09-05 18:26:50'),(2,'Sliders 2','912897d55b82770cf9128e55ccf707f0.jpeg','2017-09-05 18:15:22','2017-09-05 18:26:38'),(3,'Sliders 3','39d234877ee5ad8a022e4b7968712327.jpg','2017-09-05 18:15:22','2017-09-05 18:26:28'),(4,'Slider 4','b80852e5b99f0041101e315baeda1773.jpg','2017-09-05 18:26:18','2017-09-05 18:26:18');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscribers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribers`
--

LOCK TABLES `subscribers` WRITE;
/*!40000 ALTER TABLE `subscribers` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscribers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `tags` VALUES (1,'Tag 1','Tag 1 Title','Tag 1 subtitle','Tag 1 meta description',0,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,'Tag 2','Tag 2 Title','Tag 2 subtitle','Tag 2 meta description',0,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(3,'Tag 3','Tag 3 Title','Tag 3 subtitle','Tag 3 meta description',0,'2017-09-05 18:15:22','2017-09-05 18:15:22');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terms`
--

DROP TABLE IF EXISTS `terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terms`
--

LOCK TABLES `terms` WRITE;
/*!40000 ALTER TABLE `terms` DISABLE KEYS */;
INSERT INTO `terms` VALUES (1,'Hyperlink','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',1,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,'Schedule Appointment','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',2,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(3,'Select Product','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',3,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(4,'Select your customization option','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',4,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(5,'Add to Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',5,1,'2017-09-05 18:15:22','2017-09-05 18:15:22'),(6,'My Cart','a. Sign in if you are already registered in Bespoka.com\n                    b. If you are new to Bespoka, please Register to create your account',6,1,'2017-09-05 18:15:22','2017-09-05 18:15:22');
/*!40000 ALTER TABLE `terms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(175) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `users` VALUES (1,'Admin','admin@admin.com','$2y$10$kvyfLuosyFpCFG8bPU.KE.9lR45jDhT8HFw/4guh1nGm40ocXfo1W','nM9ixCgd5467syBib2YWEisk5PlfsXHfu8gCbmJvylgjVrXHJh3ZGMdG0PC8','2017-09-05 18:15:22','2017-09-05 18:15:22'),(2,'Front','front@admin.com','$2y$10$TvNYbwj8lAd81P7fwp8qWuWlABc2JFBaBj5aQl9tt0Lh5Wvdx9L4C','8F66niZzHw','2017-09-05 18:15:22','2017-09-05 18:15:22');
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

-- Dump completed on 2017-09-06  9:28:48
