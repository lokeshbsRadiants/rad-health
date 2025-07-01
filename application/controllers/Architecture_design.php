<?php

class Architecture_design extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Architecture & Design";
        $data["page"] = "architecture_design";
        $this->load->view("header_view", $data);
        $this->load->view("architecturedesign_view", $data);
        $this->load->view("footer_view");
    }
}