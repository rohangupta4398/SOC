-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2018 at 03:59 PM
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
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `Sno` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Father` varchar(30) NOT NULL,
  `mother` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `AADHAR` varchar(12) NOT NULL,
  `BLOODGROUP` varchar(4) NOT NULL,
  `AGE` int(3) NOT NULL,
  `SEX` varchar(1) NOT NULL,
  `MARITAL STATUS` varchar(1) NOT NULL,
  `OCCUPATION` varchar(20) NOT NULL,
  `image` varchar(30) NOT NULL,
  `COMMENTS` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Sno`, `Name`, `Father`, `mother`, `DOB`, `AADHAR`, `BLOODGROUP`, `AGE`, `SEX`, `MARITAL STATUS`, `OCCUPATION`, `image`, `COMMENTS`) VALUES
(1, 'ROHAN GUPTA', 'PRAVEEN  KUMAR', 'MADHULIKA GUPTA', '1998-03-04', '350215159126', 'O+', 20, 'M', 'N', 'STUDENT', 'pat1.jpg', 'NONE'),
(2, 'ADITYA RAGHUWANSHI', 'Y.K. RAGHUWANSHI', 'RENU RAGHUWANSHI', '1998-05-23', '350285304712', 'B+', 20, 'M', 'N', 'STUDENT', 'pat2.jpg', 'ASHTHMA,BRONCHITIS'),
(3, 'JONATHAN BLACK', 'SEBASTIAN BLACK', 'DINA BLACK', '1986-08-23', '872310376151', 'AB+', 31, 'M', 'N', 'MAGICIAN', 'pat3.jpg', 'OCD,MILD PSYCHOSIS'),
(4, 'SEBASTIAN BLACK', 'ALISTAIR BLACK', 'RITA BLACK', '1952-01-19', '789202756233', 'B+', 66, 'M', 'Y', 'CRAFTSMAN', 'pat4.jpg', 'MILD PSYCHOSIS,DELUSIONAL'),
(5, 'DINA BLACK', 'JONATHAN ROSS', 'ELIZABETH ROSS', '1959-02-21', '859290409356', 'A+', 57, 'F', 'Y', 'HOUSEWIFE', 'pat5.jpg', 'LIVER CANCER'),
(6, 'BRUCE WAYNE', 'THOMAS WAYNE', 'MARTHA WAYNE', '1975-02-19', '266738384764', 'O-', 43, 'M', 'N', 'BATMAN', 'pat6.jpg', 'Dissociative Identity Disorder\r\nDepression\r\nObsessive-Compulsive Disorder\r\nPosttraumatic Stress Disorder\r\nAntisocial Personality Disorder'),
(7, 'THOMAS WAYNE', 'PATRICK WAYNE', '-', '1932-12-12', '985732047023', 'O-', 85, 'M', 'Y', 'PHILANTHROPIST', 'pat7.jpg', 'LEUKAEMIA\r\nPANCREATITIS\r\nANGIOEDEMA\r\n'),
(8, 'MARTHA WAYNE', 'BOB KANE', 'CELIA KANE', '1939-11-18', '748246628003', 'AB+', 78, 'F', 'Y', 'HEAD CDA', 'pat8.jpg', 'ANXIETY\r\nBULIMIA\r\nIMPETIGO'),
(9, 'KIM JORDAN ', 'KARL JORDAN', 'ANASTHESIA JORDAN', '2001-05-01', '980127459126', 'A-', 17, 'F', 'N', 'STUDENT', 'pat9.jpg', 'INHERITED HEART CONDITION\r\nKAPOSI\'S SARCOMA'),
(10, 'KARL JORDAN', 'HECTOR JORDAN', 'KRYSTAL JORDAN', '1972-03-05', '649249103747', 'A+', 46, 'M', 'Y', 'PHYSICIAN', 'pat10.jpg', 'NONE'),
(11, 'ANASTHESIA JORDAN', 'MICHAEL LEE BROWN', 'KATE BROWN', '1972-09-11', '747284991930', 'A-', 45, 'F', 'Y', 'LECTURER', 'pat11.jpg', 'LARYNGITIS\r\nLYME DISEASE\r\nSCOLIOSIS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
