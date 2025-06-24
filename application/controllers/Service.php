<?php

class Service extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data['id'] = $this->uri->segment(2);
        $data['service'] = $this->user_model->get_sub_service(strtolower($data['id']));
        if (isset($data['service']['sub_service_id'])) {
            $data["title"] = "RADgov | Service - " . ucfirst($data['id']);
            $data["page"] = "service";
            $this->load->view("header_view", $data);
            $this->load->view("service_view", $data);
            $this->load->view("footer_view");
        } else {
            redirect('home');
        }
    }

}
