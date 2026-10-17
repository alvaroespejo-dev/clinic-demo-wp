<?php

/**
 * Dynamic CSS
 */
function aster_dental_clinic_dynamic_css() {
	$aster_dental_clinic_primary_color = get_theme_mod( 'aster_dental_clinic_primary_color', '#5ea7ff' );

	$aster_dental_clinic_site_title_font       = get_theme_mod( 'aster_dental_clinic_site_title_font', 'Raleway' );
	$aster_dental_clinic_site_description_font = get_theme_mod( 'aster_dental_clinic_site_description_font', 'Raleway' );
	$aster_dental_clinic_header_font           = get_theme_mod( 'aster_dental_clinic_header_font', 'Epilogue' );
	$aster_dental_clinic_content_font             = get_theme_mod( 'aster_dental_clinic_content_font', 'Raleway' );

	// Enqueue Google Fonts
	$aster_dental_clinic_fonts_url = aster_dental_clinic_get_fonts_url();
	if ( ! empty( $aster_dental_clinic_fonts_url ) ) {
		wp_enqueue_style( 'aster-dental-clinic-google-fonts', esc_url( $aster_dental_clinic_fonts_url ), array(), null );
	}

	$aster_dental_clinic_custom_css  = '';
	$aster_dental_clinic_custom_css .= '
    /* Color */
    :root {
        --primary-color: ' . esc_attr( $aster_dental_clinic_primary_color ) . ';
        --header-text-color: ' . esc_attr( '#' . get_header_textcolor() ) . ';
    }
    ';

	$aster_dental_clinic_custom_css .= '
    /* Typography */
    :root {
        --font-heading: "' . esc_attr( $aster_dental_clinic_header_font ) . '", serif;
        --font-main: -apple-system, BlinkMacSystemFont, "' . esc_attr( $aster_dental_clinic_content_font ) . '", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    }

    body,
	button, input, select, optgroup, textarea, p {
        font-family: "' . esc_attr( $aster_dental_clinic_content_font ) . '", serif;
	}

	.site-identity p.site-title, h1.site-title a, h1.site-title, p.site-title a, .site-branding h1.site-title a {
        font-family: "' . esc_attr( $aster_dental_clinic_site_title_font ) . '", serif;
	}
    
	p.site-description {
        font-family: "' . esc_attr( $aster_dental_clinic_site_description_font ) . '", serif !important;
	}
    ';

	wp_add_inline_style( 'aster-dental-clinic-style', $aster_dental_clinic_custom_css );
}
add_action( 'wp_enqueue_scripts', 'aster_dental_clinic_dynamic_css', 99 );