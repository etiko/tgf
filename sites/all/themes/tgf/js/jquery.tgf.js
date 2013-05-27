(function($) {
	$.fn.ElementTidy = function() {
		element_height_tidy();
		element_tidy_image();
		element_include_active();
		
		//align height of various items
		function element_height_tidy() {
			if ($('.item-list').length > 0) {				
				var currentTallest = 0;
				$('.item-list li').each(function(){if ($(this).height() > currentTallest) { currentTallest = $(this).height();}});
				$('.item-list li').css('min-height', currentTallest + 1);				
			}			
		}
		
		//remove play button from non-videos
		function element_tidy_image() {
			$('.trends-list ul li img').each(function(){
				if ($(this).attr('src').indexOf('media-youtube') > -1) {
					
				}
				else {					
					$(this).siblings('a').css({'display':'none'});
				}				
			});			
		}
		
		//include active where necessary
		function element_include_active() {		
			$('#main-menu li a').each(function() {
				if(window.location.href.indexOf($(this).attr('href')) !== -1) {
					$(this).addClass('active');
					$(this).parent().siblings('li').children().removeClass('active');
				}
			});			   
		}
	};
	
})(jQuery);