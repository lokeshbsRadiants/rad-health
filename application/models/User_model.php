<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class user_model extends CI_Model {

    function get_course() {
        $courses = array(
            array(
                'course_id' => 1,
                'name' => 'Introduction to RADgov Solutions',
                'description' => 'Learn about our comprehensive suite of government solutions',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            ),
            array(
                'course_id' => 2,
                'name' => 'Advanced Implementation Strategies',
                'description' => 'Master the deployment of our enterprise solutions',
                'status' => 1,
                'created_date' => '2020-05-13 15:37:18',
                'modified_date' => '2020-06-23 20:24:28'
            )
        );
        return $courses;
    }



    function get_solutions() {
        $solutions = array(
            array(
                'solution_id' => 1,
                'name' => 'TEAMS',
                'description' => 'Traffic Engineering agency management system',
                'icon_image' => '5ebd6b974031a_27418.png',
                'banner_image' => '5ebbc8c55bf2b_17230.png',
                'solution_image' => '5ef1c7e8968ba_04387.png',
                'text' => 'Automating, streamlining and supporting the functionality and increasing the efficiency of the Government’s Traffic Engineering Division by encouraging better coordination and administrative processes within departments<br><br>Traffic Engineering Agency Management System is a web-application that has been designed to streamline the internal support services of the traffic engineering division. This solution is a set of modular components designed to efficiently schedule, approve, assign, track, coordinate, and prioritize and follow-up activities. This provides a common portal and medium for sharing information across the engineering divisions as well as other government agencies. This has been created to reduce paper trails and replace manual processes with electronic transactions.',
                'features' => '<li> Electronically files issues and problems</li>
<li> Produces job requests resulting from issues and problems</li>
<li> Escalates issues/problems, requests work orders, and facilitates coordination among participants</li>
<li> Electronic tracking, escalation and execution of events including approval, scheduling, assignment, tracking, prioritizing, follow-up of Service requests, Trouble reports, Inspections, Projects.</li>
<li> Captures and catalogues information</li>',
                'benefits' => '<ol class="benefits-slider">
<li><div><p>Transforms legacy systems to latest technologies</p></div> </li>
<li><div><p>Applies agency business rules across all channels</p></div> </li>
<li><div><p>Avoids data redundancy</p></div> </li>
<li><div><p>Reduces system maintenance</p></div> </li>
<li><div><p>Provides interfaces and support with 3rd party applications</p></div> </li>
<li><div><p>Facilitates data accessibility across all channels</p></div> </li>
<li><div><p>Intuitive user interface presentation</p></div> </li>
</ol><div class="nogutter col-12">
<div class="benefits-border"></div>
<div class="benefits-half-border"></div>
</div>
<ol class="benefits-slider">
<li><div><p>Central database repository</p></div></li>
<li><div><p>Enterprise-wide system and data accessibility/availability</p></div></li>
<li><div><p>Enhances overall customer service and support</p></div></li>
</ol>',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            ),
            array(
                'solution_id' => 2,
                'name' => 'DAMS',
                'description' => 'Damage assessment management system',
                'icon_image' => '5ebd6ba743d8c_74352.png',
                'banner_image' => '5ebbc9029cbac_47038.png',
                'solution_image' => '5ef217a284513_83195.png',
                'text' => 'Enterprise level application assessing, assigning, managing and implementing actions relating management of disastrous events.<br><br>Damage assessment during a disaster requires extensive coordination including determining what happened, what the immediate effects are, which areas were hardest hit, what situation must be given a priority. For a good view of all these aspects and to streamline and consolidate damage assessment, the Damage Assessment Management System was created to be a robust modular portable application that can run on a laptop or a handheld device using wireless technology and/or offline synchronization at the division.',
                'features' => '<p> <li> Electronically create a damage assessment for any damages including downed wires, missing camera , missing street light, missing PED signal and missing, twisted, dangling, or damaged signal. </li>
<li> Automatically creates and issues work orders to corresponding section(s) for execution </li>
<li> Can download and upload the damages pictures to the system based on the region/route assigned for damage assessment</li>
<li> Extensive damage assessment reporting based on emergency-type </li>
<li> FEMA reporting based on emergency-type </li></p>',
                'benefits' => '<ol class="benefits-slider">
<li><div><p>Streamlines and consolidates damage assessment</p></div> </li>
<li><div><p>Applies agency business rules across all channels</p></div> </li>
<li><div><p>On-demand reporting & analytics</p></div> </li>
<li><div><p>Enterprise-wide Central Data Repository to avoid data redundancy while providing greater accessibility</p></div> </li>
<li><div><p>Electronic capabilities to reduce and/or eliminate paper trails</p></div> </li>
<li><div><p>Tightly integrates internal sub divisions enhancing communication and accountability</p></div> </li>
<li><div><p>Improves time & costs as well as overall customer service and support</p></div> </li>
</ol>',
                'status' => 1,
                'created_date' => '2020-05-13 15:37:18',
                'modified_date' => '2020-06-23 20:24:28'
            ),
            array(
                'solution_id' => 5,
                'name' => 'EPAMS',
                'description' => 'Environment Protection Agency Management System',
                'icon_image' => '5ebd05a706cb8_71930.png',
                'banner_image' => '5ebcff0fd4c3c_78546.png',
                'solution_image' => '5ef1ed9f140f3_09237.png',
                'text' => 'The tool to better coordination and administrative processes through automation and streamlining of internal support sections of environmental protection agencies.<br><br>Environment Protection Agency Management System is a web-application that has been designed to streamline the internal support services of the environmental protection agency. This solution is a set of modular components designed to efficiently schedule, approve, assign, track, coordinate, prioritize and follow-up activities. This provides a common portal and acts as a medium for sharing information across the division as well as other government agencies involved. This also reduces the paper trails and replaces manual processes with electron transactions.',
                'features' => '<li> Electronically files issues and problems (reported by external parties, consultants, citizens, etc.) and produces job requests resulting from issues and problems</li>
<li> Escalates issues/problems and request work orders </li>
<li> Electronic tracking, escalation and execution of events </li>
<li> Approval, scheduling, assignment, tracking, coordination, prioritization and follow-up on essentials of actions & events like service requests, trouble reports, inspections, work orders, projects (internal/external), capturing and cataloguing of information and so on </li>
<li> Re-uses file location, identification information (provided by external sources)</li>
<li> Facilitates coordination among work order participants</li>',
                'benefits' => '<ol class="benefits-slider">
<li><div><p> Automates and consolidates manual systems</p></div></li>
<li><div><p>Transforms legacy systems to latest technologies</p></div> </li>
<li><div><p>Applies agency business rules across all channels</p></div> </li>
<li><div><p>Avoids data redundancy</p></div> </li>
<li><div><p>Reduces system maintenance</p></div> </li>
<li><div><p>Provides interfaces and support with 3rd party applications</p></div> </li>
<li><div><p>Facilitates data accessibility across all channels</p></div> </li>
</ol><div class="nogutter col-12">
<div class="benefits-border"></div>
<div class="benefits-half-border"></div>
</div>
<ol class="benefits-slider">
<li><div><p>Intuitive user interface presentation</p></div> </li>
<li><div><p> Eliminates redundant paper trails transforming and enhancing institution policies and procedures with electronic capabilities</p></div></li>
<li><div><p> Central database repository</p></div></li>
<li><div><p> 3rd party interface support </p></div></li>
<li><div><p> Improves internal efficiencies including time and costs </p></div></li>
<li><div><p> Enhances overall customer service and support</p></div></li>
</ol>',
                'status' => 1,
                'created_date' => '2020-05-14 13:52:16',
                'modified_date' => '2020-06-23 17:25:12'
            ),
            array(
                'solution_id' => 6,
                'name' => 'ATMS',
                'description' => 'Advanced Traffic Management System',
                'icon_image' => '5ebd048c14a86_09281.png',
                'banner_image' => '5ebd0020085b1_75123.png',
                'solution_image' => '5ef1caf6ccd78_86350.png',
                'text' => 'Geographic Information System (GIS) based inventory application for maintenance and operation of the traffic management system assisting in automating and streamlining the internal processes of the Traffic Engineering Division.<br></br>Advanced Traffic Management System is a traffic management enterprise application designed and developed focusing on the aspects of integration and automation of various processes related to installation, maintenance, monitoring and tracking of various traffic related devices which the division would use for traffic management purposes at the various roads and intersections within the region. The application is a browser-based system, which facilitates the process of filing work orders and related information electronically. The GIS for this application is designed in a way to provide the working status of installed devices and components on a real time basis through a specific framework. The technologies used in developing the application are ASP and VB, Crystal reports, DotNET, SQL Server 2000.',
                'features' => '<li> Electronically allows filing issues and resolving problems </li>
<li> Provides the ability to produce, coordinate, schedule and record activities such as those that can be globally viewed by entire teams through the execution phases of job requests.</li>
<li> Supports reporting in the form of a global delivery method, through distribution of reports from one central and easy-to-access location.</li>
<li> Provides capability of on-demand support, generating statistical and decision management reporting through consolidation of manual processes across business units </li>
<li> Has the ability to capture real-time status of devices, equipment and communications deployed at various locations.</li>
<li>The Automated Traffic Management System has the ability to capture real-time status of devices, equipment and communications that are deployed at various locations throughout the country.</li>
<li> Has an inventory management section that provides users with the option to enter and manage the device and component details. </li>
<li> Includes data regarding the device make, installation details, networking details, maintenance details, location of the device (can be pulled from the GIS section and directly entered as X, Y coordinates) etc.</li>
<li> Seamless integration between the GIS section and the inventory section facilitates the Traffic Division to confirm the exact location of the device on the GIS MAP and check the details of the device.</li>
<li> Also consists of a GIS MAP section, which is web enabled and open to the public.</li>
<li> Access controlled based on end user roles which can be set by the administrator.</li>
<li> The system is built and deployed on the Microsoft platform. The GIS section was designed and developed using ArcGIS 9.1Suite.</li>',
                'benefits' => '<ol class="benefits-slider">
<li><div><p> GIS enabled solutions for pictorial and map based references and information.</p></div></li>
<li><div><p> Saves time using the automated workflow based on optimized processes.</p></div></li>
<li><div><p> Seamless access to device data from GIS Map to Inventory information.</p></div></li>
<li><div><p> Elimination of data duplication and unnecessary paper documents.</p></div></li>
<li><div><p> Centralized data repository and access.</p></div></li>
<li><div><p> Reduces cost and increases staff efficiency. Complete web-based, 24/7 access</p></div></li>
<li><div><p> Built with a component based architecture, facilitates easy customization and minimizes implementation efforts</p></div></li>
</ol>',
                'status' => 1,
                'created_date' => '2020-05-14 13:56:43',
                'modified_date' => '2020-06-23 14:57:22'
            ),
            array(
                'solution_id' => 7,
                'name' => 'DATA MANAGEMENT',
                'description' => 'Data Management Solutions',
                'icon_image' => '5ebd0a0d7f301_03817.png',
                'banner_image' => '5ebd02d7b209e_08514.png',
                'solution_image' => '5ef1cef0a6f88_70832.png',
                'text' => 'An essential element of business involving standardization, consolidation and quality control of organizational data, mismanagement of which can bring bad fate to the organisation.<br></br>Data Management Solutions include Enterprise Information Management (EIM), Master Data Management (MDM), Reference Data Management (RDM) Solution and Implementation. One of the solutions, MDM is the process of creating an authoritative data source. Many business leaders assume that integrating master data is an IT department related issue. But the fact is that MDM impacts all areas of business, as the information included in these processes relate and apply to customers, vendors, products, locations and more. Failure to manage the data properly can result in widespread negative consequences. Business Intelligence and big data predictive analytics services also act as major change makers in business, since these technologies help bring insights from such data into the routine decision making process.',
                'features' => '<li> Deletes duplicate data</li>
<li> Eliminates incorrect data</li>
<li> Identifies and classifies data consistently and accurately</li>
<li> Creates a central repository to house data etc.</li>
<li> Includes features like data mining, online analytical processing, querying and reporting</li>
<li> Involves application of advanced analytic techniques to very large data sets</li>',
                'benefits' => '<ol class="benefits-slider">
<li><div><p> Better-informed decision-making based on high-quality data and related reporting</p></div></li>
<li><div><p> Deeper understanding of key players in business-critical processes, including clients and partners of the organisation</p></div></li>
<li><div><p> Decrease in the amount of manual labor required to manage data</p></div></li>
<li><div><p> Enhanced efficiency and process streamlining – particularly for complex forms and approvals that rely on data accuracy</p></div></li>
<li><div><p> Better and more effective marketing campaigns</p></div></li>
<li><div><p> Drives new revenues</p></div></li>
<li><div><p> Gains competitive advantages over business rivals</p></div></li>
</ol>',
                'status' => 1,
                'created_date' => '2020-05-14 14:04:52',
                'modified_date' => '2020-06-23 15:14:22'
            )
        );
        return $solutions;
    }

  

    function get_timelines() {
        $timelines = array(
            array('timeline_id' => '1','date' => '2005','description' => ' <li>RADGov Incorporated and Headquartered in Fort Lauderdale, FL by Dynamic Women Entrepreneurs</li>','status' => '1','created_date' => '2020-04-27 11:49:14','modified_date' => '2020-06-23 20:39:13'),
            array('timeline_id' => '2','date' => '2006','description' => '<li>Office Opened in New Jersey</li><li>Preferred Supplier to Broward County</li><li>Preferred Supplier to Miami Dade County</li><li> Preferred Supplier to Palm Beach County</li><li> Became Vendors to State NE</li><li> Became Vendors to State FL</li><li> Became Vendors to State NC</li><li> Became Vendors to State NY</li><li> Became Vendors to State RI</li><li>Became Vendors to State VA</li><li> Became Vendors to State OR</li>','status' => '1','created_date' => '2020-05-13 19:04:29','modified_date' => '2020-06-23 20:41:21'),
            array('timeline_id' => '3','date' => '2007','description' => '<li> Became Vendors to Northrop Grumman</li><li> Became Vendors to State SC</li>','status' => '1','created_date' => '2020-05-13 19:05:01','modified_date' => '2020-06-23 20:41:50'),
            array('timeline_id' => '4','date' => '2008','description' => '<li> Became Vendors to Raytheon Systems Company </li>','status' => '1','created_date' => '2020-05-13 19:05:29','modified_date' => '2020-06-23 20:42:11'),
            array('timeline_id' => '5','date' => '2009','description' => '<li>Became Vendors to Johnson &amp; Johnson </li><li>Became Vendors to Montclair State University</li><li>Became Vendors to Unisys</li>','status' => '1','created_date' => '2020-05-13 19:06:27','modified_date' => '2020-06-23 20:42:56'),
            array('timeline_id' => '6','date' => '2010','description' => '<li>Awarded Seaport-e </li><li>Became Vendors to Biogen</li><li> Became Vendors to Eastman Kodak</li><li>Became Vendors to Harley Davidson</li><li>Became Vendors to Harris Bank</li>','status' => '1','created_date' => '2020-05-13 19:07:18','modified_date' => '2020-06-23 20:43:56'),
            array('timeline_id' => '7','date' => '2011','description' => '<li> Became Vendors to American Red Cross</li><li> Became Vendors to BCBS Florida </li><li> Became Vendors to First Energy Services Company</li><li> Became Vendors to John Deere</li>','status' => '1','created_date' => '2020-05-13 19:08:16','modified_date' => '2020-06-23 20:44:43'),
            array('timeline_id' => '8','date' => '2012','description' => '<li> Became Vendors to AstraZeneca </li><li>Became Vendors to Opened our office in DC</li><li> Became Vendors to GE Aviation, Capital</li><li> Became Vendors to Harris Corporation</li><li> Became Vendors to McAfee</li><li> Became Vendors to Southern California Association of Governments</li><li> Became Vendors to State ME</li><li> Became Vendors to State WI</li><li>Became Vendors to Volkswagen</li>','status' => '1','created_date' => '2020-05-13 19:09:30','modified_date' => '2020-06-23 20:46:22'),
            array('timeline_id' => '9','date' => '2013','description' => '<li>Became Vendors to Avery Dennison</li><li>Became Vendors to GE Healthcare</li><li>Became Vendors to Kimberly Clark</li><li>Became Vendors to SONY Computer Entertainment America</li><li>Became Vendors to State AR</li><li>Became Vendors to State NJ</li><li>Became Vendors to State IA</li>
<li>Became Vendors to State OH</li><li>Became Vendors to TERADATA</li><li>Became Vendors to US Department of Agriculture</li>','status' => '1','created_date' => '2020-05-13 19:10:38','modified_date' => '2020-06-23 20:48:32'),
            array('timeline_id' => '10','date' => '2014','description' => '<li>Became Vendors to CGI</li><li>Became Vendors to Commonwealth of PA</li><li>Became Vendors to Eastern Municipal Water District</li><li>Became Vendors to Florida Department of Environmental Protection</li><li>Became Vendors to GE Transportation</li><li>Became Vendors to Perspecta</li><li>Became Vendors to Novartis</li><li>Became Vendors to State CO</li><li>Became Vendors to YELLOW PAGES</li>
','status' => '1','created_date' => '2020-05-13 19:11:49','modified_date' => '2020-06-23 20:49:50'),
            array('timeline_id' => '11','date' => '2015','description' => '<li>Awarded GSA IT Schedule 70</li><li>Became Vendors to Citizens Property Insurance</li><li>Became Vendors to State AZ</li><li>Became Vendors to State MI</li><li>Became Vendors to Synchrony Financials</li><li>Became Vendors to United States House of Representatives</li>','status' => '1','created_date' => '2020-05-13 19:12:33','modified_date' => '2020-06-23 20:50:48'),
            array('timeline_id' => '12','date' => '2016','description' => '<li>Became Vendors to Department of Air Force</li><li> Became Vendors to Discovery Communications</li><li> Became Vendors to Lockheed Martin</li>','status' => '1','created_date' => '2020-05-13 19:13:29','modified_date' => '2020-06-23 20:51:30'),
            array('timeline_id' => '13','date' => '2017','description' => '<li> Became Vendors to NV Energy</li><li> Became Vendors to SAP</li><li>Became Vendors to TACOMA Public Utilities</li>','status' => '1','created_date' => '2020-05-13 19:14:03','modified_date' => '2020-06-23 20:52:11'),
            array('timeline_id' => '14','date' => '2018','description' => '<li> Became Vendors to Maryland Health Benefit Exchange</li><li> Became Vendors to Veterans Business Outreach Center</li>','status' => '1','created_date' => '2020-05-13 19:14:28','modified_date' => '2020-06-23 20:52:38'),
            array('timeline_id' => '15','date' => '2019','description' => '<li> Became Vendors to Sanofi </li>','status' => '1','created_date' => '2020-05-13 19:14:58','modified_date' => '2020-06-23 20:53:01')
        );
        
        // Sort by timeline_id in descending order
        usort($timelines, function($a, $b) {
            return $b['timeline_id'] - $a['timeline_id'];
        });
        
        return $timelines;
    }

    function get_certifications() {
        $certifications = array(
            array(
                'certification_id' => 1,
                'name' => 'ISO 9001:2015',
                'description' => 'Quality Management System Certification',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            ),
            array(
                'certification_id' => 2,
                'name' => 'CMMI Level 3',
                'description' => 'Capability Maturity Model Integration',
                'status' => 1,
                'created_date' => '2020-05-13 15:37:18',
                'modified_date' => '2020-06-23 20:24:28'
            )
        );
        return $certifications;
    }

    function get_clients() {
        $clients = array(
            array(
                'client_id' => 1,
                'client_type_id' => 1,
                'client_images' => 'client_image1.jpg',
                'redirection_link' => 'https://www.client1.com',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            ),
            array(
                'client_id' => 2,
                'client_type_id' => 2,
                'client_images' => 'client_image2.jpg',
                'redirection_link' => 'https://www.client2.com',
                'status' => 1,
                'created_date' => '2020-05-13 15:37:18',
                'modified_date' => '2020-06-23 20:24:28'
            )
        );
        return $clients;
    }

    function get_office_location() {
        $locations = array(
            array(
                'location_id' => 1,
                'name' => 'Headquarters',
                'address' => '123 Main Street',
                'city' => 'Fort Lauderdale',
                'state' => 'FL',
                'zip' => '33301',
                'phone' => '(555) 123-4567',
                'email' => 'info@radgov.com',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            ),
            array(
                'location_id' => 2,
                'name' => 'New Jersey Office',
                'address' => '456 Business Ave',
                'city' => 'Newark',
                'state' => 'NJ',
                'zip' => '07101',
                'phone' => '(555) 987-6543',
                'email' => 'nj@radgov.com',
                'status' => 1,
                'created_date' => '2020-05-13 15:37:18',
                'modified_date' => '2020-06-23 20:24:28'
            )
        );
        return $locations;
    }

    function save_contact($data) {
        // No database call, just return a dummy ID
        return 1;
    }

    function get_contract_vehicles() {
        $vehicles = array(
            array(
                'contract_id' => 1,
                'name' => 'GSA IT Schedule 70',
                'description' => 'Government-wide Acquisition Contract',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            ),
            array(
                'contract_id' => 2,
                'name' => 'Seaport-e',
                'description' => 'SeaPort Enhanced',
                'status' => 1,
                'created_date' => '2020-05-13 15:37:18',
                'modified_date' => '2020-06-23 20:24:28'
            )
        );
        return $vehicles;
    }

    function get_modules_sub_modules() {
        $modules = array(
            array(
                'module_name' => 'Solutions',
                'sub_modules' => 'TEAMS,DAMS,EPAMS,ATMS,DATA MANAGEMENT'
            ),
            array(
                'module_name' => 'Services',
                'sub_modules' => 'Application Development,IT Infrastructure,Staffing Solutions'
            )
        );
        return $modules;
    }

    function get_sub_modules($name) {
        $sub_modules = array(
            'teams' => array(
                'sub_module_id' => 1,
                'module_id' => 1,
                'sub_module_name' => 'TEAMS',
                'description' => 'Traffic Engineering agency management system',
                'status' => 1
            ),
            'dams' => array(
                'sub_module_id' => 2,
                'module_id' => 1,
                'sub_module_name' => 'DAMS',
                'description' => 'Damage assessment management system',
                'status' => 1
            )
        );
        
        return isset($sub_modules[strtolower(str_replace(' ', '-', $name))]) ? $sub_modules[strtolower(str_replace(' ', '-', $name))] : array();
    }

    function get_client_agencies($id) {
        $agencies = array(
            array(
                'agency_id' => 1,
                'client_sub_module_id' => 1,
                'agency_name' => 'Broward County',
                'agency_type' => 'Government',
                'status' => 1
            ),
            array(
                'agency_id' => 2,
                'client_sub_module_id' => 2,
                'agency_name' => 'Miami Dade County',
                'agency_type' => 'Government',
                'status' => 1
            )
        );
        
        return array_filter($agencies, function($agency) use ($id) {
            return $agency['client_sub_module_id'] == $id;
        });
    }

    function get_client_type_agencies($id, $type) {
        $agencies = array(
            array(
                'agency_id' => 1,
                'client_sub_module_id' => 1,
                'agency_name' => 'Broward County',
                'agency_type' => 'Government',
                'status' => 1
            ),
            array(
                'agency_id' => 2,
                'client_sub_module_id' => 2,
                'agency_name' => 'Miami Dade County',
                'agency_type' => 'Government',
                'status' => 1
            ),
            array(
                'agency_id' => 3,
                'client_sub_module_id' => 1,
                'agency_name' => 'Northrop Grumman',
                'agency_type' => 'Private',
                'status' => 1
            )
        );
        
        return array_filter($agencies, function($agency) use ($id, $type) {
            return $agency['client_sub_module_id'] == $id && $agency['agency_type'] == $type;
        });
    }

    function get_services_sub_services() {
        $services = array(
            array(
                'name' => 'Application Development',
                'layout' => 'default',
                'sub_services' => 'Application Services,Embedded System Development,Mobile Device Management,Infrastructure Management Services',
                'more_services' => 'Yes,Yes,Yes,Yes'
            ),
            array(
                'name' => 'IT Infrastructure',
                'layout' => 'default',
                'sub_services' => 'Staff Augmentation Service,Recruitment Process Outsourcing,Call Centre Support And Services,Payrolling Services',
                'more_services' => 'Yes,No,No,No'
            )
        );
        return $services;
    }

    function get_sub_service($name) {
        $sub_services = array(
            'application-services' => array(
                'sub_service_id' => 2,
                'service_id' => 2,
                'sub_service_name' => 'Application Services',
                'is_more_service' => 'Yes',
                'image' => '5ec3c438dbe01_39562.png',
                'banner_image' => '5eeda0daa898f_38571.png',
                'description' => 'RADgov offers a variety of services to its government and commercial clients such as services relating to development and management of applications, embedded systems, mobile device management, and infrastructural services.',
                'status' => 1,
                'layout' => 'default'
            ),
            'staff-augmentation-service' => array(
                'sub_service_id' => 3,
                'service_id' => 3,
                'sub_service_name' => 'Staff Augmentation Service',
                'is_more_service' => 'Yes',
                'image' => '5ec3c522606dd_52681.png',
                'banner_image' => '5eeda55c91d6d_85369.png',
                'description' => 'RADgov offers extensive workforce management services to help businesses to forecast their human resource requirements, acquire and manage talent, and also track and optimize the workforce performance.',
                'status' => 1,
                'layout' => 'default'
            )
        );
        
        return isset($sub_services[strtolower(str_replace(' ', '-', $name))]) ? $sub_services[strtolower(str_replace(' ', '-', $name))] : array();
    }

    function get_sub_services($id) {
        $details = array(
            array(
                'service_detail_id' => 1,
                'sub_service_id' => 2,
                'service_detail_name' => 'Application Development',
                'description' => 'Custom application development services',
                'status' => 1
            ),
            array(
                'service_detail_id' => 2,
                'sub_service_id' => 3,
                'service_detail_name' => 'Staff Augmentation',
                'description' => 'Workforce management services',
                'status' => 1
            )
        );
        
        return array_filter($details, function($detail) use ($id) {
            return $detail['sub_service_id'] == $id;
        });
    }
    
    function get_service_detail($name) {
        $details = array(
            'application-development' => array(
                'service_detail_id' => 1,
                'sub_service_id' => 2,
                'service_detail_name' => 'Application Development',
                'description' => 'Custom application development services',
                'status' => 1
            ),
            'staff-augmentation' => array(
                'service_detail_id' => 2,
                'sub_service_id' => 3,
                'service_detail_name' => 'Staff Augmentation',
                'description' => 'Workforce management services',
                'status' => 1
            )
        );
        
        return isset($details[strtolower(str_replace(' ', '-', $name))]) ? $details[strtolower(str_replace(' ', '-', $name))] : array();
    }
    
    function get_about_us() {
        $about_us = array(
            'about_id' => 1,
            'title' => 'About Us',
            'company_profile1' => "Radhealth+ is the healthcare staffing and workforce solutions division of RadGov, a federally recognized provider of mission-critical personnel and services. We were created to meet the evolving demands of modern healthcare staffing—balancing quality, speed, and regulatory precision.",
            'company_image1' => '5ebd051c51cae_71359.png',
            'company_profile2' => "We specialize in placing highly qualified professionals across clinical, allied, administrative, and public health roles, with customized workforce models for both private and government healthcare environments. ",
            'company_image2' => '5ebd05371a4d4_03785.png',
            'vision' => "To be the most trusted healthcare workforce partner—driven by integrity, focused on innovation, and committed to delivering measurable impact in every placement. ",
            'vision_image' => '5ebd057936209_20357.png',
            'mission' => "To strengthen healthcare systems through high-impact staffing solutions that support better patient outcomes, provider wellbeing, and operational efficiency. ",
            'mission_image' => '5ebd05911e7ab_65308.png',
            'value' => "<li>Fully licensed and certified according to state and federal regulations 
.</li>\n<li> Screened through a multi-step credentialing and compliance process 
</li>\n<li>Backed by our internal quality assurance and clinical support team</li>\n<li> Cleared through background checks and immunization reviews 
.</li>\n<li>Oriented on client-specific systems and care models 
.</li>",
            'value_image' => '5ebd068045156_79835.png',
            'status' => 1,
            'created_date' => '2020-05-13 14:55:05',
            'modified_date' => '2020-06-23 14:44:23'
        );
        return $about_us;
    }

    function get_latest_services_sub_services() {
        return array(
            'name' => 'Application Development',
            'layout' => 'default',
            'sub_services' => 'Application Services,Embedded System Development,Mobile Device Management,Infrastructure Management Services',
            'more_services' => 'Yes,Yes,Yes,Yes'
        );
    }

}
