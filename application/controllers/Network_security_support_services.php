<?php

class Network_security_support_services extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Network Security Support Services";
        $data["page"] = "network_security_support_services";
        $this->load->view("header_view", $data);
        $this->load->view("network_securitysupport_view", $data);
        $this->load->view("footer_view");
    }
}