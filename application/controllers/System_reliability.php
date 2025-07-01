<?php

class System_reliability extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments -  System Reliability / Performance";
        $data["page"] = "system_reliability";
        $this->load->view("header_view", $data);
        $this->load->view("systemreliability_view", $data);
        $this->load->view("footer_view");
    }

}
