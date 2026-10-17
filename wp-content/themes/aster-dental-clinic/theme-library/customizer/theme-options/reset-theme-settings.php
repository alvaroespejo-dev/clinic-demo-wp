<?php
/**
 * Reset Theme Settings
 *
 * @package aster_dental_clinic
 */

$wp_customize->add_section(
	'aster_dental_clinic_reset_theme_options',
	array(
		'panel' => 'aster_dental_clinic_theme_options',
		'title' => esc_html__( 'Reset Theme Settings', 'aster-dental-clinic' ),
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_reset_theme_separators', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_reset_theme_separators', array(
	'label' => __( 'Reset Theme', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_reset_theme_options',
	'settings' => 'aster_dental_clinic_reset_theme_separators',
)));

//Reset Demo Import
$wp_customize->add_setting( 'aster_dental_clinic_reset_demo_import_settings', array(
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control('aster_dental_clinic_reset_demo_import_settings',array(
        'label'   => __( 'Reset Demo Import', 'aster-dental-clinic' ),
        'section' => 'aster_dental_clinic_reset_theme_options',
        'type'    => 'button',
        'input_attrs' => array(
            'onclick' => 'ResetDemoSettings()',
        ),
));

//Reset Global Color
$wp_customize->add_setting('aster_dental_clinic_reset_color', array(
    'default'           => '',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('aster_dental_clinic_reset_color', array(
    'type'    => 'button',
    'label'   => __('Reset Global Color', 'aster-dental-clinic'),
    'section' => 'aster_dental_clinic_reset_theme_options',
    'input_attrs' => array(
        'onclick' => 'ResetGlobalColor()',
    ),
));