-- MySQL dump 10.13  Distrib 8.1.0, for macos11.7 (x86_64)
--
-- Host: localhost    Database: munal_accounting
-- ------------------------------------------------------
-- Server version	8.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (4,'two','two','202309-1673691038.jpg','2023-09-05 06:09:27','2023-09-05 06:09:27'),(5,'three','three','202309-41991738.png','2023-09-05 06:09:50','2023-09-05 06:09:50'),(7,'tempora similique unde',NULL,NULL,NULL,NULL),(8,'inventore ducimus pariatur',NULL,NULL,NULL,NULL),(9,'aut culpa sint',NULL,NULL,NULL,NULL),(10,'rerum recusandae laboriosam',NULL,NULL,NULL,NULL),(11,'doloribus non eveniet',NULL,NULL,NULL,NULL),(12,'asperiores doloribus sed',NULL,NULL,NULL,NULL),(13,'magni nulla ratione',NULL,NULL,NULL,NULL),(14,'ut vero culpa',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_post`
--

DROP TABLE IF EXISTS `category_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_post` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint unsigned NOT NULL,
  `post_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_post_category_id_foreign` (`category_id`),
  KEY `category_post_post_id_foreign` (`post_id`),
  CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_post`
--

LOCK TABLES `category_post` WRITE;
/*!40000 ALTER TABLE `category_post` DISABLE KEYS */;
INSERT INTO `category_post` VALUES (7,13,12),(8,14,13);
/*!40000 ALTER TABLE `category_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '1 = active, 0 = disabled',
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms`
--

LOCK TABLES `cms` WRITE;
/*!40000 ALTER TABLE `cms` DISABLE KEYS */;
INSERT INTO `cms` VALUES (1,'home_title','We Are the Best Accounting Agency','2023-09-10 18:16:40','2023-12-18 23:32:26'),(2,'home_meta','sdds','2023-09-10 18:16:40','2023-12-18 21:56:51'),(3,'home_content','<p>We are a proactive, hands-on firm that harnesses the latest knowledge on the subject to provide our clients with timely, accurate, and affordable financial &amp; taxation services.</p>\r\n\r\n<hr />\r\n<h3><strong>Why Choose&nbsp;Us?</strong></h3>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Proven Track Record</strong>: With years of industry experience, our team has successfully assisted countless clients in achieving their financial objectives.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Client-Centric Approach</strong>: Your success is our priority. We dedicate ourselves to understanding your unique challenges and crafting bespoke solutions.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Continuous Learning</strong>: In an ever-evolving financial landscape, we stay abreast of the latest regulations, technologies, and best practices to deliver unparalleled service.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Integrity &amp; Confidentiality</strong>: Trust is the cornerstone of our business. We uphold the highest standards of integrity and ensure the utmost confidentiality in all client interactions.</p>\r\n	</li>\r\n</ol>','2023-09-10 18:16:40','2023-12-18 23:47:03'),(4,'about_title','We Are the Best Accounting Agency','2023-09-10 18:16:40','2023-09-11 16:03:25'),(5,'about_meta',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(6,'about_content','<p>Welcome to Munal Accounting, where precision meets passion in the world of finance. Founded in 2015, we have established ourselves as a beacon of trust, reliability, and expertise in the accounting industry.</p>\r\n\r\n<p>Our journey began with a singular vision: to redefine the way businesses perceive accounting &ndash; not just as a necessity but as an integral partner in their growth and success stories. Over the years, we&#39;ve transformed countless numbers into meaningful insights, empowering our clients to make informed decisions, optimize operations, and drive profitability.</p>\r\n\r\n<p>&nbsp;</p>','2023-09-10 18:16:40','2023-12-30 04:24:54'),(7,'faq_title','My Services','2023-09-10 18:16:40','2023-09-12 17:43:46'),(8,'faq_meta',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(9,'faq_content','<h3>Accounting</h3>\r\n\r\n<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n\r\n<h3>Tax, Compliance &amp; Payroll</h3>\r\n\r\n<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n\r\n<h3>Financial Services</h3>\r\n\r\n<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n\r\n<h3>Growth &amp; Funding Access</h3>\r\n\r\n<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>','2023-09-10 18:16:40','2023-12-16 16:00:56'),(10,'terms_title',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(11,'terms_meta',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(12,'terms_content',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(13,'about_image','about.jpeg','2023-09-11 16:03:25','2023-12-18 21:51:55'),(14,'services_title','hello','2023-09-12 18:03:17','2023-09-12 18:03:17'),(15,'services_meta',NULL,'2023-09-12 18:03:17','2023-09-12 18:03:17'),(16,'services_content','<h2>Affordable Packages</h2>\r\n\r\n<ul>\r\n	<li>Brand Strategy</li>\r\n	<li>Online Marketing</li>\r\n	<li>Branding Services</li>\r\n	<li>Creative Marketing</li>\r\n	<li>Sales Management</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Affordable sdsds</h2>\r\n\r\n<ul>\r\n	<li>Brand Strategy</li>\r\n	<li>Online Marketing</li>\r\n	<li>Branding Services</li>\r\n	<li>Creative Marketing</li>\r\n	<li>Sales Management</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>','2023-09-12 18:03:17','2023-12-16 16:41:44'),(17,'home_image','home.jpeg','2023-12-18 21:26:30','2023-12-18 21:57:34');
/*!40000 ALTER TABLE `cms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facilities`
--

DROP TABLE IF EXISTS `facilities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facilities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `faci` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_faci` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fa` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallaries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `gal_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallaries`
--

LOCK TABLES `gallaries` WRITE;
/*!40000 ALTER TABLE `gallaries` DISABLE KEYS */;
INSERT INTO `gallaries` VALUES (17,'slider17.jpeg','sdf','2023-12-17 22:04:13','2023-12-17 22:04:23'),(18,'slider18.jpg','esrer','2023-12-17 23:34:27','2023-12-17 23:34:27'),(20,'slider20.jpeg','fddfdf','2023-12-29 14:24:19','2023-12-29 14:24:19');
/*!40000 ALTER TABLE `gallaries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image_sliders`
--

DROP TABLE IF EXISTS `image_sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `image_sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_user_data_table',1),(2,'2014_10_12_000000_create_users_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_12_31_123225_create_categories_table',1),(7,'2022_01_02_091034_create_cities_table',1),(8,'2022_01_07_144759_create_facilities_table',1),(9,'2022_01_09_063114_create_properties_table',1),(10,'2022_01_11_150349_create_gallaries_table',1),(11,'2022_01_21_040603_create_site_settings_table',1),(12,'2022_02_25_134358_create_reviews_table',1),(13,'2022_03_11_113517_create_cms_table',1),(14,'2022_01_21_040603_create_image_sliders_table',2),(15,'2023_01_11_150349_create_gallaries_table',3),(16,'2023_01_11_150349_create_services_table',4),(17,'2021_08_17_052404_create_tags_table',5),(18,'2021_08_17_052620_create_posts_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
-- Table structure for table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_tag` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint unsigned NOT NULL,
  `tag_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_tag_post_id_foreign` (`post_id`),
  KEY `post_tag_tag_id_foreign` (`tag_id`),
  CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tag`
--

LOCK TABLES `post_tag` WRITE;
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `post_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (3,'doloribus modi et ut','Mollitia et ut numquam recusandae soluta. Et eum maxime qui quasi. Omnis et sequi deserunt dolor quis dolorum explicabo accusamus. Et qui consequatur quaerat similique non ab.','<p>Exercitationem id voluptatum consequatur quia commodi explicabo. Repellat atque laborum saepe sint. In est quod dolore fugit sint. Voluptatum quis earum modi suscipit quis ea doloribus. Numquam consequatur asperiores eum ipsa blanditiis asperiores. Ut et consequatur officiis ex fuga ut nobis. Rerum voluptate ipsam quidem deleniti. Consequuntur omnis ducimus eum qui numquam rerum officiis ducimus. Quos et non quo alias. Earum quas voluptate dolorem et consequatur consectetur impedit. Eius ut dolor doloribus vel soluta cupiditate. Id sunt magnam dolorem fugit sunt. Repellendus sit illum ut rerum porro nobis voluptates. Et et ratione ut error rerum ducimus labore. Debitis omnis ducimus omnis qui. Quae id consectetur illum itaque magni. Omnis qui ea recusandae sed itaque ut accusamus. Sed velit quaerat quam necessitatibus et. Rerum dolorum corrupti suscipit pariatur cupiditate aperiam. Nobis nemo enim omnis qui asperiores beatae qui. Voluptatem numquam incidunt recusandae sunt tempore dolores. Assumenda blanditiis debitis aperiam quo et aut dolores. Et iusto pariatur recusandae quae et. Atque quo nihil nihil quis error qui exercitationem non. Ipsa deserunt animi dicta laborum aspernatur quas unde. Nihil natus est velit hic sapiente labore facilis. Necessitatibus corrupti doloribus aut soluta molestias iusto ea. Quidem porro perferendis non veniam. Qui corrupti quis porro ipsa. Quaerat libero repudiandae aut repudiandae nihil rem. Repellendus quos reiciendis quam voluptas et perspiciatis perferendis quae.</p>',1,'post3.jpg','2023-12-24 05:36:53','2023-12-28 14:19:54'),(12,'laudantium est voluptas maiores','Minus cumque mollitia in similique architecto repellat enim. Labore cum necessitatibus voluptate vero sed molestias qui incidunt. Enim pariatur veniam beatae eos modi consequatur quia. Accusantium sunt dicta sed aliquid non. Quam in sit adipisci aliquam autem eveniet quo voluptate. Dolorem mollitia eveniet nemo voluptatem.','Molestiae sed provident voluptatem perspiciatis et iure. Aut molestiae est excepturi assumenda magni facere. Et et quia assumenda alias.\n\nLaudantium aut temporibus earum. Voluptas nisi sint unde quod consequuntur numquam. Quae mollitia unde velit enim aliquid. Quos provident ipsa qui cumque enim nostrum.\n\nVel dolor expedita nam distinctio soluta accusantium. Sapiente ea ea autem aperiam.\n\nOmnis quas doloribus aut consectetur. Autem qui voluptatem cum fugit. Neque impedit hic sint et voluptate blanditiis. Aut aliquam qui quia deleniti rerum.\n\nFacilis commodi voluptas inventore fuga doloribus. Quo magni nostrum exercitationem corporis at nam explicabo. Cum placeat maiores dolores facere. Dolorum ut aspernatur et molestiae similique cumque excepturi.\n\nDistinctio animi voluptatem inventore quis expedita ex. Fuga temporibus qui veniam porro aliquid. Aut ducimus quia velit quas laborum veritatis. Tenetur omnis eveniet in aut.\n\nLaboriosam sit rerum et ex provident repellat. Ut tempora aut corrupti doloremque quam placeat odit. Ducimus dicta sint vel. Aliquam est porro dicta est minima nisi.\n\nConsequuntur dolores consequatur ut itaque doloribus veniam numquam consectetur. Voluptatum rem explicabo debitis nisi rerum ipsam. Est ducimus alias impedit vitae voluptatem nulla. Ducimus in animi qui nulla et.',1,'post12.jpg','2023-12-24 05:41:46','2023-12-24 05:41:46'),(13,'Maximising your tax returns','Note: This is not refected in your webiste','<p>In today&#39;s rapidly evolving financial landscape, making smart investment decisions is crucial for long-term financial stability and growth. While the allure of quick profits can be tempting, the path to true financial security lies in informed and strategic investments. This blog delves into the principles of smart financial investment and offers insights to guide both novice and seasoned investors.</p>\r\n\r\n<h3><strong>1. Understand Your Financial Goals</strong></h3>\r\n\r\n<p>Before diving into any investment, it&#39;s essential to have a clear understanding of your financial objectives. Are you investing for retirement, purchasing a home, funding education, or seeking passive income? Defining your goals will help tailor your investment strategy and risk tolerance.</p>\r\n\r\n<h3><strong>2. Educate Yourself</strong></h3>\r\n\r\n<p>The investment world is vast, with various asset classes like stocks, bonds, mutual funds, real estate, and more. Take the time to educate yourself on these options. Consider reading books, attending seminars, or consulting with financial advisors to gain a deeper understanding.</p>\r\n\r\n<h3><strong>3. Diversify Your Portfolio</strong></h3>\r\n\r\n<p>The age-old adage, &quot;Don&#39;t put all your eggs in one basket,&quot; holds true in investment. Diversifying your portfolio across different asset classes can help mitigate risks. A well-diversified portfolio can ensure that a downturn in one sector won&#39;t severely impact your overall investments.</p>\r\n\r\n<h3><strong>4. Invest Regularly and Consistently</strong></h3>\r\n\r\n<p>Consistent investing, regardless of market conditions, can help you benefit from the power of compounding. Set up automatic contributions to your investment accounts, be it a 401(k), IRA, or brokerage account. Regular investments, especially in volatile markets, can also help average out the cost of your investments over time.</p>\r\n\r\n<h3><strong>5. Monitor and Rebalance</strong></h3>\r\n\r\n<p>The financial markets are dynamic, and your investment portfolio will need periodic review. Rebalancing involves adjusting your portfolio to maintain your desired asset allocation. As certain assets outperform others, they may become a more significant portion of your portfolio, deviating from your original allocation. Regularly rebalancing ensures that you stay aligned with your investment objectives and risk tolerance.</p>\r\n\r\n<h3><strong>6. Keep Emotions in Check</strong></h3>\r\n\r\n<p>Investing can evoke strong emotions, especially during market downturns. While it&#39;s natural to feel apprehensive, it&#39;s crucial to avoid making impulsive decisions based on fear or greed. Maintain a long-term perspective, and remember that markets have historically recovered from downturns.</p>\r\n\r\n<h3><strong>7. Consider Tax Implications</strong></h3>\r\n\r\n<p>Understanding the tax implications of your investments can significantly impact your after-tax returns. Familiarize yourself with tax-efficient investment strategies, such as holding investments for more extended periods to benefit from lower capital gains tax rates or utilizing tax-advantaged accounts.</p>\r\n\r\n<h3><strong>8. Continuously Review and Educate</strong></h3>\r\n\r\n<p>The world of finance and investment is ever-changing. Regularly reviewing your investment strategy, staying updated on market trends, and continuing your financial education will empower you to make informed decisions and adapt to changing circumstances.</p>\r\n\r\n<h3><strong>Conclusion</strong></h3>\r\n\r\n<p>Smart financial investment is a journey, not a destination. By understanding your goals, educating yourself, diversifying your portfolio, investing consistently, and maintaining a disciplined approach, you can navigate the complexities of the financial markets and build a secure future. Remember, the key to successful investing lies in patience, diligence, and a commitment to lifelong learning. Happy investing!</p>',1,'post13.jpeg','2023-12-24 05:41:46','2023-12-30 04:43:41'),(25,'Making smart choices in investments','Note : This won\'t reflect in your website','<p>In today&#39;s rapidly evolving financial landscape, making smart investment decisions is crucial for long-term financial stability and growth. While the allure of quick profits can be tempting, the path to true financial security lies in informed and strategic investments. This blog delves into the principles of smart financial investment and offers insights to guide both novice and seasoned investors.</p>\r\n\r\n<h3><strong>1. Understand Your Financial Goals</strong></h3>\r\n\r\n<p>Before diving into any investment, it&#39;s essential to have a clear understanding of your financial objectives. Are you investing for retirement, purchasing a home, funding education, or seeking passive income? Defining your goals will help tailor your investment strategy and risk tolerance.</p>\r\n\r\n<h3><strong>2. Educate Yourself</strong></h3>\r\n\r\n<p>The investment world is vast, with various asset classes like stocks, bonds, mutual funds, real estate, and more. Take the time to educate yourself on these options. Consider reading books, attending seminars, or consulting with financial advisors to gain a deeper understanding.</p>\r\n\r\n<h3><strong>3. Diversify Your Portfolio</strong></h3>\r\n\r\n<p>The age-old adage, &quot;Don&#39;t put all your eggs in one basket,&quot; holds true in investment. Diversifying your portfolio across different asset classes can help mitigate risks. A well-diversified portfolio can ensure that a downturn in one sector won&#39;t severely impact your overall investments.</p>\r\n\r\n<h3><strong>4. Invest Regularly and Consistently</strong></h3>\r\n\r\n<p>Consistent investing, regardless of market conditions, can help you benefit from the power of compounding. Set up automatic contributions to your investment accounts, be it a 401(k), IRA, or brokerage account. Regular investments, especially in volatile markets, can also help average out the cost of your investments over time.</p>\r\n\r\n<h3><strong>5. Monitor and Rebalance</strong></h3>\r\n\r\n<p>The financial markets are dynamic, and your investment portfolio will need periodic review. Rebalancing involves adjusting your portfolio to maintain your desired asset allocation. As certain assets outperform others, they may become a more significant portion of your portfolio, deviating from your original allocation. Regularly rebalancing ensures that you stay aligned with your investment objectives and risk tolerance.</p>\r\n\r\n<h3><strong>6. Keep Emotions in Check</strong></h3>\r\n\r\n<p>Investing can evoke strong emotions, especially during market downturns. While it&#39;s natural to feel apprehensive, it&#39;s crucial to avoid making impulsive decisions based on fear or greed. Maintain a long-term perspective, and remember that markets have historically recovered from downturns.</p>\r\n\r\n<h3><strong>7. Consider Tax Implications</strong></h3>\r\n\r\n<p>Understanding the tax implications of your investments can significantly impact your after-tax returns. Familiarize yourself with tax-efficient investment strategies, such as holding investments for more extended periods to benefit from lower capital gains tax rates or utilizing tax-advantaged accounts.</p>\r\n\r\n<h3><strong>8. Continuously Review and Educate</strong></h3>\r\n\r\n<p>The world of finance and investment is ever-changing. Regularly reviewing your investment strategy, staying updated on market trends, and continuing your financial education will empower you to make informed decisions and adapt to changing circumstances.</p>\r\n\r\n<h3><strong>Conclusion</strong></h3>\r\n\r\n<p>Smart financial investment is a journey, not a destination. By understanding your goals, educating yourself, diversifying your portfolio, investing consistently, and maintaining a disciplined approach, you can navigate the complexities of the financial markets and build a secure future. Remember, the key to successful investing lies in patience, diligence, and a commitment to lifelong learning. Happy investing!</p>',1,'post25.jpeg','2023-12-29 14:17:18','2023-12-30 04:41:30');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `properties` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `public` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `purpose` enum('sale','rent','pg') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` bigint NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fe_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faci` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rooms` int NOT NULL,
  `bathrooms` int NOT NULL,
  `city` bigint NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cont_ph` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_em` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` int DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `video` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `floorplan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `u_id` bigint NOT NULL,
  `pro_id` bigint NOT NULL,
  `review` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `service_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (22,'srv22.jpg','<p>Accurate, meaningful, organised financial records ensure that your business operations will run more efficiently on a daily basis. We provide a full range of cost effective accounting services including:</p>\r\n\r\n<p><strong>Accounting</strong></p>\r\n\r\n<ul>\r\n	<li>General ledger maintenance</li>\r\n	<li>Annual Financial statement with compilation report</li>\r\n	<li>Management-use-only financial statements</li>\r\n	<li>Interim financial statements</li>\r\n	<li>Personal financial statements foe business owners</li>\r\n	<li>Forecasts and projected financial statements</li>\r\n	<li>Payroll preparation and compliance services: Workers compensation and Superannuation</li>\r\n	<li>MYOB and QuickBooks setup, configuration and training</li>\r\n	<li>Reconciliations</li>\r\n	<li>Fixed Assets Register maintenance</li>\r\n</ul>\r\n\r\n<p><strong>Compliances</strong></p>\r\n\r\n<p>We also assist you on a number of compliances as required by various authorities:</p>\r\n\r\n<ul>\r\n	<li>Employer superannuation contributions</li>\r\n	<li>Workers Compensation</li>\r\n	<li>ASIC compliance</li>\r\n	<li>Insurance compliance</li>\r\n	<li>Transfers of shares</li>\r\n	<li>Preparation of ASIC forms 203 and 304 as required</li>\r\n	<li>Maintenance of company statutory register</li>\r\n	<li>Appointment of public officer and Company Secretary.</li>\r\n</ul>\r\n\r\n<p><strong>Bookkeeping</strong></p>\r\n\r\n<p>Our qualified staff can assist you with the day-to-day tasks associated with bookkeeping, including training your personnel to accomplish much of the record-keeping functions through on-site or cloud accounting. We also provide training and assistance with MYOB, Quick book, XERO, Saasu and Bank link applications.</p>',NULL,'2023-12-30 04:30:59','Accounting Services'),(23,'srv23.jpg','<p>It is our job that you pay no more tax than the law requires.</p>\r\n\r\n<p><strong>Tax returns</strong></p>\r\n\r\n<p>Today&rsquo;s tax laws are so complicated that unless your financial affairs are extremely simple, chances are you will benefit from at least occasional help from tax professional. It is too easy to overlook deductions and credits to which you are entitled if you prepare only one return a year. Even the use of computer software is no substitute for the assistance of a seasoned tax preparer.</p>\r\n\r\n<p>We prepare hundreds of tax returns every year. We know what to look for when your return is prepared. More importantly, you have someone to ask questions during rest of the year. And we will put you on our mailing list to receive timely tax and financial advice.</p>\r\n\r\n<p>We monitor the changes in the tax law that affect you and recommend tax saving strategies. We will file all your tax returns and serve as your advocate in all tax matters. We assist you in rearranging the ATO payments (Payment Plan) in a way that suits you and your cash flow. Also, we assist you to remit any interests and penalties charged by ATO into your account.</p>\r\n\r\n<p>If you are contacted by ATO or any government agency concerning your tax matters, your first call should be to us. We will take care of ot so that you can get on with your business.</p>\r\n\r\n<p>The following are examples of few returns that we lodge for you:</p>\r\n\r\n<ul>\r\n	<li>Business Tax Returns</li>\r\n	<li>Individual Tax Returns</li>\r\n	<li>Rental Properties</li>\r\n	<li>Capital Gains</li>\r\n	<li>Company Tax returns</li>\r\n	<li>Partnership Tax Returns</li>\r\n	<li>Trust Tax Returns</li>\r\n	<li>Self managed Super Fund Tax Returns</li>\r\n	<li>Business Activity Statement Preparation</li>\r\n	<li>Installment Activity statement Preparation</li>\r\n	<li>FBT, payroll tax and Others</li>\r\n	<li>PAYG variation form- Negative Gearing</li>\r\n	<li>Deferral scheme application- for imports</li>\r\n</ul>\r\n\r\n<p><strong>Tax Planning</strong></p>\r\n\r\n<p>There is a certain mystique that has grown up around tax planning and tax-cutting techniques. We are here to put tax planning in plain English for you. There are actually several basic Tax-cutting strategies within a legal framework, and most plans involve one or a combination of them. In a nutshell, the strategies are:</p>\r\n\r\n<ul>\r\n	<li>Splitting income among several family members or legal entities in order to get more of the income taxed in lower brackets</li>\r\n	<li>Shifting income from one year to another in order to have it fall where it will be taxed at lower rate</li>\r\n	<li>Shifting Deductions from one year to another to place them where the tax benefit will be greater</li>\r\n	<li>Deferring tax liability through certain investment choices and through pension plan contributions</li>\r\n	<li>Investing your money to produce income that is exempt from income tax</li>\r\n</ul>',NULL,'2023-12-30 04:32:19','Tax Services'),(32,'srv32.jpeg','<p><strong>SMSF management and compliances</strong></p>\r\n\r\n<p>We provide accounting and taxation services for all self-managed super funds (SMSFs) whether they are in accumulation or pension mode. We will ensure that your SMSF is fully compliant with all government requirements and we will help you stay on top of all legislative changes. We can offer a customized SMSF package, tailored to suit your specific needs. Our SMSF services include:</p>\r\n\r\n<ul>\r\n	<li>SMSF establishment</li>\r\n	<li>Full pension management</li>\r\n	<li>Automated accounting of corporate actions</li>\r\n	<li>Comprehensive investment reports</li>\r\n	<li>Capital gains tax calculations</li>\r\n	<li>Annual member statements</li>\r\n	<li>Limited recourse borrowing</li>\r\n	<li>Commissioning annual independent audit reports</li>\r\n	<li>Actuarial certificates (where necessary)</li>\r\n	<li>Lodgment of income tax and regulatory returns</li>\r\n	<li>Annual financial statements</li>\r\n	<li>Expert SMSF technical advice</li>\r\n</ul>\r\n\r\n<p>Our SMSF clients and their advisers also have the ability to remotely access their SMSF reporting at any time for up-to-date information.</p>\r\n\r\n<p><strong>SMSF Audit</strong></p>\r\n\r\n<p>We specialise in independent Self Managed Super Fund Auditing and with over 10 years SMSF auditing experience you are in the right hands.</p>\r\n\r\n<p>We stay up to date with any changes to regulations, which is important for delivering the best value SMSF advice, SMSF service, SMSF support and SMSF templates as required.</p>\r\n\r\n<p>Using the latest technology and electronic auditing practices allows for faster turn around times on all SMSF Audit jobs to our Australia wide clientele which includes trustees, accountants and financial planners.</p>','2023-12-29 14:23:10','2023-12-30 04:34:25','Self Managed Super Fund');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `site_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_settings`
--

LOCK TABLES `site_settings` WRITE;
/*!40000 ALTER TABLE `site_settings` DISABLE KEYS */;
INSERT INTO `site_settings` VALUES (1,'email','munalaccounting@gmail.com',NULL,NULL),(2,'phone','048181223',NULL,NULL),(3,'site_title','Munal Accounting','2023-09-08 18:53:31','2023-09-08 18:53:31'),(4,'brand_title','Munal Brand','2023-09-08 18:53:31','2023-09-08 18:53:31'),(5,'meta_discription',NULL,'2023-09-08 18:53:31','2023-09-08 18:53:31'),(6,'footer_content','asas','2023-09-08 18:53:31','2023-12-17 23:16:37'),(7,'site_email','taxmunal@gmail.com','2023-09-08 18:53:31','2023-12-19 01:36:25'),(8,'site_contact','0452145677','2023-09-08 18:53:31','2023-12-19 01:36:25'),(9,'facebook_url','https://www.facebook.com/rbc.cleaning.5','2023-09-08 18:53:31','2023-09-08 18:53:31'),(10,'instagram_url',NULL,'2023-09-08 18:53:31','2023-09-08 18:53:31'),(11,'youtube_url',NULL,'2023-09-08 18:53:31','2023-09-11 05:52:28'),(12,'twitter_url',NULL,'2023-09-08 18:53:31','2023-09-08 18:53:31'),(13,'office_address','8/72 Monaro St, Queanebeyan, NSW, 2620','2023-09-09 06:26:38','2023-12-19 01:36:25'),(17,'logo_image','logo.png','2023-12-17 23:16:05','2023-12-17 23:16:05');
/*!40000 ALTER TABLE `site_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_tag_unique` (`tag`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Tag 1',NULL,NULL),(2,'Tag 2',NULL,NULL),(3,'Tag 3',NULL,NULL),(4,'Tag 4',NULL,NULL),(5,'Tag 5',NULL,NULL),(6,'Tag 6',NULL,NULL);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_data` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saved` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('U','R','A') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'R=Root, A=Admin, U=User',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
INSERT INTO `users` VALUES (1,'Admin User','admin@admin.com',NULL,'$2y$10$BVXAFDB4TNqoR/y4NxaczeisI2D3ismZ/lAkZgcSUSzW2l07eeiOG','R',NULL,'2023-09-05 00:32:47','2023-12-30 02:07:10'),(2,'Amit','achaulagain123@gmail.com',NULL,'$2y$10$iTqP/DmoxMenLISoprBTTOaX6HbD8uhjfR950HPBJ8f.W8LAmpAEG','U',NULL,'2023-09-05 00:35:48','2023-09-05 00:35:48');
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

-- Dump completed on 2023-12-31  3:01:22
