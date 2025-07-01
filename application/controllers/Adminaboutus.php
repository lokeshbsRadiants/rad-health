<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Adminaboutus extends CI_Controller {

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
        $data['title'] = "RADgov - About US";
        $data["page"] = "about_us";
        $data["sidebar"] = $this->load->view("admin/sidebar_view", $data, TRUE);
        $this->load->view('admin/header_view', $data);
        $this->load->view('admin/add_edit_about_view', $data);
        $this->load->view('admin/footer_view', $data);
    }

    function save() {
        $data = $_POST;
        unset($data['fileuploader-list-files']);
        unset($data['fileuploader-list-files1']);
        unset($data['fileuploader-list-files2']);
        unset($data['fileuploader-list-files3']);
        unset($data['fileuploader-list-files4']);
        unset($data['fileuploader-list-files5']);
        $data['modified_date'] = $this->admin->get_custom_date("%Y-%m-%d %H:%i:%s", now());
        $result = $this->adminmodel->save_about_us($data);
        $value = array(
            "result" => $result
        );
        echo json_encode($value);
    }

    function save_image() {
        $dir = realpath("assets/uploads/about_us/");
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
        unlink(realpath("assets/uploads/about_us") . "/" . $_POST['file']);
        $value = array(
            "result" => "Success"
        );
        echo json_encode($value);
    }

}
