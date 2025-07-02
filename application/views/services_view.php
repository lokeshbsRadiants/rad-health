<!-- ============ Start Our Services Section ============ -->
<section class="service-area py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Our Services</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="services-content">
                    <h3>End-to-End Healthcare Workforce Solutions</h3>
                    <p>We offer comprehensive healthcare staffing solutions designed to meet your clinical, operational, and compliance needs—no matter how complex or urgent.</p>
                    
                    <div class="mt-4">
                        <h4>What We Offer:</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="fa fa-check text-primary me-2"></i> Clinical Staffing Solutions</li>
                            <li class="mb-3"><i class="fa fa-check text-primary me-2"></i> Allied & Behavioral Health Staffing</li>
                            <li class="mb-3"><i class="fa fa-check text-primary me-2"></i> Non-Clinical & Administrative Support</li>
                            <li class="mb-3"><i class="fa fa-check text-primary me-2"></i> Government & Public Health Staffing</li>
                            <li class="mb-3"><i class="fa fa-check text-primary me-2"></i> Customized Workforce Solutions</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="services-image">
                    <img src="<?php echo base_url() ?>assets/images/radhealth2.png" class="img-fluid" alt="Healthcare Solutions">
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-12">
                <div class="service-details">
                    <h4 class="mb-4">Detailed Service Categories</h4>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>Clinical Staffing</h5>
                            <ul class="list-unstyled">
                                <?php 
                                $clinical = [
                                    "Registered Nurses (ICU, Med-Surg, OR, ER, Psych, Tele, etc.)",
                                    "Advanced Practice Providers (NPs, PAs, CRNAs)",
                                    "Physicians (MD/DO)",
                                    "Certified Nursing Assistants & LPNs",
                                    "Allied Health Professionals (PT, OT, RT, Lab Techs, Radiology, etc.)",
                                    "Travel Nurses & Rapid Response Teams"
                                ];
                                foreach ($clinical as $item): ?>
                                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i><?= $item ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <div class="col-lg-6">
                            <h5>Allied & Behavioral Health</h5>
                            <ul class="list-unstyled">
                                <?php 
                                $allied = [
                                    "Speech & Language Pathologists (SLPs)",
                                    "Occupational Therapists (OTs)",
                                    "Physical Therapists (PTs)",
                                    "Respiratory Therapists",
                                    "Radiologic and MRI Techs",
                                    "LCSWs, Therapists, Counselors"
                                ];
                                foreach ($allied as $item): ?>
                                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i><?= $item ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <h5>Non-Clinical & Administrative Support</h5>
                            <ul class="list-unstyled">
                                <?php 
                                $nonclinical = [
                                    "Medical Coders & Billers",
                                    "Patient Access & Scheduling",
                                    "HIM & Front Office Support",
                                    "Revenue Cycle & Claims Specialists",
                                    "EHR Support Staff"
                                ];
                                foreach ($nonclinical as $item): ?>
                                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i><?= $item ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <div class="col-lg-6">
                            <h5>Government & Public Health</h5>
                            <ul class="list-unstyled">
                                <?php 
                                $gov = [
                                    "VA & Military Facilities",
                                    "Indian Health Services",
                                    "County & State Health Programs",
                                    "Correctional & Detention Clinics",
                                    "Behavioral & Community Health Centers"
                                ];
                                foreach ($gov as $item): ?>
                                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i><?= $item ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============ End Our Services Section ============ -->

<style>
    .service-area {
        padding: 80px 0;
    }
    
    .services-content h3 {
        color: #2c3e50;
        margin-bottom: 2rem;
    }
    
    .services-content p {
        color: #666;
        font-size: 1.1rem;
        line-height: 1.8;
    }
    
    .services-content ul {
        padding-left: 20px;
    }
    
    .services-content li {
        font-size: 1rem;
        color: #666;
        margin-bottom: 1.5rem !important;
    }
    
    .services-content li i {
        margin-right: 1.2rem !important;
    }
    
    .service-details h4 {
        color: #2c3e50;
        margin-bottom: 1.5rem;
    }
    
    .service-details h5 {
        color: #2c3e50;
        margin-bottom: 1rem;
    }
    
    .service-details ul {
        padding-left: 20px;
    }
    
    .service-details li {
        font-size: 1rem;
        color: #666;
        margin-bottom: 1.5rem !important;
    }
    
    .service-details li i {
        margin-right: 1.2rem !important;
    }
    
    .section-title {
        color: #2c3e50;
        font-weight: bold;
    }
</style>
