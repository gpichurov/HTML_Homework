var enemyTop = 0;
var enemyLeft = 0;
var enemy = document.getElementById('enemy');
var width = window.innerWidth;
var height = window.innerHeight;
var right = true;

var enemyHeight = 60;
var enemyWidth = 50;

var availHeight = height - enemyHeight;
var availWidth = width - enemyWidth;

function moveEnemyShip () {
    if (enemyLeft == availWidth){
        right = false;
    }
    if (enemyLeft == 0){
        right = true;
    }
    if (right){
        enemyLeft += 2;
        enemyTop += 0.1;
        enemy.style.top = enemyTop + 'px';
        enemy.style.left = enemyLeft + 'px';
    } else {
        enemyLeft -= 2;
        enemyTop += 0.1;
        enemy.style.top = enemyTop + 'px';
        enemy.style.left = enemyLeft + 'px';
    }
}

(function updateState() {
    moveEnemyShip();
    requestAnimationFrame(updateState)
})();