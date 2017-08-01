(function($) {
    "use strict";
	$(document).on('change','#page_template',function(){
		var $page_template;
		$page_template = $(this).val();
		if($page_template == 'templates/homepage.php')
		{
			$('#premise_landing_page').show();	
		}
		else
		{
			$('#premise_landing_page').hide();
		}
		
	});
	$(document).ready(function(){
		var $page_template;
		$page_template = $('#page_template').val();
		if($page_template == 'templates/homepage.php')
		{
			$('#premise_landing_page').show();	
		}
		else
		{
			$('#premise_landing_page').hide();
		}
		
	
	});
	
	
	
	
	
	
	
	
	$(document).on('change','#page_template',function(){
		var $page_template;
		$page_template = $(this).val();
		if($page_template == 'templates/about.php')
		{
			$('#about_landing_page').show();	
		}
		else
		{
			$('#about_landing_page').hide();
		}
		
	});
	$(document).ready(function(){
		var $page_template;
		$page_template = $('#page_template').val();
		if($page_template == 'templates/about.php')
		{
			$('#about_landing_page').show();	
		}
		else
		{
			$('#about_landing_page').hide();
		}
		
	
	});
})(jQuery); // End of use strict
