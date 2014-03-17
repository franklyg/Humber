

views = [
	{backgroundImage:'/box.png', borderRadius:10,  top:10, left: 10, nextPage: '/workout.js', background: 'pImage.jpg', title: 'Yoga Ball Squats' },
	{backgroundImage:'/box.png', borderRadius:10,  top:10, left: 253 },
	{backgroundImage:'/box.png', borderRadius:10, top:10, left: 498 },
	{backgroundImage:'/box.png', borderRadius:10, top:245, left: 10 },
	{backgroundImage:'/box.png', borderRadius:10, top:245, left: 253 },
	{backgroundImage:'/box.png', borderRadius:10, top:245, left: 498 },
	{backgroundImage:'/box.png', borderRadius:10,  top:460, left: 10 },

]

var scrollView = Titanium.UI.createScrollView({ contentWidth: false, contentHeight:'auto', top:0, showVerticalScrollIndicator:true, });

for (var i = 0; i < views.length; i++){

var view = Ti.UI.createButton ({
	backgroundImage: views[i].backgroundImage,
	width: 261,
	height: 251,
	left: views[i].left,
	top: views[i].top,
	right: 15,
	urlPage: views[i].nextPage,
	workOutImage: views[i].background,
	titlePage: views[i].title
	
});

scrollView.add(view); 
view.addEventListener('click', openThisWindow);
}
var win = Ti.UI.createWindow();

var secondWin = Titanium.UI.currentWindow;
secondWin.add(scrollView);

var workoutNav = Ti.UI.iPhone.createNavigationGroup({
		window: secondWin
	});
win.add(workoutNav);	

function openThisWindow(e){
	var openThisWindow = Ti.UI.createWindow({
		url: e.source.urlPage,
		backgroundImage: e.source.workOutImage,
		title: e.source.titlePage,
		opacity: 0,
		barColor: '#4c4c4c',
		animatedCenterPoint: 'center'
		
	});
	openThisWindow.open();
	openThisWindow.animate({
		opacity: 1
});
	
}

