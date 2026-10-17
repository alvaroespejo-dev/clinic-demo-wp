<?php

/**
 * Footer Options
 *
 * @package aster_dental_clinic
 */

$wp_customize->add_section(
	'aster_dental_clinic_footer_options',
	array(
		'panel' => 'aster_dental_clinic_theme_options',
		'title' => esc_html__( 'Footer Options', 'aster-dental-clinic' ),
	)
);


// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_footer_separators', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_footer_separators', array(
	'label' => __( 'Footer Settings', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_footer_options',
	'settings' => 'aster_dental_clinic_footer_separators',
)));

// Footer Section - Enable Section.
$wp_customize->add_setting(
	'aster_dental_clinic_enable_footer_section',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_enable_footer_section',
		array(
			'label'    => esc_html__( 'Show / Hide Footer', 'aster-dental-clinic' ),
			'section'  => 'aster_dental_clinic_footer_options',
			'settings' => 'aster_dental_clinic_enable_footer_section',
		)
	)
);

// column // 
$wp_customize->add_setting(
	'aster_dental_clinic_footer_widget_column',
	array(
        'default'			=> '4',
		'capability'     	=> 'edit_theme_options',
		'sanitize_callback' => 'aster_dental_clinic_sanitize_select',
		
	)
);	

$wp_customize->add_control(
	'aster_dental_clinic_footer_widget_column',
	array(
	    'label'   		=> __('Select Footer Widget Column','aster-dental-clinic'),
		'description' => __('Note: Default footer widgets are shown. Add your preferred widgets in (Appearance > Widgets > Footer) to see changes.', 'aster-dental-clinic'),
	    'section' 		=> 'aster_dental_clinic_footer_options',
		'type'			=> 'select',
		'choices'        => 
		array(
			'' => __( 'None', 'aster-dental-clinic' ),
			'1' => __( '1 Column', 'aster-dental-clinic' ),
			'2' => __( '2 Column', 'aster-dental-clinic' ),
			'3' => __( '3 Column', 'aster-dental-clinic' ),
			'4' => __( '4 Column', 'aster-dental-clinic' )
		) 
	) 
);

//  BG Color // 
$wp_customize->add_setting('aster_dental_clinic_footer_background_color_setting', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'aster_dental_clinic_footer_background_color_setting', array(
    'label' => __('Footer Background Color', 'aster-dental-clinic'),
    'section' => 'aster_dental_clinic_footer_options',
)));

// Footer Background Image Setting
$wp_customize->add_setting('aster_dental_clinic_footer_background_image_setting', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'aster_dental_clinic_footer_background_image_setting', array(
    'label' => __('Footer Background Image', 'aster-dental-clinic'),
    'section' => 'aster_dental_clinic_footer_options',
)));

// Footer Background Attachment
$wp_customize->add_setting(
	'aster_dental_clinic_footer_image_attachment_setting',
	array(
		'default'=> 'scroll',
		'sanitize_callback' => 'aster_dental_clinic_sanitize_choices'
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_footer_image_attachment_setting',
	array(
		'type' => 'select',
		'label' => __('Footer Background Attatchment','aster-dental-clinic'),
		'choices' => array(
			'fixed' => __('fixed','aster-dental-clinic'),
			'scroll' => __('scroll','aster-dental-clinic'),
		),
		'section'=> 'aster_dental_clinic_footer_options',
  	)
);

//Footer Image Position
$wp_customize->add_setting(
	'aster_dental_clinic_footer_img_position_setting',
	array(
        'default'			=> 'center center',
		'capability'     	=> 'edit_theme_options',
		'sanitize_callback' => 'aster_dental_clinic_sanitize_choices',
		
	)
);	

$wp_customize->add_control(
	'aster_dental_clinic_footer_img_position_setting',
	array(
		'label'   		=> __('Footer Image Position','aster-dental-clinic'),
	    'section' 		=> 'aster_dental_clinic_footer_options',
		'type'			=> 'select',
		'choices'       => 
		array(
			'center center'   => __( 'Center', 'aster-dental-clinic' ),
			'center top'   	  => __( 'Top', 'aster-dental-clinic' ),
			'center bottom'   => __( 'Bottom', 'aster-dental-clinic' ),
		) 
	) 
);

$wp_customize->add_setting('footer_text_transform', array(
    'default' => 'capitalize',
    'sanitize_callback' => 'sanitize_text_field',
));

// Add Footer Heading Text Transform Control
$wp_customize->add_control('footer_text_transform', array(
    'label' => __('Footer Heading Text Transform', 'aster-dental-clinic'),
    'section' => 'aster_dental_clinic_footer_options',
    'settings' => 'footer_text_transform',
    'type' => 'select',
    'choices' => array(
        'none' => __('None', 'aster-dental-clinic'),
        'capitalize' => __('Capitalize', 'aster-dental-clinic'),
        'uppercase' => __('Uppercase', 'aster-dental-clinic'),
        'lowercase' => __('Lowercase', 'aster-dental-clinic'),
    ),
));

// Footer Heading Alignment
$wp_customize->add_setting(
	'aster_dental_clinic_footer_header_align',
	array(
		'default' 			=> 'left',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_footer_header_align',
	array(
		'label' => __('Footer Heading Alignment ','aster-dental-clinic'),
		'section' => 'aster_dental_clinic_footer_options',
		'type'			=> 'select',
		'choices' => 
		array(
			'left' => __('Left','aster-dental-clinic'),
			'right' => __('Right','aster-dental-clinic'),
			'center' => __('Center','aster-dental-clinic'),
		),
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_copyright_separators', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_copyright_separators', array(
	'label' => __( 'Copyright Settings', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_footer_options',
	'settings' => 'aster_dental_clinic_copyright_separators',
)));

// Copyright Section - Enable Section.
$wp_customize->add_setting(
	'aster_dental_clinic_enable_copyright_section',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_enable_copyright_section',
		array(
			'label'    => esc_html__( 'Show / Hide Copyright', 'aster-dental-clinic' ),
			'section'  => 'aster_dental_clinic_footer_options',
			'settings' => 'aster_dental_clinic_enable_copyright_section',
		)
	)
);

$wp_customize->add_setting(
	'aster_dental_clinic_footer_copyright_text',
	array(
		'sanitize_callback' => 'wp_kses_post',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_footer_copyright_text',
	array(
		'label'    => esc_html__( 'Copyright Text', 'aster-dental-clinic' ),
		'section'  => 'aster_dental_clinic_footer_options',
		'settings' => 'aster_dental_clinic_footer_copyright_text',
		'type'     => 'textarea',
	)
);

//Copyright Alignment
$wp_customize->add_setting(
	'aster_dental_clinic_footer_bottom_align',
	array(
		'default' 			=> 'center',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_footer_bottom_align',
	array(
		'label' => __('Copyright Alignment ','aster-dental-clinic'),
		'section' => 'aster_dental_clinic_footer_options',
		'type'			=> 'select',
		'choices' => 
		array(
			'left' => __('Left','aster-dental-clinic'),
			'right' => __('Right','aster-dental-clinic'),
			'center' => __('Center','aster-dental-clinic'),
		),
	)
);

//Copyright Font Size
$wp_customize->add_setting( 
	'aster_dental_clinic_copyright_font_size', 
	array(
		'default'           => 16,
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control( 'aster_dental_clinic_copyright_font_size', 
	array(
		'type'        => 'number',
		'section'     => 'aster_dental_clinic_footer_options',
		'label'       => __( 'Copyright Font Size ', 'aster-dental-clinic' ),
		'input_attrs' => 
		array(
			'min'  => 10,
			'max'  => 100,
			'step' => 1,
		),
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_scroll_separators', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_scroll_separators', array(
	'label' => __( 'Scroll Top Settings', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_footer_options',
	'settings' => 'aster_dental_clinic_scroll_separators',
)));

// Footer Options - Scroll Top.
$wp_customize->add_setting(
	'aster_dental_clinic_scroll_top',
	array(
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_scroll_top',
		array(
			'label'   => esc_html__( 'Enable Scroll Top Button', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_footer_options',
		)
	)
);
// icon // 
$wp_customize->add_setting(
	'aster_dental_clinic_scroll_btn_icon',
	array(
        'default' => 'fas fa-chevron-up',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
		
	)
);	

$wp_customize->add_control(new Aster_Dental_Clinic_Change_Icon_Control($wp_customize, 
	'aster_dental_clinic_scroll_btn_icon',
	array(
	    'label'   		=> __('Scroll Top Icon','aster-dental-clinic'),
	    'section' 		=> 'aster_dental_clinic_footer_options',
		'iconset' => 'fa',
	))  
);
$wp_customize->add_setting( 'aster_dental_clinic_scroll_top_position', array(
    'default'           => 'bottom-right',
    'sanitize_callback' => 'aster_dental_clinic_sanitize_scroll_top_position',
) );

// Add control for Scroll Top Button Position
$wp_customize->add_control( 'aster_dental_clinic_scroll_top_position', array(
    'label'    => __( 'Scroll Top Button Position', 'aster-dental-clinic' ),
    'section'  => 'aster_dental_clinic_footer_options',
    'settings' => 'aster_dental_clinic_scroll_top_position',
    'type'     => 'select',
    'choices'  => array(
        'bottom-right' => __( 'Bottom Right', 'aster-dental-clinic' ),
        'bottom-left'  => __( 'Bottom Left', 'aster-dental-clinic' ),
        'bottom-center'=> __( 'Bottom Center', 'aster-dental-clinic' ),
    ),
) );

$wp_customize->add_setting( 'aster_dental_clinic_scroll_top_shape', array(
    'default'           => 'box',
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'aster_dental_clinic_scroll_top_shape', array(
    'label'    => __( 'Scroll to Top Button Shape', 'aster-dental-clinic' ),
    'section'  => 'aster_dental_clinic_footer_options',
    'settings' => 'aster_dental_clinic_scroll_top_shape',
    'type'     => 'radio',
    'choices'  => array(
        'box'        => __( 'Box', 'aster-dental-clinic' ),
        'curved-box' => __( 'Curved Box', 'aster-dental-clinic' ),
        'circle'     => __( 'Circle', 'aster-dental-clinic' ),
    ),
) );