<?php
$certification_images = $certification_image = "";
$certification_id = "";
$text = "";
$galleryQ = $this->adminmodel->get_certifications();
foreach ($galleryQ as $row_gallery) {
    $certification_id = $row_gallery['certification_id'];
    $text = $row_gallery['text'];
    $certification_image = $row_gallery['certification_images'];
    $certification_images = explode(",", $certification_image);
}
$preload = "";
if ($certification_images != "") {
    $preload = array();
    foreach ($certification_images as $image) {
        if (file_exists(realpath("./assets/uploads/certifications/" . $image))) {
            $path = "assets/uploads/certifications/" . $image;
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
}
?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">Certifications </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="<?php echo base_url(); ?>admincertifications" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content" id="certifications">
        <div class="row">
            <div class="col-lg-12">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text"> Add / View Certifications  </h3>
                            </div>
                        </div>
                        <!--                        <div class="m-portlet__head-tools">
                                                    <a class="btn btn-brand m-btn m-btn--custom m-btn--icon m-btn--air add-edit-client">
                                                        <span>
                                                            <i class="la la-plus"></i>
                                                            <span> Add Client  Details </span>
                                                        </span>
                                                    </a>
                                                </div>-->
                    </div>
                    <form id="certification_form" role="form" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="post" enctype="multipart/form-data">
                        <div class="m-portlet__body">
                            <div class="row">
                                <div class="col-lg-12 form-group m-form__group">
                                    <label>
                                        Certification Text
                                    </label>
                                    <textarea class="form-control" rows="5" name="text"><?php echo $text; ?></textarea>                          
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 form-group m-form__group accessory-image">
                                    <label>
                                        Images
                                    </label>
                                    <div class="form-group form-md-floating-label ">
                                        <input type="hidden" name="certification_id"  value="<?php echo $certification_id; ?>">  
                                        <input type="file" name="files" data-id="<?php echo base_url(); ?>admincertifications/delete_image" data-fileuploader-files='<?php echo json_encode($preload) ?>' data-url="<?php echo base_url(); ?>admincertifications/save_image" data-name="certifications">
                                    </div>
                                    <hr>
                                    <input type="hidden" name="certification_images" class="file-saver" value="<?php echo $certification_image; ?>">                           
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