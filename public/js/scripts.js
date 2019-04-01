// Check window width
$(document).ready(function ($) {
	var w = $(window).width();
	alert(w);
	if(w < 280){
		$("body").empty(); 
		$("body").append('<p class="p-3">متاسفانه نمایشگر شما قابلیت نشان دادن این سایت را ندارد<br /><br /> لطفاً از یک نمایشگر با ابعاد بزرگتر از 280 پیکسل استفاده نمایید<br /><br /> با تشکر</p>'); 
	}
});
/*************************************************************************************************************************************/
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
			$('.navbar').removeClass('py-0');
		} 
		else {
			$('#Scroll_to_top').fadeIn();
			$('.navbar').addClass('py-0');
		}
	});
	$('#Scroll_to_top').on('click', function () {
		$('html, body').animate({scrollTop: 0}, 1500);
		return false;
	});
});
/*************************************************************************************************************************************/