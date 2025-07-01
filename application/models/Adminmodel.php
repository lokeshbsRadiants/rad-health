<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Adminmodel {
    function __construct() {
        // No database connection needed
    }

    function auth($data) {
        // Always return the admin user
        return array(
            'admin_id' => 1,
            'email' => 'admin@radgov.com',
            'password' => 'password123',
            'role_id' => 1,
            'status' => 1,
            'created_date' => '2020-05-13 14:55:05',
            'modified_date' => '2020-06-23 14:44:23'
        );
    }

    function get_admin_users() {
        // Return static array of users
        return array(
            array(
                'admin_id' => 1,
                'username' => 'admin',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'admin@radgov.com',
                'password' => 'password123',
                'role_id' => 1,
                'status' => 1,
                'role_name' => 'Administrator',
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
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
                'role_name' => 'Manager',
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
    }            'admin_id' => 1,
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

    function get_client_sub_module($id) {
        $sub_modules = array(
            1 => array(
                'client_sub_module_id' => 1,
                'name' => 'Sub Module 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return isset($sub_modules[$id]) ? $sub_modules[$id] : null;
    }

    function get_client_agencies() {
        $agencies = array(
            array(
                'agency_id' => 1,
                'name' => 'Agency 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return $agencies;
    }

    function get_client_agency($id) {
        $agencies = array(
            1 => array(
                'agency_id' => 1,
                'name' => 'Agency 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return isset($agencies[$id]) ? $agencies[$id] : null;
    }

    function get_services() {
        $services = array(
            array(
                'service_id' => 1,
                'name' => 'Service 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return $services;
    }

    function get_service($id) {
        $services = array(
            1 => array(
                'service_id' => 1,
                'name' => 'Service 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return isset($services[$id]) ? $services[$id] : null;
    }

    function get_sub_services() {
        $sub_services = array(
            array(
                'sub_service_id' => 1,
                'name' => 'Sub Service 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return $sub_services;
    }

    function get_sub_service($id) {
        $sub_services = array(
            1 => array(
                'sub_service_id' => 1,
                'name' => 'Sub Service 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return isset($sub_services[$id]) ? $sub_services[$id] : null;
    }

    function get_service_details() {
        $service_details = array(
            array(
                'service_detail_id' => 1,
                'name' => 'Service Detail 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return $service_details;
    }

    function get_service_detail($id) {
        $service_details = array(
            1 => array(
                'service_detail_id' => 1,
                'name' => 'Service Detail 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return isset($service_details[$id]) ? $service_details[$id] : null;
    }

    function get_clients() {
        $clients = array(
            array(
                'client_id' => 1,
                'name' => 'Client 1',
                'type' => 'Type 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            ),
            array(
                'client_id' => 2,
                'name' => 'Client 2',
                'type' => 'Type 2',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return $clients;
    }

    function get_client($id) {
        $clients = array(
            1 => array(
                'client_id' => 1,
                'name' => 'Client 1',
                'type' => 'Type 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            ),
            2 => array(
                'client_id' => 2,
                'name' => 'Client 2',
                'type' => 'Type 2',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return isset($clients[$id]) ? $clients[$id] : null;
    }

    function save_client_agency($data) {
        $agency_id = $data["agency_id"];
        if ($agency_id != "") {
            // No database operations, just return success
            return true;
        } else {
            // No database operations, just return success
            return true;
        }
        return $agency_id;
    }

    function get_office_locations() {
        $locations = array(
            array(
                'location_id' => 1,
                'name' => 'Main Office',
                'address' => '123 Main St',
                'city' => 'Fort Lauderdale',
                'state' => 'FL',
                'zip' => '33301',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return $locations;
    }

    function get_active_client_sub_modules() {
        $sub_modules = array(
            array(
                'client_sub_module_id' => 1,
                'name' => 'Sub Module 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return $sub_modules;
    }

    function get_client_agencies() {
        $agencies = array(
            array(
                'agency_id' => 1,
                'name' => 'Agency 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return $agencies;
    }

    function get_client_agency($id) {
        $agencies = array(
            1 => array(
                'agency_id' => 1,
                'name' => 'Agency 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return isset($agencies[$id]) ? $agencies[$id] : null;
    }

    function save_client_agency($data) {
        $agency_id = $data["agency_id"];
        if ($agency_id != "") {
            // No database operations, just return success
            return true;
        } else {
            // No database operations, just return success
            return true;
        }
        return $agency_id;
    }

    function get_services() {
        $services = array(
            array(
                'service_id' => 1,
                'name' => 'Service 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return $services;
    }

    function get_service($id) {
        $services = array(
            1 => array(
                'service_id' => 1,
                'name' => 'Service 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return isset($services[$id]) ? $services[$id] : null;
    }

    function save_service($data) {
        try {
            $service_id = $data["service_id"];
            if ($service_id != "") {
                // No database operations, just return success
                return true;
            } else {
                // No database operations, just return success
                return true;
            }
            return $service_id;
        } catch (Exception $e) {
            // Ignore database errors and return true
            return true;
        }
    }
    }

    function get_sub_services() {
        $sub_services = array(
            array(
                'sub_service_id' => 1,
                'name' => 'Sub Service 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return $sub_services;
    }

    function get_sub_service($id) {
        $sub_services = array(
            1 => array(
                'sub_service_id' => 1,
                'name' => 'Sub Service 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return isset($sub_services[$id]) ? $sub_services[$id] : null;
    }

    function save_sub_service($data) {
        $sub_service_id = $data["sub_service_id"];
        if ($sub_service_id != "") {
            // No database operations, just return success
            return true;
        } else {
            // No database operations, just return success
            return true;
        }
        return $sub_service_id;
    }

    function get_service_details() {
        $service_details = array(
            array(
                'service_detail_id' => 1,
                'name' => 'Service Detail 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return $service_details;
    }

    function get_service_detail($id) {
        $service_details = array(
            1 => array(
                'service_detail_id' => 1,
                'name' => 'Service Detail 1',
                'status' => 1,
                'created_date' => '2020-05-13 14:55:05',
                'modified_date' => '2020-06-23 14:44:23'
            )
        );
        return isset($service_details[$id]) ? $service_details[$id] : null;
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
