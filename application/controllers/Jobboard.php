<?php


class Jobboard extends CI_Controller {
    private $baseURL; 
    function __construct() {
        parent::__construct();
        $this->load->model("user_model", "", true);
        $this->load->library('form_validation');
        $this->load->library('session');
        // $this->baseURL  = "https://intranet.radiants.com/RadiantWebsiteAPI/api/";

        $this->baseURL = "https://intranet.radgov.com/RadgovWebsiteAPI/API/";

        $this->totalJobs = [];


    }

    function index()
    {
        $data["title"] = "RADgov | Empowering Governments - Job Board";
        $data['page'] = "job board";
        $data['result'] = NULL;

        // if its post request :

        if ($this->input->method() == "post") {
            $result = $this->searchJobs();

            if ($result == 0) {
                $this->session->set_flashdata('error', "Network Error!. Please try again later.");
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                // i will count the total number of records
                // i will get the current page 
                // i will only send the items per page to the frontend 

                $data['result'] = $result;
                $this->totalJobs = $result;

                // $data['result'] = $this->getJobs(1);

            }
        }



        $this->load->view("header_view", $data);
        $this->load->view('jobnav_view', $data);
        $this->load->view("jobboard_view", $data);
        $this->load->view("footer_view");
    }


    public function getJobs($current_page)
    {
        $totalJobs = $this->totalJobs;
        if (count($totalJobs) == 0) {
            // no jobs are there 
        }
        $items_per_page = 2;
        $total_num_jobs = count($totalJobs);
        echo "total jobs : $total_num_jobs";

        $page_size = $total_num_jobs / $items_per_page;

        $offset = ($current_page - 1) * $page_size;

        echo "offset : $offset";
        $limit = $items_per_page;

        $current_jobs = array_slice($totalJobs, $offset, $limit);

        // echo json_encode($current_jobs, true);
        echo "current number of josb: " . count($current_jobs);

        return $current_jobs;


    }

    function searchJobs()
    {
        $type = $this->input->post('type');
        $result = $this->searchByKeyword($type);
        return $result;
    }

    private function searchByKeyword($type)
    {
        $keyword = "";
        $country = "";
        $zipcode = "";
        $miles = "";

        if ($type == "keyword") {
            $keyword = $this->input->post('keyword');
        } else if ($type == "filter") {
            $country = $this->input->post('country');
            $zipcode = $this->input->post('zipcode');
            $miles = $this->input->post('miles');
        }


        $url = $this->baseURL . "SearchJobsOnFilters?Searchkeywords=" . urlencode($keyword) . "&country=" . urlencode($country) . "&Zipcode=" . urlencode($zipcode) . "&WithinMiles=" . urlencode($miles)."&Groups=" . urlencode("IV - Health Care");



        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $response = curl_exec($ch);


        // check for errors 
        if (curl_errno($ch)) {
            return 0;
        } else {
            if ($response == '"No Data Found"') {
                return [];
            } else {
                return json_decode($response, true);
            }
        }

    }

    function show()
    {

        if ($this->input->method() != "post") {
            echo "method not allowed";
            return;
        }

        $jobId = $this->input->post('jobID');

        $url = $this->baseURL . "ViewJobDetails?JobID=" . urlencode($jobId);

        // initialize the session
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);

        // execute the result 
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        } else {

            $data["title"] = "RADgov | Empowering Governments - Job Details";
            $data["page"] = "job details";

            $response_data = json_decode($response, true);
            $data["jobTitle"] = $response_data[0]["JobTitle"];
            $data["jobDescription"] = $response_data[0]['JobDescription'];

            $data['location'] = $response_data[0]['City'] . " " . $response_data[0]['JobState'];


            $data['jobId'] = $jobId;
            $this->load->view("header_view", $data);

            $this->load->view("jobboard_details_view", $data);
            $this->load->view("footer_view");
        }
    }

    public function quickApply()
    {
        $jobId = $this->input->post('jobId');
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('resume', 'Resume', 'callback_file_check');
    
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Validation Error');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $message = $this->input->post('message');
            $resume = isset($_FILES['resume']) ? $_FILES['resume'] : null;
            $jobId = $this->input->post('jobId');
    
            $data = [
                "FullName" => $name,
                "emailID" => $email,
                "MobileNumber" => $mobile,
                "Message" => $message,
                "JobID" => $jobId,
            ];
    
            // Add certifications if present
            $certifications = [];
            if (isset($_FILES['certifications']) && is_array($_FILES['certifications']['name'])) {
                foreach ($_FILES['certifications']['name'] as $index => $certFileName) {
                    $fileTmp = $_FILES['certifications']['tmp_name'][$index]['file'];
                    $fileName = $_FILES['certifications']['name'][$index]['file'];
                    $fileSize = $_FILES['certifications']['size'][$index]['file'];
                    $fileType = $_FILES['certifications']['type'][$index]['file'];
    
                    if ($fileSize > 524288) { // 512 KB
                        $this->session->set_flashdata('error', "Certification file '{$fileName}' exceeds 512KB.");
                        redirect($_SERVER['HTTP_REFERER']);
                        return;
                    }
    
                    if ($fileTmp && is_uploaded_file($fileTmp)) {
                        $certifications["certifications[$index][file]"] = new CURLFile($fileTmp, $fileType, $fileName);
                        $certifications["cer_certifications[$index][name]"] = $this->input->post("certifications[$index][name]");
                    }
                }
            }
    
            $url = $this->baseURL . "QuickApplyJobs";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
    
            // Resume Attachment
            if ($resume && $resume['size'] > 0) {
                $data['FILE'] = new CURLFile($resume['tmp_name'], $resume['type'], $resume['name']);
            }
    
            // Merge data and certification uploads
            curl_setopt($ch, CURLOPT_POSTFIELDS, array_merge($data, $certifications));

            $response = curl_exec($ch);
    
            if (curl_errno($ch)) {
                $this->session->set_flashdata('error', "Cannot access API server. Kindly try again");
            } else {
                $response = json_decode($response, true);
                if (isset($response['error']) && $response['error']) {
                    $this->session->set_flashdata('error', $response['message']);
                } else {
                    $this->session->set_flashdata('success', "Your application has been submitted successfully");
                }
            }
    
            redirect('/job-board');
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
    function applyNow()
    {


        if (!$this->session->userdata('loggedin')) {
            redirect('/signin');
        }

        $jobID = $this->uri->segment(3);
        $userID = $this->session->userdata('userID');


        // check if the user has uploaded resume or not . if not redirect to manage resume (upload resume) page 
        if (!$this->session->userdata("resumeUploaded")) {
            $this->session->set_flashdata('error', "Kindly upload the resume to apply for the job");
            redirect("/profile");
            die();
        }

        // if the user has uploaded resume=> just apply for the job and redirect to my applications 

        $result = $this->apiApplyJob($jobID, $userID);
        /*
            0 => Network error,
            1 => Already Applied,
            2 => Applied Successfully
        */
        if ($result == 0) {
            $this->session->set_flashdata("error", "Network Error. Please try again later!");
        } else if ($result == 1) {
            $this->session->set_flashdata("error", "You have already applied for the job");
        } else if ($result == 2) {
            $this->session->set_flashdata("success", "Applied Successfully!!!");
        }
        redirect('/job-applications');
    }

    private function apiApplyJob($jobId, $userId)
    {
        $url = $this->baseURL . "ApplyJob?UserID=" . urlencode($userId) . "&JobID=" . urlencode($jobId);

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
            if (!$response) {
                // echo "Already Applied for the job";
                return 1;
            } else {
                // echo "Applied successfully!";
                return 2;
            }
        }
    }




}

