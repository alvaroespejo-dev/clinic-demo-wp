<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package aster_dental_clinic
 */

function aster_dental_clinic_body_classes( $aster_dental_clinic_classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$aster_dental_clinic_classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$aster_dental_clinic_classes[] = 'no-sidebar';
	}

	$aster_dental_clinic_classes[] = aster_dental_clinic_sidebar_layout();

	return $aster_dental_clinic_classes;
}
add_filter( 'body_class', 'aster_dental_clinic_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function aster_dental_clinic_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'aster_dental_clinic_pingback_header' );


/**
 * Get all posts for customizer Post content type.
 */
function aster_dental_clinic_get_post_choices() {
	$aster_dental_clinic_choices = array( '' => esc_html__( '--Select--', 'aster-dental-clinic' ) );
	$aster_dental_clinic_args    = array( 'numberposts' => -1 );
	$aster_dental_clinic_posts   = get_posts( $aster_dental_clinic_args );

	foreach ( $aster_dental_clinic_posts as $aster_dental_clinic_post ) {
		$aster_dental_clinic_id             = $aster_dental_clinic_post->ID;
		$aster_dental_clinic_title          = $aster_dental_clinic_post->post_title;
		$aster_dental_clinic_choices[ $aster_dental_clinic_id ] = $aster_dental_clinic_title;
	}

	return $aster_dental_clinic_choices;
}


/**
 * Get all pages for customizer Page content type.
 */
function aster_dental_clinic_get_page_choices() {
	$aster_dental_clinic_choices = array( '' => esc_html__( '--Select--', 'aster-dental-clinic' ) );
	$aster_dental_clinic_pages   = get_pages();

	foreach ( $aster_dental_clinic_pages as $aster_dental_clinic_page ) {
		$aster_dental_clinic_choices[ $aster_dental_clinic_page->ID ] = $aster_dental_clinic_page->post_title;
	}

	return $aster_dental_clinic_choices;
}

/**
 * Get all categories for customizer Category content type.
 */
function aster_dental_clinic_get_post_cat_choices() {
	$aster_dental_clinic_choices = array( '' => esc_html__( '--Select--', 'aster-dental-clinic' ) );
	$aster_dental_clinic_cats    = get_categories();

	foreach ( $aster_dental_clinic_cats as $aster_dental_clinic_cat ) {
		$aster_dental_clinic_choices[ $aster_dental_clinic_cat->term_id ] = $aster_dental_clinic_cat->name;
	}

	return $aster_dental_clinic_choices;
}

/**
 * Get all donation forms for customizer form content type.
 */
function aster_dental_clinic_get_post_donation_form_choices() {
	$aster_dental_clinic_choices = array( '' => esc_html__( '--Select--', 'aster-dental-clinic' ) );
	$aster_dental_clinic_posts   = get_posts(
		array(
			'post_type'   => 'give_forms',
			'numberposts' => -1,
		)
	);
	foreach ( $aster_dental_clinic_posts as $aster_dental_clinic_post ) {
		$aster_dental_clinic_choices[ $aster_dental_clinic_post->ID ] = $aster_dental_clinic_post->post_title;
	}
	return $aster_dental_clinic_choices;
}

if ( ! function_exists( 'aster_dental_clinic_excerpt_length' ) ) :
	/**
	 * Excerpt length.
	 */
	function aster_dental_clinic_excerpt_length( $aster_dental_clinic_length ) {
		if ( is_admin() ) {
			return $aster_dental_clinic_length;
		}

		return get_theme_mod( 'aster_dental_clinic_excerpt_length', 20 );
	}
endif;
add_filter( 'excerpt_length', 'aster_dental_clinic_excerpt_length', 999 );

if ( ! function_exists( 'aster_dental_clinic_excerpt_more' ) ) :
	/**
	 * Excerpt more.
	 */
	function aster_dental_clinic_excerpt_more( $aster_dental_clinic_more ) {
		if ( is_admin() ) {
			return $aster_dental_clinic_more;
		}

		return '&hellip;';
	}
endif;
add_filter( 'excerpt_more', 'aster_dental_clinic_excerpt_more' );

if ( ! function_exists( 'aster_dental_clinic_sidebar_layout' ) ) {
	/**
	 * Get sidebar layout.
	 */
	function aster_dental_clinic_sidebar_layout() {
		$aster_dental_clinic_sidebar_position      = get_theme_mod( 'aster_dental_clinic_sidebar_position', 'right-sidebar' );
		$aster_dental_clinic_sidebar_position_post = get_theme_mod( 'aster_dental_clinic_post_sidebar_position', 'right-sidebar' );
		$aster_dental_clinic_sidebar_position_page = get_theme_mod( 'aster_dental_clinic_page_sidebar_position', 'right-sidebar' );

		if ( is_home() ) {
			$aster_dental_clinic_sidebar_position = $aster_dental_clinic_sidebar_position_post;
		} elseif ( is_page() ) {
			$aster_dental_clinic_sidebar_position = $aster_dental_clinic_sidebar_position_page;
		}

		return $aster_dental_clinic_sidebar_position;
	}
}

if ( ! function_exists( 'aster_dental_clinic_is_sidebar_enabled' ) ) {
	/**
	 * Check if sidebar is enabled.
	 */
	function aster_dental_clinic_is_sidebar_enabled() {
		$aster_dental_clinic_sidebar_position      = get_theme_mod( 'aster_dental_clinic_sidebar_position', 'right-sidebar' );
		$aster_dental_clinic_sidebar_position_post = get_theme_mod( 'aster_dental_clinic_post_sidebar_position', 'right-sidebar' );
		$aster_dental_clinic_sidebar_position_page = get_theme_mod( 'aster_dental_clinic_page_sidebar_position', 'right-sidebar' );

		$aster_dental_clinic_sidebar_enabled = true;
		if ( is_single() || is_archive() || is_search() ) {
			if ( 'no-sidebar' === $aster_dental_clinic_sidebar_position ) {
				$aster_dental_clinic_sidebar_enabled = false;
			}
		} elseif ( is_home() ) {
			if ( 'no-sidebar' === $aster_dental_clinic_sidebar_position || 'no-sidebar' === $aster_dental_clinic_sidebar_position_post ) {
				$aster_dental_clinic_sidebar_enabled = false;
			}
		} elseif ( is_page() ) {
			if ( 'no-sidebar' === $aster_dental_clinic_sidebar_position || 'no-sidebar' === $aster_dental_clinic_sidebar_position_page ) {
				$aster_dental_clinic_sidebar_enabled = false;
			}
		}
		return $aster_dental_clinic_sidebar_enabled;
	}
}

if ( ! function_exists( 'aster_dental_clinic_get_homepage_sections ' ) ) {
	/**
	 * Returns homepage sections.
	 */
	function aster_dental_clinic_get_homepage_sections() {
		$aster_dental_clinic_sections = array(
			'banner'  => esc_html__( 'Banner Section', 'aster-dental-clinic' ),
			'about' => esc_html__( 'About Us Section', 'aster-dental-clinic' ),
		);
		return $aster_dental_clinic_sections;
	}
}

/**
 * Renders customizer section link
 */
function aster_dental_clinic_section_link( $aster_dental_clinic_section_id ) {
	$aster_dental_clinic_section_name      = str_replace( 'aster_dental_clinic_', ' ', $aster_dental_clinic_section_id );
	$aster_dental_clinic_section_name      = str_replace( '_', ' ', $aster_dental_clinic_section_name );
	$aster_dental_clinic_starting_notation = '#';
	?>
	<span class="section-link">
		<span class="section-link-title"><?php echo esc_html( $aster_dental_clinic_section_name ); ?></span>
	</span>
	<style type="text/css">
		<?php echo $aster_dental_clinic_starting_notation . $aster_dental_clinic_section_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>:hover .section-link {
			visibility: visible;
		}
	</style>
	<?php
}

/**
 * Adds customizer section link css
 */
function aster_dental_clinic_section_link_css() {
	if ( is_customize_preview() ) {
		?>
		<style type="text/css">
			.section-link {
				visibility: hidden;
				background-color: black;
				position: relative;
				top: 80px;
				z-index: 99;
				left: 40px;
				color: #fff;
				text-align: center;
				font-size: 20px;
				border-radius: 10px;
				padding: 20px 10px;
				text-transform: capitalize;
			}

			.section-link-title {
				padding: 0 10px;
			}

			.banner-section {
				position: relative;
			}

			.banner-section .section-link {
				position: absolute;
				top: 100px;
			}
		</style>
		<?php
	}
}
add_action( 'wp_head', 'aster_dental_clinic_section_link_css' );

/**
 * Breadcrumb.
 */
function aster_dental_clinic_breadcrumb( $aster_dental_clinic_args = array() ) {
	if ( ! get_theme_mod( 'aster_dental_clinic_enable_breadcrumb', true ) ) {
		return;
	}

	$aster_dental_clinic_args = array(
		'show_on_front' => false,
		'show_title'    => true,
		'show_browse'   => false,
	);
	breadcrumb_trail( $aster_dental_clinic_args );
}
add_action( 'aster_dental_clinic_breadcrumb', 'aster_dental_clinic_breadcrumb', 10 );

/**
 * Add separator for breadcrumb trail.
 */
function aster_dental_clinic_breadcrumb_trail_print_styles() {
	$aster_dental_clinic_breadcrumb_separator = get_theme_mod( 'aster_dental_clinic_breadcrumb_separator', '/' );

	$aster_dental_clinic_style = '
		.trail-items li::after {
			content: "' . $aster_dental_clinic_breadcrumb_separator . '";
		}'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	$aster_dental_clinic_style = apply_filters( 'aster_dental_clinic_breadcrumb_trail_inline_style', trim( str_replace( array( "\r", "\n", "\t", '  ' ), '', $aster_dental_clinic_style ) ) );

	if ( $aster_dental_clinic_style ) {
		echo "\n" . '<style type="text/css" id="breadcrumb-trail-css">' . $aster_dental_clinic_style . '</style>' . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
add_action( 'wp_head', 'aster_dental_clinic_breadcrumb_trail_print_styles' );

/**
 * Pagination for archive.
 */
function aster_dental_clinic_render_posts_pagination() {
	$aster_dental_clinic_is_pagination_enabled = get_theme_mod( 'aster_dental_clinic_enable_pagination', true );
	if ( $aster_dental_clinic_is_pagination_enabled ) {
		$aster_dental_clinic_pagination_type = get_theme_mod( 'aster_dental_clinic_pagination_type', 'default' );
		if ( 'default' === $aster_dental_clinic_pagination_type ) :
			the_posts_navigation();
		else :
			the_posts_pagination();
		endif;
	}
}
add_action( 'aster_dental_clinic_posts_pagination', 'aster_dental_clinic_render_posts_pagination', 10 );

/**
 * Pagination for single post.
 */
function aster_dental_clinic_render_post_navigation() {
	the_post_navigation(
		array(
			'prev_text' => '<span>&#10229;</span> <span class="nav-title">%title</span>',
			'next_text' => '<span class="nav-title">%title</span> <span>&#10230;</span>',
		)
	);
}
add_action( 'aster_dental_clinic_post_navigation', 'aster_dental_clinic_render_post_navigation' );

/**
 * Adds footer copyright text.
 */
function aster_dental_clinic_output_footer_copyright_content() {
    $aster_dental_clinic_theme_data = wp_get_theme();
    $aster_dental_clinic_copyright_text = get_theme_mod('aster_dental_clinic_footer_copyright_text');

    if (!empty($aster_dental_clinic_copyright_text)) {
        $aster_dental_clinic_text = esc_html($aster_dental_clinic_copyright_text);
    } else {
        $aster_dental_clinic_default_text = '<a href="'. esc_url(__('https://asterthemes.com/products/free-dental-WordPress-theme','aster-dental-clinic')) . '" target="_blank"> ' . esc_html($aster_dental_clinic_theme_data->get('Name')) . '</a>' . '&nbsp;' . esc_html__('by', 'aster-dental-clinic') . '&nbsp;<a target="_blank" href="' . esc_url($aster_dental_clinic_theme_data->get('AuthorURI')) . '">' . esc_html(ucwords($aster_dental_clinic_theme_data->get('Author'))) . '</a>';
		/* translators: %s: WordPress.org URL */
        $aster_dental_clinic_default_text .= sprintf(esc_html__(' | Powered by %s', 'aster-dental-clinic'), '<a href="' . esc_url(__('https://WordPress.org/', 'aster-dental-clinic')) . '" target="_blank">WordPress</a>. ');

        $aster_dental_clinic_text = $aster_dental_clinic_default_text;
    }
    ?>
    <span><?php echo wp_kses_post($aster_dental_clinic_text); ?></span>
    <?php
}
add_action('aster_dental_clinic_footer_copyright', 'aster_dental_clinic_output_footer_copyright_content');

/* Footer Social Icons */ 
function aster_dental_clinic_footer_social_links() {

    if ( get_theme_mod('aster_dental_clinic_enable_footer_icon_section', true) ) {

            ?>
            <div class="socialicons">
				<div class="asterthemes-wrapper">
					<?php if ( get_theme_mod('aster_dental_clinic_footer_facebook_link', 'https://www.facebook.com/') != '' ) { ?>
						<a target="_blank" href="<?php echo esc_url(get_theme_mod('aster_dental_clinic_footer_facebook_link', 'https://www.facebook.com/')); ?>">
							<i class="<?php echo esc_attr(get_theme_mod('aster_dental_clinic_facebook_icon', 'fab fa-facebook-f')); ?>"></i>
							<span class="screen-reader-text"><?php esc_html_e('Facebook', 'aster-dental-clinic'); ?></span>
						</a>
					<?php } ?>
					<?php if ( get_theme_mod('aster_dental_clinic_footer_twitter_link', 'https://x.com/') != '' ) { ?>
						<a target="_blank" href="<?php echo esc_url(get_theme_mod('aster_dental_clinic_footer_twitter_link', 'https://x.com/')); ?>">
							<i class="<?php echo esc_attr(get_theme_mod('aster_dental_clinic_twitter_icon', 'fab fa-twitter')); ?>"></i>
							<span class="screen-reader-text"><?php esc_html_e('Twitter', 'aster-dental-clinic'); ?></span>
						</a>
					<?php } ?>
					<?php if ( get_theme_mod('aster_dental_clinic_footer_instagram_link', 'https://www.instagram.com/') != '' ) { ?>
						<a target="_blank" href="<?php echo esc_url(get_theme_mod('aster_dental_clinic_footer_instagram_link', 'https://www.instagram.com/')); ?>">
							<i class="<?php echo esc_attr(get_theme_mod('aster_dental_clinic_instagram_icon', 'fab fa-instagram')); ?>"></i>
							<span class="screen-reader-text"><?php esc_html_e('Instagram', 'aster-dental-clinic'); ?></span>
						</a>
					<?php } ?>
					<?php if ( get_theme_mod('aster_dental_clinic_footer_linkedin_link', 'https://in.linkedin.com/') != '' ) { ?>
						<a target="_blank" href="<?php echo esc_url(get_theme_mod('aster_dental_clinic_footer_linkedin_link', 'https://in.linkedin.com/')); ?>">
							<i class="<?php echo esc_attr(get_theme_mod('aster_dental_clinic_linkedin_icon', 'fab fa-linkedin')); ?>"></i>
							<span class="screen-reader-text"><?php esc_html_e('Linkedin', 'aster-dental-clinic'); ?></span>
						</a>
					<?php } ?>
					<?php if ( get_theme_mod('aster_dental_clinic_footer_youtube_link', 'https://www.youtube.com/') != '' ) { ?>
						<a target="_blank" href="<?php echo esc_url(get_theme_mod('aster_dental_clinic_footer_youtube_link', 'https://www.youtube.com/')); ?>">
							<i class="<?php echo esc_attr(get_theme_mod('aster_dental_clinic_youtube_icon', 'fab fa-youtube')); ?>"></i>
							<span class="screen-reader-text"><?php esc_html_e('Youtube', 'aster-dental-clinic'); ?></span>
						</a>
					<?php } ?>
				</div>
            </div>
            <?php
    }
}
add_action('wp_footer', 'aster_dental_clinic_footer_social_links');

if ( ! function_exists( 'aster_dental_clinic_footer_widget' ) ) :
	function aster_dental_clinic_footer_widget() {
		$aster_dental_clinic_footer_widget_column = get_theme_mod('aster_dental_clinic_footer_widget_column','4');

		$aster_dental_clinic_column_class = '';
		if ($aster_dental_clinic_footer_widget_column == '1') {
			$aster_dental_clinic_column_class = 'one-column';
		} elseif ($aster_dental_clinic_footer_widget_column == '2') {
			$aster_dental_clinic_column_class = 'two-columns';
		} elseif ($aster_dental_clinic_footer_widget_column == '3') {
			$aster_dental_clinic_column_class = 'three-columns';
		} else {
			$aster_dental_clinic_column_class = 'four-columns';
		}
	
		if($aster_dental_clinic_footer_widget_column !== ''): 
		?>
		<div class="dt_footer-widgets <?php echo esc_attr($aster_dental_clinic_column_class); ?> wow bounceInUp delay-1000" data-wow-duration="2s">
			<div class="footer-widgets-column">
				<?php
				$footer_widgets_active = false;

				// Loop to check if any footer widget is active
				for ($i = 1; $i <= $aster_dental_clinic_footer_widget_column; $i++) {
					if (is_active_sidebar('aster-dental-clinic-footer-widget-' . $i)) {
						$footer_widgets_active = true;
						break;
					}
				}

				if ($footer_widgets_active) {
					// Display active footer widgets
					for ($i = 1; $i <= $aster_dental_clinic_footer_widget_column; $i++) {
						if (is_active_sidebar('aster-dental-clinic-footer-widget-' . $i)) : ?>
							<div class="footer-one-column">
								<?php dynamic_sidebar('aster-dental-clinic-footer-widget-' . $i); ?>
							</div>
						<?php endif;
					}
				} else {
				?>
				<div class="footer-one-column default-widgets">
					<aside id="search-2" class="widget widget_search default_footer_search">
						<div class="widget-header">
							<h4 class="widget-title"><?php esc_html_e('Search Here', 'aster-dental-clinic'); ?></h4>
						</div>
						<?php get_search_form(); ?>
					</aside>
				</div>
				<div class="footer-one-column default-widgets">
					<aside id="recent-posts-2" class="widget widget_recent_entries">
						<h2 class="widget-title"><?php esc_html_e('Recent Posts', 'aster-dental-clinic'); ?></h2>
						<ul>
							<?php
							$recent_posts = wp_get_recent_posts(array(
								'numberposts' => 5,
								'post_status' => 'publish',
							));
							foreach ($recent_posts as $post) {
								echo '<li><a href="' . esc_url(get_permalink($post['ID'])) . '">' . esc_html($post['post_title']) . '</a></li>';
							}
							wp_reset_query();
							?>
						</ul>
					</aside>
				</div>
				<div class="footer-one-column default-widgets">
					<aside id="recent-comments-2" class="widget widget_recent_comments">
						<h2 class="widget-title"><?php esc_html_e('Recent Comments', 'aster-dental-clinic'); ?></h2>
						<ul>
							<?php
							$recent_comments = get_comments(array(
								'number' => 5,
								'status' => 'approve',
							));
							foreach ($recent_comments as $comment) {
								echo '<li><a href="' . esc_url(get_comment_link($comment)) . '">' .
									/* translators: %s: details. */
									sprintf(esc_html__('Comment on %s', 'aster-dental-clinic'), get_the_title($comment->comment_post_ID)) .
									'</a></li>';
							}
							?>
						</ul>
					</aside>
				</div>
				<div class="footer-one-column default-widgets">
					<aside id="calendar-2" class="widget widget_calendar">
						<h2 class="widget-title"><?php esc_html_e('Calendar', 'aster-dental-clinic'); ?></h2>
						<?php get_calendar(); ?>
					</aside>
				</div>
			</div>
			<?php } ?>
		</div>
		<?php
		endif;
	}
	endif;
add_action( 'aster_dental_clinic_footer_widget', 'aster_dental_clinic_footer_widget' );

/**
 * GET START FUNCTION
 */

function aster_dental_clinic_getpage_css($hook) {
	wp_enqueue_script( 'aster-dental-clinic-admin-script', get_template_directory_uri() . '/resource/js/aster-dental-clinic-admin-notice-script.js', array( 'jquery' ) );
    wp_localize_script( 'aster-dental-clinic-admin-script', 'aster_dental_clinic_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
    wp_enqueue_style( 'aster-dental-clinic-notice-style', get_template_directory_uri() . '/resource/css/notice.css' );
}

add_action( 'admin_enqueue_scripts', 'aster_dental_clinic_getpage_css' );


add_action('wp_ajax_aster_dental_clinic_dismissable_notice', 'aster_dental_clinic_dismissable_notice');
function aster_dental_clinic_switch_theme() {
    delete_user_meta(get_current_user_id(), 'aster_dental_clinic_dismissable_notice');
}
add_action('after_switch_theme', 'aster_dental_clinic_switch_theme');
function aster_dental_clinic_dismissable_notice() {
    update_user_meta(get_current_user_id(), 'aster_dental_clinic_dismissable_notice', true);
    die();
}

function aster_dental_clinic_deprecated_hook_admin_notice() {
    global $aster_dental_clinic_pagenow;
    
    // Check if the current page is the one where you don't want the notice to appear
    if ( $aster_dental_clinic_pagenow === 'themes.php' && isset( $_GET['page'] ) && $_GET['page'] === 'aster-dental-clinic-getting-started' ) {
        return;
    }

    $aster_dental_clinic_dismissed = get_user_meta( get_current_user_id(), 'aster_dental_clinic_dismissable_notice', true );
    if ( !$aster_dental_clinic_dismissed) { ?>
        <div class="getstrat updated notice notice-success is-dismissible notice-get-started-class">
            <div class="at-admin-content" >
                <h2><?php esc_html_e('Welcome to Aster Dental Clinic', 'aster-dental-clinic'); ?></h2>
                <p><?php _e('Explore the features of our Pro Theme and take your Dental journey to the next level.', 'aster-dental-clinic'); ?></p>
                <p ><?php _e('Get Started With Theme By Clicking On Getting Started.', 'aster-dental-clinic'); ?><p>
                <div style="display: flex; justify-content: center; align-items:center; flex-wrap: wrap; gap: 5px">
                    <a class="admin-notice-btn button button-primary button-hero" href="<?php echo esc_url( admin_url( 'themes.php?page=aster-dental-clinic-getting-started' )); ?>"><?php esc_html_e( 'Get started', 'aster-dental-clinic' ) ?></a>
                    <a  class="admin-notice-btn button button-primary button-hero" target="_blank" href="https://demo.asterthemes.com/aster-dental-clinic"><?php esc_html_e('View Demo', 'aster-dental-clinic') ?></a>
                    <a  class="admin-notice-btn button button-primary button-hero" target="_blank" href="https://asterthemes.com/products/dentist-WordPress-theme"><?php esc_html_e('Buy Now', 'aster-dental-clinic') ?></a>
                    <a  class="admin-notice-btn button button-primary button-hero" target="_blank" href="<?php echo esc_url( ASTER_DENTAL_CLINIC_BUNDLE_PAGE ); ?>"><?php esc_html_e('Get Bundle', 'aster-dental-clinic') ?></a>
                </div>
            </div>
            <div class="at-admin-image">
                <img style="width: 100%;max-width: 320px;line-height: 40px;display: inline-block;vertical-align: top;border: 2px solid #ddd;border-radius: 4px;" src="<?php echo esc_url(get_stylesheet_directory_uri()) .'/screenshot.png'; ?>" />
            </div>
        </div>
    <?php }
}

add_action( 'admin_notices', 'aster_dental_clinic_deprecated_hook_admin_notice' );


//Admin Notice For Getstart
function aster_dental_clinic_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function aster_dental_clinic_footer_text_transform_css() {
    $aster_dental_clinic_footer_text_transform = get_theme_mod('footer_text_transform', 'capitalize');
    ?>
    <style type="text/css">
        .site-footer h4,footer#colophon h2.wp-block-heading,footer#colophon .widgettitle,footer#colophon .widget-title {
            text-transform: <?php echo esc_html($aster_dental_clinic_footer_text_transform); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'aster_dental_clinic_footer_text_transform_css');