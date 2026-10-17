<?php
if ( ! get_theme_mod( 'aster_dental_clinic_enable_banner_section', false ) ) {
	return;
}

$aster_dental_clinic_slider_content_ids  = array();
$aster_dental_clinic_slider_content_type = get_theme_mod( 'aster_dental_clinic_banner_slider_content_type', 'post' );

for ( $aster_dental_clinic_i = 1; $aster_dental_clinic_i <= 3; $aster_dental_clinic_i++ ) {
	$aster_dental_clinic_slider_content_ids[] = get_theme_mod( 'aster_dental_clinic_banner_slider_content_' . $aster_dental_clinic_slider_content_type . '_' . $aster_dental_clinic_i );
}

// Get the category for the banner slider from theme mods or a default category
$aster_dental_clinic_banner_slider_category = get_theme_mod('aster_dental_clinic_banner_slider_category', 'slider');

// Modify query to fetch posts from a specific category
$aster_dental_clinic_banner_slider_args = array(
	'post_type'           => $aster_dental_clinic_slider_content_type,
	'post__in'            => array_filter( $aster_dental_clinic_slider_content_ids ),
	'orderby'             => 'post__in',
	'posts_per_page'      => absint(3),
	'ignore_sticky_posts' => true,
);

// Apply category filter only if content type is 'post'
if ( 'post' === $aster_dental_clinic_slider_content_type && ! empty( $aster_dental_clinic_banner_slider_category ) ) {
	$aster_dental_clinic_banner_slider_args['category_name'] = $aster_dental_clinic_banner_slider_category;
}

$aster_dental_clinic_banner_slider_args = apply_filters( 'aster_dental_clinic_banner_section_args', $aster_dental_clinic_banner_slider_args );

aster_dental_clinic_render_banner_section( $aster_dental_clinic_banner_slider_args );

/**
 * Render Banner Section.
 */
function aster_dental_clinic_render_banner_section( $aster_dental_clinic_banner_slider_args ) {     ?>

	<section id="aster_dental_clinic_banner_section" class="banner-section banner-style-1">
		<?php
		if ( is_customize_preview() ) :
			aster_dental_clinic_section_link( 'aster_dental_clinic_banner_section' );
		endif;
		?>
		<div class="banner-section-wrapper">
			<?php
			$query = new WP_Query( $aster_dental_clinic_banner_slider_args );
			if ( $query->have_posts() ) :
				?>
				<div class="asterthemes-banner-wrapper banner-slider aster-dental-clinic-carousel-navigation" data-slick='{"autoplay": false }'>
					<?php $aster_dental_clinic_banner_short_heading = get_theme_mod( 'aster_dental_clinic_banner_short_heading');
					$aster_dental_clinic_i = 1;
					while ( $query->have_posts() ) :
						$query->the_post();
						$aster_dental_clinic_button_label = get_theme_mod( 'aster_dental_clinic_banner_button_label_' . $aster_dental_clinic_i);
						$aster_dental_clinic_button_link  = get_theme_mod( 'aster_dental_clinic_banner_button_link_' . $aster_dental_clinic_i);
						$aster_dental_clinic_second_button_label = get_theme_mod( 'aster_dental_clinic_banner_second_button_label_' . $aster_dental_clinic_i);
						$aster_dental_clinic_second_button_link  = get_theme_mod( 'aster_dental_clinic_banner_second_button_link_' . $aster_dental_clinic_i);
						$aster_dental_clinic_button_link  = ! empty( $aster_dental_clinic_button_link ) ? $aster_dental_clinic_button_link : get_the_permalink();
						?>
						<div class="banner-single-outer">
							<div class="banner-single">
								<div class="banner-img">
									<?php the_post_thumbnail( 'full' ); ?>
								</div>
								<div class="banner-caption">
									<div class="asterthemes-wrapper">
										<div class="banner-catption-wrapper">
											<?php if ( ! empty( $aster_dental_clinic_banner_short_heading ) ) { ?>
												<h3><?php echo esc_html( $aster_dental_clinic_banner_short_heading ); ?></h3>
											<?php } ?>
											<h1 class="banner-caption-title wow fadeInDown" data-wow-duration="1.5s">
												<?php the_title(); ?>
											</h1>
											<?php if ( ! empty( $aster_dental_clinic_button_label ) ) { ?>
												<div class="banner-slider-btn">
													<a href="<?php echo esc_url( $aster_dental_clinic_button_link ); ?>" class="asterthemes-button"><?php echo esc_html( $aster_dental_clinic_button_label ); ?></a>
												</div>
											<?php } ?>
											<?php if ( ! empty( $aster_dental_clinic_second_button_label ) ) { ?>
												<div class="banner-slider-btn2">
													<a href="<?php echo esc_url( $aster_dental_clinic_second_button_link ); ?>" class="asterthemes-button"><?php echo esc_html( $aster_dental_clinic_second_button_label ); ?></a>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
						$aster_dental_clinic_i++;
					endwhile;
					wp_reset_postdata();
					?>
				</div>
				<?php
			endif;
			?>
		</div>
	</section>

	<?php
}
