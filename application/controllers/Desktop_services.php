<?php

class Desktop_services extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Desktop Services";
        $data["page"] = "desktop_services";
        $this->load->view("header_view", $data);
        $this->load->view("desktopservices_view", $data);
        $this->load->view("footer_view");
    }

}
