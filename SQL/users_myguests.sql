-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: users
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `myguests`
--

DROP TABLE IF EXISTS `myguests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `myguests` (
  `name` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `balance` varchar(255) NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `myguests`
--

LOCK TABLES `myguests` WRITE;
/*!40000 ALTER TABLE `myguests` DISABLE KEYS */;
INSERT INTO `myguests` VALUES ('Ahmed','ahmed@gmail.com','1070','2022-02-20 21:06:14','2022-02-20 23:06:14'),('Alaa','alaa@gmail.com','1130','2022-02-20 21:08:35','2022-02-20 23:08:35'),('Faries','faries@gmail.com','1050','2022-02-20 21:09:26','2022-02-20 23:09:26'),('Nour','nour@gmail.com','8827','2022-02-20 21:10:08','2022-02-20 23:10:08'),('Aya','aya@gmail.com','1116','2022-02-20 21:11:57','2022-02-20 23:11:57'),('Gana','gana@gmail.com','1050','2022-02-20 21:12:29','2022-02-20 23:12:29'),('Amr','amr@gmail.com','1057','2022-02-20 21:12:59','2022-02-20 23:12:59'),('Rana','rana@gmail.com','1100','2022-02-20 22:25:27','2022-02-21 00:25:27'),('Nada','nada@gmail.com','1950','2022-02-20 22:27:11','2022-02-21 00:27:11'),('Eman','eman@gmail.com','1050','2022-02-20 22:27:35','2022-02-21 00:27:35');
/*!40000 ALTER TABLE `myguests` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-21  3:50:29
