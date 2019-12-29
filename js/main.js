/**
 * @author 	Edgar Wanjala Wafula 
 * @url 	http://giftedcommunitypwd.org.com
 * 
 * Website integration scripts
 */

'use strict'

jQuery(document).ready(function($){
	initPreloader(); 
	AOS.init({
		duration: 2200,
	});
	$.Scrollax();
	pauseModalVideo(); 
	initParralax(); 
	initGallerySlider(); 
	initScrollDown(); 
	initStickyMenu(); 
	initMobileToggle(); 
	initGallery(); 
	initSubscribeModal(); 
	
	// loader
	function initPreloader(){
		var loader = function() {
			setTimeout(function() { 
				if($('#ftco-loader').length > 0) {
					$('#ftco-loader').removeClass('show');
				}
			}, 500);
		};

		loader();
	}
	
	function pauseModalVideo(){
		var idArrayVideo = $(".gcc-youtube-video").map(function(){
			//return this.id
			//console.log("#"+this.id);

			var ids = "#"+this.id;

			$(ids).on('hidden.bs.modal', function (e) {
				$(ids + " iframe").attr("src", $(ids +" iframe").attr("src"));
			});

		}).get().join(',');
	}

	// Parallax properties
	function initParralax(){
		$(".parralax-window").parallax(
			{
				speed: .3
			}
		)
	}

	function initGallerySlider(){
		$('.gallery-slide').owlCarousel({
			loop:true,
			margin:-1,
			nav:false,
			dots:false, 
			autoplay:true, 
			responsive:{
				0:{
					items:2
				},
				600:{
					items:3
				},
				1000:{
					items:6
				}
			}
		}) 

		var homeslider = $(".home-slider"); 
		
		homeslider.owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			touchDrag  : false,
			mouseDrag  : false,
			animateOut: 'fadeOut',
			dots:false, 
			animateIn: 'fadeIn',
			autoplay:true, 
			autoplayTimeout:10000, 
			responsive:{
				0:{
					items:2
				},
				600:{
					items:3
				},
				1000:{
					items:1
				}
			}
		}) 

		var eventslider = $(".owl-event-slider"); 
		eventslider.owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			// touchDrag  : false,
			// mouseDrag  : false,
			// animateOut: 'fadeOut',
			dots:false, 
			// animateIn: 'fadeIn',
			autoplay:true, 
			autoplayTimeout:10000, 
			responsive:{
				0:{
					items:2
				},
				600:{
					items:3
				},
				1000:{
					items:1
				}
			}
		}) 
	}

	function initScrollDown(){
		$(".ion-ios-arrow-down").click(function() {
			$('html, body').animate({
				scrollTop: $(".section").offset().top
			}, 1500);
		});
	}

	function initStickyMenu(){
		var scroll_pos = 0;
		
		$(document).scroll(function() { 
			
			scroll_pos = $(this).scrollTop();
			
			if(scroll_pos > 210) {
				$(".gcc-header").addClass( "gcc-sticky" );
			} else {
				$(".gcc-header").removeClass( "gcc-sticky" );
			}
		});
	}

	function initMobileToggle(){
		
		// Open Menu 
		$(function() { 
			$(".menu-drawer-button").click(function() { 
				if($(".menu-drawer").hasClass("open")){
					$(".menu-drawer, .site").removeClass("open");
					$(".toggle-container").removeClass("menu-open");
				} else {
					$(".menu-drawer, .site").addClass("open");
					$(".toggle-container").addClass("menu-open");
					// $(".gcc-header").css("z-index", "0");
				}
			});
		});
	}	

	function initGallery(){
		lightGallery(document.querySelector('#lightgallery'), {selector: ".img-thm"});
	}

	function initSubscribeModal(){
		setTimeout(function(){
			$('#newsletter-subscribe').modal('show');
		}, 15000)
	}
}); 

