<?php
$service_id = "";
$name = "";
$description = "";
$status = "1";
$layout = "";
if ($id != "") {
    $category = $this->adminmodel->get_service($id);
    $service_id = $category['service_id'];
    $name = $category['name'];
    $layout = $category['layout'];
    $status = $category['status'];
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
            <form id="service_form" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"
                  method="post" enctype="multipart/form-data">
                <div class="m-portlet__body">
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group ">
                            <input type="hidden" name="service_id"  value="<?php echo $service_id; ?>">
                            <label>Service Name:</label>
                            <input type="text" name="name" class="form-control m-input year"  value="<?php echo $name; ?>">
                        </div>
                        <div class="col-lg-6 form-group m-form__group ">
                            <label>Layout Design:</label>
                            <select class="form-control select2"  name="layout">
                                <option value=''>Please Select</option>
                                <option value="1" <?php
                                if ($layout === '1') {
                                    echo 'selected';
                                } else {
                                    echo '';
                                }
                                ?> >Layout 1</option>
                                <option value="2" <?php
                                if ($layout === '2') {
                                    echo 'selected';
                                } else {
                                    echo '';
                                }
                                ?>>Layout 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group ">
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