
var obj = document.getElementsByTagName("titulo");

obj.onmouseover = handleMouseOver;
obj.onmouseout = handleMouseOut;

function handleMouseOver(e) {
	e.style.background='black';
	e.style.color='red';
}

function handleMouseOut(e) {
	e.target.style.removeProperty('color');
	e.target.style.removeProperty('background');
}
