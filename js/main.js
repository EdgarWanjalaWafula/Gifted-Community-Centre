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
		duration: 2000,
	});
	$.Scrollax();
	pauseModalVideo(); 
	
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
}); 

