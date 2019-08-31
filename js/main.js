/**
 * @author 	Edgar Wanjala Wafula 
 * @url 	mitchellcotts.com
 * 
 * Website integration scripts
 */

'use strict'

let host = location.protocol + '//' + location.hostname + '/mitchellcotts/wp-content/themes/mitchell-cotts/images/';

console.log(host); 

jQuery(document).ready(function($){
	initPartnersSlider(); 
	initParallaxSettings(); 
	loadMoreInit(); 
	removeOverlayInit(); 
	customNavigationInit(); 
	mobileMenuInit(); 
	openModal(); 
   
	function initPartnersSlider(){
		$('.home-about').owlCarousel({
			loop:true,
			margin:10,
            nav:true,
            dots:false, 
            autoplay:false, 
            transitionStyle:'fade', 
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:1
				}
			}
		})

		$('.home-services').owlCarousel({
			loop:true,
			margin:10,
            nav:true,
            dots:false, 
            autoplay:false, 
            transitionStyle:'fade', 
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:3
				}
			}
		})

		$('.clients').owlCarousel({
			loop:true,
			margin:10,
            nav:true,
			dots:false, 
			navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'], 
			navSpeed:1400, 
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})
		
		$('.portfolio').owlCarousel({
			loop:true,
			margin:10,
            nav:false,
			dots:false, 
			animateOut: 'slideOutDown',
			animateIn: 'fadeIn',
            autoplay:false, 
			URLhashListener:true,
			autoplayHoverPause:true,
			startPosition: 'URLHash',
			smartSpeed:3000, 
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:1
				}
			}
		})

		$('.team').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			// navText:['<i class="fa fa-long-arrow-left text-white" aria-hidden="true"></i>', '<i class="fa fa-long-arrow-right text-white" aria-hidden="true"></i>'], 
			dots:false, 
			animateOut: 'slideOutDown',
			animateIn: 'fadeIn',
            autoplay:false, 
			URLhashListener:true,
			autoplayHoverPause:true,
			startPosition: 'URLHash',
			smartSpeed:3000, 
			navSpeed:3000, 
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		})

		$('.single-clients').owlCarousel({
			loop:true,
			margin:10,
			nav:false,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
            dots:false, 
            autoplay:true, 
			autoplayHoverPause:true,
			smartSpeed:2000, 
			responsive:{
				0:{
					items:1
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

	function initParallaxSettings(){
		$(".parralax-window").parallax(
            {
                speed: .2
            }
        )
	}

	// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 500);
	};

	loader();

	function loadMoreInit(){
		// Read More for home intro 
		$('.readmore-text').readmore({ 
			speed: 1000, 
			moreLink: '<a href="#" class="about-readmore text-uppercase">read more</a>', 
			lessLink: '<a href="#" class="about-readmore text-uppercase">read less</a>', 
			collapsedHeight: 200
		});

		// Read More for home intro 
		$('.single-services .card-body').readmore({ 
			speed: 1000, 
			moreLink: '<a href="#" class="about-readmore text-uppercase">read more</a>', 
			lessLink: '<a href="#" class="about-readmore text-uppercase">read less</a>', 
			collapsedHeight:600
		});
	}

	function removeOverlayInit(){
		$(".about-readmore").click(function() { 
			if($(".readmore-text").hasClass("hs-overlay")){
				$(".readmore-text").removeClass("hs-overlay"); 
			} else {
				$(".readmore-text").addClass("hs-overlay"); 
			}
		})
	}

	function customNavigationInit(){
		var owl = $('.portfolio');
		owl.owlCarousel();
		
		// Go to the next item
		$('.custom-nav .owl-next').click(function() {
			owl.trigger('next.owl.carousel');
		})

		// Go to the previous item
		$('.custom-nav .owl-prev').click(function() {
			// With optional speed parameter
			// Parameters has to be in square bracket '[]'
			owl.trigger('prev.owl.carousel', [3000]);
		})
	}

	function mobileMenuInit(){
		// Open Menu 
		$(function() { 
			$(".menu-drawer-button").click(function() { 
				if($(".menu-drawer").hasClass("open-drawer")){
					$(".menu-drawer").removeClass("open-drawer");
					$(".toggle-container").removeClass("menu-open");
				} else {
					$(".menu-drawer").addClass("open-drawer");
					$(".toggle-container").addClass("menu-open");
				}
			});
		});
	}

	function openModal(){
		$(".open-modal").on("click", function(){
			$('#modal-team').modal();
		})
	}
}); 

	// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 500);
	};

	loader();