<?php

/**
 * Sidebar Position
 *
 * @package aster_dental_clinic
 */

$wp_customize->add_section(
	'aster_dental_clinic_sidebar_position',
	array(
		'title' => esc_html__( 'Sidebar Position', 'aster-dental-clinic' ),
		'panel' => 'aster_dental_clinic_theme_options',
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_global_sidebar_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_global_sidebar_separator', array(
	'label' => __( 'Global Sidebar Position', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_sidebar_position',
	'settings' => 'aster_dental_clinic_global_sidebar_separator',
)));


// Sidebar Position - Global Sidebar Position.
$wp_customize->add_setting(
	'aster_dental_clinic_sidebar_position',
	array(
		'sanitize_callback' => 'aster_dental_clinic_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_sidebar_position',
	array(
		'label'   => esc_html__( 'Select Sidebar Position', 'aster-dental-clinic' ),
		'section' => 'aster_dental_clinic_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'aster-dental-clinic' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'aster-dental-clinic' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'aster-dental-clinic' ),
		),
	)
);


// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_post_sidebar_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_post_sidebar_separator', array(
	'label' => __( 'Post Sidebar Position', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_sidebar_position',
	'settings' => 'aster_dental_clinic_post_sidebar_separator',
)));

// Sidebar Position - Post Sidebar Position.
$wp_customize->add_setting(
	'aster_dental_clinic_post_sidebar_position',
	array(
		'sanitize_callback' => 'aster_dental_clinic_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Select Sidebar Position', 'aster-dental-clinic' ),
		'section' => 'aster_dental_clinic_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'aster-dental-clinic' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'aster-dental-clinic' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'aster-dental-clinic' ),
		),
	)
);


// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_page_sidebar_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_page_sidebar_separator', array(
	'label' => __( 'Page Sidebar Position', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_sidebar_position',
	'settings' => 'aster_dental_clinic_page_sidebar_separator',
)));

// Sidebar Position - Page Sidebar Position.
$wp_customize->add_setting(
	'aster_dental_clinic_page_sidebar_position',
	array(
		'sanitize_callback' => 'aster_dental_clinic_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Select Sidebar Position', 'aster-dental-clinic' ),
		'section' => 'aster_dental_clinic_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'aster-dental-clinic' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'aster-dental-clinic' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'aster-dental-clinic' ),
		),
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_sidebar_width_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_sidebar_width_separator', array(
	'label' => __( 'Sidebar Width Setting', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_sidebar_position',
	'settings' => 'aster_dental_clinic_sidebar_width_separator',
)));


$wp_customize->add_setting( 'aster_dental_clinic_sidebar_width', array(
	'default'           => '30',
	'sanitize_callback' => 'aster_dental_clinic_sanitize_range_value',
) );

$wp_customize->add_control(new Aster_Dental_Clinic_Customize_Range_Control($wp_customize, 'aster_dental_clinic_sidebar_width', array(
	'section'     => 'aster_dental_clinic_sidebar_position',
	'label'       => __( 'Adjust Sidebar Width', 'aster-dental-clinic' ),
	'description' => __( 'Adjust the width of the sidebar.', 'aster-dental-clinic' ),
	'input_attrs' => array(
		'min'  => 10,
		'max'  => 50,
		'step' => 1,
	),
)));

$wp_customize->add_setting( 'aster_dental_clinic_sidebar_widget_font_size', array(
    'default'           => 24,
    'sanitize_callback' => 'absint',
) );

// Add control for site title size
$wp_customize->add_control( 'aster_dental_clinic_sidebar_widget_font_size', array(
    'type'        => 'number',
    'section'     => 'aster_dental_clinic_sidebar_position',
    'label'       => __( 'Sidebar Widgets Heading Font Size ', 'aster-dental-clinic' ),
    'input_attrs' => array(
        'min'  => 10,
        'max'  => 100,
        'step' => 1,
    ),
));