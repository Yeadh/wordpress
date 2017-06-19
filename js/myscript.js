(function($) {
    "use strict";

 
	  $(document).on('change','#page_template',function(){
		var $page_template;
		$page_template = $(this).val();
		if($page_template == 'homepage.php')
		{
			$('#premix_landing_page').show();	
		}
		else
		{
			$('#premix_landing_page').hide();
		}
		
	});
	$(document).ready(function(){
		var $page_template;
		$page_template = $('#page_template').val();
		if($page_template == 'homepage.php')
		{
			$('#premix_landing_page').show();	
		}
		else
		{
			$('#premix_landing_page').hide();
		}
		
	
	});

	  $(document).on('change','#page_template',function(){
		var $page_template;
		$page_template = $(this).val();
		if($page_template == 'gallery.php')
		{
			//$('#gallery_landing_page').show();	
		}
		else
		{
			//$('#gallery_landing_page').hide();
		}
		
	});
	$(document).ready(function(){
		var $page_template;
		$page_template = $('#page_template').val();
		if($page_template == 'gallery.php')
		{
			$('#gallery_landing_page').show();	
		}
		else
		{
			$('#gallery_landing_page').hide();
		}
		
	
	});
   
})(jQuery); // End of use strict
