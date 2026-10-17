<?php
/**
 * Getting Started Page.
 *
 * @package aster_dental_clinic
 */


if( ! function_exists( 'aster_dental_clinic_getting_started_menu' ) ) :
/**
 * Adding Getting Started Page in admin menu
 */
function aster_dental_clinic_getting_started_menu(){	
	add_theme_page(
		__( 'Getting Started', 'aster-dental-clinic' ),
		__( 'Getting Started', 'aster-dental-clinic' ),
		'manage_options',
		'aster-dental-clinic-getting-started',
		'aster_dental_clinic_getting_started_page'
	);
}
endif;
add_action( 'admin_menu', 'aster_dental_clinic_getting_started_menu' );

if( ! function_exists( 'aster_dental_clinic_getting_started_admin_scripts' ) ) :
/**
 * Load Getting Started styles in the admin
 */
function aster_dental_clinic_getting_started_admin_scripts( $hook ){
	// Load styles only on our page
	if( 'appearance_page_aster-dental-clinic-getting-started' != $hook ) return;

    wp_enqueue_style( 'aster-dental-clinic-getting-started', get_template_directory_uri() . '/resource/css/getting-started.css', false, ASTER_DENTAL_CLINIC_THEME_VERSION );

    wp_enqueue_script( 'aster-dental-clinic-getting-started', get_template_directory_uri() . '/resource/js/getting-started.js', array( 'jquery' ), ASTER_DENTAL_CLINIC_THEME_VERSION, true );
}
endif;
add_action( 'admin_enqueue_scripts', 'aster_dental_clinic_getting_started_admin_scripts' );

if( ! function_exists( 'aster_dental_clinic_getting_started_page' ) ) :
/**
 * Callback function for admin page.
*/
function aster_dental_clinic_getting_started_page(){ 
	$aster_dental_clinic_theme = wp_get_theme();?>
	<div class="wrap getting-started container">
		<div class="getting-info">
			<div class="theme-intro">
				<div class="intro-wrap">
					<div class="intro cointaner">
						<div class="intro-content">
							<h3><?php echo esc_html( 'Welcome to', 'aster-dental-clinic' );?> <span class="theme-name"><?php echo esc_html( ASTER_DENTAL_CLINIC_THEME_NAME ); ?></span></h3>
							<p class="about-text">
								<?php
								// Remove last sentence of description.
								$aster_dental_clinic_description = explode( '. ', $aster_dental_clinic_theme->get( 'Description' ) );

								$aster_dental_clinic_description = implode( '. ', $aster_dental_clinic_description );

								echo esc_html( $aster_dental_clinic_description . '' );
							?></p>
							<div class="btns-getstart">
								<a href="<?php echo esc_url( ASTER_DENTAL_CLINIC_PREMIUM_PAGE ); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Get Premium', 'aster-dental-clinic' ); ?></a>
								<a href="<?php echo esc_url( ASTER_DENTAL_CLINIC_PRO_DEMO ); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Live Demo', 'aster-dental-clinic' ); ?></a>
								<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Customize Theme', 'aster-dental-clinic' ); ?></a>
							</div>
							<div class="btns-wizard">
                                <?php if ( ! get_option('is-demo-imported') ) : ?>
                                    <a class="wizard" href="<?php echo esc_url( admin_url( 'themes.php?page=asterdentalclinic-wizard' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Import Theme Demo', 'aster-dental-clinic' ); ?></a>
                                <?php else : ?>
                                    <a target="_blank" href="<?php echo esc_url( home_url() ); ?>" class="button button-primary view-site">
                                        <?php esc_html_e( 'Visit Your Website', 'aster-dental-clinic' ); ?>
                                    </a>
                                <?php endif; ?>
  							</div>
						</div>
						<div class="intro-img">
							<img src="<?php echo esc_url(get_template_directory_uri()) .'/theme-library/getting-started/images/bundle.png'; ?>" />										
							<br>
							<h4 class="bundle-text"><?php esc_html_e( 'WP Theme Bundle', 'aster-dental-clinic' ); ?></h4>
							<p class="about-text"><?php esc_html_e('Get access to a collection of premium WordPress themes in one bundle. Enjoy effortless website building, full customization, and dedicated customer support for a smooth, professional web experience.', 'aster-dental-clinic'); ?></p>
							<a class="button button-primary" href="<?php echo esc_url( ASTER_DENTAL_CLINIC_BUNDLE_PAGE ); ?>" title="<?php esc_attr_e( 'Go Pro', 'aster-dental-clinic' ); ?>" target="_blank">
								<?php esc_html_e( 'Exclusive Theme Bundle - $79', 'aster-dental-clinic' ); ?>
							</a>
						</div>
					</div>
				</div>
				<div class="cointaner panels">
					<ul class="inline-list">
						<li class="current">
							<a id="help" href="javascript:void(0);">
								<?php esc_html_e( 'Getting Started', 'aster-dental-clinic' ); ?>
							</a>
						</li>
						<li>
							<a id="free-pro-panel" href="javascript:void(0);">
								<?php esc_html_e( 'Free Vs Pro', 'aster-dental-clinic' ); ?>
							</a>
						</li>
					</ul>
					<div id="panel" class="panel">
						<?php require get_template_directory() . '/theme-library/getting-started/tabs/help-panel.php'; ?>
						<?php require get_template_directory() . '/theme-library/getting-started/tabs/free-vs-pro-panel.php'; ?>
						<?php require get_template_directory() . '/theme-library/getting-started/tabs/link-panel.php'; ?>
					</div>
				</div>
			</div>
			<div class="icons-info">
				<div class="icon-img">									
					<a href="<?php echo esc_url( ASTER_DENTAL_CLINIC_REVIEW ); ?>" title="<?php esc_attr_e( 'Review Theme', 'aster-dental-clinic' ); ?>" target="_blank">
						<img src="<?php echo esc_url(get_template_directory_uri()) .'/theme-library/getting-started/images/icon1.png'; ?>" />	
						<?php esc_html_e( 'Review Theme', 'aster-dental-clinic' ); ?>
					</a>
				</div>
				<div class="icon-img">									
					<a href="<?php echo esc_url( ASTER_DENTAL_CLINIC_SUPPORT ); ?>" title="<?php esc_attr_e( 'Contact Support', 'aster-dental-clinic' ); ?>" target="_blank">
						<img src="<?php echo esc_url(get_template_directory_uri()) .'/theme-library/getting-started/images/icon2.png'; ?>" />	
						<?php esc_html_e( 'Contact Support', 'aster-dental-clinic' ); ?>
					</a>
				</div>
				<div class="icon-img">									
					<a href="<?php echo esc_url( ASTER_DENTAL_CLINIC_THEME_DOCUMENTATION ); ?>" title="<?php esc_attr_e( 'Free Theme Documentation', 'aster-dental-clinic' ); ?>" target="_blank">
						<img src="<?php echo esc_url(get_template_directory_uri()) .'/theme-library/getting-started/images/icon3.png'; ?>" />	
						<?php esc_html_e( 'Free Theme Documentation', 'aster-dental-clinic' ); ?>
					</a>
				</div>
			</div>	
		</div>	
	</div>
	<?php
}
endif;