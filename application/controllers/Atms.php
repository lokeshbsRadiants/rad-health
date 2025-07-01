<?php

class Atms extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - ATMS";
        $data["page"] = "atms";
        $this->load->view("header_view", $data);
        $this->load->view("atms_view", $data);
        $this->load->view("footer_view");
    }

}
