(function($) {
	$.fn.extend({
		rotaterator: function(options) {
			var defaults = {
				fadeSpeed: 500,
				pauseSpeed: 100,
				child: null
			};

			var options = $.extend(defaults, options);

			return this.each(function() {
				var o = options;
				var obj = $(this);
				var items = $(obj.children(), obj);
				items.each(function() {
					$(this).hide();
				})
				if (!o.child) {
					var next = $(obj).children(':first');
				} else {
					var next = o.child;
				}
				$(next).fadeIn(o.fadeSpeed, function() {
					$(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function() {
						var next = $(this).next();
						if (next.length == 0) {
							next = $(obj).children(':first');
						}
						$(obj).rotaterator({
							child: next,
							fadeSpeed: o.fadeSpeed,
							pauseSpeed: o.pauseSpeed
						});
					})
				});
			});
		}
	});
})(jQuery);

$(".rolling").rotaterator({fadeSpeed: 500, pauseSpeed: 3000});

$(function() {
	$.vegas({
		src: '/img/bg.jpg',
		fade: 3000
	})('overlay', {
		src: '/img/overlays/01.png',
		opacity: 0.2
	});
});