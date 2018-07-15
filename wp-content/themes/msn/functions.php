<?php

	/*-----------------------------------------------------------------------------
		| Functionality
	-----------------------------------------------------------------------------*/

		# Deregister default javascripts & include all of the style sheets rather than using link rel.
		function styles() {

			# Deregister the defaults and register stylesheets.
			wp_deregister_script( 'jquery' );
			wp_deregister_script( 'wp-embed' );
			wp_enqueue_style( 'style', get_stylesheet_uri() );
			wp_enqueue_style( 'core', get_template_directory_uri().'/assets/styles/css/core.min.css');

		}
		add_action( 'wp_enqueue_scripts', 'styles');

		# Add extra theme options such as post featured images & menu pages.
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'menus' );

		# Create an administration page for general options like ACF.
		if( function_exists( 'acf_add_options_page' ) ) {

			$option_page = acf_add_options_page(array(
				'page_title' 	=> 'Options',
				'menu_slug' 	=> 'general-options',
				'capability' 	=> 'edit_posts',
				'redirect' 	=> false
			));
		}

		# Allow SVG to be uploaded to the media uploaded
		function cc_mime_types($mimes) {
			$mimes['svg'] = 'image/svg+xml';
			return $mimes;
		}
		add_filter('upload_mimes', 'cc_mime_types');



	/*-----------------------------------------------------------------------------
		| Performance & Security
	-----------------------------------------------------------------------------*/
		
		# Remove unneeded features such as WordPress Emoji's & header bloat.
		function disable_wp_bloat() {

			remove_action( 'admin_print_styles', 'print_emoji_styles' );
			remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
			remove_action( 'wp_print_styles', 'print_emoji_styles' );

			remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
			remove_action( 'wp_head', 'wlwmanifest_link' );
			remove_action( 'wp_head', 'wp_resource_hints', 2 );
			remove_action( 'wp_head', 'rsd_link' );
			remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
			remove_action( 'template_redirect', 'wp_shortlink_header', 11, 0 );
			remove_action( 'wp_head', 'feed_links_extra', 3 );
			remove_action( 'wp_head', 'feed_links', 2 );
			remove_action( 'wp_head', 'rel_canonical' );
			remove_action( 'wp_head', 'rsd_link' );
			remove_action( 'wp_head', 'wp_generator' );
			remove_action( 'wp_head', 'index_rel_link' );
			remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
			remove_action( 'wp_head', 'rest_output_link_wp_head' );
	        remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
			remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
			remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
			remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
			remove_action('opml_head','the_generator');
			
			remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
			remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
			remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

			remove_action('welcome_panel', 'wp_welcome_panel');
			
		}
		add_action( 'init', 'disable_wp_bloat' );



	/*-----------------------------------------------------------------------------
		| Security Measures
	-----------------------------------------------------------------------------*/

		# Prevent access to author based pages for security purposes.
		add_action( 'template_redirect', 'author_redirect' );
		function author_redirect() {

			if (is_author()) {
				wp_redirect( home_url() ); exit;
			}

		}

		# Remove access to the custom CSS feature in the customise menu.
		add_action( 'customize_register', 'prefix_remove_css_section', 15 );
		function prefix_remove_css_section( $wp_customize ) {
			$wp_customize->remove_section( 'custom_css' );
		}

		# Remove the default version number from Stylesheets & JavaScript.
		add_filter( 'style_loader_src', 'remove_ver_css_js', 9999 );
		add_filter( 'script_loader_src', 'remove_ver_css_js', 9999 );

		function remove_ver_css_js( $src ) {

			if ( strpos( $src, 'ver=' ) )
				$src = remove_query_arg( 'ver', $src );
			return $src;

		}
?>