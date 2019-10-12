//create element
var a = document.createElement('div');
//adding to body
document.body.appendChild(a);
//innerhtml
a.innerHTML = "&#128285;";

//positioning
a.style.position = "fixed";
a.style.bottom = "25px";
a.style.right = "25px";

//appearance
a.style.color = "black";
a.style.width = "50px";
a.style.height = "50px";
a.style.border = "2px solid black";
a.style.borderRadius = "25%";
a.style.textAlign = "center";
a.style.lineHeight = "50px";
a.style.fontSize = "2em";
a.style.fontWeight = "bolder";
a.style.cursor = "pointer";
a.style.display = "none";
a.style.zIndex = "9999";
a.style.background = "#fff";

//make it not selectable
a.setAttribute("onselectstart","return false");

//adding event listener for showing or hiding the div
window.addEventListener("scroll",function() {
	var pageHeight = document.body.offsetHeight;
	var scrollPos = window.pageYOffset;
	if(scrollPos > 690) {
		a.style.display = "";
	}
	else {
		a.style.display = "none";
	}
});

//go to top function
function resetScroller() {
	var currentScrollPos = window.pageYOffset;
	var speed = 20;
	var distance = 1000;
	var scrollAnimator = setTimeout(resetScroller, speed);
	var scrollToY;
	if(currentScrollPos) {
		scrollToY = currentScrollPos - distance;
		window.scrollTo(0, scrollToY);
	}
	else {
		clearTimeout(scrollAnimator);
	}
}

//add event listener to go to top on clicking
a.addEventListener('click', resetScroller);