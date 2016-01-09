function convert() {
    var input = document.getElementById("conv").value;
    var result;
    var from = document.getElementById("from").value;
    var to = document.getElementById("to").value;
    if (from === to) {
        result = input;
    } else if (from == 1) {
        result = input * 2.20462262;
    } else {
        result = input / 2.20462262;
    }
    document.getElementById("result").innerHTML = result;
}

