<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admincertifications extends CI_Controller {

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
        $data['title'] = "RADgov - Certifications";
        $data["page"] = "certification";
        $data["sidebar"] = $this->load->view("admin/sidebar_view", $data, TRUE);
        $this->load->view('admin/header_view', $data);
        $this->load->view('admin/add_edit_certification_view', $data);
        $this->load->view('admin/footer_view', $data);
    }

    function add_edit_clients() {
        $data['id'] = $this->input->get_post("id");
        $str = $this->load->view("admin/add_edit_certification_view", $data, true);
        $value = array(
            "str" => $str
        );
        echo json_encode($value);
    }

    function save() {
        $data = $_POST;
        unset($data['fileuploader-list-files']);
        $data['modified_date'] = $this->admin->get_custom_date("%Y-%m-%d %H:%i:%s", now());
        $data['certification_id'] = $this->input->get_post('certification_id');
        $data['certification_images'] = $this->input->get_post('certification_images');
        $result = $this->adminmodel->save_certifications($data);
        $value = array(
            "result" => $result
        );
        echo json_encode($value);
    }

    function save_image() {
        $dir = realpath("assets/uploads/certifications/");
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
        unlink(realpath("assets/uploads/certifications") . "/" . $_POST['file']);
        $value = array(
            "result" => "Success"
        );
        echo json_encode($value);
    }

}
