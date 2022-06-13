<?php 
$postkasse_options = get_option( '_postkasse_options' );

$postkasee__footer_logo = $postkasse_options['footer-logo'];
$postkasee__copyrighttext = $postkasse_options['footer_copyright_text'];
$postkasee__footerheadingtext = $postkasse_options['footer_heading_text'];
$postkasee__footer_middle_description = $postkasse_options['footer_middle_description'];
$postkasee__footer_social_text = $postkasse_options['footer_social_text'];
$postkasee__social_repeter = $postkasse_options['social_repeter'];

?>
<!-- Footer Start -->
    <footer class="bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-py-120">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="text-lg-start text-center footer__logo">
                                    <?php
                                    if( !empty($postkasee__footer_logo)){?>
                                        <img src="<?php echo esc_url( $postkasee__footer_logo['url'] ); ?>" alt="<?php bloginfo(); ?>">
                                        
                                    <?php }
                                    else{?>
                                        <img src="<?php echo esc_url( get_template_directory_uri(). '/assets/images/favicon.png' )?>" alt="<?php bloginfo(); ?>">
                                   <?php } ?>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-6 mt-5 mt-lg-0">
                                <div class="text-lg-start text-center">
                                    <h4 class="footer-head mb-0">
                                        <?php
                                        if( !empty($postkasee__footerheadingtext) ){
                                        echo esc_html__($postkasee__footerheadingtext, 'postkasse');
                                        } ?>
                                    </h4>
                                    <p class="mt-3 para-desc mx-auto mb-0">
                                    <?php
                                        if( !empty($postkasee__footer_middle_description) ){
                                        echo esc_html__($postkasee__footer_middle_description, 'postkasse');
                                        } ?>
                                    </p>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-3 mt-4 mt-lg-0">
                                <div class="text-lg-end text-center">
                                    <h6>
                                    <?php
                                        if( !empty($postkasee__footer_social_text) ){
                                        echo esc_html__($postkasee__footer_social_text, 'postkasse');
                                        } ?>
                                    
                                    </h6>
                                    <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                        <?php 
                                            foreach ($postkasee__social_repeter as $key => $footericon) {
                                                if($footericon['social_status'] == '1')
                                                {
                                                    echo $footericon['social_text_link'];
                                                }
                                            }
                                        ?>
                                    </ul><!--end icon-->
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="footer-py-30 footer-bar">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="text-center">
                            <?php 
                                if( !empty($postkasee__copyrighttext) )
                                {
                                    echo $postkasee__copyrighttext;
                                }
                            ?>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div>
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Modal Content Start -->
    <div class="modal fade" id="contactform" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded shadow border-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo esc_html__('Contact Us', 'postkasse')?> </h5>
                    <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode("[fc id='1'][/fc]"); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Content End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded-pill fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- JAVASCRIPTS -->
    <?php wp_footer(); ?>
    </body>
</html>