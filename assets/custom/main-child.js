+(function($) {
	$(document).ready(function() {
		// easy ticker
		var dd = $('.st-blog-vticker').easyTicker({
			direction: 'up',
			speed: 'fast',
			interval: 2000,
			mousePause: 1,
			height: 'auto',
			visible: 1,
			controls: {
				up: '.up',
				down: '.down',
			}
		}).data('easyTicker');

	});
})(jQuery);