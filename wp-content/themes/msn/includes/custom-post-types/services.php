<?php
	function services_post_type() {
		register_post_type( 'services',
			array(
				'labels' => array(
					'name' 	=> 'Services',
					'singular_name' => 'Service'
				),
				'menu_icon' 	=> 'dashicons-list-view',
				'supports' 		=> array( 'title', 'editor' ),
				'public'		=> true,
				'has_archive' 	=> false,
			)
		);
	}
	add_action( 'init', 'services_post_type' );
?>