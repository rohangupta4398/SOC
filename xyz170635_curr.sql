-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2018 at 01:22 PM
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
-- Table structure for table `xyz170635_curr`
--

DROP TABLE IF EXISTS `xyz170635_curr`;
CREATE TABLE IF NOT EXISTS `xyz170635_curr` (
  `Sno` int(5) NOT NULL,
  `AADHAR` varchar(12) NOT NULL,
  `Patient_Name` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Severity` int(1) NOT NULL,
  `Diagnosis` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xyz170635_curr`
--

INSERT INTO `xyz170635_curr` (`Sno`, `AADHAR`, `Patient_Name`, `Date`, `Severity`, `Diagnosis`) VALUES
(1, '266738384764', 'BRUCE WAYNE', '2015-05-04', 3, 'Depression,Dissociative Identity'),
(2, '789202756233', 'JONATHAN BLACK', '2018-06-19', 2, 'OCD, Mild Psychosis');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
