<!---============= Single Service =============--->
<div class="page-content">
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
                    <!-- <form id="searchByKeyword" method="post">  -->
                    <form method="post" action="<?php echo base_url() ?>job-board">
                        <label> Keywords: </label>
                        <input type="text" class="form-control" placeholder="Enter your search here" name="keyword" />

                        <input type="hidden" name="type" value="keyword" />

                        <small class="text-muted"> Keywords can include skills or job titles. If using multiple
                            keywords, insert 'or' or 'and' in between for best results (e.g. Java or Oracle)</small>
                        <button class="btn btn-danger d-block mt-4" type="submit"> Search </button>
                        <span id="apiResponse"> </span>
                    </form>
                </div>
            </div>
            <div class="row mt-5">
                <!-- for job filter -->
                <div class="col-3 ">
                    <span
                        class="border border-danger border-right-0 border-left-0 border-top-0 border-bottom-2  d-block mb-4 ">
                        Job Filter </span>
                    <!-- <form id="searchByFilter" > -->
                    <form method="post" action="<?php echo base_url() ?>job-board">
                        <div class="form-group">
                            <label> Country </label>
                            <select name="country" class="form-control">
                                <option value="" selected> All </option>
                                <option value="india"> India </option>
                                <option value="usa"> USA </option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="form-group col-8">
                                <label> Zip code: </label>
                                <input type="text" name="zipcode" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label> within: </label>
                                <select name="miles" class="form-control">
                                    <option value="" selected> All </option>
                                    <option value="5"> 5 mi </option>
                                    <option value="10"> 10 mi </option>
                                    <option value="15"> 15 mi </option>
                                    <option value="20"> 20 mi </option>
                                    <option value="25"> 25 mi </option>
                                    <option value="30"> 30 mi </option>
                                </select>
                            </div>
                            <input type="hidden" name="type" value="filter" />
                        </div class="">
                        <button class="btn btn-danger "> Search </button>
                    </form>



                </div>
                <!-- for search results  -->
                <div class="col-8">
                    <div class="w-100">
                        <span
                            class="border border-danger border-right-0 border-left-0 border-top-0 border-bottom-2  d-block mb-4 ">

                            <?php echo isset($result) && is_array($result) && count($result) > 0 ? count($result) : 0; ?>
                            Jobs </span>

                    </div>

                    <div class="d-flex gap-5 flex-column">


                        <!-- <h6> No match found !</h6> -->


                        <?php if (isset($result) && !empty($result)): ?>
                            <?php foreach ($result as $res): ?>

                                <form method="post" action="<?php echo base_url() ?>job-board/details">
                                    <h5> <?php echo $res['JobTitle'] ?> </h5>
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center mr-3 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                                width="20px" fill="#777" class="">
                                                <path
                                                    d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z" />
                                            </svg>
                                            <?php echo $res['JobPosted'] ?>
                                        </div>
                                        <div class="d-flex align-items-center mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                                width="20px" fill="#777" class="">
                                                <path
                                                    d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                                            </svg>
                                            <span class="mt-0 mb-0">
                                                <?php echo $res['JobID'] ?> </span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                                width="20px" fill="#777" class="">
                                                <path
                                                    d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z" />
                                            </svg>

                                            <span class="mt-0 mb-0"> <?php echo $res['City'] . ", " . $res['State'] ?>
                                            </span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="jobID" value="<?php echo $res['JobID'] ?>" />
                                    <button type="submit" class="btn btn-danger mt-3"> Details </button>


                                </form>

                                <hr>



                            <?php endforeach; ?>




                        <?php else: ?>
                            <h6> No Data Found </h6>

                        <?php endif; ?>

                    </div>


                    <!-- <h5> Repair Service Associate 1 </h5>
                                <div class="d-flex" >
                                <div class="d-flex align-items-center mr-3 "> 
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#777"
                                class=""
                                ><path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/></svg>    
                                09/24/2024</div>
                                <div class="d-flex align-items-center mr-3"> 
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#777"
                                class=""
                                ><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
                                <span class="mt-0 mb-0"> 201885 </span>
                                </div>  
                            <div class="d-flex align-items-center"> 
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#777"
                                class=""
                                ><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>    
                                
                                <span class="mt-0 mb-0"> Bangalore  </span> 
                            </div>
                            </div>
                            <button class="btn btn-danger mt-3"> Details </button>
                            </div>

                            <hr>  -->



                </div>


            </div>


        </div>
    </section>

</div>