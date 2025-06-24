<?php

class Contractvehicles extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Contract Vehicles";
        $data["page"] = "contract_vehicles";
        $this->load->view("header_view", $data);
        $this->load->view("contract_view", $data);
        $this->load->view("footer_view");
    }

}