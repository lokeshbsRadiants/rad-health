<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Adminmodel extends CI_Model {

    function auth($data) {
        $users = array(
            array(
                'admin_id' => 1,
                'email' => 'admin@radgov.com',
                'password' => 'password123',
                'role_id' => 1,
                'status' => 1
            )
        );
        
        foreach ($users as $user) {
            if ($user['email'] === $data['email'] && $user['password'] === $data['password']) {
                return $user;
            }
        }
        return null;
    }

    function get_admin_users() {
        $users = array(
            array(
                'admin_id' => 1,
                'username' => 'admin',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'admin@radgov.com',
                'password' => 'password123',
                'role_id' => 1,
                'status' => 1,
                'role_name' => 'Administrator'
            ),
            array(
                'admin_id' => 2,
                'username' => 'manager',
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'manager@radgov.com',
                'password' => 'manager123',
                'role_id' => 2,
                'status' => 1,
                'role_name' => 'Manager'
            )
        );
        return $users;
    }

    function get_admin_user($uid) {
        $users = array(
            1 => array(
                'admin_id' => 1,
                'username' => 'admin',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'admin@radgov.com',
                'password' => 'password123',
                'role_id' => 1,
                'status' => 1,
                'role_name' => 'Administrator'
            ),
            2 => array(
                'admin_id' => 2,
                'username' => 'manager',
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'manager@radgov.com',
                'password' => 'manager123',
                'role_id' => 2,
                'status' => 1,
                'role_name' => 'Manager'
            )
        );
        
        return isset($users[$uid]) ? $users[$uid] : null;
    }

    function get_timelines() {
        $timelines = array(
            array(
                'timeline_id' => 15,
                'date' => '2019',
                'description' => '<li> Became Vendors to Sanofi </li>',
                'status' => 1,
                'created_date' => '2020-05-13 19:14:58',
                'modified_date' => '2020-06-23 20:53:01'
            ),
            array(
                'timeline_id' => 14,
                'date' => '2018',
                'description' => '<li> Became Vendors to Maryland Health Benefit Exchange</li><li> Became Vendors to Veterans Business Outreach Center</li>',
                'status' => 1,
                'created_date' => '2020-05-13 19:14:28',
                'modified_date' => '2020-06-23 20:52:38'
            ),
            array(
                'timeline_id' => 13,
                'date' => '2017',
                'description' => '<li> Became Vendors to NV Energy</li><li> Became Vendors to SAP</li><li>Became Vendors to TACOMA Public Utilities</li>',
                'status' => 1,
                'created_date' => '2020-05-13 19:14:03',
                'modified_date' => '2020-06-23 20:52:11'
            )
        );
        return $timelines;
    }

    function get_timeline($id) {
        $timelines = array(
            15 => array(
                'timeline_id' => 15,
                'date' => '2019',
                'description' => '<li> Became Vendors to Sanofi </li>',
                'status' => 1,
                'created_date' => '2020-05-13 19:14:58',
                'modified_date' => '2020-06-23 20:53:01'
            ),
            14 => array(
                'timeline_id' => 14,
                'date' => '2018',
                'description' => '<li> Became Vendors to Maryland Health Benefit Exchange</li><li> Became Vendors to Veterans Business Outreach Center</li>',
                'status' => 1,
                'created_date' => '2020-05-13 19:14:28',
                'modified_date' => '2020-06-23 20:52:38'
            )
        );
        
        return isset($timelines[$id]) ? $timelines[$id] : null;
    }

    function save_timeline($data) {
        // No database operations, just return success
        return true;
    }
            unset($data["timeline_id"]);
            $data["created_date"] = $data["modified_date"];
            // No database operations, just return success
            return true;
        }
        return $timeline_id;
    }

    function check_timeline_availability($name, $id) {
        $timelines = array(
            15 => array(
                'timeline_id' => 15,
                'date' => '2019',
                'description' => '<li> Became Vendors to Sanofi </li>',
                'status' => 1,
                'created_date' => '2020-05-13 19:14:58',
                'modified_date' => '2020-06-23 20:53:01'
            ),
            14 => array(
                'timeline_id' => 14,
                'date' => '2018',
                'description' => '<li> Became Vendors to Maryland Health Benefit Exchange</li><li> Became Vendors to Veterans Business Outreach Center</li>',
                'status' => 1,
                'created_date' => '2020-05-13 19:14:28',
                'modified_date' => '2020-06-23 20:52:38'
            )
        );
        
        foreach ($timelines as $timeline) {
            if ($timeline['date'] === $name && ($id === "" || $timeline['timeline_id'] != $id)) {
                return true;
            }
        }
        return false;
    }

    function del_timeline($id) {
        // No database operations, just return success
        return true;
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

    function save_certifications($data) {
        $certification_id = $data["certification_id"];
        if ($certification_id != "") {
            // No database operations, just return success
            return true;
        } else {
            unset($data["certification_id"]);
            $data["created_date"] = $data["modified_date"];
            // No database operations, just return success
            return true;
        }
        return $certification_id;
    }

    function get_clients() {
        $sql = "SELECT ct.type, c.* 
                FROM clients c 
                LEFT JOIN client_types ct ON ct.client_type_id = c.client_type_id 
                ORDER BY c.client_id DESC";
    
        $query = $this->db->query($sql)->result_array();
        return $query;
    }
    
    function get_client($id) {
        $sql = "SELECT *  FROM clients where client_id=$id";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

    function get_client_types() {
        $sql = "SELECT *  FROM client_types where status='1'";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function save_clients($data) {
        $client_id = $data["client_id"];
        if ($client_id != "") {
            // No database operations, just return success
            return true;
        } else {
            unset($data["client_id"]);
            $data["created_date"] = $data["modified_date"];
            // No database operations, just return success
            return true;
        }
        return $client_id;
    }

    function check_client_type_availability($name, $id) {
        if ($id != "" && $id > 0) {
            $sql = "SELECT client_id FROM clients WHERE client_id!='$id' AND client_type_id='$name' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT client_id FROM clients WHERE client_type_id='$name' ";
            $query = $this->db->query($sql);
        }
        return $query;
    }

    function del_client($id) {
        // No database operations, just return success
        return true;
    }

    function get_office_locations() {
        $sql = "SELECT *  FROM office_location ORDER BY location_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_office_location($id) {
        $sql = "SELECT *  FROM office_location where location_id=$id";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

    function save_office_location($data) {
        $location_id = $data["location_id"];
        if ($location_id != "") {
            // No database operations, just return success
            return true;
        } else {
            unset($data["location_id"]);
            $data["created_date"] = $data["modified_date"];
            // No database operations, just return success
            return true;
        }
        return $location_id;
    }

    function del_office_location($id) {
        // No database operations, just return success
        return true;
    }

    function get_solutions() {
        $sql = "SELECT *  FROM solutions ORDER BY solution_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_solution($id) {
        $sql = "SELECT *  FROM solutions where solution_id=$id";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

    function save_solution($data) {
        $solution_id = $data["solution_id"];
        if ($solution_id != "") {
            // No database operations, just return success
            return true;
        } else {
            unset($data["solution_id"]);
            $data["created_date"] = $data["modified_date"];
            // No database operations, just return success
            return true;
        }
        return $solution_id;
    }

    function del_solution($id) {
        // No database operations, just return success
        return true;
    }

    function check_solution_availability($name, $id) {
        if ($id != "" && $id > 0) {
            $sql = "SELECT solution_id FROM solutions WHERE solution_id!='$id' AND name='$name' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT solution_id FROM solutions WHERE name='$name' ";
            $query = $this->db->query($sql);
        }
        return $query;
    }

    function get_about_us() {
        $sql = "SELECT *  FROM about_us";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function save_about_us($data) {
        $about_id = $data["about_id"];
        if ($about_id != "") {
            // No database operations, just return success
            return true;
        } else {
            unset($data["about_id"]);
            $data["created_date"] = $data["modified_date"];
            // No database operations, just return success
            return true;
        }
        return $about_id;
    }

    function get_contacts() {
        $sql = "SELECT *  FROM contact_us ORDER BY contact_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_contract_vehicles() {
        $sql = "SELECT *  FROM contract_vehicles ORDER BY contract_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_contract_vehicle($id) {
        $sql = "SELECT *  FROM contract_vehicles where contract_id=$id";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

    function save_contract_vehicle($data) {
        $contract_id = $data["contract_id"];
        if ($contract_id != "") {
            $this->db->where("contract_id", $contract_id);
            $this->db->update("contract_vehicles", $data);
        } else {
            unset($data["contract_id"]);
            $data["created_date"] = $data["modified_date"];
            $this->db->insert("contract_vehicles", $data);
            $contract_id = $this->db->insert_id();
        }
        return $contract_id;
    }

    function del_contract_vehicle($id) {
        $this->db->where("contract_id", $id);
        $this->db->delete("contract_vehicles");
        return $this->db->affected_rows();
    }

    function check_contract_vehicle_availability($name, $id) {
        if ($id != "" && $id > 0) {
            $sql = "SELECT contract_id FROM contract_vehicles WHERE contract_id!='$id' AND contract_name='$name' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT contract_id FROM contract_vehicles WHERE contract_name='$name' ";
            $query = $this->db->query($sql);
        }
        return $query;
    }

    function get_client_module_types() {
        $sql = "SELECT *  FROM client_module_types ORDER BY client_module_type_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_client_modules() {
        $sql = "SELECT *  FROM client_modules ORDER BY client_module_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_client_sub_modules() {
        $sql = "SELECT s.*,m.module_name  FROM client_sub_modules s LEFT JOIN client_modules m ON m.client_module_id = s.client_module_id ORDER BY s.client_sub_module_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_client_sub_module($id) {
        $sql = "SELECT *  FROM client_sub_modules where client_sub_module_id=$id";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

    function save_client_sub_module($data) {
        $client_sub_module_id = $data["client_sub_module_id"];
        if ($client_sub_module_id != "") {
            $this->db->where("client_sub_module_id", $client_sub_module_id);
            $this->db->update("client_sub_modules", $data);
        } else {
            unset($data["client_sub_module_id"]);
            $data["created_date"] = $data["modified_date"];
            $this->db->insert("client_sub_modules", $data);
            $client_sub_module_id = $this->db->insert_id();
        }
        return $client_sub_module_id;
    }

    function del_client_sub_module($id) {
        $this->db->where("client_sub_module_id", $id);
        $this->db->delete("client_sub_modules");
        return $this->db->affected_rows();
    }

    function check_client_sub_module_availability($name, $id) {
        if ($id != "" && $id > 0) {
            $sql = "SELECT client_sub_module_id FROM client_sub_modules WHERE client_sub_module_id!='$id' AND sub_module_name='$name' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT client_sub_module_id FROM client_sub_modules WHERE sub_module_name='$name' ";
            $query = $this->db->query($sql);
        }
        return $query;
    }

    function get_active_client_sub_modules() {
        $sql = "SELECT *  FROM client_sub_modules WHERE status='1' ORDER BY client_module_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_client_agencies() {
        $sql = "SELECT a.*,s.sub_module_name  FROM client_agencies a JOIN client_sub_modules s ON s.client_sub_module_id = a.client_sub_module_id ORDER BY a.agency_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_client_agency($id) {
        $sql = "SELECT *  FROM client_agencies where agency_id=$id";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

    function save_client_agency($data) {
        $agency_id = $data["agency_id"];
        if ($agency_id != "") {
            $this->db->where("agency_id", $agency_id);
            $this->db->update("client_agencies", $data);
        } else {
            unset($data["agency_id"]);
            $data["created_date"] = $data["modified_date"];
            $this->db->insert("client_agencies", $data);
            $agency_id = $this->db->insert_id();
        }
        return $agency_id;
    }

    function del_client_agency($id) {
        $this->db->where("agency_id", $id);
        $this->db->delete("client_agencies");
        return $this->db->affected_rows();
    }

    function check_client_agency_availability($name, $id) {
        if ($id != "" && $id > 0) {
            $sql = "SELECT agency_id FROM client_agencies WHERE agency_id!='$id' AND agency_name='$name' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT agency_id FROM client_agencies WHERE agency_name='$name' ";
            $query = $this->db->query($sql);
        }
        return $query;
    }

    function get_services() {
        $sql = "SELECT *  FROM services ORDER BY service_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_service($id) {
        $sql = "SELECT *  FROM services where service_id=$id";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

    function save_service($data) {
        $service_id = $data["service_id"];
        if ($service_id != "") {
            $this->db->where("service_id", $service_id);
            $this->db->update("services", $data);
        } else {
            unset($data["service_id"]);
            $this->db->insert("services", $data);
            $service_id = $this->db->insert_id();
        }
        return $service_id;
    }

    function del_service($id) {
        $this->db->where("service_id", $id);
        $this->db->delete("services");
        return $this->db->affected_rows();
    }

    function check_service_availability($name, $id) {
        if ($id != "" && $id > 0) {
            $sql = "SELECT service_id FROM services WHERE service_id!='$id' AND name='$name' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT service_id FROM services WHERE name='$name' ";
            $query = $this->db->query($sql);
        }
        return $query;
    }

    function get_active_services() {
        $sql = "SELECT *  FROM services WHERE status='1' ORDER BY service_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_sub_services() {
        $sql = "SELECT ss.sub_service_id,ss.sub_service_name,ss.status,s.name  FROM sub_services ss LEFT JOIN services s ON s.service_id=ss.service_id ORDER BY ss.sub_service_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_sub_service($id) {
        $sql = "SELECT *  FROM sub_services where sub_service_id=$id";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

    function save_sub_service($data) {
        $sub_service_id = $data["sub_service_id"];
        if ($sub_service_id != "") {
            $this->db->where("sub_service_id", $sub_service_id);
            $this->db->update("sub_services", $data);
        } else {
            unset($data["sub_service_id"]);
            $data["created_date"] = $data["modified_date"];
            $this->db->insert("sub_services", $data);
            $sub_service_id = $this->db->insert_id();
        }
        return $sub_service_id;
    }

    function del_sub_service($id) {
        $this->db->where("sub_service_id", $id);
        $this->db->delete("sub_services");
        return $this->db->affected_rows();
    }

    function check_sub_service_availability($name, $id) {
        if ($id != "" && $id > 0) {
            $sql = "SELECT sub_service_id FROM sub_services WHERE sub_service_id!='$id' AND sub_service_name='$name' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT sub_service_id FROM sub_services WHERE sub_service_name='$name' ";
            $query = $this->db->query($sql);
        }
        return $query;
    }

    function get_active_sub_services() {
        $sql = "SELECT *  FROM sub_services WHERE status='1' ORDER BY sub_service_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_service_details() {
        $sql = "SELECT *  FROM service_details ORDER BY service_detail_id DESC";
        $query = $this->db->query($sql)->result_array();
        return $query;
    }

    function get_service_detail($id) {
        $sql = "SELECT *  FROM service_details where service_detail_id=$id";
        $query = $this->db->query($sql)->row_array();
        return $query;
    }

    function save_service_detail($data) {
        $service_detail_id = $data["service_detail_id"];
        if ($service_detail_id != "") {
            $this->db->where("service_detail_id", $service_detail_id);
            $this->db->update("service_details", $data);
        } else {
            unset($data["service_detail_id"]);
            $data["created_date"] = $data["modified_date"];
            $this->db->insert("service_details", $data);
            $service_detail_id = $this->db->insert_id();
        }
        return $service_detail_id;
    }

    function del_service_detail($id) {
        $this->db->where("service_detail_id", $id);
        $this->db->delete("service_details");
        return $this->db->affected_rows();
    }

    function check_service_detail_availability($name, $id) {
        if ($id != "" && $id > 0) {
            $sql = "SELECT service_detail_id FROM service_details WHERE service_detail_id!='$id' AND service_detail_name='$name' ";
            $query = $this->db->query($sql);
        } else {
            $sql = "SELECT service_detail_id FROM service_details WHERE service_detail_name='$name' ";
            $query = $this->db->query($sql);
        }
        return $query;
    }

}
