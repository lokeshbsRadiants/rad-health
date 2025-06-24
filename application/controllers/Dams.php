<?php

class Dams extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - DAMS";
        $data["page"] = "dams";
        $this->load->view("header_view", $data);
        $this->load->view("dams_view", $data);
        $this->load->view("footer_view");
    }

}
