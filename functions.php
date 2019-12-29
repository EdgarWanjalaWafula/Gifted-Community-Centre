<?php
/**
 * Gifted Community Center functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gifted_Community_Center
 */

if ( ! function_exists( 'gifted_community_center_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gifted_community_center_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Gifted Community Center, use a find and replace
		 * to change 'gifted-community-center' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gifted-community-center', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'gifted-community-center' ),
			'menu-2' => esc_html__( 'Footer Menu', 'gifted-community-center' ),
			'menu-3' => esc_html__( 'Mobile Side Menu', 'gifted-community-center' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'gifted_community_center_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'gifted_community_center_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gifted_community_center_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gifted_community_center_content_width', 640 );
}
add_action( 'after_setup_theme', 'gifted_community_center_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gifted_community_center_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gifted-community-center' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gifted-community-center' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title"><span>',
		'after_title'   => '</span></h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Programs Sidebar', 'gifted-community-center' ),
		'id'            => 'program-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'gifted-community-center' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title"><span>',
		'after_title'   => '</span></h6>',
	) );
}
add_action( 'widgets_init', 'gifted_community_center_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gifted_community_center_scripts() {
	wp_enqueue_style( 'gifted-community-center-gallery-css', 'https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css' );
	wp_enqueue_style( 'gifted-community-center-ionicons', 'https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css' );
	wp_enqueue_style( 'gifted-community-center-flaticon', get_template_directory_uri() . '/icons/font/flaticon.css' );
	wp_enqueue_style( 'gifted-community-center-owl', get_template_directory_uri() . '/css/owl.carousel.min.css' );
	wp_enqueue_style( 'gifted-community-center-owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'gifted-community-center-aos', get_template_directory_uri() . '/css/aos.css' );
	wp_enqueue_style( 'gifted-community-center-base', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'gifted-community-center-animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'gifted-community-center-style', get_stylesheet_uri() );
	wp_enqueue_style( 'gifted-community-center-mobile', get_template_directory_uri() . '/css/mobile.css' );
	wp_enqueue_style( 'gifted-community-center-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Roboto:400,500,700&display=swap' );
	wp_enqueue_script( 'gifted-community-center-popper', get_template_directory_uri() . '/js/popper.min.js', array(), '', true );
	wp_enqueue_script( 'gifted-community-center-base-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'gifted-community-center-aos', get_template_directory_uri() . '/js/aos.js', array(), '', true );
	wp_enqueue_script( 'gifted-community-center-owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true );
	wp_enqueue_script( 'gifted-community-center-scrollax', get_template_directory_uri() . '/js/scrollax.min.js', array(), '', true );
	wp_enqueue_script( 'gifted-community-center-parallax', get_template_directory_uri() . '/js/parallax.min.js', array(), '', true );
	wp_enqueue_script( 'gifted-community-center-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );
	wp_enqueue_script( 'gifted-community-center-gallery-js', 'https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js', array(), '', true );
	wp_enqueue_script( 'gifted-community-center-main', get_template_directory_uri() . '/js/main.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gifted_community_center_scripts' );

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
 * Customizer additions.
 */
require get_template_directory() . '/inc/bs4navwalker.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
