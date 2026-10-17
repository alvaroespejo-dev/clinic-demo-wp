<?php

/**
 * Pige Title Options
 *
 * @package aster_dental_clinic
 */



$wp_customize->add_section(
	'aster_dental_clinic_page_title_options',
	array(
		'panel' => 'aster_dental_clinic_theme_options',
		'title' => esc_html__( 'Page Title', 'aster-dental-clinic' ),
	)
);

$wp_customize->add_setting(
    'aster_dental_clinic_page_header_visibility',
    array(
        'default'           => 'all-devices',
        'sanitize_callback' => 'aster_dental_clinic_sanitize_select',
    )
);

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'aster_dental_clinic_page_header_visibility',
        array(
            'label'    => esc_html__( 'Page Header Visibility', 'aster-dental-clinic' ),
            'type'     => 'select',
            'section'  => 'aster_dental_clinic_page_title_options',
            'settings' => 'aster_dental_clinic_page_header_visibility',
            'priority' => 10,
            'choices'  => array(
                'all-devices'        => esc_html__( 'Show on all devices', 'aster-dental-clinic' ),
                'hide-tablet'        => esc_html__( 'Hide on Tablet', 'aster-dental-clinic' ),
                'hide-mobile'        => esc_html__( 'Hide on Mobile', 'aster-dental-clinic' ),
                'hide-tablet-mobile' => esc_html__( 'Hide on Tablet & Mobile', 'aster-dental-clinic' ),
                'hide-all-devices'   => esc_html__( 'Hide on all devices', 'aster-dental-clinic' ),
            ),
        )
    )
);


$wp_customize->add_setting( 'aster_dental_clinic_page_title_background_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_page_title_background_separator', array(
	'label' => __( 'Page Title BG Image & Color Setting', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_page_title_options',
	'settings' => 'aster_dental_clinic_page_title_background_separator',
)));


$wp_customize->add_setting(
	'aster_dental_clinic_page_header_style',
	array(
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
		'default'           => False,
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_page_header_style',
		array(
			'label'   => esc_html__('Page Title Background Image', 'aster-dental-clinic'),
			'section' => 'aster_dental_clinic_page_title_options',
		)
	)
);

$wp_customize->add_setting( 'aster_dental_clinic_page_header_background_image', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aster_dental_clinic_page_header_background_image', array(
    'label'    => __( 'Background Image', 'aster-dental-clinic' ),
    'section'  => 'aster_dental_clinic_page_title_options',
   	'description' => __('Choose either a background image or a color. If a background image is selected, the background color will not be visible.', 'aster-dental-clinic'),
    'settings' => 'aster_dental_clinic_page_header_background_image',
	'active_callback' => 'aster_dental_clinic_is_pagetitle_bcakground_image_enabled',
)));


$wp_customize->add_setting('aster_dental_clinic_page_header_image_height', array(
	'default'           => 200,
	'sanitize_callback' => 'aster_dental_clinic_sanitize_range_value',
));

$wp_customize->add_control(new Aster_Dental_Clinic_Customize_Range_Control($wp_customize, 'aster_dental_clinic_page_header_image_height', array(
		'label'       => __('Image Height', 'aster-dental-clinic'),
		'section'     => 'aster_dental_clinic_page_title_options',
		'settings'    => 'aster_dental_clinic_page_header_image_height',
		'active_callback' => 'aster_dental_clinic_is_pagetitle_bcakground_image_enabled',
		'input_attrs' => array(
			'min'  => 0,
			'max'  => 1000,
			'step' => 5,
		),
)));


$wp_customize->add_setting('aster_dental_clinic_page_title_background_color_setting', array(
    'default' => '#f5f5f5',
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'aster_dental_clinic_page_title_background_color_setting', array(
    'label' => __('Page Title Background Color', 'aster-dental-clinic'),
    'section' => 'aster_dental_clinic_page_title_options',
)));


$wp_customize->add_setting( 'aster_dental_clinic_page_title_style_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_setting('aster_dental_clinic_pagetitle_height', array(
    'default'           => 50,
    'sanitize_callback' => 'aster_dental_clinic_sanitize_range_value',
));

$wp_customize->add_control(new Aster_Dental_Clinic_Customize_Range_Control($wp_customize, 'aster_dental_clinic_pagetitle_height', array(
    'label'       => __('Set Height', 'aster-dental-clinic'),
    'description' => __('This setting controls the page title height when no background image is set. If a background image is set, this setting will not apply.', 'aster-dental-clinic'),
    'section'     => 'aster_dental_clinic_page_title_options',
    'settings'    => 'aster_dental_clinic_pagetitle_height',
    'input_attrs' => array(
        'min'  => 0,
        'max'  => 300,
        'step' => 5,
    ),
)));

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_page_title_style_separator', array(
	'label' => __( 'Page Title Styling Setting', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_page_title_options',
	'settings' => 'aster_dental_clinic_page_title_style_separator',
)));


$wp_customize->add_setting( 'aster_dental_clinic_page_header_heading_tag', array(
	'default'   => 'h1',
	'sanitize_callback' => 'aster_dental_clinic_sanitize_select',
) );

$wp_customize->add_control( 'aster_dental_clinic_page_header_heading_tag', array(
	'label'   => __( 'Page Title Heading Tag', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_page_title_options',
	'type'    => 'select',
	'choices' => array(
		'h1' => __( 'H1', 'aster-dental-clinic' ),
		'h2' => __( 'H2', 'aster-dental-clinic' ),
		'h3' => __( 'H3', 'aster-dental-clinic' ),
		'h4' => __( 'H4', 'aster-dental-clinic' ),
		'h5' => __( 'H5', 'aster-dental-clinic' ),
		'h6' => __( 'H6', 'aster-dental-clinic' ),
		'p' => __( 'p', 'aster-dental-clinic' ),
		'a' => __( 'a', 'aster-dental-clinic' ),
		'div' => __( 'div', 'aster-dental-clinic' ),
		'span' => __( 'span', 'aster-dental-clinic' ),
	),
) );



$wp_customize->add_setting('aster_dental_clinic_page_header_layout', array(
	'default' => 'left',
	'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('aster_dental_clinic_page_header_layout', array(
	'label' => __('Style', 'aster-dental-clinic'),
	'section' => 'aster_dental_clinic_page_title_options',
	'description' => __('"Flex Layout Style" wont work below 600px (mobile media)', 'aster-dental-clinic'),
	'settings' => 'aster_dental_clinic_page_header_layout',
	'type' => 'radio',
	'choices' => array(
		'left' => __('Classic', 'aster-dental-clinic'),
		'right' => __('Aligned Right', 'aster-dental-clinic'),
		'center' => __('Centered Focus', 'aster-dental-clinic'),
		'flex' => __('Flex Layout', 'aster-dental-clinic'),
	),
));