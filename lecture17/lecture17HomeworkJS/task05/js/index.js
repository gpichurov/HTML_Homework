function calculation () {
    var rad = document.getElementById("radius").value;
    var result = 4 / 3 * Math.PI * Math.pow(rad, 3);
    document.getElementById("volume").value = result.toFixed(4);
}
