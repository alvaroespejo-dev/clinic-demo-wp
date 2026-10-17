<?php 
	$wp_customize->add_panel( 'wpdevart_dental_and_dentist_wda_single_post_page_panel', 
	array(
		'title'	=> esc_html__('Single Post/Page','dental-and-dentist-wda'),			
		'description'	=> esc_html__('Single Post/Page settings','dental-and-dentist-wda'),		
		'priority'		=> 25
	) 
	);

	##################------ Single Post ------##################

	$wp_customize->add_section('wpdevart_dental_and_dentist_wda_single_post_section',array(
		'title'	=> esc_html__('Single Post','dental-and-dentist-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_dental_and_dentist_wda_single_post_page_panel'
	));

	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_post_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_single_post_banner_width',array(
			'label'	=> esc_html__('Single post banner width','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_single_post_section',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_single_post_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','dental-and-dentist-wda'),
				'wide' => esc_html__('Wide','dental-and-dentist-wda')
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_post_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_single_post_title_alignment',array(
			'label'	=> esc_html__('Position of elements','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_single_post_section',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_single_post_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','dental-and-dentist-wda'),
				'center' => esc_html__('Center','dental-and-dentist-wda'),
				'right' => esc_html__('Right','dental-and-dentist-wda')
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_post_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_single_post_banner_bg_color', esc_html('#edf7fb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_post_banner_bg_color', array(
        'label' => esc_html__('Single post banner BG color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_single_post_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_single_post_banner_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_post_banner_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_single_post_banner_gradient_type',array(
			'label'	=> esc_html__('Single post banner gradient type','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_single_post_section',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_single_post_banner_gradient_type',
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
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_post_banner_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_single_post_banner_gradient_color', esc_html('#edf7fb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_post_banner_gradient_color', array(
        'label' => esc_html__('Single post banner gradient color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_single_post_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_single_post_banner_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_post_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_single_post_banner_title_color', esc_html('#1e1e1e')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_post_banner_title_color', array(
        'label' => esc_html__('Banner/Single Post title color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_single_post_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_single_post_banner_title_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_post_banner_entry_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_single_post_banner_entry_text_color', esc_html('#5c5a5a')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_post_banner_entry_text_color', array(
        'label' => esc_html__('Banner text color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_single_post_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_single_post_banner_entry_text_color'
    )));
	$wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_post_banner_author_display',
    array(
       'default' => esc_html('1'),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_dental_and_dentist_wda_post_banner_author_display',
        array(
        'label' => esc_html__( 'Show author/date/comment line', 'dental-and-dentist-wda' ),
		'description' => esc_html__( 'Enable this option if you need to hide the author/date/comment line.', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_single_post_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_post_banner_entry_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_single_post_banner_entry_link_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_post_banner_entry_link_color', array(
        'label' => esc_html__('Banner link color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_single_post_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_single_post_banner_entry_link_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_post_banner_entry_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_single_post_banner_entry_link_hover_color', esc_html('#00bcd3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_post_banner_entry_link_hover_color', array(
        'label' => esc_html__('Banner link hover color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_single_post_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_single_post_banner_entry_link_hover_color'
    )));
    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_single_post_layout',
	array(
		'default' => esc_html('sidebarright'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_post_layout',
	array(
		'label' => esc_html__( 'Single Post Layout', 'dental-and-dentist-wda' ),
		'description' => esc_html__( 'Choose the single post layout.', 'dental-and-dentist-wda' ),
		'section' => 'wpdevart_dental_and_dentist_wda_single_post_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'dental-and-dentist-wda' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'dental-and-dentist-wda' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'dental-and-dentist-wda' )
		)
		)
	)
	) );

	##################------ Single Page ------##################

	$wp_customize->add_section('wpdevart_dental_and_dentist_wda_single_page_section',array(
		'title'	=> esc_html__('Single Page','dental-and-dentist-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_dental_and_dentist_wda_single_post_page_panel'
	));

	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_page_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_single_page_banner_width',array(
			'label'	=> esc_html__('Single page banner width','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_single_page_section',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_single_page_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','dental-and-dentist-wda'),
				'wide' => esc_html__('Wide','dental-and-dentist-wda')
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_page_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_single_page_title_alignment',array(
			'label'	=> esc_html__('Position of elements','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_single_page_section',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_single_page_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','dental-and-dentist-wda'),
				'center' => esc_html__('Center','dental-and-dentist-wda'),
				'right' => esc_html__('Right','dental-and-dentist-wda')
				)
	));	
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_page_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_single_page_banner_bg_color', esc_html('#edf7fb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_page_banner_bg_color', array(
        'label' => esc_html__('Single page banner BG color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_single_page_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_single_page_banner_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_page_banner_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_dental_and_dentist_wda_single_page_banner_gradient_type',array(
			'label'	=> esc_html__('Single page banner gradient type','dental-and-dentist-wda'),
			'section'	=> 'wpdevart_dental_and_dentist_wda_single_page_section',
			'setting'	=> 'wpdevart_dental_and_dentist_wda_single_page_banner_gradient_type',
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
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_page_banner_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_single_page_banner_gradient_color', esc_html('#edf7fb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_page_banner_gradient_color', array(
        'label' => esc_html__('Single page banner gradient color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_single_page_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_single_page_banner_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_page_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_single_page_banner_title_color', esc_html('#1e1e1e')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_page_banner_title_color', array(
        'label' => esc_html__('Banner/Single page title color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_single_page_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_single_page_banner_title_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_page_banner_entry_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_single_page_banner_entry_text_color', esc_html('#5c5a5a')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_page_banner_entry_text_color', array(
        'label' => esc_html__('Banner text color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_single_page_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_single_page_banner_entry_text_color'
    )));
	$wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_page_banner_author_display',
    array(
       'default' => esc_html('1'),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_dental_and_dentist_wda_page_banner_author_display',
        array(
        'label' => esc_html__( 'Show author/date/comment line', 'dental-and-dentist-wda' ),
		'description' => esc_html__( 'Enable this option if you need to hide the author/date/comment line.', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_single_page_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_page_banner_entry_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_single_page_banner_entry_link_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_page_banner_entry_link_color', array(
        'label' => esc_html__('Banner link color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_single_page_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_single_page_banner_entry_link_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_single_page_banner_entry_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_single_page_banner_entry_link_hover_color', esc_html('#00bcd3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_page_banner_entry_link_hover_color', array(
        'label' => esc_html__('Banner link hover color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_single_page_section',
        'settings' => 'wpdevart_dental_and_dentist_wda_single_page_banner_entry_link_hover_color'
    )));
    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_single_page_layout',
	array(
		'default' => esc_html('sidebarnone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_page_layout',
	array(
		'label' => esc_html__( 'Single Page Layout', 'dental-and-dentist-wda' ),
		'description' => esc_html__( 'Choose the single page layout.', 'dental-and-dentist-wda' ),
		'section' => 'wpdevart_dental_and_dentist_wda_single_page_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'dental-and-dentist-wda' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'dental-and-dentist-wda' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'dental-and-dentist-wda' )
		)
		)
	)
	) );

	##################------ Breadcrumbs ------##################

	$wp_customize->add_section('wpdevart_dental_and_dentist_wda_breadcrumbs_section',array(
		'title'	=> esc_html__('Breadcrumbs','dental-and-dentist-wda'),
		'description'	=> esc_html__('This section is for single posts and pages only. If you want to enable/edit WooCommerce breadcrumbs, you can do so from the WooCommerce WpDevArt section.','dental-and-dentist-wda'),	
		'priority'		=> null,
		'panel'         => 'wpdevart_dental_and_dentist_wda_single_post_page_panel'
	));

	$wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_post_breadcrumbs_display_option',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_dental_and_dentist_wda_post_breadcrumbs_display_option',
        array(
        'label' => esc_html__( 'Enable Post Breadcrumbs', 'dental-and-dentist-wda' ),
		'description' => esc_html__( 'Check the option if you need to display the breadcrumbs for the single post.', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_breadcrumbs_section'
        )
    ) );
	$wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_page_breadcrumbs_display_option',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_dental_and_dentist_wda_page_breadcrumbs_display_option',
        array(
        'label' => esc_html__( 'Enable Page Breadcrumbs', 'dental-and-dentist-wda' ),
		'description' => esc_html__( 'Check the option if you need to display the breadcrumbs for the single page.', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_breadcrumbs_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_page_breadcrumbs_home_text',array(
		'default'	=> esc_html('Home'),'dental-and-dentist-wda',
		'sanitize_callback'	=> 'wpdevart_dental_and_dentist_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_dental_and_dentist_wda_page_breadcrumbs_home_text',
            array(
                'label'    => esc_html__('Breadcrumb Home Text','dental-and-dentist-wda'),
                'section'  => 'wpdevart_dental_and_dentist_wda_breadcrumbs_section',
                'settings' => 'wpdevart_dental_and_dentist_wda_page_breadcrumbs_home_text',
                'type'     => 'text'
            )
        )
    );

	##################------ Comments ------##################

	$wp_customize->add_section('wpdevart_dental_and_dentist_wda_comments_settings',array(
		'title'	=> esc_html__('Comments Box','dental-and-dentist-wda'),
		'description'	=> esc_html__('The Comment Box is a block of user responses. Other comments section settings can be managed on the General settings page (for example, the Post Comment button can be controlled in the Primary Button section, or the text colors for Comment*, Name*, Email*, or Website can be controlled in the Colors section).','dental-and-dentist-wda'),	
		'priority'		=> null,
		'panel'         => 'wpdevart_dental_and_dentist_wda_single_post_page_panel'
	));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_comments_reply_box_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_comments_reply_box_bg_color', esc_html('#f7f7f7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_comments_reply_box_bg_color', array(
        'label' => esc_html__('Comments reply box background color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_comments_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_comments_reply_box_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_comments_reply_box_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_comments_reply_box_text_color', esc_html('#5c5a5a')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_comments_reply_box_text_color', array(
        'label' => esc_html__('Comments reply box text color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_comments_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_comments_reply_box_text_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_comments_reply_box_heading_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_comments_reply_box_heading_color', esc_html('#00bcd3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_comments_reply_box_heading_color', array(
        'label' => esc_html__('Comments reply box heading color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_comments_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_comments_reply_box_heading_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_comments_reply_box_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_comments_reply_box_link_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_comments_reply_box_link_color', array(
        'label' => esc_html__('Comments reply box link color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_comments_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_comments_reply_box_link_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_comments_reply_box_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_comments_reply_box_link_hover_color', esc_html('#00bcd3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_comments_reply_box_link_hover_color', array(
        'label' => esc_html__('Comments reply box link hover color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_comments_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_comments_reply_box_link_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_comments_reply_button_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_comments_reply_button_bg_color', esc_html('#f7f7f7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_comments_reply_button_bg_color', array(
        'label' => esc_html__('Comments reply button bg color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_comments_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_comments_reply_button_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_comments_reply_button_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_comments_reply_button_border_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_comments_reply_button_border_color', array(
        'label' => esc_html__('Comments reply button border color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_comments_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_comments_reply_button_border_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_comments_reply_button_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_comments_reply_button_link_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_comments_reply_button_link_color', array(
        'label' => esc_html__('Comments reply button link color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_comments_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_comments_reply_button_link_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_comments_reply_button_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_comments_reply_button_bg_hover_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_comments_reply_button_bg_hover_color', array(
        'label' => esc_html__('Comments reply button bg hover color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_comments_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_comments_reply_button_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_comments_reply_button_border_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_comments_reply_button_border_hover_color', esc_html('#1260f3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_comments_reply_button_border_hover_color', array(
        'label' => esc_html__('Comments reply button border hover color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_comments_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_comments_reply_button_border_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_dental_and_dentist_wda_comments_reply_button_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_dental_and_dentist_wda_comments_reply_button_link_hover_color', esc_html('#f7f7f7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_dental_and_dentist_wda_comments_reply_button_link_hover_color', array(
        'label' => esc_html__('Comments reply button link hover color','dental-and-dentist-wda'),
        'section' => 'wpdevart_dental_and_dentist_wda_comments_settings',
        'settings' => 'wpdevart_dental_and_dentist_wda_comments_reply_button_link_hover_color'
    )));