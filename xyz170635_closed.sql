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
-- Table structure for table `xyz170635_closed`
--

DROP TABLE IF EXISTS `xyz170635_closed`;
CREATE TABLE IF NOT EXISTS `xyz170635_closed` (
  `Sno` int(10) NOT NULL,
  `AADHAR` varchar(12) NOT NULL,
  `Patient_Name` varchar(30) NOT NULL,
  `From_Date` date NOT NULL,
  `To_Date` date NOT NULL,
  `Diagnosis` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xyz170635_closed`
--

INSERT INTO `xyz170635_closed` (`Sno`, `AADHAR`, `Patient_Name`, `From_Date`, `To_Date`, `Diagnosis`) VALUES
(1, '789202756233', 'SEBASTIAN BLACK', '2017-03-14', '2018-02-14', 'Delusional,mild psychosis'),
(2, '748246628003', 'MARTHA WAYNE', '2015-01-16', '2017-05-19', 'Anxiety');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
