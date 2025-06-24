<?php

class Application_development extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Application Development – Custom / Product Development";
        $data["page"] = "application_development";
        $this->load->view("header_view", $data);
        $this->load->view("applicationdevelopment_view", $data);
        $this->load->view("footer_view");
    }

}
