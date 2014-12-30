$(document).ready(function() {
	
	// Announcement Carousel
	$("#announcement").carousel({
		interval: 5500
	});
	
	// Perform Animation
	$("[data-animate]").each(function(index) {
		$(this).css("visibility", "hidden");
		$(this).bind('inview', function (event, visible) {
			if (visible == true) {
				if(!$(this).hasClass('animated'))
				{
					$(this).addClass('animated');
					$(this).css("visibility", "visible");
					$(this).addClass($(this).attr("data-animate"));
				}
			}
		});
	});
});

function update_image($url)
{
	$("#preview").attr("src",$url);
}