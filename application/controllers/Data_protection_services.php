<?php

class Data_protection_services extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Data Protection Services- IT / Cyber Security";
        $data["page"] = "data_protection";
        $this->load->view("header_view", $data);
        $this->load->view("dataprotection_view", $data);
        $this->load->view("footer_view");
    }

}
