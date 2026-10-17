<?php
/**
 * 404 page Customizer settings
 *
 * @package aster_dental_clinic
 */

/*=========================================
404 Page Section
=========================================*/
$wp_customize->add_section(
    '404_pg_options', array(
        'title' => esc_html__('404 Page', 'aster-dental-clinic'),
        'panel' => 'aster_dental_clinic_theme_options',
    )
);

// Title
$wp_customize->add_setting(
    'aster_dental_clinic_pg_404_ttl', array(
        'default'           => __('404 Page Not Found', 'aster-dental-clinic'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aster_dental_clinic_pg_404_ttl', array(
        'label'   => __('404 Page Title', 'aster-dental-clinic'),
        'section' => '404_pg_options',
        'type'    => 'text',
    )
);

// Image
$wp_customize->add_setting(
    'aster_dental_clinic_pg_404_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, 'aster_dental_clinic_pg_404_image', array(
        'label'    => __('404 Page Image', 'aster-dental-clinic'),
        'section'  => '404_pg_options',
        'settings' => 'aster_dental_clinic_pg_404_image',
    )
));

// Text
$wp_customize->add_setting(
    'aster_dental_clinic_pg_404_text', array(
        'default'           => __('Apologies, but the page you are seeking cannot be found.', 'aster-dental-clinic'),
        'sanitize_callback' => 'sanitize_textarea_field',
    )
);

$wp_customize->add_control(
    'aster_dental_clinic_pg_404_text', array(
        'label'    => __('404 Page Text', 'aster-dental-clinic'),
        'section' => '404_pg_options',
        'settings' => 'aster_dental_clinic_pg_404_text',
        'type'     => 'textarea',
    )
);

// Button Label
$wp_customize->add_setting(
    'aster_dental_clinic_pg_404_btn_lbl', array(
        'default'           => __('Go Back Home', 'aster-dental-clinic'),
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'aster_dental_clinic_pg_404_btn_lbl', array(
        'label'    => __('404 Button Label', 'aster-dental-clinic'),
        'section' => '404_pg_options',
        'settings' => 'aster_dental_clinic_pg_404_btn_lbl',
    )
);

// Button Link
$wp_customize->add_setting(
    'aster_dental_clinic_pg_404_btn_link', array(
        'default'           => esc_url(home_url('/')),
        'sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control(
    'aster_dental_clinic_pg_404_btn_link', array(
        'label'    => __('404 Button Link', 'aster-dental-clinic'),
        'section' => '404_pg_options',
        'settings' => 'aster_dental_clinic_pg_404_btn_link',
    )
);
?>
