<?php
/**
 * Xtremexteriors functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Xtremexteriors
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}

if ( ! function_exists( 'xtreme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function xtreme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Xtremexteriors, use a find and replace
		 * to change 'xtreme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'xtreme', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'xtreme' ),
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
				'xtreme_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'xtreme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function xtreme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'xtreme_content_width', 640 );
}
add_action( 'after_setup_theme', 'xtreme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function xtreme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'xtreme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'xtreme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'xtreme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function xtreme_scripts() {
	wp_enqueue_style( 'xtreme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'xtreme-style', 'rtl', 'replace' );

	wp_enqueue_style( 'xtreme-bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'xtreme-bootstrap-icons', get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), _S_VERSION );
	wp_enqueue_style( 'boxicons', get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'glightbox', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'swiper-bundle', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css', array(), _S_VERSION );

	wp_enqueue_script( 'xtreme-purecounter', get_template_directory_uri().'/assets/vendor/purecounter/purecounter.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'xtreme-bundle', '//cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'xtreme-glightbox', get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'xtreme-isotope', get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'xtreme-swiper', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'xtreme-validate', get_template_directory_uri().'/assets/vendor/php-email-form/validate.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'xtreme_scripts' );

function get_breadcrumb() {
	echo '<div class="breadcrumb">';
	echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
	$svg_icon = '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z"/></svg>';
	if (is_category() || is_single()) {
		echo $svg_icon;
		the_category(' &bull; ');
		if (is_single()) {
			echo $svg_icon;
			echo "<span class='breadcrumb-title'>".get_the_title()."</span>";
		}
	}
	if (is_archive()) {
		echo $svg_icon;
		echo "<span class='breadcrumb-title'>".post_type_archive_title( '', false )."</span>";
	}
	elseif (is_page()) {
		echo $svg_icon;
		echo "<span class='breadcrumb-title'>".get_the_title()."</span>";
	} elseif (is_search()) {
		echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
		echo '"<em>';
		echo the_search_query();
		echo '</em>"';
	}
	echo '</div>';
}

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
