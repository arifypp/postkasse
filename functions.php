<?php
/**
 * postkasse functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package postkasse
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function postkasse_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on postkasse, use a find and replace
		* to change 'postkasse' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'postkasse', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'postkasse' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'postkasse_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'postkasse_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function postkasse_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'postkasse_content_width', 640 );
}
add_action( 'after_setup_theme', 'postkasse_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function postkasse_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'postkasse' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'postkasse' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'postkasse_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function postkasse_scripts() {

	wp_enqueue_style( 'postkasse-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'postkasse-style', 'rtl', 'replace' );
	// Bootstrap css
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all' );
	// Tiny Slider css
	wp_enqueue_style( 'tinyslider-style', get_template_directory_uri() . '/assets/css/tiny-slider.css', array(), '1.0', 'all' );
	// Tobii css
	wp_enqueue_style( 'tobii-min-style', get_template_directory_uri() . '/assets/css/tobii.min.css', array(), '1.0', 'all' );
	// Materrial design icon css
	wp_enqueue_style( 'materialdesignicon-style', get_template_directory_uri() . '/assets/css/materialdesignicons.min.css', array(), '1.0', 'all' );
	// Unicons icon css
	wp_enqueue_style( 'unicons-style', 'https://unicons.iconscout.com/release/v4.0.0/css/line.css', array(), '1.0', 'all' );
	// Wp style css
	wp_enqueue_style( 'themestyle-min-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.0', 'all' );
	// Colors css
	wp_enqueue_style( 'color-orange-style', get_template_directory_uri() . '/assets/css/colors/orange.css', array(), '1.0', 'all' );
	
	// Boostrap js
	wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0', true );
	// Polyfiles js
	wp_enqueue_script( 'polyfiles-scripts', get_template_directory_uri() . '/assets/js/gumshoe.polyfills.min.js', array(), '1.0', true );
	// Contact js
	wp_enqueue_script( 'contact-scripts', get_template_directory_uri() . '/assets/js/contact.js', array(), '1.0', true );
	// Tiny Slider
	wp_enqueue_script( 'tiny-slider-scripts', get_template_directory_uri() . '/assets/js/tiny-slider.js', array(), '1.0', true );
	// Parallax js
	wp_enqueue_script( 'parallax-scripts', get_template_directory_uri() . '/assets/js/parallax.js', array(), '1.0', true );
	// Tobii js
	wp_enqueue_script( 'tobiimin-scripts', get_template_directory_uri() . '/assets/js/tobii.min.js', array(), '1.0', true );
	// shuffle.min.js
	wp_enqueue_script( 'shufflemin-scripts', get_template_directory_uri() . '/assets/js/shuffle.min.js', array(), '1.0', true );
	// feather min js
	wp_enqueue_script( 'feathermin-scripts', get_template_directory_uri() . '/assets/js/feather.min.js', array(), '1.0', true );
	// Custom js
	wp_enqueue_script( 'custom-js-scripts', get_template_directory_uri() . '/assets/js/plugins.init.js', array(), '1.0', true );
	// app.js
	wp_enqueue_script( 'app-js-scripts', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0', true );

	wp_enqueue_script( 'postkasse-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'postkasse_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Add class on menu list items
 */

function atg_menu_classes($classes, $item, $args) {
	if($args->theme_location == 'menu-1') {
	  $classes[] = 'has-submenu';
	}
	return $classes;
  }
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

/**
 *
 * Codestar Framework
 * A Simple and Lightweight WordPress Option Framework for Themes and Plugins
 *
 */
require_once get_theme_file_path() .'/inc/codestar-framework.php';