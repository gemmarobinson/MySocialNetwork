<?php get_header(); ?>
	<div class="container">
		<?php 
			echo '<h1>'. get_field('error_page_title', 'option') .'</h1>';
			echo '<p>'. get_field('error_page_content', 'option') .'</p>';
			echo '<p><a href="'. get_bloginfo('url') .'">Click here</a> to visit the home page</p>';
			echo '<p>Or alternatively if this problem persists you can contact us <a href="'. get_bloginfo('url') .'">here</a>.</p>';
		?>	
	</div>
<?php get_footer(); ?>
