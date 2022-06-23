jQuery(document).ready(function($) {

	if($('.slider-element').length) {
	//Hero
	
		$('.slider-element').on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
	    	var i = (currentSlide ? currentSlide : 0) + 1;
	    	if(i <= 9) {
		    	i = '0' + i;
	    	}
	    	var totalSlides = slick.slideCount;
	    	if (totalSlides <= 9) {
		    	totalSlides = '0' + totalSlides;
	    	}
	    	$(this).parent().find('.slide-progress').html('<div class="slide-progress-current">' + i + '</div><div class="slide-progress-bar"></div><div class="slide-progress-last">' + totalSlides + '</div>');
		});
	
		$('.slider-element').slick({
			dots: false,
			infinite: true,
			fade: true,
			speed: 300,
			slidesToShow: 1,
			pauseOnHover: false,
			pauseOnFocus: false,
			adaptiveHeight: false,
			autoplay: true,
			autoplaySpeed: 5000,
			prevArrow: $('.btn-left'),
			nextArrow: $('.btn-right'),
		});
		
	}
		
		
		//Featured Products
	if($('.featured-slider').length) {
			
		$('.featured-slider').slick({
			dots: true,
			arrows: false,
			infinite: true,
			fade: false,
			speed: 300,
			slidesToShow: 1,
			pauseOnHover: false,
			pauseOnFocus: false,
			pauseOnDotsHover: false,
			adaptiveHeight: false,
			autoplay: true,
			autoplaySpeed: 5000
		});
	
	}

});