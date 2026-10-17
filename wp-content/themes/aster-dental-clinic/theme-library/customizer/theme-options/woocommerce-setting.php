<?php

/**
 * WooCommerce Settings
 *
 * @package aster_dental_clinic
 */

$wp_customize->add_section(
	'aster_dental_clinic_woocommerce_settings',
	array(
		'panel' => 'aster_dental_clinic_theme_options',
		'title' => esc_html__( 'WooCommerce Settings', 'aster-dental-clinic' ),
	)
);

//WooCommerce - Products per page.
$wp_customize->add_setting( 'aster_dental_clinic_products_per_page', array(
    'default'           => 9,
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control( 'aster_dental_clinic_products_per_page', array(
    'type'        => 'number',
    'section'     => 'aster_dental_clinic_woocommerce_settings',
    'label'       => __( 'Products Per Page', 'aster-dental-clinic' ),
    'input_attrs' => array(
        'min'  => 0,
        'max'  => 50,
        'step' => 1,
    ),
));

//WooCommerce - Products per row.
$wp_customize->add_setting( 'aster_dental_clinic_products_per_row', array(
    'default'           => '3',
    'sanitize_callback' => 'aster_dental_clinic_sanitize_choices',
) );

$wp_customize->add_control( 'aster_dental_clinic_products_per_row', array(
    'label'    => __( 'Products Per Row', 'aster-dental-clinic' ),
    'section'  => 'aster_dental_clinic_woocommerce_settings',
    'settings' => 'aster_dental_clinic_products_per_row',
    'type'     => 'select',
    'choices'  => array(
        '2' => '2',
		'3' => '3',
		'4' => '4',
    ),
) );

//WooCommerce - Show / Hide Related Product.
$wp_customize->add_setting(
	'aster_dental_clinic_related_product_show_hide',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_dental_clinic_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Dental_Clinic_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_dental_clinic_related_product_show_hide',
		array(
			'label'   => esc_html__( 'Show / Hide Related product', 'aster-dental-clinic' ),
			'section' => 'aster_dental_clinic_woocommerce_settings',
		)
	)
);

// WooCommerce - Product Sale Position.
$wp_customize->add_setting(
	'aster_dental_clinic_product_sale_position', 
	array(
		'default' => 'left',
		'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control(
	'aster_dental_clinic_product_sale_position', 
	array(
		'label' => __('Product Sale Position', 'aster-dental-clinic'),
		'section' => 'aster_dental_clinic_woocommerce_settings',
		'settings' => 'aster_dental_clinic_product_sale_position',
		'type' => 'radio',
		'choices' => 
	array(
		'left' => __('Left', 'aster-dental-clinic'),
		'right' => __('Right', 'aster-dental-clinic'),
	),
));