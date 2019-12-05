-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2019 at 11:22 AM
-- Server version: 5.5.24
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flush`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `about_us` text NOT NULL,
  `home` text NOT NULL,
  `about_us1` text NOT NULL,
  `life` text NOT NULL,
  `here_to` text NOT NULL,
  `des1` text NOT NULL,
  `service` text NOT NULL,
  `des2` text NOT NULL,
  `world1` text NOT NULL,
  `des3` text NOT NULL,
  `world2` text NOT NULL,
  `des4` text NOT NULL,
  `world3` text NOT NULL,
  `des5` text NOT NULL,
  `world4` text NOT NULL,
  `des6` text NOT NULL,
  `feedaback` text NOT NULL,
  `feedback_des` text NOT NULL,
  `access` text NOT NULL,
  `name` text NOT NULL,
  `prof` text NOT NULL,
  `access1` text NOT NULL,
  `name1` text NOT NULL,
  `prof1` text NOT NULL,
  `access2` text NOT NULL,
  `name2` text NOT NULL,
  `prof2` text NOT NULL,
  `insta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_us`, `home`, `about_us1`, `life`, `here_to`, `des1`, `service`, `des2`, `world1`, `des3`, `world2`, `des4`, `world3`, `des5`, `world4`, `des6`, `feedaback`, `feedback_des`, `access`, `name`, `prof`, `access1`, `name1`, `prof1`, `access2`, `name2`, `prof2`, `insta`) VALUES
('About Us', 'Home', 'About Us', 'We’ve made a life\r\nthat will change you', 'We are here to listen from you deliver exellence', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.', 'Services Offered by Us', 'If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each', 'Spreading\r\nPeace to world', 'If you are looking at blank cassettes on the web, you may be very confused at the difference.', 'Spreading\r\nPeace to world', 'If you are looking at blank cassettes on the web, you may be very confused at the difference.', 'Spreading\r\nPeace to world', 'If you are looking at blank cassettes on the web, you may be very confused at the difference.', 'Spreading\r\nPeace to world', 'If you are looking at blank cassettes on the web, you may be very confused at the difference.', 'Client’s Feedback', 'Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderitin.', '“Accessories Here you can find the best computer accessory for your laptop, monitor,printer, scanner, speaker, projector, hardware”', 'Mark Alviro Wiens', 'CEO at Google', '“Accessories Here you can find the best computer accessory for your laptop, monitor,printer, scanner, speaker, projector, hardware”', 'Mark Alviro Wiens', 'CEO at Google', '“Accessories Here you can find the best computer accessory for your laptop, monitor,printer, scanner, speaker, projector, hardware”', 'Mark Alviro Wiens', 'CEO at Google', 'Follow us on instagram');

-- --------------------------------------------------------

--
-- Table structure for table `index`
--

CREATE TABLE IF NOT EXISTS `index` (
  `title` text NOT NULL,
  `des` text NOT NULL,
  `button1` text NOT NULL,
  `world` text NOT NULL,
  `des1` text NOT NULL,
  `button2` text NOT NULL,
  `world1` text NOT NULL,
  `des2` text NOT NULL,
  `button3` text NOT NULL,
  `world2` text NOT NULL,
  `des3` text NOT NULL,
  `button4` text NOT NULL,
  `world3` text NOT NULL,
  `des4` text NOT NULL,
  `button5` text NOT NULL,
  `service` text NOT NULL,
  `des5` text NOT NULL,
  `world4` text NOT NULL,
  `des6` text NOT NULL,
  `world5` text NOT NULL,
  `des7` text NOT NULL,
  `world6` text NOT NULL,
  `des8` text NOT NULL,
  `world7` text NOT NULL,
  `des9` text NOT NULL,
  `feedback` text NOT NULL,
  `feeedback_des` text NOT NULL,
  `access` text NOT NULL,
  `name` text NOT NULL,
  `prof` text NOT NULL,
  `access1` text NOT NULL,
  `name1` text NOT NULL,
  `prof1` text NOT NULL,
  `access2` text NOT NULL,
  `name2` text NOT NULL,
  `prof2` text NOT NULL,
  `insta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index`
--

INSERT INTO `index` (`title`, `des`, `button1`, `world`, `des1`, `button2`, `world1`, `des2`, `button3`, `world2`, `des3`, `button4`, `world3`, `des4`, `button5`, `service`, `des5`, `world4`, `des6`, `world5`, `des7`, `world6`, `des8`, `world7`, `des9`, `feedback`, `feeedback_des`, `access`, `name`, `prof`, `access1`, `name1`, `prof1`, `access2`, `name2`, `prof2`, `insta`) VALUES
('Nature\r\nPhotoshoot', 'If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.', 'Explore Gallery', 'Spreading\r\nPeace to world', 'If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.', 'Explore Gallery', 'Spreading\r\nPeace to world', 'If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.', 'Explore Gallery', 'Spreading\r\nPeace to world', 'If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.', 'Explore Gallery', 'Spreading\r\nPeace to world', 'If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.', 'Explore Gallery', 'Services Offered by Us', 'If you are looking at blank cassettes on the web, you may be very confused at the difference in price. \r\nYou may see some for as low as $.17 each.', 'Spreading\r\nPeace to world', 'If you are looking at blank cassettes on the web, you may be very confused at the difference.', 'Spreading\r\nPeace to world', 'If you are looking at blank cassettes on the web, you may be very confused at the difference.', 'Spreading\r\nPeace to world', 'If you are looking at blank cassettes on the web, you may be very confused at the difference.', 'Spreading\r\nPeace to world', 'If you are looking at blank cassettes on the web, you may be very confused at the difference.', 'Client’s Feedback', 'Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderitin.', '“Accessories Here you can find the best computer accessory for your laptop, monitor,printer, scanner, speaker, projector, hardware”', 'Mark Alviro Wiens', 'CEO at Google', '“Accessories Here you can find the best computer accessory for your laptop, monitor,printer, scanner, speaker, projector, hardware”', 'Mark Alviro Wiens', 'CEO at Google', '“Accessories Here you can find the best computer accessory for your laptop, monitor,printer, scanner, speaker, projector, hardware”', 'Mark Alviro Wiens', 'CEO at Google', 'Follow us on instagram');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `projects` text NOT NULL,
  `home` text NOT NULL,
  `projects1` text NOT NULL,
  `world1` text NOT NULL,
  `des1` text NOT NULL,
  `button1` text NOT NULL,
  `world2` text NOT NULL,
  `des2` text NOT NULL,
  `button2` text NOT NULL,
  `world3` text NOT NULL,
  `des3` text NOT NULL,
  `button3` text NOT NULL,
  `world4` text NOT NULL,
  `des4` text NOT NULL,
  `button4` text NOT NULL,
  `insta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projects`, `home`, `projects1`, `world1`, `des1`, `button1`, `world2`, `des2`, `button2`, `world3`, `des3`, `button3`, `world4`, `des4`, `button4`, `insta`) VALUES
('Projects', 'Home', 'Projects', 'Spreading Peace to world', 'If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.', 'Explore Gallery', 'Spreading Peace to world', 'If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.', 'Explore Gallery', 'Spreading Peace to world', 'If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.', 'Explore Gallery', 'Spreading Peace to world', 'If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.', 'Explore Gallery', 'Follow us on instagram');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE IF NOT EXISTS `project_details` (
  `project_details` text NOT NULL,
  `home` text NOT NULL,
  `projects` text NOT NULL,
  `project_details1` text NOT NULL,
  `colorlib_name` text NOT NULL,
  `des1` text NOT NULL,
  `rating` text NOT NULL,
  `client` text NOT NULL,
  `website` text NOT NULL,
  `completed` text NOT NULL,
  `des2` text NOT NULL,
  `des3` text NOT NULL,
  `insta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`project_details`, `home`, `projects`, `project_details1`, `colorlib_name`, `des1`, `rating`, `client`, `website`, `completed`, `des2`, `des3`, `insta`) VALUES
('Project Details', 'Home', 'Projects', 'Project Details', 'Lavendar ambient colorlib', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'Rating', 'Client', 'Website', 'Completed', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.', 'Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', 'Follow us on instagram');
