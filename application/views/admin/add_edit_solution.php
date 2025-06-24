<?php
$solution_id = "";
$name = "";
$title = "";
$description = "";
$feature = "";
$feature_image = "";
$benefits = "";
$why_radgov = "";
$input1Image = "";
$status = "1";
$description_image = "";
$icon_image = "";
$banner_image = "";
if ($id != "") {
    $category = $this->adminmodel->get_solution($id);
    $solution_id = $category['solution_id'];
    $name = $category['name'];
    $title = $category['title'];
    $description = $category['description'];
    $feature = $category['feature'];
    $benefits = $category['benefits'];
    $why_radgov = $category['why_radgov'];
    $status = $category['status'];
    $description_image = $category['description_image'];
    $feature_image = $category['feature_image'];
    $input1Image = $category['image'];
    $icon_image = $category['icon_image'];
    $banner_image = $category['banner_image'];
}
$preload = "";
$icon_preload = "";
$description_preload = "";
$feature_preload = $banner_preload = "";
if ($input1Image != "") {
    $preload = array();
    if (file_exists(realpath("./assets/uploads/solution/" . $input1Image))) {
        $path = "assets/uploads/solution/" . $input1Image;
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
if ($icon_image != "") {
    $icon_preload = array();
    if (file_exists(realpath("./assets/uploads/solution/" . $icon_image))) {
        $path = "assets/uploads/solution/" . $icon_image;
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
if ($description_image != "") {
    $description_preload = array();
    if (file_exists(realpath("./assets/uploads/solution/" . $description_image))) {
        $path = "assets/uploads/solution/" . $description_image;
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $path);
        $description_preload[] = array(
            "name" => basename($path),
            "type" => $mime,
            "size" => filesize($path),
            "file" => $path,
            "local" => realpath($path)
        );
    }
}
if ($feature_image != "") {
    $feature_preload = array();
    if (file_exists(realpath("./assets/uploads/solution/" . $feature_image))) {
        $path = "assets/uploads/solution/" . $feature_image;
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $path);
        $feature_preload[] = array(
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
    if (file_exists(realpath("./assets/uploads/solution/" . $banner_image))) {
        $path = "assets/uploads/solution/" . $banner_image;
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
                            Add/Edit Office Location
                        </h3>
                    </div>
                    <div class="m-portlet__head-tools">
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form id="solution_form" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"
                  method="post" enctype="multipart/form-data">
                <div class="m-portlet__body">
                    <div class="row">
                        <div class="col-lg-4 form-group m-form__group ">
                            <input type="hidden" name="solution_id"  value="<?php echo $solution_id; ?>">
                            <label>Enter Solution Name:</label>
                            <input type="text" name="name" class="form-control "  value="<?php echo $name; ?>">
                        </div>
                        <div class="col-lg-8 form-group m-form__group ">
                            <label>Enter Solution Title:</label>
                            <input type="text" name="title" class="form-control " value="<?php echo $title; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group feature-image">
                            <label>
                                Solution Image
                            </label>
                            <div class="form-group form-md-floating-label ">
                                <input type="file" name="files1" data-id="<?php echo base_url(); ?>adminsolution/delete_image" data-fileuploader-files='<?php echo json_encode($preload) ?>' data-url="<?php echo base_url(); ?>adminsolution/save_image" data-name="solution">
                                <div id="errorBlock" class="help-block"></div>
                            </div>
                            <hr>
                            <input type="hidden" name="image" class="file-saver" value="<?php echo $input1Image; ?>">
                        </div>

                        <div class="col-lg-6 form-group m-form__group feature-image">
                            <label>
                                Icon Image
                            </label>
                            <div class="form-group form-md-floating-label ">
                                <input type="file" name="files2" data-id="<?php echo base_url(); ?>adminsolution/delete_image" data-fileuploader-files='<?php echo json_encode($icon_preload) ?>' data-url="<?php echo base_url(); ?>adminsolution/save_image" data-name="solution" data-attr-name="icon-file-saver">
                                <div id="errorBlock" class="help-block"></div>
                            </div>
                            <hr>
                            <input type="hidden" name="icon_image" class="icon-file-saver" value="<?php echo $icon_image; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group ">
                            <label>Description:</label>
                            <textarea name="description" class="form-control summernote" rows="5"><?php echo $description; ?></textarea>
                        </div>
                        <div class="col-lg-6 form-group m-form__group feature-image">
                            <label>
                                Description Image
                            </label>
                            <div class="form-group form-md-floating-label ">
                                <input type="file" name="files3" data-id="<?php echo base_url(); ?>adminsolution/delete_image" data-fileuploader-files='<?php echo json_encode($description_preload) ?>' data-url="<?php echo base_url(); ?>adminsolution/save_image" data-name="solution" data-attr-name="description-file-saver">
                                <div id="errorBlock" class="help-block"></div>
                            </div>
                            <hr>
                            <input type="hidden" name="description_image" class="description-file-saver" value="<?php echo $description_image; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group ">
                            <label>Features:</label>
                            <textarea name="feature" class="form-control summernote"><?php echo $feature; ?></textarea>
                        </div>
                        <div class="col-lg-6 form-group m-form__group feature-image">
                            <label>
                                Feature Image
                            </label>
                            <div class="form-group form-md-floating-label ">
                                <input type="file" name="files4" data-id="<?php echo base_url(); ?>adminsolution/delete_image" data-attr-name="feature-file-saver" data-fileuploader-files='<?php echo json_encode($feature_preload) ?>' data-url="<?php echo base_url(); ?>adminsolution/save_image" data-name="solution">
                                <div id="errorBlock" class="help-block"></div>
                            </div>
                            <hr>
                            <input type="hidden" name="feature_image" class="feature-file-saver" value="<?php echo $feature_image; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group ">
                            <label>Benefits:</label>
                            <textarea name="benefits" class="form-control summernote" ><?php echo $benefits; ?></textarea>
                        </div>
                        <div class="col-lg-6 form-group m-form__group feature-image">
                            <label>
                                Why RADgov?
                            </label>
                            <textarea name="why_radgov" class="form-control" rows="5"><?php echo $why_radgov; ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group feature-image">
                            <label>
                                Banner Image
                            </label>
                            <div class="form-group form-md-floating-label ">
                                <input type="file" name="files5" data-id="<?php echo base_url(); ?>adminsolution/delete_image" data-attr-name="banner-file-saver" data-fileuploader-files='<?php echo json_encode($banner_preload) ?>' data-url="<?php echo base_url(); ?>adminsolution/save_image" data-name="solution">
                                <div id="errorBlock" class="help-block"></div>
                            </div>
                            <hr>
                            <input type="hidden" name="banner_image" class="banner-file-saver" value="<?php echo $banner_image; ?>">
                        </div>
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