<?php

/**
 * Template part for displaying Video Format
 *
 * @link https://developer.WordPress.org/themes/basics/template-hierarchy/
 *
 * @package aster_dental_clinic
 */

?>
<?php $aster_dental_clinic_readmore = get_theme_mod( 'aster_dental_clinic_readmore_button_text','Read More');?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="mag-post-single">
        <?php
			// Get the post ID
			$aster_dental_clinic_post_id = get_the_ID();

			// Check if there are videos embedded in the post content
			$aster_dental_clinic_post = get_post($aster_dental_clinic_post_id);
			$aster_dental_clinic_content = do_shortcode(apply_filters('the_content', $aster_dental_clinic_post->post_content));
			$aster_dental_clinic_embeds = get_media_embedded_in_content($aster_dental_clinic_content);

			if (!empty($aster_dental_clinic_embeds)) {
			    // Loop through embedded media and display videos
			    foreach ($aster_dental_clinic_embeds as $aster_dental_clinic_embed) {
			        // Check if the embed code contains a video tag or specific video providers like YouTube or Vimeo
			        if (strpos($aster_dental_clinic_embed, 'video') !== false || strpos($aster_dental_clinic_embed, 'youtube') !== false || strpos($aster_dental_clinic_embed, 'vimeo') !== false || strpos($aster_dental_clinic_embed, 'dailymotion') !== false || strpos($aster_dental_clinic_embed, 'vine') !== false || strpos($aster_dental_clinic_embed, 'WordPress.tv') !== false || strpos($aster_dental_clinic_embed, 'hulu') !== false) {
			            ?>
			            <div class="custom-embedded-video">
			                <div class="video-container">
			                    <?php echo $aster_dental_clinic_embed; ?>
			                </div>
			                <div class="video-comments">
			                    <?php
			                    // Add your comments section here
			                    comments_template(); // This will include the default WordPress comments template
			                    ?>
			                </div>
			            </div>
			            <?php
			        }
			    }
			}
	    ?>
		<div class="mag-post-detail">
			<div class="mag-post-category">
				<?php aster_dental_clinic_categories_list(); ?>
			</div>
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title mag-post-title">', '</h1>' );
			else :
				if ( get_theme_mod( 'aster_dental_clinic_post_hide_post_heading', true ) ) { 
					the_title( '<h2 class="entry-title mag-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			    }
			endif;
			?>
			<div class="mag-post-meta">
				<?php
				aster_dental_clinic_posted_on();
				aster_dental_clinic_posted_by();
				aster_dental_clinic_posted_comments();
				aster_dental_clinic_posted_time();
				?>
			</div>
			<?php if ( get_theme_mod( 'aster_dental_clinic_post_hide_post_content', true ) ) { ?>
				<div class="mag-post-excerpt">
					<?php the_excerpt(); ?>
				</div>
		    <?php } ?>
			<?php if ( get_theme_mod( 'aster_dental_clinic_post_readmore_button', true ) === true ) : ?>
				<div class="mag-post-read-more">
					<a href="<?php the_permalink(); ?>" class="read-more-button">
						<?php if ( ! empty( $aster_dental_clinic_readmore ) ) { ?> <?php echo esc_html( $aster_dental_clinic_readmore ); ?> <?php } ?>
						<i class="<?php echo esc_attr( get_theme_mod( 'aster_dental_clinic_postreadmore_btn_icon', 'fas fa-chevron-right' ) ); ?>"></i>
					</a>
				</div>
			<?php endif; ?>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->