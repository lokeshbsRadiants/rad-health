<?php
$timeline = "";
$certification = "";
$clients = "";
$office_location = "";
$solution = "";
$about_us = "";
$contact_us = "";
$contract_vehicles = "";
$client_module = "";
$client_agencies = "";
$service = "";
$sub_service = "";
$service_detail = "";
switch ($page) {
    case "timeline":
        $timeline = "m-menu__item--active";
        break;
    case "certification":
        $certification = "m-menu__item--active";
        break;
    case "clients":
        $clients = "m-menu__item--active";
        break;
    case "office_location":
        $office_location = "m-menu__item--active";
        break;
    case "solution":
        $solution = "m-menu__item--active";
        break;
    case "about_us":
        $about_us = "m-menu__item--active";
        break;
    case "contact_us":
        $contact_us = "m-menu__item--active";
        break;
    case "contract_vehicles":
        $contract_vehicles = "m-menu__item--active";
        break;
    case "client_module":
        $client_module = "m-menu__item--active";
        break;
    case "client_agencies":
        $client_agencies = "m-menu__item--active";
        break;
    case "service":
        $service = "m-menu__item--active";
        break;
    case "sub_service":
        $sub_service = "m-menu__item--active";
        break;
    case "service_detail":
        $service_detail = "m-menu__item--active";
        break;
    default:
        break;
}
?>

<!-- BEGIN: Aside Menu -->
<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="true" m-menu-dropdown-timeout="500" style="position: relative;">
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow" aria-haspopup="true" >
        <li class="m-menu__item  <?php echo $timeline; ?>" aria-haspopup="true" >
            <a href="<?php echo base_url() ?>admintimeline" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-statistics"></i>
                <span class="m-menu__link-text">Manage Timeline</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
        </li>
        <li class="m-menu__item  <?php echo $certification; ?>" aria-haspopup="true" >
            <a href="<?php echo base_url() ?>admincertifications" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-statistics"></i>
                <span class="m-menu__link-text">Manage Certifications</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
        </li>
        <li class="m-menu__item  <?php echo $clients; ?>" aria-haspopup="true" >
            <a href="<?php echo base_url() ?>adminclients" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-statistics"></i>
                <span class="m-menu__link-text">Manage Home Page Clients</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
        </li>
        <li class="m-menu__item  <?php echo $office_location; ?>" aria-haspopup="true" >
            <a href="<?php echo base_url() ?>adminofficelocation" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-statistics"></i>
                <span class="m-menu__link-text">Manage Office Location</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
        </li>
        <li class="m-menu__item  <?php echo $solution; ?>" aria-haspopup="true" >
            <a href="<?php echo base_url() ?>adminsolution" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-statistics"></i>
                <span class="m-menu__link-text">Manage Solutions</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
        </li>
        <li class="m-menu__item  <?php echo $service; ?>" aria-haspopup="true" >
            <a href="<?php echo base_url() ?>adminservice" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-statistics"></i>
                <span class="m-menu__link-text">Manage Services</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
        </li>
        <li class="m-menu__item  <?php echo $sub_service; ?>" aria-haspopup="true" >
            <a href="<?php echo base_url() ?>adminsubservice" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-statistics"></i>
                <span class="m-menu__link-text">Manage Sub Services</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
        </li>
        <li class="m-menu__item  <?php echo $service_detail; ?>" aria-haspopup="true" >
            <a href="<?php echo base_url() ?>adminservicedetail" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-statistics"></i>
                <span class="m-menu__link-text">Manage Services Details</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
        </li>
        <li class="m-menu__item  <?php echo $about_us; ?>" aria-haspopup="true" >
            <a href="<?php echo base_url() ?>adminaboutus" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-statistics"></i>
                <span class="m-menu__link-text">Manage About Page Content</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
        </li>
        <li class="m-menu__item  <?php echo $client_module; ?>" aria-haspopup="true" >
            <a href="<?php echo base_url() ?>adminclientmodule" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-statistics"></i>
                <span class="m-menu__link-text">Manage Client Modules(Agency)</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
        </li>
        <li class="m-menu__item  <?php echo $client_agencies; ?>" aria-haspopup="true" >
            <a href="<?php echo base_url() ?>adminclientagencies" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-statistics"></i>
                <span class="m-menu__link-text">Manage Client Agencies</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
        </li>
        <li class="m-menu__item  <?php echo $contract_vehicles; ?>" aria-haspopup="true" >
            <a href="<?php echo base_url() ?>admincontractvehicles" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-statistics"></i>
                <span class="m-menu__link-text">Manage Contract Vehicles</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
        </li>
        <li class="m-menu__item  <?php echo $contact_us; ?>" aria-haspopup="true" >
            <a href="<?php echo base_url() ?>admincontactus" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon flaticon-statistics"></i>
                <span class="m-menu__link-text">Contact List</span>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
            </a>
        </li>
    </ul>
</div>

