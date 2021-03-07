-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: vtuber_sub_indo
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `affiliations`
--

DROP TABLE IF EXISTS `affiliations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `affiliations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `affiliations`
--

LOCK TABLES `affiliations` WRITE;
/*!40000 ALTER TABLE `affiliations` DISABLE KEYS */;
INSERT INTO `affiliations` VALUES (1,'Hololive Production','aff_00efb197c1a6ea12bb2ae0a47bd35f24.png','Hololive Production (ホロライブプロダクション Hororaibu Purodakushon), or simply known as hololive (ホロライブ), is a Virtual Idol agency consisting of Virtual YouTubers supported and created by Cover Corp.','2021-03-06 21:06:30','2021-03-06 21:06:30'),(2,'Nijisanji','aff_4f40a65ccd7f18da38914685623ed36c.png','Nijisanji (にじさんじ) is a group of mostly 2D-only Virtual YouTubers who are also known as \"Virtual Livers\" (バーチャルライバー Baacharu Raibaa) when posting on sites outside of YouTube, such as NicoNico Douga and Bilibili. The term Liver, coined by mixing Japanese and English, is a heteronym for calling Nijisanji\'s streamers.\n\nManaged by Ichikara Inc., the group started in Japan in early 2018 and has since expanded to other countries as an international project. As of March 2021, there are currently 104 active Japanese Nijisanji members, 36 active VirtuaReal members, 16 active NIJISANJI ID members, 3 active NIJISANJI IN members, and 14 active NIJISANJI KR members. There\'s also 4 VirtuaReal Star members and 12 VirtuaReal Link members but those aren\'t VTubers part of Nijisanji and only are in a network partner system while independent, to the point of not appearing on Nijisanji website.\n\nThere are a large number of Nijisanji Livers in the Top 100 Virtual YouTubers; Tsukino Mito has the highest number of subscribers within the company, with Kuzuha, Honma Himawari and Kanae following close behind.','2021-03-06 21:07:49','2021-03-06 21:07:49');
/*!40000 ALTER TABLE `affiliations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `affiliations_talent`
--

DROP TABLE IF EXISTS `affiliations_talent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `affiliations_talent` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `affiliation_id` int NOT NULL,
  `talent_id` int NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `affiliations_talent`
--

LOCK TABLES `affiliations_talent` WRITE;
/*!40000 ALTER TABLE `affiliations_talent` DISABLE KEYS */;
/*!40000 ALTER TABLE `affiliations_talent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gen_talent`
--

DROP TABLE IF EXISTS `gen_talent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gen_talent` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `talent_id` bigint NOT NULL,
  `gen_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gen_talent`
--

LOCK TABLES `gen_talent` WRITE;
/*!40000 ALTER TABLE `gen_talent` DISABLE KEYS */;
INSERT INTO `gen_talent` VALUES (1,1,1,'2021-03-06 11:24:22','2021-03-06 11:24:22'),(2,2,1,'2021-03-06 11:25:50','2021-03-06 11:25:50'),(3,3,1,'2021-03-06 11:27:16','2021-03-06 11:27:16'),(4,4,1,'2021-03-06 11:28:37','2021-03-06 11:28:37'),(5,5,2,'2021-03-06 11:51:44','2021-03-06 11:51:44'),(6,6,2,'2021-03-06 11:52:44','2021-03-06 11:52:44'),(7,7,2,'2021-03-06 11:53:42','2021-03-06 11:53:42'),(8,8,2,'2021-03-06 11:54:24','2021-03-06 11:54:24'),(9,9,2,'2021-03-06 11:55:03','2021-03-06 11:55:03'),(10,10,2,'2021-03-06 11:55:40','2021-03-06 11:55:40'),(11,11,3,'2021-03-06 12:02:33','2021-03-06 12:02:33'),(12,12,3,'2021-03-06 12:03:13','2021-03-06 12:03:13'),(13,13,3,'2021-03-06 12:03:41','2021-03-06 12:03:41'),(14,14,3,'2021-03-06 12:04:10','2021-03-06 12:04:10'),(15,15,3,'2021-03-06 12:04:45','2021-03-06 12:04:45'),(16,16,4,'2021-03-06 12:05:22','2021-03-06 12:05:22'),(17,17,4,'2021-03-06 12:05:52','2021-03-06 12:05:52'),(18,18,4,'2021-03-06 12:06:24','2021-03-06 12:06:24'),(19,19,5,'2021-03-06 12:06:51','2021-03-06 12:06:51'),(20,20,5,'2021-03-06 12:07:30','2021-03-06 12:07:30'),(21,21,5,'2021-03-06 12:07:58','2021-03-06 12:07:58'),(22,22,5,'2021-03-06 12:08:32','2021-03-06 12:08:32'),(23,23,5,'2021-03-06 12:09:10','2021-03-06 12:09:10'),(24,24,6,'2021-03-06 12:09:39','2021-03-06 12:09:39'),(25,25,6,'2021-03-06 12:10:11','2021-03-06 12:10:11'),(26,26,6,'2021-03-06 12:10:49','2021-03-06 12:10:49'),(27,27,6,'2021-03-06 12:11:32','2021-03-06 12:11:32'),(28,28,6,'2021-03-06 12:12:25','2021-03-06 12:12:25'),(29,29,7,'2021-03-06 12:13:00','2021-03-06 12:13:00'),(30,30,7,'2021-03-06 12:13:32','2021-03-06 12:13:32'),(31,31,7,'2021-03-06 12:14:04','2021-03-06 12:14:04'),(32,32,7,'2021-03-06 12:14:36','2021-03-06 12:14:36'),(33,33,7,'2021-03-06 12:15:07','2021-03-06 12:15:07'),(34,34,8,'2021-03-06 12:15:48','2021-03-06 12:15:48'),(35,35,9,'2021-03-06 12:16:51','2021-03-06 12:16:51'),(36,36,9,'2021-03-06 12:17:30','2021-03-06 12:17:30'),(37,37,9,'2021-03-06 12:18:04','2021-03-06 12:18:04'),(38,38,10,'2021-03-06 12:18:35','2021-03-06 12:18:35'),(39,39,10,'2021-03-06 12:19:01','2021-03-06 12:19:01'),(40,40,10,'2021-03-06 12:19:26','2021-03-06 12:19:26'),(41,41,11,'2021-03-06 12:20:17','2021-03-06 12:20:17'),(42,42,11,'2021-03-06 12:20:43','2021-03-06 12:20:43'),(43,43,11,'2021-03-06 12:21:18','2021-03-06 12:21:18'),(44,44,11,'2021-03-06 12:21:59','2021-03-06 12:21:59'),(45,45,11,'2021-03-06 12:22:35','2021-03-06 12:22:35'),(46,46,12,'2021-03-06 12:23:07','2021-03-06 12:23:07'),(47,47,12,'2021-03-06 12:23:37','2021-03-06 12:23:37'),(48,48,12,'2021-03-06 12:24:04','2021-03-06 12:24:04'),(49,49,13,'2021-03-06 12:24:33','2021-03-06 12:24:33'),(50,50,13,'2021-03-06 12:25:06','2021-03-06 12:25:06'),(51,51,13,'2021-03-06 12:25:08','2021-03-06 12:25:08'),(52,52,13,'2021-03-06 12:25:56','2021-03-06 12:25:56'),(53,53,13,'2021-03-06 12:26:58','2021-03-06 12:26:58'),(54,54,13,'2021-03-06 12:27:37','2021-03-06 12:27:37'),(55,55,13,'2021-03-06 12:28:00','2021-03-06 12:28:00'),(56,56,13,'2021-03-06 12:28:29','2021-03-06 12:28:29'),(57,57,13,'2021-03-06 12:28:54','2021-03-06 12:28:54'),(58,58,13,'2021-03-06 12:29:18','2021-03-06 12:29:18'),(59,59,14,'2021-03-06 12:29:51','2021-03-06 12:29:51'),(60,60,14,'2021-03-06 12:30:17','2021-03-06 12:30:17'),(61,61,14,'2021-03-06 12:30:51','2021-03-06 12:30:51'),(62,62,15,'2021-03-06 12:31:41','2021-03-06 12:31:41'),(63,63,15,'2021-03-06 12:32:07','2021-03-06 12:32:07'),(64,64,15,'2021-03-06 12:32:35','2021-03-06 12:32:35'),(65,65,15,'2021-03-06 12:35:52','2021-03-06 12:35:52'),(66,66,16,'2021-03-06 12:36:05','2021-03-06 12:36:05'),(67,67,16,'2021-03-06 12:37:52','2021-03-06 12:37:52'),(68,68,16,'2021-03-06 12:39:58','2021-03-06 12:39:58');
/*!40000 ALTER TABLE `gen_talent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gens`
--

DROP TABLE IF EXISTS `gens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `gen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('hololive','holostars','staff') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gens`
--

LOCK TABLES `gens` WRITE;
/*!40000 ALTER TABLE `gens` DISABLE KEYS */;
INSERT INTO `gens` VALUES (1,'0','hololive','Japan','2021-03-06 11:19:25','2021-03-06 11:19:25'),(2,'1','hololive','Japan','2021-03-06 11:19:37','2021-03-06 11:19:37'),(3,'2','hololive','Japan','2021-03-06 11:19:42','2021-03-06 11:19:42'),(4,'3','hololive','Japan','2021-03-06 11:19:46','2021-03-06 11:19:46'),(5,'Gamers','hololive','Japan','2021-03-06 11:19:51','2021-03-06 11:19:51'),(6,'4','hololive','Japan','2021-03-06 11:19:55','2021-03-06 11:19:55'),(7,'5','hololive','Japan','2021-03-06 11:19:58','2021-03-06 11:19:58'),(8,'INoNaKa MUSIC','hololive','Japan','2021-03-06 11:20:12','2021-03-06 11:20:12'),(9,'1','hololive','Indonesia','2021-03-06 11:20:23','2021-03-06 11:20:23'),(10,'2','hololive','Indonesia','2021-03-06 11:20:27','2021-03-06 11:20:27'),(11,'1','hololive','English','2021-03-06 11:20:44','2021-03-06 11:20:44'),(12,'1','hololive','China','2021-03-06 11:20:49','2021-03-06 11:20:49'),(13,'2','hololive','China','2021-03-06 11:21:53','2021-03-06 11:21:53'),(14,'1','holostars','Japan','2021-03-06 11:22:10','2021-03-06 11:22:10'),(15,'2','holostars','Japan','2021-03-06 11:22:38','2021-03-06 11:22:38'),(16,'3','holostars','Japan','2021-03-06 11:22:47','2021-03-06 11:22:47'),(17,NULL,'staff',NULL,'2021-03-06 11:23:10','2021-03-06 11:23:10');
/*!40000 ALTER TABLE `gens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2021_03_06_161130_create_affiliations_table',1),(4,'2021_03_06_161217_create_talents_table',1),(5,'2021_03_06_172311_create_gens_table',1),(6,'2021_03_06_172655_create_gen_talents_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `talent`
--

DROP TABLE IF EXISTS `talent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `talent` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `talent`
--

LOCK TABLES `talent` WRITE;
/*!40000 ALTER TABLE `talent` DISABLE KEYS */;
INSERT INTO `talent` VALUES (1,'Tokino Sora','tlnt_9dc5e041136280c4b040d77c059daff1.png','Tokino Sora (ときのそら, 時乃そら, 時乃空, Lit. Sky of Time) is a female Japanese Virtual YouTuber and the founder member of hololive. While she debuted alone way before generations were established, she is currently part of \"hololive 0th gen\" alongside fellow solo debutants: Roboco, Sakura Miko, Hoshimachi Suisei and AZKi.','2021-03-06 11:24:22','2021-03-06 11:24:22'),(2,'Roboco','tlnt_e106c50f5663707b1944c856912f9edd.png','Roboco (ロボ子, Robo-ko, lit. Robogirl) also known as \"Roboco-san\" is a female Japanese virtual YouTuber and the second member ever of hololive. While she debuted alone way before generations were established, she is currently part of \"hololive 0th gen\" alongside fellow solo debutants: Tokino Sora, Sakura Miko, Hoshimachi Suisei and AZKi.','2021-03-06 11:25:50','2021-03-06 11:25:50'),(3,'Sakura Miko','tlnt_a4440d1cac5ab1d8b2187ac1ce32c637.png','Sakura Miko (さくらみこ, Kanji: 桜巫女, Hanzi:樱巫女) is a female Japanese Virtual YouTuber and a member of hololive. While debuting alone outside of a generation and working directly under Cover Corp. before being transfered to hololive, she is currently part of \"hololive 0th gen\" alongside fellow solo debutants: Tokino Sora, Roboco, Hoshimachi Suisei and AZKi.','2021-03-06 11:27:16','2021-03-06 11:27:16'),(4,'Hoshimachi Suisei','tlnt_73937a9889e8db019ae3b665d51fc206.png','Hoshimachi Suisei (星街すいせい) is a female Japanese Virtual YouTuber associated with hololive. While originally an independent VTuber who eventually was recruited into hololive, she is currently part of \"hololive 0th gen\" alongside fellow solo debutants: Tokino Sora, Roboco, Sakura Miko and AZKi.','2021-03-06 11:28:37','2021-03-06 11:28:37'),(5,'Yozora Mel','tlnt_85c1dfa96c29cb30885646864c745cf0.png','Yozora Mel (夜空メル) is a female Japanese Virtual YouTuber associated with hololive, as part of its first generation of VTubers alongside Aki Rosenthal, Natsuiro Matsuri, Shirakami Fubuki, and Akai Haato.','2021-03-06 11:51:44','2021-03-06 11:51:44'),(6,'Shirakami Fubuki','tlnt_2d0a5dd2a4145fdb0d76140d70d3a948.png','Shirakami Fubuki (白上フブキ) is a female Japanese Virtual Youtuber associated with hololive, as part of its first generation of VTubers alongside Yozora Mel, Aki Rosenthal, Natsuiro Matsuri, and Akai Haato. She is also part of a unit inside hololive called hololive Gamers (ホロライブゲーマーズ) alongside Ookami Mio, Nekomata Okayu, and Inugami Korone.','2021-03-06 11:52:44','2021-03-06 11:52:44'),(7,'Natsuiro Matsuri','tlnt_da49cb01be396dc39c940b5be9283d8e.png','Natsuiro Matsuri (夏色まつり) is a female Japanese Virtual YouTuber associated with hololive, as part of its first generation of VTubers alongside Yozora Mel, Aki Rosenthal, Shirakami Fubuki, and Akai Haato.','2021-03-06 11:53:42','2021-03-06 11:53:42'),(8,'Aki Rosenthal','tlnt_fe53cc66f7c0d6850237261a45f94e85.png','Aki Rosenthal (アキ・ローゼンタール) is a female Japanese Virtual YouTuber associated with hololive, as part of its first generation of VTubers alongside Yozora Mel, Natsuiro Matsuri, Shirakami Fubuki, and Akai Haato.','2021-03-06 11:54:24','2021-03-06 11:54:24'),(9,'Akai Haato','tlnt_c03ed553c7595936533943022bb4a6b5.png','Akai Haato (赤井はあと), also known by her Haachama (はあちゃま) personality, is a female Japanese Virtual YouTuber associated with hololive, as part of its first generation of VTubers alongside Yozora Mel, Aki Rosenthal, Natsuiro Matsuri, and Shirakami Fubuki.','2021-03-06 11:55:03','2021-03-06 11:55:03'),(10,'Hitomi Chris','tlnt_1f6ad9bb7d14a43d8c71a5aacf707188.png','Hitomi Chris (人見クリス) was a female Japanese Virtual YouTuber and formerly a member of hololive.','2021-03-06 11:55:40','2021-03-06 11:55:40'),(11,'Minato Aqua','tlnt_94792759a4c800884b68d5bcb7be96da.png','Minato Aqua (湊あくあ) is a female Japanese Virtual YouTuber associated with hololive, as part of its second generation of VTubers alongside Murasaki Shion, Nakiri Ayame, Yuzuki Choco, and Oozora Subaru.','2021-03-06 12:02:33','2021-03-06 12:02:33'),(12,'Murasaki Shion','tlnt_c85eb45e0adcf3abe162aac488a7275f.png','Murasaki Shion (紫咲シオン) is a female Japanese Virtual YouTuber associated with hololive, as part of its second generation of VTubers alongside Minato Aqua, Nakiri Ayame, Yuzuki Choco, and Oozora Subaru.','2021-03-06 12:03:13','2021-03-06 12:03:13'),(13,'Nakiri Ayame','tlnt_d1f7a6526c5a4c444d8216cadea7a387.png','Nakiri Ayame (百鬼あやめ) is a female Japanese Virtual YouTuber associated with hololive, as part of its second generation of VTubers alongside Minato Aqua, Murasaki Shion, Yuzuki Choco, and Oozora Subaru.','2021-03-06 12:03:41','2021-03-06 12:03:41'),(14,'Yuzuki Choco','tlnt_002a40b23389d461db4ea2beed6f8442.png','Yuzuki Choco (癒月ちょこ) is a female Japanese Virtual YouTuber associated with hololive, as part of its second generation of VTubers alongside Minato Aqua, Murasaki Shion, Nakiri Ayame, and Oozora Subaru.','2021-03-06 12:04:10','2021-03-06 12:04:10'),(15,'Oozora Subaru','tlnt_3bb0f5f5ad458baa57860fe78f432ac1.png','Oozora Subaru (大空スバル) is a female Japanese Virtual YouTuber associated with hololive, as part of its second generation of VTubers alongside Minato Aqua, Murasaki Shion, Nakiri Ayame, and Yuzuki Choco.','2021-03-06 12:04:45','2021-03-06 12:04:45'),(16,'Ookami Mio','tlnt_6292e0671114ec061b8ded9bd596dde3.png','Ookami Mio (大神ミオ) is a female Japanese Virtual YouTuber associated with hololive, as part of a group of VTubers inside called as hololive Gamers (ホロライブゲーマーズ) alongside Shirakami Fubuki, Nekomata Okayu, and Inugami Korone.','2021-03-06 12:05:22','2021-03-06 12:05:22'),(17,'Nekomata Okayu','tlnt_ecadce1573abe2e10035c529c1a6187b.png','Nekomata Okayu (猫又おかゆ) is a female Japanese Virtual YouTuber associated with hololive, as part of a group of VTubers inside called as hololive Gamers (ホロライブゲーマーズ) alongside Shirakami Fubuki, Ookami Mio, and Inugami Korone.','2021-03-06 12:05:52','2021-03-06 12:05:52'),(18,'Inugami Korone','tlnt_527b14945545a0efeb8381b0ed91d3a2.png','Inugami Korone (戌神ころね) is a female Japanese Virtual YouTuber associated with hololive, and is a member of the subgroup hololive Gamers (ホロライブゲーマーズ) alongside Shirakami Fubuki, Ookami Mio, and Nekomata Okayu.','2021-03-06 12:06:24','2021-03-06 12:06:24'),(19,'Usada Pekora','tlnt_f5cdc15f0c12d3b050bec567ca4e9c34.png','Usada Pekora (兎田ぺこら) is a female Japanese Virtual YouTuber associated with hololive, as part of its third generation of VTubers under the name of \"hololive Fantasy\" (ホロライブファンタジー) alongside Uruha Rushia, Shiranui Flare, Shirogane Noel, and Houshou Marine.','2021-03-06 12:06:51','2021-03-06 12:06:51'),(20,'Uruha Rushia','tlnt_5d8112ff2e3fdb0fda915dee02638240.png','Uruha Rushia (潤羽るしあ) is a female Japanese Virtual YouTuber associated with hololive, as part of its third generation of VTubers under the name of \"hololive Fantasy\" (ホロライブファンタジー) alongside Usada Pekora, Shiranui Flare, Shirogane Noel, and Houshou Marine.','2021-03-06 12:07:30','2021-03-06 12:07:30'),(21,'Shiranui Flare','tlnt_23ba0a9440f40f9126732e1bd374dcae.png','Shiranui Flare (不知火フレア) is a female Japanese Virtual YouTuber associated with hololive, as part of its third generation of VTubers under the name of \"hololive Fantasy\" (ホロライブファンタジー) alongside Usada Pekora, Uruha Rushia, Shirogane Noel, and Houshou Marine.','2021-03-06 12:07:58','2021-03-06 12:07:58'),(22,'Shirogane Noel','tlnt_2e996893d2e4acc6cec1ddcd57be1819.png','Shirogane Noel (白銀ノエル) is a female Japanese Virtual YouTuber associated with hololive, as part of its third generation of VTubers under the name of \"hololive Fantasy\" (ホロライブファンタジー) alongside Usada Pekora, Uruha Rushia, Shiranui Flare, and Houshou Marine.','2021-03-06 12:08:32','2021-03-06 12:08:32'),(23,'Hoshou Marine','tlnt_56e2e817bfe8b417c44064cb8e23e3c4.png','Houshou Marine (宝鐘マリン) is a female Japanese Virtual YouTuber associated with hololive, as part of its third generation of VTubers under the name of \"hololive Fantasy\" (ホロライブファンタジー) alongside Usada Pekora, Uruha Rushia, Shiranui Flare, and Shirogane Noel.','2021-03-06 12:09:10','2021-03-06 12:09:10'),(24,'Amane Kanata','tlnt_4d5625fbf84a281634930ed7d2198a6c.png','Amane Kanata (天音かなた) is a female Japanese Virtual YouTuber associated with hololive, as part of its fourth generation of VTubers alongside Tsunomaki Watame, Tokoyami Towa, Kiryu Coco and Himemori Luna.','2021-03-06 12:09:39','2021-03-06 12:09:39'),(25,'Kiryu Coco','tlnt_c451af3eeff79d1e3a8c10d1f31a10bf.png','Kiryu Coco (桐生ココ) is a female Japanese Virtual YouTuber associated with hololive, as part of its fourth generation of VTubers alongside Tsunomaki Watame, Tokoyami Towa, Amane Kanata and Himemori Luna.','2021-03-06 12:10:11','2021-03-06 12:10:11'),(26,'Tsunomaki Watame','tlnt_d94ed59f68093b3ca600b1c00aaface9.png','Tsunomaki Watame (角巻わため) is a female Japanese Virtual YouTuber associated with hololive, as part of its fourth generation of VTubers alongside Tokoyami Towa, Kiryu Coco, Amane Kanata and Himemori Luna.','2021-03-06 12:10:49','2021-03-06 12:10:49'),(27,'Tokoyami Towa','tlnt_d248ff23293aba479438dd9d7e9e2fd7.png','Tokoyami Towa (常闇トワ) is a female Japanese Virtual YouTuber associated with hololive, as part of its fourth generation of VTubers alongside Tsunomaki Watame, Kiryu Coco, Amane Kanata and Himemori Luna.','2021-03-06 12:11:32','2021-03-06 12:11:32'),(28,'Himemori Luna','tlnt_b068c1595bf5841594e53d8fd4c8f875.png','Himemori Luna (姫森ルーナ) is a female Japanese Virtual YouTuber associated with hololive, as part of its fourth generation of VTubers alongside Tsunomaki Watame, Tokoyami Towa, Kiryu Coco and Amane Kanata.','2021-03-06 12:12:25','2021-03-06 12:12:25'),(29,'Yukihana Lamy','tlnt_3d2c2339d366311f0a731eb589164909.png','Yukihana Lamy (雪花ラミィ) is a female Japanese Virtual YouTuber associated with hololive, as part of its fifth generation of VTubers alongside Momosuzu Nene, Shishiro Botan, Mano Aloe and Omaru Polka.','2021-03-06 12:13:00','2021-03-06 12:13:00'),(30,'Momosuzu Nene','tlnt_10bced36f65312c180b66a288ab84398.png','Momosuzu Nene (桃鈴ねね) is a female Japanese Virtual YouTuber associated with hololive, as part of its fifth generation of VTubers alongside Yukihana Lamy, Shishiro Botan, Mano Aloe and Omaru Polka.','2021-03-06 12:13:32','2021-03-06 12:13:32'),(31,'Shishiro Botan','tlnt_5ab70e906e83b97b2002385477e08426.png','Shishiro Botan (獅白ぼたん) is a female Japanese Virtual YouTuber associated with hololive, as part of its fifth generation of VTubers alongside Yukihana Lamy, Momosuzu Nene, Mano Aloe, and Omaru Polka.','2021-03-06 12:14:04','2021-03-06 12:14:04'),(32,'Omaru Polka','tlnt_f9524ccc66e3612f11d358339e50caf5.png','Omaru Polka (尾丸ポルカ) is a female Japanese Virtual YouTuber associated with hololive, as part of its fifth generation of VTubers alongside Yukihana Lamy, Momosuzu Nene, Shishiro Botan and Mano Aloe.','2021-03-06 12:14:36','2021-03-06 12:14:36'),(33,'Mano Aloe','tlnt_4e8cfd68ebfea97cba08ee813d06206a.png','Mano Aloe (魔乃アロエ, Mano Aroe) was a female Japanese Virtual YouTuber associated with hololive, as part of its fifth generation of VTubers alongside Yukihana Lamy, Momosuzu Nene, Shishiro Botan and Omaru Polka.','2021-03-06 12:15:07','2021-03-06 12:15:07'),(34,'AZKi','tlnt_ee595c19ed66b260f55c9d456b20d4e2.png','Virtual Diva AZKi better known simply as AZKi is a female Japanese Virtual YouTuber and singer. Her concept was conceived by hololive\'s parent company: COVER Corporation and her design and videos are produced by Composition Inc. While she debuted alone, she is currently part of \"hololive 0th gen\" alongside fellow solo debutants: Tokino Sora, Roboco, Sakura Miko and Hoshimachi Suisei.','2021-03-06 12:15:48','2021-03-06 12:15:48'),(35,'Ayunda Risu','tlnt_04725fabf6042bddf992bdf80c524f3e.png','Ayunda Risu (アユンダ・リス) is a female Indonesian Virtual YouTuber associated with hololive, as part of its Indonesian (ID) branch first generation of VTubers alongside Airani Iofifteen and Moona Hoshinova.','2021-03-06 12:16:51','2021-03-06 12:16:51'),(36,'Moona Hoshinova','tlnt_c9e8c29879d50a6c7a1aa149876d60fb.png','Moona Hoshinova (ムーナ・ホシノヴァ) is a female Indonesian Virtual YouTuber associated with hololive, as part of its Indonesian (ID) branch first generation of VTubers alongside Airani Iofifteen and Ayunda Risu.','2021-03-06 12:17:30','2021-03-06 12:17:30'),(37,'Airani Iofifteen','tlnt_5678fd69ff7e40c9ad04abe64fab5e8a.png','Airani Iofifteen (アイラニ・イオフィフティーン) is a female Indonesian Virtual YouTuber associated with hololive, as part of its Indonesian (ID) branch first generation of VTubers alongside Moona Hoshinova and Ayunda Risu.','2021-03-06 12:18:04','2021-03-06 12:18:04'),(38,'Kureiji Ollie','tlnt_2d1ffbdddaa485a085fabbd7f0cc1e32.png','Kureiji Ollie is a female Indonesian Virtual YouTuber associated with hololive, as part of its Indonesian (ID) branch second generation of VTubers alongside Anya Melfissa and Pavolia Reine.','2021-03-06 12:18:35','2021-03-06 12:18:35'),(39,'Anya Melfissa','tlnt_f002c811e5b4e2d9d621178ea73c4505.png','Anya Melfissa is a female Indonesian Virtual YouTuber associated with hololive, as part of its Indonesian (ID) branch second generation of VTubers alongside Kureiji Ollie and Pavolia Reine.','2021-03-06 12:19:01','2021-03-06 12:19:01'),(40,'Pavolia Reine','tlnt_79bbd9cd3bd36a297d31b3d7a40419ff.png','Pavolia Reine is a female Indonesian Virtual YouTuber associated with hololive, as part of its Indonesian (ID) branch second generation of VTubers alongside Kureiji Ollie and Anya Melfissa.','2021-03-06 12:19:26','2021-03-06 12:19:26'),(41,'Mori Calliope','tlnt_7b578ad24e9728cab3c117e83b253f62.png','Mori Calliope is an English Virtual YouTuber associated with hololive, as part of its English (EN) branch first generation of Vtubers alongside Ninomae Ina\'nis, Takanashi Kiara, Watson Amelia, and Gawr Gura.','2021-03-06 12:20:17','2021-03-06 12:20:17'),(42,'Takanashi Kiara','tlnt_cf1fda2cd8d823fc55f7da5c25b7ac43.png','Takanashi Kiara is an English Virtual YouTuber associated with hololive, as part of its English (EN) branch first generation of Vtubers alongside Ninomae Ina\'nis, Watson Amelia, Mori Calliope, and Gawr Gura.','2021-03-06 12:20:43','2021-03-06 12:20:43'),(43,'Ninomae Ina\'nis','tlnt_744f9db44fddac781ed33f990ee30f35.png','Ninomae Ina\'nis is an English Virtual YouTuber associated with hololive, as part of its English (EN) branch first generation of Vtubers alongside Takanashi Kiara, Watson Amelia, Mori Calliope, and Gawr Gura.','2021-03-06 12:21:18','2021-03-06 12:21:18'),(44,'Gawr Gura','tlnt_c96612641a8a92685731e6271d70aea7.png','Gawr Gura is an English Virtual YouTuber associated with hololive, as part of its English (EN) branch first generation of VTubers alongside Ninomae Ina\'nis, Takanashi Kiara, Watson Amelia, and Mori Calliope.','2021-03-06 12:21:59','2021-03-06 12:21:59'),(45,'Watson Amelia','tlnt_a26056e763baef56df57aff785e12a33.png','Watson Amelia is an English Virtual YouTuber associated with hololive, as part of its English (EN) branch first generation of VTubers alongside Ninomae Ina\'nis, Takanashi Kiara, Mori Calliope, and Gawr Gura.','2021-03-06 12:22:35','2021-03-06 12:22:35'),(46,'Yogiri','tlnt_113c241c3288c33ba2dfe3e7fce9603a.png','Yogiri (夜霧, lit. Night fog) was a female Chinese VTuber associated with hololive, as part of its Chinese (CN) branch first generation of VUP (Virtual UP, since content creators in bilibili are normally nicknamed \"UP\" or \" UP Master\") alongside Civia and Spade Echo.','2021-03-06 12:23:07','2021-03-06 12:23:07'),(47,'Civia','tlnt_70c6f6a1e08fe219cc1e6b0a9bc4f395.png','Civia (希薇娅) was a female Chinese VTuber associated with hololive, as part of its Chinese (CN) branch first generation of VUP (Virtual UP, since content creators in bilibili are normally nicknamed \"UP\" or \"UP Master\") alongside Yogiri and Spade Echo.','2021-03-06 12:23:37','2021-03-06 12:23:37'),(48,'Spade Echo','tlnt_8a175d8167cb5539496eb0e953b640ac.png','Spade Echo (黑桃影) was a female Chinese VTuber associated with hololive, as part of its Chinese (CN) branch first generation of VUP (Virtual UP, since content creators in bilibili are normally nicknamed \"UP\" or \"UP Master\") alongside Yogiri and Civia.','2021-03-06 12:24:04','2021-03-06 12:24:04'),(49,'Doris','tlnt_5de188c6cd8d626ad6d16d127153883e.png','Doris (朵莉丝) was a female Chinese VTuber associated with hololive, as part of its Chinese (CN) branch second generation of VUP (Virtual UP, since content creators in Bilibili are normally nicknamed \"UP\" or \"UP Master\") alongside Artia and Rosalyn.','2021-03-06 12:24:33','2021-03-06 12:24:33'),(50,'Rosalyn','tlnt_f22fc0991c4e92e1701dd50689814fa5.png','Rosalyn (罗莎琳) was a female Chinese VTuber associated with hololive, as part of its Chinese (CN) branch second generation of VUP (Virtual UP, since content creators in Bilibili are normally nicknamed \"UP\" or \"UP Master\") alongside Doris and Artia.','2021-03-06 12:25:06','2021-03-06 12:25:06'),(51,'Rosalyn','tlnt_f22fc0991c4e92e1701dd50689814fa5.png','Rosalyn (罗莎琳) was a female Chinese VTuber associated with hololive, as part of its Chinese (CN) branch second generation of VUP (Virtual UP, since content creators in Bilibili are normally nicknamed \"UP\" or \"UP Master\") alongside Doris and Artia.','2021-03-06 12:25:08','2021-03-06 12:25:08'),(52,'Artia','tlnt_f38db0d02d1359906eda0b0ee7442f95.png','Artia (阿媂娅) was a female Chinese VTuber associated with hololive as part of its Chinese (CN) branch second generation of VUP (Virtual UP, since content creators in bilibili are normally nicknamed \"UP\" or \"UP Master\") alongside Doris and Rosalyn.','2021-03-06 12:25:56','2021-03-06 12:25:56'),(53,'Hanasaki Miyabi','tlnt_09055bfa0597189bfe0f82676ce62ad9.png','Hanasaki Miyabi (花咲みやび) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its first generation, alongside (formerly) Kagami Kira, Kanade Izuru, (formerly) Yakushiji Suzaku, Arurandeisu and Rikka.','2021-03-06 12:26:58','2021-03-06 12:26:58'),(54,'Kanade Izuru','tlnt_bcb5fa9fb77fff654cbe4188c15a240d.png','Kanade Izuru (奏手イヅル) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its first generation, alongside Hanasaki Miyabi, (formerly) Kagami Kira, Arurandeisu, (formerly) Yakushiji Suzaku and Rikka.','2021-03-06 12:27:37','2021-03-06 12:27:37'),(55,'Arurandeisu','tlnt_da8432283a9e84b4de200a6bf3cf109a.png','Arurandeisu (アルランディス) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its first generation, alongside Hanasaki Miyabi, (formerly) Kagami Kira, Kanade Izuru (formerly) Yakushiji Suzaku and Rikka.','2021-03-06 12:28:00','2021-03-06 12:28:00'),(56,'Rikka','tlnt_faf87a96376cf4ad7d2f6f40f98d1f13.png','Rikka (律可) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its first generation, alongside Hanasaki Miyabi, (formerly) Kagami Kira, Kanade Izuru, Arurandeisu, and (formerly) Yakushiji Suzaku.','2021-03-06 12:28:29','2021-03-06 12:28:29'),(57,'Kagami Kira','tlnt_53a8bf695a46441dd5ca5a7f6b64d1dc.png','Kagami Kira (鏡見キラ) was a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its first generation, alongside Hanasaki Miyabi, Kanade Izuru, (formerly) Yakushiji Suzaku, Arurandeisu, and Rikka.','2021-03-06 12:28:54','2021-03-06 12:28:54'),(58,'Yakushiji Suzaku','tlnt_073109b0bfa3f39177dbcc8c114b5fa3.png','Yakushiji Suzaku (薬師寺朱雀) was a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He was a member of its first generation, alongside Kagami Kira, Arurandeisu, Kanade Izuru, Hanasaki Miyabi and Rikka.','2021-03-06 12:29:18','2021-03-06 12:29:18'),(59,'Astel Leda','tlnt_5242f2b8b7d81d604b96fee276434864.png','Astel Leda (アステル・レダ) is a male Japanese Virtual YouTuber hololive\'s branch Holostars. He is a member of its second generation, also known as \"SunTempo\" alongside Kishido Temma and Yukoku Roberu.','2021-03-06 12:29:51','2021-03-06 12:29:51'),(60,'Kishido Temma','tlnt_97a1ee7af0e015bf4542f25a865a6429.png','Kishido Temma (岸堂天真) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its second generation, also known as \"SunTempo\" alongside Astel Leda and Yukoku Roberu.','2021-03-06 12:30:17','2021-03-06 12:30:17'),(61,'Yukoku Roberu','tlnt_6c2db897178101c7383f94685cc90c65.png','Yukoku Roberu (夕刻ロベル) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its second generation, also known as \"SunTempo\" alongside Astel Leda and Kishido Temma.','2021-03-06 12:30:51','2021-03-06 12:30:51'),(62,'Kageyama Shien','tlnt_e2908d7212aaf461b01e7a5fbabea8ae.png','Kageyama Shien (影山シエン) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its third generation alongside Aragami Oga, which was previously known as \"TriNero\" (トライネロ) prior to Tsukishita Kaoru\'s retirement. Shien and Oga then became known as \"MaFia\" (魔フィア).','2021-03-06 12:31:41','2021-03-06 12:31:41'),(63,'Aragami Oga','tlnt_92b9f40c7111426bd230192fb9988e9e.png','Aragami Oga (荒咬オウガ) is a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He is a member of its third generation alongside Kageyama Shien, which was previously known as \"TriNero\" (トライネロ) prior to Tsukishita Kaoru\'s retirement. Oga and Shien then became known as \"MaFia\" (魔フィア).','2021-03-06 12:32:07','2021-03-06 12:32:07'),(64,'Tsukishita Kaoru','tlnt_6768b194a06f88580e0630e4f8c451d6.png','Tsukishita Kaoru (月下カオル) was a male Japanese Virtual YouTuber endorsed by hololive\'s branch Holostars. He was a member of its third generation, also known as \"TriNero\" (トライネロ) alongside Kageyama Shien and Aragami Oga.','2021-03-06 12:32:35','2021-03-06 12:32:35'),(65,'A-chan','tlnt_fa2d7ae99c685e966298ed0cad0e908e.png','VTuber office, person behind the scenes of Hololive (sometimes DJ).','2021-03-06 12:35:52','2021-03-06 12:35:52'),(66,'A-chan','tlnt_fa2d7ae99c685e966298ed0cad0e908e.png','VTuber office, person behind the scenes of Hololive (sometimes DJ).','2021-03-06 12:36:05','2021-03-06 12:36:05'),(67,'Daidou Shinove','tlnt_04b1d27a44644dd90ece284d3ffa90ab.png','Cover Co., Ltd. Male VTuber group \"Holostars\" manager and collaboration window.','2021-03-06 12:37:52','2021-03-06 12:37:52'),(68,'EnMa','tlnt_7a1dabd4d683b85f46f395ae8603a8cd.png','HoloEN\'s Manager. A necromancer from the Demonic-Realm Academy who is not good at communicating with people.','2021-03-06 12:39:58','2021-03-06 12:39:58');
/*!40000 ALTER TABLE `talent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2021-03-07 16:25:15
