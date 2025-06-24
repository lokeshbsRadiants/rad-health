
    <!---============= Single Service =============--->
    <div class="page-content">
        <section class="section single-service-section1">
            <div class="container">

                <?php if($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger alert-dismissible">

                    <button class="close" data-dismiss="alert"> 
                            &times;
                        </button>
                        <span class="mb-0"> <?php echo $this->session->flashdata('error') ?> </span>
                
                    </div>
                <?php endif; ?>

                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-6 col-sm-12">
                    <p class="text-muted mb-5">Powerful job match functions, easy one-click applications, and your saved resumes –– all in one place. </p>
                    <form action="<?php echo base_url()  ?>register" method="post">
                        <p class="bg-danger text-white px-3 py-2 text-center mb-4"> Quick Registration</p>
                        <!-- first row  -->
                        <div class="d-block d-md-flex"> 
                        <div class="form-group flex-fill mr-md-3">
                            <label class="form-label"> First Name: </label>
                            <input type="text" class="form-control" name="firstname" value="<?= set_value('firstname'); ?>" 
                            minlength="2"
                  
                            />

        
                        </div>
                        <div class="form-group flex-fill">
                            <label class="form-label"> Last Name: </label>
                            <input type="text" class="form-control"name="lastname"value=" <?= set_value('lastname') ?>" 
                            
                            />
                        </div>
                        </div>

                        <!-- 2nd row -->
                        <div class="d-block d-md-flex">
                        <div class="form-group flex-fill mr-md-3">
                            <label class="form-label"> Email: </label>
                            <input type="email" class="form-control"name="email"value="<?= set_value('email') ?>" 
                            required
                            />
                        </div>
                        <div class="form-group flex-fill">
                            <label class="form-label"> Mobile Number: </label>
                            <input type="text" class="form-control" name="mobile" value="<?= set_value("mobile") ?>"
                            pattern="\d{10}" 
                            minlength="10" 
                            maxlength="10" 

                            required
                            />
                        </div>

         
                        </div>

                        <!-- 3rd row  -->
                        <div class="d-block d-md-flex"> 
                        <div class="form-group flex-fill mr-md-3">
                            <label class="form-label"> Password: </label>
                            <input type="password"  class="form-control" name="password"  value="<?= set_value("password") ?>" 
                            pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" 
                            title="Must contain at least one uppercase letter, one lowercase letter, one number, and one special character, and be at least 8 characters long."
                            required
                            />
                        </div>
                        <div class="form-group flex-fill">
                            <label class="form-label"> Confirm Password: </label>
                            <input type="password" class="form-control"  name="confirmpassword" value="<?= set_value("confirmpassword") ?>" 
                            required
                            minlength="8"
                            />
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label"> Address 1: </label>
                            <input type="text" class="form-control" name="address1" value="<?= set_value("address1") ?>" 
                            minlength="2"
                            required
                            />
                        </div>

                        
                        <div class="form-group">
                            <label class="form-label"> Address 2: </label>
                            <input type="text" class="form-control" name="address2" value="<?= set_value("address2") ?>" />
                        </div>
                        <div class="d-block d-md-flex"> 
                        <div class="form-group flex-fill mr-md-3">
                            <label class="form-label"> Country </label>
                            <select name="country" class="form-control" 
                            required
                            >
                                <option value="" selected disabled> Please select </option>
                                <option value="india"> India </option>
                                <option value="usa"> USA </option>
                                <option value="canada"> Canada </option>
                                <option value="italy"> Italy </option>
                                <option value="belgium"> Belguim </option>
                                <option value="denmark"> Denmark </option>
                                <option value="germany"> Germany </option>
                                <option value="ireland"> Ireland </option>
                                <option value="netherlands"> Netherlands </option>
                                <option value="romania"> Romania </option>
                                <option value="sweden"> Sweden </option>
                                <option value="switzerland"> switzerland </option>
                                <option value="uk"> Uk </option>
                                
                            </select>
                        </div>
                        <div class="form-group flex-fill">
                            <label class="form-label"> City : </label>
                            <input type="text" class="form-control" name="city" value="<?= set_value("city") ?>"
                            minlength="2"
                            required

                            />
                        </div> 
                        </div>

                        <!-- last row -->
                        <div class="d-block d-md-flex"> 
                        <div class="form-group flex-fill mr-md-3">
                            <label class="form-label"> State:  </label>
                            <input type="text" name="state" class="form-control" 
                            required
                            />
                            <!-- <select name="state" class="form-control">
                                <option value="" selected disabled> Please select </option>
                                <option value="india"> Karnataka </option>
                                <option value="usa"> Tamil Nadu </option>
                                <option value="canada"> Kerala </option>
                                <option value="italy"> Andhra Pradesh </option>
                            </select> -->
                        </div>
                        <div class="form-group flex-fill">
                            <label class="form-label"> Zip Code : </label>
                            <input type="text" class="form-control" name="zipcode" value="<?= set_value("zipcode") ?>" 
                            required
                            />
                        </div> 
                        </div>

                        <button type="submit" class="btn btn-danger mt-5 px-4"> Register </button>
                        
                        



                    </form>

                    </div>
                </div>
  
        </section>
      
    </div>