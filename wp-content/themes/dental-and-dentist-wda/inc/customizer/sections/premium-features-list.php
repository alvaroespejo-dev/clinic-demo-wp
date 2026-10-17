<?php

    $wp_customize->register_section_type( 'Wpdevart_Premium_Features_List' );


	##################------ Premium Features Sections ------##################

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_dental_and_dentist_wda_theme_general_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'dental-and-dentist-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_dental_and_dentist_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-dental-dentist-theme')),
				'premium_features_list' => array(
					esc_html__( '+40 Other Popular Fonts', 'dental-and-dentist-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'dental-and-dentist-wda' ),
					esc_html__( 'Preloader', 'dental-and-dentist-wda' ),
                    esc_html__( 'Button Animation', 'dental-and-dentist-wda' ),
                    esc_html__( '+13 Beautiful Patterns', 'dental-and-dentist-wda' ),
					esc_html__( 'Customizable Search Overlay', 'dental-and-dentist-wda' ),
					esc_html__( 'Back To Top Button', 'dental-and-dentist-wda' ),
					esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' ),
				),
				'panel'         => 'wpdevart_dental_and_dentist_wda_general_settings_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_dental_and_dentist_wda_theme_header_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'dental-and-dentist-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_dental_and_dentist_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-dental-dentist-theme')),
				'premium_features_list' => array(
					esc_html__( 'Sticky Header Feature', 'dental-and-dentist-wda' ),
					esc_html__( 'Sticky Header Feature for Mobile', 'dental-and-dentist-wda' ),
                    esc_html__( 'Logo Animations', 'dental-and-dentist-wda' ),
					esc_html__( 'Search Button Animations', 'dental-and-dentist-wda' ),
                    esc_html__( 'Woo Cart Animations', 'dental-and-dentist-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'dental-and-dentist-wda' ),
					esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' ),
				),
				'panel'         => 'wpdevart_dental_and_dentist_wda_header_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_dental_and_dentist_wda_theme_single_post_page_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'dental-and-dentist-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_dental_and_dentist_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-dental-dentist-theme')),
				'premium_features_list' => array(
					esc_html__( '+13 Beautiful Patterns', 'dental-and-dentist-wda' ),
                    esc_html__( 'Post/Page Title Animations', 'dental-and-dentist-wda' ),
					esc_html__( 'Post/Page Banner Animations', 'dental-and-dentist-wda' ),
                    esc_html__( '4 Animated Banner Elements', 'dental-and-dentist-wda' ),
					esc_html__( 'Animated Elements Colors', 'dental-and-dentist-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'dental-and-dentist-wda' ),
					esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' ),
				),
				'panel'         => 'wpdevart_dental_and_dentist_wda_single_post_page_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_dental_and_dentist_wda_theme_blog_archive_search_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'dental-and-dentist-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_dental_and_dentist_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-dental-dentist-theme')),
				'premium_features_list' => array(
					esc_html__( 'Images Hover Effects', 'dental-and-dentist-wda' ),
					esc_html__( 'Archive/Search Page Title Animations', 'dental-and-dentist-wda' ),
                    esc_html__( 'Archive/Search Page Banner Animations', 'dental-and-dentist-wda' ),
					esc_html__( '4 Animated Elements', 'dental-and-dentist-wda' ),
                    esc_html__( 'Animated Elements Colors', 'dental-and-dentist-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'dental-and-dentist-wda' ),
					esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' ),
				),
				'panel'         => 'wpdevart_dental_and_dentist_wda_blog_archive_search_panel',
				'priority'      => 7777,
			)
		)
	);

    $wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_dental_and_dentist_wda_theme_custom_homepage_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'dental-and-dentist-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_dental_and_dentist_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-dental-dentist-theme')),
				'premium_features_list' => array(
                    esc_html__( '+7 Beautiful Banner Themes', 'dental-and-dentist-wda' ),
                    esc_html__( 'Homepage Sections Positions', 'dental-and-dentist-wda' ),
					esc_html__( 'WooCommerce Section', 'dental-and-dentist-wda' ),
					esc_html__( 'Sales Section', 'dental-and-dentist-wda' ),
                    esc_html__( 'Benefits of Ordering Section', 'dental-and-dentist-wda' ),
                    esc_html__( 'Our Partners Section', 'dental-and-dentist-wda' ),
                    esc_html__( 'Shop by Category Section', 'dental-and-dentist-wda' ),
					esc_html__( 'Achievements Section', 'dental-and-dentist-wda' ),
					esc_html__( 'Advantages Section', 'dental-and-dentist-wda' ),
					esc_html__( 'Services Section', 'dental-and-dentist-wda' ),
					esc_html__( 'Team Members Section', 'dental-and-dentist-wda' ),
					esc_html__( '... and Other Sections', 'dental-and-dentist-wda' ),
					esc_html__( 'Sections Description Color', 'dental-and-dentist-wda' ),
					esc_html__( 'Sections Title Lines Color', 'dental-and-dentist-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'dental-and-dentist-wda' ),
					esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' ),
				),
				'panel'         => 'wpdevart_dental_and_dentist_wda_custom_homepage_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_dental_and_dentist_wda_theme_woo_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'dental-and-dentist-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_dental_and_dentist_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-dental-dentist-theme')),
				'premium_features_list' => array(
                    esc_html__( 'WooCommerce Search Bar Section', 'dental-and-dentist-wda' ),
                    esc_html__( 'Customizable Category List and Search Bar', 'dental-and-dentist-wda' ),
					esc_html__( 'WooCommerce Shop/Category Structure', 'dental-and-dentist-wda' ),
					esc_html__( 'WooCommerce Premium Sections', 'dental-and-dentist-wda' ),
					esc_html__( 'WooCommerce Breadcrumbs', 'dental-and-dentist-wda' ),
					esc_html__( 'WooCommerce Header Cart Design', 'dental-and-dentist-wda' ),
                    esc_html__( 'WooCommerce Button Animation', 'dental-and-dentist-wda' ),
					esc_html__( 'WooCommerce Sidebar Options', 'dental-and-dentist-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'dental-and-dentist-wda' ),
					esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' ),
				),
				'panel'         => 'wpdevart_dental_and_dentist_wda_woocommerce_settings_panel',
				'priority'      => 7777,
			)
		)
	);
        
    ##################------ Premium Features Controls------##################

    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_logo_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization',
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_dental_and_dentist_wda_logo_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'dental-and-dentist-wda' ),
        'section' => 'title_tagline',
        'priority' => 50,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Logo Animation', 'dental-and-dentist-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Text Logo Font-size', 'dental-and-dentist-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Text Logo Font Weight', 'dental-and-dentist-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Site Description Color', 'dental-and-dentist-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Site Description Font-size', 'dental-and-dentist-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_font_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_dental_and_dentist_wda_font_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_fonts_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+40 Other Popular Fonts', 'dental-and-dentist-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_primary_button_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_dental_and_dentist_wda_primary_button_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_primary_button_settings',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Button Animation', 'dental-and-dentist-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_header_general_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_dental_and_dentist_wda_header_general_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Sticky Header Feature', 'dental-and-dentist-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Sticky Header Feature for Mobile', 'dental-and-dentist-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Header Elements', 'dental-and-dentist-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_top_header_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_dental_and_dentist_wda_top_header_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_top_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Address Section', 'dental-and-dentist-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Phone/Email/Address Icon Color', 'dental-and-dentist-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Top Header Elements', 'dental-and-dentist-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' )
            ),
        )
    )
    ) );
    
    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_header_menu_search_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_dental_and_dentist_wda_header_menu_search_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_header_menu_search_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Search Button Animations', 'dental-and-dentist-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' )
            ),
        )
    )
    ) );

	if ( class_exists( 'WooCommerce' ) ) {
    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_woo_primary_button_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_dental_and_dentist_wda_woo_primary_button_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'dental-and-dentist-wda' ),
        'section' => 'woocommerce_primary_button_colors_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'WooCommerce Button Animation', 'dental-and-dentist-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' )
            ),
        )
    )
    ) );
    };

    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_single_post_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_post_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_single_post_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+13 Beautiful Patterns', 'dental-and-dentist-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Title Animations', 'dental-and-dentist-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Banner Animations', 'dental-and-dentist-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '4 Animated Elements', 'dental-and-dentist-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'dental-and-dentist-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_single_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_dental_and_dentist_wda_single_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_single_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+13 Beautiful Patterns', 'dental-and-dentist-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Title Animations', 'dental-and-dentist-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Banner Animations', 'dental-and-dentist-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '4 Animated Elements', 'dental-and-dentist-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'dental-and-dentist-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_blog_archive_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_dental_and_dentist_wda_blog_archive_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_blog_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'dental-and-dentist-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'dental-and-dentist-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'dental-and-dentist-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'dental-and-dentist-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_search_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_dental_and_dentist_wda_search_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_search_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'dental-and-dentist-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'dental-and-dentist-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'dental-and-dentist-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'dental-and-dentist-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_blog_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_dental_and_dentist_wda_blog_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_blog_archive_search_general_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Images Hover Effects', 'dental-and-dentist-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Ordering of Metas', 'dental-and-dentist-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_custom_homepage_banner_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_dental_and_dentist_wda_custom_homepage_banner_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_custom_homepage_banner_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+7 Beautiful Banner Themes', 'dental-and-dentist-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_dental_and_dentist_wda_footer_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_dental_and_dentist_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_dental_and_dentist_wda_footer_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'dental-and-dentist-wda' ),
        'section' => 'wpdevart_dental_and_dentist_wda_footer_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+4 Beautiful Footer Themes', 'dental-and-dentist-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Copyright Section Image', 'dental-and-dentist-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '... and Other Premium Features', 'dental-and-dentist-wda' )
            ),
        )
    )
    ) );