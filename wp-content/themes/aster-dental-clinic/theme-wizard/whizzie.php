<?php
/**
* Wizard
* @package Whizzie
* @since 1.0.0
*/

class Whizzie {
	protected $version = '1.1.0';
	protected $theme_name = '';
	protected $theme_title = '';
	protected $page_slug = '';
	protected $page_title = '';
	protected $config_steps = array();
	public $parent_slug;
	/**
	 * Constructor
	 * @param $config Configuration parameters
	 */
	public function __construct( $config ) {
		$this->set_vars( $config );
		$this->init();
	}

	/**
	 * Set variables based on configuration
	 * @param $config Configuration parameters
	 */
	public function set_vars( $config ) {
		if ( isset( $config['page_slug'] ) ) {
			$this->page_slug = esc_attr( $config['page_slug'] );
		}
		if ( isset( $config['page_title'] ) ) {
			$this->page_title = esc_attr( $config['page_title'] );
		}
		if ( isset( $config['steps'] ) ) {
			$this->config_steps = $config['steps'];
		}

		$current_theme = wp_get_theme();
		$this->theme_title = $current_theme->get( 'Name' );
		$this->theme_name = strtolower( preg_replace( '#[^a-zA-Z]#', '', $current_theme->get( 'Name' ) ) );
		$this->page_slug = apply_filters( $this->theme_name . '_theme_setup_wizard_page_slug', $this->theme_name . '-wizard' );
		$this->parent_slug = apply_filters( $this->theme_name . '_theme_setup_wizard_parent_slug', '' );
	}

	/*** Initialize hooks and actions ***/
	public function init() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'admin_menu', array( $this, 'menu_page' ) );
		add_action( 'wp_ajax_setup_widgets', array( $this, 'setup_widgets' ) );
	}

	public function enqueue_scripts() {
		wp_enqueue_style( 'theme-wizard-style', get_template_directory_uri() . '/theme-wizard/assets/css/theme-wizard-style.css');
		wp_register_script( 'theme-wizard-script', get_template_directory_uri() . '/theme-wizard/assets/js/theme-wizard-script.js', array( 'jquery' ));
		wp_localize_script(
			'theme-wizard-script',
			'aster_dental_clinic_whizzie_params',
			array(
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
				'verify_text' => esc_html( 'verifying', 'aster-dental-clinic' )
			)
		);
		wp_enqueue_script( 'theme-wizard-script' );
	}

	public function menu_page() {
		add_theme_page( esc_html( $this->page_title ), esc_html( $this->page_title ), 'manage_options', $this->page_slug, array( $this, 'aster_dental_clinic_setup_wizard' ) );
	}

	/*** Display the wizard page content ***/
	public function wizard_page() { ?>
		<div class="main-wrap">
			<div class="card whizzie-wrap">
				<ul class="whizzie-menu">
					<?php foreach ( $this->get_steps() as $step ) : ?>
						<li data-step="<?php echo esc_attr( $step['id'] ); ?>" class="step step-<?php echo esc_attr( $step['id'] ); ?>">

							<h2><?php echo esc_html( $step['title'] ); ?></h2>

							<?php
							$content = call_user_func( array( $this, $step['view'] ) );
							?>

							<?php if ( isset( $content['summary'] ) ) : ?>
								<div class="summary">
									<?php echo wp_kses_post( $content['summary'] ); ?>
								</div>
							<?php endif; ?>

							<?php if ( isset( $content['detail'] ) ) : ?>
								<p>
									<a href="#" class="more-info">
										<?php esc_html_e( 'More Info', 'aster-dental-clinic' ); ?>
									</a>
								</p>
								<div class="detail">
									<?php echo wp_kses_post( $content['detail'] ); ?>
								</div>
							<?php endif; ?>

							<?php if ( ! empty( $step['button_text'] ) ) : ?>
								<div class="button-wrap">

									<?php if ( ! get_option( 'is-demo-imported' ) ) : ?>

										<a href="#"
										class="button button-primary do-it"
										data-callback="<?php echo esc_attr( $step['callback'] ); ?>"
										data-step="<?php echo esc_attr( $step['id'] ); ?>">
											<?php echo esc_html( $step['button_text'] ); ?>
										</a>

									<?php else : ?>

										<a target="_blank"
										href="<?php echo esc_url( home_url() ); ?>"
										class="button button-primary"
										style="font-size:20px;font-weight:600;">
											<?php esc_html_e( 'Visit Site', 'aster-dental-clinic' ); ?>
										</a>

									<?php endif; ?>

								</div>
							<?php endif; ?>

						</li>
					<?php endforeach; ?>
				</ul>
				<div class="step-loading">
					<span class="spinner"></span>
				</div>
			</div>
		</div>
	<?php }


	/*** Setup wizard page content and options ***/
	public function aster_dental_clinic_setup_wizard() { ?>
		<div class="wrapper-info get-stared-page-wrap">
			<div class="tab-sec theme-option-tab">
				<div id="demo_offer" class="tabcontent">
					<?php $this->wizard_page(); ?>
				</div>
			</div>
		</div>
	<?php }

	/**
	 * Get the steps for the wizard
	 * @return array
	 */
	public function get_steps() {
		$steps = array(
			'intro' => array(
				'id' => 'intro',
				'title' => __( 'Welcome to ', 'aster-dental-clinic' ) . $this->theme_title,
				'view' => 'get_step_intro',
				'callback' => 'do_next_step',
				'button_text' => __( 'Start Now', 'aster-dental-clinic' ),
				'can_skip' => false
			),
			'widgets' => array(
				'id' => 'widgets',
				'title' => __( 'Demo Importer', 'aster-dental-clinic' ),
				'view' => 'get_step_widgets',
				'callback' => 'install_widgets',
				'button_text' => __( 'Import Demo', 'aster-dental-clinic' ),
				'can_skip' => true
			),
			'done' => array(
				'id' => 'done',
				'title' => __( 'All Done', 'aster-dental-clinic' ),
				'view' => 'get_step_done'
			)
		);

		return $steps;
	}

	/*** Display the content for the intro step ***/
	public function get_step_intro() { ?>
		<div class="summary">
			<p style="text-align: center;"><?php esc_html_e( 'Thank you for choosing our theme! We are excited to help you get started with your new website.', 'aster-dental-clinic' ); ?></p>
			<p style="text-align: center;"><?php esc_html_e( 'This section will guide you through setting up and customizing the theme. You can follow the steps to import demo content or adjust settings at any time to make the website look and work the way you want.', 'aster-dental-clinic' ); ?></p>
		</div>
	<?php }

	/*** Display the content for the widgets step ***/
	public function get_step_widgets() { ?>
		<div class="summary">
			<p><?php esc_html_e('To get started, use the button below to import demo content and add widgets to your site. After installation, you can manage settings and customize your site using the Customizer. Enjoy your new theme!', 'aster-dental-clinic'); ?></p>
		</div>
	<?php }

	/*** Display the content for the final step ***/
	public function get_step_done() { ?>
		<div id="aster-demo-setup-guid">
			<div class="aster-setup-menu">
				<h3><?php esc_html_e('Setup Navigation Menu','aster-dental-clinic'); ?></h3>
				<p><?php esc_html_e('Follow the following Steps to Setup Menu','aster-dental-clinic'); ?></p>
				<h4><?php esc_html_e('A) Create Pages','aster-dental-clinic'); ?></h4>
				<ol>
					<li><?php esc_html_e('Go to Dashboard >> Pages >> Add New','aster-dental-clinic'); ?></li>
					<li><?php esc_html_e('Enter Page Details And Save Changes','aster-dental-clinic'); ?></li>
				</ol>
				<h4><?php esc_html_e('B) Add Pages To Menu','aster-dental-clinic'); ?></h4>
				<ol>
					<li><?php esc_html_e('Go to Dashboard >> Appearance >> Menu','aster-dental-clinic'); ?></li>
					<li><?php esc_html_e('Click On The Create Menu Option','aster-dental-clinic'); ?></li>
					<li><?php esc_html_e('Select The Pages And Click On The Add to Menu Button','aster-dental-clinic'); ?></li>
					<li><?php esc_html_e('Select Primary Menu From The Menu Setting','aster-dental-clinic'); ?></li>
					<li><?php esc_html_e('Click On The Save Menu Button','aster-dental-clinic'); ?></li>
				</ol>
			</div>
			<div class="aster-setup-widget">
				<h3><?php esc_html_e('Setup Footer Widgets','aster-dental-clinic'); ?></h3>
				<p><?php esc_html_e('Follow the following Steps to Setup Footer Widgets','aster-dental-clinic'); ?></p>
				<ol>
					<li><?php esc_html_e('Go to Dashboard >> Appearance >> Widgets','aster-dental-clinic'); ?></li>
					<li><?php esc_html_e('Drag And Add The Widgets In The Footer Columns','aster-dental-clinic'); ?></li>
				</ol>
			</div>
			<div style="display:flex; flex-wrap: wrap; justify-content: center; margin-top: 20px; gap:20px">
				<div class="aster-setup-finish">
					<a target="_blank" href="<?php echo esc_url(home_url()); ?>" class="button button-primary">Visit Site</a>
				</div>
				<div class="aster-setup-finish">
					<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>" class="button button-primary">Customize Your Demo</a>
				</div>
				<div class="aster-setup-finish">
					<a target="_blank" href="<?php echo esc_url( admin_url('themes.php?page=aster-dental-clinic-getting-started') ); ?>" class="button button-primary">Dashboard</a>
				</div>
			</div>
		</div>
	<?php }


	//                      ------------- MENUS -----------------                    //

	public function aster_dental_clinic_customizer_primary_menu(){

		// ------- Create Primary Menu --------
		$aster_dental_clinic_menuname = $aster_dental_clinic_themename . 'Primary Menu';
		$aster_dental_clinic_bpmenulocation = 'primary';
		$aster_dental_clinic_menu_exists = wp_get_nav_menu_object( $aster_dental_clinic_menuname );

		if( !$aster_dental_clinic_menu_exists){
			$aster_dental_clinic_menu_id = wp_create_nav_menu($aster_dental_clinic_menuname);
			$aster_dental_clinic_parent_item = 
			wp_update_nav_menu_item($aster_dental_clinic_menu_id, 0, array(
				'menu-item-title' =>  __('Home','aster-dental-clinic'),
				'menu-item-classes' => 'home',
				'menu-item-url' => home_url( '/' ),
				'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($aster_dental_clinic_menu_id, 0, array(
				'menu-item-title' =>  __('About Us','aster-dental-clinic'),
				'menu-item-classes' => 'about',
				'menu-item-url' => get_permalink(get_page_by_title('About Us')),
				'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($aster_dental_clinic_menu_id, 0, array(
				'menu-item-title' =>  __('Services','aster-dental-clinic'),
				'menu-item-classes' => 'services',
				'menu-item-url' => get_permalink(get_page_by_title('Services')),
				'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($aster_dental_clinic_menu_id, 0, array(
				'menu-item-title' =>  __('News','aster-dental-clinic'),
				'menu-item-classes' => 'news',
				'menu-item-url' => get_permalink(get_page_by_title('News')),
				'menu-item-status' => 'publish'));
			
			wp_update_nav_menu_item($aster_dental_clinic_menu_id, 0, array(
				'menu-item-title' =>  __('Blogs','aster-dental-clinic'),
				'menu-item-classes' => 'blog',
				'menu-item-url' => get_permalink(get_page_by_title('Blogs')),
				'menu-item-status' => 'publish'));

			if( !has_nav_menu( $aster_dental_clinic_bpmenulocation ) ){
				$locations = get_theme_mod('nav_menu_locations');
				$locations[$aster_dental_clinic_bpmenulocation] = $aster_dental_clinic_menu_id;
				set_theme_mod( 'nav_menu_locations', $locations );
			}
		}
	}


	//                      ------------- /*** Imports demo content ***/ -----------------                    //

	public function setup_widgets() {

		// Create a front page and assigned the template
		$aster_dental_clinic_home_title = 'Home';
		$aster_dental_clinic_home_check = get_page_by_title($aster_dental_clinic_home_title);
		$aster_dental_clinic_home = array(
			'post_type' => 'page',
			'post_title' => $aster_dental_clinic_home_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'home'
		);
		$aster_dental_clinic_home_id = wp_insert_post($aster_dental_clinic_home);

		//Set the static front page
		$aster_dental_clinic_home = get_page_by_title( 'Home' );
		update_option( 'page_on_front', $aster_dental_clinic_home->ID );
		update_option( 'show_on_front', 'page' );


		// Create a posts page and assigned the template
		$aster_dental_clinic_blog_title = 'Blogs';
		$aster_dental_clinic_blog = get_page_by_title($aster_dental_clinic_blog_title);

		if (!$aster_dental_clinic_blog) {
			$aster_dental_clinic_blog = array(
				'post_type' => 'page',
				'post_title' => $aster_dental_clinic_blog_title,
				'post_status' => 'publish',
				'post_author' => 1,
				'post_name' => 'blog'
			);
			$aster_dental_clinic_blog_id = wp_insert_post($aster_dental_clinic_blog);

			if (is_wp_error($aster_dental_clinic_blog_id)) {
				// Handle error
			}
		} else {
			$aster_dental_clinic_blog_id = $aster_dental_clinic_blog->ID;
		}
		// Set the posts page
		update_option('page_for_posts', $aster_dental_clinic_blog_id);

		
		// Create a about and assigned the template
		$aster_dental_clinic_about_title = 'About Us';
		$aster_dental_clinic_about_check = get_page_by_title($aster_dental_clinic_about_title);
		$aster_dental_clinic_about = array(
			'post_type' => 'page',
			'post_title' => $aster_dental_clinic_about_title,
			'post_content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'blog'
		);
		$aster_dental_clinic_about_id = wp_insert_post($aster_dental_clinic_about);

		
		// Create a Services and assigned the template
		$aster_dental_clinic_services_title = 'Services';
		$aster_dental_clinic_services_check = get_page_by_title($aster_dental_clinic_services_title);
		$aster_dental_clinic_services = array(
			'post_type' => 'page',
			'post_title' => $aster_dental_clinic_services_title,
			'post_content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'blog'
		);
		$aster_dental_clinic_services_id = wp_insert_post($aster_dental_clinic_services);

		
		// Create a News and assigned the template
		$aster_dental_clinic_news_title = 'News';
		$aster_dental_clinic_news_check = get_page_by_title($aster_dental_clinic_news_title);
		$aster_dental_clinic_news = array(
			'post_type' => 'page',
			'post_title' => $aster_dental_clinic_news_title,
			'post_content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'blog'
		);
		$aster_dental_clinic_news_id = wp_insert_post($aster_dental_clinic_news);

		/*----------------------------------------- Header Button --------------------------------------------------*/

			set_theme_mod( 'aster_dental_clinic_header_button_label_','Get Appointment');
			set_theme_mod( 'aster_dental_clinic_header_button_link_','#');
			set_theme_mod( 'aster_dental_clinic_contact_number','123456789');
			set_theme_mod( 'aster_dental_clinic_menu_custom_button_url','fas fa-phone-alt');


		// ------------------------------------------ Blogs for Sections --------------------------------------

			$slider_category = 'slider';
			$slider_category_id = get_cat_ID($slider_category);

			if ($slider_category_id == 0) { // Category doesn't exist, create it
				$slider_category_id = wp_create_category($slider_category);
			}

			// Loop to create posts
			for ($i = 1; $i <= 3; $i++) {

				$titles = array(
					'Your Trusted Partner in Dental Excellence',
					'Providing compassionate Care and Advanced Treatments',
					'Committed to Excellence in Dentistry'
				);
			
				$content = 'Lorem ipsum dolor sit amet';
			
				// Create post object
				$my_post = array(
					'post_title'   => wp_strip_all_tags($titles[$i - 1]),
					'post_content' => $content,
					'post_status'  => 'publish',
					'post_type'    => 'post',
				);
			
				// Insert the post into the database
				$post_id = wp_insert_post($my_post);
			
				// Assign the post to the "slider" category
				wp_set_post_terms($post_id, array($slider_category_id), 'category');
			
				// Set dynamic image name
				$image_name = 'slider' . $i . '.png';
				$image_url  = get_template_directory() . '/resource/img/' . $image_name; // Local path
			
				// Get upload directory
				$upload_dir = wp_upload_dir();
				$filename = wp_unique_filename($upload_dir['path'], $image_name);
				$file = trailingslashit($upload_dir['path']) . $filename;
			
				// Initialize WP_Filesystem
				if (!function_exists('WP_Filesystem')) {
					require_once ABSPATH . 'wp-admin/includes/file.php';
				}
				WP_Filesystem();
				global $wp_filesystem;
			
				// Check if image file exists before proceeding
				if (file_exists(get_template_directory() . '/resource/img/' . $image_name)) {
					$image_data = file_get_contents(get_template_directory() . '/resource/img/' . $image_name);
			
					// Write file using WP_Filesystem
					if (!$wp_filesystem->put_contents($file, $image_data, FS_CHMOD_FILE)) {
						wp_die("Error saving file!");
					}
				} else {
					wp_die("Image file not found: " . $image_url);
				}
			
				// Get file type
				$wp_filetype = wp_check_filetype($filename, null);
			
				// Prepare attachment data
				$attachment = array(
					'post_mime_type' => $wp_filetype['type'],
					'post_title'     => sanitize_file_name($filename),
					'post_content'   => '',
					'post_status'    => 'inherit'
				);
			
				// Insert attachment into the database
				$attach_id = wp_insert_attachment($attachment, $file, $post_id);
			
				// Generate and update attachment metadata
				require_once ABSPATH . 'wp-admin/includes/image.php';
				$attach_data = wp_generate_attachment_metadata($attach_id, $file);
				wp_update_attachment_metadata($attach_id, $attach_data);
			
				// Set the featured image (post thumbnail)
				set_post_thumbnail($post_id, $attach_id);
			}
				
		// ---------------------------------------- Slider --------------------------------------------------- //

			set_theme_mod('aster_dental_clinic_banner_short_heading','Transforming Smiles, One Appointment at a Time');

			for($i=1; $i<=3; $i++) {
				set_theme_mod('aster_dental_clinic_banner_button_label_'.$i,'Browse Service');
				set_theme_mod('aster_dental_clinic_banner_button_link_'.$i,'');
				set_theme_mod('aster_dental_clinic_banner_second_button_label_'.$i,'Book a Consultaion');
				set_theme_mod('aster_dental_clinic_banner_second_button_link_'.$i,'');
			}

		// ---------------------------------------- About --------------------------------------------------- //

			set_theme_mod('aster_dental_clinic_about_heading','First Impressions begin with a Smile');
			set_theme_mod('aster_dental_clinic_about_text','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.');
			set_theme_mod('aster_dental_clinic_about_button_label','Discover More');
			set_theme_mod('aster_dental_clinic_about_button_link','#');

			set_theme_mod( 'aster_dental_clinic_about_left_image_1',get_template_directory_uri().'/resource/img/about01.png');
			set_theme_mod( 'aster_dental_clinic_about_left_image_2',get_template_directory_uri().'/resource/img/about02.png');

			set_theme_mod('aster_dental_clinic_enable_service_section',true);
			set_theme_mod('aster_dental_clinic_enable_banner_section',true);
			
		// ---------------------------------------- Footer section --------------------------------------------------- //	
		
			set_theme_mod('aster_dental_clinic_footer_background_color_setting','#000000');
			
		// ---------------------------------------- Related post_tag --------------------------------------------------- //	
		
			set_theme_mod('aster_dental_clinic_post_related_post_label','Related Posts');
			set_theme_mod('aster_dental_clinic_related_posts_count','3');


		$this->aster_dental_clinic_customizer_primary_menu();
		update_option('is-demo-imported', true);
	}
}