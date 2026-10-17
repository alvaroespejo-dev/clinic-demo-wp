<header role="banner" class="<?php  if (empty(get_theme_mod( 'wpdevart_dental_and_dentist_wda_header_bg_gradient_color' )))
                                        { echo esc_attr( 'wpdevart-main-header-bg ' ); }
                                            else { echo esc_attr('wpdevart-main-header-bg-gradient '); }
                                                if (get_theme_mod( 'wpdevart_dental_and_dentist_wda_enable_main_header_border', '1' )) { } 
                                                    else { echo esc_attr( 'wpdevart-main-header-border' ); } ?>">

    <?php if ( get_theme_mod( 'wpdevart_dental_and_dentist_wda_header_layout') == 'headerlayoutone') 
              { get_template_part( 'template-parts/header/header-layouts/header-layout-one' ); } 
                  else if ( get_theme_mod( 'wpdevart_dental_and_dentist_wda_header_layout') == 'headerlayouttwo') 
                      { get_template_part( 'template-parts/header/header-layouts/header-layout-two' ); }
						else if ( get_theme_mod( 'wpdevart_dental_and_dentist_wda_header_layout') == 'headerlayoutthree') 
							{ get_template_part( 'template-parts/header/header-layouts/header-layout-three' ); }
    ?>
</header>