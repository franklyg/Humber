var dataASJSON;

var myResquest=Ti.Network.createHTTPClient({
	onload:function(e){
		//this.respoonse is the HTML site that your //access
		Ti.API.log(this.responseText);
		dataASJSON = JSON.parse(this.responseText);
		Ti.API.log (dataASJSON.shots[0].image_teaser_url);
		img.image = dataASJSON.shots[0].image_url;
		loadThumbs();
	}
 });
myResquest.open("GET","http://api.dribbble.com/shots/popular");
myResquest.send();
// create UI
var win =Ti.UI.createWindow({
	backgroundColor:"#e2e1df"
});

win.open();
var img = Ti.UI.createImageView({
	height:300, width:400
	
});

var scroll = Ti.UI.createScrollView({
	bottom:0, backgroundColor:'red',
	height:200, layout:'horizontal'
})
win.add(scroll)
function loadThumbs () {
  for (var i=0; i<dataASJSON.shots.length; i++){
  		var thumb = Ti.UI.createImageView({
  			image:dataASJSON.shots[i].image_teaser_url,
  			dribbbleImage:dataASJSON.shots[i].image_url,
  			player:dataASJSON.shots[i].player.name
  		})
  		scroll.add(thumb);
  		thumb.addEventListener('click', loadLargeImage)
	}
}

function loadLargeImage(e){
	Ti.API.info(e.source);
	img.image = e.source.dribbbleImage;
	playerName.text = e.source.player;
}

var infoCard = Ti.UI.createView({
	backgroundColor:'white',height:300, width:400, 

})
win.add(infoCard)
win.add(img);
var playerName = Ti.UI.createLabel({
	text:'test', left:0
})
infoCard.add(playerName)
img.addEventListener('swipe',showInfoCard);
function showInfoCard(e){
	infoCard.left= null;
	infoCard.animate({
		left:0, duration:500
	})
}

