+(function($) {
	$(document).ready(function() {
		// easy ticker
		var dd = $('.st-blog-vticker').easyTicker({
			direction: 'up',
			interval: 2000,
			height: 'auto',
			visible: 1,
			mousePause: 0,
			controls: {
				up: '.up',
				down: '.down',
			}
		}).data('easyTicker');

	});
})(jQuery);