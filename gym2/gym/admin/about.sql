-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2019 at 12:50 PM
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
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `title1` text NOT NULL,
  `des1` text NOT NULL,
  `title2` text NOT NULL,
  `des2` text NOT NULL,
  `ftitle1` text NOT NULL,
  `fdes1` text NOT NULL,
  `ftitle2` text NOT NULL,
  `fdes2` text NOT NULL,
  `ftitle3` text NOT NULL,
  `fdes3` text NOT NULL,
  `ftitle4` text NOT NULL,
  `fdes4` text NOT NULL,
  `title3` text NOT NULL,
  `title4` text NOT NULL,
  `des3` text NOT NULL,
  `name1` text NOT NULL,
  `Trainer1` text NOT NULL,
  `name2` text NOT NULL,
  `Trainer2` text NOT NULL,
  `name3` text NOT NULL,
  `Trainer3` text NOT NULL,
  `offer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`title1`, `des1`, `title2`, `des2`, `ftitle1`, `fdes1`, `ftitle2`, `fdes2`, `ftitle3`, `fdes3`, `ftitle4`, `fdes4`, `title3`, `title4`, `des3`, `name1`, `Trainer1`, `name2`, `Trainer2`, `name3`, `Trainer3`, `offer`) VALUES
('About Us', 'There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 'Our Features', 'There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.', 'Weightlifting', 'There are many variations of passages of lorem Ipsum available.', 'Specific Muscles', 'There are many variations of passages of lorem Ipsum available.', 'Flex Your Muscles', 'There are many variations of passages of lorem Ipsum available.', 'Cardio Exercises', 'There are many variations of passages of lorem Ipsum available.', 'View More', 'Our Trainers', 'There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.', 'Jessica Mino', 'Woman Trainer', 'Amit Khan', 'Men Trainer', 'Paulo Rolac', 'Men Trainer', 'A Big Offer for<br> This Summer');
