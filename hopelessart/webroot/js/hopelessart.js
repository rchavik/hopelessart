/**
 * HopelessArt
 *
 * available throughout the app
 */

var HopelessArt = {};

/**
 * functions to execute when document is ready
 *
 * @return void
 */
HopelessArt.documentReady = function() {
	HopelessArt.appleEffect();
	HopelessArt.navigation();
	HopelessArt.hoverEffect();
	HopelessArt.fancyBox();
	HopelessArt.socialBookmarkTooltips();
	HopelessArt.formTooltips();
};


HopelessArt.appleEffect = function() {
	if (Croogo.params.action == 'promoted' && !Croogo.params.page) {
		$('#logo').appleEffect({
			color: '#FFF',
			zIndex: 10000,
			timeout: 2000,
			speed: 2000,
		});
	}
}

/**
 * function to generate the front-end navigation
 * via jQuery's plug-in superfish
 *
 * @return void
 */
HopelessArt.navigation = function() {
    $("ul.sf-menu").addClass("sf-navbar");
    $("ul.sf-menu").superfish();
};

/**
 * function to switch the social-bookmark icons
 * from black-white to colored while hover
 *
 * @return void
 */
HopelessArt.hoverEffect = function() {
	$('.socialicon a img').hover(function(){
		var src = $(this).attr("src");
		src = src.replace("_bw", "");
		$(this).attr("src", src);
	}, function(){
		var src = $(this).attr("src");
		src = src.replace(".png", "_bw.png");
		$(this).attr("src", src);
	})
	.tipsy({
		trigger: 'hover',
		gravity: 's',
		title: function() {
			return this.getAttribute('original-title');
		},
		fade: false
	});
};

/**
 * fancybox plugin for blog images
 *
 * @return void
 */
HopelessArt.fancyBox = function () {
	$('.node-type-blog a.fancyimage').fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600,
		'speedOut'		:	200,
		'overlayShow'	:	true
	});
}

HopelessArt.socialBookmarkTooltips = function() {
	$('.social-bookmarks a').tipsy({
		delayIn: 1200,
		delayOut: 0,
		trigger: 'hover',
		gravity: 'n',
		title: function() {
			return 'Share it via ' + this.getAttribute('original-title');
		},
		fade: false,
	});
};

/**
 * function to generate tooltips for all
 * forms in HopelessArt using jQuery's plug-in
 * tipsy
 *
 * @return void
 */
HopelessArt.formTooltips = function () {
	var formElements = new Array;

	$('form input:text, form input:password, form textarea')
		.each(function(index){
			formElements[index] = $(this).attr('id');
	});

	for (var i = 0; i < formElements.length; i++) {

		var gravity = 'w';

		if (formElements[i] == 'q') {
			gravity = 'e';
		}

		$('#' + formElements[i] + '').tipsy({
			trigger: 'hover',
			gravity: gravity,
			title: function() {
				return this.getAttribute('original-title');
			},
			fade: false
		});
	}
};

/*
 * Execute HopelessArt
 *
 * @return void
 */
(function($){
	$(document).ready(function(){
		HopelessArt.documentReady();
	});
})(jQuery);