<?php
/**
 * farro01 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package farro01
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
function farro01_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on farro01, use a find and replace
		* to change 'farro01' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'farro01', get_template_directory() . '/languages' );

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



	function create_post_type() {
		register_post_type('services',
			array(
				'labels' => array(
					'name' => __('Услуги'),
					'singular_name' => __('Услуги')
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'Услуги'),
			)
		);
	}
	add_action('init', 'create_post_type');

	function atg_menu_classes($classes, $item, $args) {
		$classes[] = 'menu__item';
		return $classes;
	  }
	  add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
	
	function add_link_classes($atts, $item, $args) {
		$atts['class'] = 'item__link';
		return $atts;
	}
	add_filter('nav_menu_link_attributes', 'add_link_classes', 10, 3);

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Основное', 'farro01' ),
			'menu-2' => esc_html__( 'Подвал', 'farro01' ),
			'menu-3' => esc_html__( 'Услуги', 'farro01' ),
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
			'farro01_custom_background_args',
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
add_action( 'after_setup_theme', 'farro01_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function farro01_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'farro01_content_width', 640 );
}
add_action( 'after_setup_theme', 'farro01_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function farro01_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'farro01' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'farro01' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'farro01_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function farro01_scripts() {
	// wp_enqueue_style( 'farro01-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'farro01-style', 'rtl', 'replace' );

	wp_enqueue_style( 'my-theme-style', get_template_directory_uri() .'/farro/app/css/main.css' );
	wp_enqueue_style( 'my-theme-style', get_template_directory_uri() .'/farro/app/css/swiper-css.css' );
	wp_enqueue_style( 'my-theme-style', get_template_directory_uri() .'/farro/app/css/vendor.css' );
	

	// wp_enqueue_script( 'farro01-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'farro01-navigation', get_template_directory_uri() . '/farro/app/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'farro01-photoswipe', get_template_directory_uri() . '/farro/app/js/vendors-node_modules_photoswipe_dist_photoswipe_esm_js.main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'farro01_scripts' );

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

