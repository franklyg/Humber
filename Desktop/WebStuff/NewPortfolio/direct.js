function changeNavColor(){
var sideNavObj = document.getElementsByClassName("piece");
for(var i = 0; i < sideNavObj.length; i++){
	
	sideNavObj[i].attachEvent('onmouseover', function(){
		
		this.style.backgroundColor = 'black';//change background color
		alert("Hello World");
	
	});

}
function black(){
	alert("wassup");
}