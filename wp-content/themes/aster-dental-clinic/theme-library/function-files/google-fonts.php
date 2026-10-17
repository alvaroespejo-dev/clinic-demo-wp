<?php
function aster_dental_clinic_get_all_google_fonts() {
    $aster_dental_clinic_webfonts_json = get_template_directory() . '/theme-library/google-webfonts.json';
    if ( ! file_exists( $aster_dental_clinic_webfonts_json ) ) {
        return array();
    }

    $aster_dental_clinic_fonts_json_data = file_get_contents( $aster_dental_clinic_webfonts_json );
    if ( false === $aster_dental_clinic_fonts_json_data ) {
        return array();
    }

    $aster_dental_clinic_all_fonts = json_decode( $aster_dental_clinic_fonts_json_data, true );
    if ( json_last_error() !== JSON_ERROR_NONE ) {
        return array();
    }

    $aster_dental_clinic_google_fonts = array();
    foreach ( $aster_dental_clinic_all_fonts as $aster_dental_clinic_font ) {
        $aster_dental_clinic_google_fonts[ $aster_dental_clinic_font['family'] ] = array(
            'family'   => $aster_dental_clinic_font['family'],
            'variants' => $aster_dental_clinic_font['variants'],
        );
    }
    return $aster_dental_clinic_google_fonts;
}


function aster_dental_clinic_get_all_google_font_families() {
    $aster_dental_clinic_google_fonts  = aster_dental_clinic_get_all_google_fonts();
    $aster_dental_clinic_font_families = array();
    foreach ( $aster_dental_clinic_google_fonts as $aster_dental_clinic_font ) {
        $aster_dental_clinic_font_families[ $aster_dental_clinic_font['family'] ] = $aster_dental_clinic_font['family'];
    }
    return $aster_dental_clinic_font_families;
}

function aster_dental_clinic_get_fonts_url() {
    $aster_dental_clinic_fonts_url = '';
    $aster_dental_clinic_fonts     = array();

    $aster_dental_clinic_all_fonts = aster_dental_clinic_get_all_google_fonts();

    if ( ! empty( get_theme_mod( 'aster_dental_clinic_site_title_font', 'Raleway' ) ) ) {
        $aster_dental_clinic_fonts[] = get_theme_mod( 'aster_dental_clinic_site_title_font', 'Raleway' );
    }

    if ( ! empty( get_theme_mod( 'aster_dental_clinic_site_description_font', 'Raleway' ) ) ) {
        $aster_dental_clinic_fonts[] = get_theme_mod( 'aster_dental_clinic_site_description_font', 'Raleway' );
    }

    if ( ! empty( get_theme_mod( 'aster_dental_clinic_header_font', 'Epilogue' ) ) ) {
        $aster_dental_clinic_fonts[] = get_theme_mod( 'aster_dental_clinic_header_font', 'Epilogue' );
    }

    if ( ! empty( get_theme_mod( 'aster_dental_clinic_content_font', 'Raleway' ) ) ) {
        $aster_dental_clinic_fonts[] = get_theme_mod( 'aster_dental_clinic_content_font', 'Raleway' );
    }

    $aster_dental_clinic_fonts = array_unique( $aster_dental_clinic_fonts );

    foreach ( $aster_dental_clinic_fonts as $aster_dental_clinic_font ) {
        $aster_dental_clinic_variants      = $aster_dental_clinic_all_fonts[ $aster_dental_clinic_font ]['variants'];
        $aster_dental_clinic_font_family[] = $aster_dental_clinic_font . ':' . implode( ',', $aster_dental_clinic_variants );
    }

    $aster_dental_clinic_query_args = array(
        'family' => urlencode( implode( '|', $aster_dental_clinic_font_family ) ),
    );

    if ( ! empty( $aster_dental_clinic_font_family ) ) {
        $aster_dental_clinic_fonts_url = add_query_arg( $aster_dental_clinic_query_args, 'https://fonts.googleapis.com/css' );
    }

    return $aster_dental_clinic_fonts_url;
}