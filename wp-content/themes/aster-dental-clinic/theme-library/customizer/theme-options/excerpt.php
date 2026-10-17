<?php

/**
 * Excerpt
 *
 * @package aster_dental_clinic
 */

$wp_customize->add_section(
	'aster_dental_clinic_excerpt_options',
	array(
		'panel' => 'aster_dental_clinic_theme_options',
		'title' => esc_html__( 'Excerpt', 'aster-dental-clinic' ),
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'aster_dental_clinic_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'absint',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'aster-dental-clinic' ),
		'section'     => 'aster_dental_clinic_excerpt_options',
		'settings'    => 'aster_dental_clinic_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 10,
			'max'  => 200,
			'step' => 1,
		),
	)
);