<?php
$service_detail_id = "";
$service_detail_name = $alias_name = "";
$sub_service_id = "";
$description = "";
$benefits = "";
$why_radgov = "";
$input1Image = "";
$status = "1";
$description_image = "";
$icon_image = "";
$banner_image = $benefits_image = "";
$features_image = "";
$key_features = $key_icons = [];
if ($id != "") {
    $category = $this->adminmodel->get_service_detail($id);
    $service_detail_id = $category['service_detail_id'];
    $service_detail_name = $category['service_detail_name'];
    $alias_name = $category['alias_name'];
    $sub_service_id = $category['sub_service_id'];
    $description = $category['description'];
    $key_features = explode("~", $category['key_features']);
    $key_icons = explode("~", $category['key_icons']);
    $benefits = $category['benefits'];
    $why_radgov = $category['why_radgov'];
    $status = $category['status'];
    $icon_image = $category['icon_image'];
    $banner_image = $category['banner_image'];
    $benefits_image = $category['benefits_image'];
    $features_image = $category['features_image'];
}
$icon_preload = $banner_preload = $benefits_preload = $features_preload = "";
if ($icon_image != "") {
    $icon_preload = array();
    if (file_exists(realpath("./assets/uploads/services/" . $icon_image))) {
        $path = "assets/uploads/services/" . $icon_image;
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $path);
        $icon_preload[] = array(
            "name" => basename($path),
            "type" => $mime,
            "size" => filesize($path),
            "file" => $path,
            "local" => realpath($path)
        );
    }
}
if ($banner_image != "") {
    $banner_preload = array();
    if (file_exists(realpath("./assets/uploads/services/" . $banner_image))) {
        $path = "assets/uploads/services/" . $banner_image;
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $path);
        $banner_preload[] = array(
            "name" => basename($path),
            "type" => $mime,
            "size" => filesize($path),
            "file" => $path,
            "local" => realpath($path)
        );
    }
}
if ($benefits_image != "") {
    $benefits_preload = array();
    if (file_exists(realpath("./assets/uploads/services/" . $benefits_image))) {
        $path = "assets/uploads/services/" . $benefits_image;
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $path);
        $benefits_preload[] = array(
            "name" => basename($path),
            "type" => $mime,
            "size" => filesize($path),
            "file" => $path,
            "local" => realpath($path)
        );
    }
}
if ($features_image != "") {
    $features_preload = array();
    if (file_exists(realpath("./assets/uploads/services/" . $features_image))) {
        $path = "assets/uploads/services/" . $features_image;
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $path);
        $features_preload[] = array(
            "name" => basename($path),
            "type" => $mime,
            "size" => filesize($path),
            "file" => $path,
            "local" => realpath($path)
        );
    }
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon m--hide">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                            Add/Edit Service Details
                        </h3>
                    </div>
                    <div class="m-portlet__head-tools">
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form id="service_detail_form" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"
            method="post" enctype="multipart/form-data">
            <div class="m-portlet__body">
                <input type="hidden" name="service_detail_id"  value="<?php echo $service_detail_id; ?>">
                <div class="row">
                    <div class="col-lg-6 form-group m-form__group ">
                        <label for="single" class="control-label">Select Service</label>
                        <select class="form-control select2"  name="sub_service_id">
                            <option value="">Please Select</option>
                            <?php
                            $modules = $this->adminmodel->get_active_sub_services();
                            foreach ($modules as $row_module) {
                                ?>
                                <option value="<?php echo $row_module['sub_service_id'] ?>" <?php
                                if ($row_module['sub_service_id'] === $sub_service_id) {
                                    echo 'selected';
                                } else {
                                    echo '';
                                }
                                ?> ><?php echo $row_module['sub_service_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-lg-6 form-group m-form__group ">
                        <label>Enter Service Detail Name:</label>
                        <input type="text" name="service_detail_name" class="form-control "  value="<?php echo $service_detail_name; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 form-group m-form__group ">
                        <label>Enter Service Alias Name:</label>
                        <input type="text" name="alias_name" class="form-control "  value="<?php echo $alias_name; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 form-group m-form__group feature-image">
                        <label>
                            Icon Image
                        </label>
                        <div class="form-group form-md-floating-label ">
                            <input type="file" name="files1" data-id="<?php echo base_url(); ?>adminservicedetail/delete_image" data-fileuploader-files='<?php echo json_encode($icon_preload) ?>' data-url="<?php echo base_url(); ?>adminservicedetail/save_image" data-name="services" data-attr-name="icon-file-saver">
                            <div id="errorBlock" class="help-block"></div>
                        </div>
                        <hr>
                        <input type="hidden" name="icon_image" class="icon-file-saver" value="<?php echo $icon_image; ?>">
                    </div>
                    <div class="col-lg-6 form-group m-form__group feature-image">
                        <label>
                            Banner Image
                        </label>
                        <div class="form-group form-md-floating-label ">
                            <input type="file" name="files2" data-id="<?php echo base_url(); ?>adminservicedetail/delete_image" data-attr-name="banner-file-saver" data-fileuploader-files='<?php echo json_encode($banner_preload) ?>' data-url="<?php echo base_url(); ?>adminservicedetail/save_image" data-name="services">
                            <div id="errorBlock" class="help-block"></div>
                        </div>
                        <hr>
                        <input type="hidden" name="banner_image" class="banner-file-saver" value="<?php echo $banner_image; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 form-group m-form__group ">
                        <label>Benefits:</label>
                        <textarea name="benefits" class="form-control summernote" ><?php echo $benefits; ?></textarea>
                    </div>
                    <div class="col-lg-6 form-group m-form__group feature-image">
                        <label>
                            Benefits Image
                        </label>
                        <div class="form-group form-md-floating-label ">
                            <input type="file" name="files3" data-id="<?php echo base_url(); ?>adminservicedetail/delete_image" data-attr-name="benefits-file-saver" data-fileuploader-files='<?php echo json_encode($benefits_preload) ?>' data-url="<?php echo base_url(); ?>adminservicedetail/save_image" data-name="services">
                            <div id="errorBlock" class="help-block"></div>
                        </div>
                        <hr>
                        <input type="hidden" name="benefits_image" class="benefits-file-saver" value="<?php echo $benefits_image; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 form-group m-form__group ">
                        <label>Description:</label>
                        <textarea name="description" class="form-control summernote" rows="5"><?php echo $description; ?></textarea>
                    </div>
                    <div class="col-lg-6 form-group m-form__group feature-image">
                        <label>
                            Why RADgov?
                        </label>
                        <textarea name="why_radgov" class="form-control" rows="5"><?php echo $why_radgov; ?></textarea>
                    </div>
                </div>
                <div class="row" id="dynamic-option-list">
                    <div class="col-lg-12  form-group m-form__group">
                        <label>
                            Features:
                        </label>
                        <?php if (count($key_features) > 0) { ?>
                            <div id="m_repeater_3">
                                <div data-repeater-list="">
                                    <input type="hidden" name="total_features" value="<?php echo (count($key_features) - 1); ?>">
                                    <?php foreach ($key_features as $key => $value) { ?>
                                        <div data-repeater-item class="ingredient">
                                            <div class="row m--margin-bottom-10">
                                                <div class="col-lg-6">
                                                    <input class="form-control key_features" name="key_features[<?php echo $key; ?>]" value="<?php echo $value; ?>" required placeholder="Key Features">
                                                </div>
                                                <div class="col-lg-4">
                                                    <input class="form-control key_icons" name="key_icons[<?php echo $key; ?>]" required value="<?php echo $key_icons[$key]; ?>" placeholder="Key Feature Icon">
                                                </div>
                                                <div class="col-lg-1">
                                                    <a href="#" data-repeater-delete="" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only data-repeater-feature-delete"
                                                    data-id="">
                                                    <i class="la la-remove"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clear">
                                            <hr>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>                                    
                            <div class="">
                                <div data-repeater-create="" class="btn btn btn-sm btn-primary btn-outline-primary m-btn m-btn--icon mt-repeater-feature-add">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>
                                            Add
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div id="m_repeater_3">
                            <div data-repeater-list="">
                                <input type="hidden" name="total_features" value="0">
                                <div data-repeater-item class="ingredient">
                                    <div class="row m--margin-bottom-10">
                                        <div class="col-lg-6">
                                            <input class="form-control key_features" name="key_features[0]" required placeholder="Key Features">
                                        </div>
                                        <div class="col-lg-4">
                                            <input class="form-control key_icons" name="key_icons[0]" required placeholder="Key Feature Icon">
                                        </div>
                                        <div class="col-lg-1">
                                            <a href="#" data-repeater-delete="" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only data-repeater-feature-delete"
                                            data-id="">
                                            <i class="la la-remove"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="clear">
                                    <hr>
                                </div>
                            </div>
                        </div>                                    
                        <div class="">
                            <div data-repeater-create="" class="btn btn btn-sm btn-primary btn-outline-primary m-btn m-btn--icon mt-repeater-feature-add">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>
                                        Add
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 form-group m-form__group feature-image">
                <label>
                    Feature Image
                </label>
                <div class="form-group form-md-floating-label ">
                    <input type="file" name="files4" data-id="<?php echo base_url(); ?>adminservicedetail/delete_image" data-attr-name="features-file-saver" data-fileuploader-files='<?php echo json_encode($features_preload) ?>' data-url="<?php echo base_url(); ?>adminservicedetail/save_image" data-name="services">
                    <div id="errorBlock" class="help-block"></div>
                </div>
                <hr>
                <input type="hidden" name="features_image" class="features-file-saver" value="<?php echo $features_image; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 form-group m-form__group ">
                <label for="single" class="control-label">Status</label>
                <select class="form-control select2"  name="status"
                data-s="<?php echo $status ?>">
                <option value="">Please Select</option>
                <option value="1" <?php
                if ($status === '1') {
                    echo 'selected';
                } else {
                    echo '';
                }
                ?> >Active</option>
                <option value="0" <?php
                if ($status === '0') {
                    echo 'selected';
                } else {
                    echo '';
                }
                ?>>In Active</option>
            </select>
        </div>
    </div>
</div>
<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
    <div class="m-form__actions m-form__actions--solid">
        <div class="row">
            <div class="col-lg-6 form-group m-form__group ">
                <button type="submit" class="btn btn-brand submit">Save</button>
            </div>
            <div class="col-lg-6 form-group m-form__group  m--align-right">
                <button type="reset" class="btn btn-secondary cancel">Cancel</button>
            </div>
        </div>
    </div>
</div>
</form>
<!--end::Form-->
</div>
</div>

</div>
<script src="<?php echo base_url(); ?>assets/admin/js/file-uploader/js/file-uploader.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/file-uploader/js/file-custom.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/summernote.js"></script>
<script>
    $('.summernote').summernote({
        height: "250px",
        focus: false
    });
</script>