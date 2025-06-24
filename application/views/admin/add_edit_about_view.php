<?php
$company_image1 = $company_image2 = $vision_image = $mission_image = $value_image = "";
$about_id = "";
$company_profile1 = "";
$company_profile2 = $vision = $mission = $value = "";
$galleryQ = $this->adminmodel->get_about_us();
foreach ($galleryQ as $row_gallery) {
    $about_id = $row_gallery['about_id'];
    $company_profile1 = $row_gallery['company_profile1'];
    $company_profile2 = $row_gallery['company_profile2'];
    $company_image1 = $row_gallery['company_image1'];
    $company_image2 = $row_gallery['company_image2'];
    $vision = $row_gallery['vision'];
    $vision_image = $row_gallery['vision_image'];
    $mission = $row_gallery['mission'];
    $mission_image = $row_gallery['mission_image'];
    $value = $row_gallery['value'];
    $value_image = $row_gallery['value_image'];
}
$preload = $vision_preload = $mission_preload = $value_preload = "";
$company_preload2 = "";
if ($company_image1 != "") {
    $preload = array();
    if (file_exists(realpath("./assets/uploads/about_us/" . $company_image1))) {
        $path = "assets/uploads/about_us/" . $company_image1;
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $path);
        $inner = array(
            "url" => $path,
            "thumbnail" => $path,
            "readerForce" => true
        );
        $preload[] = array(
            "name" => basename($path),
            "type" => $mime,
            "size" => filesize($path),
            "file" => $path,
            "local" => realpath($path),
            "data" => $inner
        );
    }
}
if ($company_image2 != "") {
    $company_preload2 = array();
    if (file_exists(realpath("./assets/uploads/about_us/" . $company_image2))) {
        $path = "assets/uploads/about_us/" . $company_image2;
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $path);
        $inner = array(
            "url" => $path,
            "thumbnail" => $path,
            "readerForce" => true
        );
        $company_preload2[] = array(
            "name" => basename($path),
            "type" => $mime,
            "size" => filesize($path),
            "file" => $path,
            "local" => realpath($path),
            "data" => $inner
        );
    }
}
if ($vision_image != "") {
    $vision_preload = array();
    if (file_exists(realpath("./assets/uploads/about_us/" . $vision_image))) {
        $path = "assets/uploads/about_us/" . $vision_image;
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $path);
        $inner = array(
            "url" => $path,
            "thumbnail" => $path,
            "readerForce" => true
        );
        $vision_preload[] = array(
            "name" => basename($path),
            "type" => $mime,
            "size" => filesize($path),
            "file" => $path,
            "local" => realpath($path),
            "data" => $inner
        );
    }
}
if ($mission_image != "") {
    $mission_preload = array();
    if (file_exists(realpath("./assets/uploads/about_us/" . $mission_image))) {
        $path = "assets/uploads/about_us/" . $mission_image;
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $path);
        $inner = array(
            "url" => $path,
            "thumbnail" => $path,
            "readerForce" => true
        );
        $mission_preload[] = array(
            "name" => basename($path),
            "type" => $mime,
            "size" => filesize($path),
            "file" => $path,
            "local" => realpath($path),
            "data" => $inner
        );
    }
}
if ($value_image != "") {
    $value_preload = array();
    if (file_exists(realpath("./assets/uploads/about_us/" . $value_image))) {
        $path = "assets/uploads/about_us/" . $value_image;
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $path);
        $inner = array(
            "url" => $path,
            "thumbnail" => $path,
            "readerForce" => true
        );
        $value_preload[] = array(
            "name" => basename($path),
            "type" => $mime,
            "size" => filesize($path),
            "file" => $path,
            "local" => realpath($path),
            "data" => $inner
        );
    }
}
?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">About Page Content </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="<?php echo base_url(); ?>adminaboutus.html" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content" id="about_us">
        <div class="row">
            <div class="col-lg-12">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <!--                        <div class="m-portlet__head-caption">
                                                    <div class="m-portlet__head-title">
                                                        <h3 class="m-portlet__head-company_profile1"> Add / View About Page Content</h3>
                                                    </div>
                                                </div>-->
                    </div>
                    <form id="about_form" role="form" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="post" enctype="multipart/form-data">
                        <div class="m-portlet__body">
                            <input type="hidden" name="about_id"  value="<?php echo $about_id; ?>">  
                            <div class="row">
                                <div class="col-lg-6 form-group m-form__group">
                                    <label>
                                        Company Profile 1
                                    </label>
                                    <textarea class="form-control summernote" rows="5" name="company_profile1"><?php echo $company_profile1; ?></textarea>                        
                                </div>
                                <div class="col-lg-6 form-group m-form__group feature-image">
                                    <label>
                                        Company Profile Image
                                    </label>
                                    <div class="form-group form-md-floating-label ">
                                        <input type="file" name="files1" data-id="<?php echo base_url(); ?>adminaboutus/delete_image" data-fileuploader-files='<?php echo json_encode($preload) ?>' data-url="<?php echo base_url(); ?>adminaboutus/save_image" data-name="about_us">
                                        <div id="errorBlock" class="help-block"></div>
                                    </div>
                                    <hr>
                                    <input type="hidden" name="company_image1" class="file-saver" value="<?php echo $company_image1; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group m-form__group">
                                    <label>
                                        Company Profile 2
                                    </label>
                                    <textarea class="form-control summernote" rows="5" name="company_profile2"><?php echo $company_profile2; ?></textarea>                        
                                </div>
                                <div class="col-lg-6 form-group m-form__group feature-image">
                                    <label>
                                        Company Profile Image
                                    </label>
                                    <div class="form-group form-md-floating-label ">
                                        <input type="file" name="files2" data-id="<?php echo base_url(); ?>adminaboutus/delete_image" data-attr-name="image-file-saver" data-fileuploader-files='<?php echo json_encode($company_preload2) ?>' data-url="<?php echo base_url(); ?>adminaboutus/save_image" data-name="about_us">
                                        <div id="errorBlock" class="help-block"></div>
                                    </div>
                                    <hr>
                                    <input type="hidden" name="company_image2" class="image-file-saver" value="<?php echo $company_image2; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group m-form__group">
                                    <label>
                                        Vision
                                    </label>
                                    <textarea class="form-control summernote" rows="5" name="vision"><?php echo $vision; ?></textarea>                        
                                </div>
                                <div class="col-lg-6 form-group m-form__group feature-image">
                                    <label>
                                        Vision Image
                                    </label>
                                    <div class="form-group form-md-floating-label ">
                                        <input type="file" name="files3" data-id="<?php echo base_url(); ?>adminaboutus/delete_image" data-attr-name="vision-file-saver" data-fileuploader-files='<?php echo json_encode($vision_preload) ?>' data-url="<?php echo base_url(); ?>adminaboutus/save_image" data-name="about_us">
                                        <div id="errorBlock" class="help-block"></div>
                                    </div>
                                    <hr>
                                    <input type="hidden" name="vision_image" class="vision-file-saver" value="<?php echo $vision_image; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group m-form__group">
                                    <label>
                                        Mission
                                    </label>
                                    <textarea class="form-control summernote" rows="5" name="mission"><?php echo $mission; ?></textarea>                        
                                </div>
                                <div class="col-lg-6 form-group m-form__group feature-image">
                                    <label>
                                        Mission Image
                                    </label>
                                    <div class="form-group form-md-floating-label ">
                                        <input type="file" name="files4" data-id="<?php echo base_url(); ?>adminaboutus/delete_image" data-attr-name="mission-file-saver" data-fileuploader-files='<?php echo json_encode($mission_preload) ?>' data-url="<?php echo base_url(); ?>adminaboutus/save_image" data-name="about_us">
                                        <div id="errorBlock" class="help-block"></div>
                                    </div>
                                    <hr>
                                    <input type="hidden" name="mission_image" class="mission-file-saver" value="<?php echo $mission_image; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group m-form__group">
                                    <label>
                                        Value
                                    </label>
                                    <textarea class="form-control summernote" rows="5" name="value"><?php echo $value; ?></textarea>                        
                                </div>
                                <div class="col-lg-6 form-group m-form__group feature-image">
                                    <label>
                                        Value Image
                                    </label>
                                    <div class="form-group form-md-floating-label ">
                                        <input type="file" name="files5" data-id="<?php echo base_url(); ?>adminaboutus/delete_image" data-attr-name="value-file-saver" data-fileuploader-files='<?php echo json_encode($value_preload) ?>' data-url="<?php echo base_url(); ?>adminaboutus/save_image" data-name="about_us">
                                        <div id="errorBlock" class="help-block"></div>
                                    </div>
                                    <hr>
                                    <input type="hidden" name="value_image" class="value-file-saver" value="<?php echo $value_image; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions--solid">
                                <div class="row form-group m-form__group ">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-brand submit">Submit</button>
                                        <button type="button" class="btn default cancel">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End: life time stats -->
        </div>
    </div>
    <!-- END PAGE BASE CONTENT -->
</div>
<!-- END CONTENT BODY -->