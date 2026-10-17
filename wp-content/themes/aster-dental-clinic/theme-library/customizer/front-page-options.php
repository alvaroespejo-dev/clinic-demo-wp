<?php

/**
 * Front Page Options
 *
 * @package Aster Dental Clinic
 */

$wp_customize->add_panel(
	'aster_dental_clinic_front_page_options',
	array(
		'title'    => esc_html__( 'Front Page Options', 'aster-dental-clinic' ),
		'priority' => 20,
	)
);

// Banner Section.
require get_template_directory() . '/theme-library/customizer/front-page-options/banner.php';

// Tranding About Us Section.
require get_template_directory() . '/theme-library/customizer/front-page-options/about.php';