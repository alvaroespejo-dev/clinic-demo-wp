<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.WordPress.org/themes/basics/template-hierarchy/
 *
 * @package aster_dental_clinic
 */

$aster_dental_clinic_pg_no_results_ttl     = get_theme_mod( 'aster_dental_clinic_pg_no_results_ttl', __( 'Nothing Found', 'aster-dental-clinic' ) );
$aster_dental_clinic_pg_no_results_text    = get_theme_mod( 'aster_dental_clinic_pg_no_results_text', __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'aster-dental-clinic' ) );
?>
<section class="no-results not-found">
	<header class="nothing-found">
		<?php if (!empty($aster_dental_clinic_pg_no_results_ttl)) : ?> 
			<h1 class="page-title"><?php echo wp_kses_post($aster_dental_clinic_pg_no_results_ttl); ?></h1>
		<?php endif; ?> 
	</header>

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'aster-dental-clinic' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<?php if (!empty($aster_dental_clinic_pg_no_results_text)) : ?> 
				<p><?php echo wp_kses_post($aster_dental_clinic_pg_no_results_text); ?></p>
			<?php endif; ?>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'aster-dental-clinic' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->