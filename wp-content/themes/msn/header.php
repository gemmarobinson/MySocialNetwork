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
		<div class="full-screen-menu js-menu">
			<div class="menu-header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-6">
							<p class="h4 uppercase blog-title"><?php echo get_bloginfo('name'); ?></p>
						</div>
						<div class="col-6 text-right">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-icon.png" alt="Menu Close Icon" class="hover-pointer js-menu-close" />
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid no-padding">
				<div class="row">
					<div class="col-12">
						<ul class="list-unstyled text-center menu">
							<li><a href="#intro">Who we are</a></li>
							<li><a href="#services">What we do</a></li>
							<li><a href="#clients">Our clients</a></li>
							<li><a href="#contact">Contact us</a></li>
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

		<section class="top-banner background-block" style="background: url('<?php echo get_field('header_background'); ?>');">
			<header>
				<div class="row">
					<div class="col-6">
						<p class="h4 uppercase blog-title"><?php echo get_bloginfo('name'); ?></p>
					</div>
					<div class="col-6 text-right">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav-icon.png" alt="Menu Icon" class="hover-pointer js-menu-trigger" />
					</div>
				</div>
			</header>

			<div class="top-banner--content">
				<h1 class="h2 text-center blog-description"><?php echo get_bloginfo('description'); ?></h1>
				<hr />
			</div>

			<a href="#intro">
				<img class="scroll-down hover-pointer" src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.png" alt="Scrolling Arrow" />
			</a>
		</section>