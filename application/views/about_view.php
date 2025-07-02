<!---======= Starting Page title ========--->
<section class="section inner-page-banner about-page-banner">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-12 col-md-12 col-sm-12 align-self-md-center align-self-start">
                <h1 class="inner-page-title">About Us</h1>
            </div>
        </div>
    </div>
</section>
<?php if (isset($about_us['company_profile1']) && isset($about_us['company_image1'])) { ?>
<div class="page-content">
    <section class="section about-us-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <h2 class="title-text about-page-heading">COMPANY PROFILE</h2>
                    <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                        data-src="<?php base_url() ?>assets/uploads/about_us/<?php echo $about_us['company_image1']; ?>"
                        alt="about-us"
                        class="img-fluid lazyload about-page-img d-lg-none d-md-none d-sm-block d-block my-3">
                    <div data-aos="fade-up"><?php echo $about_us['company_profile1']; ?></div>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                        data-src="<?php base_url() ?>assets/uploads/about_us/<?php echo $about_us['company_image1']; ?>"
                        alt="about-us" class="img-fluid lazyload about-page-img d-lg-block d-md-block d-sm-none d-none">
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <?php if (isset($about_us['company_profile2']) && isset($about_us['company_image2'])) { ?>
    <section class="section about-us-area-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 text-center">
                    <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                        data-src="<?php base_url() ?>assets/uploads/about_us/<?php echo $about_us['company_image2']; ?>"
                        alt="about-us" class="img-fluid lazyload about-page-img-left" data-aos="fade-up">
                </div>
                <div class="col-lg-6 col-md-6 text-left" data-aos="fade-up">
                    <p data-aos="fade-up"><?php echo $about_us['company_profile2']; ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!---============= End About Us Area =============--->



    
    <?php
$timelines = $this->user_model->get_timelines();
if (count($timelines) > 0) {
    ?>
    <section class="section timeline-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h2 class="title-text timeline-heading" data-aos="fade-up">TIMELINE</h2>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="text-right">
                        <button class="timeprev slick-arrow">
                            < </button>
                                <button class="timenext slick-arrow"> > </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="timeline-border"></div>
                    <div class="slider slick-slider timeline-slider">
                        <?php foreach ($timelines as $row_timeline) { ?>
                        <div class="col-lg-4 col-md-4">
                            <div class="slide-deatils">
                                <div class="yearinfo">
                                    <h1><?php echo $row_timeline['date']; ?></h1>
                                </div>
                                <hr class="timehr">
                                <div class="timedesc">
                                    <ul class="round"><?php echo $row_timeline['description']; ?> </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <!---============= Start Vision, Mission, Values Area ============--->
    <section class="section values-area">
        <div class="container">
            <div class="value-layout">
                <?php if (isset($about_us['vision']) && isset($about_us['vision_image'])) { ?>
                <div class="row align-items-center vision-block">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2 class="title-text vision-heading" data-aos="fade-up">VISION</h2>
                        <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                            data-src="<?php base_url() ?>assets/uploads/about_us/<?php echo $about_us['vision_image']; ?>"
                            class="img-fluid lazyload about-vision-img d-lg-none d-md-none d-sm-block d-block"
                            alt="vision-img" data-aos="fade-up">
                        <ul class="round">
                            <?php echo $about_us['vision']; ?>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                            data-src="<?php base_url() ?>assets/uploads/about_us/<?php echo $about_us['vision_image']; ?>"
                            class="img-fluid lazyload d-lg-block d-md-block d-sm-none d-none" alt="vision-img"
                            data-aos="fade-up">
                    </div>
                </div>
                <?php } if (isset($about_us['mission']) && isset($about_us['mission_image'])) { ?>
                <div class="row align-items-center mission-block">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                            data-src="<?php base_url() ?>assets/uploads/about_us/<?php echo $about_us['mission_image']; ?>"
                            class="img-fluid lazyload mb-3 d-lg-block d-md-block d-sm-none d-none" alt="mission-img"
                            data-aos="fade-up">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">

                        <h2 class="title-text values-heading" data-aos="fade-up">MISSION</h2>
                        <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                            data-src="<?php base_url() ?>assets/uploads/about_us/<?php echo $about_us['mission_image']; ?>"
                            class="img-fluid lazyload mb-3 d-lg-none d-md-none d-sm-block d-block" alt="mission-img"
                            data-aos="fade-up">

                        <ul class="round" data-aos="fade-up">
                            <?php echo $about_us['mission']; ?>
                        </ul>
                    </div>
                </div>
                <?php } if (isset($about_us['value']) && isset($about_us['value_image'])) { ?>
                <div class="row align-items-center values-block">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2 class="title-text vision-heading" data-aos="fade-up">Credentialed. Certified. Committed. 
</h2>
                        <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                            data-src="<?php base_url() ?>assets/uploads/about_us/<?php echo $about_us['value_image']; ?>"
                            class="img-fluid lazyload values-img d-lg-none d-md-none d-sm-block d-block"
                            alt="values-img" data-aos="fade-up">
                            <h5 class="px-2">Every healthcare professional we deploy is:  </h5>
                        <ul class="round" data-aos="fade-up">
                            <?php echo $about_us['value']; ?>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                            data-src="<?php base_url() ?>assets/uploads/about_us/<?php echo $about_us['value_image']; ?>"
                            class="img-fluid lazyload values-img d-lg-block d-md-block d-sm-none d-none"
                            alt="values-img" data-aos="fade-up">
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!---============= Start Team Area ============--->
    <section class="section team-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="title-text vision-heading" data-aos="fade-up">MANAGEMENT TEAM</h2>
                    <p class="team-para">The executive management at RADgov is a winning combination of experience and
                        expertise, and is committed to lead RADgov to new heights as a leading IT solution provider in
                        the areas of E-commerce, Software development and IT consulting & training.</p>
                </div>
            </div>
        </div>
        <div class="basis-member staff">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card member-box shadow-lg mb-lg-0 mb-md-0 mb-sm-0 mb-5" data-aos="fade-up">
                            <span class="shape"></span>
                            <div class="card-body">
                                <h4 class="member-title">Ms. Jyothi Myneni</h4>
                                <span class="member-degignation">President and CEO</span>
                                <hr>
                                <p>Ms. Jyothi, has been serving as the President and CEO of RADgov since 2005. Jyothi
                                    has over 12 years of experience working as a Systems Manager, Systems Analyst with
                                    various organizations. She holds a Master's in Computer Science from New Jersey and
                                    Bachelor's in Engineering from BITS Pilani, India.</p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card member-box shadow-lg" data-aos="fade-up">
                            <span class="shape"></span>
                            <div class="card-body">
                                <h4 class="member-title">Ms. Deepa Koduru</h4>
                                <span class="member-degignation">Vice-President</span>
                                <hr>
                                <p>Ms. Deepa, has been the Vice-President of RADgov since 2005. Deepa has previously
                                    worked as a Project Manager and Business Analyst with various organizations and has
                                    over 11 years of experience. She received a Master’s in Computer Science from Long
                                    Island University, New York and Bachelor degree in Arts from Osmania University,
                                    India.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---============= End Team Area ============--->

    <!---============= End Team Area ============--->
    <section class="section business-model-area">
        <div class="container">
            <h2 class="title-text vision-heading" data-aos="fade-up">Our MSP Expertise 
</h2>
            <p class="business-para mb-5" data-aos="fade-up">We proudly deliver recruiting services to leading hospitals and health systems nationwide through strategic partnerships with major Managed Service Provider (MSP) programs. Our deep experience in high-volume, multi-layered MSP environments allows us to meet SLAs, ensure credentialing compliance, and deliver exceptional talent at scale. -</p>
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <h2 class="title-text vision-heading" data-aos="fade-up">24/7 Support. National Reach. Local Expertise. </h2>

                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="business-model-list">
                        <ul class="list-group gap-3 p-3" data-aos="fade-up">
                            
                            <li class="list-group-item d-flex justify-content-start gap-3 align-items-center mb-3">
                                <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                                    data-src="<?php base_url() ?>assets/images/icons/about-us/business-icon.png"
                                    class="img-fluid lazyload business-icon-left" alt="business-icon"> 
                                    On-call recruiting teams across U.S. time zone
                            </li>
                          
                            <li class="list-group-item d-flex justify-content-start gap-3 align-items-center mb-3">
                                <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                                    data-src="<?php base_url() ?>assets/images/icons/about-us/business-icon.png"
                                    class="img-fluid lazyload business-icon-left" alt="business-icon">
                               Regional talent pipelines with market insight 

                            </li>
                           
                            <li class="list-group-item d-flex justify-content-start gap-3 align-items-center mb-3">
                                <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                                    data-src="<?php base_url() ?>assets/images/icons/about-us/business-icon.png"
                                    class="img-fluid lazyload business-icon-left" alt="business-icon">
                              National credentialing center to speed placements 

                            </li>
                           
                            <li class="list-group-item d-flex justify-content-start gap-3 align-items-center mb-3">
                                <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                                    data-src="<?php base_url() ?>assets/images/icons/about-us/business-icon.png"
                                    class="img-fluid lazyload business-icon-left" alt="business-icon">
                               Digital onboarding workflows for simplicity 

                            </li>
                            <li class="list-group-item d-flex justify-content-start gap-3 align-items-center mb-3">
                                <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                                    data-src="<?php base_url() ?>assets/images/icons/about-us/business-icon.png"
                                    class="img-fluid lazyload business-icon-left" alt="business-icon">
                            Clinical support post-placement 

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>