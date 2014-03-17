var sideNavObj = document.getElementsByClassName('piece');
var pieceObj = document.getElementsByClassName('border');
for(var i = 0; i < sideNavObj.length; i++){
/*
*== Simple Hover States
*/	
	sideNavObj[i].addEventListener('mouseover', function(){
		
		this.style.backgroundColor = 'black';//change background color
		this.style.color = '#878686';//change font color
		
	
	}, false);
	//For Older browsers
	sideNavObj[i].onmouseover = function (){
		this.style.backgroundColor = '#C6C6C6';//change background color
		this.style.color = '#878686';//change font color
	}
	sideNavObj[i].addEventListener('mouseout', function(){
		
		this.style.backgroundColor = '#A8A8A8';//change background color
		this.style.color = 'black';//change font color

	
	}, false);
	//For Older browsers
	sideNavObj[i].onmouseout = function (){
		this.style.backgroundColor = '#A8A8A8';//change background color
		this.style.color = 'white';//change font color
	}
}
/*
Situation: Array dealing with content for portfolio piece
		   > Send to div
		   > connect within javascript to the display within html	
*/

var myPieces = [

		{"titlePiece": "James Bond Infographic", 
		"imageOne": "MTPNew.jpg", 
		"imageTwo": "MTPNew.jpg" ,
		"desc": "<span class=\"bold\">School Assignment</span>: An infographic inspired by James Band during the release of Sky Fall.", 
		"picDescOne": "", 
		"picDescTwo": "" },

		{"titlePiece": "Humber Grad 2013", 
		"imageOne": "", 
		"imageTwo": "" ,
		"desc": "<span class=\"bold\">School Assignment</span>: App for the Humber Grad Show displaying students work with a straight forward UI design by <a href=\"\">Cassie Kaiser</a> that encouraged a great UX.", 
		"picDescOne": "", 
		"picDescTwo": "" },

		{"titlePiece": "Joel Lazarus", 
		"imageOne": "", 
		"imageTwo": "" ,
		"desc": "<span class=\"bold\">Freelance Project</span>:", 
		"picDescOne": "", 
		"picDescTwo": "" },

		{"titlePiece": "Humber App", 
		"imageOne": "", 
		"imageTwo": "" ,
		"desc": "<span class=\"bold\">School Assignment</span>:", 
		"picDescOne": "", 
		"picDescTwo": "" },

		{"titlePiece": "TDot Skatepark",
		 "imageOne": "",
		 "imageTwo": "" ,
		 "desc": "<span class=\"bold\">Personal Project</span>:",
		 "picDescOne": "", 
		 "picDescTwo": "" }
	]

function loadContent(){
	var div = document.getElementById("pieceOne");
		for (var p = 0; p < myPieces.length; p++){


			sideNavObj[p].onclick=(function(p){
			//alert(myPieces[p].titlePiece);
				return function(){
				document.getElementById("portfolioPieces").innerHTML =
					"<h1>"+myPieces[p].titlePiece+"</h1>"+
					"<p id=\"pieceDescription\">"+myPieces[p].desc+"</p>"+
					"<div id = \"imagePieceInput\">"+
						"<img  src='" +myPieces[p].imageOne+ "' alt=\"\"/>"+
						"<img  src='" +myPieces[p].imageTwo+ "' alt=\"\"/>"+
					"</div>"+
					"<div id =\"dualImgDesc\">"+
						"<img  src='" +myPieces[p].imageTwo+ "' alt=\"\"/>"
				}
			

		})(p);
	}	

}
loadContent();




/*scroll space*/