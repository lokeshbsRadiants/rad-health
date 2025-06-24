<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Adminlogin extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->model("adminmodel", "", true);
        if ($this->session->userdata('radgov_admin_id') != null) { // Function to check Session is set or not	
            redirect('admintimeline');
        }
    }

    function index() {
        $data['title'] = "RADgov -  Admin Login";
        $data['page'] = "login";
        $this->load->view('admin/login_view', $data);
    }

    function auth() {
        $username = $this->input->get_post("email");
        $password = $this->input->get_post("password");
        $data['email'] = $username;
        $data['password'] = md5($password);
        $result = 0;
        $url = base_url() . "admintimeline";
        $q = $this->adminmodel->auth($data);
        if ($result == 0) {
            if ($q->num_rows() > 0) {
                $result = $q->row()->status == 0 ? -1 : 1;
                if ($q->row()->role_id == 1) {
                    $url = base_url() . "admintimeline";
                } else if ($result == 1) {
                    $user_data = array(
                        'radgov_admin_id' => $q->row()->admin_id,
                        'radgov_user_name' => $q->row()->user_name,
                        'radgov_email' => $q->row()->email,
                        'radgov_full_name' => $q->row()->first_name . " " . $q->row()->last_name,
                        'radgov_role_id' => $q->row()->role_id
                    );

                    $this->session->set_userdata($user_data);
                }
            }
        }
        $data['result'] = $result;
        $res = $this->load->view('admin/login_msg_view', $data, true);
        $value = array(
            'result' => $result,
            'view' => $res,
            'url' => $url
        );
        echo json_encode($value);
    }

}
