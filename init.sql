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
) ENGINE=InnoDB AUTO_INCREMENT=204 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms`
--

LOCK TABLES `cms` WRITE;
/*!40000 ALTER TABLE `cms` DISABLE KEYS */;
INSERT INTO `cms` VALUES (1,'home_title','hero','2023-09-10 18:16:40','2024-02-17 19:23:41'),(2,'home_meta','We specialise in making tax returns simple. With over 50 years as Australia’s leading taxation experts and over 400 offices, we have a convenient option for you no matter when, where and how you want to do it. We specialise in making tax returns simple. With over 50 years as Australia’s leading taxation experts and over 400 offices, we have a convenient option for you no m We specialise in making tax returns simple. With over 50 years as Australia’s leading taxation experts and over 400 offices, we have a convenient option for you no matter when, where and how you want to do it.atter when, where and how you want to do it.','2023-09-10 18:16:40','2023-12-18 21:56:51'),(3,'home_content','<p>We are a proactive, hands-on firm that harnesses the latest knowledge on the subject to provide our clients with timely, accurate, and affordable financial &amp; taxation services.</p>\r\n\r\n<hr />\r\n<h3><strong>Why Choose&nbsp;Us?</strong></h3>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Proven Track Record</strong>: With years of industry experience, our team has successfully assisted countless clients in achieving their financial objectives.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Client-Centric Approach</strong>: Your success is our priority. We dedicate ourselves to understanding your unique challenges and crafting bespoke solutions.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Continuous Learning</strong>: In an ever-evolving financial landscape, we stay abreast of the latest regulations, technologies, and best practices to deliver unparalleled service.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Integrity &amp; Confidentiality</strong>: Trust is the cornerstone of our business. We uphold the highest standards of integrity and ensure the utmost confidentiality in all client interactions.</p>\r\n	</li>\r\n</ol>','2023-09-10 18:16:40','2023-12-18 23:47:03'),(4,'about_title','We Are the Best Accounting Agency','2023-09-10 18:16:40','2023-09-11 16:03:25'),(5,'about_meta',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(6,'about_content','<p>Welcome to Munal Accounting, where precision meets passion in the world of finance. Founded in 2015, we have established ourselves as a beacon of trust, reliability, and expertise in the accounting industry.</p>\r\n\r\n<p>Our journey began with a singular vision: to redefine the way businesses perceive accounting &ndash; not just as a necessity but as an integral partner in their growth and success stories. Over the years, we&#39;ve transformed countless numbers into meaningful insights, empowering our clients to make informed decisions, optimize operations, and drive profitability.</p>\r\n\r\n<p>&nbsp;</p>','2023-09-10 18:16:40','2023-12-30 04:24:54'),(7,'faq_title','My Services','2023-09-10 18:16:40','2023-09-12 17:43:46'),(8,'faq_meta',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(9,'faq_content','<h3>Accounting</h3>\r\n\r\n<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n\r\n<h3>Tax, Compliance &amp; Payroll</h3>\r\n\r\n<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n\r\n<h3>Financial Services</h3>\r\n\r\n<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>\r\n\r\n<h3>Growth &amp; Funding Access</h3>\r\n\r\n<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>','2023-09-10 18:16:40','2023-12-16 16:00:56'),(10,'terms_title',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(11,'terms_meta',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(12,'terms_content',NULL,'2023-09-10 18:16:40','2023-09-10 18:16:40'),(13,'about_image','about.jpeg','2023-09-11 16:03:25','2024-02-28 02:12:34'),(14,'services_title','hello','2023-09-12 18:03:17','2023-09-12 18:03:17'),(15,'services_meta',NULL,'2023-09-12 18:03:17','2023-09-12 18:03:17'),(16,'services_content','<h2>Affordable Packages</h2>\r\n\r\n<ul>\r\n	<li>Brand Strategy</li>\r\n	<li>Online Marketing</li>\r\n	<li>Branding Services</li>\r\n	<li>Creative Marketing</li>\r\n	<li>Sales Management</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Affordable sdsds</h2>\r\n\r\n<ul>\r\n	<li>Brand Strategy</li>\r\n	<li>Online Marketing</li>\r\n	<li>Branding Services</li>\r\n	<li>Creative Marketing</li>\r\n	<li>Sales Management</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>','2023-09-12 18:03:17','2023-12-16 16:41:44'),(17,'home_image1','home1.jpg','2023-12-18 21:26:30','2024-02-28 02:17:54'),(18,'home_image2','home2.jpg','2023-12-18 21:26:30','2024-03-04 18:39:47'),(19,'individual_tax_header1','Get your tax return at your convenience','2024-02-17 19:23:41','2024-03-03 15:03:21'),(20,'individual_tax_content1','<p>Experience the ease of managing your tax return on your terms. Our services are designed to provide you with utmost convenience, ensuring a seamless and hassle-free process. From flexible scheduling to personalized assistance, we prioritize your convenience to make the tax return process straightforward and stress-free for you.</p>','2024-02-17 19:23:41','2024-03-03 15:01:57'),(22,'individual_tax_title','Make your tax return',NULL,'2024-02-25 16:25:20'),(25,'individual_tax_image1','individual_tax1.webp',NULL,'2024-03-05 09:07:51'),(26,'individual_tax_image2','individual_tax2.jpeg',NULL,'2024-03-05 09:12:33'),(27,'individual_tax_header2','3 Simple Steps All You Need',NULL,'2024-03-03 15:01:57'),(28,'individual_tax_content2','<p>.......</p>',NULL,'2024-02-26 20:04:11'),(29,'individual_tax_header3','Book an appointment',NULL,'2024-02-25 17:35:13'),(30,'individual_tax_content3','<p>Schedule a suitable appointment that suits your time.</p>',NULL,'2024-03-03 15:07:39'),(31,'individual_tax_header4','We will get back to  you with confirmation and checklist',NULL,'2024-03-03 15:07:39'),(32,'individual_tax_content4','<p>An email confirmation will be dispatched to you, containing a tax checklist detailing everything you should bring to your scheduled appointment.</p>',NULL,'2024-03-03 15:09:45'),(33,'individual_tax_header5','Attend your appointment with our tax specialist.',NULL,'2024-03-03 15:07:39'),(34,'individual_tax_content5','<p>Simply attend your appointment with our tax expert, and we&#39;ll swiftly secure you a maximum refund&mdash;guaranteed. It&#39;s that straightforward.</p>',NULL,'2024-03-03 15:07:39'),(35,'individual_tax_content',NULL,'2024-02-25 17:35:13','2024-02-25 17:35:13'),(36,'home_header1','Get the most out of your tax refund, here\'s the way',NULL,'2024-03-03 13:39:57'),(37,'home_content1','<p>Book an appointment with our Tax Expert or start online at your ease of convenience</p>',NULL,'2024-03-03 13:50:32'),(38,'home_header2','Why Munal ?',NULL,'2024-02-26 20:04:11'),(39,'home_content2',NULL,NULL,NULL),(40,'home_header3','Guaranteed maximum tax refund',NULL,'2024-03-03 13:50:32'),(41,'home_content3','<p>We assure you the highest possible tax refund. Our commitment is to optimize your financial returns by leveraging every available opportunity within the tax code. With our expertise and thorough analysis, we guarantee a maximum tax refund, providing you with the financial benefits you deserve.</p>',NULL,'2024-03-03 13:51:33'),(42,'home_header4','24 * 7 Service',NULL,'2024-03-03 13:50:32'),(43,'home_content4','<p>Our services are available 24/7 to cater to your needs around the clock. We understand the importance of accessibility and strive to provide 24*7 support whenever you require assistance at the time of tax season</p>',NULL,'2024-03-03 15:09:45'),(44,'home_header5','Expertise meets exceptional customer experience',NULL,'2024-03-03 13:50:32'),(45,'home_content5','<p>Our commitment goes beyond expertise; we merge it seamlessly with an exceptional customer experience. We pride ourselves on delivering not only top-notch professional knowledge but also personalized service that exceeds expectations. Your journey with us is not just about financial solutions; it&#39;s about an unparalleled experience tailored to your unique needs.</p>',NULL,'2024-03-03 13:50:32'),(46,'lodge_in_person_header1','Lodge Tax Online with an Expert',NULL,'2024-02-28 17:17:51'),(47,'lodge_in_person_content1','<p>As the foremost provider of personal tax return services in Australia, we prioritize expertise and convenience. Our commitment extends to year-round accessibility, including nights and weekends during tax season. Book an appointment with us at your availability.</p>\r\n\r\n<p>&nbsp;</p>',NULL,'2024-03-03 15:18:49'),(48,'lodge_in_person_header2','3 Simple Steps Is All You Need',NULL,'2024-03-03 15:20:51'),(49,'lodge_in_person_content2',NULL,NULL,'2024-02-26 20:24:54'),(50,'lodge_in_person_header3','Book an appointment',NULL,'2024-02-26 20:24:54'),(51,'lodge_in_person_content3','<p>Secure your spot by booking an appointment today.</p>',NULL,'2024-03-03 19:50:53'),(52,'lodge_in_person_header4','We will email you a confirmation and checklist',NULL,'2024-02-26 20:24:54'),(53,'lodge_in_person_content4','<p>We will send you an email confirmation with a tax checklist of all what you need to bring to your appointment.</p>',NULL,'2024-03-03 19:49:47'),(54,'lodge_in_person_header5','You attend your appointment in-person with our tax expert',NULL,'2024-03-03 15:18:49'),(55,'lodge_in_person_content5','<p>Attend your appointment with our tax expert and we&#39;ll get you a maximum refund guarantee in no time. It&#39;s that simple.</p>',NULL,'2024-03-03 19:49:47'),(56,'lodge_in_person_image1','lodge_in_person1.jpeg','2023-12-18 21:26:30','2024-03-05 14:26:06'),(57,'lodge_in_person_image2','lodge_in_person2.jpg','2023-12-18 21:26:30','2024-03-05 14:26:06'),(58,'online_header1','Lodge Tax Online with an Expert\n',NULL,'2024-02-26 20:24:54'),(59,'online_content1','<p>Want your return prepared by an experienced tax consultant, but can&rsquo;t make it into the office? Munal has you covered. Get the same service you expect in person, but through the convenience of our online tax specialist.</p>',NULL,'2024-03-03 15:25:44'),(60,'online_header2','3 Simple Steps Is All You Need',NULL,'2024-03-03 15:25:44'),(61,'online_content2',NULL,NULL,'2024-02-26 20:24:54'),(62,'online_header3','Book your appointment for online reservations',NULL,'2024-03-03 15:25:44'),(63,'online_content3','<p>Provide your information, upload your tax documents, and one of our tax agents will reach out to you. Your online tax consultant is readily available to address any questions you may have.</p>',NULL,'2024-03-03 19:52:36'),(64,'online_header4','Our team of experts handles the processing of your return.',NULL,'2024-03-03 15:25:44'),(65,'online_content4','<p>Upon receiving all your information, we meticulously craft your tax return, ensuring no deductions or offsets are overlooked. After the diligent preparation, simply review your tax return online. Once satisfied, grant us the approval to proceed with lodging it on your behalf.</p>',NULL,'2024-03-03 15:25:44'),(66,'online_header5','You can now anticipate for your refund.',NULL,'2024-03-03 15:25:44'),(67,'online_content5','<p>With a quick turnaround on your returns and refund from the ATO, there are no long waiting periods.</p>',NULL,'2024-02-27 06:25:56'),(68,'online_image1','online1.jpeg','2023-12-18 21:26:30','2024-03-05 14:32:27'),(69,'online_image2','online2.jpg','2023-12-18 21:26:30','2024-03-05 14:36:14'),(70,'tax_review_header1','Tax Review',NULL,'2024-03-03 20:11:05'),(71,'tax_review_content1','<p>If you&#39;re unsure whether you&#39;ve received your maximum refund, schedule a complimentary second look to your tax return. You still have the opportunity to receive a tax refund.</p>',NULL,'2024-03-03 20:11:05'),(72,'tax_review_header2','3 Simple Steps Is All You Need To Tax Review',NULL,'2024-03-03 20:11:05'),(73,'tax_review_content2',NULL,NULL,'2024-02-26 20:24:54'),(74,'tax_review_header3','You bring in your old tax return',NULL,'2024-02-27 06:25:56'),(75,'tax_review_content3','<p>Provide us with your tax return from the previous year.&nbsp;</p>',NULL,'2024-03-03 20:11:05'),(76,'tax_review_header4','We will review at your tax return',NULL,'2024-03-03 20:11:05'),(77,'tax_review_content4','<p>We will meticulously review your previous tax returns, looking for the space for any additional deductions to which you may still be entitled.</p>',NULL,'2024-03-03 20:13:12'),(78,'tax_review_header5','We will file an adjustment with the ATO',NULL,'2024-02-27 06:25:56'),(79,'tax_review_content5','<p>We will initiate an amendment to ensure you receive the money that was initially overlooked. Stay calm and you can still expect for refund.</p>',NULL,'2024-03-03 20:11:05'),(80,'tax_review_image1','tax_review1.jpeg','2023-12-18 21:26:30','2024-03-05 14:38:59'),(81,'tax_review_image2','tax_review2.jpeg','2023-12-18 21:26:30','2024-03-05 14:38:59'),(82,'tax_review_content6','<p>Our meticulous process begins with a comprehensive review of your previous tax returns, a detailed examination aimed at uncovering any overlooked deductions or entitlements. This thorough analysis is driven by our commitment to maximizing your financial benefits.</p>\r\n\r\n<p>In instances where errors made by other tax preparers are identified, we take proactive steps to file an amendment. This not only rectifies the mistakes but ensures you reclaim any funds that may have been initially overlooked or improperly handled. Our dedication to accuracy and financial optimization guarantees that you receive the full financial benefits you are entitled to, providing you with peace of mind and confidence in your tax affairs.</p>',NULL,'2024-03-03 20:11:05'),(83,'tax_review_content7','<p>&nbsp;</p>\r\n\r\n<p>With our Tax Review Service, you gain the peace of mind that comes from knowing your taxes are not only accurate but that you&#39;ve obtained the maximum financial benefit available under Australian tax regulations.</p>',NULL,'2024-03-03 20:11:46'),(84,'business_services_header1','Business Services',NULL,'2024-02-27 08:31:41'),(85,'business_services_content1','<p>With our support, you can focus on your core business activities, confident that your accounting and tax affairs are in capable hands.</p>',NULL,'2024-03-03 20:18:57'),(86,'business_services_header2','Sole Trader & Partnership',NULL,'2024-02-27 08:31:41'),(87,'business_services_content2','<p>We specialize in providing support and guidance to sole traders or partnerships. Ask us your questions.</p>',NULL,'2024-03-03 20:39:57'),(88,'business_services_header3','Company & Trust',NULL,'2024-02-27 08:31:41'),(89,'business_services_content3','<p>Let us handle the accounting and tax responsibilities associated with running a business.&nbsp;You can concentrate on core business activities, while we care of all your accounting and tax affairs.</p>',NULL,'2024-03-03 20:38:06'),(90,'business_services_header4','Bookkeeping & Payroll',NULL,'2024-02-27 08:31:41'),(91,'business_services_content4','<p>Our proficient chartered accountants possess extensive expertise in diverse accounting services, bookkeeping and payroll.&nbsp;</p>',NULL,'2024-03-03 20:50:10'),(94,'business_services_image1','business_services1.webp','2023-12-18 21:26:30','2024-03-05 14:55:21'),(95,'business_services_image2','business_services2.jpg','2023-12-18 21:26:30','2024-02-11 01:29:54'),(96,'business_services_image3','business_services3.jpeg','2023-12-18 21:26:30','2024-03-05 14:56:56'),(97,'small_business_header1','Sole Trader & Small Business Tax Returns',NULL,'2024-02-27 08:31:41'),(98,'small_business_content1','<p>Whether your business operates as a sole trader or partnership, we provide tailored assistance. Our suite of small business services is designed to enhance the efficiency of your financial operations, offering support to streamline and optimize your finances.</p>',NULL,'2024-03-03 20:53:59'),(99,'small_business_header2','What we offer to Small Business?',NULL,'2024-03-03 20:53:59'),(100,'small_business_content2',NULL,NULL,'2024-02-27 08:31:41'),(101,'small_business_header3','Bookkeeping',NULL,'2024-03-03 21:01:02'),(102,'small_business_content3','<ul>\r\n	<li>Recording financial transaction</li>\r\n	<li>Maintaining ledgers and accounts</li>\r\n	<li>Reconciling bank statements</li>\r\n</ul>',NULL,'2024-03-03 21:01:02'),(103,'small_business_header4','Tax Preparation and Planning',NULL,'2024-03-03 21:01:02'),(104,'small_business_content4','<ul>\r\n	<li>Preparing and filing tax returns</li>\r\n	<li>Ensuring compliance with tax regulations</li>\r\n	<li>Offering tax planning advice to optimize financial outcomes</li>\r\n</ul>\r\n\r\n<ul>\r\n</ul>',NULL,'2024-03-03 21:01:02'),(105,'small_business_header5','Financial Statement Preparation',NULL,'2024-03-03 21:06:14'),(106,'small_business_content5','<ul>\r\n	<li>Compiling income statements, balance sheets, and cash flow statements</li>\r\n	<li>Providing accurate and up-to-date financial reporting</li>\r\n</ul>',NULL,'2024-03-03 21:01:02'),(107,'small_business_header6','Payroll Services',NULL,'2024-03-03 21:06:14'),(108,'small_business_content6','<ul>\r\n	<li>Calculating and processing employee wages</li>\r\n	<li>Ensuring compliance with payroll tax regulations</li>\r\n	<li>Managing superannuation contributions</li>\r\n</ul>',NULL,'2024-03-03 21:06:14'),(109,'small_business_header7','Audit and Assurance',NULL,'2024-03-03 21:06:14'),(110,'small_business_content7','<ul>\r\n	<li>Conducting audits to verify financial information</li>\r\n	<li>Ensuring compliance with accounting standards and regulations</li>\r\n</ul>',NULL,'2024-03-03 21:06:14'),(111,'small_business_header8','Software Implementation',NULL,'2024-03-03 21:06:14'),(112,'small_business_content8','<ul>\r\n	<li>Implementing and optimizing accounting software</li>\r\n	<li>Providing training on software usage</li>\r\n</ul>',NULL,'2024-03-03 21:06:14'),(113,'small_business_image1','small_business1.jpg','2023-12-18 21:26:30','2024-02-11 01:29:36'),(114,'bas_header1','Comprehensive solutions to BAS requirements.',NULL,'2024-03-03 21:19:46'),(115,'bas_content1','<p>Take the hassle out of BAS reporting and compliance. Partner with us&nbsp; for unparalleled expertise and dedicated support. Contact us today to discuss how we can assist ensure your business remains compliant, efficient and financially sound.</p>',NULL,'2024-03-03 21:19:46'),(116,'bas_header2','What we offer ?',NULL,'2024-02-27 08:31:41'),(117,'bas_content2',NULL,NULL,'2024-02-27 08:31:41'),(118,'bas_header3','BAS Preparation',NULL,'2024-03-03 21:19:46'),(119,'bas_content3','<p>Compiling and organizing financial data required for the Business Activity Statement</p>',NULL,'2024-03-03 21:19:46'),(120,'bas_header4','GST Compliance',NULL,'2024-03-03 21:19:46'),(121,'bas_content4','<p>Ensuring accurate calculation and reporting of Goods and Services Tax (GST).</p>',NULL,'2024-03-03 21:19:46'),(122,'bas_header5','PAYG Withholding',NULL,'2024-03-03 21:19:46'),(123,'bas_content5','<p>Managing and reporting Pay As You Go (PAYG) withholding for employee salaries.</p>',NULL,'2024-03-03 21:19:46'),(124,'bas_header6','Record-Keeping',NULL,'2024-03-03 21:19:46'),(125,'bas_content6','<p>Maintaining accurate financial records to support the information reported in the BAS.</p>',NULL,'2024-03-03 21:19:46'),(126,'bas_header7','Submission to ATO',NULL,'2024-03-03 21:19:46'),(127,'bas_content7','<p>Lodging the completed BAS form with the Australian Taxation Office on behalf of the client.</p>',NULL,'2024-03-03 21:19:46'),(128,'bas_header8','Compliance Check',NULL,'2024-03-03 21:19:46'),(129,'bas_content8','<p>Conducting checks to ensure that the business is complying with relevant tax regulations.</p>',NULL,'2024-03-03 21:19:46'),(130,'bas_image1','bas1.jpg','2023-12-18 21:26:30','2024-03-05 14:58:28'),(131,'company_accounting_header1','Managing Your Company & Trust Accounting Requisites',NULL,'2024-03-03 21:52:36'),(132,'company_accounting_content1','<p>We&#39;re here to assist you at every stage of managing accounting and tax responsibilities throughout the course of your business.&quot;</p>',NULL,'2024-03-03 21:52:36'),(133,'company_accounting_header2','What we offer ?',NULL,'2024-03-03 21:52:36'),(134,'company_accounting_content2',NULL,NULL,'2024-02-28 01:23:56'),(135,'company_accounting_header3','Financial Statement Preparation',NULL,'2024-03-03 21:52:36'),(136,'company_accounting_header4','Bookkeeping Services',NULL,'2024-03-03 21:52:36'),(137,'company_accounting_header5','Tax Planning and Compliance',NULL,'2024-03-03 21:52:36'),(138,'company_accounting_header6','Payroll Management',NULL,'2024-03-03 21:52:36'),(139,'company_accounting_header7','Audit and Assurance',NULL,'2024-03-03 21:52:36'),(140,'company_accounting_header8','Record-Keeping and Compliance',NULL,'2024-03-03 21:52:36'),(141,'company_accounting_header9','Software Implementation and Training',NULL,'2024-03-03 21:52:36'),(142,'company_accounting_header10','Tax Return Preparation:',NULL,'2024-03-03 21:52:36'),(143,'company_accounting_image1','company_accounting1.webp','2023-12-18 21:26:30','2024-03-05 14:59:49'),(144,'bookkeeping_header1','Precision in Every Penny to balance your finance',NULL,'2024-03-03 21:59:36'),(145,'bookkeeping_content1','<p>Discover Seamless Financial Management with Our Expert Bookkeeping Services</p>',NULL,'2024-03-03 21:59:36'),(146,'bookkeeping_header2','What we really offer ?',NULL,'2024-03-03 21:59:36'),(147,'bookkeeping_content2',NULL,NULL,'2024-02-28 01:23:56'),(148,'bookkeeping_header3','Accurate Record-Keeping',NULL,'2024-03-03 21:59:36'),(149,'bookkeeping_header4','Ledger Maintenance',NULL,'2024-03-03 21:59:36'),(150,'bookkeeping_header5','PAYROLL & SUPERANNUATION',NULL,'2024-02-28 01:23:56'),(151,'bookkeeping_header6','BAS LODGEMENTS',NULL,'2024-03-03 21:59:36'),(152,'bookkeeping_header7','ACCOUNTING SOFTWARE SET-UP',NULL,'2024-03-03 21:59:36'),(153,'bookkeeping_header8','Customized Reporting',NULL,'2024-03-03 21:59:36'),(154,'bookkeeping_header9','CASHFLOW MANAGEMENT',NULL,'2024-02-28 01:23:56'),(155,'bookkeeping_header10','BENCHMARKING & KPI-TRACKING',NULL,'2024-02-28 01:23:56'),(156,'bookkeeping_image1','bookkeeping1.jpg','2023-12-18 21:26:30','2024-02-11 01:29:36'),(157,'smsf_header1','Self Managed Super Fund Setup and Audit Solutions',NULL,'2024-02-28 01:23:56'),(158,'smsf_content1','<p>Discover the power of H&amp;R Block&#39;s SMSF setup and management solutions! Our experts will manage the complexities, relieving you of stress. Rest easy knowing that your SMSF is in capable hands.</p>',NULL,'2024-02-28 01:23:56'),(159,'smsf_header2','What we offer ?',NULL,'2024-02-28 01:23:56'),(160,'smsf_content2','<p>H&amp;R Block simplifies the SMSF establishment process by providing a hassle free, execution only service. We prepare all legal documents, undertake registrations with ASIC and the ATO and will guide you through the entire setup process until you are ready to invest from your SMSF.</p>',NULL,'2024-02-28 01:23:56'),(161,'smsf_header3','ESTABLISHING SMSF',NULL,'2024-02-28 01:23:56'),(162,'smsf_content3','H&R Block simplifies the SMSF establishment process by providing a hassle free, execution only service. We prepare all legal documents, undertake registrations with ASIC and the ATO and will guide you through the entire setup process until you are ready to invest from your SMSF.\n',NULL,'2024-02-27 08:31:41'),(163,'smsf_header4','MONITORING CONTRIBUTIONS AND ROLLOVERS',NULL,'2024-02-28 01:23:56'),(164,'smsf_content4','<p>H&amp;R Block will assist ongoing SMSF clients my monitoring contributions and assessing them against the relevant thresholds. We can also assist with the facilitation of rollovers/contributions into the SMSF by providing your SMSF with an active electronic service address (ESA) to adhere to Superstream regulations. .</p>',NULL,'2024-02-28 01:23:56'),(165,'smsf_header5','ESTABLISHING AND MANAGING SMSF PENSION ACCOUNTS',NULL,'2024-02-28 01:23:56'),(166,'smsf_content5','<p>H&amp;R Block can provide you access to our secure online reporting platform where you can view and keep track of your SMSF data in real time. Transactions are updated regularly and a variety of member and investment reports can be generated to help you better manage your SMSF&rsquo;s investment and performance. .</p>',NULL,'2024-02-28 01:23:56'),(167,'smsf_header6','ESTABLISHING AND MANAGING SMSF PENSION ACCOUNTS',NULL,'2024-02-28 01:23:56'),(168,'smsf_content6',' H&R Block can assist SMSF clients by setting up Account Based Pensions, calculating minimum pension drawdowns and providing all legal documents. We will monitor pension drawdowns for ongoing clients to ensure minimum annual payments are being met in accordance with SISR regulations. .\n',NULL,'2024-02-27 08:31:41'),(169,'smsf_header7','BORROWING TO PURCHASE PROPERTY IN YOUR SMSF',NULL,'2024-02-28 01:23:56'),(170,'smsf_content7','H&R Block can assist with establishing the relevant structure to enable your SMSF to undertake a limited recourse borrowing arrangement with a lender (including related party lending) to facilitate property purchases with your SMSF. .\n',NULL,'2024-02-27 08:31:41'),(171,'smsf_header8','TAX, FINANCIAL & STATUTORY REPORTING REQUIREMENTS',NULL,'2024-02-28 01:23:56'),(172,'smsf_content8',' H&R Block can assist in preparing and completing the annual SMSF financial & member statements, annual taxation and statutory returns and the independent audit. We can also assist with all other ATO compliance obligations that may arise including BAS & PAYG lodgements and TBAR reporting requirements. .\n',NULL,'2024-02-27 08:31:41'),(173,'smsf_header9','REAL-TIME DATA & REPORTING\n',NULL,'2024-02-27 08:31:41'),(174,'smsf_content9',' H&R Block can provide you access to our secure online reporting platform where you can view and keep track of your SMSF data in real time. Transactions are updated regularly and a variety of member and investment reports can be generated to help you better manage your SMSF’s investment and performance. .\n',NULL,'2024-02-27 08:31:41'),(175,'smsf_header10','ESTABLISHING AND MANAGING SMSF PENSION ACCOUNTS',NULL,'2024-02-28 01:23:56'),(176,'smsf_content10','<p>H&amp;R Block can assist SMSF clients by setting up Account Based Pensions, calculating minimum pension drawdowns and providing all legal documents. We will monitor pension drawdowns for ongoing clients to ensure minimum annual payments are being met in accordance with SISR regulations. .</p>',NULL,'2024-02-28 01:23:56'),(177,'smsf_header11','WINDING UP A SMSF & ESTATE PLANNING',NULL,'2024-02-28 01:23:56'),(178,'smsf_content11','<p>Ongoing clients will have the support of our team of qualified SMSF specialists who can assist with a variety of tax and compliance related superannuation queries and strategies. We can also provide specific superannuation tax advice and assist with ATO audits. .</p>',NULL,'2024-02-28 01:23:56'),(179,'smsf_header12','SPECIALIST SUPPORT',NULL,'2024-03-03 13:39:57'),(180,'smsf_content12',' Ongoing clients will have the support of our team of qualified SMSF specialists who can assist with a variety of tax and compliance related superannuation queries and strategies. We can also provide specific superannuation tax advice and assist with ATO audits. . ',NULL,'2024-02-27 08:31:41'),(181,'smsf_image1','smsf1.jpeg','2023-12-18 21:26:30','2024-02-28 17:31:01'),(182,'financial_planning_header1','Financial Planning & Advice',NULL,'2024-02-28 01:23:56'),(183,'financial_planning_content1','<p>H&amp;R Block has partnered with Lydian Financial Services &amp; My Money Sorted, leading Australian providers of lending and financial advice, to assist you with all your financial requirements.</p>',NULL,'2024-02-28 01:23:56'),(184,'financial_planning_header2','We help you with Financial Planning & Advice',NULL,'2024-02-28 01:23:56'),(185,'financial_planning_content2',NULL,NULL,'2024-02-28 01:23:56'),(186,'financial_planning_header3','We offer broad range of services',NULL,'2024-02-28 01:23:56'),(187,'financial_planning_content3','',NULL,'2024-02-27 08:31:41'),(188,'financial_planning_header4','LENDING & FINANCE',NULL,'2024-02-28 01:23:56'),(189,'financial_planning_header5','SAVINGS & INVESTMENTS',NULL,'2024-02-28 01:23:56'),(190,'financial_planning_header6','RETIREMENT PLANNING',NULL,'2024-02-28 01:23:56'),(191,'financial_planning_header7','SUPERANNUATION',NULL,'2024-02-27 08:31:41'),(192,'financial_planning_header8','WILLS & ESTATE PLANNING',NULL,'2024-02-28 01:23:56'),(193,'financial_planning_header9','FINANCIAL PLANNING & ADVICE\n',NULL,'2024-02-27 08:31:41'),(194,'financial_planning_image1','financial_planning1.png','2023-12-18 21:26:30','2024-02-28 17:31:23'),(195,'financial_planning_image2','financial_planning2.jpg','2023-12-18 21:26:30','2024-02-28 17:31:23'),(196,'financial_services_header1','Financial Services',NULL,'2024-02-28 17:17:51'),(197,'financial_services_content1','<p>Empowering Your Finances, Enriching Your Future: Our Expertise, Your Prosperity</p>',NULL,'2024-03-03 22:03:41'),(198,'financial_services_header2','Self Managed Super Funds (SMSF)',NULL,'2024-02-28 17:17:51'),(199,'financial_services_content2','<p>Are you looking to apply for a new mortgage or refinance an existing mortgage at a better rate? Would you like to develop your retirement pathway plan? We have good news for you!</p>',NULL,'2024-03-04 16:53:08'),(200,'financial_services_header3','Loans and Financial Advice',NULL,'2024-02-28 17:17:51'),(201,'financial_services_content3','Are you looking to apply for a new mortgage or refinance an existing mortgage at a better rate? Would you like to develop your retirement pathway plan? We have good news for you!\n\n',NULL,'2024-02-27 08:31:41'),(202,'financial_services_image1','financial_services1.jpg','2023-12-18 21:26:30','2024-02-11 01:29:36'),(203,'financial_services_image2','financial_services2.png','2023-12-18 21:26:30','2024-02-28 17:30:32');
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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallaries`
--

LOCK TABLES `gallaries` WRITE;
/*!40000 ALTER TABLE `gallaries` DISABLE KEYS */;
INSERT INTO `gallaries` VALUES (39,'slider39.jpeg','hey yo','2024-01-04 03:15:03','2024-01-04 03:27:59');
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
INSERT INTO `posts` VALUES (3,'doloribus modi et ut','Insights & Advice','<p>Exercitationem id voluptatum consequatur quia commodi explicabo. Repellat atque laborum saepe sint. In est quod dolore fugit sint. Voluptatum quis earum modi suscipit quis ea doloribus. Numquam consequatur asperiores eum ipsa blanditiis asperiores. Ut et consequatur officiis ex fuga ut nobis. Rerum voluptate ipsam quidem deleniti. Consequuntur omnis ducimus eum qui numquam rerum officiis ducimus. Quos et non quo alias. Earum quas voluptate dolorem et consequatur consectetur impedit. Eius ut dolor doloribus vel soluta cupiditate. Id sunt magnam dolorem fugit sunt. Repellendus sit illum ut rerum porro nobis voluptates. Et et ratione ut error rerum ducimus labore. Debitis omnis ducimus omnis qui. Quae id consectetur illum itaque magni. Omnis qui ea recusandae sed itaque ut accusamus. Sed velit quaerat quam necessitatibus et. Rerum dolorum corrupti suscipit pariatur cupiditate aperiam. Nobis nemo enim omnis qui asperiores beatae qui. Voluptatem numquam incidunt recusandae sunt tempore dolores. Assumenda blanditiis debitis aperiam quo et aut dolores. Et iusto pariatur recusandae quae et. Atque quo nihil nihil quis error qui exercitationem non. Ipsa deserunt animi dicta laborum aspernatur quas unde. Nihil natus est velit hic sapiente labore facilis. Necessitatibus corrupti doloribus aut soluta molestias iusto ea. Quidem porro perferendis non veniam. Qui corrupti quis porro ipsa. Quaerat libero repudiandae aut repudiandae nihil rem. Repellendus quos reiciendis quam voluptas et perspiciatis perferendis quae.</p>',1,'post3.jpg','2023-12-24 05:36:53','2023-12-28 14:19:54'),(12,'laudantium est voluptas maiores','Investment & Planning','Molestiae sed provident voluptatem perspiciatis et iure. Aut molestiae est excepturi assumenda magni facere. Et et quia assumenda alias.\n\nLaudantium aut temporibus earum. Voluptas nisi sint unde quod consequuntur numquam. Quae mollitia unde velit enim aliquid. Quos provident ipsa qui cumque enim nostrum.\n\nVel dolor expedita nam distinctio soluta accusantium. Sapiente ea ea autem aperiam.\n\nOmnis quas doloribus aut consectetur. Autem qui voluptatem cum fugit. Neque impedit hic sint et voluptate blanditiis. Aut aliquam qui quia deleniti rerum.\n\nFacilis commodi voluptas inventore fuga doloribus. Quo magni nostrum exercitationem corporis at nam explicabo. Cum placeat maiores dolores facere. Dolorum ut aspernatur et molestiae similique cumque excepturi.\n\nDistinctio animi voluptatem inventore quis expedita ex. Fuga temporibus qui veniam porro aliquid. Aut ducimus quia velit quas laborum veritatis. Tenetur omnis eveniet in aut.\n\nLaboriosam sit rerum et ex provident repellat. Ut tempora aut corrupti doloremque quam placeat odit. Ducimus dicta sint vel. Aliquam est porro dicta est minima nisi.\n\nConsequuntur dolores consequatur ut itaque doloribus veniam numquam consectetur. Voluptatum rem explicabo debitis nisi rerum ipsam. Est ducimus alias impedit vitae voluptatem nulla. Ducimus in animi qui nulla et.',1,'post12.jpg','2023-12-24 05:41:46','2023-12-24 05:41:46'),(13,'Maximising your tax returns','Tax Tips','<p>In today&#39;s rapidly evolving financial landscape, making smart investment decisions is crucial for long-term financial stability and growth. While the allure of quick profits can be tempting, the path to true financial security lies in informed and strategic investments. This blog delves into the principles of smart financial investment and offers insights to guide both novice and seasoned investors.</p>\r\n\r\n<h3><strong>1. Understand Your Financial Goals</strong></h3>\r\n\r\n<p>Before diving into any investment, it&#39;s essential to have a clear understanding of your financial objectives. Are you investing for retirement, purchasing a home, funding education, or seeking passive income? Defining your goals will help tailor your investment strategy and risk tolerance.</p>\r\n\r\n<h3><strong>2. Educate Yourself</strong></h3>\r\n\r\n<p>The investment world is vast, with various asset classes like stocks, bonds, mutual funds, real estate, and more. Take the time to educate yourself on these options. Consider reading books, attending seminars, or consulting with financial advisors to gain a deeper understanding.</p>\r\n\r\n<h3><strong>3. Diversify Your Portfolio</strong></h3>\r\n\r\n<p>The age-old adage, &quot;Don&#39;t put all your eggs in one basket,&quot; holds true in investment. Diversifying your portfolio across different asset classes can help mitigate risks. A well-diversified portfolio can ensure that a downturn in one sector won&#39;t severely impact your overall investments.</p>\r\n\r\n<h3><strong>4. Invest Regularly and Consistently</strong></h3>\r\n\r\n<p>Consistent investing, regardless of market conditions, can help you benefit from the power of compounding. Set up automatic contributions to your investment accounts, be it a 401(k), IRA, or brokerage account. Regular investments, especially in volatile markets, can also help average out the cost of your investments over time.</p>\r\n\r\n<h3><strong>5. Monitor and Rebalance</strong></h3>\r\n\r\n<p>The financial markets are dynamic, and your investment portfolio will need periodic review. Rebalancing involves adjusting your portfolio to maintain your desired asset allocation. As certain assets outperform others, they may become a more significant portion of your portfolio, deviating from your original allocation. Regularly rebalancing ensures that you stay aligned with your investment objectives and risk tolerance.</p>\r\n\r\n<h3><strong>6. Keep Emotions in Check</strong></h3>\r\n\r\n<p>Investing can evoke strong emotions, especially during market downturns. While it&#39;s natural to feel apprehensive, it&#39;s crucial to avoid making impulsive decisions based on fear or greed. Maintain a long-term perspective, and remember that markets have historically recovered from downturns.</p>\r\n\r\n<h3><strong>7. Consider Tax Implications</strong></h3>\r\n\r\n<p>Understanding the tax implications of your investments can significantly impact your after-tax returns. Familiarize yourself with tax-efficient investment strategies, such as holding investments for more extended periods to benefit from lower capital gains tax rates or utilizing tax-advantaged accounts.</p>\r\n\r\n<h3><strong>8. Continuously Review and Educate</strong></h3>\r\n\r\n<p>The world of finance and investment is ever-changing. Regularly reviewing your investment strategy, staying updated on market trends, and continuing your financial education will empower you to make informed decisions and adapt to changing circumstances.</p>\r\n\r\n<h3><strong>Conclusion</strong></h3>\r\n\r\n<p>Smart financial investment is a journey, not a destination. By understanding your goals, educating yourself, diversifying your portfolio, investing consistently, and maintaining a disciplined approach, you can navigate the complexities of the financial markets and build a secure future. Remember, the key to successful investing lies in patience, diligence, and a commitment to lifelong learning. Happy investing!</p>',1,'post13.jpeg','2023-12-24 05:41:46','2023-12-30 04:43:41'),(25,'Making smart choices in investments','Investment & Planning','<p>In today&#39;s rapidly evolving financial landscape, making smart investment decisions is crucial for long-term financial stability and growth. While the allure of quick profits can be tempting, the path to true financial security lies in informed and strategic investments. This blog delves into the principles of smart financial investment and offers insights to guide both novice and seasoned investors.</p>\r\n\r\n<h3><strong>1. Understand Your Financial Goals</strong></h3>\r\n\r\n<p>Before diving into any investment, it&#39;s essential to have a clear understanding of your financial objectives. Are you investing for retirement, purchasing a home, funding education, or seeking passive income? Defining your goals will help tailor your investment strategy and risk tolerance.</p>\r\n\r\n<h3><strong>2. Educate Yourself</strong></h3>\r\n\r\n<p>The investment world is vast, with various asset classes like stocks, bonds, mutual funds, real estate, and more. Take the time to educate yourself on these options. Consider reading books, attending seminars, or consulting with financial advisors to gain a deeper understanding.</p>\r\n\r\n<h3><strong>3. Diversify Your Portfolio</strong></h3>\r\n\r\n<p>The age-old adage, &quot;Don&#39;t put all your eggs in one basket,&quot; holds true in investment. Diversifying your portfolio across different asset classes can help mitigate risks. A well-diversified portfolio can ensure that a downturn in one sector won&#39;t severely impact your overall investments.</p>\r\n\r\n<h3><strong>4. Invest Regularly and Consistently</strong></h3>\r\n\r\n<p>Consistent investing, regardless of market conditions, can help you benefit from the power of compounding. Set up automatic contributions to your investment accounts, be it a 401(k), IRA, or brokerage account. Regular investments, especially in volatile markets, can also help average out the cost of your investments over time.</p>\r\n\r\n<h3><strong>5. Monitor and Rebalance</strong></h3>\r\n\r\n<p>The financial markets are dynamic, and your investment portfolio will need periodic review. Rebalancing involves adjusting your portfolio to maintain your desired asset allocation. As certain assets outperform others, they may become a more significant portion of your portfolio, deviating from your original allocation. Regularly rebalancing ensures that you stay aligned with your investment objectives and risk tolerance.</p>\r\n\r\n<h3><strong>6. Keep Emotions in Check</strong></h3>\r\n\r\n<p>Investing can evoke strong emotions, especially during market downturns. While it&#39;s natural to feel apprehensive, it&#39;s crucial to avoid making impulsive decisions based on fear or greed. Maintain a long-term perspective, and remember that markets have historically recovered from downturns.</p>\r\n\r\n<h3><strong>7. Consider Tax Implications</strong></h3>\r\n\r\n<p>Understanding the tax implications of your investments can significantly impact your after-tax returns. Familiarize yourself with tax-efficient investment strategies, such as holding investments for more extended periods to benefit from lower capital gains tax rates or utilizing tax-advantaged accounts.</p>\r\n\r\n<h3><strong>8. Continuously Review and Educate</strong></h3>\r\n\r\n<p>The world of finance and investment is ever-changing. Regularly reviewing your investment strategy, staying updated on market trends, and continuing your financial education will empower you to make informed decisions and adapt to changing circumstances.</p>\r\n\r\n<h3><strong>Conclusion</strong></h3>\r\n\r\n<p>Smart financial investment is a journey, not a destination. By understanding your goals, educating yourself, diversifying your portfolio, investing consistently, and maintaining a disciplined approach, you can navigate the complexities of the financial markets and build a secure future. Remember, the key to successful investing lies in patience, diligence, and a commitment to lifelong learning. Happy investing!</p>',1,'post25.jpeg','2023-12-29 14:17:18','2024-03-03 08:23:56');
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_settings`
--

LOCK TABLES `site_settings` WRITE;
/*!40000 ALTER TABLE `site_settings` DISABLE KEYS */;
INSERT INTO `site_settings` VALUES (1,'email','munalaccounting@gmail.com',NULL,NULL),(2,'phone','0452145677',NULL,NULL),(3,'site_title','Munal Accounting','2023-09-08 18:53:31','2023-09-08 18:53:31'),(4,'brand_title','Munal Brand','2023-09-08 18:53:31','2023-09-08 18:53:31'),(5,'meta_discription',NULL,'2023-09-08 18:53:31','2023-09-08 18:53:31'),(6,'footer_content','asas','2023-09-08 18:53:31','2023-12-17 23:16:37'),(7,'site_email','taxmunal@gmail.com','2023-09-08 18:53:31','2023-12-19 01:36:25'),(8,'site_contact','0452145677','2023-09-08 18:53:31','2023-12-19 01:36:25'),(9,'facebook_url','https://www.facebook.com/rbc.cleaning.5','2023-09-08 18:53:31','2023-09-08 18:53:31'),(10,'instagram_url',NULL,'2023-09-08 18:53:31','2023-09-08 18:53:31'),(11,'youtube_url',NULL,'2023-09-08 18:53:31','2023-09-11 05:52:28'),(12,'twitter_url',NULL,'2023-09-08 18:53:31','2023-09-08 18:53:31'),(13,'office_address','8/72 Monaro St, Queanebeyan, NSW, 2620','2023-09-09 06:26:38','2023-12-19 01:36:25'),(17,'logo_image','logo.png','2023-12-17 23:16:05','2023-12-17 23:16:05'),(18,'popup_content','7 individuals have recently scheduled appointments with our team for consultations. If you\'re seeking professional advice or guidance, book your appointment now to secure your spot and benefit from our expertise. We look forward to assisting you!','2023-12-17 23:16:05','2023-12-17 23:16:05');
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

-- Dump completed on 2024-03-06 14:58:35
