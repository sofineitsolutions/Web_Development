-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 05:00 AM
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
-- Database: `air`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin2`
--

CREATE TABLE `admin2` (
  `title` text NOT NULL,
  `des` text NOT NULL,
  `theme_tit` text NOT NULL,
  `theme_des` text NOT NULL,
  `theme1_tit` text NOT NULL,
  `theme1_des` text NOT NULL,
  `theme2_tit` text NOT NULL,
  `theme2_des` text NOT NULL,
  `theme3_tit` text NOT NULL,
  `theme3_des` text NOT NULL,
  `what_do` text NOT NULL,
  `best1_tit` text NOT NULL,
  `best1_des` text NOT NULL,
  `best2_tit` text NOT NULL,
  `best2_des` text NOT NULL,
  `best3_tit` text NOT NULL,
  `best3_des` text NOT NULL,
  `best4_tit` text NOT NULL,
  `best4_des` text NOT NULL,
  `best5_tit` text NOT NULL,
  `best5_des` text NOT NULL,
  `best6_tit` text NOT NULL,
  `best6_des` text NOT NULL,
  `story_tit` text NOT NULL,
  `story_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin2`
--

INSERT INTO `admin2` (`title`, `des`, `theme_tit`, `theme_des`, `theme1_tit`, `theme1_des`, `theme2_tit`, `theme2_des`, `theme3_tit`, `theme3_des`, `what_do`, `best1_tit`, `best1_des`, `best2_tit`, `best2_des`, `best3_tit`, `best3_des`, `best4_tit`, `best4_des`, `best5_tit`, `best5_des`, `best6_tit`, `best6_des`, `story_tit`, `story_des`) VALUES
('Service', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ex!', 'Creative UX/UI Design Agency', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate soluta corporis odit, optio cum! Accusantium numquam ab, natus excepturi architecto earum ipsa aliquam, illum, omnis rerum, eveniet officia nihil. Eum quod iure nulla, soluta architecto distinctio. Nesciunt odio ullam expedita, neque fugit maiores sunt perferendis placeat autem animi, nihil quis suscipit quibusdam ut reiciendis doloribus natus nemo id quod illum aut culpa perspiciatis consequuntur tempore? Facilis nam vitae iure quisquam eius harum consequatur sapiente assumenda, officia voluptas quas numquam placeat, alias molestias nisi laudantium nesciunt perspiciatis suscipit hic voluptate corporis id distinctio earum. Dolor reprehenderit fuga dolore officia adipisci neque!', 'Interface Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe enim impedit repudiandae omnis est temporibus.', 'Product Branding', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe enim impedit repudiandae omnis est temporibus.', 'Game Development', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe enim impedit repudiandae omnis est temporibus.', 'WHAT WE DO BEST', 'User research', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, unde.', 'User research', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, unde.', 'User research', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, unde.', 'User research', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, unde.', 'User research', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, unde.', 'User research', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, unde.', 'We design delightful digital experiences.', 'Read more about what we do and our philosophy of design. Judge for yourself The work and results  weâ€™ve achieved for other clients, and meet our highly experienced Team who just love to design.');

-- --------------------------------------------------------

--
-- Table structure for table `admin3`
--

CREATE TABLE `admin3` (
  `title` text NOT NULL,
  `des` text NOT NULL,
  `theme_tit` text NOT NULL,
  `theme_des` text NOT NULL,
  `list1` text NOT NULL,
  `list2` text NOT NULL,
  `list3` text NOT NULL,
  `list4` text NOT NULL,
  `list5` text NOT NULL,
  `list6` text NOT NULL,
  `block_tit` text NOT NULL,
  `block1_tit` text NOT NULL,
  `block1_des` text NOT NULL,
  `block2_tit` text NOT NULL,
  `block2_des` text NOT NULL,
  `block3_tit` text NOT NULL,
  `block3_des` text NOT NULL,
  `block4_tit` text NOT NULL,
  `block4_des` text NOT NULL,
  `block5_tit` text NOT NULL,
  `block5_des` text NOT NULL,
  `block6_tit` text NOT NULL,
  `block6_des` text NOT NULL,
  `view1` text NOT NULL,
  `view2` text NOT NULL,
  `view3` text NOT NULL,
  `view4` text NOT NULL,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `approch` text NOT NULL,
  `exp_tit` text NOT NULL,
  `exp_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin3`
--

INSERT INTO `admin3` (`title`, `des`, `theme_tit`, `theme_des`, `list1`, `list2`, `list3`, `list4`, `list5`, `list6`, `block_tit`, `block1_tit`, `block1_des`, `block2_tit`, `block2_des`, `block3_tit`, `block3_des`, `block4_tit`, `block4_des`, `block5_tit`, `block5_des`, `block6_tit`, `block6_des`, `view1`, `view2`, `view3`, `view4`, `vision`, `mission`, `approch`, `exp_tit`, `exp_des`) VALUES
('About Our Company', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ex!', 'We strive to be the best and  make awesome work.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius enim, accusantium repellat ex autem numquam iure officiis facere vitae itaque.  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui vel cupiditate exercitationem, ea fuga est velit nulla culpa modi quis iste tempora non, suscipit repellendus labore voluptatem dicta amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, neque!', 'Completed Projects', 'Lines Of Code', 'Satisfied Customer', 'Awards Winner', 'Satisfied Customer', 'Awards Winner', 'WE ARE INDEPENTED DESIGN & DEVELOPMENT AGENCY', 'IOS APP DEVELOPMENT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'APP SECUTITY', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'GAMES DEVELOPMENT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'ANIMATION AND EDITING', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'UI/UX DESIGN', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'BRANDING', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd.', 'This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd.', 'This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd.', 'This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nobis ducimus facere repellat harum, eius cupiditate, aliquam aut deserunt. Nemo illo ex impedit autem quod nobis architecto, velit quasi, aut voluptas porro natus. Fuga magnam perspiciatis fugit, placeat possimus officia non ducimus voluptatum aspernatur ad quidem neque accusantium repudiandae cupiditate nobis corporis, cum facere iusto, modi cumque consectetur saepe. Officia, molestiae tempore! Consequatur ipsa consequuntur saepe suscipit vero laudantium, mollitia, quaerat soluta nihil non tempore, quos dignissimos quasi ab officiis illum numquam quibusdam ducimus, veritatis ad. Quia, aliquid. Quaerat quos ducimus ipsam amet minus temporibus eos sequi alias hic nemo.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nobis ducimus facere repellat harum, eius cupiditate, aliquam aut deserunt. Nemo illo ex impedit autem quod nobis architecto, velit quasi, aut voluptas porro natus. Fuga magnam perspiciatis fugit, placeat possimus officia non ducimus voluptatum aspernatur ad quidem neque accusantium repudiandae cupiditate nobis corporis, cum facere iusto, modi cumque consectetur saepe. Officia, molestiae tempore! Consequatur ipsa consequuntur saepe suscipit vero laudantium, mollitia, quaerat soluta nihil non tempore, quos dignissimos quasi ab officiis illum numquam quibusdam ducimus, veritatis ad. Quia, aliquid. Quaerat quos ducimus ipsam amet minus temporibus eos sequi alias hic nemo.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nobis ducimus facere repellat harum, eius cupiditate, aliquam aut deserunt. Nemo illo ex impedit autem quod nobis architecto, velit quasi, aut voluptas porro natus. Fuga magnam perspiciatis fugit, placeat possimus officia non ducimus voluptatum aspernatur ad quidem neque accusantium repudiandae cupiditate nobis corporis, cum facere iusto, modi cumque consectetur saepe. Officia, molestiae tempore! Consequatur ipsa consequuntur saepe suscipit vero laudantium, mollitia, quaerat soluta nihil non tempore, quos dignissimos quasi ab officiis illum numquam quibusdam ducimus, veritatis ad. Quia, aliquid. Quaerat quos ducimus ipsam amet minus temporibus eos sequi alias hic nemo.', 'We design delightful digital experiences.', 'Read more about what we do and our philosophy of design. Judge for yourself The work and results  weâ€™ve achieved for other clients, and meet our highly experienced Team who just love to design.');

-- --------------------------------------------------------

--
-- Table structure for table `admin4`
--

CREATE TABLE `admin4` (
  `title` text NOT NULL,
  `msg1` text NOT NULL,
  `msg2` text NOT NULL,
  `msg3` text NOT NULL,
  `msg4` text NOT NULL,
  `msg5` text NOT NULL,
  `msg6` text NOT NULL,
  `msg7` text NOT NULL,
  `msg8` text NOT NULL,
  `msg9` text NOT NULL,
  `msg10` text NOT NULL,
  `msg11` text NOT NULL,
  `mssg12` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin4`
--

INSERT INTO `admin4` (`title`, `msg1`, `msg2`, `msg3`, `msg4`, `msg5`, `msg6`, `msg7`, `msg8`, `msg9`, `msg10`, `msg11`, `mssg12`) VALUES
('ALERT STYLES', 'Well done! You succesfully read this message', 'Warning! Better check yourself.You are not looking too good', 'Warning! Better check yourself.You are not looking too good', 'Well done! You succesfully read this message', 'Warning! Better check yourself.You are not looking too good', 'Warning! Better check yourself.You are not looking too good', 'Warning! Better check yourself.You are not looking too good', 'Well done! You succesfully read this message', 'Warning! Better check yourself.You are not looking too good', 'Warning! Better check yourself.You are not looking too good', 'Warning! Better check yourself.You are not looking too good', 'Warning! Better check yourself.You are not looking too good');

-- --------------------------------------------------------

--
-- Table structure for table `admin5`
--

CREATE TABLE `admin5` (
  `title` text NOT NULL,
  `des` text NOT NULL,
  `head1` text NOT NULL,
  `des1` text NOT NULL,
  `head2` text NOT NULL,
  `des2` text NOT NULL,
  `head3` text NOT NULL,
  `des3` text NOT NULL,
  `head4` text NOT NULL,
  `des4` text NOT NULL,
  `head5` text NOT NULL,
  `des5` text NOT NULL,
  `head6` text NOT NULL,
  `des6` text NOT NULL,
  `head7` text NOT NULL,
  `des7` text NOT NULL,
  `head8` text NOT NULL,
  `head9` text NOT NULL,
  `head10` text NOT NULL,
  `email` text NOT NULL,
  `addr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin5`
--

INSERT INTO `admin5` (`title`, `des`, `head1`, `des1`, `head2`, `des2`, `head3`, `des3`, `head4`, `des4`, `head5`, `des5`, `head6`, `des6`, `head7`, `des7`, `head8`, `head9`, `head10`, `email`, `addr`) VALUES
('FAQ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, totam.', 'Welcome to Airspace!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia ullam sint quas pariatur ipsam nemo repellendus suscipit quod accusantium numquam tempora assumenda sequi, velit voluptatem soluta voluptatibus nesciunt ducimus iure. Excepturi voluptatum ullam tenetur perspiciatis alias delectus beatae voluptatibus magni facere aspernatur, qui, quas nesciunt blanditiis assumenda a expedita accusantium quos consectetur neque nemo. Necessitatibus est quod quo deserunt, dicta aut voluptatem blanditiis, alias quos sed vel unde enim dolore aliquam quis reiciendis qui vitae reprehenderit. Similique nemo accusamus, vel possimus error cumque quas, tempora repellendus velit, unde cupiditate impedit deserunt fugit labore et nostrum sapiente est obcaecati maiores voluptates.', '1.Overview', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas iusto, alias, tempora fuga quam eveniet neque excepturi aliquid. Eligendi, mollitia.', '2. Data We Collect', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, earum, quibusdam? Accusantium, eaque at quasi dicta quis consectetur. Temporibus, natus illo quasi, magni neque fugiat ducimus omnis, ab ullam reprehenderit obcaecati. Inventore ut nisi repellendus dolores odit. Ea molestias perspiciatis enim, tenetur impedit suscipit quidem optio asperiores quibusdam. Minus, vel.', '3. How We Use Data', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus repellat id, laboriosam ipsa repudiandae quisquam, suscipit officiis, praesentium itaque facilis distinctio dolorum. Velit reiciendis libero laudantium corporis, delectus impedit sunt', '4. How We Disclose Data.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur itaque ut culpa totam ratione! Iste possimus beatae consequuntur, fugit iusto fugiat id, dignissimos culpa obcaecati voluptatum omnis est quibusdam quos, et illo rerum quae dolorem error quis suscipit asperiores facilis? Ratione, facere architecto modi incidunt voluptatibus iusto maiores, at libero accusamus aliquam dolor minus autem possimus illum maxime, fugit fuga! A libero adipisci molestias praesentium distinctio odio, alias accusantium, dolorum itaque, necessitatibus labore! Facilis explicabo pariatur laudantium quibusdam consequatur ex odio labore sequi animi. Voluptatem impedit, maiores, cupiditate, iure possimus neque quaerat natus aut minima quibusdam tempora magnam, vero itaque!', '5. Security', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae blanditiis quod saepe, inventore ipsum sint cum iste quae ratione nobis laborum minima autem totam similique, quia neque deleniti! Provident, suscipit.', '6. Advertising.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, eaque repellendus placeat aperiam fugit. Quod inventore quis quos, molestias nostrum tempora quae adipisci dolorem ipsam repellendus officia, voluptatem assumenda porro possimus, eius eum enim qui natus! Quas numquam voluptas reiciendis eveniet ab at provident omnis mollitia ipsa. Asperiores vero rem cum minima voluptas, vitae magni accusantium quae. Sed, expedita, ad.', 'Frequently Asked Questions', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, repudiandae.', 'Last updated: April 24, 2017', 'legal@mail.com', 'Airspace, Inc.  San Francisco, CA 94107  USA');

-- --------------------------------------------------------

--
-- Table structure for table `admin6`
--

CREATE TABLE `admin6` (
  `title` text NOT NULL,
  `des` text NOT NULL,
  `date1` text NOT NULL,
  `des1` text NOT NULL,
  `des2` text NOT NULL,
  `des3` text NOT NULL,
  `des4` text NOT NULL,
  `heading1` text NOT NULL,
  `para1` text NOT NULL,
  `date2` text NOT NULL,
  `des5` text NOT NULL,
  `des6` text NOT NULL,
  `des7` text NOT NULL,
  `des8` text NOT NULL,
  `heading2` text NOT NULL,
  `para2` text NOT NULL,
  `date3` text NOT NULL,
  `des9` text NOT NULL,
  `des10` text NOT NULL,
  `des11` text NOT NULL,
  `des12` text NOT NULL,
  `heading3` text NOT NULL,
  `para3` text NOT NULL,
  `date4` text NOT NULL,
  `des13` text NOT NULL,
  `des14` text NOT NULL,
  `des15` text NOT NULL,
  `des16` text NOT NULL,
  `heading4` text NOT NULL,
  `para4` text NOT NULL,
  `date5` text NOT NULL,
  `des17` text NOT NULL,
  `des18` text NOT NULL,
  `des19` text NOT NULL,
  `des20` text NOT NULL,
  `heading5` text NOT NULL,
  `para5` text NOT NULL,
  `date6` text NOT NULL,
  `des21` text NOT NULL,
  `des22` text NOT NULL,
  `des23` text NOT NULL,
  `des24` text NOT NULL,
  `heading6` text NOT NULL,
  `para6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin6`
--

INSERT INTO `admin6` (`title`, `des`, `date1`, `des1`, `des2`, `des3`, `des4`, `heading1`, `para1`, `date2`, `des5`, `des6`, `des7`, `des8`, `heading2`, `para2`, `date3`, `des9`, `des10`, `des11`, `des12`, `heading3`, `para3`, `date4`, `des13`, `des14`, `des15`, `des16`, `heading4`, `para4`, `date5`, `des17`, `des18`, `des19`, `des20`, `heading5`, `para5`, `date6`, `des21`, `des22`, `des23`, `des24`, `heading6`, `para6`) VALUES
('Blog', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ex!', '20, MAR 2017', 'POSTED BY ADMIN', ' LIFESTYLE', 'TRAVEL,', 'FASHION', 'HOW TO WEAR BRIGHT SHOES', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', ' LIFESTYLE', 'TRAVEL,', 'FASHION', 'MAKING A DENIM STATEMENT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', ' LIFESTYLE', 'TRAVEL,', 'FASHION', 'STANDARD TEXT POST', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', ' LIFESTYLE', 'TRAVEL,', 'FASHION', 'STANDARD TEXT POST', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', ' LIFESTYLE', 'TRAVEL,', 'FASHION', 'STANDARD AUDIO POST', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', ' LIFESTYLE', 'TRAVEL,', 'FASHION', 'STANDARD AUDIO POST', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.');

-- --------------------------------------------------------

--
-- Table structure for table `admin7`
--

CREATE TABLE `admin7` (
  `title` text NOT NULL,
  `dir` text NOT NULL,
  `dir1` text NOT NULL,
  `heading` text NOT NULL,
  `tag1` text NOT NULL,
  `tag2` text NOT NULL,
  `tag3` text NOT NULL,
  `tag4` text NOT NULL,
  `tag5` text NOT NULL,
  `tag6` text NOT NULL,
  `heading1` text NOT NULL,
  `blog` text NOT NULL,
  `heading2` text NOT NULL,
  `para` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin7`
--

INSERT INTO `admin7` (`title`, `dir`, `dir1`, `heading`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`, `tag6`, `heading1`, `blog`, `heading2`, `para`) VALUES
('Typography', 'Home', 'typography', 'Typography (Heading)', 'H1 Heading', 'H2 Heading', 'H3 Heading', 'H4 Heading', 'H5 Heading', 'H6 Heading', 'Paragraph', 'BlockquoteParagraphLorem ipsum dolor sit amet, consectetur adipisicing elit. Labore fugiat voluptas accusamus! Perspiciatis quam quisquam iste id officiis quia commodi quibusdam sapiente molestiae! Aliquam tempore ad quis, culpa sit ullam quam inventore voluptatum necessitatibus numquam! Tempora nobis iure cupiditate excepturi aliquid earum ratione dignissimos, a consequatur odio quo aut rem voluptatem quam repellat sint, eligendi facilis maiores unde, soluta quos, veritatis sit. Dolore deleniti dolorum repellendus dolorem cum, unde architecto consectetur odit rem eveniet, accusantium omnis suscipit totam quibusdam officiis blanditiis molestiae! Totam ipsam temporibus aspernatur praesentium quam, laboriosam ipsa rem. Maxime repudiandae molestias in consequuntur sint, dicta? Temporibus, fugiat!', 'Blockquote', 'BlockquoteParagraphLorem ipsum dolor sit amet, consectetur adipisicing elit. Labore fugiat voluptas accusamus! Perspiciatis quam quisquam iste id officiis quia commodi quibusdam sapiente molestiae! Aliquam tempore ad quis, culpa sit ullam quam inventore voluptatum necessitatibus numquam! Tempora nobis iure cupiditate excepturi aliquid earum ratione dignissimos, a consequatur odio quo aut rem voluptatem quam repellat sint, eligendi facilis maiores unde, soluta quos, veritatis sit. Dolore deleniti dolorum repellendus dolorem cum, unde architecto consectetur odit rem eveniet, accusantium omnis suscipit totam quibusdam officiis blanditiis molestiae! Totam ipsam temporibus aspernatur praesentium quam, laboriosam ipsa rem. Maxime repudiandae molestias in consequuntur sint, dicta? Temporibus, fugiat!');

-- --------------------------------------------------------

--
-- Table structure for table `admin8`
--

CREATE TABLE `admin8` (
  `title` text NOT NULL,
  `des1` text NOT NULL,
  `blog1` text NOT NULL,
  `ddate` text NOT NULL,
  `dadmin` text NOT NULL,
  `dlife` text NOT NULL,
  `dtravel` text NOT NULL,
  `dfashion` text NOT NULL,
  `ddes1` text NOT NULL,
  `ddes2` text NOT NULL,
  `ddes3` text NOT NULL,
  `ddes4` text NOT NULL,
  `comment1` text NOT NULL,
  `name` text NOT NULL,
  `date` text NOT NULL,
  `rep` text NOT NULL,
  `ans` text NOT NULL,
  `name1` text NOT NULL,
  `date1` text NOT NULL,
  `ans1` text NOT NULL,
  `name2` text NOT NULL,
  `date2` text NOT NULL,
  `ans2` text NOT NULL,
  `name3` text NOT NULL,
  `date3` text NOT NULL,
  `ans3` text NOT NULL,
  `name4` text NOT NULL,
  `date4` text NOT NULL,
  `ans4` text NOT NULL,
  `post1` text NOT NULL,
  `button` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin8`
--

INSERT INTO `admin8` (`title`, `des1`, `blog1`, `ddate`, `dadmin`, `dlife`, `dtravel`, `dfashion`, `ddes1`, `ddes2`, `ddes3`, `ddes4`, `comment1`, `name`, `date`, `rep`, `ans`, `name1`, `date1`, `ans1`, `name2`, `date2`, `ans2`, `name3`, `date3`, `ans3`, `name4`, `date4`, `ans4`, `post1`, `button`) VALUES
('Blog', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, quibusdam.', 'HOW TO WEAR BRIGHT SHOES', '20, MAR 2017', ' POSTED BY ADMIN', 'LIFESTYLE', 'TRAVEL,', 'FASHION', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', 'Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum illo deserunt necessitatibus quibusdam sint, eos explicabo tenetur molestiae vero facere, aspernatur sit mollitia perferendis reiciendis. Deleniti magni explicabo sed alias fugit amet animi molestias ipsum maiores. Praesentium sint, id laborum quos. Tempora inventore est, dolor corporis quis doloremque nostrum, eos velit culpa quasi labore. Provident laborum porro nihil iste, magnam officia nemo praesentium autem, libero vel officiis. Omnis pariatur nam voluptatem voluptate at officia repellat ea beatae eligendi? Mollitia error saepe, aperiam facere. Optio maiores deleniti veritatis eaque commodi atque aperiam, debitis iste alias eligendi ut facilis earum! Impedit, tempore.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex error esse a dolore, architecto sapiente, aliquid commodi, laudantium eius nemo enim. Enim, fugit voluptatem rem molestiae. Sed totam quis accusantium iste nesciunt id exercitationem cumque repudiandae voluptas perspiciatis, consequatur quasi, molestias, culpa odio adipisci. Nesciunt optio fugiat iste quam modi, ex vitae odio pariatur! Corrupti explicabo at harum qui doloribus, sit dicta nemo, dolor, enim eum molestias fugiat obcaecati autem eligendi? Nisi delectus eaque architecto voluptatibus, unde sit minus quae quod eligendi soluta recusandae doloribus, officia, veritatis voluptatum eius aliquam quos. Consectetur, nisi? Veritatis totam, unde nostrum exercitationem tempora suscipit, molestias, deserunt ipsum laborum aut iste eaque? Vitae delectus dicta maxime non mollitia? Sapiente eos a quia eligendi deserunt repudiandae modi molestias tenetur autem pariatur ullam itaque, quas eveniet, illo quam rerum ex obcaecati voluptatum nesciunt incidunt cu', '10 COMMENTS', ' SENORITA', 'July 02, 2015, at 11:34', 'Reply', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.', ' SENORITA', 'July 02, 2015, at 11:34 ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.', ' SENORITA', 'July 02, 2015, at 11:34 ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.', ' SENORITA', 'July 02, 2015, at 11:34 ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.', ' SENORITA', 'July 02, 2015, at 11:34 ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.', 'LEAVE YOU COMMENTS', 'SENT COMMENT');

-- --------------------------------------------------------

--
-- Table structure for table `admin9`
--

CREATE TABLE `admin9` (
  `tit1` text NOT NULL,
  `tit2` text NOT NULL,
  `h` text NOT NULL,
  `date` text NOT NULL,
  `des` text NOT NULL,
  `des1` text NOT NULL,
  `des2` text NOT NULL,
  `des3` text NOT NULL,
  `info` text NOT NULL,
  `h1` text NOT NULL,
  `date1` text NOT NULL,
  `des4` text NOT NULL,
  `des5` text NOT NULL,
  `des6` text NOT NULL,
  `des7` text NOT NULL,
  `info1` text NOT NULL,
  `h2` text NOT NULL,
  `date2` text NOT NULL,
  `des8` text NOT NULL,
  `des9` text NOT NULL,
  `des10` text NOT NULL,
  `des11` text NOT NULL,
  `info2` text NOT NULL,
  `h3` text NOT NULL,
  `date3` text NOT NULL,
  `des12` text NOT NULL,
  `des13` text NOT NULL,
  `des14` text NOT NULL,
  `des15` text NOT NULL,
  `info3` text NOT NULL,
  `h4` text NOT NULL,
  `date4` text NOT NULL,
  `des16` text NOT NULL,
  `des17` text NOT NULL,
  `des18` text NOT NULL,
  `des19` text NOT NULL,
  `info4` text NOT NULL,
  `h5` text NOT NULL,
  `date5` text NOT NULL,
  `des20` text NOT NULL,
  `des21` text NOT NULL,
  `des22` text NOT NULL,
  `des23` text NOT NULL,
  `info5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin9`
--

INSERT INTO `admin9` (`tit1`, `tit2`, `h`, `date`, `des`, `des1`, `des2`, `des3`, `info`, `h1`, `date1`, `des4`, `des5`, `des6`, `des7`, `info1`, `h2`, `date2`, `des8`, `des9`, `des10`, `des11`, `info2`, `h3`, `date3`, `des12`, `des13`, `des14`, `des15`, `info3`, `h4`, `date4`, `des16`, `des17`, `des18`, `des19`, `info4`, `h5`, `date5`, `des20`, `des21`, `des22`, `des23`, `info5`) VALUES
('q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q'),
('Blog', 'Blog Full Width', 'HOW TO WEAR BRIGHT SHOES', '20, MAR 2017', 'POSTED BY ADMIN', ' LIFESTYLE', 'TRAVEL,', 'FASHION', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', 'TWO WAYS TO WEAR STRAIGHT SHOES', '20, MAR 2017', 'POSTED BY ADMIN', ' LIFESTYLE', 'TRAVEL,', 'FASHION', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', 'MAKING A DENIM STATEMENT', '20, MAR 2017', 'POSTED BY ADMIN', ' LIFESTYLE', 'TRAVEL,', 'FASHION', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', 'STANDARD TEXT POST', '20, MAR 2017', 'POSTED BY ADMIN', ' LIFESTYLE', 'TRAVEL,', 'FASHION', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', 'STANDARD AUDIO POST', '20, MAR 2017', 'POSTED BY ADMIN', ' LIFESTYLE', 'TRAVEL,', 'FASHION', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', 'STANDARD VIDIO POST', '20, MAR 2017', 'POSTED BY ADMIN', ' LIFESTYLE', 'TRAVEL,', 'FASHION', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.');

-- --------------------------------------------------------

--
-- Table structure for table `admin10`
--

CREATE TABLE `admin10` (
  `tit1` text NOT NULL,
  `port` text NOT NULL,
  `port1` text NOT NULL,
  `port2` text NOT NULL,
  `port3` text NOT NULL,
  `port4` text NOT NULL,
  `port5` text NOT NULL,
  `port6` text NOT NULL,
  `port7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin10`
--

INSERT INTO `admin10` (`tit1`, `port`, `port1`, `port2`, `port3`, `port4`, `port5`, `port6`, `port7`) VALUES
('Project Details', 'Behance Website Redesign', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas officiis cumque, harum dicta necessitatibus reprehenderit, delectus molestiae, impedit alias adipisci distinctio voluptas. Tempora modi amet voluptate at provident soluta consequatur.  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quibusdam sed, neque recusandae, est odit. A facere tempore soluta laborum.  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, rem eaque facilis. Sit, voluptas? Error soluta odio, harum tenetur, alias in iure ipsam blanditiis illo, ratione, magnam a minima incidunt! Suscipit facilis, ut maxime libero necessitatibus, rerum aut voluptates aliquam maiores iusto qui temporibus nesciunt, incidunt in quasi. Veniam aliquid ea aperiam, obcaecati voluptate ab, temporibus fugiat at, inventore molestiae quibusdam, modi numquam debitis libero aut eum. Architecto sit quia quidem odit, quasi eveniet reprehenderit rerum dolorem voluptate sed aspernatur numquam enim, adipisci iste optio ea libero la', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores neque vero quasi quisquam atque in, libero ab sunt eius! Nesciunt laboriosam alias corporis sit accusantium voluptate sapiente debitis quos mollitia saepe maxime ipsum facilis dolore voluptas inventore veniam deleniti, eligendi harum aperiam iusto culpa? Delectus dolorum facere quasi iure explicabo?', 'RELATED OTHER PROJECTS', 'Dribbble Redesign', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas recusandae, dignissimos culpa quam debitis quibusdam magni rem quis, cum nesciunt?', 'Dribbble Redesign', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas recusandae, dignissimos culpa quam debitis quibusdam magni rem quis, cum nesciunt?');

-- --------------------------------------------------------

--
-- Table structure for table `admin11`
--

CREATE TABLE `admin11` (
  `tit1` text NOT NULL,
  `des` text NOT NULL,
  `stit1` text NOT NULL,
  `sdes1` text NOT NULL,
  `stit2` text NOT NULL,
  `sdes2` text NOT NULL,
  `stit3` text NOT NULL,
  `sdes3` text NOT NULL,
  `stit4` text NOT NULL,
  `sdes4` text NOT NULL,
  `h1` text NOT NULL,
  `para1` text NOT NULL,
  `date1` text NOT NULL,
  `des1` text NOT NULL,
  `des2` text NOT NULL,
  `des3` text NOT NULL,
  `des4` text NOT NULL,
  `h2` text NOT NULL,
  `para2` text NOT NULL,
  `date2` text NOT NULL,
  `des5` text NOT NULL,
  `des6` text NOT NULL,
  `des7` text NOT NULL,
  `des8` text NOT NULL,
  `h3` text NOT NULL,
  `para3` text NOT NULL,
  `date3` text NOT NULL,
  `des9` text NOT NULL,
  `des10` text NOT NULL,
  `des11` text NOT NULL,
  `des12` text NOT NULL,
  `h4` text NOT NULL,
  `para4` text NOT NULL,
  `date4` text NOT NULL,
  `des13` text NOT NULL,
  `des14` text NOT NULL,
  `des15` text NOT NULL,
  `des16` text NOT NULL,
  `h5` text NOT NULL,
  `para5` text NOT NULL,
  `date5` text NOT NULL,
  `des17` text NOT NULL,
  `des18` text NOT NULL,
  `des19` text NOT NULL,
  `des20` text NOT NULL,
  `h6` text NOT NULL,
  `para6` text NOT NULL,
  `date6` text NOT NULL,
  `des21` text NOT NULL,
  `des22` text NOT NULL,
  `des23` text NOT NULL,
  `des24` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin11`
--

INSERT INTO `admin11` (`tit1`, `des`, `stit1`, `sdes1`, `stit2`, `sdes2`, `stit3`, `sdes3`, `stit4`, `sdes4`, `h1`, `para1`, `date1`, `des1`, `des2`, `des3`, `des4`, `h2`, `para2`, `date2`, `des5`, `des6`, `des7`, `des8`, `h3`, `para3`, `date3`, `des9`, `des10`, `des11`, `des12`, `h4`, `para4`, `date4`, `des13`, `des14`, `des15`, `des16`, `h5`, `para5`, `date5`, `des17`, `des18`, `des19`, `des20`, `h6`, `para6`, `date6`, `des21`, `des22`, `des23`, `des24`) VALUES
('Blog', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, quibusdam.', 'Introducing Swift for Mac', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.', 'Welcome to Themefisher Family', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.', 'Warm welcome from swift', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.', 'Introducing Swift for Mac', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.', 'How To Wear Bright Shoes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', 'LIFESTYLE', 'TRAVEL', 'FASHION', 'Two Ways To Wear Straight Shoes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', 'LIFESTYLE', 'TRAVEL', 'FASHION', 'Making A Denim Statement', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', 'LIFESTYLE', 'TRAVEL', 'FASHION', 'Standard Text Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', 'LIFESTYLE', 'TRAVEL', 'FASHION', 'Standard Audio Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', 'LIFESTYLE', 'TRAVEL', 'FASHION', 'Standard vidio Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', 'LIFESTYLE', 'TRAVEL', 'FASHION');

-- --------------------------------------------------------

--
-- Table structure for table `admin12`
--

CREATE TABLE `admin12` (
  `tit1` text NOT NULL,
  `des` text NOT NULL,
  `stit1` text NOT NULL,
  `sdes1` text NOT NULL,
  `stit2` text NOT NULL,
  `sdes2` text NOT NULL,
  `stit3` text NOT NULL,
  `sdes3` text NOT NULL,
  `stit4` text NOT NULL,
  `sdes4` text NOT NULL,
  `h1` text NOT NULL,
  `para1` text NOT NULL,
  `date1` text NOT NULL,
  `des1` text NOT NULL,
  `des2` text NOT NULL,
  `des3` text NOT NULL,
  `des4` text NOT NULL,
  `h2` text NOT NULL,
  `para2` text NOT NULL,
  `date2` text NOT NULL,
  `des5` text NOT NULL,
  `des6` text NOT NULL,
  `des7` text NOT NULL,
  `des8` text NOT NULL,
  `h3` text NOT NULL,
  `para3` text NOT NULL,
  `date3` text NOT NULL,
  `des9` text NOT NULL,
  `des10` text NOT NULL,
  `des11` text NOT NULL,
  `des12` text NOT NULL,
  `h4` text NOT NULL,
  `para4` text NOT NULL,
  `date4` text NOT NULL,
  `des13` text NOT NULL,
  `des14` text NOT NULL,
  `des15` text NOT NULL,
  `des16` text NOT NULL,
  `h5` text NOT NULL,
  `para5` text NOT NULL,
  `date5` text NOT NULL,
  `des17` text NOT NULL,
  `des18` text NOT NULL,
  `des19` text NOT NULL,
  `des20` text NOT NULL,
  `h6` text NOT NULL,
  `para6` text NOT NULL,
  `date6` text NOT NULL,
  `des21` text NOT NULL,
  `des22` text NOT NULL,
  `des23` text NOT NULL,
  `des24` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin12`
--

INSERT INTO `admin12` (`tit1`, `des`, `stit1`, `sdes1`, `stit2`, `sdes2`, `stit3`, `sdes3`, `stit4`, `sdes4`, `h1`, `para1`, `date1`, `des1`, `des2`, `des3`, `des4`, `h2`, `para2`, `date2`, `des5`, `des6`, `des7`, `des8`, `h3`, `para3`, `date3`, `des9`, `des10`, `des11`, `des12`, `h4`, `para4`, `date4`, `des13`, `des14`, `des15`, `des16`, `h5`, `para5`, `date5`, `des17`, `des18`, `des19`, `des20`, `h6`, `para6`, `date6`, `des21`, `des22`, `des23`, `des24`) VALUES
('Blog', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, quibusdam.', 'Introducing Swift for Mac', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.', 'Welcome to Themefisher Family', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.', 'Warm welcome from swift', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.', 'Introducing Swift for Mac', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.', 'How To Wear Bright Shoes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', 'LIFESTYLE', 'TRAVEL', 'FASHION', 'Two Ways To Wear Straight Shoes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', 'LIFESTYLE', 'TRAVEL', 'FASHION', 'Making A Denim Statement', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', 'LIFESTYLE', 'TRAVEL', 'FASHION', 'Standard Text Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', 'LIFESTYLE', 'TRAVEL', 'FASHION', 'Standard Audio Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', 'LIFESTYLE', 'TRAVEL', 'FASHION', 'Standard vidio Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere.', '20, MAR 2017', 'POSTED BY ADMIN', 'LIFESTYLE', 'TRAVEL', 'FASHION');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `title` text NOT NULL,
  `des` text NOT NULL,
  `about` text NOT NULL,
  `des1` text NOT NULL,
  `des2` text NOT NULL,
  `idea` text NOT NULL,
  `idea1` text NOT NULL,
  `idea2` text NOT NULL,
  `idea3` text NOT NULL,
  `service1` text NOT NULL,
  `service2` text NOT NULL,
  `service3` text NOT NULL,
  `service4` text NOT NULL,
  `service5` text NOT NULL,
  `service6` text NOT NULL,
  `service7` text NOT NULL,
  `service8` text NOT NULL,
  `service9` text NOT NULL,
  `exp1` text NOT NULL,
  `exp2` text NOT NULL,
  `fun` text NOT NULL,
  `fun1` text NOT NULL,
  `view1` text NOT NULL,
  `view2` text NOT NULL,
  `view3` text,
  `view4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`title`, `des`, `about`, `des1`, `des2`, `idea`, `idea1`, `idea2`, `idea3`, `service1`, `service2`, `service3`, `service4`, `service5`, `service6`, `service7`, `service8`, `service9`, `exp1`, `exp2`, `fun`, `fun1`, `view1`, `view2`, `view3`, `view4`) VALUES
('A DIGITAL MARKETING  & DESIGN AGENCY', 'We love the Web and the work we do.We work closely with our clients to deliver  the best possible solutions for their needs', 'ABOUT US', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id', 'WE BELIEVE IN GREAT IDEAS', 'Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.', 'Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.', 'Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,  there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', 'We design delightful digital experiences.', 'Read more about what we do and our philosophy of design. Judge for yourself The work and results  weâ€™ve achieved for other clients, and meet our highly experienced Team who just love to design.', 'FUN FACTS ABOUT US', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,  there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics', 'This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd.', 'This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd.', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,  there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics', 'This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
