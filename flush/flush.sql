-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2019 at 05:26 AM
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
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `title` text NOT NULL,
  `des` text NOT NULL,
  `button1` text NOT NULL,
  `social` text NOT NULL,
  `social_life` text NOT NULL,
  `politics` text NOT NULL,
  `part_politics` text NOT NULL,
  `food` text NOT NULL,
  `food_finished` text NOT NULL,
  `blog1` text NOT NULL,
  `des1` text NOT NULL,
  `view_more1` text NOT NULL,
  `food1` text NOT NULL,
  `tech1` text NOT NULL,
  `politics1` text NOT NULL,
  `lifestyle1` text NOT NULL,
  `name1` text NOT NULL,
  `date1` text NOT NULL,
  `views1` text NOT NULL,
  `comments1` text NOT NULL,
  `blog2` text NOT NULL,
  `des2` text NOT NULL,
  `view_more2` text NOT NULL,
  `food2` text NOT NULL,
  `tech2` text NOT NULL,
  `politics2` text NOT NULL,
  `lifestyle2` text NOT NULL,
  `name2` text NOT NULL,
  `date2` text NOT NULL,
  `views2` text NOT NULL,
  `comments2` text NOT NULL,
  `blog3` text NOT NULL,
  `des3` text NOT NULL,
  `view_more3` text NOT NULL,
  `food3` text NOT NULL,
  `tech3` text NOT NULL,
  `politics3` text NOT NULL,
  `lifestyle3` text NOT NULL,
  `name3` text NOT NULL,
  `date3` text NOT NULL,
  `views3` text NOT NULL,
  `comments3` text NOT NULL,
  `blog4` text NOT NULL,
  `des4` text NOT NULL,
  `view_more4` text NOT NULL,
  `food4` text NOT NULL,
  `tech4` text NOT NULL,
  `politics4` text NOT NULL,
  `lifestyle4` text NOT NULL,
  `name4` text NOT NULL,
  `date4` text NOT NULL,
  `views4` text NOT NULL,
  `comments4` text NOT NULL,
  `blog5` text NOT NULL,
  `des5` text NOT NULL,
  `view_more5` text NOT NULL,
  `food5` text NOT NULL,
  `tech5` text NOT NULL,
  `politics5` text NOT NULL,
  `lifestyle5` text NOT NULL,
  `name5` text NOT NULL,
  `date5` text NOT NULL,
  `views5` text NOT NULL,
  `comments5` text NOT NULL,
  `name6` text NOT NULL,
  `prof` text NOT NULL,
  `des6` text NOT NULL,
  `news` text NOT NULL,
  `des7` text NOT NULL,
  `tag` text NOT NULL,
  `tech6` text NOT NULL,
  `lifestyle6` text NOT NULL,
  `fash` text NOT NULL,
  `art` text NOT NULL,
  `food6` text NOT NULL,
  `arch` text NOT NULL,
  `adven` text NOT NULL,
  `news1` text NOT NULL,
  `insta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`title`, `des`, `button1`, `social`, `social_life`, `politics`, `part_politics`, `food`, `food_finished`, `blog1`, `des1`, `view_more1`, `food1`, `tech1`, `politics1`, `lifestyle1`, `name1`, `date1`, `views1`, `comments1`, `blog2`, `des2`, `view_more2`, `food2`, `tech2`, `politics2`, `lifestyle2`, `name2`, `date2`, `views2`, `comments2`, `blog3`, `des3`, `view_more3`, `food3`, `tech3`, `politics3`, `lifestyle3`, `name3`, `date3`, `views3`, `comments3`, `blog4`, `des4`, `view_more4`, `food4`, `tech4`, `politics4`, `lifestyle4`, `name4`, `date4`, `views4`, `comments4`, `blog5`, `des5`, `view_more5`, `food5`, `tech5`, `politics5`, `lifestyle5`, `name5`, `date5`, `views5`, `comments5`, `name6`, `prof`, `des6`, `news`, `des7`, `tag`, `tech6`, `lifestyle6`, `fash`, `art`, `food6`, `arch`, `adven`, `news1`, `insta`) VALUES
('Nature\r\nPhotoshoot', 'If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.', 'Explore Gallery', 'Social Life', 'Enjoy your social life together', 'Politics', 'Be a part of politics', 'Food', 'Let the food be finished', 'Astronomy Binoculars A Great Alternative', 'MCSE boot camps have its supporters and its detractors.Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.', 'View More', 'Food', 'Technology', 'Politics', 'Lifestyle', 'Mark wiens', '12 Dec, 2017', '1.2M Views', '06 Comments', 'The Basics Of Buying A Telescope', 'MCSE boot camps have its supporters and its detractors.Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.', 'View More', 'Food', 'Technology', 'Politics', 'Lifestyle', 'Mark wiens', '12 Dec, 2017', '1.2M Views', '06 Comments', 'The Glossary Of Telescopes', 'MCSE boot camps have its supporters and its detractors.Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.', 'View More', 'Food', 'Technology', 'Politics', 'Lifestyle', 'Mark wiens', '12 Dec, 2017', '1.2M Views', '06 Comments', 'The Night Sky', 'MCSE boot camps have its supporters and its detractors.Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.', 'View More', 'Food', 'Technology', 'Politics', 'Lifestyle', 'Mark wiens', '12 Dec, 2017', '1.2M Views', '06 Comments', 'Telescopes 101', 'MCSE boot camps have its supporters and its detractors.Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.', 'View More', 'Food', 'Technology', 'Politics', 'Lifestyle', 'Mark wiens', '12 Dec, 2017', '1.2M Views', '06 Comments', 'Charlie Barber', 'Senior blog writer', 'Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.', 'Newsletter', 'Here, I focus on a range of items and features that we use in life without giving them a second thought.', 'Tag Clouds', 'Technology', 'lifestyle', 'Fashion', 'Art', 'Food', 'Architecture', 'Adventure', 'Newsletter', 'Follow us on instagram');

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

-- --------------------------------------------------------

--
-- Table structure for table `single_blog`
--

CREATE TABLE IF NOT EXISTS `single_blog` (
  `blog_details1` text NOT NULL,
  `home` text NOT NULL,
  `blog` text NOT NULL,
  `blog_details2` text NOT NULL,
  `blog_title` text NOT NULL,
  `des1` text NOT NULL,
  `des2` text NOT NULL,
  `des3` text NOT NULL,
  `food1` text NOT NULL,
  `tech1` text NOT NULL,
  `politics` text NOT NULL,
  `lifestyle1` text NOT NULL,
  `name` text NOT NULL,
  `date` text NOT NULL,
  `views` text NOT NULL,
  `blog_comments` text NOT NULL,
  `des4` text NOT NULL,
  `des5` text NOT NULL,
  `des6` text NOT NULL,
  `prev_post` text NOT NULL,
  `post_name1` text NOT NULL,
  `next_post` text NOT NULL,
  `post_name2` text NOT NULL,
  `comments` text NOT NULL,
  `name1` text NOT NULL,
  `date1` text NOT NULL,
  `c_des1` text NOT NULL,
  `name2` text NOT NULL,
  `date2` text NOT NULL,
  `c_des2` text NOT NULL,
  `name3` text NOT NULL,
  `date3` text NOT NULL,
  `c_des3` text NOT NULL,
  `name4` text NOT NULL,
  `date4` text NOT NULL,
  `c_des4` text NOT NULL,
  `name5` text NOT NULL,
  `date5` text NOT NULL,
  `c_des5` text NOT NULL,
  `name6` text NOT NULL,
  `prof` text NOT NULL,
  `des7` text NOT NULL,
  `news` text NOT NULL,
  `des8` text NOT NULL,
  `tag` text NOT NULL,
  `tech2` text NOT NULL,
  `lifestyle2` text NOT NULL,
  `fash1` text NOT NULL,
  `art1` text NOT NULL,
  `food2` text NOT NULL,
  `arch1` text NOT NULL,
  `adven1` text NOT NULL,
  `insta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `single_blog`
--

INSERT INTO `single_blog` (`blog_details1`, `home`, `blog`, `blog_details2`, `blog_title`, `des1`, `des2`, `des3`, `food1`, `tech1`, `politics`, `lifestyle1`, `name`, `date`, `views`, `blog_comments`, `des4`, `des5`, `des6`, `prev_post`, `post_name1`, `next_post`, `post_name2`, `comments`, `name1`, `date1`, `c_des1`, `name2`, `date2`, `c_des2`, `name3`, `date3`, `c_des3`, `name4`, `date4`, `c_des4`, `name5`, `date5`, `c_des5`, `name6`, `prof`, `des7`, `news`, `des8`, `tag`, `tech2`, `lifestyle2`, `fash1`, `art1`, `food2`, `arch1`, `adven1`, `insta`) VALUES
('Blog Details', 'Home', 'Blog', 'Blog Details', 'Astronomy Binoculars A Great Alternative', 'MCSE boot camps have its supporters and its detractors. Some people do \r\nnot understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.', 'Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot\r\ncamp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower\r\nto actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed', 'Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp \r\nwhen you can get the MCSE study materials yourself at a fraction of the camp price. However, who has\r\nthe willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed', 'Food', 'Technology', 'Politics', 'Lifestyle', 'Mark wiens', '12 Dec, 2017', '1.2M Views', '06 Comments', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you\r\nshould have to spend money on boot camp when you can get the MCSE study materials yourself at a\r\nfraction of the camp price. However, who has the willpower to actually sit through a self-imposed\r\nMCSE training.', 'MCSE boot camps have its supporters and its detractors. Some people do not understand \r\nwhy you should have to spend money on boot camp when you can get the MCSE study materials \r\nyourself at a fraction of the camp price. However, who has the willpower.', 'MCSE boot camps have its supporters and its detractors. Some people do not understand \r\nwhy you should have to spend money on boot camp when you can get the MCSE study materials \r\nyourself at a fraction of the camp price. However, who has the willpower.', 'Prev Post', 'Space The Final Frontier', 'Next Post', 'Telescopes 101', '05 Comments', 'Emilly Blunt', 'December 4, 2017 at 3:12 pm ', 'Never say goodbye till the end comes!', 'Elsie Cunningham', 'December 4, 2017 at 3:12 pm', 'Never say goodbye till the end comes!', 'Annie Stephens', 'December 4, 2017 at 3:12 pm', 'Never say goodbye till the end comes!', 'Maria Luna', 'December 4, 2017 at 3:12 pm', 'Never say goodbye till the end comes!', 'Ina Hayes', 'December 4, 2017 at 3:12 pm', 'Never say goodbye till the end comes!', 'charlie Barber', 'Senior blog writer', 'Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to \r\nspend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.', 'Newsletter', 'Here, I focus on a range of items and features that we use in life without\r\ngiving them a second thought.', '"Tag Clouds', 'Technology', 'lifestyle', 'Fashion', 'Art', 'Food', 'Architecture', 'Adventure', 'Follow us on instagram');
