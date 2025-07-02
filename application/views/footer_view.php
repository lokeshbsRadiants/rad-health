<!---============= Start Widget Area ============--->
<footer class="footer-area">
    <div class="location-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 mb-md-0 mb-3 ftr-box">
                    <h5 class="ftrhead">Corporate Headquarters</h5>
                    <div class="mb-0 ftr-location">
                        <p>Radhealth+</p>
                        <p>1500 W Cypress Creek Rd, Suite #415</p>
                        <p>Fort Lauderdale, FL 33309</p>
                        <p class=""><strong>Phone:</strong> +1 954-938-2800</p>
                    </div>
                    <br>
                    <h5 class="ftrhead">Follow us on</h5>
                    <div class="social-media-icons col-xs-12">
                        <ul class="list-inline col-xs-12">
                            <a href="https://www.facebook.com/radhealth/" target="_blank"><i class="fa fa-facebook fa-1x"></i></a>
                            <a href="https://x.com/RADHealth_" target="_blank"><i class="fa fa-twitter fa-1x"></i></a>
                            <a href="https://www.linkedin.com/company/radhealth/?viewAsMember=true" target="_blank"><i class="fa fa-linkedin fa-1x"></i></a>
                            <a href="https://www.instagram.com/radhealth_/" target="_blank"><i class="fa fa-instagram fa-1x"></i></a>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-md-0 mb-3 ftr-box">
                    <h5 class="ftrhead">Northeast Operations Center</h5>
                    <div class="mb-0 ftr-location">
                        <p>101 Morgan Lane, Suite 304</p>
                        <p>Plainsboro, NJ 08536</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 text-left pl-md-4">
                    <h5 class="ftrhead pt-3"><a href="<?php echo base_url() ?>service-detail/rad-health" class="ftrhead">Rad Health<sup>+</sup></a></h5>
                    <ul class="list-unstyled ftr-quicklinks">
                        <li><a>Healthcare Staffing solutions.</a></li>
                        <li><a>Healthcare Information Consulting</a></li>
                        <li><a href="<?php echo base_url() ?>payrolling-services">Payrolling Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<div class="footer-secondary">
    <div class="container">
        <hr class="ftrhr">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-4">
                <p class="mb-0">Copyright <?php echo date("Y"); ?>, RadHealth<sup>+</sup>. ALL RIGHTS RESERVED | 
                    <a href="<?php echo base_url() ?>privacy-policy"> Privacy Policy  </a>
                    </p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <p class="mb-0 text-lg-right text-md-right text-left">
                        <span class="text-white">Powered by</span> <a href="" class="ftr-credit" target="_blank">Radgov, Inc </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="mobileShow">
        <table>
            <tbody>
                <tr>
                    <td><a href="tel:+1 (954) 938 2800"><i aria-hidden="true" class="fa facolor fa-phone"></i> Call Us</a></td>
                    <td><a href="mailto:info@radgov.com"><i aria-hidden="true" class="fa facolor fa-envelope"></i>
                            Mail Us</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

</footer>
<!---============= End Widget Area ==============--->
<img src="<?php echo base_url() ?>assets/images/get-in-touch.jpg" style="display:none">
</body>

<!------============= START JS Files ===============------>
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/headhesive.js"></script>
<script src="<?php echo base_url() ?>assets/js/lazyload.js"></script>
<script src="<?php echo base_url() ?>assets/js/asidebar.jquery.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-accordian-menu.js"></script>
<script src="<?php echo base_url() ?>assets/js/aos.js"></script>

<?php if ($page == 'home') { ?>
<script src="<?php echo base_url() ?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/countup.js"></script>
<?php } else if ($page == 'about_us') { ?>
<script src="<?php echo base_url() ?>assets/js/slick.min.js"></script>
<?php } else if ($page == 'contract_vehicles') { ?>
<script src="<?php echo base_url() ?>assets/js/tabs.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap4.min.js"></script>
<?php } else if ($page == 'client') { ?>
<script src="<?php echo base_url() ?>assets/js/tabs.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap4.min.js"></script>
<?php } else if ($page == 'solution') { ?>
<script src="<?php echo base_url() ?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/benefits-slider.js"></script>
<?php } else if ($page == 'contact_us') { ?>
<script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
<?php } ?>
<!------============= END JS Files===============------>


<!---==== Calling JS Plugins ====---->
<script>
////Heder Fixed on Scroll///
var stickyoptions = {
    offset: '#showHere',
    classes: {
        clone: 'banner--clone',
        stick: 'banner--stick',
        unstick: 'banner--unstick'
    }
};

// Initialise with options
var banner = new Headhesive('.header-area', stickyoptions);

////Desktop Menu script
$('.button_container').click(function() {
    $('.jquery-accordion-menu ul ul.submenu').addClass('custommenu');
});
$('.menuclose').click(function() {
    $('.jquery-accordion-menu ul ul.submenu').removeClass('custommenu');
    $('.stage1').css('display', 'none');
    $('.stage2').css('display', 'none');
    $('a').removeClass('submenu-indicator-minus');
});
//// Overlay close with sidebar menu
$('.aside-backdrop').click(function() {
    $('.jquery-accordion-menu ul ul.submenu').removeClass('custommenu');
    $('.stage1').css('display', 'none');
    $('.stage2').css('display', 'none');
    $('a').removeClass('submenu-indicator-minus');
});
/////  Close 2nd stage menu automatically
$('.jquery-accordion-menu>ul>li>a').click(function() {
    $('.submenu.stage2.custommenu').attr('style', 'display: none !important');
    $('a').removeClass('submenu-indicator-minus');
});

//// Homepage IT Services Menu Open
$('.service-link.button_container.homeServelinkIt').click(function() {
    $('.stage1.mainservicelist').css('display', 'flex');
    $('.stage2.subservicelist:first').css('display', 'flex');
});

//// Homepage Workforce Services Menu Open
$('.service-link.button_container.homeServelinkWf').click(function() {
    $('.stage1.mainservicelist').css('display', 'flex');
    $('.stage2.subservicelist').css('display', 'flex');
});


//Highlight Current page menu with javascript
$(document).ready(function() {
    $('a').each(function() {
        if ($(this).prop('href') == window.location.href) {
            $(this).addClass('active');
            $(this).parents('li').addClass('active');
            $(this).parents('a').addClass('active');
        }
    });
});

/////  Lazyload Plugin  //////////////////
lazyload();


/////  Animation On Scroll ///////////////
AOS.init({
    duration: 1000
});

// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200); // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200); // Else fade out the arrow
    }
});
$('#return-to-top').click(function() { // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0 // Scroll to top of body
    }, 500);
});


//// Calling alt tag for images
$(document).ready(function() {
    $('img').each(function() {
        var $img = $(this);
        var filename = $img.attr('src')
        var attr = $(this).attr('alt');
        if (typeof attr == typeof undefined || attr == false) {
            $img.attr('alt', filename.substring(0, filename.lastIndexOf('.')));
            // $img.attr('title', filename.substring((filename.lastIndexOf('/'))+1, filename.lastIndexOf('.')));
            $img.attr('alt', filename.substring((filename.lastIndexOf('/')) + 1, filename.lastIndexOf(
                '.')));
        }
    });
});
</script>

<script>
<?php if ($page == 'home') { ?>
$('.counter').countUp({
    'time': 2000,
    'delay': 10
});
///Certificates Carousel Script
$('.slick-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: false,
    arrows: false,
    autoplaySpeed: 2000,
    speed: 200,
    //asNavFor: '.slider-for',
    dots: true,
    focusOnSelect: false,
    responsive: [{
        breakpoint: 1200,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
            infinite: true,
            dots: true
        }
    }, {
        breakpoint: 992,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }]
});

$('a[data-slide]').click(function(e) {
    e.preventDefault();
    var slideno = $(this).data('slide');
    $('.slick-slider').slick('slickGoTo', slideno - 1);
});

//////// Show clients on hover
// BS tabs hover (instead - hover write - click)
$('.tab-menu a').hover(function(e) {
    e.preventDefault()
    $(this).tab('show');
})


////////Clients Carousel Script
$('.clients-slider').slick({
    slidesToShow: 4,
    rows: 1,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 1000,
    speed: 200,
    //asNavFor: '.slider-for',
    dots: true,
    focusOnSelect: false,
    responsive: [{
        breakpoint: 1200,
        settings: {
            slidesToShow: 4,
            rows: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true
        }
    }, {
        breakpoint: 992,
        settings: {
            slidesToShow: 3,
            rows: 1,
            slidesToScroll: 1
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }]
});

$('a[data-slide]').click(function(e) {
    e.preventDefault();
    var slideno = $(this).data('slide');
    $('.clients-slider').slick('slickGoTo', slideno - 1);
});

var client = $('.home-clients ul li .nav-link.active').attr("href");
$('.client-images p').each(function() {
    if (client === $(this).attr("data-href")) {
        $(this).css("display", "block").delay(1000).fadeIn(500);
    }
});

$('.home-clients li.nav-item').mouseover(function(e) {
    if (e.target.getAttribute("href") !== null) {
        $('.client-images p').each(function() {
            if (e.target.getAttribute("href") === $(this).attr("data-href")) {
                $(this).css("display", "block");
            } else {
                $(this).css("display", "none");
            }
        });
    }
})


<?php } else if ($page == 'about_us') { ?>
$('.timeline-slider').slick({
    slidesToShow: 3,
    adaptiveHeight: true,
    slidesToScroll: 1,
    draggable: true,
    autoplay: false,
    infinite: false,
    arrows: true,
    autoplaySpeed: 2000,
    speed: 800,
    dots: false,
    prevArrow: $('.timeprev'),
    nextArrow: $('.timenext'),
    cssEase: 'linear',
    focusOnSelect: false,
    responsive: [{
        breakpoint: 1200,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
        }
    }, {
        breakpoint: 992,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }]
});

    $('.flip').hover(function(){
        $(this).find('.card').toggleClass('flipped');

 });


<?php } else if ($page == 'solution') { ?>
solutionbenefits();
var slickCarousel = $('.slider-vertical');
slickCarousel.slick({
    dots: false,
    adaptiveHeight: true,
    infinite: false,
    speed: 300,
    centerMode: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    vertical: true,
    verticalSwiping: false,
    centerPadding: '50px',
    arrows: true,
    prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',
    nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>'
});


<?php } else if ($page == 'contract_vehicles') { ?>
    ////// Tabs Action
    (function() {
        [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();


<?php } else if ($page == 'client') { ?>
    ////// Tabs Action
    (function() {
        [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();

$(document).ready(function() {
    $('#federaltable').DataTable();
    $('#statetable').DataTable();
});

$(document).ready(function() {
    $('#currenttable').DataTable();
});

<?php } else if ($page == 'contact_us') { ?>
$("#contact_form").validate({
    errorElement: 'span', //default input error message container
    errorClass: 'help-block help-block-error', // default input error message class
    errorPlacement: function(error, element) {
        if (element.is(':checkbox')) {
            error.insertAfter(element.closest(
                ".md-checkbox-list, .md-checkbox-inline, .checkbox-list, .checkbox-inline"));
        } else if (element.is(':radio')) {
            error.insertAfter(element.closest(
                ".md-radio-list, .md-radio-inline, .radio-list,.radio-inline"));
        } else {
            error.insertAfter(element); // for other inputs, just perform default behavior
        }
    },
    highlight: function(element) { // hightlight error inputs
        $(element)
            .closest('.form-group').addClass('has-error'); // set error class to the control group
    },
    unhighlight: function(element) { // revert the change done by hightlight
        $(element)
            .closest('.form-group').removeClass('has-error'); // set error class to the control group
    },
    success: function(label) {
        label
            .closest('.form-group').removeClass('has-error'); // set success class to the control group
    },
    rules: {
        first_name: {
            required: true
        },
        last_name: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        phone_number: {
            required: true
        },
        message: {
            required: true
        }
    },
    messages: {
        first_name: {
            required: "Please enter First Name"
        },
        last_name: {
            required: "Please enter Last Name"
        },
        email: {
            required: "Please enter email",
            email: "Please enter a valid email"
        },
        phone_number: {
            required: "Please enter Phone Number"
        }
    },
    submitHandler: function(form) {
        var data = $("#contact_form").serializeArray();
        //                page_loader();
        $.post("contact_us/send_email", data, function(data) {
            if (data.result == 1) {
                $("#contact_form")[0].reset();
                alert("Message sent successfully");
            }
            if (data.result == 2) {
                alert("Error!! Please Try again");
            }
        }, "json").fail(function(response) {
            alert("Error!! Please Try again");
        }).always(function() {
            //  close_loader();
        });
    }
});
<?php } ?>
</script>

<script>

</script>

<script src="<?php echo base_url() ?>assets/js/jobboard.js"></script>

</body>

</html>