-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.22.04.2

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
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `textarea` varchar(400) DEFAULT NULL,
  `imagedata` longblob,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,'rewthjg','',NULL,NULL),(2,'rewthjg','',NULL,NULL),(3,'skills','',NULL,NULL),(4,'skills','',NULL,NULL),(5,'skills',_binary 'nature.jpg',NULL,NULL),(6,'skills',_binary 'nature.jpg',NULL,NULL),(7,'skills',_binary 'nature.jpg',NULL,NULL),(8,'skills',_binary 'nature.jpg',NULL,NULL),(9,'skills',_binary 'nature.jpg',NULL,NULL),(10,'skills',_binary 'nature.jpg',NULL,NULL),(11,'skills',_binary 'nature.jpg',NULL,NULL),(12,'skills',_binary 'nature.jpg',NULL,NULL),(13,'resume',_binary 'nature.jpg',NULL,NULL),(14,'resume',_binary 'nature.jpg',NULL,NULL),(15,'resume',_binary 'nature.jpg',NULL,NULL),(16,'resume',_binary 'nature.jpg',NULL,NULL),(17,'resume',_binary 'nature.jpg',NULL,NULL),(18,'resume',_binary 'nature.jpg',NULL,NULL),(19,'resume',_binary 'nature.jpg',NULL,NULL),(20,'resume',_binary 'nature.jpg',NULL,NULL),(21,'resume',_binary 'nature.jpg',NULL,NULL),(22,'resume',_binary 'nature.jpg',NULL,NULL),(23,'resume',_binary 'nature.jpg',NULL,NULL),(24,'resume',_binary 'nature.jpg',NULL,NULL),(25,'resume',_binary 'nature.jpg',NULL,NULL),(26,'resume',_binary 'nature.jpg',NULL,NULL),(27,'resume',_binary 'nature.jpg',NULL,NULL),(28,'d cm d',_binary 'log.webp',NULL,NULL),(29,'d cm d',_binary 'log.webp',NULL,NULL),(30,'d cm d',_binary 'log.webp',NULL,NULL),(31,'cevfr',_binary 'log.webp',NULL,NULL),(32,'senje',_binary 'log.webp',NULL,NULL),(33,'senje',_binary 'log.webp',NULL,NULL),(34,'nnoeijf',_binary 'log.webp',NULL,NULL),(35,'jndjnwie',_binary 'log.webp',NULL,NULL),(36,'jndjnwie',_binary 'log.webp',NULL,NULL),(37,'jndjnwie',_binary 'log.webp',NULL,NULL),(38,'jndjnwie',_binary 'log.webp',NULL,NULL),(39,'jndjnwie',_binary 'log.webp',NULL,NULL),(40,'komol',_binary 'log.webp',NULL,NULL),(41,'komol',_binary 'log.webp',NULL,NULL),(42,'frogjp5mt',_binary 'log.webp',NULL,NULL),(43,'jbuy-[ybgfi',_binary 'log.webp',NULL,NULL),(44,'wkmdkoe',_binary 'log.webp',NULL,NULL),(45,'ndbjekf',_binary 'log.webp',NULL,NULL),(46,'ndbjekf',_binary 'log.webp',NULL,NULL),(47,' enfkje3j',_binary 'log.webp',NULL,NULL),(48,'Tanushree',_binary 'log.webp',NULL,NULL),(49,'ok ummmm!!!!!',_binary 'log.webp','Naman','Gupta'),(50,'ohkkk',_binary 'log.webp','Tanushree','Gupta'),(51,'ohkkk',_binary 'log.webp','Tanushree','Gupta'),(52,'ohkkk',_binary 'log.webp','Tanushree','Gupta'),(53,'ohkkk',_binary 'log.webp','Tanushree','Gupta'),(54,'log',_binary 'nature.jpg','Naman','Gupta'),(55,'hii guys',_binary 'log.webp','',''),(57,'its my certificate',_binary 'log.webp','manish','vijay'),(58,'its my skill',_binary 'nature.jpg','Vikas','Prasad'),(59,'its my skill',_binary 'nature.jpg','Vikas','Prasad'),(60,'its my skill',_binary 'nature.jpg','Vikas','Prasad'),(61,'its my skill',_binary 'nature.jpg','Vikas','Prasad'),(62,'its my skill',_binary 'nature.jpg','Vikas','Prasad'),(64,'added some data related to skills or certificate or internship',_binary 'nature.jpg','Tanushree','Gupta'),(67,'here is my certificate on python basics. I had did this course from University OF Michigan through the platform Coursera. The total duration of course is 45 days.\r\nand here I had worked on python.\r\n ',_binary 'Screenshot_20220223-222547_Drive.jpg','Tanushree','Gupta'),(68,'working',_binary 'login.webp','Tanushree','Gupta'),(69,'certificate',_binary 'Screenshot_20220223-222547_Drive.jpg','Tanushree','Gupta'),(70,'anything',_binary 'log.webp','Tanushree','Gupta'),(72,'checking',_binary 'log.webp','Tanushree','Gupta'),(75,'here is my certificate on python basics. I had did this course from University OF Michigan through the platform Coursera. The total duration of course is 45 days. and here I had worked on python.',_binary 'certificate.jpg','Tanushree','Gupta'),(77,'Here is my TCS Certificate. I did training in TCSion and the duration is 15 days. In this I learned about presentation skills, communication skills, resume making.',_binary 'TCS.jpg','manish','vijay');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-30 12:21:24
