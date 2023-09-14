-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: real_estate_site
-- ------------------------------------------------------
-- Server version	5.7.32

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (4,'two','two','202309-1673691038.jpg','2023-09-05 06:09:27','2023-09-05 06:09:27'),(5,'three','three','202309-41991738.png','2023-09-05 06:09:50','2023-09-05 06:09:50');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '1 = active, 0 = disabled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cities_city_unique` (`city`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'sydney','sydney','1','2023-09-05 01:32:30','2023-09-05 01:32:30');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms`
--

DROP TABLE IF EXISTS `cms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms`
--

LOCK TABLES `cms` WRITE;
/*!40000 ALTER TABLE `cms` DISABLE KEYS */;
INSERT INTO `cms` VALUES (1,'home_title',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(2,'home_meta',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(3,'home_content',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(4,'about_title','We Are the Best Accounting Agency','2023-09-10 18:16:40','2023-09-11 16:03:25'),(5,'about_meta',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(6,'about_content','<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>I was spending my time in doldrums,</p>\r\n\r\n<p>I was caught in a cauldron of hate&nbsp;</p>\r\n\r\n<p>I feel persecuted and paralyzed&nbsp;</p>\r\n\r\n<p>I thought that everything else could just wait&nbsp;</p>\r\n\r\n<p>&nbsp;</p>','2023-09-10 18:16:40','2023-09-11 17:47:04'),(7,'faq_title','My Services','2023-09-10 18:16:40','2023-09-12 17:43:46'),(8,'faq_meta',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(9,'faq_content','<div class=\"col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate\">\r\n                    <div class=\"d-block\">\r\n                        <div class=\"icon d-flex mr-2\">\r\n                            <span class=\"flaticon-accounting-1\"></span>\r\n                        </div>\r\n                        <div class=\"media-body\">\r\n                            <h3 class=\"heading\">Accounting</h3>\r\n                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate\">\r\n                    <div class=\"d-block\">\r\n                        <div class=\"icon d-flex mr-2\">\r\n                            <span class=\"flaticon-tax\"></span>\r\n                        </div>\r\n                        <div class=\"media-body\">\r\n                            <h3 class=\"heading\">Tax, Compliance &amp; Payroll</h3>\r\n                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate\">\r\n                    <div class=\"d-block\">\r\n                        <div class=\"icon d-flex mr-2\">\r\n                            <span class=\"flaticon-loan\"></span>\r\n                        </div>\r\n                        <div class=\"media-body\">\r\n                            <h3 class=\"heading\">Financial Services</h3>\r\n                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate\">\r\n                    <div class=\"d-block\">\r\n                        <div class=\"icon d-flex mr-2\">\r\n                            <span class=\"flaticon-budget\"></span>\r\n                        </div>\r\n                        <div class=\"media-body\">\r\n                            <h3 class=\"heading\">Growth &amp; Funding Access</h3>\r\n                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n                        </div>\r\n                    </div>\r\n                </div>','2023-09-10 18:16:40','2023-09-12 17:49:16'),(10,'terms_title',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(11,'terms_meta',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(12,'terms_content',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(13,'about_image','202309-803052613.jpg','2023-09-11 16:03:25','2023-09-11 18:33:08'),(14,'services_title','hello','2023-09-12 18:03:17','2023-09-12 18:03:17'),(15,'services_meta',NULL,'2023-09-12 18:03:17','2023-09-12 18:03:17'),(16,'services_content','<div class=\"col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate\">\r\n                    <div class=\"d-block\">\r\n                        <div class=\"icon d-flex mr-2\">\r\n                            <span class=\"flaticon-accounting-1\"></span>\r\n                        </div>\r\n                        <div class=\"media-body\">\r\n                            <h3 class=\"heading\">Accounting</h3>\r\n                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate\">\r\n                    <div class=\"d-block\">\r\n                        <div class=\"icon d-flex mr-2\">\r\n                            <span class=\"flaticon-tax\"></span>\r\n                        </div>\r\n                        <div class=\"media-body\">\r\n                            <h3 class=\"heading\">Tax, Compliance &amp; Payroll</h3>\r\n                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate\">\r\n                    <div class=\"d-block\">\r\n                        <div class=\"icon d-flex mr-2\">\r\n                            <span class=\"flaticon-loan\"></span>\r\n                        </div>\r\n                        <div class=\"media-body\">\r\n                            <h3 class=\"heading\">Financial Services</h3>\r\n                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate\">\r\n                    <div class=\"d-block\">\r\n                        <div class=\"icon d-flex mr-2\">\r\n                            <span class=\"flaticon-budget\"></span>\r\n                        </div>\r\n                        <div class=\"media-body\">\r\n                            <h3 class=\"heading\">Growth &amp; Funding Access</h3>\r\n                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n                        </div>\r\n                    </div>\r\n                </div>','2023-09-12 18:03:17','2023-09-12 18:05:39');
/*!40000 ALTER TABLE `cms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facilities`
--

DROP TABLE IF EXISTS `facilities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facilities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `faci` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_faci` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `facilities_faci_unique` (`faci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facilities`
--

LOCK TABLES `facilities` WRITE;
/*!40000 ALTER TABLE `facilities` DISABLE KEYS */;
/*!40000 ALTER TABLE `facilities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallaries`
--

DROP TABLE IF EXISTS `gallaries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallaries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gal_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallaries`
--

LOCK TABLES `gallaries` WRITE;
/*!40000 ALTER TABLE `gallaries` DISABLE KEYS */;
INSERT INTO `gallaries` VALUES (1,'bg_1.jpg','first',NULL,NULL),(2,'bg_2.jpg','second',NULL,NULL),(5,'bg_3.jpg','thirds','2023-09-10 16:09:13','2023-09-10 16:29:34');
/*!40000 ALTER TABLE `gallaries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image_sliders`
--

DROP TABLE IF EXISTS `image_sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image_sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image_sliders`
--

LOCK TABLES `image_sliders` WRITE;
/*!40000 ALTER TABLE `image_sliders` DISABLE KEYS */;
INSERT INTO `image_sliders` VALUES (28,'one','one.png','2023-09-10 12:32:07','2023-09-10 12:32:07'),(29,'one','one.png','2023-09-10 12:32:07','2023-09-10 12:32:07');
/*!40000 ALTER TABLE `image_sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_user_data_table',1),(2,'2014_10_12_000000_create_users_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_12_31_123225_create_categories_table',1),(7,'2022_01_02_091034_create_cities_table',1),(8,'2022_01_07_144759_create_facilities_table',1),(9,'2022_01_09_063114_create_properties_table',1),(10,'2022_01_11_150349_create_gallaries_table',1),(11,'2022_01_21_040603_create_site_settings_table',1),(12,'2022_02_25_134358_create_reviews_table',1),(13,'2022_03_11_113517_create_cms_table',1),(14,'2022_01_21_040603_create_image_sliders_table',2),(15,'2023_01_11_150349_create_gallaries_table',3),(16,'2023_01_11_150349_create_services_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `public` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `purpose` enum('sale','rent','pg') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` bigint(20) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fe_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faci` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `city` bigint(20) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cont_ph` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_em` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `video` text COLLATE utf8mb4_unicode_ci,
  `floorplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` bigint(20) NOT NULL,
  `pro_id` bigint(20) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `service_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_settings`
--

LOCK TABLES `site_settings` WRITE;
/*!40000 ALTER TABLE `site_settings` DISABLE KEYS */;
INSERT INTO `site_settings` VALUES (1,'email','munalaccounting@gmail.com',NULL,NULL),(2,'phone','048181223',NULL,NULL),(3,'site_title','Munal Accounting','2023-09-08 18:53:31','2023-09-08 18:53:31'),(4,'brand_title','Munal Brand','2023-09-08 18:53:31','2023-09-08 18:53:31'),(5,'meta_discription',NULL,'2023-09-08 18:53:31','2023-09-08 18:53:31'),(6,'footer_content',NULL,'2023-09-08 18:53:31','2023-09-08 18:53:31'),(7,'site_email','munal@gmail.com','2023-09-08 18:53:31','2023-09-08 18:53:31'),(8,'site_contact',NULL,'2023-09-08 18:53:31','2023-09-08 18:53:31'),(9,'facebook_url','https://www.facebook.com/rbc.cleaning.5','2023-09-08 18:53:31','2023-09-08 18:53:31'),(10,'instagram_url',NULL,'2023-09-08 18:53:31','2023-09-08 18:53:31'),(11,'youtube_url',NULL,'2023-09-08 18:53:31','2023-09-11 05:52:28'),(12,'twitter_url',NULL,'2023-09-08 18:53:31','2023-09-08 18:53:31'),(13,'office_address','10 Bridge St, Granville','2023-09-09 06:26:38','2023-09-09 06:26:38'),(15,'logo_image','logo.png','2023-09-10 09:27:04','2023-09-11 06:23:32');
/*!40000 ALTER TABLE `site_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_data` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saved` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_data`
--

LOCK TABLES `user_data` WRITE;
/*!40000 ALTER TABLE `user_data` DISABLE KEYS */;
INSERT INTO `user_data` VALUES (1,NULL,NULL,NULL,'2023-09-05 00:32:47','2023-09-05 00:32:47'),(2,NULL,NULL,NULL,'2023-09-05 00:35:49','2023-09-05 00:35:49');
/*!40000 ALTER TABLE `user_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('U','R','A') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'R=Root, A=Admin, U=User',
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
INSERT INTO `users` VALUES (1,'Admin User','admin@admin.com',NULL,'$2y$10$p7m.8eYvIQltFbucEDnixO8G0vxw1rHgxyA0617cSs4a1hwLZsb5a','R',NULL,'2023-09-05 00:32:47','2023-09-09 06:27:32'),(2,'Amit','achaulagain123@gmail.com',NULL,'$2y$10$iTqP/DmoxMenLISoprBTTOaX6HbD8uhjfR950HPBJ8f.W8LAmpAEG','U',NULL,'2023-09-05 00:35:48','2023-09-05 00:35:48');
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

-- Dump completed on 2023-09-14 23:24:49
