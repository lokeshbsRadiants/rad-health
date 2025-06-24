<?php

class Application_integration extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Application Integration - Collaboration / Information Worker Solution, Business Intelligence & Analytics (DW/BI)";
        $data["page"] = "application_integration";
        $this->load->view("header_view", $data);
        $this->load->view("applicationintegration_view", $data);
        $this->load->view("footer_view");
    }

}
