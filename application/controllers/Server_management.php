<?php

class Server_management extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Server Management";
        $data["page"] = "server_management";
        $this->load->view("header_view", $data);
        $this->load->view("servermanagement_view", $data);
        $this->load->view("footer_view");
    }
}