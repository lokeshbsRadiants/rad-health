<?php

class Current_engagement extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Current Engagement";
        $data["page"] = "current_engagement";
        $this->load->view("header_view", $data);
        $this->load->view("currentengagement_view", $data);
        $this->load->view("footer_view");
    }

}
