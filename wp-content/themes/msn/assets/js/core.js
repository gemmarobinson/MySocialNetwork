
$isMenuVisible = 0;

$(".js-menu-trigger").click(function() {
	$(".js-menu").slideDown();
	$isMenuVisible = 1;
});

$(".js-menu-close").click(function() {
	$(".js-menu").slideUp();
	$isMenuVisible = 0;
});




$(document).ready(function(){

	$("a").on('click', function(event) {

		if ($isMenuVisible) {
			$(".js-menu").slideUp();
		}

		if (this.hash !== "") {

			event.preventDefault();

			var hash = this.hash;

			$('html, body').animate({
				scrollTop: $(hash).offset().top
				}, 1000
			);
		} 
	});
});