-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 06:23 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `details_gmit_phoenix`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `aadhaar` varchar(12) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `category` varchar(15) NOT NULL,
  `caste` varchar(15) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `mothername` varchar(30) NOT NULL,
  `parentsmobile` varchar(10) NOT NULL,
  `studentmobile` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `college` varchar(50) NOT NULL,
  `how` varchar(50) NOT NULL,
  `referredby` varchar(40) NOT NULL,
  `address` varchar(80) NOT NULL,
  `saddress` varchar(80) NOT NULL,
  `pin` int(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `taluk` varchar(20) NOT NULL,
  `schoolmarks` int(4) NOT NULL,
  `schoolpercentage` float NOT NULL,
  `schoolname` varchar(50) NOT NULL,
  `schoolpassoutyear` int(4) NOT NULL,
  `pucollegename` varchar(50) NOT NULL,
  `pumarks` int(5) NOT NULL,
  `purollnumber` varchar(15) NOT NULL,
  `pubranch` varchar(20) NOT NULL,
  `pupercentage` float NOT NULL,
  `pupassoutyear` int(4) NOT NULL,
  `kcetranking` int(6) NOT NULL,
  `comedkranking` int(6) NOT NULL,
  PRIMARY KEY (`aadhaar`),
  UNIQUE KEY `aadhaar` (`aadhaar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
