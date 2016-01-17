var y = 0;

var body = document.querySelector('#stage');
function move(){
    y++;
    body.style.backgroundPosition = '0px ' + y + 'px';
    requestAnimationFrame(move);
}
requestAnimationFrame(move);





