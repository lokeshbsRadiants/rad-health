<?php

class Direct_hire extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Direct Hire";
        $data["page"] = "direct_hire";
        $this->load->view("header_view", $data);
        $this->load->view("direct_hire_view", $data);
        $this->load->view("footer_view");
    }
}
