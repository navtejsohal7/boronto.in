-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2014 at 05:42 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cascaded`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `city_name`, `state_id`) VALUES
(1, 'Kolkata', 1),
(2, 'Asansol', 1),
(3, 'Siliguri', 1),
(4, 'Durgapur', 1),
(5, 'Bardhaman', 1),
(6, 'Dankuni', 1),
(7, 'Ajmer', 2),
(8, 'Bikaner', 2),
(9, 'Jaipur', 2),
(10, 'Udaipur', 2),
(11, 'Shimla', 3),
(12, 'Mumbai ', 4),
(13, 'Pune', 4),
(14, 'Nagpur', 4),
(15, 'Thane', 4),
(16, 'Solapur', 4),
(17, 'Bhiwandi', 4),
(18, 'Amravati', 4),
(19, 'Nashik', 4),
(20, 'Melbourne', 5),
(21, 'Geelong', 5),
(22, 'Kalgoorlie', 6),
(23, 'Rockingham', 6),
(24, 'Bundaberg', 7),
(25, 'Caloundra', 7),
(26, 'Townsville', 7),
(27, 'Mount Isa', 7),
(28, 'Mount Barker', 8),
(29, 'Victor Harbor', 8),
(30, 'Hobart ', 10),
(31, 'Launceston', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE IF NOT EXISTS `tbl_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `country_name`) VALUES
(1, 'India'),
(2, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE IF NOT EXISTS `tbl_state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`id`, `state_name`, `country_id`) VALUES
(1, 'West Bengal', 1),
(2, 'Rajasthan', 1),
(3, 'Himachal Pradesh', 1),
(4, 'Maharashtra ', 1),
(5, 'Victoria', 2),
(6, 'Western Australia', 2),
(7, 'Queensland', 2),
(8, 'South Australia', 2),
(10, 'Tasmania', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
