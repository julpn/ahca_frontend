
//drop-down menus

$(document).ready(function() {
	
	$("nav div, nav ul").hover(
		
		function () {
			$(this).children("ul").stop(true, true).fadeIn("400");
		},
		
		function () {
			$(this).children("ul").stop(true, true).fadeOut("400");
		}
	
	);
	
});


//mobile navigation

$( document ).ready(function() {

 	var menuHeight = $(".mobile_menu").height();
	
 	$(".open_button, .close_button").click( function(){
	  if ($(".open_button").hasClass("isUp")) {
		  $(".slide").animate({top:"0"}, 400);          
		  $(".open_button").removeClass("isUp");
	  } else {
		  $(".slide").animate({top: - (menuHeight + 200)}, 400);   
		  $(".open_button").addClass("isUp");
	  }
  });

});
