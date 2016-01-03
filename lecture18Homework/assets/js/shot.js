var shots = -1;
var shotBottom = [];
var shotLeft = [];
document.addEventListener('keydown', function(event) {
    if (event.keyCode == 32){
        shots++;
        var body = document.getElementsByTagName('body');
        var newShot = document.createElement('div');
        body[0].appendChild(newShot);
        newShot.className = 'shot';

        shotBottom[shots] = shipBottom + 55;
        shotLeft[shots] = shipLeft + 24;
        newShot.style.left = shotLeft[shots] + 'px';
        newShot.style.bottom = shotBottom[shots] + 'px';

        function shotMove() {
            shotBottom[shots] += 3;
            newShot.style.bottom = shotBottom[shots] + 'px';
        }

        (function updateState() {
            shotMove();
            requestAnimationFrame(updateState)
        })();
    }
}, false);




