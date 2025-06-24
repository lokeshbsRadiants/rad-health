<!---======= Starting Page title ========--->
<section class="section service-page-banner" style="background-image: url('<?php echo base_url() ?>assets/uploads/services/<?php echo $service['banner_image']; ?>')">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-5 col-md-5 col-sm-12 align-self-md-center align-self-start">
                <h1 class="page-title"><?php echo $service['sub_service_name']; ?></h1>
            </div>
        </div>
    </div>
</section>
<!---============= Services =============--->
<div class="page-content">
    <section class="section service-view-section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <img src="<?php echo base_url() ?>assets/images/lazyload-icon.gif" data-src="<?php echo base_url() ?>assets/uploads/services/<?php echo $service['image']; ?>" class="img-fluid lazyload service-main-image" alt="Application Services">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex it-service-info">
                    <div class="my-auto">
                        <p class="mb-0"><?php echo $service['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php
            $sub_services = $this->user_model->get_sub_services($service['sub_service_id']);
            if (count($sub_services) > 0) {
                $route = ($service['layout'] == '1') ? 'service-detail' : 'detail-service';
                ?>
                <div class="row align-items-top mt-5">
                    <?php foreach ($sub_services as $row_sub_service) { ?>
                        <div class="col-lg-3 col-md-3 col-sm-12 mb-5" data-aos="fade-up">
                            <a href='<?php echo base_url() . $route ?>/<?php echo strtolower(str_replace(" ", "-", $row_sub_service['service_detail_name'])); ?>' class="">
                                <div class="card service-card shadow-sm">
                                    <div class="service-card-img text-center">
                                        <img src="<?php echo base_url() ?>assets/images/lazyload-icon.gif" data-src="<?php echo base_url() ?>assets/uploads/services/<?php echo $row_sub_service['icon_image']; ?>" class="img-fluid lazyload service-card-image card-img-top" alt="app-devlopment">
                                        <div class="service-card-bg"></div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title service-card-title"><?php
                                            //if ($row_sub_service['alias_name'] != "") {
                                            //   echo $row_sub_service['alias_name'];
                                        if ($row_sub_service['service_detail_name'] != "") {
                                            echo $row_sub_service['service_detail_name'];
                                        } else {
                                            echo $row_sub_service['service_detail_name'];
                                        }
                                        ?></h5>
                                        <p class="card-text service-card-content mb-2"><?php
                                        $string=strip_tags($row_sub_service['description']);
                                        if (strlen($row_sub_service['description']) > 70) {
                                            // truncate string
                                        $stringCut = substr($string, 0, 70);
                                        $endPoint = strrpos($stringCut, ' ');
                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= ' . . .';
                                            echo $string;
                                        } else {
                                            echo $row_sub_service['description'];
                                        }
                                        ?> </p>
                                        <?php if (strlen($row_sub_service['description']) > 70) { ?>
                                            <a href='<?php echo base_url() . $route ?>/<?php echo strtolower(str_replace(" ", "-", $row_sub_service['service_detail_name'])); ?>' class="card-link">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>    
    </section>
</div>

