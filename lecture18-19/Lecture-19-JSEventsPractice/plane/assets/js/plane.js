

var planeLeft = 0;
var planeBottom = 0;
var speed = 5;

var movement = {
	left: false,
	right: false,
	top: false,
	bottom: false
};

window.addEventListener('load', function() {
	var plane = document.getElementById('plane');
	var width = window.innerWidth;
	var height = window.innerHeight;
	
	var planeHeight = 75;
	var planeWidth = 101;
	
	var availHeight = height - planeHeight;
	var availWidth = width - planeWidth;
	
	document.addEventListener('keydown', function(event) {
		handleKeyEvent(event.keyCode, true)
	}, false);
	
	document.addEventListener('keyup', function(event) {
		handleKeyEvent(event.keyCode, false)
	}, false);
	
	function updatePlanePosition() {
		var initialBottom = planeBottom;
		var initialLeft = planeLeft;
		
		if (movement.top &&  planeBottom < availHeight) {
			planeBottom += speed;
		}
		
		if (movement.bottom && planeBottom > 0) {
			planeBottom -= speed;
		}
		
		if (movement.left && planeLeft > 0) {
			planeLeft -= speed;
		}
		
		if (movement.right && planeLeft < availWidth) {
			planeLeft += speed;
		}
		
		if (initialLeft != planeLeft) {
			plane.style.left = planeLeft + 'px';			
		}
		
		if (initialBottom != planeBottom) {
			plane.style.bottom = planeBottom + 'px';			
		}
	}
	
	/*setInterval(function() {
		updatePlanePosition()
	}, 1000/30)*/
	
	function updateState() {
		updatePlanePosition();
		requestAnimationFrame(updateState)
	}
	
	function handleKeyEvent(keyCode, pressed) {
		event.preventDefault();
		
		if (event.keyCode == 38) {
			movement.top = pressed;
		}
		
		if (event.keyCode == 40) {
			movement.bottom = pressed;
		}
		
		if (event.keyCode == 37) {
			movement.left = pressed;
		}
		
		if (event.keyCode == 39) {
			movement.right = pressed;
		}
	}
	
	updateState();
	
}, false);