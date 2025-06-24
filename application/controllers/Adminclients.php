<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Adminclients extends CI_Controller {

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
        $data['title'] = "RADgov - Clients";
        $data["page"] = "clients";
        $data["sidebar"] = $this->load->view("admin/sidebar_view", $data, TRUE);
        $this->load->view('admin/header_view', $data);
        $this->load->view('admin/client_view', $data);
        $this->load->view('admin/footer_view', $data);
    }

    function add_edit_clients() {
        $data['id'] = $this->input->get_post("id");
        $str = $this->load->view("admin/add_edit_client_view", $data, true);
        $value = array(
            "str" => $str
        );
        echo json_encode($value);
    }

    function del_client() {
        $id = $this->input->get_post("id");
        $result = $this->adminmodel->del_client($id);
        $value = array(
            "result" => $result
        );
        echo json_encode($value);
    }

    function check_type_exist() {
        $client_type_id = strtolower($this->admin->escape_special_chrs(trim($this->input->get_post("client_type_id"))));
        $id = $this->admin->escape_special_chrs(trim($this->input->get_post("id")));
        $query = $this->adminmodel->check_client_type_availability($client_type_id, $id);
        $q = $query->num_rows();
        $result = "true";
        if ($q > 0) {
            $result = "false";
        }
        echo $result;
    }

    function save() {
        $data = $_POST;
        unset($data['fileuploader-list-files']);
        $data['modified_date'] = $this->admin->get_custom_date("%Y-%m-%d %H:%i:%s", now());
        $data['client_id'] = $this->input->get_post('client_id');
        $data['client_images'] = $this->input->get_post('client_images');
        $result = $this->adminmodel->save_clients($data);
        $value = array(
            "result" => $result
        );
        echo json_encode($value);
    }

    function save_image() {
        $dir = realpath("assets/uploads/clients/");
        $filename = $_FILES['files']['name'][0];
        $result = 0;
        $valid_formats = array("jpg", "png", "gif", "bmp", "jpeg");
        if (isset($_FILES['files']['name'][0])) {
            $name = $_FILES['files']['name'][0];
            $size = $_FILES['files']['size'][0];
            if (strlen($name)) {
                list($txt, $ext) = explode(".", $name);
                if (in_array($ext, $valid_formats)) {
                    if ($size < (1024 * 1024)) {
//                        $actual_image_name = uniqid() . "_" . random_string('numeric', 5) . "." . $ext;
                        $tmp = $_FILES['files']['tmp_name'][0];
                        if (move_uploaded_file($tmp, $dir . '/' . $filename)) {
                            $result = $filename;
                            echo json_encode(array("filename" => $result));
                        }
                    } else {
                        echo json_encode(array("hasWarnings" => true, "isSuccess" => false, "warnings" => ["Please try again"], 'error' => 'No files were processed.'));
                    }
                }
            } else {
                echo json_encode(array("hasWarnings" => true, "isSuccess" => false, "warnings" => ["Please try again"], 'error' => 'No files were processed.'));
            }
        }
    }

    function delete_image() {
        unlink(realpath("assets/uploads/clients") . "/" . $_POST['file']);
        $value = array(
            "result" => "Success"
        );
        echo json_encode($value);
    }

}
