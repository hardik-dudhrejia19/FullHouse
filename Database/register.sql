-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2018 at 12:01 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `Name` varchar(10) NOT NULL DEFAULT '',
  `Email` varchar(30) NOT NULL,
  `Dob` date NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Mobile` varchar(12) NOT NULL,
  `Country` varchar(15) NOT NULL,
  `City` varchar(15) NOT NULL,
  PRIMARY KEY (`Mobile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Name`, `Email`, `Dob`, `Password`, `Mobile`, `Country`, `City`) VALUES
('Hardik', 'hardikdudhrejia50@gmail.com', '1997-11-19', 'sweetsugar', '7043730733', 'India', 'Baroda'),
('Sidharth', 'siddharthjoshi190@gmail.com', '1997-08-19', 'b12345', '8155820202', 'India', 'Anand'),
('Vedant', 'vedantravisaheb@gmail.com', '2003-09-16', 'vedant123', '9998008229', 'India', 'Rajkot'),
('Vishal', 'vishal41997@gmail.com', '1997-06-04', 'v123', '7016300185', 'India', 'Baroda'),
('Dharmik', 'mikevirus111@gmail.com', '1558-11-19', 'qwer', '9998054387', 'America', 'Ahmedabad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
