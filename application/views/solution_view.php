<style>
    @media(min-width: 1200px){
        .benefits ol {
            font-size: 0;
            width: 100%;
            padding: 200px 20px;
            transition: all 1s;
            cursor: pointer;
            margin-bottom: 0;
        }
        .benefits-border{
            border-top:3px solid #666666;
            margin: 20px 0;
            width:100%;
        }
        .benefits-border:before {
            content: "";
            border: 2px solid #666666;
            position: absolute;
            height: 220px;
        }
        .benefits-border:after {
            content: "";
            border: 2px solid #666666;
            position: absolute;
            height: 225px;
            margin-top: -225px;
            right: 0;
        }
        .benefits-full-border{
            border-top: 3px solid #666666;
            width: 100%;
            margin-top: 200px;
            position: absolute;
        }
        .benefits-half-border{
            border-top: 3px solid #666666;
            width: 60%;
            margin-top: 200px;
            position: absolute;
        }
        .benefits .nogutter.col-12{
            padding: 0;
        }
        .benefits ol li div {
            width: 240px;
            min-height: 150px;
        }
        .benefits ol li {
            width: 140px;
            transition: 0.6s all;
        }
        .benefits-slider li div p{
            top: 50%;
            position: relative;
            transform: translateY(-50%);
            margin-bottom: 0;
        }
    }
</style> 
<!---======= Starting Page title ========--->
<?php //if (isset($solution['banner_image'])) { ?>
<section class="section solution-page-banner" style="background-image:url('<?php echo base_url() ?>assets/uploads/solution/<?php echo $solution['banner_image']; ?>')">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-5 col-md-5 col-sm-12 align-self-md-center align-self-start">
                <h1 class="page-title"><?php echo $solution['name']; ?></h1>
                <h5 class="text-capitalize text-md-left text-center"><?php echo $solution['title']; ?></h5>
            </div>
        </div>
    </div>
</section>
<?php //} ?>
<div class="page-content">
    <!---=======  Teams Area =========---->
    <section class="solution-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <img src="<?php echo base_url() ?>assets/images/lazyload-icon.gif" data-src="<?php echo base_url() ?>assets/uploads/solution/<?php echo $solution['description_image']; ?>" class="img-fluid lazyload" alt="<?php echo $solution['name']; ?>">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p> <b><?php echo $solution['name']; ?> </b>– <?php echo $solution['description']; ?></p>
                </div>
            </div>
        </div>
    </section>
    <!---============= Features Area ============--->
    <section class="solution-features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="left-container rg-block-shape-s1 text-white">
                        <div class="feacontent">
                            <div class="rg-block-shade"></div>
                            <h2 class="title-text" data-aos="fade-up">FEATURES</h2>
                            <?php
                            $feature_length = substr_count($solution['feature'], "<li>");
                            if ($feature_length <= 6) {
                                ?>
                                <div class="fea1">
                                    <ul class="bulletlist" data-aos="fade-up">
                                        <?php echo $solution['feature']; ?>
                                    </ul>
                                </div>
                                <?php
                            } else {
                                $a = explode("</li>", $solution['feature']);
                                ?>
                                <div class="slider-vertical">
                                    <div class="fea1">
                                        <ul class="bulletlist" data-aos="fade-up">
                                            <?php
                                            $test = array_slice($a, 0, 5);
                                            echo implode("</li>", $test);
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="fea1">
                                        <ul class="bulletlist">
                                            <?php
                                            $test1 = array_slice($a, 5, 10);
                                            echo implode("</li>", $test1);
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="right-container rg-block-img-s1 text-center">
                        <img src="<?php echo base_url() ?>assets/images/lazyload-icon.gif" data-src="<?php echo base_url() ?>assets/uploads/solution/<?php echo $solution['feature_image']; ?>" class="img-fluid lazyload" data-aos="fade-up" alt="TEAMS Features">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---============= Benefits Area ============--->
    <section class="solution-benefit">
        <div class="container">
            <div class="benefits">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2 class="title-text" data-aos="fade-up">BENEFITS</h2>                    
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12"> </div>
                </div>
                <div class="nogutter col-12">
                    <div class="benefits-full-border"></div>
                </div>
                <?php echo $solution['benefits']; ?>
            </div>
        </div>
    </section>

    <section class="section at-radgov">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="title-text" data-aos="fade-up">WHY RADgov?</h2>    
                    <p class="mb-0" data-aos="fade-up"><?php echo $solution['why_radgov']; ?></p>                
                </div>
            </div>
        </div>
    </section>
</div>        