<!---============= Single Service =============--->
<div class="page-content">
    <section class="section single-service-section1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-md-flex d-block">

                    <div class="profile_tabs col-3  d-flex flex-md-column flex-row mr-md-3 flex-shrink-0">
                        <button class="btn btn-success  py-2 mb-md-3 profile_tab_btn" data-tab="1"> View / Edit My
                            Profile </button>
                        <button class="btn btn-outline-success  py-2 mb-md-3 profile_tab_btn" data-tab="2"> My Password
                        </button>
                        <button class="btn btn-outline-success  py-2 mb-md-3 profile_tab_btn" data-tab="3"> My Resume
                        </button>
                    </div>

                    <div class="col-9 border border-2 p-0 ">
                        <div class="tab_content w-100" data-tab="1">
                            <?php if ($this->session->flashdata('error')): ?>
                            <div class="alert alert-danger alert-dismissibile">
                                <?php echo $this->session->flashdata('error') ?>
                                <button class="close" data-dismiss="alert"> &times; </button>
                            </div>

                            <?php endif; ?>
                            <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success alert-dismissibile">
                                <?php echo $this->session->flashdata('success') ?>
                                <button class="close" data-dismiss="alert"> &times; </button>
                            </div>

                            <?php endif; ?>
                            <p class="bg-secondary text-white px-3 py-2  mb-4"> Personal Info: </p>
                            <form action="<?php echo base_url() ?>update-profile" method="post" class="px-3 py-3"
                                id="updateProfileForm">

                                <!-- first row  -->
                                <div class="d-block d-md-flex">
                                    <div class="form-group flex-fill mr-md-3">
                                        <label class="form-label"> First Name: </label>
                                        <input type="text" class="form-control" name="firstname"
                                            value="<?= isset($userInfo) ? $userInfo['Firstname'] : '' ?>" required
                                            minlength="2" />
                                    </div>
                                    <div class="form-group flex-fill">
                                        <label class="form-label"> Last Name: </label>
                                        <input type="text" class="form-control" name="lastname"
                                            value="<?= isset($userInfo) ? $userInfo['lastname'] : '' ?>" />
                                    </div>
                                </div>

                                <!-- 2nd row -->
                                <div class="d-block d-md-flex">
                                    <div class="form-group flex-fill mr-md-3">
                                        <label class="form-label"> Email: </label>
                                        <input type="text" class="form-control" name="email"
                                            value="<?php echo $this->session->userdata('email') ?>" readonly />

                                    </div>
                                    <div class="form-group flex-fill">
                                        <label class="form-label"> Mobile Number: </label>
                                        <input type="text" class="form-control" name="mobile"
                                            value="<?= isset($userInfo) ? $userInfo['cellphone'] : '' ?>"
                                            pattern="\d{10}" minlength="10" maxlength="10" />
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="form-label"> Address 1: </label>
                                    <input type="text" class="form-control" name="address1"
                                        value="<?= isset($userInfo) ? $userInfo['address1'] : '' ?>" required
                                        minlength="5" />
                                </div>


                                <div class="form-group">
                                    <label class="form-label"> Address 2: </label>
                                    <input type="text" class="form-control" name="address2"
                                        value="<?= isset($userInfo) ? $userInfo['address2'] : "" ?>" />
                                </div>
                                <div class="d-block d-md-flex">
                                    <div class="form-group flex-fill mr-md-3">
                                        <label class="form-label"> Country </label>
                                        <input type="text" name="country" class="form-control"
                                            value="<?= isset($userInfo) ? $userInfo['country'] : "" ?>" required />
                                    </div>
                                    <div class="form-group flex-fill">
                                        <label class="form-label"> City : </label>
                                        <input type="text" class="form-control" name="city"
                                            value="<?= isset($userInfo) ? $userInfo['city'] : "" ?>" required />
                                    </div>
                                </div>

                                <!-- last row -->
                                <div class="d-block d-md-flex">
                                    <div class="form-group flex-fill mr-md-3">
                                        <label class="form-label"> State: </label>
                                        <input type="text" name="state" class="form-control"
                                            value="<?= isset($userInfo) ? $userInfo['state'] : "" ?>" required />

                                    </div>
                                    <div class="form-group flex-fill">
                                        <label class="form-label"> Zip Code : </label>
                                        <input type="text" class="form-control" name="zipcode"
                                            value="<?= isset($userInfo) ? $userInfo['zipcode'] : "" ?>" required />
                                    </div>
                                </div>

                                <!-- 3rd row  -->
                                <div class="d-block d-md-flex">
                                    <div class="form-group flex-fill mr-md-3">
                                        <label class="form-label"> Current Salary : </label>
                                        <input type="text" class="form-control" name="current_salary"
                                            value="<?= isset($userInfo) ? $userInfo['CurrentSalary'] : "" ?>" />
                                    </div>
                                    <div class="form-group flex-fill">
                                        <label class="form-label"> current salaray type: </label>
                                        <select name="current_salary_type" class="form-control"
                                            value="<?= isset($userInfo) ? $userInfo['CurrentSalarytype'] : "" ?>">
                                            <option value="" selected disabled> Select Salary Type </option>
                                            <option value="$/Hour"> $/Hour </option>
                                            <option value="$/Day"> $/Day </option>
                                            <option value="$/Month"> $/Month </option>
                                            <option value="$/Year"> $/Year </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- 4rd row  -->
                                <div class="d-block d-md-flex">
                                    <div class="form-group flex-fill mr-md-3">
                                        <label class="form-label"> prefered Salary : </label>
                                        <input type="text" class="form-control" name="prefered_salary"
                                            value="<?= isset($userInfo) ? $userInfo['PreferredSalary'] : "" ?>" />
                                    </div>
                                    <div class="form-group flex-fill">
                                        <label class="form-label"> prefered salaray type: </label>
                                        <select name="prefered_salary_type" class="form-control"
                                            value="<?= isset($userInfo) ? $userInfo['PreferredSalarytype'] : "" ?>">
                                            <option value="" selected disabled> Select Salary Type </option>
                                            <option value="$/Hour"> $/Hour </option>
                                            <option value="$/Day"> $/Day </option>
                                            <option value="$/Month"> $/Month </option>
                                            <option value="$/Year"> $/Year </option>
                                        </select>
                                    </div>
                                </div>







                                <!-- Education Section  -->
                                <div class="">
                                    <p
                                        class="bg-secondary text-white py-2 rounded-2 px-2 d-flex justify-content-between">
                                        Education:
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                            width="24px" style="cursor:pointer;" id="add_education" fill="#e8eaed">
                                            <title> Add Education </title>
                                            <path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z" />
                                        </svg>
                                    </p>
                                    <!-- 1 set  -->
                                    <div class="education_container">
                                        <?php if (isset($userInfo) && !empty($userInfo['Education'])): ?>
                                            <?php foreach ($userInfo['Education'] as $index => $edu): ?>
                                                <div class="position-relative education_info">

                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 -960 960 960" width="24px" fill="red" class="close_education"
                                                        style="position:absolute; right:0; cursor:pointer; ">
                                                        <path
                                                            d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                                                    </svg>

                                                    <!-- first row  -->
                                                    <div class="d-block d-md-flex">
                                                        <div class="form-group flex-fill mr-md-3">
                                                            <label class="form-label"> School Name : </label>
                                                            <input type="text" class="form-control" name="school_name[]"
                                                                value="<?= $edu["School"] ?>" required />
                                                        </div>
                                                        <div class="form-group flex-fill">
                                                            <label class="form-label"> Educational Program : </label>
                                                            <input type="text" class="form-control" name="educational_program[]"
                                                                value="<?= $edu["EducationalProgram"] ?>" required />
                                                        </div>
                                                    </div>
                                                    <!-- 2nd row -->
                                                    <div class="d-block d-md-flex">
                                                        <div class="form-group flex-fill mr-md-3">
                                                            <label class="form-label"> Year : </label>
                                                            <input type="number" class="form-control" name="year[]"
                                                                value="<?= $edu["Year"] ?>" required />
                                                        </div>
                                                        <div class="form-group flex-fill">
                                                            <label class="form-label"> Major : </label>
                                                            <input type="text" class="form-control" name="major[]"
                                                                value="<?= $edu["Major"] ?>" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                        <?php endif; ?>

                                    </div>

                                </div>

                                <!-- Experience Section  -->

                                <div class="">
                                    <p
                                        class="bg-secondary text-white py-2 rounded-2 px-2 d-flex justify-content-between">
                                        Experience:
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                            width="24px" style="cursor:pointer;" id="add_experience" fill="#e8eaed">
                                            <title> Add Experience </title>
                                            <path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z" />
                                        </svg>
                                    </p>
                                    <!-- 1 set  -->
                                    <div id="experience_container">

                                        <?php if (!empty($userInfo['Experience']) && isset($userInfo)): ?>
                                            <?php foreach ($userInfo['Experience'] as $index => $exp): ?>
                                                <div class="experience_info position-relative">

                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 -960 960 960" width="24px" fill="red"
                                                        class="close_experience"
                                                        style="position:absolute; right:0; cursor:pointer; ">
                                                        <path
                                                            d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                                                    </svg>
                                                    <div class="d-block d-md-flex">
                                                        <div class="form-group flex-fill mr-md-3">
                                                            <label class="form-label"> Company Name : </label>
                                                            <input type="text" class="form-control" name="company_name[]"
                                                                value="<?= $exp['company'] ?>" required />
                                                        </div>
                                                        <div class="form-group flex-fill">
                                                            <label class="form-label"> title, Skills, Certifications : </label>
                                                            <input type="text" class="form-control" name="experience_title[]"
                                                                value="<?= $exp['Titles'] . $exp['skills'] . $exp['Certifications'] ?>"
                                                                required />
                                                        </div>
                                                    </div>

                                                    <div class="d-block d-md-flex">
                                                        <div class="form-group flex-fill mr-md-3">
                                                            <label class="form-label"> From : </label>
                                                            <input type="text" class="form-control" name="fromDate[]"
                                                                value="<?php echo $exp['fromDate'] ?>" required />
                                                        </div>
                                                        <div class="form-group flex-fill">
                                                            <label class="form-label"> To : </label>
                                                            <input type="text" class="form-control" name="toDate[]"
                                                                value="<?php echo $exp['toDate'] ?>" required />
                                                        </div>
                                                    </div>
                                                    <label> Description </label>
                                                    <textarea name="experience_description[]"
                                                        class="form-control"><?php echo $exp['description'] ?></textarea>
                                                </div>
                                            <?php endforeach; ?>

                                        <?php endif; ?>

                                    </div>

                                </div>
                                <!-- Additional Info -->
                                <div>

                                    <p class="bg-secondary text-white px-2 py-2  mb-4"> Additional Information </p>
                                    <div class="d-block d-md-flex">
                                        <div class="form-group flex-fill mr-md-3">
                                            <label class="form-label"> Legal First Name: </label>
                                            <input type="text" class="form-control" name="legal_first"
                                                value="<?= isset($userInfo) ? $userInfo['AdditionalInfoLegalFirstName'] : '' ?>" />
                                        </div>
                                        <div class="form-group flex-fill">
                                            <label class="form-label"> Legal Last Name: </label>
                                            <input type="text" class="form-control" name="legal_last"
                                                value="<?= isset($userInfo) ? $userInfo['AdditionalInfoLegalLastName'] : '' ?>" />
                                        </div>
                                    </div>
                                    <div class="d-block d-md-flex">
                                        <div class="form-group flex-fill mr-md-3">
                                            <label class="form-label"> Legal Street Address: </label>
                                            <input type="text" class="form-control" name="legal_street_address"
                                                value="<?= isset($userInfo) ? $userInfo['AdditionalInfoStreetAddress'] : '' ?>" />
                                        </div>
                                        <div class="form-group flex-fill">
                                            <label class="form-label"> City: </label>
                                            <input type="text" class="form-control" name="legal_city"
                                                value="<?= isset($userInfo) ? $userInfo['AdditionalInfoCity'] : '' ?>" />
                                        </div>
                                    </div>
                                    <div class="d-block d-md-flex">
                                        <div class="form-group flex-fill mr-md-3">
                                            <label class="form-label"> Legal State: </label>
                                            <input type="text" class="form-control" name="legal_state"
                                                value="<?= isset($userInfo) ? $userInfo['AdditionalInfoState'] : '' ?>" />
                                        </div>
                                        <div class="form-group flex-fill">
                                            <label class="form-label"> Legal Zip code: </label>
                                            <input type="text" class="form-control" name="legal_zipcode"
                                                value="<?= isset($userInfo) ? $userInfo['AdditionalInfoZipCode'] : '' ?>" />
                                        </div>
                                    </div>

                                </div>

                                <!-- <input type="hidden" name="education_count"id="edu_count" value="<?php echo isset($userInfo) && isset($userInfo['Education']) ? count($userInfo['Education']) : 0 ?>"/> -->
                                <!-- <input type="hidden" name="experience_count" id="exp_count" value="<?php echo isset($userInfo) && isset($userInfo['Experience']) ? count($userInfo['Experience']) : 0 ?>"/> -->


                                <button type="submit" class="btn btn-danger mt-5 px-4"> Update Profile </button>


                            </form>
                        </div>

                        <div class="tab_content tab_hide" data-tab="2">
                            <div>
                                <p class="bg-secondary text-white px-3 py-2  mb-4"> Change your password </p>
                                <form action="<?php echo base_url() ?>update-password" method="post" class="px-3">


                                    <label class="form-label"> Password </label>
                                    <input type="password" name="password" class="form-control mb-3" required
                                        minlength="8" />

                                    <label class="form-label"> Confirm Password </label>
                                    <input type="password" name="confirmPassword" class="form-control mb-3" required
                                        minlength="8" />

                                    <button class="btn btn-danger px-4 text-uppercase mb-3"> update password </button>

                                </form>
                            </div>

                        </div>

                        <div class="tab_content tab_hide" data-tab="3">
                            <div>
                                <p class="bg-secondary text-white px-3 py-2  mb-4"> My Resume: </p>
                                <div class="px-3">

                                    <?php if (isset($resumes) && !empty($resumes)) ?>
                                    <div>
                                        <ul>
                                            <?php foreach ($resumes as $resume): ?>
                                                <li>
                                                    <?php $fileName = explode(' ', $resume->FileName)
                                                        ?>
                                                    <p>
                                                        <?php echo $fileName[1] ?>
                                                        <span> <a href="<?php echo $resume->URL ?>"> View Resume </a>
                                                        </span>
                                                    </p>

                                                </li>
                                            <?php endforeach; ?>

                                        </ul>

                                    </div>

                                    <?php ?>
                                    <a href="<?php echo base_url() ?>upload-resume"
                                        class="btn btn-danger px-4 text-uppercase mb-3"> add new resume </a>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

</div>


<script>

    // event propogation  for tabs
    const profileTabEl = document.querySelector(".profile_tabs");
    const tabContentsEl = document.querySelectorAll('.tab_content');
    const profileTabBtnsEl = document.querySelectorAll(".profile_tab_btn")



    profileTabEl.addEventListener('click', function (e) {
        if (!e.target.classList.contains('profile_tab_btn')) {
            return;
        }

        profileTabBtnsEl.forEach(b => {
            b.classList.add('btn-outline-success');
            b.classList.remove('btn-success');
            b.classList.remove('text-white')
        })
        e.target.classList.add('btn-success');
        e.target.classList.add('text-white')

        let tabNo = e.target.dataset.tab;
        tabContentsEl.forEach(tab => {
            tab.classList.add('tab_hide');
            tab.classList.remove('tab_show');
            if (tab.dataset.tab == tabNo) {
                tab.classList.remove('tab_hide');
                tab.classList.add('tab_show');
            }
        })

    })

    // event propogation for education details
    const addEducationEl = document.querySelector('#add_education');
    const educationContainer = document.querySelector('.education_container');







    educationContainer.addEventListener('click', function (e) {
        if (!e.target.classList.contains('close_education')) {
            return;
        }
        e.target.parentElement.remove();

    })



    addEducationEl.addEventListener('click', function (e) {
        let html = `<div class="position-relative education_info">

<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="red"
class="close_education"
style="position:absolute; right:0; cursor:pointer; "
><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>

    <!-- first row  -->
    <div class="d-block d-md-flex"> 
<div class="form-group flex-fill mr-md-3">
<label class="form-label"> School Name : </label>
<input type="text"  class="form-control" name="school_name[]"  />
</div>
<div class="form-group flex-fill">
<label class="form-label"> Educational Program : </label>
<input type="text" class="form-control"  name="educational_program[]"  />
</div>
</div>
<!-- 2nd row -->
<div class="d-block d-md-flex"> 
<div class="form-group flex-fill mr-md-3">
<label class="form-label"> Year  : </label>
<input type="number"  class="form-control" name="year[]"  />
</div>
<div class="form-group flex-fill">
<label class="form-label"> Major : </label>
<input type="text" class="form-control"  name="major[]" />
</div>
</div>    
</div>
`;


        educationContainer.insertAdjacentHTML('beforeend', html);

    })


    // Experience 
    const experienceContainer = document.querySelector('#experience_container');
    const addExperienceEl = document.querySelector('#add_experience');
    let experienceCount = 1;

    // remove the  single experience 
    experienceContainer.addEventListener('click', (e) => {
        if (!e.target.classList.contains('close_experience')) {
            return;
        }
        e.target.parentElement.remove();

    })

    // add a single experience
    addExperienceEl.addEventListener('click', (e) => {

        let html = `<div class="experience_info position-relative">
<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="red"
class="close_experience"
style="position:absolute; right:0; cursor:pointer; "
><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
    <div class="d-block d-md-flex"> 
<div class="form-group flex-fill mr-md-3">
<label class="form-label"> Company Name : </label>
<input type="text"  class="form-control" name="company_name[]"  />
</div>
<div class="form-group flex-fill">
<label class="form-label"> title, Skils, Certifications  : </label>
<input type="text" class="form-control"  name="experiene_title[]"  />
</div>
</div>

<div class="d-block d-md-flex"> 
<div class="form-group flex-fill mr-md-3">
<label class="form-label"> From  : </label>
<input type="date"  class="form-control" name="fromDate[]"  />
</div>
<div class="form-group flex-fill">
<label class="form-label"> To : </label>
<input type="date" class="form-control"  name="toDate" />
</div>
</div>  
<label> Description </label>
<textarea name="experience_description[]" class="form-control"></textarea>  
</div>`;

        experienceContainer.insertAdjacentHTML('beforeend', html);

    })

    // form submission





</script>



<!-- Education Template -->
<!-- 
<div class="position-relative education_info">

<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="red"
class="close_education"
style="position:absolute; right:0; cursor:pointer; "
><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>


    <div class="d-block d-md-flex"> 
<div class="form-group flex-fill mr-md-3">
<label class="form-label"> School Name : </label>
<input type="text"  class="form-control" name="school_name_${educationCount}"  />
</div>
<div class="form-group flex-fill">
<label class="form-label"> Educational Program : </label>
<input type="text" class="form-control"  name="educational_program_${educationCount}"  />
</div>
</div>

<div class="d-block d-md-flex"> 
<div class="form-group flex-fill mr-md-3">
<label class="form-label"> Year  : </label>
<input type="text"  class="form-control" name="year_${educationCount}"  />
</div>
<div class="form-group flex-fill">
<label class="form-label"> Major : </label>
<input type="password" class="form-control"  name="major_${educationCount}" />
</div>
</div>    
</div> -->

<!-- <div class="experience_info position-relative">

<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="red"
class="close_experience"
style="position:absolute; right:0; cursor:pointer; "
><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
    <div class="d-block d-md-flex"> 
<div class="form-group flex-fill mr-md-3">
<label class="form-label"> Company Name : </label>
<input type="text"  class="form-control" name="company_name_1"  />
</div>
<div class="form-group flex-fill">
<label class="form-label"> title, Skils, Certifications  : </label>
<input type="text" class="form-control"  name="experiene_title_1"  />
</div>
</div>

<div class="d-block d-md-flex"> 
<div class="form-group flex-fill mr-md-3">
<label class="form-label"> From  : </label>
<input type="date"  class="form-control" name="from_1"  />
</div>
<div class="form-group flex-fill">
<label class="form-label"> To : </label>
<input type="date" class="form-control"  name="to_1" />
</div>
</div>  
<label> Description </label>
<textarea name="experience_description_1" class="form-control"></textarea>  
</div> -->