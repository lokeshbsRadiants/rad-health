<section class=" ">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 col-md-12 col-sm-12 align-self-center mt-5">
                    <h1 class="">Job Board at
RadHealth<sup>+</sup> </h1>
                </div>
            </div>
        </div>
        <div class="bg-primary text-white mt-5">
            <?php 
                $currentPath = $_SERVER['REQUEST_URI'];
               
            ?>
            <div class="container d-flex justify-content-between align-items-center py-2">
                <p class="m-0"> Create Job Agent Jobs through RSS </p>
            <nav class="d-flex list-unstyled jobNav">
                <!-- search jobs -->
                <li class="mr-3"> <a href="<?php echo base_url() ?>job-board" class="text-white text-decoration-none <?= ($currentPath == '/job-board') ? 'jobnav_active py-2 px-2 rounded-pill' : '' ?>"> Search Jobs </a>  </li>

                <!-- sign in -->
                <?php if(!$this->session->userdata("loggedin")): ?>
                    <li class="mr-3"> <a href="<?php echo base_url()?>signin" class="text-white text-decoration-none <?= ($currentPath == '/signin') ? 'jobnav_active py-2 px-2 rounded-pill' : '' ?> "> Sign In </a> </li>
                <?php endif; ?>
               

                <!-- my applications -->
                <?php if($this->session->userdata('loggedin')): ?>
                    <li class="mr-3"> <a href="<?php echo base_url() ?>job-applications" class="text-white text-decoration-none <?= ($currentPath == '/job-applications') ? 'jobnav_active py-2 px-2 rounded-pill' : '' ?> "> My Applications  </a> </li>
                <?php endif; ?>
               
                
                <!-- my profile  -->
                <?php if($this->session->userdata("loggedin")): ?>
                    <li class="mr-3"> <a href="<?php echo base_url() ?>profile" class="text-white text-decoration-none <?= ($currentPath == '/profile') ? 'jobnav_active py-2 px-2 rounded-pill' : '' ?> "> My Profile </a> </li>
                <?php endif; ?>
                
                <!-- register  -->
                <?php if(!$this->session->userdata("loggedin")): ?>
                    <li class=""> <a href="<?php echo base_url() ?>register" class="text-white text-decoration-none <?= ($currentPath == '/register') ? 'jobnav_active py-2 px-2 rounded-pill' : '' ?>"> Register  </a></li>
                <?php endif; ?>
               

                <!-- logout  -->
                <?php if($this->session->userdata('loggedin')): ?>
                    <li class=""> <a href="<?php echo base_url() ?>logout" class="text-white text-decoration-none "> Logout </a> </li>
                <?php endif; ?>
                
            </nav>
            </div>
        </div>
    </section>