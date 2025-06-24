
    <!---============= Single Service =============--->
    <div class="page-content">
        <section class="section single-service-section1">
            <div class="container">
                <div class="row align-items-center">
                 
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php if($this->session->flashdata('error')) :  ?>
                        <div class="alert alert-danger alert-dissmissible">
                            <span> <?php echo $this->session->flashdata('error') ?> </span>
                            <button class="close" data-dismiss="alert"> &times </button>
                        </div>

                    <?php endif; ?>
                    <?php if($this->session->flashdata('success')) :  ?>
                        <div class="alert alert-success alert-dissmissible">
                            <span> <?php echo $this->session->flashdata('success') ?> </span>
                            <button class="close" data-dismiss="alert"> &times </button>
                        </div>

                    <?php endif; ?>
                        <h5 class="text-danger mb-5"> Jobs Applied To</h5>
                        <table class="table table-striped mb-5">
                            <thead>
                                <tr>
                                    <td> # </td>
                                    <td> Job ID</td>
                                    <td> Date of Applied</td>
                                    <td> Title </td>
                                    <td> Location</td>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <?php if(isset($applicationsResult)): ?>
                                       <?php foreach($applicationsResult as $index =>  $appliedJob): ?>
                                        <tr>
                                            <td> <?php echo $index +1 ?> </td>
                                            <td> <?php echo $appliedJob['JobID'] ?>  </td>
                                            <td> <?php echo $appliedJob['JobPosted1'] ?> </td>
                                            <td> <?php echo $appliedJob['JobTitle'] ?>  </td>
                                            <td> <?php echo $appliedJob['City'] . ", " . $appliedJob['State'] ?> </td>
                                        </tr>

                                        <?php endforeach; ?>
                                    <?php else: ?>
                                            <p> No Data Found!</p>

                                    <?php endif; ?>



                            </tbody>
                        </table>
                    </div>
                </div>
  
        </section>
      
    </div>