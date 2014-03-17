var dataAsJSON;
var shots;
var profile


var myRequest = Ti.Network.createHTTPClient ({

	onload:function(e){
	Ti.API.log(this.responseText);
	dataAsJSON = JSON.parse(this.responseText);
	shots = dataAsJSON.shots;
	profile = dataAsJSON.players;
	loadThumbNails();
		
}

//"http://api.dribbble.com/players/username/shots"
});
myRequest.open("GET", "http://api.dribbble.com/shots/popular");
myRequest.send();



var win = Ti.UI.createWindow({
	backgroundImage: 'textured_stripes.png',
	title: 'dribbble',
	barColor: '#333333',
	backgroundRepeat: true,
	orientationModes: [
		Ti.UI.PORTRAIT
	]
});
win.open();

var bigView = Ti.UI.createView ({
	width: 980,
	height: 1208,
	backgroundImage: 'debut_dark.png',
	backgroundRepeat: true,
	zIndex: 1,
	moving:false, 
    axis:0 	

});
win.add(bigView);
bigView.animate({
	top:250, 
	
	duration:1500, 
	curve:Titanium.UI.ANIMATION_CURVE_EASE_OUT,
	ease: 500
});



var scroll = Ti.UI.createScrollView({
	contentHeight: 250,
	contentwidth: 'auto',
	layout: 'horizontal',
	showHorizontalScrollIndicator: true
	
});
win.add(scroll);


//import function
function loadThumbNails (){
	for (var i = 0; i < shots.length; i++){
		
		var thumb = Ti.UI.createImageView({
			image:shots[i].image_teaser_url,
			largeImage:shots[i].image_url,//largeImages
			player: shots[i].player,//player
			name: shots[i].player.name,//name of user
			username: shots[i].player.username,//username of user
			views: shots[i].views_count,//viewcounter
			likes: shots[i].likes_count,//likes per image
			avatar: shots[i].player.avatar_url,
			height: 150,
			left: 20,
			top: 25
		});
		thumb.addEventListener('touchstart', function (e){
			bigImage.image = e.source.largeImage;
			label.text = e.source.player.username;
			label2.text = e.source.player.name;
			label3.text = e.source.views;
			label4.text = e.source.likes;
			avatarImg.image = e.source.avatar;
			heart.animate({
				opacity: 1,
				duration: 500
			});
			eye.animate({
				opacity: 1,
				duration: 500
			});
		});
		
		
		scroll.add(thumb);
		
	}
}


var bigImage = Ti.UI.createImageView ({
	
	width: 700,
	height: 600,
	top: 65,
	
});
bigView.add(bigImage);

//dribbble logo
var dlogo = Ti.UI.createImageView ({
	image: 'ribbons.png',
	top: -5,
	left: 125,
	
});
bigView.add(dlogo);

//toggle button image
var btn = Ti.UI.createButton ({
	image: 'pics.png',
	top: 5,
	left: 160,
	backgroundDisabledColor: true,
	backgroundImage: true,
	borderRadius: false,
});

//toggle button function
btn.addEventListener ('click', function(e){
	if (e.source.toggle == true){
		bigView.animate({
			top: 0,
			duration: 500,
			curve: Ti.UI.ANIMATION_CURVE_EASE_IN
		});
		e.source.toggle = false;
	}
	else {
		
			bigView.animate({
				top: 250,
				duration: 500,
				curve: Ti.UI.ANIMATION_CURVE_EASE_IN
				
			});
		e.source.toggle = true;
		}
	
});

//username
var label = Ti.UI.createLabel ({
	top: 5,
	left: 270,
	font:{ fontWeight:'bold',fontSize:45},
	color: 'white'
	
});
//name
var label2 = Ti.UI.createLabel ({
	
	top: 60,
	left: 270,
	font:{ fontWeight:'light',fontSize:25},
	color: 'white'
	
});
//views
var label3 = Ti.UI.createLabel ({
	
	top: 635,
	left: 185,
	font:{ fontWeight:'bold',fontSize:25},
	color: 'white'
	
});
//likes
var label4 = Ti.UI.createLabel ({
	
	top: 635,
	left: 293,
	font:{ fontWeight:'bold',fontSize:25},
	color: 'white'
	
});
//eye icon
var eye = Ti.UI.createImageView ({
	image: 'eye.png',
	top: 637,
	left: 140,
	opacity: 0
});
//heart icon
var heart = Ti.UI.createImageView ({
	image: 'heart.png',
	top: 637,
	left: 249,
	opacity: 0
});
var avatarImg = Ti.UI.createImageView({
	right: 160,
	top: 20,
	width: 70,
	height: 70
});





//bigView additions
bigView.add(avatarImg);
bigView.add(btn);
bigView.add(label);
bigView.add(label2);
bigView.add(label3);
bigView.add(label4);
bigView.add(eye);
//bigView.add(user);
bigView.add(heart);

/*
 *********** User Pics *********************
 */
var pics;
var profilePics = Ti.Network.createHTTPClient ({

	onload:function(e){
	Ti.API.log(this.responseText);
	dataForPics = JSON.parse(this.responseText);
	pics = dataForPics.shots;
	loadUserPics();
	
		
}

//"http://api.dribbble.com/players/username/shots"
});

profilePics.open("GET", "http://api.dribbble.com/shots/debuts");
profilePics.send();

function loadUserPics (){
	for (var i = 0; i < pics.length; i++){
		
		var thumbs = Ti.UI.createImageView({
			image:pics[i].image_teaser_url,
			largeImage:pics[i].image_url,
			player: pics[i].player,//player
			name: pics[i].player.name,//name of user//largeImages
			views: pics[i].views_count,//viewcounter
			likes: pics[i].likes_count,//likes per image
			avatar: pics[i].player.avatar_url,
			height: 150,
			left: 20,
			top: 25,
			zIndex: 3
		});
		thumbs.addEventListener('touchstart', function (e){
			bigImage.image = e.source.largeImage;
			label.text = e.source.player.username;
			label2.text = e.source.player.name;
			label3.text = e.source.views;
			label4.text = e.source.likes;
			avatarImg.image = e.source.avatar;
		});
		
		
		userScroll.add(thumbs);
	}
}



var userPics = Ti.UI.createView({
	width: 960,
	height: 240,
	bottom: 230,
	left: 50
});

var newStuff = Ti.UI.createLabel({
	text: 'New and Upcoming:',
	color: 'white',
	bottom: 470,
	left: 120,
	font: { fontSize: 35, fontFamily: 'helvetica'}
});
bigView.add(newStuff);

var userScroll = Ti.UI.createScrollView({
	contentHeight: 240,
	contentWidth: 'auto',
	layout: 'horizontal',
	bottom: 0,
	zIndex: 0,
	verticalBounce: false,
	scrollType: 'horizontal'
	
});
bigView.add(userPics)
userPics.add(userScroll);





