<?php
$client_sub_module_id = $client_module_id = "";
$sub_module_name = "";
$sub_module_types = [];
$description = "";
$input1Image = "";
$status = "1";
if ($id != "") {
    $category = $this->adminmodel->get_client_sub_module($id);
    $client_sub_module_id = $category['client_sub_module_id'];
    $client_module_id = $category['client_module_id'];
    $sub_module_name = $category['sub_module_name'];
    $sub_module_types = explode(",", $category['sub_module_types']);
    $description = $category['description'];
    $status = $category['status'];
    $input1Image = $category['banner_image'];
}
$preload = "";
if ($input1Image != "") {
    $preload = array();
    if (file_exists(realpath("./assets/uploads/client_modules/" . $input1Image))) {
        $path = "assets/uploads/client_modules/" . $input1Image;
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
                            Add/Edit Client Sub Modules
                        </h3>
                    </div>
                    <div class="m-portlet__head-tools">
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form id="client_sub_module_form" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"
                  method="post" enctype="multipart/form-data">
                <div class="m-portlet__body">
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group ">
                            <input type="hidden" name="client_sub_module_id"  value="<?php echo $client_sub_module_id; ?>">
                            <label>Enter Client Sub Module Name:</label>
                            <input type="text" name="sub_module_name" class="form-control "  value="<?php echo $sub_module_name; ?>">
                        </div>
                        <div class="col-lg-6 form-group m-form__group ">
                            <label for="single" class="control-label">Client Module</label>
                            <select class="form-control select2"  name="client_module_id">
                                <option value="">Please Select</option>
                                <?php
                                $modules = $this->adminmodel->get_client_modules();
                                foreach ($modules as $row_module) {
                                    ?>
                                    <option value="<?php echo $row_module['client_module_id'] ?>" <?php
                                    if ($row_module['client_module_id'] === $client_module_id) {
                                        echo 'selected';
                                    } else {
                                        echo '';
                                    }
                                    ?> ><?php echo $row_module['module_name'] ?></option>
                                        <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group ">
                            <label>Description:</label>
                            <textarea name="description" class="form-control summernote" rows="5"><?php echo $description; ?></textarea>
                        </div>
                        <div class="col-lg-6 form-group m-form__group feature-image">
                            <label>
                                Banner Image
                            </label>
                            <div class="form-group form-md-floating-label ">
                                <input type="file" name="files1" data-id="<?php echo base_url(); ?>adminclientmodule/delete_image" data-fileuploader-files='<?php echo json_encode($preload) ?>' data-url="<?php echo base_url(); ?>adminclientmodule/save_image" data-name="client_modules">
                                <div id="errorBlock" class="help-block"></div>
                            </div>
                            <hr>
                            <input type="hidden" name="banner_image" class="file-saver" value="<?php echo $input1Image; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group ">
                            <label for="single" class="control-label">Client Module Type</label>
                            <select class="form-control select2"  name="sub_module_types[]" multiple>
                                <!--<option value="">Please Select</option>-->
                                <?php
                                $module_types = $this->adminmodel->get_client_module_types();
                                foreach ($module_types as $row_module) {
                                    ?>
                                    <option value="<?php echo $row_module['client_module_type_id'] ?>" <?php
                                    if (in_array($row_module['client_module_type_id'], $sub_module_types)) {
                                        echo 'selected';
                                    } else {
                                        echo '';
                                    }
                                    ?> ><?php echo $row_module['type_name'] ?></option>
                                        <?php } ?>
                            </select>
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