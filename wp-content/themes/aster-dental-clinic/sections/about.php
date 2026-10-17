<?php

if ( ! get_theme_mod( 'aster_dental_clinic_enable_service_section', false ) ) {
	return;
}

$aster_dental_clinic_args = '';

aster_dental_clinic_render_service_section( $aster_dental_clinic_args );

/**
 * Render Service Section.
 */
function aster_dental_clinic_render_service_section( $aster_dental_clinic_args ) { ?>
	<section id="aster_dental_clinic_about_section" class="asterthemes-frontpage-section trending-section trending-style-1">
	<?php
	if ( is_customize_preview() ) :
		aster_dental_clinic_section_link( 'aster_dental_clinic_service_section' );
	endif;

	$aster_dental_clinic_about_heading = get_theme_mod( 'aster_dental_clinic_about_heading');
	$aster_dental_clinic_about_text = get_theme_mod( 'aster_dental_clinic_about_text');
	$aster_dental_clinic_about_button_label = get_theme_mod( 'aster_dental_clinic_about_button_label');
	$aster_dental_clinic_about_button_link = get_theme_mod( 'aster_dental_clinic_about_button_link');

	$aster_dental_clinic_about_left_image_1 = get_theme_mod( 'aster_dental_clinic_about_left_image_1');
	$aster_dental_clinic_about_left_image_2 = get_theme_mod( 'aster_dental_clinic_about_left_image_2');

	?>
	<div class="asterthemes-wrapper">
	  <div class="about-us">
		<?php if ( ! empty( $aster_dental_clinic_about_left_image_1 ) || ! empty( $aster_dental_clinic_about_left_image_2 ) ) { ?>
		  <div class="about-left-box">
			<div class="about-img-box-1">
			  <div class="about-img-1"></div>
			  <div class="about-img-2">
				<?php if ( ! empty( $aster_dental_clinic_about_left_image_1 ) ) { ?>
				  <div class="service-img">
					<img src="<?php echo esc_url( $aster_dental_clinic_about_left_image_1 ); ?>" alt="About Image 1">
				  </div>
				<?php } ?>
			  </div>
			</div>
			<div class="about-img-box-2">
			  <div class="about-img-3">
				<?php if ( ! empty( $aster_dental_clinic_about_left_image_2 ) ) { ?>
				  <div class="service-img">
					<img src="<?php echo esc_url( $aster_dental_clinic_about_left_image_2 ); ?>" alt="About Image 2">
				  </div>
				<?php } ?>
			  </div>
			  <div class="about-img-4">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/resource/img/about-left.png'); ?>" alt="Default About Image">
			  </div>
			</div>
		  </div>
		<?php } ?>
		<div class="about-right-box">
		  <?php if ( ! empty( $aster_dental_clinic_about_heading ) ) { ?>
			<div class="header-contact-inner">
			  <h3 data-text="heading"><?php echo esc_html( $aster_dental_clinic_about_heading ); ?></h3>
			</div>
		  <?php } ?>
		  <?php if ( ! empty( $aster_dental_clinic_about_text ) ) { ?>
			<div class="header-contact-inner">
			  <p><?php echo esc_html( $aster_dental_clinic_about_text ); ?></p>
			</div>
		  <?php } ?>
		  <?php if ( ! empty( $aster_dental_clinic_about_button_label ) ) { ?>
			<div class="about-btn">
			  <a href="<?php echo esc_url( $aster_dental_clinic_about_button_link ); ?>" class="asterthemes-button"><?php echo esc_html( $aster_dental_clinic_about_button_label ); ?> <i class="<?php echo esc_attr( get_theme_mod( 'aster_dental_clinic_readmore_btn_icon', 'fas fa-angle-double-right' ) ); ?>"></i></a>
			</div>
		  <?php } ?>
		</div>
	  </div>
	</div>
	</section>
	<?php
}