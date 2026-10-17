<?php
/**
 * No Results page
 *
 * @package aster_dental_clinic
 */

/*=========================================
No Results Page
=========================================*/
$wp_customize->add_section(
	'no_results_pg_options', array(
		'title' => esc_html__( 'No Results Page', 'aster-dental-clinic' ),
		'panel' => 'aster_dental_clinic_theme_options',
	)
);

//  Title // 
$wp_customize->add_setting(
	'aster_dental_clinic_pg_no_results_ttl',
	array(
        'default'			=> __('Nothing Found','aster-dental-clinic'),
		'capability'     	=> 'edit_theme_options',
		'sanitize_callback' => 'aster_dental_clinic_sanitize_html',
	)
);	

$wp_customize->add_control( 
	'aster_dental_clinic_pg_no_results_ttl',
	array(
	    'label'   => __('No Results Title','aster-dental-clinic'),
	    'section' => 'no_results_pg_options',
		'type'           => 'text',
	)  
);

//  Text // 
$wp_customize->add_setting(
	'aster_dental_clinic_pg_no_results_text',
	array(
        'default'			=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','aster-dental-clinic'),
		'capability'     	=> 'edit_theme_options',
		'sanitize_callback' => 'aster_dental_clinic_sanitize_html',
	)
);	

$wp_customize->add_control( 
	'aster_dental_clinic_pg_no_results_text',
	array(
	    'label'   => __('No Results Text','aster-dental-clinic'),
	    'section' => 'no_results_pg_options',
		'type'           => 'text',
	)  
);