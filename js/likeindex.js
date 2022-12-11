
// Use each to assign a copy of the voteAmount variable to EACH of the clickUp buttons.
$('.rating').ready(function(){	
			var voteAmount = 0;

// Use this to ensure you're attaching the event within EACH of the buttons.
// Using the classname takes the button you've clicked and continues the number on.

$(this).find(".rating-up").click(function(){	

	if(voteAmount < 1) {
			voteAmount ++;
		$(this).siblings('.counter').text(voteAmount);
	}
	
	else {
		alert("You can vote only once");
	};
});


$(this).find(".rating-down").click(function(){	

	if(voteAmount > -1) {
			voteAmount --;
		$(this).siblings('.counter').text(voteAmount);
	}
	
	else {
		alert("You can vote only once");
	};
});
	
	
}); // Ends the each();