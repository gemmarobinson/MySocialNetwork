<?php
	/* Template Name: Home Page */
	get_header();
?>

<section class="intro">
	<div class="row">
		<div class="col-6">
			<h2>Who we are.</h2>
			<p>We are one of the UK’s leading Facebook Management Agencies with various in-house departments that specialise in social media campaigns, design and outreach marketing with over 10 years experience in the industry.</p>
		</div>

		<div class="col-6 text-right">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro-image.png" alt="Intro Image" />
		</div>
	</div>
</section>

<section class="services">
	<div class="container-fluid">

		<?php
			$args = array(
				'post_type' 	 => 'services',
				'order' 		 => 'ASC',
				'posts_per_page' => 6,
				'post_status' 	 => 'publish'
			);
			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) {

				echo '<div class="row">';
				
					while ( $the_query->have_posts() ) {
						$the_query->the_post();

						echo '<div class="col-4 single-service">';
							echo '<div class="single-service--content">';
								echo '<p class="h3">Facebook</br>' . get_the_title() . '</p>';
							echo '<hr /></div>';
						echo '</div>';

					} wp_reset_postdata();

				echo '</div>';
			}
		?>

	</div>
</section>

<section class="clients">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h2>Our clients.</h2>
			</div>

			<?php
				$args = array(
					'post_type' 	 => 'clients',
					'order' 		 => 'ASC',
					'posts_per_page' => -1,
					'post_status' 	 => 'publish'
				);
				$the_query = new WP_Query( $args );
					
				while ( $the_query->have_posts() ) {
					$the_query->the_post();

					if (get_the_post_thumbnail_url()) {

						echo '<div class="col-3 single-clients">';
							echo '<img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'" />';
						echo '</div>';

					}

				} wp_reset_postdata();

			?>
		</div>
	</div>
</section>

<section class="contact">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h2 class="purple">Get in touch.</h2>
			</div>
			<div class="col-6">
				<p class="double-padding">Hello!</p>
				<p>My name is</p>
			</div>
			<div class="col-6">
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>