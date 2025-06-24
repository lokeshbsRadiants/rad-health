<?php
$location_id = "";
$office_name = "";
$address = "";
$location = "";
$mobile = "";
$telephone = "";
$work = "";
$fax = "";
$contact_email = "";
$image1 = "";
$input1Image = "";
$is_corporate = "1";
$status = "1";
if ($id != "") {
    $category = $this->adminmodel->get_office_location($id);
    // foreach ($category->result() as $row_value) {
    $location_id = $category['location_id'];
    $office_name = $category['office_name'];
    $address = $category['address'];
    $contact_email = $category['contact_email'];
    $location = $category['location'];
    $mobile = $category['mobile'];
    $telephone = $category['telephone'];
    $work = $category['work'];
    $fax = $category['fax'];
    $status = $category['status'];
    $is_corporate = $category['is_corporate'];
    if ($category['image'] != "") {
        $image1 .= '"' . base_url() . 'assets/uploads/location/' . $category['image'] . '"';
        $input1Image .= $category['image'];
    }
    // }
}
$preload = "";
if ($input1Image != "") {
    $preload = array();
    if (file_exists(realpath("./assets/uploads/location/" . $input1Image))) { //print_r($preload);exit;
        $path = "assets/uploads/location/" . $input1Image;
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
                            Add/Edit Office Location
                        </h3>
                    </div>
                    <div class="m-portlet__head-tools">
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form id="location_form" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"
                  method="post" enctype="multipart/form-data">
                <div class="m-portlet__body">
                    <div class="row">
                        <div class="col-lg-8 form-group m-form__group ">
                            <input type="hidden" name="location_id"  value="<?php echo $location_id; ?>">
                            <label>Enter Office Name:</label>
                            <input type="text" name="office_name" class="form-control maxlength-handler"  value="<?php echo $office_name; ?>">
                        </div>
                        <div class="col-lg-4 form-group m-form__group ">
                            <label>Enter Location:</label>
                            <input type="text" name="location" class="form-control maxlength-handler" value="<?php echo $location; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 form-group m-form__group ">
                            <label>Enter Address:</label>
                            <input type="text" name="address" class="form-control maxlength-handler"  value="<?php echo $address; ?>">
                        </div>
                        <div class="col-lg-4 form-group m-form__group ">
                            <label>Contact Email:</label>
                            <input type="text" name="contact_email" class="form-control maxlength-handler" value="<?php echo $contact_email; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group feature-image">
                            <label>
                                Image
                            </label>
                            <div class="form-group form-md-floating-label ">
                                <input type="file" name="files1" data-id="<?php echo base_url(); ?>adminofficelocation/delete_image" data-fileuploader-files='<?php echo json_encode($preload) ?>' data-url="<?php echo base_url(); ?>adminofficelocation/save_image" data-name="location">
                                <div id="errorBlock" class="help-block"></div>
                            </div>
                            <hr>
                            <input type="hidden" name="image" class="file-saver" value="<?php echo $input1Image; ?>">
                        </div>

                        <div class="col-lg-3 form-group m-form__group ">
                            <label>Work Number:</label>
                            <input type="text" name="work" class="form-control maxlength-handler" value="<?php echo $work; ?>">
                        </div>
                        <div class="col-lg-3 form-group m-form__group ">
                            <label>Mobile:</label>
                            <input type="text" name="mobile" class="form-control maxlength-handler"  value="<?php echo $mobile; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group ">
                            <label>Telephone:</label>
                            <input type="text" name="telephone" class="form-control maxlength-handler" value="<?php echo $telephone; ?>">
                        </div>
                        <div class="col-lg-6 form-group m-form__group ">
                            <label>Fax:</label>
                            <input type="text" name="fax" class="form-control maxlength-handler" value="<?php echo $fax; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group ">
                            <label for="single" class="control-label">Is this Corporate Office?</label>
                            <select class="form-control select2"  name="is_corporate"
                                    data-s="<?php echo $is_corporate ?>">
                                <option value="">Please Select</option>
                                <option value="1" <?php
                                if ($is_corporate === '1') {
                                    echo 'selected';
                                } else {
                                    echo '';
                                }
                                ?> >Corporate Office</option>
                                <option value="0" <?php
                                if ($is_corporate === '0') {
                                    echo 'selected';
                                } else {
                                    echo '';
                                }
                                ?>>Branch Office</option>
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