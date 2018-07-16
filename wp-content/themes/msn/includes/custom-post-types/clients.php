<?php
	function clients_post_type() {
		register_post_type( 'clients',
			array(
				'labels' => array(
					'name' 	=> 'Clients',
					'singular_name' => 'Client'
				),
				'menu_icon' 	=> 'dashicons-archive',
				'supports' 		=> array( 'title', 'thumbnail' ),
				'public'		=> true,
				'has_archive' 	=> false,
			)
		);
	}
	add_action( 'init', 'clients_post_type' );
?>