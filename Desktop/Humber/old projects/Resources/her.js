var herWorkoutWin = Ti.UI.createWindow({
	width: 360,
	left: 0,
	top: 0,
	backgroundImage: 'backWork.png',
	
	
});
herWorkoutWin.open();

var rows = [
	{ title: 'Abs', backgroundColor: '#3f3f3f', hasChild: true, color: '#f7e8c6',workColor: '/pageFemale.jpg', url: '/Female/absF.js' },
	{ title: 'Chest', backgroundColor: '#3f3f3f', hasChild: true,workColor: '/pageFemale.jpg', color: '#f7e8c6', url: '/Female/chestF.js'},
	{ title: 'Arms', backgroundColor: '#3f3f3f' , hasChild: true,workColor: '/pageFemale.jpg', color: '#f7e8c6', url: '/Female/armsF.js'},
	{ title: 'Legs', backgroundColor: '#3f3f3f' , hasChild: true,workColor: '/pageFemale.jpg', color: '#f7e8c6', url: '/Female/legsF.js'},
	{ title: 'Stretches', backgroundColor: '#3f3f3f' , hasChild: true,workColor: '/pageFemale.jpg', color: '#f7e8c6', url: '/Female/stretchesF.js'},
];


var table = Ti.UI.createTableView({
		data: rows,
		style:Titanium.UI.iPhone.TableViewStyle.GROUPED,
		backgroundColor: rows.backgroundColor,
		top: 100,
		width: 300,
		left: 15,
		scrollable: false,
		url: rows.url,
		title: rows.title,
		otherPageColors: rows.workColor
		
});
herWorkoutWin.add(table)
var workoutHeader = Ti.UI.createImageView({
	image: 'workoutHeader.png',
	top: 25,
	left: 15
});
herWorkoutWin.add(workoutHeader)

/*********************************************
 * Gender Table
 *********************************************/
var gender = [
	{title: 'Hers', hasChild: true, color: '#f7e8c6', backgroundColor: '#3f3f3f', url: '/her.js' },
	{title: 'His', hasChild: true, color: '#f7e8c6', backgroundColor: '#3f3f3f', url: '/his.js'},
	{title: 'All', hasChild: true, color: '#f7e8c6', backgroundColor: '#3f3f3f', url: '/all.js'}
];

var genderTable = Ti.UI.createTableView({
	data: gender,
	top: 430,
	left: 15,
	width: 300,
	style: Titanium.UI.iPhone.TableViewStyle.GROUPED,
	backgroundColor: gender.backgroundColor,
	url: gender.url
	
});
herWorkoutWin.add(genderTable);
genderTable.addEventListener('click', openWorkoutWin)
function openGenderWin(e){
	e.source.url.open();
}
/**************************************************************************************************************************************/


var mainWin = Ti.UI.createWindow({
	width: 768,
	orientationModes: [
		Ti.UI.PORTRAIT,
		Ti.UI.UPSIDE_PORTRAIT,
		]
	
	
});
mainWin.open();



var herWin = Ti.UI.currentWindow;
herWin.backgroundImage = 'pageFemale.jpg';
var nav = Ti.UI.iPhone.createNavigationGroup({
	window:herWin
});
mainWin.animate({
	left: 360,
	duration: 500,
	
})
mainWin.add(nav)


var slideBtn = Ti.UI.createButton ({
	image: 'menu.png',
	width: 50,
	height: 40,
	toggle: false,
});

herWin.setLeftNavButton(slideBtn);
/*****************************************************************************************************************************************/



/****************************************************
 * SLIDING NAVIGATION
 ****************************************************/
slideBtn.addEventListener('click', function(e){
	if (e.source.toggle == true){
		mainWin.animate({
			left: 0,
			duration: 500
		});
		
		e.source.toggle = false;
	}else {
		mainWin.animate({
			left: 360,
			duration: 300
		});
		
		e.source.toggle = true;
	}
});

herWin.addEventListener('touchstart', function(e){
	e.source.axis = parseInt(e.x);
});

/****************************************************
 * Touch'n slide
 ****************************************************/

herWin.addEventListener('touchmove', function(e){
	var coordinates = parseInt(e.globalPoint.x) - e.source.axis;
	if (coordinates > 20 || coordinates < -20){
		e.source.moving = true;
	}
	if(e.source.moving == true && coordinates <= 360 && coordinates >= 0){
		mainWin.animate({
			left: coordinates,
			duration: 20
		});
		mainWin.left = coordinates;
	}
});

herWin.addEventListener('touchend', function(e){
	e.source.moving= false;
	if(mainWin.left >= 75 && mainWin.left < 360){
		mainWin.animate({
			left: 360,
			duration: 300
		});
		slideBtn.toggle = true;
	}else {
		mainWin.animate({
			left: 0,
			duration: 300
		});
		slideBtn.toggle = false;
	}
});




	// Taking Screen Width
var screenWidth = 768;
var needToChangeSize = false;

var screenWidthActual = Ti.Platform.displayCaps.platformWidth;

if (Ti.Platform.osname === 'android') {
if (screenWidthActual >= 641) {
screenWidth = screenWidthActual;
needToChangeSize = true;
}
}


// Button at the buttom side
var backButton = Ti.UI.createButton({
bottom : '20dp',
height : '40dp',
width : '200dp'
});

// Previous Button - Tool Bar
var prevMonth = Ti.UI.createButton({
left : '15dp',
width : 'auto',
height : 'auto',
title : '<' }); // Next Button - Tool Bar 
var nextMonth = Ti.UI.createButton({ right : '15dp', width : 'auto', height : 'auto', title : '>'
});

// Month Title - Tool Bar
var monthTitle = Ti.UI.createLabel({
width : '758dp',
height : '24dp',
textAlign : 'center',
color : 'white',
font : {
fontSize : 20,
fontWeight : 'bold',
top: '58dp'
}
});

// Tool Bar
var toolBar = Ti.UI.createView({
top : '58dp',
width : '698dp',
height : '80dp',
backgroundColor : '#4c4c4c',
layout : 'vertical',
left: '40dp'
});

// Tool Bar - View which contain Title Prev. &amp; Next Button
var toolBarTitle = Ti.UI.createView({
top : '3dp',
width : '322dp',
height : '24dp'
});

toolBarTitle.add(prevMonth);
toolBarTitle.add(monthTitle);
toolBarTitle.add(nextMonth);

// Tool Bar - Day's
var toolBarDays = Ti.UI.createView({
top : '18dp',
width : '768dp',
height : '22dp',
layout : 'horizontal',
left : '0dp'
});

toolBarDays.sunday = Ti.UI.createLabel({
left : '20dp',
height : '20dp',
text : 'Sun',
width : '66dp',

font : {
fontSize : 20,
fontWeight : 'bold'
},
color : 'white'
});

toolBarDays.monday = Ti.UI.createLabel({
left : '25dp',
height : '20dp',
text : 'Mon',
width : '56dp',

font : {
fontSize : 20,
fontWeight : 'bold'
},
color : 'white'
});

toolBarDays.tuesday = Ti.UI.createLabel({
left : '40dp',
height : '20dp',
text : 'Tue',
width : '46dp',

font : {
fontSize : 20,
fontWeight : 'bold'
},
color : 'white'
});

toolBarDays.wednesday = Ti.UI.createLabel({
left : '55dp',
height : '20dp',
text : 'Wed',
width : '46dp',

font : {
fontSize : 20,
fontWeight : 'bold'
},
color : 'white'
});

toolBarDays.thursday = Ti.UI.createLabel({
left : '60dp',
height : '20dp',
text : 'Thu',
width : '46dp',

font : {
fontSize : 20,
fontWeight : 'bold'
},
color : 'white'
});

toolBarDays.friday = Ti.UI.createLabel({
left : '60dp',
height : '20dp',
text : 'Fri',
width : '46dp',

font : {
fontSize : 20,
fontWeight : 'bold'
},
color : 'white'
});

toolBarDays.saturday = Ti.UI.createLabel({
left : '45dp',
height : '20dp',
text : 'Sat',
width : '46dp',

font : {
fontSize : 20,
fontWeight : 'bold'
},
color : 'white'
});

toolBarDays.add(toolBarDays.sunday);
toolBarDays.add(toolBarDays.monday);
toolBarDays.add(toolBarDays.tuesday);
toolBarDays.add(toolBarDays.wednesday);
toolBarDays.add(toolBarDays.thursday);
toolBarDays.add(toolBarDays.friday);
toolBarDays.add(toolBarDays.saturday);

// Adding Tool Bar Title View &amp; Tool Bar Days View
toolBar.add(toolBarTitle);
toolBar.add(toolBarDays);

// Function which create day view template
dayView = function(e) {
var label = Ti.UI.createLabel({
current : e.current,
width : '98dp',
height : '78dp',
backgroundColor : '#FFDCDCDF',
text : e.day,
textAlign : 'center',
color : e.color,

font : {
fontSize : 20,
fontWeight : 'bold',

}
});
return label;
};

monthName = function(e) {
switch(e) {
case 0:
e = 'January';
break;
case 1:
e = 'February';
break;
case 2:
e = 'March';
break;
case 3:
e = 'April';
break;
case 4:
e = 'May';
break;
case 5:
e = 'June';
break;
case 6:
e = 'July';
break;
case 7:
e = 'August';
break;
case 8:
e = 'September';
break;
case 9:
e = 'October';
break;
case 10:
e = 'November';
break;
case 11:
e = 'December';
break;
};
return e;
};

// Calendar Main Function
var calView = function(a, b, c) {
var nameOfMonth = monthName(b);

//create main calendar view
var mainView = Ti.UI.createView({
layout : 'horizontal',
width : '768dp',
height : '670dp',
top : '140dp',
//backgroundColor: '#FFDCDCDF',
position: 'centre'

});

//set the time
var daysInMonth = 32 - new Date(a, b, 32).getDate();
var dayOfMonth = new Date(a, b, c).getDate();
var dayOfWeek = new Date(a, b, 1).getDay();
var daysInLastMonth = 32 - new Date(a, b - 1, 32).getDate();
var daysInNextMonth = (new Date(a, b, daysInMonth).getDay()) - 6;

//set initial day number
var dayNumber = daysInLastMonth - dayOfWeek + 1;

//get last month's days
for ( i = 0; i < dayOfWeek; i++) {
mainView.add(new dayView({
day : dayNumber,
color : '#8e959f',
current : 'no',
dayOfMonth : '',

}));
dayNumber++;
};

// reset day number for current month
dayNumber = 1;

//get this month's days
for ( i = 0; i < daysInMonth; i++) { var newDay = new dayView({ day : dayNumber, color : '#3a4756', current : 'yes', dayOfMonth : dayOfMonth });
 mainView.add(newDay); if (newDay.text == dayOfMonth) 
 { newDay.color = 'white';  /*newDay.backgroundImage='../libraries/calendar/pngs/monthdaytiletoday_selected.png';*/ newDay.backgroundColor = '#9b00c1'; var oldDay = newDay; } dayNumber++; }; dayNumber = 1; 
 for ( i = 0; i > daysInNextMonth; i--) {
mainView.add(new dayView({
day : dayNumber,
color : '#8e959f',
current : 'no',
dayOfMonth : ''
}));
dayNumber++;
};

// this is the new "clicker" function, although it doesn't have a name anymore, it just is.
mainView.addEventListener('click', function(e) {
if (e.source.current == 'yes') {

// reset last day selected
if (oldDay.text == dayOfMonth) {
oldDay.color = 'white';
// oldDay.backgroundImage='../libraries/calendar/pngs/monthdaytiletoday.png';
oldDay.backgroundColor = '#9b00c1';
} else {
oldDay.color = '#3a4756';
// oldDay.backgroundImage='../libraries/calendar/pngs/monthdaytile-Decoded.png';
oldDay.backgroundColor = '#FFDCDCDF'
}
oldDay.backgroundPaddingLeft = '0dp';
oldDay.backgroundPaddingBottom = '0dp';

// set window title with day selected, for testing purposes only
backButton.title = nameOfMonth + ' ' + e.source.text + ', ' + a;

// set characteristic of the day selected
if (e.source.text == dayOfMonth) {
// e.source.backgroundImage='../libraries/calendar/pngs/monthdaytiletoday_selected.png';
e.source.backgroundColor = '#FFFF00FF';
} else {
// e.source.backgroundImage='../libraries/calendar/pngs/monthdaytile_selected.png';
e.source.backgroundColor = '#4c4c4c';
}
e.source.backgroundPaddingLeft = '1dp';
e.source.backgroundPaddingBottom = '1dp';
e.source.color = 'white';
//this day becomes old :(
oldDay = e.source;
}
});

return mainView;
};

// what's today's date?
var setDate = new Date();
a = setDate.getFullYear();
b = setDate.getMonth();
c = setDate.getDate();

// add the three calendar views to the window for changing calendars with animation later

var prevCalendarView = null;
if (b == 0) {
prevCalendarView = calView(a - 1, 11, c);
} else {
prevCalendarView = calView(a, b - 1, c);
}
prevCalendarView.left = (screenWidth * -1) + '45dp';

var nextCalendarView = null;
if (b == 0) {
nextCalendarView = calView(a + 1, 0, c);
} else {
nextCalendarView = calView(a, b + 1, c);
}
nextCalendarView.left = screenWidth + '45dp';

var thisCalendarView = calView(a, b, c);
if (needToChangeSize == false) {
thisCalendarView.left = '45dp';
}

monthTitle.text = monthName(b) + ' ' + a;

backButton.title = monthName(b) + ' ' + c + ', ' + a;

// add everything to the window
mainWin.add(toolBar);
mainWin.add(thisCalendarView);
mainWin.add(nextCalendarView);
mainWin.add(prevCalendarView);
//mainWin.add(backButton);

// yeah, open the window, why not?


var slideNext = Titanium.UI.createAnimation({
// left : '-322',
duration : 500
});

slideNext.left = (screenWidth * -1);

var slideReset = Titanium.UI.createAnimation({
// left : '-1',
duration : 500
});

if (needToChangeSize == false) {
slideReset.left = '45dp';
} else {
slideReset.left = ((screenWidth - 644) / 2);
}

var slidePrev = Titanium.UI.createAnimation({
// left : '322',
duration : 500
});

slidePrev.left = screenWidth;

// Next Month Click Event
nextMonth.addEventListener('click', function() {
if (b == 11) {
b = 0;
a++;
} else {
b++;
}

thisCalendarView.animate(slideNext);
nextCalendarView.animate(slideReset);

setTimeout(function() {
thisCalendarView.left = (screenWidth * -1) + 'dp';
if (needToChangeSize == false) {
nextCalendarView.left = '45dp';
} else {
nextCalendarView.left = ((screenWidth - 644) / 2);
}
prevCalendarView = thisCalendarView;
thisCalendarView = nextCalendarView;
if (b == 11) {
nextCalendarView = calView(a + 1, 0, c);
} else {
nextCalendarView = calView(a, b + 1, c);
}
monthTitle.text = monthName(b) + ' ' + a;
nextCalendarView.left = screenWidth + 'dp';
mainWin.add(nextCalendarView);
}, 500);
});

// Previous Month Click Event
prevMonth.addEventListener('click', function() {
if (b == 0) {
b = 11;
a--;
} else {
b--;
}
thisCalendarView.animate(slidePrev);
prevCalendarView.animate(slideReset);
setTimeout(function() {
thisCalendarView.left = screenWidth + 'dp';
if (needToChangeSize == false) {
prevCalendarView.left = '45dp';
} else {
prevCalendarView.left = ((screenWidth - 644) / 2);
}
nextCalendarView = thisCalendarView;
thisCalendarView = prevCalendarView;
if (b == 0) {
prevCalendarView = calView(a - 1, 11, c);
} else {
prevCalendarView = calView(a, b - 1, c);
}
monthTitle.text = monthName(b) + ' ' + a;
prevCalendarView.left = (screenWidth * -1) + 'dp';
mainWin.add(prevCalendarView);
}, 500);
});


/****************************************************
 * Workoutpages
 ****************************************************/
table.addEventListener('click', openWorkoutWin)
function openWorkoutWin(e){
	var workoutPage = Ti.UI.createWindow({
		url: e.source.url,
		backgroundImage: e.source.workColor,
		title: e.source.title,
		width: 768,
		height: 1024,
		top: 0,
		barColor: '#4c4c4c',
		
	});
	
	nav.open(workoutPage);
	mainWin.animate({
		left: 0,
		duration: 500
	});
	workoutPage.setLeftNavButton(slideBtn);
	toolBar.animate({
		opacity: 0
	});
	thisCalendarView.animate({
		opacity: 0
	});
	progressChart.animate({
		opacity: 0
	})
	
	
	
	slideBtn.addEventListener('singletap', function(e){
	if (e.source.toggle == true){
		workoutPage.animate({
			left: 0,
			duration: 500
		});
		
		e.source.toggle = false;
	}else {
		workoutPage.animate({
			left: 0,
			duration: 300
		});
		
		e.source.toggle = true;
	}
});



workoutPage.addEventListener('touchstart', function(e){
	e.source.axis = parseInt(e.x);
});

workoutPage.addEventListener('touchmove', function(e){
	var coordinates = parseInt(e.globalPoint.x) - e.source.axis;
	if (coordinates > 20 || coordinates < -20){
		e.source.moving = true;
	}
	if(e.source.moving == true && coordinates <= 360 && coordinates >= 0){
		mainWin.animate({
			left: coordinates,
			duration: 20
		});
		mainWin.left = coordinates;
	}
});

workoutPage.addEventListener('touchend', function(e){
	e.source.moving= false;
	if(mainWin.left >= 75 && mainWin.left < 360){
		mainWin.animate({
			left: 360,
			duration: 300
		});
		slideBtn.toggle = true;
	}else {
		mainWin.animate({
			left: 0,
			duration: 300
		});
		slideBtn.toggle = false;
	}
});
}
/***********************************************************************************************************************************************/

var progressChart = Ti.UI.createImageView ({
	width: 685,
	height: 370,
	image: 'progressChart.png',
	top: 610,
	left: 45
});
mainWin.add(progressChart);
herWin.title = "Female"
