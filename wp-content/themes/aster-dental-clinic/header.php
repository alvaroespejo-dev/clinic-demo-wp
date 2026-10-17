<?php

/**
 * The header for our theme
 *
 * @link https://developer.WordPress.org/themes/basics/template-files/#template-partials
 *
 * @package aster_dental_clinic
 */
$aster_dental_clinic_menu_text_transform = get_theme_mod( 'aster_dental_clinic_menu_text_transform', 'capitalize' );
$aster_dental_clinic_menu_text_transform_css = ( $aster_dental_clinic_menu_text_transform !== 'capitalize' ) ? 'text-transform: ' . $aster_dental_clinic_menu_text_transform . ';' : '';
$aster_dental_clinic_header_button_label = get_theme_mod( 'aster_dental_clinic_header_button_label_');
$aster_dental_clinic_header_button_link  = get_theme_mod( 'aster_dental_clinic_header_button_link_');

$aster_dental_clinic_menu_text_color = get_theme_mod('aster_dental_clinic_menu_text_color', ''); 
$aster_dental_clinic_sub_menu_text_color = get_theme_mod('aster_dental_clinic_sub_menu_text_color', ''); 
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(get_theme_mod('aster_dental_clinic_website_layout', false) ? 'site-boxed--layout' : ''); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site asterthemes-site-wrapper">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'aster-dental-clinic' ); ?></a>
    <?php if (get_theme_mod('aster_dental_clinic_enable_preloader', false)) : ?>
        <div id="loader" class="<?php echo esc_attr(get_theme_mod('aster_dental_clinic_preloader_style', 'style1')); ?>">
            <div class="loader-container">
                <div id="preloader">
                    <?php 
                    $aster_dental_clinic_preloader_style = get_theme_mod('aster_dental_clinic_preloader_style', 'style1');
                    if ($aster_dental_clinic_preloader_style === 'style1') : ?>
                        <!-- STYLE 1 -->
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/resource/loader.gif'); ?>" alt="<?php esc_attr_e('Loading...', 'aster-dental-clinic'); ?>">
                    <?php elseif ($aster_dental_clinic_preloader_style === 'style2') : ?>
                        <!-- STYLE 2 -->
                        <div class="dot"></div>
                    <?php elseif ($aster_dental_clinic_preloader_style === 'style3') : ?>
                        <!-- STYLE 3 -->
                        <div class="bars">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<header id="masthead" class="site-header">
    <div class="header-main-wrapper">
        <div class="bottom-header-outer-wrapper">
            <div class="bottom-header-part">
                <div class="asterthemes-wrapper">
                    <div class="bottom-header-part-wrapper hello <?php echo esc_attr( get_theme_mod( 'aster_dental_clinic_enable_sticky_header', false ) ? 'sticky-header' : '' ); ?>">
                        <div class="bottom-header-middle-part">
                        <div class="site-branding">
                                <?php
                                // Check if the 'Enable Site Logo' setting is true.
                                if ( get_theme_mod( 'aster_dental_clinic_enable_site_logo', true ) ) {
                                    if ( has_custom_logo() ) { ?>
                                        <div class="site-logo">
                                            <?php the_custom_logo(); ?>
                                        </div>
                                    <?php } else { ?>
                                        <div class="site-logo">
                                            <!-- Fallback logo if no custom logo is set -->
                                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                                <img src="<?php echo esc_url(get_template_directory_uri() . '/resource/img/logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
                                            </a>
                                        </div>
                                    <?php }
                                } ?>
                                <div class="site-identity">
                                    <?php
                                    $aster_dental_clinic_site_title_size = get_theme_mod('aster_dental_clinic_site_title_size', 30);

                                    if (get_theme_mod('aster_dental_clinic_enable_site_title_setting', false)) {
                                        if (is_front_page() && is_home()) : ?>
                                            <h1 class="site-title" style="font-size: <?php echo esc_attr($aster_dental_clinic_site_title_size); ?>px;">
                                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                                            </h1>
                                        <?php else : ?>
                                            <p class="site-title" style="font-size: <?php echo esc_attr($aster_dental_clinic_site_title_size); ?>px;">
                                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                                            </p>
                                        <?php endif;
                                    }

                                    if (get_theme_mod('aster_dental_clinic_enable_tagline_setting', false)) :
                                        $aster_dental_clinic_description = get_bloginfo('description', 'display');
                                        if ($aster_dental_clinic_description || is_customize_preview()) : ?>
                                            <p class="site-description"><?php echo esc_html($aster_dental_clinic_description); ?></p>
                                        <?php endif;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-header-left-part">
                            <div class="navigation-part">
                                <nav id="site-navigation" class="main-navigation">
                                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                    <div class="main-navigation-links"  style="<?php echo esc_attr( $aster_dental_clinic_menu_text_transform_css ); ?>">
                                        <?php
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'primary',
                                                )
                                            );
                                        ?>
                                    </div>
                                    <style>
                                        /* Main Menu Links */
                                        .main-navigation ul li a, .menu a {
                                            color: <?php echo esc_attr($aster_dental_clinic_menu_text_color); ?>;
                                        }

                                        /* Submenu Links */
                                        .main-navigation ul.children a, 
                                        .home .main-navigation ul.children a, 
                                        .main-navigation ul.menu li .sub-menu a, 
                                        .home .main-navigation ul ul a {
                                            color: <?php echo esc_attr($aster_dental_clinic_sub_menu_text_color); ?>;
                                        }

                                    </style>
                                </nav>
                            </div>
                        </div>
                        <div class="bottom-header-right-part">
                            <?php
                                $aster_dental_clinic_enable_header_search_section = get_theme_mod( 'aster_dental_clinic_enable_header_search_section', true );
                                if ( $aster_dental_clinic_enable_header_search_section ) : ?>
                                <span class="search-main">
                                  <span class="btn">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                  </span>
                                  <div class="form">
                                    <form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <label>
                                            <span class="screen-reader-text"><?php echo esc_html( 'Search for:', 'label', 'aster-dental-clinic' ); ?></span>
                                            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'aster-dental-clinic' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                                        </label>
                                        <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo esc_html( 'Search', 'submit button', 'aster-dental-clinic' ); ?></span></button>
                                    </form>
                                  </div>
                                </span>
                            <?php endif; ?>
                            <?php if ( class_exists( 'woocommerce' ) ) {?>
                                <a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','aster-dental-clinic' ); ?>"><i class="fas fa-cart-plus mr-2"></i></a>
                            <?php }?>
                        </div>
                        <div class="bottom-header-right-part head-btn">
                            <?php if ( ! empty( $aster_dental_clinic_header_button_label ) ) { ?>
                                <div class="header-btn">
                                    <a href="<?php echo esc_url( $aster_dental_clinic_header_button_link ); ?>" class="asterthemes-button"><?php echo esc_html( $aster_dental_clinic_header_button_label ); ?></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php
    if ( ! is_front_page() || is_home() ) {
	if ( is_front_page() ) {
		require get_template_directory() . '/sections/sections.php';
		aster_dental_clinic_homepage_sections();
	}
	?>
    <?php
        if (!is_front_page() || is_home()) {
            get_template_part('page-header');
        }
    ?>
	<div id="content" class="site-content">
		<div class="asterthemes-wrapper">
			<div class="asterthemes-page">
			<?php } ?>