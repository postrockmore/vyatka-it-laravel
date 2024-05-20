-- MySQL dump 10.13  Distrib 5.7.39, for osx10.12 (x86_64)
--
-- Host: localhost    Database: vyatkait_laravel
-- ------------------------------------------------------
-- Server version	5.7.39

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
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Агат43',1,1,'2024-03-16 15:59:17','2024-04-18 10:47:41'),(2,'Баззлс',1,2,'2024-03-16 16:00:23','2024-04-18 10:48:30'),(3,'Формат Сити',1,3,'2024-03-16 16:01:25','2024-04-18 10:48:52'),(4,'Гармония снов',1,4,'2024-03-16 16:01:40','2024-04-18 10:49:07'),(5,' Тракер',1,5,'2024-03-16 16:01:53','2024-04-18 10:49:26'),(6,'Нольте кухни',1,6,'2024-03-16 16:02:12','2024-04-18 10:49:42'),(7,'Акмаш',1,7,'2024-03-16 16:20:40','2024-04-18 10:49:58'),(8,'Европа Пицца',1,8,'2024-03-16 16:20:58','2024-04-18 10:50:14');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'Евгений Лысков','Основатель web-студии',1,0,'2024-05-18 08:37:04','2024-05-18 08:38:12');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) unsigned NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `media_uuid_unique` (`uuid`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  KEY `media_order_column_index` (`order_column`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (13,'App\\Models\\Promotion',1,'85939556-f3c0-45db-9e3d-9b763aeb306e','thumbnails','1','01HVRPNJT2BCXBSZ6J5HYC7CCN.jpg','image/jpeg','public','public',298642,'[]','[]','{\"original_webp\": true, \"thumbnail_webp\": true}','[]',1,'2024-04-18 10:34:51','2024-04-18 17:53:07'),(14,'App\\Models\\Promotion',2,'38d428e7-a94a-4309-ab2c-8ea73b4b3cfb','thumbnails','2','01HVRPNYSR8MFKDGF8Y0Z3TNXW.jpg','image/jpeg','public','public',333266,'[]','[]','{\"original_webp\": true, \"thumbnail_webp\": true}','[]',1,'2024-04-18 10:35:03','2024-04-18 17:53:08'),(15,'App\\Models\\Promotion',3,'e81d3120-6f6f-4b70-905d-0aed8d3fa944','thumbnails','3','01HVRPPAJERCZG3K1Y2Y7C77WN.jpg','image/jpeg','public','public',303328,'[]','[]','{\"original_webp\": true, \"thumbnail_webp\": true}','[]',1,'2024-04-18 10:35:16','2024-04-18 17:53:08'),(16,'App\\Models\\Promotion',4,'fd4ddf8c-46d6-4ef7-ace8-27fbde953658','thumbnails','4','01HVRPPPEJ0DD64BK05W6SKQQ6.jpg','image/jpeg','public','public',299720,'[]','[]','{\"original_webp\": true, \"thumbnail_webp\": true}','[]',1,'2024-04-18 10:35:28','2024-04-18 17:53:09'),(17,'App\\Models\\Promotion',5,'bcaec16d-7b24-4efc-9535-216c2d49f1a5','thumbnails','5','01HVRPQ04XVP631PY42V2V42QK.jpg','image/jpeg','public','public',294615,'[]','[]','{\"original_webp\": true, \"thumbnail_webp\": true}','[]',1,'2024-04-18 10:35:38','2024-04-18 17:53:10'),(18,'App\\Models\\Promotion',6,'cf207d37-ae42-401b-9dc4-f7c4fb4d5003','thumbnails','6','01HVRPQ8KSWA7NAXJ09KM08XKF.jpg','image/jpeg','public','public',212874,'[]','[]','{\"original_webp\": true, \"thumbnail_webp\": true}','[]',1,'2024-04-18 10:35:46','2024-04-18 17:53:10'),(19,'App\\Models\\Client',1,'3260dc76-686a-47b2-9c58-765e8c0c1ac7','thumbnails','agat','01HVRQD2Y99T5M87CQAT5P0858.png','image/png','public','public',2221,'[]','[]','{\"original_webp\": true, \"thumbnail_webp\": true}','[]',1,'2024-04-18 10:47:41','2024-04-18 17:53:10'),(20,'App\\Models\\Client',2,'17409948-cf18-4a28-b2cc-813f72d381ee','thumbnails','buzzols','01HVRQEJ7BHTGENDBDMR6F3QZP.webp','image/webp','public','public',1450,'[]','[]','{\"original_webp\": true, \"thumbnail_webp\": true}','[]',1,'2024-04-18 10:48:30','2024-04-18 17:53:10'),(21,'App\\Models\\Client',3,'05b8d9aa-65d4-433d-a77a-10f5e08549ee','thumbnails','format_city','01HVRQF7WDZ1VH9Q341M5EH6X4.png','image/png','public','public',3548,'[]','[]','{\"original_webp\": true, \"thumbnail_webp\": true}','[]',1,'2024-04-18 10:48:52','2024-04-18 17:53:10'),(22,'App\\Models\\Client',4,'5ecd0870-8f82-4a27-9e76-00b81604dbfa','thumbnails','garmonia','01HVRQFP7901PKZRMNCFG6AS35.png','image/png','public','public',5204,'[]','[]','{\"original_webp\": true, \"thumbnail_webp\": true}','[]',1,'2024-04-18 10:49:07','2024-04-18 17:53:10'),(23,'App\\Models\\Client',5,'4f2c61cf-7499-4d1e-afae-cee8e9ac8448','thumbnails','traker','01HVRQG90XS3WBKFENPD97D5Q7.png','image/png','public','public',1971,'[]','[]','{\"original_webp\": true, \"thumbnail_webp\": true}','[]',1,'2024-04-18 10:49:26','2024-04-18 17:53:11'),(24,'App\\Models\\Client',6,'1cf30998-a6fa-4c30-998b-2d3cbb777869','thumbnails','nolte','01HVRQGRK9VE69R9RXVHXD14XS.png','image/png','public','public',2529,'[]','[]','{\"original_webp\": true, \"thumbnail_webp\": true}','[]',1,'2024-04-18 10:49:42','2024-04-18 17:53:11'),(25,'App\\Models\\Client',7,'a1853e1d-3233-476b-9d7f-0c4ffe45bb1d','thumbnails','akmash','01HVRQH87Z0WQ71CCN0V9PDMF7.png','image/png','public','public',1868,'[]','[]','{\"original_webp\": true, \"thumbnail_webp\": true}','[]',1,'2024-04-18 10:49:58','2024-04-18 17:53:11'),(26,'App\\Models\\Client',8,'877deeb8-b1b8-4730-8387-91444015fdbf','thumbnails','evropapizza','01HVRQHREDXH29VWJDM6YQCBFG.png','image/png','public','public',7158,'[]','[]','{\"original_webp\": true, \"thumbnail_webp\": true}','[]',1,'2024-04-18 10:50:14','2024-04-18 17:53:11'),(27,'App\\Models\\Project\\Project',1,'01a191a3-f57b-44e4-bacd-5f256e66003d','thumbnails','01HVCK389GB4P1F472H0AXE725','01HVSFG07VCR45AE5TQ3D1NQB2.jpg','image/jpeg','public','public',481559,'[]','[]','{\"webp\": true, \"original_webp\": true}','[]',1,'2024-04-18 17:48:43','2024-04-18 17:53:12'),(28,'App\\Models\\Project\\Project',2,'b0ade9bc-3bc1-4e69-9356-ff9b02287053','thumbnails','01HVCK4H7GECNF32HV2ESHSSGW','01HVSFGTP9728MGB800QT8997X.jpg','image/jpeg','public','public',680395,'[]','[]','{\"webp\": true, \"original_webp\": true}','[]',1,'2024-04-18 17:49:10','2024-04-18 17:53:13'),(29,'App\\Models\\Service\\ServiceCategory',1,'f4b2a5b5-f40c-46d3-a0c9-ef1faa1e9681','icons','01HVHTBXNS1931WE17A9QPT3WG','01HVSGV19WSN7ADN8E1H5J6YST.svg','image/svg+xml','public','public',663,'[]','[]','[]','[]',1,'2024-04-18 18:12:13','2024-04-18 18:12:13'),(30,'App\\Models\\Service\\ServiceCategory',1,'a70fcc25-addb-40c9-a5ae-68c535a5c57b','icons','service-shop','01HVSGV1A546RCXFR4RZ73QFT7.svg','image/svg+xml','public','public',8160,'[]','[]','[]','[]',2,'2024-04-18 18:12:13','2024-04-18 18:12:13'),(31,'App\\Models\\Service\\ServiceCategory',1,'af6f84ae-2684-4547-a299-aa752a075f08','icon','01HVHTBXNS1931WE17A9QPT3WG','01HVSH0AXSCC89R5DPEAN7PPG5.svg','image/svg+xml','public','public',663,'[]','[]','[]','[]',3,'2024-04-18 18:15:07','2024-04-18 18:15:07'),(32,'App\\Models\\Service\\ServiceCategory',1,'3474eb3c-139e-4db4-abc7-41747778d749','icon_alt','service-shop','01HVSH0AY1CVF5ADTTYVE9ANTC.svg','image/svg+xml','public','public',8160,'[]','[]','[]','[]',4,'2024-04-18 18:15:07','2024-04-18 18:15:07'),(33,'App\\Models\\Service\\ServiceCategory',2,'d07da778-0ca6-4ebd-98f0-2826608b2313','icon','sites','01HWGN04S9AYXAR6M3XZD2NFB0.svg','image/svg+xml','public','public',848,'[]','[]','[]','[]',1,'2024-04-27 17:47:27','2024-04-27 17:47:27'),(34,'App\\Models\\Service\\ServiceCategory',2,'7f862610-6f1e-4412-89db-5d23f5f10dff','icon_alt','sites-alt','01HWGN04SVQNWJMAVTQMEZXBAQ.svg','image/svg+xml','public','public',3891,'[]','[]','[]','[]',2,'2024-04-27 17:47:27','2024-04-27 17:47:27'),(35,'App\\Models\\Service\\Service',1,'669a9d1d-9bef-4e27-ac54-2730f80ae570','icons','internet','01HXH2YT2PYNQD1J3V5CGCFMH4.svg','image/svg+xml','public','public',6222,'[]','[]','[]','[]',1,'2024-05-10 08:07:05','2024-05-10 08:07:05'),(36,'App\\Models\\Service\\ServiceProject',3,'af3bb3b5-8697-4ef1-b09f-53704325f096','thumbnails','crazy','01HXMHWX12P41HFTESY7MSDKNG.jpg','image/jpeg','public','public',296984,'[]','[]','{\"original_webp\": true}','[]',1,'2024-05-11 16:25:54','2024-05-11 16:55:42'),(37,'App\\Models\\Employee',1,'d126060e-834f-4684-807c-0daa85a392ea','thumbnails','Zhenya 600x600','01HY5QVEYEB9DY7PVM8TVP7M2K.jpg','image/jpeg','public','public',268048,'[]','[]','{\"original_webp\": true}','[]',1,'2024-05-18 08:37:04','2024-05-18 08:37:05');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(10,'2022_12_14_083707_create_settings_table',2),(11,'2024_03_01_085202_create_header_menu_settings',2),(12,'2024_03_01_103729_create_contacts_settings',2),(15,'2024_03_05_173512_create_services_table',3),(16,'2024_03_05_180658_add_behance_to_contacts_settings',4),(19,'2024_03_16_184718_create_clients_table',5),(20,'2024_03_19_174037_create_promotions_table',6),(25,'2024_04_12_213801_create_projects_table',7),(26,'2024_04_13_172003_create_project_categories_table',8),(53,'2024_04_13_174212_create_project_project_category_table',9),(54,'2024_04_15_195842_create_service_categories_table',9),(55,'2024_04_15_201426_add_category_id_to_service',9),(56,'2024_04_17_105001_create_media_table',9),(57,'2024_04_18_214149_add_color_column_in_service_category_table',10),(58,'2024_05_10_105441_add_fields_in_services_table',11),(59,'2024_05_11_184104_add_fields_in_services_table',12),(61,'2024_05_11_191221_create_service_projects_table',13),(62,'2024_05_11_192915_create_service_service_project_table',14),(63,'2024_05_18_100837_create_about_page_settings',15),(64,'2024_05_18_113128_create_employees_table',16),(65,'2024_05_19_085254_create_company_gallery_settings',17);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `project_categories`
--

DROP TABLE IF EXISTS `project_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_categories`
--

LOCK TABLES `project_categories` WRITE;
/*!40000 ALTER TABLE `project_categories` DISABLE KEYS */;
INSERT INTO `project_categories` VALUES (1,'Интернет-магазины','internet-magaziny',1,1,'2024-04-13 14:48:09','2024-04-13 18:22:47'),(2,'Сайты','saity',1,2,'2024-04-13 17:30:46','2024-04-13 18:22:47'),(3,'Приложения','prilozeniia',1,3,'2024-04-13 17:30:57','2024-04-13 18:22:47'),(4,'Интеграции','integracii',1,4,'2024-04-13 17:31:06','2024-04-13 18:22:47');
/*!40000 ALTER TABLE `project_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_project_category`
--

DROP TABLE IF EXISTS `project_project_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_project_category` (
  `project_id` bigint(20) unsigned NOT NULL,
  `project_category_id` bigint(20) unsigned NOT NULL,
  KEY `project_project_category_project_id_foreign` (`project_id`),
  KEY `project_project_category_project_category_id_foreign` (`project_category_id`),
  CONSTRAINT `project_project_category_project_category_id_foreign` FOREIGN KEY (`project_category_id`) REFERENCES `project_categories` (`id`),
  CONSTRAINT `project_project_category_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_project_category`
--

LOCK TABLES `project_project_category` WRITE;
/*!40000 ALTER TABLE `project_project_category` DISABLE KEYS */;
INSERT INTO `project_project_category` VALUES (2,1),(1,2);
/*!40000 ALTER TABLE `project_project_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'ВяткаСтройДекор','viatkastroidekor','Повседневная практика показывает, что синтетическое тестирование говорит о возможностях глубокомысленных рассуждений. Идейные соображения.','<p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;case_1x.jpg&quot;,&quot;filesize&quot;:1725095,&quot;height&quot;:6105,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/project-attachments/Gka0bQ4aEq9fO2gJk55SDZ6T1By7OObaecsZg0b2.jpg&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/project-attachments/Gka0bQ4aEq9fO2gJk55SDZ6T1By7OObaecsZg0b2.jpg&quot;,&quot;width&quot;:870}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpg\"><a href=\"http://127.0.0.1:8000/storage/project-attachments/Gka0bQ4aEq9fO2gJk55SDZ6T1By7OObaecsZg0b2.jpg\"><img src=\"http://127.0.0.1:8000/storage/project-attachments/Gka0bQ4aEq9fO2gJk55SDZ6T1By7OObaecsZg0b2.jpg\" width=\"870\" height=\"6105\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">case_1x.jpg</span> <span class=\"attachment__size\">1.65 MB</span></figcaption></a></figure></p>','https://vsd-kirov.ru',1,2,'2024-04-13 10:02:35','2024-04-18 17:48:44'),(2,'Crazy Tuna','crazy-tuna',NULL,NULL,NULL,1,1,'2024-04-13 17:42:14','2024-04-18 17:49:11');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotions`
--

DROP TABLE IF EXISTS `promotions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotions`
--

LOCK TABLES `promotions` WRITE;
/*!40000 ALTER TABLE `promotions` DISABLE KEYS */;
INSERT INTO `promotions` VALUES (1,'Скидка 20% при переходе к нам от других подрядчиков',1,1,'2024-03-19 14:47:24','2024-04-18 10:34:51'),(2,'Разовая скидка 15% для клиентов из других городов',1,2,'2024-03-19 14:47:51','2024-04-18 10:35:03'),(3,'Поддержка вашего проекта 24 месяца ',1,3,'2024-03-19 14:48:12','2024-04-18 10:35:16'),(4,'Фирменный стикерпак в подарок',1,4,'2024-03-19 14:48:35','2024-04-18 10:35:28'),(5,'Держим цена 2022 года',1,5,'2024-03-19 14:48:53','2024-04-18 10:35:38'),(6,'1 месяц использования генератора клиентов в подарок',1,6,'2024-03-19 14:49:25','2024-04-18 10:35:46');
/*!40000 ALTER TABLE `promotions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_categories`
--

DROP TABLE IF EXISTS `service_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `service_categories_id_unique` (`id`),
  UNIQUE KEY `service_categories_slug_unique` (`slug`),
  KEY `service_categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `service_categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `service_categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_categories`
--

LOCK TABLES `service_categories` WRITE;
/*!40000 ALTER TABLE `service_categories` DISABLE KEYS */;
INSERT INTO `service_categories` VALUES (1,'E-commerce','#FFF7E3','e-commerce','<h2>Lorem100</h2><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>','Идейные соображения высшего порядка, а также постоянный количественный рост и сфера нашей активности является',1,2,NULL,'2024-04-17 12:02:25','2024-05-11 11:52:41'),(2,'Сайты','#EEFAFF','saity',NULL,'Создадим сайт с высокой конверсией и современным дизайном. Соотношение цены и качества вас приятно удивит',1,1,NULL,'2024-04-27 17:47:27','2024-04-27 17:47:55');
/*!40000 ALTER TABLE `service_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_projects`
--

DROP TABLE IF EXISTS `service_projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `from` text COLLATE utf8mb4_unicode_ci,
  `to` text COLLATE utf8mb4_unicode_ci,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_projects`
--

LOCK TABLES `service_projects` WRITE;
/*!40000 ALTER TABLE `service_projects` DISABLE KEYS */;
INSERT INTO `service_projects` VALUES (1,'Крейзи Туна','<p>Доставка суши и роллов из Вологды</p>','https://crazytuna.ru','Покупатели редко заказывали еду со старого сайта, потому что он был не удобен — все оформляли заказ по телефону. В праздники менеджеры не справлялись с потоком заказов, \nиз-за чего было много ошибок и жалоб. Продажи падали.','Заказы на сайте выросли в разы. В целом, заказов стало на 34% больше, чем раньше. C операторов спала нагрузка, так как большая часть покупателей стали заказывать онлайн. Ошибок и жалоб почти не стало.',0,0,'2024-05-11 16:24:22','2024-05-11 16:24:22'),(2,'Крейзи Туна','<p>Доставка суши и роллов из Вологды</p>','https://crazytuna.ru','Покупатели редко заказывали еду со старого сайта, потому что он был не удобен — все оформляли заказ по телефону. В праздники менеджеры не справлялись с потоком заказов, \nиз-за чего было много ошибок и жалоб. Продажи падали.','Заказы на сайте выросли в разы. В целом, заказов стало на 34% больше, чем раньше. C операторов спала нагрузка, так как большая часть покупателей стали заказывать онлайн. Ошибок и жалоб почти не стало.',0,0,'2024-05-11 16:24:54','2024-05-11 16:24:54'),(3,'Крейзи Туна','<p>Доставка суши и роллов из Вологды</p>','https://crazytuna.ru','Покупатели редко заказывали еду со старого сайта, потому что он был не удобен — все оформляли заказ по телефону. В праздники менеджеры не справлялись с потоком заказов, \nиз-за чего было много ошибок и жалоб. Продажи падали.','Заказы на сайте выросли в разы. В целом, заказов стало на 34% больше, чем раньше. C операторов спала нагрузка, так как большая часть покупателей стали заказывать онлайн. Ошибок и жалоб почти не стало.',1,0,'2024-05-11 16:25:54','2024-05-11 16:25:54');
/*!40000 ALTER TABLE `service_projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_service_project`
--

DROP TABLE IF EXISTS `service_service_project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_service_project` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `service_id` bigint(20) unsigned NOT NULL,
  `service_project_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `service_service_project_service_id_foreign` (`service_id`),
  KEY `service_service_project_service_project_id_foreign` (`service_project_id`),
  CONSTRAINT `service_service_project_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  CONSTRAINT `service_service_project_service_project_id_foreign` FOREIGN KEY (`service_project_id`) REFERENCES `service_projects` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_service_project`
--

LOCK TABLES `service_service_project` WRITE;
/*!40000 ALTER TABLE `service_service_project` DISABLE KEYS */;
INSERT INTO `service_service_project` VALUES (1,1,3,NULL,NULL);
/*!40000 ALTER TABLE `service_service_project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadlines` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `bullits` text COLLATE utf8mb4_unicode_ci,
  `seo_text` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Интернет магазин','internet-magazin-pod-kliuc','<p>Создадим интернет-магазин «под ключ», удобный для ваших покупателей и с максимальной автоматизацией.</p>','Полноценный инструмент для продаж: корзина, оформление заказа и оплата','1−3 мес','от 80 000 ₽',NULL,1,0,NULL,'2024-03-05 15:02:16','2024-05-12 09:25:56',1,'[{\"name\":\"\\u0427\\u0442\\u043e \\u0432\\u0445\\u043e\\u0434\\u0438\\u0442 \\u0432 \\u0441\\u0442\\u043e\\u0438\\u043c\\u043e\\u0441\\u0442\\u044c\",\"text\":\"1. \\u041f\\u0440\\u0435\\u0434\\u043f\\u0440\\u043e\\u0435\\u043a\\u0442\\u043d\\u0430\\u044f \\u0430\\u043d\\u0430\\u043b\\u0438\\u0442\\u0438\\u043a\\u0430 (\\u0422\\u0417, \\u0441\\u0446\\u0435\\u043d\\u0430\\u0440\\u0438\\u0438, \\u043f\\u0440\\u043e\\u0442\\u043e\\u0442\\u0438\\u043f\\u044b)\\n2. \\u0414\\u0438\\u0437\\u0430\\u0439\\u043d\\n3. Frontend \\u0438 Backend \\u0440\\u0430\\u0437\\u0440\\u0430\\u0431\\u043e\\u0442\\u043a\\u0430\\n4. \\u0418\\u043d\\u0442\\u0435\\u0433\\u0440\\u0430\\u0446\\u0438\\u0438\\n5. \\u041d\\u0430\\u043f\\u043e\\u043b\\u043d\\u0435\\u043d\\u0438\\u0435\\n6. \\u0422\\u0435\\u0441\\u0442\\u0438\\u0440\\u043e\\u0432\\u0430\\u043d\\u0438\\u0435\\n7. \\u0417\\u0430\\u043f\\u0443\\u0441\\u043a \\u043f\\u0440\\u043e\\u0435\\u043a\\u0442\\u0430\"},{\"name\":\"\\u0427\\u0442\\u043e \\u0432\\u044b \\u043f\\u043e\\u043b\\u0443\\u0447\\u0438\\u0442\\u0435\",\"text\":\"\\u0410\\u0432\\u0442\\u043e\\u043c\\u0430\\u0442\\u0438\\u0437\\u0438\\u0440\\u043e\\u0432\\u0430\\u043d\\u043d\\u044b\\u0439 \\u0438\\u043d\\u0442\\u0435\\u0440\\u043d\\u0435\\u0442-\\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d \\u0434\\u043b\\u044f \\u043f\\u0440\\u043e\\u0434\\u0430\\u0436. \\u0421 \\u0438\\u043d\\u0442\\u0435\\u0433\\u0440\\u0430\\u0446\\u0438\\u044f\\u043c\\u0438, \\u0433\\u043e\\u0442\\u043e\\u0432\\u044b\\u0439 \\u0434\\u043b\\u044f \\u0437\\u0430\\u043f\\u0443\\u0441\\u043a\\u0430 \\u043f\\u043b\\u0430\\u0442\\u043d\\u043e\\u0439 \\u0440\\u0435\\u043a\\u043b\\u0430\\u043c\\u044b \\u0438 SEO \\u043f\\u0440\\u043e\\u0434\\u0432\\u0438\\u0436\\u0435\\u043d\\u0438\\u044f.\"}]','<p>Хотите создать собственный интернет-магазин, который будет привлекать новых покупателей и автоматизировать процессы? Тогда вы попали по адресу!</p><p>Мы - команда опытных программистов и дизайнеров, специализирующихся на разработке интернет-магазинов под ключ. Наша задача - создать для вас уникальный и привлекательный онлайн-магазин, который будет максимально удобным для ваших покупателей.</p><p>Мы понимаем, что успешный интернет-магазин должен иметь не только привлекательный дизайн, но и быть высокоавтоматизированным. Именно поэтому мы уделяем особое внимание разработке удобной и интуитивно понятной навигации, а также интеграции с различными платежными системами, системами управления складом и маркетплейсами.</p><p>Наша команда обладает огромным опытом в разработке интернет-магазинов различных масштабов и направлений. Мы готовы взять на себя всю работу, начиная от разработки уникального дизайна и заканчивая настройкой и внедрением необходимых систем. Вы можете быть уверены, что ваш интернет-магазин будет разработан профессионально и в срок.</p><p>Мы также готовы предложить вам поддержку и помощь на каждом этапе работы с вашим интернет-магазином. Наша цель - не только создать магазин, но и обеспечить его успешную работу и развитие.</p><p>Если вы хотите увеличить свои продажи и расширить свой бизнес, то разработка интернет-магазина под ключ - идеальное решение для вас. Обратитесь к нам прямо сейчас и вы не пожалеете!</p>');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locked` tinyint(1) NOT NULL DEFAULT '0',
  `payload` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_group_name_unique` (`group`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'app','header_links',0,'[{\"tag\": null, \"url\": \"/promotions\", \"blank\": false, \"label\": \"Акции\"}, {\"tag\": null, \"url\": \"/projects\", \"blank\": false, \"label\": \"Портфолио\"}, {\"tag\": \"144\", \"url\": \"/reviews\", \"blank\": false, \"label\": \"Отзывы\"}, {\"tag\": null, \"url\": \"/about\", \"blank\": false, \"label\": \"О студии\"}, {\"tag\": null, \"url\": \"#\", \"blank\": false, \"label\": \"Бриф\"}, {\"tag\": null, \"url\": \"#\", \"blank\": false, \"label\": \"Основатель\"}, {\"tag\": null, \"url\": \"#\", \"blank\": false, \"label\": \"Контакты\"}, {\"tag\": null, \"url\": \"#\", \"blank\": false, \"label\": \"Блог\"}]','2024-03-01 08:04:09','2024-05-18 08:27:21'),(2,'app','phone',0,'\"8 (8332) 411-451\"','2024-03-01 08:04:09','2024-03-05 15:08:02'),(3,'app','email',0,'\"info@vyatka-it.ru\"','2024-03-01 08:04:09','2024-03-05 15:08:02'),(4,'app','messengers',0,'\"79539453055\"','2024-03-01 08:04:09','2024-03-05 15:08:02'),(5,'app','vk',0,'\"https://vk.com/vyatkait\"','2024-03-01 08:04:09','2024-03-05 15:08:02'),(6,'app','telegram',0,'\"tg://resolve?domain=vyatkait\"','2024-03-01 08:04:09','2024-03-05 15:08:02'),(7,'app','work_time',0,'\"Пн−Пт: 9:00 − 17:00\\nСб−Вс: выходной\"','2024-03-01 08:04:09','2024-03-05 15:08:02'),(8,'app','address',0,'\"Кировская область, г. Киров, Октябрьский пр-т 120, офис 305, 306\"','2024-03-01 08:04:09','2024-03-05 15:08:02'),(9,'app','geo',0,'\"#\"','2024-03-01 08:04:09','2024-03-05 15:08:02'),(18,'app','behance',0,'\"#\"','2024-03-05 15:07:27','2024-03-05 15:08:02'),(19,'AboutSettings','title',0,'\"О студии\"','2024-05-18 07:09:38','2024-05-18 07:19:09'),(20,'AboutSettings','description',0,'\"Мы команда веб-разработчиков, которая специализируется на разработке сайтов и интернет-магазинов для малого и среднего бизнеса. Оказываем долгосрочную техническую поддержку. Создаем мобильные приложения и сложные интеграции\"','2024-05-18 07:09:38','2024-05-18 07:19:09'),(21,'AboutSettings','tags',0,'[\"Javascript\", \"Python\", \"Ruby\", \"Node.js\", \"Webpack\", \"MongoDB\", \"PostgreSQL\", \"Electron\", \"Lua\", \"Java\", \"React\", \"PM2\", \"Angular\", \"Redis\"]','2024-05-18 07:09:38','2024-05-18 07:19:09'),(22,'AboutSettings','bulits',0,'[{\"link\": null, \"title\": \"6\", \"description\": \"Лет опыта\"}, {\"link\": null, \"title\": \"200\", \"description\": \"Успешных проектов\"}, {\"link\": null, \"title\": \"24\", \"description\": \"Месяцев гарантии\"}, {\"link\": \"#\", \"title\": \"100+\", \"description\": \"Настоящих отзывов\"}]','2024-05-18 07:09:38','2024-05-18 07:19:09'),(23,'gallery','company',0,'[\"01HY8222N4RVKM5N9CPME7E6JJ.jpg\", \"01HY8222N5ZAW56J0QQ2WRP5N8.jpg\", \"01HY8222N6DWAWHJJWTYJ3HC7W.jpg\", \"01HY8222N6DWAWHJJWTYJ3HC7X.jpg\"]','2024-05-19 05:53:43','2024-05-19 06:13:55');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'dev','ruslan.dev@vyatka-it.ru',NULL,'$2y$12$yWB5Gnw0YS5GUmqVUMnoeebyqfqH.a6454Tv59cW3bwGPABN1u3OK','wnhfU5wVXyqf0cvYAifwT258FrDPqOQFYwlR8iGuetWPVTndyVcGKRQFSTZY','2024-03-01 05:45:30','2024-03-01 05:45:30');
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

-- Dump completed on 2024-05-20 13:11:24
