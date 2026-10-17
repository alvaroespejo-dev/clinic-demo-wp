<?php

/**
 * Single Post Options
 *
 * @package aster_dental_clinic
 */

$wp_customize->add_section(
	'aster_dental_clinic_single_post_options',
	array(
		'title' => esc_html__( 'Single Post Options', 'aster-dental-clinic' ),
		'panel' => 'aster_dental_clinic_theme_options',
	)
);


// Post Options - Show / Hide Date.
$wp_customize->add_setting(
	'aster_dental_clinic_single_post_hide_date',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_single_post_hide_date',
		array(
			'label'   => esc_html__( 'Show / Hide Date', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_single_post_options',
		)
	)
);

// Post Options - Show / Hide Author.
$wp_customize->add_setting(
	'aster_dental_clinic_single_post_hide_author',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_single_post_hide_author',
		array(
			'label'   => esc_html__( 'Show / Hide Author', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_single_post_options',
		)
	)
);

// Post Options - Show / Hide Comments.
$wp_customize->add_setting(
	'aster_dental_clinic_single_post_hide_comments',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_single_post_hide_comments',
		array(
			'label'   => esc_html__( 'Show / Hide Comments', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_single_post_options',
		)
	)
);

// Post Options - Show / Hide Time.
$wp_customize->add_setting(
	'aster_dental_clinic_single_post_hide_time',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_single_post_hide_time',
		array(
			'label'   => esc_html__( 'Show / Hide Time', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_single_post_options',
		)
	)
);

// Post Options - Show / Hide Category.
$wp_customize->add_setting(
	'aster_dental_clinic_single_post_hide_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_single_post_hide_category',
		array(
			'label'   => esc_html__( 'Show / Hide Category', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_single_post_options',
		)
	)
);

// Post Options - Show / Hide Tag.
$wp_customize->add_setting(
	'aster_dental_clinic_post_hide_tags',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_post_hide_tags',
		array(
			'label'   => esc_html__( 'Show / Hide Tag', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_single_post_options',
		)
	)
);

// Post Options - Comment Title.
$wp_customize->add_setting(
	'aster_dental_clinic_blog_post_comment_title',
	array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_blog_post_comment_title',
	array(
		'label'	=> __('Comment Title','aster-dental-clinic'),
		'input_attrs' => array(
			'placeholder' => __( 'Leave a Reply', 'aster-dental-clinic' ),
		),
		'section'=> 'aster_dental_clinic_single_post_options',
		'type'=> 'text'
	)
);