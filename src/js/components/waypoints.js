$(document).ready(function() {

	if($('.action-fade').length){
		$('.action-fade').waypoint({
	    	handler: function(direction) {
	      	  var target = $(this.element);
	      	  if (direction === 'down') {
		      	target.addClass('is-animated');
				this.destroy();
			  }
		    },
		    offset: '75%'
		});	
	}
	
	
	

});