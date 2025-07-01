<?php

class Database_services extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Database Services";
        $data["page"] = "database_services";
        $this->load->view("header_view", $data);
        $this->load->view("databaseservices_view", $data);
        $this->load->view("footer_view");
    }
}