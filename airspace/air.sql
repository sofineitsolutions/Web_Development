-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 07:37 AM
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
-- Table structure for table `airspace`
--

CREATE TABLE `airspace` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `sub` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
