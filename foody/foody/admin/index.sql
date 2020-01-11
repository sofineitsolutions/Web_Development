-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2019 at 07:07 AM
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
-- Table structure for table `index`
--

CREATE TABLE IF NOT EXISTS `index` (
  `title1` text NOT NULL,
  `des1` text NOT NULL,
  `title2` text NOT NULL,
  `des2` text NOT NULL,
  `Enjoy_Eating` text NOT NULL,
  `des3` text NOT NULL,
  `Fresh_Sea_Foods` text NOT NULL,
  `des4` text NOT NULL,
  `Cup_of_Coffees` text NOT NULL,
  `des5` text NOT NULL,
  `Meat_Eaters` text NOT NULL,
  `des6` text NOT NULL,
  `stitle1` text NOT NULL,
  `sdes1` text NOT NULL,
  `stitle2` text NOT NULL,
  `price1` text NOT NULL,
  `sep_menu1` text NOT NULL,
  `price2` text NOT NULL,
  `sep_menu2` text NOT NULL,
  `price3` text NOT NULL,
  `sep_menu3` text NOT NULL,
  `price4` text NOT NULL,
  `sep_menu4` text NOT NULL,
  `stitle3` text NOT NULL,
  `menu1` text NOT NULL,
  `mdes1` text NOT NULL,
  `mprice1` text NOT NULL,
  `menu2` text NOT NULL,
  `mdes2` text NOT NULL,
  `mprice2` text NOT NULL,
  `menu3` text NOT NULL,
  `name3` text NOT NULL,
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
  `mprice8` text NOT NULL,
  `stitle4` text NOT NULL,
  `tdes1` text NOT NULL,
  `tname1` text NOT NULL,
  `prof1` text NOT NULL,
  `tdes2` text NOT NULL,
  `tname2` text NOT NULL,
  `prof2` text NOT NULL,
  `tdes3` text NOT NULL,
  `tname3` text NOT NULL,
  `prof3` text NOT NULL,
  `blog` text NOT NULL,
  `blog1` text NOT NULL,
  `date1` text NOT NULL,
  `bdes1` text NOT NULL,
  `blog2` text NOT NULL,
  `date2` text NOT NULL,
  `bdes2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index`
--

INSERT INTO `index` (`title1`, `des1`, `title2`, `des2`, `Enjoy_Eating`, `des3`, `Fresh_Sea_Foods`, `des4`, `Cup_of_Coffees`, `des5`, `Meat_Eaters`, `des6`, `stitle1`, `sdes1`, `stitle2`, `price1`, `sep_menu1`, `price2`, `sep_menu2`, `price3`, `sep_menu3`, `price4`, `sep_menu4`, `stitle3`, `menu1`, `mdes1`, `mprice1`, `menu2`, `mdes2`, `mprice2`, `menu3`, `name3`, `mprice3`, `menu4`, `mdes4`, `mprice4`, `menu5`, `mdes5`, `mprice5`, `menu6`, `mdes6`, `mprice6`, `menu7`, `mdes7`, `mprice7`, `menu8`, `mdes8`, `mprice8`, `stitle4`, `tdes1`, `tname1`, `prof1`, `tdes2`, `tname2`, `prof2`, `tdes3`, `tname3`, `prof3`, `blog`, `blog1`, `date1`, `bdes1`, `blog2`, `date2`, `bdes2`) VALUES
('Enjoy Your Food at Foody', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente et sed quasi.', 'Delecious Food', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente et sed quasi.', 'Enjoy Eating', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Fresh Sea Foods', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Cup of Coffees', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'Meat Eaters', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'The Restaurant', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'Special Menu', '$11.50', 'Organic tomato salad, gorgonzola cheese, capers', '$12.00', 'Baked broccoli', '$11.00', 'Spicy meatballs', '$12.00', 'Eggplant parmigiana', 'Our Menu', 'Grilled Caesar salad, shaved reggiano', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$12.00', 'Spicy Calamari and beans', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$12.00', 'Bacon wrapped wild gulf prawns', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$18.00', 'Seared ahi tuna fillet*, honey-ginger sauce', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$16.00', 'Grilled Caesar salad, shaved reggiano', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$12.00', 'Spicy Calamari and beans', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$12.00', 'Bacon wrapped wild gulf prawns', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$18.00', 'Seared ahi tuna fillet*, honey-ginger sauce', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...', '$16.00', 'Testimonial', '&ldquo; Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. &rdquo;&ldquo; Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. &rdquo;', 'Mellisa Howard', 'CEO, XYZ Company', '&ldquo; Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. &rdquo;', 'Mike Richardson', 'CEO, XYZ Company', '&ldquo; Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. &rdquo;', 'Charles White', 'CEO, XYZ Company', 'Blog', 'How To Cook Pasta?', 'April 22, 2018', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'How To Cook Pasta?', 'April 22, 2018', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.');
