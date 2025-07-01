<?php

class Contract_hire_staffing extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Contract Hire Staffing";
        $data["page"] = "contract_hire_staffing";
        $this->load->view("header_view", $data);
        $this->load->view("contract_hirestaffing_view", $data);
        $this->load->view("footer_view");
    }
}
