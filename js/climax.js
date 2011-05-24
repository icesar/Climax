
/* The following code block executes when the page is initially loaded, and does a lot of setup work */
$(document).ready( function() {

	// This adds fancy tooltips to any element with class "fancyToolTip"
	$(".fancyToolTip").tipTip({maxWidth: "350px"});

	// Initialize the Pretty Photo Overlay Plugin
	$("a[rel^='prettyPhoto']").prettyPhoto();

	// Simple function to enable "Scroll To" functionality
	$(".scrollto").click(function(event){
		//prevent the default action for the click event
		event.preventDefault();

		//get the full url - like mysitecom/index.htm#home
		var full_url = this.href;

		//split the url by # and get the anchor target name - home in mysitecom/index.htm#home
		var parts = full_url.split("#");
		var trgt = parts[1];

		//get the top offset of the target anchor
		var target_offset = $("#"+trgt).offset();
		var target_top = target_offset.top;

		//goto that anchor by setting the body scroll top to anchor top
		$('html, body').animate({scrollTop:target_top}, 1000);
	});

});
