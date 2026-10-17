<?php
/**
 * The template for displaying the footer
 * 
 * @link https://developer.WordPress.org/themes/basics/template-files/#template-partials
 *
 * @package aster_dental_clinic
 */

// Get the footer background color/image settings from customizer
$aster_dental_clinic_footer_background_color = get_theme_mod('aster_dental_clinic_footer_background_color_setting'); 
$aster_dental_clinic_footer_background_image = get_theme_mod('aster_dental_clinic_footer_background_image_setting');
$aster_dental_clinic_footer_background_attachment = get_theme_mod('aster_dental_clinic_footer_image_attachment_setting', 'scroll');
$aster_dental_clinic_footer_img_position = get_theme_mod('aster_dental_clinic_footer_img_position_setting', 'center center');

if (!is_front_page() || is_home()) {
    ?>
    </div>
    </div>
</div>
<?php } ?>

<footer id="colophon" class="site-footer">
    <?php if (get_theme_mod('aster_dental_clinic_enable_footer_section', true)) { ?>
        <div class="site-footer-top" style="
            background-color: <?php echo esc_attr( $aster_dental_clinic_footer_background_color ); ?>;
            <?php if ( $aster_dental_clinic_footer_background_image ) : ?>
                background-image: url(<?php echo esc_url( $aster_dental_clinic_footer_background_image ); ?>);
            <?php endif; ?>
            background-attachment: <?php echo esc_attr( $aster_dental_clinic_footer_background_attachment ); ?>;
            background-position: <?php echo esc_attr( $aster_dental_clinic_footer_img_position ); ?>;
            background-size: cover;
            background-repeat: no-repeat;
        ">
            <div class="asterthemes-wrapper">
                <div class="footer-widgets-wrapper">

                    <?php
                    // Footer Widget
                    do_action('aster_dental_clinic_footer_widget');
                    ?>

                </div>
            </div>
        </div>
    <?php } ?>
    <?php if (get_theme_mod('aster_dental_clinic_enable_copyright_section', true)) { ?>
        <div class="site-footer-bottom">
            <div class="asterthemes-wrapper">
                <div class="site-footer-bottom-wrapper">
                    <div class="site-info">
                        <?php
                        do_action('aster_dental_clinic_footer_copyright');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</footer>

<?php
$aster_dental_clinic_is_scroll_top_active = get_theme_mod( 'aster_dental_clinic_scroll_top', true );
if ( $aster_dental_clinic_is_scroll_top_active ) :
    $aster_dental_clinic_scroll_position = get_theme_mod( 'aster_dental_clinic_scroll_top_position', 'bottom-right' );
    $aster_dental_clinic_scroll_shape = get_theme_mod( 'aster_dental_clinic_scroll_top_shape', 'box' );
    
    ?>
    <style>
        #scroll-to-top {
            position: fixed;
            <?php
            switch ( $aster_dental_clinic_scroll_position ) {
                case 'bottom-left':
                    echo 'bottom: 25px; left: 20px;';
                    break;
                case 'bottom-center':
                    echo 'bottom: 25px; left: 50%; transform: translateX(-50%);';
                    break;
                default: // 'bottom-right'
                    echo 'bottom: 25px; right: 90px;';
            }
            ?>
        }
    </style>
    <a href="#" id="scroll-to-top" class="aster-dental-clinic-scroll-to-top <?php echo esc_attr($aster_dental_clinic_scroll_shape); ?>"><i class="<?php echo esc_attr( get_theme_mod( 'aster_dental_clinic_scroll_btn_icon', 'fas fa-chevron-up' ) ); ?>"></i></a>
<?php
endif;
?>
</div>

<?php wp_footer(); ?>

</body>

</html>