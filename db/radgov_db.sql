-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2020 at 05:47 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radgov_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_profile1` text NOT NULL,
  `company_image1` varchar(300) NOT NULL,
  `company_profile2` text NOT NULL,
  `company_image2` varchar(300) NOT NULL,
  `vision` text NOT NULL,
  `vision_image` varchar(300) NOT NULL,
  `mission` text NOT NULL,
  `mission_image` varchar(300) NOT NULL,
  `value` text NOT NULL,
  `value_image` varchar(300) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `company_profile1`, `company_image1`, `company_profile2`, `company_image2`, `vision`, `vision_image`, `mission`, `mission_image`, `value`, `value_image`, `created_date`, `modified_date`) VALUES
(1, '<p>RadGov.Inc. headquartered in Fort Lauderdale, Florida was founded in 2005. RadGov was created exclusively to focus on Federal agencies and to provide Staff augmentation and IT services to private clients. As an integrated IT solutions Company, we have proven our experience and expertise in Ecommerce, IT consulting Software development and Staff augmentation (IT & Non –IT). We leverage our capabilities to support our clients through dedicated, organized and client-focused teams with no compromise on quality.</p>', '5ebd051c51cae_71359.png', '<p>Over the years RADGOV has sustained an impressive growth rate in both capabilities and profitability, and is now positioned to be one of the major contributors in every sector. At RADGOV, we continually undergo transformation and reorientation in response to the rapidly evolving needs of our esteemed clients. RADGOV has a spread of services on offer packaged with technical excellence and quality to facilitate effective IT and staffing solutions.</p>', '5ebd05371a4d4_03785.png', '<p data-aos=\"fade-up\">To be an organisation that is the provider of the highest level of satisfaction to customers, ambassadors and co-workers.</p>', '5ebd057936209_20357.png', '<p data-aos=\"fade-up\">To establish strategic partnerships and offer competitive advantage to our clients in the areas of Technology/ Process Consulting, Custom Software Development, QA / Testing, Systems Integration, Project Management, Network and Infrastructure Management and Product Engineering / GIS Services, while fulfilling our employees’ aspirations by virtue of delivery of our world-class and cost-effective services, and to create a family-like environment for our employees, while preserving our core value system.</p>', '5ebd05911e7ab_65308.png', '<li data-aos=\"fade-up\">Honesty, ethics and integrity guide our behavior and decisions.</li><li data-aos=\"fade-up\">Respect the dignity and worth of every individual and act accordingly.</li><li data-aos=\"fade-up\">Our commitment to quality is uncompromising. We recognize that it is not our own, but our customers’ perceptions of quality that are most important.</li><li data-aos=\"fade-up\">“If it is ethical and enhances customer satisfaction, do it.”</li>', '5ebd068045156_79835.png', '2020-05-14 14:22:10', '2020-06-23 20:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`admin_id`, `user_name`, `password`, `first_name`, `last_name`, `email`, `phone`, `address`, `role_id`, `status`) VALUES
(1, 'admin@radgov.com', '0e7517141fb53f21ee439b355b5a1d0a', 'Radgov', 'Admin', 'admin@radgov.com', '9751799504', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

DROP TABLE IF EXISTS `certifications`;
CREATE TABLE IF NOT EXISTS `certifications` (
  `certification_id` int(11) NOT NULL AUTO_INCREMENT,
  `certification_images` text NOT NULL,
  `text` text NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`certification_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`certification_id`, `certification_images`, `text`, `created_date`, `modified_date`) VALUES
(1, 'SBA-8m.jpg,WBENC.jpg,GSA.png,FRMBC.jpg,SFMSDC.jpg', 'The team of RADgov believes that the enhancing quality and expanding intellect is the key to achieving success; the certifications speak for our quality and intellect.', '2020-04-28 11:50:37', '2020-06-20 12:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_type_id` int(11) NOT NULL,
  `redirection_link` varchar(255) NOT NULL,
  `client_images` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_type_id`, `redirection_link`, `client_images`, `status`, `created_date`, `modified_date`) VALUES
(1, 1, 'current-engagement', 'Acet.jpg,Booz-Allen-Hamilton.jpg,DRC.jpg,Federal-Reserve-Bank-Of-Dal.jpg,The-Centech-Group.jpg,USDA.jpg', 1, '2020-04-28 17:54:59', '2020-06-23 10:14:36'),
(2, 2, 'current-engagement#stateclient', 'county-of-martin.jpg,minneapolis.jpg,state-of-west-virginia.jpg,the-seal-of-the-state-of-washington.jpg,minneapolis.jpg', 1, '2020-05-14 12:13:09', '2020-06-23 10:14:20'),
(3, 3, 'clients', 'johnson.jpg,sanofi.jpg,biogen.jpg,novartis.jpg,ge_healthcare.jpg,ge_aviation.jpg,sap.jpg,sony.jpg,harris.jpg,arkema.jpg,ge_capital.jpg,kimberly.jpg,berkshire.jpg,phar.jpg,highmark.jpg', 1, '2020-05-14 12:15:54', '2020-07-08 19:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `client_agencies`
--

DROP TABLE IF EXISTS `client_agencies`;
CREATE TABLE IF NOT EXISTS `client_agencies` (
  `agency_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_sub_module_id` int(11) NOT NULL,
  `agency_type` int(11) NOT NULL,
  `agency_name` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=190 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_agencies`
--

INSERT INTO `client_agencies` (`agency_id`, `client_sub_module_id`, `agency_type`, `agency_name`, `title`, `image`, `status`, `created_date`, `modified_date`) VALUES
(1, 1, 1, 'L3 Technologies', 'Temporary Staffing Services', '5ec6a3b5470b1_85312.jpg', 1, '2020-05-16 11:26:52', '2020-05-21 21:22:23'),
(2, 1, 1, 'Harris Corporation', 'Temporary Staffing Services', '5ec6a411cc3f5_23571.jpg', 1, '2020-05-16 11:29:55', '2020-05-21 21:23:55'),
(3, 1, 1, 'American Red Cross', 'Staffing Services Sub-Vendor Agreement', '5ec6a43859562_82795.jpg', 1, '2020-05-16 11:30:32', '2020-05-21 21:24:34'),
(4, 1, 2, 'Eastern Municipal Water District', 'Various- On call Computer Services', '5ec6a96e5b244_17253.jpg', 1, '2020-05-16 11:32:23', '2020-05-21 21:46:47'),
(5, 1, 2, 'CA Department of General Services', 'Master Services Agreement for Information Technology (IT) Consulting Services', '5ec6a9e6cc8fc_47368.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 21:48:48'),
(7, 1, 2, 'Department of Technology and Information', 'IT Project Staffing', '5ec6aaba6777b_93186.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 21:52:19'),
(8, 1, 2, 'Miami Dade County Public Schools', 'Software Consultant Contract', '5ec6ab5d36b9c_13458.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 21:55:02'),
(9, 1, 2, 'State of Florida', 'State Term Contract IT Consulting Services', '5ec6accdad56a_89076.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 22:01:11'),
(10, 1, 2, 'Miami Dade County', 'IT Consultant Services Pre- qualification', '5ec6ac82f291d_64519.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 21:59:56'),
(11, 1, 2, 'Department of Social & Rehabilitation Services, State of Kansas', 'Information Technology Services', '5ec6ad7768c8b_14728.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 22:04:00'),
(12, 1, 2, 'Hennepin County Minneapoliss', 'IT Consulting Services', '5ec6ae74ee88e_71429.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 22:08:14'),
(13, 1, 2, 'State of Mississippi', 'Mississippi Department of Information Technology Services', '5ec6ae905c4ed_25091.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 22:08:42'),
(14, 1, 2, 'State of North Carolina, Office of Information Technology Services', 'Technical Services', '5ec6af142310c_78039.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 22:10:53'),
(15, 1, 2, 'Pennsylvania State System of Higher Education', 'IT Consulting and Support Services', '5ec6b00415ba4_03964.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 22:14:53'),
(16, 1, 2, 'State of South Carolina', 'IT Temporary Staff Augmentation Services', '5ec6b6432bbdb_87460.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 22:41:32'),
(17, 1, 2, 'State of Washington, Contracts Division', 'Sound Transit IT On-Call Roster', '5ec6b6ec465da_91527.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 22:44:22'),
(18, 1, 2, 'State of West Virginia, Department of Administration', 'Temporary Computer Staffing & IT Services', '5ec6b79f8d359_05386.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 22:47:21'),
(19, 1, 1, 'DC U.S. House of Representatives', 'Web Systems Staff Augmentation Sol# OAM14104S', '5ec6b813e60c6_98135.jpg', 1, '2020-05-16 12:00:00', '2020-07-11 14:48:38'),
(20, 1, 2, 'CA Southern California Association of Governments (SCAG)', 'Temporary Worker Services RFP# 15- 011-C1	', '5ec6b96c38643_46305.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 22:55:02'),
(21, 1, 2, 'MS State of Mississippi ITS', 'Information Systems Consulting Services through January 2016 RFP# 3775', '5ec6b9d8cce25_48960.jpg', 0, '2020-05-16 12:00:00', '2020-07-14 10:50:17'),
(22, 1, 2, 'PA The Pennsylvania\'s State System of Higher Education', 'Temporary Personnel Services and IT Staff Augmentation RFP# 2015-QCC- LAV-02', '5ec6ba02a1024_24501.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 22:57:32'),
(23, 1, 2, 'NY Nassau County Department of Information Technology', 'Supplemental Staffing RFP# IT0116- 1501', '5ec6ba53f19db_04391.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 22:58:53'),
(24, 1, 2, 'University of Oklahoma', 'IT Staffing and Consulting Services # R-16005-16', '5ec6bad303ae4_28431.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 23:01:00'),
(25, 1, 2, 'Maryland Health Benefit Exchange', 'Information Technology Indefinite Delivery, Indefinite Quantity (IDIQ) Consulting and Technical Support Services - SOL: MDM0031020679', '5ec6bb4973b56_92345.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 23:02:58'),
(26, 1, 2, 'PA Port Authority', 'Information Technology Consulting Services', '5ec6bbc0d934f_53748.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 23:04:58'),
(27, 1, 2, 'City of Philadelphia', 'Information Technology Staff Augmentation', '5ec6bc3dc6b5e_27980.jpg', 1, '2020-05-16 12:00:00', '2020-05-21 23:07:03'),
(28, 2, 1, 'Northrop Grumman', 'Temporary Information Technology Staffing', '5ec761c6be1a6_49615.jpg', 1, '2020-05-16 12:12:19', '2020-05-22 10:53:20'),
(29, 2, 1, 'Raytheon', 'Temporary Information Technology Staffing', '5ec76246a5813_23650.jpg', 1, '2020-05-16 12:12:55', '2020-05-22 10:55:27'),
(30, 2, 1, 'Lockheed Martin Corporation', 'Temporary Information Technology Staffing', '5ec76329afd0e_12847.jpg', 1, '2020-05-16 12:13:34', '2020-05-22 10:59:15'),
(31, 2, 1, 'Unisys', 'Supplier Master Services Agreement', '5ec76378afdd3_07943.jpg', 1, '2020-05-16 12:14:16', '2020-05-22 11:00:34'),
(32, 2, 1, 'Verizon, Federal Network Systems LLC', 'Temporary Staffing Services', '5ec7642b9c842_62057.jpg', 1, '2020-05-16 12:14:46', '2020-05-22 11:03:32'),
(33, 2, 1, 'Deloitte', 'American Red Cross', '5ec76487d22df_38729.jpg', 1, '2020-05-16 12:15:21', '2020-05-22 11:05:05'),
(34, 2, 1, 'BAE Systems', 'Temporary Staffing Services', '5ec7674f8534b_03789.jpg', 1, '2020-05-16 12:15:53', '2020-05-22 11:16:56'),
(35, 2, 1, 'A3 Information Services, LLC', 'Temporary Staffing Services', '5ec767b814e7a_09325.jpg', 1, '2020-05-16 12:16:29', '2020-05-22 11:18:41'),
(36, 2, 1, 'Cogent Solutions, Inc.', 'Temporary Staffing Services', '5ec768e44382d_76092.jpg', 1, '2020-05-16 12:17:34', '2020-05-22 11:23:42'),
(37, 3, 0, 'American Red Cross', 'Temporary Information Technology Staffing', '5ecb66031c3c8_29316.jpg', 1, '2020-05-16 12:21:38', '2020-05-25 12:00:31'),
(38, 3, 0, 'Amedisys', 'Temporary Information Technology Staffing', '5ecb66771b4e4_90367.jpg', 1, '2020-05-16 12:22:23', '2020-05-25 12:02:24'),
(39, 3, 0, 'AMETEK Inc', 'Lockheed Martin Corporation', '5ecb67268550f_65409.jpg', 1, '2020-05-16 12:22:52', '2020-05-25 12:05:19'),
(40, 3, 0, 'Arkema', 'Supplier Master Services Agreement', '5ecb6737262d3_04213.jpg', 1, '2020-05-16 12:23:19', '2020-05-25 12:05:36'),
(41, 3, 0, 'Avanos Medical', 'Temporary Staffing Services', '5ecb679fba725_18534.jpg', 1, '2020-05-16 12:23:49', '2020-05-25 12:07:21'),
(42, 3, 0, 'Berkshire Hathaway Inc', 'American Red Cross', '5ecb67ecefa4d_06517.jpg', 1, '2020-05-16 12:24:15', '2020-05-25 12:08:38'),
(43, 3, 0, 'Biogen Idec', 'Temporary Staffing Services', '5ecb6dd7d2d9f_01726.jpg', 1, '2020-05-16 12:24:44', '2020-05-25 12:33:53'),
(44, 3, 0, 'Carpenter Technology', 'Temporary Staffing Services', '5ecb686feb311_97235.jpg', 1, '2020-05-16 12:25:17', '2020-05-25 12:10:49'),
(45, 3, 0, 'Einstein Healthcare', 'Temporary Staffing Services', '5ecb68c1389b4_32047.jpg', 1, '2020-05-16 12:25:45', '2020-05-25 12:12:11'),
(46, 3, 0, 'GE Capital', 'Temporary Staffing Services', '5ecb6909f0bcf_58206.jpg', 1, '2020-05-16 12:26:15', '2020-05-25 12:13:23'),
(47, 3, 0, 'GE Healthcare', 'Temporary Staffing Services', '5ecb69271677e_54792.jpg', 1, '2020-05-16 12:26:59', '2020-05-25 12:13:52'),
(48, 3, 0, 'Harman International', 'Temporary Staffing Services', '5ecb696b577b9_58074.jpg', 1, '2020-05-16 12:27:37', '2020-05-25 12:15:00'),
(49, 3, 0, 'IMS Health Inc', 'Temporary Staffing Services', '5ecb69a24ff9e_20638.jpg', 1, '2020-05-16 12:29:11', '2020-05-25 12:15:55'),
(50, 3, 0, 'John Muir Health', 'Temporary Staffing Services', '5ecb69ef73495_57093.jpg', 1, '2020-05-16 12:29:40', '2020-05-25 12:17:12'),
(51, 3, 0, 'Kimberly Clark', 'Temporary Staffing Services', '5ecb6a3945606_98347.jpg', 1, '2020-05-16 12:30:12', '2020-05-25 12:18:27'),
(52, 3, 0, 'Meredith', 'Temporary Staffing Services', '5ecb6a8f73b7d_03195.jpg', 1, '2020-05-16 12:30:37', '2020-05-25 12:19:53'),
(53, 3, 0, 'Perspecta', 'Temporary Staffing Services', '5ecb6adc0950d_16398.jpg', 1, '2020-05-16 12:31:13', '2020-05-25 12:21:09'),
(54, 3, 0, 'PharMerica Corporation', 'Temporary Staffing Services', '5ecb6b26e4055_15289.jpg', 1, '2020-05-16 12:31:46', '2020-05-25 12:22:24'),
(55, 3, 0, 'SAP', 'Temporary Staffing Services', '5ecb6b6b924aa_19578.jpg', 1, '2020-05-16 12:32:12', '2020-05-25 12:23:32'),
(56, 3, 0, 'Sony Interactive Entertainment', 'Temporary Staffing Services', '5ecb6bb8b8905_13569.jpg', 1, '2020-05-16 12:32:35', '2020-05-25 12:24:50'),
(57, 3, 0, 'Johnson & Johnson', 'Temporary Staffing Services', '5ecb6c2b5f81e_49312.jpg', 1, '2020-05-16 12:33:24', '2020-05-25 12:26:44'),
(58, 3, 0, 'GE Aviation', 'Temporary Staffing Services', '5ecb6c74c9537_23018.jpg', 1, '2020-05-16 12:33:51', '2020-05-25 12:27:58'),
(59, 3, 0, 'Harris Corporation', 'Temporary Staffing Services', '5ecb6cb8d3514_45238.jpg', 1, '2020-05-16 12:34:26', '2020-05-25 12:29:08'),
(60, 3, 0, 'Highmark Health', 'Temporary Staffing Services', '5ebf90990f4d4_78601.jpg', 1, '2020-05-16 12:34:59', '2020-05-16 12:34:59'),
(61, 3, 0, 'John Muir Health', 'Temporary Staffing Services', '5ecb69e1c708b_19378.jpg', 1, '2020-05-16 12:35:24', '2020-05-25 12:16:59'),
(62, 3, 0, 'Novartis', 'Temporary Staffing Services', '5ecb6d07075a2_14596.jpg', 1, '2020-05-16 12:35:48', '2020-05-25 12:30:24'),
(63, 3, 0, 'NV Energy', 'Temporary Staffing Services', '5ecb6d514c27f_89265.jpg', 1, '2020-05-16 12:36:15', '2020-05-25 12:31:39'),
(64, 3, 0, 'Sanofi', 'Temporary Staffing Services', '5ecb6d928a35d_57421.jpg', 1, '2020-05-16 12:36:38', '2020-05-25 12:32:43'),
(65, 1, 2, 'WV State of West Virginia', 'Temporary IT Staffing Contract CRFQ 0511 HHR1500000008', '5ec6bcc279b11_90762.jpg', 1, '2020-05-16 17:05:11', '2020-05-21 23:09:16'),
(66, 1, 2, 'FL The School Board of Broward County, Florida (SBBC)', 'Technical Contract Staffing and Consulting Services - (RFP) 17-006V', '5ec6bd25a7002_34890.jpg', 1, '2020-05-16 17:06:15', '2020-05-21 23:10:55'),
(67, 1, 2, 'State of North Carolina', 'IT Supplemental Staffing Providers ITS-009440', '5ec6bd8d85dff_19284.jpg', 1, '2020-05-16 17:07:26', '2020-05-21 23:12:39'),
(68, 1, 2, 'NY The Port Authority of New York and New Jersey', 'Performance of Expert Professional Recruitment and Sourcing Research Services for Multiple Staffing Functions as Requested on a “CALL- IN” basis during 2016 RFP# 43861', '5ec6bdec7adec_08932.jpg', 1, '2020-05-16 17:08:48', '2020-05-21 23:14:13'),
(69, 1, 2, 'AZ Arizona State University', 'Staff Augmentation and Consulting Services for Various UTO Supported Applications RFP# 081604', '5ec6be4632ee0_15207.jpg', 1, '2020-05-16 17:09:27', '2020-05-21 23:15:43'),
(70, 1, 2, 'CA The Southern California Association of Governments (SCAG)', 'Information Technology (IT) Application Development and Support – No. 16-040', '5ec6be9a7a90c_12804.jpg', 1, '2020-05-16 17:10:01', '2020-05-21 23:17:07'),
(71, 1, 1, 'NC Depart of the Air Force', 'SJAFB ED Office IT Technician - Sol: F3T3MSEDITTECH', '5ec6bf9995c9c_10528.jpg', 1, '2020-05-16 17:10:33', '2020-07-11 14:48:07'),
(72, 1, 2, 'FL Florida Depart of Management Services', 'Information Technology Staff Augmentation Services Rebid RFP No. 14- 80101507-SA-B', '5ec6bff4850d8_14603.jpg', 0, '2020-05-16 17:12:29', '2020-07-14 10:52:49'),
(73, 1, 2, 'DE Department of Technology and Information', 'Information Technology Project Staffing RFP#DTI16630-ITSTFFSVCS', '5ec6aa5c4476c_71064.jpg', 0, '2020-05-16 17:12:57', '2020-07-14 10:56:01'),
(74, 1, 2, '	CA City of Sunnyvale', '	Professional and Technical Information Technology Contracting Services F17-050', '5ec6c0642c923_40928.jpg', 1, '2020-05-16 17:13:24', '2020-05-21 23:24:45'),
(75, 1, 2, 'CA City of Sunnyvale', 'Temporary Personnel Services for Information Technology F17-049', '5ec6c053439ca_65870.jpg', 1, '2020-05-16 17:14:14', '2020-05-21 23:24:28'),
(189, 1, 2, 'MD CATS+', 'State of Maryland Consulting and Technical Services (CATS+)', '5f0d4da8a2856_85072.jpg', 1, '2020-07-14 11:46:12', '2020-07-14 11:46:12'),
(77, 1, 2, '	WI Waukesha County', 'Temporary Employment Services – 1710', '5ec6c1a840c05_08643.jpg', 1, '2020-05-16 17:15:11', '2020-05-21 23:30:14'),
(78, 1, 2, 'WA City of Tacoma', 'Utility Technology Portfolio Project Management Temporary Staffing Services PS17-0136F', '5ec6c24a3b556_34680.jpg', 1, '2020-05-16 17:15:39', '2020-05-21 23:32:54'),
(79, 1, 2, '	FL City of Cocoa', 'Professional Information Technology Services on an as-needed basis RFQ # Q-17-08-COC', '5ec6c2d6e0edb_97643.jpg', 1, '2020-05-16 17:16:13', '2020-05-21 23:35:12'),
(80, 1, 2, 'University of Oklahoma', 'IT Staffing and Consulting Services (As Needed) R-18001-18', '5ec6bae8d15a5_32146.jpg', 1, '2020-05-16 17:16:41', '2020-05-21 23:01:22'),
(81, 1, 2, 'Louisville Water Company', 'Temporary Personnel & Direct Hire Placement Services Bid 18-02', '5ec6c3300a5d5_02753.jpg', 1, '2020-05-16 17:17:02', '2020-05-21 23:36:41'),
(82, 1, 2, 'Pima County Community College District', 'Information Technology Services and Consulting Proposal No. P18/9982L', '5ec6c3dddec17_10795.jpg', 1, '2020-05-16 17:18:44', '2020-05-21 23:39:35'),
(83, 1, 2, 'Southern California Association of Governments', 'Temporary Worker Services RFP# 18- 022', '5ec6c41226024_86972.jpg', 1, '2020-05-16 17:19:13', '2020-05-21 23:40:27'),
(84, 1, 2, 'WA King County', 'Temporary Personnel Services, Short Term - Senior Accounting Personnel - 1095-18-RLR', '5ec6c4adb9a46_86120.jpg', 1, '2020-05-16 17:19:56', '2020-05-21 23:43:03'),
(85, 1, 2, '	CA Eastern Municipal Water District', 'As Needed Computer Services –RFQ No. 3003', '5ec6a93310f61_71896.jpg', 1, '2020-05-16 17:20:25', '2020-05-21 21:45:48'),
(86, 1, 2, 'FL The School Board of Broward County', 'Invitation to Bid: 19-080V – Technical Contract Staffing and Consulting Services', '5ec6c4e06ea6e_72149.jpg', 1, '2020-05-16 17:20:54', '2020-05-21 23:43:53'),
(87, 1, 2, '	NC State of North Carolina Department of Information Technology', 'Short term IT Staffing BID/FILE NUMBER: ITS-400191-004 to ITS- 009440', '5ec6c500db4bc_69875.jpg', 1, '2020-05-16 17:21:24', '2020-05-21 23:44:28'),
(88, 1, 2, 'KS Department of Administration', 'Information Technology Services Event ID: EVT0006086', '5ec6c57212cba_10369.jpg', 1, '2020-05-16 17:21:48', '2020-05-21 23:46:20'),
(89, 1, 2, 'FL Department of Management Services', 'RFP #15-80101507-SA-D - Information Technology Staff Augmentation Services', '5ec6c59332814_24173.jpg', 0, '2020-05-16 17:22:11', '2020-07-14 10:53:43'),
(90, 1, 2, '	FL Seminole County', 'IT Staffing and Contract Services for Information Technology - RFP- 603440-19/TLR', '5ec6c634b5e8a_34921.jpg', 1, '2020-05-16 17:22:37', '2020-05-21 23:49:34'),
(91, 1, 2, '	PA City of Philadelphia', 'Information Technology Staff Augmentation Services Opportunity Number: 21190409161347 Contract Number 1620155-06', '5ec6c653c041c_24605.jpg', 1, '2020-05-16 17:23:02', '2020-05-21 23:50:05'),
(92, 1, 2, '	CA Southern California Association of Governments', 'Information Technology (IT) Application Development and Support - (RFP) No. 19-052', '5ec6c421cd882_41026.jpg', 1, '2020-05-16 17:23:55', '2020-05-21 23:40:43'),
(93, 1, 2, 'WA Department of Enterprise Services (DES)', 'RFQQ K6857 - ITPS Convenience - A Second Tier Solicitation from DES Master Contract 08215 ITPS	', '5ec6c6be40a34_49876.jpg', 1, '2020-05-16 17:24:19', '2020-05-21 23:51:51'),
(94, 1, 2, 'PA Port Authority of Allegheny County', 'Temporary Technical and Temporary Clerical Support Services - RFP NO. 19-04', '5ec6c6e662932_95372.jpg', 1, '2020-05-16 17:24:42', '2020-05-21 23:52:32'),
(95, 2, 2, 'City of Phoenix', 'Information Technology Professional Services', '5ec769e248449_93280.jpg', 1, '2020-05-16 17:48:16', '2020-05-22 11:27:56'),
(96, 2, 2, '	County of Santa Clara', '	Temporary Information Technology Staffing', '5ec76a45e109a_20873.jpg', 1, '2020-05-16 17:48:56', '2020-05-22 11:29:35'),
(97, 2, 2, 'County of Riverside', 'Information Technology Consulting and Staffing Services', '5ec76aeec0c8d_98531.jpg', 1, '2020-05-16 17:49:31', '2020-05-22 11:32:23'),
(98, 2, 2, 'CALPERS : California Public Employees\' Retirement System', 'Information Technology Consultants Spring-Fed pool', '5f0d49a354029_43029.jpg', 1, '2020-05-16 17:49:59', '2020-07-14 11:29:02'),
(99, 2, 2, 'Los Angeles County Metro Transportation Authority', 'Temporary contract Administration Staffing Support Services Bench', '5ec76b5b43b3f_38561.jpg', 1, '2020-05-16 18:05:31', '2020-05-22 11:34:13'),
(100, 2, 2, 'CA City of Carlsbad', 'IT Staffing Services', '5ec76bb2893e9_92580.jpg', 1, '2020-05-16 18:05:58', '2020-05-22 11:35:40'),
(101, 2, 2, 'Department of Transportation', 'Information Technology Service Provider Master Agreement 1440', '5ec76c611965a_97018.jpg', 1, '2020-05-16 18:06:24', '2020-05-22 11:38:37'),
(102, 2, 2, 'Citizens Board of Governors', 'Professional Recruiting Services', '5ec76cd524f8c_26083.jpg', 1, '2020-05-16 18:06:46', '2020-05-22 11:40:30'),
(103, 2, 0, 'Palm Beach County', 'Staff Augmentation Services', '5ec76f2ef04c2_89512.jpg', 1, '2020-05-16 18:07:04', '2020-05-22 11:50:32'),
(104, 2, 2, '	Florida Department of Transportation', 'Temporary Employment Services for the Materials Office', '5ec76f5d4092f_38162.jpg', 0, '2020-05-16 18:07:26', '2020-07-15 11:04:36'),
(105, 2, 2, 'Manatee County Finance Department', '	Manatee County Purchasing', '5ec76db79c535_36485.jpg', 1, '2020-05-16 18:08:59', '2020-05-22 11:44:17'),
(106, 2, 2, 'Hillsborough County Public Schools, State of Florida', 'Information Technology IT Supplemental Staffing', '5ec76ff762546_96832.jpg', 1, '2020-05-16 18:09:29', '2020-05-22 11:53:53'),
(107, 2, 2, 'Brevard County', 'Computer Programming Services', '5ec7707b15002_21569.jpg', 1, '2020-05-16 18:09:52', '2020-05-22 11:56:04'),
(108, 2, 2, '	The School Board of Broward County', 'Technical Contract Staffing', '5ec770eaa4d9d_53289.jpg', 1, '2020-05-16 18:10:26', '2020-05-22 11:57:56'),
(109, 2, 2, 'Broward Sheriff\'s Office', 'IT Library of Professional Services', '5ec7715019f8f_80392.jpg', 1, '2020-05-16 18:10:49', '2020-05-22 11:59:37'),
(110, 2, 2, '	Miami Dade County - ETSD', '	IT Consulting Services', '5ec7717b6b14f_71026.jpg', 1, '2020-05-16 18:11:13', '2020-05-22 12:00:21'),
(111, 2, 2, 'Miami Dade County - Aviation Department', 'IT Consulting Services', '5ec771d2a4cf0_68329.jpg', 1, '2020-05-16 18:11:41', '2020-05-22 12:01:48'),
(112, 2, 2, 'State of Florida - DCF', 'Software Programming Services', '5ec7721b4b320_28350.jpg', 1, '2020-05-16 18:12:00', '2020-05-22 12:03:00'),
(113, 2, 2, 'Florida Department of Transportation', '	Temporary Employment Services for the Materials Office', '5ec76d5e9e321_61023.jpg', 1, '2020-05-16 18:12:22', '2020-05-22 11:42:48'),
(114, 2, 2, 'State of Florida', 'Information Technology IT Supplemental Staffing', '5ec6abfc6cd25_47589.jpg', 1, '2020-05-16 18:12:43', '2020-05-21 21:57:41'),
(115, 2, 2, '	Palm Beach County', 'Staff Augmentation Services', '5ec76f1e5f0d7_37405.jpg', 1, '2020-05-16 18:15:14', '2020-05-22 11:50:16'),
(116, 2, 2, '	The School District of St. Lucie', 'Temporary Employment Services', '5ec772da7c443_06192.jpg', 1, '2020-05-16 18:17:14', '2020-05-22 12:06:12'),
(117, 2, 2, 'Martin County Florida', '	Consulting Services As Needed Business Management Consulting', '5ec7734548303_34981.jpg', 1, '2020-05-16 18:17:36', '2020-05-22 12:07:58'),
(118, 2, 2, 'Martin County Board of County Commissioners', 'As Needed IT Application Support Services', '5ec77355edca3_01536.jpg', 1, '2020-05-16 18:18:04', '2020-05-22 12:08:15'),
(119, 2, 2, '	Blue Cross and Blue Shield of Florida Inc.', 'Master Services Agreement', '5ec773a5d064e_52810.jpg', 1, '2020-05-16 18:18:29', '2020-05-22 12:09:36'),
(120, 2, 2, 'State of Florida', 'IT Support Services on as needed basis', '5ec6abe6159c1_04821.jpg', 1, '2020-05-16 18:18:49', '2020-05-21 21:57:19'),
(121, 2, 2, 'University of Oklahoma', 'IT Staffing and Consulting Services', '5ec773c2ec69c_96258.jpg', 1, '2020-05-16 18:19:11', '2020-05-22 12:10:04'),
(122, 2, 2, 'State of Hawaii', 'IT Professional Service Providers', '5ec7741e9ebb5_18763.jpg', 1, '2020-05-16 18:19:33', '2020-05-22 12:11:35'),
(123, 2, 2, 'State of KS Division of Purchases', 'Information Technology Services Master Contract', '5ec774d21d0dc_39285.jpg', 1, '2020-05-16 18:22:15', '2020-05-22 12:14:35'),
(124, 2, 2, 'State of Massachusetts', 'Statewide Temporary Help Service', '5ec7752763914_24853.jpg', 1, '2020-05-16 18:22:37', '2020-05-22 12:16:01'),
(125, 2, 2, 'Massachusetts Technology Collaborative', '	Qualifications for IT Services', '5ec7758b94aa9_69815.jpg', 1, '2020-05-16 18:22:56', '2020-05-22 12:17:43'),
(126, 2, 2, 'Baltimore County Public Schools', 'Information Technology Contracted Staffing Services', '5ec77601cbb76_03418.jpg', 1, '2020-05-16 18:24:42', '2020-05-22 12:19:39'),
(127, 2, 2, '	City of Minneapolis', 'Information Technology Services', '5ec77684b23b4_75261.jpg', 1, '2020-05-16 18:25:02', '2020-05-22 12:21:50'),
(128, 2, 2, 'State of Minnesota', '	IT Professional Technical Master Contract', '5ec77756196ac_27694.jpg', 1, '2020-05-16 18:25:23', '2020-05-22 12:25:19'),
(129, 2, 2, '	State of Minnesota', 'Master Roster for State IT- Professional/Technical Services', '5ec77749ba525_38029.jpg', 1, '2020-05-16 18:25:44', '2020-05-22 12:25:07'),
(130, 2, 2, 'Department of Administration', 'IT Consulting and Support Services, SITE Program', '5ec777b70ea62_35874.jpg', 1, '2020-05-16 18:26:05', '2020-05-22 12:26:56'),
(131, 2, 2, '	Department of Information Technology Division, State of Mississippi', '	Information Technology Services', '5ec777ec0fac4_36780.jpg', 1, '2020-05-16 18:26:34', '2020-05-22 12:27:50'),
(132, 2, 2, 'Department of Admin, IT Services Division, State of Montana', 'Information Technology Services', '5ec778437ee45_09342.jpg', 1, '2020-05-16 18:26:57', '2020-05-22 12:29:16'),
(133, 2, 2, 'Office of Information Technology Services', 'Short-Term IT Staffing Contract', '5ec77860d7806_67534.jpg', 1, '2020-05-16 18:27:22', '2020-05-22 12:29:46'),
(134, 2, 2, 'State of North Dakota', 'IT Professional Services', '5ec778c9cfe9a_12860.jpg', 1, '2020-05-16 18:27:43', '2020-05-22 12:31:31'),
(135, 2, 2, 'State of Nebraska', '	.NET lead Programmer Analyst', '5ec77945b656b_09842.jpg', 1, '2020-05-16 18:28:04', '2020-05-22 12:33:35'),
(136, 2, 2, 'Montclair State University Office of Procurement Services', 'Information Technology Staffing Services', '5ec779a500037_53784.jpg', 1, '2020-05-16 18:29:31', '2020-05-22 12:35:10'),
(137, 2, 2, '	State of New Jersey Purchase Bureau', 'Computer Operators Office of Information Technology', '5ec77a64b169c_53927.jpg', 1, '2020-05-16 18:29:53', '2020-05-22 12:38:22'),
(138, 2, 2, 'Department of Treasury', 'Temp Employment Services, Skilled & Unskilled Labor', '5ec77abe581d8_80417.jpg', 1, '2020-05-16 18:30:20', '2020-05-22 12:39:54'),
(139, 2, 2, 'County of Monmouth', '	Jail Management System, Licensing and Support for the Department of Corrections and Youth Services', '5ec77b521564b_43127.jpg', 1, '2020-05-16 18:30:45', '2020-05-22 12:42:19'),
(140, 2, 2, '	Ramapo College of New Jersey, NJ', 'Temporary Staffing Services', '5ec77bc10fba1_25360.jpg', 1, '2020-05-16 18:31:07', '2020-05-22 12:44:11'),
(141, 2, 2, '	Clark County, Nevada', '	Tier 1 Support For Computer Related Temporary Technical Or Professional Services', '5ec77c39abe21_61829.jpg', 1, '2020-05-16 18:34:49', '2020-05-22 12:46:11'),
(142, 2, 2, 'MTA - NYC Transit', 'Temporary Computer Professionals', '5ec77cb1bed6b_38695.jpg', 1, '2020-05-16 18:37:09', '2020-05-22 12:48:11'),
(143, 2, 2, 'Long Island Rail Road', 'General Information Systems Consultants', '5ec77cfcde0a1_09654.jpg', 1, '2020-05-16 18:37:38', '2020-05-22 12:49:26'),
(144, 2, 2, 'NY health and Hospital Corporation', 'Information Services', '5ec77d5a8db9f_76913.jpg', 1, '2020-05-16 18:37:55', '2020-05-22 12:50:59'),
(145, 2, 2, 'NY City Transit MTA', 'Temporary Computer Professionals', '5ec77dab04b82_83624.jpg', 1, '2020-05-16 18:38:14', '2020-05-22 12:52:20'),
(146, 2, 2, 'NYS Office of Alcoholism & Substance Abuse', 'Application Development', '5ec77e144c3e2_97263.jpg', 1, '2020-05-16 18:39:06', '2020-05-22 12:54:05'),
(147, 2, 2, '	State of Rhode Island & Providence Plantations', 'Computer Technical Support', '5ec77e9372eb0_73069.jpg', 1, '2020-05-16 18:39:30', '2020-05-22 12:56:12'),
(148, 2, 2, 'State of Rhode Island & Providence Plantations', 'Systems Analysis & Programming Service', '5ec77e851c06d_16430.jpg', 1, '2020-05-16 18:39:53', '2020-05-22 12:55:58'),
(149, 2, 2, 'Texas Department of Information Resources', 'Information Technology Staff Augmentation', '5ec77eea4e664_62140.jpg', 1, '2020-05-16 18:40:14', '2020-05-22 12:57:39'),
(150, 2, 2, 'Austin Independent School District', 'Temporary Technical, Programming and Project Management Services', '5ec77fdbc578d_90231.jpg', 1, '2020-05-16 18:40:40', '2020-05-22 13:01:40'),
(151, 2, 2, 'Dallas Independent School district', 'IT Service Providers', '5ec7803318097_50124.jpg', 1, '2020-05-16 18:41:00', '2020-05-22 13:22:23'),
(152, 2, 2, 'State of South Carolina', 'Statewide Term Contract', '5ec780b78b618_07382.jpg', 1, '2020-05-16 18:41:21', '2020-05-22 13:05:21'),
(153, 2, 2, 'Temporary IT Professional Positions', '	Temporary IT Professional Positions', '5ec780dad587f_84391.jpg', 0, '2020-05-16 18:41:52', '2020-07-14 10:57:59'),
(154, 2, 2, 'State of South Carolina', 'Small Software Applications Development', '5ec780a6ac4b4_40736.jpg', 1, '2020-05-16 18:42:12', '2020-05-22 13:05:04'),
(155, 2, 2, 'State of South Carolina', '	job order framework', '5ec7809700c17_97456.jpg', 1, '2020-05-16 18:42:32', '2020-05-22 13:04:49'),
(156, 2, 2, 'Dallas Independent School district', 'IT Service Providers', '5ec785096be6d_91046.jpg', 1, '2020-05-16 18:43:04', '2020-05-22 13:23:46'),
(157, 2, 2, 'Finance Department, County of Prince William', 'Temporary Employment Services', '5ec785655c443_51834.jpg', 1, '2020-05-16 18:44:35', '2020-05-22 13:25:18'),
(158, 2, 2, '	State of Vermont', '	Systems Development & Information Technology Assistance', '5ec785f4013cd_46571.jpg', 1, '2020-05-16 18:45:10', '2020-05-22 13:27:41'),
(159, 2, 2, '	WA Department of Transportation', 'IT Personal & Purchased Services Optional Use', '5ec7869a14483_53648.jpg', 1, '2020-05-16 18:45:35', '2020-05-22 13:30:27'),
(160, 2, 2, 'Department of Social and Health Services', '	E-jas Maintenance and Operations Support', '5ec7872b7198f_39745.jpg', 1, '2020-05-16 18:46:06', '2020-05-22 13:32:52'),
(161, 2, 2, 'Department of Information Services', 'Information Technology Staffing Services', '5ec787ad88d5b_85724.jpg', 1, '2020-05-16 18:48:45', '2020-05-22 13:35:02'),
(162, 2, 2, 'CA The County of Santa Clara, Social Service Agency', 'Information Technology Temporary Staff RFQ# RFQ-SSA-FY15-0275', '5ec78807c9304_35761.jpg', 1, '2020-05-16 18:49:20', '2020-05-22 13:36:33'),
(163, 2, 2, 'CA Santa Clara Valley Water District', 'As Needed “IT Managed” Services - NO – CC4614-DL', '5ec788738aec6_59473.jpg', 1, '2020-05-16 18:49:45', '2020-05-22 13:38:20'),
(164, 2, 2, '	NC Department of Insurance', '	Professional Technical Contract for Receivership Administration Services - RFP # - 12-001100', '5ec788e3abd06_58973.jpg', 1, '2020-05-16 18:50:05', '2020-05-22 13:40:12'),
(165, 2, 2, 'VA Virginia Housing Development Authority', '	Temporary Personnel Services - RFP # 94', '5ec78942262ab_54271.jpg', 1, '2020-05-16 18:50:23', '2020-05-22 13:41:47'),
(166, 2, 2, '	TX Alamo Colleges', '	Temporary Employment Services for IT Professional CSP 15A-021', '5ec789dc98472_41786.jpg', 1, '2020-05-16 18:51:53', '2020-05-22 13:44:22'),
(167, 2, 2, 'ID Depart of the Interior', '	Payrolling Services for Seed Warehouse Assistance - Sol: L16PS00018', '5ec78a326395e_97216.jpg', 1, '2020-05-16 18:52:13', '2020-05-22 13:45:47'),
(168, 2, 2, '	WV State of West Virginia', '	Programming Services for On base Integration - CRFQ 0225 PEI1600000003', '5ec78a842c9b6_62459.jpg', 1, '2020-05-16 18:52:34', '2020-05-22 13:47:09'),
(169, 2, 2, 'AZ City of Phoenix', '	Information Technology Professional Services 2016- 2018 RFQ ITS16-030 QVL', '5ec78ab187ae9_74325.jpg', 1, '2020-05-16 18:52:59', '2020-05-22 13:47:55'),
(170, 2, 2, 'State of South Carolina', '	IT Temporary Staff Augmentation Services - Sol# 5400008056', '5ec78086550da_08156.jpg', 1, '2020-05-16 18:53:25', '2020-05-22 13:04:32'),
(171, 2, 2, '	Illinois Central Management Services', '	IT Resources Multi-Step Sealed Bid 22034078', '5ec78af5ce983_21904.jpg', 1, '2020-05-16 18:53:47', '2020-05-22 13:49:03'),
(172, 2, 2, 'FL University of Central Florida', '	Temporary Labor Services - ITN NO: 1602JCSA', '5ec78b5679d51_95674.jpg', 1, '2020-05-16 18:54:15', '2020-05-22 13:50:40'),
(173, 2, 2, 'UT University of Utah', 'Software Development and Design Services -RFP #W149589', '5ec78bd263c52_23957.jpg', 1, '2020-05-16 18:54:36', '2020-05-22 13:52:44'),
(174, 2, 2, 'AR Arkansas Tech University', 'Professional Temporary Staffing-16-210', '5ec78c3782bb4_81230.jpg', 1, '2020-05-16 18:54:59', '2020-05-22 13:54:25'),
(175, 2, 2, 'CA County of San Mateo', 'Master Services Agreements - NO. 2016ISD1834', '5ec78ca730faa_89423.jpg', 1, '2020-05-16 18:55:18', '2020-05-22 13:56:17'),
(176, 2, 2, 'DE New Castle County', '	Information Technology Services - 17SC-316', '5ec78d18403d0_51723.jpg', 1, '2020-05-16 18:56:30', '2020-05-22 13:58:12'),
(177, 2, 2, '	PA Pittsburgh Water and Sewer Authority', 'Temporary Staffing Services', '5ec78d7ad1cb2_53478.jpg', 1, '2020-05-16 18:56:52', '2020-05-22 13:59:48'),
(178, 2, 2, 'Capital BlueCross', '	Human Resources Staffing', '5ec78def6b281_87365.jpg', 1, '2020-05-16 18:57:18', '2020-05-22 14:01:44'),
(179, 2, 2, 'CA Department of Corrections and Rehabilitation', 'Recruitment Services - BID NO. C5607296-D', '5ec78e38cadb6_51934.jpg', 1, '2020-05-16 18:57:43', '2020-05-22 14:02:58'),
(180, 2, 2, 'CO City of Aurora', 'IT Contract Technical Services - RFP-R- 1855', '5ec78eb82237f_85609.jpg', 1, '2020-05-16 18:58:03', '2020-05-22 14:05:05'),
(181, 2, 2, '	St. Louis Community College', '	Supplemental Information Systems/Technology Support Services', '5ec78f501df28_83925.jpg', 1, '2020-05-16 18:58:24', '2020-05-22 14:07:38'),
(183, 2, 2, '	City of Phoenix Information Technology Services (ITS).', 'Request for Qualifications (RFQ) for Information Technology Professional Services RFQ No. ITS 18-505', '5ebfeaa67c4dd_75416.jpg', 1, '2020-05-16 18:59:13', '2020-05-16 18:59:13'),
(184, 1, 2, '	MN City of Minneapolis', 'Temporary Staffing Services RFP 2018-15', '5ec776af8af53_65942.jpg', 1, '2020-05-16 18:59:37', '2020-07-15 11:12:34'),
(185, 2, 2, 'MN City of Minneapolis', '	Staff Augmentation Consulting Pool RFP 2018-50', '5ec776a204fb2_02153.jpg', 0, '2020-05-16 19:00:02', '2020-07-14 10:59:42'),
(186, 1, 2, 'OR Washington County Government (ORCPP)', 'Information Technology Consulting Services & Technical Staff Augmentation Work REQUEST FOR PROPOSAL #2017.028P', '5ec78fcf950a6_05468.jpg', 1, '2020-05-16 19:00:44', '2020-07-14 11:00:44'),
(187, 2, 2, 'MO St. Louis Community College', '	IT RECRUITING SERVICES - B0003830', '5ec78f6679bce_90751.jpg', 1, '2020-05-16 19:01:06', '2020-05-22 14:07:59'),
(188, 2, 2, 'Department of General Services', 'IT Consulting Services RFP 5167010', '5ec790268a237_01869.jpg', 1, '2020-05-16 19:02:00', '2020-05-22 14:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `client_modules`
--

DROP TABLE IF EXISTS `client_modules`;
CREATE TABLE IF NOT EXISTS `client_modules` (
  `client_module_id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(255) NOT NULL,
  PRIMARY KEY (`client_module_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_modules`
--

INSERT INTO `client_modules` (`client_module_id`, `module_name`) VALUES
(1, 'Government Clients'),
(2, 'Private Clients');

-- --------------------------------------------------------

--
-- Table structure for table `client_module_types`
--

DROP TABLE IF EXISTS `client_module_types`;
CREATE TABLE IF NOT EXISTS `client_module_types` (
  `client_module_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) NOT NULL,
  PRIMARY KEY (`client_module_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_module_types`
--

INSERT INTO `client_module_types` (`client_module_type_id`, `type_name`) VALUES
(1, 'Federal'),
(2, 'State');

-- --------------------------------------------------------

--
-- Table structure for table `client_sub_modules`
--

DROP TABLE IF EXISTS `client_sub_modules`;
CREATE TABLE IF NOT EXISTS `client_sub_modules` (
  `client_sub_module_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_module_id` int(11) NOT NULL,
  `sub_module_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `sub_module_types` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`client_sub_module_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_sub_modules`
--

INSERT INTO `client_sub_modules` (`client_sub_module_id`, `client_module_id`, `sub_module_name`, `description`, `banner_image`, `sub_module_types`, `status`, `created_date`, `modified_date`) VALUES
(1, 1, 'Current Engagement', 'Having efficiently performed in and completed over 150 successful projects over the years and holding over 50 ongoing projects, RADgov has demonstrated its efficiency in catering to the intellectual capital and technological needs of not just commercial, but Federal and Government clients as well. We, at RADgov, believe and strive towards providing customized and customer-oriented solutions to clients, which makes us more approachable, trustworthy and resourceful in fulfilling the client requirements to the best extent.', '5ecb6506bc02e_95487.jpg', '2,1', 1, '2020-05-15 19:37:26', '2020-05-25 11:56:17'),
(2, 1, 'Past Performance', 'Having efficiently performed in and completed over 150 successful projects over the years and holding over 50 ongoing projects, RADgov has demonstrated its efficiency in catering to the intellectual capital and technological needs of not just commercial, but Federal and Government clients as well. We, at RADgov, believe and strive towards providing customized and customer-oriented solutions to clients, which makes us more approachable, trustworthy and resourceful in fulfilling the client requirements to the best extent.', '5ecb64fb1f342_17654.jpg', '2,1', 1, '2020-05-15 19:49:44', '2020-05-25 11:56:04'),
(3, 2, 'Clients', 'Having efficiently performed in and completed over 150 successful projects over the years and holding over 50 ongoing projects, RADgov has demonstrated its efficiency in catering to the intellectual capital and technological needs of not just commercial, but Federal and Government clients as well. We, at RADgov, believe and strive towards providing customized and customer-oriented solutions to clients, which makes us more approachable, trustworthy and resourceful in fulfilling the client requirements to the best extent.', '5ecb64e3a1ff7_48725.jpg', '', 1, '2020-05-16 12:19:21', '2020-05-25 11:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `client_types`
--

DROP TABLE IF EXISTS `client_types`;
CREATE TABLE IF NOT EXISTS `client_types` (
  `client_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`client_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_types`
--

INSERT INTO `client_types` (`client_type_id`, `type`, `status`, `created_date`) VALUES
(1, 'FEDERAL CLIENTS', 1, '2020-04-28 18:00:00'),
(2, 'GOVERNMENT CLIENTS', 1, '2020-04-28 18:00:00'),
(3, 'PRIVATE CLIENTS', 1, '2020-04-28 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_interested` varchar(5) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `first_name`, `last_name`, `phone_number`, `email`, `is_interested`, `message`) VALUES
(1, 'Test', 'HC', 4354645654, 'tamilhoneycomb@gmail.com', 'No', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `contract_vehicles`
--

DROP TABLE IF EXISTS `contract_vehicles`;
CREATE TABLE IF NOT EXISTS `contract_vehicles` (
  `contract_id` int(11) NOT NULL AUTO_INCREMENT,
  `contract_type` tinyint(1) NOT NULL,
  `contract_name` varchar(255) NOT NULL,
  `contract_description` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`contract_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract_vehicles`
--

INSERT INTO `contract_vehicles` (`contract_id`, `contract_type`, `contract_name`, `contract_description`, `image`, `status`, `created_date`, `modified_date`) VALUES
(3, 1, 'United States House of Representative', '', '5ebe4eafe9ea0_03951.jpg', 1, '2020-05-15 13:41:32', '2020-05-15 13:41:32'),
(4, 1, 'FAA eFAST', 'Federal Aviation Administration (FAA) Accelerated and Simplified Tasks (eFAST)', '5ebe4ec577ca1_87910.jpg', 1, '2020-05-15 13:42:01', '2020-05-15 13:42:01'),
(5, 1, 'GSA', '# GS-35F-247CA- IT Professional Services', '5ebe4eeb56fb0_20641.jpg', 1, '2020-05-15 13:42:30', '2020-05-15 13:42:30'),
(6, 2, 'Maryland Health Benefit Exchange', '', '5ebe4f03bf4de_71530.jpg', 1, '2020-05-15 13:42:56', '2020-05-15 13:42:56'),
(7, 2, 'MD CATS+-', 'April 2013- April 2028 (IT & Technical Services)', '5ebe4f224f184_85467.jpg', 1, '2020-05-15 13:43:26', '2020-05-15 13:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `office_location`
--

DROP TABLE IF EXISTS `office_location`;
CREATE TABLE IF NOT EXISTS `office_location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  `office_name` varchar(250) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact_email` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `is_corporate` tinyint(1) DEFAULT NULL,
  `status` tinyint(2) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office_location`
--

INSERT INTO `office_location` (`location_id`, `location`, `office_name`, `address`, `contact_email`, `image`, `mobile`, `telephone`, `work`, `fax`, `is_corporate`, `status`, `created_date`, `modified_date`) VALUES
(1, 'Fort Lauderdale, FL', 'RADgov, Inc.', '6750 N. Andrews Ave., Suite 200 Fort Lauderdale, FL 33309', 'info@radgov.com', '5efd792145683_43081.jpg', '954.938.2800', '', '', ' 954.938.2004', 1, 1, '2020-05-13 12:12:41', '2020-07-02 11:35:25'),
(2, 'McLean, VA', 'RADgov, Inc.', '1750 Tysons Boulevard, 4th Floor, McLean, VA 22102', 'info@radgov.com', '5efd79778fbf7_83572.jpg', '-', '', '', '-', 0, 1, '2020-05-13 12:28:39', '2020-07-02 11:36:50'),
(3, 'Troy, MI', 'RADgov, Inc.', '833 Grand Marais Street, Grosse Pointe Park, MI 48230', 'info@radgov.com', '5efd79a38bdba_73692.jpg', '-', '', '', '-', 0, 1, '2020-05-13 12:29:41', '2020-07-02 11:37:35'),
(4, 'South Plainfield, NJ', 'RADgov, Inc.', '107 B2 Corporate Boulevard South Plainfield NJ 07080', 'info@radgov.com', '5efd79fdc7361_54071.jpg', '(908) 668–1080', '', '', '(908) 668–1081', 0, 1, '2020-05-13 12:30:52', '2020-07-02 11:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `layout` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `name`, `layout`, `status`) VALUES
(2, 'IT Services', 1, 1),
(3, 'Workforce Services', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

DROP TABLE IF EXISTS `service_details`;
CREATE TABLE IF NOT EXISTS `service_details` (
  `service_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_service_id` int(11) NOT NULL,
  `service_detail_name` varchar(255) NOT NULL,
  `alias_name` text NOT NULL,
  `icon_image` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `key_features` text NOT NULL,
  `key_icons` text NOT NULL,
  `features_image` varchar(255) NOT NULL,
  `benefits` text NOT NULL,
  `benefits_image` varchar(255) NOT NULL,
  `why_radgov` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`service_detail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`service_detail_id`, `sub_service_id`, `service_detail_name`, `alias_name`, `icon_image`, `banner_image`, `description`, `key_features`, `key_icons`, `features_image`, `benefits`, `benefits_image`, `why_radgov`, `status`, `created_date`, `modified_date`) VALUES
(1, 2, 'Application Development', 'Application Development', '5ec3dc9fdca80_23495.png', '5eeda13d66b0d_61934.png', 'Creating custom-made applications and software that mould well into your organisation\'s needs.<br><br>\r\nAs opposed to the software made for masses, custom made softwares prove advantageous to organisations as it reduces the need to buy extra hardware, eliminates the need to change the business processes to suit the software, the development team is always available for quick and efficient resolution of queries and issues, the intellectual property right on a custom made software offers an advantage of easy upgradation and enhancement when the need arises in future.', 'Customization based on client resources~High performing~Feedback system~Efficient post-implementation support', 'fa fa-user~fa fa-signal~fa fa-comments-o~fa fa-superpowers', '5ec7fb2f14794_02359.png', '<p>Custom-creation eliminates need to change business procedures</p><p>Eliminates need to use multiple applications</p><p>Savings on hardware acquisition costs</p><p>Future upgradation and enhancement made easy with Intellectual Property Rights</p><p>Reduced external threats</p>', '5ec3dcedc1be5_93516.png', 'We, at RADgov, design and develop custom-made applications for our clients based on their requirements and resources. We follow a consultative and collaborative approach while developing any custom application and put the application through an extensive quality assurance (QA) test so as to ensure that the final solution meets all business requirements; we also conduct user training and provide continuing post-implementation support so that the solution created successfully meets its purpose.', 1, '2020-05-19 18:51:38', '2020-06-23 21:03:26'),
(2, 2, 'Application Migration', 'Application Migration - Code Conversion, Technology Migration / Legacy Modernization ', '5ec411484feca_95012.png', '5eeda165e4068_12657.png', 'Whatever your reason for migrating your trusted applications is, we use the best practices to ensure that your applications are moved safely and effectively\r\n<br><br>\r\nApplication migration is the process of moving an application program from one environment to another. For such migration to be successful, use of middleware products may be required to bridge any gaps between technologies. To help in successful migration of an application it is essential to perform an assessment, map out a migration strategy, develop a cloud governance framework, train the staff as early into the process as possible, proper management of software licensing and conduct multiple tests to ensure successful migration. <p></p>', 'Team of experts conduct a study of the project, application and other aspects involved in migration~Migration carefully planned and phases decided based on criticalness of workloads~Training provided to staff wherever required ~Multiple tests are conducted during and post migration', 'fa fa-users~fa fa-check-circle-o~fa fa-thumbs-o-up~fa fa-superpowers', '5ec7fbe805c11_50129.png', '<p>Quick deployment of applications and services</p><p>Reduced complexities of infrastructure </p>\r\n<p>Improved cost management</p><p>Enhanced security features</p><p>Increased flexibility of operations resulting in better performance</p>', '5ec412e6adeca_51836.png', 'We adopt standard processes while addressing migration requests from clients for their already existing applications, and we also implement customized strategies as required for effective migration. We encourage clients and guide them wherever required with regard to the best practices that can keep their operations functional even during the migration, including suggesting automation of repeated patterns by the organisation which can help speed up the migration process and lower risks of disruption of business.', 1, '2020-05-19 22:40:28', '2020-06-20 11:10:59'),
(3, 2, 'Application Integration', 'Application Integration - Collaboration / Information Worker Solution, Business Intelligence & Analytics (DW/BI)', '5ec4134763d11_48620.png', '5eeda194e049a_63581.png', 'A step towards the next level of success and glory for your business that starts with making access, functionality and control of data simpler\r\n<br><br>\r\nApplication integration is the process of enabling independently designed applications to work together. Its main aim is to provide access to data and functionality through different mechanisms for a better control of information flow. It helps the heads of an organization to get an overview of the functioning of every employee, the current status of their IT processing and different policies related to marketing strategies, and also to identify the full potential of their software investments. Choosing enterprise application integration is advisable for business heads who wish to be as precise and perfect as possible in their management.', 'Enables keeping separate copies of data consistent~Orchestrates integrated flow of multiple activities performed by disparate applications~Single user interface or application service provides access and functionality to data from independently designed applications~Different interfaces manage different data flow', 'fa fa-database~fa fa-line-chart~fa fa-cubes~fa fa-clone', '5ec7b5ad6a85a_79840.png', '<p>Simplifies access and functionality of data, enabling better flow of information</p><p>Provides overview of the functioning of every employee, project and strategy</p><p>Allows business to identify full potential of software investments </p><p>Provides standard mechanism to sync information and govern interactions between systems and applications</p>', '5ec4148cd8033_63402.png', 'Our application integration solutions are designed in a way to let client businesses quickly integrate systems and applications in a way as to improve business performance by making use of evolving technologies. The application integration technology that we use offers comprehensive benefits that not only reduce strain on your business activities, but also offer time and cost benefits by avoiding complex connections. ', 1, '2020-05-19 22:47:27', '2020-06-23 21:04:23'),
(4, 2, 'Application Management', 'Application Management - Managed Testing Services, Application Outsourcing, Application Maintenance', '5ec414e717679_74638.png', '5eeda1bc3467c_05471.png', 'All-pervasive solutions for efficient and best utilization and effective maintenance of applications\r\n<br><br>\r\nManagement of applications throughout their lifecycle usually involves three steps, i.e., analysing applications to identify any improvement; employing capacity planning software or such to identify future application bottlenecks; and application team working with end users to ensure smooth flow of the processes. With the right tools in place and smart management, the life of IT resources can be extended, and costly upgrades avoided.', 'Fault analysis~Design update~Upgrades and patches~Code review ~Testing~Application enhancements~24×7 Support & maintenance of application systems', 'fa fa-bar-chart~fa fa-wrench~fa fa-cloud-download~fa fa-code~fa fa-search~fa fa-superpowers~fa fa-phone-square', '5ec7b9ed94361_02948.png', '<p>Increased performance and productivity</p><p>Ease of business continuity during change</p><p>Better end-user experience</p><p>Reduction in overall cost and time investment</p><p>Offers flexibility and easy scalability</p><p>Provides new insights into business</p>', '5ec414ed4e93d_21854.png', 'We, at RADgov, study and plan all-encompassing application management and maintenance solutions which can help in increasing the effectiveness of your applications, wherein the services include analysis, update, upgrades, reviews and tests of every big or small segment of the application. Our flexible support models are customized by our efficient team of experts to meet your business needs and the services are offered across multiple organisations, locations and systems. We also ensure that our clients get the best of our services and support 24×7.', 1, '2020-05-19 22:53:49', '2020-06-20 11:12:24'),
(5, 2, 'COTS System Integration', '', '5ec4165f48805_65734.png', '5eeda1e238e6a_16527.png', 'A fast growing software engineering domain that merges commercial-off-the-shelf systems supportive to business activities\r\n<br><br>\r\nCOTS integration means the amalgamation of one COTS software with another. Though one of the software to be integrated needs to be COTS software, the other can either be COTS or non-COTS. Integrating pre-existing components is not the same as custom development because the components in integration might not have been designed to meet project-defined conditions. Hence well-planned and properly defined COTS integration is extremely essential so as to enable harmonized functioning of the systems integrated.', 'Individual test of components to assure proper functioning~Tailored to provide increased system functionality~Individual testing of every component to assure proper functioning~Based on an interface that explicitly models the role of components', 'fa fa-spinner~fa fa-desktop~fa fa-thumbs-o-up~fa fa-gears', '5ec7fc8153b8b_15062.png', '<p>Better business and technical functionality</p><p>Increased reliability </p><p>Less dependence since components integrated source from different environments</p><p>Time and cost beneficial</p><p>Reduced software development and testing costs</p>', '5ec416648bd7a_58924.png', 'We essentially understand the functionality of the COTS components that need integration and how they modify the end-user business processes and requirements, thereby ensuring that the resulting architecture is run the right way. We offer end-to-end solutions right from independent testing services that assess the compatibility of the components to ensuring maintainability and adaptability of the integrated product in the business environment. We offer solutions with measurable returns on your investment. ', 1, '2020-05-19 22:58:21', '2020-06-20 11:13:04'),
(6, 2, 'Project Management', '', '5ec4174fb8370_82640.png', '5eeda209d8e49_50942.png', 'We handle every aspect and every phase of your dear project from start to finish, from scratch to success.\r\n<br><br>\r\nProject management is a process that involves development of a project plan including defining and confirming project goals, planning steps for achievement of goal, identifying tasks and resources required, determining budgets, fixing timelines for its completion and managing implementation of the project plan. Projects are normally managed in different stages, like, definition, feasibility, planning, implementation, evaluation and realization.', 'Detailed project planning, scheduling and budgeting~Time tracking~Routine reporting~Single location to access all data~Customizable workflow', 'fa fa-usd~fa fa-clock-o~fa fa-files-o~fa fa-server~fa fa-exchange', '5ec7bf3f6a1cf_51320.png', '<p>Provides fresh perspective on your project, and its suitability to your business strategy</p><p>Ensure efficient use of resources </p><p>Accurate setting of scope, scheduling and budgeting</p><p>Satisfies various needs of project’s stakeholders</p><p>Mitigates risks</p>', '5ec4175ce623c_35206.png', 'Our team conducts a detailed study of the various facets of the project involved, and exercises extreme caution in executing the several stages of project management through the stages such as planning of the goals, expected deliverables and steps for achievement; assessing the potential risks and ways to mitigate them using comprehensive and systematic approaches; strategic implementation of the plan and evaluating the growth and development in the project during and after implementation of the projects.', 1, '2020-05-19 23:02:25', '2020-06-23 21:05:28'),
(7, 2, 'Cyber Security', 'Data Protection Services- IT/ Cyber Security', '5ec4185cab4f1_17258.png', '5eeda234b7a92_36594.png', 'From cyber security to blockchain use to crypto-currency, we find you the best way to keep your data safe and your organisation safer.\r\n<br><br>\r\nData Protection compliance is a must for any business. Failure to comply with the regulatory norms can lead to significant charges, the extent of which may vary from one country to the other. Every business needs to make security the topmost priority to ensure that its computer systems are safe and secure, failing which the business can be at a significant risk.', 'Automatic and secure replication/ archiving/ backup and recovery of data~Capacity expansion and additional security features on demand~Solutions cover compliance of local regulatory measures~Continual innovation in products and solutions to keep your data protected', 'fa fa-shield~fa fa-lock~fa fa-snowflake-o~fa fa-database', '5ec7c06b7946c_06452.png', '<p> Greater confidence among stakeholders and customers </p><p>Reduced data maintenance costs </p><p> Helps better decision making </p><p> Mitigates risks of privacy </p><p> Increased reliance during disaster recovery </p>', '5ec418619d01c_97356.png', 'We are experienced and hold expertise in data protection and cyber security from policy assessment and drafting to insurance and data subject access requests, cross-border data flows, cyber breach, litigation, and dealing with information regulators.  We extend support in the aspects of privacy, cyber security, and data protection to blockchain use, crypto-currency and all necessary online regulatory compliance issues.', 1, '2020-05-19 23:06:23', '2020-06-20 11:14:24'),
(8, 2, 'GIS Development', 'Geographic Information Systems (GIS) Development', '5ec4193446fa4_15629.png', '5eeda25528f6e_93461.png', 'The effective tool for problem solving and decision making processes, and visualization of data. \r\n<br><br>\r\nA geographic information system (GIS) is a complex system consisting of features such as software, hardware, staff and data. Geospatial data collected through this system can be used to determine the location of features and their relationship to other features, the density of features in a given space, movements within an area of interest, how a specific area has changed over time and so on.', 'Development of required project documentation ~Development of suitable GIS as per client need~Post-delivery support and updates~Offers desktop, web and mobile applications and services~Custom software and database design', 'fa fa-user~fa fa-signal~fa fa-comments-o~fa fa-superpowers~fa fa-table', '5ec7c1a821445_21978.png', '<p>Cost saving as a result of increased efficiency</p><p>Helps companies and government officials in better decision making</p><p>Maps and visualizations aid improved understanding and communication </p><p>Improved geographic record keeping</p><p>Improved allocation of resources and planning</p>', '5ec41938e5ebc_94730.png', 'RADgov designs and develops geographic information systems after studying the exact requirement of the client. We design the GIS to capture, store, analyze, manage, and present all types of geographical data. The system is developed to support mapping features like- mapping where things are, mapping quantities, densities, and change, and finding what is inside or what is nearby the feature. Our team of professionals offer you the most secured, strong and scalable GIS development services assuring accurate and quick results.', 1, '2020-05-19 23:10:47', '2020-06-23 21:06:43'),
(9, 5, 'Architecture & Design', '', '5ec68698ecb3e_08297.png', '5eeda2dccc265_39427.png', 'Creating a technologically advanced, high performance and low cost future to suit your business needs\r\n<br><br>\r\nThe designing of embedded systems is done for performance of specific tasks, and not for general-purpose computer tasks. This progress in computer technology led to better programming languages, improvement in software development methods, and effective quality management. Special development techniques may be used to ensure that the system is safe, secure and reliable.', 'Designs of different complexity levels on offer depending on the project requirement~Coordinating modules, instruction and data to avoid bottlenecks in performance~Prototyping  and simulation on demand~Customized designing of product', 'fa fa-bar-chart~fa fa-wrench~fa fa-braille~fa fa-cogs', '5ec7c4b3bc490_72560.png', '<p>Reduced size and cost of product</p><p>Increased reliability, speed and performance</p><p>Improved product quality</p><p>Optimization of available resources</p>', '5ec4b08455612_47513.png', 'RADgov understands that it is essential for the system development team to create an architecture for the system and design it in a way to ensure that the system is suitable to the client and fulfils the specific needs it is designed for, and our team of dedicated professionals put in their full effort to study and analyze the client requirements and design embedded systems that function aptly in the larger mechanical and electrical system. ', 1, '2020-05-20 10:00:53', '2020-06-24 11:21:40'),
(10, 5, 'System Reliability', ' System Reliability / Performance', '5ec4b2af9f1db_68452.png', '5eeda2fee0b4d_65104.png', 'when developed, improves overall performance. We create embedded systems that are not only trustworthy, but also efficient and high performing.\r\n<br><br>\r\nThe dependability and performance capabilities of softwares and systems have improved significantly in the last few decades. The special development techniques of embedded systems have come to be used to ensure safety, security and reliability of the software. Fault avoidance, fault detection and fault tolerance are three approaches that can be used to develop a reliable system, which can ultimately result in high performing systems.', 'Dependable software processes~Implementation of precise formal specification~Use of static techniques~Strongly typed programming', 'fa fa-snowflake-o~fa fa-wrench~fa fa-cogs~fa fa-code', '5ec7c6ef6571d_04527.png', '<p>Increased quality with increased reliability</p><p>Faster data processing</p><p>Improved flexibility</p><p>Increased scalability</p><p>Reduced vulnerabilities due to customized development</p>', '5ec4b2b3ef323_96041.png', 'Our team puts forth every effort and undertakes every step necessary to ensure that the system we design is reliable and that the performance levels are at par with the requirements of the client. We ensure that we build systems that are cost effective for clients, but at the same time pay attention to avoiding near future redundancies. We primarily focus on avoidance, detection and tolerance of faults as a way to achieve reliability and performance.', 1, '2020-05-20 10:05:49', '2020-06-20 11:17:46'),
(11, 5, 'System Security', '', '5ec4b8a45f2fd_65049.png', '5eeda31bdc20b_68039.png', 'Creating smaller embedded systems, with increased functionalities without compromising on essential security offering.\r\n<br><br>\r\nEmbedded system security is a strategic approach wherein the software running on embedded systems is protected from possible attack vectors. Such system security requires a start-to-end approach imbibed into the system during the design phase to address security issues. To prevent attacks on embedded systems, software developers should adopt, implement and update necessary security functions during early stages', 'Minimized use of programming language constructs to ensure safe programming~Information hiding and encapsulation followed for system design and implementation~End to end threat assessment~24 x 7 support from the security response team~Security by design ', 'fa fa-terminal~fa fa-laptop~fa fa-braille~fa fa-phone-square~fa fa-shield', '5ec7c7a7eeee3_34908.png', '<p>Protected information increases safety of data and systems from technological predators</p><p>Assured information and cyber security</p><p> Diagnostic risk assessment helps businesses build the exact line of security as required </p><p> Anti-tamper mechanisms control, encryption standards and such ensure avoidance of physical and malware threats. </p>', '5ec4b8ecd84e4_10725.png', 'Our team of specialists take the matter of technological security very seriously, and not only do they adopt necessary measures to ensure security at the designing stage, but also guide the clients even post implementation to update the firmware regularly, limit access to systems on a need basis, provide a way for network administrators to monitor connections and allow integration with third-party security management systems.', 1, '2020-05-20 10:56:19', '2020-06-20 11:18:16'),
(12, 2, 'Testing', '', '5ec4bff5a3c68_87619.png', '5eeda2797295b_43920.png', 'Ensuring that you are offered the best product that would not fail you; assuring you that we do our best to give you nothing less than the best\r\n<br><br>\r\nEmbedded testing is checking the attributes of both software and hardware in an embedded system. Any software or application may be built paying attention to every detail of feasibility, security, reliability, performance etc. But to know if these objectives are fulfilled, full-fledged and effective tests need to be conducted to know if the product developed works in practicality as per requirement.', 'Observation of the software state to ensure compliance and conformance of requirements~Simulation based on need~Continuous updates based on test results~Comprehensive testing offers answers to all questions relating to compatibility, integration, validation etc. ', 'fa fa-sliders~fa fa-tasks~fa fa-spinner~fa fa-check-square-o', '5ec7c3946e378_38562.png', '<p>Finds bugs in the software</p><p>Helps reduce organisational risks relating to operation and security</p><p> Cuts down development and maintenance costs </p><p> Improves performance </p><p> Once tested and resolved, defects are hard to reproduce</p>', '5ec4bffd4bb03_70139.png', 'Our team conducts extensive testing processes to check the dependability of the software processes, to see that it meets all the quality assurance standards and formal specifications stated as required, to ensure that the programming is safe and the information is protected. Static verification techniques are also used in verifying and testing the strongly typed programming language as well as the other aspects of the system.', 1, '2020-05-20 11:01:26', '2020-06-20 11:15:33'),
(13, 6, 'IT Professional Services', '', '5ec4c0f7ac797_02657.png', '5eeda370beed6_02683.png', 'Standing in support of mobility of gadgets, employees and data… creating an infrastructure that can remotely provide solutions and manage devices.\r\n<br><br>\r\nSubstantial technological developments have occurred over the past few decades, and in the light of such development, laptops and smartphones have overtaken traditional computers; and everything from employees to corporate data have gone mobile. As a result, the possibilities/ instances of inconveniences and risks have spiked up. This being the case, IT professional services offer a support system to mobile business activity and functionality, also facilitating safety of confidential business data and resources. ', 'Management and control of remote devices~Data and content management~Use of MDM security controls to operate, manage and secure machines that belong to the organisation~Email management ~ OS updates and remote troubleshooting', 'fa fa-cloud-upload~fa fa-database~fa fa-lock~fa fa-envelope~fa fa-mobile', '5ec7ca935e54b_19048.png', '<p> Taking access of remote devices helps the IT team to fix issues like blacklisting unwanted apps, troubleshooting, etc. </p><p> Helps IT admins set up proper conditional access to corporate emailing, thereby keeping corporate data safe </p><p> Ease of finding lost devices and remotely wiping data to keep it away from fraudulent hands. </p><p> Helps patch OS vulnerabilities and prevent malware attacks. </p>', '5ec4c0fc03d4f_46928.png', 'To increase convenience and security in the situation of mobility of devices, data and staff, our team crafts MDM solutions to offer features covering aspects from remote device management for blacklisting unwanted apps, to remote control for troubleshooting and fixing issues on remote machines by using security controls such as data management, content management, OS updates, device tracking, and remote wipe among the others.', 1, '2020-05-20 11:06:56', '2020-06-24 11:27:47'),
(14, 6, 'System Integration', '', '5ec4c23051239_06291.png', '5eeda38da1023_49826.png', 'Eases functioning of your employees, even when working remotely, by bringing data components to one place.\r\n<br><br>\r\nWhile several organizations administer devices and applications to employees using MDM products/services, it becomes extremely essential for corporate data to be segregated, emails and corporate documents to be secured on such devices, mobile devices including laptops and handhelds of various categories to be managed and integrated. MDM products help administrators of organisations to integrate their existing setup with the MDM environment.', 'Integration with various systems~A dedicated integrator to provide implementation services~Unified and holistic approach to data governance~Qualified, certified and customized solutions', 'fa fa-cloud-upload~fa fa-database~fa fa-lock~fa fa-envelope', '5ec7cc72691b7_21945.png', '<p> Enables mobile access to enterprise applications and data </p><p> Ability to integrate with various systems and link all data eases flexibility and functionality. </p><p> Increased availability of physical and virtual components </p><p> Improvement in the quality of organisational data </p><p> Improves workforce efficiency </p><p> Offers end-to-end visibility to forecasting business, competition, revenue and workforce performance </p>', '5ec4c236a11ad_42093.png', 'Our team facilitates the process of integration of various categories of devices by using suitable products to support easy integration with Exchange Server. This involves integrating emails, corporate documents etc, so that the corporate data remains safe regardless of the devices they are used in or managed with.', 1, '2020-05-20 11:10:58', '2020-06-20 11:20:10'),
(15, 6, 'Operation Support', '', '5ec4c3165d0e9_69023.png', '5eeda3afa7d21_98517.png', 'To help your business get over all operational concerns… To help you streamline the operations and get the best out of resources \r\n<br><br>\r\nTechnical problems can be a major hindrance for organisations and their employees, especially when the employees are working through their mobile devices away from locations where they can easily avail / access technical assistance. Operation support is, therefore, essential in order to keep the activities running.', 'Support tasks help perform, organize and streamline operational tasks to reduce potential errors~Provide technical assistance and/ or related training to clients~Analysis of causes of malfunctions and offering resolution~Regular logs of operational issues and maintenance activities ', 'fa fa-phone-square~fa fa-envelope~fa fa-check-circle-o~fa fa-pencil-square-o', '5ec7cd7b04b9d_85937.png', '<p> Fixes system related issues of employees through remote operation support </p><p> Email management made easy even with mobility </p><p> Keeps organisational data safe and away from fraudsters and hackers. </p><p> Helps patch OS vulnerabilities and prevent malware attacks. </p>', '5ec4c31b06dd6_24506.png', 'Our team offers assistance by providing operational support and/ or training the clients’ technical team in providing such support as a part of mobile device management. Remote troubleshooting to fix mobile device issues; remote deployment of critical OS updates to patch OS vulnerabilities and prevent OS-targeted malware attacks; locating lost devices in times of need and remotely clearing corporate data from them to keep data safe in unforeseen circumstances; detecting compromised devices; securing an organization’s network communication by deploying proxy configurations and such other benefits may be obtained by using MDM systems.', 1, '2020-05-20 11:14:16', '2020-06-24 11:29:24'),
(16, 7, 'Desktop Services', '', '5ec4c41541007_30297.png', '5eeda429300d3_18329.png', 'Remote offering of operation and administration services and facilities at every employee’s desk\r\n<br><br>\r\nDesktop service providers, be it the internal team or outsourced, should be agile and efficient to be able to handle multiple queries and address issues raised by multiple systems/ employees simultaneously. It is also essential that the solution chosen addresses the unique needs of the respective organisation.', 'Remote provision of key operation and administration facilities to every employee~24 x 7 integrated support through online chat features, emailing and telephone~Provision of knowledge database of FAQs and solutions~Escalation procedure management feature~Service request management feature', 'fa fa-bolt~fa fa-phone-square~fa fa-database~fa fa-dot-circle-o~fa fa-magic', '5ec7cf7624ce5_89017.png', '<p> Reduced additional hardware costs </p><p>Provides overview of the functioning of every employee, project and strategy</p><p> Enhances mobility of workforce </p><p>Enables easy scalability with performance</p><p>Increased security</p><p> Reduction in cost of maintenance of end user desktops </p>', '5ec4c418daf5d_92486.png', 'Under our Desktop Support Services, we remotely offer operation and administration services for desktop deployments and bring key service facilities to your employees’ desks. We tend to every small requirement of the client company through our technical support service features like offering 24 x 7 integrated support through online chat features, emailing and telephone; providing a knowledge database of FAQs and solutions for information and troubleshooting purposes; service request management; escalation procedure management through communication medium; and more.', 1, '2020-05-20 11:19:24', '2020-06-24 11:32:13'),
(17, 7, 'Server Management', '', '5ec4c51d0b756_86503.png', '5eeda44a1ce6e_79203.png', 'Secure, faster and cheaper fulfilment of all your server related needs\r\n<br><br>\r\nServer administration and management services normally entail monitoring of the server and apps running on the server. Most server management tools enable organisations to manage machines across a range of sites in an efficient manner. These services not only help in better handling of server related tasks and troubles, but also offer enhanced data security and ease of scalability.', 'Monitoring health of operating systems~OS troubleshooting, repair, installation, configuration and maintenance~Daily backup and backup restoration~Security configuration~Installation and maintenance of applications and softwares', 'fa fa-window-restore~fa fa-sliders~fa fa-cloud-upload~fa fa-gears~fa fa-cubes', '5ec7d07aa38a0_63142.png', '<p> Lets you stay focussed on your core business by relieving your server-related stress </p><p> Cost effective </p><p> 24×7 Support enhances productivity </p><p> Reduced labour cost </p><p> Reduced server downtime </p>', '5ec4c5237732c_25760.png', 'We provide services for all commonly available operating systems such as Linux, Unix and Windows. Some common issues covered under our server management plans are- Monitoring the health and statistics of operating systems, their downtime response & system reboot; operating system troubleshooting, repair & patches; installation, setup, configuration & maintenance of mail servers; installation, setup, configuration & support for DNS servers, web servers and database servers; file management system; daily backup system and backup restorations; installation and maintenance of common utilities and applications and softwares; security related configurations; identifying and analysing critical system failure; and more.', 1, '2020-05-20 11:23:34', '2020-06-24 11:35:00'),
(18, 7, 'Database Services', '', '5ec4c60f05181_40532.png', '5eeda46b89e0b_64189.png', 'Offering deployment and configuration services efficiently and helping you fine tune and plan the business scalability options\r\n<br><br>\r\nDatabase solutions and services play a major role in leveraging infrastructure data to take the organisation ahead in the path of growth. They ensure protection and monitoring of customer databases through provision of a secure database environment, monitoring database performance, and establishing backup and recovery procedures. Some companies internally manage database related activities. However, such internal handling has proven to be cumbersome in terms of cost and manpower. Hence, outsourcing database services is mostly an option worth consideration.', 'Storing mission critical transactional data~Business intelligence application~Sharing of data with multi-user system~Restriction of unauthorized access~Backup and recovery facilities', 'fa fa-hdd-o~fa fa-users~fa fa-share-alt-square~fa fa-lock~fa fa-upload', '5ec7d32870c38_78214.png', '<p> Reduces vulnerabilities and risks </p><p> Enhanced security </p><p> Active tracking possible </p><p> Reduced server space requirement </p><p> Quick access and ease of maintenance of information </p>', '5ec4c6135f574_89653.png', 'We offer a range of database solutions formulated on the basis of the organisational requirements of our clients. Database support packages widely include- initial database software installation, configuration & verification; backups as requested by customer or as agreed; management and monitoring of disk space; database restoration & database index rebuilding as needed; database security maintenance; database upgrades/patching; database replication, cloning for development environments as required; and more.', 1, '2020-05-20 11:27:28', '2020-06-20 11:23:50'),
(19, 7, 'Network Security Support', 'Network Security Support Services', '5ec4c6e87bad8_80172.png', '5ef21666836ba_82063.png', 'Minimizing security risks and safeguarding your organisation’s critical information at a reduced operating cost.\r\n<br><br>\r\nNetwork security is the process of taking preventative measures to protect an organisation’s IT infrastructure from unauthorized access, modification, destruction, misuse, or improper disclosure, thus creating a secure platform for the organisational users, and programs to perform their permitted critical functions.', 'Network intrusion detection and prevention~Web and firewall security~Hardware engineering and support~Vulnerability scanning and Intrusion detection~Centralized critical business operations~Anti-virus services', 'fa fa-snowflake-o~fa fa-shield~fa fa-object-ungroup~fa fa-search~fa fa-spinner~fa fa-bolt', '5ec7d425a03dd_01357.png', '<p>Superior protection because of agency’s expertise</p><p> Offers flexibility </p><p> Reduced cost and effort </p><p> Comprehensive solutions for all network security needs </p><p> Reduced pressure of managing an in-house professional team </p><p> Maximized efficiency </p><p> Rapid incident response, investigation and resolution </p>', '5ec4c6ee5a755_13602.png', 'Our network security and support solutions are based on the rule of- Protection, Detection and Reaction. Some of our services on offer in relation to network security and support are Network intrusion detection and prevention, Web security, Firewall security, Security incident and event management, Hardware support, Hardware engineering support, and more. Our proven assessment methodology and flexible delivery models not only help uncover potential critical vulnerabilities with lesser effort and cost, but offer flexibility to our clients too.', 1, '2020-05-20 11:31:52', '2020-06-24 11:37:08'),
(20, 7, 'Help Desk Services', '', '5ec4c8266304d_70954.png', '5ef1bb4cbc3ff_64031.png', 'Choose us for you everyday IT infrastructure needs and leave all system hassles to us.\r\n<br><br>\r\nHelp desk services are more of a day to day support system for quick response to users’ immediate needs and technical issues and incidents and their management and reporting.  The primary goal of the help desk is to provide efficient and quick first call resolution to queries and issues. Helpdesk services can include different aspects like technical support services, telecom support services, on-site support services or remote support services. They assist in diagnostic and preventive actions against operation downtimes and IT maintenance issues.', 'Real time chat, email and web support~Configuration and installation support~Instant diagnosis and isolation of problematic systems~Database software and application upgradation assistance~Administration and configuration support related to OS~Remote administration and maintenance of servers if required', 'fa fa-envelope~fa fa-phone-square~fa fa-cogs~fa fa-database~fa fa-spinner~fa fa-upload', '5ec7e2dcf024a_48213.png', '<p> Cost effective </p><p> Single point of contact for all IT related interruptions </p><p> Keeps your systems at par with global standards </p><p> High reliability and easy scalability</p><p> Fast and effective problem resolution </p><p> Reduced risk of data loss </p>', '5ec4c82bd106d_75248.png', 'We deliver services and solutions that offer cost related advantages without compromising on quality. Our help desk services assure 24×7 availability of skilled technical support, customer service commitment, dedicated account teams, support for all mobile devices, support for multi-location environments, configuration management support, incident & problem management.', 1, '2020-05-20 11:36:50', '2020-06-23 13:50:31'),
(21, 7, 'BCDR Services', 'Business Continuity & Disaster Recovery (BCDR) Services', '5ec4c925792eb_27865.png', '5ef216eebb71f_27465.png', 'Helping you get back on your feet after a disaster by reducing risks of loss and improving operations\r\n<br><br>\r\nBusiness continuity and disaster recovery (BCDR or BC/DR) is a set of processes and techniques used to help an organization to recover and resume its business operations in case of a disaster. It is a cumulative function of IT and business. A good business continuity and disaster recovery plan is one which holds a clear vision of varying levels of contingencies that the organisation might face; provides a well-defined set of measures for resilience and recovery; includes a communication plan; and has a comprehensive plan of actions set.', 'Risk identification~Business impact analysis preparation~Technical and advisory services~Planning development, maintenance and training', 'fa fa-certificate~fa fa-check-square-o~fa fa-comments-o~fa fa-retweet', '5ec7d8c4a30bd_40976.png', '<p> Builds confidence among customers, employees and stakeholders </p><p> Ensures compliance with industry standards </p><p> Builds a resilient organizational culture </p><p> Preserves brand value and reputations </p><p> Offers competitive advantage </p>', '5ec4c9299945a_92041.png', 'We offer disaster recovery consulting and planning and business continuity solutions that minimize data loss and assist in a quick and automated recovery of critical systems, thereby helping in returning to regular operations in a shorter span. Our services also include complete restoration of systems and applications; analytical protection of critical business technology infrastructure; replication of business-critical data; diagnosis and analysis of possible risks; recovery of protected virtual servers; simulated testing for recovery assurance; and more.', 1, '2020-05-20 11:41:04', '2020-06-23 20:21:30'),
(22, 7, 'Storage Services Including San', '', '5ec4cc1cbbcab_04628.png', '5ec4cc27eac89_02341.png', 'Our comprehensive portfolio of storage solutions help your business applications and data perform better and faster\r\n<br><br>\r\nData storage architecture solutions like SAN are used by businesses to deliver high performance and low latency at a comparatively lower cost. Centralized storage of data helps organizations to use consistent methodologies to keep their data protected, and to facilitate a fast and effective disaster recovery. While choosing a cloud service, the business heads have to consider their individual business needs instead of blindly choosing best overall storage solutions. ', 'Dedicated SAN facility~Streamlined data migration~Automatic syncing ability~Security features like file encryption~Flexible storage capacity~24×7 Support & maintenance of application systems', 'fa fa-certificate~fa fa-check-square-o~fa fa-refresh~fa fa-file~fa fa-hdd-o~fa fa-phone-square', '', '<p> Continuous availability of data </p><p> Enhanced performance </p><p> Flexibility with affordability </p><p> Regulatory compliance </p><p> Ease of access and use </p> <p> Easily scalable </p><p> Elimination of operational bottlenecks </p> <p> Improved storage utilization </p>', '5ec4cc22ce10a_83721.png', 'We, at RADgov, provide customized storage and backup solutions that fulfil the data requirements of the client while keeping the critical business information protected. Our consolidated storage approach consisting of flash storage, software-defined storage, data protection software etc. helps sustain an efficient and well-maintained system. We also offer need-based self-service portal services; daily backup service; 24×7 proactive data monitoring system; customized capacity & performance reporting; storage assessment and migration solutions among others, that help enhance the operational efficiency of the business.', 0, '2020-05-20 11:53:58', '2020-05-21 19:31:42'),
(23, 6, 'Messaging Services', '', '5ec4cd2c5c7e8_91678.png', '5eeda3cff0462_87462.png', 'Designed in understanding of your messaging needs and infrastructure availability\r\n<br><br>\r\nMessaging services, just like any other IT services, require a need-based approach. A good messaging solution is one that is designed after understanding the current and future messaging needs of the business and assessing the current messaging infrastructure. ', 'Encrypted file sharing~Facilitates sharing high volume messages~24×7 support and service~Regulation of messaging traffic', 'fa fa-share-square~fa fa-share-alt-square~fa fa-phone-square~fa fa-random', '5ec7ceb2ac233_72340.png', '<p> Minimal disruption to routine activities </p><p> Convenient and unified communication medium </p><p> Increased productivity </p><p> Increased system efficiency </p><p> Customized end-to-end compliance experience for your users </p>', '5ec4cd30cdf69_36105.png', 'We offer services from the stage of planning till execution, including client installation and migration of data for messaging systems. We help expand the infrastructural functions through integration and/or consolidation of different messaging systems and linking units. Our team determines the messaging support needed to suit the requirement of the client and works in its maximum capacity to offer updates and upgrades with minimal disruption of routine activities and business exchanges.', 1, '2020-05-20 11:59:11', '2020-06-20 11:21:15'),
(24, 7, 'Network Operations Center Management', '', '5ec4ce5425566_95247.png', '5ec4ce6116a53_61047.png', 'We implement tried and tested best practices to facilitate better and faster processes in your IT environment\r\n<br><br>\r\nA network operations center or the NOC is a primary element of the IT infrastructure for the reason that network monitoring and control, and network management is exercised from one or more of these locations; hence efficient management of the Network Operations Center becomes very critical and crucial for any business. The NOC team has to stay alert and efficient to handle issues like router monitoring, network failures, virus issues, server and network monitoring, and so on. ', '24×7 helpdesk services~Remote assistance in cases of queries or concerns~Network monitoring and troubleshooting~Remote system back up ~Data management', 'fa fa-phone-square~fa fa-check-square-o~fa fa-refresh~fa fa-cloud-upload~fa fa-folder-open', '', '<p> Minimizes downtime </p><p> Security features mitigate risks </p><p> Quick incident response </p><p> Optimized performance and quality </p> <p> Reduced operating costs </p><p> Time and labour saved </p><p> Availability of modern and high quality infrastructure </p>', '5ec4ce5a40616_60428.png', 'To clients who do not have the expertise or the multi-level staff to handle and manage the various aspects of Network Operations Center, we offer management services like Data Management with NOC; installation of network infrastructure; remote system backup to minimize downtime; remote assistance for addressing problems and queries; network monitoring and troubleshooting; 24×7 helpdesk services; and more. ', 0, '2020-05-20 12:03:37', '2020-05-22 21:56:46'),
(25, 3, 'Contract Staffing', '', '5ec4d015e9647_83071.png', '5eeda58ae1c7f_48179.png', ' Hire only for as long as you want. Test the expertise of your employees on job and get rid of your apprehensions about direct hiring.\r\n<br><br>\r\nContract staffing services are an important part of the human resource hiring process of several organisations. It helps businesses recruit the required talent for a specific span of time or project, especially when the business feels that such a resource may be redundant to the organisation after completion of a specific project or task. ', 'Professional contingency workforce management~Domestic & international recruitments~Customized contracts/engagements and hiring solutions~Access to a vast database of candidates', 'fa fa-users~fa fa-plane~fa fa-sliders~fa fa-database', '5ec7dac37a55b_32945.png', '<ol class=\"gradient-list\"><li data-aos=\"fade-up\">Cost advantage</li><li data-aos=\"fade-up\">Compliance with statutory regulations</li><li data-aos=\"fade-up\">Helps find the right fit</li><li data-aos=\"fade-up\"> Offers flexibility in staffing </li><li data-aos=\"fade-up\">Creates availability of in-house HR staff for other tasks</li><li data-aos=\"fade-up\">Access to a vast database of candidates</li></ol>', '5ec4d01a96dcb_93541.png', 'We act as a liaison between our client and prospective recruits, thereby helping businesses get their hands on the most suitable and cost-effective resources available. Our contract staffing solutions involve scouting and lining up short term employees for businesses to choose to suit their needs; handling all contractual requirements and formalities; offering a well-maintained repository of candidates for the perusal of the clients if need be; assessing the resource needs and providing efficient and productive candidates who fit the frame.', 1, '2020-05-20 12:11:10', '2020-06-24 12:00:28'),
(26, 3, 'Contract Hire Staffing', 'Contract - Hire Staffing ', '5ec4d17a62a95_37402.png', '5eeda5a4ec266_86140.png', 'Flexible and scalable staffing solutions facilitating agility of business function\r\n<br><br>\r\nContract to Hire staffing solutions are the most suitable for businesses that wish to undertake a real time assessment of the capabilities of candidates before deciding for or against employing them permanently. Contract - hire staffing allows the organization utilizing these services to review the candidate’s skills and their suitability to the organisation’s values before making the hiring commitment. It not only helps lower business liability, but also helps in choosing the best fit for the organisation', 'Professional contingency workforce management~Domestic & international recruitments~Customized contracts/engagements and hiring solutions~Access to a vast database of candidates', 'fa fa-users~fa fa-plane~fa fa-sliders~fa fa-database', '5ec7dba5c72f5_80125.png', '<ol class=\"gradient-list\"><li data-aos=\"fade-up\">Cost effective</li><li data-aos=\"fade-up\">Trial period before permanent commitment</li><li data-aos=\"fade-up\">Experiential decision making related to hiring</li><li data-aos=\"fade-up\"> Offers flexibility </li><li data-aos=\"fade-up\">Access to qualified talent</li>\r\n            </ol>', '5ec4d17fc878a_40568.png', 'We offer staffing solutions to our clients, including contract-to-hire services, in clear understanding of requirements of clients. We not only assist companies with recruiting contract employees who may be suitable to serve the company even in the long run, but also run thorough checks to ensure quality of talent recruited. Our customized hiring solutions are designed to satisfy all your needs and to find the best talents available in the market for you .', 1, '2020-05-20 12:16:03', '2020-06-20 11:29:03');
INSERT INTO `service_details` (`service_detail_id`, `sub_service_id`, `service_detail_name`, `alias_name`, `icon_image`, `banner_image`, `description`, `key_features`, `key_icons`, `features_image`, `benefits`, `benefits_image`, `why_radgov`, `status`, `created_date`, `modified_date`) VALUES
(27, 3, 'Direct Hire', '', '5ec4d25597f7b_46021.png', '5eeda5be5f46a_37249.png', 'Choose from the best set of talents through our Direct Hire Services…\r\n<br><br>\r\nAs opposed to contract- hire staffing, direct hire staffing involves appointment of employees by an organisation on a permanent basis. While contract- hire staffing puts the recruits in the payroll of the hiring agency, the recruits under direct hire go directly into the client company’s payroll.', 'Professional contingency workforce management~Domestic & international recruitments~Customized contracts/engagements and hiring solutions~Access to a vast database of candidates', 'fa fa-users~fa fa-plane~fa fa-sliders~fa fa-database', '5ec7ddc75ea92_38590.png', '<ol class=\"gradient-list\"><li data-aos=\"fade-up\">Saves efforts and costs that go into the recruitment of temporary or contract workers.</li><li data-aos=\"fade-up\">Permanent positions attract talents.</li><li data-aos=\"fade-up\">Direct hire employees are more committed and loyal.</li><li data-aos=\"fade-up\">Saves business time and resources.</li><li data-aos=\"fade-up\">Helps fill hard to find, niche positions.</li></ol>', '5ec4d259df034_29637.png', 'With a strong understanding of the labour market, deep rooted contacts in the market and immense dedication, our recruiting team is sure to find the most ideal candidates for you to hire. We utilize our resources and expertise to discover and line up the best of talents, new and old, who meet the exclusive demands of the client.', 1, '2020-05-20 12:19:04', '2020-06-20 11:29:29'),
(28, 4, 'Recruitment Process Outsourcing', '', '5ec4d312ec414_94123.png', '5eeda7496e206_18753.png', 'is a business model where a company outsources the management of the recruitment function (in whole or part) to a third party expert to drive cost, quality, efficiency, service, and scalability benefits. Steer clear of all processes and hassles of recruitment, rely on RADgov Recruitment Process Outsourcing services.\r\n<br><br>\r\nRecruitment Process Outsourcing or RPO is the total allocation of recruitment responsibility by a business to an external player. An organisation may opt for RPO as a way to utilize expertise of external agencies or to save time and funds. The objective of RPO solutions is to provide organisations with the technology, methodology and staff necessary to meet the human resource requirements of their business.', 'Professional contingency workforce management~Domestic & international recruitments~Customized contracts/engagements and hiring solutions~Access to a vast database of candidates~Complete or partial process management based on requirement', 'fa fa-users~fa fa-plane~fa fa-gears~fa fa-table~fa fa-check-circle-o', '5ec7e086ccb49_06342.png', '<ol class=\"gradient-list\"><li data-aos=\"fade-up\"> Service and scalability benefits </li><li data-aos=\"fade-up\"> Availability of skilled recruiters</li><li data-aos=\"fade-up\"> Compliance with statutory regulations </li><li data-aos=\"fade-up\"> Creates availability of in-house HR staff for other tasks </li><li data-aos=\"fade-up\">Access to  the best talents of the market </li></ol>', '5ec4d3160f35d_71463.png', 'As an RPO service provider, we act as an extension of the HR unit of our clients. Our team contributes to and manages the resource selection and hiring process to suit the client requirements. Based on the preferences of the clients, we offer on-site RPO services with a team of recruiters at the client site and off-site services where all functions are managed by us at remote locations, or even a combination of both if desired.', 1, '2020-05-20 12:22:41', '2020-06-20 11:36:05'),
(29, 8, 'Call Centre Support And Services', '', '5ec4d44301d91_23059.png', '5eeda76c246a2_98403.png', 'We offer specialist support services to all those businesses who dedicatedly provide or intend to provide continual customer service round the clock throughout the year\r\n<br><br>\r\nOver the past few decades, call centres have become a need for all kinds of businesses that wish to reach out to larger groups of prospects, and to offer better services or effectively address the queries and concerns of customers. While businesses themselves can hire a team and set up their own call centre, most find it financially viable and less painstaking to obtain call centre support and services from agencies which already possess the required expertise and resources.', 'Best in class technology~Superior call centre infrastructure and security process~Multi-channel support~Specialized call monitoring system~Inbound and outbound call services~24×7 Support & maintenance of application systems', 'fa fa-diamond~fa fa-building~fa fa-cubes~fa fa-desktop~fa fa-phone-square~fa fa-phone', '5ec7e2c3c3d4c_12479.png', '<ol class=\"gradient-list\"><li data-aos=\"fade-up\"> Saves time and critical resources </li><li data-aos=\"fade-up\"> Improves productivity of in-house staff </li><li data-aos=\"fade-up\"> Accelerates business growth through enhanced customer relationship </li><li data-aos=\"fade-up\"> Provides specialised infrastructure and industry knowledge </li><li data-aos=\"fade-up\"> Offer emergency support and scalability </li><li data-aos=\"fade-up\"> Access to global talent </li></ol>', '5ec4d44772e61_02918.png', 'At RADgov, we offer inbound and outbound call centre / BPO solutions. Our services are customised to suit the client requirements and are also crafted to provide comparative cost advantage. Our call centre support services consist of customer support; toll free services; handling queries and information requests; offering technical support; customer survey; information verification; investing technology, resources, facilities to handle client business processes and so on.', 1, '2020-05-20 12:28:33', '2020-06-24 12:03:29'),
(30, 9, 'Payrolling Services', '', '5ec4d54176504_86023.png', '5eeda789b0db2_04285.png', 'Leave your payrolling worries to us and calmly focus on the more important aspects of business.\r\n<br><br>\r\nPayroll service providers offer businesses with assistance in relation to the payment and management of contract workers. These service providers collect the wage details, hours of work, deductions, benefits etc. and handle wage payments and tax filings on behalf of the client organisation, thus relieving the company of the time-consuming and burdensome process of payrolling. ', 'Processing of salaries, reimbursements and arrears~Regular filing of tax returns~Management of regulatory compliance and risks~Integrated accounting~Direct deposit to account', 'fa fa-usd~fa fa-file~fa fa-money~fa fa-calculator~fa fa-check-square', '5eeddd5b067e1_57403.png', '<ol class=\"gradient-list\"><li data-aos=\"fade-up\"> Regulatory compliance </li><li data-aos=\"fade-up\"> Timely and complete support for employee’s payroll </li><li data-aos=\"fade-up\"> Accurate and consolidated documentation </li><li data-aos=\"fade-up\"> Reduced need for additional staffing </li><li data-aos=\"fade-up\"> Improved labour management </li><li data-aos=\"fade-up\"> Benefit of latest technology </li></ol>', '5ec4d545e7db9_80425.png', 'We, at RADgov, create comprehensive payrolling solutions for our clients which can include all or some of the services like- Filing of Tax Liability Reports; managing deductions, 3rd party payment checks, etc.; making direct deposits to every employee; customizing payroll records to suit location, department etc.; preparing Federal, State and local tax records; tracking vacations and sick days of the employee; periodic payroll registers and accounting services as required; and more.', 1, '2020-05-20 12:32:21', '2020-06-24 12:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

DROP TABLE IF EXISTS `solutions`;
CREATE TABLE IF NOT EXISTS `solutions` (
  `solution_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `icon_image` varchar(500) NOT NULL,
  `banner_image` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `description_image` varchar(300) NOT NULL,
  `feature` text NOT NULL,
  `feature_image` varchar(255) NOT NULL,
  `benefits` text NOT NULL,
  `why_radgov` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`solution_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`solution_id`, `name`, `title`, `image`, `icon_image`, `banner_image`, `description`, `description_image`, `feature`, `feature_image`, `benefits`, `why_radgov`, `status`, `created_date`, `modified_date`) VALUES
(1, 'TEAMS', 'Traffic Engineering agency management system', '5ebd6b974031a_27418.png', '5ebbc8c55bf2b_17230.png', '5ef1c7e8968ba_04387.png', 'Automating, streamlining and supporting the functionality and increasing the efficiency of the Government’s Traffic Engineering Division by encouraging better coordination and administrative processes within departments\r\n<br><br>\r\nTraffic Engineering Agency Management System is a web-application that has been designed to streamline the internal support services of the traffic engineering division. This solution is a set of modular components designed to efficiently schedule, approve, assign, track, coordinate, and prioritize and follow-up activities. This provides a common portal and medium for sharing information across the engineering divisions as well as other government agencies. This has been created to reduce paper trails and replace manual processes with electronic transactions.', '5ebbc8d22380b_46152.png', '<li> Electronically files issues and problems</li>\r\n<li> Produces job requests resulting from issues and problems</li>\r\n<li> Escalates issues/problems, requests work orders, and facilitates coordination among participants</li>\r\n<li> Electronic tracking, escalation and execution of events including approval, scheduling, assignment, tracking, prioritizing, follow-up of Service requests, Trouble reports, Inspections, Projects.</li>\r\n<li> Captures and catalogues information</li>', '5ebbc8d897373_39210.png', '<ol class=\"benefits-slider\"><li><div><p>Transforms legacy systems to latest technologies</p></div> </li><li><div><p>Applies agency business rules across all channels</p></div> </li><li><div><p>Avoids data redundancy</p></div> </li><li><div><p>Reduces system maintenance</p></div> </li><li><div><p>Provides interfaces and support with 3rd party applications</p></div> </li><li><div><p>Facilitates data accessibility across all channels</p></div> </li><li><div><p>Intuitive user interface presentation</p></div> </li></ol><div class=\"nogutter col-12\"><div class=\"benefits-border\"></div><div class=\"benefits-half-border\"></div></div><ol class=\"benefits-slider\"><li><div><p>Central database repository</p></div></li><li><div><p>Enterprise-wide system and data accessibility/availability</p></div></li><li><div><p>Enhances overall customer service and support</p></div></li></ol>', 'We, at RADgov, have designed our advanced traffic management system TEAMS to automate and consolidate manual traffic systems in order to eliminate redundant paper trails, by transforming and enhancing institutional policies and procedures with electronic capabilities. Streamlining the traffic division’s internal support services and improving exchange of information and data helps tightly integrate internal sub-divisions, enhancing communication and accountability aspects. This not only improves internal efficiencies including time and costs, but also provides capabilities and support to generate statistical and decision management reporting data on demand.', 1, '2020-05-13 14:55:05', '2020-06-23 14:44:23'),
(2, 'DAMS', 'Damage assessment management system', '5ebd6ba743d8c_74352.png', '5ebbc9029cbac_47038.png', '5ef217a284513_83195.png', 'Enterprise level application assessing, assigning, managing and implementing actions relating management of disastrous events.\r\n<br><br>\r\nDamage assessment during a disaster requires extensive coordination including determining what happened, what the immediate effects are, which areas were hardest hit, what situation must be given a priority. For a good view of all these aspects and to streamline and consolidate damage assessment, the Damage Assessment Management System was created to be a robust modular portable application that can run on a laptop or a handheld device using wireless technology and/or offline synchronization at the division.', '5ec7fa9f04295_57824.png', '<p> <li> Electronically create a damage assessment for any damages including downed wires, missing camera , missing street light, missing PED signal and missing, twisted, dangling, or damaged signal. </li><li> Automatically creates and issues work orders to corresponding section(s) for execution </li><li> Can download and upload the damages pictures to the system based on the region/route assigned for damage assessment</li><li> Extensive damage assessment reporting based on emergency-type </li><li> FEMA reporting based on emergency-type </li></p>', '5ebbc942ce6e3_92683.png', '<ol class=\"benefits-slider\"><li><div><p>Streamlines and consolidates damage assessment</p></div> </li><li><div><p>Applies agency business rules across all channels</p></div> </li><li><div><p>On-demand reporting & analytics</p></div> </li><li><div><p>Enterprise-wide Central Data Repository to avoid data redundancy while providing greater accessibility</p></div> </li><li><div><p>Electronic capabilities to reduce and/or eliminate paper trails</p></div> </li><li><div><p>Tightly integrates internal sub divisions enhancing communication and accountability</p></div> </li><li><div><p>Improves time & costs as well as overall customer service and support</p></div> </li></ol>', 'RADgov has built this enterprise level application for complete assessment, assignment, management and implementation of activities related to disastrous events. It has been created with an intent of helping damage assessment teams to quickly respond to affected areas with increased electronic communications. DAMS effectively manages the execution of specific field work order requests using workflow management approvals from supervisors in coordination with other divisions. DAMS data is stored in a central repository for all necessary FEMA reporting needs and various analytics.', 1, '2020-05-13 15:37:18', '2020-06-23 20:24:28'),
(5, 'EPAMS', 'Environment Protection Agency Management System', '5ebd05a706cb8_71930.png', '5ebcff0fd4c3c_78546.png', '5ef1ed9f140f3_09237.png', 'The tool to better coordination and administrative processes through automation and streamlining of internal support sections of environmental protection agencies.<br><br>\r\n\r\nEnvironment Protection Agency Management System is a web-application that has been designed to streamline the internal support services of the environmental protection agency. This solution is a set of modular components designed to efficiently schedule, approve, assign, track, coordinate, prioritize and follow-up activities. This provides a common portal and acts as a medium for sharing information across the division as well as other government agencies involved. This also reduces the paper trails and replaces manual processes with electron transactions.', '5ebcff9e4871f_21038.png', '<li> Electronically files issues and problems (reported by external parties, consultants, citizens, etc.) and produces job requests resulting from issues and problems</li><li> Escalates issues/problems and request work orders </li><li> Electronic tracking, escalation and execution of events </li><li> Approval, scheduling, assignment, tracking, coordination, prioritization and follow-up on essentials of actions & events like service requests, trouble reports, inspections, work orders, projects (internal/external), capturing and cataloguing of information and so on </li><li> Re-uses file location, identification information (provided by external sources)</li><li> Facilitates coordination among work order participants</li>', '5ebcffa56b364_85694.png', '<ol class=\"benefits-slider\"><li><div><p> Automates and consolidates manual systems</p></div></li><li><div><p>Transforms legacy systems to latest technologies</p></div> </li><li><div><p>Applies agency business rules across all channels</p></div> </li><li><div><p>Avoids data redundancy</p></div> </li><li><div><p>Reduces system maintenance</p></div> </li><li><div><p>Provides interfaces and support with 3rd party applications</p></div> </li><li><div><p>Facilitates data accessibility across all channels</p></div> </li></ol><div class=\"nogutter col-12\"><div class=\"benefits-border\"></div><div class=\"benefits-half-border\"></div></div><ol class=\"benefits-slider\"><li><div><p>Intuitive user interface presentation</p></div> </li><li><div><p> Eliminates redundant paper trails transforming and enhancing institution policies and procedures with electronic capabilities</p></div></li><li><div><p> Central database repository</p></div></li><li><div><p> 3rd party interface support </p></div></li><li><div><p> Improves internal efficiencies including time and costs </p></div></li><li><div><p> Enhances overall customer service and support</p></div></li></ol>', 'We developed the EPAMS enterprise wide system to automate and streamline data accessibility/availability and improve exchange of information and data by encouraging better coordination and administrative processes within departments. It offers capabilities and support to generate statistical and decision management reporting on demand and tightly integrates internal sub-divisions enhancing communication and accountability aspects. It helps the environmental protection agencies by reducing system maintenance and avoiding data redundancy issues. The application was developed with an aim of improving internal efficiencies and providing the client agencies with the benefit of time and costs', 1, '2020-05-14 13:52:16', '2020-06-23 17:25:12'),
(6, 'ATMS', 'Advanced Traffic Management System', '5ebd048c14a86_09281.png', '5ebd0020085b1_75123.png', '5ef1caf6ccd78_86350.png', 'Geographic Information System (GIS) based inventory application for maintenance and operation of the traffic management system assisting in automating and streamlining the internal processes of the Traffic Engineering Division.<br></br>\r\n\r\nAdvanced Traffic Management System is a traffic management enterprise application designed and developed focusing on the aspects of integration and automation of various processes related to installation, maintenance, monitoring and tracking of various traffic related devices which the division would use for traffic management purposes at the various roads and intersections within the region. The application is a browser-based system, which facilitates the process of filing work orders and related information electronically. The GIS for this application is designed in a way to provide the working status of installed devices and components on a real time basis through a specific framework. The technologies used in developing the application are ASP and VB, Crystal reports, DotNET, SQL Server 2000.', '5ebd002b447b7_86037.png', '<li> Electronically allows filing issues and resolving problems </li><li> Provides the ability to produce, coordinate, schedule and record activities such as those that can be globally viewed by entire teams through the execution phases of job requests.</li><li> Supports reporting in the form of a global delivery method, through distribution of reports from one central and easy-to-access location.</li><li> Provides capability of on-demand support, generating statistical and decision management reporting through consolidation of manual processes across business units </li><li> Has the ability to capture real-time status of devices, equipment and communications deployed at various locations.</li><li>The Automated Traffic Management System has the ability to capture real-time status of devices, equipment and communications that are deployed at various locations throughout the country.</li><li> Has an inventory management section that provides users with the option to enter and manage the device and component details. </li><li> Includes data regarding the device make, installation details, networking details, maintenance details, location of the device (can be pulled from the GIS section and directly entered as X, Y coordinates) etc.</li><li> Seamless integration between the GIS section and the inventory section facilitates the Traffic Division to confirm the exact location of the device on the GIS MAP and check the details of the device.</li><li> Also consists of a GIS MAP section, which is web enabled and open to the public.</li><li> Access controlled based on end user roles which can be set by the administrator.</li><li> The system is built and deployed on the Microsoft platform. The GIS section was designed and developed using ArcGIS 9.1Suite.</li>', '5ebd003341054_96287.png', '<ol class=\"benefits-slider\"><li><div><p> GIS enabled solutions for pictorial and map based references and information.</p></div></li><li><div><p> Saves time using the automated workflow based on optimized processes.</p></div></li><li><div><p> Seamless access to device data from GIS Map to Inventory information.</p></div></li><li><div><p> Elimination of data duplication and unnecessary paper documents.</p></div></li><li><div><p> Centralized data repository and access.</p></div></li><li><div><p> Reduces cost and increases staff efficiency. Complete web-based, 24/7 access</p></div></li><li><div><p> Built with a component based architecture, facilitates easy customization and minimizes implementation efforts</p></div></li></ol>', 'RADgov created this application to support sections of the Traffic Engineering Division by encouraging better coordination and administrative processes within the department. We work closely with the traffic department to design the data and information capturing screens such that vast amounts of data can be captured using a single screen for a specific device. This application is a browser-based system, which facilitates the process of filing work orders and related information online electronically. This solution is a set of modular components designed to efficiently schedule, approve, assign, track, coordinate, prioritize, and follow-up activities. This provides a common portal and medium for sharing information across the engineering division as well as other government agencies. Our system is worth the choice because it automates management processes and allows efficiency in addressing issues and concerns improving efficiencies including time and costs.', 1, '2020-05-14 13:56:43', '2020-06-23 14:57:22'),
(7, 'DATA MANAGEMENT', 'Data Management Solutions', '5ebd0a0d7f301_03817.png', '5ebd02d7b209e_08514.png', '5ef1cef0a6f88_70832.png', 'An essential element of business involving standardization, consolidation and quality control of organizational data, mismanagement of which can bring bad fate to the organisation.<br></br>\r\n\r\nData Management Solutions include Enterprise Information Management (EIM), Master Data Management (MDM), Reference Data Management (RDM) Solution and Implementation. One of the solutions, MDM is the process of creating an authoritative data source. Many business leaders assume that integrating master data is an IT department related issue. But the fact is that MDM impacts all areas of business, as the information included in these processes relate and apply to customers, vendors, products, locations and more. Failure to manage the data properly can result in widespread negative consequences. Business Intelligence and big data predictive analytics services also act as major change makers in business, since these technologies help bring insights from such data into the routine decision making process.', '5ebd0243e694c_07641.png', '<li> Deletes duplicate data</li><li> Eliminates incorrect data</li><li> Identifies and classifies data consistently and accurately</li><li> Creates a central repository to house data etc.</li><li> Includes features like data mining, online analytical processing, querying and reporting</li><li> Involves application of advanced analytic techniques to very large data sets</li>', '5ebd02671baa2_61342.png', '<ol class=\"benefits-slider\"><li><div><p> Better-informed decision-making based on high-quality data and related reporting</p></div></li><li><div><p> Deeper understanding of key players in business-critical processes, including clients and partners of the organisation</p></div></li><li><div><p> Decrease in the amount of manual labor required to manage data</p></div></li><li><div><p> Enhanced efficiency and process streamlining – particularly for complex forms and approvals that rely on data accuracy</p></div></li><li><div><p> Better and more effective marketing campaigns</p><p></p></div></li><li><div><p> Drives new revenues</p></div></li><li><div><p> Gains competitive advantages over business rivals</p></div></li></ol>', 'The Data Management Solutions of RADgov are customized and designed in a way as to increase the effectiveness of data management and optimize internal business processes by processing data of different sizes and forms. We try and continually innovate newer products and services providing options and giving customers a chance to choose what they actually want. These solutions are designed to spot issues that need addressing and mitigating the risks. They also help in accelerating and improving decision-making, thereby increasing operational efficiency of the company. Our data management solutions also identify market trends which help decision makers bring out innovations that can put them ahead in the race.', 1, '2020-05-14 14:04:52', '2020-06-23 15:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `sub_services`
--

DROP TABLE IF EXISTS `sub_services`;
CREATE TABLE IF NOT EXISTS `sub_services` (
  `sub_service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `sub_service_name` varchar(255) NOT NULL,
  `is_more_service` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`sub_service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_services`
--

INSERT INTO `sub_services` (`sub_service_id`, `service_id`, `sub_service_name`, `is_more_service`, `image`, `banner_image`, `description`, `status`, `created_date`, `modified_date`) VALUES
(2, 2, 'Application Services', 'Yes', '5ec3c438dbe01_39562.png', '5eeda0daa898f_38571.png', 'RADgov offers a variety of services to its government and commercial clients such as services relating to development and management of applications, embedded systems, mobile device management, and infrastructural services.', 1, '2020-05-19 17:04:36', '2020-06-20 11:08:38'),
(3, 3, 'Staff Augmentation Service', 'Yes', '5ec3c522606dd_52681.png', '5eeda55c91d6d_85369.png', 'RADgov offers extensive workforce management services to help businesses to forecast their human resource requirements, acquire and manage talent, and also track and optimize the workforce performance. Staff augmentation services enable easy hiring and management of employees globally, mainly with the aim of augmenting the capacity and quality of the organisation without increasing financial or resource burdens.', 1, '2020-05-19 17:08:13', '2020-06-24 11:58:19'),
(4, 3, 'Recruitment Process Outsourcing', 'No', '', '5ecb5b1b92875_61893.jpg', '', 1, '2020-05-19 17:09:24', '2020-05-25 11:13:58'),
(5, 2, 'Embedded System Development', 'Yes', '5ec3ecd00a685_50896.png', '5eeda2aa7e226_58317.png', 'Development of embedded systems must be as per your requirements and not as per the fancies of the service providers. With our vast experience, we bring to you the best design and development solutions & services that perfectly fit your specific needs. State-of-the art technologies and methodologies are adopted to bring together various components of the embedded system, making your systems reliable, and helping your team create more secure products of better quality.', 1, '2020-05-19 19:57:53', '2020-06-24 11:20:37'),
(6, 2, 'Mobile Device Management', 'Yes', '5ec3ed1f2f789_24317.png', '5eeda34977b94_52973.png', 'Mobile device management (MDM) is the process of managing mobile devices by defining policies and deploying security controls like mobile application management, mobile content management, and conditional exchange access. Since the main intent of MDM is to increase functionality and security of mobile devices without increasing the costs or downtime, the applicability mostly extends to both company- owned and employee-owned devices employed for business use. A well thought of investment in MDM is a must for any enterprise big or small.', 1, '2020-05-19 19:59:03', '2020-06-24 11:22:23'),
(7, 2, 'Infrastructure Management Services', 'Yes', '5ec3ed927464a_73690.png', '5eeda3fba9684_56418.png', 'Management of IT Infrastructure and keeping pace with the evolving trends and innovations is a herculean task. Infrastructure management refers to the management of processes, equipment, dat and other operation components, for overall effectiveness. It involves management of systems, network and storage. The IT heads of any organisation must first define the services, controls, and reporting that are both required and desired to enhance operations before looking for IT and infrastructure management solutions.', 1, '2020-05-19 20:01:22', '2020-06-24 11:30:58'),
(8, 3, 'Call Centre Support And Services', 'No', '5ec3f6939ae4c_89523.png', '5ec3f69c8c43c_75438.png', '<b> Call Centre Support and Services </b> - We offer specialist support services to all those businesses who dedicatedly provide or intent to provide continual customer service round the clock throughout the year\r\n\r\nOver the past few decades, call centres have become a need for all kinds of businesses that wish to reach out to larger groups of prospects, and to offer better services or effectively address the queries and concerns of customers. While businesses themselves can hire a team and set up their own call centre, most find it financially viable and less painstaking to obtain call centre support and services from agencies which already possess the required expertise and resources.', 1, '2020-05-19 20:39:20', '2020-05-19 20:39:20'),
(9, 3, 'Payrolling Services', 'No', '5ec3f70080b53_01748.png', '5ec3f7053035e_76514.png', '<b> Payrolling Services </b> - Leave your payrolling worries to us and calmly focus on the more important aspects of business.\r\n\r\nPayroll service providers offer businesses with assistance in relation to the payment and management of contract workers. These service providers collect the wage details, hours of work, deductions, benefits etc. and handle wage payments and tax filings on behalf of the client organisation, thus relieving the company of the time-consuming and burdensome process of payrolling.', 1, '2020-05-19 20:41:25', '2020-05-19 20:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `timelines`
--

DROP TABLE IF EXISTS `timelines`;
CREATE TABLE IF NOT EXISTS `timelines` (
  `timeline_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(10) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  PRIMARY KEY (`timeline_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timelines`
--

INSERT INTO `timelines` (`timeline_id`, `date`, `description`, `status`, `created_date`, `modified_date`) VALUES
(1, '2005', '<h5>New Clients Added</h5> \r\n<li>RADGov Incorporated and Headquartered in Fort Lauderdale, FL by Dynamic Women Entrepreneurs</li>', 1, '2020-04-27 11:49:14', '2020-07-11 14:39:50'),
(2, '2006', '<li>Office Opened in New Jersey</li>\r\n<br>\r\n<h5>New Clients Added</h5>\r\n<li>Preferred Supplier to Broward County</li><li>Preferred Supplier to Miami Dade County</li><li> Preferred Supplier to Palm Beach County</li><li> State NE </li><li>State FL </li><li>State NC </li><li>State NY </li><li> State RI </li><li>State VA </li><li>State OR </li>', 1, '2020-05-13 19:04:29', '2020-07-11 14:40:17'),
(3, '2007', '<h5>New Clients Added</h5>\r\n<li> Northrop Grumman </li><li> State SC</li>', 1, '2020-05-13 19:05:01', '2020-07-08 18:02:34'),
(4, '2008', '<h5>New Clients Added</h5>\r\n<li> Raytheon Systems Company</li>', 1, '2020-05-13 19:05:29', '2020-07-08 18:02:03'),
(5, '2009', '<h5>New Clients Added</h5>\r\n<li>Johnson &amp; Johnson</li><li>Montclair State University</li><li>Unisys</li>', 1, '2020-05-13 19:06:27', '2020-07-08 18:01:19'),
(6, '2010', '<h5>New Clients Added</h5>\r\n<li>Seaport-e </li><li>Biogen </li><li>Eastman Kodak</li><li>Harley Davidson </li><li>Harris Bank</li>', 1, '2020-05-13 19:07:18', '2020-07-08 18:00:46'),
(7, '2011', '<h5>New Clients Added</h5>\r\n<li> American Red Cross</li><li>BCBS Florida</li><li> First Energy Services Company</li><li>John Deere</li>', 1, '2020-05-13 19:08:16', '2020-07-08 17:59:58'),
(8, '2012', '<h5>New Clients Added</h5>\r\n<li> AstraZeneca</li><li>Opened our office in DC </li><li> GE Aviation, Capital </li><li> Harris Corporation</li><li> McAfee </li><li> Southern California Association of Governments </li><li> State ME </li><li> State WI </li><li>Volkswagen</li>', 1, '2020-05-13 19:09:30', '2020-07-08 17:57:46'),
(9, '2013', '<h5>New Clients Added</h5>\r\n<li>Avery Dennison</li><li>GE Healthcare</li><li>Kimberly Clark</li><li>SONY Computer Entertainment America</li><li>State AR</li><li>State NJ</li><li>State IA </li><li>State OH </li><li>TERADATA</li><li>US Department of Agriculture</li><li>MD Maryland Judiciary Administrative Office of the Courts</li><li>The University of Missouri</li><li>MN Hennepin County Information Technology</li><li>PA Pennsylvania State System of\r\nHigher Education (PASSHE)</li>  ', 1, '2020-05-13 19:10:38', '2020-07-15 10:25:41'),
(10, '2014', '<h5>New Clients Added</h5>\r\n<li>CGI</li><li>Commonwealth of PAt</li><li>Eastern Municipal Water District</li><li>Florida Department of Environmental Protection</li><li>GE Transportation</li><li>Perspecta </li><li>Novartis</li><li>State CO</li><li>YELLOW PAGES</li><li>CA Carlsbad IT Department</li><li>State of Minnesota</li><li>The University of Oklahoma</li><li>CA Eastern Water Municipal District</li><li>The Arizona Department of Transportation (ADOT)</li>\r\n', 1, '2020-05-13 19:11:49', '2020-07-15 10:27:07'),
(11, '2015', '<h5>New Clients Added</h5>\r\n<li>Awarded GSA IT Schedule 70</li><li>Citizens Property Insurance </li><li>State AZ </li><li>State MI</li><li>Synchrony Financials</li><li>United States House of Representatives</li><li>CA Southern California Association of Governments (SCAG)</li><li>CA Santa Clara Valley Water District</li><li>NC Department of Insurance </li><li> PA Port Authority</li><li>TX Alamo Colleges </li>', 1, '2020-05-13 19:12:33', '2020-07-15 10:29:52'),
(12, '2016', '<h5>New Clients Added</h5>\r\n<li>Department of Air Force</li><li> Discovery Communications</li><li>Lockheed Martin</li><li>FL The School Board of Broward County, Florida (SBBC) </li><li>State of North Carolina</li><li>NC Depart of the Air Force</li><li>UT University of Utah</li><li>PA Pittsburgh Water and Sewer Authority</li>', 1, '2020-05-13 19:13:29', '2020-07-15 10:34:03'),
(13, '2017', '<h5>New Clients Added</h5>\r\n<li> NV Energy</li><li> SAP </li><li>TACOMA Public Utilities </li><li>Arkema</li><li>CA City of Sunnyvale</li><li>WI Waukesha County</li><li>FL City of Cocoa</li><li>CA Department of Corrections and Rehabilitation </li>', 1, '2020-05-13 19:14:03', '2020-07-15 10:35:24'),
(14, '2018', '<h5>New Clients Added</h5>\r\n<li> Maryland Health Benefit Exchange </li><li>Veterans Business Outreach Center </li><li>Amedisys </li><li>Coca Cola </li><li> Harman International </li><li>Louisville Water Company</li><li>St. Louis Community College</li><li>Community Transit</li><li>WA King County </li>', 1, '2020-05-13 19:14:28', '2020-07-15 10:36:46'),
(15, '2019', '<h5>New Clients Added</h5>\r\n<li>Sanofi</li><li>Ametek</li><li>Carpenter Technology </li><li>JohnMuir hospital</li><li>OR Washington County Government (ORCPP)</li><li>KS Department of Administration </li><li>FL Seminole County</li><li>MO St. Louis Community College</li>', 1, '2020-05-13 19:14:58', '2020-07-15 10:38:19'),
(16, '2020', '<h5>New Clients Added</h5>\r\n<li>Highmark Health</li><li>Shands Hospital and Clinics</li><li>KS State of Kansas </li><li>KS Department of Administration</li><li>CA Eastern Municipal Water District (EMWD)</li>', 1, '2020-07-02 19:31:05', '2020-07-15 10:39:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
