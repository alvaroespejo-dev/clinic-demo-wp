<?php
require get_template_directory() . '/resource/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function aster_dental_clinic_register_recommended_plugins_set() {
	$plugins = array(
		array(
			'name'             => __( 'WooCommerce', 'aster-dental-clinic' ),
			'slug'             => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'aster_dental_clinic_register_recommended_plugins_set' );



