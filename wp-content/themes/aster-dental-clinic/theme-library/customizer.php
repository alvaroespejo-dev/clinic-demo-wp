<?php

/**
 * Aster Dental Clinic Theme Customizer
 *
 * @package aster_dental_clinic
 */

// Sanitize callback.
require get_template_directory() . '/theme-library/customizer/sanitize-callback.php';

// Active Callback.
require get_template_directory() . '/theme-library/customizer/active-callback.php';

// Custom Controls.
require get_template_directory() . '/theme-library/customizer/custom-controls/custom-controls.php';

// Icon Controls.
require get_template_directory() . '/theme-library/customizer/custom-controls/icon-control.php';

function aster_dental_clinic_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'aster_dental_clinic_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'aster_dental_clinic_customize_partial_blogdescription',
			)
		);
	}

	// Upsell Section.
	$wp_customize->add_section(
		new Aster_Dental_Clinic_Upsell_Section(
			$wp_customize,
			'upsell_section',
			array(
				'title'            => __( 'Aster Dental Clinic Pro', 'aster-dental-clinic' ),
				'button_text'      => __( 'Buy Pro', 'aster-dental-clinic' ),
				'url'              => 'https://asterthemes.com/products/dentist-WordPress-theme',
				'background_color' => '#5ea7ff',
				'text_color'       => '#fff',
				'priority'         => 0,
			)
		)
	);

	// Doc Section.
	$wp_customize->add_section(
		new Aster_Dental_Clinic_Upsell_Section(
			$wp_customize,
			'doc_section',
			array(
				'title'            => __( 'Documentation', 'aster-dental-clinic' ),
				'button_text'      => __( 'Free Doc', 'aster-dental-clinic' ),
				'url'              => 'https://demo.asterthemes.com/docs/dental-clinic-free',
				'background_color' => '#5ea7ff',
				'text_color'       => '#fff',
				'priority'         => 1,
			)
		)
	);

	// Theme Options.
	require get_template_directory() . '/theme-library/customizer/theme-options.php';

	// Front Page Options.
	require get_template_directory() . '/theme-library/customizer/front-page-options.php';

	// Colors.
	require get_template_directory() . '/theme-library/customizer/colors.php';

}
add_action( 'customize_register', 'aster_dental_clinic_customize_register' );

function aster_dental_clinic_customize_partial_blogname() {
	bloginfo( 'name' );
}

function aster_dental_clinic_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function aster_dental_clinic_custom_control_scripts() {

	wp_enqueue_style( 'aster-dental-clinic-custom-controls-css', get_template_directory_uri() . '/resource/css/custom-controls.css', array(), '1.0', 'all' );

	wp_enqueue_script( 'aster-dental-clinic-custom-controls-js', get_template_directory_uri() . '/resource/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'aster_dental_clinic_custom_control_scripts' );