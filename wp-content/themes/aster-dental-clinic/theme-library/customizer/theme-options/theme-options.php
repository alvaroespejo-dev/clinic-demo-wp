<?php

/**
 * Header Options
 *
 * @package aster_dental_clinic
 */


// ---------------------------------------- GENERAL OPTIONBS ----------------------------------------------------


// ---------------------------------------- PRELOADER ----------------------------------------------------\

$wp_customize->add_section(
	'aster_dental_clinic_general_options',
	array(
		'panel' => 'aster_dental_clinic_theme_options',
		'title' => esc_html__( 'General Options', 'aster-dental-clinic' ),
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_preloader_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_preloader_separator', array(
	'label' => __( 'Enable / Disable Site Preloader Section', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_general_options',
	'settings' => 'aster_dental_clinic_preloader_separator',
) ) );

// General Options - Enable Preloader.
$wp_customize->add_setting(
	'aster_dental_clinic_enable_preloader',
	array(
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_enable_preloader',
		array(
			'label'   => esc_html__( 'Enable Preloader', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_general_options',
		)
	)
);

// Preloader Style Setting
$wp_customize->add_setting(
    'aster_dental_clinic_preloader_style',
    array(
        'default'           => 'style1',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aster_dental_clinic_preloader_style',
    array(
        'type'     => 'select',
        'label'    => esc_html__('Select Preloader Styles', 'aster-dental-clinic'),
		'active_callback' => 'aster_dental_clinic_is_preloader_style',
        'section'  => 'aster_dental_clinic_general_options',
        'choices'  => array(
            'style1' => esc_html__('Style 1', 'aster-dental-clinic'),
            'style2' => esc_html__('Style 2', 'aster-dental-clinic'),
            'style3' => esc_html__('Style 3', 'aster-dental-clinic'),
        ),
    )
);

// Preloader Background Color Setting
$wp_customize->add_setting(
	'aster_dental_clinic_preloader_background_color_setting',
	 array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, 'aster_dental_clinic_preloader_background_color_setting', 
		array(
			'label' => __('Preloader Background Color', 'aster-dental-clinic'),
			'active_callback' => 'aster_dental_clinic_is_preloader_style',
			'section' => 'aster_dental_clinic_general_options',
		)
	)
);

// Preloader Background Image Setting
$wp_customize->add_setting(
	'aster_dental_clinic_preloader_background_image_setting', 
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize, 'aster_dental_clinic_preloader_background_image_setting',
		 array(
			'label' => __('Preloader Background Image', 'aster-dental-clinic'),
			'active_callback' => 'aster_dental_clinic_is_preloader_style',
			'section' => 'aster_dental_clinic_general_options',
		)
	)
);

// ---------------------------------------- PAGINATION ----------------------------------------------------


// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_pagination_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_pagination_separator', array(
	'label' => __( 'Enable / Disable Pagination Section', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_general_options',
	'settings' => 'aster_dental_clinic_pagination_separator',
) ) );


// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'aster_dental_clinic_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'aster-dental-clinic' ),
			'section'  => 'aster_dental_clinic_general_options',
			'settings' => 'aster_dental_clinic_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'aster_dental_clinic_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'aster_dental_clinic_sanitize_select',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'aster-dental-clinic' ),
		'section'         => 'aster_dental_clinic_general_options',
		'settings'        => 'aster_dental_clinic_pagination_type',
		'active_callback' => 'aster_dental_clinic_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'aster-dental-clinic' ),
			'numeric' => __( 'Numeric', 'aster-dental-clinic' ),
		),
	)
);


// ---------------------------------------- BREADCRUMB ----------------------------------------------------

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_breadcrumb_separators', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_breadcrumb_separators', array(
	'label' => __( 'Enable / Disable Breadcrumb Section', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_general_options',
	'settings' => 'aster_dental_clinic_breadcrumb_separators',
)));



// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'aster_dental_clinic_enable_breadcrumb',
	array(
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_general_options',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'aster_dental_clinic_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'aster-dental-clinic' ),
		'active_callback' => 'aster_dental_clinic_is_breadcrumb_enabled',
		'section'         => 'aster_dental_clinic_general_options',
	)
);



// ---------------------------------------- Website layout ----------------------------------------------------


// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_layuout_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_layuout_separator', array(
	'label' => __( 'Website Layout Setting', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_general_options',
	'settings' => 'aster_dental_clinic_layuout_separator',
)));


$wp_customize->add_setting(
	'aster_dental_clinic_website_layout',
	array(
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_website_layout',
		array(
			'label'   => esc_html__('Boxed Layout', 'aster-dental-clinic'),
			'section' => 'aster_dental_clinic_general_options',
		)
	)
);

$wp_customize->add_setting('aster_dental_clinic_layout_width_margin', array(
	'default'           => 50,
	'sanitize_callback' => 'aster_dental_clinic_sanitize_range_value',
));

$wp_customize->add_control(new Aster_Dental_Clinic_Customize_Range_Control($wp_customize, 'aster_dental_clinic_layout_width_margin', array(
		'label'       => __('Set Width', 'aster-dental-clinic'),
		'description' => __('Adjust the width around the website layout by moving the slider. Use this setting to customize the appearance of your site to fit your design preferences.', 'aster-dental-clinic'),
		'section'     => 'aster_dental_clinic_general_options',
		'settings'    => 'aster_dental_clinic_layout_width_margin',
		'active_callback' => 'aster_dental_clinic_is_layout_enabled',
		'input_attrs' => array(
			'min'  => 0,
			'max'  => 130,
			'step' => 1,
		),
)));



// ---------------------------------------- HEADER OPTIONS ----------------------------------------------------


// Header Options
$wp_customize->add_section(
	'aster_dental_clinic_header_options',
	array(
		'panel' => 'aster_dental_clinic_theme_options',
		'title' => esc_html__( 'Header Options', 'aster-dental-clinic' ),
	)
);


// Add setting for sticky header
$wp_customize->add_setting(
	'aster_dental_clinic_enable_sticky_header',
	array(
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
		'default'           => false,
	)
);

// Add control for sticky header setting
$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_enable_sticky_header',
		array(
			'label'   => esc_html__( 'Enable Sticky Header', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_header_options',
		)
	)
);

// Banner Section - Enable Section.
$wp_customize->add_setting(
	'aster_dental_clinic_enable_header_search_section',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_enable_header_search_section',
		array(
			'label'    => esc_html__( 'Enable Search Section', 'aster-dental-clinic' ),
			'section'  => 'aster_dental_clinic_header_options',
			'settings' => 'aster_dental_clinic_enable_header_search_section',
		)
	)
);

// Banner Section - Button Label.
$wp_customize->add_setting(
	'aster_dental_clinic_header_button_label_',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_header_button_label_',
	array(
		'label'           => esc_html__( 'Button Label', 'aster-dental-clinic'  ),
		'section'         => 'aster_dental_clinic_header_options',
		'settings'        => 'aster_dental_clinic_header_button_label_',
		'type'            => 'text',
	)
);

// Header Section - Button Link.
$wp_customize->add_setting(
	'aster_dental_clinic_header_button_link_',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_header_button_link_',
	array(
		'label'           => esc_html__( 'Button Link', 'aster-dental-clinic' ),
		'section'         => 'aster_dental_clinic_header_options',
		'settings'        => 'aster_dental_clinic_header_button_link_',
		'type'            => 'url',
	)
);

$wp_customize->add_setting( 'aster_dental_clinic_menu_font_size', array(
    'default'           => 16,
    'sanitize_callback' => 'absint',
) );

// Add control for site title size
$wp_customize->add_control( 'aster_dental_clinic_menu_font_size', array(
    'type'        => 'number',
    'section'     => 'aster_dental_clinic_header_options',
    'label'       => __( 'Menu Font Size ', 'aster-dental-clinic' ),
    'input_attrs' => array(
        'min'  => 10,
        'max'  => 100,
        'step' => 1,
    ),
));

$wp_customize->add_setting( 'aster_dental_clinic_menu_text_transform', array(
    'default'           => 'capitalize', 
    'sanitize_callback' => 'sanitize_text_field',
) );

// Add control for menu text transform
$wp_customize->add_control( 'aster_dental_clinic_menu_text_transform', array(
    'type'     => 'select',
    'section'  => 'aster_dental_clinic_header_options',
    'label'    => __( 'Menu Text Transform', 'aster-dental-clinic' ),
    'choices'  => array(
        'none'       => __( 'None', 'aster-dental-clinic' ),
        'capitalize' => __( 'Capitalize', 'aster-dental-clinic' ),
        'uppercase'  => __( 'Uppercase', 'aster-dental-clinic' ),
        'lowercase'  => __( 'Lowercase', 'aster-dental-clinic' ),
    ),
) );

// Add setting for menu font weight
$wp_customize->add_setting('aster_dental_clinic_menu_font_weight', array(
    'default'           => '500',
    'sanitize_callback' => 'sanitize_text_field',
));

// Add control for menu font weight
$wp_customize->add_control('aster_dental_clinic_menu_font_weight', array(
    'type'     => 'select',
    'section'  => 'aster_dental_clinic_header_options', 
    'label'    => __('Menu Font Weight', 'aster-dental-clinic'),
    'choices'  => array(
		'100' => __('100','aster-dental-clinic'),
		'200' => __('200','aster-dental-clinic'),
		'300' => __('300','aster-dental-clinic'),
		'400' => __('400','aster-dental-clinic'),
		'500' => __('500','aster-dental-clinic'),
		'600' => __('600','aster-dental-clinic'),
		'700' => __('700','aster-dental-clinic'),
		'800' => __('800','aster-dental-clinic'),
		'900' => __('900','aster-dental-clinic'),
    ),
));

// Menu Text Color 
$wp_customize->add_setting(
	'aster_dental_clinic_menu_text_color', 
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, 
		'aster_dental_clinic_menu_text_color', 
		array(
			'label' => __('Menu Color', 'aster-dental-clinic'),
			'section' => 'aster_dental_clinic_header_options',
		)
	)
);

// Sub Menu Text Color 
$wp_customize->add_setting(
	'aster_dental_clinic_sub_menu_text_color', 
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, 
		'aster_dental_clinic_sub_menu_text_color', 
		array(
			'label' => __('Sub Menu Color', 'aster-dental-clinic'),
			'section' => 'aster_dental_clinic_header_options',
		)
	)
);

$wp_customize->add_setting( 
	'aster_dental_clinic_header_settings_upgraded_features',
	array(
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_header_settings_upgraded_features', 
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
		'section' => 'aster_dental_clinic_header_options'
	)
);

// ----------------------------------------SITE IDENTITY----------------------------------------------------

$wp_customize->add_setting( 'aster_dental_clinic_site_title_size', array(
    'default'           => 30, // Default font size in pixels
    'sanitize_callback' => 'absint', // Sanitize the input as a positive integer
) );

// Add control for site title size
$wp_customize->add_control( 'aster_dental_clinic_site_title_size', array(
    'type'        => 'number',
    'section'     => 'title_tagline', // You can change this section to your preferred section
    'label'       => __( 'Site Title Font Size ', 'aster-dental-clinic' ),
    'input_attrs' => array(
        'min'  => 10,
        'max'  => 100,
        'step' => 1,
    ),
) );

// Site Logo - Enable Setting.
$wp_customize->add_setting(
	'aster_dental_clinic_enable_site_logo',
	array(
		'default'           => true, // Default is to display the logo.
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch', // Sanitize using a custom switch function.
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_enable_site_logo',
		array(
			'label'    => esc_html__( 'Enable Site Logo', 'aster-dental-clinic' ),
			'section'  => 'title_tagline', // Section to add this control.
			'settings' => 'aster_dental_clinic_enable_site_logo',
		)
	)
);

// Site Title - Enable Setting.
$wp_customize->add_setting(
	'aster_dental_clinic_enable_site_title_setting',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_enable_site_title_setting',
		array(
			'label'    => esc_html__( 'Enable Site Title', 'aster-dental-clinic' ),
			'section'  => 'title_tagline',
			'settings' => 'aster_dental_clinic_enable_site_title_setting',
		)
	)
);

// Tagline - Enable Setting.
$wp_customize->add_setting(
	'aster_dental_clinic_enable_tagline_setting',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_enable_tagline_setting',
		array(
			'label'    => esc_html__( 'Enable Tagline', 'aster-dental-clinic' ),
			'section'  => 'title_tagline',
			'settings' => 'aster_dental_clinic_enable_tagline_setting',
		)
	)
);

$wp_customize->add_setting('aster_dental_clinic_site_logo_width', array(
    'default'           => 200,
    'sanitize_callback' => 'aster_dental_clinic_sanitize_range_value',
));

$wp_customize->add_control(new Aster_Dental_Clinic_Customize_Range_Control($wp_customize, 'aster_dental_clinic_site_logo_width', array(
    'label'       => __('Adjust Site Logo Width', 'aster-dental-clinic'),
    'description' => __('This setting controls the Width of Site Logo', 'aster-dental-clinic'),
    'section'     => 'title_tagline',
    'settings'    => 'aster_dental_clinic_site_logo_width',
    'input_attrs' => array(
        'min'  => 0,
        'max'  => 400,
        'step' => 5,
    ),
)));

// ---------------------------------------- ANIMATION ----------------------------------------------------

$wp_customize->add_setting( 'aster_dental_clinic_animation_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_animation_separator', array(
	'label' => __( 'Enable / Disable Animation', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_general_options',
	'settings' => 'aster_dental_clinic_animation_separator',
) ) );
// Animation Enable / Disable
$wp_customize->add_setting('aster_dental_clinic_enable_animation',array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);
$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control($wp_customize,'aster_dental_clinic_enable_animation',array(
			'label'   => esc_html__( 'Enable Animation', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_general_options',
		)
	)
);