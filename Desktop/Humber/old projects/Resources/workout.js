var secondWin = Ti.UI.currentWindow;

var workoutPageWin = Ti.UI.createWindow({
	orientationModes: [
		Ti.UI.PORTRAIT,
		Ti.UI.LANDSCAPE_LEFT,
		Ti.UI.LANDSCAPE_RIGHT,
		Ti.UI.UPSIDE_PORTRAIT,
		]
});


workoutPageWin.open();

var backNav = Ti.UI.iPhone.createNavigationGroup({
	window: secondWin
});
workoutPageWin.add(backNav)

var backBtn = Ti.UI.createButton({
	image: 'back.png',
	backgroundDisabledColor: true,
	backgroundImage: true,
	borderRadius: false,
	
});

backBtn.addEventListener('click', backtoWin)
function backtoWin(e){
	workoutPageWin.animate({
		
		duration: 350,
		opacity: 0
		
	});
	workoutPageWin.close(WorkoutPage,{animate: true});
}

/*************************************************
 * count down timer
 ***********************************************/
var topBack = Ti.UI.createView({
	width: 748,
	height: 270,
	top: 15,
	backgroundImage: 'titleBack.png',
	backgroundRepeat: true,
	borderRadius: 25
});

secondWin.add(topBack);

var easySet = Ti.UI.createButton({
	top: 40,
	title: 'Easy(5:30) >',
	left: 20,
	backgroundDisabledColor: true,
	backgroundImage: true,
	borderRadius: false,
	color: 'white',
	font: { fontWeight: 'bold', fontSize: 20}
	
});
var mediumSet = Ti.UI.createButton({
	top: 80,
	title: 'Medium(10:00) >',
	left: 20,
	backgroundDisabledColor: true,
	backgroundImage: true,
	borderRadius: false,
	color: 'white',
	font: { fontWeight: 'bold', fontSize: 20}
});
var hardSet = Ti.UI.createButton({
	top: 120,
	title: 'Hard(20:00) >',
	left: 20,
	backgroundDisabledColor: true,
	backgroundImage: true,
	borderRadius: false,
	color: 'white',
	font: { fontWeight: 'bold', fontSize: 20}
});

var stop_btn = Ti.UI.createButton({
	top: 140,
	left: 395,
	title: 'stop'
});
var start_btn = Ti.UI.createButton({
	top: 140,
	left: 305,
	title: 'start'
});
var display_lbl = Ti.UI.createLabel({
	top: 90,
	font: { fontSize: 35},
	color: 'white',
	text: 'Select a Level'
});

topBack.add(easySet)
topBack.add(mediumSet)
topBack.add(hardSet)
topBack.add(start_btn)
topBack.add(stop_btn)
topBack.add(display_lbl)

easySet.addEventListener('click', function(){
	display_lbl.text = "5:30";
	my_timer.set(5,30);
});
mediumSet.addEventListener('click', function(){
	display_lbl.text = "10:00";
	my_timer.set(10,00);
});
hardSet.addEventListener('click', function(){
	display_lbl.text = "20:00";
	my_timer.set(20,00);
});
stop_btn.addEventListener('click', function(){
	my_timer.stop();
});
start_btn.addEventListener('click', function(){
	my_timer.start();
});






var countDown = function (m, s, fn_tick, fn_end) {
	return{
		total_sec: m*60+s,
		timer: this.timer,
		set: function (m, s) {
			
			this.total_sec = parseInt(m)*60+parseInt(s);
			this.time = {m:m, s:s};
			return this;
			
		},
		start: function(){
			var self = this;
			this.timer	= setInterval(function(){
				if(self.total_sec){
					self.total_sec--;
					self.time = { m: parseInt(self.total_sec/60), s: (self.total_sec%60)};
					fn_tick();
				}else {
					self.stop();
					//fn_end();
				}
			}, 1000);
			return this;
		},
		stop: function (){
			clearInterval(this.timer)
			this.time = {m: 0, s: 0};
			this.total_sec = 0;
			return this;
		}
		
	}
}

var my_timer = new countDown(5, 30,
	function(){
		display_lbl.text = my_timer.time.m+":"+my_timer.time.s;
	}
);
/********************************************************************************************************************************************/
secondWin.setLeftNavButton(backBtn);

/**************************************************
 * Mp3 Player
 **************************************************/

var playButton = Ti.UI.createButton({
	title: 'play',
	click: false,
	top: 40,
	right: 70
});
var pauseButton = Ti.UI.createButton({
	title: 'pause',
	top: 40,
	right: 135
	
})
topBack.add(playButton);
playButton.addEventListener('click', playSong)
function playSong (e){
	player.play();
	
}
topBack.add(pauseButton);
pauseButton.addEventListener('click', pauseSong)
function pauseSong (e){
	player.pause();
}


var songs = []
songs.push('/music/09 New Thrash.m4a');
songs.push('/music/19 Hope.m4a');

var index = 1;
loopMessageSound();
 
    function loopMessageSound() {
        player = Ti.Media.createSound();
        
        player.url = songs[index];
        
              //while(index > 0) {index++; console.log(index); if (index == 10) {index = 0;}}  
            player.addEventListener('complete', function(e) {
           
             while(index > 0) {
             	index++; 
             	console.log(index); 
             	if (index == 2) 
             	{index = 0;}
             	}  
            });
    }
    var next_btn = Ti.UI.createButton({
    	top: 40,
    	right: 10,
    	title: 'next'
    })
     var back_btn = Ti.UI.createButton({
    	top: 40,
    	right: 210,
    	title: 'back'
    })
    
    next_btn.addEventListener("click",function(e){
 		if (index < songs.length){
			player.stop();
    		index ++;
   			 loopMessageSound();
   			 } else {
                index = 0 ;
                loopMessageSound();
              }
              });
 back_btn.addEventListener("click",function(e){
 		if (index < songs.length){
 			player.stop();
    		index ++;
    		loopMessageSound();
    			} else {
                index -= 0 ;
                loopMessageSound();
              }
              });

 
 
topBack.add(next_btn)
topBack.add(back_btn)
 /*
  * Orientation Placements
  */   
Ti.Gesture.addEventListener('orientationchange', function(e){
    if (e.orientation === Ti.UI.LANDSCAPE_RIGHT || e.orientation === Ti.UI.LANDSCAPE_LEFT) {
       //landscape
        easySet.top = 40;
        mediumSet.top = 80;
        hardSet.top = 120;
        secondWin.backgroundImage = 'limage.jpg';
     	scrollable.top = 250;
     	topBack.width = 1004;
     	topBack.height = 200;
     	start_btn.left = 420;
     	stop_btn.left =525;
    } else {
        easySet.top = 40;
        mediumSet.top = 80;
        hardSet.top = 120;
         secondWin.backgroundImage = 'pImage.jpg';
         scrollable.top = 390;
         topBack.width  = 748;
         topBack.height = 270;
         start_btn.left = 305;
     	stop_btn.left = 395;
        	
    }
});
/*
 * scroll Images
 */

var view1 = Titanium.UI.createView({backgroundImage:'fittnesschick2.png', width: 481, height: 425});
var view2 = Titanium.UI.createView({backgroundImage:'fittnesschick.png', width:484, height: 494, top: 400});

var scrollable = Titanium.UI.createScrollableView({
    views:[view1,view2],
    showPagingControl: true,
  	pagingControlAlpha: 0,
  	height: 485,
  	borderColor: 'red',
  	top: 390
});
workoutPageWin.add(scrollable);
var myDesc = ['Step 1: Lay back on yoga ball.', 'Step 2: Incline up'];
var myLabel = Ti.UI.createLabel ({
	color: 'white',
	font: {fontSize: 25, fontWeight: 'bold'},
	height: 80,
	bottom: 40,
	text: 'Step 1: Lay back on yoga ball.'
	
})
scrollable.addEventListener('scroll', function(e){
	myLabel.text=myDesc[e.currentPage];
});
workoutPageWin.add(myLabel);

var fuelOn = Ti.UI.createImageView ({
	image: 'fuelon.png',
	bottom: 50,
	left: 20,
	click: true
	
});
secondWin.add(fuelOn);
var fuelOff = Ti.UI.createImageView ({
	image: 'fueloff.png',
	bottom: 50,
	left: 20,
	click: false
});
secondWin.add(fuelOff);

fuelOff.addEventListener('singletap', fuelTurnOn)

function fuelTurnOn (e){
	if(e.source.click == true){
	
	e.source.image = "fueloff.png"
	
	e.source.click = false;
	}else{

		e.source.image = "fuelon.png"
	e.source.click = true;
	}
}

