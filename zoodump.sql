-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: zoo
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `animal`
--

DROP TABLE IF EXISTS `animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `animal` (
  `animalID` int NOT NULL AUTO_INCREMENT,
  `attractionID` int NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `species` varchar(15) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `DOB` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`animalID`),
  KEY `animal_ibfk_1` (`attractionID`),
  CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`attractionID`) REFERENCES `attraction` (`attractionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animal`
--

LOCK TABLES `animal` WRITE;
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attraction`
--

DROP TABLE IF EXISTS `attraction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `attraction` (
  `attractionID` int NOT NULL AUTO_INCREMENT,
  `locationID` int NOT NULL,
  `purchases` decimal(15,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`attractionID`),
  KEY `attraction_ibfk_1` (`locationID`),
  CONSTRAINT `attraction_ibfk_1` FOREIGN KEY (`locationID`) REFERENCES `location` (`locationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attraction`
--

LOCK TABLES `attraction` WRITE;
/*!40000 ALTER TABLE `attraction` DISABLE KEYS */;
/*!40000 ALTER TABLE `attraction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `department` (
  `departmentID` int NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`departmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee` (
  `attractionID` int NOT NULL,
  `locationID` int NOT NULL,
  `managerID` int NOT NULL,
  `employeeID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `ssn` int NOT NULL,
  `data_hired` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`employeeID`,`ssn`),
  KEY `employee_ibfk_1` (`attractionID`),
  KEY `employee_ibfk_2` (`locationID`),
  KEY `employee_ibfk_3` (`managerID`),
  CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`attractionID`) REFERENCES `attraction` (`attractionID`),
  CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`locationID`) REFERENCES `location` (`locationID`),
  CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`managerID`) REFERENCES `manager` (`managerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gift_shop`
--

DROP TABLE IF EXISTS `gift_shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gift_shop` (
  `giftshopID` int NOT NULL AUTO_INCREMENT,
  `donations` decimal(15,2) NOT NULL DEFAULT '0.00',
  `product_sales` decimal(15,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`giftshopID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gift_shop`
--

LOCK TABLES `gift_shop` WRITE;
/*!40000 ALTER TABLE `gift_shop` DISABLE KEYS */;
/*!40000 ALTER TABLE `gift_shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `location` (
  `locationID` int NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`locationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `manager` (
  `departmentID` int NOT NULL,
  `locationID` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `managerID` int NOT NULL AUTO_INCREMENT,
  `ssn` int NOT NULL,
  `data_hired` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`managerID`,`ssn`),
  KEY `manager_ibfk_1` (`departmentID`),
  KEY `manager_ibfk_2` (`locationID`),
  CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`departmentID`) REFERENCES `department` (`departmentID`),
  CONSTRAINT `manager_ibfk_2` FOREIGN KEY (`locationID`) REFERENCES `location` (`locationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manager`
--

LOCK TABLES `manager` WRITE;
/*!40000 ALTER TABLE `manager` DISABLE KEYS */;
/*!40000 ALTER TABLE `manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `user_name` varchar(30) DEFAULT NULL,
  `credit_card_info` varchar(16) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `tickets_purchased` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`phone_number`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-11 13:27:45
