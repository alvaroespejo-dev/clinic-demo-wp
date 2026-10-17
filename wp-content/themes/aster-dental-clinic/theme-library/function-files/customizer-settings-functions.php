<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package aster_dental_clinic
 */

function aster_dental_clinic_customize_css() {
    ?>
    <style type="text/css">
        :root {
            --primary-color: <?php echo esc_html( get_theme_mod( 'aster_dental_clinic_primary_color', '#5ea7ff' ) ); ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'aster_dental_clinic_customize_css' );

function aster_dental_clinic_enqueue_selected_fonts() {
    $aster_dental_clinic_fonts_url = aster_dental_clinic_get_fonts_url();
    if (!empty($aster_dental_clinic_fonts_url)) {
        wp_enqueue_style('aster-dental-clinic-google-fonts', $aster_dental_clinic_fonts_url, array(), null);
    }
}
add_action('wp_enqueue_scripts', 'aster_dental_clinic_enqueue_selected_fonts');

function aster_dental_clinic_layout_customizer_css() {
    $aster_dental_clinic_margin = get_theme_mod('aster_dental_clinic_layout_width_margin', 50);
    ?>
    <style type="text/css">
        body.site-boxed--layout #page  {
            margin: 0 <?php echo esc_attr($aster_dental_clinic_margin); ?>px;
        }
    </style>
    <?php
}
add_action('wp_head', 'aster_dental_clinic_layout_customizer_css');

function aster_dental_clinic_blog_layout_customizer_css() {
    // Retrieve the blog layout option
    $aster_dental_clinic_blog_layout_option = get_theme_mod('aster_dental_clinic_blog_layout_option_setting', 'Left');

    // Initialize custom CSS variable
    $aster_dental_clinic_custom_css = '';

    // Generate custom CSS based on the layout option
    if ($aster_dental_clinic_blog_layout_option === 'Default') {
        $aster_dental_clinic_custom_css .= '.mag-post-detail { text-align: center; }';
    } elseif ($aster_dental_clinic_blog_layout_option === 'Left') {
        $aster_dental_clinic_custom_css .= '.mag-post-detail { text-align: left; }';
    } elseif ($aster_dental_clinic_blog_layout_option === 'Right') {
        $aster_dental_clinic_custom_css .= '.mag-post-detail { text-align: right; }';
    }

    // Output the combined CSS
    ?>
    <style type="text/css">
        <?php echo wp_kses($aster_dental_clinic_custom_css, array( 'style' => array(), 'text-align' => array() )); ?>
    </style>
    <?php
}
add_action('wp_head', 'aster_dental_clinic_blog_layout_customizer_css');

function aster_dental_clinic_sidebar_width_customizer_css() {
    $aster_dental_clinic_sidebar_width = get_theme_mod('aster_dental_clinic_sidebar_width', '30');
    ?>
    <style type="text/css">
        .right-sidebar .asterthemes-wrapper .asterthemes-page {
            grid-template-columns: auto <?php echo esc_attr($aster_dental_clinic_sidebar_width); ?>%;
        }
        .left-sidebar .asterthemes-wrapper .asterthemes-page {
            grid-template-columns: <?php echo esc_attr($aster_dental_clinic_sidebar_width); ?>% auto;
        }
    </style>
    <?php
}
add_action('wp_head', 'aster_dental_clinic_sidebar_width_customizer_css');

if ( ! function_exists( 'aster_dental_clinic_get_page_title' ) ) {
    function aster_dental_clinic_get_page_title() {
        $aster_dental_clinic_title = '';

        if (is_404()) {
            $aster_dental_clinic_title = esc_html__('Page Not Found', 'aster-dental-clinic');
        } elseif (is_search()) {
            $aster_dental_clinic_title = esc_html__('Search Results for: ', 'aster-dental-clinic') . esc_html(get_search_query());
        } elseif (is_home() && !is_front_page()) {
            $aster_dental_clinic_title = esc_html__('Blogs', 'aster-dental-clinic');
        } elseif (function_exists('is_shop') && is_shop()) {
            $aster_dental_clinic_title = esc_html__('Shop', 'aster-dental-clinic');
        } elseif (is_page()) {
            $aster_dental_clinic_title = get_the_title();
        } elseif (is_single()) {
            $aster_dental_clinic_title = get_the_title();
        } elseif (is_archive()) {
            $aster_dental_clinic_title = get_the_archive_title();
        } else {
            $aster_dental_clinic_title = get_the_archive_title();
        }

        return apply_filters('aster_dental_clinic_page_title', $aster_dental_clinic_title);
    }
}

if ( ! function_exists( 'aster_dental_clinic_has_page_header' ) ) {
    function aster_dental_clinic_has_page_header() {
        // Default to true (display header)
        $aster_dental_clinic_return = true;

        // Custom conditions for disabling the header
        if ('hide-all-devices' === get_theme_mod('aster_dental_clinic_page_header_visibility', 'all-devices')) {
            $aster_dental_clinic_return = false;
        }

        // Apply filters and return
        return apply_filters('aster_dental_clinic_display_page_header', $aster_dental_clinic_return);
    }
}

if ( ! function_exists( 'aster_dental_clinic_page_header_style' ) ) {
    function aster_dental_clinic_page_header_style() {
        $aster_dental_clinic_style = get_theme_mod('aster_dental_clinic_page_header_style', 'default');
        return apply_filters('aster_dental_clinic_page_header_style', $aster_dental_clinic_style);
    }
}

function aster_dental_clinic_page_title_customizer_css() {
    $aster_dental_clinic_layout_option = get_theme_mod('aster_dental_clinic_page_header_layout', 'left');
    ?>
    <style type="text/css">
        .asterthemes-wrapper.page-header-inner {
            <?php if ($aster_dental_clinic_layout_option === 'flex') : ?>
                display: flex;
                justify-content: space-between;
                align-items: center;
            <?php else : ?>
                text-align: <?php echo esc_attr($aster_dental_clinic_layout_option); ?>;
            <?php endif; ?>
        }
    </style>
    <?php
}
add_action('wp_head', 'aster_dental_clinic_page_title_customizer_css');

function aster_dental_clinic_pagetitle_height_css() {
    $aster_dental_clinic_height = get_theme_mod('aster_dental_clinic_pagetitle_height', 50);
    ?>
    <style type="text/css">
        header.page-header {
            padding: <?php echo esc_attr($aster_dental_clinic_height); ?>px 0;
        }
    </style>
    <?php
}
add_action('wp_head', 'aster_dental_clinic_pagetitle_height_css');

function aster_dental_clinic_site_logo_width() {
    $aster_dental_clinic_site_logo_width = get_theme_mod('aster_dental_clinic_site_logo_width', 200);
    ?>
    <style type="text/css">
        .site-logo img {
            max-width: <?php echo esc_attr($aster_dental_clinic_site_logo_width); ?>px;
        }
    </style>
    <?php
}
add_action('wp_head', 'aster_dental_clinic_site_logo_width');

function aster_dental_clinic_menu_font_size_css() {
    $aster_dental_clinic_menu_font_size = get_theme_mod('aster_dental_clinic_menu_font_size', 16);
    ?>
    <style type="text/css">
        .main-navigation a {
            font-size: <?php echo esc_attr($aster_dental_clinic_menu_font_size); ?>px;
        }
    </style>
    <?php
}
add_action('wp_head', 'aster_dental_clinic_menu_font_size_css');

//Menu Font Weight
function aster_dental_clinic_menu_font_weight_css() {
	$aster_dental_clinic_font_weight = get_theme_mod( 'aster_dental_clinic_menu_font_weight', 500);

	$aster_dental_clinic_custom_css = "
		.main-navigation a {
		    font-weight: {$aster_dental_clinic_font_weight};
		}
	";

	wp_add_inline_style( 'aster-dental-clinic-style', $aster_dental_clinic_custom_css );
}
add_action( 'wp_enqueue_scripts', 'aster_dental_clinic_menu_font_weight_css' );

// Featured Image Dimension
function aster_dental_clinic_custom_featured_image_css() {
    $aster_dental_clinic_dimension = get_theme_mod('aster_dental_clinic_blog_post_featured_image_dimension', 'default');
    $aster_dental_clinic_width = get_theme_mod('aster_dental_clinic_blog_post_featured_image_custom_width', '');
    $aster_dental_clinic_height = get_theme_mod('aster_dental_clinic_blog_post_featured_image_custom_height', '');
    
    if ($aster_dental_clinic_dimension === 'custom' && $aster_dental_clinic_width && $aster_dental_clinic_height) {
        $aster_dental_clinic_custom_css = "body:not(.single-post) .mag-post-single .mag-post-img img { width: {$aster_dental_clinic_width}px !important; height: {$aster_dental_clinic_height}px !important; }";
        wp_add_inline_style('aster-dental-clinic-style', $aster_dental_clinic_custom_css);
    }
}
add_action('wp_enqueue_scripts', 'aster_dental_clinic_custom_featured_image_css');

// Featured Image Border Radius
function aster_dental_clinic_featured_image_border_radius_css() {
    $aster_dental_clinic_featured_image_border_radius = get_theme_mod('aster_dental_clinic_featured_image_border_radius', 10);
    ?>
    <style type="text/css">  
        .mag-post-single img {
            border-radius: <?php echo esc_attr($aster_dental_clinic_featured_image_border_radius); ?>px;
        }
    </style>
    <?php
}
add_action('wp_head', 'aster_dental_clinic_featured_image_border_radius_css');

function aster_dental_clinic_sidebar_widget_font_size_css() {
    $aster_dental_clinic_sidebar_widget_font_size = get_theme_mod('aster_dental_clinic_sidebar_widget_font_size', 24);
    ?>
    <style type="text/css">
        h2.wp-block-heading,aside#secondary .widgettitle,aside#secondary .widget-title {
            font-size: <?php echo esc_attr($aster_dental_clinic_sidebar_widget_font_size); ?>px;
        }
    </style>
    <?php
}
add_action('wp_head', 'aster_dental_clinic_sidebar_widget_font_size_css');

// Woocommerce Related Products Settings
function aster_dental_clinic_related_product_css() {
    $aster_dental_clinic_related_product_show_hide = get_theme_mod('aster_dental_clinic_related_product_show_hide', true);

    if ( $aster_dental_clinic_related_product_show_hide != true) {
        ?>
        <style type="text/css">
            .related.products {
                display: none;
            }
        </style>
        <?php
    }
}
add_action('wp_head', 'aster_dental_clinic_related_product_css');

// Woocommerce Product Sale Position 
function aster_dental_clinic_product_sale_position_customizer_css() {
    $aster_dental_clinic_layout_option = get_theme_mod('aster_dental_clinic_product_sale_position', 'left');
    ?>
    <style type="text/css">
        .woocommerce ul.products li.product .onsale {
            <?php if ($aster_dental_clinic_layout_option === 'left') : ?>
                right: auto;
                left: 0px;
            <?php else : ?>
                left: auto;
                right: 0px;
            <?php endif; ?>
        }
    </style>
    <?php
}
add_action('wp_head', 'aster_dental_clinic_product_sale_position_customizer_css'); 

//Footer Social Icon Alignment
function aster_dental_clinic_footer_icons_alignment_css() {
    $aster_dental_clinic_footer_social_align = get_theme_mod( 'aster_dental_clinic_footer_social_align', 'center' );   
    ?>
    <style type="text/css">
        .socialicons {
            text-align: <?php echo esc_attr( $aster_dental_clinic_footer_social_align ); ?> 
        }

        /* Mobile Specific */
        @media screen and (max-width: 575px) {
            .socialicons {
                text-align: center;
            }
        }
    </style>
    <?php
}
add_action( 'wp_head', 'aster_dental_clinic_footer_icons_alignment_css' );

//Copyright Alignment
function aster_dental_clinic_footer_copyright_alignment_css() {
    $aster_dental_clinic_footer_bottom_align = get_theme_mod( 'aster_dental_clinic_footer_bottom_align', 'center' );   
    ?>
    <style type="text/css">
        .site-footer .site-footer-bottom .site-footer-bottom-wrapper {
            justify-content: <?php echo esc_attr( $aster_dental_clinic_footer_bottom_align ); ?> 
        }

        /* Mobile Specific */
        @media screen and (max-width: 575px) {
            .site-footer .site-footer-bottom .site-footer-bottom-wrapper {
                justify-content: center;
                text-align:center;
            }
        }
    </style>
    <?php
}
add_action( 'wp_head', 'aster_dental_clinic_footer_copyright_alignment_css' );

//Copyright Font Size
function aster_dental_clinic_copyright_font_size_css() {
    $aster_dental_clinic_copyright_font_size = get_theme_mod('aster_dental_clinic_copyright_font_size', 16);
    ?>
    <style type="text/css">
        .site-footer-bottom .site-info span {
            font-size: <?php echo esc_attr($aster_dental_clinic_copyright_font_size); ?>px;
        }
    </style>
    <?php
}
add_action('wp_head', 'aster_dental_clinic_copyright_font_size_css');

// Preloader Background Color Setting
function aster_dental_clinic_preloader_background_colors_css() {
    $aster_dental_clinic_preloader_background_color_setting = get_theme_mod('aster_dental_clinic_preloader_background_color_setting', '');
        // Only output CSS if a color is set
        if (empty($aster_dental_clinic_preloader_background_color_setting)) {
            return;
        }
    ?>
    <style type="text/css">
        #loader {
            background-color: <?php echo esc_attr($aster_dental_clinic_preloader_background_color_setting); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'aster_dental_clinic_preloader_background_colors_css');

// Preloader Background Image Setting
function aster_dental_clinic_preloader_background_image_css() {
    $aster_dental_clinic_preloader_background_image_setting = get_theme_mod('aster_dental_clinic_preloader_background_image_setting', '');
        // Only output CSS if the background image is set
        if (empty($aster_dental_clinic_preloader_background_image_setting)) {
            return;
        }
    ?>
    <style type="text/css">
        #loader {
            background-image: url('<?php echo esc_url($aster_dental_clinic_preloader_background_image_setting); ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <?php
}
add_action('wp_head', 'aster_dental_clinic_preloader_background_image_css');

//Footer Heading Alignment
function aster_dental_clinic_footer_heading_alignment_css() {
    $aster_dental_clinic_footer_header_align = get_theme_mod( 'aster_dental_clinic_footer_header_align', 'left' );   
    ?>
    <style type="text/css">
        .site-footer h4, footer#colophon h2.wp-block-heading, footer#colophon .widgettitle, footer#colophon .widget-title {
            text-align: <?php echo esc_attr( $aster_dental_clinic_footer_header_align ); ?> 
        }
    </style>
    <?php
}
add_action( 'wp_head', 'aster_dental_clinic_footer_heading_alignment_css' );

//First Capital Letter
function aster_dental_clinic_show_first_caps() {
	$aster_dental_clinic_first_caps = get_theme_mod('aster_dental_clinic_show_first_caps', false);
	$aster_dental_clinic_css = '';
	if ( $aster_dental_clinic_first_caps ) {
	$aster_dental_clinic_css .= '
		.mag-post-single .mag-post-detail .mag-post-excerpt p:first-of-type::first-letter {
		    font-size: 55px;
			font-weight: 600;
			margin-right: 6px;
			line-height: 1;
			display: inline-block;
			vertical-align: baseline;
		}';
	} else {
		$aster_dental_clinic_css .= '
		.mag-post-single .mag-post-detail .mag-post-excerpt p:first-of-type::first-letter {
			display: none;
		}';
	}
	wp_add_inline_style( 'aster-dental-clinic-style', $aster_dental_clinic_css );
}
add_action( 'wp_enqueue_scripts', 'aster_dental_clinic_show_first_caps' );

// Banner Button Color
function aster_dental_clinic_banner_button_color_css() {
    $btn_color = get_theme_mod('aster_dental_clinic_banner_btn_color');
    $btn_bg_color = get_theme_mod('aster_dental_clinic_banner_btn_bg_color');
    $btn_border_color = get_theme_mod('aster_dental_clinic_banner_btn_border_color');

    $custom_css = '';

    if ( !empty($btn_color) ) {
        $custom_css .= "
        .banner-slider-btn a.asterthemes-button,
        .banner-slider-btn2 a.asterthemes-button {
            color: {$btn_color};
        }";
    }

    if ( !empty($btn_bg_color) ) {
        $custom_css .= "
        .banner-slider-btn a.asterthemes-button,
        .banner-slider-btn2 a.asterthemes-button {
            background-color: {$btn_bg_color};
        }";
    }

    if ( !empty($btn_border_color) ) {
        $custom_css .= "
        .banner-slider-btn2 a.asterthemes-button {
            border: 2px solid {$btn_border_color};
        }";
    }

    wp_add_inline_style('aster-dental-clinic-style', $custom_css);
}
add_action('wp_enqueue_scripts','aster_dental_clinic_banner_button_color_css');