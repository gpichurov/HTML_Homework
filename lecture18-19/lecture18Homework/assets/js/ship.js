var shipLeft = 0;
var shipBottom = 0;
var speed = 5;

var movement = {
    left: false,
    right: false,
    top: false,
    bottom: false
};

window.addEventListener('load', function() {
    var ship = document.getElementById('ship');
    var width = window.innerWidth;
    var height = window.innerHeight;

    var shipHeight = 60;
    var shipWidth = 50;

    var availHeight = height - shipHeight;
    var availWidth = width - shipWidth;

    document.addEventListener('keydown', function(event) {
        handleKeyEvent(event.keyCode, true)
    }, false);

    document.addEventListener('keyup', function(event) {
        handleKeyEvent(event.keyCode, false)
    }, false);

    function updatePlanePosition() {
        var initialBottom = shipBottom;
        var initialLeft = shipLeft;

        if (movement.top &&  shipBottom < availHeight) {
            shipBottom += speed;
        }

        if (movement.bottom && shipBottom > 0) {
            shipBottom -= speed;
        }

        if (movement.left && shipLeft > 0) {
            shipLeft -= speed;
        }

        if (movement.right && shipLeft < availWidth) {
            shipLeft += speed;
        }

        if (initialLeft != shipLeft) {
            ship.style.left = shipLeft + 'px';
        }

        if (initialBottom != shipBottom) {
            ship.style.bottom = shipBottom + 'px';
        }
    }

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
