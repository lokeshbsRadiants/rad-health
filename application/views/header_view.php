<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.ico" type="image/x-icon" />
    <title><?php echo $title ?></title>
    <!---========= CSS ============--->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/asidebar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery-accordion-menu.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/headhesive.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/aos.css">

    <?php if ($page == 'home' || $page == 'about_us' || $page == 'solution') { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/slick-theme.min.css">
    <?php } ?>

    <?php if ($page == 'contract_vehicles' || $page == 'client') { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/tabs.css">

    <?php } ?>

    <?php if ($page == 'client') { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/dataTables.bootstrap4.min.css">
    <?php } ?>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
    <style>
        .job_btn {
            position: absolute;
            top: 36px;
            right: 160px;
            z-index: 999;
        }
    </style>
</head>

<body>
    <!---======= Starting Header Navigation ========--->
    <header class="header-area">
        <div id="header-sroll">
            <div class="container">
                <div class="nav-header">
                    <div class="row align-items-center">
                        <!-----========== Start Header =========--->
                        <div class="col-lg-12 col-md-12 col-sm-12 position-relative">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                                    <div class="text-left">
                                        <a href="<?php echo base_url() ?>home" class="sitelogo">
                                            <img src="<?php echo base_url() ?>assets/images/radHealthLogo.png" alt="logo"
                                                class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <!-------------- Start Contact Details ---------->
                                <!-- <div class="col-lg-8 d-lg-block d-md-none d-sm-none d-none">
                                    <div class="text-lg-right text-md-right text-center">
                                        <p class="m-0">
                                            <span class="mailto"><a
                                                    href="mailto:info@radgov.com">info@radgov.com</a></span>
                                                    <span
                                                class="ml-4 toptel"><a href="tel:+1 (954) 938 2800">+1 (954) 938
                                                    2800</a></span>
                                        </p>
                                    </div>
                                </div> -->
                                <!-------------- End Contact Details ------------>
                                <a class="job_btn btn btn-danger text-white" href="<?php echo base_url() ?>job-board">Open Jobs</a>
                                <!-------------- Start Menu Overlay--------->
                                <div style="text-align: right;" class="col-lg-2 col-md-6 col-sm-6 col-6">
                                    <span class="text-right m-0 d-flex">
                                        <div class="desktop-header button_container"
                                            onclick="$('.aside').asidebar('open')" id="toggle">
                                            <span class="m-top"></span>
                                            <span class="m-middle"></span>
                                            <span class="m-bottom"></span>
                                            <div class="humberger text-right">MENU</div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <!------------ End Menu Overlay ----------->
            
                        </div>
                        <!-----========== End Header =========--->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="aside">
        <div class="aside-header">
            <span class="menuclose" data-dismiss="aside" aria-hidden="true"
                onclick="$('.aside').asidebar('close')">&times;</span>
        </div>
        <?php
            $home = "";
            $about = "";
            $contract_vehicles = "";
            $contact_us = "";
            $current_clients = "";
            $current_engagement = "";
            $past_performance = "";
            $teams = "";
            $dams = "";
            $atms = "";
            $epams = "";
            $data_management = "";
            $solution = "";
     
            switch ($page) {
                case "home":
                    $home = "active";
                    break;
                case "about_us":
                    $about = "active";
                    break;
                case "contract_vehicles":
                    $contract_vehicles = "active";
                    break;
                case "contact_us":
                    $contact_us = "active";
                    break;
                case "current_clients":
                    $current_clients = "active";
                    break;
                case "current_engagement":
                    $current_engagement = "active";
                    break;
                case "past_performance":
                    $past_performance = "active";
                    break;
                case "teams":
                    $teams = "active";
                    break;
                case "dams":
                    $dams = "active";
                    break;
                case "atms":
                    $atms = "active";
                    break;
                case "epams":
                    $epams = "active";
                    break;
                case "data_management":
                    $data_management = "active";
                    break;
                case "application_services":
                    $application_services = "active";
                    break;
                // case "solution":
                //     $solution = "active";
                //     break;

                default:
                    break;
            }
            ?>
        <div class="aside-contents">
            <div class="menu-ulcenter">
                <div id="jquery-accordion-menu" class="jquery-accordion-menu">
                    <ul>
                        <li class="<?php echo $home; ?>"><a href="<?php echo base_url() ?>home">Home </a></li>
                        <li class="<?php echo $about; ?>"><a href="<?php echo base_url() ?>aboutus">About Us </a>
                        </li>

                        <!-- Services  -->
                        <?php
                            $all_services = $this->user_model->get_services_sub_services();
                            if (count($all_services) > 0) {
                                ?>
                        <li><a href="<?php  echo base_url() . "service-detail/rad-health" ?>">RADHealth<sup>+</sup></a</li>
                        <?php } ?>


          
                        <?php
                            $modules = $this->user_model->get_modules_sub_modules();
                            if (count($modules) > 0) {
                                ?>
                        <li><a href="<?php  echo base_url() . "client/clients" ?>"> Clients </a>
                       
                        </li>
                        <?php } ?>
                  

                        <li class="<?php echo $contact_us; ?>"><a href="<?php echo base_url() ?>contactus"></i>Contact
                                Us </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="aside-backdrop"></div>