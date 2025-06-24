<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Adminclientmodule extends CI_Controller {

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
        $data['title'] = "RADgov - Client Modules";
        $data["page"] = "client_module";
        $data["sidebar"] = $this->load->view("admin/sidebar_view", $data, TRUE);
        $this->load->view('admin/header_view', $data);
        $this->load->view('admin/client_sub_module_view', $data);
        $this->load->view('admin/footer_view', $data);
    }

    function add_edit_client_sub_module() {
        $data['id'] = $this->input->get_post("id");
        $str = $this->load->view("admin/add_edit_client_sub_module", $data, true);
        $value = array(
            "str" => $str
        );
        echo json_encode($value);
    }

    function save() {
        $data = $_POST;
        unset($data['fileuploader-list-files1']);
        unset($data['fileuploader-list-files']);
        if (isset($data['sub_module_types'])) {
            $data['sub_module_types'] = implode(',', $data['sub_module_types']);
        }
        $data['modified_date'] = $this->admin->get_custom_date("%Y-%m-%d %H:%i:%s", now());
        $result = $this->adminmodel->save_client_sub_module($data);
        $value = array(
            "result" => $result
        );
        echo json_encode($value);
    }

    function check_client_sub_module_exist() {
        $name = strtolower($this->admin->escape_special_chrs(trim($this->input->get_post("sub_module_name"))));
        $id = $this->admin->escape_special_chrs(trim($this->input->get_post("id")));
        $query = $this->adminmodel->check_client_sub_module_availability($name, $id);
        $q = $query->num_rows();
        $result = "true";
        if ($q > 0) {
            $result = "false";
        }
        echo $result;
    }

    function del_client_sub_module() {
        $id = $this->input->get_post("id");
        $result = $this->adminmodel->del_client_sub_module($id);
        $value = array(
            "result" => $result
        );
        echo json_encode($value);
    }

    function save_image() {
        $dir = realpath("assets/uploads/client_modules/");
        $index = isset($_FILES['files1']['name']) ? 1 : (isset($_FILES['files2']['name']) ? 2 : (isset($_FILES['files3']['name']) ? 3 : (isset($_FILES['files5']['name']) ? 5 : 4)));
        $filename = $_FILES['files' . $index]['name'];
        $result = 0;
        $valid_formats = array("jpg", "png", "gif", "bmp", "jpeg");
        if (isset($_FILES['files' . $index]['name'])) {
            $name = $_FILES['files' . $index]['name'];
            $size = $_FILES['files' . $index]['size'];
            if (strlen($name)) {
                list($txt, $ext) = explode(".", $name);
                if (in_array($ext, $valid_formats)) {
                    if ($size < (1024 * 1024)) {
                        $actual_image_name = uniqid() . "_" . random_string('numeric', 5) . "." . $ext;
                        $tmp = $_FILES['files' . $index]['tmp_name'];
                        if (move_uploaded_file($tmp, $dir . '/' . $actual_image_name)) {
                            $result = $actual_image_name;
                            echo json_encode(array("filename" => $result));
                        }
                    } else {
                        echo json_encode(array('error' => 'No files were processed.'));
                    }
                }
            }
        }
    }

    function delete_image() {
        unlink(realpath("assets/uploads/client_modules") . "/" . $_POST['file']);
        $value = array(
            "result" => "Success"
        );
        echo json_encode($value);
    }

}
