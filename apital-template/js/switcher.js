/*-----------------------------------------------------------------------------------
/* Styles Switcher
-----------------------------------------------------------------------------------*/

window.console = window.console || (function(){
	var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
	return c;
})();


jQuery(document).ready(function($) {
	    
		// Skin
		$(".sk-w" ).click(function(){
			$("#skin" ).attr("href", "css/style.css" );
			return false;
		});
		
		$(".sk-d" ).click(function(){
			$("#skin" ).attr("href", "css/dark.css" );
			return false;
		});
	
		// Color Changer
		$(".green" ).click(function(){
			$("#colors" ).attr("href", "css/colors/green.css" );
			return false;
		});
		
		$(".blue-a" ).click(function(){
			$("#colors" ).attr("href", "css/colors/blue.css" );
			return false;
		});
		
		$(".salmon" ).click(function(){
			$("#colors" ).attr("href", "css/colors/salmon.css" );
			return false;
		});
		
		$(".gray" ).click(function(){
			$("#colors" ).attr("href", "css/colors/gray.css" );
			return false;
		});
		
		$(".yellow" ).click(function(){
			$("#colors" ).attr("href", "css/colors/yellow.css" );
			return false;
		});
		
		$(".red" ).click(function(){
			$("#colors" ).attr("href", "css/colors/red.css" );
			return false;
		});
		
		$(".olive" ).click(function(){
			$("#colors" ).attr("href", "css/colors/olive.css" );
			return false;
		});

		$(".royal" ).click(function(){
			$("#colors" ).attr("href", "css/colors/royal.css" );
			return false;
		});

		$(".violet" ).click(function(){
			$("#colors" ).attr("href", "css/colors/violet.css" );
			return false;
		});

		$(".turquoise" ).click(function(){
			$("#colors" ).attr("href", "css/colors/turquoise.css" );
			return false;
		});
		

		$("#style-switcher h2 a").click(function(e){
			e.preventDefault();
			var div = $("#style-switcher");
			console.log(div.css("left"));
			if (div.css("left") === "-206px") {
				$("#style-switcher").animate({
					left: "0px"
				}); 
			} else {
				$("#style-switcher").animate({
					left: "-206px"
				});
			}
		});

		// Footer Style Switcher
	   $("#footer-style").change(function(e){
			if( $(this).val() == 1){
				$("#footer").removeClass("dark");        
				$("#footer-bottom").removeClass("dark");
			} else{
				$("#footer").addClass("dark");        
				$("#footer-bottom").addClass("dark");  
			}
		});

		//Layout Switcher
	   $("#layout-style").change(function(e){
			if( $(this).val() == 1){
				$("body").removeClass("boxed"), 
				$(window).resize();
				stickyheader = !stickyheader;
			} else{
				$("body").addClass("boxed"),
				$(window).resize();
				stickyheader = !stickyheader;
			}
		});

		$("#layout-switcher").on('change', function() {
			$('#layout').attr('href', $(this).val() + '.css');
		});

		$(".colors li a").click(function(e){
			e.preventDefault();
			$(this).parent().parent().find("a").removeClass("active");
			$(this).addClass("active");
		});
		
		$('.bg li a').click(function() {
			var current = $('#style-switcher select[id=layout-style]').find('option:selected').val();
			if(current == '2') {
				var bg = $(this).css("backgroundImage");
				$("body").css("backgroundImage",bg);
			} else {
				alert('Please select boxed layout!');
			}
		});	

		$("#reset a").click(function(e){
			var bg = $(this).css("backgroundImage");
			$("body").css("backgroundImage","url(./images/bg/noise.png)");
			$("#navigation" ).removeClass("style-2")
		});
			

	});