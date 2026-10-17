<?php

/**
 * About Section
 *
 * @package aster_dental_clinic
 */

$wp_customize->add_section(
	'aster_dental_clinic_products_section',
	array(
		'panel'    => 'aster_dental_clinic_front_page_options',
		'title'    => esc_html__( 'About Us Section', 'aster-dental-clinic' ),
		'priority' => 10,
	)
);

// About Section - Enable Section.
$wp_customize->add_setting(
	'aster_dental_clinic_enable_service_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_enable_service_section',
		array(
			'label'    => esc_html__( 'Enable About Us Section', 'aster-dental-clinic' ),
			'section'  => 'aster_dental_clinic_products_section',
			'settings' => 'aster_dental_clinic_enable_service_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'aster_dental_clinic_enable_service_section',
		array(
			'selector' => '#aster_dental_clinic_service_section .section-link',
			'settings' => 'aster_dental_clinic_enable_service_section',
		)
	);
}

// About Section - Services Icons.
$wp_customize->add_setting(
	'aster_dental_clinic_about_left_image_1',
	array(
		'sanitize_callback' => 'aster_dental_clinic_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'aster_dental_clinic_about_left_image_1',
		array(
			'label'           => esc_html__( 'About Image 1', 'aster-dental-clinic'),
			'section'         => 'aster_dental_clinic_products_section',
			'settings'        => 'aster_dental_clinic_about_left_image_1',
			'active_callback' => 'aster_dental_clinic_is_product_section_enabled',
		)
	)
);

// About Section - Services Icons.
$wp_customize->add_setting(
	'aster_dental_clinic_about_left_image_2',
	array(
		'sanitize_callback' => 'aster_dental_clinic_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'aster_dental_clinic_about_left_image_2',
		array(
			'label'           => esc_html__( 'About Image 2', 'aster-dental-clinic'),
			'section'         => 'aster_dental_clinic_products_section',
			'settings'        => 'aster_dental_clinic_about_left_image_2',
			'active_callback' => 'aster_dental_clinic_is_product_section_enabled',
		)
	)
);

// About Us Section - Heading Label.
$wp_customize->add_setting(
	'aster_dental_clinic_about_heading',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_about_heading',
	array(
		'label'           => esc_html__( 'Heading', 'aster-dental-clinic' ),
		'section'         => 'aster_dental_clinic_products_section',
		'settings'        => 'aster_dental_clinic_about_heading',
		'type'            => 'text',
		'active_callback' => 'aster_dental_clinic_is_product_section_enabled',
	)
);

// About Us Section - Content Label.
$wp_customize->add_setting(
	'aster_dental_clinic_about_text',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_about_text',
	array(
		'label'           => esc_html__( 'Content', 'aster-dental-clinic' ),
		'section'         => 'aster_dental_clinic_products_section',
		'settings'        => 'aster_dental_clinic_about_text',
		'type'            => 'text',
		'active_callback' => 'aster_dental_clinic_is_product_section_enabled',
	)
);

// Banner Section - Button Label.
$wp_customize->add_setting(
	'aster_dental_clinic_about_button_label',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_about_button_label' ,
	array(
		'label'           =>  esc_html__( 'Button Label ', 'aster-dental-clinic' ),
		'section'         => 'aster_dental_clinic_products_section',
		'settings'        => 'aster_dental_clinic_about_button_label',
		'type'            => 'text',
		'active_callback' => 'aster_dental_clinic_is_product_section_enabled',
	)
);

// Banner Section - Button Link.
$wp_customize->add_setting(
	'aster_dental_clinic_about_button_link',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_about_button_link',
	array(
		'label'           => esc_html__( 'Button Link', 'aster-dental-clinic'),
		'section'         => 'aster_dental_clinic_products_section',
		'settings'        => 'aster_dental_clinic_about_button_link',
		'type'            => 'url',
		'active_callback' => 'aster_dental_clinic_is_product_section_enabled',
	)
);
// icon // 
$wp_customize->add_setting(
	'aster_dental_clinic_readmore_btn_icon',
	array(
        'default' => 'fas fa-angle-double-right',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
		
	)
);	

$wp_customize->add_control(new Aster_Dental_Clinic_Change_Icon_Control($wp_customize, 
	'aster_dental_clinic_readmore_btn_icon',
	array(
	    'label'   		=> __('Button Icon','aster-dental-clinic'),
	    'section' 		=> 'aster_dental_clinic_products_section',
		'active_callback' => 'aster_dental_clinic_is_product_section_enabled',
		'iconset' => 'fa',
	))  
);

$wp_customize->add_setting( 
	'aster_dental_clinic_products_settings_upgraded_features',
	array(
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_products_settings_upgraded_features', 
	array(
		'type'=> 'hidden',
		'description' => "
			<div class='customizer-upgraded-features'>
				<i class='fas fa-info-circle'></i>
				<span class='pro-text'>
					Unlock Premium <strong>Features</strong> ?<br>
					<a target='_blank' href='". esc_url(ASTER_DENTAL_CLINIC_PREMIUM_PAGE) ." '>Upgrade Pro</a>
				</div>
			</div>
		",
		'section' => 'aster_dental_clinic_products_section'
	)
);