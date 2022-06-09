<?php get_header(); ?>
	<body <?php body_class(); ?>>
        <!-- Navbar Start -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
				<a class="logo" href="<?php echo site_url(); ?>">
					<img src="<?php echo esc_url( get_template_directory_uri(). '/assets/images/logo-dark.png' ); ?>" class="logo-light-mode" alt="">
					<img src="<?php echo esc_url( get_template_directory_uri(). '/assets/images/logo-light.png' ); ?>" class="logo-dark-mode" alt="">
				</a>
                <!-- Logo End -->

                <!-- Start navbar Toggle-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
                <!-- End navbar Toggle-->

                <!--Login button Start-->
                <ul class="buy-button list-inline mb-0">
                    <li class="list-inline-item ps-1 mb-0">
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#contactform">
                            <span class="btn btn-primary d-none d-md-block"><i class="uil uil-phone"></i> Contact</span>
                            <span class="btn btn-icon btn-pills btn-primary d-md-none d-inline-flex"><i class="uil uil-phone"></i></span>
                        </a>
                    </li>
                </ul>
                <!--Login button End-->
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
					<?php 
						wp_nav_menu( 
							array(
								'theme_location'	=>	'menu-1',
								'menu_id'			=>	'navmenu-nav',
								'menu_class'		=>	'navigation-menu',

							)	
						);
					?>
                   <!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        <!-- Start Hero -->
        <section class="bg-half-170 d-table w-100" id="home">
            <div class="container">
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="title-heading">
                            <img src="images/logo-icon-32.png" alt="">
                            <h6 class="text-primary fw-normal mt-4">We are a very dedicated team</h6>
                            <h4 class="heading mb-4">We are a full-service in <span class="text-primary typewrite" data-period="2000" data-type='[ "Agency", "Software", "Technology", "Studio", "Webapps" ]'> <span class="wrap"></span> </span></h4>
                            <p class="text-muted para-desc mb-0">We collaborate with people, teams, and businesses to develop design systems, strategies, and processes to do a better creative work everyday.</p>
                        
                            <div class="mt-4">
                                <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon btn-pills btn-primary lightbox"><i data-feather="video" class="fea icon-sm"></i></a><span class="fw-normal align-middle ms-2">Watch Now</span>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 offset-lg-1 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="row g-3 align-items-center">
                            <div class="col-lg-5 col-6">
                                <div class="row g-3">
                                    <div class="col-lg-12 col-md-12">
                                        <img src="<?php echo esc_url( get_template_directory_uri(). '/assets/images/digital/02.jpg' ); ?>" class="img-fluid rounded-md" alt="work-image">
                                    </div><!--end col-->
    
                                    <div class="col-lg-12 col-md-12 text-end">
                                        <img src="<?php echo esc_url( get_template_directory_uri(). '/assets/images/square/square-warning.png' ); ?>" class="avatar avatar-medium img-fluid rounded-md" alt="work-image">
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end col-->

                            <div class="col-lg-7 col-6">
                                <img src="<?php echo esc_url( get_template_directory_uri(). '/assets/images/digital/01.jpg' ); ?>" class="img-fluid rounded-md" alt="work-image">
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="section" id="service">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-4">Agency Features</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Start working with Fronter that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card border-0 text-center features feature-success feature-clean">
                            <div class="icons bg-lg text-center mx-auto">
                                <i class="uil uil-airplay d-block rounded-lg h2 mb-0"></i>
                            </div>
                            <div class="content mt-4 pt-2">
                                <h5 class="mb-3">Digital Marketing</h5>
                                <p class="text-muted mb-0">The phrasal sequence of the Lorem Ipsum text is now so that many DTP programmes can generate</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card border-0 text-center features feature-danger feature-clean">
                            <div class="icons bg-lg text-center mx-auto">
                                <i class="uil uil-presentation-play d-block rounded-lg h2 mb-0"></i>
                            </div>
                            <div class="content mt-4 pt-2">
                                <h5 class="mb-3">Video Production</h5>
                                <p class="text-muted mb-0">The phrasal sequence of the Lorem Ipsum text is now so that many DTP programmes can generate</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card border-0 text-center features feature-info feature-clean">
                            <div class="icons bg-lg text-center mx-auto">
                                <i class="uil uil-mobile-android d-block rounded-lg h2 mb-0"></i>
                            </div>
                            <div class="content mt-4 pt-2">
                                <h5 class="mb-3">Web & Mobile</h5>
                                <p class="text-muted mb-0">The phrasal sequence of the Lorem Ipsum text is now so that many DTP programmes can generate</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card border-0 text-center features feature-warning feature-clean">
                            <div class="icons bg-lg text-center mx-auto">
                                <i class="uil uil-crop-alt d-block rounded-lg h2 mb-0"></i>
                            </div>
                            <div class="content mt-4 pt-2">
                                <h5 class="mb-3">UX Design</h5>
                                <p class="text-muted mb-0">The phrasal sequence of the Lorem Ipsum text is now so that many DTP programmes can generate</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            
            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="row g-3 align-items-center">
                            <div class="col-lg-7 col-6">
                                <img src="<?php echo esc_url( get_template_directory_uri(). '/assets/images/digital/03.jpg'); ?>" class="img-fluid rounded-md" alt="work-image">
                            </div><!--end col-->
                            
                            <div class="col-lg-5 col-6">
                                <div class="row g-3">
                                    <div class="col-lg-12 col-md-12">
                                        <img src="<?php echo esc_url( get_template_directory_uri(). '/assets/images/digital/04.jpg'); ?>" class="img-fluid rounded-md" alt="work-image">
                                    </div><!--end col-->
    
                                    <div class="col-lg-12 col-md-12">
                                        <img src="<?php echo esc_url( get_template_directory_uri(). '/assets/images/square/square-success.png'); ?>" class="avatar avatar-medium img-fluid rounded-md" alt="work-image">
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->

                    <div class="col-lg-5 offset-lg-1 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title">
                            <h6 class="text-primary fw-normal mb-2">Web and mobile development</h6>
                            <h4 class="title mb-4">Analyze your entire market <br> pricing & stock availability</h4>
                            <p class="text-muted para-desc mb-0">Start working with Fronter that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        
                            <div class="mt-4">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#contactform" class="btn btn-primary">Contact us</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="section pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="video-solution-cta position-relative z-index-1">
                            <!-- <div class="bg-half-260 d-table w-100 rounded" data-jarallax='{"speed": 0.5}' style="background: url('images/digital/cta.jpg');"> -->
                            <div class="position-relative">
                                <img src="<?php echo esc_url( get_template_directory_uri(). '/assets/images/digital/cta.jpg' ); ?>" class="img-fluid rounded-md shadow-lg" alt="">
                                <div class="play-icon">
                                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox">
                                        <i class="mdi mdi-play text-primary rounded-circle bg-white shadow-lg"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="content mt-md-4 pt-md-2">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div class="row align-items-center">
                                            <div class="col-md-6 mt-4 pt-2">
                                                <div class="section-title text-md-start">
                                                    <h6 class="text-white-50 fw-normal">Fronter Agency</h6>
                                                    <h4 class="title text-white title-dark mb-0">We are a full-service <br> digital company</h4>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-md-6 col-12 mt-4 pt-md-2">
                                                <div class="section-title text-md-start">
                                                    <p class="text-white-50 para-desc">Start working with Fronter that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                                    <a href="javascript:void(0)" class="text-white title-dark">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row -->
                <div class="feature-posts-placeholder bg-primary"></div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

		<?php get_footer(); ?>