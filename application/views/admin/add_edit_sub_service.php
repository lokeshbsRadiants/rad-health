<?php
$sub_service_id = $service_id = $is_more_service = "";
$sub_service_name = "";
$description = "";
$input1Image = $banner_image = "";
$status = "1";
if ($id != "") {
    $category = $this->adminmodel->get_sub_service($id);
    $sub_service_id = $category['sub_service_id'];
    $service_id = $category['service_id'];
    $is_more_service = $category['is_more_service'];
    $sub_service_name = $category['sub_service_name'];
    $description = $category['description'];
    $status = $category['status'];
    $input1Image = $category['image'];
    $banner_image = $category['banner_image'];
}
$preload = "";
$banner_preload = "";
if ($input1Image != "") {
    $preload = array();
    if (file_exists(realpath("./assets/uploads/services/" . $input1Image))) {
        $path = "assets/uploads/services/" . $input1Image;
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $path);
        $preload[] = array(
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
                            Add/Edit Sub Service
                        </h3>
                    </div>
                    <div class="m-portlet__head-tools">
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form id="sub_service_form" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"
                  method="post" enctype="multipart/form-data">
                <div class="m-portlet__body">
                    <input type="hidden" name="sub_service_id"  value="<?php echo $sub_service_id; ?>">
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group ">
                            <label for="single" class="control-label">service</label>
                            <select class="form-control select2"  name="service_id">
                                <option value="">Please Select</option>
                                <?php
                                $modules = $this->adminmodel->get_active_services();
                                foreach ($modules as $row_module) {
                                    ?>
                                    <option value="<?php echo $row_module['service_id'] ?>" <?php
                                    if ($row_module['service_id'] === $service_id) {
                                        echo 'selected';
                                    } else {
                                        echo '';
                                    }
                                    ?> ><?php echo $row_module['name'] ?></option>
                                        <?php } ?>
                            </select>
                        </div>
                        <div class="col-lg-6 form-group m-form__group ">
                            <label>Enter Sub Service Name:</label>
                            <input type="text" name="sub_service_name" class="form-control "  value="<?php echo $sub_service_name; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group ">
                            <label for="single" class="control-label">This Service Contains More Service?</label>
                            <select class="form-control select2 is_more_service"  name="is_more_service">
                                <option value="">Please Select</option>
                                <option value="Yes" <?php
                                if ($is_more_service === 'Yes') {
                                    echo 'selected';
                                } else {
                                    echo '';
                                }
                                ?> >Yes</option>
                                <option value="No" <?php
                                if ($is_more_service === 'No') {
                                    echo 'selected';
                                } else {
                                    echo '';
                                }
                                ?>>No</option>
                            </select>
                        </div>
                        <div class="col-lg-6 form-group m-form__group ">
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
                    <div class="row more-services">
                        <div class="col-lg-6 form-group m-form__group feature-image">
                            <label>
                                Image
                            </label>
                            <div class="form-group form-md-floating-label ">
                                <input type="file" name="files1" data-id="<?php echo base_url(); ?>adminsubservice/delete_image" data-fileuploader-files='<?php echo json_encode($preload) ?>' data-url="<?php echo base_url(); ?>adminsubservice/save_image" data-name="services">
                                <div id="errorBlock" class="help-block"></div>
                            </div>
                            <hr>
                            <input type="hidden" name="image" class="file-saver" value="<?php echo $input1Image; ?>">
                        </div>
                        <div class="col-lg-6 form-group m-form__group feature-image">
                            <label>
                                Banner Image
                            </label>
                            <div class="form-group form-md-floating-label ">
                                <input type="file" name="files2" data-id="<?php echo base_url(); ?>adminsubservice/delete_image" data-attr-name="banner-file-saver" data-fileuploader-files='<?php echo json_encode($banner_preload) ?>' data-url="<?php echo base_url(); ?>adminsubservice/save_image" data-name="services">
                                <div id="errorBlock" class="help-block"></div>
                            </div>
                            <hr>
                            <input type="hidden" name="banner_image" class="banner-file-saver" value="<?php echo $banner_image; ?>">
                        </div>
                    </div>
                    <div class="row more-services">
                        <div class="col-lg-6 form-group m-form__group ">
                            <label>Description:</label>
                            <textarea name="description" class="form-control summernote" rows="5"><?php echo $description; ?></textarea>
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