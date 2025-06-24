<?php
$client_id = "";
$client_type_id = "";
$client_image = $client_images = "";
$status = "1";
$redirection_link = "";
$preload = "";
if ($id != "") {
    $category = $this->adminmodel->get_client($id);
    $client_id = $category['client_id'];
    $client_image = $category['client_images'];
    $client_images = explode(",", $client_image);
    $client_type_id = $category['client_type_id'];
    $status = $category['status'];
    $redirection_link = $category['redirection_link'];

    if ($client_images != "") {
        $preload = array();
        foreach ($client_images as $image) {
            if (file_exists(realpath("./assets/uploads/clients/" . $image))) {
                $path = "assets/uploads/clients/" . $image;
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
                            Add/Edit Client Details
                        </h3>
                    </div>
                    <div class="m-portlet__head-tools">
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form id="client_form" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"
                  method="post" enctype="multipart/form-data">
                <div class="m-portlet__body">
                    <div class="row">
                        <div class="col-lg-4 form-group m-form__group ">
                            <input type="hidden" name="client_id"  value="<?php echo $client_id; ?>">
                            <label>Client Type:</label>
                            <select class="form-control select2"  name="client_type_id">
                                <option value=''>Nothing Selected</option>
                                <?php
                                $types = $this->adminmodel->get_client_types();
                                foreach ($types as $row_type) {
                                    ?>
                                    <option value="<?php echo $row_type['client_type_id'] ?>" <?php
                                    if ($row_type['client_type_id'] === $client_type_id) {
                                        echo 'selected';
                                    } else {
                                        echo '';
                                    }
                                    ?> ><?php echo $row_type['type'] ?></option>
                                        <?php } ?>
                            </select>
                        </div>
                        <div class="col-lg-4 form-group m-form__group ">
                            <label>Status:</label>
                            <select class="form-control select2"  name="status"
                                    data-s="<?php echo $status ?>">
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
                        <div class="col-lg-4 form-group m-form__group ">
                            <label>Status:</label>
                            <input type="text" class="form-control" name="redirection_link" value="<?php echo $redirection_link; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 form-group m-form__group accessory-image">
                            <label>
                                Images
                            </label>
                            <div class="form-group form-md-floating-label ">
                                <input type="hidden" name="client_id"  value="<?php echo $client_id; ?>">  
                                <input type="file" name="files" data-id="<?php echo base_url(); ?>adminclients/delete_image" data-fileuploader-files='<?php echo json_encode($preload) ?>' data-url="<?php echo base_url(); ?>adminclients/save_image" data-name="clients">
                            </div>
                            <hr>
                            <input type="hidden" name="client_images" class="file-saver" value="<?php echo $client_image; ?>">                           
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