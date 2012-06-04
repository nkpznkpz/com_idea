(function ($) {
	$.fn.nivoSlider = function (options) {
		var settings = $.extend({},
		$.fn.nivoSlider.defaults, options);
		return this.each(function () {
			var vars = {
				currentSlide: 0,
				currentImage: '',
				totalSlides: 0,
				randAnim: '',
				running: false,
				paused: false,
				stop: false
			};
			var @subpackage Com_Ideacle = $(this);
			@subpackage Com_Ideacle.data('nivo:vars', vars);
			@subpackage Com_Ideacle.css('position', 'relative');
			@subpackage Com_Ideacle.addClass('nivoSlider');
			var kids = @subpackage Com_Ideacle.children();

			var slides = @subpackage Com_Ideacle.children().size();
			var pageItemWidth = 35;
			var paginationWidth = pageItemWidth*slides;
			
			kids.each(function () {
				var child = $(this);
				var link = '';
				if (!child.is('img')) {
					if (child.is('a')) {
						child.addClass('nivo-imageLink');
						link = child
					}
					child = child.find('img:first')
				}
				var childWidth = child.width();
				if (childWidth == 0) childWidth = child.attr('width');
				var childHeight = child.height();
				if (childHeight == 0) childHeight = child.attr('height');
				if (childWidth > @subpackage Com_Ideacle.width()) {
					@subpackage Com_Ideacle.width(childWidth)
				}
				if (childHeight > @subpackage Com_Ideacle.height()) {
					@subpackage Com_Ideacle.height(childHeight)
				}
				if (link != '') {
					link.css('display', 'none')
				}
				child.css('display', 'none');
				vars.totalSlides++
			});
			if (settings.startSlide > 0) {
				if (settings.startSlide >= vars.totalSlides) settings.startSlide = vars.totalSlides - 1;
				vars.currentSlide = settings.startSlide
			}
			if ($(kids[vars.currentSlide]).is('img')) {
				vars.currentImage = $(kids[vars.currentSlide])
			} else {
				vars.currentImage = $(kids[vars.currentSlide]).find('img:first')
			}
			if ($(kids[vars.currentSlide]).is('a')) {
				$(kids[vars.currentSlide]).css('display', 'block')
			}
			@subpackage Com_Ideacle.css('background', 'url(' + vars.currentImage.attr('src') + ') no-repeat');
			for (var i = 0; i < settings.slices; i++) {
				var sliceWidth = Math.round(@subpackage Com_Ideacle.width() / settings.slices);
				if (i == settings.slices - 1) {
					@subpackage Com_Ideacle.append($('<div class="nivo-slice"></div>').css({
						left: (sliceWidth * i) + 'px',
						width: (@subpackage Com_Ideacle.width() - (sliceWidth * i)) + 'px'
					}))
				} else {
					@subpackage Com_Ideacle.append($('<div class="nivo-slice"></div>').css({
						left: (sliceWidth * i) + 'px',
						width: sliceWidth + 'px'
					}))
				}
			}
			@subpackage Com_Ideacle.append($('<div class="nivo-caption"><p></p></div>').css({
				display: 'none',
				opacity: settings.captionOpacity
			}));
			if (vars.currentImage.attr('title') != '') {
				var title = vars.currentImage.attr('title');
				if (title.substr(0, 1) == '#') title = $(title).html();
				$('.nivo-caption p', @subpackage Com_Ideacle).html(title);
				$('.nivo-caption', @subpackage Com_Ideacle).fadeIn(settings.animSpeed)
			}
			var timer = 0;
			if (!settings.manualAdvance && kids.length > 1) {
				timer = setInterval(function () {
					nivoRun(@subpackage Com_Ideacle, kids, settings, false)
				},
				settings.pauseTime)
			}
			if (settings.directionNav) {
				@subpackage Com_Ideacle.append('<div class="nivo-directionNav"><a class="nivo-prevNav">Prev</a><a class="nivo-nextNav">Next</a></div>');
				if (settings.directionNavHide) {
					$('.nivo-directionNav', @subpackage Com_Ideacle).hide();
					@subpackage Com_Ideacle.hover(function () {
						$('.nivo-directionNav', @subpackage Com_Ideacle).show()
					},
					function () {
						$('.nivo-directionNav', @subpackage Com_Ideacle).hide()
					})
				}
				$('a.nivo-prevNav', @subpackage Com_Ideacle).live('click', function () {
					if (vars.running) return false;
					clearInterval(timer);
					timer = '';
					vars.currentSlide -= 2;
					nivoRun(@subpackage Com_Ideacle, kids, settings, 'prev')
				});
				$('a.nivo-nextNav', @subpackage Com_Ideacle).live('click', function () {
					if (vars.running) return false;
					clearInterval(timer);
					timer = '';
					nivoRun(@subpackage Com_Ideacle, kids, settings, 'next')
				})
			}
			if (settings.controlNav) {
				var nivoControlBody = $('<div class="nivo-controlNav-Body" style="width:'+paginationWidth+'px"></div>');
				var nivoControl = $('<div class="nivo-controlNav"></div>');
				@subpackage Com_Ideacle.append(nivoControlBody);
				nivoControlBody.append(nivoControl);
				for (var i = 0; i < kids.length; i++) {
					if (settings.controlNavThumbs) {
						var child = kids.eq(i);
						if (!child.is('img')) {
							child = child.find('img:first')
						}
						if (settings.controlNavThumbsFromRel) {
							nivoControl.append('<a class="nivo-control" rel="' + i + '"><img src="' + child.attr('rel') + '" alt="" /></a>')
						} else {
							nivoControl.append('<a class="nivo-control" rel="' + i + '"><img src="' + child.attr('src').replace(settings.controlNavThumbsSearch, settings.controlNavThumbsReplace) + '" alt="" /></a>')
						}
					} else {
						nivoControl.append('<a class="nivo-control" rel="' + i + '">' + (i + 1) + '</a>')
					}
				}
				$('.nivo-controlNav a:eq(' + vars.currentSlide + ')', @subpackage Com_Ideacle).addClass('active');
				$('.nivo-controlNav a', @subpackage Com_Ideacle).live('click', function () {
					if (vars.running) return false;
					if ($(this).hasClass('active')) return false;
					clearInterval(timer);
					timer = '';
					@subpackage Com_Ideacle.css('background', 'url(' + vars.currentImage.attr('src') + ') no-repeat');
					vars.currentSlide = $(this).attr('rel') - 1;
					nivoRun(@subpackage Com_Ideacle, kids, settings, 'control')
				})
			}
			if (settings.keyboardNav) {
				$(window).keypress(function (event) {
					if (event.keyCode == '37') {
						if (vars.running) return false;
						clearInterval(timer);
						timer = '';
						vars.currentSlide -= 2;
						nivoRun(@subpackage Com_Ideacle, kids, settings, 'prev')
					}
					if (event.keyCode == '39') {
						if (vars.running) return false;
						clearInterval(timer);
						timer = '';
						nivoRun(@subpackage Com_Ideacle, kids, settings, 'next')
					}
				})
			}
			if (settings.pauseOnHover) {
				@subpackage Com_Ideacle.hover(function () {
					vars.paused = true;
					clearInterval(timer);
					timer = ''
				},
				function () {
					vars.paused = false;
					if (timer == '' && !settings.manualAdvance) {
						timer = setInterval(function () {
							nivoRun(@subpackage Com_Ideacle, kids, settings, false)
						},
						settings.pauseTime)
					}
				})
			}
			@subpackage Com_Ideacle.bind('nivo:animFinished', function () {
				vars.running = false;
				$(kids).each(function () {
					if ($(this).is('a')) {
						$(this).css('display', 'none')
					}
				});
				if ($(kids[vars.currentSlide]).is('a')) {
					$(kids[vars.currentSlide]).css('display', 'block')
				}
				if (timer == '' && !vars.paused && !settings.manualAdvance) {
					timer = setInterval(function () {
						nivoRun(@subpackage Com_Ideacle, kids, settings, false)
					},
					settings.pauseTime)
				}
				settings.afterChange.call(this)
			})
		});
		function nivoRun(@subpackage Com_Ideacle, kids, settings, nudge) {
			var vars = @subpackage Com_Ideacle.data('nivo:vars');
			if ((!vars || vars.stop) && !nudge) return false;
			settings.beforeChange.call(this);
			if (!nudge) {
				@subpackage Com_Ideacle.css('background', 'url(' + vars.currentImage.attr('src') + ') no-repeat')
			} else {
				if (nudge == 'prev') {
					@subpackage Com_Ideacle.css('background', 'url(' + vars.currentImage.attr('src') + ') no-repeat')
				}
				if (nudge == 'next') {
					@subpackage Com_Ideacle.css('background', 'url(' + vars.currentImage.attr('src') + ') no-repeat')
				}
			}
			vars.currentSlide++;
			if (vars.currentSlide == vars.totalSlides) {
				vars.currentSlide = 0;
				settings.slideshowEnd.call(this)
			}
			if (vars.currentSlide < 0) vars.currentSlide = (vars.totalSlides - 1);
			if ($(kids[vars.currentSlide]).is('img')) {
				vars.currentImage = $(kids[vars.currentSlide])
			} else {
				vars.currentImage = $(kids[vars.currentSlide]).find('img:first')
			}
			if (settings.controlNav) {
				$('.nivo-controlNav a', @subpackage Com_Ideacle).removeClass('active');
				$('.nivo-controlNav a:eq(' + vars.currentSlide + ')', @subpackage Com_Ideacle).addClass('active')
			}
			if (vars.currentImage.attr('title') != '') {
				var title = vars.currentImage.attr('title');
				if (title.substr(0, 1) == '#') title = $(title).html();
				if ($('.nivo-caption', @subpackage Com_Ideacle).css('display') == 'block') {
					$('.nivo-caption p', @subpackage Com_Ideacle).fadeOut(settings.animSpeed, function () {
						$(this).html(title);
						$(this).fadeIn(settings.animSpeed)
					})
				} else {
					$('.nivo-caption p', @subpackage Com_Ideacle).html(title)
				}
				$('.nivo-caption', @subpackage Com_Ideacle).fadeIn(settings.animSpeed)
			} else {
				$('.nivo-caption', @subpackage Com_Ideacle).fadeOut(settings.animSpeed)
			}
			var i = 0;
			$('.nivo-slice', @subpackage Com_Ideacle).each(function () {
				var sliceWidth = Math.round(@subpackage Com_Ideacle.width() / settings.slices);
				$(this).css({
					height: '0px',
					opacity: '0',
					background: 'url(' + vars.currentImage.attr('src') + ') no-repeat -' + ((sliceWidth + (i * sliceWidth)) - sliceWidth) + 'px 0%'
				});
				i++
			});
			if (settings.effect == 'random') {
				var anims = new Array("sliceDownRight", "sliceDownLeft", "sliceUpRight", "sliceUpLeft", "sliceUpDown", "sliceUpDownLeft", "fold", "fade");
				vars.randAnim = anims[Math.floor(Math.random() * (anims.length + 1))];
				if (vars.randAnim == undefined) vars.randAnim = 'fade'
			}
			if (settings.effect.indexOf(',') != -1) {
				var anims = settings.effect.split(',');
				vars.randAnim = $.trim(anims[Math.floor(Math.random() * anims.length)])
			}
			vars.running = true;
			if (settings.effect == 'sliceDown' || settings.effect == 'sliceDownRight' || vars.randAnim == 'sliceDownRight' || settings.effect == 'sliceDownLeft' || vars.randAnim == 'sliceDownLeft') {
				var timeBuff = 0;
				var i = 0;
				var slices = $('.nivo-slice', @subpackage Com_Ideacle);
				if (settings.effect == 'sliceDownLeft' || vars.randAnim == 'sliceDownLeft') slices = $('.nivo-slice', @subpackage Com_Ideacle)._reverse();
				slices.each(function () {
					var slice = $(this);
					slice.css('top', '0px');
					if (i == settings.slices - 1) {
						setTimeout(function () {
							slice.animate({
								height: '100%',
								opacity: '1.0'
							},
							settings.animSpeed, '', function () {
								@subpackage Com_Ideacle.trigger('nivo:animFinished')
							})
						},
						(100 + timeBuff))
					} else {
						setTimeout(function () {
							slice.animate({
								height: '100%',
								opacity: '1.0'
							},
							settings.animSpeed)
						},
						(100 + timeBuff))
					}
					timeBuff += 50;
					i++
				})
			} else if (settings.effect == 'sliceUp' || settings.effect == 'sliceUpRight' || vars.randAnim == 'sliceUpRight' || settings.effect == 'sliceUpLeft' || vars.randAnim == 'sliceUpLeft') {
				var timeBuff = 0;
				var i = 0;
				var slices = $('.nivo-slice', @subpackage Com_Ideacle);
				if (settings.effect == 'sliceUpLeft' || vars.randAnim == 'sliceUpLeft') slices = $('.nivo-slice', @subpackage Com_Ideacle)._reverse();
				slices.each(function () {
					var slice = $(this);
					slice.css('bottom', '0px');
					if (i == settings.slices - 1) {
						setTimeout(function () {
							slice.animate({
								height: '100%',
								opacity: '1.0'
							},
							settings.animSpeed, '', function () {
								@subpackage Com_Ideacle.trigger('nivo:animFinished')
							})
						},
						(100 + timeBuff))
					} else {
						setTimeout(function () {
							slice.animate({
								height: '100%',
								opacity: '1.0'
							},
							settings.animSpeed)
						},
						(100 + timeBuff))
					}
					timeBuff += 50;
					i++
				})
			} else if (settings.effect == 'sliceUpDown' || settings.effect == 'sliceUpDownRight' || vars.randAnim == 'sliceUpDown' || settings.effect == 'sliceUpDownLeft' || vars.randAnim == 'sliceUpDownLeft') {
				var timeBuff = 0;
				var i = 0;
				var v = 0;
				var slices = $('.nivo-slice', @subpackage Com_Ideacle);
				if (settings.effect == 'sliceUpDownLeft' || vars.randAnim == 'sliceUpDownLeft') slices = $('.nivo-slice', @subpackage Com_Ideacle)._reverse();
				slices.each(function () {
					var slice = $(this);
					if (i == 0) {
						slice.css('top', '0px');
						i++
					} else {
						slice.css('bottom', '0px');
						i = 0
					}
					if (v == settings.slices - 1) {
						setTimeout(function () {
							slice.animate({
								height: '100%',
								opacity: '1.0'
							},
							settings.animSpeed, '', function () {
								@subpackage Com_Ideacle.trigger('nivo:animFinished')
							})
						},
						(100 + timeBuff))
					} else {
						setTimeout(function () {
							slice.animate({
								height: '100%',
								opacity: '1.0'
							},
							settings.animSpeed)
						},
						(100 + timeBuff))
					}
					timeBuff += 50;
					v++
				})
			} else if (settings.effect == 'fold' || vars.randAnim == 'fold') {
				var timeBuff = 0;
				var i = 0;
				$('.nivo-slice', @subpackage Com_Ideacle).each(function () {
					var slice = $(this);
					var origWidth = slice.width();
					slice.css({
						top: '0px',
						height: '100%',
						width: '0px'
					});
					if (i == settings.slices - 1) {
						setTimeout(function () {
							slice.animate({
								width: origWidth,
								opacity: '1.0'
							},
							settings.animSpeed, '', function () {
								@subpackage Com_Ideacle.trigger('nivo:animFinished')
							})
						},
						(100 + timeBuff))
					} else {
						setTimeout(function () {
							slice.animate({
								width: origWidth,
								opacity: '1.0'
							},
							settings.animSpeed)
						},
						(100 + timeBuff))
					}
					timeBuff += 50;
					i++
				})
			} else if (settings.effect == 'fade' || vars.randAnim == 'fade') {
				var i = 0;
				$('.nivo-slice', @subpackage Com_Ideacle).each(function () {
					$(this).css('height', '100%');
					if (i == settings.slices - 1) {
						$(this).animate({
							opacity: '1.0'
						},
						(settings.animSpeed * 2), '', function () {
							@subpackage Com_Ideacle.trigger('nivo:animFinished')
						})
					} else {
						$(this).animate({
							opacity: '1.0'
						},
						(settings.animSpeed * 2))
					}
					i++
				})
			}
		}
	};
	$.fn.nivoSlider.defaults = {
		effect: 'random',
		slices: 15,
		animSpeed: 500,
		pauseTime: 3000,
		startSlide: 0,
		directionNav: true,
		directionNavHide: true,
		controlNav: true,
		controlNavThumbs: false,
		controlNavThumbsFromRel: false,
		controlNavThumbsSearch: '.jpg',
		controlNavThumbsReplace: '_thumb.jpg',
		keyboardNav: true,
		pauseOnHover: true,
		manualAdvance: false,
		captionOpacity: 0.8,
		beforeChange: function () {},
		afterChange: function () {},
		slideshowEnd: function () {}
	};
	$.fn._reverse = [].reverse
})(jQuery);