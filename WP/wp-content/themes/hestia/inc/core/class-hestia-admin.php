<?php
/**
 * The admin class that handles all the dashboard integration.
 *
 * @package Hestia
 */

/**
 * Class Hestia_Admin
 */
class Hestia_Admin {

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
	}

	/**
	 * Add the about page.
	 */
	public function do_about_page() {
		/*
		 * About page instance
		 */
		$config = array(
			'welcome_notice'      => array(
				'type'            => 'custom',
				'notice_class'    => 'ti-welcome-notice',
				'dismiss_option'  => 'hestia_notice_dismissed',
				'render_callback' => array( $this, 'welcome_notice_content' ),
			),
			'getting_started'     => array(
				'type'    => 'columns-3',
				'title'   => __( 'Getting Started', 'hestia' ),
				'content' => array(
					array(
						'title'    => esc_html__( 'Recommended actions', 'hestia' ),
						'text'     => esc_html__( 'Hestia now comes with a sites library with various designs to pick from. Visit our collection of demos that are constantly being added.', 'hestia' ),
						'text_old' => esc_html__( 'We have compiled a list of steps for you to take so we can ensure that the experience you have using one of our products is very easy to follow.', 'hestia' ),
						'button'   => array(
							'label'     => esc_html__( 'Sites Library', 'hestia' ),
							'link'      => esc_url( '#sites_library' ),
							'is_button' => true,
							'blank'     => false,
						),
					),
					array(
						'title'  => esc_html__( 'Read full documentation', 'hestia' ),
						'text'   => esc_html__( 'Need more details? Please check our full documentation for detailed information on how to use Hestia.', 'hestia' ),
						'button' => array(
							'label'     => esc_html__( 'Documentation', 'hestia' ),
							'link'      => 'https://docs.themeisle.com/article/753-hestia-doc?utm_medium=customizer&utm_source=button&utm_campaign=documentation',
							'is_button' => false,
							'blank'     => true,
						),
					),
					array(
						'title'  => esc_html__( 'Go to the Customizer', 'hestia' ),
						'text'   => esc_html__( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'hestia' ),
						'button' => array(
							'label'     => esc_html__( 'Go to the Customizer', 'hestia' ),
							'link'      => esc_url( admin_url( 'customize.php' ) ),
							'is_button' => true,
							'blank'     => true,
						),
					),
				),
			),
			'recommended_actions' => array(
				'type'    => 'recommended_actions',
				'title'   => __( 'Recommended Actions', 'hestia' ),
				'plugins' => array(
					'themeisle-companion' => array(
						'name'        => 'OrbitFox by ThemeIsle',
						'slug'        => 'themeisle-companion',
						'description' => __( 'It is highly recommended that you install the companion plugin to have access to the Frontpage features, Team and Testimonials sections.', 'hestia' ),
					),
				),
			),
			'recommended_plugins' => array(
				'type'    => 'plugins',
				'title'   => esc_html__( 'Useful Plugins', 'hestia' ),
				'plugins' => array(
					'optimole-wp',
					'themeisle-companion',
					'feedzy-rss-feeds',
					'otter-blocks',
					'elementor',
					'wp-product-review',
					'visualizer',
					'wpforms-lite',
					'translatepress-multilingual',
				),
			),
			'support'             => array(
				'type'    => 'columns-3',
				'title'   => __( 'Support', 'hestia' ),
				'content' => array(
					array(
						'icon'   => 'dashicons dashicons-sos',
						'title'  => esc_html__( 'Contact Support', 'hestia' ),
						'text'   => esc_html__( 'We want to make sure you have the best experience using Hestia, and that is why we have gathered all the necessary information here for you. We hope you will enjoy using Hestia as much as we enjoy creating great products.', 'hestia' ),
						'button' => array(
							'label'     => esc_html__( 'Contact Support', 'hestia' ),
							'link'      => esc_url( 'https://themeisle.com/contact/' ),
							'is_button' => true,
							'blank'     => true,
						),
					),
					array(
						'icon'   => 'dashicons dashicons-book-alt',
						'title'  => esc_html__( 'Documentation', 'hestia' ),
						'text'   => esc_html__( 'Need more details? Please check our full documentation for detailed information on how to use Hestia.', 'hestia' ),
						'button' => array(
							'label'     => esc_html__( 'Read full documentation', 'hestia' ),
							'link'      => 'https://docs.themeisle.com/article/753-hestia-doc?utm_medium=customizer&utm_source=button&utm_campaign=documentation',
							'is_button' => false,
							'blank'     => true,
						),
					),
					array(
						'icon'   => 'dashicons dashicons-portfolio',
						'title'  => esc_html__( 'Changelog', 'hestia' ),
						'text'   => esc_html__( 'Want to get the gist on the latest theme changes? Just consult our changelog below to get a taste of the recent fixes and features implemented.', 'hestia' ),
						'button' => array(
							'label'     => esc_html__( 'Changelog', 'hestia' ),
							'link'      => esc_url( '#changelog' ),
							'is_button' => false,
							'blank'     => false,
						),
					),
					array(
						'icon'   => 'dashicons dashicons-admin-customizer',
						'title'  => esc_html__( 'Create a child theme', 'hestia' ),
						'text'   => esc_html__( "If you want to make changes to the theme's files, those changes are likely to be overwritten when you next update the theme. In order to prevent that from happening, you need to create a child theme. For this, please follow the documentation below.", 'hestia' ),
						'button' => array(
							'label'     => esc_html__( 'View how to do this', 'hestia' ),
							'link'      => 'http://docs.themeisle.com/article/14-how-to-create-a-child-theme',
							'is_button' => false,
							'blank'     => true,
						),
					),
					array(
						'icon'   => 'dashicons dashicons-controls-skipforward',
						'title'  => esc_html__( 'Speed up your site', 'hestia' ),
						'text'   => esc_html__( 'If you find yourself in a situation where everything on your site is running very slowly, you might consider having a look at the documentation below where you will find the most common issues causing this and possible solutions for each of the issues.', 'hestia' ),
						'button' => array(
							'label'     => esc_html__( 'View how to do this', 'hestia' ),
							'link'      => 'http://docs.themeisle.com/article/63-speed-up-your-wordpress-site',
							'is_button' => false,
							'blank'     => true,
						),
					),
					array(
						'icon'   => 'dashicons dashicons-images-alt2',
						'title'  => esc_html__( 'Build a landing page with a drag-and-drop content builder', 'hestia' ),
						'text'   => esc_html__( 'In the documentation below you will find an easy way to build a great looking landing page using a drag-and-drop content builder plugin.', 'hestia' ),
						'button' => array(
							'label'     => esc_html__( 'View how to do this', 'hestia' ),
							'link'      => 'http://docs.themeisle.com/article/219-how-to-build-a-landing-page-with-a-drag-and-drop-content-builder',
							'is_button' => false,
							'blank'     => true,
						),
					),
				),
			),
			'changelog'           => array(
				'type'  => 'changelog',
				'title' => __( 'Changelog', 'hestia' ),
			),
			'custom_tabs'         => array(
				'free_pro' => array(
					'title'           => __( 'Free vs PRO', 'hestia' ),
					'render_callback' => array( $this, 'free_pro_render' ),
				),
			),
		);
		if ( class_exists( 'TI_About_Page' ) ) {
			TI_About_Page::init( apply_filters( 'hestia_about_page_array', $config ) );
		}
	}

	/**
	 * Free vs Pro tab content
	 */
	public function free_pro_render() {
		$free_pro = array(
			'free_theme_name'     => 'Hestia',
			'pro_theme_name'      => 'Hestia Pro',
			'pro_theme_link'      => apply_filters( 'hestia_upgrade_link_from_child_theme_filter', 'https://themeisle.com/themes/hestia-pro/upgrade/?utm_medium=abouthestia&utm_source=button&utm_campaign=freevspro' ),
			/* translators: s - theme name */
			'get_pro_theme_label' => sprintf( __( 'Get %s now!', 'hestia' ), 'Hestia Pro' ),
			'banner_link'         => 'http://docs.themeisle.com/article/647-what-is-the-difference-between-hestia-and-hestia-pro',
			'banner_src'          => get_template_directory_uri() . '/assets/img/free_vs_pro_banner.png',
			'features_type'       => 'table',
			'features_img'        => get_template_directory_uri() . '/assets/img/upgrade.png',
			'features'            => array(
				array(
					'title'       => __( 'Mobile friendly', 'hestia' ),
					'description' => __( 'Responsive layout. Works on every device.', 'hestia' ),
					'is_in_lite'  => 'true',
					'is_in_pro'   => 'true',
				),
				array(
					'title'       => __( 'WooCommerce Compatible', 'hestia' ),
					'description' => __( 'Ready for e-commerce. You can build an online store here.', 'hestia' ),
					'is_in_lite'  => 'true',
					'is_in_pro'   => 'true',
				),
				array(
					'title'       => __( 'Frontpage Sections', 'hestia' ),
					'description' => __( 'Big title, Features, About, Team, Testimonials, Subscribe, Blog, Contact', 'hestia' ),
					'is_in_lite'  => 'true',
					'is_in_pro'   => 'true',
				),
				array(
					'title'       => __( 'Background image', 'hestia' ),
					'description' => __( 'You can use any background image you want.', 'hestia' ),
					'is_in_lite'  => 'true',
					'is_in_pro'   => 'true',
				),
				array(
					'title'       => __( 'Section Reordering', 'hestia' ),
					'description' => __( 'The ability to reorganize your Frontpage Sections more easily and quickly.', 'hestia' ),
					'is_in_lite'  => 'false',
					'is_in_pro'   => 'true',
				),
				array(
					'title'       => __( 'Shortcodes for each section', 'hestia' ),
					'description' => __( 'Display a frontpage section wherever you like by adding its shortcode in page or post content.', 'hestia' ),
					'is_in_lite'  => 'false',
					'is_in_pro'   => 'true',
				),
				array(
					'title'       => __( 'Header Slider', 'hestia' ),
					'description' => __( 'You will be able to add more content to your site header with an awesome slider.', 'hestia' ),
					'is_in_lite'  => 'false',
					'is_in_pro'   => 'true',
				),
				array(
					'title'       => __( 'Fully Customizable Colors', 'hestia' ),
					'description' => __( 'Change colors for the header overlay, header text and navbar.', 'hestia' ),
					'is_in_lite'  => 'false',
					'is_in_pro'   => 'true',
				),
				array(
					'title'       => __( 'Jetpack Portfolio', 'hestia' ),
					'description' => __( 'Portfolio section with two possible layouts.', 'hestia' ),
					'is_in_lite'  => 'false',
					'is_in_pro'   => 'true',
				),
				array(
					'title'       => __( 'Pricing Plans Section', 'hestia' ),
					'description' => __( 'A fully customizable pricing plans section.', 'hestia' ),
					'is_in_lite'  => 'false',
					'is_in_pro'   => 'true',
				),
				array(
					'title'       => __( 'Quality Support', 'hestia' ),
					'description' => __( '24/7 HelpDesk Professional Support', 'hestia' ),
					'is_in_lite'  => 'false',
					'is_in_pro'   => 'true',
				),
			),
		);

		$output = '';

		if ( ! empty( $free_pro ) ) {
			if ( ! empty( $free_pro['features_type'] ) ) {
				echo '<div class="feature-section">';
				echo '<div id="free_pro" class="ti-about-page-tab-pane ti-about-page-fre-pro">';
				switch ( $free_pro['features_type'] ) {
					case 'image':
						if ( ! empty( $free_pro['features_img'] ) ) {
							$output .= '<img src="' . $free_pro['features_img'] . '">';
							if ( ! empty( $free_pro['pro_theme_link'] ) && ! empty( $free_pro['get_pro_theme_label'] ) ) {
								$output .= '<a href="' . esc_url( $free_pro['pro_theme_link'] ) . '" target="_blank" class="button button-primary button-hero">' . wp_kses_post( $free_pro['get_pro_theme_label'] ) . '</a>';
							}
						}
						break;
					case 'table':
						if ( ! empty( $free_pro['features'] ) ) {
							$output .= '<table class="free-pro-table">';
							$output .= '<thead>';
							$output .= '<tr class="ti-about-page-text-right">';
							$output .= '<th></th>';
							$output .= '<th>' . esc_html( $free_pro['free_theme_name'] ) . '</th>';
							$output .= '<th>' . esc_html( $free_pro['pro_theme_name'] ) . '</th>';
							$output .= '</tr>';
							$output .= '</thead>';
							$output .= '<tbody>';
							foreach ( $free_pro['features'] as $feature ) {
								$output .= '<tr>';
								if ( ! empty( $feature['title'] ) || ! empty( $feature['description'] ) ) {
									$output .= '<td>';
									$output .= $this->get_feature_title_and_description( $feature );
									$output .= '</td>';
								}
								if ( ! empty( $feature['is_in_lite'] ) && ( $feature['is_in_lite'] == 'true' ) ) {
									$output .= '<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>';
								} else {
									$output .= '<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>';
								}
								if ( ! empty( $feature['is_in_pro'] ) && ( $feature['is_in_pro'] == 'true' ) ) {
									$output .= '<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>';
								} else {
									$output .= '<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>';
								}
								echo '</tr>';

							}

							if ( ! empty( $free_pro['pro_theme_link'] ) && ! empty( $free_pro['get_pro_theme_label'] ) ) {
								$output .= '<tr>';
								$output .= '<td>';
								if ( ! empty( $free_pro['banner_link'] ) && ! empty( $free_pro['banner_src'] ) ) {
									$output .= '<a target="_blank" href="' . $free_pro['banner_link'] . '"><img src="' . $free_pro['banner_src'] . '" class="free_vs_pro_banner"></a>';
								}
								$output .= '</td>';
								$output .= '<td colspan="2" class="ti-about-page-text-right"><a href="' . esc_url( $free_pro['pro_theme_link'] ) . '" target="_blank" class="button button-primary button-hero">' . wp_kses_post( $free_pro['get_pro_theme_label'] ) . '</a></td>';
								$output .= '</tr>';
							}
							$output .= '</tbody>';
							$output .= '</table>';
						}
						break;
				}
				echo $output;
				echo '</div>';
				echo '</div>';
			}
		}// End if().
	}

	/**
	 * Display feature title and description
	 *
	 * @param array $feature Feature data.
	 */
	public function get_feature_title_and_description( $feature ) {
		$output = '';
		if ( ! empty( $feature['title'] ) ) {
			$output .= '<h3>' . wp_kses_post( $feature['title'] ) . '</h3>';
		}
		if ( ! empty( $feature['description'] ) ) {
			$output .= '<p>' . wp_kses_post( $feature['description'] ) . '</p>';
		}

		return $output;
	}

	/**
	 * Enqueue Customizer Script.
	 */
	public function enqueue_customizer_script() {
		wp_enqueue_script(
			'hestia-customizer-preview',
			get_template_directory_uri() . '/assets/js/admin/customizer.js',
			array(
				'jquery',
			),
			HESTIA_VERSION,
			true
		);
	}

	/**
	 * Enqueue customizer controls script.
	 */
	public function enqueue_customizer_controls() {
		wp_enqueue_style( 'hestia-customizer-style', get_template_directory_uri() . '/assets/css/customizer-style' . ( ( HESTIA_DEBUG ) ? '' : '.min' ) . '.css', array(), HESTIA_VERSION );
		wp_enqueue_script(
			'hestia_customize_controls',
			get_template_directory_uri() . '/assets/js/admin/customizer-controls.min.js',
			array(
				'jquery',
				'wp-color-picker',
			),
			HESTIA_VERSION,
			true
		);
		wp_localize_script(
			'hestia_customize_controls',
			'imageObject',
			array(
				'imagenonce' => wp_create_nonce( 'image_nonce' ),
				'ajaxurl'    => admin_url( 'admin-ajax.php' ),
			)
		);
	}

	/**
	 * Add inline style for editor.
	 *
	 * @param string $init Setup TinyMCE.
	 *
	 * @return mixed
	 */
	public function editor_inline_style( $init ) {
		$editor_style = $this->admin_editor_inline_style();
		if ( wp_default_editor() === 'tinymce' ) {
			$init['content_style'] = $editor_style;
		}

		return $init;
	}

	/**
	 * Add custom inline style for editor.
	 *
	 * @return string
	 */
	private function admin_editor_inline_style() {

		$accent_color  = get_theme_mod( 'accent_color', apply_filters( 'hestia_accent_color_default', '#e91e63' ) );
		$headings_font = get_theme_mod( 'hestia_headings_font' );
		$body_font     = get_theme_mod( 'hestia_body_font' );

		$custom_css = '';

		// Load google font.
		if ( ! empty( $body_font ) ) {
			$custom_css .= '@import url(\'https://fonts.googleapis.com/css?family=' . esc_attr( $body_font ) . '\');';
		}
		if ( ! empty( $headings_font ) ) {
			$custom_css .= '@import url(\'https://fonts.googleapis.com/css?family=' . esc_attr( $headings_font ) . '\');';
		}
		// Check if accent color is exists.
		if ( ! empty( $accent_color ) ) {
			$custom_css .= 'body:not(.elementorwpeditor)#tinymce .mce-content-body a { color: ' . esc_attr( $accent_color ) . '; }';
		}

		// Check if font family for body exists.
		if ( ! empty( $body_font ) ) {
			$custom_css .= 'body:not(.elementorwpeditor)#tinymce, body:not(.elementorwpeditor)#tinymce p { font-family: ' . esc_attr( $body_font ) . ' !important; }';
		}

		// Check if font family for headings exists.
		if ( ! empty( $headings_font ) ) {
			$custom_css .= 'body:not(.elementorwpeditor)#tinymce h1, body:not(.elementorwpeditor)#tinymce h2, body:not(.elementorwpeditor)#tinymce h3, body:not(.elementorwpeditor)#tinymce h4, body:not(.elementorwpeditor)#tinymce h5, body:not(.elementorwpeditor)#tinymce h6 { font-family: ' . esc_attr( $headings_font ) . ' !important; }';
		}

		return $custom_css;
	}

	/**
	 * If conditions are fulfilled this will add the front-page import logic.
	 */
	function add_zerif_frontpage_import() {
		$imported_flag = get_theme_mod( 'zerif_frontpage_was_imported', 'not-zerif' );
		if ( $imported_flag === 'yes' || $imported_flag === 'not-zerif' ) {
			return;
		}
	}

	/**
	 * In case the old theme wasn't Zerif, mark the importer flag to avoid printing the import notice.
	 */
	public function maybe_switched_from_zerif() {
		$old_theme = strtolower( get_option( 'theme_switched' ) );

		$content_imported = get_theme_mod( 'zerif_frontpage_was_imported', 'not-zerif' );
		if ( $content_imported === 'yes' ) {
			return;
		}

		if ( $content_imported === 'not-zerif' && in_array( $old_theme, array( 'zerif-pro', 'zerif-lite' ) ) ) {
			set_theme_mod( 'zerif_frontpage_was_imported', 'no' );
		}
		if ( ! in_array( $old_theme, array( 'zerif-pro', 'zerif-lite' ) ) ) {
			set_theme_mod( 'zerif_frontpage_was_imported', 'not-zerif' );
		}
	}

	/**
	 * Render welcome notice content
	 */
	public function welcome_notice_content() {
		$theme_args      = wp_get_theme();
		$name            = $theme_args->__get( 'Name' );
		$slug            = $theme_args->__get( 'stylesheet' );
		$notice_template = '
			<div class="ti-notice-wrapper">
				<div class="ti-notice-image">%1$s</div>
				<div class="ti-notice-text">%2$s</div>
				<div class="ti-notice-button">%3$s</div>
			</div>
			<style>%4$s</style>';
		$image           = sprintf(
			/* translators: 1 - logo url, 2 - theme name */
			'<img src="%1$s" alt="%2$s"/>',
			esc_url( get_template_directory_uri() . '/assets/img/logo.png' ),
			$name
		);
		$content = sprintf(
			/* translators: 1 - notice message */
			'<p>%1$s</p>',
			sprintf(
				/* translators: theme name */
				esc_html__( 'Thank you for installing %1$s! Let\'s get you ready. It will take only a few minutes.', 'hestia' ),
				$name
			)
		);
		$button = sprintf(
			/* Translators: 1 - onboarding url, 2 - button text */
			'<a href="%1$s" class="button button-primary" style="text-decoration: none;">%2$s</a>',
			esc_url( admin_url( 'themes.php?page=' . $slug . '-welcome&onboarding=yes#sites_library' ) ),
			esc_html__( 'Getting Started', 'hestia' )
		);
		$style = '
		.wrap .notice.ti-welcome-notice{
			border:0;
			padding:10px;
			margin: 20px 0;
		}
		.ti-notice-wrapper {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			background: #e6edf1;
			padding: 60px 0;
		}
		.ti-notice-image, .ti-notice-text, .ti-notice-button {text-align:center;}
		.ti-notice-image{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			width: 90px;
			height: 90px;
			border-radius: 50%;
			background: #fff;
		}
		.ti-notice-image img{
			max-width:80px;
		}
		.ti-notice-text h3{
			margin: 0 12px 8px;
			padding: 0;
			font-size: 16px;
			font-weight: 400;
			color: #23282d;
		}
		.ti-notice-text p{
			color: #59798f;
			margin: 30px 0;
		}
		';
		echo sprintf(
			$notice_template,
			$image,
			$content,
			$button,
			$style
		);
	}

	/**
	 * Load site import module.
	 */
	public function load_site_import() {
		if ( class_exists( 'Themeisle_Onboarding' ) ) {
			Themeisle_Onboarding::instance();
		}
	}
}
