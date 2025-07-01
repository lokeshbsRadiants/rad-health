<?php

class Application_management extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Application Management - Managed Testing Services, Application Outsourcing, Application Maintenance";
        $data["page"] = "Application_management";
        $this->load->view("header_view", $data);
        $this->load->view("applicationmanagement_view", $data);
        $this->load->view("footer_view");
    }

}
