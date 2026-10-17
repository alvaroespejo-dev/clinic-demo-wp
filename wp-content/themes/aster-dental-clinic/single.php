<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.WordPress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aster_dental_clinic
 */

get_header();
?>
<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'single' );

		do_action( 'aster_dental_clinic_post_navigation' );

		if ( is_singular( 'post' ) ) {
			$aster_dental_clinic_related_posts_label = get_theme_mod( 'aster_dental_clinic_post_related_post_label', 'Related Posts');
			$aster_dental_clinic_cat_content_id      = get_the_category( $post->ID )[0]->term_id;
			// Retrieve the number of related posts from customizer setting
			$aster_dental_clinic_related_posts_count = get_theme_mod( 'aster_dental_clinic_related_posts_count', 3);

			$aster_dental_clinic_args                = array(
				'cat'            => $aster_dental_clinic_cat_content_id,
				'posts_per_page' => $aster_dental_clinic_related_posts_count, // Use the customizer setting
			);

			$query = new WP_Query( $aster_dental_clinic_args );

			if ( $query->have_posts() ) :
				?>
				<div class="related-posts">
					<?php if ( get_theme_mod( 'aster_dental_clinic_post_hide_related_posts', true ) === true ) : ?>
						<h2><?php echo esc_html( $aster_dental_clinic_related_posts_label ); ?></h2>
						<div class="row">
							<?php
							while ( $query->have_posts() ) :
								$query->the_post();
								?>
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="mag-post-single">
										<div class="mag-post-img">
											<?php aster_dental_clinic_post_thumbnail(); ?>
										</div>
										<div class="mag-post-detail">
											<?php the_title( '<h5 class="entry-title mag-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' ); ?>
											<div class="mag-post-excerpt">
												<?php the_excerpt(); ?>
											</div>
										</div>
									</div>
								</article>
								<?php
							endwhile;
							wp_reset_postdata();
							?>
						</div>
					<?php endif; ?>
				</div>
				<?php
			endif;
		}

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</main>
<?php
if ( aster_dental_clinic_is_sidebar_enabled() ) {
	get_sidebar();
}
get_footer();