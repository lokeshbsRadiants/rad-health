<!---======= Starting Page title ========--->
<section class="service-page-banner" style="background-image: url('<?php echo base_url() ?>assets/uploads/services/<?php echo $service['banner_image']; ?>')">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-5 col-md-5 col-sm-12 align-self-center">
                <h1 class="page-title"><?php echo $service['service_detail_name']; ?></h1>
            </div>
        </div>
    </div>
</section>
<!---============= Single Service =============--->
<div class="page-content">
    <section class="section single-service-section1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class=" text-center">
                        <img src="<?php echo base_url() ?>assets/images/lazyload-icon.gif" data-src="<?php echo base_url() ?>assets/uploads/services/<?php echo $service['icon_image']; ?>" class="img-fluid lazyload" alt="<?php echo $service['service_detail_name']; ?>">

                        <div class="floating-ball-model-2">
                            <span class="floating-ball-1"></span>
                            <span class="floating-ball-2"></span>
                            <span class="floating-ball-3"></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="work-force-text">
                        <p> <b><?php echo $service['service_detail_name']; ?> </b> – <?php echo $service['description']; ?>  </p>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    <?php
    $exp_key_features = explode("~", $service['key_features']);
    if (count($exp_key_features) > 0) {
        $exp_icons = explode("~", $service['key_icons']);
        ?>
        <section class="section app-dev-bg single-service-section2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="title-text" data-aos="fade-up"> FEATURES </h2>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                        <div class="service-feature-circle">
                            <?php foreach ($exp_key_features as $key => $row_feature) { ?>  
                                <div class="serv-item service-feature-item">
                                    <div class="servicon servicon-shape text-white rounded-circle shadow">
                                        <i class="<?php echo $exp_icons[$key]; ?>"></i>
                                    </div>
                                    <span><?php echo $row_feature; ?></span>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center" data-aos="fade-up">
                        <img src="<?php echo base_url() ?>assets/images/lazyload-icon.gif" data-src="<?php echo base_url() ?>assets/uploads/services/<?php echo $service['features_image']; ?>" class="img-fluid lazyload" alt="feature-image">
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <section class="section single-service-section3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="title-text" data-aos="fade-up">BENEFITS</h2>
                </div>
            </div>
            <div class="row align-items-top">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <img src="<?php echo base_url() ?>assets/images/lazyload-icon.gif" data-src="<?php echo base_url() ?>assets/uploads/services/<?php echo $service['benefits_image']; ?>" class="img-fluid lazyload" alt="rpo-benefits">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <?php echo $service['benefits']; ?>
                </div>

            </div>
        </div>
    </section>
    <section class="section at-radgov">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="title-text" data-aos="fade-up">WHY RADGOV?</h2>
                    <p class="mb-0" data-aos="fade-up">
                        <?php echo $service['why_radgov']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>