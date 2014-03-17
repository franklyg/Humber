$(window).resize(function(){
	
	var w = $(window).width();
	
	if (w <= 768) {
		
		$("#sideNav").css({
			"left" : "-295px"
		});
		$("#rNavBtn").css({
			left: "0px"
		});

		$("#rNavBtn").stop().click(function(){
			$("#sideNav").stop().animate({
				left: 0
			}, 500);
			$("#rNavBtn").stop().animate({
				left: -155

			}, 500)
		});

		$(".piece, .about, #dropBox").stop().click(function(){
			
			$("#sideNav").stop().animate({
				left: "-295px"
			}, 250)
			$("#rNavBtn").stop().animate({
				left: "0px"
			}, 500);

		

		});
	} else 
		// if ( w != 768 || w > 768 )
	{
		$("#sideNav").stop().css({
			"left" : "0px"
		});
		$("#rNavBtn").stop().css({
			"left" : "-55px"
		});
		$(".piece ,.about, #dropBox").stop().click(function(){
			$("#sideNav").stop().css({
				"left" : "0px"
			});
		});	
	}
	

});//full closure
