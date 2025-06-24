<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">Contract Vehicle</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="<?php echo base_url(); ?>admincontractvehicles.html" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="m-content" id="contract_vehicle">
        <div class="row">
            <div class="col-lg-12">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Manage Contract Vehicle
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <a class="btn btn-brand m-btn m-btn--custom m-btn--icon m-btn--air add-edit-vehicle">
                                        <span>
                                            <i class="la la-plus"></i>
                                            <span>
                                                Add new Contract Vehicle
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
                                    <th>Contract Vehicle Name</th>
                                    <th>Contract Type</th>
                                    <th>Status</th> 
                                    <th>Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $pVal = $this->adminmodel->get_contract_vehicles();
                                foreach ($pVal as $pval) {
                                    ?>
                                    <tr class="odd gradeX">
                                        <td>
                                            <?php echo $i ?>
                                        </td>
                                        <td>
                                            <a class="m-link">
                                                <?php echo $pval['contract_name']; ?>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="m-link">
                                                <?php
                                                if ($pval['contract_type'] == '1') {
                                                    echo 'Federal';
                                                } else if ($pval['contract_type'] == '2') {
                                                    echo 'State';
                                                } else {
                                                    echo 'Local';
                                                }
                                                ?>
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
                                                    <a class="dropdown-item add-edit-vehicle" data-id="<?php echo $pval['contract_id']; ?>">
                                                        <i class="la la-edit"></i> Edit Details</a>
                                                    <a class="dropdown-item delete-vehicle" data-id="<?php echo $pval['contract_id']; ?>">
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
