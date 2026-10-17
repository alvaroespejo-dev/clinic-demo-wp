<?php

/**
 * Typography Settings
 *
 * @package aster_dental_clinic
 */

// Typography Settings
$wp_customize->add_section(
    'aster_dental_clinic_typography_setting',
    array(
        'panel' => 'aster_dental_clinic_theme_options',
        'title' => esc_html__( 'Typography Settings', 'aster-dental-clinic' ),
    )
);

$wp_customize->add_setting(
    'aster_dental_clinic_site_title_font',
    array(
        'default'           => 'Raleway',
        'sanitize_callback' => 'aster_dental_clinic_sanitize_google_fonts',
    )
);

$wp_customize->add_control(
    'aster_dental_clinic_site_title_font',
    array(
        'label'    => esc_html__( 'Site Title Font Family', 'aster-dental-clinic' ),
        'section'  => 'aster_dental_clinic_typography_setting',
        'settings' => 'aster_dental_clinic_site_title_font',
        'type'     => 'select',
        'choices'  => aster_dental_clinic_get_all_google_font_families(),
    )
);

// Typography - Site Description Font.
$wp_customize->add_setting(
	'aster_dental_clinic_site_description_font',
	array(
		'default'           => 'Raleway',
		'sanitize_callback' => 'aster_dental_clinic_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_site_description_font',
	array(
		'label'    => esc_html__( 'Site Description Font Family', 'aster-dental-clinic' ),
		'section'  => 'aster_dental_clinic_typography_setting',
		'settings' => 'aster_dental_clinic_site_description_font',
		'type'     => 'select',
		'choices'  => aster_dental_clinic_get_all_google_font_families(),
	)
);

// Typography - Header Font.
$wp_customize->add_setting(
	'aster_dental_clinic_header_font',
	array(
		'default'           => 'Epilogue',
		'sanitize_callback' => 'aster_dental_clinic_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_header_font',
	array(
		'label'    => esc_html__( 'Heading Font Family', 'aster-dental-clinic' ),
		'section'  => 'aster_dental_clinic_typography_setting',
		'settings' => 'aster_dental_clinic_header_font',
		'type'     => 'select',
		'choices'  => aster_dental_clinic_get_all_google_font_families(),
	)
);

// Typography - Body Font.
$wp_customize->add_setting(
	'aster_dental_clinic_content_font',
	array(
		'default'           => 'Raleway',
		'sanitize_callback' => 'aster_dental_clinic_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_content_font',
	array(
		'label'    => esc_html__( 'Content Font Family', 'aster-dental-clinic' ),
		'section'  => 'aster_dental_clinic_typography_setting',
		'settings' => 'aster_dental_clinic_content_font',
		'type'     => 'select',
		'choices'  => aster_dental_clinic_get_all_google_font_families(),
	)
);
