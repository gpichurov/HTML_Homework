/**
 * 
 */
'use strict';

var test1 = 'test1';

var test = 'test';
var person;


var _someVariable;
var __someOtherVariable;


var a = 5;
var b = 10;

console.log(a + b);

var undefinedVariable;
console.log(typeof undefinedVariable === 'undefined');

if (undefinedVariable) {
	console.log('we have a value')
} else {
	
	console.log('we have don\'t have a value')
}
var a= 10;
console.log(Math.sqrt(25));

/*for (var key in person) {
	console.log(key, ':', person[key]);
}*/


person = {
	name : 'Ivan',
	age: 36,
	sex: 'male',
	walk: function() {
		console.log('I am walking');
	},
	ageing: function()  {
		this.age++;
	},
	sayMyAge: function() {
		console.log(this.age);
	}
};

/*person = new Object();
person.name = 'Ivan';
person.age = 36;
person.sex = 'male';*/

person['test'] = 'test';

var gosho = person;


gosho.age = 5;

console.log(person['age']);

