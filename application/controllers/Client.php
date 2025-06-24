<?php

class Client extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data['id'] = $this->uri->segment(2);
        $data['client'] = $this->user_model->get_sub_modules(strtolower($data['id']));
        if (isset($data['client']['client_sub_module_id'])) {
            $data["title"] = "RADgov - " . ucfirst($data['id']);
            $data["page"] = "client";
            $this->load->view("header_view", $data);
            $this->load->view("client_view", $data);
            $this->load->view("footer_view");
        } else {
            redirect('home');
        }
    }

}
