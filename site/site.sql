-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 11:06 AM
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
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `block2` text NOT NULL,
  `des1` text NOT NULL,
  `des2` text NOT NULL,
  `c1` text NOT NULL,
  `c2` text NOT NULL,
  `c3` text NOT NULL,
  `c4` text NOT NULL,
  `about` text NOT NULL,
  `content` text NOT NULL,
  `button` text NOT NULL,
  `title1` text NOT NULL,
  `date1` text NOT NULL,
  `news1` text NOT NULL,
  `date2` text NOT NULL,
  `news2` text NOT NULL,
  `project` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`block2`, `des1`, `des2`, `c1`, `c2`, `c3`, `c4`, `about`, `content`, `button`, `title1`, `date1`, `news1`, `date2`, `news2`, `project`) VALUES
('Unique Artistic Design for All Tastes', 'If you have any questions about this goodie , read the post about it.', 'Find a bunch of alike designs at TemplateMonsterâ€™s website.', 'Web Design', 'Developement', 'Graphic Design', 'Planning', 'ABOUT US', 'Dorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis erat sit amet ultricies erat rutruma auctor, leo magna Integer convallis orci vel mi laoreet, at ornare lorem consequat.', 'Click', 'NEWS', '14 June Smith Joshi ', 'Dipsum dolor sit amet, consecteturertolom werto moniko sit amet ultricies erat rutruma auctorerttu terolp sadertto Integer convallis orci vel mi laoreetatwertlim wernom vert Ipsum dolor sit amsecteturertolom lid ber asrot', '17 June Ram Pathak', 'Lipsum dolor sit amet, consecteturertolom dewas terolo it amet ultricies erat rutruma auctorerttu nertoli moniko Integer convallis orci vel mi laoreetatwertlim wastrolin der psum dolor sit amsecteturertolom saterolo monikom', 'Feature Projects');

-- --------------------------------------------------------

--
-- Table structure for table `admin2`
--

CREATE TABLE `admin2` (
  `tit` text NOT NULL,
  `t1` text NOT NULL,
  `block1` text NOT NULL,
  `t2` text NOT NULL,
  `service1` text NOT NULL,
  `t3` text NOT NULL,
  `service2` text NOT NULL,
  `t4` text NOT NULL,
  `service3` text NOT NULL,
  `cus_new` text NOT NULL,
  `l1` text NOT NULL,
  `service4` text NOT NULL,
  `l2` text NOT NULL,
  `service5` text NOT NULL,
  `why` text NOT NULL,
  `service6` text NOT NULL,
  `s1` text NOT NULL,
  `s2` text NOT NULL,
  `s3` text NOT NULL,
  `s4` text NOT NULL,
  `s5` text NOT NULL,
  `s6` text NOT NULL,
  `s7` text NOT NULL,
  `s8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin2`
--

INSERT INTO `admin2` (`tit`, `t1`, `block1`, `t2`, `service1`, `t3`, `service2`, `t4`, `service3`, `cus_new`, `l1`, `service4`, `l2`, `service5`, `why`, `service6`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`) VALUES
('Main Services', 'Quisque viverra', 'Dipsum dolor sit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto merto Integer convallis orcidet wertolo mono  Amertoloolaoreetatwertlim wernom vert Ipsum dolor sit amsecteturertolom lid ber asrot gertoli moniko lomon dertlo', 'Isque viverratte', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,  there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics', 'Kuisque iverram', 'Dolor sit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto merto Integer convallis orcidet wertolo mono  Amertoloolaoreetatwertlim wernom vert Ipsum dolor sit amsecteturertolom lid ber asrot gertoli moniko lomon dertl', 'Kouisque erramer', 'Mipsum dolor sit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto merto Integer convallis orcidet wertolo mono  Amertoloolaoreetatwertlim wernom vert Ipsum dolor sit amsecteturertolom lid ber asrot gertoli monikertloe', 'Custom Content Management', 'Lueiverra Mertolo Derto', 'Asit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto mertoInteger convallis orcidet wertolo mono  Amertoloolaoreetatwertlim wernom vertIpsum dolor sit amsecteturertolom lid ber asrot gertoli moniko lomon ', 'Lueiverra Mertolo Derto', 'Asit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto mertoInteger convallis orcidet wertolo mono  Amertoloolaoreetatwertlim wernom vertIpsum dolor sit amsecteturertolom lid ber asrot gertoli moniko lomon ', 'Why Choose Us?', 'Besit ametconsecteturertolom  werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto mertoInteger convallis orcidet wertolo monoter lom', 'Besit ametconsecteturertolom werto monikosit', 'Amet ultricies erateroli me rutruma auctorerttu', 'Terolp sadertto mertoInteger convawertolo', 'Amertoloolaoreetatwertlim wernom fertolom', 'Dolor sit amsecteturertolom lid be', 'Moniko lomon dertlosit amet ultricies erater', 'Rutruma auctorert retlomoni molokintromoli', 'Convallis orci vel mi laoreetat terolo');

-- --------------------------------------------------------

--
-- Table structure for table `admin3`
--

CREATE TABLE `admin3` (
  `title` text NOT NULL,
  `tit1` text NOT NULL,
  `portfolio1` text NOT NULL,
  `tit2` text NOT NULL,
  `portfolio2` text NOT NULL,
  `tit3` text NOT NULL,
  `portfolio3` text NOT NULL,
  `tit4` text NOT NULL,
  `portfolio4` text NOT NULL,
  `tit5` text NOT NULL,
  `portfolio5` text NOT NULL,
  `tit6` text NOT NULL,
  `portfolio6` text NOT NULL,
  `tit7` text NOT NULL,
  `portfolio7` text NOT NULL,
  `tit8` text NOT NULL,
  `portfolio8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin3`
--

INSERT INTO `admin3` (`title`, `tit1`, `portfolio1`, `tit2`, `portfolio2`, `tit3`, `portfolio3`, `tit4`, `portfolio4`, `tit5`, `portfolio5`, `tit6`, `portfolio6`, `tit7`, `portfolio7`, `tit8`, `portfolio8`) VALUES
('Portfolio', 'Lueiverra Mertolo Derto', 'Asit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto', 'Keiverra Mertolo Terto', 'Detconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertt', 'Saeerra Gertolo Lertor', 'Nametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp saderttor', 'Jeiverra Lertolo Derto', 'Msit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sad', 'Nueiverra Bertolo Herto', 'Nosit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp', 'Julieiverra Vertolo Merto', 'Vsit ametconsecteturertolom werto monikosit ameterto ultricies erateroli me rutruma auctorerttu terolp satto', 'Lueiverra Gertolo Merto', 'Asit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto', 'Mueiverra Fertolo Serto', 'Neit ametconsecteturertolom werto monikosit ameterto ultricies erateroli me rutruma auctorerttu terolp serttno');

-- --------------------------------------------------------

--
-- Table structure for table `admin4`
--

CREATE TABLE `admin4` (
  `title` text NOT NULL,
  `title1` text NOT NULL,
  `head` text NOT NULL,
  `line1` text NOT NULL,
  `line2` text NOT NULL,
  `line3` text NOT NULL,
  `line4` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `email1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin4`
--

INSERT INTO `admin4` (`title`, `title1`, `head`, `line1`, `line2`, `line3`, `line4`, `contact`, `email`, `email1`) VALUES
('qq', 'qq', 'qq', 'qq', 'qq', 'qq', 'qq', 'qq', 'qq', 'qq'),
('Our Location', 'Contact Form', 'Contact Information', 'We offer you 24/7 support for all', 'premium templates.', 'If you need help in customization of freebies, ask guys from', 'TemplateTuning.', 'Ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto mertoInteger convallis orcidet wertolo monolaoreetatwertlim wernom vertIpsum dolor sit amsecteturertolom lid ber asrot gertoli moniko.  The Company Name Inc.  9870 St Vincent Place,  Glasgow, DC 45 Fr 45.  Telephone: +1 800 603 6035  FAX: +1 800 889 9898 ', 'E-mail: ', 'mail@demolink.org');

-- --------------------------------------------------------

--
-- Table structure for table `admin5`
--

CREATE TABLE `admin5` (
  `title` text NOT NULL,
  `blog_tit` text NOT NULL,
  `blog_sub` text NOT NULL,
  `blog_sub1` text NOT NULL,
  `blog_date` text NOT NULL,
  `blog1` text NOT NULL,
  `button` text NOT NULL,
  `blog_tit1` text NOT NULL,
  `blog_sub2` text NOT NULL,
  `blog_sub3` text NOT NULL,
  `blog_date1` text NOT NULL,
  `blog2` text NOT NULL,
  `button1` text NOT NULL,
  `blog_tit2` text NOT NULL,
  `blog_sub4` text NOT NULL,
  `blog_sub5` text NOT NULL,
  `blog_date2` text NOT NULL,
  `blog3` text NOT NULL,
  `button2` text NOT NULL,
  `search` text NOT NULL,
  `cat` text NOT NULL,
  `cat1` text NOT NULL,
  `cat2` text NOT NULL,
  `cat3` text NOT NULL,
  `cat4` text NOT NULL,
  `cat5` text NOT NULL,
  `cat6` text NOT NULL,
  `cat7` text NOT NULL,
  `cat8` text NOT NULL,
  `poll` text NOT NULL,
  `poll1` text NOT NULL,
  `poll_per` text NOT NULL,
  `poll2` text NOT NULL,
  `poll_per1` text NOT NULL,
  `poll3` text NOT NULL,
  `poll_per2` text NOT NULL,
  `poll4` text NOT NULL,
  `poll_per3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin5`
--

INSERT INTO `admin5` (`title`, `blog_tit`, `blog_sub`, `blog_sub1`, `blog_date`, `blog1`, `button`, `blog_tit1`, `blog_sub2`, `blog_sub3`, `blog_date1`, `blog2`, `button1`, `blog_tit2`, `blog_sub4`, `blog_sub5`, `blog_date2`, `blog3`, `button2`, `search`, `cat`, `cat1`, `cat2`, `cat3`, `cat4`, `cat5`, `cat6`, `cat7`, `cat8`, `poll`, `poll1`, `poll_per`, `poll2`, `poll_per1`, `poll3`, `poll_per2`, `poll4`, `poll_per3`) VALUES
('Blog', 'Lueiverra Mertolo Dertomertolino Mel', 'Submitted by', 'Admin', '11 June, 2014', 'Asit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto mertoInteger convallis orcidet wertolo mono  Amertoloolaoreetatwertlim wernom vertIpsum dolor sit amsecteturertolom lid ber asrot gertoli moniko lomon dertlosit amet ultricies erat rutruma auctorert ', 'more', 'Hoeiverra Tertolo Gertomertolino', 'Submitted by', 'Admin', '14 June, 2014', 'Koletconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto mertoInteger convallis orcidet wertolo mono  Amertoloolaoreetatwertlim wernom vertIpsum dolor sit amsecteturertolom lid ber asrot gertoli moniko lomon dertlosit amet ultricies erat rutruma auctorerte ', 'more', 'Mertolo Dertomertolino Melonwe', 'Submitted by', 'Admin', '18 June, 2014', 'Gerit ametconsecteturertolom werto monikosit amet ultricies erateroli me rutruma auctorerttu terolp sadertto mertoInteger convallis orcidet wertolo mono  Amertoloolaoreetatwertlim wernom vertIpsum dolor sit amsecteturertolom lid ber asrot gertoli moniko lomon dertlosit amet ultricies erat rutruma aucto ', 'more', 'Search', 'Categories', 'Besit ametconsecteturertolom werto monikosit', 'Amet ultricies erateroli me rutruma auctorerttu', 'Terolp sadertto mertoInteger convawertolo', 'Amertoloolaoreetatwertlim wernom fertolom', 'Dolor sit amsecteturertolom lid be', 'Moniko lomon dertlosit amet ultricies erater', 'Rutruma auctorert retlomoni molokintromoli', 'Convallis orci vel mi laoreetat terolo', 'Poll', 'Super', '39%', 'Good', '31%', 'Normal', '25%', 'Bad', '11%');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
