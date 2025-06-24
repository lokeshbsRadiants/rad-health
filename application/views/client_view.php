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
    <h2 class="client-title">Our Clients</h2>
    <div class="client-grid">
        <?php foreach ($clients as $client): ?>
            <div class="client-box"><?php echo htmlspecialchars($client); ?></div>
        <?php endforeach; ?>
    </div>
</div>

            </div>
        </div>
    </div>    
</div>        
</section>