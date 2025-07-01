<?php

class Infrastructure_management_services extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Infrastructure Management Services";
        $data["page"] = "infrastructure_management_services";
        $this->load->view("header_view", $data);
        $this->load->view("infrastructureservices_view", $data);
        $this->load->view("footer_view");
    }

}
