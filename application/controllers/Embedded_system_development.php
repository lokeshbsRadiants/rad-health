<?php

class Embedded_system_development extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Embedded System Development";
        $data["page"] = "embedded_system_development";
        $this->load->view("header_view", $data);
        $this->load->view("embeddedsystemdev_view", $data);
        $this->load->view("footer_view");
    }

}