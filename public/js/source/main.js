(function($) {

		"use strict";

	var StudioCantina = function() {
		this.init();
	};

	StudioCantina.prototype = {

		// ------------------------------------
		// Global variables
		instagramImg: '#instagram ul li',

		// ------------------------------------
		// Initialise

		init: function() {

			this.initPiling();
			this.hoverCircle();
			this.timeAgo();

		},
		timeAgo: function() {

			$(document).ready(function() {
			  $("time.timeago").timeago();
			});

		},
		hoverCircle: function() {

			$('.circle').hover(function() {
			    $(this).transition({
					width: 40,
					height: 23,
					left: '49.35%',
					duration : 350,
					easing : 'cubic-bezier(.3,0,.3,1)'
				});
			}, function(){
			    $(this).transition({
					width: 35,
					height: 18,
					left: '49.5%',
					duration : 350,
					easing : 'cubic-bezier(.3,0,.3,1)'
				});
			});

		},
		initPiling: function() {

			$('#pages').pagepiling({
			    anchors: ['the-top','the-cantina', 'clientele', 'word-up', 'speak-up', 'terms-and-conditions'],
			    sectionsColor: ['white','#000000', 'white', '#000000', 'white'],
			    navigation: false,
			    menu: '#the-anchors',
			    normalScrollElements: '#terms, #the-cantina',
		        normalScrollElementTouchThreshold: 0,
		        touchSensitivity: 0,
			    afterLoad: function(anchorLink, index){
		            //using anchorLink
		            if(anchorLink == 'clientele'){
		                $.each( $('#clientele .logo') , function () {
		                	$(this).removeClass('hidden');
		                	$('#next-area').removeClass('hidden');
		                });
		            } else {
		            	$.each( $('#clientele .logo') , function () {
		                	$(this).addClass('hidden');
		                	$('#next-area').addClass('hidden');
		                });
		            }
		        },
		        onLeave: function(index, nextIndex, direction){
		        	//using anchorLink
		            if(index == 3){
		                $.each( $('#clientele .logo') , function () {
		                	// $(this).addClass('hidden');
		                	
		                });
		            }
		        }
			});
			$('#cantina-section').on('click', function() {
				$.fn.pagePiling.moveTo('the-top');
			});

		},


	};

	$(document).ready(function () {
		new StudioCantina();
	});

})(jQuery);
