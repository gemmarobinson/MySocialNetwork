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
		<section class="top-banner background-block">
			<header>
				<div class="row">
					<div class="col-6">
						<p class="h4 uppercase">My Social</br>Network.</p>
					</div>
					<div class="col-6 text-right">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav-icon.png" alt="Menu Icon" />
					</div>
				</div>
			</header>

			<div class="top-banner--content">
				<h1 class="h2 text-center">We are more</br>than strategists.</h1>
				<hr />
			</div>

			<img class="scroll-down" src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.png" alt="Scrolling Arrow" />
		</section>