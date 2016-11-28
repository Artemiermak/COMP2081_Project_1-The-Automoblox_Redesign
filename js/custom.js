// set up window width  = width of left side navigation
function windowWidth(){

	var w = window.innerWidth
	|| document.documentElement.clientWidth
	|| document.body.clientWidth;

	var h = window.innerHeight
	|| document.documentElement.clientHeight
	|| document.body.clientHeight;

	var mainNav = document.getElementById("mainNav");
	console.log(mainNav)
	mainNav.style.height = h + 'px'
	console.log(h)
}
windowWidth()