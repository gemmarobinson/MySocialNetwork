<?php
	/* Template Name: Home Page */
	get_header();
?>

<section class="intro" id="intro">
	<div class="row">
		<div class="col-12 col-md-6">
			<h2><?php echo get_field('introduction_title'); ?></h2>
			<p><?php echo get_field('introduction'); ?></p>
		</div>

		<div class="col-12 col-md-6 text-center text-md-right">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/intro-image.png" alt="Intro Image" />
		</div>
	</div>
</section>

<section class="services" id="services">
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

				$i = 1;
				
					while ( $the_query->have_posts() ) {
						$the_query->the_post();

						echo '<div id="js-service-'.$i.'" class="col-12 col-sm-6 col-md-4 single-service hover-pointer js-service">';
							echo '<div class="single-service--content">';
								echo '<p class="h3">Facebook</br>' . get_the_title() . '</p>';
							echo '<hr /></div>';

						echo '</div>';

						$i++;

					} wp_reset_postdata();

				echo '</div>';

				$i = 1;
				
				while ( $the_query->have_posts() ) {
					$the_query->the_post();

					echo '<div class="service-box js-service-box" data-slide="js-service-'.$i.'" style="display:none;">';

						echo '<div class="service-box--content">';
								echo '<p class="h3">Facebook</br>' . get_the_title() . '</p>';
						echo '<hr /></div>';

					echo '</div>';

					$i++;

				} wp_reset_postdata();

			}
		?>

	</div>
</section>

<section class="clients" id="clients">
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

						echo '<div class="col-6 col-sm-3 single-clients">';
							echo '<img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'" />';
						echo '</div>';

					}

				} wp_reset_postdata();

			?>
		</div>
	</div>
</section>

<section class="contact" id="contact">
	<div class="container-fluid">
		<div class="row">

			<?php
				$email = get_field('email');
				$tel = get_field('telephone');
				$tel_link = str_replace(" ", "", $tel);
				$get_address = get_field('address');
				$address = str_replace(",", "</br>", $get_address);
			?>

			<div class="col-12">
				<h2 class="purple">Get in touch.</h2>
			</div>
			<div class="col-12 col-lg-6">
				<?php echo do_shortcode( '[contact-form-7 id="31" title="Get in touch."]' ); ?>
			</div>
			<div class="col-12 col-lg-6 contact-information">
				<div class="double-padding">
					<img class="d-inline-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/email-icon.png" alt="Email Icon" />
					<p class="d-inline-block">
						<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
					</p>
				</div>
				<div class="double-padding">
					<img class="d-inline-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/telephone-icon.png" alt="Telephone Icon" />
					<p class="d-inline-block">
						<a href="tel:<?php echo $tel_link; ?>"><?php echo $tel; ?></a>
					</p>
				</div>
				<div class="double-padding">
					<img class="d-inline-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/map-icon.png" alt="Map Icon" />
					<p class="d-inline-block"><?php echo $address; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>