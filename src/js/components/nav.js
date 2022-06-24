jQuery(document).ready(function($) {
	var elementHeights = "";
	var elementWidths = "";
	var maxHeight = "";
	// Desktop Nav
	$(window).on("load resize", function() {	
		$('.desktop-nav .main-nav > li > .sub-menu').css('position', 'relative');
				
		// Get an array of all element heights
		var elementHeights = $('.desktop-nav .main-nav > li > ul.sub-menu').map(function() {
			return $(this).outerHeight() - 30;
		}).get();
		

				
		// Math.max takes a variable number of arguments
		// `apply` is equivalent to passing each height as an argument
		var maxHeight = Math.max.apply(null, elementHeights);
		//var maxWidth = Math.max.apply(null, elementWidths);
		
		console.log(maxHeight);
		
		// Set each height to the max height
		$('.desktop-nav .main-nav').css('min-height', maxHeight);

		
		$('.desktop-nav .main-nav > li > .sub-menu').css('position', 'absolute');
		//$('.desktop-nav .main-nav > li > .sub-menu').fadeOut(0);
		
	});
	
	if( $('.desktop-nav .main-nav > li.current-page-parent').length < 1 ) {
		
		$('.desktop-nav .main-nav > li:first > ul').css('visibility', 'visible');
		$('.desktop-nav .main-nav > li:first > ul').css('opacity', '1');
		
		$('.desktop-nav .main-nav > li:not(:first)').hover(
			 function() { //hover
				$(this).find('ul').css('visibility', 'visible');
				$(this).find('ul').css('opacity', '1');
				$('.desktop-nav .main-nav > li:first > ul').css('opacity', '0');
				$('.desktop-nav .main-nav > li:first > ul').css('visibility', 'hidden');
			  }, 
			  function() { //out
				$(this).find('ul').css('opacity', '0');
				$(this).find('ul').css('visibility', 'hidden');
				$('.desktop-nav .main-nav > li:first > ul').css('visibility', 'visible');
				$('.desktop-nav .main-nav > li:first > ul').css('opacity', '1');
			  }
		);
		
	} else {
		
		$('.desktop-nav .main-nav > li.current-page-parent > ul').css('visibility', 'visible');
		$('.desktop-nav .main-nav > li.current-page-parent > ul').css('opacity', '1');
		
		$('.desktop-nav .main-nav > li:not(.current-page-parent)').hover(
			 function() { //hover
				$(this).find('ul').css('visibility', 'visible');
				$(this).find('ul').css('opacity', '1');
				$('.desktop-nav .main-nav > li.current-page-parent > ul').css('opacity', '0');
				$('.desktop-nav .main-nav > li.current-page-parent > ul').css('visibility', 'hidden');
			  }, 
			  function() { //out
				$(this).find('ul').css('opacity', '0');
				$(this).find('ul').css('visibility', 'hidden');
				$('.desktop-nav .main-nav > li.current-page-parent > ul').css('visibility', 'visible');
				$('.desktop-nav .main-nav > li.current-page-parent > ul').css('opacity', '1');
			  }
		);
		
	}
	

	

	
	
	// Mobile Nav
	$('body').on('click', '.hamburger', function(e) {
		$( e.delegateTarget ).toggleClass('nav-open');
		$(this).toggleClass('is-active'); 
	});	
	
	$( '.mobile-nav-inner-nav .sub-menu' ).each(function( index ) {
	  $( this ).before('<button type="button" class="sub-menu-toggle"></button>');
	});
	
	$('.sub-menu-toggle').on('click', function(e) {
		$(this).next().slideToggle(200);
		$(this).toggleClass('is-active');
	});
	

});