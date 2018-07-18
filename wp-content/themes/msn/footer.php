		<footer>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="My Social Network Logo Faded"class="background-image" />
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-9 col-lg-8 d-none d-md-block">
						<ul class="list-unstyled">
							<li class="d-inline-block">
								<a href="#intro">Who we are</a>
							</li>
							<li class="d-inline-block">
								<a href="#services">What we do</a>
							</li>
							<li class="d-inline-block">
								<a href="#clients">Our clients</a>
							</li>
							<li class="d-inline-block">
								<a href="#contact">Contact us</a>
							</li>
						</ul>
					</div>
					<div class="col-12 col-md-3 col-lg-4 text-center text-md-right">
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
					<div class="col-12 copyright-info">
						<ul class="list-unstyled text-center margin-top-double">
							<li class="d-inline-block"><?php echo get_field('company_name'); ?></li>
							<li class="d-inline-block"><?php echo get_field('company_reg_number'); ?></li>
							<li class="d-inline-block">
								<a href="https://sixthstory.co.uk/" target="_blank">Designed by Sixth Story</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dist/jquery.swipebox.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dist/core.min.js"></script>
		<?php wp_footer(); ?>
	</body>
<html>