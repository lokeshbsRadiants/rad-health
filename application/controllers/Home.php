<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Home";
        $data["page"] = "home";
        $this->load->view("header_view", $data);
        $this->load->view("home_view", $data);
        $this->load->view("footer_view");
    }

    function service() {
        $data["title"] = "RADgov | Services";
        $data["page"] = "service";
        $this->load->view("header_view", $data);
        $this->load->view("services_view", $data);
        $this->load->view("footer_view");
    }

    function careers() {
        $data["title"] = "RADgov | Careers";
        $data["page"] = "careers";
        $this->load->view("header_view", $data);
        $this->load->view("careers_view", $data);
        $this->load->view("footer_view");
    }

}
