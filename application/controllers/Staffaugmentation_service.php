<?php

class Staffaugmentation_service extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Staff Augmentation Service";
        $data["page"] = "staffaugmentation_service";
        $this->load->view("header_view", $data);
        $this->load->view("staffaugmentation_service_view", $data);
        $this->load->view("footer_view");
    }

}
