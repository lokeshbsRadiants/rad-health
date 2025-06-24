<?php

class Current_clients extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Current Clients";
        $data["page"] = "current_clients";
        $this->load->view("header_view", $data);
        $this->load->view("currentclients_view", $data);
        $this->load->view("footer_view");
    }

}
