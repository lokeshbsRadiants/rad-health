<?php
$timeline_id = "";
$date = "";
$description = "";
$status = "1";
if ($id != "") {
    $category = $this->adminmodel->get_timeline($id);
    //foreach ($category->result() as $row_value) {
        $timeline_id = $category['timeline_id'];
        $date = $category['date'];
        $description = $category['description'];
        $status = $category['status'];
  //  }
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
                            Add/Edit Timeline Details
                        </h3>
                    </div>
                    <div class="m-portlet__head-tools">
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form id="timeline_form" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"
                  method="post" enctype="multipart/form-data">
                <div class="m-portlet__body">
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group ">
                            <input type="hidden" name="timeline_id"  value="<?php echo $timeline_id; ?>">
                            <label>Year:</label>
                            <input type="text" name="date" class="form-control m-input year"  value="<?php echo $date; ?>">
                        </div>
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
                    <div class="row">
                        <div class="col-lg-6 form-group m-form__group ">
                            <label>Key skills we staff for:</label>
                            <textarea  class="form-control summernote"  placeholder="Description" name="description" ><?php echo $description; ?></textarea>
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
<script src="<?php echo base_url(); ?>assets/admin/js/summernote.js"></script>
<script>
    $('.summernote').summernote({
        height: "250px",
        focus: false
    });
</script>