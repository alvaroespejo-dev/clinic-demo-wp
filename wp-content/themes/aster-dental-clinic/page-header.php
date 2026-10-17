<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! aster_dental_clinic_has_page_header() ) {
    return;
}

$aster_dental_clinic_classes = array( 'page-header' );
$aster_dental_clinic_style = aster_dental_clinic_page_header_style();

if ( $aster_dental_clinic_style ) {
    $aster_dental_clinic_classes[] = $aster_dental_clinic_style . '-page-header';
}

$aster_dental_clinic_visibility = get_theme_mod( 'aster_dental_clinic_page_header_visibility', 'all-devices' );

if ( 'hide-all-devices' === $aster_dental_clinic_visibility ) {
    // Don't show the header at all
    return;
}

if ( 'hide-tablet' === $aster_dental_clinic_visibility ) {
    $aster_dental_clinic_classes[] = 'hide-on-tablet';
} elseif ( 'hide-mobile' === $aster_dental_clinic_visibility ) {
    $aster_dental_clinic_classes[] = 'hide-on-mobile';
} elseif ( 'hide-tablet-mobile' === $aster_dental_clinic_visibility ) {
    $aster_dental_clinic_classes[] = 'hide-on-tablet-mobile';
}

$aster_dental_clinic_PAGE_TITLE_background_color = get_theme_mod('aster_dental_clinic_page_title_background_color_setting', '');

// Get the toggle switch value
$aster_dental_clinic_background_image_enabled = get_theme_mod('aster_dental_clinic_page_header_style', true);

// Add background image to the header if enabled
$aster_dental_clinic_background_image = get_theme_mod( 'aster_dental_clinic_page_header_background_image', '' );
$aster_dental_clinic_background_height = get_theme_mod( 'aster_dental_clinic_page_header_image_height', '200' );
$aster_dental_clinic_inline_style = '';

if ( $aster_dental_clinic_background_image_enabled && ! empty( $aster_dental_clinic_background_image ) ) {
    $aster_dental_clinic_inline_style .= 'background-image: url(' . esc_url( $aster_dental_clinic_background_image ) . '); ';
    $aster_dental_clinic_inline_style .= 'height: ' . esc_attr( $aster_dental_clinic_background_height ) . 'px; ';
    $aster_dental_clinic_inline_style .= 'background-size: cover; ';
    $aster_dental_clinic_inline_style .= 'background-position: center center; ';

    // Add the unique class if the background image is set
    $aster_dental_clinic_classes[] = 'has-background-image';
}

$aster_dental_clinic_classes = implode( ' ', $aster_dental_clinic_classes );
$aster_dental_clinic_heading = get_theme_mod( 'aster_dental_clinic_page_header_heading_tag', 'h1' );
$aster_dental_clinic_heading = apply_filters( 'aster_dental_clinic_page_header_heading', $aster_dental_clinic_heading );

?>

<?php do_action( 'aster_dental_clinic_before_page_header' ); ?>

<header class="<?php echo esc_attr( $aster_dental_clinic_classes ); ?>" style="<?php echo esc_attr( $aster_dental_clinic_inline_style ); ?> background-color: <?php echo esc_attr($aster_dental_clinic_PAGE_TITLE_background_color); ?>;">

    <?php do_action( 'aster_dental_clinic_before_page_header_inner' ); ?>

    <div class="asterthemes-wrapper page-header-inner">

        <?php if ( aster_dental_clinic_has_page_header() ) : ?>

            <<?php echo esc_attr( $aster_dental_clinic_heading ); ?> class="page-header-title">
                <?php echo wp_kses_post( aster_dental_clinic_get_page_title() ); ?>
            </<?php echo esc_attr( $aster_dental_clinic_heading ); ?>>

        <?php endif; ?>

        <?php if ( function_exists( 'aster_dental_clinic_breadcrumb' ) ) : ?>
            <?php aster_dental_clinic_breadcrumb(); ?>
        <?php endif; ?>

    </div><!-- .page-header-inner -->

    <?php do_action( 'aster_dental_clinic_after_page_header_inner' ); ?>

</header><!-- .page-header -->

<?php do_action( 'aster_dental_clinic_after_page_header' ); ?>