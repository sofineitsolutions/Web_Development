-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2019 at 06:22 AM
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
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `Enjoy_Eating` text NOT NULL,
  `des1` text NOT NULL,
  `Fresh_Sea_Foods` text NOT NULL,
  `des2` text NOT NULL,
  `Cup_of_Coffees` text NOT NULL,
  `des3` text NOT NULL,
  `Meat_Eaters` text NOT NULL,
  `des4` text NOT NULL,
  `Free_Hot_Soup` text NOT NULL,
  `des5` text NOT NULL,
  `Drinks_Beverages` text NOT NULL,
  `des6` text NOT NULL,
  `Meat_Eaters1` text NOT NULL,
  `des7` text NOT NULL,
  `Cup_of_Coffees1` text NOT NULL,
  `des8` text NOT NULL,
  `stitle1` text NOT NULL,
  `menu1` text NOT NULL,
  `mdes1` text NOT NULL,
  `mprice1` text NOT NULL,
  `menu2` text NOT NULL,
  `mdes2` text NOT NULL,
  `mprice2` text NOT NULL,
  `menu3` text NOT NULL,
  `mdes3` text NOT NULL,
  `mprice3` text NOT NULL,
  `menu4` text NOT NULL,
  `mdes4` text NOT NULL,
  `mprice4` text NOT NULL,
  `menu5` text NOT NULL,
  `mdes5` text NOT NULL,
  `mprice5` text NOT NULL,
  `menu6` text NOT NULL,
  `mdes6` text NOT NULL,
  `mprice6` text NOT NULL,
  `menu7` text NOT NULL,
  `mdes7` text NOT NULL,
  `mprice7` text NOT NULL,
  `menu8` text NOT NULL,
  `mdes8` text NOT NULL,
  `mprice8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Enjoy_Eating`, `des1`, `Fresh_Sea_Foods`, `des2`, `Cup_of_Coffees`, `des3`, `Meat_Eaters`, `des4`, `Free_Hot_Soup`, `des5`, `Drinks_Beverages`, `des6`, `Meat_Eaters1`, `des7`, `Cup_of_Coffees1`, `des8`, `stitle1`, `menu1`, `mdes1`, `mprice1`, `menu2`, `mdes2`, `mprice2`, `menu3`, `mdes3`, `mprice3`, `menu4`, `mdes4`, `mprice4`, `menu5`, `mdes5`, `mprice5`, `menu6`, `mdes6`, `mprice6`, `menu7`, `mdes7`, `mprice7`, `menu8`, `mdes8`, `mprice8`) VALUES
('Enjoy Eating', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Fresh Sea Foods', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Cup of Coffees', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Meat Eaters', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Free Hot Soup', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Drinks &amp; Beverages', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Meat Eaters', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Cup of Coffees', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Our Menu', 'Grilled Caesar salad, shaved reggiano', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$12.00', 'Spicy Calamari and beans', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$12.00', 'Bacon wrapped wild gulf prawns', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$18.00', 'Seared ahi tuna fillet*, honey-ginger sauce', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$16.00', 'Grilled Caesar salad, shaved reggiano', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$12.00', 'Spicy Calamari and beans', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$12.00', 'Bacon wrapped wild gulf prawns', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$18.00', 'Seared ahi tuna fillet*, honey-ginger sauce', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$16.00');
