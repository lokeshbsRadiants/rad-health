<?php

class Geographic_information_systems_development extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Geographic Information Systems (GIS) Development";
        $data["page"] = "geographic_information_systems_development";
        $this->load->view("header_view", $data);
        $this->load->view("gis_view", $data);
        $this->load->view("footer_view");
    }

}
