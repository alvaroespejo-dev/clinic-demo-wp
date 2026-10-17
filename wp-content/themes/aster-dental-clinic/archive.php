<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.WordPress.org/themes/basics/template-hierarchy/
 *
 * @package aster_dental_clinic
 */

get_header();

$aster_dental_clinic_column = get_theme_mod( 'aster_dental_clinic_archive_column_layout', 'column-1' );
?>
<main id="primary" class="site-main">
	<?php if ( have_posts() ) : ?>
		<div class="aster_dental_clinic-archive-layout grid-layout <?php echo esc_attr( $aster_dental_clinic_column ); ?>">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content',  get_post_format() );

			endwhile;
			?>
		</div>
		<?php
		do_action( 'aster_dental_clinic_posts_pagination' );
	else :
		get_template_part( 'template-parts/content', 'none' );
	endif;
	?>
</main><!-- #main -->
<?php
if ( aster_dental_clinic_is_sidebar_enabled() ) {
	get_sidebar();
}
get_footer();