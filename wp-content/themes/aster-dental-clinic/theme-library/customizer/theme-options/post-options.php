<?php

/**
 * Post Options
 *
 * @package aster_dental_clinic
 */

$wp_customize->add_section(
	'aster_dental_clinic_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'aster-dental-clinic' ),
		'panel' => 'aster_dental_clinic_theme_options',
	)
);

// Post Options - Add Post Date Icon
$wp_customize->add_setting(
    'aster_dental_clinic_post_date_icon',
    array(
        'default' => 'far fa-clock', 
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
    )
);

$wp_customize->add_control(new aster_dental_clinic_Change_Icon_Control(
    $wp_customize, 
    'aster_dental_clinic_post_date_icon',
    array(
        'label'    => __('Add Date Icon','aster-dental-clinic'),
        'section'  => 'aster_dental_clinic_post_options',
        'iconset'  => 'fa',
    )
));

// Post Options - Show / Hide Date.
$wp_customize->add_setting(
	'aster_dental_clinic_post_hide_date',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_post_hide_date',
		array(
			'label'   => esc_html__( 'Show / Hide Date', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_post_options',
		)
	)
);

// Post Options - Add Post Author Icon
$wp_customize->add_setting(
    'aster_dental_clinic_post_author_icon',
    array(
        'default' => 'fas fa-user', 
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
    )
);

$wp_customize->add_control(new aster_dental_clinic_Change_Icon_Control(
    $wp_customize, 
    'aster_dental_clinic_post_author_icon',
    array(
        'label'    => __('Add Author Icon','aster-dental-clinic'),
        'section'  => 'aster_dental_clinic_post_options',
        'iconset'  => 'fa',
    )
));

// Post Options - Show / Hide Author.
$wp_customize->add_setting(
	'aster_dental_clinic_post_hide_author',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_post_hide_author',
		array(
			'label'   => esc_html__( 'Show / Hide Author', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_post_options',
		)
	)
);

// Post Options - Add Post Comments Icon
$wp_customize->add_setting(
    'aster_dental_clinic_post_comments_icon',
    array(
        'default' => 'fas fa-comments', 
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
    )
);

$wp_customize->add_control(new aster_dental_clinic_Change_Icon_Control(
    $wp_customize, 
    'aster_dental_clinic_post_comments_icon',
    array(
        'label'    => __('Add Comments Icon','aster-dental-clinic'),
        'section'  => 'aster_dental_clinic_post_options',
        'iconset'  => 'fa',
    )
));

// Post Options - Show / Hide Comments.
$wp_customize->add_setting(
	'aster_dental_clinic_post_hide_comments',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_post_hide_comments',
		array(
			'label'   => esc_html__( 'Show / Hide Comments', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_post_options',
		)
	)
);

// Post Options - Add Post Time Icon
$wp_customize->add_setting(
    'aster_dental_clinic_post_time_icon',
    array(
        'default' => 'fas fa-clock', 
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
    )
);

$wp_customize->add_control(new aster_dental_clinic_Change_Icon_Control(
    $wp_customize, 
    'aster_dental_clinic_post_time_icon',
    array(
        'label'    => __('Add Time Icon','aster-dental-clinic'),
        'section'  => 'aster_dental_clinic_post_options',
        'iconset'  => 'fa',
    )
));

// Post Options - Show / Hide Time.
$wp_customize->add_setting(
	'aster_dental_clinic_post_hide_time',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_post_hide_time',
		array(
			'label'   => esc_html__( 'Show / Hide Time', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_post_options',
		)
	)
);

// Post Options - Show / Hide Category.
$wp_customize->add_setting(
	'aster_dental_clinic_post_hide_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_post_hide_category',
		array(
			'label'   => esc_html__( 'Show / Hide Category', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_post_options',
		)
	)
);

// Post Options - Show / Hide Feature Image.
$wp_customize->add_setting(
	'aster_dental_clinic_post_hide_feature_image',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_post_hide_feature_image',
		array(
			'label'   => esc_html__( 'Show / Hide Featured Image', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_post_options',
		)
	)
);

// Post Options - Show / Hide Post Heading.
$wp_customize->add_setting(
	'aster_dental_clinic_post_hide_post_heading',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_post_hide_post_heading',
		array(
			'label'   => esc_html__( 'Show / Hide Post Heading', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_post_options',
		)
	)
);

// Post Options - Show / Hide Post Content.
$wp_customize->add_setting(
	'aster_dental_clinic_post_hide_post_content',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_post_hide_post_content',
		array(
			'label'   => esc_html__( 'Show / Hide Post Content', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_post_options',
		)
	)
);

// ---------------------------------------- Post layout ----------------------------------------------------

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_archive_layuout_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_archive_layuout_separator', array(
	'label' => __( 'Archive/Blogs Layout Setting', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_post_options',
	'settings' => 'aster_dental_clinic_archive_layuout_separator',
)));

// Archive Layout - Column Layout.
$wp_customize->add_setting(
	'aster_dental_clinic_archive_column_layout',
	array(
		'default'           => 'column-1',
		'sanitize_callback' => 'aster_dental_clinic_sanitize_select',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_archive_column_layout',
	array(
		'label'   => esc_html__( 'Select Posts Layout', 'aster-dental-clinic' ),
		'section' => 'aster_dental_clinic_post_options',
		'type'    => 'select',
		'choices' => array(
			'column-1' => __( 'Column 1', 'aster-dental-clinic' ),
			'column-2' => __( 'Column 2', 'aster-dental-clinic' ),
			'column-3' => __( 'Column 3', 'aster-dental-clinic' ),
		),
	)
);

$wp_customize->add_setting('aster_dental_clinic_blog_layout_option_setting',array(
	'default' => 'Left',
	'sanitize_callback' => 'aster_dental_clinic_sanitize_choices'
  ));
  $wp_customize->add_control(new Aster_Dental_Clinic_Image_Radio_Control($wp_customize, 'aster_dental_clinic_blog_layout_option_setting', array(
	'type' => 'select',
	'label' => __('Blog Content Alignment','aster-dental-clinic'),
	'section' => 'aster_dental_clinic_post_options',
	'choices' => array(
		'Left' => esc_url(get_template_directory_uri()).'/resource/img/layout-2.png',
		'Default' => esc_url(get_template_directory_uri()).'/resource/img/layout-1.png',
		'Right' => esc_url(get_template_directory_uri()).'/resource/img/layout-3.png',
))));


// ---------------------------------------- Read More ----------------------------------------------------

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_dental_clinic_readmore_separators', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Dental_Clinic_Separator_Custom_Control( $wp_customize, 'aster_dental_clinic_readmore_separators', array(
	'label' => __( 'Read More Button Settings', 'aster-dental-clinic' ),
	'section' => 'aster_dental_clinic_post_options',
	'settings' => 'aster_dental_clinic_readmore_separators',
)));


// Post Options - Show / Hide Read More Button.
$wp_customize->add_setting(
	'aster_dental_clinic_post_readmore_button',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_post_readmore_button',
		array(
			'label'   => esc_html__( 'Show / Hide Read More Button', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_post_options',
		)
	)
);

$wp_customize->add_setting(
    'aster_dental_clinic_postreadmore_btn_icon',
    array(
        'default' => 'fas fa-chevron-right', // Set default icon here
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
    )
);

$wp_customize->add_control(new Aster_Dental_Clinic_Change_Icon_Control(
    $wp_customize, 
    'aster_dental_clinic_postreadmore_btn_icon',
    array(
        'label'    => __('Read More Icon','aster-dental-clinic'),
        'section'  => 'aster_dental_clinic_post_options',
        'iconset'  => 'fa',
    )
));

$wp_customize->add_setting(
	'aster_dental_clinic_readmore_button_text',
	array(
		'default'           => 'Read More',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_readmore_button_text',
	array(
		'label'           => esc_html__( 'Read More Button Text', 'aster-dental-clinic' ),
		'section'         => 'aster_dental_clinic_post_options',
		'settings'        => 'aster_dental_clinic_readmore_button_text',
		'type'            => 'text',
	)
);


// Featured Image Dimension
$wp_customize->add_setting(
	'aster_dental_clinic_blog_post_featured_image_dimension',
	array(
		'default' => 'default',
		'sanitize_callback' => 'aster_dental_clinic_sanitize_choices'
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_blog_post_featured_image_dimension', 
	array(
		'type' => 'select',
		'label' => __('Featured Image Dimension','aster-dental-clinic'),
		'section' => 'aster_dental_clinic_post_options',
		'choices' => array(
			'default' => __('Default','aster-dental-clinic'),
			'custom' => __('Custom Image Size','aster-dental-clinic'),
		),
		'description' => __('Note: If you select "Custom Image Size", you can set a custom width and height up to 950px.', 'aster-dental-clinic')
	)
);
 
// Featured Image Custom Width
$wp_customize->add_setting(
	'aster_dental_clinic_blog_post_featured_image_custom_width',
	array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_blog_post_featured_image_custom_width',
	array(
		'label'	=> __('Featured Image Custom Width','aster-dental-clinic'),
		'section'=> 'aster_dental_clinic_post_options',
		'type'=> 'text',
		'input_attrs' => array(
			'placeholder' => __( '300', 'aster-dental-clinic' ),
		),
		'active_callback' => 'aster_dental_clinic_blog_post_featured_image_dimension'
	)
);

// Featured Image Custom Height
$wp_customize->add_setting(
	'aster_dental_clinic_blog_post_featured_image_custom_height',
	array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'aster_dental_clinic_blog_post_featured_image_custom_height',
	array(
		'label'	=> __('Featured Image Custom Height','aster-dental-clinic'),
		'section'=> 'aster_dental_clinic_post_options',
		'type'=> 'text',
		'input_attrs' => array(
			'placeholder' => __( '300', 'aster-dental-clinic' ),
		),
		'active_callback' => 'aster_dental_clinic_blog_post_featured_image_dimension'
	)
);

// Featured Image Border Radius
$wp_customize->add_setting( 
	'aster_dental_clinic_featured_image_border_radius', 
	array(
		'default'           => 10,
		'transport'         => 'refresh',
		'sanitize_callback' => 'aster_dental_clinic_sanitize_range_value',
	) 
);

$wp_customize->add_control( 
	'aster_dental_clinic_featured_image_border_radius', 
	array(
		'label'       => esc_html__( 'Featured Image Border Radius', 'aster-dental-clinic' ),
		'section'     => 'aster_dental_clinic_post_options',
		'type'        => 'range',
		'input_attrs' => array(
			'step' => 1,
			'min'  => 0,
			'max'  => 150,
		),
	) 
);

$wp_customize->add_setting('aster_dental_clinic_show_first_caps', array(
	'default'           => false,
	'transport'         => 'refresh',
	'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
));

$wp_customize->add_control(new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
	$wp_customize,
	'aster_dental_clinic_show_first_caps',
	array(
		'label'   => esc_html__('First Cap (First Capital Letter)', 'aster-dental-clinic'),
		'section' => 'aster_dental_clinic_post_options',
	)
));