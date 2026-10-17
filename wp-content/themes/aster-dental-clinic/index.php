<?php

/**
 * The main template file
 *
 * @link https://developer.WordPress.org/themes/basics/template-hierarchy/
 *
 * @package aster_dental_clinic
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php

	if ( have_posts() ) :

		if ( is_home() && ! is_front_page() ) :

		endif;

		/* Start the Loop */
		while ( have_posts() ) :
			the_post();
			
			get_template_part( 'template-parts/content', get_post_type() );

		endwhile;

		do_action( 'aster_dental_clinic_posts_pagination' );

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</main>

<?php
if ( aster_dental_clinic_is_sidebar_enabled() ) {
	get_sidebar();
}
get_footer();