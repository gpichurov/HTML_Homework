/**
 * 
 */

var daysOfWeek = [
  'Sunday',
  'Monday',
  'Tuesday',
  'Wednesday',
  'Thursday',
  'Friday',
  'Saturday'
];

/*var fn = function() {
	alert('Test');
}*/

var calcTwo = function(a, b) {
	return a + b;
}(2, 2);

function execute(functionVar) {
	functionVar();
}

function getCurrentDayOfWeek() {

	
	var d = new Date();
	
	return function() { 
		return daysOfWeek[d.getDay()] 
	};
}



console.log(getCurrentDayOfWeek()());

function sumOf2elements(a, b) {
	console.log(a, b)
	return a + b;
}


function showMyArgs() {
	console.log(arguments);	
}


function sumMyArgs() {
	var sum = 0;
	
	for (var i = 0; i < arguments.length; i++) {
		var arg = parseFloat(arguments[i]);
		sum += isNaN(arg) ? 0 : arg;
	}
	
	return sum;
}