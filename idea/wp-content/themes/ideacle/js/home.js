$(function() {			
	var jmpressOpts	= {
		animation		: { transitionDuration : '1s' }
	};
			
	$( '#jms-slideshow' ).jmslideshow( $.extend( true, { jmpressOpts : jmpressOpts }, {
		autoplay	: true,
		bgColorSpeed: '0.5s',
		arrows		: false,
		interval    : 20000
	}));		
});