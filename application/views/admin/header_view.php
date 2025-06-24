<!DOCTYPE html>
<html lang="en">
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title ?></title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <!--end::Web font -->
        <!--<link rel="icon" href="<?php echo base_url() ?>assets/images/logo-old.png" sizes="16x16" type="image/png">-->
        <!--begin::Global Theme Styles -->
        <link href="<?php echo base_url() ?>assets/admin/css/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles -->
        <link rel="icon" href="<?php echo base_url() ?>favicon.png" sizes="16x16" type="image/png">
        <link href="<?php echo base_url(); ?>assets/admin/js/file-uploader/css/font-fileuploader.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/admin/js/file-uploader/css/jquery.fileuploader-theme-thumbnails.css" media="all" rel="stylesheet">  
        <link href="<?php echo base_url(); ?>assets/admin/js/file-uploader/css/script.css" media="all" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/admin/css/custom.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/jquery.dataTables.min.css"> 
        <link href="<?php echo base_url() ?>assets/admin/css/custom-admin.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/summernote.css">

        <script>
            var url = "<?php echo base_url() ?>";
        </script>

        <style>
            .help-block-error
            {
                color: #e73d4a;
                display: block;
            }
        </style>
    </head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default scrollbar">
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- BEGIN: Header -->
            <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
                <div class="m-container m-container--fluid m-container--full-height">
                    <div class="m-stack m-stack--ver m-stack--desktop">
                        <!-- BEGIN: Brand -->
                        <div class="m-stack__item m-brand  m-brand--skin-dark ">
                            <div class="m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                    <a href="<?php echo base_url() ?>admintimeline" class="m-brand__logo-wrapper">
                                        <img src="<?php base_url() ?>assets/images/logo.png" alt="" title="Logo" style="max-width:120px"/>
                                    </a>
                                </div>
                                <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                    <!-- BEGIN: Left Aside Minimize Toggle -->
                                    <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                                    <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                    <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                                    <!-- BEGIN: Responsive Header Menu Toggler -->
                                    <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>
                                    <!-- END -->
                                    <!-- BEGIN: Topbar Toggler -->
                                    <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                        <i class="flaticon-more"></i>
                                    </a>
                                    <!-- BEGIN: Topbar Toggler -->
                                </div>
                            </div>
                        </div>
                        <!-- END: Brand -->
                        <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                            <!-- BEGIN: Horizontal Menu -->
                            <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                            <!-- END: Horizontal Menu -->
                            <!-- BEGIN: Topbar -->
                            <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                                <div class="m-stack__item m-topbar__nav-wrapper">
                                    <ul class="m-topbar__nav m-nav m-nav--inline">
                                        <?php if (!$this->session->userdata('radgov_admin_id') == null) { ?>
                                            <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                                                <a href="#" class="m-nav__link m-dropdown__toggle">
                                                    <span class="m-topbar__userpic">
                                                        <img src="<?php echo base_url() ?>assets/admin/images/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
                                                    </span>
                                                    <span class="m-topbar__username m--hide">
                                                        <?php echo $this->session->userdata('radgov_full_name'); ?>
                                                    </span>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__header m--align-center" style="background: url(assets/admin/images/user_profile_bg.jpg); background-size: cover;">
                                                            <div class="m-card-user m-card-user--skin-dark">
                                                                <div class="m-card-user__pic">
                                                                    <img src="<?php echo base_url() ?>assets/admin/images/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
                                                                </div>
                                                                <div class="m-card-user__details">
                                                                    <span class="m-card-user__name m--font-weight-500">
                                                                        <?php echo $this->session->userdata('radgov_full_name'); ?>
                                                                    </span>
                                                                    <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                                                        <?php echo $this->session->userdata('radgov_email'); ?>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav m-nav--skin-light">
                                                                    <li class="m-nav__item">
                                                                        <a href="<?php echo base_url(); ?>adminlogout" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                            Logout
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- END: Topbar -->
                        </div>
                    </div>
                </div>
            </header>
            <!-- END: Header -->
            <!-- begin::Body -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
                <!-- BEGIN: Left Aside -->
                <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
                <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
                    <!-- BEGIN: Aside Menu -->
                    <?php $this->load->view("admin/sidebar_view"); ?>
                    <!-- END: Aside Menu -->
                </div>
