<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">Contact</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="<?php echo base_url(); ?>admincontactus.html" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="m-content" id="timeline">
        <div class="row">
            <div class="col-lg-12">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Contact List
                                </h3>
                            </div>
                        </div> 
                    </div>
                    <div class="m-portlet__body">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="myTable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th> 
                                    <th>Message</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $pVal = $this->adminmodel->get_contacts();
                                foreach ($pVal as $pval) {
                                    ?>
                                    <tr class="odd gradeX">
                                        <td>
                                            <?php echo $pval['first_name'] . " " . $pval['last_name']; ?>
                                        </td>
                                        <td>
                                            <a class="m-link">
                                                <?php echo $pval['email']; ?>
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo $pval['phone_number']; ?>
                                        </td> 
                                        <td>
                                            <?php echo $pval['message']; ?>
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
