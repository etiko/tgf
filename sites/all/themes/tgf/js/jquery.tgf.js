(function($) {
	$.fn.ElementTidy = function() {
		element_height_tidy();
		element_include_active();
		
		//align height of various items
		function element_height_tidy() {
			if ($('.item-list').length > 0) {				
				var currentTallest = 0;
				$('.item-list li').each(function(){if ($(this).height() > currentTallest) { currentTallest = $(this).height();}});
				$('.item-list li').css('min-height', currentTallest + 1);				
			}			
			
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