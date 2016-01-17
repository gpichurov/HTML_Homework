
document.addEventListener('keydown', function(event) {
    if (event.keyCode == 32){

        var body = document.getElementsByTagName('body');
        var newShot = document.createElement('div');
        body[0].appendChild(newShot);
        newShot.className = 'shot';

        var shotBottom = shipBottom + 55;
        var shotLeft = shipLeft + 24;
        newShot.style.left = shotLeft + 'px';
        newShot.style.bottom = shotBottom + 'px';

        function shotMove() {
            shotBottom += 3;
            newShot.style.bottom = shotBottom + 'px';
        }

        (function updateState() {
            shotMove();
            requestAnimationFrame(updateState)
        })();
    }
}, false);




