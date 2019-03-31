// Add slideDown animation to Bootstrap dropdown when expanding.
$('.dropdown').on('show.bs.dropdown', function () {
	$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// Add slideUp animation to Bootstrap dropdown when collapsing.
$('.dropdown').on('hide.bs.dropdown', function () {
	$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});
/*************************************************************************************************************************************/
// Activate Carousel
//$("#myCarousel").carousel();
/*************************************************************************************************************************************/
// Scroll to top
$(document).ready(function ($) {
	$(window).scroll(function () {
		if ($(this).scrollTop() < 200) {
			$('#Scroll_to_top').fadeOut();
		} 
		else {
			$('#Scroll_to_top').fadeIn();
		}
	});
	$('#Scroll_to_top').on('click', function () {
		$('html, body').animate({scrollTop: 0}, 1500);
		return false;
	});
});
/*************************************************************************************************************************************/