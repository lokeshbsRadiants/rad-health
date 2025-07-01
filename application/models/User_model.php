<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class user_model extends CI_Model {

    function get_course() {
        $sql = "SELECT * from course";
        $query = $this->db->query($sql);
        return $query;
    }



    function get_solutions() {
        $sql = "SELECT *  FROM solutions WHERE status='1' ORDER BY solution_id ASC";
        $query = $this->db->query($sql)->result_array();
        return $query;
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
        $sql = "SELECT *  FROM certifications  ORDER BY certification_id ASC LIMIT 1";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

    function get_clients() {
        $sql = "SELECT t.type,c.client_images,c.redirection_link  FROM clients c  JOIN client_types t ON c.client_type_id=t.client_type_id WHERE c.status='1' AND t.status='1' ORDER BY t.client_type_id ASC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_about_us() {
        $sql = "SELECT *  FROM about_us  ORDER BY about_id ASC LIMIT 1";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

    function save_contact($data) {
        $this->db->insert("contact_us", $data);
        return $this->db->insert_id();
    }

    function get_contract_vehicles() {
        $sql = "SELECT *  FROM contract_vehicles WHERE status='1' ORDER BY contract_id ASC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_modules_sub_modules() {
        $sql = "SELECT m.module_name,GROUP_CONCAT(s.sub_module_name) AS sub_modules   FROM client_sub_modules s LEFT JOIN client_modules m ON s.client_module_id = m.client_module_id WHERE s.status='1'GROUP BY m.client_module_id";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_sub_modules($name) {
        $sql = "SELECT *  FROM client_sub_modules where lower(REPLACE(sub_module_name,' ','-'))='$name'";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

    function get_client_agencies($id) {
        $sql = "SELECT *  FROM client_agencies where client_sub_module_id='$id' AND status='1'";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_client_type_agencies($id, $type) {
        $sql = "SELECT *  FROM client_agencies where client_sub_module_id='$id' AND agency_type='$type' AND status='1'";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_services_sub_services() {
        $sql = "SELECT s.name,s.layout,GROUP_CONCAT(ss.sub_service_name ORDER BY ss.sub_service_id ASC) AS sub_services,GROUP_CONCAT(ss.is_more_service ORDER BY ss.sub_service_id ASC) AS more_services  FROM services s LEFT JOIN sub_services ss ON s.service_id = ss.service_id WHERE s.status='1' GROUP BY s.service_id";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_sub_service($name) {
        $sql = "SELECT ss.*,s.layout  FROM sub_services ss LEFT JOIN services s ON ss.service_id=s.service_id where lower(REPLACE(ss.sub_service_name,' ','-'))='$name'";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

    function get_sub_services($id) {
        $sql = "SELECT *  FROM service_details where status='1' AND sub_service_id='$id'";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }
    
    function get_service_detail($name) {
        $sql = "SELECT *  FROM service_details where lower(REPLACE(service_detail_name,' ','-'))='$name'";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }
    
    function get_latest_services_sub_services() {
        $sql = "SELECT s.name,s.layout,GROUP_CONCAT(ss.sub_service_name ORDER BY ss.sub_service_id ASC) AS sub_services,GROUP_CONCAT(ss.is_more_service ORDER BY ss.sub_service_id ASC) AS more_services  FROM services s LEFT JOIN sub_services ss ON s.service_id = ss.service_id WHERE s.status='1' GROUP BY s.service_id LIMIT 1";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

}
