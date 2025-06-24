
</div>
<footer class="m-grid__item		m-footer ">
    <div class="m-container m-container--fluid m-container--full-height m-page__container">
        <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                <span class="m-footer__copyright">
                    <?php echo date("Y"); ?> &copy; All Rights Reserved by 
                    <a href="<?php echo base_url(); ?>" class="m-link">
                        RADgov
                    </a>
                </span>
            </div>
        </div>
    </div>
</footer>

<!-- end::Footer -->
</div>
<div id="m_scroll_top" class="m-scroll-top" data-toggle="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<script src="<?php echo base_url() ?>assets/admin/js/vendors.bundle.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/admin/js/scripts.bundle.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap-sweetalert/sweetalert.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/summernote.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/admin.js" type="text/javascript"></script>
<?php if ($page == "certification") { ?>
    <script src="<?php echo base_url(); ?>assets/admin/js/file-uploader/js/file-uploader.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/file-uploader/js/file-custom.js" type="text/javascript"></script>
<?php } else if ($page == "about_us") { ?>
    <script src="<?php echo base_url(); ?>assets/admin/js/file-uploader/js/file-uploader.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/file-uploader/js/file-custom.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/summernote.js"></script>
    <script>
        $('.summernote').summernote({
            height: "250px",
            focus: false
        });
    </script>
<?php } ?>
<script>
    $(".m-topbar__user-profile").on("click", function () {
        $(".m-topbar__user-profile").toggleClass("m-dropdown--open");
//        setTimeout(function () {
//            console.log('click2');
//            $(".m-topbar__user-profile").toggleClass("m-dropdown--open");
//        }, 10);
    });
</script>
</body>
</html>