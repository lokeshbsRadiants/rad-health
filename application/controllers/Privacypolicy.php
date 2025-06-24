<?php

class Privacypolicy extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Privacy Policy";
        $data["page"] = "privacy policy";
        $this->load->view("header_view", $data);
        $this->load->view("privacy_policy_view", $data);
        $this->load->view("footer_view");
    }

}
