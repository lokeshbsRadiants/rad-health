<?php

class Jobapplicant extends CI_Controller {
    private $baseURL;
    function __construct()
    {
        parent::__construct();
        $this->load->model("user_model", "", true);
        $this->load->library('session');
        $this->load->library('form_validation');
        // $this->baseURL = "https://intranet.radiants.com/RadiantWebsiteAPI/api/";
        $this->baseURL = "https://intranet.radgov.com/RadgovWebsiteAPI/API/";
    }

    function index()
    {

        // redirect if the user is not authenticated
        if (!$this->session->userdata('loggedin')) {
            redirect('/signin');
        }

        $data["title"] = "RADgov | Empowering Governments - Job Applications";
        $data["page"] = "job applications";

        // api requests to get the list of applied jobs of the currently loggedin user 

        $result = $this->listofAppliedJobs();

        if ($result) {

            $data['applicationsResult'] = $result;
        }

        $this->load->view("header_view", $data);
        $this->load->view('jobnav_view', $data);
        $this->load->view("job_applications_view", $data);
        $this->load->view("footer_view");

    }


    private function listofAppliedJobs()
    {
        $userId = $this->session->userdata('userID');

        $url = $this->baseURL . "AppliedList?UserID=" . urlencode($userId);

        //  get request to server 
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $response = curl_exec($ch);



        if (curl_errno($ch)) {
            return FALSE;
        } else {
            // echo $response;
            $response = json_decode($response, true);
            return $response;

        }
    }

    function profile()
    {
        $data["title"] = "RADgov | Empowering Governments - My Profile";
        $data['page'] = "my profile";

        // get the data from the server 
        $resumes = $this->apiResumeList();
        //  resume data

        $data["resumes"] = [];

        if ($resumes != 0) {

            $data['resumes'] = $resumes;
        }

        $data['userInfo'] = NULL;

        $userInfo = $this->getUserData();
        if ($userInfo != 0) {
            $data['userInfo'] = $userInfo;
        }



        // user data 

        $this->load->view("header_view", $data);
        $this->load->view('jobnav_view', $data);
        $this->load->view("applicant_profile_view", $data);
        $this->load->view("footer_view");
    }


    private function getUserData()
    {
        $userID = $this->session->userdata('userID');
        // $userID = '43434h';
        $url = $this->baseURL . "ProfileDetails?UserID=" . urlencode($userID);

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTPGET, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return 0;
        } else {
            if ($response) {
                $responseData = json_decode($response, true);
                if (isset($responseData["Message"]) && $responseData["Message"] == "The request is invalid.") {
                    return 0;
                } else {
                    return $responseData;
                }
            } else {
                return 0;
            }
        }

    }

    public function apiResumeList()
    {
        $userID = $this->session->userdata("userID");
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
                return [];
            } else {
                return json_decode($response);
            }
        }

    }


    function updateProfile()
    {

        $this->form_validation->set_rules('firstname', 'First Name', 'required|alpha|max_length[50]');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|alpha|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[100]');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|numeric|exact_length[10]');
        $this->form_validation->set_rules('address1', 'Address 1', 'required|max_length[255]');
        $this->form_validation->set_rules('address2', 'Address 2', 'max_length[255]');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('city', 'City', 'required|max_length[100]');
        $this->form_validation->set_rules('state', 'State', 'required|max_length[100]');
        $this->form_validation->set_rules('zipcode', 'Zip Code', 'max_length[6]');

        $this->form_validation->set_rules('current_salary', 'Current Salary', 'max_length[12]');
        $this->form_validation->set_rules('current_salary_type', 'Current Salary Type', 'max_length[50]');
        $this->form_validation->set_rules('prefered_salary', 'Preferred Salary', 'numeric|max_length[12]');
        $this->form_validation->set_rules('prefered_salary_type', 'Preferred Salary Type', 'max_length[50]');


        $fName = $this->input->post('firstname');
        $lName = $this->input->post('lastname');
        $email = $this->session->userdata('email');
        $mobile = $this->input->post('mobile');
        $address1 = $this->input->post('address1');
        $address2 = $this->input->post('address2');
        $country = $this->input->post('country');
        $city = $this->input->post('city');
        $state = $this->input->post('state');
        $zipcode = $this->input->post('zipcode');
        $current_salary = $this->input->post('current_salary');
        $current_salary_type = $this->input->post('current_salary_type');
        $prefered_salary = $this->input->post('prefered_salary');
        $prefered_salary_type = $this->input->post('prefered_salary_type');

        $legal_first = $this->input->post('legal_first');
        $legal_last = $this->input->post('legal_last');
        $legal_street = $this->input->post('legal_street_address');
        $legal_city = $this->input->post('legal_city');
        $legal_state = $this->input->post('legal_state');
        $legal_zipcode = $this->input->post('legal_zipcode');


        // education 
        $school_name = $this->input->post('school_name');
        $educational_program = $this->input->post('educational_program');
        $year = $this->input->post('year');
        $major = $this->input->post('major');

        // experience 
        $company_name = $this->input->post('company_name');
        $experience_title = $this->input->post('experience_title');
        $fromDate = $this->input->post('fromDate');
        $toDate = $this->input->post('fromDate');
        $experience_description = $this->input->post('experience_description');


        $education = [];
        $experience = [];



        if (!empty($school_name)) {
            foreach ($school_name as $i => $school) {
                $education[] = [
                    "School" => $school,
                    "EducationalProgram" => isset($educational_program[$i]) ? $educational_program[$i] : '', // Default to an empty string if not set
                    "Year" => isset($year[$i]) ? $year[$i] : '',
                    "Major" => isset($major[$i]) ? $major[$i] : ''
                ];
            }
        }

        if (!empty($company_name)) {
            foreach ($company_name as $i => $company) {
                $experience[] = [
                    "company" => $company,
                    "Titles" => isset($experience_title[$i]) ? $experience_title[$i] : '',
                    "fromDate" => isset($fromDate[$i]) ? $fromDate[$i] : '',
                    "toDate" => isset($toDate[$i]) ? $toDate[$i] : '',
                    "description" => isset($experience_description[$i]) ? $experience_description[$i] : '',
                ];
            }
        }


        $formData = [
            "UserID" => $this->session->userdata('userID'),
            "Firstname" => $fName,
            "lastname" => $lName,
            "emailid" => $email,
            "address1" => $address1,
            "address2" => $address2,
            "country" => $country,
            "city" => $city,
            "state" => $state,
            "zipcode" => $zipcode,
            "cellphone" => $mobile,
            "CurrentSalary" => $current_salary,
            "CurrentSalaryType" => $current_salary_type,
            "PreferredSalary" => $prefered_salary,
            "PreferedSalaryType" => $prefered_salary_type,
            "AdditionalInfoLegalFirstName" => $legal_first,
            "AdditionalInfoLegalLastName" => $legal_last,
            "AdditionalInfoStreetAddress" => $legal_street,
            "AdditionalInfoCity" => $legal_city,
            "AdditionalInfoState" => $legal_state,
            "AdditionalInfoZipCode" => $legal_zipcode,
            "CreatedDT" => date('Y-m-d H:i:s'),
            "Education" => $education,
            "Experience" => $experience
        ];

        $result = $this->apiProfileUpdate($formData);

        if ($result == 0) {
            $this->session->set_flashdata("error", "can not updated now. Try again later!");
            redirect('jobapplicant/profile');
        } else {
            $this->session->set_flashdata("success", "Profile updated Successfully!");
            redirect('jobapplicant/profile');
        }


    }

    private function apiProfileUpdate($data)
    {
        $url = $this->baseURL . "SubmitResume";

        $jsonData = json_encode($data);
        $ch = curl_init($url);

        // Set the cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return response as a string
        curl_setopt($ch, CURLOPT_POST, true); // Set request method to POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData); // Attach the data to the request
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json', // Set content type to application/json

        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return 0;
        } else {
            return 1;
        }


    }

    function changePassword()
    {

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]', [
            'required' => 'You must provide a %s.',
            'min_length' => 'The %s must be at least 8 characters long.'
        ]);
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[password]', [
            'required' => 'You must confirm your %s.',
            'matches' => 'The %s does not match the Password.'
        ]);

        if ($this->form_validation->run() == FALSE) {

            $this->session->set_flashdata('error', 'password and confirm password must match!');
            redirect($_SERVER['HTTP_REFERER']);
            die();
        }


        $password = $this->input->post('password');
        $confirmPwd = $this->input->post('confirmPassword');
        $result = $this->apiUpdatePassword($password);
        /*
            0 = Network Error,
            1 = User Error,
            2 = Success
        */
        if ($result == 0) {
            $this->session->set_flashdata('error', "Network Error. Kindly try again");
            redirect($_SERVER['HTTP_REFERER']);
        } else if ($result == 1) {
            $this->session->set_flashdata('error', "Error while updating password. Please try again later!");
            redirect($_SERVER['HTTP_REFERER']);
        } else if ($result == 2) {
            $this->session->set_flashdata('success', "Password updated successfully!");
            redirect('jobauth/signin');
        }

    }

    private function apiUpdatePassword($password)
    {
        $userID = $this->session->userdata('userID');

        $url = $this->baseURL . "PasswordUpdate?Userid=" . $userID . "&Password=" . $password;

        $ch = curl_init($url);

        $headers = [
            "Content-Type: application/json",
        ];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return 0;
        } else {

            if ($response == '"Password Updated Successfully"') {
                return 2;
            } else {
                return 1;
            }

        }
    }


    function uploadResume()
    {
        $data["title"] = "RADgov | Empowering Governments - Upload Resume";
        $data["page"] = "upload resume";

        if ($this->input->method() == "post") {

            $this->form_validation->set_rules('resume', 'Resume', 'callback_file_check');

            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('error', 'Please upload a valid resume');
                return redirect('jobapplicant/profile');


            }

            $resume = isset($_FILES['resume']) ? $_FILES['resume'] : null;





            $result = $this->apiUploadResume($resume);
            if ($result != 0) {
                $this->session->set_flashdata('success', "Resume Uploaded successfully");
                $resumeUploaded = [
                    'resumeUploaded' => true
                ];
                $this->session->set_userdata($resumeUploaded);
                redirect('jobapplicant/profile');
            }
            $this->session->set_flashdata('error', "Error while uploading! Kindly try again later!");
            redirect('jobapplicant/profile');

        } else {
            $this->load->view("header_view", $data);
            $this->load->view('jobnav_view', $data);
            $this->load->view("upload_resume_view", $data);
            $this->load->view("footer_view");
        }

    }

    public function apiUploadResume($resume)
    {
        $url = $this->baseURL . "UploadFile?UserID=" . urlencode($this->session->userdata('userID'));

        $headers = [
            'Content-Type: application/json'
        ];

        $post_fields = [
            'FILE' => new CURLFile($resume['tmp_name'], $resume['type'], $resume['name'])
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            return 0;
        } else {

            if ($response == '"File Uploaded Successfully"') {
                return 2;
            } else {
                return 0;
            }


        }

    }


    public function file_check($str)
    {
        $allowed_mime_type_arr = array('application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $mime = get_mime_by_extension($_FILES['resume']['name']);

        if (isset($_FILES['resume']['name']) && $_FILES['resume']['name'] != "") {
            if (in_array($mime, $allowed_mime_type_arr)) {
                return true;
            } else {
                $this->form_validation->set_message('file_check', 'Please select only pdf/doc/docx file.');
                return false;
            }



        } else {
            $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
            return false;
        }
    }




}
