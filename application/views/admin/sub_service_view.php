<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">Sub Service</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="<?php echo base_url(); ?>adminsubservice.html" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="m-content" id="sub_service">
        <div class="row">
            <div class="col-lg-12">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Manage Sub Service
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <a class="btn btn-brand m-btn m-btn--custom m-btn--icon m-btn--air add-edit-sub_service">
                                        <span>
                                            <i class="la la-plus"></i>
                                            <span>
                                                Add new Sub Service
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                    <div class="m-portlet__body">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="myTable">
                            <thead>
                                <tr>
                                    <th>Sl No </th>
                                    <th>Service Name</th>
                                    <th>Sub Service Name</th>
                                    <th>Status</th> 
                                    <th>Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $pVal = $this->adminmodel->get_sub_services();
                                foreach ($pVal as $pval) {
                                    ?>
                                    <tr class="odd gradeX">
                                        <td>
                                            <?php echo $i ?>
                                        </td>
                                        <td>
                                            <?php echo $pval['name']; ?>
                                        </td>
                                        <td>
                                            <a class="m-link">
                                                <?php echo $pval['sub_service_name']; ?>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="m-link">
                                                <?php
                                                if ($pval['status'] == '1') {
                                                    echo 'Active';
                                                } else {
                                                    echo 'Inactive';
                                                }
                                                ?>
                                            </a>
                                        </td> 
                                        <td>
                                            <div class="dropdown">
                                                <a href="#"
                                                   class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                                   data-toggle="dropdown">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item add-edit-sub_service" data-id="<?php echo $pval['sub_service_id']; ?>">
                                                        <i class="la la-edit"></i> Edit Details</a>
                                                    <a class="dropdown-item delete-sub_service" data-id="<?php echo $pval['sub_service_id']; ?>">
                                                        <i class="la la-trash"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td> 
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
