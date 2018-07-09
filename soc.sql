-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 09, 2018 at 07:30 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `SOC`
--

-- --------------------------------------------------------

--
-- Table structure for table `ABC2357_closed`
--

CREATE TABLE `ABC2357_closed` (
  `Sno` int(11) NOT NULL,
  `AADHAR` varchar(20) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `From_Date` date DEFAULT NULL,
  `To_Date` date DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ABC2357_curr`
--

CREATE TABLE `ABC2357_curr` (
  `AADHAR` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Severity` int(1) DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ABC2357_referred`
--

CREATE TABLE `ABC2357_referred` (
  `Aadhar` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Comments` text,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abcd123456788`
--

CREATE TABLE `abcd123456788` (
  `Sno` int(11) NOT NULL,
  `Aadhar` varchar(20) DEFAULT NULL,
  `PSno` int(11) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `Status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `abcd123456789`
--

CREATE TABLE `abcd123456789` (
  `Sno` int(11) NOT NULL,
  `Aadhar` varchar(20) DEFAULT NULL,
  `PSno` int(11) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `Status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abcd123456789`
--

INSERT INTO `abcd123456789` (`Sno`, `Aadhar`, `PSno`, `Date`, `Status`) VALUES
(1, '350285304712', 4, NULL, NULL),
(2, '350285304712', 5, '2018-07-04 20:11:34', 'I'),
(3, '350285304712', 2, '2018-07-04 20:25:17', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `answer1`
--

CREATE TABLE `answer1` (
  `Sno` int(11) NOT NULL,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer1`
--

INSERT INTO `answer1` (`Sno`, `LIC`, `Date`, `Answer`, `Y`) VALUES
(1, 'XYZ170635', '2018-06-29 20:49:24', 'So...............', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `answer2`
--

CREATE TABLE `answer2` (
  `Sno` int(11) NOT NULL,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer2`
--

INSERT INTO `answer2` (`Sno`, `LIC`, `Date`, `Answer`, `Y`) VALUES
(1, 'XYZ170635', '2018-06-29 20:49:17', 'kadlasdkma', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `answer3`
--

CREATE TABLE `answer3` (
  `Sno` int(11) NOT NULL,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer3`
--

INSERT INTO `answer3` (`Sno`, `LIC`, `Date`, `Answer`, `Y`) VALUES
(1, 'XYZ170635', '2018-06-29 20:51:08', 'fsfsfs', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `answer4`
--

CREATE TABLE `answer4` (
  `Sno` int(11) NOT NULL,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer4`
--

INSERT INTO `answer4` (`Sno`, `LIC`, `Date`, `Answer`, `Y`) VALUES
(1, 'XYZ170635', '2018-06-29 21:01:25', 'dadadadaa', 'Y'),
(2, 'XYZ170635', '2018-06-30 12:31:20', 'Ssssssssshhhhhhh!!!!!!!!!!!!!!', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `answer5`
--

CREATE TABLE `answer5` (
  `Sno` int(11) NOT NULL,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer5`
--

INSERT INTO `answer5` (`Sno`, `LIC`, `Date`, `Answer`, `Y`) VALUES
(1, 'XYZ170635', '2018-06-30 13:27:33', 'Answer2', 'N'),
(2, 'XYZ170635', '2018-06-30 13:30:04', 'adadad', 'Y'),
(3, 'XYZ170635', '2018-06-30 13:35:33', '123', 'N'),
(4, 'XYZ170635', '2018-06-30 13:36:34', '4', 'N'),
(5, 'XYZ170635', '2018-06-30 14:14:14', '5', 'Y'),
(6, 'XYZ170635', '2018-07-03 10:37:12', '6', 'Y'),
(7, 'XYZ170635', '2018-06-30 13:59:41', '7\r\n', 'Y'),
(8, 'XYZ170635', '2018-06-30 13:41:35', '8', 'Y'),
(9, 'XYZ170635', '2018-06-30 13:56:43', '9', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `answer6`
--

CREATE TABLE `answer6` (
  `Sno` int(11) NOT NULL,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer6`
--

INSERT INTO `answer6` (`Sno`, `LIC`, `Date`, `Answer`, `Y`) VALUES
(1, 'XYZ170635', '2018-06-30 13:53:50', 'well i don\'t know', 'Y'),
(2, 'XYZ170635', '2018-06-30 14:14:55', 'dexdex', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `answer7`
--

CREATE TABLE `answer7` (
  `Sno` int(11) NOT NULL,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer7`
--

INSERT INTO `answer7` (`Sno`, `LIC`, `Date`, `Answer`, `Y`) VALUES
(1, 'XYZ170635', '2018-07-02 08:41:44', 'sadad', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `answer8`
--

CREATE TABLE `answer8` (
  `Sno` int(11) NOT NULL,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer8`
--

INSERT INTO `answer8` (`Sno`, `LIC`, `Date`, `Answer`, `Y`) VALUES
(1, 'XYZ170635', '2018-07-03 11:52:18', 'jlm,', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `answer9`
--

CREATE TABLE `answer9` (
  `Sno` int(11) NOT NULL,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Answer` varchar(1000) DEFAULT NULL,
  `Y` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer9`
--

INSERT INTO `answer9` (`Sno`, `LIC`, `Date`, `Answer`, `Y`) VALUES
(1, 'XYZ170635', '2018-07-04 18:05:06', 'dasdaffafafaf', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `A_266738384764`
--

CREATE TABLE `A_266738384764` (
  `Sno` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `A_266738384764`
--

INSERT INTO `A_266738384764` (`Sno`, `Date`, `Doctor`, `Medicine`, `Test`, `Report`, `Blood_Pressure`, `Symptoms`, `Diagnosis`, `Status`, `Blood_PressureD`) VALUES
(1, '2018-07-03', 'Sarthak Singhal', NULL, NULL, NULL, NULL, NULL, 'ok', 'N', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `A_350215159126`
--

CREATE TABLE `A_350215159126` (
  `Sno` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `A_350285304712`
--

CREATE TABLE `A_350285304712` (
  `Sno` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `A_350285304712`
--

INSERT INTO `A_350285304712` (`Sno`, `Date`, `Doctor`, `Medicine`, `Test`, `Report`, `Blood_Pressure`, `Symptoms`, `Diagnosis`, `Status`, `Blood_PressureD`) VALUES
(1, '2018-07-03', 'Sarthak Singhal', NULL, NULL, NULL, NULL, 'trial', 'ok', 'Y', NULL),
(2, '2018-07-03', 'Sarthak Singhal', NULL, NULL, 'uploads/2_350285304712.png', NULL, 'trial', 'ok', 'Y', NULL),
(3, '2010-10-10', NULL, NULL, 'njnj', 'uploads/3_350285304712.png', NULL, NULL, NULL, NULL, NULL),
(4, '2010-10-10', NULL, NULL, 'dadafs', 'uploads/4_350285304712.png', NULL, NULL, NULL, NULL, NULL),
(5, '2010-10-10', NULL, NULL, 'ddadsv', 'uploads/5_350285304712.png', NULL, NULL, NULL, NULL, NULL),
(6, '2010-10-10', NULL, NULL, 'fsdgksm', 'uploads/6_350285304712.png', NULL, NULL, NULL, NULL, NULL),
(7, '2010-10-10', NULL, NULL, '66', 'uploads/7_350285304712.png', NULL, NULL, NULL, NULL, NULL),
(8, '2010-10-10', NULL, NULL, '5151', 'uploads/8_350285304712.png', NULL, NULL, NULL, NULL, NULL),
(9, '2010-10-10', NULL, NULL, 'sfs', 'uploads/9_350285304712.png', NULL, NULL, NULL, NULL, NULL),
(10, '2012-02-02', NULL, NULL, 'dadadadaca', 'uploads/10_350285304712.png', NULL, NULL, NULL, NULL, NULL),
(11, '2018-07-05', '', 'NULL', 'NULL', NULL, 85, 'jkokorhtktrlgldfml', 'NULL', 'R', 125),
(12, '2018-07-05', '', 'NULL', 'NULL', NULL, 90, 'oekregkerlge,g', 'NULL', 'R', 130),
(13, '2018-07-05', '', 'NULL', 'NULL', NULL, 95, 'ohkfofsarthaklfjklafjtrailtrial', 'NULL', 'R', 135),
(14, '2018-07-05', 'Sarthak Singhal', NULL, NULL, NULL, NULL, NULL, 'dada', 'N', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `A_649249103747`
--

CREATE TABLE `A_649249103747` (
  `Sno` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `A_649249103747`
--

INSERT INTO `A_649249103747` (`Sno`, `Date`, `Doctor`, `Medicine`, `Test`, `Report`, `Blood_Pressure`, `Symptoms`, `Diagnosis`, `Status`, `Blood_PressureD`) VALUES
(1, '2018-07-03', 'Sarthak Singhal', NULL, NULL, NULL, NULL, NULL, 'adaa', 'N', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `A_747284991930`
--

CREATE TABLE `A_747284991930` (
  `Sno` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `A_748246628003`
--

CREATE TABLE `A_748246628003` (
  `Sno` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `A_789202756233`
--

CREATE TABLE `A_789202756233` (
  `Sno` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `A_789202756233`
--

INSERT INTO `A_789202756233` (`Sno`, `Date`, `Doctor`, `Medicine`, `Test`, `Report`, `Blood_Pressure`, `Symptoms`, `Diagnosis`, `Status`, `Blood_PressureD`) VALUES
(1, '2018-07-03', 'Sarthak Singhal', 'ass', 'das', NULL, 3, 'try', '', 'R', 4),
(2, '2018-07-03', 'Sarthak Singhal', '', '', NULL, 2, 'dada', '', 'R', 32),
(3, '2018-07-03', 'Sarthak Singhal', '', '', NULL, 1, 'ass', '', 'R', 2),
(4, '2018-07-03', 'Sarthak Singhal', '', '', NULL, 12, 'ass', '', 'R', 31),
(5, '2018-07-03', 'Sarthak Singhal', '', '', NULL, 12, 'ass', 'NULL', 'R', 32),
(6, '2018-07-03', 'Sarthak Singhal', 'NULL', 'NULL', NULL, 12, 'ass', 'NULL', 'R', 32),
(7, '2018-07-03', 'Sarthak Singhal', 'NULL', 'NULL', NULL, NULL, 'trial', 'NULL', 'R', NULL),
(8, '2018-07-03', 'Sarthak Singhal', 'NULL', 'NULL', NULL, NULL, 'try', 'ok', 'R', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `A_859290409356`
--

CREATE TABLE `A_859290409356` (
  `Sno` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `A_859290409356`
--

INSERT INTO `A_859290409356` (`Sno`, `Date`, `Doctor`, `Medicine`, `Test`, `Report`, `Blood_Pressure`, `Symptoms`, `Diagnosis`, `Status`, `Blood_PressureD`) VALUES
(1, '2018-07-03', 'Sarthak Singhal', NULL, NULL, NULL, NULL, 'uut', 'po', 'Y', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `A_872310376151`
--

CREATE TABLE `A_872310376151` (
  `Sno` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `A_980127459126`
--

CREATE TABLE `A_980127459126` (
  `Sno` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `A_985732047023`
--

CREATE TABLE `A_985732047023` (
  `Sno` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL,
  `Medicine` varchar(50) DEFAULT NULL,
  `Test` varchar(30) DEFAULT NULL,
  `Report` varchar(30) DEFAULT NULL,
  `Blood_Pressure` int(11) DEFAULT NULL,
  `Symptoms` varchar(100) DEFAULT NULL,
  `Diagnosis` varchar(50) DEFAULT NULL,
  `Status` varchar(3) DEFAULT NULL,
  `Blood_PressureD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

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
  `Timings` varchar(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Sno`, `Name`, `LicenseID`, `Password`, `Image`, `Specialist`, `Gender`, `ContactNo`, `State_ut`, `City`, `Address`, `Timings`) VALUES
(1, 'Vivek Saxena', 'XYZ1234', '6367c48dd193d56ea7b0baad25b19455e529f5ee', '/soc/doc1.jpg', 'General', 'M', '6969696969', 'UTTAR PRADESH', 'KANPUR', 'HALL-5,IIT KANPUR,KANPUR,UTTARPRADESH', '10:00 TO 12:00'),
(2, 'Paramveer Raol', 'XYZ170459', 'e9aebf5e276c2c9d1e3c1b77c4fc047b01f620d3', '/soc/doc2.jpg', 'Dentist', 'M', '7016816018', 'GUJARAT', 'JAMNAGAR', '18-L,SEC 12,RELIANCE GREENS', '16:00 TO 20:00'),
(3, 'Sarthak Singhal', 'XYZ170635', 'a579f83595e0d2f7fbe5658332322c1bfa07c728', '/soc/doc3.jpg', 'Gynecologist', 'M', '7427052933', 'RAJASTHAN', 'JAIPUR', 'SEC-15,HOUSE-21,JHOTWARA,JAIPUR,RAJASTHAM', '06:00 TO 08:00'),
(4, 'Shweta Shukla', 'ABC2357', '61d8557c67b179c44db6d0dbbfd4c7af2ed7a351', '/soc/doc4.jpg', 'Brain Surgeon', 'F', '9198999289', 'UTTAR PRADESH', 'LUCKNOW', 'HALL-5,IIT KANPUR,KANPUR,UTTARPRADESH', '11:00 TO 13:00'),
(5, 'Abhishek Singh', 'XYZ170033', 'b9a5c4b2af6307b702393995bc509a3f0721b920', '/soc/doc5.jpg', 'Oral Surgeon', 'M', '9988959535', 'PUNJAB', 'CHANDIGARH', 'SEC-5,CHANDIGARH,UTTARPRADESH', '10:00 TO 12:00'),
(6, 'Dewanshi Kumar Singh', 'TOP170241', '61fb28c0975403f408c3d18938f37aebead287a0', '/soc/doc6.jpg', 'Sleep Disorder Specialist', 'F', '7906806147', 'RAJASTHAN', 'AJMER', 'HALL-7,SEC-8,AJMER,RAJASTHAN', '16:00 TO 18:00');

-- --------------------------------------------------------

--
-- Table structure for table `lab_list`
--

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

--
-- Dumping data for table `lab_list`
--

INSERT INTO `lab_list` (`lab_id`, `lab_name`, `city`, `state`, `address`, `timings`, `conatact_no`, `password`) VALUES
('abcd123456789', 'Single\'s Lab', 'Jaipur', 'Rajasthan', 'Single\'s Villa,Sec-12,Jhotwara,Jaipur,Rajasthan', '10:00 to 18:00', '7427052933', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
('accd123456788', 'Param\'s Lab', 'Ahemdabad', 'Gujarat', 'Aadinath tenaments,Sabarmati,Ahemdabad,Gujarat', '10:00 to 20:00', '7016816018', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
('xyz123456777', 'Adi\'s Lab', 'Lucknow', 'Uttar Pradesh', 'Something,Lucknow,Uttar Pradesh', '03:00 to 09:00', '9376875838', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
('xyz123456666', 'Rohan\'s Lab', 'Delhi', 'Delhi', 'another thing,delhi,delhi', '14:00 to 23:00', '7427055555', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
('xyz123333333', 'abhi\'s lab', 'chandigarh', 'UT', 'Sec-20,Chandigarh', '10:00 to 17:00', '7425858581', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
('xyz122222222', 'dewash\'s lab', 'Uttar pradesh', 'Saranpur', 'Something,Saranpur,Uttarpradesh', '15:00 to 19:00', '9879245333', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

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
  `Sno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Name`, `Father`, `mother`, `DOB`, `AADHAR`, `BLOODGROUP`, `AGE`, `SEX`, `MARITAL STATUS`, `image`, `COMMENTS`, `Password`, `ContactNo`, `Sno`) VALUES
('ROHAN GUPTA', 'PRAVEEN  KUMAR', 'MADHULIKA GUPTA', '1998-03-04', '350215159126', 'O+', 20, 'M', 'N', '/soc/pat1.jpg', 'NONE', '9671c73253cee9b18b8df367e3e627fab2863fe8', '7427052933', 1),
('ADITYA RAGHUWANSHI', 'Y.K. RAGHUWANSHI', 'RENU RAGHUWANSHI', '1998-05-23', '350285304712', 'B+', 20, 'M', 'N', '/soc/pat2.jpg', 'ASHTHMA,BRONCHITIS', 'b3e8ff7ac1c7e75661e16152a5dce1ff36a3e140', '7706848545', 2),
('JONATHAN BLACK', 'SEBASTIAN BLACK', 'DINA BLACK', '1986-08-23', '872310376151', 'AB+', 31, 'M', 'N', '/soc/pat3.jpg', 'OCD,MILD PSYCHOSIS', '5d1852d43efe8f6e393448a3b4d1cd98a4cfd56f', '7427052933', 3),
('SEBASTIAN BLACK', 'ALISTAIR BLACK', 'RITA BLACK', '1952-01-19', '789202756233', 'B+', 66, 'M', 'Y', '/soc/pat4.jpg', 'MILD PSYCHOSIS,DELUSIONAL', '5d1852d43efe8f6e393448a3b4d1cd98a4cfd56f', '7427052933', 4),
('DINA BLACK', 'JONATHAN ROSS', 'ELIZABETH ROSS', '1959-02-21', '859290409356', 'A+', 57, 'F', 'Y', '/soc/pat5.jpg', 'LIVER CANCER', '5d1852d43efe8f6e393448a3b4d1cd98a4cfd56f', '7427052933', 5),
('BRUCE WAYNE', 'THOMAS WAYNE', 'MARTHA WAYNE', '1975-02-19', '266738384764', 'O-', 43, 'M', 'N', '/soc/pat6.jpg', 'None', NULL, '7427052933', 6),
('THOMAS WAYNE', 'PATRICK WAYNE', '-', '1932-12-12', '985732047023', 'O-', 85, 'M', 'Y', '/soc/pat7.jpg', 'None', NULL, '7427052933', 7),
('MARTHA WAYNE', 'BOB KANE', 'CELIA KANE', '1939-11-18', '748246628003', 'AB+', 78, 'F', 'Y', '/soc/pat8.jpg', 'None', NULL, '7427052933', 8),
('KIM JORDAN ', 'KARL JORDAN', 'ANASTHESIA JORDAN', '2001-05-01', '980127459126', 'A-', 17, 'F', 'N', '/soc/pat9.jpg', 'None', NULL, '7427052933', 9),
('KARL JORDAN', 'HECTOR JORDAN', 'KRYSTAL JORDAN', '1972-03-05', '649249103747', 'A+', 46, 'M', 'Y', '/soc/pat10.jpg', 'None', NULL, '7427052933', 10),
('ANASTHESIA JORDAN', 'MICHAEL LEE BROWN', 'KATE BROWN', '1972-09-11', '747284991930', 'A-', 45, 'F', 'Y', '/soc/pat11.jpg', 'None', NULL, '7427052933', 11);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Sno` int(11) NOT NULL,
  `Person` varchar(2) DEFAULT NULL,
  `Aadhar` varchar(20) DEFAULT NULL,
  `LIC` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Category` varchar(20) DEFAULT NULL,
  `Question` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Sno`, `Person`, `Aadhar`, `LIC`, `Date`, `Category`, `Question`) VALUES
(1, 'P', '350285304712', NULL, '2018-06-28 14:46:56', 'Miscellaneous', 'Aditya??'),
(2, 'P', '350285304712', NULL, '2018-06-29 18:44:44', 'Allergist', 'Hello?'),
(3, 'P', '350285304712', NULL, '2018-06-29 20:50:47', 'Dermatologist', 'asdad'),
(4, 'D', NULL, 'XYZ170635', '2018-06-29 20:59:58', 'Cardiologist', 'dadadad'),
(5, 'D', NULL, 'XYZ170635', '2018-06-30 13:26:12', 'Cardiologist', 'Question2'),
(6, 'P', '350285304712', NULL, '2018-06-30 13:53:09', 'Dermatologist', 'I have spots on my back what could it be?'),
(7, 'P', '350285304712', NULL, '2018-07-02 08:41:21', 'Immunologist', 'hi'),
(8, 'P', '350285304712', NULL, '2018-07-03 11:51:37', 'Endocrinologist', 'fwlfjwl'),
(9, 'P', '748246628003', NULL, '2018-07-04 18:04:35', 'Immunologist', 'rata');

-- --------------------------------------------------------

--
-- Table structure for table `S_266738384764`
--

CREATE TABLE `S_266738384764` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `S_350215159126`
--

CREATE TABLE `S_350215159126` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `S_350285304712`
--

CREATE TABLE `S_350285304712` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `S_350285304712`
--

INSERT INTO `S_350285304712` (`sugar`, `date_time`) VALUES
(70, '2018-07-05 12:11:09'),
(80, '2018-07-06 12:11:09'),
(90, '2018-07-07 12:12:09'),
(100, '2018-07-08 12:12:09'),
(110, '2018-07-09 12:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `S_649249103747`
--

CREATE TABLE `S_649249103747` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `S_747284991930`
--

CREATE TABLE `S_747284991930` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `S_747284991930`
--

INSERT INTO `S_747284991930` (`sugar`, `date_time`) VALUES
(5, '2012-10-12 12:45:09'),
(3, '2013-10-10 09:45:09'),
(2, '2012-02-02 10:40:09'),
(10, '2010-10-10 10:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `S_748246628003`
--

CREATE TABLE `S_748246628003` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `S_789202756233`
--

CREATE TABLE `S_789202756233` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `S_859290409356`
--

CREATE TABLE `S_859290409356` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `S_872310376151`
--

CREATE TABLE `S_872310376151` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `S_980127459126`
--

CREATE TABLE `S_980127459126` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `S_985732047023`
--

CREATE TABLE `S_985732047023` (
  `sugar` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TOP170241_closed`
--

CREATE TABLE `TOP170241_closed` (
  `Sno` int(11) NOT NULL,
  `AADHAR` varchar(20) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `From_Date` date DEFAULT NULL,
  `To_Date` date DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TOP170241_curr`
--

CREATE TABLE `TOP170241_curr` (
  `AADHAR` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Severity` int(1) DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TOP170241_referred`
--

CREATE TABLE `TOP170241_referred` (
  `Aadhar` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Comments` text,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `XYZ1234_closed`
--

CREATE TABLE `XYZ1234_closed` (
  `Sno` int(11) NOT NULL,
  `AADHAR` varchar(20) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `From_Date` date DEFAULT NULL,
  `To_Date` date DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `XYZ1234_curr`
--

CREATE TABLE `XYZ1234_curr` (
  `AADHAR` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Severity` int(1) DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `XYZ1234_referred`
--

CREATE TABLE `XYZ1234_referred` (
  `Aadhar` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Comments` text,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `XYZ1234_referred`
--

INSERT INTO `XYZ1234_referred` (`Aadhar`, `Patient_Name`, `Comments`, `Date`, `Doctor`) VALUES
('747284991930', 'ANASTHESIA JORDAN', 'gorgkogkldgldmgd', '2018-07-05', 'Sarthak Singhal');

-- --------------------------------------------------------

--
-- Table structure for table `XYZ170033_closed`
--

CREATE TABLE `XYZ170033_closed` (
  `Sno` int(11) NOT NULL,
  `AADHAR` varchar(20) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `From_Date` date DEFAULT NULL,
  `To_Date` date DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `XYZ170033_curr`
--

CREATE TABLE `XYZ170033_curr` (
  `AADHAR` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Severity` int(1) DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `XYZ170033_referred`
--

CREATE TABLE `XYZ170033_referred` (
  `Aadhar` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Comments` text,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `XYZ170459_closed`
--

CREATE TABLE `XYZ170459_closed` (
  `Sno` int(11) NOT NULL,
  `AADHAR` varchar(20) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `From_Date` date DEFAULT NULL,
  `To_Date` date DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `XYZ170459_curr`
--

CREATE TABLE `XYZ170459_curr` (
  `AADHAR` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Severity` int(1) DEFAULT NULL,
  `Diagnosis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `XYZ170459_referred`
--

CREATE TABLE `XYZ170459_referred` (
  `Aadhar` varchar(30) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Comments` text,
  `Date` date DEFAULT NULL,
  `Doctor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `XYZ170635_closed`
--

CREATE TABLE `XYZ170635_closed` (
  `Sno` int(11) NOT NULL,
  `AADHAR` varchar(12) NOT NULL,
  `Patient_Name` varchar(30) NOT NULL,
  `From_Date` date NOT NULL,
  `To_Date` date NOT NULL,
  `Diagnosis` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `XYZ170635_closed`
--

INSERT INTO `XYZ170635_closed` (`Sno`, `AADHAR`, `Patient_Name`, `From_Date`, `To_Date`, `Diagnosis`) VALUES
(1, '789202756233', 'SEBASTIAN BLACK', '2017-03-14', '2018-02-14', 'Delusional,mild psychosis'),
(2, '748246628003', 'MARTHA WAYNE', '2015-01-16', '2017-05-19', 'Anxiety'),
(3, '649249103747', 'KARL JORDAN', '2018-07-02', '2018-07-03', 'adaa'),
(4, '266738384764', 'BRUCE WAYNE', '2015-05-04', '2018-07-03', 'ok'),
(5, '350285304712', 'ADITYA RAGHUWANSHI', '2018-07-02', '2018-07-05', 'dada');

-- --------------------------------------------------------

--
-- Table structure for table `XYZ170635_curr`
--

CREATE TABLE `XYZ170635_curr` (
  `AADHAR` varchar(12) NOT NULL,
  `Patient_Name` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Severity` int(1) NOT NULL,
  `Diagnosis` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `XYZ170635_curr`
--

INSERT INTO `XYZ170635_curr` (`AADHAR`, `Patient_Name`, `Date`, `Severity`, `Diagnosis`) VALUES
('789202756233', 'JONATHAN BLACK', '2018-06-19', 5, 'ok'),
('747284991930', 'ANASTHESIA JORDAN', '2018-07-02', 4, 'asr'),
('747284991930', 'ANASTHESIA JORDAN', '2018-07-02', 3, 'asr'),
('747284991930', 'ANASTHESIA JORDAN', '2018-07-02', 1, 'adada'),
('747284991930', 'ANASTHESIA JORDAN', '2018-07-02', 1, 'adada'),
('350215159126', 'ROHAN GUPTA', '2018-07-02', 5, 'dada'),
('350215159126', 'ROHAN GUPTA', '2018-07-02', 5, 'dada'),
('350215159126', 'ROHAN GUPTA', '2018-07-02', 5, 'dada'),
('859290409356', 'DINA BLACK', '2018-07-03', 3, 'po');

-- --------------------------------------------------------

--
-- Table structure for table `XYZ170635_referred`
--

CREATE TABLE `XYZ170635_referred` (
  `Aadhar` varchar(12) NOT NULL,
  `Patient_Name` varchar(20) DEFAULT NULL,
  `Comments` text NOT NULL,
  `Date` date NOT NULL,
  `Doctor` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `XYZ170635_referred`
--

INSERT INTO `XYZ170635_referred` (`Aadhar`, `Patient_Name`, `Comments`, `Date`, `Doctor`) VALUES
('747284991930', 'ANASTHESIA JORDAN', 'gfdfgd', '2018-07-05', 'Sarthak Singhal');

-- --------------------------------------------------------

--
-- Table structure for table `xyz122222222`
--

CREATE TABLE `xyz122222222` (
  `Sno` int(11) NOT NULL,
  `Aadhar` varchar(20) DEFAULT NULL,
  `PSno` int(11) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `Status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xyz123333333`
--

CREATE TABLE `xyz123333333` (
  `Sno` int(11) NOT NULL,
  `Aadhar` varchar(20) DEFAULT NULL,
  `PSno` int(11) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `Status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xyz123456666`
--

CREATE TABLE `xyz123456666` (
  `Sno` int(11) NOT NULL,
  `Aadhar` varchar(20) DEFAULT NULL,
  `PSno` int(11) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `Status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `xyz123456777`
--

CREATE TABLE `xyz123456777` (
  `Sno` int(11) NOT NULL,
  `Aadhar` varchar(20) DEFAULT NULL,
  `PSno` int(11) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `Status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ABC2357_closed`
--
ALTER TABLE `ABC2357_closed`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `abcd123456788`
--
ALTER TABLE `abcd123456788`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `abcd123456789`
--
ALTER TABLE `abcd123456789`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `answer1`
--
ALTER TABLE `answer1`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `answer2`
--
ALTER TABLE `answer2`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `answer3`
--
ALTER TABLE `answer3`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `answer4`
--
ALTER TABLE `answer4`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `answer5`
--
ALTER TABLE `answer5`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `answer6`
--
ALTER TABLE `answer6`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `answer7`
--
ALTER TABLE `answer7`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `answer8`
--
ALTER TABLE `answer8`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `answer9`
--
ALTER TABLE `answer9`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `A_266738384764`
--
ALTER TABLE `A_266738384764`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `A_350215159126`
--
ALTER TABLE `A_350215159126`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `A_350285304712`
--
ALTER TABLE `A_350285304712`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `A_649249103747`
--
ALTER TABLE `A_649249103747`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `A_747284991930`
--
ALTER TABLE `A_747284991930`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `A_748246628003`
--
ALTER TABLE `A_748246628003`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `A_789202756233`
--
ALTER TABLE `A_789202756233`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `A_859290409356`
--
ALTER TABLE `A_859290409356`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `A_872310376151`
--
ALTER TABLE `A_872310376151`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `A_980127459126`
--
ALTER TABLE `A_980127459126`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `A_985732047023`
--
ALTER TABLE `A_985732047023`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD UNIQUE KEY `id` (`LicenseID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `TOP170241_closed`
--
ALTER TABLE `TOP170241_closed`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `XYZ1234_closed`
--
ALTER TABLE `XYZ1234_closed`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `XYZ170033_closed`
--
ALTER TABLE `XYZ170033_closed`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `XYZ170459_closed`
--
ALTER TABLE `XYZ170459_closed`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `XYZ170635_closed`
--
ALTER TABLE `XYZ170635_closed`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `xyz122222222`
--
ALTER TABLE `xyz122222222`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `xyz123333333`
--
ALTER TABLE `xyz123333333`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `xyz123456666`
--
ALTER TABLE `xyz123456666`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `xyz123456777`
--
ALTER TABLE `xyz123456777`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ABC2357_closed`
--
ALTER TABLE `ABC2357_closed`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `abcd123456788`
--
ALTER TABLE `abcd123456788`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `abcd123456789`
--
ALTER TABLE `abcd123456789`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `answer1`
--
ALTER TABLE `answer1`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answer2`
--
ALTER TABLE `answer2`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answer3`
--
ALTER TABLE `answer3`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answer4`
--
ALTER TABLE `answer4`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `answer5`
--
ALTER TABLE `answer5`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `answer6`
--
ALTER TABLE `answer6`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `answer7`
--
ALTER TABLE `answer7`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answer8`
--
ALTER TABLE `answer8`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answer9`
--
ALTER TABLE `answer9`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `A_266738384764`
--
ALTER TABLE `A_266738384764`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `A_350215159126`
--
ALTER TABLE `A_350215159126`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `A_350285304712`
--
ALTER TABLE `A_350285304712`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `A_649249103747`
--
ALTER TABLE `A_649249103747`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `A_747284991930`
--
ALTER TABLE `A_747284991930`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `A_748246628003`
--
ALTER TABLE `A_748246628003`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `A_789202756233`
--
ALTER TABLE `A_789202756233`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `A_859290409356`
--
ALTER TABLE `A_859290409356`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `A_872310376151`
--
ALTER TABLE `A_872310376151`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `A_980127459126`
--
ALTER TABLE `A_980127459126`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `A_985732047023`
--
ALTER TABLE `A_985732047023`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `TOP170241_closed`
--
ALTER TABLE `TOP170241_closed`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `XYZ1234_closed`
--
ALTER TABLE `XYZ1234_closed`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `XYZ170033_closed`
--
ALTER TABLE `XYZ170033_closed`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `XYZ170459_closed`
--
ALTER TABLE `XYZ170459_closed`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `XYZ170635_closed`
--
ALTER TABLE `XYZ170635_closed`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `xyz122222222`
--
ALTER TABLE `xyz122222222`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `xyz123333333`
--
ALTER TABLE `xyz123333333`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `xyz123456666`
--
ALTER TABLE `xyz123456666`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `xyz123456777`
--
ALTER TABLE `xyz123456777`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;
