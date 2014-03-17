var win = Ti.UI.createWindow()
win.open();

var pages = [
			 { left: 0, height: 760, top: 0,backgroundImage: 'femaleBack.jpg', background: 'pageFemale.jpg',width: 384,page: 'her.js', Worktitle: 'Female'},
			 { right: 0, height: 760, top: 0,width: 384,backgroundImage: 'maleBack.jpg', background: 'malePage.jpg', page: 'his.js', Worktitle: 'Male'},
			 {  width: 768, height: 264, bottom: 0,  backgroundImage: 'allBtn.jpg', page: 'all.js', Worktitle: 'All', background: 'allPage.jpg'}
];

for (var i = 0; i < pages.length; i++){
	var button = Ti.UI.createButton({
		width: pages[i].width,
		backgroundImage: pages[i].backgroundImage,
		//backgroundColor: pages[i].backgroundColor,
		left: pages[i].left,
		right: pages[i].right,
		top: pages[i].top,
		bottom: pages[i].bottom,
		height: pages[i].height,
		urlPage: pages[i].page,
		back: pages[i].backgroundImage,
		workOutBack: pages[i].background,
				
		
		
	});
	win.add(button)
	button.addEventListener('click', myNewWin)
}

function myNewWin(e){
	
	var otherWin = Ti.UI.createWindow({
	left: 1500,
	width: 768,
	height: 1024,
	top:0,
	backgroundImage: e.source.workOutBack,
	url: e.source.urlPage,
	barColor: '#4c4c4c',
	title: e.source.Worktitle,
	moving: false,
	axis: 0
});

otherWin.open();
otherWin.animate({ left: 0})


}

var femaleText = Ti.UI.createImageView({
	image: 'femaleText.png',
	top: 630,
	left: 40
});

var maleText = Ti.UI.createImageView({
	image: 'maleText.png',
	top: 630,
	right: 0
});
var allText = Ti.UI.createImageView({
	image: 'allText.png',
	top: 820,
	right: 230
	
});

var titleText = Ti.UI.createImageView({
	image: 'titleText.png',
	top: 40,
	
});
win.add(femaleText);
win.add(maleText);
win.add(allText);
win.add(titleText);


