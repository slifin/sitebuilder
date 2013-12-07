-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2013 at 04:11 PM
-- Server version: 5.6.11
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gd_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `aa`
--

CREATE TABLE IF NOT EXISTS `aa` (
  `aa_id` int(11) NOT NULL AUTO_INCREMENT,
  `aa_deriv` varchar(128) NOT NULL,
  `aa_multiplier` decimal(4,3) NOT NULL,
  `aa_subGroup` varchar(32) DEFAULT NULL,
  `aa_tooltip` varchar(512) NOT NULL,
  PRIMARY KEY (`aa_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `aa`
--

INSERT INTO `aa` (`aa_id`, `aa_deriv`, `aa_multiplier`, `aa_subGroup`, `aa_tooltip`) VALUES
(2, 'MSAA 4x', 0.750, 'MSAA', ''),
(1, 'MSAA 8x', 0.700, 'MSAA', ''),
(3, 'SSAA', 0.500, 'SSAA', ''),
(4, 'MSAA 2x', 0.850, 'MSAA', ''),
(5, 'CSAA 8x', 0.740, 'CSAA', ''),
(6, 'MLAA', 0.900, 'MLAA', ''),
(7, 'FXAA', 0.940, 'FXAA', ''),
(8, 'SMAA', 0.940, 'SMAA', ''),
(9, 'CSAA 16x', 0.675, 'CSAA', ''),
(10, 'CSAA 32x', 0.650, 'CSAA', ''),
(11, 'CSAA 8xQ', 0.695, 'CSAA', ''),
(12, 'MSAA 16x', 0.655, 'MSAA', ''),
(13, 'TXAA 2x', 0.710, 'TXAA', ''),
(14, 'TXAA 4x', 0.685, 'TXAA', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
