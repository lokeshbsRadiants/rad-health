<!---============= Single Service =============--->
<div class="page-content">
    <section class="section single-service-section1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger alert-dissmissible">
                        <span>
                            <?php echo $this->session->flashdata('error') ?>
                        </span>
                        <button class="close" data-dismiss="alert"> &times; </button>
                    </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success alert-dissmissible">
                        <span>
                            <?php echo $this->session->flashdata('success') ?>
                        </span>
                        <button class="close" data-dismiss="alert"> &times; </button>
                    </div>

                    <?php endif; ?>

                    <form method="post" action="<?php echo base_url() ?>jobauth/forgot-password">
                        <h5> Forgot Password: </h5>
                        <hr />

                        <div class="form-group">
                            <label class="form-label"> Email: </label>
                            <input type="email" name="email" placeholder="Enter your email"
                                value="<?= set_value('email') ?>" class="form-control" required />
                        </div>




                        <button type="submit" class="btn btn-danger text-uppercase mt-4"> Request </button>

                    </form>


                </div>
            </div>

    </section>

</div>