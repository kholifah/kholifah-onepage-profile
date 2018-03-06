$(document).ready(function() {
			var offset = 220;
			var duration = 500;
			jQuery(window).scroll(function() {
				if (jQuery(this).scrollTop() > offset) {
					jQuery('.backToTop').fadeIn(duration);
				} else {
					jQuery('.backToTop').fadeOut(duration);
				}
			});

			jQuery('.backToTop').click(function(event) {
				event.preventDefault();
				jQuery('html, body').animate({scrollTop: 0}, duration);
				return false;
			});

			$('a[href^="#"]').on('click',function (e) {
				e.preventDefault();

				var target = this.hash;
				var $target = $(target);

				$('html, body').stop().animate({
					'scrollTop': $target.offset().top
				}, 1200, 'swing', function () {
					window.location.hash = target;
				});
			});
		});