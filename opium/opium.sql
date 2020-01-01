-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 01:47 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opium`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `gad` text NOT NULL,
  `date` text NOT NULL,
  `no` text NOT NULL,
  `tag` text NOT NULL,
  `des` text NOT NULL,
  `gad1` text NOT NULL,
  `date1` text NOT NULL,
  `no1` text NOT NULL,
  `tag1` text NOT NULL,
  `des1` text NOT NULL,
  `gad2` text NOT NULL,
  `date2` text NOT NULL,
  `no2` text NOT NULL,
  `tag2` text NOT NULL,
  `des2` text NOT NULL,
  `blog` text NOT NULL,
  `blog_date` text NOT NULL,
  `blog_no` text NOT NULL,
  `blog_tag` text NOT NULL,
  `blog_des` text NOT NULL,
  `blog1` text NOT NULL,
  `blog_date1` text NOT NULL,
  `blog_no1` text NOT NULL,
  `blog_tag1` text NOT NULL,
  `blog_des1` text NOT NULL,
  `blog2` text NOT NULL,
  `blog_date2` text NOT NULL,
  `blog_no2` text NOT NULL,
  `blog_tag2` text NOT NULL,
  `blog_des2` text NOT NULL,
  `blog3` text NOT NULL,
  `blog_date3` text NOT NULL,
  `blog_no3` text NOT NULL,
  `blog_tag3` text NOT NULL,
  `blog_des3` text NOT NULL,
  `blog4` text NOT NULL,
  `blog_date4` text NOT NULL,
  `blog_no4` text NOT NULL,
  `blog_tag4` text NOT NULL,
  `blog_des4` text NOT NULL,
  `blog5` text NOT NULL,
  `blog_date5` text NOT NULL,
  `blog_no5` text NOT NULL,
  `blog_tag5` text NOT NULL,
  `blog_des5` text NOT NULL,
  `blog6` text NOT NULL,
  `blog_date6` text NOT NULL,
  `blog_no6` text NOT NULL,
  `blog_tag6` text NOT NULL,
  `blog_des6` text NOT NULL,
  `blog7` text NOT NULL,
  `blog_date7` text NOT NULL,
  `blog_no7` text NOT NULL,
  `blog_tag7` text NOT NULL,
  `blog_des7` text NOT NULL,
  `bloger` text NOT NULL,
  `post` text NOT NULL,
  `bloger_blog` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`gad`, `date`, `no`, `tag`, `des`, `gad1`, `date1`, `no1`, `tag1`, `des1`, `gad2`, `date2`, `no2`, `tag2`, `des2`, `blog`, `blog_date`, `blog_no`, `blog_tag`, `blog_des`, `blog1`, `blog_date1`, `blog_no1`, `blog_tag1`, `blog_des1`, `blog2`, `blog_date2`, `blog_no2`, `blog_tag2`, `blog_des2`, `blog3`, `blog_date3`, `blog_no3`, `blog_tag3`, `blog_des3`, `blog4`, `blog_date4`, `blog_no4`, `blog_tag4`, `blog_des4`, `blog5`, `blog_date5`, `blog_no5`, `blog_tag5`, `blog_des5`, `blog6`, `blog_date6`, `blog_no6`, `blog_tag6`, `blog_des6`, `blog7`, `blog_date7`, `blog_no7`, `blog_tag7`, `blog_des7`, `bloger`, `post`, `bloger_blog`) VALUES
('Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Charlie Barber', 'Senior blog writer', 'Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.');

-- --------------------------------------------------------

--
-- Table structure for table `admin2`
--

CREATE TABLE `admin2` (
  `gad` text NOT NULL,
  `date` text NOT NULL,
  `no` text NOT NULL,
  `tag` text NOT NULL,
  `des` text NOT NULL,
  `gad1` text NOT NULL,
  `date1` text NOT NULL,
  `no1` text NOT NULL,
  `tag1` text NOT NULL,
  `des1` text NOT NULL,
  `gad2` text NOT NULL,
  `date2` text NOT NULL,
  `no2` text NOT NULL,
  `tag2` text NOT NULL,
  `des2` text NOT NULL,
  `blog` text NOT NULL,
  `blog_date` text NOT NULL,
  `blog_no` text NOT NULL,
  `blog_tag` text NOT NULL,
  `blog_des` text NOT NULL,
  `blog1` text NOT NULL,
  `blog_date1` text NOT NULL,
  `blog_no1` text NOT NULL,
  `blog_tag1` text NOT NULL,
  `blog_des1` text NOT NULL,
  `blog2` text NOT NULL,
  `blog_date2` text NOT NULL,
  `blog_no2` text NOT NULL,
  `blog_tag2` text NOT NULL,
  `blog_des2` text NOT NULL,
  `blog3` text NOT NULL,
  `blog_date3` text NOT NULL,
  `blog_no3` text NOT NULL,
  `blog_tag3` text NOT NULL,
  `blog_des3` text NOT NULL,
  `blog4` text NOT NULL,
  `blog_date4` text NOT NULL,
  `blog_no4` text NOT NULL,
  `blog_tag4` text NOT NULL,
  `blog_des4` text NOT NULL,
  `blog5` text NOT NULL,
  `blog_date5` text NOT NULL,
  `blog_no5` text NOT NULL,
  `blog_tag5` text NOT NULL,
  `blog_des5` text NOT NULL,
  `blog6` text NOT NULL,
  `blog_date6` text NOT NULL,
  `blog_no6` text NOT NULL,
  `blog_tag6` text NOT NULL,
  `blog_des6` text NOT NULL,
  `blog7` text NOT NULL,
  `blog_date7` text NOT NULL,
  `blog_no7` text NOT NULL,
  `blog_tag7` text NOT NULL,
  `blog_des7` text NOT NULL,
  `bloger` text NOT NULL,
  `post` text NOT NULL,
  `bloger_blog` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin2`
--

INSERT INTO `admin2` (`gad`, `date`, `no`, `tag`, `des`, `gad1`, `date1`, `no1`, `tag1`, `des1`, `gad2`, `date2`, `no2`, `tag2`, `des2`, `blog`, `blog_date`, `blog_no`, `blog_tag`, `blog_des`, `blog1`, `blog_date1`, `blog_no1`, `blog_tag1`, `blog_des1`, `blog2`, `blog_date2`, `blog_no2`, `blog_tag2`, `blog_des2`, `blog3`, `blog_date3`, `blog_no3`, `blog_tag3`, `blog_des3`, `blog4`, `blog_date4`, `blog_no4`, `blog_tag4`, `blog_des4`, `blog5`, `blog_date5`, `blog_no5`, `blog_tag5`, `blog_des5`, `blog6`, `blog_date6`, `blog_no6`, `blog_tag6`, `blog_des6`, `blog7`, `blog_date7`, `blog_no7`, `blog_tag7`, `blog_des7`, `bloger`, `post`, `bloger_blog`) VALUES
('Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Charlie Barber', 'Senior blog writer', 'Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.');

-- --------------------------------------------------------

--
-- Table structure for table `admin3`
--

CREATE TABLE `admin3` (
  `gad` text NOT NULL,
  `date` text NOT NULL,
  `no` text NOT NULL,
  `tag` text NOT NULL,
  `des` text NOT NULL,
  `gad1` text NOT NULL,
  `date1` text NOT NULL,
  `no1` text NOT NULL,
  `tag1` text NOT NULL,
  `des1` text NOT NULL,
  `gad2` text NOT NULL,
  `date2` text NOT NULL,
  `no2` text NOT NULL,
  `tag2` text NOT NULL,
  `des2` text NOT NULL,
  `blog` text NOT NULL,
  `blog_date` text NOT NULL,
  `blog_no` text NOT NULL,
  `blog_tag` text NOT NULL,
  `blog_des` text NOT NULL,
  `blog1` text NOT NULL,
  `blog_date1` text NOT NULL,
  `blog_no1` text NOT NULL,
  `blog_tag1` text NOT NULL,
  `blog_des1` text NOT NULL,
  `blog2` text NOT NULL,
  `blog_date2` text NOT NULL,
  `blog_no2` text NOT NULL,
  `blog_tag2` text NOT NULL,
  `blog_des2` text NOT NULL,
  `blog3` text NOT NULL,
  `blog_date3` text NOT NULL,
  `blog_no3` text NOT NULL,
  `blog_tag3` text NOT NULL,
  `blog_des3` text NOT NULL,
  `blog4` text NOT NULL,
  `blog_date4` text NOT NULL,
  `blog_no4` text NOT NULL,
  `blog_tag4` text NOT NULL,
  `blog_des4` text NOT NULL,
  `blog5` text NOT NULL,
  `blog_date5` text NOT NULL,
  `blog_no5` text NOT NULL,
  `blog_tag5` text NOT NULL,
  `blog_des5` text NOT NULL,
  `blog6` text NOT NULL,
  `blog_date6` text NOT NULL,
  `blog_no6` text NOT NULL,
  `blog_tag6` text NOT NULL,
  `blog_des6` text NOT NULL,
  `blog7` text NOT NULL,
  `blog_date7` text NOT NULL,
  `blog_no7` text NOT NULL,
  `blog_tag7` text NOT NULL,
  `blog_des7` text NOT NULL,
  `bloger` text NOT NULL,
  `post` text NOT NULL,
  `bloger_blog` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin3`
--

INSERT INTO `admin3` (`gad`, `date`, `no`, `tag`, `des`, `gad1`, `date1`, `no1`, `tag1`, `des1`, `gad2`, `date2`, `no2`, `tag2`, `des2`, `blog`, `blog_date`, `blog_no`, `blog_tag`, `blog_des`, `blog1`, `blog_date1`, `blog_no1`, `blog_tag1`, `blog_des1`, `blog2`, `blog_date2`, `blog_no2`, `blog_tag2`, `blog_des2`, `blog3`, `blog_date3`, `blog_no3`, `blog_tag3`, `blog_des3`, `blog4`, `blog_date4`, `blog_no4`, `blog_tag4`, `blog_des4`, `blog5`, `blog_date5`, `blog_no5`, `blog_tag5`, `blog_des5`, `blog6`, `blog_date6`, `blog_no6`, `blog_tag6`, `blog_des6`, `blog7`, `blog_date7`, `blog_no7`, `blog_tag7`, `blog_des7`, `bloger`, `post`, `bloger_blog`) VALUES
('Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Gadgets', 'March 14, 2018', '05', 'Nest Protect: 2nd Gen Smoke + CO Alarm', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'Charlie Barber', 'Senior blog writer', 'Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.');

-- --------------------------------------------------------

--
-- Table structure for table `admin4`
--

CREATE TABLE `admin4` (
  `tit` text NOT NULL,
  `des` text NOT NULL,
  `left1` text NOT NULL,
  `des1` text NOT NULL,
  `right1` text NOT NULL,
  `des2` text NOT NULL,
  `des3` text NOT NULL,
  `def1` text NOT NULL,
  `def2` text NOT NULL,
  `def3` text NOT NULL,
  `def4` text NOT NULL,
  `def5` text NOT NULL,
  `def6` text NOT NULL,
  `quots` text NOT NULL,
  `blogquote` text NOT NULL,
  `typography` text NOT NULL,
  `h1` text NOT NULL,
  `h2` text NOT NULL,
  `h3` text NOT NULL,
  `h4` text NOT NULL,
  `h5` text NOT NULL,
  `h6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin4`
--

INSERT INTO `admin4` (`tit`, `des`, `left1`, `des1`, `right1`, `des2`, `des3`, `def1`, `def2`, `def3`, `def4`, `def5`, `def6`, `quots`, `blogquote`, `typography`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`) VALUES
('Text Sample', 'Every avid independent filmmaker has Bold about making that Italic interest documentary, or short film to show off their creative prowess. Many have great ideas and want to â€œwowâ€ theSuperscript scene, or video renters with their big project. But once you have theSubscript â€œin the canâ€ (no easy feat), how do you move from a Strike through of master DVDs with the â€œUnderlineâ€ marked hand-written title inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC barcodes and polywrap sitting on your doorstep? You need to create eye-popping artwork and have your project replicated. Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is certainly a helpful option to ensure a professional end result, but to help with your DVD replication project, here are 4 easy steps to follow for good DVD replication results:', 'Left Aligned', 'Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking systems that accept players from the United States that wish to play in online casinos.', 'Right Aligned', 'Over time, even the most sophisticated, memory packed computer can begin to run slow if we donâ€™t do something to prevent it. The reason why has less to do with how computers are made and how they age and more to do with the way we use them. You see, all of the daily tasks that we do on our PC from running programs to downloading and deleting software can make our computer sluggish. To keep this from happening, you need to understand the reasons why your PC is getting slower and do something to keep your PC running at its best. You can do this through regular maintenance and PC performance optimization programs', 'Before we discuss all of the things that could be affecting your PCâ€™s performance, letâ€™s talk a little about what symptoms', 'Definition 01', 'Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks', 'Definition 02', 'Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks', 'Definition 03', 'Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks', 'Block Quotes', 'â€œRecently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic bankingâ€', 'Typography', 'This is header 01', 'This is header 02', 'This is header 03', 'This is header 04', 'This is header 05', 'This is header 06');

-- --------------------------------------------------------

--
-- Table structure for table `admin5`
--

CREATE TABLE `admin5` (
  `blog` text NOT NULL,
  `life` text NOT NULL,
  `gad` text NOT NULL,
  `name` text NOT NULL,
  `date` text NOT NULL,
  `blog1` text NOT NULL,
  `blogquote` text NOT NULL,
  `blogquote1` text NOT NULL,
  `comment` text NOT NULL,
  `pre_post` text NOT NULL,
  `next_post` text NOT NULL,
  `comm` text NOT NULL,
  `date_comm` text NOT NULL,
  `msg` text NOT NULL,
  `comm1` text NOT NULL,
  `date_comm1` text NOT NULL,
  `msg1` text NOT NULL,
  `comm2` text NOT NULL,
  `date_comm2` text NOT NULL,
  `msg2` text NOT NULL,
  `comm3` text NOT NULL,
  `date_comm3` text NOT NULL,
  `msg3` text NOT NULL,
  `comm4` text NOT NULL,
  `date_comm4` text NOT NULL,
  `msg4` text NOT NULL,
  `bloger` text NOT NULL,
  `post` text NOT NULL,
  `blog_post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin5`
--

INSERT INTO `admin5` (`blog`, `life`, `gad`, `name`, `date`, `blog1`, `blogquote`, `blogquote1`, `comment`, `pre_post`, `next_post`, `comm`, `date_comm`, `msg`, `comm1`, `date_comm1`, `msg1`, `comm2`, `date_comm2`, `msg2`, `comm3`, `date_comm3`, `msg3`, `comm4`, `date_comm4`, `msg4`, `bloger`, `post`, `blog_post`) VALUES
('Cartridge Is Better Than Ever <br /> A Discount Toner', 'Lifestyle', 'Gadgets', 'Mark wiens', '12 Dec, 2017 11:21 am', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p> //        						<p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p> // 							<p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower', 'Lily and 4 people like this', 'Space The Final Frontier', 'Telescopes 101', 'Emilly Blunt', 'December 4, 2017 at 3:12 pm', 'Never say goodbye till the end comes!', 'Elsie Cunningham', 'December 4, 2017 at 3:12 pm ', 'Never say goodbye till the end comes!', 'Annie Stephens', 'December 4, 2017 at 3:12 pm ', 'Never say goodbye till the end comes!', 'Maria Luna', 'December 4, 2017 at 3:12 pm ', 'Never say goodbye till the end comes!', 'Ina Hayes', 'December 4, 2017 at 3:12 pm ', 'Never say goodbye till the end comes!', 'Charlie Barber', 'Senior blog writer', 'Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
