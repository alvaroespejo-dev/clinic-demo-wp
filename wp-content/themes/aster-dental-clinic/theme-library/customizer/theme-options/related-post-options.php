<?php

/**
 * Related Post Options
 *
 * @package aster_dental_clinic
 */

$wp_customize->add_section(
	'aster_dental_clinic_related_post_options',
	array(
		'title' => esc_html__( 'Related Post Options', 'aster-dental-clinic' ),
		'panel' => 'aster_dental_clinic_theme_options',
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_related_post_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_related_post_separator', array(
	'label' => __( 'Enable / Disable Related Post Section', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_related_post_options',
	'settings' => 'aster_dental_clinic_related_post_separator',
) ) );

// Post Options - Show / Hide Related Posts.
$wp_customize->add_setting(
	'aster_dental_clinic_post_hide_related_posts',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_post_hide_related_posts',
		array(
			'label'   => esc_html__( 'Show / Hide Related Posts', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_related_post_options',
		)
	)
);

// Register setting for number of related posts
$wp_customize->add_setting(
    'aster_dental_clinic_related_posts_count',
    array(
        'default'           => 3,
        'sanitize_callback' => 'absint', // Ensure it's an integer
    )
);

// Add control for number of related posts
$wp_customize->add_control(
    'aster_dental_clinic_related_posts_count',
    array(
        'type'        => 'number',
        'label'       => esc_html__( 'Number of Related Posts to Display', 'aster-dental-clinic' ),
        'section'     => 'aster_dental_clinic_related_post_options',
        'input_attrs' => array(
            'min'  => 1,
            'max'  => 5, // Adjust maximum based on your preference
            'step' => 1,
        ),
    )
);

// Post Options - Related Post Label.
$wp_customize->add_setting(
	'aster_dental_clinic_post_related_post_label',
	array(
		'default'           => 'Related Posts',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_post_related_post_label',
	array(
		'label'    => esc_html__( 'Related Posts Label', 'aster-dental-clinic' ),
		'section'  => 'aster_dental_clinic_related_post_options',
		'settings' => 'aster_dental_clinic_post_related_post_label',
		'type'     => 'text',
	)
);