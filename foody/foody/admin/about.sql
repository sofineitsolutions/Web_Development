-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2019 at 07:53 AM
-- Server version: 5.5.24
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foody`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `stitle1` text NOT NULL,
  `des1` text NOT NULL,
  `sdes1` text NOT NULL,
  `sdes2` text NOT NULL,
  `sdes3` text NOT NULL,
  `sdes4` text NOT NULL,
  `stitle2` text NOT NULL,
  `name1` text NOT NULL,
  `prof1` text NOT NULL,
  `name2` text NOT NULL,
  `prof2` text NOT NULL,
  `name3` text NOT NULL,
  `prof3` text NOT NULL,
  `name4` text NOT NULL,
  `prof4` text NOT NULL,
  `name5` text NOT NULL,
  `prof5` text NOT NULL,
  `name6` text NOT NULL,
  `prof6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`stitle1`, `des1`, `sdes1`, `sdes2`, `sdes3`, `sdes4`, `stitle2`, `name1`, `prof1`, `name2`, `prof2`, `name3`, `prof3`, `name4`, `prof4`, `name5`, `prof5`, `name6`, `prof6`) VALUES
('The Restaurant', 'Far far away, behind the word mountains, far from the countries Vokaliaand Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'Far far away, behind the word mountains, far from the countries Vokaliaand Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.', 'Far far away, behind the word mountains, far from the countries Vokaliaand Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.', 'Chefs', 'Mellisa Howard', 'CEO, Co-Founder', 'Mike Richardson', 'CEO, Co-Founder', 'Charles White', 'CEO, Co-Founder', 'Mellisa Howard', 'CEO, Co-Founder', 'Mike Richardson', 'CEO, Co-Founder', 'Charles White', 'CEO, Co-Founder');
