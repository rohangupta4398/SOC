-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2018 at 12:56 PM
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
-- Table structure for table `lab_list`
--

DROP TABLE IF EXISTS `lab_list`;
CREATE TABLE IF NOT EXISTS `lab_list` (
  `lab_id` varchar(15) NOT NULL,
  `lab_name` varchar(25) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `timings` varchar(14) NOT NULL,
  `conatact_no` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_list`
--

INSERT INTO `lab_list` (`lab_id`, `lab_name`, `city`, `state`, `address`, `timings`, `conatact_no`, `password`) VALUES
('abcd123456789', 'Single\'s Lab', 'Jaipur', 'Rjasthan', 'Single\'s Villa,Sec-12,Jhotwara,Jaipur,Rajasthan', '10:00 to 18:00', '7427052933', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
('accd123456788', 'Param\'s Lab', 'Ahemdabad', 'Gujarat', 'Aadinath tenaments,Sabarmati,Ahemdabad,Gujarat', '10:00 to 20:00', '7016816018', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
('xyz123456777', 'Adi\'s Lab', 'Lucknow', 'Uttar Pradesh', 'Something,Lucknow,Uttar Pradesh', '03:00 to 09:00', '9376875838', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
('xyz123456666', 'Rohan\'s Lab', 'Delhi', 'Delhi', 'another thing,delhi,delhi', '14:00 to 23:00', '7427055555', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
('xyz123333333', 'abhi\'s lab', 'chandigarh', 'UT', 'Sec-20,Chandigarh', '10:00 to 17:00', '7425858581', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
('xyz122222222', 'dewash\'s lab', 'Uttar pradesh', 'Saranpur', 'Something,Saranpur,Uttarpradesh', '15:00 to 19:00', '9879245333', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
