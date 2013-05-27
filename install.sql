-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2013 at 09:22 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `AppAd`
--

-- --------------------------------------------------------

--
-- Table structure for table `DataCollection`
--

CREATE TABLE `DataCollection` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `IP` varchar(20) NOT NULL,
  `compname` varchar(15) NOT NULL,
  `desktop` varchar(15) NOT NULL,
  `browser` varchar(20) NOT NULL,
  `hour` int(2) NOT NULL,
  `minutes` int(2) NOT NULL,
  `seconds` int(2) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `DataCollection`
--

INSERT INTO `DataCollection` (`ID`, `email`, `IP`, `compname`, `desktop`, `browser`, `hour`, `minutes`, `seconds`) VALUES
(2, 'alex@yahoo.com', '::1', 'alexismozo', '1', '1', 1, 49, 22),
(3, 'alex@yahoo.com', '::1', 'alexismozo', 'Macintosh', 'Safari', 1, 51, 33),
(4, 'alex@yahoo.com', '::1', 'alexismozo', 'Macintosh', 'Safari', 1, 56, 44),
(5, 'alex@yahoo.com', '::1', 'alexismozo', 'Macintosh', 'Safari', 1, 58, 27),
(6, 'alex@yahoo.com', '::1', 'alexismozo', 'Macintosh', 'Safari', 2, 2, 9),
(7, 'mozo@yahoo.com', '::1', 'alexismozo', 'Macintosh', 'Safari', 2, 9, 41),
(8, 'alexis@yahoo.com', '::1', 'alexismozo', 'Macintosh', 'Safari', 2, 10, 25),
(9, 'alexisM@yahoo.com', '::1', 'alexismozo', 'Macintosh', 'Safari', 2, 11, 57);
