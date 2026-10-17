<?php

/**
 * Active Callbacks
 *
 * @package aster_dental_clinic
 */

// Theme Options.
function aster_dental_clinic_is_pagination_enabled( $aster_dental_clinic_control ) {
	return ( $aster_dental_clinic_control->manager->get_setting( 'aster_dental_clinic_enable_pagination' )->value() );
}
function aster_dental_clinic_is_breadcrumb_enabled( $aster_dental_clinic_control ) {
	return ( $aster_dental_clinic_control->manager->get_setting( 'aster_dental_clinic_enable_breadcrumb' )->value() );
}
function aster_dental_clinic_is_layout_enabled( $aster_dental_clinic_control ) {
	return ( $aster_dental_clinic_control->manager->get_setting( 'aster_dental_clinic_website_layout' )->value() );
}
function aster_dental_clinic_is_pagetitle_bcakground_image_enabled( $aster_dental_clinic_control ) {
	return ( $aster_dental_clinic_control->manager->get_setting( 'aster_dental_clinic_page_header_style' )->value() );
}
function aster_dental_clinic_is_preloader_style( $aster_dental_clinic_control ) {
	return ( $aster_dental_clinic_control->manager->get_setting( 'aster_dental_clinic_enable_preloader' )->value() );
}

// Header Options.
function aster_dental_clinic_is_topbar_enabled( $aster_dental_clinic_control ) {
	return ( $aster_dental_clinic_control->manager->get_Setting( 'aster_dental_clinic_enable_topbar' )->value() );
}

// Banner Slider Section.
function aster_dental_clinic_is_banner_slider_section_enabled( $aster_dental_clinic_control ) {
	return ( $aster_dental_clinic_control->manager->get_setting( 'aster_dental_clinic_enable_banner_section' )->value() );
}
function aster_dental_clinic_is_banner_slider_section_and_content_type_post_enabled( $aster_dental_clinic_control ) {
	$aster_dental_clinic_content_type = $aster_dental_clinic_control->manager->get_setting( 'aster_dental_clinic_banner_slider_content_type' )->value();
	return ( aster_dental_clinic_is_banner_slider_section_enabled( $aster_dental_clinic_control ) && ( 'post' === $aster_dental_clinic_content_type ) );
}
function aster_dental_clinic_is_banner_slider_section_and_content_type_page_enabled( $aster_dental_clinic_control ) {
	$aster_dental_clinic_content_type = $aster_dental_clinic_control->manager->get_setting( 'aster_dental_clinic_banner_slider_content_type' )->value();
	return ( aster_dental_clinic_is_banner_slider_section_enabled( $aster_dental_clinic_control ) && ( 'page' === $aster_dental_clinic_content_type ) );
}

// Places section.
function aster_dental_clinic_is_product_section_enabled( $aster_dental_clinic_control ) {
	return ( $aster_dental_clinic_control->manager->get_setting( 'aster_dental_clinic_enable_service_section' )->value() );
}
function aster_dental_clinic_is_product_section_and_content_type_post_enabled( $aster_dental_clinic_control ) {
	$aster_dental_clinic_content_type = $aster_dental_clinic_control->manager->get_setting( 'aster_dental_clinic_product_content_type' )->value();
	return ( aster_dental_clinic_is_product_section_enabled( $aster_dental_clinic_control ) && ( 'post' === $aster_dental_clinic_content_type ) );
}
function aster_dental_clinic_is_product_section_and_content_type_page_enabled( $aster_dental_clinic_control ) {
	$aster_dental_clinic_content_type = $aster_dental_clinic_control->manager->get_setting( 'aster_dental_clinic_product_content_type' )->value();
	return ( aster_dental_clinic_is_product_section_enabled( $aster_dental_clinic_control ) && ( 'page' === $aster_dental_clinic_content_type ) );
}