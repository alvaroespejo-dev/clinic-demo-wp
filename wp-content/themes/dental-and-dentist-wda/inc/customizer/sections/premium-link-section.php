<?php

##################------ Pro Button Section ------##################
	$wp_customize->register_section_type( 'wpdevart_dental_and_dentist_wda_Section_Premium' );

	$wp_customize->add_section(
		new wpdevart_dental_and_dentist_wda_Section_Premium(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__('Dental and Dentist WDA','dental-and-dentist-wda'),
				'pro_text' => esc_html__('Premium','dental-and-dentist-wda'),
				'pro_url'  => apply_filters( 'parent_wpdevart_dental_and_dentist_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-dental-dentist-theme')),
				'priority'  => 10,
			)
		)
	);