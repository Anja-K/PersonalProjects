CREATE DATABASE  IF NOT EXISTS `dashboard` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `dashboard`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: localhost    Database: dashboard
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `element_order`
--

DROP TABLE IF EXISTS `element_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `element_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `display_order` int(10) unsigned NOT NULL,
  `color` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(10) unsigned NOT NULL,
  `text` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `user_id_idx` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `element_order`
--

LOCK TABLES `element_order` WRITE;
/*!40000 ALTER TABLE `element_order` DISABLE KEYS */;
INSERT INTO `element_order` VALUES (1,'Item 1',3,'panel-magenta','fa-comments',26,'New Comments!',1),(2,'Item 2',4,'panel-pastel-green','fa-tasks',12,'New Tasks!',1),(3,'Item 3',1,'panel-light-blue','fa-shopping-cart',124,'New Orders!',1),(4,'Item 4',2,'panel-light-yellow','fa-support',13,'Support Tickets!',1),(5,'Item 1',4,'panel-magenta','fa-comments',26,'New Comments!',2),(6,'Item 2',2,'panel-pastel-green','fa-tasks',12,'New Tasks!',2),(7,'Item 3',3,'panel-light-blue','fa-shopping-cart',124,'New Orders!',2),(8,'Item 4',1,'panel-light-yellow','fa-support',26,'Support Tickets!',2),(13,'Item1',2,'panel-magenta','fa-comments',26,'New Comments!',19),(14,'Item2',1,'panel-pastel-green','fa-tasks',12,'New Tasks!',19),(15,'Item3',4,'panel-light-blue','fa-shopping-cart',124,'New Orders!',19),(16,'Item4',3,'panel-light-yellow','fa-support',26,'Support Tickets!',19),(17,'Item1',1,'panel-magenta','fa-comments',26,'New Comments!',20),(18,'Item2',2,'panel-pastel-green','fa-tasks',12,'New Tasks!',20),(19,'Item3',3,'panel-light-blue','fa-shopping-cart',124,'New Orders!',20),(20,'Item4',4,'panel-light-yellow','fa-support',26,'Support Tickets!',20),(37,'Item1',1,'panel-magenta','fa-comments',26,'New Comments!',25),(38,'Item2',2,'panel-pastel-green','fa-tasks',12,'New Tasks!',25),(39,'Item3',3,'panel-light-blue','fa-shopping-cart',124,'New Orders!',25),(40,'Item4',4,'panel-light-yellow','fa-support',26,'Support Tickets!',25);
/*!40000 ALTER TABLE `element_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unknown.jpg',
  `role` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Anja','$2y$10$0ZYz3Fz0Pzq/fhoe68ydCertSgxmxY/Q.fM4Dt4vCxLxsg8f7mWHG','Anja Kukovska','Backend developer','User1.jpg','Administrator'),(2,'Emilija','$2y$10$pr2ItyTAOfRgVdWut3ysru..tF/ZhvDv29FCqfSD252BfdNEa0svq','Emilija Stojmenovska','UX/UI specialist','User2.jpg','Editor'),(19,'Marija','$2y$10$Qvfl9NHN3H0p3Zq2Yj2OD.08YGUj/5Hoo49KIeUp3D49FuzVkQv2u','Marija Naskovska','Frontend developer','emily.jpg','Editor'),(20,'Boban','$2y$10$KkCwCpZGWSHB9MjxgIkA7eehbJ6E7mGTptv0YjyoARuFElGE5VlZq','Boban Serafimovski','Backend developer','User4.jpg','Editor'),(25,'Userx','qwe','Userx','sth','unknown.jpg','Contributor');
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

-- Dump completed on 2017-08-09 19:03:21
