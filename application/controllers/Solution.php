<?php

class Solution extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data['id'] = $this->uri->segment(2);
        $data['solution'] = $this->user_model->get_solution(strtolower($data['id']));
        if (isset($data['solution']['solution_id'])) {
            $data["title"] = "RADgov | Solution - " . ucfirst($data['id']);
            $data["page"] = "solution";
            $this->load->view("header_view", $data);
            $this->load->view("solution_view", $data);
            $this->load->view("footer_view");
        } else {
            redirect('home');
        }
    }

}
