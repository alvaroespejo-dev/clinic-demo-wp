<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * @link https://developer.WordPress.org/themes/functionality/custom-headers/
 *
 * @package aster_dental_clinic
 */

function aster_dental_clinic_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'aster_dental_clinic_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1360,
		'height'                 => 110,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'aster_dental_clinic_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'aster_dental_clinic_custom_header_setup' );

if ( ! function_exists( 'aster_dental_clinic_header_style' ) ) :

add_action( 'wp_enqueue_scripts', 'aster_dental_clinic_header_style' );
function aster_dental_clinic_header_style() {
	if ( get_header_image() ) :
	$aster_dental_clinic_custom_css = "
        .home header.site-header .header-main-wrapper .bottom-header-outer-wrapper .bottom-header-part{
			background-image:url('".esc_url(get_header_image())."') !important;
			background-position: center top;
		}";
	   	wp_add_inline_style( 'aster-dental-clinic-style', $aster_dental_clinic_custom_css );
	endif;
}
endif;