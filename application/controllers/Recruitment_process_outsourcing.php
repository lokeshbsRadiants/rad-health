<?php

class Recruitment_process_outsourcing extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Recruitment Process Outsourcing";
        $data["page"] = "recruitment_process_outsourcing";
        $this->load->view("header_view", $data);
        $this->load->view("rpo_view", $data);
        $this->load->view("footer_view");
    }
}
