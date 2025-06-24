   <!---======= Starting Page title ========--->
   <section class="inner-page-banner contact-page-banner">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-12 col-md-12 col-sm-12 align-self-center">
                <h1 class="inner-page-title">Current Clients</h1>
            </div>
        </div>
    </div>
</section>
<!---=======  Client Details Area =========---->
<div class="page-content">
    <section class="client-detail-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p>Having efficiently performed in and completed over 150 successful projects over the years and holding over 50 ongoing projects, RADgov has demonstrated its efficiency in catering to the intellectual capital and technological needs of not just commercial, but Federal and Government clients as well. We, at RADgov, believe and strive towards providing customized and customer-oriented solutions to clients, which makes us more approachable, trustworthy and resourceful in fulfilling the client requirements to the best extent.</p>
                    <div class="contract-container">
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
</div>