<?php
	$wp_customize->add_panel( 'wpdevart_dental_and_dentist_wda_header_panel', 
	array(
		'title'	=> esc_html__('Header','dental-and-dentist-wda'),			
		'description'	=> esc_html__('Customize the theme header options','dental-and-dentist-wda'),		
		'priority'		=> 24
	) 
	);
    $wp_customize->add_section('wpdevart_dental_and_dentist_wda_header_section',array(
		'title'	=> esc_html__('General','dental-and-dentist-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_dental_and_dentist_wda_header_panel'
	));

	$wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_header_layout',
	array(
		'default' => esc_html('headerlayoutone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_header_layout',
	array(
		'label' => esc_html__( 'Header layout', 'dental-and-dentist-wda' ),
		'description' => esc_html__( 'Select the position of the header elements', 'dental-and-dentist-wda' ),
		'section' => 'wpdevart_dental_and_dentist_wda_header_section',
		'choices' => array(
		'headerlayoutone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/header-layout-one.jpg',
			'name' => esc_html__( 'All header elements on one line', 'dental-and-dentist-wda' )
		),
		'headerlayouttwo' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/header-layout-two.jpg',
			'name' => esc_html__( 'Logo at the top of the menu', 'dental-and-dentist-wda' )
		),
		'headerlayoutthree' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/header-layout-three.jpg',
			'name' => esc_html__( 'Logo in the center', 'dental-and-dentist-wda' )
		),
		)
	)
	) );
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_header_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_header_bg_color', esc_html('#f7f7f7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_header_bg_color', array(
        'label' => esc_html__('Header background color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_header_bg_color'
    )));

	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_header_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_header_gradient_type',array(
			'label'	=> esc_html__('Gradient type','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_header_section',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_header_gradient_type',
			'type' => 'select',
			'choices' => array(
				'to right' => esc_html__('To right','dental-and-dentist-wda'),
				'to left' => esc_html__('To left','dental-and-dentist-wda'),
				'to bottom' => esc_html__('To bottom','dental-and-dentist-wda'),
				'to top' => esc_html__('To top','dental-and-dentist-wda'),
				'to bottom right' => esc_html__('To bottom right','dental-and-dentist-wda'),
				'to bottom left' => esc_html__('To bottom left','dental-and-dentist-wda'),
				'to top right' => esc_html__('To top right','dental-and-dentist-wda'),
				'to top left' => esc_html__('To top left','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_header_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_header_bg_gradient_color', esc_html('#f7f7f7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_header_bg_gradient_color', array(
        'label' => esc_html__('Header gradient color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_header_bg_gradient_color'
    )));
	$wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_enable_main_header_border',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_dental_and_dentist_wda_enable_main_header_border',
        array(
        'label' => esc_html__( 'Hide the header border', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_header_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_header_border_color', esc_html('#deecff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_header_border_color', array(
        'label' => esc_html__('Header border color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_main_header_border_color'
    )));
	$wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_header_show_action_button',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_dental_and_dentist_wda_header_show_action_button',
        array(
        'label' => esc_html__( 'Hide the action button', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_header_action_button_text',array(
		'default'	=> esc_html('Book Visit'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_dental_and_dentist_wda_header_action_button_text',
            array(
                'label'    => esc_html__('Header action button text','dental-and-dentist-wda'),
                'section'  => 'wpdevart_dental_and_dentist_wda_header_section',
                'settings' => 'wpdevart_dental_and_dentist_wda_header_action_button_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_header_action_button_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_header_action_button_url',array(
			'label'	=> esc_html__('Header action button URL','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_header_section',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_header_action_button_url'
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_header_action_button_style',array(
		'default'	=> esc_html('wpdevart_dental_and_dentist_wda_primary_button_slide primary_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_header_action_button_style',array(
			'label'	=> esc_html__('Header action button color','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_header_section',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_header_action_button_style',
			'type' => 'select',
			'choices' => array(
				'wpdevart_dental_and_dentist_wda_primary_button_slide primary_btn_slide_right' => esc_html__('Custom Primary', 'dental-and-dentist-wda'),
				'wpdevart_dental_and_dentist_wda_secondary_button_slide secondary_btn_slide_right' => esc_html__('Custom Secondary', 'dental-and-dentist-wda'),
				'wpdevart_dental_and_dentist_wda_first_button_slide first_btn_slide_right' => esc_html__('WpDevArt Color', 'dental-and-dentist-wda'),
				'wpdevart_dental_and_dentist_wda_second_button_slide second_btn_slide_right' => esc_html__('Grapefruit Red', 'dental-and-dentist-wda'),
				'wpdevart_dental_and_dentist_wda_third_button_slide third_btn_slide_right' => esc_html__('Blue', 'dental-and-dentist-wda'),
				'wpdevart_dental_and_dentist_wda_fourth_button_slide fourth_btn_slide_right' => esc_html__('Dark', 'dental-and-dentist-wda'),
				'wpdevart_dental_and_dentist_wda_fifth_button_slide fifth_btn_slide_right' => esc_html__('Green', 'dental-and-dentist-wda'),
				'wpdevart_dental_and_dentist_wda_sixth_button_slide sixth_btn_slide_right' => esc_html__('Yellow', 'dental-and-dentist-wda'),
				'wpdevart_dental_and_dentist_wda_seventh_button_slide seventh_btn_slide_right' => esc_html__('Custom Green', 'dental-and-dentist-wda'),
				'wpdevart_dental_and_dentist_wda_eighth_button_slide eighth_btn_slide_right' => esc_html__('White', 'dental-and-dentist-wda'),
				)
	));

	$wp_customize->add_section('wpdevart_dental_and_dentist_wda_header_menu_search_section',array(
		'title'	=> esc_html__('Menu and Search','dental-and-dentist-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_dental_and_dentist_wda_header_panel'
	));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_header_search_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_header_search_button_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_header_search_button_color', array(
        'label' => esc_html__('Search button color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_header_search_button_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_header_menu_items_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_header_menu_items_color', esc_html('#1e1e1e')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_header_menu_items_color', array(
        'label' => esc_html__('Menu items color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_header_menu_items_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_header_sub_menu_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_header_sub_menu_bg_color', esc_html('#f7f7f7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_header_sub_menu_bg_color', array(
        'label' => esc_html__('Sub menu background color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_main_header_sub_menu_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_header_sub_menu_items_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_header_sub_menu_items_color', esc_html('#1e1e1e')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_header_sub_menu_items_color', array(
        'label' => esc_html__('Sub menu items color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_main_header_sub_menu_items_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_header_sub_menu_top_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_header_sub_menu_top_border_color', esc_html('#00bcd1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_header_sub_menu_top_border_color', array(
        'label' => esc_html__('Sub menu border color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_main_header_sub_menu_top_border_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_header_mobile_menu_background_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_header_mobile_menu_background_color', esc_html('#edf7fb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_header_mobile_menu_background_color', array(
        'label' => esc_html__('Mobile toolbar background color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_header_mobile_menu_background_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_mobile_menu_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_mobile_menu_bg_gradient_type',array(
			'label'	=> esc_html__('Gradient type','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_mobile_menu_bg_gradient_type',
			'type' => 'select',
			'choices' => array(
				'to right' => esc_html__('To right','dental-and-dentist-wda'),
				'to left' => esc_html__('To left','dental-and-dentist-wda'),
				'to bottom' => esc_html__('To bottom','dental-and-dentist-wda'),
				'to top' => esc_html__('To top','dental-and-dentist-wda'),
				'to bottom right' => esc_html__('To bottom right','dental-and-dentist-wda'),
				'to bottom left' => esc_html__('To bottom left','dental-and-dentist-wda'),
				'to top right' => esc_html__('To top right','dental-and-dentist-wda'),
				'to top left' => esc_html__('To top left','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_mobile_menu_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_mobile_menu_bg_gradient_color', esc_html('#edf7fb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_mobile_menu_bg_gradient_color', array(
        'label' => esc_html__('Mobile toolbar background gradient color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_mobile_menu_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_header_descktop_search_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_header_descktop_search_button_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_header_descktop_search_button_color', array(
        'label' => esc_html__('Mobile search button color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_header_descktop_search_button_color'
    )));

	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_header_mobile_menu_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_header_mobile_menu_button_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_header_mobile_menu_button_color', array(
        'label' => esc_html__('Mobile menu button color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_header_mobile_menu_button_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_header_mobile_menu_background_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_header_mobile_menu_background_color', esc_html('#f7f7f7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_header_mobile_menu_background_color', array(
        'label' => esc_html__('Mobile menu background color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_main_header_mobile_menu_background_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_header_mobile_menu_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_header_mobile_menu_link_color', esc_html('#1e1e1e')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_header_mobile_menu_link_color', array(
        'label' => esc_html__('Mobile menu link color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_main_header_mobile_menu_link_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_header_mobile_menu_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_header_mobile_menu_border_color', esc_html('#deecff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_header_mobile_menu_border_color', array(
        'label' => esc_html__('Mobile menu borders color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_main_header_mobile_menu_border_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_header_mobile_sub_menu_button_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_header_mobile_sub_menu_button_bg_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_header_mobile_sub_menu_button_bg_color', array(
        'label' => esc_html__('Mobile sub-menu button BG color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_main_header_mobile_sub_menu_button_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_header_mobile_sub_menu_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_header_mobile_sub_menu_button_color', esc_html('#f7f7f7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_header_mobile_sub_menu_button_color', array(
        'label' => esc_html__('Mobile sub-menu button color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_main_header_mobile_sub_menu_button_color'
    )));

	if ( class_exists( 'WooCommerce' ) ) {
		$wp_customize->add_section('wpdevart_dental_and_dentist_wda_header_woo_cart',array(
			'title'	=> esc_html__('WooCommerce','dental-and-dentist-wda'),					
			'priority'		=> null,
			'panel'         => 'wpdevart_dental_and_dentist_wda_header_panel'
		));
		$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_woocommerce_account_icon_color',array(
			'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_woocommerce_account_icon_color', esc_html('#1260f3')),
			'sanitize_callback'	=> 'sanitize_hex_color'	
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_woocommerce_account_icon_color', array(
			'label' => esc_html__('WooCommerce account icon color','dental-and-dentist-wda'),
			'section' => 'wpdevart_dental_and_dentist_wda_header_woo_cart',
			'settings' => 'wpdevart_dental_and_dentist_wda_woocommerce_account_icon_color'
		)));
		$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_woocommerce_cart_icon_color',array(
			'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_woocommerce_cart_icon_color', esc_html('#1260f3')),
			'sanitize_callback'	=> 'sanitize_hex_color'	
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_woocommerce_cart_icon_color', array(
			'label' => esc_html__('WooCommerce cart icon color','dental-and-dentist-wda'),
			'section' => 'wpdevart_dental_and_dentist_wda_header_woo_cart',
			'settings' => 'wpdevart_dental_and_dentist_wda_woocommerce_cart_icon_color'
		)));
		$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_woocommerce_cart_icon_number_color',array(
			'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_woocommerce_cart_icon_number_color', esc_html('#f7f7f7')),
			'sanitize_callback'	=> 'sanitize_hex_color'	
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_woocommerce_cart_icon_number_color', array(
			'label' => esc_html__('WooCommerce cart number color','dental-and-dentist-wda'),
			'section' => 'wpdevart_dental_and_dentist_wda_header_woo_cart',
			'settings' => 'wpdevart_dental_and_dentist_wda_woocommerce_cart_icon_number_color'
		)));
	};