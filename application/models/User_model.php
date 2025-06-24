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

    function get_solution($name) {
        $sql = "SELECT *  FROM solutions where lower(REPLACE(name,' ','-'))='$name'";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

    function get_solutions() {
        $sql = "SELECT *  FROM solutions WHERE status='1' ORDER BY solution_id ASC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_office_location() {
        $sql = "SELECT *  FROM office_location WHERE status='1' ORDER BY location_id ASC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_timelines() {
        $sql = "SELECT *  FROM timelines WHERE status='1' ORDER BY timeline_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
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
