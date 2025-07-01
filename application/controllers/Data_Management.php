<?php

class Data_management extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Data Management";
        $data["page"] = "data_management";
        $this->load->view("header_view", $data);
        $this->load->view("datamanagement_view", $data);
        $this->load->view("footer_view");
    }

}
