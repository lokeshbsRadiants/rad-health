<?php

class Application_migration extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Application Migration - Code Conversion, Technology Migration / Legacy Modernization";
        $data["page"] = "application_migration";
        $this->load->view("header_view", $data);
        $this->load->view("applicationmigration_view", $data);
        $this->load->view("footer_view");
    }

}
