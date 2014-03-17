$(document).ready(function(){
	
	/*
	*== Mini Animations
	*/
	$('#content').hide();
	$('#about').hide();
	$(window).load(function(){
		$('#content').fadeIn(1500);
	});

	/*	
	*== Slide in effect
	*/
	var delay =0;
	$('#disapear').click(function(){
		$('#dropBox').animate({
			left: 55
		});
		//Page Transition Changes
		$('div[class*="nonPort"]').fadeOut();
		$('#pieceOne').nextUntil('.span').hide();
		$('#portfolioPieces').delay(1000).fadeIn(2000);
		
		$('.piece').each(function(){
			$(this).stop().show().delay(delay).animate({
				left: 0,
				opacity: 1
			}, 750)
			delay += 100;
		});
		$('#disapear a').animate({
			left: -60,
			opacity: 0
		})
	});

	/*
	*==MysteryBox Slide out effect
	*/
	$('#dropBox').click(function(){
		$('.piece').each(function(){
			$(this).stop().delay(delay).animate({
				left: -375,
				opacity: 0
			}, 500)
			delay -= 100;
		}).hide(1000);
	$('#dropBox').animate({
			left: 500
		});
	//Page Transition Changes
		$('#portfolioPieces').fadeOut();

		$('#content').delay(1000).fadeIn(2000);
		$('#disapear a').animate({
			left: 0,
			opacity: 1
		});
	});
	
	/*
	*== Portfolio Page
	*/	

	/*
	*==About Page
	*/	
	$(".about").click(function(){
		$('div[class*="nonAbout"]').fadeOut(750);
		$('#about').delay(1000).fadeIn();
		
		$('.piece').css({
			"display" : "none"
		});
		$('#dropBox').animate({
			left: 500
		});
		$('#disapear a').animate({
			left: 0,
			opacity: 1
		});
	});

	/*
	*==Social Buttons
	*/
	$('#twitter').mouseover(function(){
			$('#twitter span').stop().animate({
				marginTop: '50px'//result position
		});
	});
	$('#twitter').mouseout(function(){
			$('#twitter span').stop().animate({
				marginTop: '150px'//org position
		});
		
	});
	//close twitter name slider
	
	//linkedIn name slider
	$('#linkedin').mouseover(function(){
		$('#linkedin span').stop().animate({
			marginTop: '50px'
			});
		});
	$('#linkedin').mouseout(function(){
		$('#linkedin span').stop().animate({
			marginTop: '150px'
			});
		});//closes linkedin name slider	
		//linkedIn name slider
	$('#email').mouseover(function(){
		$('#email span').stop().animate({
			marginTop: '50px'
			});
		});
	$('#email').mouseout(function(){
		$('#email span').stop().animate({
			marginTop: '150px'
			});
		});//closes linkedin name slider

			



});//full closure

