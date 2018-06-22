-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2018 at 01:23 PM
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
-- Table structure for table `xyz170635_referred`
--

DROP TABLE IF EXISTS `xyz170635_referred`;
CREATE TABLE IF NOT EXISTS `xyz170635_referred` (
  `Sno` int(5) NOT NULL,
  `Aadhar` varchar(12) NOT NULL,
  `Patient name` varchar(30) NOT NULL,
  `Comments` text NOT NULL,
  `Date` date NOT NULL,
  `Doctor` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xyz170635_referred`
--

INSERT INTO `xyz170635_referred` (`Sno`, `Aadhar`, `Patient name`, `Comments`, `Date`, `Doctor`) VALUES
(1, '649249103747', 'KARL JORDAN', 'Schizophrenia', '2018-06-17', 'Vivek Saxena');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
