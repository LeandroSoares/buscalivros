CREATE DATABASE  IF NOT EXISTS `tracalivros` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tracalivros`;
-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: localhost    Database: tracalivros
-- ------------------------------------------------------
-- Server version	5.5.29

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
-- Table structure for table `query`
--

DROP TABLE IF EXISTS `query`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `query` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `query` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `query`
--

LOCK TABLES `query` WRITE;
/*!40000 ALTER TABLE `query` DISABLE KEYS */;
INSERT INTO `query` VALUES (1,'qwrwqqwtwqt','2016-08-08 21:31:36'),(2,'harry  potter','2016-08-08 23:01:15'),(3,'meu pÃ© de laranja lima','2016-08-08 23:06:34'),(4,'meu pÃ© de laranja lima','2016-08-08 23:41:35'),(5,'meu pÃ© de laranja lima','2016-08-09 00:05:17'),(6,'meu pÃ© de laranja lima','2016-08-09 00:06:48'),(7,'meu pÃ© de laranja lima','2016-08-09 00:09:11'),(8,'meu pÃ© de laranja lima','2016-08-09 00:21:18'),(9,'php','2016-08-09 00:21:25'),(10,'meu pÃ© de laranja lima','2016-08-09 00:50:47'),(11,'php','2016-08-09 00:50:56'),(12,'tolkien','2016-08-09 00:51:05'),(13,'tolkien','2016-08-09 00:52:49'),(14,'tolkien','2016-08-09 00:53:13'),(15,'tolkien','2016-08-09 13:21:36'),(16,'tolkien','2016-08-09 13:22:10'),(17,'tolkien','2016-08-09 13:23:27'),(18,'tolkien','2016-08-09 13:24:54'),(19,'tolkien','2016-08-09 13:27:54'),(20,'tolkien','2016-08-09 13:27:58'),(21,'tolkien','2016-08-09 13:28:00'),(22,'tolkien','2016-08-09 13:28:28'),(23,'meu pÃ© de laranja lima','2016-08-09 17:50:41'),(24,'neuromancer','2016-08-10 22:37:32'),(25,'biblia','2016-08-11 21:04:29'),(26,'biblia','2016-08-11 21:05:20'),(27,'percy jackson','2016-08-11 21:09:40'),(28,'neuromance','2016-08-11 21:09:54'),(29,'neuromancer','2016-08-11 21:10:02'),(30,'O Hobbit','2016-08-11 21:10:10'),(31,'Javascript','2016-08-11 21:10:24'),(32,'java spring','2016-08-11 21:10:34'),(33,'scorm','2016-08-11 21:10:43'),(34,'oop','2016-08-11 21:10:52'),(35,'monalisa overdrive','2016-08-13 19:59:23');
/*!40000 ALTER TABLE `query` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-13 17:24:19
