<?php

class Past_performance extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Past Performance";
        $data["page"] = "past_performance";
        $this->load->view("header_view", $data);
        $this->load->view("pastperformance_view", $data);
        $this->load->view("footer_view");
    }

}
