<?php

class Testing extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Testing";
        $data["page"] = "testing";
        $this->load->view("header_view", $data);
        $this->load->view("testing_view", $data);
        $this->load->view("footer_view");
    }

}
