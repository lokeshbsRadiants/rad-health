-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2020 at 10:04 AM
-- Server version: 5.7.30
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rad_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_id` int(11) NOT NULL,
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
  `modified_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `company_profile1`, `company_image1`, `company_profile2`, `company_image2`, `vision`, `vision_image`, `mission`, `mission_image`, `value`, `value_image`, `created_date`, `modified_date`) VALUES
(1, '<p>RadGov.Inc. headquartered in Fort Lauderdale, Florida was founded in 2005. RadGov was created exclusively to focus on Federal agencies and to provide Staff augmentation and IT services to private clients. As an integrated IT solutions Company, we have proven our experience and expertise in Ecommerce, IT consulting Software development and Staff augmentation (IT & Non –IT). We leverage our capabilities to support our clients through dedicated, organized and client-focused teams with no compromise on quality.</p>', '5ebd051c51cae_71359.png', '<p>Over the years RADGOV has sustained an impressive growth rate in both capabilities and profitability, and is now positioned to be one of the major contributors in every sector. At RADGOV, we continually undergo transformation and reorientation in response to the rapidly evolving needs of our esteemed clients. RADGOV has a spread of services on offer packaged with technical excellence and quality to facilitate effective IT and staffing solutions.</p>', '5ebd05371a4d4_03785.png', '<p data-aos=\"fade-up\">To be an organisation that is the provider of the highest level of satisfaction to customers, ambassadors and co-workers.</p>', '5ebd057936209_20357.png', '<p data-aos=\"fade-up\">To establish strategic partnerships and offer competitive advantage to our clients in the areas of Technology/ Process Consulting, Custom Software Development, QA / Testing, Systems Integration, Project Management, Network and Infrastructure Management and Product Engineering / GIS Services, while fulfilling our employees’ aspirations by virtue of delivery of our world-class and cost-effective services, and to create a family-like environment for our employees, while preserving our core value system.</p>', '5ebd05911e7ab_65308.png', '<li data-aos=\"fade-up\">Honesty, ethics and integrity guide our behavior and decisions.</li><li data-aos=\"fade-up\">Respect the dignity and worth of every individual and act accordingly.</li><li data-aos=\"fade-up\">Our commitment to quality is uncompromising. We recognize that it is not our own, but our customers’ perceptions of quality that are most important.</li><li data-aos=\"fade-up\">“If it is ethical and enhances customer satisfaction, do it.”</li>', '5ebd068045156_79835.png', '2020-05-14 14:22:10', '2020-06-23 20:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `admin_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`admin_id`, `user_name`, `password`, `first_name`, `last_name`, `email`, `phone`, `address`, `role_id`, `status`) VALUES
(1, 'admin@radgov.com', '0e7517141fb53f21ee439b355b5a1d0a', 'Radgov', 'Admin', 'admin@radgov.com', '9751799504', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `certification_id` int(11) NOT NULL,
  `certification_images` text NOT NULL,
  `text` text NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`certification_id`, `certification_images`, `text`, `created_date`, `modified_date`) VALUES
(1, 'SBA-8m.jpg,WBENC.jpg,GSA.png,FRMBC.jpg,SFMSDC.jpg', 'The team of RADgov believes that the enhancing quality and expanding intellect is the key to achieving success; the certifications speak for our quality and intellect.', '2020-04-28 11:50:37', '2020-06-20 12:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_type_id` int(11) NOT NULL,
  `redirection_link` varchar(255) NOT NULL,
  `client_images` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_type_id`, `redirection_link`, `client_images`, `status`, `created_date`, `modified_date`) VALUES
(1, 1, 'current-engagement', 'Acet.jpg,Booz-Allen-Hamilton.jpg,DRC.jpg,Federal-Reserve-Bank-Of-Dal.jpg,The-Centech-Group.jpg,USDA.jpg', 1, '2020-04-28 17:54:59', '2020-06-23 10:14:36'),
(2, 2, 'current-engagement#stateclient', 'county-of-martin.jpg,minneapolis.jpg,state-of-west-virginia.jpg,the-seal-of-the-state-of-washington.jpg,minneapolis.jpg', 1, '2020-05-14 12:13:09', '2020-06-23 10:14:20'),
(3, 3, 'clients', 'citizens.jpg,novartis.jpg,NSTAR.jpg,pharmerica.jpg,phoenix-international.jpg,pitney-bowes.jpg,playstation.jpg,pnm-resources.jpg,Rhodia.jpg,slac.jpg,teradata.jpg,TRW.jpg,UTI.jpg,vision-it.jpg', 1, '2020-05-14 12:15:54', '2020-06-23 10:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `client_agencies`
--

CREATE TABLE `client_agencies` (
  `agency_id` int(11) NOT NULL,
  `client_sub_module_id` int(11) NOT NULL,
  `agency_type` int(11) NOT NULL,
  `agency_name` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_agencies`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_modules`
--

CREATE TABLE `client_modules` (
  `client_module_id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_modules`
--

INSERT INTO `client_modules` (`client_module_id`, `module_name`) VALUES
(2, 'Private Clients');

-- --------------------------------------------------------

--
-- Table structure for table `client_module_types`
--

CREATE TABLE `client_module_types` (
  `client_module_type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `client_sub_modules` (
  `client_sub_module_id` int(11) NOT NULL,
  `client_module_id` int(11) NOT NULL,
  `sub_module_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `sub_module_types` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `client_types` (
  `client_type_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_types`
--

INSERT INTO `client_types` (`client_type_id`, `type`, `status`, `created_date`) VALUES
(1, 'FEDERAL CLIENTS', 1, '2020-04-28 18:00:00'),
(2, 'STATE AND LOCAL CLIENTS', 1, '2020-04-28 18:00:00'),
(3, 'PRIVATE CLIENTS', 1, '2020-04-28 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_interested` varchar(5) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `first_name`, `last_name`, `phone_number`, `email`, `is_interested`, `message`) VALUES
(1, 'Test', 'HC', 4354645654, 'tamilhoneycomb@gmail.com', 'No', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `contract_vehicles`
--

CREATE TABLE `contract_vehicles` (
  `contract_id` int(11) NOT NULL,
  `contract_type` tinyint(1) NOT NULL,
  `contract_name` varchar(255) NOT NULL,
  `contract_description` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `office_location` (
  `location_id` int(11) NOT NULL,
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
  `modified_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office_location`
--

INSERT INTO `office_location` (`location_id`, `location`, `office_name`, `address`, `contact_email`, `image`, `mobile`, `telephone`, `work`, `fax`, `is_corporate`, `status`, `created_date`, `modified_date`) VALUES
(1, 'sdas', 'asdasd', '6750 N. Andrews Ave., Suite 200 Fort Lauderdale, FL 33309', 'info@radgov.com', '5efdaa8cb0aa7_24567.jpg', '954.938.2800', '', '', ' 954.938.2004', 1, 1, '2020-05-13 12:12:41', '2020-07-02 15:06:16'),
(2, 'asdasd', 'asdas', '101 Morgan Lane, Suite # 304 Plainsboro, NJ 08536', 'info@radgov.com', '5efdaab296106_32615.jpg', '954.938.2800', '', '', '954.938.2004', 0, 1, '2020-05-13 12:28:39', '2020-07-02 15:06:58');
-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `layout` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `service_details` (
  `service_detail_id` int(11) NOT NULL,
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
  `modified_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_details`
--



--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `solution_id` int(11) NOT NULL,
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
  `modified_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `sub_services` (
  `sub_service_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `sub_service_name` varchar(255) NOT NULL,
  `is_more_service` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `timelines` (
  `timeline_id` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timelines`
--

INSERT INTO `timelines` (`timeline_id`, `date`, `description`, `status`, `created_date`, `modified_date`) VALUES
(1, '2005', ' <li>RADGov Incorporated and Headquartered in Fort Lauderdale, FL by Dynamic Women Entrepreneurs</li>', 1, '2020-04-27 11:49:14', '2020-06-23 20:39:13'),
(2, '2006', '<li>Office Opened in New Jersey</li><li>Preferred Supplier to Broward County</li><li>Preferred Supplier to Miami Dade County</li><li> Preferred Supplier to Palm Beach County</li><li> Became Vendors to State NE</li><li> Became Vendors to State FL</li><li> Became Vendors to State NC</li><li> Became Vendors to State NY</li><li> Became Vendors to State RI</li><li>Became Vendors to State VA</li><li> Became Vendors to State OR</li>', 1, '2020-05-13 19:04:29', '2020-06-23 20:41:21'),
(3, '2007', '<li> Became Vendors to Northrop Grumman</li><li> Became Vendors to State SC</li>', 1, '2020-05-13 19:05:01', '2020-06-23 20:41:50'),
(4, '2008', '<li> Became Vendors to Raytheon Systems Company </li>', 1, '2020-05-13 19:05:29', '2020-06-23 20:42:11'),
(5, '2009', '<li>Became Vendors to Johnson &amp; Johnson </li><li>Became Vendors to Montclair State University</li><li>Became Vendors to Unisys</li>', 1, '2020-05-13 19:06:27', '2020-06-23 20:42:56'),
(6, '2010', '<li>Awarded Seaport-e </li><li>Became Vendors to Biogen</li><li> Became Vendors to Eastman Kodak</li><li>Became Vendors to Harley Davidson</li><li>Became Vendors to Harris Bank</li>', 1, '2020-05-13 19:07:18', '2020-06-23 20:43:56'),
(7, '2011', '<li> Became Vendors to American Red Cross</li><li> Became Vendors to BCBS Florida </li><li> Became Vendors to First Energy Services Company</li><li> Became Vendors to John Deere</li>', 1, '2020-05-13 19:08:16', '2020-06-23 20:44:43'),
(8, '2012', '<li> Became Vendors to AstraZeneca </li><li>Became Vendors to Opened our office in DC</li><li> Became Vendors to GE Aviation, Capital</li><li> Became Vendors to Harris Corporation</li><li> Became Vendors to McAfee</li><li> Became Vendors to Southern California Association of Governments</li><li> Became Vendors to State ME</li><li> Became Vendors to State WI</li><li>Became Vendors to Volkswagen</li>', 1, '2020-05-13 19:09:30', '2020-06-23 20:46:22'),
(9, '2013', '<li>Became Vendors to Avery Dennison</li><li>Became Vendors to GE Healthcare</li><li>Became Vendors to Kimberly Clark</li><li>Became Vendors to SONY Computer Entertainment America</li><li>Became Vendors to State AR</li><li>Became Vendors to State NJ</li><li>Became Vendors to State IA</li>\r\n<li>Became Vendors to State OH</li><li>Became Vendors to TERADATA</li><li>Became Vendors to US Department of Agriculture</li>', 1, '2020-05-13 19:10:38', '2020-06-23 20:48:32'),
(10, '2014', '<li>Became Vendors to CGI</li><li>Became Vendors to Commonwealth of PA</li><li>Became Vendors to Eastern Municipal Water District</li><li>Became Vendors to Florida Department of Environmental Protection</li><li>Became Vendors to GE Transportation</li><li>Became Vendors to Perspecta</li><li>Became Vendors to Novartis</li><li>Became Vendors to State CO</li><li>Became Vendors to YELLOW PAGES</li>\r\n', 1, '2020-05-13 19:11:49', '2020-06-23 20:49:50'),
(11, '2015', '<li>Awarded GSA IT Schedule 70</li><li>Became Vendors to Citizens Property Insurance</li><li>Became Vendors to State AZ</li><li>Became Vendors to State MI</li><li>Became Vendors to Synchrony Financials</li><li>Became Vendors to United States House of Representatives</li>', 1, '2020-05-13 19:12:33', '2020-06-23 20:50:48'),
(12, '2016', '<li>Became Vendors to Department of Air Force</li><li> Became Vendors to Discovery Communications</li><li> Became Vendors to Lockheed Martin</li>', 1, '2020-05-13 19:13:29', '2020-06-23 20:51:30'),
(13, '2017', '<li> Became Vendors to NV Energy</li><li> Became Vendors to SAP</li><li>Became Vendors to TACOMA Public Utilities</li>', 1, '2020-05-13 19:14:03', '2020-06-23 20:52:11'),
(14, '2018', '<li> Became Vendors to Maryland Health Benefit Exchange</li><li> Became Vendors to Veterans Business Outreach Center</li>', 1, '2020-05-13 19:14:28', '2020-06-23 20:52:38'),
(15, '2019', '<li> Became Vendors to Sanofi </li>', 1, '2020-05-13 19:14:58', '2020-06-23 20:53:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`certification_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_agencies`
--
ALTER TABLE `client_agencies`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `client_modules`
--
ALTER TABLE `client_modules`
  ADD PRIMARY KEY (`client_module_id`);

--
-- Indexes for table `client_module_types`
--
ALTER TABLE `client_module_types`
  ADD PRIMARY KEY (`client_module_type_id`);

--
-- Indexes for table `client_sub_modules`
--
ALTER TABLE `client_sub_modules`
  ADD PRIMARY KEY (`client_sub_module_id`);

--
-- Indexes for table `client_types`
--
ALTER TABLE `client_types`
  ADD PRIMARY KEY (`client_type_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `contract_vehicles`
--
ALTER TABLE `contract_vehicles`
  ADD PRIMARY KEY (`contract_id`);

--
-- Indexes for table `office_location`
--
ALTER TABLE `office_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`service_detail_id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`solution_id`);

--
-- Indexes for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD PRIMARY KEY (`sub_service_id`);

--
-- Indexes for table `timelines`
--
ALTER TABLE `timelines`
  ADD PRIMARY KEY (`timeline_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `certification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_agencies`
--
ALTER TABLE `client_agencies`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `client_modules`
--
ALTER TABLE `client_modules`
  MODIFY `client_module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_module_types`
--
ALTER TABLE `client_module_types`
  MODIFY `client_module_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_sub_modules`
--
ALTER TABLE `client_sub_modules`
  MODIFY `client_sub_module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_types`
--
ALTER TABLE `client_types`
  MODIFY `client_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contract_vehicles`
--
ALTER TABLE `contract_vehicles`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `office_location`
--
ALTER TABLE `office_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `service_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `solution_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_services`
--
ALTER TABLE `sub_services`
  MODIFY `sub_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `timelines`
--
ALTER TABLE `timelines`
  MODIFY `timeline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
