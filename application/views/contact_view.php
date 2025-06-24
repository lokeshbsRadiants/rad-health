<!---======= Starting Page title ========--->
<section class="section inner-page-banner contact-page-banner">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-5 col-md-5 col-sm-12 align-self-md-center align-self-start">
                <h1 class="page-title">Contact Us</h1>
            </div>
        </div>
    </div>
</section>
<!---=======  Contract Details Area =========---->
<section class="section contact-details-area">
    <div class="container">
        <h2 class="title-text">LOCATIONS</h2>
        <div class="row mt-4">

            <!-- Registered Office -->
            <div class="col-lg-4 col-md-4 col-sm-12 contact-box" data-aos="fade-up">
                <div class="con-card nobg noborder">
                    <div class="card-location-image">
                        <img src="<?= base_url() ?>assets/images/lazyload-icon.gif" alt="Location"
                             class="img-fluid lazyload shadow"
                             data-src="<?= base_url() ?>assets/uploads/location/5efd792145683_43081.jpg"
                             alt="contact location">
                        <div class="con-office">Registered Office</div>
                    </div>
                    <div class="card-body ml-3">
                        <div class="con-location">Registered Office</div>
                        <div class="flex-grow-1">
                            <address class="mb-2">
                                <!-- <abbr title="address"><strong>RadGov Inc</strong></abbr> -->
                                <ul class="iconlist mb-2 pt-2">
                                    <li><i class="fa fa-map-marker"></i>6750 N. Andrews Ave., Suite 200 Fort Lauderdale, FL 33309</li>
                                    <li><i class="fa fa-phone"></i>954.938.2800</li>
                                    <li><i class="fa fa-fax"></i>954.938.2004</li>
                                    <li><i class="fa fa-envelope"></i>info@radgov.com</li>
                                </ul>
                            </address>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Operating From -->
            <div class="col-lg-4 col-md-4 col-sm-12 contact-box" data-aos="fade-up">
                <div class="con-card nobg noborder">
                    <div class="card-location-image">
                        <img src="<?= base_url() ?>assets/images/lazyload-icon.gif" alt="Location"
                             class="img-fluid lazyload shadow"
                             data-src="<?= base_url() ?>assets/uploads/location/644b7f523fe29_04872.jpg"
                             alt="contact location">
                        <div class="con-office">Operating From</div>
                    </div>
                    <div class="card-body ml-3">
                        <div class="con-location">Operating From</div>
                        <div class="flex-grow-1">
                            <address class="mb-2">
                                <!-- <abbr title="address"><strong>RadGov Inc</strong></abbr> -->
                                <ul class="iconlist mb-2 pt-2">
                                    <li><i class="fa fa-map-marker"></i>101 Morgan Lane, Suite # 304 Plainsboro, NJ 08536</li>
                                    <li><i class="fa fa-phone"></i>954.938.2800</li>
                                    <li><i class="fa fa-fax"></i>954.938.2004</li>
                                    <li><i class="fa fa-envelope"></i>info@radgov.com</li>
                                </ul>
                            </address>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!---============= Start Contact Form Area ============--->
<section class="contact-form-area">
    <div class="container-fluid contact-form" data-aos="fade-up">
        <div class="contact-image">
            <img src="<?php base_url() ?>assets/images/lazyload-icon.gif"
                data-src="<?php base_url() ?>assets/images/icons/icon_contact.jpg" class="img-fluid lazyload"
                alt="rocket_contact" />
        </div>
        <div class="contact-container">
            <form method="post" id="contact_form" action="#">
                <h3 class="mb-4">CONTACT US</h3>
                <div class="row">
                    <div class="col-md-12">
                        <label for="interest">Are you interested in knowing about our services?</label>
                        <div class="cont-toggle">
                            <input type="radio" name="is_interested" value="Yes" id="interested" checked="checked" />
                            <label for="interested">Yes</label>
                            <input type="radio" name="is_interested" value="No" id="notint" />
                            <label for="notint">No</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name *"
                                value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number *"
                                value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Last name *"
                                value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email Address *"
                                value="" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your Message *"
                                style="width: 100%; height: 60px;"></textarea>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="consentCheckbox" required="">
                            <label class="form-check-label" for="consentCheckbox">
                                I Consent To Receive SMS Messages From radgov. Related To Job-Related Offers.
                                Message And Data Rates May Apply. Message
                                Frequency Varies. Reply HELP For Help Or STOP To
                                Cancel. By Signing Up, I Agree To The Privacy Policy
                                Located At radgov.com/privacy-policy.
                            </label>
                        </div>
                        <div class="form-group text-right mb-0">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                </div>
            </form>
            <div class="disclosure"> By providing a telephone number and submitting this form you are consenting to be
                contacted by SMS text message. Message &amp; data rates may apply. You can reply STOP to opt-out of
                further messaging. </div>
        </div>


    </div>
</section>
<style>
.help-block-error {
    color: red;
}

.disclosure {
    font-size: 15px;
    color: #555;
    padding: 10px 30px 20px;
}
</style>