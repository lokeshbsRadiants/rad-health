<?php

class Aboutus extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - About Us";
        $data['about_us'] = $this->user_model->get_about_us();
        $data["page"] = "about_us";
        $this->load->view("header_view", $data);
        $this->load->view("about_view", $data);
        $this->load->view("footer_view");
    }

}
