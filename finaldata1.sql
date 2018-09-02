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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_266738384764`
--

LOCK TABLES `A_266738384764` WRITE;
/*!40000 ALTER TABLE `A_266738384764` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_350215159126`
--

LOCK TABLES `A_350215159126` WRITE;
/*!40000 ALTER TABLE `A_350215159126` DISABLE KEYS */;
INSERT INTO `A_350215159126` VALUES (1,'2018-07-10','Paramveer Raol',NULL,NULL,NULL,NULL,'Toothache','Sensitive Teeth','Y',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_748246628003`
--

LOCK TABLES `A_748246628003` WRITE;
/*!40000 ALTER TABLE `A_748246628003` DISABLE KEYS */;
INSERT INTO `A_748246628003` VALUES (1,'2017-05-06','Sarthak Singhal',NULL,NULL,NULL,NULL,'Mild to severe pain,Cramping pain in lower abdomen or low back','Dysmenorrhea ','Y',NULL),(2,'2017-05-09','Sarthak Singhal','naproxen 1-0-1,ibuprofen 0-1-0','Pelvic exam','uploads/2_748246628003.png',140,'Cramping pain in lower abdomen and low back,Bloating Headache,Diarrhea','Dysmenorrhea ','R',90),(3,'2017-05-20','Sarthak Singhal','NULL','NULL',NULL,145,'Reduced abdominal pain,headache improving','Dysmenorrhea ','R',85),(4,'2017-06-07','Sarthak Singhal','celecoxib 1-1-1,diclofenac 0-0-1','NULL',NULL,115,'Sore throat,improved headache and','Dysmenorrhea ','R',45),(5,'2017-06-29','Sarthak Singhal','ibuprofen 1-0-1,indomethacin weekly one time','NULL',NULL,121,'pain relieved,periods regular,back to normal','Dysmenorrhea ','R',41),(6,'2017-07-15','Sarthak Singhal',NULL,NULL,NULL,NULL,NULL,'Dysmenorrhea ','N',NULL),(7,'2018-03-01','Dewanshi Kumar Singh',NULL,NULL,NULL,NULL,'Sleepiness during the day,Tiredness','Insomnia','Y',NULL),(8,'2018-03-20','Dewanshi Kumar Singh','Sleeping pills','NULL',NULL,130,'Inabilitty to sleep at night','Mild Insomnia','R',90),(9,'2018-04-14','Dewanshi Kumar Singh','Sleeping pills','Sleep Diary',NULL,120,'Small improvement in sleeping pattern','Mild Insomnia','R',80),(10,'2018-04-27','Dewanshi Kumar Singh','Sleeping pills','Sleep Diary',NULL,120,'Significant improvement in sleeping pattern','Mild Insomnia','R',80),(11,'2018-06-27','Paramveer Raol',NULL,NULL,NULL,NULL,'black stains on molars,swelled gums','Cavities','Y',NULL),(12,'2018-07-02','Paramveer Raol','DoloB when in pain','X ray',NULL,140,'pain in molars,excessive swelling above them filled with pus','Cavities','R',80),(13,'2018-07-04','Paramveer Raol','Root canal seating 1,level 1 anesthasia','NULL',NULL,140,'soreness deceraed after saline addition','Cavities','R',85),(14,'2018-07-07','Paramveer Raol','root canal seating 2, drilling portion','NULL',NULL,150,'rocovery','Cavities','R',75),(15,'2018-07-10','Paramveer Raol',NULL,NULL,NULL,NULL,NULL,'Cavities','N',NULL),(20,'2018-07-10','Sarthak Singhal',NULL,NULL,NULL,NULL,'menstrual irregularity, obesity','PCOS','Y',NULL),(21,'2018-07-10','Sarthak Singhal','Clomiphene 1-0-1,Eflormithine 1-1-1','pelvic examination','uploads/21_748246628003.png',140,'menstrual irregularity, obesity','PCOS','R',80);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_859290409356`
--

LOCK TABLES `A_859290409356` WRITE;
/*!40000 ALTER TABLE `A_859290409356` DISABLE KEYS */;
INSERT INTO `A_859290409356` VALUES (1,'2018-07-10','Sarthak Singhal',NULL,NULL,NULL,NULL,'Pain in the lower abdomen and pelvis,Irregular periods','Pelvic Inflammatory Disease','Y',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_980127459126`
--

LOCK TABLES `A_980127459126` WRITE;
/*!40000 ALTER TABLE `A_980127459126` DISABLE KEYS */;
INSERT INTO `A_980127459126` VALUES (1,'2018-07-10','Sarthak Singhal',NULL,NULL,NULL,NULL,'Hair growth in unwanted areas,Trouble getting pregnant,sever weight fluctuations','Polycystic ovarian syndrome','Y',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `A_985732047023`
--

LOCK TABLES `A_985732047023` WRITE;
/*!40000 ALTER TABLE `A_985732047023` DISABLE KEYS */;
INSERT INTO `A_985732047023` VALUES (1,'2018-07-10','Paramveer Raol',NULL,NULL,NULL,NULL,'Tooth Erosion','Wearing of Enamel','Y',NULL);
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
INSERT INTO `S_748246628003` VALUES (47,'2018-05-30 00:00:00'),(49,'2018-05-26 11:10:09'),(60,'2018-05-25 18:30:09'),(35,'2018-05-22 01:25:09'),(100,'2018-05-20 13:30:09'),(60,'2018-05-20 09:30:09'),(100,'2018-05-18 22:30:09'),(55,'2018-05-26 09:30:09'),(50,'2018-06-05 08:30:09'),(100,'2018-07-10 05:10:09');
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
INSERT INTO `TOP170241_curr` VALUES ('748246628003','MARTHA WAYNE','2018-07-10',2,'Mild Insomnia');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `XYZ170459_closed`
--

LOCK TABLES `XYZ170459_closed` WRITE;
/*!40000 ALTER TABLE `XYZ170459_closed` DISABLE KEYS */;
INSERT INTO `XYZ170459_closed` VALUES (1,'748246628003','MARTHA WAYNE','2018-06-27','2018-07-10','Cavities');
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
INSERT INTO `XYZ170459_curr` VALUES ('350215159126','ROHAN GUPTA','2018-07-10',3,'Sensitive Teeth'),('985732047023','THOMAS WAYNE','2018-07-10',4,'Wearing of Enamel');
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
INSERT INTO `XYZ170459_referred` VALUES ('350285304712','ADITYA RAGHUWANSHI','I think he has bad breath caused by cavities','2018-07-10','Vivek Saxena'),('789202756233','SEBASTIAN BLACK','Facial swelling probably caused by a tooth abcess','2018-07-10','Vivek Saxena'),('872310376151','JONATHAN BLACK','He also suffers from cavities','2018-07-10','Shweta Shukla');
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
INSERT INTO `XYZ170635_closed` VALUES (1,'748246628003','MARTHA WAYNE','2017-05-06','2017-07-15','Dysmenorrhea ');
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
INSERT INTO `XYZ170635_curr` VALUES ('266738384764','BRUCE WAYNE','2018-07-10',1,'Jaundice'),('859290409356','DINA BLACK','2018-07-10',2,'Pelvic Inflammatory Disease'),('748246628003','MARTHA WAYNE','2018-07-10',3,'PCOS'),('980127459126','KIM JORDAN ','2018-07-10',3,'Polycystic ovarian syndrome');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abcd123456789`
--

LOCK TABLES `abcd123456789` WRITE;
/*!40000 ALTER TABLE `abcd123456789` DISABLE KEYS */;
INSERT INTO `abcd123456789` VALUES (1,'748246628003','2018-07-10 18:51:25','C','2018-07-10','Pelvic examination');
/*!40000 ALTER TABLE `abcd123456789` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answer1`
--

DROP TABLE IF EXISTS `answer1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer1` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer1`
--

LOCK TABLES `answer1` WRITE;
/*!40000 ALTER TABLE `answer1` DISABLE KEYS */;
INSERT INTO `answer1` VALUES (1,'XYZ170635','2018-07-10 07:22:53','Hi!\r\nIf you were my patient, I would test you for yeast.  The type of discharge you are describing can be physiologic (normal) OR could be a sign of an overgrowth of yeast.  If it is yeast--it is easy to treat with Diflucan.  Ask your doctor to check it out for you.\r\nGood luck!','N');
/*!40000 ALTER TABLE `answer1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answer2`
--

DROP TABLE IF EXISTS `answer2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer2` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer2`
--

LOCK TABLES `answer2` WRITE;
/*!40000 ALTER TABLE `answer2` DISABLE KEYS */;
INSERT INTO `answer2` VALUES (1,'XYZ170635','2018-07-10 09:30:56','Try not to worry.  It is doubtful that is cancer at your age.  The odds are against that.  And believe it or not, this is not a terribly uncommon problem as many women do have post coitus bleeding.  So, how is your lubrication?  Hypothyroidism can affect hormones and vaginal dryness can happen.  That as a chronic problem could cause some bleeding when you have intercourse.  You say they found no evidence of polyps?  I\'m not sure if that is something they checked for but they are benign but can cause bleeding.  Most women do have polyps removed with the fear being that maybe down the road they \'could\' turn cancerous.  But they are soft little lumps and can causer bleeding.  You could also simply have inflammation of the cervix.  The cervix is very vascular and WILL bleed.   ','Y');
/*!40000 ALTER TABLE `answer2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answer3`
--

DROP TABLE IF EXISTS `answer3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer3` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer3`
--

LOCK TABLES `answer3` WRITE;
/*!40000 ALTER TABLE `answer3` DISABLE KEYS */;
INSERT INTO `answer3` VALUES (1,'XYZ170459','2018-07-10 07:39:33','It is difficult to predict. Dentists consider risk factors. There is a triad of major risk factors for teeth health. First is home care. Your friendly hygienist can help you with good home care. Second is diet. I find that sugary and acidic beverages can really damage your teeth because it bathes all surfaces. The longer the beverage gets in contact, the more damage. Third factor is adequate Fluoride whether in the toothpaste, topical application in the dental clinic, or systemic in the water source. Other factors can include inadequate saliva flow from medications and or radiation treatments. Worn enamel may not protect as well as intact enamel so you need to take more effort in reducing your risks. The areas in teeth that tend to get cavities are in between teeth, occlusal (biting surfaces) and along the gum line. The natural cleaning ability of the tongue and cheek as well as adequate saliva flow usually protects most of the teeth\'s other surfaces.','N');
/*!40000 ALTER TABLE `answer3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answer4`
--

DROP TABLE IF EXISTS `answer4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer4` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer4`
--

LOCK TABLES `answer4` WRITE;
/*!40000 ALTER TABLE `answer4` DISABLE KEYS */;
INSERT INTO `answer4` VALUES (1,'XYZ170459','2018-07-10 11:40:52','No. But get it checked out - sometimes patients think they have cavities only for the dentist to discover they are stains. And the dentist can\'t make you have the cavities filled, so simply make it clear when arranging the appointment that you only want an examination with X-rays. Then you can see what the dentist finds, and whether you will be comfortable with them. Take a friend along too.','Y');
/*!40000 ALTER TABLE `answer4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answer5`
--

DROP TABLE IF EXISTS `answer5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer5` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer5`
--

LOCK TABLES `answer5` WRITE;
/*!40000 ALTER TABLE `answer5` DISABLE KEYS */;
INSERT INTO `answer5` VALUES (1,'XYZ170459','2018-07-10 10:28:33','Tooth removals have absolutely nothing to do with eyesight, it is a misconception.','Y');
/*!40000 ALTER TABLE `answer5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answer6`
--

DROP TABLE IF EXISTS `answer6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer6` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer6`
--

LOCK TABLES `answer6` WRITE;
/*!40000 ALTER TABLE `answer6` DISABLE KEYS */;
INSERT INTO `answer6` VALUES (1,'XYZ170459','2018-07-10 13:24:56','One should visit the dentist at least twice a year for regular check-ups. However, if there is toothache, bleeding gums, sensitive teeth or any dental problem, one is advised to visit the dentist immediately.','Y');
/*!40000 ALTER TABLE `answer6` ENABLE KEYS */;
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
INSERT INTO `doctor` VALUES (1,'Vivek Saxena','XYZ1234','07750a2cba77983894994a8b0b0fd462b7e1e47a','/soc/doc1.jpg','General','M','6969696969','UTTAR PRADESH','KANPUR','HALL-5,IIT KANPUR,KANPUR,UTTARPRADESH','10:00 TO 12:00'),(2,'Paramveer Raol','XYZ170459','07750a2cba77983894994a8b0b0fd462b7e1e47a','/soc/doc2.jpg','Dentist','M','7016816018','GUJARAT','JAMNAGAR','18-L,SEC 12,RELIANCE GREENS','16:00 TO 20:00'),(3,'Sarthak Singhal','XYZ170635','07750a2cba77983894994a8b0b0fd462b7e1e47a','/soc/doc3.jpg','Gynecologist','M','7427052933','RAJASTHAN','JAIPUR','SEC-15,HOUSE-21,JHOTWARA,JAIPUR,RAJASTHAM','06:00 TO 08:00'),(4,'Shweta Shukla','ABC2357','07750a2cba77983894994a8b0b0fd462b7e1e47a','/soc/doc4.jpg','Brain Surgeon','F','9198999289','UTTAR PRADESH','LUCKNOW','HALL-5,IIT KANPUR,KANPUR,UTTARPRADESH','11:00 TO 13:00'),(5,'Abhishek Singh','XYZ170033','07750a2cba77983894994a8b0b0fd462b7e1e47a','/soc/doc5.jpg','Oral Surgeon','M','9988959535','PUNJAB','CHANDIGARH','SEC-5,CHANDIGARH,UTTARPRADESH','10:00 TO 12:00'),(6,'Dewanshi Kumar Singh','TOP170241','07750a2cba77983894994a8b0b0fd462b7e1e47a','/soc/doc6.jpg','Sleep Disorder Specialist','F','7906806147','RAJASTHAN','AJMER','HALL-7,SEC-8,AJMER,RAJASTHAN','16:00 TO 18:00');
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
INSERT INTO `lab_list` VALUES ('abcd123456789','Sarthak\'s Lab','Jaipur','Rajasthan','Sarthak\'s Villa,Sec-12,Jhotwara,Jaipur,Rajasthan','10:00 to 18:00','7427052933','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),('accd123456788','Param\'s Lab','Ahemdabad','Gujarat','Aadinath tenaments,Sabarmati,Ahemdabad,Gujarat','10:00 to 20:00','7016816018','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),('xyz123456777','Adi\'s Lab','Lucknow','Uttar Pradesh','Something,Lucknow,Uttar Pradesh','03:00 to 09:00','9376875838','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),('xyz123456666','Rohan\'s Lab','Delhi','Delhi','another thing,delhi,delhi','14:00 to 23:00','7427055555','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),('xyz123333333','abhi\'s lab','chandigarh','UT','Sec-20,Chandigarh','10:00 to 17:00','7425858581','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),('xyz122222222','dewash\'s lab','Uttar pradesh','Saranpur','Something,Saranpur,Uttarpradesh','15:00 to 19:00','9879245333','aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d');
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
INSERT INTO `patient` VALUES ('ROHAN GUPTA','PRAVEEN  KUMAR','MADHULIKA GUPTA','1998-03-04','350215159126','O+',20,'M','N','/soc/pat1.jpg','NONE','b3e8ff7ac1c7e75661e16152a5dce1ff36a3e140','7427052933',1),('ADITYA RAGHUWANSHI','Y.K. RAGHUWANSHI','RENU RAGHUWANSHI','1998-05-23','350285304712','B+',20,'M','N','/soc/pat2.jpg','ASHTHMA,BRONCHITIS','b3e8ff7ac1c7e75661e16152a5dce1ff36a3e140','7706848545',2),('JONATHAN BLACK','SEBASTIAN BLACK','DINA BLACK','1986-08-23','872310376151','AB+',31,'M','N','/soc/pat3.jpg','OCD,MILD PSYCHOSIS','b3e8ff7ac1c7e75661e16152a5dce1ff36a3e140','7427052933',3),('SEBASTIAN BLACK','ALISTAIR BLACK','RITA BLACK','1952-01-19','789202756233','B+',66,'M','Y','/soc/pat4.jpg','MILD PSYCHOSIS,DELUSIONAL','b3e8ff7ac1c7e75661e16152a5dce1ff36a3e140','7427052933',4),('DINA BLACK','JONATHAN ROSS','ELIZABETH ROSS','1959-02-21','859290409356','A+',57,'F','Y','/soc/pat5.jpg','LIVER CANCER','b3e8ff7ac1c7e75661e16152a5dce1ff36a3e140','7427052933',5),('BRUCE WAYNE','THOMAS WAYNE','MARTHA WAYNE','1975-02-19','266738384764','O-',43,'M','N','/soc/pat6.jpg','None','b3e8ff7ac1c7e75661e16152a5dce1ff36a3e140','7427052933',6),('THOMAS WAYNE','PATRICK WAYNE','-','1932-12-12','985732047023','O-',85,'M','Y','/soc/pat7.jpg','None','b3e8ff7ac1c7e75661e16152a5dce1ff36a3e140','7427052933',7),('MARTHA WAYNE','BOB KANE','CELIA KANE','1939-11-18','748246628003','AB+',78,'F','Y','/soc/pat8.jpg','None','b3e8ff7ac1c7e75661e16152a5dce1ff36a3e140','7427052933',8),('KIM JORDAN ','KARL JORDAN','ANASTHESIA JORDAN','2001-05-01','980127459126','A-',17,'F','N','/soc/pat9.jpg','None','b3e8ff7ac1c7e75661e16152a5dce1ff36a3e140','7427052933',9),('KARL JORDAN','HECTOR JORDAN','KRYSTAL JORDAN','1972-03-05','649249103747','A+',46,'M','Y','/soc/pat10.jpg','None','b3e8ff7ac1c7e75661e16152a5dce1ff36a3e140','7427052933',10),('ANASTHESIA JORDAN','MICHAEL LEE BROWN','KATE BROWN','1972-09-11','747284991930','A-',45,'F','Y','/soc/pat11.jpg','None',NULL,'7427052933',11);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'P','859290409356',NULL,'2018-07-10 07:04:13','Gynecologist','For about a year now I\'ve been having a pasty white discharge that sometimes can smell weird. I haven\'t had pains or spotting and I\'m on birth control. My periods are regular. Is that normal?'),(2,'P','748246628003',NULL,'2018-07-10 07:26:08','Gynecologist','Iâ€™m a 31 year old married mother of two and for the past few months Iâ€™ve Noticed that Iâ€™ve started bleeding after sex and only noticed when I went pee after and there were a few drops of blood in the toilet.I went to the gyno for this reason and had an exam and got my yearly pap and everything was fine? She said I may have cervical ectropian or a friable cervix. So I went and got a second opinion and saw another gyno who did an exam and said she didnâ€™t see either of those things?Everything online says itâ€™s cancer- whether it be uterine or endometrial. Iâ€™m just terrified. Has anyone else had this happen?\r\nAny thoughts or similar experiences? \r\n'),(3,'P','350285304712',NULL,'2018-07-10 07:38:42','Dentist','I have white spots on my front teeth signalling weakened enamel, no doubt from poor brushing habits as a child. Considering I brush, floss, mouthwash twice a day, is it likely that the worn enamel will still lead to decay in the future? \r\n\r\nThanks in advance.'),(4,'P','350215159126',NULL,'2018-07-10 07:41:01','Dentist','I have small cavities in my teeth, I brush properly and regularly. I have the phobia of the dentist that\'s why I am not going to the dentist. but I am finding the way to cure it without a dentist. is it possible to cure without a dentist? Please suggest me.'),(5,'P','748246628003',NULL,'2018-07-10 10:27:08','Dentist','Will the removal of tooth weaken my eyesight?'),(6,'P','748246628003',NULL,'2018-07-10 13:23:58','Dentist','How often should I visit the dentist?');
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

-- Dump completed on 2018-07-11 15:04:16
