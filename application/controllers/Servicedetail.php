<?php

class Servicedetail extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data['id'] = $this->uri->segment(2); // id will be the name of the specif service 

        if($data['id'] == "rad-health") {
            $data["title"] = "RADgov | Service - " . "RADhealth";
            $data["page"] = "service";
            $this->load->view("header_view", $data);
            $this->load->view("rad_health_view", $data);
            $this->load->view("footer_view");
        } else {
            $data['service'] = $this->user_model->get_service_detail(strtolower($data['id']));
            if (isset($data['service']['service_detail_id'])) {
                $data["title"] = "RADgov | Service - " . ucfirst($data['id']);
                $data["page"] = "service";
                $this->load->view("header_view", $data);
                $this->load->view("service_detail_view", $data);
                $this->load->view("footer_view");
            } else {
                redirect('home');
            }
        } 
    }

    function detail_service() {
        $data['id'] = $this->uri->segment(2);
        $data['service'] = $this->user_model->get_service_detail(strtolower($data['id']));
        if (isset($data['service']['service_detail_id'])) {
            $data["title"] = "RADgov | Service - " . ucfirst($data['id']);
            $data["page"] = "service";
            $this->load->view("header_view", $data);
            $this->load->view("detail_service_view", $data);
            $this->load->view("footer_view");
        } else {
            redirect('home');
        }
    }

}
