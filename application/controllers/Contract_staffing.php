<?php

class Contract_staffing extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Contract Staffing";
        $data["page"] = "contract_staffing";
        $this->load->view("header_view", $data);
        $this->load->view("contract_staffing_view", $data);
        $this->load->view("footer_view");
    }

}
