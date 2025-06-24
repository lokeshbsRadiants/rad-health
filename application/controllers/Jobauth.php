<?php


class Jobauth extends CI_Controller {
    private $baseURL;
    function __construct()
    {
        parent::__construct();
        $this->load->model("user_model", "", true);
        $this->load->library('form_validation');
        $this->load->library("session");
        // $this->baseURL = "https://intranet.radiants.com/RadiantWebsiteAPI/api/";

        $this->baseURL = "https://intranet.radgov.com/RadgovWebsiteAPI/API/";


    }


    function register()
    {
        // if Post Request : 
        if ($this->input->method() == "post") {
            $this->processRegistrationForm();
        }
        // If Get Request
        else {
            $this->loadRegistrationForm();
        }
    }

    private function loadRegistrationForm()
    {
        $data["title"] = "RADgov | Empowering Governments - user register";
        $data["page"] = "user register";
        $this->load->view("header_view", $data);
        $this->load->view('jobnav_view', $data);
        $this->load->view("applicant_registration_view", $data);
        $this->load->view("footer_view");
    }

    private function processRegistrationForm()
    {
        $url = $this->baseURL . "RegisterSignup";

        // validations 
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[2]');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]', 'password must match');
        $this->form_validation->set_rules('address1', 'Address 1', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('zipcode', 'Zip Code', 'required');

        // check for validation results 
        if ($this->form_validation->run() == FALSE) {

            // $this->session->set_flashdata("error", "Validation Error. Kindly check your input details!");
            // return redirect($_SERVER['HTTP_REFERER']);
            $this->session->set_flashdata('error', validation_errors());
            $this->loadRegistrationForm();
        } else { // no validation error 
            $formData = array(
                'Firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'emailid' => $this->input->post('email'),
                'cellphone' => (string) $this->input->post('mobile'),
                'password' => $this->input->post('password'),
                'address1' => $this->input->post('address1'),
                'address2' => $this->input->post('address2'),
                'country' => $this->input->post('country'),
                'city' => $this->input->post('city'),
                'zipcode' => (string) $this->input->post('zipcode'),
                'state' => $this->input->post('state'),
            );

            $result = $this->sendCurlPostRequest($url, $formData);

            /* 
                0 => server error
                1 => user error
                2 => already exists
                3 => registered successfully
            */
            if ($result == 0) {
                $this->session->set_flashdata("error", "can not send request now. Kindly try again later!");
            } else if ($result == 1) {
                $this->session->set_flashdata("error", "error while uploading your data. Kindly try again later!");
            } else if ($result == 2) {
                $this->session->set_flashdata('error', "email already exists. Try sign in");
                $this->loadRegistrationForm();
            } else {
                $this->session->set_flashdata("success", "Registered successfully! Please Login");
                redirect('jobauth/signin');
                die();
            }

            redirect($_SERVER['HTTP_REFERER']);



        }

    }

    private function sendCurlPostRequest($url, $data)
    {

        $data = json_encode($data);
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type:application/json',

        ));

        // execute it 
        $response = curl_exec($ch);


        if (curl_errno($ch)) {
            return 0;
        } else {
            // echo $response;
            $response_data = json_decode($response, true);
            // echo $response_data['Message'];
            if (isset($response_data['Message']) && $response_data["Message"] == "An error has occurred.") {
                // server validation error
                // echo $response;
                return 1;
            } else if (isset($response_data) && $response_data == "Email ID ALready Exist") {
                //  user has already exists 
                // echo $response_data;
                return 2;
            } else {
                // registered successfully
                // echo $response;
                return 3;
            }


        }

    }


    function signIn()
    {
        // handle post request 
        if ($this->input->method() == "post") {
            $this->processSigninForm();
        } else {
            $this->loadSignInForm();
        }



    }

    private function loadSignInForm()
    {
        $data["title"] = "RADgov | Empowering Governments - Signin";
        $data["page"] = "sign in";
        $this->load->view("header_view", $data);
        $this->load->view('jobnav_view', $data);
        $this->load->view("applicant_signin_view", $data);
        $this->load->view("footer_view");
    }

    private function processSigninForm()
    {
        $url = $this->baseURL . "SignInUser";



        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[2]');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Validation Error. Kindly check your inputs");
        } else {
            // make a api request 
            $formData = [
                "UserName" => $this->input->post('email'),
                "Password" => $this->input->post('password'),
                // "Password" => "sathishkdjfkjh",
            ];

            $result = $this->setCurlGetRequest($url, $formData);
            /*
                0 => Network Error,
                1 => Invalid email or password
                2 => Logged in successfully

            */
            if ($result == 0) {
                $this->session->set_flashdata('error', "Network Error. Kindly try again later!");
            } else if ($result == 1) {
                $this->session->set_flashdata('error', "Invalid Email or Password");
            } else if ($result == 2) {
                $this->session->set_flashdata('success', "Logged in successfully!");
                redirect('jobapplicant/index');
                die();

            }

        }

        redirect($_SERVER['HTTP_REFERER']);


    }


    private function setCurlGetRequest($url, $data)
    {

        $url = $url . '?UserName=' . urlencode($data['UserName']) . '&Password=' . urlencode($data['Password']);

        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $url);               // Set the URL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);     // Return the response as a string
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        // execute it 
        $response = curl_exec($ch);



        if (curl_errno($ch)) {

            $error_msg = curl_error($ch);
            // echo "cURL Error: " . $error_msg;   
            return 0;
        } else {
            // echo $response;
            if (!$response) {
                // echo "username or password is incorrect !";
                return 1;
            } else {

                $response = json_decode($response, true);



                $userId = $response[0]['UserID'];
                $email = $response[0]['emailid'];
                // $resumeUploaded = $response[0]['ResumeUploaded'];

                $resumeList = $this->apiResumeList($userId);

                if ($resumeList == 0) {
                    $resumeUploaded = false;
                } else {
                    $resumeUploaded = true;
                }

                $session_data = [
                    "userID" => $userId,
                    "email" => $email,
                    "resumeUploaded" => $resumeUploaded,
                    "loggedin" => TRUE
                ];

                $this->session->set_userdata($session_data);

                return 2;

            }
        }

    }

    public function apiResumeList($userID)
    {

        $url = $this->baseURL . "ResumeList?UserID=" . urlencode($userID);

        // api request 
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $url);          // Set the URL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
        curl_setopt($ch, CURLOPT_HTTPGET, true);      // Specify GET method

        // Execute the request
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return 0;
        } else {
            if ($response == "") {
                return 0;
            } else {
                return json_decode($response);
            }
        }

    }


    // Logout 
    function logout()
    {

        // destroy the session and redirect to signin page 
        // $this->session->set_flashdata('success', "successfully logged out!");
        $this->session->sess_destroy();
        redirect('jobauth/signin');
    }


    public function forgotPassword()
    {
        if ($this->input->method() == "post") {
            $this->postForgotPassword();
        } else {
            $this->getForgotPassword();
        }

    }

    public function getForgotPassword()
    {
        $data["title"] = "RADgov | Empowering Governments - forgot password";
        $data["page"] = "forgot password";
        $this->load->view("header_view", $data);
        $this->load->view('jobnav_view', $data);
        $this->load->view("forgot_password_view", $data);
        $this->load->view("footer_view");
    }

    public function postForgotPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Invalid email Format");
            return redirect('/jobauth/forgot-password');
        }

        $user_email = $this->input->post('email');

        $result = $this->apiForgotPassword($user_email);

        if ($result === -1) {
            $this->session->set_flashdata('error', 'Network error. Kindly try again later!');
            redirect($_SERVER['HTTP_REFERER']);
        } else if ($result === 0) {

            $this->session->set_flashdata('error', 'Email not found!');
            return redirect('jobauth/signin');
        } else {
            $this->session->set_flashdata('forgot-password-success', "Your  password : $result");
            return redirect('/jobauth/signin');
        }
    }

    public function apiForgotPassword($user_mail)
    {

        $url = $this->baseURL . "ForgotPassword?UserName=$user_mail";

        // http request using codeigniter
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPGET, true);

        $response = curl_exec($ch);




        if (curl_errno($ch)) {
            return -1; // network error 
        } else {
            $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            if ($http_status == 404) {
                return 0; // client / user error 
            }
            $responseData = json_decode($response);
            $new_password = $responseData[0]->password;



            return $new_password;

        }


    }


}