-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2016 at 06:56 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oceanlifescience`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('bee54fb499217afeb684298ca95aedc1f981370c', '220.181.108.142', 1478126190, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383132363139303b),
('986f10025aacbb4cfca4a4a72b12192d6701c13d', '178.17.174.32', 1478125023, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383132353032333b),
('5062b8b09d6aebb1199322a37440a4526ffa76d9', '180.76.15.161', 1478121055, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383132313035353b),
('c7c0a449c2d316563389e07b89ed4c330252ac6b', '40.77.167.17', 1478183381, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383138333338313b),
('368132b225eed67b8e71dcba2b535b2284a4eb43', '220.181.108.107', 1478179532, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383137393533323b),
('b3b69cd97057cf1b980f3434189d6f6402e34a43', '223.176.185.18', 1478176689, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383137363638393b),
('63277e19a252695666111b6a3c0f027f15b57a33', '157.55.39.194', 1478176320, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383137363332303b),
('d6e6f1c0678a1a31ad2a7d24f99cb40c3a8b178c', '223.176.167.37', 1478175935, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383137353933353b),
('54b5a49c253e71d7e327fb5772a56d0bd8243dd9', '40.77.167.17', 1478171245, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383137313234353b),
('f0e4d407dce7fb86d489ebc2c3718295fd712553', '40.77.167.17', 1478171245, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383137313234353b),
('1d8dc814a69388312d11c197f0e10437fcafc0ec', '40.77.167.69', 1478171241, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383137313234313b),
('1c40dfd20facb68e3e146c5526b53478bc24e6f1', '40.77.167.69', 1478171241, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383137313234313b),
('36145b7229389c39602b2ac1865e5c464fcdb501', '157.55.39.194', 1478171235, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383137313233353b),
('aea68290d22f14fe44c3b48e65e508852d75b96d', '155.133.82.63', 1478167598, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383136373539373b),
('51fa26910af5d4b4f0c51c2fdc5d35f9c43a8f7c', '123.125.71.109', 1478147134, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383134373133343b),
('063bcea0513b0567ff8e1df971fe3dc298d04b9c', '66.102.6.148', 1478146928, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383134363932383b),
('48040b07a87a09bd84e27d4aaffd177ee3fc0286', '66.102.6.152', 1478146927, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383134363932373b),
('dd9495b732c25c36462294771f60fc8052f172c1', '106.120.173.87', 1478132959, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383133323935393b),
('0c2ac51ad9f8d3f476d9498998f920ad22215658', '142.54.183.124', 1478127424, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383132373432343b),
('014799b7082dfff4bdcf935a2e9d64d65cc98c7a', '::1', 1478196083, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383139363038333b),
('6ca3eac04d92d14c2b9605003a1dc7d9e1e2f375', '::1', 1478196456, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383139363435363b),
('f2cd8a76cb2017133037c2d05e4acaf5ef811c41', '::1', 1478197436, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383139373433363b),
('9b9c05b0bc9a33989bd9dd0bfceb3eef48045ed3', '::1', 1478197780, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383139373738303b),
('8f90998b910e79ad955df0835dfe5e92b5f9fd35', '::1', 1478198192, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383139383139323b),
('1927b4b9168fdfbab4e74b38454aa14b85b9ba8f', '::1', 1478198555, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383139383535353b757365726e616d657c733a31353a2261646d696e40676d61696c2e636f6d223b70617373776f72647c733a34303a2262326239313463616665316266623839663530303863613264613761316135363239313561626661223b),
('c93601c1fde40f3b1ea8a99780c75719095d3e62', '::1', 1478198864, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383139383836343b757365726e616d657c733a31353a2261646d696e40676d61696c2e636f6d223b70617373776f72647c733a34303a2262326239313463616665316266623839663530303863613264613761316135363239313561626661223b),
('c83810b52c61fc45f2fd8b410b1b67b704e15035', '::1', 1478199166, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383139393136363b757365726e616d657c733a31353a2261646d696e40676d61696c2e636f6d223b70617373776f72647c733a34303a2262326239313463616665316266623839663530303863613264613761316135363239313561626661223b),
('c12680e56569aaedb29c1a6ead32149940c7d9fe', '::1', 1478199545, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383139393534353b757365726e616d657c733a31353a2261646d696e40676d61696c2e636f6d223b70617373776f72647c733a34303a2262326239313463616665316266623839663530303863613264613761316135363239313561626661223b),
('ef5042ccd5e3c4927f88663e1b7e91c8d7678140', '::1', 1478199859, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383139393835393b757365726e616d657c733a31353a2261646d696e40676d61696c2e636f6d223b70617373776f72647c733a34303a2262326239313463616665316266623839663530303863613264613761316135363239313561626661223b),
('a414bc078a166f2ca1eddee8b75c77e69f2dac1c', '::1', 1478200184, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383230303138343b757365726e616d657c733a31353a2261646d696e40676d61696c2e636f6d223b70617373776f72647c733a34303a2262326239313463616665316266623839663530303863613264613761316135363239313561626661223b),
('e6727f23f4fc508cca1f2b0f44dec04420470de4', '::1', 1478200315, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383230303138343b757365726e616d657c733a31353a2261646d696e40676d61696c2e636f6d223b70617373776f72647c733a34303a2262326239313463616665316266623839663530303863613264613761316135363239313561626661223b),
('4500918efc0f5f8a03052ca3472c7d053d6519ce', '::1', 1478965861, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383936353836313b),
('2f03f1c7eb69c1609f5defa7c8b9c6e3f550ef02', '::1', 1478965903, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383936353836313b),
('518de11b30499327da9cca808ca190b01f1111b0', '::1', 1478974421, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437383937343333313b);

-- --------------------------------------------------------

--
-- Table structure for table `r_about`
--

CREATE TABLE `r_about` (
  `id` int(11) NOT NULL,
  `menuName` varchar(30) NOT NULL,
  `title` varchar(75) NOT NULL,
  `description` longtext NOT NULL,
  `slug` varchar(100) NOT NULL,
  `excludetoabout` enum('yes','NULL') DEFAULT NULL,
  `addtofotter` enum('yes','NULL') DEFAULT 'NULL'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_about`
--

INSERT INTO `r_about` (`id`, `menuName`, `title`, `description`, `slug`, `excludetoabout`, `addtofotter`) VALUES
(5, 'About Us', 'About Us', '<div class="section section-contact" style="margin-top: 20px;">\n            <div class="container">\n                <div class="row">\n                    <div class="col-sm-12">\n                        <div class="mb-3">\n                            <h3 style="text-transform: uppercase;">Infrastructure And Facilities</h3>\n                        </div>\n\n\n\n\n\n                        <p class="text-justify">The company has built and is operating manufacturing facilities that matches the latest systems and techniques in the industry, having units in Agra and New Delhi. The Company also has an associate unit in Guangzhou PRC. Our team strictly follows the quality control standards of ISO 9001:2008 series while designing, developing, manufacturing and delivering the scientific instruments. The manufacturing unit of OCEAN is made with complete state-of-the-art equipments and technologies for producing high quality instruments. </p>\n\n\n                        <p class="text-justify">We have company owned sales offices in Agra and New Delhi (India). We also have the post sales technical backup system in four places in India and are in the process of further developing them to assist the customers for post sales services.</p>\n                    </div>\n\n                </div>\n            </div>\n        </div>\n\n        <div class="section section-contact" style="margin-top: 20px;">\n            <div class="container">\n                <div class="row">\n                    <div class="col-sm-12">\n                        <div class="mb-3">\n                            <h3 style="text-transform: uppercase;">Professional Teams</h3>\n                        </div>\n                        <p class="text-justify">The continuous cooperation and support of our professional team has helped us to understand and deliver state of the art scientific instruments right from basic lab equipment to most sophisticated instruments for research labs. We believe that our tremendous success belongs to our expert engineers, managers, co-workers and other significant team members who have put their best efforts in the growth of the organization. It is their dedication and commitment that makes us the most trusted scientific instruments brand among our all satisfied clients. </p>\n                    </div>\n\n                </div>\n            </div>\n        </div>\n\n        <div class="section section-contact" style="margin-top: 20px;">\n            <div class="container">\n                <div class="row">\n                    <div class="col-sm-12">\n                        <div class="mb-3">\n                            <h3 style="text-transform: uppercase;">Forte </h3>\n                        </div>\n                        <p class="text-justify">We strive hard to cater to our clients with the best product range and services while meeting international standards. Our aim is to meet the overwhelming demand of the scientific community and provide them with world class quality scientific instruments along with the best after sale support.  </p>\n                    </div>\n\n                </div>\n            </div>\n        </div>\n\n        <div class="section section-contact" style="margin-top: 20px;">\n            <div class="container">\n                <div class="row">\n\n\n\n                    <div class="col-sm-4">\n                        <div class="mb-3">\n                            <h3>Company’s Outlook </h3>\n                        </div>\n                        <p class="text-justify">Our commitment to quality is unflinching, our hunger for growth is deep-rooted and our capacity for details is amazing. Over the decade, we have demonstrated a rare resilience and fortitude. We are determined to improve productivity and focus continuously on innovation and up-gradation of our products and people. We are determined to serve our fraternity and achieve “complete customer satisfaction through business ethics”. Besides working very closely with our customers in research and development fields and providing end to end customized solutions we also providing high quality standard equipments from our comprehensive product range. </p>\n                    </div>\n                    <div class="col-sm-4">\n                        <div class="mb-3">\n                            <h3>Quality Standards </h3>\n                        </div>\n                        <p class="text-justify">At OCEAN group, we design and develop the a complete range of scientific and laboratory instruments with the highest quality standards. We constantly update technologies and methodologies to ensure reliability and consistency at each level of instruments production. Our transparent auditing system is supported by Duns & Bradstreet International, as we want to deliver the world class quality instruments to all our national and international clients. We feel proud that our entire product range has brought satisfactory results for the corporate and public sector clients.</p>\n\n                    </div>\n                    <div class="col-sm-4">\n                        <div class="mb-3">\n                            <h3 style="text-transform: uppercase;">Quality Standards </h3>\n                        </div>\n                        <p class="text-justify">Our wide array of products are categorized into Test Chambers, Laboratory Equipments, Sterilizers, Clean Room Equipments, Laboratory Water Solutions And Measuring Meters. All our products ensure accuracy and conformity for significant experiments. </p>\n\n                    </div>\n\n                </div>\n\n            </div>\n        </div>', 'company', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `r_category`
--

CREATE TABLE `r_category` (
  `id` int(11) NOT NULL,
  `subCategory` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `status` enum('active','block') NOT NULL,
  `addtohome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_category`
--

INSERT INTO `r_category` (`id`, `subCategory`, `name`, `slug`, `status`, `addtohome`) VALUES
(1, 0, 'Tablets', 'tablets', 'block', 'yes'),
(2, 0, 'Capsules', 'capsules', 'block', 'yes'),
(3, 0, 'Soft Gel Capsules', 'soft-gel-capsules', 'block', ''),
(4, 1, 'Lexim-100 DT', 'lexim-100-dt', 'block', ''),
(5, 1, 'Lexim-200', 'lexim-200', 'block', ''),
(6, 0, 'Cooling Equipments', 'cooling-equipments', 'active', 'yes'),
(7, 0, 'Shaking & Stirring Equipments', 'shaking-stirring-equipments', 'active', 'yes'),
(8, 0, 'Sterilization Equipments', 'sterilization-equipments', 'active', 'yes'),
(9, 0, 'Clean Air Equipments', 'clean-air-equipments', 'active', 'yes'),
(10, 0, 'Heating Equipments', 'heating-equipments', 'active', 'yes'),
(11, 0, 'hi kausar', 'hi-kausar', 'block', '');

-- --------------------------------------------------------

--
-- Table structure for table `r_certificate`
--

CREATE TABLE `r_certificate` (
  `id` int(11) NOT NULL,
  `certificateName` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `certificateImage` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_certificate`
--

INSERT INTO `r_certificate` (`id`, `certificateName`, `description`, `certificateImage`, `status`) VALUES
(2, 'PGIMER112=', 'Chandigarh112--', 'cert_1481569261.png', 1),
(3, 'ICAR – NRCC', 'Hisar', 'cert_1481566900.png', 1),
(4, 'Xyz', 'ABC', 'cert_1481566912.png', 1),
(5, 'Test Certificate', 'werty', 'cert_1481570843.png', 1),
(6, 'ICAR – NRCC', 'fghjk', 'cert_1481570947.png', 1),
(7, 'ICAR – NRCC', 'fghjk', 'cert_1481571141.png', 1),
(8, 'ICAR – NRCC', 'fghjk', 'cert_1481571145.png', 1),
(9, 'PGIMER112=', 'ghj', 'cert_1481571157.png', 1),
(10, 'ICAR – NRCC', 'ghjk', 'cert_1481571239.png', 1),
(11, 'ICAR – NRCC', 'as', 'cert_1481571338.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `r_gallery`
--

CREATE TABLE `r_gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_gallery`
--

INSERT INTO `r_gallery` (`id`, `image`) VALUES
(1, '06b.jpg'),
(2, '07.jpg'),
(3, '07b.jpg'),
(4, '08.jpg'),
(5, '08b.jpg'),
(6, '09.jpg'),
(7, '09b.jpg'),
(8, '10.jpg'),
(9, '10b.jpg'),
(10, '11.jpg'),
(11, '11b.jpg'),
(12, '12.jpg'),
(13, '12b.jpg'),
(14, '13.jpg'),
(15, '13b.jpg'),
(16, '14.jpg'),
(17, '14b.jpg'),
(18, '15.jpg'),
(19, '15b.jpg'),
(20, '16.jpg'),
(21, '16b.jpg'),
(22, '171.jpg'),
(23, '17b.jpg'),
(24, '181.jpg'),
(25, '18b.jpg'),
(26, '19.jpg'),
(27, '19b.jpg'),
(28, '20.jpg'),
(29, '20b.jpg'),
(30, '21.jpg'),
(31, '21b.jpg'),
(32, '22.jpg'),
(33, '22b.jpg'),
(34, '23.jpg'),
(35, '23b.jpg'),
(36, '24.jpg'),
(37, '24b.jpg'),
(38, '25.jpg'),
(39, '25b.jpg'),
(40, '26.jpg'),
(41, '26b.jpg'),
(42, '01.jpg'),
(43, '01b.jpg'),
(44, '02.jpg'),
(45, '02b.jpg'),
(46, '03.jpg'),
(47, '03b.jpg'),
(48, '04.jpg'),
(49, '04b.jpg'),
(50, '05.jpg'),
(51, '05b.jpg'),
(52, '06.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `r_product`
--

CREATE TABLE `r_product` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `price` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `specification` text NOT NULL,
  `product1` varchar(75) NOT NULL,
  `product2` varchar(755) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `catId` int(11) NOT NULL,
  `mainCatID` int(11) NOT NULL,
  `onHomePage` enum('0','1') NOT NULL COMMENT '0 for no 1 for yes',
  `slug` varchar(100) NOT NULL,
  `addtohome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_product`
--

INSERT INTO `r_product` (`id`, `name`, `price`, `description`, `specification`, `product1`, `product2`, `image`, `catId`, `mainCatID`, `onHomePage`, `slug`, `addtohome`) VALUES
(2, 'test', '87987', '<p>Rafi Ahmad</p>', '', '', '', 'test.png', 0, 1, '0', 'test', ''),
(3, 'dfsadfsad', '9978', '<p>dsafasdfsad</p>', '', '', '', 'dfsadfsad.jpg', 0, 1, '0', 'dfsadfsad', ''),
(4, 'Rafi Ahmad', '90000', '<p>sdafasdf</p>', '', '', '', 'rafi-ahmad.jpg', 0, 2, '0', 'rafi-ahmad', ''),
(5, 'B.O.D Incubator', '999.00', 'B.O.D Incubators are designed fabricated &amp; tested to suit various \r\napplications in growing field of Medical Agricultural, Research \r\nLaboratories of Hospitals. Suitable to work on 220/230V AC supply', '', '', '', 'b-o-d-incubator.jpg', 0, 6, '0', 'b-o-d-incubator', ''),
(6, 'Ice Flaking Machine', '500', '<p>\r\nB.O.D Incubators are designed fabricated &amp; tested to suit various \r\napplications in growing field of Medical Agricultural, Research \r\nLaboratories of Hospitals. Suitable to work on 220/230V AC supply\r\n\r\n<br></p>', '', '', '', 'ice-flaking-machine.jpg', 0, 6, '0', 'ice-flaking-machine', ''),
(7, 'Plant Growth Chambers', '333', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce \r\nconsectetur suscipit odio, sit amet congue sapien rutrum nec. Ut \r\nlaoreet, felis a molestie auctor, justo dui lobortis dui, ut aliquam \r\nmagna tortor faucibus est. Phasellus laoreet quis nisi vitae ultrices. \r\nVestibulum pellentesque nisi tortor, in hendrerit ipsum efficitur \r\nblandit. Vivamus eu dolor non nibh congue mollis quis eu ligula. \r\nCurabitur eget sollicitudin nisi, nec venenatis risus. Nulla feugiat \r\nmolestie sapien in congue. Quisque varius urna enim, vitae vulputate \r\njusto tristique id. Aliquam non interdum lacus. Pellentesque facilisis \r\nnisi nec leo vulputate, et varius dui gravida. Donec interdum augue \r\nvitae ultrices rhoncus. Phasellus at nisl quam. Vestibulum sollicitudin \r\naccumsan mi non maximus. Integer posuere tristique volutpat. Mauris \r\npellentesque tellus at urna scelerisque, eget ullamcorper nisl eleifend.\r\n\r\n\r\n<br></p>', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce \r\nconsectetur suscipit odio, sit amet congue sapien rutrum nec. Ut \r\nlaoreet, felis a molestie auctor, justo dui lobortis dui, ut aliquam \r\nmagna tortor faucibus est. Phasellus laoreet quis nisi vitae ultrices. \r\nVestibulum pellentesque nisi tortor, in hendrerit ipsum efficitur \r\nblandit. Vivamus eu dolor non nibh congue mollis quis eu ligula. \r\nCurabitur eget sollicitudin nisi, nec venenatis risus. Nulla feugiat \r\nmolestie sapien in congue. Quisque varius urna enim, vitae vulputate \r\njusto tristique id. Aliquam non interdum lacus. Pellentesque facilisis \r\nnisi nec leo vulputate, et varius dui gravida. Donec interdum augue \r\nvitae ultrices rhoncus. Phasellus at nisl quam. Vestibulum sollicitudin \r\naccumsan mi non maximus. Integer posuere tristique volutpat. Mauris \r\npellentesque tellus at urna scelerisque, eget ullamcorper nisl eleifend.\r\n\r\n\r\n<br></p>', '', '', 'plant-growth-chambers7.jpg', 0, 8, '0', 'plant-growth-chambers', ''),
(8, 'Plant Growth Chambers', '300', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce \r\nconsectetur suscipit odio, sit amet congue sapien rutrum nec. Ut \r\nlaoreet, felis a molestie auctor, justo dui lobortis dui, ut aliquam \r\nmagna tortor faucibus est. Phasellus laoreet quis nisi vitae ultrices. \r\nVestibulum pellentesque nisi tortor, in hendrerit ipsum efficitur \r\nblandit. Vivamus eu dolor non nibh congue mollis quis eu ligula. \r\nCurabitur eget sollicitudin nisi, nec venenatis risus. Nulla feugiat \r\nmolestie sapien in congue. Quisque varius urna enim, vitae vulputate \r\njusto tristique id. Aliquam non interdum lacus. Pellentesque facilisis \r\nnisi nec leo vulputate, et varius dui gravida. Donec interdum augue \r\nvitae ultrices rhoncus. Phasellus at nisl quam. Vestibulum sollicitudin \r\naccumsan mi non maximus. Integer posuere tristique volutpat. Mauris \r\npellentesque tellus at urna scelerisque, eget ullamcorper nisl eleifend.\r\n\r\n\r\n<br></p>', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce \r\nconsectetur suscipit odio, sit amet congue sapien rutrum nec. Ut \r\nlaoreet, felis a molestie auctor, justo dui lobortis dui, ut aliquam \r\nmagna tortor faucibus est. Phasellus laoreet quis nisi vitae ultrices. \r\nVestibulum pellentesque nisi tortor, in hendrerit ipsum efficitur \r\nblandit. Vivamus eu dolor non nibh congue mollis quis eu ligula. \r\nCurabitur eget sollicitudin nisi, nec venenatis risus. Nulla feugiat \r\nmolestie sapien in congue. Quisque varius urna enim, vitae vulputate \r\njusto tristique id. Aliquam non interdum lacus. Pellentesque facilisis \r\nnisi nec leo vulputate, et varius dui gravida. Donec interdum augue \r\nvitae ultrices rhoncus. Phasellus at nisl quam. Vestibulum sollicitudin \r\naccumsan mi non maximus. Integer posuere tristique volutpat. Mauris \r\npellentesque tellus at urna scelerisque, eget ullamcorper nisl eleifend.\r\n\r\n\r\n<br></p>', '', '', 'plant-growth-chambers-0.jpg', 0, 10, '0', 'plant-growth-chambers-0', ''),
(9, 'kausar', '500', '<p>doller ipsum sit \r\ndoller ipsum sit&nbsp;\r\n\r\n\r\ndoller ipsum sit&nbsp;\r\n\r\n\r\ndoller ipsum sit&nbsp;\r\n\r\n\r\ndoller ipsum sit&nbsp;\r\n\r\n\r\ndoller ipsum sit <br></p><p>\r\ndoller ipsum sit \r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit&nbsp;</p><p>\r\ndoller ipsum sit \r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit&nbsp;</p><p>\r\ndoller ipsum sit \r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit\r\n\r\n<br></p>', '<p>\r\n<p>doller ipsum sit \r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit <br></p><p>\r\ndoller ipsum sit \r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit </p><p>\r\ndoller ipsum sit \r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit </p><p>\r\ndoller ipsum sit \r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit \r\n\r\n\r\ndoller ipsum sit\r\n\r\n</p>\r\n\r\n<br></p>', '', '', 'kausar.jpg', 0, 7, '0', 'kausar', ''),
(10, 'mobile', '1000', '<p>\r\nWith over a decade of industry experience in manufacturing range of \r\nscientific laboratory equipments, we have established ourselves with the\r\n name of OCEAN group. to provide highest quality equipments for various \r\napplications. We represent latest and directive technologies and \r\nincorporate an up to date know how of modern techniques, through our \r\npartners worldwide. \r\n\r\n<br></p>', '<p>\r\nWith over a decade of industry experience in manufacturing range of \r\nscientific laboratory equipments, we have established ourselves with the\r\n name of OCEAN group. to provide highest quality equipments for various \r\napplications. We represent latest and directive technologies and \r\nincorporate an up to date know how of modern techniques, through our \r\npartners worldwide. \r\n\r\n<br></p>', '', '', 'mobile.jpg', 0, 8, '0', 'mobile', ''),
(11, 'Alfanjo Mango', '845', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '', '', 'alfanjo-mango.jpg', 0, 7, '0', 'alfanjo-mango', ''),
(12, 'butter sctch', '200', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '', '', 'butter-sctch.jpg', 0, 8, '0', 'butter-sctch', ''),
(13, 'fan', '2000', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '', '', 'fan.jpg', 0, 9, '0', 'fan', ''),
(14, 'A C', '20000', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '', '', 'a-c.jpg', 0, 9, '0', 'a-c', ''),
(15, 'cooler', '1500', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '', '', 'cooler.jpg', 0, 9, '0', 'cooler', ''),
(16, 'geezer', '200', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '', '', 'geezer.jpg', 0, 10, '0', 'geezer', ''),
(17, 'heater', '1000', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '', '', 'heater.jpg', 0, 10, '0', 'heater', ''),
(18, 'blower', '400', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '<p>\r\nWe have a technology transfer agreement with Consultancy Gmbh Germany, a\r\n renowned technical consultancy company, to aid the product designing \r\nand development of our \r\n\r\n<br></p>', '', '', 'blower.jpg', 0, 10, '0', 'blower', ''),
(19, 'cdscsd', '23', '<p>wwertyuio</p>', '<p>swsdfghjk</p>', '', '', 'cdscsd.jpg', 0, 3, '0', 'cdscsd', '');

-- --------------------------------------------------------

--
-- Table structure for table `r_users`
--

CREATE TABLE `r_users` (
  `id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `lastLogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_users`
--

INSERT INTO `r_users` (`id`, `username`, `password`, `lastLogin`) VALUES
(1, 'admin@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '2016-12-13 18:26:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `r_about`
--
ALTER TABLE `r_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_category`
--
ALTER TABLE `r_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_certificate`
--
ALTER TABLE `r_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_gallery`
--
ALTER TABLE `r_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_product`
--
ALTER TABLE `r_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_users`
--
ALTER TABLE `r_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `r_about`
--
ALTER TABLE `r_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `r_category`
--
ALTER TABLE `r_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `r_certificate`
--
ALTER TABLE `r_certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `r_gallery`
--
ALTER TABLE `r_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `r_product`
--
ALTER TABLE `r_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
