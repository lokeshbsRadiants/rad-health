<?php

class Operation_support extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Operation Support";
        $data["page"] = "operation_support";
        $this->load->view("header_view", $data);
        $this->load->view("operationsupport_view", $data);
        $this->load->view("footer_view");
    }
}