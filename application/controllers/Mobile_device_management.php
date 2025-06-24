<?php

class Mobile_device_management extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Mobile Device Management";
        $data["page"] = "mobile_device_management";
        $this->load->view("header_view", $data);
        $this->load->view("mobiledevicemanagement_view", $data);
        $this->load->view("footer_view");
    }
}