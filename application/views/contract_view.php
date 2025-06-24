<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
<!---======= Starting Page title ========--->
<section class="section inner-page-banner contract-page-banner">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-5 col-md-5 col-sm-12 align-self-md-center align-self-start">
                <h1 class="page-title">Contract Vehicles</h1>
            </div>
        </div>
    </div>
</section>
<?php
$vehicles = $this->user_model->get_contract_vehicles();
if (count($vehicles) > 0) {
    ?>
<div class="page-content">
    <section class="contract-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p>RADgov has exhibited a wide, well-evidenced set of capabilities, experience and expertise in
                        offering Information Technology and Staff Augmentation solutions and services to the Federal
                        agencies of the USA. During the 15 years of serving both the government and private clients, we
                        have grown over to possess several Federal and State contract vehicles, making RADgov a
                        trustworthy, totally integrated solutions provider, adept to face and fulfill challenges of
                        quality and time.</p>
                    <div class="contract-container">
                        <table id="example" class="table table-striped table-bordered table-responsive"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>State</th>
                                    <th>Contract No.</th>
                                    <th>Client Name</th>
                                    <th>Contract Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>AZ</td>
                                    <td>P18/9982L</td>
                                    <td>Pima County Community College District</td>
                                    <td>Information Technology Services and Consulting Proposal No. P18/9982L</td>
                                </tr>
                                <tr>
                                    <td>KS</td>
                                    <td></td>
                                    <td>KS State of Kansas </td>
                                    <td>Temporary Staffing - BID: EVT0007183</td>
                                </tr>
                                <tr>
                                    <td>KS</td>
                                    <td></td>
                                    <td>KS Department of Administration </td>
                                    <td>Information Technology Temporary Staffing - BID: EVT0007180</td>
                                </tr>
                                <tr>
                                    <td>CA</td>
                                    <td></td>
                                    <td>CA Inland Empire Health Plan </td>
                                    <td>Direct Hire and Temporary Staffing - RFQu # - 20-02419 </td>
                                </tr>
                                <tr>
                                    <td>WA</td>
                                    <td></td>
                                    <td>WA Community Transit</td>
                                    <td>Temporary Staffing Services - # - 2020-060 </td>
                                </tr>
                                <tr>
                                    <td>TX</td>
                                    <td></td>
                                    <td>TX Region One Education Service Center</td>
                                    <td>Bid #21-AGENCY-000089 - ROPC Professional Consultant Services </td>
                                </tr>
                                <tr>
                                    <td>TX</td>
                                    <td></td>
                                    <td>TX Cooperative Purchasing Program Houston-Galveston Area Council of Governments
                                    </td>
                                    <td>Temporary Staffing, Direct-Hire and Other Employer Services - TS06-21 </td>
                                </tr>
                                <tr>
                                    <td>WA</td>
                                    <td></td>
                                    <td>WA Seattle Public Schools</td>
                                    <td>Temporary Staffing Services for Seattle Public Schools - RFQ022160 </td>
                                </tr>
                                <tr>
                                    <td>DC</td>
                                    <td></td>
                                    <td>DC Office of Contracting and Procurement</td>
                                    <td>Temporary Staffing Support Services - DOC576158 </td>
                                </tr>
                                <tr>
                                    <td>FL</td>
                                    <td>80101507-21-STC-ITSA</td>
                                    <td>FL Department of Management Services</td>
                                    <td>Doc174081 Information Technology Staff Augmentation Services - 2021 Sol#
                                        21-80101507-ITB </td>
                                </tr>
                                <tr>
                                    <td>TN</td>
                                    <td></td>
                                    <td>TN Shelby County Board of Education </td>
                                    <td>Professional Instructional Temporary Staffing Services - RFP #07152021LJS </td>
                                </tr>
                                <tr>
                                    <td>CA</td>
                                    <td></td>
                                    <td>CA Sacramento Area Sewer District</td>
                                    <td>RFP#8404 Temporary Technical Support Staff </td>
                                </tr>
                                <tr>
                                    <td>CA</td>
                                    <td></td>
                                    <td>CA Eastern Municipal Water District</td>
                                    <td>AS NEEDED COMPUTER CONSULTING SERVICES - RFQ-VT-3465 </td>
                                </tr>
                                <tr>
                                    <td>CT</td>
                                    <td></td>
                                    <td>CT The Housing Authority of the City of Hartford </td>
                                    <td>Temporary Staffing Services - IFB 2017-22 </td>
                                </tr>
                                <tr>
                                    <td>FL</td>
                                    <td></td>
                                    <td>FL The School Board of Broward County </td>
                                    <td>Invitation to Bid: FY23-045 – Technical Staffing & Consulting Services </td>
                                </tr>
                                <tr>
                                    <td>FL</td>
                                    <td></td>
                                    <td>FL City of Clermont </td>
                                    <td>Staffing Services - Bid #22-025 </td>
                                </tr>
                                <tr>
                                    <td>FL</td>
                                    <td></td>
                                    <td>FL Manatee County </td>
                                    <td>TEMPORARY EMPLOYMENT SERVICES FOR FEDERALLY FUNDED PROJECTS - No. 22-TA004176SB
                                    </td>
                                </tr>
                                <tr>
                                    <td>TX</td>
                                    <td></td>
                                    <td>TX The Fort Worth Independent School District </td>
                                    <td>Temporary Services - 21-037-A
                                    </td>
                                </tr>
                                <tr>
                                    <td>FL</td>
                                    <td></td>
                                    <td>FL University of Central Florida </td>
                                    <td>ITN 2021-03TCSA Temporary Labor Services</td>
                                </tr>

                                <tr>
                                    <td>TX</td>
                                    <td></td>
                                    <td>TX FORT WORTH HOUSING SOLUTIONS (The Housing Authority of the City of Fort
                                        Worth, Texas, dba Fort Worth Housing Solutions (FWHS) -) </td>
                                    <td>Temporary Staffing Services - RFP NO. 2022-106</td>
                                </tr>
                                <tr>
                                    <td>CA</td>
                                    <td></td>
                                    <td>CA County of Santa Clara TECHNOLOGY SERVICES & SOLUTIONS (TSS)</td>
                                    <td>IT Professional Services and IT Healthcare Professional Services - Bid
                                        #ERFSQ-ISD-FY22-0372</td>
                                </tr>
                                <tr>
                                    <td>CO</td>
                                    <td></td>
                                    <td>CO Jefferson County School District R-1 (District)</td>
                                    <td>Jeffco IT Specialized Staffing Augmentation - No. 26130 </td>
                                </tr>
                                <tr>
                                    <td>DC</td>
                                    <td></td>
                                    <td>US House of Representatives</td>
                                    <td>RFQ OAM23015S - Computer Facility Operations Technician </td>
                                </tr>
                                <tr>
                                    <td>OR</td>
                                    <td></td>
                                    <td>OR UNIVERSITY OF OREGON</td>
                                    <td>Temporary Staffing Services - PCS# 440000-00353 </td>
                                </tr>
                                <tr>
                                    <td>IL</td>
                                    <td></td>
                                    <td>IL HDA - Housing Development Authority</td>
                                    <td>3rd Party IT Search Firm - Enterprise Business Analyst Small Purchase Bid#
                                        23-551HDA-ADMIN-B-33489 </td>
                                </tr>
                                <tr>
                                    <td>NJ</td>
                                    <td></td>
                                    <td>NJ Ramapo College of New Jersey </td>
                                    <td>Temporary Staffing Service - # 23-005A </td>
                                </tr>
                                <tr>
                                    <td>NV</td>
                                    <td></td>
                                    <td>NV Clark County</td>
                                    <td>IT Tier 1 Professional Services - 606374-22 </td>
                                </tr>
                                <tr>
                                    <td>MN</td>
                                    <td></td>
                                    <td>MN Ramsey County</td>
                                    <td>Information Technology Professional Services - ISDP0000010442 </td>
                                </tr>
                                <tr>
                                    <td>KS</td>
                                    <td></td>
                                    <td>KS State of Kansas</td>
                                    <td>Master Consulting Services - ID: EVT00000MCS (Replaces Contract: NEW Date
                                        Posted: April 28, 2022) <br><br>Bid Event Number: EVT0008682<br> Document
                                        Number: RFX0002011 <br> Dated: August 2, 2022 </td>
                                </tr>
                                <tr>
                                    <td>MO</td>
                                    <td></td>
                                    <td>MO University of Missouri</td>
                                    <td>23 - 1014 (Temporary Staffing Services) </td>
                                </tr>
                                <tr>
                                    <td>CA</td>
                                    <td></td>
                                    <td>CA Arrowhead Regional Medical Center / San Bernardino County</td>
                                    <td>Health Information Management Contract Staffing ARMC122-ARMC-4561 </td>
                                </tr>
                                <tr>
                                    <td>OH</td>
                                    <td></td>
                                    <td>OH FRANKLIN COUNTY</td>
                                    <td>TEMPORARY STAFFING SERVICES  - ITB # 2023-02-04 </td>
                                </tr>
                                <tr>
                                    <td>NC</td>
                                    <td></td>
                                    <td>NC State University</td>
                                    <td>Extension Services (Pre-Qualification) - RFP # 63-KGS906857 </td>
                                </tr>
                                <tr>
                                    <td>WA</td>
                                    <td></td>
                                    <td>WA City of Redmond</td>
                                    <td>Temporary Technology Staffing - IFB 10784-23 </td>
                                </tr>
                                <tr>
                                    <td>TN</td>
                                    <td></td>
                                    <td>TN SHELBY COUNTY BOARD OF EDUCATION Memphis-Shelby County Schools </td>
                                    <td>IT Temporary Staffing Services - 05012023AW </td>
                                </tr>
                                <tr>
                                    <td>CA</td>
                                    <td></td>
                                    <td>CA Water Replenishment District of Southern California </td>
                                    <td>RFQ for As-Needed Staff Augmentation Services - # - RFQ-24-005</td>
                                </tr>
                                <tr>
                                    <td>MI</td>
                                    <td></td>
                                    <td>Washtenaw County </td>
                                    <td>Temporary Services - # 8500</td>
                                </tr>
                                <tr>
                                    <td>TX</td>
                                    <td></td>
                                    <td>TX THE CITY OF COPPELL</td>
                                    <td>CITYWIDE CONTRACTOR SERVICES - RFP #200</td>
                                </tr>
                                <tr>
                                    <td>MN</td>
                                    <td></td>
                                    <td>MN University of Minnesota</td>
                                    <td>U239.2022.JST.REBID (University-Wide Agreement: Information Technology Staff
                                        Augmentation)</td>
                                </tr>
                                <tr>
                                    <td>NY</td>
                                    <td></td>
                                    <td>NY Rochester Housing Authority</td>
                                    <td>Temporary Employment Agency Services - RFP20230709</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                        <!--<div class="tabs tabs-style-linemove">
                                <nav>
                                    <ul>
                                        <li><a href="#allcon"><span>All</span></a></li>
                                        <li><a href="#federalcon"><span>Federal</span></a></li>
                                        <li><a href="#statecon"><span>State/Local</span></a></li>
                                    </ul>
                                </nav>
                                <div class="content-wrap">
                                    <section id="allcon">
                                        <div class="container">
                                            <div class="row">
                                                <?php foreach ($vehicles as $row_vehicle) { ?>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 d-flex">
                                                        <div class="contrcard">
                                                            <div class="contrimg text-center">
                                                                <img src="<?php echo base_url() ?>assets/images/lazyload-icon.gif" data-src="<?php echo base_url() ?>assets/uploads/vehicles/<?php echo $row_vehicle['image']; ?>" class="img-fluid lazyload" alt="united-states-house-of-repr">
                                                            </div>
                                                            <div class="contrdetail">
                                                                <p class="contrtype"><?php
                                                                if ($row_vehicle['contract_type'] == '1') {
                                                                    echo 'Federal';
                                                                } else if ($row_vehicle['contract_type'] == '2') {
                                                                    echo 'State';
                                                                } else {
                                                                    echo 'Local';
                                                                }
                                                                ?></p>
                                                                <h3 class="contrname"><?php echo $row_vehicle['contract_name']; ?></h3>
                                                                <p class="contrdesc"><?php echo $row_vehicle['contract_description']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </section>

                                    <section id="federalcon">
                                        <div class="container">
                                            <div class="row">
                                                <?php
                                                $federal = array_filter($vehicles, function($v, $k) {
                                                    return $v['contract_type'] == '1';
                                                }, ARRAY_FILTER_USE_BOTH);
                                                foreach ($federal as $row_federal) {
                                                    ?>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 d-flex">
                                                        <div class="contrcard">
                                                            <div class="contrimg text-center">
                                                                <img src="<?php echo base_url() ?>assets/images/lazyload-icon.gif" data-src="<?php echo base_url() ?>assets/uploads/vehicles/<?php echo $row_federal['image']; ?>" class="img-fluid lazyload" alt="united-states-house-of-repr">
                                                            </div>
                                                            <div class="contrdetail">
                                                                <p class="contrtype">Federal</p>
                                                                <h3 class="contrname"><?php echo $row_federal['contract_name']; ?></h3>
                                                                <p class="contrdesc"><?php echo $row_federal['contract_description']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </section>
                                    <section id="statecon">
                                        <div class="container">
                                            <div class="row">
                                                <?php
                                                $state = array_filter($vehicles, function($v) {
                                                    return $v['contract_type'] !== '1';
                                                }, ARRAY_FILTER_USE_BOTH);
                                                foreach ($state as $row_state) {
                                                    ?>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 d-flex">
                                                        <div class="contrcard">
                                                            <div class="contrimg text-center">
                                                                <img src="<?php echo base_url() ?>assets/images/lazyload-icon.gif" data-src="<?php echo base_url() ?>assets/uploads/vehicles/<?php echo $row_state['image']; ?>" class="img-fluid lazyload" alt="maryland">
                                                            </div>
                                                            <div class="contrdetail">
                                                                <p class="contrtype"> <?php
                                                                if ($row_state['contract_type'] == '2') {
                                                                    echo 'State';
                                                                } else {
                                                                    echo 'Local';
                                                                }
                                                                ?></p>
                                                                <h3 class="contrname"><?php echo $row_state['contract_name']; ?></h3>
                                                                <p class="contrdesc"><?php echo $row_state['contract_description']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script> -->

<script>
// $(document).ready(function() {
//     $.noConflict();
//     var table = $('#example').DataTable();
// });
$(document).ready(function() {
    $('#example').DataTable();
});
</script>

<?php } ?>