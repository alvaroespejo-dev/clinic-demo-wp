<?php 
	$wp_customize->add_panel( 'wpdevart_dental_and_dentist_wda_general_settings_panel', 
    array(
		'title'	=> esc_html__('General','dental-and-dentist-wda'),			
        'description'	=> esc_html__('General Settings','dental-and-dentist-wda'),		
		'priority'		=> 21
    ) 
	);

	##################------ Fonts ------##################

	$wp_customize->add_section('wpdevart_dental_and_dentist_wda_fonts_section',array(
		'title'	=> esc_html__('Fonts','dental-and-dentist-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_dental_and_dentist_wda_general_settings_panel'
	));
		
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_global_fonts',array(
		'default'	=> esc_html('Alegreya'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
  
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_global_fonts',array(
			'label'	=> esc_html__('Select the font','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_fonts_section',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_global_fonts',
			'type' => 'select',
			'choices' => array(
				'Roboto' => esc_html__('Roboto', 'dental-and-dentist-wda'),
				'Poppins' => esc_html__('Poppins', 'dental-and-dentist-wda'),
				'Open Sans' => esc_html__('Open Sans', 'dental-and-dentist-wda'),
				'Alegreya' => esc_html__('Alegreya', 'dental-and-dentist-wda'),
				'Alegreya Sans' => esc_html__('Alegreya Sans', 'dental-and-dentist-wda'),
				'Lato' => esc_html__('Lato', 'dental-and-dentist-wda'),
				'Montserrat' => esc_html__('Montserrat', 'dental-and-dentist-wda'),
				'Oswald' => esc_html__('Oswald', 'dental-and-dentist-wda'),
				'Raleway' => esc_html__('Raleway', 'dental-and-dentist-wda'),
				'Inknut Antiqua' => esc_html__('Inknut Antiqua', 'dental-and-dentist-wda'),
				)
	));

    ##################------ Primary Button ------##################

	$wp_customize->add_section('wpdevart_dental_and_dentist_wda_primary_button_settings',array(
		'title'	=> esc_html__('Primary Button','dental-and-dentist-wda'),
		'priority'		=> null,
		'panel'         => 'wpdevart_dental_and_dentist_wda_general_settings_panel'
	));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_primary_button_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_primary_button_bg_color', esc_html('#f7f7f7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_primary_button_bg_color', array(
        'label' => esc_html__('Primary button background color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_primary_button_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_primary_button_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_primary_button_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_primary_button_border_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_primary_button_border_color', array(
        'label' => esc_html__('Primary button border color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_primary_button_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_primary_button_border_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_primary_button_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_primary_button_link_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_primary_button_link_color', array(
        'label' => esc_html__('Primary button text color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_primary_button_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_primary_button_link_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_primary_button_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_primary_button_bg_hover_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_primary_button_bg_hover_color', array(
        'label' => esc_html__('Primary button background hover color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_primary_button_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_primary_button_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_primary_button_border_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_primary_button_border_hover_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_primary_button_border_hover_color', array(
        'label' => esc_html__('Primary button border hover color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_primary_button_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_primary_button_border_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_primary_button_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_primary_button_link_hover_color', esc_html('#f7f7f7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_primary_button_link_hover_color', array(
        'label' => esc_html__('Primary button text hover color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_primary_button_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_primary_button_link_hover_color'
    )));

    ##################------ Colors ------##################

	$wp_customize->add_section('wpdevart_dental_and_dentist_wda_main_colors_settings',array(
		'title'	=> esc_html__('Colors','dental-and-dentist-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_dental_and_dentist_wda_general_settings_panel'
	));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_container_bg_color', esc_html('#f7f7f7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_bg_color', array(
        'label' => esc_html__('Main container background color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_main_colors_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_main_container_bg_color'
    )));
	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_container_heading_color', esc_html('#00bcd3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_heading_color', array(
        'label' => esc_html__('Main container heading color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_main_colors_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_main_container_heading_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_container_text_color', esc_html('#5c5a5a')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_text_color', array(
        'label' => esc_html__('Main container text color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_main_colors_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_main_container_text_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_container_link_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_link_color', array(
        'label' => esc_html__('Main container link color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_main_colors_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_main_container_link_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_container_link_hover_color', esc_html('#00bcd3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_link_hover_color', array(
        'label' => esc_html__('Main container link hover color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_main_colors_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_main_container_link_hover_color'
    )));

	##################------ Sidebar Colors ------##################

	$wp_customize->add_section('wpdevart_dental_and_dentist_wda_sidebar_colors_settings',array(
		'title'	=> esc_html__('Sidebar Colors','dental-and-dentist-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_dental_and_dentist_wda_general_settings_panel'
	));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_sidebar_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_container_sidebar_bg_color', esc_html('#f7f7f7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_sidebar_bg_color', array(
		'label' => esc_html__('Widgets background color','dental-and-dentist-wda'),
		'section' => 'wpdevart_dental_and_dentist_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_dental_and_dentist_wda_main_container_sidebar_bg_color'
	)));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_sidebar_shadow_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_container_sidebar_shadow_color', esc_html('#e3e3e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_sidebar_shadow_color', array(
		'label' => esc_html__('Widgets shadow color','dental-and-dentist-wda'),
		'section' => 'wpdevart_dental_and_dentist_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_dental_and_dentist_wda_main_container_sidebar_shadow_color'
	)));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_sidebar_heading_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_container_sidebar_heading_color', esc_html('#00bcd3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_sidebar_heading_color', array(
		'label' => esc_html__('Sidebar headings color','dental-and-dentist-wda'),
		'section' => 'wpdevart_dental_and_dentist_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_dental_and_dentist_wda_main_container_sidebar_heading_color'
	)));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_sidebar_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_container_sidebar_text_color', esc_html('#5c5a5a')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_sidebar_text_color', array(
		'label' => esc_html__('Sidebar text color','dental-and-dentist-wda'),
		'section' => 'wpdevart_dental_and_dentist_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_dental_and_dentist_wda_main_container_sidebar_text_color'
	)));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_sidebar_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_container_sidebar_link_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_sidebar_link_color', array(
		'label' => esc_html__('Sidebar link color','dental-and-dentist-wda'),
		'section' => 'wpdevart_dental_and_dentist_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_dental_and_dentist_wda_main_container_sidebar_link_color'
	)));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_sidebar_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_main_container_sidebar_link_hover_color', esc_html('#00bcd3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_sidebar_link_hover_color', array(
		'label' => esc_html__('Sidebar link hover color','dental-and-dentist-wda'),
		'section' => 'wpdevart_dental_and_dentist_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_dental_and_dentist_wda_main_container_sidebar_link_hover_color'
	)));

	##################------ Typography ------##################

	$wp_customize->add_section('wpdevart_dental_and_dentist_wda_text_link_typography_settings',array(
		'title'	=> esc_html__('Typography','dental-and-dentist-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_dental_and_dentist_wda_general_settings_panel'
	));

    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_main_container_text_font_size',
    array(
       'default' => esc_html('17'),
       'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_text_font_size',
		array(
		'label' => esc_html__( 'Main container text font-size (px)', 'dental-and-dentist-wda' ),
		'section' => 'wpdevart_dental_and_dentist_wda_text_link_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_main_container_link_font_size',
    array(
       'default' => esc_html('17'),
       'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_link_font_size',
		array(
		'label' => esc_html__( 'Main container link font-size (px)', 'dental-and-dentist-wda' ),
		'section' => 'wpdevart_dental_and_dentist_wda_text_link_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_link_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_link_font_weight',array(
			'label'	=> esc_html__('Link font weight','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_link_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_link_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','dental-and-dentist-wda'),
				'400' => esc_html__('Normal 400','dental-and-dentist-wda'),
				'600' => esc_html__('Semi-Bold 600','dental-and-dentist-wda'),
				'800' => esc_html__('Extra-Bold 800','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_link_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_link_font_style',array(
			'label'	=> esc_html__('Link font style','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_link_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_link_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','dental-and-dentist-wda'),
				'italic' => esc_html__('Italic','dental-and-dentist-wda'),
				)
	));	

	##################------ Typography H1 ------##################

	$wp_customize->add_section('wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',array(
		'title'	=> esc_html__('Typography H1, H2, H3, H4, H5, H6','dental-and-dentist-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_dental_and_dentist_wda_general_settings_panel'
	));

    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_main_container_heading_h1_font_size',
    array(
       'default' => esc_html('40'),
       'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_heading_h1_font_size',
		array(
		'label' => esc_html__( 'Heading H1 font-size (px)', 'dental-and-dentist-wda' ),
		'section' => 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('25'),
			'max' => esc_html('70'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h1_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h1_font_weight',array(
			'label'	=> esc_html__('Heading H1 font weight','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h1_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','dental-and-dentist-wda'),
				'400' => esc_html__('Normal 400','dental-and-dentist-wda'),
				'600' => esc_html__('Semi-Bold 600','dental-and-dentist-wda'),
				'800' => esc_html__('Extra-Bold 800','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h1_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h1_font_style',array(
			'label'	=> esc_html__('Heading H1 font style','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h1_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','dental-and-dentist-wda'),
				'italic' => esc_html__('Italic','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h1_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h1_font_transform',array(
			'label'	=> esc_html__('Heading H1 font transform','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h1_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','dental-and-dentist-wda'),
				'capitalize' => esc_html__('Capitalize','dental-and-dentist-wda'),
				'uppercase' => esc_html__('Uppercase','dental-and-dentist-wda'),
				'lowercase' => esc_html__('Lowercase','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h1_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h1_font_decoration',array(
			'label'	=> esc_html__('Heading H1 font decoration','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h1_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','dental-and-dentist-wda'),
				'underline' => esc_html__('Underline','dental-and-dentist-wda'),
				'line-through' => esc_html__('Line-through','dental-and-dentist-wda'),
				'overline' => esc_html__('Overline','dental-and-dentist-wda'),
				)
	));	

	##################------ Typography H2 ------##################

    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_main_container_heading_h2_font_size',
    array(
       'default' => esc_html('28'),
       'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_heading_h2_font_size',
		array(
		'label' => esc_html__( 'Heading H2 font-size (px)', 'dental-and-dentist-wda' ),
		'section' => 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('20'),
			'max' => esc_html('65'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h2_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h2_font_weight',array(
			'label'	=> esc_html__('Heading H2 font weight','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h2_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','dental-and-dentist-wda'),
				'400' => esc_html__('Normal 400','dental-and-dentist-wda'),
				'600' => esc_html__('Semi-Bold 600','dental-and-dentist-wda'),
				'800' => esc_html__('Extra-Bold 800','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h2_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h2_font_style',array(
			'label'	=> esc_html__('Heading H2 font style','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h2_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','dental-and-dentist-wda'),
				'italic' => esc_html__('Italic','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h2_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h2_font_transform',array(
			'label'	=> esc_html__('Heading H2 font transform','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h2_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','dental-and-dentist-wda'),
				'capitalize' => esc_html__('Capitalize','dental-and-dentist-wda'),
				'uppercase' => esc_html__('Uppercase','dental-and-dentist-wda'),
				'lowercase' => esc_html__('Lowercase','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h2_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h2_font_decoration',array(
			'label'	=> esc_html__('Heading H2 font decoration','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h2_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','dental-and-dentist-wda'),
				'underline' => esc_html__('Underline','dental-and-dentist-wda'),
				'line-through' => esc_html__('Line-through','dental-and-dentist-wda'),
				'overline' => esc_html__('Overline','dental-and-dentist-wda'),
				)
	));	

	##################------ Typography H3 ------##################

    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_main_container_heading_h3_font_size',
    array(
       'default' => esc_html('24'),
       'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_heading_h3_font_size',
		array(
		'label' => esc_html__( 'Heading H3 font-size (px)', 'dental-and-dentist-wda' ),
		'section' => 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('20'),
			'max' => esc_html('65'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h3_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h3_font_weight',array(
			'label'	=> esc_html__('Heading H3 font weight','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h3_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','dental-and-dentist-wda'),
				'400' => esc_html__('Normal 400','dental-and-dentist-wda'),
				'600' => esc_html__('Semi-Bold 600','dental-and-dentist-wda'),
				'800' => esc_html__('Extra-Bold 800','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h3_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h3_font_style',array(
			'label'	=> esc_html__('Heading H3 font style','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h3_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','dental-and-dentist-wda'),
				'italic' => esc_html__('Italic','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h3_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h3_font_transform',array(
			'label'	=> esc_html__('Heading H3 font transform','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h3_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','dental-and-dentist-wda'),
				'capitalize' => esc_html__('Capitalize','dental-and-dentist-wda'),
				'uppercase' => esc_html__('Uppercase','dental-and-dentist-wda'),
				'lowercase' => esc_html__('Lowercase','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h3_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h3_font_decoration',array(
			'label'	=> esc_html__('Heading H3 font decoration','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h3_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','dental-and-dentist-wda'),
				'underline' => esc_html__('Underline','dental-and-dentist-wda'),
				'line-through' => esc_html__('Line-through','dental-and-dentist-wda'),
				'overline' => esc_html__('Overline','dental-and-dentist-wda'),
				)
	));	

	##################------ Typography H4 ------##################

    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_main_container_heading_h4_font_size',
    array(
       'default' => esc_html('23'),
       'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_heading_h4_font_size',
		array(
		'label' => esc_html__( 'Heading H4 font-size (px)', 'dental-and-dentist-wda' ),
		'section' => 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h4_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h4_font_weight',array(
			'label'	=> esc_html__('Heading H4 font weight','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h4_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','dental-and-dentist-wda'),
				'400' => esc_html__('Normal 400','dental-and-dentist-wda'),
				'600' => esc_html__('Semi-Bold 600','dental-and-dentist-wda'),
				'800' => esc_html__('Extra-Bold 800','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h4_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h4_font_style',array(
			'label'	=> esc_html__('Heading H4 font style','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h4_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','dental-and-dentist-wda'),
				'italic' => esc_html__('Italic','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h4_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h4_font_transform',array(
			'label'	=> esc_html__('Heading H4 font transform','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h4_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','dental-and-dentist-wda'),
				'capitalize' => esc_html__('Capitalize','dental-and-dentist-wda'),
				'uppercase' => esc_html__('Uppercase','dental-and-dentist-wda'),
				'lowercase' => esc_html__('Lowercase','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h4_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h4_font_decoration',array(
			'label'	=> esc_html__('Heading H4 font decoration','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h4_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','dental-and-dentist-wda'),
				'underline' => esc_html__('Underline','dental-and-dentist-wda'),
				'line-through' => esc_html__('Line-through','dental-and-dentist-wda'),
				'overline' => esc_html__('Overline','dental-and-dentist-wda'),
				)
	));	

	##################------ Typography H5 ------##################

    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_main_container_heading_h5_font_size',
    array(
       'default' => esc_html('22'),
       'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_heading_h5_font_size',
		array(
		'label' => esc_html__( 'Heading H5 font-size (px)', 'dental-and-dentist-wda' ),
		'section' => 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h5_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h5_font_weight',array(
			'label'	=> esc_html__('Heading H5 font weight','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h5_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','dental-and-dentist-wda'),
				'400' => esc_html__('Normal 400','dental-and-dentist-wda'),
				'600' => esc_html__('Semi-Bold 600','dental-and-dentist-wda'),
				'800' => esc_html__('Extra-Bold 800','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h5_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h5_font_style',array(
			'label'	=> esc_html__('Heading H5 font style','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h5_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','dental-and-dentist-wda'),
				'italic' => esc_html__('Italic','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h5_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h5_font_transform',array(
			'label'	=> esc_html__('Heading H5 font transform','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h5_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','dental-and-dentist-wda'),
				'capitalize' => esc_html__('Capitalize','dental-and-dentist-wda'),
				'uppercase' => esc_html__('Uppercase','dental-and-dentist-wda'),
				'lowercase' => esc_html__('Lowercase','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h5_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h5_font_decoration',array(
			'label'	=> esc_html__('Heading H5 font decoration','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h5_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','dental-and-dentist-wda'),
				'underline' => esc_html__('Underline','dental-and-dentist-wda'),
				'line-through' => esc_html__('Line-through','dental-and-dentist-wda'),
				'overline' => esc_html__('Overline','dental-and-dentist-wda'),
				)
	));	

	##################------ Typography H6 ------##################

    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_main_container_heading_h6_font_size',
    array(
       'default' => esc_html('20'),
       'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_main_container_heading_h6_font_size',
		array(
		'label' => esc_html__( 'Heading H6 font-size (px)', 'dental-and-dentist-wda' ),
		'section' => 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h6_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h6_font_weight',array(
			'label'	=> esc_html__('Heading H6 font weight','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h6_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','dental-and-dentist-wda'),
				'400' => esc_html__('Normal 400','dental-and-dentist-wda'),
				'600' => esc_html__('Semi-Bold 600','dental-and-dentist-wda'),
				'800' => esc_html__('Extra-Bold 800','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h6_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h6_font_style',array(
			'label'	=> esc_html__('Heading H6 font style','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h6_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','dental-and-dentist-wda'),
				'italic' => esc_html__('Italic','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h6_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h6_font_transform',array(
			'label'	=> esc_html__('Heading H6 font transform','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h6_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','dental-and-dentist-wda'),
				'capitalize' => esc_html__('Capitalize','dental-and-dentist-wda'),
				'uppercase' => esc_html__('Uppercase','dental-and-dentist-wda'),
				'lowercase' => esc_html__('Lowercase','dental-and-dentist-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_main_container_heading_h6_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_main_container_heading_h6_font_decoration',array(
			'label'	=> esc_html__('Heading H6 font decoration','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_main_container_heading_h6_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','dental-and-dentist-wda'),
				'underline' => esc_html__('Underline','dental-and-dentist-wda'),
				'line-through' => esc_html__('Line-through','dental-and-dentist-wda'),
				'overline' => esc_html__('Overline','dental-and-dentist-wda'),
				)
	));