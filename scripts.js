


$(function() {
	
	$(".popup").delay(15000).fadeIn(400);
	
	$(".share").click(function() {
		$(".popup").stop(true, true).fadeIn(400);
	});
	
	$(".popup .close_button").click(function() {
		$(".popup").fadeOut(400);
	});
	
	
	
	
});


//clear input fields on focus, return to origin value if blank

		
$(document).ready(function(){

	
	$("input:not(input[type='submit'])").focus(function() {	
		
		if ($(this).val() == $(this).attr('value')) {
			$(this).val('');
		}
        
    });        

	$("input").blur(function() {	
		
		if ($(this).val() == '') {
			$(this).val($(this).attr('value'));	
		}
		
    });    

});
