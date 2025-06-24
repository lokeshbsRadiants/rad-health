<?php

class System_security extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments -  System Security";
        $data["page"] = "system_security";
        $this->load->view("header_view", $data);
        $this->load->view("systemsecurity_view", $data);
        $this->load->view("footer_view");
    }

}
