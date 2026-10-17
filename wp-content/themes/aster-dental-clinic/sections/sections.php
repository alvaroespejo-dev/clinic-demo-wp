<?php

/**
 * Render homepage sections.
 */
function aster_dental_clinic_homepage_sections() {
	$aster_dental_clinic_homepage_sections = array_keys( aster_dental_clinic_get_homepage_sections() );

	foreach ( $aster_dental_clinic_homepage_sections as $aster_dental_clinic_section ) {
		require get_template_directory() . '/sections/' . $aster_dental_clinic_section . '.php';
	}
}