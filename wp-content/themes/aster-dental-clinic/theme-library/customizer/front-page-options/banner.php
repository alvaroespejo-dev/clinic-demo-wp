<?php

/**
 * Banner Section
 *
 * @package aster_dental_clinic
 */

$wp_customize->add_section(
	'aster_dental_clinic_banner_section',
	array(
		'panel'    => 'aster_dental_clinic_front_page_options',
		'title'    => esc_html__( 'Banner Section', 'aster-dental-clinic' ),
		'priority' => 10,
	)
);

// Banner Section - Enable Section.
$wp_customize->add_setting(
	'aster_dental_clinic_enable_banner_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_enable_banner_section',
		array(
			'label'    => esc_html__( 'Enable Banner Section', 'aster-dental-clinic' ),
			'section'  => 'aster_dental_clinic_banner_section',
			'settings' => 'aster_dental_clinic_enable_banner_section',
		)
	)
);

// Banner Section - Button Label.
$wp_customize->add_setting(
	'aster_dental_clinic_banner_short_heading',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_banner_short_heading',
	array(
		'label'           => esc_html__( 'Banner Heading', 'aster-dental-clinic' ),
		'section'         => 'aster_dental_clinic_banner_section',
		'active_callback' => 'aster_dental_clinic_is_banner_slider_section_enabled',
		'settings'        => 'aster_dental_clinic_banner_short_heading',
		'type'            => 'text',
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'aster_dental_clinic_enable_banner_section',
		array(
			'selector' => '#aster_dental_clinic_banner_section .section-link',
			'settings' => 'aster_dental_clinic_enable_banner_section',
		)
	);
}


// Banner Section - Banner Slider Content Type.
$wp_customize->add_setting(
	'aster_dental_clinic_banner_slider_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'aster_dental_clinic_sanitize_select',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_banner_slider_content_type',
	array(
		'label'           => esc_html__( 'Select Banner Slider Content Type', 'aster-dental-clinic' ),
		'section'         => 'aster_dental_clinic_banner_section',
		'settings'        => 'aster_dental_clinic_banner_slider_content_type',
		'type'            => 'select',
		'active_callback' => 'aster_dental_clinic_is_banner_slider_section_enabled',
		'choices'         => array(
			'page' => esc_html__( 'Page', 'aster-dental-clinic' ),
			'post' => esc_html__( 'Post', 'aster-dental-clinic' ),
		),
	)
);

// Banner Slider Category Setting.
$wp_customize->add_setting('aster_dental_clinic_banner_slider_category', array(
	'default'           => 'slider',
	'sanitize_callback' => 'sanitize_text_field',
));

// Add custom control for Banner Slider Category with conditional visibility.
$wp_customize->add_control(new Aster_Dental_Clinic_Customize_Category_Dropdown_Control($wp_customize, 'aster_dental_clinic_banner_slider_category', array(
	'label'    => __('Select Banner Category', 'aster-dental-clinic'),
	'section'  => 'aster_dental_clinic_banner_section',
	'settings' => 'aster_dental_clinic_banner_slider_category',
	'active_callback' => function() use ($wp_customize) {
		return $wp_customize->get_setting('aster_dental_clinic_banner_slider_content_type')->value() === 'post';
	},
)));


for ( $aster_dental_clinic_i = 1; $aster_dental_clinic_i <= 3; $aster_dental_clinic_i++ ) {

	// Banner Section - Select Banner Post.
	$wp_customize->add_setting(
		'aster_dental_clinic_banner_slider_content_post_' . $aster_dental_clinic_i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'aster_dental_clinic_banner_slider_content_post_' . $aster_dental_clinic_i,
		array(
			/* translators: %d: Post Count. */
			'label'           => sprintf( esc_html__( 'Select Post %d', 'aster-dental-clinic' ), $aster_dental_clinic_i ),
			'description'     => sprintf( esc_html__( 'Kindly :- Select a Post based on the category selected in the upper settings', 'aster-dental-clinic' ), $aster_dental_clinic_i ),
			'section'         => 'aster_dental_clinic_banner_section',
			'settings'        => 'aster_dental_clinic_banner_slider_content_post_' . $aster_dental_clinic_i,
			'active_callback' => 'aster_dental_clinic_is_banner_slider_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => aster_dental_clinic_get_post_choices(),
		)
	);

	// Banner Section - Select Banner Page.
	$wp_customize->add_setting(
		'aster_dental_clinic_banner_slider_content_page_' . $aster_dental_clinic_i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'aster_dental_clinic_banner_slider_content_page_' . $aster_dental_clinic_i,
		array(
			/* translators: %d: Page Count. */
			'label'           => sprintf( esc_html__( 'Select Page %d', 'aster-dental-clinic' ), $aster_dental_clinic_i ),
			'section'         => 'aster_dental_clinic_banner_section',
			'settings'        => 'aster_dental_clinic_banner_slider_content_page_' . $aster_dental_clinic_i,
			'active_callback' => 'aster_dental_clinic_is_banner_slider_section_and_content_type_page_enabled',
			'type'            => 'select',
			'choices'         => aster_dental_clinic_get_page_choices(),
		)
	);

	// Banner Section - Button Label.
	$wp_customize->add_setting(
		'aster_dental_clinic_banner_button_label_' . $aster_dental_clinic_i,
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'aster_dental_clinic_banner_button_label_' . $aster_dental_clinic_i,
		array(
			/* translators: %d: Button Label 1 Count. */
			'label'           => sprintf( esc_html__( 'Button Label 1 %d', 'aster-dental-clinic' ), $aster_dental_clinic_i ),
			'section'         => 'aster_dental_clinic_banner_section',
			'settings'        => 'aster_dental_clinic_banner_button_label_' . $aster_dental_clinic_i,
			'type'            => 'text',
			'active_callback' => 'aster_dental_clinic_is_banner_slider_section_enabled',
		)
	);

	// Banner Section - Button Link.
	$wp_customize->add_setting(
		'aster_dental_clinic_banner_button_link_' . $aster_dental_clinic_i,
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'aster_dental_clinic_banner_button_link_' . $aster_dental_clinic_i,
		array(
			/* translators: %d: Button Link 1 Count. */
			'label'           => sprintf( esc_html__( 'Button Link 1 %d', 'aster-dental-clinic' ), $aster_dental_clinic_i ),
			'section'         => 'aster_dental_clinic_banner_section',
			'settings'        => 'aster_dental_clinic_banner_button_link_' . $aster_dental_clinic_i,
			'type'            => 'url',
			'active_callback' => 'aster_dental_clinic_is_banner_slider_section_enabled',
		)
	);

	// Banner Section - Button Label.
	$wp_customize->add_setting(
		'aster_dental_clinic_banner_second_button_label_' . $aster_dental_clinic_i,
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'aster_dental_clinic_banner_second_button_label_' . $aster_dental_clinic_i,
		array(
			/* translators: %d: Button Label 2 Count. */
			'label'           => sprintf( esc_html__( 'Button Label 2 %d', 'aster-dental-clinic' ), $aster_dental_clinic_i ),
			'section'         => 'aster_dental_clinic_banner_section',
			'settings'        => 'aster_dental_clinic_banner_second_button_label_' . $aster_dental_clinic_i,
			'type'            => 'text',
			'active_callback' => 'aster_dental_clinic_is_banner_slider_section_enabled',
		)
	);

	// Banner Section - Button Link.
	$wp_customize->add_setting(
		'aster_dental_clinic_banner_second_button_link_' . $aster_dental_clinic_i,
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'aster_dental_clinic_banner_second_button_link_' . $aster_dental_clinic_i,
		array(
			/* translators: %d: Button Link 2 Count. */
			'label'           => sprintf( esc_html__( 'Button Link 2 %d', 'aster-dental-clinic' ), $aster_dental_clinic_i ),
			'section'         => 'aster_dental_clinic_banner_section',
			'settings'        => 'aster_dental_clinic_banner_second_button_link_' . $aster_dental_clinic_i,
			'type'            => 'url',
			'active_callback' => 'aster_dental_clinic_is_banner_slider_section_enabled',
		)
	);
}

// Banner Button Label Color
$wp_customize->add_setting(
	'aster_dental_clinic_banner_btn_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'aster_dental_clinic_banner_btn_color',array(
			'label' => __('Banner Button Label Color','aster-dental-clinic'),
			'section' => 'aster_dental_clinic_banner_section',
			'settings' => 'aster_dental_clinic_banner_btn_color',
			'active_callback' => 'aster_dental_clinic_is_banner_slider_section_enabled',
		)
	)
);

// Banner Button Background Color
$wp_customize->add_setting('aster_dental_clinic_banner_btn_bg_color',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'aster_dental_clinic_banner_btn_bg_color',array(
			'label' => __('Banner Button Background Color','aster-dental-clinic'),
			'section' => 'aster_dental_clinic_banner_section',
			'settings' => 'aster_dental_clinic_banner_btn_bg_color',
			'active_callback' => 'aster_dental_clinic_is_banner_slider_section_enabled',
		)
	)
);
// Banner Button Border Color
$wp_customize->add_setting(
	'aster_dental_clinic_banner_btn_border_color',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'aster_dental_clinic_banner_btn_border_color',array(
			'label' => __('Banner Button Border Color','aster-dental-clinic'),
			'section' => 'aster_dental_clinic_banner_section',
			'settings' => 'aster_dental_clinic_banner_btn_border_color',
			'active_callback' => 'aster_dental_clinic_is_banner_slider_section_enabled',
		)
	)
);


$wp_customize->add_setting( 
	'aster_dental_clinic_banner_settings_upgraded_features',
	array(
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_banner_settings_upgraded_features', 
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
		'section' => 'aster_dental_clinic_banner_section'
	)
);