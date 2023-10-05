(function ($) {
	"use strict";
	
	/*----------------------------
	Responsive menu Active
	------------------------------ */
	$(".mainmenu ul#primary-menu").slicknav({
		allowParentLinks: true,
		prependTo: '.responsive-menu'
	});
	
	/*----------------------------
    START - Menubar scroll animation
    ------------------------------ */
	jQuery(window).on('scroll', function() {
		if ($(this).scrollTop() > 480) {
			$('.header-bottom').addClass("sticky");
		} else {
			$('.header-bottom').removeClass("sticky");
		}
	});
	
	/*----------------------------
    START - Slider activation
    ------------------------------ */
	$('.available-slider').owlCarousel({
		dots:true,
		loop:true,
		autoplay: true,
		autoplayTimeout:3000,
		margin:0,
		items:1,
		nav: false,
	}); 
	$('.testimonial-slider').owlCarousel({
		dots:true,
		loop:true,
		autoplay: false,
		autoplayTimeout:4000,
		margin:0,
		items:1,
		nav: false,
	}); 
	$('.service-slider').owlCarousel({
		dots:true,
		loop:true,
		autoplay: true,
		autoplayTimeout:4000,
		margin: 30,
		nav: false,
		responsive:{
			0:{
				items:1,
			},
			768:{
				items:2,
			},
			992:{
				items:3,
			}
		}
	});
	
	/*----------------------------
    START - Counterup
    ------------------------------ */
	$('.counter').counterUp({
		delay: 20,
		time: 500
	});
    
	/*----------------------------
    START - Range
    ------------------------------ */
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 1100,
      values: [ 0, 20 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $"  + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	
	
	/*----------------------------
	START - videos popup
	------------------------------ */
	$('.popup-youtube').magnificPopup({type:'iframe'});
	//iframe scripts
	$.extend(true, $.magnificPopup.defaults, {  
		iframe: {
			patterns: {
				//youtube videos
				youtube: {
					index: 'youtube.com/', 
					id: 'v=', 
					src: 'https://www.youtube.com/embed/%id%?autoplay=1' 
				}
			}
		}
	});
	
	/*----------------------------
    START - Video
    ------------------------------ */
	if($.fn.YTPlayer){
		$(".player").YTPlayer();
	}
	
	/*----------------------------
    START - Vega slider
    ------------------------------ */
	$("#slideslow-bg").vegas({
		overlay: false,
		transition: 'kenburns',
		transitionDuration: 2000,
		delay: 4000,
		color: '#000',
		animation: 'random',
		animationDuration: 20000,
		slides: [
			{
				src: 'images/slider1.jpg'
			},
			{
				src: 'images/slider2.jpg'
			},
			{
				src: 'images/slider3.jpg'
			}
		]
	});
    
	/*----------------------------
    START - Scroll to Top
    ------------------------------ */
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 600) {
			$('.scrollToTop i').fadeIn();
		} else {
			$('.scrollToTop i').fadeOut();
		}
	});
	$('.scrollToTop i').on('click', function () {
		$('html, body').animate({scrollTop : 0},2000);
		return false;
	});
	
	/*----------------------------
    START - Preloader
    ------------------------------ */
	jQuery(window).load(function(){
		jQuery("#preloader").fadeOut(500);
	});

}(jQuery));