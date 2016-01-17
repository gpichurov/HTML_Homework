/**
 * 
 */

var a = {
	property: 1
};

var b = a;
b.property = 5;


delete a.property;
console.log(a, b);