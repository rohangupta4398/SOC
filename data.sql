-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: SOC
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `ABC2357_closed`
--

DROP TABLE IF EXISTS `ABC2357_closed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ABC2357_closed` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `AADHAR` varchar(20) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `From_Date` date DEFAULT NULL,
  `To_Date` date DEFAULT NULL,
  `Diagnosis` text,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ABC2357_closed`
--

LOCK TABLES `ABC2357_closed` WRITE;
/*!40000 ALTER TABLE `ABC2357_closed` DISABLE KEYS */;
/*!40000 ALTER TABLE `ABC2357_closed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ABC2357_curr`
--

DROP TABLE IF EXISTS `ABC2357_curr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ABC2357_curr` (
  `AADHAR` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Severity` int(1) DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ABC2357_curr`
--

LOCK TABLES `ABC2357_curr` WRITE;
/*!40000 ALTER TABLE `ABC2357_curr` DISABLE KEYS */;
/*!40000 ALTER TABLE `ABC2357_curr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ABC2357_referred`
--

DROP TABLE IF EXISTS `ABC2357_referred`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ABC2357_referred` (
  `Aadhar` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Comments` text,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ABC2357_referred`
--

LOCK TABLES `ABC2357_referred` WRITE;
/*!40000 ALTER TABLE `ABC2357_referred` DISABLE KEYS */;
/*!40000 ALTER TABLE `ABC2357_referred` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `A_266738384764`
--

DROP TABLE IF EXISTS `A_266738384764`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `A_266738384764` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_266738384764`
--

LOCK TABLES `A_266738384764` WRITE;
/*!40000 ALTER TABLE `A_266738384764` DISABLE KEYS */;
INSERT INTO `A_266738384764` VALUES (1,'2018-07-09','Sarthak Singhal',NULL,NULL,NULL,NULL,'ghjfhjg','fadsfsa','Y',NULL),(2,'2018-07-09','Sarthak Singhal',NULL,NULL,NULL,NULL,NULL,'fadsfsa','N',NULL),(3,'2018-07-09','Sarthak Singhal',NULL,NULL,NULL,NULL,'sore eyes,dry throat','Jaundice','Y',NULL),(4,'2018-07-09','Sarthak Singhal',NULL,NULL,NULL,NULL,NULL,'Jaundice','N',NULL);
/*!40000 ALTER TABLE `A_266738384764` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `A_350215159126`
--

DROP TABLE IF EXISTS `A_350215159126`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `A_350215159126` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_350215159126`
--

LOCK TABLES `A_350215159126` WRITE;
/*!40000 ALTER TABLE `A_350215159126` DISABLE KEYS */;
/*!40000 ALTER TABLE `A_350215159126` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `A_350285304712`
--

DROP TABLE IF EXISTS `A_350285304712`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `A_350285304712` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_350285304712`
--

LOCK TABLES `A_350285304712` WRITE;
/*!40000 ALTER TABLE `A_350285304712` DISABLE KEYS */;
/*!40000 ALTER TABLE `A_350285304712` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `A_649249103747`
--

DROP TABLE IF EXISTS `A_649249103747`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `A_649249103747` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_649249103747`
--

LOCK TABLES `A_649249103747` WRITE;
/*!40000 ALTER TABLE `A_649249103747` DISABLE KEYS */;
/*!40000 ALTER TABLE `A_649249103747` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `A_747284991930`
--

DROP TABLE IF EXISTS `A_747284991930`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `A_747284991930` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_747284991930`
--

LOCK TABLES `A_747284991930` WRITE;
/*!40000 ALTER TABLE `A_747284991930` DISABLE KEYS */;
/*!40000 ALTER TABLE `A_747284991930` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `A_748246628003`
--

DROP TABLE IF EXISTS `A_748246628003`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `A_748246628003` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_748246628003`
--

LOCK TABLES `A_748246628003` WRITE;
/*!40000 ALTER TABLE `A_748246628003` DISABLE KEYS */;
/*!40000 ALTER TABLE `A_748246628003` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `A_789202756233`
--

DROP TABLE IF EXISTS `A_789202756233`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `A_789202756233` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_789202756233`
--

LOCK TABLES `A_789202756233` WRITE;
/*!40000 ALTER TABLE `A_789202756233` DISABLE KEYS */;
/*!40000 ALTER TABLE `A_789202756233` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `A_859290409356`
--

DROP TABLE IF EXISTS `A_859290409356`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `A_859290409356` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_859290409356`
--

LOCK TABLES `A_859290409356` WRITE;
/*!40000 ALTER TABLE `A_859290409356` DISABLE KEYS */;
/*!40000 ALTER TABLE `A_859290409356` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `A_872310376151`
--

DROP TABLE IF EXISTS `A_872310376151`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `A_872310376151` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_872310376151`
--

LOCK TABLES `A_872310376151` WRITE;
/*!40000 ALTER TABLE `A_872310376151` DISABLE KEYS */;
/*!40000 ALTER TABLE `A_872310376151` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `A_980127459126`
--

DROP TABLE IF EXISTS `A_980127459126`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `A_980127459126` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_980127459126`
--

LOCK TABLES `A_980127459126` WRITE;
/*!40000 ALTER TABLE `A_980127459126` DISABLE KEYS */;
/*!40000 ALTER TABLE `A_980127459126` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `A_985732047023`
--

DROP TABLE IF EXISTS `A_985732047023`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `A_985732047023` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_985732047023`
--

LOCK TABLES `A_985732047023` WRITE;
/*!40000 ALTER TABLE `A_985732047023` DISABLE KEYS */;
/*!40000 ALTER TABLE `A_985732047023` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `S_266738384764`
--

DROP TABLE IF EXISTS `S_266738384764`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `S_266738384764` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `S_266738384764`
--

LOCK TABLES `S_266738384764` WRITE;
/*!40000 ALTER TABLE `S_266738384764` DISABLE KEYS */;
/*!40000 ALTER TABLE `S_266738384764` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `S_350215159126`
--

DROP TABLE IF EXISTS `S_350215159126`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `S_350215159126` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `S_350215159126`
--

LOCK TABLES `S_350215159126` WRITE;
/*!40000 ALTER TABLE `S_350215159126` DISABLE KEYS */;
/*!40000 ALTER TABLE `S_350215159126` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `S_350285304712`
--

DROP TABLE IF EXISTS `S_350285304712`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `S_350285304712` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `S_350285304712`
--

LOCK TABLES `S_350285304712` WRITE;
/*!40000 ALTER TABLE `S_350285304712` DISABLE KEYS */;
/*!40000 ALTER TABLE `S_350285304712` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `S_649249103747`
--

DROP TABLE IF EXISTS `S_649249103747`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `S_649249103747` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `S_649249103747`
--

LOCK TABLES `S_649249103747` WRITE;
/*!40000 ALTER TABLE `S_649249103747` DISABLE KEYS */;
/*!40000 ALTER TABLE `S_649249103747` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `S_747284991930`
--

DROP TABLE IF EXISTS `S_747284991930`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `S_747284991930` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `S_747284991930`
--

LOCK TABLES `S_747284991930` WRITE;
/*!40000 ALTER TABLE `S_747284991930` DISABLE KEYS */;
/*!40000 ALTER TABLE `S_747284991930` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `S_748246628003`
--

DROP TABLE IF EXISTS `S_748246628003`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `S_748246628003` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `S_748246628003`
--

LOCK TABLES `S_748246628003` WRITE;
/*!40000 ALTER TABLE `S_748246628003` DISABLE KEYS */;
/*!40000 ALTER TABLE `S_748246628003` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `S_789202756233`
--

DROP TABLE IF EXISTS `S_789202756233`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `S_789202756233` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `S_789202756233`
--

LOCK TABLES `S_789202756233` WRITE;
/*!40000 ALTER TABLE `S_789202756233` DISABLE KEYS */;
/*!40000 ALTER TABLE `S_789202756233` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `S_859290409356`
--

DROP TABLE IF EXISTS `S_859290409356`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `S_859290409356` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `S_859290409356`
--

LOCK TABLES `S_859290409356` WRITE;
/*!40000 ALTER TABLE `S_859290409356` DISABLE KEYS */;
/*!40000 ALTER TABLE `S_859290409356` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `S_872310376151`
--

DROP TABLE IF EXISTS `S_872310376151`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `S_872310376151` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `S_872310376151`
--

LOCK TABLES `S_872310376151` WRITE;
/*!40000 ALTER TABLE `S_872310376151` DISABLE KEYS */;
/*!40000 ALTER TABLE `S_872310376151` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `S_980127459126`
--

DROP TABLE IF EXISTS `S_980127459126`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `S_980127459126` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `S_980127459126`
--

LOCK TABLES `S_980127459126` WRITE;
/*!40000 ALTER TABLE `S_980127459126` DISABLE KEYS */;
/*!40000 ALTER TABLE `S_980127459126` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `S_985732047023`
--

DROP TABLE IF EXISTS `S_985732047023`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `S_985732047023` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `S_985732047023`
--

LOCK TABLES `S_985732047023` WRITE;
/*!40000 ALTER TABLE `S_985732047023` DISABLE KEYS */;
/*!40000 ALTER TABLE `S_985732047023` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TOP170241_closed`
--

DROP TABLE IF EXISTS `TOP170241_closed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TOP170241_closed` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `AADHAR` varchar(20) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `From_Date` date DEFAULT NULL,
  `To_Date` date DEFAULT NULL,
  `Diagnosis` text,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TOP170241_closed`
--

LOCK TABLES `TOP170241_closed` WRITE;
/*!40000 ALTER TABLE `TOP170241_closed` DISABLE KEYS */;
/*!40000 ALTER TABLE `TOP170241_closed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TOP170241_curr`
--

DROP TABLE IF EXISTS `TOP170241_curr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TOP170241_curr` (
  `AADHAR` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Severity` int(1) DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TOP170241_curr`
--

LOCK TABLES `TOP170241_curr` WRITE;
/*!40000 ALTER TABLE `TOP170241_curr` DISABLE KEYS */;
/*!40000 ALTER TABLE `TOP170241_curr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TOP170241_referred`
--

DROP TABLE IF EXISTS `TOP170241_referred`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TOP170241_referred` (
  `Aadhar` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Comments` text,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TOP170241_referred`
--

LOCK TABLES `TOP170241_referred` WRITE;
/*!40000 ALTER TABLE `TOP170241_referred` DISABLE KEYS */;
/*!40000 ALTER TABLE `TOP170241_referred` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `XYZ1234_closed`
--

DROP TABLE IF EXISTS `XYZ1234_closed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `XYZ1234_closed` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `AADHAR` varchar(20) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `From_Date` date DEFAULT NULL,
  `To_Date` date DEFAULT NULL,
  `Diagnosis` text,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `XYZ1234_closed`
--

LOCK TABLES `XYZ1234_closed` WRITE;
/*!40000 ALTER TABLE `XYZ1234_closed` DISABLE KEYS */;
/*!40000 ALTER TABLE `XYZ1234_closed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `XYZ1234_curr`
--

DROP TABLE IF EXISTS `XYZ1234_curr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `XYZ1234_curr` (
  `AADHAR` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Severity` int(1) DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `XYZ1234_curr`
--

LOCK TABLES `XYZ1234_curr` WRITE;
/*!40000 ALTER TABLE `XYZ1234_curr` DISABLE KEYS */;
/*!40000 ALTER TABLE `XYZ1234_curr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `XYZ1234_referred`
--

DROP TABLE IF EXISTS `XYZ1234_referred`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `XYZ1234_referred` (
  `Aadhar` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Comments` text,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `XYZ1234_referred`
--

LOCK TABLES `XYZ1234_referred` WRITE;
/*!40000 ALTER TABLE `XYZ1234_referred` DISABLE KEYS */;
INSERT INTO `XYZ1234_referred` VALUES ('747284991930','ANASTHESIA JORDAN','gorgkogkldgldmgd','2018-07-05','Sarthak Singhal');
/*!40000 ALTER TABLE `XYZ1234_referred` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `XYZ170033_closed`
--

DROP TABLE IF EXISTS `XYZ170033_closed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `XYZ170033_closed` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `AADHAR` varchar(20) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `From_Date` date DEFAULT NULL,
  `To_Date` date DEFAULT NULL,
  `Diagnosis` text,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `XYZ170033_closed`
--

LOCK TABLES `XYZ170033_closed` WRITE;
/*!40000 ALTER TABLE `XYZ170033_closed` DISABLE KEYS */;
/*!40000 ALTER TABLE `XYZ170033_closed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `XYZ170033_curr`
--

DROP TABLE IF EXISTS `XYZ170033_curr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `XYZ170033_curr` (
  `AADHAR` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Severity` int(1) DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `XYZ170033_curr`
--

LOCK TABLES `XYZ170033_curr` WRITE;
/*!40000 ALTER TABLE `XYZ170033_curr` DISABLE KEYS */;
/*!40000 ALTER TABLE `XYZ170033_curr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `XYZ170033_referred`
--

DROP TABLE IF EXISTS `XYZ170033_referred`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `XYZ170033_referred` (
  `Aadhar` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Comments` text,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `XYZ170033_referred`
--

LOCK TABLES `XYZ170033_referred` WRITE;
/*!40000 ALTER TABLE `XYZ170033_referred` DISABLE KEYS */;
/*!40000 ALTER TABLE `XYZ170033_referred` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `XYZ170459_closed`
--

DROP TABLE IF EXISTS `XYZ170459_closed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `XYZ170459_closed` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `AADHAR` varchar(20) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `From_Date` date DEFAULT NULL,
  `To_Date` date DEFAULT NULL,
  `Diagnosis` text,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `XYZ170459_closed`
--

LOCK TABLES `XYZ170459_closed` WRITE;
/*!40000 ALTER TABLE `XYZ170459_closed` DISABLE KEYS */;
/*!40000 ALTER TABLE `XYZ170459_closed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `XYZ170459_curr`
--

DROP TABLE IF EXISTS `XYZ170459_curr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `XYZ170459_curr` (
  `AADHAR` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Severity` int(1) DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `XYZ170459_curr`
--

LOCK TABLES `XYZ170459_curr` WRITE;
/*!40000 ALTER TABLE `XYZ170459_curr` DISABLE KEYS */;
/*!40000 ALTER TABLE `XYZ170459_curr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `XYZ170459_referred`
--

DROP TABLE IF EXISTS `XYZ170459_referred`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `XYZ170459_referred` (
  `Aadhar` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Comments` text,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `XYZ170459_referred`
--

LOCK TABLES `XYZ170459_referred` WRITE;
/*!40000 ALTER TABLE `XYZ170459_referred` DISABLE KEYS */;
/*!40000 ALTER TABLE `XYZ170459_referred` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `XYZ170635_closed`
--

DROP TABLE IF EXISTS `XYZ170635_closed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `XYZ170635_closed` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `AADHAR` varchar(12) NOT NULL,
  `Patient_Name` varchar(30) NOT NULL,
  `From_Date` date NOT NULL,
  `To_Date` date NOT NULL,
  `Diagnosis` text NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `XYZ170635_closed`
--

LOCK TABLES `XYZ170635_closed` WRITE;
/*!40000 ALTER TABLE `XYZ170635_closed` DISABLE KEYS */;
INSERT INTO `XYZ170635_closed` VALUES (1,'266738384764','BRUCE WAYNE','2018-07-09','2018-07-09','fadsfsa'),(2,'266738384764','BRUCE WAYNE','2018-07-09','2018-07-09','Jaundice');
/*!40000 ALTER TABLE `XYZ170635_closed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `XYZ170635_curr`
--

DROP TABLE IF EXISTS `XYZ170635_curr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `XYZ170635_curr` (
  `AADHAR` varchar(12) NOT NULL,
  `Patient_Name` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Severity` int(1) NOT NULL,
  `Diagnosis` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `XYZ170635_curr`
--

LOCK TABLES `XYZ170635_curr` WRITE;
/*!40000 ALTER TABLE `XYZ170635_curr` DISABLE KEYS */;
/*!40000 ALTER TABLE `XYZ170635_curr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `XYZ170635_referred`
--

DROP TABLE IF EXISTS `XYZ170635_referred`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `XYZ170635_referred` (
  `Aadhar` varchar(12) NOT NULL,
  `Patient_Name` varchar(20) DEFAULT NULL,
  `Comments` text NOT NULL,
  `Date` date NOT NULL,
  `Doctor` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `XYZ170635_referred`
--

LOCK TABLES `XYZ170635_referred` WRITE;
/*!40000 ALTER TABLE `XYZ170635_referred` DISABLE KEYS */;
/*!40000 ALTER TABLE `XYZ170635_referred` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `abcd123456788`
--

DROP TABLE IF EXISTS `abcd123456788`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abcd123456788` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Aadhar` varchar(20) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `Status` varchar(2) DEFAULT NULL,
  `Date_doctor` date DEFAULT NULL,
  `Test_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abcd123456788`
--

LOCK TABLES `abcd123456788` WRITE;
/*!40000 ALTER TABLE `abcd123456788` DISABLE KEYS */;
/*!40000 ALTER TABLE `abcd123456788` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `abcd123456789`
--

DROP TABLE IF EXISTS `abcd123456789`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abcd123456789` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Aadhar` varchar(20) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `Status` varchar(2) DEFAULT NULL,
  `Date_doctor` date DEFAULT NULL,
  `Test_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abcd123456789`
--

LOCK TABLES `abcd123456789` WRITE;
/*!40000 ALTER TABLE `abcd123456789` DISABLE KEYS */;
/*!40000 ALTER TABLE `abcd123456789` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answer10`
--

DROP TABLE IF EXISTS `answer10`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer10` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer10`
--

LOCK TABLES `answer10` WRITE;
/*!40000 ALTER TABLE `answer10` DISABLE KEYS */;
INSERT INTO `answer10` VALUES (1,'XYZ170635','2018-07-08 17:43:04','Well He pretends to be single.\r\n','Y');
/*!40000 ALTER TABLE `answer10` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctor` (
  `Sno` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `LicenseID` varchar(20) NOT NULL,
  `Password` varchar(260) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Specialist` varchar(40) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `ContactNo` varchar(15) NOT NULL,
  `State_ut` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Address` varchar(120) NOT NULL,
  `Timings` varchar(14) NOT NULL,
  UNIQUE KEY `id` (`LicenseID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctor`
--

LOCK TABLES `doctor` WRITE;
/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
INSERT INTO `doctor` VALUES (1,'Vivek Saxena','XYZ1234','6367c48dd193d56ea7b0baad25b19455e529f5ee','/soc/doc1.jpg','General','M','6969696969','UTTAR PRADESH','KANPUR','HALL-5,IIT KANPUR,KANPUR,UTTARPRADESH','10:00 TO 12:00'),(2,'Paramveer Raol','XYZ170459','e9aebf5e276c2c9d1e3c1b77c4fc047b01f620d3','/soc/doc2.jpg','Dentist','M','7016816018','GUJARAT','JAMNAGAR','18-L,SEC 12,RELIANCE GREENS','16:00 TO 20:00'),(3,'Sarthak Singhal','XYZ170635','07750a2cba77983894994a8b0b0fd462b7e1e47a','/soc/doc3.jpg','Gynecologist','M','7427052933','RAJASTHAN','JAIPUR','SEC-15,HOUSE-21,JHOTWARA,JAIPUR,RAJASTHAM','06:00 TO 08:00'),(4,'Shweta Shukla','ABC2357','61d8557c67b179c44db6d0dbbfd4c7af2ed7a351','/soc/doc4.jpg','Brain Surgeon','F','9198999289','UTTAR PRADESH','LUCKNOW','HALL-5,IIT KANPUR,KANPUR,UTTARPRADESH','11:00 TO 13:00'),(5,'Abhishek Singh','XYZ170033','b9a5c4b2af6307b702393995bc509a3f0721b920','/soc/doc5.jpg','Oral Surgeon','M','9988959535','PUNJAB','CHANDIGARH','SEC-5,CHANDIGARH,UTTARPRADESH','10:00 TO 12:00'),(6,'Dewanshi Kumar Singh','TOP170241','61fb28c0975403f408c3d18938f37aebead287a0','/soc/doc6.jpg','Sleep Disorder Specialist','F','7906806147','RAJASTHAN','AJMER','HALL-7,SEC-8,AJMER,RAJASTHAN','16:00 TO 18:00');
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lab_list`
--

DROP TABLE IF EXISTS `lab_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lab_list` (
  `lab_id` varchar(15) NOT NULL,
  `lab_name` varchar(25) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `timings` varchar(14) NOT NULL,
  `conatact_no` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lab_list`
--

LOCK TABLES `lab_list` WRITE;
/*!40000 ALTER TABLE `lab_list` DISABLE KEYS */;
INSERT INTO `lab_list` VALUES ('abcd123456789','Single\'s Lab','Jaipur','Rajasthan','Single\'s Villa,Sec-12,Jhotwara,Jaipur,Rajasthan','10:00 to 18:00','7427052933','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),('accd123456788','Param\'s Lab','Ahemdabad','Gujarat','Aadinath tenaments,Sabarmati,Ahemdabad,Gujarat','10:00 to 20:00','7016816018','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),('xyz123456777','Adi\'s Lab','Lucknow','Uttar Pradesh','Something,Lucknow,Uttar Pradesh','03:00 to 09:00','9376875838','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),('xyz123456666','Rohan\'s Lab','Delhi','Delhi','another thing,delhi,delhi','14:00 to 23:00','7427055555','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),('xyz123333333','abhi\'s lab','chandigarh','UT','Sec-20,Chandigarh','10:00 to 17:00','7425858581','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),('xyz122222222','dewash\'s lab','Uttar pradesh','Saranpur','Something,Saranpur,Uttarpradesh','15:00 to 19:00','9879245333','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d');
/*!40000 ALTER TABLE `lab_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient` (
  `Name` varchar(30) NOT NULL,
  `Father` varchar(30) NOT NULL,
  `mother` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `AADHAR` varchar(20) DEFAULT NULL,
  `BLOODGROUP` varchar(4) NOT NULL,
  `AGE` int(3) NOT NULL,
  `SEX` varchar(1) NOT NULL,
  `MARITAL STATUS` varchar(1) NOT NULL,
  `image` varchar(30) NOT NULL,
  `COMMENTS` text NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` varchar(20) DEFAULT NULL,
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Sno`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES ('ROHAN GUPTA','PRAVEEN  KUMAR','MADHULIKA GUPTA','1998-03-04','350215159126','O+',20,'M','N','/soc/pat1.jpg','NONE','9671c73253cee9b18b8df367e3e627fab2863fe8','7427052933',1),('ADITYA RAGHUWANSHI','Y.K. RAGHUWANSHI','RENU RAGHUWANSHI','1998-05-23','350285304712','B+',20,'M','N','/soc/pat2.jpg','ASHTHMA,BRONCHITIS','b3e8ff7ac1c7e75661e16152a5dce1ff36a3e140','7706848545',2),('JONATHAN BLACK','SEBASTIAN BLACK','DINA BLACK','1986-08-23','872310376151','AB+',31,'M','N','/soc/pat3.jpg','OCD,MILD PSYCHOSIS','5d1852d43efe8f6e393448a3b4d1cd98a4cfd56f','7427052933',3),('SEBASTIAN BLACK','ALISTAIR BLACK','RITA BLACK','1952-01-19','789202756233','B+',66,'M','Y','/soc/pat4.jpg','MILD PSYCHOSIS,DELUSIONAL','5d1852d43efe8f6e393448a3b4d1cd98a4cfd56f','7427052933',4),('DINA BLACK','JONATHAN ROSS','ELIZABETH ROSS','1959-02-21','859290409356','A+',57,'F','Y','/soc/pat5.jpg','LIVER CANCER','5d1852d43efe8f6e393448a3b4d1cd98a4cfd56f','7427052933',5),('BRUCE WAYNE','THOMAS WAYNE','MARTHA WAYNE','1975-02-19','266738384764','O-',43,'M','N','/soc/pat6.jpg','None','07750a2cba77983894994a8b0b0fd462b7e1e47a','7427052933',6),('THOMAS WAYNE','PATRICK WAYNE','-','1932-12-12','985732047023','O-',85,'M','Y','/soc/pat7.jpg','None','07750a2cba77983894994a8b0b0fd462b7e1e47a','7427052933',7),('MARTHA WAYNE','BOB KANE','CELIA KANE','1939-11-18','748246628003','AB+',78,'F','Y','/soc/pat8.jpg','None','07750a2cba77983894994a8b0b0fd462b7e1e47a','7427052933',8),('KIM JORDAN ','KARL JORDAN','ANASTHESIA JORDAN','2001-05-01','980127459126','A-',17,'F','N','/soc/pat9.jpg','None','07750a2cba77983894994a8b0b0fd462b7e1e47a','7427052933',9),('KARL JORDAN','HECTOR JORDAN','KRYSTAL JORDAN','1972-03-05','649249103747','A+',46,'M','Y','/soc/pat10.jpg','None','07750a2cba77983894994a8b0b0fd462b7e1e47a','7427052933',10),('ANASTHESIA JORDAN','MICHAEL LEE BROWN','KATE BROWN','1972-09-11','747284991930','A-',45,'F','Y','/soc/pat11.jpg','None',NULL,'7427052933',11);
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Person` varchar(2) DEFAULT NULL,
  `Aadhar` varchar(20) DEFAULT NULL,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Category` varchar(20) DEFAULT NULL,
  `Question` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xyz122222222`
--

DROP TABLE IF EXISTS `xyz122222222`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xyz122222222` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Aadhar` varchar(20) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `Status` varchar(2) DEFAULT NULL,
  `Date_doctor` date DEFAULT NULL,
  `Test_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xyz122222222`
--

LOCK TABLES `xyz122222222` WRITE;
/*!40000 ALTER TABLE `xyz122222222` DISABLE KEYS */;
/*!40000 ALTER TABLE `xyz122222222` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xyz123333333`
--

DROP TABLE IF EXISTS `xyz123333333`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xyz123333333` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Aadhar` varchar(20) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `Status` varchar(2) DEFAULT NULL,
  `Date_doctor` date DEFAULT NULL,
  `Test_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xyz123333333`
--

LOCK TABLES `xyz123333333` WRITE;
/*!40000 ALTER TABLE `xyz123333333` DISABLE KEYS */;
/*!40000 ALTER TABLE `xyz123333333` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xyz123456666`
--

DROP TABLE IF EXISTS `xyz123456666`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xyz123456666` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Aadhar` varchar(20) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `Status` varchar(2) DEFAULT NULL,
  `Date_doctor` date DEFAULT NULL,
  `Test_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xyz123456666`
--

LOCK TABLES `xyz123456666` WRITE;
/*!40000 ALTER TABLE `xyz123456666` DISABLE KEYS */;
/*!40000 ALTER TABLE `xyz123456666` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xyz123456777`
--

DROP TABLE IF EXISTS `xyz123456777`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xyz123456777` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `Aadhar` varchar(20) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `Status` varchar(2) DEFAULT NULL,
  `Date_doctor` date DEFAULT NULL,
  `Test_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xyz123456777`
--

LOCK TABLES `xyz123456777` WRITE;
/*!40000 ALTER TABLE `xyz123456777` DISABLE KEYS */;
/*!40000 ALTER TABLE `xyz123456777` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-09 21:36:58
