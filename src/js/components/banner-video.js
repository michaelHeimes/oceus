jQuery(document).ready(function($) {
	
	var imgArr = localized.home_imgArr;

	if($('#video-wrap').length ) {
		// create video element
		var loadVid = function() {
			
			var videourl = localized.home_bg_vid['url'];
						
			var videocontainer = $('#video-wrap');	
			
			var video = '<video muted="" loop="" id="big-video" class="bg" preload="auto" autoplay="" src="' + videourl + '"></video>';
			
			$(videocontainer).append(video);
			
		}
		

		
		// create image fallback element
		var loadImg = function loadImg() {
			
			var imgArr = localized.home_imgArr;
			
			var imgcontainer = $('#fallback-img-wrap');	
			
			var img = '<div class="bg" style="background-image: url(' + imgArr + ');"></div>';
			
			$(imgcontainer).append(img);
						
		}		
		
		$(window).on("load resize",function(e){

			if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || $(window).width() < 861 ) {
				loadImg();
			} else {
				loadVid();
			}
				
		});
	
	};

});