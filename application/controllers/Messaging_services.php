<?php

class   Messaging_services   extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Messaging Services";
        $data["page"] = "messaging_services";
        $this->load->view("header_view", $data);
        $this->load->view("messaging_services_view", $data);
        $this->load->view("footer_view");
    }
}