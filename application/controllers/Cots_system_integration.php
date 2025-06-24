<?php

class Cots_system_integration extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - COTS System Integration";
        $data["page"] = "cots_system_integration";
        $this->load->view("header_view", $data);
        $this->load->view("cots_integration_view", $data);
        $this->load->view("footer_view");
    }

}
