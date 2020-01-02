-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2019 at 07:01 AM
-- Server version: 5.5.24
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE IF NOT EXISTS `pricing` (
  `title1` text NOT NULL,
  `des1` text NOT NULL,
  `ptitle1` text NOT NULL,
  `price1` text NOT NULL,
  `pdes1` text NOT NULL,
  `pdes2` text NOT NULL,
  `pdes3` text NOT NULL,
  `pdes4` text NOT NULL,
  `ptitle2` text NOT NULL,
  `price2` text NOT NULL,
  `pdes5` text NOT NULL,
  `pdes6` text NOT NULL,
  `pdes7` text NOT NULL,
  `pdes8` text NOT NULL,
  `ptitle3` text NOT NULL,
  `price3` text NOT NULL,
  `pdes9` text NOT NULL,
  `pdes10` text NOT NULL,
  `pdes11` text NOT NULL,
  `pdes12` text NOT NULL,
  `title2` text NOT NULL,
  `off` text NOT NULL,
  `des2` text NOT NULL,
  `title3` text NOT NULL,
  `des3` text NOT NULL,
  `ftitle1` text NOT NULL,
  `fdes1` text NOT NULL,
  `ftitle2` text NOT NULL,
  `fdes2` text NOT NULL,
  `ftitle3` text NOT NULL,
  `fdes3` text NOT NULL,
  `ftitle4` text NOT NULL,
  `fdes4` text NOT NULL,
  `title4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`title1`, `des1`, `ptitle1`, `price1`, `pdes1`, `pdes2`, `pdes3`, `pdes4`, `ptitle2`, `price2`, `pdes5`, `pdes6`, `pdes7`, `pdes8`, `ptitle3`, `price3`, `pdes9`, `pdes10`, `pdes11`, `pdes12`, `title2`, `off`, `des2`, `title3`, `des3`, `ftitle1`, `fdes1`, `ftitle2`, `fdes2`, `ftitle3`, `fdes3`, `ftitle4`, `fdes4`, `title4`) VALUES
('Pricing', 'There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 'Beginner', '$45/m', '24h unlimited access', 'Trainer Advice', 'Locker + Bathroom', 'Personal trainer', 'Expert', '$45/m', '24h unlimited access', 'Trainer Advice', 'Locker + Bathroom', 'Personal trainer', 'Pro', '$45/m', '24h unlimited access', 'Trainer Advice', 'Locker + Bathroom', 'Personal trainer', 'A Big Offer for <br> This Summer', '50% Off', 'There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration.', 'Our Features', 'There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.', 'Weightlifting', 'There are many variations of passages of lorem Ipsum available.', 'Specific Muscles', 'There are many variations of passages of lorem Ipsum available.', 'Flex Your Muscles', 'There are many variations of passages of lorem Ipsum available.', 'Cardio Exercises', 'There are many variations of passages of lorem Ipsum available.', 'A Big Offer for <br>This Summer');
