$(document).ready(function() {
	jQuery(window).scroll(function() {
		if ($(this).scrollTop()) {
			$('.nav-menu').addClass('splited');
		} else {
			$('.nav-menu').removeClass('splited');
		}
	});
});