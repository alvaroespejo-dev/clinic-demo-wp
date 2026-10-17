<?php

/**
 * Color Option
 *
 * @package aster_dental_clinic
 */

// Primary Color.
$wp_customize->add_setting(
	'aster_dental_clinic_primary_color',
	array(
		'default'           => '#5ea7ff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'aster_dental_clinic_primary_color',
		array(
			'label'    => __( 'Primary Color', 'aster-dental-clinic' ),
			'section'  => 'colors',
			'priority' => 5,
		)
	)
);