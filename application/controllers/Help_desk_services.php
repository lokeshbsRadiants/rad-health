<?php

class Help_desk_services extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Help Desk Services";
        $data["page"] = "help_desk_services";
        $this->load->view("header_view", $data);
        $this->load->view("helpdeskservices_view", $data);
        $this->load->view("footer_view");
    }
}