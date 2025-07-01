<?php

class    Network_operations_center_management    extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Network Operations Center Management";
        $data["page"] = "network_operations_center_management";
        $this->load->view("header_view", $data);
        $this->load->view("networkoperations_centermanagement_view", $data);
        $this->load->view("footer_view");
    }
}