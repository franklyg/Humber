var AllWorkoutWin = Ti.UI.createWindow({
	width: 360,
	left: 0,
	top: 0,
	backgroundImage: 'backWork.png',
	orientationModes: [
		Ti.UI.PORTRAIT
	]
	
});
AllWorkoutWin.open();

var rows = [
	{ title: 'Abs', backgroundColor: '#3f3f3f', hasChild: true, color: '#f7e8c6',workColor: '/allPage.jpg', url: '/All/Aabs.js' },
	{ title: 'Chest', backgroundColor: '#3f3f3f', hasChild: true,workColor: '/allPage.jpg', color: '#f7e8c6', url: '/All/Achest.js'},
	{ title: 'Arms', backgroundColor: '#3f3f3f' , hasChild: true,workColor: '/allPage.jpg',  color: '#f7e8c6', url: '/All/Aarms.js'},
	{ title: 'Legs', backgroundColor: '#3f3f3f' , hasChild: true, workColor: '/allPage.jpg', color: '#f7e8c6' , url: '/All/Alegs.js'},
	{ title: 'Stretches', backgroundColor: '#3f3f3f' , hasChild: true,workColor: '/allPage.jpg',  color: '#f7e8c6' , url: '/All/Astretches.js'},
];


/*********************************************
 * Workout Table
 *********************************************/
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
AllWorkoutWin.add(table)
var workoutHeader = Ti.UI.createImageView({
	image: 'workoutHeader.png',
	top: 25,
	left: 15,
	style: Titanium.UI.iPhone.TableViewStyle.GROUPED,
	
});
AllWorkoutWin.add(workoutHeader);
/**************************************************************************************************************************************/

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
AllWorkoutWin.add(genderTable);
genderTable.addEventListener('click', openWorkoutWin)
function openGenderWin(e){
	e.source.url.open();
}
/**************************************************************************************************************************************/
var mainWin = Ti.UI.createWindow({
	width: 768,
	
});
mainWin.open();



var AllWin = Ti.UI.currentWindow;
AllWin.backgroundImage = 'allPage.jpg';
var nav = Ti.UI.iPhone.createNavigationGroup({
	window:AllWin,
	
});
mainWin.animate({
	left: 360,
	duration: 500,
	
})
mainWin.add(nav)


var slideBtn = Ti.UI.createButton ({
	image: 'menu.png',
	width: 30,
	height: 60,
	toggle: false,
	
});

AllWin.setLeftNavButton(slideBtn);

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
		barColor: '#4c4c4c'
	});
	nav.open(workoutPage);
	mainWin.animate({
		left: 0,
		duration: 500
	});
	workoutPage.setLeftNavButton(slideBtn);
	
	
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


/****************************************************
 * Touch'n slide
 ****************************************************/
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

AllWin.addEventListener('touchstart', function(e){
	e.source.axis = parseInt(e.x);
});

AllWin.addEventListener('touchmove', function(e){
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

AllWin.addEventListener('touchend', function(e){
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

/*************************************
 * Mens progress
 *************************************/

AllWin.title = "All"
