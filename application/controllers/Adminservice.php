<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Adminservice extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('radgov_admin_id') == null) { // Function to check Session is set or not	
            if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
                $value = array(
                    'session' => 'false'
                );
                echo json_encode($value);
                exit();
            } else {
                redirect('adminlogin');
            }
        }
        $this->admin->no_cache();
        $this->load->model("adminmodel", "", true);
    }

    function index() {
        $data['title'] = "RADgov - Services";
        $data["page"] = "service";
        $data["sidebar"] = $this->load->view("admin/sidebar_view", $data, TRUE);
        $this->load->view('admin/header_view', $data);
        $this->load->view('admin/service_view', $data);
        $this->load->view('admin/footer_view', $data);
    }

    function add_edit_service() {
        $data['id'] = $this->input->get_post("id");
        $str = $this->load->view("admin/add_edit_service", $data, true);
        $value = array(
            "str" => $str
        );
        echo json_encode($value);
    }

    function save() {
        $data = $_POST;
//        $data['modified_date'] = $this->admin->get_custom_date("%Y-%m-%d %H:%i:%s", now());
        $result = $this->adminmodel->save_service($data);
        $value = array(
            "result" => $result
        );
        echo json_encode($value);
    }

    function check_service_exist() {
        $name = strtolower($this->admin->escape_special_chrs(trim($this->input->get_post("name"))));
        $id = $this->admin->escape_special_chrs(trim($this->input->get_post("id")));
        $query = $this->adminmodel->check_service_availability($name, $id);
        $q = $query->num_rows();
        $result = "true";
        if ($q > 0) {
            $result = "false";
        }
        echo $result;
    }

    function del_service() {
        $id = $this->input->get_post("id");
        $result = $this->adminmodel->del_service($id);
        $value = array(
            "result" => $result
        );
        echo json_encode($value);
    }

}
