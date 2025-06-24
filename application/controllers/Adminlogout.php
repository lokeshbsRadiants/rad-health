<?php

class Adminlogout extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $this->session->sess_destroy();

        $this->session->unset_userdata('radgov_user_id');

        $this->session->unset_userdata('radgov_full_name');

        $this->session->unset_userdata('radgov_user_name');

        $this->session->unset_userdata('radgov_email');

        $this->session->unset_userdata('radgov_full_name');

        $this->session->unset_userdata('radgov_role_id');

        redirect(base_url() . "adminlogin");
    }

}
