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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-14 18:30:32
