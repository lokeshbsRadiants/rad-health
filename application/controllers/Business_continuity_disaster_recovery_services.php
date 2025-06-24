<?php

class  Business_continuity_disaster_recovery_services  extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Business Continuity Disaster Recovery Services";
        $data["page"] = "business_continuity_disaster_recovery_services";
        $this->load->view("header_view", $data);
        $this->load->view("bcdr_view", $data);
        $this->load->view("footer_view");
    }
}