<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            RADgov | Admin Login Page
        </title>
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
                active: function () {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <link href="<?php echo base_url() ?>assets/admin/css/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.ico" sizes="16x16" type="image/png">
        <script>
            var url = "<?php echo base_url() ?>";
        </script>
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
                <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
                    <div class="m-stack m-stack--hor m-stack--desktop">
                        <div class="m-stack__item m-stack__item--fluid">
                            <div class="m-login__wrapper">
                                <div class="m-login__logo">
                                    <a href="<?php echo base_url(); ?>">
                                        <img src="<?php base_url() ?>assets/images/logo.png" alt="" title="" /> 
                                    </a>
                                </div>
                                <div class="m-login__signin">
                                    <div class="m-login__head">
                                        <h3 class="m-login__title">
                                            Sign In To Admin
                                        </h3>
                                    </div>
                                    <form class="m-login__form m-form" action="">
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
                                        </div>
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="password" placeholder="Password" name="password">
                                        </div>
                                        <div class="row m-login__form-sub">

                                            <div class="col m--align-right">
                                                <a href="javascript:;" id="m_login_forget_password" class="m-link">
                                                    Forgot Password ?
                                                </a>
                                            </div>
                                        </div>
                                        <div class="m-login__form-action">
                                            <button id="m_login_signin_submit" class="btn btn-brand   m-btn--pill m-btn--air">
                                                Sign In
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="m-login__forget-password">
                                    <div class="m-login__head">
                                        <h3 class="m-login__title">
                                            Forgotten Password ?
                                        </h3>
                                        <div class="m-login__desc">
                                            Enter your email to reset your password:
                                        </div>
                                    </div>
                                    <form class="m-login__form m-form" action="">
                                        <div class="form-group m-form__group">
                                            <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                                        </div>
                                        <div class="m-login__form-action">
                                            <button id="m_login_forget_password_submit" class="btn btn-brand   m-btn--pill m-btn--air">
                                                Request
                                            </button>
                                            <button id="m_login_forget_password_cancel" class="btn btn-outline-brand m-btn m-btn--pill m-btn--custom">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url(<?php echo base_url() ?>assets/admin/images/bg-6.jpg)">
                    <div class="m-grid__item m-grid__item--middle">
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        <!--begin::Base Scripts -->
        <script src="<?php echo base_url() ?>assets/admin/js/vendors.bundle.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/js/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Base Scripts --> 
        <script src="<?php echo base_url() ?>assets/admin/js/login.js" type="text/javascript"></script>
        <!--end::Page Snippets -->
    </body>
    <!-- end::Body -->
</html>