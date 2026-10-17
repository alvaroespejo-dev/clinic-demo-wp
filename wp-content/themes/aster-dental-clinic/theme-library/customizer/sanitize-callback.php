<?php

function aster_dental_clinic_sanitize_select( $aster_dental_clinic_input, $aster_dental_clinic_setting ) {
	$aster_dental_clinic_input = sanitize_key( $aster_dental_clinic_input );
	$aster_dental_clinic_choices = $aster_dental_clinic_setting->manager->get_control( $aster_dental_clinic_setting->id )->choices;
	return ( array_key_exists( $aster_dental_clinic_input, $aster_dental_clinic_choices ) ? $aster_dental_clinic_input : $aster_dental_clinic_setting->default );
}

function aster_dental_clinic_sanitize_switch( $aster_dental_clinic_input ) {
	if ( true === $aster_dental_clinic_input ) {
		return true;
	} else {
		return false;
	}
}

function aster_dental_clinic_sanitize_google_fonts( $aster_dental_clinic_input, $aster_dental_clinic_setting ) {
	$aster_dental_clinic_choices = $aster_dental_clinic_setting->manager->get_control( $aster_dental_clinic_setting->id )->choices;
	return ( array_key_exists( $aster_dental_clinic_input, $aster_dental_clinic_choices ) ? $aster_dental_clinic_input : $aster_dental_clinic_setting->default );
}

/**
 * Sanitize URL input.
 *
 * @param string $aster_dental_clinic_input URL input to sanitize.
 * @return string Sanitized URL.
 */
function aster_dental_clinic_sanitize_url( $aster_dental_clinic_input ) {
    return esc_url_raw( $aster_dental_clinic_input );
}

/**
 * Sanitize HTML input.
 *
 * @param string $aster_dental_clinic_input HTML input to sanitize.
 * @return string Sanitized HTML.
 */
function aster_dental_clinic_sanitize_html( $aster_dental_clinic_input ) {
    return wp_kses_post( $aster_dental_clinic_input );
}

// Sanitize Scroll Top Position
function aster_dental_clinic_sanitize_scroll_top_position( $aster_dental_clinic_input ) {
    $aster_dental_clinic_valid_positions = array( 'bottom-right', 'bottom-left', 'bottom-center' );
    if ( in_array( $aster_dental_clinic_input, $aster_dental_clinic_valid_positions ) ) {
        return $aster_dental_clinic_input;
    } else {
        return 'bottom-right'; // Default to bottom-right if invalid value
    }
}

function aster_dental_clinic_sanitize_image( $image, $aster_dental_clinic_setting ) {
	/*
	* Array of valid image file types.
	*
	* The array includes image mime types that are included in wp_get_mime_types()
	*/
	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon',
		'svg'          => 'image/svg+xml',
	);
	// Return an array with file extension and mime_type.
	$file = wp_check_filetype( $image, $mimes );
	// If $image has a valid mime_type, return it; otherwise, return the default.
	return ( $file['ext'] ? $image : $aster_dental_clinic_setting->default );
}

function aster_dental_clinic_sanitize_choices( $aster_dental_clinic_input, $aster_dental_clinic_setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $aster_dental_clinic_setting->id ); 
    if ( array_key_exists( $aster_dental_clinic_input, $control->choices ) ) {
        return $aster_dental_clinic_input;
    } else {
        return $aster_dental_clinic_setting->default;
    }
}

function aster_dental_clinic_sanitize_range_value( $aster_dental_clinic_number, $aster_dental_clinic_setting ) {

	// Ensure input is an absolute integer.
	$aster_dental_clinic_number = absint( $aster_dental_clinic_number );

	// Get the input attributes associated with the setting.
	$aster_dental_clinic_atts = $aster_dental_clinic_setting->manager->get_control( $aster_dental_clinic_setting->id )->input_attrs;

	// Get minimum number in the range.
	$aster_dental_clinic_min = ( isset( $aster_dental_clinic_atts['min'] ) ? $aster_dental_clinic_atts['min'] : $aster_dental_clinic_number );

	// Get maximum number in the range.
	$aster_dental_clinic_max = ( isset( $aster_dental_clinic_atts['max'] ) ? $aster_dental_clinic_atts['max'] : $aster_dental_clinic_number );

	// Get step.
	$aster_dental_clinic_step = ( isset( $aster_dental_clinic_atts['step'] ) ? $aster_dental_clinic_atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default.
	return ( $aster_dental_clinic_min <= $aster_dental_clinic_number && $aster_dental_clinic_number <= $aster_dental_clinic_max && is_int( $aster_dental_clinic_number / $aster_dental_clinic_step ) ? $aster_dental_clinic_number : $aster_dental_clinic_setting->default );
}