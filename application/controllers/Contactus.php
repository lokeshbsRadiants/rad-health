<?php

class Contactus extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
    }

    function index() {
        $data["title"] = "RADgov | Empowering Governments - Contact Us";
        $data["page"] = "contact_us";
        $this->load->view("header_view", $data);
        $this->load->view("contact_view", $data);
        $this->load->view("footer_view");
    }

    function send_email() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("first_name", "Name", 'required');
        $this->form_validation->set_rules("last_name", "Name", 'required');
        $this->form_validation->set_rules("email", "Email", 'required');
        if ($this->form_validation->run()) {
            $first_name = filter_var($this->input->get_post("first_name"), FILTER_SANITIZE_STRING);
            $last_name = filter_var($this->input->get_post("last_name"), FILTER_SANITIZE_STRING);
            $email = filter_var($this->input->get_post("email"), FILTER_SANITIZE_EMAIL);
            $phone_number = filter_var($this->input->get_post("phone_number"), FILTER_SANITIZE_STRING);
            $message = filter_var($this->input->get_post("message"), FILTER_SANITIZE_STRING);
            $is_interested = filter_var($this->input->get_post("is_interested"), FILTER_SANITIZE_STRING);
            $date = $this->admin->get_custom_date("%Y-%m-%d %H:%i:%s", now());
            $result = 0;
            $admin_from_txt = "Contact us - RADGOV";
            $admin_email = "web@honeycombindia.net";
            $cc = "";
            $sub = "Contact us Mail from " . $first_name;
            $insert_data = array(
                "contact_id" => "",
                "first_name" => $first_name,
                "last_name" => $last_name,
                "phone_number" => $phone_number,
                "email" => $email,
                "message" => $message,
                "is_interested" => $is_interested
            );
            $this->user_model->save_contact($insert_data);

            $txt = "Dear Admin <br><br>Please follow up with this customer or Customer Enquiry Details, <br/><br/>
                     First Name : " . $first_name . "<br><br>
                     Last Name : " . $last_name . "<br><br>
                     Email : " . $email . "<br><br>
                     Phone Number : " . $phone_number . "<br><br>
                     Are you interested in knowing about our Services? : " . $is_interested . "<br><br>
                     Message : " . $message . "<br>";
            $admin_email_data = array(
                "msg" => $txt
            );
            $admin_mail_txt1 = $this->load->view("contact_email_view", $admin_email_data, true);
            if ($this->admin->send_mail($admin_from_txt, $admin_email, $cc, $sub, $admin_mail_txt1)) {
                $result = 1;
            }
            $from_txt = "RADGOV";
            $to = $email;
            $sub = "Thank you for writing to RADGOV";
            $txt1 = "
               Thank you for writing to RADGOV.<br><br>
                Our Executive will reach you within 24 hours to answer your query.<br><br>
                Cheers,<br>
                <b>Team RADGOV. </b>";
            $email_data = array(
                "name" => $first_name . " " . $last_name,
                "msg" => $txt1,
            );
            $mail_txt1 = $this->load->view("contact_email_view", $email_data, true);
            if ($this->admin->send_mail($from_txt, $to, $cc, $sub, $mail_txt1)) {
                $values = array("result" => $result, "message" => "Message Sent Successfully!!!", "alert" => "success", "result" => $result);
            } else {
                $values = array("result" => $result, "message" => "Error Occured", "alert" => "error");
            }
            echo json_encode($values);
        } else {
            $values = array("result" => $result, "message" => "Please fill the mandatory fields", "alert" => "error");
            echo json_encode($values);
        }
    }

}
