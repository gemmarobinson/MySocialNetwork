<!DOCTYPE html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>

	<body>
		<div class="full-screen-menu">
			<div class="menu-header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-6">
							<p class="h4 uppercase blog-title"><?php echo get_bloginfo('name'); ?></p>
						</div>
						<div class="col-6 text-right">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-icon.png" alt="Menu Close Icon" />
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid no-padding">
				<div class="row">
					<div class="col-12">
						<ul class="list-unstyled text-center menu">
							<li>Who we are</li>
							<li>What we do</li>
							<li>Our clients</li>
							<li>Contact us</li>
						</ul>
					</div>
					<div class="col-12 text-center">
						<a href="https://www.facebook.com" target="_blank" class="no-underline">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-icon.png" alt="Facebook Icon" target="_blank" class="social-icon" />
						</a>
						<a href="https://www.twitter.com" target="_blank" class="no-underline">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-icon.png" alt="Twitter Icon" target="_blank" class="social-icon" />
						</a>
						<a href="https://www.instagram.com" target="_blank" class="no-underline">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-icon.png" alt="Instagram Icon" target="_blank" class="social-icon" />
						</a>
					</div>
				</div>
			</div>
		</div>

		<section class="top-banner background-block">
			<header>
				<div class="row">
					<div class="col-6">
						<p class="h4 uppercase blog-title"><?php echo get_bloginfo('name'); ?></p>
					</div>
					<div class="col-6 text-right">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav-icon.png" alt="Menu Icon" />
					</div>
				</div>
			</header>

			<div class="top-banner--content">
				<h1 class="h2 text-center blog-description"><?php echo get_bloginfo('description'); ?></h1>
				<hr />
			</div>

			<img class="scroll-down" src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.png" alt="Scrolling Arrow" />
		</section>