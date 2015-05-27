-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: dbmylaravel
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `info_kriminalitas`
--

DROP TABLE IF EXISTS `info_kriminalitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info_kriminalitas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kecamatan_id` int(11) NOT NULL,
  `kelurahan_id` int(11) NOT NULL,
  `namakriminalitas_id` int(11) NOT NULL,
  `informasi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_kriminalitas`
--

LOCK TABLES `info_kriminalitas` WRITE;
/*!40000 ALTER TABLE `info_kriminalitas` DISABLE KEYS */;
INSERT INTO `info_kriminalitas` VALUES (1,1,5,1,'Mencoba mengisi Informasi kriminalitas pada lokasi kecamatan Samarinda Ulu, Kelurahan Air Putih dan Jenisnya adalah pencurian, terima kasih','2015-05-25 17:07:05','2015-05-25 23:19:25');
/*!40000 ALTER TABLE `info_kriminalitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kecamatans`
--

DROP TABLE IF EXISTS `kecamatans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kecamatans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kecamatans`
--

LOCK TABLES `kecamatans` WRITE;
/*!40000 ALTER TABLE `kecamatans` DISABLE KEYS */;
INSERT INTO `kecamatans` VALUES (1,'Samarinda Ulu','2015-05-23 14:50:22','2015-05-23 14:50:22'),(2,'Samarinda Ilir','2015-05-23 14:50:46','2015-05-23 15:04:00'),(3,'Palaran','2015-05-24 21:44:51','2015-05-24 21:44:51'),(4,'Samarinda Seberang','2015-05-24 21:45:02','2015-05-24 21:45:02'),(5,'Samarinda Utara','2015-05-24 21:45:21','2015-05-24 21:45:21');
/*!40000 ALTER TABLE `kecamatans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelurahans`
--

DROP TABLE IF EXISTS `kelurahans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelurahans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kecamatan_id` int(11) NOT NULL,
  `nama_kelurahan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelurahans`
--

LOCK TABLES `kelurahans` WRITE;
/*!40000 ALTER TABLE `kelurahans` DISABLE KEYS */;
INSERT INTO `kelurahans` VALUES (1,1,'Teluk Lerong Ilir','2015-05-23 23:21:09','2015-05-23 23:21:09'),(2,2,'Selili','2015-05-24 00:12:19','2015-05-24 18:01:51'),(3,1,'Air Putih','2015-05-24 21:46:13','2015-05-24 21:46:13'),(4,1,'Sidodadi','2015-05-24 21:46:29','2015-05-24 21:46:29'),(5,1,'Air Hitam','2015-05-24 21:46:37','2015-05-24 21:46:37'),(6,1,'Gunung Kelua','2015-05-24 21:46:57','2015-05-24 21:46:57'),(7,1,'Bukit Pinang','2015-05-24 21:47:09','2015-05-24 21:47:09');
/*!40000 ALTER TABLE `kelurahans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_05_19_151246_create_tukangjamu_table',2),('2015_05_19_225510_create_tukangjamus_table',3),('2015_05_23_131309_create_kecamatans_table',4),('2015_05_24_052718_create_kelurahans_table',5),('2015_05_25_164230_create_nama_kriminalitas_table',6),('2015_05_25_204212_create_info_kriminalitas_table',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nama_kriminalitas`
--

DROP TABLE IF EXISTS `nama_kriminalitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nama_kriminalitas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kriminalitas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nama_kriminalitas`
--

LOCK TABLES `nama_kriminalitas` WRITE;
/*!40000 ALTER TABLE `nama_kriminalitas` DISABLE KEYS */;
INSERT INTO `nama_kriminalitas` VALUES (1,'Pencurian','2015-05-25 08:57:13','2015-05-25 08:57:13'),(2,'Perkelahian','2015-05-25 09:06:18','2015-05-25 09:06:18');
/*!40000 ALTER TABLE `nama_kriminalitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tukangjamus`
--

DROP TABLE IF EXISTS `tukangjamus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tukangjamus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kualitas_jamu` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tukangjamus`
--

LOCK TABLES `tukangjamus` WRITE;
/*!40000 ALTER TABLE `tukangjamus` DISABLE KEYS */;
INSERT INTO `tukangjamus` VALUES (1,'Inem','inem@myemail.bla',2,'2015-05-20 14:55:18','2015-05-20 14:55:18'),(2,'Misna','misna@myemail.bla',3,'2015-05-20 14:56:44','2015-05-20 17:08:35');
/*!40000 ALTER TABLE `tukangjamus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'tuta','tutacare@gmail.com','$2y$10$L.0yqyry5mlNfTjrK.KzCuCglbgewl0BO/UaB6EzBziQHJ0i1BshW','GxAqPRL4lfchkP58NjsGGLut8tSRfoFtqFKvc4EPRYWHCVyQPXSkWNnzWQZv','2015-05-18 08:34:21','2015-05-22 22:35:47'),(2,'ayes','newsyess@gmail.com','$2y$10$5mv/4Dowa5ugNNNi7sG5B.igBqMlhSsQrSaSaHkNqXaTIhrlaGuvO',NULL,'2015-05-18 08:39:56','2015-05-18 08:39:56');
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

-- Dump completed on 2015-05-27 16:29:31
