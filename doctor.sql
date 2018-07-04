-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2018 at 09:07 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medhelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
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

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Sno`, `Name`, `LicenseID`, `Password`, `Image`, `Specialist`, `Gender`, `ContactNo`, `State_ut`, `City`, `Address`, `Timings`) VALUES
(1, 'Vivek Saxena', 'XYZ1234', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 'doc1.png', 'general', 'M', '6969696969', 'UTTAR PRADESH', 'KANPUR', 'HALL-5,IIT KANPUR,KANPUR,UTTARPRADESH', '10:00 TO 12:00'),
(2, 'Paramveer Raol', 'XYZ170459', 'e9aebf5e276c2c9d1e3c1b77c4fc047b01f620d3', 'doc2.jpg', 'dentist', 'M', '7016816018', 'GUJARAT', 'JAMNAGAR', '18-L,SEC 12,RELIANCE GREENS', '16:00 TO 20:00'),
(3, 'Sarthak Singhal', 'XYZ170635', 'a579f83595e0d2f7fbe5658332322c1bfa07c728', 'doc3.png', 'gynaecologist', 'M', '7427052933', 'RAJASTTHAN', 'JAIPUR', 'SEC-15,HOUSE-21,JHOTWARA,JAIPUR,RAJASTHAM', '06:00 TO 08:00'),
(4, 'Shweta Shukla', 'ABC2357', '61d8557c67b179c44db6d0dbbfd4c7af2ed7a351', 'doc4.jpg', 'Brain Surgeon', 'F', '9198999289', 'UTTAR PRADESH', 'LUCKNOW', 'HALL-5,IIT KANPUR,KANPUR,UTTARPRADESH', '11:00 TO 13:00'),
(5, 'Abhishek Singh', 'XYZ170033', 'b9a5c4b2af6307b702393995bc509a3f0721b920', 'doc5.jpg', 'Oral Surgeon', 'M', '9988959535', 'PUNJAB', 'CHANDIGARH', 'SEC-5,CHANDIGARH,UTTARPRADESH', '10:00 TO 12:00'),
(6, 'Dewanshi Kumar Singh', 'TOP170241', '61fb28c0975403f408c3d18938f37aebead287a0', 'doc6.jpg', 'Sleep Disorder Specialist', 'F', '7906806147', 'RAJASTHAN', 'AJMER', 'HALL-7,SEC-8,AJMER,RAJASTHAN', '16:00 TO 18:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
