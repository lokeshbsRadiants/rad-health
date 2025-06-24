   
<script>
  document.addEventListener("DOMContentLoaded", function () {
    let certCount = 0;
    const maxCerts = 5;
const certOptions = ["ABOR",
"ACLR",
"BLS",
"LPN",
"NBSTSA",
"NIHSS",
"PALS",
"RN",
"Others"];
    const certContainer = document.getElementById("certification-container");
    const addBtn = document.getElementById("add-cert-btn");

    addBtn.addEventListener("click", function () {
      if (certCount >= maxCerts) {
        alert("You can only add up to 5 certifications.");
        return;
      }

      const certIndex = certCount++;

      const certGroup = document.createElement("div");
      certGroup.classList.add("cert-group", "border", "p-3", "mb-3", "rounded", "position-relative");
      certGroup.setAttribute("data-cert-id", certIndex);

      certGroup.innerHTML = `
        <div class="row align-items-start">
          <div class="col-md-5 ">
            <label>Certification Name</label>
            <select name="certifications[${certIndex}][name]" class="form-control mb-1" required>
              <option value="">Select Certification</option>
              ${certOptions.map(option => `<option value="${option}">${option}</option>`).join('')}
            </select>
       
          </div>
          <div class="col-md-5 ">
            <label>Upload Certificate</label>
            <input type="file" name="certifications[${certIndex}][file]" class="form-control" accept=".pdf,.doc,.docx,.jpg,.png,.jpeg" required />
            <p style="color: red; font-size: 12px;" class="m-0 mt-1">File size should not exceed 512KB</p>
          </div>
          <div class="col-md-2 d-flex align-items-center flex-column">
           <label>Remove</label>
            <button type="button" class=" remove-cert btn btn-danger btn-sm">
            <i class="fa fa-trash remove-cert"></i>
            </button>
          </div>
        </div>
      `;

      certContainer.appendChild(certGroup);
    });

    certContainer.addEventListener("click", function (e) {
      if (e.target && e.target.classList.contains("remove-cert")) {
        e.target.closest(".cert-group").remove();
        certCount--;
      }
    });
  });
</script>



   <!---======= Starting Page title ========--->
    <section class=" ">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 col-md-12 col-sm-12 align-self-center mt-5">
                    <h1 class="">Job Board at
RadHealth<sup>+</sup> </h1>
                </div>
            </div>
        </div>
    </section>



    <!---============= Single Service =============--->
    <div class="page-content text-right">


        <section class="section single-service-section1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-6 col-sm-12">
                    <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible " role="alert">
        <?= $this->session->flashdata('error'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success alert-dismissible " role="alert">
        <?= $this->session->flashdata('success'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
                       <h4 class="border border-success  border-left-0 border-right-0 border-top-0 border-bottom-5 pb-3 text-dark"> <?php echo $jobTitle ?></h4>
                       <div class="row justify-content-between px-4">
                            <div class="d-flex flex-column">
                            <p class="mb-0"> Job Id : <?php echo $jobId ?> </p>
                            <p> Job Location : <?php echo $location ?> </p>
                            
                            </div>
                            <div>
                                <?php if(!$this->session->userdata("loggedin")): ?>
                                    <a href="<?php echo base_url() ?>register" class="btn btn-secondary px-2"> Apply by creating / using an account </a>
                                    <button class="btn btn-secondary" data-toggle="modal" data-target="#jobBoardModal" > Quick Apply </button>
                                <?php endif; ?>
                                
                      
                                <a href="<?php echo base_url() ?>job-board" class="btn btn-secondary"> Go Back </a>
                            </div>
                       </div>
                       <input type="text" value="Job Description" readonly class="form-control rounded-0" />

                       <div class="px-3 mt-3 fs-5" style="color: #000 !Important; font-size: 1.1rem;"> <?php echo $jobDescription ?> </div>
                        

                        <?php if($this->session->userdata("loggedin")): ?>

                            <a  href="<?php echo base_url() . "job-board/apply-now/" . $jobId ?>"  
                            class="btn btn-dark text-white px-4 mt-4"> Apply Now </a>

                        <?php else: ?>

                            <button class="btn btn-dark text-white px-4 mt-4" data-toggle="modal" data-target="#jobBoardModal"> Quick Apply </button>

                        <?php endif; ?>

                 

                    </div>
                </div>
  
        </section>
      
    </div>

<!-- modal -->
    <div class="modal " id="jobBoardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    
    >
  <div style="max-width: 700px; z-index: 9999;" class="modal-dialog jobBoard" role="document">
    <div class="modal-content" style="top: 120px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quick Apply</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="max-height: 60vh; overflow-y: auto;"  class="modal-body">
        <form id="quickApplyForm" method="POST" action="<?php echo base_url() ?>job-board/quick-apply" enctype="multipart/form-data"> 
            <!-- first row  -->
            <div class="row justify-content-between">
            <div class="form-group col-12 col-lg-6">
            <label class="form-label"> Full Name: </label>
            <input type="text" class="form-control" name="name" placeholder="Enter your full name" required
            minlength="2"
            value="<?= set_value('name') ?>"

            />
            </div>

            <div class="form-group col-12 col-lg-6">
            <label class="form-label"> Email: </label>
            <input type="email" class="form-control" name="email"  placeholder="Enter your Email " required
            value="<?= set_value('email') ?>"
            />
            </div>
            </div>

            <!-- second row  -->
            <div class="row justify-content-between">
            <div class="form-group col-12 col-lg-6">
            <label class="form-label"> Mobile Number: </label>
            <input type="tel" class="form-control" name="mobile"  placeholder="Enter your Phone Number" required
            value="<?= set_value('mobile') ?>"
            />
            </div>

            <div class="form-group col-12 col-lg-6">
                <label> Resume </label>
                <input type="file" name="resume" class="form-control"  accept=".pdf,.doc,.docx,.txt" required/>
            </div>
            
            <input type="hidden" name="jobId" value="<?php echo  $jobId;  ?>" />
            </div>
            <!-- third row  -->

            <div class="mt-3">
      <label class="form-label"><strong>Certifications (Max 5)</strong></label>
      <div id="certification-container"></div>
        <button type="button"  class="btn btn-sm btn-outline-primary my-2" id="add-cert-btn">Add Certification</button>
       </div>

            <div>
                <textarea name="message"class="form-control" placeholder="Message"  minlength="5"  required></textarea>
            </div>
            <span class="text-muted mt-2 d-block"> We'll never share your details with anyone else. </span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Apply</button>
      </div>
      </form>  
    </div>
  </div>
</div>




