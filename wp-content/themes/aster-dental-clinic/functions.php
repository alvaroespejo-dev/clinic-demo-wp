<?php
/**
 * Aster Dental Clinic functions and definitions
 *
 * @link https://developer.WordPress.org/themes/basics/theme-functions/
 *
 * @package aster_dental_clinic
 */

$aster_dental_clinic_theme_data = wp_get_theme();
if( ! defined( 'ASTER_DENTAL_CLINIC_THEME_VERSION' ) ) define ( 'ASTER_DENTAL_CLINIC_THEME_VERSION', $aster_dental_clinic_theme_data->get( 'Version' ) );
if( ! defined( 'ASTER_DENTAL_CLINIC_THEME_NAME' ) ) define( 'ASTER_DENTAL_CLINIC_THEME_NAME', $aster_dental_clinic_theme_data->get( 'Name' ) );
if( ! defined( 'ASTER_DENTAL_CLINIC_THEME_TEXTDOMAIN' ) ) define( 'ASTER_DENTAL_CLINIC_THEME_TEXTDOMAIN', $aster_dental_clinic_theme_data->get( 'TextDomain' ) );

if ( ! defined( 'ASTER_DENTAL_CLINIC_VERSION' ) ) {
	define( 'ASTER_DENTAL_CLINIC_VERSION', '1.0.0' );
}

if ( ! function_exists( 'aster_dental_clinic_setup' ) ) :
	
	function aster_dental_clinic_setup() {
		
		load_theme_textdomain( 'aster-dental-clinic', get_template_directory() . '/languages' );

		add_theme_support( 'woocommerce' );

		add_theme_support( 'automatic-feed-links' );
		
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'aster-dental-clinic' ),
			)
		);

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
				'woocommerce',
			)
		);

		add_theme_support( 'post-formats', array(
			'image',
			'video',
			'gallery',
			'audio', 
		) );

		add_theme_support(
			'custom-background',
			apply_filters(
				'aster_dental_clinic_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		add_theme_support( 'align-wide' );

		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'aster_dental_clinic_setup' );

function aster_dental_clinic_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aster_dental_clinic_content_width', 640 );
}
add_action( 'after_setup_theme', 'aster_dental_clinic_content_width', 0 );

function aster_dental_clinic_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'aster-dental-clinic' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'aster-dental-clinic' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title"><span>',
			'after_title'   => '</span></h2>',
		)
	);

	// Regsiter 4 footer widgets.
	$aster_dental_clinic_footer_widget_column = get_theme_mod('aster_dental_clinic_footer_widget_column','4');
	for ($i=1; $i<=$aster_dental_clinic_footer_widget_column; $i++) {
		register_sidebar( array(
			'name' => __( 'Footer  ', 'aster-dental-clinic' )  . $i,
			'id' => 'aster-dental-clinic-footer-widget-' . $i,
			'description' => __( 'The Footer Widget Area', 'aster-dental-clinic' )  . $i,
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<div class="widget-header"><h4 class="widget-title">',
			'after_title' => '</h4></div>',
		) );
	}
}
add_action( 'widgets_init', 'aster_dental_clinic_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aster_dental_clinic_scripts() {
	// Append .min if SCRIPT_DEBUG is false.
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	// Slick style.
	wp_enqueue_style( 'aster-dental-clinic-slick-style', get_template_directory_uri() . '/resource/css/slick' . $min . '.css', array(), '1.8.1' );

	// Fontawesome style.
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri())."/resource/css/fontawesome-all.css" );

	// Main style.
	wp_enqueue_style( 'aster-dental-clinic-style', get_template_directory_uri() . '/style.css', array(), ASTER_DENTAL_CLINIC_VERSION );

	// RTL style.
	wp_style_add_data('aster-dental-clinic-style', 'rtl', 'replace');

	if (get_theme_mod('aster_dental_clinic_enable_animation', true) == true){
		// Animate CSS
		wp_enqueue_style( 'animate-style', get_template_directory_uri() . '/resource/css/animate.css' );
		// Wow script.
		wp_enqueue_script( 'wow-jquery', get_template_directory_uri() . '/resource/js/wow.js', array('jquery'),'' ,true );
	}

	// Navigation script.
	wp_enqueue_script( 'aster-dental-clinic-navigation-script', get_template_directory_uri() . '/resource/js/navigation' . $min . '.js', array(), ASTER_DENTAL_CLINIC_VERSION, true );

	// Slick script.
	wp_enqueue_script( 'aster-dental-clinic-slick-script', get_template_directory_uri() . '/resource/js/slick' . $min . '.js', array( 'jquery' ), '1.8.1', true );


	// Custom script
	wp_enqueue_script( 'aster-dental-clinic-custom-script', get_template_directory_uri() . '/resource/js/custom.js', array( 'jquery' ), ASTER_DENTAL_CLINIC_VERSION, true );

	// Localize the sticky header setting
	$aster_dental_clinic_enable_sticky_header = get_theme_mod('aster_dental_clinic_enable_sticky_header', false);
	wp_localize_script( 'aster-dental-clinic-custom-script', 'stickyHeaderSettings', array(
		'isEnabled' => $aster_dental_clinic_enable_sticky_header,
	));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Include the file.
	require_once get_theme_file_path( 'theme-library/function-files/wptt-webfont-loader.php' );

	// Load the webfont.
	wp_enqueue_style(
		'poppins',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' ),
		array(),
		'1.0'
	);

	wp_enqueue_style(
		'raleway',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap' ),
		array(),
		'1.0'
	);

}
add_action( 'wp_enqueue_scripts', 'aster_dental_clinic_scripts' );

//Change number of products per page 
add_filter( 'loop_shop_per_page', 'aster_dental_clinic_products_per_page' );
function aster_dental_clinic_products_per_page( $cols ) {
  	return  get_theme_mod( 'aster_dental_clinic_products_per_page',9);
}

// Change number or products per row 
add_filter('loop_shop_columns', 'aster_dental_clinic_loop_columns');
	if (!function_exists('aster_dental_clinic_loop_columns')) {
	function aster_dental_clinic_loop_columns() {
		return get_theme_mod( 'aster_dental_clinic_products_per_row', 3 );
	}
}

/**
 * Include wptt webfont loader.
 */
require_once get_theme_file_path( 'theme-library/function-files/wptt-webfont-loader.php' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/theme-library/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/theme-library/function-files/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/theme-library/function-files/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/theme-library/customizer.php';

/**
 * Breadcrumb
 */
require get_template_directory() . '/theme-library/function-files/class-breadcrumb-trail.php';

/**
 * Getting Started
*/
require get_template_directory() . '/theme-library/getting-started/getting-started.php';

/**
* Load TGM.
*/
require get_template_directory() . '/resource/tgm/tgm.php';

/**
 * Google Fonts
 */
require get_template_directory() . '/theme-library/function-files/google-fonts.php';

/**
 * Dynamic CSS
 */
require get_template_directory() . '/theme-library/dynamic-css.php';

/**
 * Theme Wizard
*/
add_action( 'init', 'aster_dental_clinic_load_theme_wizard' );
function aster_dental_clinic_load_theme_wizard() {
    require get_parent_theme_file_path( '/theme-wizard/config.php' );
}

function aster_dental_clinic_links_setup() {
	if ( ! defined( 'ASTER_DENTAL_CLINIC_PREMIUM_PAGE' ) ) {
	define('ASTER_DENTAL_CLINIC_PREMIUM_PAGE',__('https://asterthemes.com/products/dentist-WordPress-theme','aster-dental-clinic'));
	}
	if ( ! defined( 'ASTER_DENTAL_CLINIC_THEME_PAGE' ) ) {
		define('ASTER_DENTAL_CLINIC_THEME_PAGE',__('https://asterthemes.com/products/aster-dental-clinic','aster-dental-clinic'));
	}
	if ( ! defined( 'ASTER_DENTAL_CLINIC_SUPPORT' ) ) {
	define('ASTER_DENTAL_CLINIC_SUPPORT',__('https://WordPress.org/support/theme/aster-dental-clinic/','aster-dental-clinic'));
	}
	if ( ! defined( 'ASTER_DENTAL_CLINIC_REVIEW' ) ) {
	define('ASTER_DENTAL_CLINIC_REVIEW',__('https://WordPress.org/support/theme/aster-dental-clinic/reviews/','aster-dental-clinic'));
	}
	if ( ! defined( 'ASTER_DENTAL_CLINIC_PRO_DEMO' ) ) {
	define('ASTER_DENTAL_CLINIC_PRO_DEMO',__('https://demo.asterthemes.com/aster-dental-clinic/','aster-dental-clinic'));
	}
	if ( ! defined( 'ASTER_DENTAL_CLINIC_THEME_DOCUMENTATION' ) ) {
	define('ASTER_DENTAL_CLINIC_THEME_DOCUMENTATION',__('https://demo.asterthemes.com/docs/aster-dental-clinic-free/','aster-dental-clinic'));
	}
	if ( ! defined( 'ASTER_DENTAL_CLINIC_PREMIUM_DOCUMENTATION' ) ) {
	define('ASTER_DENTAL_CLINIC_PREMIUM_DOCUMENTATION',__('https://demo.asterthemes.com/docs/aster-dental-clinic-pro/','aster-dental-clinic'));
	}
	if ( ! defined( 'ASTER_DENTAL_CLINIC_BUNDLE_PAGE' ) ) {
		define('ASTER_DENTAL_CLINIC_BUNDLE_PAGE',__('https://asterthemes.com/products/wp-theme-bundle','aster-dental-clinic'));
	}
}
add_action('after_setup_theme', 'aster_dental_clinic_links_setup');

/**
 * Customizer Settings Functions
*/
require get_template_directory() . '/theme-library/function-files/customizer-settings-functions.php';

// Enqueue Customizer live preview script
function aster_dental_clinic_customizer_live_preview() {
    wp_enqueue_script(
        'aster-dental-clinic-customizer',
        get_template_directory_uri() . '/resource/js/customizer.js',
        array('jquery', 'customize-preview'),
        '',
        true
    );
}
add_action('customize_preview_init', 'aster_dental_clinic_customizer_live_preview');

// Featured Image Dimension
function aster_dental_clinic_blog_post_featured_image_dimension(){
	if(get_theme_mod('aster_dental_clinic_blog_post_featured_image_dimension') == 'custom' ) {
		return true;
	}
	return false;
}

add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );

// Reset all theme settings
function aster_dental_clinic_reset_demo_import_settings() {
    if (current_user_can('manage_options')) {
        // List only demo import-related settings to reset
		remove_theme_mod('aster_dental_clinic_header_button_label_');
		remove_theme_mod('aster_dental_clinic_header_button_link_');
		remove_theme_mod('aster_dental_clinic_contact_number');
		remove_theme_mod('aster_dental_clinic_menu_custom_button_url');
		remove_theme_mod('aster_dental_clinic_banner_short_heading');
		remove_theme_mod('aster_dental_clinic_banner_button_label_');
		remove_theme_mod('aster_dental_clinic_banner_button_link_');
		remove_theme_mod('aster_dental_clinic_banner_second_button_label_');
		remove_theme_mod('aster_dental_clinic_banner_second_button_link_');
		remove_theme_mod('aster_dental_clinic_about_heading');
		remove_theme_mod('aster_dental_clinic_about_text');
		remove_theme_mod('aster_dental_clinic_about_button_label');
		remove_theme_mod('aster_dental_clinic_about_button_link');
		remove_theme_mod('aster_dental_clinic_about_left_image_1');
		remove_theme_mod('aster_dental_clinic_about_left_image_2');
		remove_theme_mod('aster_dental_clinic_enable_service_section');
		remove_theme_mod('aster_dental_clinic_enable_banner_section');
		
        wp_send_json_success(array('message' => __('Demo import settings have been reset.', 'aster-dental-clinic')));
    } else {
        wp_send_json_error(array('message' => __('Permission denied.', 'aster-dental-clinic')));
    }
}
add_action('wp_ajax_aster_dental_clinic_reset_demo_import_settings', 'aster_dental_clinic_reset_demo_import_settings'); 