<?php

class   Storage_services_including_san   extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Storage Services Including San";
        $data["page"] = "storage_services_including_san";
        $this->load->view("header_view", $data);
        $this->load->view("storageservices_view", $data);
        $this->load->view("footer_view");
    }
}