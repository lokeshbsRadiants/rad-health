<!---======= Starting Page title ========--->
<section class="section inner-page-banner" style="background-image:url('<?php echo base_url() ?>assets/uploads/client_modules/<?php echo $client['banner_image']; ?>')">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-5 col-md-5 col-sm-12 align-self-md-center align-self-start">
                <h1 class="page-title"><?php echo $client['sub_module_name']; ?></h1>
            </div>
        </div>
    </div>
</section>
<!---=======  Client Details Area =========---->
<div class="page-content">
    <section class="client-detail-area">
        <div class="container">
            <div class="">
            <?php
$clients = [
    "AHSA - Trio",
    "ARMC - Arrowhead Regional Medical Center",
    "Atrium Health",
    "BrightSpring Health Services",
    "Care New England Health System",
    "Carpenter Technology",
    "Cedars-Sinai Medical Center",
    "Cross Country Healthcare",
    "Evangelical Lutheran Good Samaritan Society",
    "Genesis HealthCare",
    "John Muir Health",
    "KPC Health",
    "Lehigh Valley Health Network",
    "Medefis",
    "Novant Health",
    "Ohio State University",
    "Parkview Health",
    "PIH Health",
    "Providence Medical Center",
    "Sanford Health",
    "Summa Health",
    "Valleywise Health Medical Center",
    "Wake Forest University Baptist Medical Center"
];
?>

<div class="client-container">
    <h2 style="text-align: center; color: var(--main-color);" class="client-title">Our Clients</h2>
    <div class="client-grid">
   <?php
$rowIndex = 0;
foreach ($clients as $index => $client):
    if ($index % 5 == 0) {
        // Start of a new row
        $rowIndex++;
    }

    // Column position in the row (0 to 3)
    $colPosition = $index % 5;

    // Reverse pattern every row
    $isOddRow = $rowIndex % 2 === 1;
    $class = ($colPosition % 2 === 0) ? ($isOddRow ? 'bg_odd' : 'bg_even') : ($isOddRow ? 'bg_even' : 'bg_odd');
?>
    <div class="client-box <?php echo $class; ?>">
        <?php echo htmlspecialchars($client); ?>
    </div>
<?php endforeach; ?>
    </div>
</div>

            </div>
        </div>
    </div>    
</div>        
</section>