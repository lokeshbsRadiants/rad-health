<?php

class It_professional_services extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - IT Professional Services";
        $data["page"] = "it_professional_services";
        $this->load->view("header_view", $data);
        $this->load->view("itprofessionalservices_view", $data);
        $this->load->view("footer_view");
    }
}