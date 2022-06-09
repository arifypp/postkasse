<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package postkasse
 */

 /************************************************************************/
// Theme data from admin panel
/***************************************************************************/
$postkasse_options = get_option( '_postkasse_options' );
$postkasse_mainlogo = $postkasse_options['main-logo']['url'];
$postkasse_favicon = $postkasse_options['main-favicon']['url'];
$postkasse_contact_btn_text = $postkasse_options['header_left_btn_text'];
$postkasse_contact_btn_icon = $postkasse_options['header_left_btn_icon'];

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="description" content="Responsive HTML5 Template" />
	<meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean" />
	<meta name="author" content="Shreethemes" />
	<meta name="website" content="https://shreethemes.in" />
	<meta name="email" content="support@shreethemes.in" />
	<meta name="version" content="1.0.0" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Custom Favicons -->
	<link rel="shortcut icon" href="<?php echo esc_url($postkasse_favicon); ?>"/>
	<link rel="apple-touch-icon" href="<?php echo esc_url($postkasse_favicon); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Navbar Start -->
	<header id="topnav" class="defaultscroll sticky">
		<div class="container">
			<!-- Logo container-->
			<a class="logo" href="<?php echo site_url(); ?>">
				<img src="<?php echo esc_url($postkasse_mainlogo); ?>" class="logo-light-mode" alt="">
				<img src="<?php echo esc_url( $postkasse_mainlogo ); ?>" class="logo-dark-mode" alt="">
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
						<span class="btn btn-primary d-none d-md-block"><i class="uil uil-phone"></i> <?php echo esc_html__($postkasse_contact_btn_text, 'postkasse'); ?></span>
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