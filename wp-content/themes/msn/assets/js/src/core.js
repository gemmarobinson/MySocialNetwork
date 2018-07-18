
/*------------------------------- 
	Menu - Open & Close
--------------------------------*/

$isMenuVisible = 0;

// If menu trigger is clicked it opens and sets a variable for the scroll functionality
$(".js-menu-trigger").click(function() {
	$(".js-menu").slideDown();
	$isMenuVisible = 1;
});

// If menu closed is clicked it closes the menu and resets the variable
$(".js-menu-close").click(function() {
	$(".js-menu").slideUp();
	$isMenuVisible = 0;
});



/*------------------------------- 
	Menu - Scrolling
--------------------------------*/

$(document).ready(function(){

	// On click of an 'a' tag
	$("a").on('click', function(event) {

		// Checks to see if there is a hash as an anchor link
		if (this.hash !== "") {

			// if the mobile menu is open then it closes it first
			if ($isMenuVisible) {
				$(".js-menu").slideUp();
			}

			// Prevents default funtionality
			event.preventDefault();

			// sets variable
			var hash = this.hash;

			// adds scroll animation
			$('html, body').animate({
				scrollTop: $(hash).offset().top
				}, 1000
			);
		} 
	});
});



/*------------------------------- 
	Services Lightbox
--------------------------------*/

// On click of Service Grid
$(".js-service").click(function(){
  	
  	// Finds ID of Service Grid Click (they're all unique)
	$clicked = $(this).attr('id');

	// Finds corresponding Service Grid Box and shows it
	$('.js-service-box[data-slide="'+$clicked+'"]').show();

});

$(".js-service-next").click(function(){

	$clicked = $(".js-service-box:visible").attr("data-slide");
	$split = $clicked.split("-");
	$number = $split[2];
	$next =  parseInt($number) + 1;

	$('.js-service-box').hide();
	$('.js-service-box[data-slide="js-service-'+$next+'"]').show();
	
});

// Close Service Box with Close Icon
$('.js-service-box-close').click(function(){
	$('.js-service-box').hide();
});
